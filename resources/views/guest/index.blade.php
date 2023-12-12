@extends('layouts.app')

@section('title')
    Movies
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @forelse ($movies as $movie)
                <div class="col-6 d-flex flex-column py-3">
                    <div>{{$movie->title}}</div>
                    <div>{{$movie->nationality}}</div>
                    <div>{{$movie->vote}}</div>
                </div>                    
                @empty    
                @endforelse

            </div>
        </div>
    </section>
@endsection