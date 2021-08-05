@extends('app')
@section('title', '決済後画面')
@section('content')
@include('nav')
    <div class="mt-3 text-center report_message">購入が完了しました。</div>
    <div class="text-center mt-3"><button class="btn btn-success"><a href={{ route('items.index') }}><span class="report_back">投稿一覧へ戻る</span></a></button></div>
@endsection

