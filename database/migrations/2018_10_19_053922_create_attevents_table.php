<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtteventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attevents', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_attevents_BR_CODE');
			$table->string('DESC1', 200);
			$table->date('TR_DATE');
			$table->string('LOCATION', 100);
			$table->boolean('REQUIREFP')->default(0);
			$table->boolean('ISCLOSED')->default(0);
			$table->text('REMARKS', 65535)->nullable();
			$table->decimal('PAIDAMT', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attevents');
	}

}
