<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class CtrlController extends Controller
{
  public function plain()
  {
    return response('こんにちは、世界!', 200)
      ->header('Content-Type', 'text/plain');
  }

  public function outJson()
  {
    return response()
      ->json([
        'name' => 'Yoshihiro, YAMADA',
        'sex' => 'male',
        'age' => '18',
      ])
      // JSONP形式の応答を生成する
      ->withCallback('callback');
  }

  public function outFile()
  {
    return response()
      ->download('C:/Data/data_log.csv', 'download.csv', ['content-type' => 'text/csv']);
  }

  public function outCsv()
  {
    return response()
      ->streamDownload(function () {
        print("1,2019/10/1,123\n" .
          "2,2019/10/1,123\n" .
          "3,2019/10/1,123\n" .
          "4,2019/10/1,123\n");
      }, 'download.csv', ['content-type' => 'text/csv']);
  }

  public function redirectBasic()
  {
    return redirect('hello/list');
  }

  public function index(Request $req)
  {
    return 'リクエストパス：' . $req->path();
  }

  public function form()
  {
    return view('ctrl.form', ['result' => '']);
  }

  public function result(Request $req)
  {
    // a. リクエスト情報を取得
    $name = $req->name;
    return view('ctrl.form', [
      'result' => 'こんにちは、' . $name . 'さん!'
    ]);
  }

  public function upload()
  {
    return view('ctrl.upload', ['result' => '']);
  }

  public function uploadfile(Request $req)
  {
    // b.ファイルが指定されているかを判定
    if (!$req->hasFile('upfile')) {
      return 'ファイルを指定してください。';
    }
    // a.ファイルを取得
    $file = $req->upfile;
    // c.ファイルが正しくアプロード出来ているか
    if (!$file->isValid()) {
      return 'アップロードに失敗しました。';
    }
    // d.オリジナルのファイル名を取得
    $name = $file->getClientOriginalName();
    // e.アップロードファイルを保存
    $file->storeAs('files', $name);
    return view('ctrl.upload', [
      'result' => $name . 'をアップロードしました。'
    ]);
  }
}
