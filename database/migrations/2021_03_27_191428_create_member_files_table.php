<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_files', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('employment')->nullable();
            $table->string('educationcertificates')->nullable();
            $table->string('aviationtraining')->nullable();
            $table->string('othertraining')->nullable();
            $table->string('diplomafile')->nullable();
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
        Schema::dropIfExists('member_files');
    }
}
