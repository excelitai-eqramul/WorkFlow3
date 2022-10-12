<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\TaskController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\Employee_TaskController;
use App\Http\Controllers\Backend\Issue_TeamController;
use App\Http\Controllers\Backend\DetailsController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\Sub_DepartmentController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\IssueController;
use App\Http\Controllers\Backend\TaskIssueController;
use App\Http\Controllers\Backend\ProgressbarController;
use App\Http\Controllers\Backend\ProjectSituationController;
use App\Http\Controllers\MailController;





Route::get('/', function () {
    return view('index');
});




//Company routes
Route::get('company/show', [CompanyController::class, 'CompanyView'])->name('all.company');
Route::post('company/store', [CompanyController::class, 'CompanyStore'])->name('add.company');
// Route::get('client/edit/{id}', [ClientController::class, 'ClientEdit'])->name('edit.client');
// Route::post('client/update', [ClientController::class, 'ClientUpdate'])->name('update.client');
Route::get('company/delete/{id}', [CompanyController::class, 'CompanyDelete'])->name('delete.company');




// Employee routes
Route::get('employee/show', [EmployeeController::class, 'EmployeeView'])->name('all.employee');
Route::post('employee/store', [EmployeeController::class, 'EmployeeStore'])->name('add.employee');
Route::get('employee/edit/{id}', [EmployeeController::class, 'EmployeeEdit'])->name('edit.employee');
Route::post('employee/update', [EmployeeController::class, 'EmployeeUpdate'])->name('update.employee');
Route::get('employee/delete/{id}', [EmployeeController::class, 'EmployeeDelete'])->name('delete.employee');
Route::get('employeeWise_task/show/{id}', [EmployeeController::class, 'EmployeeWiseTaskView'])->name('employeeWise_task_show');



// Client routes
Route::get('client/show', [ClientController::class, 'ClientView'])->name('all.client');
Route::post('client/store', [ClientController::class, 'ClientViewStore'])->name('add.client');
Route::get('client/edit/{id}', [ClientController::class, 'ClientEdit'])->name('edit.client');
Route::post('client/update', [ClientController::class, 'ClientUpdate'])->name('update.client');
Route::get('client/delete/{id}', [ClientController::class, 'ClientDelete'])->name('delete.client');


// Task routes
Route::get('task/show', [TaskController::class, 'TaskView'])->name('all.task');
Route::post('task/store', [TaskController::class, 'TaskStore'])->name('add.task');
 Route::get('task/edit/{id}', [TaskController::class, 'TaskEdit'])->name('edit.task');
Route::post('task/update/{id}', [TaskController::class, 'TaskUpdate'])->name('update.task');
Route::get('task/delete/{id}', [TaskController::class, 'TaskDelete'])->name('delete.task');




////////////////////////////////////Visit specific data from task table Start////////////////////////////////////////////////////
Route::get('employee_search/show/{id}', [TaskController::class, 'SeeEmployeefromTaskTable'])->name('all.employee_search');
Route::get('project_search/show/{id}', [TaskController::class, 'SeeProjectfromTaskTable'])->name('all.project_search');
Route::get('module_search/show/{id}', [TaskController::class, 'SeeModulefromTaskTable'])->name('all.module_search');
Route::get('feature_search/show/{id}', [TaskController::class, 'SeeFeaturefromTaskTable'])->name('all.feature_search');
Route::get('task_search/show/{id}', [TaskController::class, 'SeeTaskfromTaskTable'])->name('all.task_search');
Route::get('each_task_data/show/{id}', [TaskController::class, 'EachTaskDataView'])->name('each.task_data_view');




////////////////////////////////////End Visit specific data from task table////////////////////////////////////////////////////



///Route::get('phones/phones', [ProjectController::class, 'phones'])->name('all.issue');


//Project routes
Route::get('project/show', [ProjectController::class, 'ProjectView'])->name('all.project');
Route::post('project/store', [ProjectController::class, 'store'])->name('add.project');
Route::get('project_data/show', [ProjectController::class, 'ProjectDataView'])->name('all.project_data');
Route::get('project_data/edit/{id}', [ProjectController::class, 'EditProjectData'])->name('edit.project_data');
Route::post('project_data/update/{id}', [ProjectController::class, 'UpdateProjectData'])->name('update.project_data');
Route::get('each_project_data/show/{id}', [ProjectController::class, 'EachProjectDataView'])->name('each.project_data_view');
Route::get('project/delete/{id}', [ProjectController::class, 'ProjectDelete'])->name('delete.project');



//All project dashboard route
Route::get('all_project_dashboard/show', [ProjectController::class, 'All_project_dashboard_View'])->name('all_project_dashboard');
Route::get('dashboard_each_project/show/{id}', [ProjectController::class, 'Dashboard_each_projectShow'])->name('dashboard_each.project_data_view');
Route::get('dashboard_each_project/edit/{id}', [ProjectController::class, 'Dashboard_each_projectEdit'])->name('dashboard_each.project_data_edit');



//Project's Estimate Date History
Route::get('project_estimate_dateHistory/show', [ProjectController::class, 'ProjectEstimateDateHistory_View'])->name('project_esti.date_history');
// Route::get('project_estimate_dateHistory/show', [ProjectController::class, 'ProjectEstimateDateHistory_Store'])->name('project_esti.date_history');



// Team routes
Route::get('team/show', [TeamController::class, 'TeamView'])->name('all.team');
Route::post('team/store', [TeamController::class, 'TeamStore'])->name('add.team');
Route::get('team/delete/{id}', [TeamController::class, 'TeamDelete'])->name('delete.team');



// Employee Wise data show page
// Route::get('details/show', [DetailsController::class, 'DetailsView'])->name('all.details');
Route::post('details/store', [DetailsController::class, 'DetailsStore'])->name('add.details');


// // Project Wise data show page
// Route::get('details/show', [DetailsController::class, 'ProjectWiseView'])->name('all.details');
Route::post('project_details/store', [DetailsController::class, 'ProjectWiseInput'])->name('add.project_details');



//Department routes
Route::get('department/show', [DepartmentController::class, 'DepartmentView'])->name('all.department');
Route::post('department/store', [DepartmentController::class, 'DepartmentStore'])->name('add.department');
Route::get('department/edit/{id}', [DepartmentController::class, 'DepartmentEdit'])->name('edit.department');
Route::post('department/update', [DepartmentController::class, 'DepartmentUpdate'])->name('update.department');
Route::get('department/delete/{id}', [DepartmentController::class, 'DepartmentDelete'])->name('delete.department');



//SubDepartment routes
Route::get('sub_department/show', [Sub_DepartmentController::class, 'Sub_DepartmentView'])->name('all.sub_department');
Route::post('sub_department/store', [Sub_DepartmentController::class, 'Sub_DepartmentStore'])->name('add.sub_department');
Route::get('sub_department/delete/{id}', [Sub_DepartmentController::class, 'Sub_DepartmentDelete'])->name('delete.sub_department');



//Module routes
Route::get('module/show', [ModuleController::class, 'ModuleView'])->name('all.module');
Route::post('module/store', [ModuleController::class, 'ModuleStore'])->name('add.module');
Route::get('module/edit/{id}', [ModuleController::class, 'ModuleEdit'])->name('edit.module');
Route::post('module/update', [ModuleController::class, 'ModuleUpdate'])->name('update.module');

Route::get('module/delete/{id}', [ModuleController::class, 'ModuleDelete'])->name('delete.module');



//Features routes
Route::get('feature/show', [FeatureController::class, 'FeatureView'])->name('all.feature');
Route::post('feature/store', [FeatureController::class, 'FeatureStore'])->name('add.feature');
Route::get('feature/delete/{id}', [FeatureController::class, 'FeatureDelete'])->name('delete.feature');
Route::get('feature/edit/{id}', [FeatureController::class, 'FeatureEdit'])->name('edit.feature');
Route::post('feature/update', [FeatureController::class, 'FeatureUpdate'])->name('update.feature');

Route::get('/feature/get_module/{id}', [FeatureController::class, 'getModules'])->name('modules.get');
Route::get('/feature/get_module_edit/{id}', [FeatureController::class, 'getModulesEdit'])->name('modules.get');

Route::get('/feature/module/ajax/{project_id}', [FeatureController::class, 'GetFeature'])->name('modules.get');



//Issue routes
Route::get('issue/show', [IssueController::class, 'IssueView'])->name('all.issue');
Route::post('issue/store', [IssueController::class, 'store'])->name('add.issue');
Route::get('issue/edit/{id}', [IssueController::class, 'IssueEdit'])->name('edit.issue');
Route::post('issue/update/{id}', [IssueController::class, 'IssueUpdate'])->name('update.issue');
Route::get('issue/delete/{id}', [IssueController::class, 'IssueDelete'])->name('delete.issue');





//Progressbar routes
 Route::post('progressbar/store', [ProgressbarController::class, 'ProgressbarStore'])->name('add.progressbar');



//Project Situation
Route::get('running_project/show', [ProjectSituationController::class, 'RunningProjectView'])->name('running_project');
Route::get('completed_project/show', [ProjectSituationController::class, 'CompletedProjectView'])->name('completed_project');
Route::get('delivered_project/show', [ProjectSituationController::class, 'DeliveredProjectView'])->name('delivered_project');
Route::get('incomplete_project/show', [ProjectSituationController::class, 'IncompleteProjectView'])->name('incomplete_project');
Route::get('upcoming_project/show', [ProjectSituationController::class, 'UpcomingProjectView'])->name('upcoming_project');
// Route::get('project_situation.blade/show', [ProjectSituationController::class, 'ProjectSituationView'])->name('project_situation');

Route::get('/send',[MailController::class,'index']);



//Dependency routes
Route::get('dependency_range/show', [TaskController::class, 'taskDependencyRange'])->name('all.dependency_range');
Route::post('dependency_range/store', [TaskController::class, 'taskDependencyRangeStore'])->name('add.dependency_range');
Route::get('dependency_range/delete/{id}', [TaskController::class, 'taskDependencyRangeStoreDelete'])->name('delete.dependency_range');
