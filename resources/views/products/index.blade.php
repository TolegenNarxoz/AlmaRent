@extends('layouts.ind')

@section('title', 'Index page')

@section('content')

    <!-- Shop Section Start -->
    <section class="shop-fullwidth">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="product-cate">
                        <h5>Categories</h5>
                        @foreach($categories as $cat)
                            <ul>
                                <li><a href="{{route('products.category', $cat->id)}}">{{$cat->name}}</a></li>
                            </ul>
                        @endforeach
                        <ul>
                            <li><input class="form-control search-form" placeholder="Search"></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-shop-product">
                            <div class="sp-thumb">
                                <img src="{{asset($product->img1)}}">
                            </div>
                            <div class="sp-details">
                                <h4>{{$product->name}}</h4>
                                <div class="product-price clearfix">
                                    <span class="price">
                                        <ins><span><span class="woocommerce-Price-currencySymbol">₸</span>{{$product->price}}</span></ins>
                                    </span>
                                </div>
                                <div class="sp-details-hover">
                                    <a class="sp-cart" href="{{route('products.show', $product->id)}}"><i class="twi-cart-plus"></i><span>Rent</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

@endsection
