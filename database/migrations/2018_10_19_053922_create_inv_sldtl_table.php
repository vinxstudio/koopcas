<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvSldtlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_sldtl', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->boolean('LOCATION')->default(1);
			$table->integer('ITEMID')->unsigned()->index('FK_inv_sldtl_ITEMID');
			$table->boolean('TR_CODE')->index('FK_inv_sldtl_TRCODE');
			$table->integer('TR_CTLNO')->unsigned();
			$table->date('TR_DATE');
			$table->smallInteger('SEQNO')->unsigned();
			$table->integer('CLIENTID')->unsigned()->nullable();
			$table->string('TR_DOCNO', 8)->nullable();
			$table->decimal('QTY', 15);
			$table->decimal('UNITCOST', 15)->nullable();
			$table->decimal('TOTCOST', 15)->nullable();
			$table->decimal('TAXAMOUNT', 15)->nullable();
			$table->decimal('RETAILPRICE', 15)->nullable();
			$table->decimal('WHOLESALEPRICE', 15)->nullable();
			$table->boolean('ISONPROMO')->nullable();
			$table->boolean('PAYMETHOD')->nullable()->index('FK_inv_sldtl_PAYMETHOD');
			$table->boolean('ADJREASON')->nullable()->index('FK_inv_sldtl_ADJREASON');
			$table->boolean('UPDTAG')->nullable()->index('FK_inv_sldtl_UPDTAG');
			$table->string('MEMBERID', 15)->nullable();
			$table->primary(['BR_CODE','LOCATION','ITEMID','TR_CODE','TR_CTLNO','TR_DATE','SEQNO']);
			$table->index(['BR_CODE','CLIENTID','ITEMID','TR_CODE'], 'Index_CLIENT');
			$table->index(['BR_CODE','TR_CODE','TR_CTLNO'], 'Index_TRANS');
			$table->index(['LOCATION','BR_CODE'], 'FK_inv_sldtl_LOCATION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_sldtl');
	}

}
