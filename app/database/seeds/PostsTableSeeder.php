<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Blog\Entities\Post;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        DB::statement("SET foreign_key_checks = 0");
        Post::truncate();

		foreach(range(1, 10) as $index)
		{
			Post::create([
                'title'         =>  $faker->sentence(),
                'slug'          =>  Str::slug($faker->sentence()),
                'body'          =>  $faker->paragraph(2),
                'user_id'       =>  $faker->numberBetween(1,2),
                'published_at'  =>  $faker->dateTimeBetween('- 7 days', 'now')
			]);
		}
	}

}
