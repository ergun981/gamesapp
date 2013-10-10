<?php

use Illuminate\Database\Migrations\Migration;

// app/database/migrations/2013_09_14_155847_create_games.php

class CreateGames extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function($table)
		{
			$table->increments('id');
			$table->string('title', 128);
			$table->string('publisher', 128);
			$table->boolean('complete');
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
		Schema::drop('games');
	}

}
