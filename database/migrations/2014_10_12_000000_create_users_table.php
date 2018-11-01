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
            $table->string('ava')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->boolean('status');
            $table->string('verifyToken', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->time('deleted_at')->nullable();
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
