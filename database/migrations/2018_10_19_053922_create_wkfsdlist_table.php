<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWkfsdlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wkfsdlist', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('CLIENTID')->unsigned();
			$table->boolean('SLC_CODE');
			$table->boolean('SLT_CODE');
			$table->string('REF_NOx', 45);
			$table->string('SLDESCR', 100)->nullable();
			$table->string('CLIENTIDx', 45)->nullable();
			$table->string('CLIENTNAME', 200)->nullable();
			$table->date('DATEOFBIRTH')->nullable();
			$table->integer('AGEx')->nullable();
			$table->string('GENDERx', 45)->nullable();
			$table->string('Chapter', 45)->nullable();
			$table->string('ACCTSTATUS', 45)->nullable();
			$table->string('CIVILSTATUS', 45)->nullable();
			$table->string('CLIENTTYPEDESC', 45)->nullable();
			$table->date('SETUPDATE')->nullable();
			$table->string('STATUS', 45)->nullable();
			$table->decimal('MINBAL', 15)->nullable();
			$table->decimal('INTRATE', 15)->nullable();
			$table->dateTime('UPDATEDATETIME')->nullable();
			$table->text('REMARKS', 65535)->nullable();
			$table->string('UPDBY', 45)->nullable();
			$table->decimal('BALANCEx', 15)->nullable();
			$table->date('LASTTRANSDATE')->nullable();
			$table->primary(['BR_CODE','CLIENTID','SLC_CODE','SLT_CODE','REF_NOx']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wkfsdlist');
	}

}
