<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemaphorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semaphor', function(Blueprint $table)
		{
			$table->increments('SemaphorID');
			$table->date('semTransactionDate')->nullable();
			$table->string('semPOSTSLGL', 45)->nullable();
			$table->smallInteger('semBR_CODE')->unsigned()->index('FK_semaphor_BR_CODE');
			$table->boolean('semSTARTDAY')->nullable();
			$table->text('semCTLNO', 65535)->nullable();
			$table->string('semDBVersion', 45)->nullable();
			$table->string('semNETSURPLUS', 45)->nullable();
			$table->string('semUNDNETSUR', 45)->nullable();
			$table->string('semNETLOSS', 45)->nullable();
			$table->index(['semBR_CODE','semNETSURPLUS'], 'FK_semaphor_NETSURPLUS');
			$table->index(['semBR_CODE','semUNDNETSUR'], 'FK_semaphor_UNDNETSUR');
			$table->index(['semBR_CODE','semNETLOSS'], 'FK_semaphor_NETLOSS');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('semaphor');
	}

}
