<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesor_files', function (Blueprint $table) {
            $table->id();
            $table->string('met');
            $table->string('employercertificates')->nullable();
            $table->string('educationcertificates')->nullable();
            $table->string('avicertificates')->nullable();
            $table->string('othercertificates')->nullable();
            $table->string('licensevalidity')->nullable();
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
        Schema::dropIfExists('asesor_files');
    }
}
