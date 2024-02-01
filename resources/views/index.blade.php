@extends('layouts.app')

@section('content')
    <div class="container mt-0">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="fw-bold fs-2 mb-3">GIC Shopping</div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($items as $item)
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="d-flex justify-content-center align-items-center rounded-top-2">
                                            <img src="{{ $item->getImageUrl() }}" alt="..." width="200px"
                                                height="200px">
                                        </div>
                                        <div class="card-body bg-dark-subtle">
                                            <h5 class="card-title item-name">{{ $item->name }}</h5>
                                            <p class="card-text item-price">{{ $item->price }} Ks</p>
                                            <div class="text-end">
                                                <a href="#" class="btn btn-outline-success cart-btn"><i
                                                        class="fas fa-cart-shopping"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-end">Price</th>
                                    </tr>
                                </thead>
                                <tbody class="cart-table-body">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Product One</td>
                                        <td class="text-end">5000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Product Two</td>
                                        <td class="text-end">10000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>Total</th>
                                        <th class="text-end">150000</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
