<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('indonesian');
            $table->string('international');
            $table->text('motto');
            $table->string('photo')->nullable();
            $table->string('ceoname');
            $table->string('ceoquote');
            $table->longText('desc');
            $table->text('address');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('csphone');
            $table->string('csemail');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('whatsapp');
            $table->string('indexphoto')->nullable();
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
        Schema::dropIfExists('companyprofiles');
    }
}
