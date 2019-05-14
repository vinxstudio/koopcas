<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBenefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('benef', function(Blueprint $table)
		{
			$table->increments('BenefID');
			$table->smallInteger('BenefBR_CODE')->unsigned();
			$table->integer('ClientIDBenef')->unsigned();
			$table->string('BenefName', 50)->nullable();
			$table->boolean('BenefRelation')->nullable()->index('FK_benef_2');
			$table->date('BenefDateofBirth')->nullable();
			$table->string('BenefOccu', 35)->nullable();
			$table->dateTime('BenefDateTimeAdded')->nullable();
			$table->index(['BenefBR_CODE','ClientIDBenef'], 'FK_Benef_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('benef');
	}

}
