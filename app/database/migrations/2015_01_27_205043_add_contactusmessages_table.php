<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactusmessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactusmessages',function($table){
			$table->increments('id');
			$table->string('name',50);
			$table->string('email',50);
			$table->string('subject',20);
			$table->text('message');
			$table->boolean('read');
			$table->boolean('completed');
			$table->text('comment');
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
		Schema::drop('contactusmessages');
	}

}
