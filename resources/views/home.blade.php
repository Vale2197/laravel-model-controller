@extends('layout.app')

@section('title', 'home')

@section('content')

    <div class="container">

        <div class="row g-3 py-5 justify-content-center">

            <h1 class="mb-3">
                MOVIES:
            </h1>

            @forelse ($movies as $movie)
    
                <div class="card mx-2" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">original title: {{$movie->original_title}}</h6>
                    <p class="card-text"> nationality: {{ $movie->nationality }}</p>
                    <span class="card-link"> {{ $movie->date }} </span>
                    <span class="card-link"> {{ $movie->vote }} </span>
                    </div>
                </div>
                
            @empty
                <p>
                    non ci sono film al momento..    
                </p>    
    
            @endforelse

        </div>



    </div>

@endsection