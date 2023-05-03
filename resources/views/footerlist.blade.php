@dd($lists)
@extends('layouts.app')

@section('footer.list')
    @foreach ($lists as $list)
        <ul>
            <li>{{ $list['title'] }}</li>
        </ul>
    @endforeach
@endsection
