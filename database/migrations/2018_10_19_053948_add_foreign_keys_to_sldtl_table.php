<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSldtlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sldtl', function(Blueprint $table)
		{
			$table->foreign('ADJ_FLAG', 'SLDTL_ADJFLAG')->references('ADJFLAGID')->on('adjflag')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BANK_CODE', 'SLDTL_BANKCODE')->references('BCID')->on('bankcode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COCI_TYPE', 'SLDTL_COCITYPE')->references('COCITYPEID')->on('cocitype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLE_CODE', 'SLDTL_SLE')->references('SLE_TypeCode')->on('sle_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SL_BRCODE', 'SLDTL_SLSUM')->references('SL_BRCODE')->on('slsum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('TR_CODE', 'SLDTL_TRCODE')->references('TransTypeID')->on('transtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sldtl', function(Blueprint $table)
		{
			$table->dropForeign('SLDTL_ADJFLAG');
			$table->dropForeign('SLDTL_BANKCODE');
			$table->dropForeign('SLDTL_COCITYPE');
			$table->dropForeign('SLDTL_SLE');
			$table->dropForeign('SLDTL_SLSUM');
			$table->dropForeign('SLDTL_TRCODE');
		});
	}

}
