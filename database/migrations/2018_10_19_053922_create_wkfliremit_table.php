<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWkfliremitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wkfliremit', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('CLIENTID')->unsigned();
			$table->boolean('SLC_CODE');
			$table->boolean('SLT_CODE');
			$table->string('REF_NOx', 45);
			$table->boolean('SLE_CODE');
			$table->string('SLDESCR', 100)->nullable();
			$table->string('CLIENTIDx', 45)->nullable();
			$table->string('LASTNAME', 200)->nullable();
			$table->string('FIRSTNAME', 200)->nullable();
			$table->string('MIDDLENAME', 200)->nullable();
			$table->string('SUFFIXNAME', 100)->nullable();
			$table->string('CHAPTER', 100)->nullable();
			$table->string('GENDERx', 45)->nullable();
			$table->string('CIVILSTATUS', 45)->nullable();
			$table->date('DATEOFBIRTH')->nullable();
			$table->integer('AGEx')->nullable();
			$table->string('LOANDESCR', 100)->nullable();
			$table->decimal('LOANAMT', 15)->nullable();
			$table->date('DATERELEASED')->nullable();
			$table->string('LOANTERM', 100)->nullable();
			$table->date('LOANMATURITY')->nullable();
			$table->decimal('PREMIUM', 15)->nullable();
			$table->string('BENEFICIARY', 200)->nullable();
			$table->string('RELATIONSHIP', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wkfliremit');
	}

}
