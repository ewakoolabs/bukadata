<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstitutionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('institutions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('hierarchy_id')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->default(0);
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
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
		Schema::drop('institutions');
	}

}
