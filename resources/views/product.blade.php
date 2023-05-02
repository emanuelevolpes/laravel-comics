@extends('layouts.app')

@section('page.main')
    <div class="container">
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
@endsection
