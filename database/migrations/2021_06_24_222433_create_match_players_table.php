<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateMatchPlayersTable.
 */
class CreateMatchPlayersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('match_players', function(Blueprint $table) {
            $table->increments('id');

			$table->smallInteger('player_id')->unsigned();
			$table->foreign('player_id')->references('id')->on('players');

			$table->smallInteger('match_id')->unsigned();
			$table->foreign('match_id')->references('id')->on('matches');

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
		Schema::drop('match_players');
	}
}
