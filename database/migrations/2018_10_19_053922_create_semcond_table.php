<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemcondTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semcond', function(Blueprint $table)
		{
			$table->smallInteger('SemCondID', true)->unsigned();
			$table->smallInteger('SemCondBR_CODE')->unsigned()->index('semcond_BRCODE');
			$table->string('SemCondTopic', 45)->nullable();
			$table->date('SemCondDate')->nullable();
			$table->smallInteger('SemCondHours')->unsigned()->nullable();
			$table->string('SemCondFacilitator', 45)->nullable();
			$table->text('SemCondRemarks', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('semcond');
	}

}
