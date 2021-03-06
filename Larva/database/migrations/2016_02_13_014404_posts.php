<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('content');
            $table->boolean('flagged');
            $table->timestamps();

            $table->integer('thread_id');
            $table->integer('user_id');

            $table->foreign('thread_id')->references('thread_id')->on('thread');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('posts');
	}

}
