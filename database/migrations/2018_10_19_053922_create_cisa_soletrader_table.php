<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaSoletraderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_soletrader', function(Blueprint $table)
		{
			$table->increments('soletraderid');
			$table->integer('SoleTraderClientID')->unsigned()->nullable();
			$table->smallInteger('SoleTraderBR_CODE')->unsigned()->nullable();
			$table->string('SoleTraderName', 100)->nullable();
			$table->string('SoleTraderMStreetNo', 100)->nullable();
			$table->string('SoleTraderMPostalCode', 100)->nullable();
			$table->string('SoleTraderMSubd', 100)->nullable();
			$table->string('SoleTraderMBRGY', 100)->nullable();
			$table->string('SoleTraderMCity', 100)->nullable();
			$table->string('SoleTraderMProv', 100)->nullable();
			$table->boolean('SoleTraderMHouseType')->nullable();
			$table->date('SoleTraderMOccupiedSince')->nullable();
			$table->boolean('SoleTraderMIDtype')->nullable()->index('fk_soleTraderIDtype');
			$table->string('SoleTraderMIDnum', 100)->nullable();
			$table->boolean('SoleTraderMCntctType')->nullable()->index('fk_soleTraderContactType');
			$table->string('SoleTraderMCntctValue', 100)->nullable();
			$table->string('SoleTraderAStreetNo', 100)->nullable();
			$table->string('SoleTraderAPostalCode', 100)->nullable();
			$table->string('SoleTraderASubd', 100)->nullable();
			$table->string('SoleTraderABRGY', 100)->nullable();
			$table->string('SoleTraderACity', 100)->nullable();
			$table->string('SoleTraderAProv', 100)->nullable();
			$table->boolean('SoleTraderAHouseType')->nullable();
			$table->date('SoleTraderAOccupiedSince')->nullable();
			$table->boolean('SoleTraderAIDtype')->nullable();
			$table->string('SoleTraderAIDnum', 100)->nullable();
			$table->boolean('SoleTraderACntctType')->nullable();
			$table->string('SoleTraderACntctValue', 100)->nullable();
			$table->index(['SoleTraderBR_CODE','SoleTraderClientID'], 'fk_soleTraderClientID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_soletrader');
	}

}
