@extends('parts.layouts.main')
@section('container')
    <div class="container-fluid bg-">
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="d-flex justify-content-between p-3">
                                    <p class="lead mb-0">Today's Combo Offer</p>
                                    <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                        style="width: 35px; height: 35px;">
                                        <p class="text-white mb-0 small">{{ $product->quantity }}</p>
                                    </div>
                                </div>
                                <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" alt="{{ $product->name }}" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">{{ $product->category }}</a></p>
                                        <p class="small text-danger"><s>${{ $product->old_price }}</s></p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{ $product->name }}</h5>
                                        <h5 class="text-dark mb-0">${{ $product->price }}</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Available: <span
                                                class="fw-bold">{{ $product->availability ? 'Yes' : 'No' }}</span></p>
                                        <div class="ms-auto text-warning">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $product->rating)
                                                    <i class="fa fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <div class="m-3"></div>
@endsection
