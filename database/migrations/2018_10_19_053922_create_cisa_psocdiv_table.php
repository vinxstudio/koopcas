<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaPsocdivTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_psocdiv', function(Blueprint $table)
		{
			$table->integer('PSOC_DivCode')->unsigned();
			$table->string('PSOC_DivDesc')->default('');
			$table->smallInteger('PSOC_DivBRCODE')->unsigned()->index('fk_DivBR_CODE');
			$table->boolean('PSOC_SectorCODE')->index('fk_SectorCode');
			$table->primary(['PSOC_DivCode','PSOC_DivBRCODE','PSOC_SectorCODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_psocdiv');
	}

}
