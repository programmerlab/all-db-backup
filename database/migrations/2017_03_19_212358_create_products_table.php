<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_title')->nullable();
			$table->integer('product_category')->unsigned()->nullable()->index('product_category');
			$table->integer('product_sub_category')->unsigned()->nullable();
			$table->float('price', 10)->nullable();
			$table->text('description', 65535)->nullable();
			$table->text('photo', 65535)->nullable();
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
		Schema::drop('products');
	}

}
