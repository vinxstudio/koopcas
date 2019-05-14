<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaAddprimaryidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_addprimaryid', function(Blueprint $table)
		{
			$table->integer('ClientID')->unsigned();
			$table->smallInteger('ClientBR_Code')->unsigned();
			$table->boolean('IdentificationType')->nullable()->index('fk_IDtype');
			$table->string('ID_Number', 50)->nullable();
			$table->index(['ClientBR_Code','ClientID'], 'fk_ClientIDBR_Code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_addprimaryid');
	}

}
