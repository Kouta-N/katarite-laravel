<?php
$times = 1;
?>
<div class="card mt-3" >
    <div class="card-body d-flex flex-row">
        <div>
            <h4 class="font-weight-bold">{{ $item->user->name }}</h4>
            <div><img style="border-radius : 50%; width : 120px; height : 120px; margin-bottom:10px;" src="{{ asset( $item->img_path ) }}"></div>
            <h6 class="mt-3" style="overflow-wrap: break-word; width:230px; text-align:left">{{ $times }}時間あたりの単価 : {{ number_format($item->price) }} 円</h6>
            <div class="font-weight-lighter mt-3">{{ $item->created_at->format('Y/m/d H:i') }}</div>
        </div>
        <div class="card-body pt-0 ml-2">
            <h4 class="font-weight-bold card-title">
                <a class="text-dark" href="{{ route('items.show', ['item' => $item]) }}">
                {{ $item->title }}
                </a>
            </h4>
            <div class="card-text" style="border-top:solid; width:600px">
                <h5 class="mt-3" style="overflow-wrap: break-word;">{{ $item->body }}</h5>
            </div>
            @if( Auth::id() !== $item->user_id )
            <!-- stripe modal -->
            <div class="content" style="margin-top:120px">
                <form action="{{ route('checkout') }}" method="POST">
                    <input type="hidden" name="price" value="{{ $item->price }}">
                    <input type="hidden" name="email" value="{{ $item->user->email }}">
                    @csrf
                    <script
                        src="https://checkout.stripe.com/checkout.js"
                        class="stripe-button"
                        data-key="{{ env('STRIPE_PUBLIC_KEY') }}"
                        data-name={{ $item->title }}
                        data-label="相談する"
                        data-locale="auto"
                        data-amount={{ $item->price }}
                        data-currency="JPY">
                    </script>
                </form>
            </div>
        <!-- stripe modal -->
            @endif
        </div>
    @if( Auth::id() === $item->user_id )
        <!-- dropdown -->
        <div class="ml-auto card-text">
            <div class="dropdown">
                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route("items.edit", ['item' => $item]) }}">
                        <i class="fas fa-pen mr-1"></i>投稿内容を更新する
                    </a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">
                        <i class="fas fa-trash-alt mr-1"></i>投稿内容を削除する
                    </a>
                </div>
            </div>
        </div>
        <!-- dropdown -->
        <!-- modal -->
        <div id="modal-delete-{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form method="POST" action="{{ route('items.destroy', ['item' => $item]) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                    {{ $item->title }}を削除します。よろしいですか？
                    </div>
                    <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- modal -->
        @endif
    </div>
</div>
