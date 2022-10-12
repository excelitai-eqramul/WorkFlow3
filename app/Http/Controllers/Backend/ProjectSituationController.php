<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
use App\Models\Progressbar;
use App\Models\Projects_date_history;

class ProjectSituationController extends Controller
{



 // Running Project
 public function RunningProjectView()
 {

     $projects = Project::withSum('progressbar','percentage')->withCount(['progressbar as pcount'=> function($query){
         $query->where('percentage', '!=', 0);
         }])->get();

         $progressbar = Progressbar::all();

         $clients = Client::all();
         $departments = Department::all();

     return view('project_situation.running_project', compact('projects','progressbar','clients','departments'));
 }






    // Completed Project
    public function CompletedProjectView()
    {

        $projects = Project::withSum('progressbar','percentage')->withCount(['progressbar as pcount'=> function($query){
            $query->where('percentage', '!=', 0);
            }])->get();

            $progressbar = Progressbar::all();

            $clients = Client::all();
            $departments = Department::all();

        return view('project_situation.completed_project', compact('projects','progressbar','clients','departments'));
    }





 //Delivered Project
 public function DeliveredProjectView()
 {

     $projects = Project::withSum('progressbar','percentage')->withCount(['progressbar as pcount'=> function($query){
         $query->where('percentage', '!=', 0);
         }])->get();

         $progressbar = Progressbar::all();

         $clients = Client::all();
         $departments = Department::all();

     return view('project_situation.delivered_project', compact('projects','progressbar','clients','departments'));
 }




 //Incomplete Project
 public function IncompleteProjectView()
 {

     $projects = Project::withSum('progressbar','percentage')->withCount(['progressbar as pcount'=> function($query){
         $query->where('percentage', '!=', 0);
         }])->get();

         $progressbar = Progressbar::all();

         $clients = Client::all();
         $departments = Department::all();

     return view('project_situation.incomplete_project', compact('projects','progressbar','clients','departments'));
 }





 //Upcoming Project
 public function UpcomingProjectView()
 {

     $projects = Project::withSum('progressbar','percentage')->withCount(['progressbar as pcount'=> function($query){
         $query->where('percentage', '!=', 0);
         }])->get();

         $progressbar = Progressbar::all();

         $clients = Client::all();
         $departments = Department::all();

     return view('project_situation.upcoming_project', compact('projects','progressbar','clients','departments'));
 }




























}
