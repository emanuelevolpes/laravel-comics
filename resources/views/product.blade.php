@extends('layouts.app')

@section('page.main')
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
@endsection