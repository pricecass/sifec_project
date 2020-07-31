<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livrets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero', 10);
            $table->string('acte_deces_epoux');
            $table->string('acte_deces_epouse');
            $table->string('acte_naiss_enfant');
            $table->string('divorce');
            $table->string('acte_deces_enfant');
            $table->string('mention_marginale_enfant');
            $table->integer('mariage_id');
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
        Schema::dropIfExists('livrets');
    }
}
