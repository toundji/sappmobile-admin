<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string("matricule");
            $table->float("distance_do")->default(0.0);
            $table->string("model")->nullable();
            $table->string("marque")->nullable();
            $table->string("pays_fabrication")->nullable();
            $table->string("kilometrage")->nullable();
            $table->string("status")->nullable();
            $table->boolean("available")->default(true);
            $table->string("couleur")->nullable();
            $table->boolean("climatisation")->default(false);
            $table->integer("max_passenger")->default(4);
            $table->integer("min_passenger")->default(4);
            $table->string("image")->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->foreign('creator_id')->references('id')->on('users');
            $table->unsignedBigInteger('editor_id')->nullable();
            $table->foreign('editor_id')->references('id')->on('users');
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
        Schema::dropIfExists('vehicules');
    }
}
