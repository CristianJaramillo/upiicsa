<?php

use UPIICSA\Entities\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		$categories = [
			[
				'name' => 'Lic. en Administración Industrial'
			],
			[
				'name' => 'Lic. en Ciencias de la Informática'
			],
			[
				'name' => 'Lic. en Ingeniería Industrial'
			],
			[
				'name' => 'Lic. en Ingeniería en Informática'
			],
			[
				'name' => 'Lic. en Ingeniería en Transportes'
			],
		];

		foreach ($categories as $category) {
			Category::create($category);
		}

	}

}