<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation');
            $table->string('department', 60);
            $table->string('commune', 60);
            $table->string('locality', 60);
            $table->string('address', 100);
            $table->char('category', 1);
            $table->string('logo_ctr', 20)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('p_center_id')->nullable();
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
        Schema::dropIfExists('centres');
    }
}
