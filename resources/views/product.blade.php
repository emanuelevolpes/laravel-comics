@extends('layouts.app')

@section('page.main')
    <div class="container-fluid">
        <div class="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" srcset="">
        </div>
        <div class="series py-4">
            <article class="d-flex justify-content-center align-items-center flex-wrap gap-5">
                @foreach ($series as $serie)
                    <div class="card" style="flex-basis: 12%">
                        <img src="{{ $serie['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title"><strong>{{ $serie['series'] }}</strong></p>
                        </div>
                    </div>
                @endforeach
            </article>
            <button>LOAD MORE</button>
        </div>
        <div class="shortcut">
            <ul class="list-unstyled d-flex justify-content-center align-items-center gap-4 py-4">
                <li><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </li>
                <li><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span>
                </li>
                <li><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span>SUBSCRIPTIONS</span>
                </li>
                <li><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </li>
                <li><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>
    </div>
@endsection


<style lang="scss" scoped>
    .jumbotron>img {
        height: 400px;
        width: 100%;
        object-fit: cover;
        object-position: top
    }

    .shortcut {
        display: flex;
        background-color: #0282f9;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
    }

    .shortcut>ul {
        color: white;
    }

    .shortcut>ul>li>img {
        width: 3.75rem;
        height: 3.75rem;
        object-fit: contain;
        margin-right: 5px;
    }

    .series {
        margin: 0 auto;
        background-color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    button {
        border: none;
        background-color: #0282f9;
        color: white;
        padding: 8px 40px;
        margin-bottom: 20px;
    }
</style>
