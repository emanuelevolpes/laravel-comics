<main>
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" srcset="">
    </div>
    @yield('products')
    @yield('single.product')
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
</main>