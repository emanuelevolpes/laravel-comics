@extends('layouts.app')

@section('page.main')
    <div class="container-fluid">
        <div class="jumbotron">
            {{-- <img class="py-5" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" srcset=""> --}}
        </div>
        <div>
            <article class="d-flex flex-wrap gap-5">
                @foreach ($series as $serie)
                    <div class="card" style="flex-basis: 12%">
                        <img src="{{ $serie['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $serie['series'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </article>
        </div>
        <div style="background-color: blue">
            <ul class="list-unstyled d-flex justify-content-center align-items-center gap-4 py-4">
                <li><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span></li>
                <li><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span></li>
                <li><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span>SUBSCRIPTIONS</span></li>
                <li><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span>COMIC SHOP LOCATOR</span></li>
                <li><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="" style="width: 100px">
                    <span>DC POWER VISA</span></li>
            </ul>
        </div>
    </div>
@endsection


<style lang="scss" scoped>
.jumbotron {
    background-image: url('resources/img/jumbotron.jpg');
    height: 400px;
}
</style>