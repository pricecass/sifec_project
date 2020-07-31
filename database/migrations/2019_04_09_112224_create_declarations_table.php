<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('centre_id')->unsigned();
            $table->string('status', 45);
            $table->timestamps();

            // Infos de l'epoux
            $table->string('acte_naiss_epoux');
            $table->string('lieu_delivrance_acte_naiss_epoux');
            $table->date('date_delivrance_acte_naiss_epoux');
            $table->string('nom_epoux');
            $table->string('prenom_epoux');
            $table->string('adresse_epoux');
            $table->string('profession_epoux');
            $table->date('date_naiss_epoux');
            $table->string('lieu_naiss_epoux');
            $table->string('nationalite_epoux');
            $table->string('situation_matrimoniale_epoux');
            $table->string('parent1_epoux');
            $table->string('parent2_epoux');
            $table->string('nom_temoin1_epoux');
            $table->string('prenom_temoin1_epoux');
            $table->string('profession_temoin1_epoux');
            $table->string('domicile_temoin1_epoux');
            $table->string('nom_jeune_fille_temoin2_epoux');
            $table->string('profession_temoin2_epoux');
            $table->string('domicile_temoin2_epoux');
            $table->string('photo_epoux')->nullable();

            // infos de l'epouse
            $table->string('acte_naiss_epouse');
            $table->string('lieu_delivrance_acte_naiss_epouse');
            $table->date('date_delivrance_acte_naiss_epouse');
            $table->string('nom_epouse');
            $table->string('prenom_epouse');
            $table->string('adresse_epouse');
            $table->string('profession_epouse');
            $table->date('date_naiss_epouse');
            $table->string('lieu_naiss_epouse');
            $table->string('nationalite_epouse');
            $table->string('situation_matrimoniale_epouse');
            $table->string('parent1_epouse');
            $table->string('parent2_epouse');
            $table->string('nom_temoin1_epouse');
            $table->string('prenom_temoin1_epouse');
            $table->string('profession_temoin1_epouse');
            $table->string('domicile_temoin1_epouse');
            $table->string('nom_jeune_fille_temoin2_epouse');
            $table->string('profession_temoin2_epouse');
            $table->string('domicile_temoin2_epouse');
            $table->string('photo_epouse')->nullable();

            // Informations complementaires
            $table->string('filiation')->nullable();
            $table->date('date_celebration');
            $table->time('heure_celebration');
            $table->string('lieu_celebration');
            $table->timestamp('date_publication');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declarations');
    }
}
