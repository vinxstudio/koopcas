<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaSltypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_sltype', function(Blueprint $table)
		{
			$table->smallInteger('CISA_SLTypeID')->unsigned();
			$table->string('CISA_SLTypeDesc', 200);
			$table->smallInteger('CISA_SLTypeBRCODE')->unsigned()->index('FK_CISASLType_BRCODE');
			$table->primary(['CISA_SLTypeID','CISA_SLTypeBRCODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_sltype');
	}

}
