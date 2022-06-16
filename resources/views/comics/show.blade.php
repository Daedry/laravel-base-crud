@extends('layouts.app')

@section('content')

<img class="img-fluid" src="{{$comic->thumb}}" alt="">

<h1>{{$comic->title}}</h1>
<div class="content">
    {{$comic->description}}
</div>

@endsection