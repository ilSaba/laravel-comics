@extends('layouts.app')

@section('main')
    <main id="main-single">
        <img src="{{$comic['thumb']}}" alt="">
        <h5>{{$comic['series']}}</h5>
        <p>{{$comic['description']}}</p>
    </main>
@endsection