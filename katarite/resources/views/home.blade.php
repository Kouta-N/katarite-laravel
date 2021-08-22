@extends('app')
@section('title', 'ホーム画面')
@include('nav')
<main role="main" class="main-color">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/images/conversation.jpg') }}" alt="First Slied" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>相談しよう</h1>
                        <p class="carousel-description">頼れる先人達に悩みを相談しよう!</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href={{ route('items.index') }}>
                                List
                            </a>
                        </p>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/world.jpg') }}" alt="Second Slied" class="img-fluid">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>多種多様な人々</h1>
                            <p class="carousel-description">様々な話を聞いて、人生に役立てよう!</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href={{ route('items.index') }}>
                                    List
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <div class="carousel-item">
                    <img src="{{ asset('storage/images/teacher.jpg') }}" alt="Third Slied" class="img-fluid">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>あなたの経験が価値になる</h1>
                        <p class="carousel-description">経験を語り、収入を得ることも可能!</p>
                        <p class="carousel-description"></p>
                        <p>
                                <a class="btn btn-lg btn-primary" href={{ route('login') }} role="button">
                                    Login
                                </a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container marketing">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading mt-5 font-weight-bold">Katariteとは?</h2>
                <p class="lead">
                    世界には多種多様な悩みを抱えた人々がいます。そんな人々のために、様々な人生経験のある先人と会話の機会を設ける。それがKatariteです。誰でも簡単に人生の相談や価値ある経験を聞くことや、人生の相談が行えます。そして、人の相談に乗ることも可能です。
                </p>
            </div>
            <div class="ml-5 mt-3 mb-3">
                <img src="{{ asset('storage/images/world-small.png') }}" alt="description1">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row mt-5">
            <div class="col-lg-4">
                <img src="{{ asset('storage/images/wemen-small.jpg') }}" alt="Describe1">
                <div class="h2 mt-2 text-center">1人で悩まず相談しよう!</div>
                <p>
                    抱えている悩みがどうすれば解決するのかと、途方にくれてはいませんか? Katariteでは、あなたと同じ問題と直面し、それを乗り越えてきた人々に相談をすることができます。どんなに些細でマイナーな悩みであったとしても、1人で考えるよりも、誰かに相談した方が解決する可能性が高まります!
                </p>
                <p>
                    <a class="btn btn-secondary" href={{ route('items.index') }} role="button">
                        List &raquo;
                    </a>
                </p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('storage/images/team-small2.jpg') }}" alt="Describe2">
                <div class="h2 mt-2 text-center">人々の知見を得よう!</div>
                <p>
                    Katariteでは多種多様な人々の経験を聞き、知見を得ることができます。あなたが今まで知らなかった世界の扉を開くチャンスです。また、面白い人生経験を聞くことは、娯楽にもなるでしょう。
                    加えて、作家やライターなど、様々なクリエイター達のアイデアを収集ツールとしても利用できます。
                </p>
                <p>
                    <a class="btn btn-secondary" href={{ route('items.index') }} role="button">
                        List &raquo;
                    </a>
                </p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('storage/images/teach2-small2.jpg') }}" alt="Describe3">
                <div class="h2 mt-2 text-center">経験が価値に変わる!</div>
                <p>
                    あなたの経験が、他の人々を救う時が来るかもしれません。自分では普通の人生だと思っていても、他の人にとって価値のある経験をしている可能性は十分にあります。クレジットカード決済で収入を得ることも可能で、料金はあなたが設定可能です。設定方法はとってもシンプル! 一歩を踏み出してみませんか?
                </p>
                <p>
                    <a class="btn btn-secondary" href={{ route('login') }} role="button">
                        Login &raquo;
                    </a>
                </p>
            </div>
        </div>
    </div>
    <footer class="footer-line">
        <p class="h6 mt-3 text-right">Copyright © 2021 Kouta N All Rights Reserved.<a class="text-center ml-3 btn btn-lg btn-light" href="#" role="button">Back to top</a></p>
    </footer>
</main>
