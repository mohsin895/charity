<?php

namespace Modules\SystemConfiguration\Http\Controllers\WEB;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Modules\SystemConfiguration\Services\School\SchoolService;
use Modules\SystemConfiguration\Services\Upazila\UpazilaService;
use Modules\SystemConfiguration\Services\Onboarding\OnboardingService;
use Modules\SystemConfiguration\DataTables\Onboarding\OnboardingDataTable;
use Modules\SystemConfiguration\Http\Requests\Onboarding\OnboardingStoreRequest;
use Modules\SystemConfiguration\Http\Requests\Onboarding\OnboardingUpdateRequest;

class OnboardingController extends Controller
{
    public function __construct(
        private OnboardingService $service,
        private SchoolService $schoolService,
        private UpazilaService $upazilaService,
    ) {}

    public function index(OnboardingDataTable $dataTable)
    {
        return $dataTable->render('systemconfiguration::onboarding.index');
    }

    public function create(): View
    {
        return view('systemconfiguration::onboarding.create');
    }

    public function store(OnboardingStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->service->create($request->all());
            DB::commit();

            Alert::toast('Onboarding has been create successfully.', 'success');

            return back();
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', $e->getMessage());

            return back();
        }
    }

    public function edit(int $id)
    {
        $onboarding = $this->service->getById($id);
        $schools = $this->schoolService->get();
        $upazilas = $this->upazilaService->get();

        return view('systemconfiguration::onboarding.edit', compact('onboarding', 'schools', 'upazilas'));
    }

    public function update(OnboardingUpdateRequest $request, int $id)
    {
        DB::beginTransaction();
        try {
            $this->service->update($id, $request->all());

            DB::commit();
            Alert::toast('Onboarding has been update successfully.', 'success');

            return redirect()->route('onboardings.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', $e->getMessage());

            return redirect()->route('onboardings.index');
        }
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $this->service->delete($id);

            DB::commit();
            Alert::toast('Onboarding has been delete successfully.', 'success');

            return redirect()->route('onboardings.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Error', $e->getMessage());

            return redirect()->route('onboardings.index');
        }
    }
}
