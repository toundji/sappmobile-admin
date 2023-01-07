<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->float("amount");
            $table->float("sold_apres");
            $table->enum("status", ["SUCCES", "ECHOUE"])->default("SUCCES");
            $table->string('transaction_id')->unique();
            $table->string("transaction_info")->nullable();
            $table->enum("source", ["MOBILE_MONEY", "KIKIAPAY MOBILE MONEY", "BANK", "KIKIAPAY BANK", "MOBILE BANK", "KIKIAPAY MOBILE BANK"])->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('portefeuille_id')->nullable();
            $table->foreign('portefeuille_id')->references('id')->on('portefeuilles');
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
        Schema::dropIfExists('payements');
    }
}
