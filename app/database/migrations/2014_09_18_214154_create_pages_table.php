<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('layout')->default('layouts.default');
			$table->string('lang', 10)->default('es-MX');
			$table->string('title')->default('Title');
			$table->string('description')->default('Description');
			$table->string('author');
			$table->string('app')->default('apps.default')->nullable();
			$table->enum('type', ['private', 'public'])->default('public');
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
		Schema::dropIfExists('pages');
	}

}