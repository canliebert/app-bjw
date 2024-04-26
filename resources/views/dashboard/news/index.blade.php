@extends('dashboard.layouts.main')
@section('container')

<a href="/dashboard/news/create" class="btn btn-primary col-4">Create new post</a>
<div class="row">
    @foreach ($news as $newss)
     <div class="col-lg-3">
     <div class="card" style="height: 15rem;">
        <img src="{{ asset('storage/'.$newss->img) }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $newss->title }}</h5>
        <p class="card-text mt-auto">{{ $newss->subtitle }}</p>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-4">
                    <a href="/dashboard/news/{{ $newss->slug }}" class="btn btn-primary btn-sm mr-2"><i class="bi bi-eyeglasses"></i></a>
                </div>
                <div class="col-lg-4">
                <a href="/dashboard/news/{{ $newss->slug }}/edit" class="btn btn-success btn-sm mr-2"><i class="bi bi-pencil-square"></i></a>
                </div>
                <div class="col-lg-4">
                    <form class="d-inline" action="/dashboard/news/{{ $newss->slug }}" method="post">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3"></i> </button>
                    </form>
                </div>
            </div>
            
        </div>
        </div>
     </div>    
    </div>   
    @endforeach
    
   
</div>

@endsection