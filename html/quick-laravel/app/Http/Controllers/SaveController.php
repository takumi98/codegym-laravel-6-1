<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class SaveController extends Controller
{
  // 入力フォームの生成
  public function create()
  {
    return view('save.create');
  }
  // フォームからの入力値をデータベースに登録
  public function store(Request $req)
  {
    // a.モデルオブジェクトにデータを詰め替え＆保存
    $b = new Book();
    $b->fill($req->except('_token'))->save();
    return redirect('save/create');
  }
}
