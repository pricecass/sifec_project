<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMariagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mariages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('declaration_id');
            $table->integer('user_id');
            $table->integer('registre_id');
            $table->integer('numero_acte')->unique();
            $table->string('option_matrimoniale');
            $table->string('regime_matrimonial');
            $table->float('montant_dot')->nullable();
            $table->string('beneficiaire_dot')->nullable();
            $table->string('qualite_beneficiaire_dot')->nullable();
            $table->string('coutume_presidant_union')->nullable();
            $table->text('stipulation_particuliaire');
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
        Schema::dropIfExists('mariages');
    }
}
