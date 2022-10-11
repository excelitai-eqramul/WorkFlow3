<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('company_id')->nullable();
            $table->string('project_id')->nullable();
            $table->string('module_id')->nullable();
            $table->string('feature_id')->nullable();
            $table->string('task_id')->nullable();
            $table->string('name')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('estimate_date')->nullable();
            $table->string('estimate_time')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('resolved_by')->nullable();
            $table->string('identify_by')->nullable();
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
        Schema::dropIfExists('issues');
    }
}
