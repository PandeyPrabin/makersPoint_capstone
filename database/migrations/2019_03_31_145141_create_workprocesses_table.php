<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkprocessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workprocesses', function (Blueprint $table) {
            $table->unsignedInteger('workproceesesid')->primary();
            $table->integer('taskid')->unsigned();
            $table->integer('workid')->unsigned();
            $table->integer('machineid')->unsigned();
            $table->integer('employeeid')->unsigned();
            $table->string('date')->nullable();
            $table->string('starttime')->nullable();
            $table->string('endtime')->nullable();
            $table->foreign('taskid')->references('taskid')->on('tasks')->onDelete('cascade');
            $table->foreign('workid')->references('workid')->on('workorders')->onDelete('cascade');
            $table->foreign('machineid')->references('machineid')->on('machines')->onDelete('cascade');

            $table->foreign('employeeid')->references('employeeid')->on('employees')->onDelete('cascade');

            
            
            
            
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
        Schema::dropIfExists('workprocesses');
    }
}
