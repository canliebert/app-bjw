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
                                <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top"
                                    alt="{{ $product->name }}" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">{{ $product->category }}</a>
                                        </p>
                                        <p class="small text-danger"><s>${{ $product->old_price }}</s></p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{ $product->name }}</h5>
                                        <h5 class="text-dark mb-0">${{ $product->price }}</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Available: <span
                                                class="fw-bold">{{ $product->availability ? 'Yes' : 'No' }}</span>
                                        </p>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#paymentModal{{$product->id}}">
                                        Pay Now
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="paymentModal{{$product->id}}" tabindex="-1"
                            aria-labelledby="paymentModalLabel{{$product->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="paymentModalLabel{{$product->id}}">Payment for
                                            {{ $product->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Isi modal -->
                                        <p>Enter payment details and proceed with the payment.</p>
                                        <form action="/make-payment" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="text" name="amount" placeholder="Enter amount" required>
                                            <input type="text" name="card_number" placeholder="Enter card number" required>
                                            <input type="text" name="expiry_date" placeholder="Enter expiry date" required>
                                            <input type="text" name="cvv" placeholder="Enter CVV" required>
                                            <button type="submit" class="btn btn-success">Pay Now</button>
                                        </form>
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
