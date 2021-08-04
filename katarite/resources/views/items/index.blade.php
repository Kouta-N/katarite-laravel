@php
$time = 1
@endphp
@extends('app')
@section('title', 'アイテム一覧')
@section('content')
@include('nav')
<div class="top__title text-center mt-3" style="font-weight:bold; font-size:24px; ">
    Talks
</div>
<div class="container">
    @foreach($items as $item)
        @include('items.talk')
    @endforeach
</div>
@endsection
