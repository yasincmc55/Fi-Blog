<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $faker = Faker::create();
      for($i=0;$i<10;$i++){
        DB::table('posts')->insert([
           'category_id'=>$faker->numberBetween(1,4),
           'title'=>$faker->sentence,
           'content'=>$faker->paragraph,
           'slug'=>Str::slug($faker->sentence),
        ]);
      }
    }
}
