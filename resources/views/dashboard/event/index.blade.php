@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <a href="/dashboard/event/create" class="col-sm-4 btn btn-primary mb-2">Create new mad for Event</a>
    <div class="row">
        @foreach ($event as $event)
        <div class="col-lg-3 my-2">
            <div class="card">
                <div style="max-height: 400px; max-width: 300px" >
                    <img src="{{ asset('storage/'.$event->img) }}" class="card-img-top" alt="Event Image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">{{ $event->sub }}</p>
                    <p class="card-text"><small class="text-muted">Tanggal Acara: DD/MM/YYYY</small></p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="/dashboard/event/{{ $event->slug }}" class="btn btn-primary btn-sm mr-2"><i class="bi bi-eyeglasses"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="/dashboard/event/{{ $event->slug }}/edit" class="btn btn-success btn-sm mr-2"><i class="bi bi-pencil-square"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <form class="d-inline" action="/dashboard/event/{{ $event->slug }}" method="post">
                            @method('DELETE')
                            @csrf
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> </button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>  
        @endforeach
      
    </div>
    
</div>
@endsection