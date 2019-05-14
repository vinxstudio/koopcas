<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioUserGrantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_user_grant', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('userId')->index('IDX_D515A2C064B64DCC');
			$table->integer('appId')->index('IDX_D515A2C036DA3021');
			$table->integer('allow');
			$table->dateTime('date');
			$table->unique(['userId','appId'], 'UNIQ_D515A2C064B64DCC36DA3021');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_user_grant');
	}

}
