<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('idtrainer');
            $table->string('loa');
            $table->string('familyname');
            $table->string('nationality');
            $table->string('email');
            $table->string('name');
            $table->string('phone');
            $table->string('datebirth');
            $table->string('license');
            $table->string('licensenumber');
            $table->string('licensedate');
            $table->string('licenseauth');
            $table->string('rating1type');
            $table->string('rating1validity');
            $table->string('rating1date');
            $table->string('rating1rating');
            $table->string('rating2aircraft');
            $table->string('rating2validity');
            $table->string('rating2date');
            $table->string('rating2rating');
            $table->text('otherlicense');
            $table->string('othervalidity');
            $table->string('readlevel');
            $table->string('writelevel');
            $table->string('speaklevel');
            $table->string('exptype');
            $table->string('expdatefrom');
            $table->string('expdateend');
            $table->string('expcommand');
            $table->string('expofficer');
            $table->string('expcaptain');
            $table->string('texptype');
            $table->string('texptotal');
            $table->string('texplast12');
            $table->string('texpaircraft');
            $table->string('othertype');
            $table->string('otherdate');
            $table->string('otherflight');
            $table->string('othertraining');
            $table->string('signature');
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
        Schema::dropIfExists('trainers');
    }
}
