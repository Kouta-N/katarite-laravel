@extends('app')
@section('title', '決済後画面')
@section('content')
@include('nav')
@auth
<br>
    <p>購入が完了しました。</p>
    <button><a href={{ route('items.index') }}>投稿一覧へ戻る</a></button>
@endauth
@endsection

