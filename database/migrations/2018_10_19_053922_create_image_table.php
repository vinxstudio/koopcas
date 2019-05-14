<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image', function(Blueprint $table)
		{
			$table->increments('ImageID');
			$table->smallInteger('ImageBR_CODE')->unsigned();
			$table->integer('ClientIDimg')->unsigned()->nullable()->index('FK_image_1');
			$table->integer('ItemID')->unsigned()->nullable()->index('FK_image_ITEMID');
			$table->string('ImageType', 15)->default('');
			$table->integer('ImageFileSize')->unsigned()->default(0);
			$table->binary('ImageFile', 16777215);
			$table->text('ImageRemarks', 65535)->nullable();
			$table->dateTime('ImageDateTimeAdded')->nullable();
			$table->index(['ImageBR_CODE','ClientIDimg'], 'imageCLIENTID');
			$table->index(['ImageBR_CODE','ClientIDimg','ImageType'], 'Index_3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('image');
	}

}
