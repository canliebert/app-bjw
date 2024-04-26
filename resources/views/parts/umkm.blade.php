@extends('parts.layouts.main')

@section('container')
    <div class="container-fluid bg-">
        <div class="row g-5 mt-1">
          @foreach ($user as $users)
              <div class="col-lg-4">
            <div class="height d-flex justify-content-center align-items-center">
    
            <div class="card p-3 bg-primary">
                
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="mt-2">
                        <div class="mt-5">
                            <div class="d-flex flex-row user-ratings">
                                <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                                <h6 class="text-muted ml-1">4/5</h6>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <img src="image/{{ $users->img }}" width="200">
                    </div>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                    <h3>{{ $users->name }}</h3>
                    <div class="colors">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    
                </div>
                
                
                <p>A great option weather you are at office or at home. </p>
                
                <a href="/product/{{ $users->username }}" class="btn btn-info">Products</a>
            </div>
            
            </div>
          </div>

          
          
          @endforeach
          <p><a href="/login">Login</a> as a seller</p>
          
    </div>
@endsection
