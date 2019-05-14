<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaAddprimaryidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_addprimaryid', function(Blueprint $table)
		{
			$table->foreign('ClientBR_Code', 'fk_ClientIDBR_Code')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('IdentificationType', 'fk_IDtype')->references('idTypeCode')->on('cisa_primaryid')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_addprimaryid', function(Blueprint $table)
		{
			$table->dropForeign('fk_ClientIDBR_Code');
			$table->dropForeign('fk_IDtype');
		});
	}

}
