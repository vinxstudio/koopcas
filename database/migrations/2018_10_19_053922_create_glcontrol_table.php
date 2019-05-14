<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlcontrolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('glcontrol', function(Blueprint $table)
		{
			$table->smallInteger('GLControlBR_CODE')->unsigned();
			$table->boolean('GLControlSLC_CODE');
			$table->boolean('GLControlSLT_CODE');
			$table->boolean('GLControlSLE_CODE')->index('glcontrolSLE_CODE');
			$table->boolean('GLControlCTS_NUM')->index('glcontrolCTS_NUM');
			$table->string('GLControlACCT_CODE', 15)->nullable();
			$table->string('Remarks', 45)->nullable();
			$table->boolean('BAL_TYPE')->nullable()->index('glcontrol_BALTYPE');
			$table->primary(['GLControlBR_CODE','GLControlSLC_CODE','GLControlSLT_CODE','GLControlSLE_CODE','GLControlCTS_NUM']);
			$table->index(['GLControlBR_CODE','GLControlACCT_CODE'], 'glcontrolACCT_CODE');
			$table->index(['GLControlBR_CODE','GLControlSLC_CODE','GLControlSLT_CODE','GLControlSLE_CODE'], 'glcontrolSLB_CTE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('glcontrol');
	}

}
