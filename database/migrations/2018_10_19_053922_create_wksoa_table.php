<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWksoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wksoa', function(Blueprint $table)
		{
			$table->boolean('BR_CODE')->nullable();
			$table->integer('CLIENTID')->unsigned()->nullable();
			$table->boolean('CHKDGT')->nullable();
			$table->string('CLIENTNAME', 100)->nullable();
			$table->string('HOMEADDRESS', 100)->nullable();
			$table->string('MS_MR', 100)->nullable();
			$table->date('STATEMENTDATE')->nullable();
			$table->date('CUTOFFDATE')->nullable();
			$table->string('OPTIONx', 30)->nullable();
			$table->string('ACCOUNTGROUP', 30)->nullable();
			$table->string('SLDESCR', 50)->nullable();
			$table->string('REFERENCENUMBER', 50)->nullable();
			$table->decimal('PRINAMT', 15)->nullable();
			$table->decimal('PRINBAL', 15)->nullable();
			$table->decimal('PRINDUE_AVBLBAL', 15)->nullable();
			$table->decimal('INTDUE', 15)->nullable();
			$table->decimal('PENDUE', 15)->nullable();
			$table->decimal('PRINOVR', 15)->nullable();
			$table->decimal('INTOVR', 15)->nullable();
			$table->decimal('PENOVR', 15)->nullable();
			$table->string('BRANCHMANAGER', 30)->nullable();
			$table->string('CDAREGNUM', 100)->nullable();
			$table->string('ORGACRONYM', 100)->nullable();
			$table->string('SETUPDATE', 15)->nullable();
			$table->string('MATURITYDATE', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wksoa');
	}

}
