@extends('app')
@section('title','語り投稿')
@include('nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body pt-0">
                        @include('error_card_list')
                        <div class="card-text">
                            <form method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data">
                                @include('items.form')
                                <button type="submit" class="btn btn-block" style="background-color: 00ffff">投稿する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
