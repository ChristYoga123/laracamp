@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        YOUR FUTURE CAREER
                    </p>
                    <h2 class="primary-header">
                        Start Invest Today
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="/assets/images/item_bootcamp.png" alt="" class="cover">
                                <h1 class="package text-uppercase">
                                    {{ $camp->title }}
                                </h1>
                                <p class="description">
                                    Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{ route('checkout.store', $camp->id) }}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label">Full Name</label>
                                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ auth()->user()->name }}" required>
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email Address</label>
                                    <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ auth()->user()->email }}" required>
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Occupation</label>
                                    <input name="occupation" type="text" class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" value="{{ old('occupation') ?: auth()->user()->occupation }}" required>
                                    @if ($errors->has('occupation'))
                                        <p class="text-danger">{{ $errors->first('occupation') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') ?: auth()->user()->phone }}" required>
                                    @if ($errors->has('phone'))
                                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Address</label>
                                    <input name="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('address') ?: auth()->user()->address }}" required>
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Code (Optional)</label>
                                    <input name="code" type="text" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}">
                                    @if ($errors->has('code'))
                                        <p class="text-danger">{{ $errors->first('code') }}</p>
                                    @endif
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="/assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
@endsection