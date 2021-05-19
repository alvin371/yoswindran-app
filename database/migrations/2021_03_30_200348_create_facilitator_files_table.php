<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitatorFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilitator_files', function (Blueprint $table) {
            $table->id();
            $table->string('loa');
            $table->string('employercertificates')->nullable();
            $table->string('educationcertificates')->nullable();
            $table->string('avicertificates')->nullable();
            $table->string('othercertificates')->nullable();
            $table->string('diplomavalidity')->nullable();
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
        Schema::dropIfExists('facilitator_files');
    }
}
