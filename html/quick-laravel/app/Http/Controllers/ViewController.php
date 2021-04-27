<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class ViewController extends Controller
{
  public function index()
  {
    // c. 出力を戻り値に
    return 'こんにちは、世界!';
  }

  public function escape()
  {
    return view('view.escape', [
      'msg' => '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
      <p>WINGSへようこそ</p>'
    ]);
  }


  public function if()
  {
    return view('view.if', [
      //乱数を取得
      'random' => random_int(0, 100)
    ]);
  }

  public function unless()
  {
    return view('view.unless', [
      //乱数を取得
      'random' => random_int(0, 100)
    ]);
  }

  public function isset()
  {
    return view('view.isset', [
      'msg' => 'こんにちは、世界!'
    ]);
  }

  public function switch()
  {
    return view('view.switch', [
      //1~5の乱数を取得
      'random' => random_int(1, 5)
    ]);
  }

  public function while()
  {
    return view('view.while');
  }


  public function for()
  {
    return view('view.for');
  }

  public function list()
  {
    //books テーブルから全行を取得
    $data = [
      'records' => Book::all()
    ];
    return view('view.list', $data);
  }

  public function foreach_assoc()
  {
    return view('view.foreach_assoc', [
      'member' => [
        'name' => 'YAMADA, Yoshihiro',
        'sex' => '男',
        'birth' => '1923-11-10'
      ]
    ]);
  }

  public function foreach_loop()
  {
    return view('view.foreach_loop', [
      'weeks' => ['月', '火', '水', '木', '金', '土', '日']
    ]);
  }

  public function master()
  {
    return view('view.master', [
      'msg' => 'こんにちは、世界!',
    ]);
  }

  public function comp()
  {
    return view('view.comp');
  }
}
