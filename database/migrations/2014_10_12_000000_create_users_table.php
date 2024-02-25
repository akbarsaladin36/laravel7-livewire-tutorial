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
            $table->integer('user_id',true);
            $table->string('user_username',200)->nullable();
            $table->string('user_email')->nullable()->unique();
            $table->string('user_password',150)->nullable();
            $table->string('user_first_name',100)->nullable();
            $table->string('user_last_name',100)->nullable();
            $table->text('user_address')->nullable();
            $table->string('user_phone_number',50)->nullable();
            $table->dateTime('user_created_date')->nullable();
            $table->dateTime('user_updated_date')->nullable();

            $table->index('user_username');
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
