@extends('layouts.app')
@section('title-page', 'Edit Comics')
@section('content')

<div class="container">
    <h1 class="text-center pt-1"> Edit {{ $comic->title }}</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        method("PUT")

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelper" 
            class="@error('title') is-invalid @enderror" value="{{ $comic->title}}">
           
        </div>

        <div class="form-group pt-3">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="description" aria-describedby="descriptionHelper"
            class="@error('description') is-invalid @enderror" value="{{$comic->description}}">
            
        </div>

        <div class="form-group pt-3">
            <label for="thumb">Thumbnail</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://myimage.png" aria-describedby="thumbHelper"
                class="@error('thumb') is-invalid @enderror" value="{{$comic->thumb}}">
                
        </div>

        <div class="form-group pt-3">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="29.,99£" aria-describedby="thumbHelper"
            class="@error('price') is-invalid @enderror" value="{{$comic->price}}">
            
        </div>

        <div class="form-group pt-3">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Batman: The Joker War Zone" aria-describedby="seriesHelper"
            class="@error('series') is-invalid @enderror" value="{{$comic->series}}">
            
        </div>

        <div class="form-group pt-3">
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="2020-09-29" aria-describedby="saleDateHelper"
            class="@error('sale_date') is-invalid @enderror" value="{{$comic->sale_date}}">
           
        </div>

        <div class="form-group py-3">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="comic book" aria-describedby="typeHelper"
            class="@error('type') is-invalid @enderror" value="{{$comic->type}}">
            
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>
</div>


@endsection