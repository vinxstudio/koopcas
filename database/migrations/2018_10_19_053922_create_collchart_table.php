<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollchartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collchart', function(Blueprint $table)
		{
			$table->increments('CollChartID');
			$table->string('CollChartDesc', 45);
			$table->smallInteger('CollChartBR_CODE')->unsigned()->index('collchart_BRCODE');
			$table->text('CollChartRemarks', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collchart');
	}

}
