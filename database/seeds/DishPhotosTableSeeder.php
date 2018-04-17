<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DishPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);//
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);
     DB::table('dish_pics')->insert([
      'dish_id' => $faker->numberBetween(1,20),
      'img_path' => 'img/image_placeholder.jpg',
      'enabled' => true,
     ]);

    }
}
