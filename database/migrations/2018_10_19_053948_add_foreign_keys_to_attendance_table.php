<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAttendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attendance', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_attendance_BR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_attendance_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('EVENTID', 'FK_attendance_EVENTID')->references('ID')->on('attevents')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('STATUS', 'FK_attendance_STATUS')->references('ID')->on('attstatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attendance', function(Blueprint $table)
		{
			$table->dropForeign('FK_attendance_BR_CODE');
			$table->dropForeign('FK_attendance_CLIENTID');
			$table->dropForeign('FK_attendance_EVENTID');
			$table->dropForeign('FK_attendance_STATUS');
		});
	}

}
