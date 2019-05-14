<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPodtlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_podtl', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('TR_CTLNO')->unsigned();
			$table->smallInteger('SEQNO')->unsigned();
			$table->integer('ITEMID')->unsigned()->index('FK_inv_podtl_ITEMID');
			$table->decimal('QTY', 15);
			$table->decimal('UNITCOST', 15);
			$table->primary(['BR_CODE','TR_CTLNO','SEQNO']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_podtl');
	}

}
