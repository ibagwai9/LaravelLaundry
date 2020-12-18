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
            $table->string('role_id');
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('phone')->unique();
            $table->string('address')->unique();
            $table->string('email')->unique();
            $table->boolean('access_web')->default(0);
            $table->boolean('access_app')->default(0);
            $table->boolean('hidden')->default(0);
            $table->string('userable_id')->nullable();
            $table->string('userable_type')->nullable();
            $table->unique(['userable_id', 'userable_type']);
            $table->string('profile_pic')->nullable();
            $table->string('password');
            $table->dateTime('last_login')->nullable();
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
