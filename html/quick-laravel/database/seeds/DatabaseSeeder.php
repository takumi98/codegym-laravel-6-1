<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
