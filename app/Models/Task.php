<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function task_parent()
    {
        return $this->hasone(Task::class, 'id', 'parent_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
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

    public function departmentt()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function dependency_range()
    {
        return $this->belongsTo(DependencyRange::class, 'dependencyRange_id', 'id');
    }


    // public function task_depemdancy()
    // {
    //     return $this->belongsTo(DependencyRange::class, 'dependencyRange_id', 'id');
    // }



    public function tas_dependency()
    {
       return $this->hasone(Task::class,'id','task_dependency');
    }



}
