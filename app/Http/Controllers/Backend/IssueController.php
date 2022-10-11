<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;

use App\Models\Project;
use App\Models\Module;
use App\Models\Feature;
use App\Models\Issue;
use App\Models\Task;

use Facade\FlareClient\Http\Response;

// use Illuminate\Support\File;
use Intervention\Image\Facades\Image;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;



class IssueController extends Controller
{

    public function IssueView()
    {

        $companies = Company::all();
        $employees = Employee::all();
        $departments = Department::all();
        $projects = Project::all();
        $modules = Module::all();
        $features = Feature::all();
        $tasks = Task::with('departmentt.parent')->get();
        $issues = Issue::paginate(10);

        return view('issue.view_issue', compact('companies', 'employees', 'departments', 'projects', 'tasks', 'modules', 'features', 'issues'));
    }



    //Project store
    public function store(Request $request)
    {

        $request->validate([]);



        // for image
        $file = $request->file('image');
        $extension = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(500, 500)->save('images/' . $extension);
        $save_url = 'images/' . $extension;

        $issue = new Issue();
        $issue->company_id = $request->company_id;
        $issue->project_id = $request->project_id;
        $issue->module_id = $request->module_id;
        $issue->feature_id = $request->feature_id;
        $issue->task_id = $request->task_id;
        $issue->name = $request->name;
        $issue->parent_id = $request->parent_id;
        $issue->description = $request->description;
        //$project->image = $request->image;
        $issue->start_date = $request->start_date;
        $issue->end_date = $request->end_date;
        $issue->estimate_date = $request->estimate_date;
        $issue->estimate_time = $request->estimate_time;
        $issue->created_by = $request->created_by;
        $issue->updated_by = $request->updated_by;
        $issue->resolved_by = $request->resolved_by;
        $issue->identify_by = $request->identify_by;
        $issue->image =  $save_url;
        $issue->save();

        return redirect()->to('issue/show');
    }




    public function IssueEdit($id){
        $issue_edit = Issue::find($id);

        $companies = Company::all();
        $employees = Employee::all();
        $departments = Department::all();
        $projects = Project::all();
        $modules = Module::all();
        $features = Feature::all();
        $tasks = Task::with('departmentt.parent')->get();
        $issues = Issue::all();



        return view('issue.edit_issue',compact('issue_edit','companies', 'employees', 'departments', 'projects', 'modules', 'features', 'tasks','issues'));
    }










    // $issue->company_id = $request->company_id;
    // $issue->project_id = $request->project_id;
    // $issue->module_id = $request->module_id;
    // $issue->feature_id = $request->feature_id;
    // $issue->task_id = $request->task_id;
    // $issue->name = $request->name;
    // $issue->parent_id = $request->parent_id;
    // $issue->description = $request->description;
    // //$project->image = $request->image;
    // $issue->start_date = $request->start_date;
    // $issue->end_date = $request->end_date;
    // $issue->estimate_date = $request->estimate_date;
    // $issue->estimate_time = $request->estimate_time;
    // $issue->created_by = $request->created_by;
    // $issue->updated_by = $request->updated_by;
    // $issue->resolved_by = $request->resolved_by;
    // $issue->identify_by = $request->identify_by;








    public function IssueUpdate(Request $request, $id)
    {
        $issue = Issue::find($id);
        $issue->company_id = $request->input('company_id');
        $issue->project_id = $request->input('project_id');
        $issue->module_id = $request->input('module_id');
        $issue->feature_id = $request->input('feature_id');
        $issue->task_id = $request->input('task_id');
        $issue->name = $request->input('name');
        $issue->parent_id = $request->input('parent_id');
        $issue->description = $request->input('description');

        $issue->start_date = $request->input('start_date');
        $issue->end_date = $request->input('end_date');
        $issue->estimate_date = $request->input('estimate_date');
        $issue->estimate_time = $request->input('estimate_time');

        $issue->created_by = $request->input('created_by');
        $issue->updated_by = $request->input('updated_by');
        $issue->resolved_by = $request->input('resolved_by');
        $issue->identify_by = $request->input('identify_by');


        if($request->hasfile('image'))
        {
            $destination = 'uploads/issue/'.$issue->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/issue/', $filename);
            $issue->image = $filename;
        }
        $issue->update();
        return redirect()->to('issue/show');
    }



    public function IssueDelete($id)
    {
        $issue_delete = Issue::find($id)->delete();
        return redirect()->back();
    }
}
