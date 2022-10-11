<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable();
            $table->string('project_id')->nullable();
            $table->string('module_id')->nullable();
            $table->string('feature_id')->nullable();
            $table->string('department_id')->nullable();
            $table->string('name')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('start_date')->nullable();
            $table->string('dead_line')->nullable();
            $table->string('end_date')->nullable();
            $table->string('progressbar')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('priority')->nullable();
            $table->string('task_dependency')->nullable();
            $table->string('dependencyRange_id')->nullable();
            $table->string('work_duration')->nullable();
            $table->string('working_time')->nullable();
            $table->string('tag')->nullable();
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
