<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaCmsecndryidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_cmsecndryid', function(Blueprint $table)
		{
			$table->foreign('cmsecID1Country', 'fk_cmsecID1Country')->references('CountryID')->on('cisa_country')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('cmsecID1Type', 'fk_cmsecID1type')->references('idTypeCode')->on('cisa_secondaryid')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('cmsecID2Country', 'fk_cmsecID2Country')->references('CountryID')->on('cisa_country')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('cmsecID2Type', 'fk_cmsecID2type')->references('idTypeCode')->on('cisa_secondaryid')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('cmsecID3Country', 'fk_cmsecID3Country')->references('CountryID')->on('cisa_country')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('cmsecID3Type', 'fk_cmsecID3type')->references('idTypeCode')->on('cisa_secondaryid')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('cmsecIDBR_CODE', 'fk_cmsecIDClientIDBR_Code')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_cmsecndryid', function(Blueprint $table)
		{
			$table->dropForeign('fk_cmsecID1Country');
			$table->dropForeign('fk_cmsecID1type');
			$table->dropForeign('fk_cmsecID2Country');
			$table->dropForeign('fk_cmsecID2type');
			$table->dropForeign('fk_cmsecID3Country');
			$table->dropForeign('fk_cmsecID3type');
			$table->dropForeign('fk_cmsecIDClientIDBR_Code');
		});
	}

}
