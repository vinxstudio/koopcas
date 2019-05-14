<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOverrideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('override', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned()->nullable()->index('override_BRCODE');
			$table->text('DESCR', 65535);
			$table->smallInteger('USERIDFROM')->unsigned()->index('OVERRIDE_USERFROM');
			$table->smallInteger('USERIDTO')->unsigned()->index('OVERRIDE_USERTO');
			$table->string('STATUSFLAG', 45)->index('OVERRIDE_STATUSFLAG')->comment('WAIT - waiting for approval;  APPROVED - approved override');
			$table->integer('IMAGEFILESIZE')->unsigned();
			$table->binary('IMAGEFILE', 16777215);
			$table->string('REMARKS', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('override');
	}

}
