<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->integer('notes_id',true);
            $table->integer('user_id');
            $table->string('notes_title',150)->nullable();
            $table->text('notes_description')->nullable();
            $table->text('notes_tags')->nullable();
            $table->datetime('notes_created_date')->nullable();
            $table->integer('notes_updated_user_id')->nullable();
            $table->datetime('notes_updated_date')->nullable();

            $table->index('notes_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
