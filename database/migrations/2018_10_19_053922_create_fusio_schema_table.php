<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioSchemaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_schema', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('status')->default(1);
			$table->string('name')->unique('UNIQ_B6B33EA5E237E06');
			$table->text('source');
			$table->binary('cache');
			$table->text('form')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_schema');
	}

}
