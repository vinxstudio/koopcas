<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioUserScopeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_user_scope', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('userId')->index('IDX_1CBF915F64B64DCC');
			$table->integer('scopeId')->index('IDX_1CBF915F9BA970FA');
			$table->unique(['userId','scopeId'], 'UNIQ_1CBF915F64B64DCC9BA970FA');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_user_scope');
	}

}
