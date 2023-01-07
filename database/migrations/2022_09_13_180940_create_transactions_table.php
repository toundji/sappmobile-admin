<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->float("amount");
            $table->float("sold_apres");
            $table->enum("status", ["SUCCES", "ECHOUE"])->default("SUCCES");
            $table->enum("transaction_type", ["RECHARGEMENT", "TRANSPORT", "TRANSPORT COMPLICE", "DEFALCATION"])->nullable();
            $table->enum("type", ["CREDIT", "DEBIT"])->default("DEBIT");
            $table->integer("operation_id");
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
        Schema::dropIfExists('transactions');
    }
}
