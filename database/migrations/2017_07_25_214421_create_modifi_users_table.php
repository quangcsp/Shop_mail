<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModifiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar_image_link')->nullable();
            $table->string('phone')->nullable();
            $table->integer('role')->default(0);
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar_image_link');
            $table->dropColumn('phone');
            $table->dropColumn('role');
        });
    }
}
