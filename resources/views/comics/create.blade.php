@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center pt-1">Create a new Comic</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelper">
        </div>

        <div class="form-group pt-3">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="description" aria-describedby="descriptionHelper">
        </div>

        <div class="form-group pt-3">
            <label for="thumb">Thumbnail</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://myimage.png" aria-describedby="thumbHelper">
        </div>

        <div class="form-group pt-3">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="29.,99£" aria-describedby="thumbHelper">
        </div>

        <div class="form-group pt-3">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Batman: The Joker War Zone" aria-describedby="seriesHelper">
        </div>

        <div class="form-group pt-3">
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="2020-09-29" aria-describedby="saleDateHelper">
        </div>

        <div class="form-group py-3">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="comic book" aria-describedby="typeHelper">
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>
</div>


@endsection