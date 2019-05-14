<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_inv_item_BRCODE');
			$table->string('UPC', 200)->nullable()->index('Index_BARCODE');
			$table->string('DESC1', 100);
			$table->string('DESC2', 200)->nullable();
			$table->string('AlternateLookup', 200)->nullable()->index('Index_ALTRNT');
			$table->date('TR_DATE');
			$table->boolean('ItemType')->nullable()->index('FK_inv_item_ITEMTYPE');
			$table->boolean('ItemStatus')->nullable()->index('FK_inv_item_ITEMSTATUS');
			$table->boolean('DepID')->nullable()->index('FK_inv_item_DEPID');
			$table->boolean('CatID')->nullable()->index('FK_inv_item_CATID');
			$table->smallInteger('VendorID')->unsigned()->nullable()->index('FK_inv_item_VENDORID');
			$table->string('Attribute', 200)->nullable();
			$table->string('BinLocation', 200)->nullable();
			$table->boolean('IsTaxable1')->nullable()->default(0);
			$table->boolean('IsTaxable2')->nullable()->default(0);
			$table->decimal('AvgCost', 15, 6)->nullable();
			$table->decimal('OrderCost', 15)->nullable();
			$table->decimal('OrderQty', 15)->nullable();
			$table->decimal('RetailPrice', 15)->nullable();
			$table->decimal('WholeSalePrice', 15)->nullable();
			$table->decimal('GrossMargin', 15)->nullable();
			$table->integer('ReorderQty')->unsigned()->nullable();
			$table->boolean('TaxID')->nullable()->index('FK_inv_item_TAXID');
			$table->boolean('IsConsignment')->nullable()->default(0);
			$table->text('Remarks', 65535)->nullable();
			$table->string('TAGGING', 50)->nullable();
			$table->smallInteger('PRODUCTID')->unsigned()->nullable()->index('FK_inv_item_PRODUCTID');
			$table->string('Variants', 200)->nullable();
			$table->decimal('ItemSize', 15)->nullable();
			$table->smallInteger('ItemUnitID')->unsigned()->nullable();
			$table->smallInteger('BrandID')->unsigned()->nullable();
			$table->smallInteger('CommonNameID')->unsigned()->nullable();
			$table->smallInteger('ItemClassID')->unsigned()->nullable();
			$table->smallInteger('ItemSubClassID')->unsigned()->nullable();
			$table->index(['DESC1','DESC2'], 'Index_DESCR');
			$table->index(['ItemUnitID','BR_CODE'], 'FK_inv_item_ITEMUNITID');
			$table->index(['BrandID','BR_CODE'], 'FK_inv_item_BRANDID');
			$table->index(['CommonNameID','BR_CODE'], 'FK_inv_item_COMMONNAMEID');
			$table->index(['ItemClassID','BR_CODE'], 'FK_inv_item_ITEMCLASSID');
			$table->index(['ItemSubClassID','BR_CODE'], 'FK_inv_item_ITEMSUBCLASSID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_item');
	}

}
