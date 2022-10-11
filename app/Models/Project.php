<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded=[];



    public function project_parent()
    {
       return $this->hasone(Project::class,'id','parent_id');
    }


    public function module()
    {
        return $this->hasOne(Module::class, 'project_id', 'id');
    }



    public function tasks(){
        return $this->belongsTo(Task::class,'task_id','id');
    }



    public function employeee(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }




    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }




    public function progressbar()
    {
        return $this->hasMany(Progressbar::class,'project_id','id');
    }



    public function estimate_date()
    {
        return $this->hasMany(Projects_date_history::class,'project_id','project_id');
    }


    public function budget_history()
    {
        return $this->hasMany(Project_budget_history::class,'project_id','project_id');
    }




}
