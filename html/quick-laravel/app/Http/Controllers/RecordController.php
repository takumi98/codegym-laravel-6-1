<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
// a. Controller クラスを継承
class RecordController extends Controller
{
  public function find()
  {
    // ddd(Book::all());
    return Book::find(1)->title;
  }
}