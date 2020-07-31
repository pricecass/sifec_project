<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('active')->default(1);
            $table->rememberToken();
            $table->string('last_name', 100);
            $table->string('first_name', 100);
            $table->string('address');
            $table->string('email', 60)->unique();
            $table->string('telephone', 25)->unique();
            $table->string('function', 100);
            $table->timestamps();
            $table->integer('role_id');
            $table->integer('centre_id');

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
