@extends('layouts.base')
@section('title','共通のレイアウトの基本')
@section('main')
<!-- a.簡単な値を渡す -->
@include('components.alert', [
'type' => 'success',
'alert_title' => 'はじめてのコンポーネント',
'slot' => 'コンポーネントは普通のビューと同じように.blade.php~~'])

@endsection
