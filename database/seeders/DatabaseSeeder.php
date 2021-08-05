<?php

namespace Database\Seeders;

use App\Models\Flight;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create();
        Post::factory(50)->create();
//        Flight::factory(20)->create();
//        Product::factory(20)->create();

      $faker =Faker::create();

         foreach(range(1,12) as $index){
             DB::table('products')->insert([
                 'name'=>$faker->name,
                 'created_at'=>$faker->dateTime(),
                 'updated_at'=>$faker->dateTime(),
                 'description'=>$faker->realText(200)
             ]);
         }

    }
}
