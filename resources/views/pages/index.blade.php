@extends('layouts.master')

@section('content')
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                @include('partials.product-sidebar')
            </div>

            <div class="col-md-8">
                <div class="widget">
                    <h3>Featured Image</h3>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top feature-img" src="{{asset('images/products/sam-1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 5000</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top feature-img" src="{{asset('images/products/sam-1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 5000</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top feature-img" src="{{asset('images/products/sam-1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">Taka - 5000</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
