<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMariagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mariages', function (Blueprint $table) {
            $table->foreign('declaration_id')->references('id')->on('declarations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('registre_id')->references('id')->on('registres')
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
        Schema::table('mariages', function(Blueprint $table) {
            $table->dropForeign('mariages_declaration_id_foreign');
             $table->dropForeign('mariages_user_id_foreign');
            $table->dropForeign('mariages_registre_id_foreign');
        });
    }
}
