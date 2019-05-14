<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conn', function(Blueprint $table)
		{
			$table->smallInteger('ConnBR_CODE')->unsigned();
			$table->smallInteger('ConnID')->unsigned();
			$table->text('ConnDesc', 65535)->nullable();
			$table->text('ConnFlag', 65535)->nullable();
			$table->text('ConnIPAdd', 65535)->nullable();
			$table->smallInteger('ConnUserID')->unsigned()->nullable();
			$table->date('ConnDateAdded')->nullable();
			$table->time('ConnTimeAdded')->nullable();
			$table->primary(['ConnBR_CODE','ConnID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conn');
	}

}
