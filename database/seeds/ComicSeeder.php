<?php

use Faker\Generator as Faker;
use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 200; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->words(5, true);
            $newComic->author = $faker->words(3, true);
            $newComic->page =  $faker->numberBetween(20, 300);
            $newComic->image = $faker->imageUrl(640, 480, 'comics', true);
            $newComic->description = $faker->paragraphs(3, true);
            $newComic->price = $faker->randomFloat(1, 20, 100);
            $newComic->available = $faker->boolean();

            $newComic->save();
        }
    }
}
