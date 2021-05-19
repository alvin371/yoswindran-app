<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('member_id');
            $table->string('placebirth');
            $table->string('datebirth');
            $table->string('sex');
            $table->string('email');
            $table->string('maritalstatus');
            $table->string('religion');
            $table->text('address');
            $table->string('telephone');
            $table->string('office');
            $table->string('traininglag');
            $table->string('education');
            $table->string('practical');
            $table->string('initial');
            $table->longText('eemployer');
            $table->longText('educationdata');
            $table->longText('avitraining');
            $table->longText('othertrainings');
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
        Schema::dropIfExists('members');
    }
}
