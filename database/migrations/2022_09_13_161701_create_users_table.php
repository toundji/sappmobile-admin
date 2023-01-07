<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('image_profil')->default("storage/images/profil/default.png");
            $table->enum('status', ["ACTIF", "DESACTIVE", "BLOQUE"])->default("ACTIF");
            $table->enum('roles', ["CLIENT", "CONDUCTEUR", "AGENT", "MANEGER", "ADMIN"])->default("CLIENT");;
            $table->string('code')->nullable();
            $table->string('verification_token')->nullable();
            $table->boolean('gender')->default(true);
            $table->enum('account_state', ["ACTIF", "DESACTIVE", "BLOQUE"])->default("ACTIF");
            $table->string('token')->nullable();
            $table->string('city')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
