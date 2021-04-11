<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 191);
			$table->string('category', 191);
			$table->text('body', 65535);
			$table->string('author_id', 191)->default(' ');
			$table->string('slug', 191)->default(' ');
			$table->integer('featured')->nullable()->default(0);
			$table->string('pathtoimage', 191)->nullable();
			$table->string('created_at', 191);
			$table->string('updated_at', 191);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
