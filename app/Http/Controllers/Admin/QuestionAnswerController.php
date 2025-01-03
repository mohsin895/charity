<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuestionAnswerController extends Controller
{
    public function index(){
        $data['title'] = "Add Question & Answer";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Question & Answer";
        $data['addTitle'] = "Add New Question & Answer";
        $data['editTitle'] = " Edit Question & Answer";
        $data['dataList']  = QuestionAnswer::OrderBy('id','desc')->get();
       return view('backend.qa.index', $data);
   }

   public function addOrUpdateInfo(Request $request, $id = null)
   {
       // Validate the request
       $validatedData = $request->validate([
           'question' => 'required',
           'answer' => 'required',
          
       ]);
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           $dataInfo = $id ? QuestionAnswer::find($id) : new QuestionAnswer();
   
           if (!$dataInfo) {
               return back()->with('error', 'Data not found.');
           }
   
           $dataInfo->fill($validatedData);
   
           // Save to database
           if ($dataInfo->save()) {
               DB::commit();
               return back()->with('success', $id ? 'Data updated successfully.' : 'Data added successfully.');
           } else {
               DB::rollBack();
               return back()->with('error', 'Failed to save Data. Please try again.');
           }
       } catch (\Exception $err) {
           DB::rollBack();
           return back()->with('error', 'Something went wrong. Please try again.');
       }
   }

   public function dataInfoDelete(Request $request, $id =null){
       $dataInfo = QuestionAnswer::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Data Delete successfully.');
   }
}
