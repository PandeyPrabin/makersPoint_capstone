<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            $table->unsignedInteger('workid')->primary();
            $table->string('title');
            $table->string('provider')->nullable();
            $table->string('customer')->nullable();
            $table->text('orderdate');
            $table->text('deadline');
            $table->text('absolutedeadline')->nullable();
            $table->string('additionalinfo')->nullable();
            $table->string('material')->nullable();
            $table->string('deliveryby')->nullable();
            $table->string('workstatus')->nullable();
            
            
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
        Schema::dropIfExists('workorders');
    }
}
