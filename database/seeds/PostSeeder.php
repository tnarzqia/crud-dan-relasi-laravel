<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////untuk menambahkan data fake
        $faker = Faker::create('en_us');

        for ($i=0; $i < 3 ; $i++) {
            DB::table('posts')->insert([
                'id_category' => 3,
                'title' => $faker->word,
                'article' => $faker->text($maxNbChars = 250)
             ]);
        }
    }
}
