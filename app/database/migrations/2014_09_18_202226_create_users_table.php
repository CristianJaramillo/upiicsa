<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			// Datos pernonales
			$table->string('full_name');
			$table->string('email')->unique();
			$table->enum('sex', ['M', 'F']);
			$table->enum('team_id', ['1', '2', '3', '4', '5', '6', '7', '8']);
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			// Que entiendes por organización?
			$table->string('question_1');
			// Dentro de tu equipo que rol desempeñas?
			$table->enum('question_2', ['Lider', 'Cerebro', 'Investigador', 'Iniciador', 'Segidor', 'Ninguno'])->default('Ninguno');
			// Piensas que el trabajo se repartió equitativamente?
			$table->enum('question_3', ['Siempre', 'Constantemente', 'Eventualmente', 'Poco', 'Nunca'])->default('Nunca');
			// Te fueron de utilidad las herramientas electrónicas 
			// para la organización de tu equipo?
			$table->enum('question_4', ['Si', 'No']);
			// Por que?
			$table->string('question_5');
			// Que plataforma fue de mayor utilidad?
			$table->enum('question_6', ['Facebook', 'Whatsapp', 'Twitter', 'Correo Electrónico', 'Skype', 'Ninguno'])->default('Ninguno');
			// Cual de estos programas usas normalmente para 
			// la elaboración de tu tus trabajos?
			$table->enum('question_7', ['Word', 'PowerPoint', '', 'Excel', 'Ninguno'])->default('Ninguno');
			// Tu aportación fue valorada por tus compañeros?
			$table->enum('question_8', ['Si', 'No']);
			// La comunicación en el equipo fue buena?
			$table->enum('question_9', ['Siempre', 'Constantemente', 'Eventualmente', 'Poco', 'Nunca'])->default('Nunca');
			// Te sientes satisfecho con el trabajo de tu equipo?
			$table->enum('question_10', ['Siempre', 'Constantemente', 'Eventualmente', 'Poco', 'Nunca'])->default('Nunca');
			// Ultima modificación.
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
		Schema::dropIfExists('users');
	}

}
