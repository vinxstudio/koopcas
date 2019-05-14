<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSltypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sltype', function(Blueprint $table)
		{
			$table->smallInteger('SLTypeBR_CODE')->unsigned();
			$table->boolean('SLTypeSLC_CODE')->default(0)->index('sltypeSLC_CODE');
			$table->boolean('SLTypeSLT_CODE');
			$table->string('SLTypeM_DESC', 20)->nullable();
			$table->string('SLTypeM_DESC2', 30)->nullable();
			$table->string('SLTypeSLG_CODE', 2)->nullable();
			$table->integer('SLTypeTERMS')->unsigned()->nullable();
			$table->boolean('SLTypeTERM_PERD')->nullable()->index('sltypeTERM_PERD');
			$table->boolean('SLTypePPMT_MODE')->nullable()->index('sltypePPMT_MODE');
			$table->boolean('SLTypeIPMT_MODE')->nullable()->index('sltypeIPMT_MODE');
			$table->boolean('SLTypePEN_MODE')->nullable()->index('sltypePEN_MODE');
			$table->boolean('SLTypeAMORTYPE')->nullable()->index('sltypeAMORTYPE');
			$table->boolean('SLTypeDIMB_FREQ')->nullable()->index('sltypeDIMB_FREQ');
			$table->decimal('SLTypeINT_RATE', 5)->unsigned()->nullable();
			$table->decimal('SLTypePEN_RATE', 5)->unsigned()->nullable();
			$table->decimal('SLTypeSF_RATE', 5)->unsigned()->nullable();
			$table->integer('SLTypeMINCOMKR')->unsigned()->nullable();
			$table->decimal('SLTypeENCUMPCNT', 5)->unsigned()->nullable();
			$table->boolean('SLTypePB_FLAG')->nullable();
			$table->boolean('SLTypePBTYPE')->nullable()->index('sltypePBTYPE');
			$table->boolean('SLTypePI_FLAG')->nullable();
			$table->boolean('SLTypeAUID_FLAG')->nullable();
			$table->boolean('SLTypeAI_FLAG')->nullable();
			$table->boolean('SLTypeCIAM_FLAG')->nullable();
			$table->boolean('SLTypeDD_FLAG')->nullable()->index('sltypeDD_FLAG');
			$table->decimal('SLTypeMIN_BAL', 15)->unsigned()->nullable();
			$table->decimal('SLTypeBMBAL_SF', 15)->unsigned()->nullable();
			$table->integer('SLTypeDORM_TERM')->unsigned()->nullable();
			$table->boolean('SLTypeDORM_PERD')->nullable()->index('sltypeDORM_PERD');
			$table->decimal('SLTypeDORM_SF', 15)->unsigned()->nullable();
			$table->string('SLTypeOLD_SLT', 6)->nullable();
			$table->dateTime('SLTypeUPDDATETIME')->nullable();
			$table->smallInteger('SLTypeUpdUser')->unsigned()->nullable()->index('sltypeUpdUser');
			$table->boolean('SLTypeIsIncSOA')->nullable()->default(0);
			$table->boolean('SLTypeIsDisabled')->nullable()->default(0);
			$table->decimal('SLTypeRebateRate', 5)->nullable()->default(0.00);
			$table->decimal('SLTypeMaxATMWDLPerDay', 15)->nullable()->default(0.00);
			$table->smallInteger('SLTypePriority')->unsigned()->nullable()->default(99);
			$table->boolean('SLTypeCPAMO_FLAG')->nullable()->default(1)->comment('Compute Penalty After Maturity Date Only.');
			$table->boolean('SLTypeMealAllowanceCreditLimit')->nullable()->default(0);
			$table->smallInteger('SLTypeCluster')->unsigned()->nullable()->index('FK_SLType_CLUSTER');
			$table->smallInteger('SLTypeCISA_SL')->unsigned()->nullable()->index('FK_SLType_CISA_SL');
			$table->primary(['SLTypeBR_CODE','SLTypeSLC_CODE','SLTypeSLT_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sltype');
	}

}
