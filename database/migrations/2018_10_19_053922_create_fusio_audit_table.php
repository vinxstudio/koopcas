<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioAuditTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_audit', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('appId');
			$table->integer('userId');
			$table->integer('refId')->nullable();
			$table->string('event');
			$table->string('ip', 40);
			$table->string('message');
			$table->text('content')->nullable();
			$table->dateTime('date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_audit');
	}

}
