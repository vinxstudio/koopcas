<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaPsocsectorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_psocsector', function(Blueprint $table)
		{
			$table->boolean('PSOC_SecCode');
			$table->string('PSOC_SecDesc')->default('');
			$table->smallInteger('PSOC_SecBR_CODE')->unsigned()->index('PSOC_SecBR_CODE');
			$table->primary(['PSOC_SecCode','PSOC_SecBR_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_psocsector');
	}

}
