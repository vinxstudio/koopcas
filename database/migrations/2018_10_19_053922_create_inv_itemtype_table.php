<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemtypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_itemtype', function(Blueprint $table)
		{
			$table->boolean('ID');
			$table->string('DESC1', 100);
			$table->string('DESC2', 100)->nullable();
			$table->smallInteger('BR_CODE')->unsigned();
			$table->boolean('PSLC_CODE')->nullable();
			$table->boolean('PSLT_CODE')->nullable();
			$table->string('PCOAID', 15)->nullable();
			$table->boolean('PRSLC_CODE')->nullable();
			$table->boolean('PRSLT_CODE')->nullable();
			$table->string('PRCOAID', 15)->nullable();
			$table->boolean('SSLC_CODE')->nullable();
			$table->boolean('SSLT_CODE')->nullable();
			$table->string('SCOAID', 15)->nullable();
			$table->boolean('SRSLC_CODE')->nullable();
			$table->boolean('SRSLT_CODE')->nullable();
			$table->string('SRCOAID', 15)->nullable();
			$table->boolean('SDSLC_CODE')->nullable();
			$table->boolean('SDSLT_CODE')->nullable();
			$table->string('SDCOAID', 15)->nullable();
			$table->boolean('COGSSLC_CODE')->nullable();
			$table->boolean('COGSSLT_CODE')->nullable();
			$table->string('COGSCOAID', 15)->nullable();
			$table->boolean('CSSLC_CODE')->nullable();
			$table->boolean('CSSLT_CODE')->nullable();
			$table->string('CSCOAID', 15)->nullable();
			$table->boolean('CSRSLC_CODE')->nullable();
			$table->boolean('CSRSLT_CODE')->nullable();
			$table->string('CSRCOAID', 15)->nullable();
			$table->boolean('IsNEWSLOnly')->nullable()->default(0);
			$table->boolean('IsMUSTHaveSL')->nullable()->default(0);
			$table->boolean('DEPT')->nullable()->index('FK_inv_itemtype_DEPT');
			$table->primary(['ID','BR_CODE']);
			$table->index(['BR_CODE','PSLC_CODE','PSLT_CODE'], 'FK_inv_itemtype_PSLCT_CODE');
			$table->index(['BR_CODE','PCOAID'], 'FK_inv_itemtype_PCOAID');
			$table->index(['BR_CODE','PRSLC_CODE','PRSLT_CODE'], 'FK_inv_itemtype_PRSLCT_CODE');
			$table->index(['BR_CODE','PRCOAID'], 'FK_inv_itemtype_PRCOAID');
			$table->index(['BR_CODE','SSLC_CODE','SSLT_CODE'], 'FK_inv_itemtype_SSLCT_CODE');
			$table->index(['BR_CODE','SCOAID'], 'FK_inv_itemtype_SCOAID');
			$table->index(['BR_CODE','SRSLC_CODE','SRSLT_CODE'], 'FK_inv_itemtype_SRSLCT_CODE');
			$table->index(['BR_CODE','SRCOAID'], 'FK_inv_itemtype_SRCOAID');
			$table->index(['BR_CODE','SDSLC_CODE','SDSLT_CODE'], 'FK_inv_itemtype_SDSLCT_CODE');
			$table->index(['BR_CODE','SDCOAID'], 'FK_inv_itemtype_SDCOAID');
			$table->index(['BR_CODE','COGSSLC_CODE','COGSSLT_CODE'], 'FK_inv_itemtype_COGSSLCT_CODE');
			$table->index(['BR_CODE','COGSCOAID'], 'FK_inv_itemtype_COGSCOAID');
			$table->index(['BR_CODE','CSSLC_CODE','CSSLT_CODE'], 'FK_inv_itemtype_CSSLCT_CODE');
			$table->index(['BR_CODE','CSCOAID'], 'FK_inv_itemtype_CSCOAID');
			$table->index(['BR_CODE','CSRSLC_CODE','CSRSLT_CODE'], 'FK_inv_itemtype_CSRSLCT_CODE');
			$table->index(['BR_CODE','CSRCOAID'], 'FK_inv_itemtype_CSRCOAID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_itemtype');
	}

}
