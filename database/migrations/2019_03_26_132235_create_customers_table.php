<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedinteger('customerid');
            $table->string('firstname')->nullable;
            $table->string('lastname')->nullable;
            $table->unsignedinteger('businessid')->nullable;
             $table->string('email')->nullable;
             $table->string('phoneno')->nullable;
             $table->text('address')->nullable;

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
        Schema::dropIfExists('customers');
    }
}
