<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaMembersnameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_membersname', function(Blueprint $table)
		{
			$table->increments('MembersID');
			$table->smallInteger('MemberBR_CODE')->unsigned()->nullable()->index('fk_memBR_CODE');
			$table->integer('MemberClientID')->unsigned()->nullable();
			$table->string('Fname', 50)->nullable();
			$table->string('Mname', 50)->nullable();
			$table->string('Lname', 50)->nullable();
			$table->string('NameExtnt', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_membersname');
	}

}
