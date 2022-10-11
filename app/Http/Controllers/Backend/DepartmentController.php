<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Carbon\Carbon;

class DepartmentController extends Controller
{
    public function DepartmentView(){
        $departments = Department::with('parent')->paginate(10);
        return view('department.view_department',compact('departments'));
    }


// Department store
public function DepartmentStore(Request $request){
    $request->validate([
        'name' => 'required',

    ]);
    Department::insert([
            'name' => $request->name,
            'parent_id' => $request->parent_id,


            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }


   public function DepartmentEdit($id){
    $department_edit = Department::find($id);
    $departments = Department::with('parent')->get();

    return view('department.edit_department',compact('department_edit','departments'));
}


public function DepartmentUpdate(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
    ]);

    Department::where('id', $request->department_id)->update([
        'name' => $request->name,
        'parent_id' => $request->parent_id,
        'created_at' => Carbon::now(),
    ]);

    return redirect()->to('department/show');
}




// Department Delete
   public function DepartmentDelete($id){
    $department_delete = Department::find($id)->delete();
    return redirect()->back();
}













}
