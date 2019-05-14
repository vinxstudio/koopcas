<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusColumnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_columns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('table_name', 64)->default('');
			$table->string('column_name', 64)->default('');
			$table->string('data_type', 64)->nullable();
			$table->string('ui', 64)->nullable();
			$table->enum('relationship_type', array('MANYTOONE','MANYTOMANY','ONETOMANY'))->nullable();
			$table->string('related_table', 64)->nullable();
			$table->string('junction_table', 64)->nullable();
			$table->string('junction_key_left', 64)->nullable();
			$table->string('junction_key_right', 64)->nullable();
			$table->boolean('hidden_input')->default(0);
			$table->boolean('required')->default(0);
			$table->integer('sort')->nullable();
			$table->string('comment', 1024)->nullable();
			$table->text('options', 65535)->nullable();
			$table->unique(['table_name','column_name'], 'table-column');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_columns');
	}

}
