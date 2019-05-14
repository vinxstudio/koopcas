<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('joints', function(Blueprint $table)
		{
			$table->increments('JointsID');
			$table->smallInteger('JointsBR_CODE')->unsigned();
			$table->integer('ClientIDJoints')->unsigned()->default(0);
			$table->string('JName', 30)->nullable();
			$table->dateTime('JDateTimeAdded')->nullable();
			$table->index(['JointsBR_CODE','ClientIDJoints'], 'FK_joints_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('joints');
	}

}
