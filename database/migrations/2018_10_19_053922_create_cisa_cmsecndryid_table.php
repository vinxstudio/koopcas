<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaCmsecndryidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_cmsecndryid', function(Blueprint $table)
		{
			$table->integer('cmsecIDClientID')->unsigned()->nullable();
			$table->smallInteger('cmsecIDBR_CODE')->unsigned()->nullable();
			$table->boolean('cmsecID1Type')->nullable()->index('fk_cmsecID1type');
			$table->string('cmsecID1Num', 50)->nullable();
			$table->date('cmsecID1IssueDate')->nullable();
			$table->boolean('cmsecID1Country')->nullable()->index('fk_cmsecID1Country');
			$table->date('cmsecID1ExpiryDate')->nullable();
			$table->string('cmsecID1IssuedBy', 100)->nullable();
			$table->boolean('cmsecID2Type')->nullable()->index('fk_cmsecID2type');
			$table->string('cmsecID2Num', 50)->nullable();
			$table->date('cmsecID2IssueDate')->nullable();
			$table->boolean('cmsecID2Country')->nullable()->index('fk_cmsecID2Country');
			$table->date('cmsecID2ExpiryDate')->nullable();
			$table->string('cmsecID2IssuedBy', 100)->nullable();
			$table->boolean('cmsecID3Type')->nullable()->index('fk_cmsecID3type');
			$table->string('cmsecID3Num', 50)->nullable();
			$table->date('cmsecID3IssueDate')->nullable();
			$table->boolean('cmsecID3Country')->nullable()->index('fk_cmsecID3Country');
			$table->date('cmsecID3ExpiryDate')->nullable();
			$table->string('cmsecID3IssuedBy', 100)->nullable();
			$table->index(['cmsecIDBR_CODE','cmsecIDClientID'], 'fk_cmsecIDClientIDBR_Code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_cmsecndryid');
	}

}
