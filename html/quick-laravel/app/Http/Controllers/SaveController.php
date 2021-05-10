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
    // [9.4]検証の実行
    $this->validate($req, Book::$rules);
    // a.モデルオブジェクトにデータを詰め替え＆保存
    $b = new Book();
    $b->fill($req->except('_token'))->save();
    // ddd($b);
    return redirect('save/create');
  }

  public function edit($id)
  {
    // 指定された書籍情報を取得
    return view('save.edit', [
      'b' => Book::findOrFail($id)
    ]);
  }

  public function update(Request $req, $id)
  {
    // 目的のデータを取得
    $b = Book::find($id);
    // 入力値でモデルを更新＆保存
    $b->fill($req->except('_token', '_method'))->save();
    return redirect('hello/list');
  }

  public function show($id)
  {
    return view('save.show', [
      'b' => Book::findOrFail($id)
    ]);
  }

  public function destroy($id)
  {
    $b = Book::findOrFail($id);
    $b->delete();
    return redirect('hello/list');
  }
}
