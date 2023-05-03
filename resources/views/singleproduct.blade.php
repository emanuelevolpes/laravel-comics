@extends('layouts.app')

@section('single.product')
    <div class="container-single-product-top">
        <img class="single-thumb" src="{{ $series['thumb'] }}" alt="thumb">
        <div class="left-section">
            <h2>{{ $series['title'] }}</h2>
            <p>U.S. Price: {{ $series['price'] }}</p>
            <p>{{ $series['description'] }}</p>
        </div>
        <div class="advertisement">
            <p>ADVERTISEMENT</p>
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv-image">
        </div>
    </div>
    <div class="container-single-product-bottom">
        <div class="left-section">
            <h3>Talent</h3>
            <div class="talent">
                <div class="art-by">
                    <h4>Art by:</h4>
                    <div class="artists">
                        @foreach ($series['artists'] as $artists)
                            <span>{{ $artists }},</span>
                        @endforeach
                    </div>
                </div>
                <div class="written-by">
                    <h4>Written by:</h4>
                    <div class="writers">
                        @foreach ($series['writers'] as $writers)
                            <span>{{ $writers }},</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="right-section">
            <h3>Specs</h3>
            <div class="specs">
                <strong>Series:</strong>
                <p>{{ $series['series'] }}</p>
            </div>
            <div class="specs">
                <strong>U.S. Price:</strong>
                <p>{{ $series['price'] }}</p>
            </div>
            <div class="specs">
                <strong>On Sale Date:</strong>
                <p>{{ $series['sale_date'] }}</p>
            </div>
        </div>
    </div>
@endsection
