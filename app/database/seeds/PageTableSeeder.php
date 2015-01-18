<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use UPIICSA\Entities\Page;

class PageTableSeeder extends Seeder {

	public function run()
	{
		/**
		 * Páginas por defecto para la aplicación.
		 */
		$pages = [
			[
				'name'        => 'welcome',
				'layout'      => 'layouts.upiicsa',
				'lang'        => 'es-MX',
				'description' => 'Plataforma de Sociedad, Técnologia y Deontología empleada en la UPICSA con el objetivo de recabar información sobre el trabajo colaborativo de los alumnos con respecto a la relación de cordinación y trabajo en equipo.',
				'author'      => 'Cristian Jaramillo',
				'title'       => 'UPICSA - Sociedad, Técnologia y Deontología',
				'app'         => 'apps.welcome',
			],
			[
				'name'        => 'team',
				'layout'      => 'layouts.upiicsa',
				'lang'        => 'es-MX',
				'description' => 'Plataforma de Sociedad, Técnologia y Deontología empleada en la UPICSA con el objetivo de recabar información sobre el trabajo colaborativo de los alumnos con respecto a la relación de cordinación y trabajo en equipo.',
				'author'      => 'Cristian Jaramillo',
				'title'       => 'UPICSA - Sociedad, Técnologia y Deontología',
				'app'         => 'apps.team',
			],
		];

		foreach ($pages as $page) {
			Page::create($page);
		}
	}

}
