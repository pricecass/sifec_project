<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOppositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppositions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_opposant');
            $table->string('qualite');
            $table->text('motifs');
            $table->text('decision')->nullable();
            $table->integer('declaration_id');
            $table->timestamps();

            $table->foreign('declaration_id')->references('id')->on('declarations')
                ->onDelete('restrict')
                ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oppositions', function (Blueprint $table) {
            $table->dropForeign('oppositions_declaration_id_foreign');
        });
        Schema::dropIfExists('oppositions');
    }
}
