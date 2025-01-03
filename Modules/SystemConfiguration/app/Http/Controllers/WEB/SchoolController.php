<?php

namespace Modules\SystemConfiguration\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\SystemConfiguration\DataTables\School\SchoolDataTable;
use Modules\SystemConfiguration\Http\Requests\School\SchoolStoreRequest;
use Modules\SystemConfiguration\Http\Requests\School\SchoolUpdateRequest;
use Modules\SystemConfiguration\Services\School\SchoolService;
use Modules\SystemConfiguration\Services\Upazila\UpazilaService;
use RealRashid\SweetAlert\Facades\Alert;

class SchoolController extends Controller
{
    public function __construct(
        private SchoolService $service,
        private UpazilaService $upazilaService,
    ) {}

    public function all(Request $request): View
    {
        $schools = $this->service->getAll($request);

        return view('systemconfiguration::school.index', compact('schools'));
    }

    public function index(SchoolDataTable $dataTable)
    {
        return $dataTable->render('systemconfiguration::school.index');
    }

    public function create(Request $request): View
    {
        $upazilas = $this->upazilaService->getAll($request);

        return view('systemconfiguration::school.create', compact('upazilas'));
    }

    public function store(SchoolStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->service->create($request->validated());
            DB::commit();

            Alert::toast('School has been create successfully.', 'success');

            return redirect()->route('schools.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', $e->getMessage());

            return redirect()->route('schools.index');
        }
    }

    public function edit(Request $request, int $id)
    {
        $school = $this->service->getById($id);
        $upazilas = $this->upazilaService->getAll($request);

        return view('systemconfiguration::school.edit', compact('school', 'upazilas'));
    }

    public function update(SchoolUpdateRequest $request, int $id)
    {
        DB::beginTransaction();
        try {
            $this->service->update($id, $request->validated());

            DB::commit();
            Alert::toast('School has been update successfully.', 'success');

            return redirect()->route('schools.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', $e->getMessage());

            return redirect()->route('schools.index');
        }
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $this->service->delete($id);

            DB::commit();
            Alert::toast('School has been delete successfully.', 'success');

            return redirect()->route('schools.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Error', $e->getMessage());

            return redirect()->route('schools.index');
        }
    }
}
