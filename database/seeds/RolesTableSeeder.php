<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
         'name' => 'admin',
         'display_name' => 'Administrados',
         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nisi sit esse cumque saepe ipsa!',
        ]);
        DB::table('roles')->insert([
         'name' => 'customer',
         'display_name' => 'Cliente',
         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae reiciendis ipsa officiis, hic ipsum!',
        ]);
        DB::table('roles')->insert([
         'name' => 'employee',
         'display_name' => 'Empleado',
         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa non, perspiciatis ab, sit odio optio.',
        ]);
    }
}
