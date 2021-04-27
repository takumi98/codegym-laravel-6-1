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
}
