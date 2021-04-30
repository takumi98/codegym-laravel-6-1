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

  public function where()
  {
    $result = Book::where('title', 'LIKE', '%Java%')->get();
    // firstなら最初の1件
    return view('hello.list', ['records' => $result]);
  }

  public function hasmany()
  {
    return view('record.hasmany', [
      'book' => Book::find(1)
    ]);
  }
}
