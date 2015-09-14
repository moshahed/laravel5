<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('title',['Dr.', 'Prof.']);
			$table->string('name',50)->unique();
			$table->string('speciality',300);
			$table->string('mobile',50);
			$table->string('email',50);
			$table->text('address');
			$table->enum('chamber',['Yes', 'No']);
			$table->text('schedule');
			$table->softDeletes();
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
		Schema::drop('doctors');
	}

}
