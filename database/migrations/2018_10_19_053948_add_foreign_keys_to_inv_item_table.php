<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_item', function(Blueprint $table)
		{
			$table->foreign('BrandID', 'FK_inv_item_BRANDID')->references('ID')->on('inv_brand')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_item_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CatID', 'FK_inv_item_CATID')->references('ID')->on('inv_category')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CommonNameID', 'FK_inv_item_COMMONNAMEID')->references('ID')->on('inv_commonname')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DepID', 'FK_inv_item_DEPID')->references('ID')->on('inv_department')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ItemClassID', 'FK_inv_item_ITEMCLASSID')->references('ID')->on('inv_itemclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ItemStatus', 'FK_inv_item_ITEMSTATUS')->references('ID')->on('inv_itemstatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ItemSubClassID', 'FK_inv_item_ITEMSUBCLASSID')->references('ID')->on('inv_itemsubclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ItemType', 'FK_inv_item_ITEMTYPE')->references('ID')->on('inv_itemtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ItemUnitID', 'FK_inv_item_ITEMUNITID')->references('ID')->on('inv_itemunit')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('PRODUCTID', 'FK_inv_item_PRODUCTID')->references('ID')->on('inv_product')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TaxID', 'FK_inv_item_TAXID')->references('ID')->on('inv_tax')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('VendorID', 'FK_inv_item_VENDORID')->references('ID')->on('inv_vendor')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_item', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_item_BRANDID');
			$table->dropForeign('FK_inv_item_BRCODE');
			$table->dropForeign('FK_inv_item_CATID');
			$table->dropForeign('FK_inv_item_COMMONNAMEID');
			$table->dropForeign('FK_inv_item_DEPID');
			$table->dropForeign('FK_inv_item_ITEMCLASSID');
			$table->dropForeign('FK_inv_item_ITEMSTATUS');
			$table->dropForeign('FK_inv_item_ITEMSUBCLASSID');
			$table->dropForeign('FK_inv_item_ITEMTYPE');
			$table->dropForeign('FK_inv_item_ITEMUNITID');
			$table->dropForeign('FK_inv_item_PRODUCTID');
			$table->dropForeign('FK_inv_item_TAXID');
			$table->dropForeign('FK_inv_item_VENDORID');
		});
	}

}
