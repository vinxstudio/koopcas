<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaPsicsectorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_psicsector', function(Blueprint $table)
		{
			$table->boolean('PSIC_SecID');
			$table->char('PSIC_SecCode', 10);
			$table->string('PSIC_SecDesc')->default('');
			$table->smallInteger('PSIC_SecBR_CODE')->unsigned()->index('fk_PSIC_SecBRCODE');
			$table->primary(['PSIC_SecCode','PSIC_SecID','PSIC_SecBR_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_psicsector');
	}

}
