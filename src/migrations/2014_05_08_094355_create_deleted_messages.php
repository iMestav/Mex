<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeletedMessages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleted_messages', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('conversation_id');
            $table->integer('participant_id');
            $table->string('participant_type')->default('User');
            $table->integer('message_id');
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
        Schema::drop('deleted_messages');
    }

}
