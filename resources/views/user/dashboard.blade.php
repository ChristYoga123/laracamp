@extends('layouts.app')

@section('content')
    
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $checkout)
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{ $checkout->Camp->title }}</strong>
                                </p>
                                <p>
                                    {{ $checkout->created_at }}
                                </p>
                            </td>
                            <td>
                                <strong>{{ $checkout->Camp->price }}</strong>
                            </td>
                            <td>
                                @if ($checkout->is_paid)
                                    <strong class="text-success">Payment Success</strong>
                                @else
                                    <strong class="text-error">Waiting for Payment</strong>
                                @endif
                            </td>
                            <td>
                                <a href="https://wa.me/6282230555413?text=Hi, saya sudah membeli class {{ $checkout->Camp->title }}" class="btn btn-primary">
                                    Contact Support
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>Gila Belajar</strong>
                                </p>
                                <p>
                                    September 24, 2021
                                </p>
                            </td>
                            <td>
                                <strong>$280,000</strong>
                            </td>
                            <td>
                                <strong>Waiting for Payment</strong>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection