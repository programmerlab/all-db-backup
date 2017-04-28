<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('slug')->nullable();
			$table->integer('parent_id')->nullable()->unsigned();;
			$table->timestamps();
		});

		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('category_name')->nullable();
			$table->string('sub_category_name')->nullable();
			$table->string('slug')->nullable();
			$table->string('status')->default(0);
			$table->integer('parent_id')->nullable()->unsigned();;
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
		Schema::drop('categories');
	}

}
