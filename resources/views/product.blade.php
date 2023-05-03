@extends('layouts.app')

@section('products')
    <div class="series py-4">
        <article class="d-flex justify-content-center align-items-center flex-wrap gap-5">
            @foreach ($series as $serie)
                <a class="product-link" href="{{ route('singleproduct', ['index' => $loop->index]) }}" style="text-decoration: none">
                    <div class="product">
                        <div class="product-thumb">
                            <img src="{{ $serie['thumb'] }}" class="card-img-top" alt="...">
                        </div>
                        <p><strong>{{ $serie['series'] }}</strong></p>
                    </div>
                </a>
            @endforeach
        </article>
        <button>LOAD MORE</button>
    </div>
@endsection
