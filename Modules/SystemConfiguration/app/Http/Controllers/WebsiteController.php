<?php

namespace Modules\SystemConfiguration\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;
use Modules\SystemConfiguration\Http\Requests\Onboarding\OnboardingStoreRequest;
use Modules\SystemConfiguration\Models\RegistrationForm;
use Modules\SystemConfiguration\Models\School;
use Modules\SystemConfiguration\Models\Syllabus;
use Modules\SystemConfiguration\Services\Onboarding\OnboardingService;
use Modules\SystemConfiguration\Services\School\SchoolService;
use Modules\SystemConfiguration\Services\Upazila\UpazilaService;
use RealRashid\SweetAlert\Facades\Alert;

class WebsiteController extends Controller
{
    public function __construct(
        private OnboardingService $service,
        private SchoolService $schoolService,
        private UpazilaService $upazilaService
    ) {}

    public function index()
    {
        return view('systemconfiguration::welcome', [
            'syllabus' => Syllabus::orderBy('syllabus.id', 'ASC')->get(),
            'schools' => $this->schoolService->get(),
            'upazilas' => $this->upazilaService->get(),
        ]);
    }

    public function store(OnboardingStoreRequest $request)
    {
        $schoolId = intval($request->school_id);
        $classId = intval($request->sclass);
        $schoolIdentifyCode = $request->school_identify_code;

        $school = School::where('id', $schoolId)
            ->where('school_identify_code', $schoolIdentifyCode)
            ->first();

        if (! $school) {
            Alert::error('Error', 'আপনার প্রদানকৃত স্কুল আইডি অথবা স্কুল শনাক্ত কোড সঠিক নয়।');

            return back();
        }

        $maxStudents = env('PER_SCHOOL_LIMIT', 5);
        $existingStudentCount = RegistrationForm::where('school_id', $schoolId)
            ->where('school_identify_code', $schoolIdentifyCode)
            ->where('sclass', $classId)
            ->count();

        if ($existingStudentCount >= $maxStudents) {
            Alert::error('Error', 'এই স্কুলের এই ক্লাসে ইতিমধ্যেই সর্বোচ্চ ' . $maxStudents . ' জন শিক্ষার্থী নিবন্ধিত হয়েছে।');

            return back();
        }

        DB::beginTransaction();
        try {
            $imageName = 'profile.png';

            if ($request->hasFile('image')) {
                $image = $request->file('image');

                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('uploads/images/students/');
                Image::make($image)->resize(250, 250)->save($imagePath . $imageName);
            }

            $data = $request->all();
            $data['image'] = $imageName;

            $classPrefix = (int) $request->sclass * 1000; // Class prefix, e.g., 1 -> 10000, 2 -> 20000
            $lastRoll = RegistrationForm::where('sclass', $request->sclass)
                ->max('roll');

            $data['roll'] = $lastRoll ? $lastRoll + 1 : $classPrefix + 1;
            $lastFormNo = RegistrationForm::max('form_no'); // Get the highest form number
            $formNo = $lastFormNo ? $lastFormNo + 1 : 1; // Ensure it starts from 0 if no form exists
            $data['form_no'] = str_pad($formNo, 4, '0', STR_PAD_LEFT); // Pad with leading zeros to make it 4 digits
            $data = $this->service->create($data);

            DB::commit();

            // Show success message
            Alert::toast('Onboarding has been created successfully.', 'success');

            return redirect('/admission/' . $data->id);
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', $e->getMessage());

            return back();
        }
    }

    public function admissionCard(int $id)
    {
        $data = RegistrationForm::with('school', 'upazila')->where('id', (int) $id)->first();

        if (! $data) {
            // Show error message
            Alert::error('Error', 'Student Not Found');

            return redirect('/');
        }

        return view('systemconfiguration::admit-card', compact('data'));
    }

    public function getSchoolsByUpazila($upazila_id)
    {
        $schools = School::where('upazila_id', $upazila_id)->get();

        // Return schools as JSON
        return response()->json($schools);
    }
}
