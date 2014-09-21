<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PageTableSeeder extends Seeder {

	public function run()
	{
		/**
		 * Páginas por defecto para la aplicación.
		 */
		$pages = [
			[
				'name'        => 'home',
				'app'         => 'apps.home.home',
			],
			[
				'name'        => 'sing-up',
				'app'         => 'apps.home.sing-up',
			],
			[
				'name'        => 'users',
				'app'         => 'apps.home.users',
			],
			[
				'name'        => 'candidatos',
				'app'         => 'apps.home.users',
			],
			[
				'name'        => 'carrera',
				'app'         => 'apps.category.default',
			],
			[
				'name'        => 'candidato',
				'app'         => 'apps.category.user',
			],
			[
				'name'        => 'equipo',
				'app'         => 'apps.category.team',
			],
		];

		foreach ($pages as $page) {
			Page::create($page);
		}
	}

}
