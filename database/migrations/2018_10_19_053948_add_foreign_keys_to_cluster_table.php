<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClusterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cluster', function(Blueprint $table)
		{
			$table->foreign('ClusterBR_CODE', 'FK_Cluster_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cluster', function(Blueprint $table)
		{
			$table->dropForeign('FK_Cluster_BRCODE');
		});
	}

}
