@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <a href="/dashboard/product/create" class="col-sm-4 btn btn-primary mb-2">Create new mad for product</a>
    <div class="row">
        @foreach ($product as $product)
        <div class="col-lg-3 my-2">
            <div class="card">
                <div style="max-height: 400px; max-width: 300px" >
                    <img src="{{ asset('storage/'.$product->img) }}" class="card-img-top" alt="product Image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->desc }}</p>
                    <p class="card-text"><small class="text-muted">{{ $product->price }}</small></p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="/dashboard/product/{{ $product->slug }}" class="btn btn-primary btn-sm mr-2"><i class="bi bi-eyeglasses"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="/dashboard/product/{{ $product->slug }}/edit" class="btn btn-success btn-sm mr-2"><i class="bi bi-pencil-square"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <form class="d-inline" action="/dashboard/product/{{ $product->slug }}" method="post">
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