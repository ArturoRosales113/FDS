<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;


class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// If Default category doesn't exists
    	if (Category::where('name', '=', 'Default')->count() < 1) {
    		// Create Default category
			DB::table('categories')->insert([
	            'name' => 'Default',
	            'display_name' => str_random(10),
	            'description' => str_random(100),
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
		}

        // Use Default category
        $cat = Category::where('name', '=', 'Default')->firstOrFail();
        // Create $i dishes
        for ($i=0; $i < 10; $i++) {
        	// Create random price
        	$price = (mt_rand() / mt_getrandmax())*100;
	   		DB::table('dishes')->insert([
	            'name' => str_random(10),
	            'category_id' => $cat->id,
	            'description' => str_random(100),
	            'price' => $price,
	            'available' => True,
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        	]);
	   	}
    }
}
