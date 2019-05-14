<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClstathisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clstathis', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned()->nullable();
			$table->integer('CLIENTID')->unsigned()->nullable();
			$table->smallInteger('CLSTATID')->unsigned()->nullable()->index('FK_clstathis_CLSTAT');
			$table->date('TR_DATE')->nullable();
			$table->smallInteger('ENCDBY')->unsigned()->nullable()->index('FK_clstathis_ENCDBY');
			$table->text('REMARKS', 65535)->nullable();
			$table->boolean('ISPROMPT')->nullable()->default(0);
			$table->index(['BR_CODE','CLIENTID','TR_DATE'], 'Index_CLIENTVIEW');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clstathis');
	}

}
