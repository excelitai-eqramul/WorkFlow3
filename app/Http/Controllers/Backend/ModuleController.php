<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Project;

use Carbon\Carbon;



class ModuleController extends Controller
{

    public function ModuleView()
    {
        $modules = Module::paginate(10);
        $projects = Project::all();
        return view('module.view_module', compact('modules', 'projects'));
    }



    //Issue store
    public function ModuleStore(Request $request)
    {

        $request->validate([
            'project_id' => 'required',
            'name' => 'required',


        ]);



        Module::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
    }



    public function ModuleEdit($id){
        $projects = Project::all();
        $module_edit = Module::find($id);
        $modules = Module::with('module_parent')->get();


        return view('module.edit_module',compact('projects','module_edit','modules'));
    }



    public function ModuleUpdate(Request $request)
    {
        $validatedData = $request->validate([
            //'name' => 'required',
        ]);

        Module::where('id', $request->module_id)->update([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->to('module/show');
    }




    public function ModuleDelete($id)
    {
        $module_delete = Module::find($id)->delete();
        return redirect()->back();
    }
}
