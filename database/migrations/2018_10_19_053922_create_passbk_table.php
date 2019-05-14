<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePassbkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passbk', function(Blueprint $table)
		{
			$table->smallInteger('PassbkBR_CODE')->unsigned();
			$table->integer('PassbkCLIENTID')->unsigned();
			$table->boolean('PassbkSLC_CODE');
			$table->boolean('PassbkSLT_CODE');
			$table->integer('PassbkREF_NO')->unsigned();
			$table->boolean('PassbkPBTYPE')->nullable()->index('FK_passbk_PBTYPE');
			$table->string('PassbkSERNUM', 8)->nullable();
			$table->smallInteger('PassbkLINENUM')->unsigned()->nullable();
			$table->date('PassbkLTR_DATE')->nullable();
			$table->decimal('PassbkBAL', 13)->nullable();
			$table->smallInteger('PassbkSEQNO')->unsigned()->nullable();
			$table->primary(['PassbkBR_CODE','PassbkCLIENTID','PassbkSLC_CODE','PassbkSLT_CODE','PassbkREF_NO']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('passbk');
	}

}
