<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		
		// Permite obtener campos de forma arbitraria.
		$faker = Faker::create();
		
		$categories  = Category::all()->lists('id');

		$team = ['1', '2', '3', '4', '5', '6', '7', '8'];

		$sex = ['M', 'F'];

		$question_2  = ['Lider', 'Cerebro', 'Investigador', 'Iniciador', 'Segidor', 'Ninguno'];
		$question_3  = ['Siempre', 'Constantemente', 'Eventualmente', 'Poco', 'Nunca'];
		$question_4  = ['Si', 'No'];
		$question_6  = ['Facebook', 'Whatsapp', 'Twitter', 'Correo Electrónico', 'Skype', 'Ninguno'];
		$question_7  = ['Word', 'PowerPoint', '', 'Excel', 'Ninguno'];
		$question_8  = ['Si', 'No'];
		$question_9  = ['Siempre', 'Constantemente', 'Eventualmente', 'Poco', 'Nunca'];
		$question_10 = ['Siempre', 'Constantemente', 'Eventualmente', 'Poco', 'Nunca'];

		foreach (range(1, 70) as $index) {
			
			$user = new User();
		
			$user->full_name    = $faker->name;
			$user->email        = $faker->email;
			$user->team          = $faker->randomElement($team);
			$user->sex          = $faker->randomElement($sex);

			$user->category_id  = $faker->randomElement($categories);

			$user->question_1   = $faker->text;
			$user->question_2   = $faker->randomElement($question_2);
			$user->question_3   = $faker->randomElement($question_3);
			$user->question_4   = $faker->randomElement($question_4);
			$user->question_5   = $faker->text;
			$user->question_6   = $faker->randomElement($question_6);
			$user->question_7   = $faker->randomElement($question_7);
			$user->question_8   = $faker->randomElement($question_8);
			$user->question_9   = $faker->randomElement($question_9);
			$user->question_10  = $faker->randomElement($question_10);

			$user->save();
		}

	}

}