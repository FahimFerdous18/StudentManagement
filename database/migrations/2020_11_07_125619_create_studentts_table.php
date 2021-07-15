<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentts', function (Blueprint $table) {
             $table->id();
             $table->string('name');
              $table->integer('roll');
               $table->string('image')->nullable();
                $table->integer('phone_no');

              $table->string('address')->default('Tangail');


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
        Schema::dropIfExists('studentts');
    }
}
