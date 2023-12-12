@extends('layout.app')

@section('content')
    
    <div class="container">
        <div class="card-group">
        @foreach ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-title">{{ $movie->original_title}}</h6>
                    <p class="card-text">{{ $movie->nationality}}</p>
                    <p class="card-text">{{ $movie->date}}</p>
                    <p class="card-text">{{ $movie->vote}}</p>
                </div>
            </div>
        @endforeach    
        </div>
    </div>
        

@endsection