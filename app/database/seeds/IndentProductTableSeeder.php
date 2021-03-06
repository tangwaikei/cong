<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class IndentProductTableSeeder extends Seeder {

	public function run()
	{
		IndentProduct::create([
			"indent_id" => 1,
			"product_id" => 3
		]);

		IndentProduct::create([
			"indent_id" => 2,
			"product_id" => 4
		]);

		IndentProduct::create([
			"indent_id" => 3,
			"product_id" => 5
		]);

		foreach(range(1, 10) as $index)
		{
			IndentProduct::create([
				"indent_id" => $index,
				"product_id" => $index
			]);
		}
	}

}