<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusTablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_tables', function(Blueprint $table)
		{
			$table->string('table_name', 64)->default('')->primary();
			$table->string('display_template')->nullable()->default('');
			$table->string('preview_url')->nullable()->default('');
			$table->boolean('hidden')->default(0);
			$table->boolean('single')->default(0);
			$table->boolean('default_status')->default(1);
			$table->boolean('footer')->nullable()->default(0);
			$table->string('column_groupings')->nullable();
			$table->string('primary_column', 64)->nullable();
			$table->string('sort_column', 64)->nullable();
			$table->string('status_column', 64)->nullable();
			$table->text('status_mapping', 65535)->nullable();
			$table->string('user_create_column', 64)->nullable();
			$table->string('user_update_column', 64)->nullable();
			$table->string('date_create_column', 64)->nullable();
			$table->string('date_update_column', 64)->nullable();
			$table->text('filter_column_blacklist', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_tables');
	}

}
