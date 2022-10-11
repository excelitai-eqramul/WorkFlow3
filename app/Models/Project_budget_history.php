<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_budget_history extends Model
{
    use HasFactory;


    public function projects(){
        return $this->belongsTo(Project::class,'id','project_id');
    }


}
