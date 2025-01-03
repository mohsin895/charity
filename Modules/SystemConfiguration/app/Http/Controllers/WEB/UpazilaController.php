<?php

namespace Modules\SystemConfiguration\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\SystemConfiguration\DataTables\Upazila\UpazilaDataTable;
use Modules\SystemConfiguration\Http\Requests\Upazila\UpazilaStoreRequest;
use Modules\SystemConfiguration\Http\Requests\Upazila\UpazilaUpdateRequest;
use Modules\SystemConfiguration\Services\Upazila\UpazilaService;
use RealRashid\SweetAlert\Facades\Alert;

class UpazilaController extends Controller
{
    public function __construct(
        private UpazilaService $service
    ) {}

    public function all(Request $request): View
    {
        $upazilas = $this->service->getAll($request);

        return view('systemconfiguration::upazila.index', compact('upazilas'));
    }

    public function index(UpazilaDataTable $dataTable)
    {
        return $dataTable->render('systemconfiguration::upazila.index');
    }

    public function create(): View
    {
        return view('systemconfiguration::upazila.create');
    }

    public function store(UpazilaStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->service->create($request->validated());
            DB::commit();

            Alert::toast('Upazila has been create successfully.', 'success');

            return redirect()->route('upazilas.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', $e->getMessage());

            return redirect()->route('upazilas.index');
        }
    }

    public function edit(int $id)
    {
        $upazila = $this->service->getById($id);

        return view('systemconfiguration::upazila.edit', compact('upazila'));
    }

    public function update(UpazilaUpdateRequest $request, int $id)
    {
        DB::beginTransaction();
        try {
            $this->service->update($id, $request->validated());

            DB::commit();
            Alert::toast('Upazila has been update successfully.', 'success');

            return redirect()->route('upazilas.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', $e->getMessage());

            return redirect()->route('upazilas.index');
        }
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $this->service->delete($id);

            DB::commit();
            Alert::toast('Upazila has been delete successfully.', 'success');

            return redirect()->route('upazilas.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Error', $e->getMessage());

            return redirect()->route('upazilas.index');
        }
    }
}
