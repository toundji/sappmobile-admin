<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image_profil')->nullable();
            $table->text('role')->default("clients,client,conducteurs,conducteur,vehicules,vehicule,vehicule_add,vehicule_edit,partenaire,operation,prix,bonus,news,faq,managers,manager,manager_add,entreprises,entreprise,faqs,faq_edit,faq_add,faq_delete,");
            $table->string("password");
            $table->boolean("is_gourou")->default(false);
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
        Schema::dropIfExists('gestionnaires');
    }
}
