@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="wrapper bg-primary">
        <div class="container">
            <h1 class="p-4">Comics</h1>
        </div>
    </div>
    <div class="container">
        <div class="cards my-5">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-4">
                @forelse($comics as $comic)
                <div class="col">
                    <div class="card">
                        <div class="card-top">
                            <img class="card-img-top img-fluid" src="{{ $comic->thumb }}" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{route('comics.show')}}" class="btn btn-primary">Show more</a>
                        </div>
                    </div>
                </div>
                @empty
                <p>No comics found</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection