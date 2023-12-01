@extends('layouts.ind')

@section('title', 'Index page')

@section('content')

    <!-- Banner Start -->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">About</h2>
                    <div class="bread-crumb"><a href="{{url('/')}}">Home</a> / About</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="history-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h3 class="sec-title">About</h3>
                    <p>
                        Text
                    </p>
                </div>
            </div>
            <div class="row mar-top-bottom">
                <div class="col-lg-12">
                    <div class="goru_map grayscale">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12776.134101324958!2d76.87257527447763!3d43.21221988724655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883685804a93795%3A0x38849e5598fa1531!2sNarxoz!5e0!3m2!1sru!2skz!4v1684387971459!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- History Section End -->

@endsection
