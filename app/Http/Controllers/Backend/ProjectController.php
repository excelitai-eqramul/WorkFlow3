<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Progressbar;
use App\Models\Project;
use App\Models\Projects_date_history;
use App\Models\Project_budget_history;
use Illuminate\Http\Request;
use Illuminate\Support\File;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{

    public function ProjectView()
    {
        $projects = Project::paginate(5);
        $employees = Employee::all();
        $clients = Client::all();
        $departments = Department::all();

        return view('project.add_project', compact('projects', 'employees', 'clients', 'departments'));
    }


////////////////////Project table data Inserting start/////////////////////////////////////////////////

    public function store(Request $request)
    {


        $project = new Project();

        if($request->upload_image){
            $imageName1 = time().'.'.$request->upload_image->extension();
             $request->upload_image->move(public_path('images'), $imageName1);
          $project->upload_image = $imageName1;
      }



        if($request->upload_document){
              $imageName = time().'.'.$request->upload_document->extension();
               $request->upload_document->move(public_path('images'), $imageName);
            $project->upload_document = $imageName;
        }


        $project->project_id = $request->project_id;
        $project->name = $request->name;
        $project->parent_id = $request->parent_id;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->department_id = $request->department_id;
        $project->start_date = $request->start_date;
        $project->deadline = $request->deadline;
        $project->employee_id = $request->employee_id;
        $project->notification = $request->notification;
        //$project->upload_image = $request->upload_image;
        //$project->upload_document = $request->upload_document;
        $project->priority = $request->priority;
        $project->status = $request->status;
        $project->budget = $request->budget;
        $project->client_id = $request->client_id;
        // $project->upload_image = $imageName1 ;
        // $project->upload_document =$imageName;
        $project->save();

        foreach ($request->progressbar_name as $key => $progessbar) {

            $expenseItemData = array(
                'project_id' => $project->id,
                'progressbar_name' => $progessbar['progressbar_name'],
                'percentage' => $progessbar['percentage'],
                'date_from' => $progessbar['date_from'],
                'date_to' => $progessbar['date_to'],
                'time_from' => $progessbar['time_from'],
                'time_to' => $progessbar['time_to'],
                'estimate' => $progessbar['estimate'],
            );

            $bfdgb = Progressbar::create($expenseItemData);
        }

        $data = Projects_date_history::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
        ]);

        $data = Project_budget_history::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'budget' => $request->budget,
        ]);

        return redirect()->to('project_data/show');
    }

////////////////////Project table data Inserting End/////////////////////////////////////////////////

    public function ProjectDataView()
    {
        $projects = Project::paginate(4);
        return view('project.view_projectData', compact('projects'));
    }

    public function EachProjectDataView($id)
    {
        $each_project_data_view = Project::find($id);
        return view('project.each_project_view', compact('each_project_data_view'));
    }

////////////////////Project table data update start/////////////////////////////////////////////////
    public function UpdateProjectData(Request $request, $id)
    {



// for image
        // $file = $request->file('upload_image');
        // $extension = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        // Image::make($file)->resize(500, 500)->save('images/' . $extension);
        // $save_url1 = 'images/' . $extension;

        // $file = $request->file('upload_document');
        // $extension = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        // Image::make($file)->resize(500, 500)->save('images/' . $extension);
        // $save_url2 = 'images/' . $extension;





        $project = Project::find($id);


        if($request->upload_image){
            $imageName1 = time().'.'.$request->upload_image->extension();
             $request->upload_image->move(public_path('images'), $imageName1);
          $project->upload_image = $imageName1;
      }



        if($request->upload_document){
              $imageName = time().'.'.$request->upload_document->extension();
               $request->upload_document->move(public_path('images'), $imageName);
            $project->upload_document = $imageName;
        }




        $project->project_id = $request->project_id;
        $project->name = $request->name;
        $project->parent_id = $request->parent_id;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->department_id = $request->department_id;
        $project->start_date = $request->start_date;
        $project->deadline = $request->deadline;
        $project->employee_id = $request->employee_id;
        $project->notification = $request->notification;
        //$project->upload_image = $request->upload_image;
        //$project->upload_document = $request->upload_document;
        $file = $request->file('upload_image');

        $project->priority = $request->priority;
        $project->status = $request->status;
        $project->budget = $request->budget;
        $project->client_id = $request->client_id;
        // $project->upload_image = $save_url1;
        // $project->upload_document = $save_url2;
        $project->save();
        //dd($project);

        foreach ($request->progressbar_name as $key => $progessbar) {

            $expenseItemData = array(
                'project_id' => $project->id,
                'progressbar_name' => $progessbar['progressbar_name'],
                'percentage' => $progessbar['percentage'],
                'date_from' => $progessbar['date_from'],
                'date_to' => $progessbar['date_to'],
                'time_from' => $progessbar['time_from'],
                'time_to' => $progessbar['time_to'],
                'estimate' => $progessbar['estimate'],
            );

            $bfdgb = Progressbar::create($expenseItemData);
        }

// Insertting data in the Projects_date_history table
        $data = Projects_date_history::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
        ]);

// Insertting data in the Project_budget_history table
        $data = Project_budget_history::insert([
            'project_id' => $request->project_id,
            'name' => $request->name,
            'budget' => $request->budget,
        ]);

        return redirect()->to('project_data/show');
    }

///////////////////////////////////Project table data update End/////////////////////////////////////////////////////////////

////////////////////////////////////////////////Start Dashboard_each_project Show & Edit////////////////////////////////////////////////////////

    public function Dashboard_each_projectShow($id)
    {$projects = Project::all();
        $each_project_data_view_forDashboard = Project::find($id);
        return view('project.dashboard_each_project_view', compact('projects', 'each_project_data_view_forDashboard'));
    }

    public function Dashboard_each_projectEdit($id)
    {
        $project_edit = Project::find($id);
        $projects = Project::all();
        $employees = Employee::all();
        $clients = Client::all();
        $departments = Department::all();
        return view('project.edit_projectData', compact('projects', 'project_edit', 'employees', 'clients', 'departments'));
    }

////////////////////////////////////////////////End Dashboard_each_project Show & Edit////////////////////////////////////////////////////////

    // All_project_dashboard_View
    public function All_project_dashboard_View()
    {
        // $progress=Progressbar::where('percentage', 0)->count();
        // dd($progress);
        // $projects = Project::withSum('progressbar','percentage')->withCount('progressbar')->get();

        $projects = Project::withSum('progressbar', 'percentage')->withCount(['progressbar as pcount' => function ($query) {
            $query->where('percentage', '!=', 0);
        }])->get();

        // dd($percentage);

        $progressbar = Progressbar::all();

        $clients = Client::all();
        $departments = Department::all();

        return view('project.all_project_dashboard', compact('projects', 'progressbar', 'clients', 'departments'));
    }

    public function EditProjectData($id)
    {
        $project_edit = Project::find($id);
        $projects = Project::all();
        $employees = Employee::all();
        $clients = Client::all();
        $departments = Department::all();
        return view('project.edit_projectData', compact('projects', 'project_edit', 'employees', 'clients', 'departments'));
    }

    // All_project_dashboard_View
    public function ProjectEstimateDateHistory_View()
    {
        $projects = Project::all();
        $progressbar = Progressbar::all();

        $clients = Client::all();
        $departments = Department::all();

        return view('project.project_estimate_dateHistory.estimate_dateHistory', compact('projects', 'progressbar', 'clients', 'departments'));
    }

    public function ProjectDelete($id)
    {
        $project_delete = Project::find($id)->delete();
        return redirect()->back();
    }
}
