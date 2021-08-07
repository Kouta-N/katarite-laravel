@extends('app')
@section('title', 'マイページ')
@section('content')
@include('nav')
<div class="h3 text-center mt-3 font-weight-bold">My Page</div>
<div class="container">
    @foreach($items as $item)
        @include('items.my-item')
    @endforeach
</div>
@endsection
