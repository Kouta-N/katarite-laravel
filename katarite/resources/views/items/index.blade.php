@extends('app')
@section('title', 'アイテム一覧')
@section('content')
@include('nav')
<div class="h3 text-center mt-3 font-weight-bold">Talks</div>
<div class="container">
    @foreach($items as $item)
        @include('items.talk')
    @endforeach
</div>
@endsection
