<header>
    <div class="container-fluid">
        <div class="header-top">
        </div>
        <div class="menu">
            <nav>
                <ul class="list-unstyled d-flex justify-content-center align-items-center gap-3 py-3">
                    <li><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" srcset=""></li>
                    <li><a href="{{ route('home') }}">CHARACTERS</a></li>
                    <li><a href="{{ route('product') }}">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">VIDEOS</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<style lang="scss" scoped>
    .header-top {
        height: 20px;
        background-color: #0282f9;
    }

    .menu>nav>ul>li>img {
        width: 70px;
    }

    .menu>nav>ul>li>a {
        text-decoration: none;
        color: gray
    }    

    .menu>nav>ul>li>a:hover {
        color: #0282f9;
    }
</style>