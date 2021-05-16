@extends('layouts.app')

@section('main')
    <main id="main-hp">
        <div class="container">
            @foreach ($comics as $index => $comic)
            <a href="{{route('detail', ['id' => $index])}}" class="card">
                <div>
                    <div class="img-card">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <h5>{{$comic['series']}}</h5>
                </div>
            </a>
            @endforeach
        </div>
    </main>
@endsection