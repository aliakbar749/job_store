<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addjobs', function (Blueprint $table) {
            $table->id();
            $table->string('Cname');
            $table->string('JPname');
            $table->integer('vacancy');
            $table->longText('Jdescription');
            $table->string('Estatus');
            $table->string('workplace');
            $table->longText('Erequirements');
            $table->longText('Experience');
            $table->string('Jlocation');
            $table->integer('Salary');
            $table->string('Obenefits');
            $table->date('Pdate');
            $table->date('Ldate');
            
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
        Schema::dropIfExists('addjobs');
    }
}
