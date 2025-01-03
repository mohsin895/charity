<?php

namespace Modules\SystemConfiguration\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\SystemConfiguration\Models\Syllabus;
use RealRashid\SweetAlert\Facades\Alert;

class SyllabusController extends Controller
{
    public function index()
    {
        $syllabus = Syllabus::orderBy('syllabus.id', 'ASC')
            ->get();

        return view('systemconfiguration::syllabus.syllabus-list', compact('syllabus'));
    }

    public function create()
    {
        return view('systemconfiguration::syllabus.syllabus-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:191',
            'description' => 'nullable|string',
            'sclass' => 'required',
            'file' => 'required|mimes:doc,pdf,docx,zip',
        ]);

        $syllabus = new Syllabus;
        $syllabus->title = $request->title;
        $syllabus->description = $request->description;
        $syllabus->sclass = $request->sclass;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(base_path('public/uploads/files/syllabus/'), $file_name);
            $syllabus->file = $file_name;
        }

        $syllabus->save();

        Alert::toast('Syllabus has been create!', 'success');

        return redirect('syllabus');
    }

    public function show($id)
    {
        $syllabus = Syllabus::select('*', 'syllabus.id AS id')
            ->where('syllabus.id', $id)
            ->first();

        return view('systemconfiguration::syllabus.syllabus-view', compact('syllabus'));
    }

    public function edit($id)
    {
        $syllabus = Syllabus::where('id', $id)->first();

        return view('systemconfiguration::syllabus.syllabus-edit', compact('syllabus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:191',
            'description' => 'nullable|string',
            'sclass' => 'required',
            'file' => 'nullable|mimes:doc,pdf,docx,zip',
        ]);

        $syllabus = Syllabus::find($id);
        $syllabus->title = $request->title;
        $syllabus->description = $request->description;
        $syllabus->sclass = $request->sclass;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(base_path('public/uploads/files/syllabus/'), $file_name);
            $syllabus->file = $file_name;
        }

        $syllabus->save();

        Alert::toast('Syllabus has been updated!', 'success');

        return redirect('syllabus');
    }

    public function destroy($id)
    {
        $syllabus = Syllabus::find($id);
        $syllabus->delete();

        Alert::toast('Syllabus has been deleted!', 'success');

        return redirect('syllabus');
    }
}
