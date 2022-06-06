<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profession',40)->nullable();
            $table->string('service',40)->nullable();
            $table->string('company',40)->nullable();
            $table->unsignedBigInteger('contact_id')->unique()->nullable();
            $table->unsignedBigInteger('profil_id')->unique()->nullable();
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('profil_id')->references('id')->on('profils');
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
        Schema::dropIfExists('professionals');
    }
}
