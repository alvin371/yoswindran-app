<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicemanagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicemanagements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('shortdesc');
            $table->string('trainer');
            $table->text('trainerdesc');
            $table->string('photo');
            $table->string('postby');
            $table->longText('content');
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
        Schema::dropIfExists('servicemanagements');
    }
}
