<nav class="navbar bg-success navbar-expand">
    @guest
        <a class="navbar-brand" href="/" ><p style="color:#7141e1"><i class="fab fa-stack-exchange mr-1"></i>Katarite<span class="h6"> guest</span></p></a>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}"><i class="far fa-registered"></i>ユーザー登録</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>ログイン</a>
        </li>
    @endguest
    @auth
        <a class="navbar-brand" href="/" ><i class="fab fa-stack-exchange mr-1"></i>Katarite</a>
       <ul class="navbar-nav ml-auto">
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('items.create') }}"><i class="fas fa-user-edit"></i>語りを投稿<picture>
            </li>
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <i class="far fa-list-alt"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <button class="dropdown-item" type="button" onclick="location.href='{{ route('items.my-page') }}'"><i class="far fa-id-badge mr-1"></i>マイページ</button>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item" type="button" onclick="location.href='{{ route('items.index') }}'"><i class="fa fa-step-backward mr-1"></i>一覧へ戻る</button>
                <div class="dropdown-divider"></div>
                <button form="logout-button" class="dropdown-item" type="submit"><i class="fas fa-door-open mr-1"></i>ログアウト</button>
            </div>
        </li>
        <!-- Dropdown -->
        <form id="logout-button" method="POST" action="{{ route('logout') }}">
            @csrf
        </form>
    @endauth
    </ul>
</nav>
