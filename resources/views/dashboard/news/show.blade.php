@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <a class="btn btn-primary" href="/dashboard/news/create">Creat new Post</a>

    <form class="d-inline" action="/dashboard/news/{{ $news->slug }}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>
    </form>
    <a class="btn btn-warning" href="/dashboard/news/{{ $news->slug }}/edit">Edit</a>

    <h3>{{ $news->title  }}</h3>
    <br>
    <img src="{{ asset('storage/'.$news->img) }}" alt="" style="max-height: 1200px; max-width: 1800px;">
    <div class="col-md  mg-md-t-0">

            {!! $news->body !!}

    </div>

    <a class="btn btn-primary mt-5" href="/dashboard/news">Back</a>
</div>
@endsection