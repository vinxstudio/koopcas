<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('image', function(Blueprint $table)
		{
			$table->foreign('ItemID', 'FK_image_ITEMID')->references('ID')->on('inv_item')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ImageBR_CODE', 'imageCLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ImageBR_CODE', 'image_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('image', function(Blueprint $table)
		{
			$table->dropForeign('FK_image_ITEMID');
			$table->dropForeign('imageCLIENTID');
			$table->dropForeign('image_BRCODE');
		});
	}

}
