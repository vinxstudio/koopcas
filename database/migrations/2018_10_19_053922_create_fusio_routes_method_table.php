<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioRoutesMethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_routes_method', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('parameters')->nullable()->index('IDX_4B63F3B469348FE');
			$table->integer('request')->nullable()->index('IDX_4B63F3B43B978F9F');
			$table->integer('action')->nullable()->index('IDX_4B63F3B447CC8C92');
			$table->integer('routeId')->index('IDX_4B63F3B4EF2EA341');
			$table->string('method', 8);
			$table->integer('version');
			$table->integer('status');
			$table->integer('active')->default(0);
			$table->integer('public')->default(0);
			$table->string('description', 500)->nullable();
			$table->text('schemaCache')->nullable();
			$table->text('actionCache')->nullable();
			$table->unique(['routeId','method','version'], 'UNIQ_4B63F3B4EF2EA3415E593A60BF1CD3C3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_routes_method');
	}

}
