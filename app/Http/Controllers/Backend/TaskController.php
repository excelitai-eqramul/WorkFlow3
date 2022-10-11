<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DependencyRange;
use App\Models\Employee;
use App\Models\Feature;
use App\Models\Module;
use App\Models\Project;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Support\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;


class TaskController extends Controller
{

    public function TaskView()
    {
        $employees = Employee::all();
        $projects = Project::all();
        $modules = Module::all();
        $features = Feature::all();
        $departments = Department::all();
        $dependency_range = DependencyRange::all();
        $tasks = Task::with('departmentt.parent')->paginate(6);
        // dd($tasks);
        return view('task.view_task', compact('employees', 'projects', 'departments', 'tasks', 'modules', 'features', 'dependency_range'));
    }

    // Task store
    public function TaskStore(Request $request)
    {


        // for image
        $file = $request->file('image');
        $extension = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(500, 500)->save('images/' . $extension);
        $save_url = 'images/' . $extension;

        $task = new Task;
        $task->employee_id = $request->employee_id;
        $task->project_id = $request->project_id;
        $task->module_id = $request->module_id;
        $task->feature_id = $request->feature_id;
        $task->department_id = $request->department_id;
        $task->name = $request->name;
        $task->parent_id = $request->parent_id;
        $task->start_date = $request->start_date;
        $task->dead_line = $request->dead_line;
        $task->end_date = $request->end_date;
        $task->progressbar = $request->progressbar;
        $task->status = $request->status;
        $task->type = $request->type;
        $task->priority = $request->priority;
        $task->task_dependency = $request->task_dependency;
        $task->dependencyRange_id = $request->dependencyRange_id;
        $task->work_duration = $request->work_duration;
        $task->working_time = $request->working_time;
        $task->tag = $request->tag;
        $task->image = $save_url;
        $task->save();

        return redirect()->back();
    }

    public function TaskEdit($id)
    {

        //$employees = Employee::find($task_edit->employee_id);
        $employees = Employee::all();
        // dd($employees);
        $projects = Project::all();
        $modules = Module::all();
        $features = Feature::all();
        $departments = Department::all();
        $tasks = Task::with('departmentt.parent')->get();
        $dependency_range = DependencyRange::all();
        $task_edit = Task::find($id);
        //dd($tasks);

        return view('task.edit_task', compact('employees', 'projects', 'departments', 'tasks', 'modules', 'features', 'dependency_range', 'task_edit'));
    }


// //Mine
//     public function TaskUpdate(Request $request, $id)
//     {
//         // for image
//         $file = $request->file('image');
//         $extension = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
//         Image::make($file)->resize(500, 500)->save('images/' . $extension);
//         $save_url = 'images/' . $extension;

//         $task = Task::find($id);
//         $task->employee_id = $request->employee_id;
//         $task->project_id = $request->project_id;
//         $task->module_id = $request->module_id;
//         $task->feature_id = $request->feature_id;
//         $task->department_id = $request->department_id;
//         $task->name = $request->name;
//         $task->parent_id = $request->parent_id;
//         $task->start_date = $request->start_date;
//         $task->dead_line = $request->dead_line;
//         $task->end_date = $request->end_date;
//         $task->progressbar = $request->progressbar;
//         $task->status = $request->status;
//         $task->type = $request->type;
//         $task->priority = $request->priority;
//         $task->task_dependency = $request->task_dependency;
//         $task->dependencyRange_id = $request->dependencyRange_id;
//         $task->work_duration = $request->work_duration;
//         $task->working_time = $request->working_time;
//         $task->image = $save_url;
//         $task->tag = $request->tag;
//         $task->save();

//         return redirect()->to('task/show');
//     }




    public function TaskUpdate(Request $request, $id)
    {
        $task = Task::find($id);
        $task->employee_id = $request->input('employee_id');
        $task->project_id = $request->input('project_id');
        $task->module_id = $request->input('module_id');
        $task->feature_id = $request->input('feature_id');
        $task->department_id = $request->input('department_id');
        $task->name = $request->input('name');
        $task->parent_id = $request->input('parent_id');
        $task->start_date = $request->input('start_date');
        $task->dead_line = $request->input('dead_line');
        $task->end_date = $request->input('end_date');
        $task->progressbar = $request->input('progressbar');
        // $task->status = $request->status;
        $task->status = $request->input('status');
        $task->type = $request->input('type');
        $task->priority = $request->input('priority');
        $task->task_dependency = $request->input('task_dependency');
        $task->dependencyRange_id = $request->input('dependencyRange_id');
        $task->work_duration = $request->input('work_duration');
        $task->working_time = $request->input('working_time');
        $task->tag = $request->input('tag');

        if($request->hasfile('image'))
        {
            $destination = 'images/'.$task->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename ='images/'. time().'.'.$extention;
            $file->move('images/', $filename);
            $task->image = $filename;

        }

        $task->update();
        return redirect()->to('task/show');
    }








    // public function TaskUpdate(Request $request){
    //     $task_id = $request->id;
    //     $old_img = $request->old_img;

    //     if ($request->file('image')) {
    //          unlink($old_img);
    //          $image = $request->file('image');
    //          $extension=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    //          Image::make($image)->resize(870,370)->save('images/' . $extension);
    //          $save_url = 'images/' . $extension;

    //          Task::findOrFail($task_id)->update([
    //             'employee_id' => $request->employee_id,
    //             'project_id' => $request->project_id,
    //             'module_id' => $request->module_id,
    //             'feature_id' => $request->feature_id,
    //             'department_id' => $request->department_id,
    //             'name' => $request->name,
    //             'parent_id' => $request->parent_id,
    //             'start_date' => $request->start_date,
    //             'dead_line' => $request->dead_line,
    //             'end_date' => $request->end_date,
    //             'progressbar' => $request->progressbar,
    //             'type' => $request->type,
    //             'priority' => $request->priority,
    //             'task_dependency' => $request->task_dependency,
    //             'dependencyRange_id' => $request->dependencyRange_id,
    //             'work_duration' => $request->work_duration,
    //             'working_time' => $request->working_time,
    //             'image' => $save_url,
    //             'tag' => $request->tag,
    //             'updated_at' => Carbon::now(),
    //          ]);

    //         //  Toastr::success('Slider updated successfully:)','Success');
    //         return Redirect()->route('all.task');
    //     }else {
    //         Task::findOrFail($task_id)->update([
    //             'employee_id' => $request->employee_id,
    //             'project_id' => $request->project_id,
    //             'module_id' => $request->module_id,
    //             'feature_id' => $request->feature_id,
    //             'department_id' => $request->department_id,
    //             'name' => $request->name,
    //             'parent_id' => $request->parent_id,
    //             'start_date' => $request->start_date,
    //             'dead_line' => $request->dead_line,
    //             'end_date' => $request->end_date,
    //             'progressbar' => $request->progressbar,
    //             'type' => $request->type,
    //             'priority' => $request->priority,
    //             'task_dependency' => $request->task_dependency,
    //             'dependencyRange_id' => $request->dependencyRange_id,
    //             'work_duration' => $request->work_duration,
    //             'working_time' => $request->working_time,
    //             'tag' => $request->tag,
    //             'updated_at' => Carbon::now(),
    //          ]);

    //          return Redirect()->route('all.task');

    //         //  Toastr::success('Slider updated successfully:)','Success');
    //         //  return redirect()->to('task/show');
    //     }
    //    }





    public function TaskDelete($id)
    {
        $task_delete = Task::find($id)->delete();
        return redirect()->back();

    }

/////////////////////////////////Task Dependency Start//////////////////////////////////////

    public function taskDependencyRange()
    {
        $dependency_range_data = DependencyRange::paginate(10);

        return view('dependency_range.view_dependency_range', compact('dependency_range_data'));
    }

// TaskDependencyRange store
    public function taskDependencyRangeStore(Request $request)
    {
        $request->validate([

        ]);
        DependencyRange::insert([
            'name' => $request->name,
            'range' => $request->range,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function taskDependencyRangeStoreDelete($id)
    {
        $dependency_range_delete = DependencyRange::find($id)->delete();
        return redirect()->back();
    }

/////////////////////////////////Task Dependency End//////////////////////////////////////

/////////////////////////////////////////Start Specific field search///////////////////////////////////////////////////////////////

    public function SeeEmployeefromTaskTable($id)
    {
        $employee_see = Employee::find($id);
        // $tasks = Task::where('employee_id', $employee_see->id)->first();

        return view('details.see_employee', compact('employee_see'));
    }

    public function SeeProjectfromTaskTable($id)
    {
        $project_see = Project::find($id);
        // $tasks = Task::where('employee_id', $employee_see->id)->first();

        return view('details.see_project', compact('project_see'));
    }

    public function SeeModulefromTaskTable($id)
    {
        $module_see = Module::find($id);
        // $tasks = Task::where('employee_id', $employee_see->id)->first();

        return view('details.see_module', compact('module_see'));
    }

    public function SeeFeaturefromTaskTable($id)
    {
        $feature_see = Feature::find($id);
        // $tasks = Task::where('employee_id', $employee_see->id)->first();

        return view('details.see_feature', compact('feature_see'));
    }

    public function SeeTaskfromTaskTable($id)
    {
        $task_see = Task::find($id);

        return view('details.see_task', compact('task_see'));
    }

/////////////////////////////////////////Start Specific field search///////////////////////////////////////////////////////////////











/////////////////////////////Start Each task's genereral view/////////////////////////////////////////////////////////////////

public function EachTaskDataView($id)
{

$each_task_view=Task::find($id);

    return view('task.each_task_view', compact('each_task_view'));
}



//////////////////////////End Each task's genereral view////////////////////////////////////////////////////////////////////////////////////////////////










}
