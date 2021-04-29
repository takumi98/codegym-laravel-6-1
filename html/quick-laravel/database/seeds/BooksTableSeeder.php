<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert('INSERT INTO books (isbn, title, price, publisher, published)VALUES("978-4-8222-5399-8","Visual C 2019 超入門", 2000,"日経BP","2019-08-22")');
    }
}
