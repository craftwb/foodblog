<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Blog\Entities\Post;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        Post::truncate();

		foreach(range(1, 10) as $index)
		{
			Post::create([
                'title'         =>  $faker->sentence(),
                'author'        =>  $faker->numberBetween(1,5),
                'body'          =>  $faker->paragraph(2),
                'tag'           =>  $faker->word,
                'published_at'  =>  $faker->dateTimeBetween('- 7 days', 'now')
			]);
		}
	}

}
