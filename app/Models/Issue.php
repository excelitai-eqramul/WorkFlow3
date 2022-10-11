<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;



    public function issue_parent()
    {
       return $this->hasone(Issue::class,'id','parent_id');
    }



    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }


    public function departmentt()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }


    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }


    public function feature()
    {
        return $this->belongsTo(Feature::class, 'feature_id', 'id');
    }


    public function tasked()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
}
