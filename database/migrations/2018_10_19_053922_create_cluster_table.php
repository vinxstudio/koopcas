<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClusterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cluster', function(Blueprint $table)
		{
			$table->smallInteger('ClusterID', true)->unsigned();
			$table->string('ClusterDesc', 200);
			$table->smallInteger('ClusterBR_CODE')->unsigned()->index('FK_Cluster_BRCODE');
			$table->primary(['ClusterID','ClusterBR_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cluster');
	}

}
