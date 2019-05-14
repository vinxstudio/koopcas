<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('CLIENTID')->unsigned();
			$table->integer('EVENTID')->unsigned()->index('FK_attendance_EVENTID');
			$table->boolean('STATUS')->nullable()->index('FK_attendance_STATUS');
			$table->text('REMARKS', 65535)->nullable();
			$table->string('ENCDBY', 50)->nullable();
			$table->boolean('PAIDFLAG')->default(0);
			$table->decimal('PAIDAMT', 15)->nullable();
			$table->dateTime('UPDDATETIME')->nullable();
			$table->unique(['BR_CODE','CLIENTID','EVENTID'], 'Index_UNIQUE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attendance');
	}

}
