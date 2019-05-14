<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_activity', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type', 100)->nullable();
			$table->string('action', 100);
			$table->string('identifier', 100)->nullable();
			$table->string('table_name', 100)->default('');
			$table->integer('row_id')->unsigned()->nullable()->default(0);
			$table->integer('user')->unsigned()->default(0);
			$table->text('data', 65535)->nullable();
			$table->text('delta', 65535)->nullable();
			$table->integer('parent_id')->unsigned()->nullable();
			$table->string('parent_table', 100)->nullable();
			$table->boolean('parent_changed')->default(0)->comment('Did the top-level record in the change set alter (scalar values/many-to-one relationships)? Or only the data within its related foreign collection records? (*toMany)');
			$table->dateTime('datetime')->nullable();
			$table->string('logged_ip', 45)->nullable();
			$table->string('user_agent', 256)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_activity');
	}

}
