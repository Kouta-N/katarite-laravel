@extends('app')
@section('title','投稿内容投稿')
@include('nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body pt-0">
                        @include('error_card_list')
                        <div class="card-text">
                            <form method="POST" action="{{ route('items.update',['item' => $item]) }}" enctype="multipart/form-data">
                                @method('PATCH')
                                @include('items.form')
                                <button type="submit" class="btn btn-block btn-info">更新する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
