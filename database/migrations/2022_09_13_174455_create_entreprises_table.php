<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("registre_commerce")->nullable();
            $table->string("ville")->nullable();
            $table->string("logo")->nullable();
            $table->string("code")->nullable();
            $table->unsignedBigInteger('agent_entreprise_id')->nullable();
            $table->foreign('agent_entreprise_id')->references('id')->on('agent_entreprises');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
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
        Schema::dropIfExists('entreprises');
    }
}
