@extends('layouts.ind')

@section('title', 'Index page')

@section('content')


    <!-- Shop Section Start -->
    <section class="single-product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div id="product-slider" class="carousel slide product-slider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="ps-img">
                                    <img src="{{asset($product->img1)}}">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="ps-img">
                                    <img src="{{asset($product->img2)}}">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="ps-img">
                                    <img src="{{asset($product->img3)}}">
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators clearfix">
                            <li data-target="#product-slider" data-slide-to="0" class="active"><img src="{{asset($product->img1)}}" alt=""></li>
                            <li data-target="#product-slider" data-slide-to="1"><img src="{{asset($product->img2)}}" alt=""></li>
                            <li data-target="#product-slider" data-slide-to="2"><img src="{{asset($product->img3)}}" alt=""></li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="sin-product-details">
                        <h3>{{$product->name}}</h3>
                        <div class="product-price clearfix">
                                <span class="price">
                                    <span><span class="woocommerce-Price-currencySymbol">₸</span>{{$product->price}}</span>
                                </span>
                        </div>

                        <div class="pro-excerp">
                            <p>
                                {{$product->content}}
                            </p>
                        </div>
                        @can('rent', $product)
                            <div class="product-price clearfix">
                                <span class="price">
                                    <span><span class="woocommerce-Price-currencySymbol"></span>
                                        You already have an active rent.
                                        You will be sent an email about further actions on payment and delivery of the goods.</span>
                                </span>
                            </div>
                        @endcan
                        <div class="product-cart-qty">
{{--                            <form action="{{route('products.subscribe', $product->id)}}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <select name="day">--}}
{{--                                    <option value="1">1 day</option>--}}
{{--                                    <option value="2">2 day</option>--}}
{{--                                    <option value="3">3 day</option>--}}
{{--                                    <option value="4">4 day</option>--}}
{{--                                    <option value="5">5 day</option>--}}
{{--                                    <option value="6">6 day</option>--}}
{{--                                    <option value="7">7 day</option>--}}
{{--                                </select>--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <button class="add-to-cart-btn">Rent</button>--}}
{{--                            </form>--}}

                            <!-- Кнопка-триггер модального окна -->
                            <button type="button" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Rent
                            </button>

                            <!-- Модальное окно -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Rent</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                                    <input type="email" class="form-control" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                                    <input type="email" class="form-control" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label" >Phone</label>
                                                    <input type="tel" class="form-control" max="11">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="add-to-cart-btn" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="add-to-cart-btn">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @can('update', $product)
                            <a href="{{route('products.edit', $product->id)}}" class="add-to-cart-btn">Edit</a>
                                <br>
                                <br>
                            @endcan
                            @can('delete', $product)
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="add-to-cart-btn">Delete</button>
                            </form>
                            @endcan
                        </div>
                        <div class="pro-socila">
                            <a href="#"><i class="twi-facebook"></i></a>
                            <a href="#"><i class="twi-twitter-square"></i></a>
                            <a href="#"><i class="twi-pinterest-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row mar-top-bottom px-5">
                    <div class="col-lg-12" >
                        <div class="goru_map ">
                            <h2>Pilot AutoRent</h2>
                            <div style="position:relative;overflow:hidden;"><a href="https://yandex.com/maps/162/almaty/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Алматы</a><a href="https://yandex.com/maps/162/almaty/house/Y08YfgJlQUAPQFppfX51dXVqbA==/?ll=76.855858%2C43.244998&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты — транспорт, навигация, поиск мест</a><iframe src="https://yandex.com/map-widget/v1/?ll=76.855858%2C43.244998&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg2NzI5MTU0NhJO0prQsNC30LDSm9GB0YLQsNC9LCDQkNC70LzQsNGC0YssINOo0YLQtdCz0LXQvSDQsdCw0YLRi9GAINC606nRiNC10YHRliwgMTHQkC8xIgoNM7aZQhXh-ixC&z=16" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row mar-top-bottom">
                    <div class="col-lg-12">
                        <div class="goru_map">
                            <h2>One Almaty</h2>
                            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/162/almaty/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Алматы</a><a href="https://yandex.ru/maps/162/almaty/house/Y08YfgJnT0IEQFppfX51cnlhZA==/?from=mapframe&ll=76.857673%2C43.243521&source=mapframe&um=constructor%3A8e6448cb9eda188eb8831b0c329d1c420e221dc7bfda7e9d19baf4db62604653&utm_medium=mapframe&utm_source=maps&z=16.86" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Утеген батыра, 64А — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?from=mapframe&ll=76.857673%2C43.243521&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg2NzI5MDk1ORJM0prQsNC30LDSm9GB0YLQsNC9LCDQkNC70LzQsNGC0YssINOo0YLQtdCz0LXQvSDQsdCw0YLRi9GAINC606nRiNC10YHRliwgNjTQkCIKDSC3mUIVXfksQg%2C%2C&source=mapframe&um=constructor%3A8e6448cb9eda188eb8831b0c329d1c420e221dc7bfda7e9d19baf4db62604653&utm_source=mapframe&z=16.86" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
