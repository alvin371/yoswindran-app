<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilitators', function (Blueprint $table) {
            $table->id();
            $table->string('idfacilitator');
            $table->string('loa');
            $table->string('name');
            $table->string('placebirth');
            $table->string('datebirth');
            $table->string('sex');
            $table->string('email');
            $table->string('maritalstatus');
            $table->string('religion');
            $table->text('address');
            $table->string('telephone');
            $table->string('language');
            $table->string('education');
            $table->string('recurrent');
            $table->string('initial');
            $table->longText('eemployer');
            $table->longText('educationdata');
            $table->longText('avitraining');
            $table->longText('othertraining');
            $table->longText('diploma');
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
        Schema::dropIfExists('facilitators');
    }
}
