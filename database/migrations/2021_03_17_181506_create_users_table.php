<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string("name");
            $table->string("firstname");
            $table->string("email")->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer("age");
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger("avatar_id")->nullable();
            $table->foreign("avatar_id")->references("id")->on("avatars");
            $table->unsignedBigInteger("role_id");
            $table->foreign("role_id")->references("id")->on("roles");
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
