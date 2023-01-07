<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->boolean("owner")->default(true);
            $table->string("phone")->nullable();
            $table->float("distance");
            $table->integer("duration");
            $table->string("distance_text")->nullable();
            $table->string("duration_text")->nullable();
            $table->float("driver_distance")->nullable();
            $table->integer("driver_duration")->nullable();
            $table->string("driver_distance_text")->nullable();
            $table->string("driver_duration_text")->nullable();
            $table->double("price");
            $table->enum("status", ["DEMANDE", "RECHERCHE", "NEGOCIATION", "VALIDE", "ATTENTE", "EN COURS", "TERMINE", "ANNULE"])->nullable();
            $table->enum("payement_mode", ["ESPECE", "ELECTRONIC", "COMPLICE"])->nullable();
            $table->dateTime("user_espece_date")->nullable();
            $table->dateTime("driver_espece_date")->nullable();
            $table->text("cancel_reason")->nullable();
            $table->integer("number_persons")->default(1);
            $table->integer("alert_number")->default(0);
            $table->unsignedBigInteger('depart_id')->nullable();
            $table->foreign('depart_id')->references('id')->on('localisations');
            $table->unsignedBigInteger('arrive_id')->nullable();
            $table->foreign('arrive_id')->references('id')->on('localisations');
            $table->unsignedBigInteger('vehicule_id')->nullable();
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->unsignedBigInteger('conducteur_id')->nullable();
            $table->foreign('conducteur_id')->references('id')->on('conducteurs');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::dropIfExists('transports');
    }
}
