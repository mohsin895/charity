<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index(){
        $data['title'] = "Add Member";
        $data['dashboard'] ="Dashboard";
        $data['subTitle'] ="Member";
        $data['addTitle'] = "Add New Member";
        $data['editTitle'] = " Edit Member";
        $data['dataList']  = Member::OrderBy('id','desc')->get();
       return view('backend.member.index', $data);
   }

   public function addOrUpdateInfo(MemberRequest $request, $id = null)
   {
       
   
       DB::beginTransaction();
       try {
           // Find existing slider or create a new one
           $validatedData = $request->validated();
           $dataInfo = $id ? Member::find($id) : new Member();
   
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
               return back()->with('error', 'Failed to save Slider. Please try again.');
           }
       } catch (\Exception $err) {
           DB::rollBack();
           return back()->with('error', 'Something went wrong. Please try again.');
       }
   }
   public function updateMemberType(Request $request, $id)
   {
       $request->validate([
           'member_type' => 'required|in:1,2,3,4,5', // Validate allowed values
       ]);
   
       $member = Member::findOrFail($id); // Find the member by ID
       $member->update([
           'member_type' => $request->member_type,
       ]);
   
       return response()->json(['message' => 'Member type updated successfully!']);
   }
   
   public function dataInfoDelete(Request $request, $id =null){
       $dataInfo = Member::find($id);
       $dataInfo->delete();
       return back()->with('success', 'Data Delete successfully.');
   }
}
