<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('msg_table', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_id');
			$table->string('topic');
			$table->string('messages');
			$table->enum('choices', ['yes', 'no']);
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
		Schema::drop('msg_table');
	}

}
