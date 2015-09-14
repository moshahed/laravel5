<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('investigations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id');
			$table->string('name',50);
			$table->decimal('amount',6,2);
			$table->decimal('rf_amount',6,2);
			$table->string('heading_name',100);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('investigations');
	}

}
