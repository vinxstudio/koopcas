<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoacTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coac', function(Blueprint $table)
		{
			$table->smallInteger('COACBR_CODE')->unsigned();
			$table->string('COACID', 15)->default('');
			$table->string('COACDesc', 80)->nullable();
			$table->integer('COACacct_type')->nullable()->index('coacACCT_TYPE');
			$table->string('COACacct_tag', 1)->nullable()->index('coacACCT_LVL');
			$table->string('COACacct_tag2', 1)->nullable();
			$table->string('COACacct_tag3', 1)->nullable();
			$table->string('COACacct_lvl', 1)->nullable();
			$table->string('COACacct_sum', 15)->nullable();
			$table->string('COACdept', 2)->nullable();
			$table->string('COACacct_grp', 2)->nullable();
			$table->decimal('COACcls_entry', 14)->nullable();
			$table->dateTime('COACcle_date')->nullable();
			$table->string('COACconso_acct', 15)->nullable();
			$table->smallInteger('COACUpdUser')->unsigned()->nullable()->index('coacACCESSID');
			$table->dateTime('COACupdDateTime')->nullable();
			$table->boolean('COACBALTYPE')->nullable();
			$table->integer('COACglaccttype')->nullable();
			$table->decimal('COACseqno', 15, 3)->nullable();
			$table->boolean('COACisdisabled')->nullable();
			$table->boolean('COACcanGLOnly')->nullable()->default(1);
			$table->primary(['COACBR_CODE','COACID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coac');
	}

}
