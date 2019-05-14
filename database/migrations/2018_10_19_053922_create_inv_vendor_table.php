<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_vendor', function(Blueprint $table)
		{
			$table->smallInteger('ID', true)->unsigned();
			$table->string('CompanyName', 200)->nullable()->index('Index_NAME');
			$table->smallInteger('BR_CODE')->unsigned();
			$table->date('TR_DATE')->nullable();
			$table->integer('ClientID')->unsigned()->nullable();
			$table->string('Title', 45)->nullable();
			$table->string('FirstName', 100)->nullable();
			$table->string('LastName', 100)->nullable();
			$table->string('StreetBarangay')->nullable();
			$table->string('CityProvince')->nullable();
			$table->string('ZIPCode', 45)->nullable();
			$table->string('Phone', 200)->nullable();
			$table->string('AltPhone', 200)->nullable();
			$table->string('CellPhone', 200)->nullable();
			$table->string('EmailAddress')->nullable();
			$table->string('OtherContactInfo', 200)->nullable();
			$table->string('AccountNumber')->nullable();
			$table->text('TERMS_TEXT', 65535)->nullable();
			$table->integer('TERMS')->unsigned()->nullable();
			$table->boolean('TERM_PERD')->nullable()->index('FK_inv_vendor_TERMPERD');
			$table->boolean('IsActive')->nullable()->default(1);
			$table->text('Remarks')->nullable();
			$table->index(['BR_CODE','ClientID'], 'FK_inv_vendor_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_vendor');
	}

}
