<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('username') -> notNull();
            $table -> string('password') -> notNull();
            $table -> string('nickname') -> notNull();
            $table -> string('phonenumber') -> notNull();
            $table -> string('email')    -> notNull();
            $table -> tinyInteger('userinfo_id') -> nullable();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
