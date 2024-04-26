@extends('parts.layouts.main')

@section('container')
    <div class="container-fluid bg-">
        <div class="row mt-3">
            @foreach ($event as $events)
                @if ($loop->index < 3)
                    <div class="col-lg-4 my-2 border-none">
                        <div class="card text-bg-dark">
                            <img src="{{ asset('storage/'.$events->img) }}" class="card-img" alt="...">
                            <div class="card-img-overlay align-item-center justify-content-center">
                                <div class="text-center">
                                    <h5 class="card-title">{{ $events->name }}</h5>
                                    <p class="card-text">{{ $events->sub }}</p>
                                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @break
                @endif
            @endforeach
        </div>
        
        <div class="row mt-3">
            @foreach ($event as $events)
                @if ($loop->index >= 3)
                <div class="col-lg-6">
                  <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                          <div class="col-md-4">
                              <img src="{{ asset('storage/'.$events->img) }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                              <div class="card-body">
                                  <h5 class="card-title">{{ $events->name }}</h5>
                                  <p class="card-text">{{ $events->sub }}</p>
                                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
               
                @endif
            @endforeach
        </div>
    </div>
@endsection
