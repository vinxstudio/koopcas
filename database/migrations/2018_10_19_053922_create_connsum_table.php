<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConnsumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('connsum', function(Blueprint $table)
		{
			$table->smallInteger('ConnBR_CODE')->unsigned();
			$table->integer('ConnID')->unsigned()->primary();
			$table->smallInteger('ConnUserID')->unsigned()->nullable();
			$table->string('ConnHost', 100)->nullable();
			$table->date('ConnDate')->nullable();
			$table->time('ConnTime')->nullable();
			$table->string('ConnPCName', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('connsum');
	}

}
