<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopts', function (Blueprint $table) {
            $table->id();
            $table->string('Pet_Type');
            $table->string('FirstName');
            $table->string('email');
            $table->string('number');
            $table->string('address');
            $table->string('reasonfor_adoption');
            $table->string('previous_experience');
            $table->string('payment_method'); 
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
        Schema::dropIfExists('adopts');
    }
}
