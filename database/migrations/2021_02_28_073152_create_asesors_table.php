<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('placebirth');
            $table->string('datebirth');
            $table->string('sex');
            $table->string('email');
            $table->string('maritalstatus');
            $table->string('religion');
            $table->text('address');
            $table->string('telephone');
            $table->string('office');
            $table->string('lspregistration');
            $table->string('education');
            $table->string('position');
            $table->string('initial');
            $table->string('met');
            $table->string('sertifikat');
            $table->longText('eemployer');
            $table->longText('educationdata');
            $table->longText('avitraining');
            $table->longText('othertraining');
            $table->longText('licenseheld');
            $table->longText('teachingaspeck');
            $table->string('conclusion');
            $table->string('recommendation');
            $table->string('masterasesor');
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
        Schema::dropIfExists('asesors');
    }
}
