@extends('layouts.ind')

@section('title', 'Index page')

@section('content')
    <section class="slider-01">

        <!-- Scroll Btn -->
        <div class="scroll-down"><a href="#coupone">scroll to explore</a><img src="{{asset('images/home/scroll.png')}}" alt=""></div>
        <!-- Scroll Btn -->

        <!-- Counting Item -->
        <div class="slider-counter">
            <span class="current-item">02</span>
            <span class="bar"></span>
            <span class="total-item">04</span>
        </div>
        <!-- Counting Item -->

        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li class="rev-slidebg">
                        <div class="tp-caption tp-resizeme textRes title-1"
                             data-x="['left','left','center','center']"
                             data-hoffset="['0']"

                             data-y="['middle']"
                             data-voffset="['-132','-110','-60','-70']"

                             data-fontsize="['60','45','40','36']"
                             data-fontweight="700"
                             data-lineheight="['72','50','52','46']"
                             data-width="['570','500','500','100%']"
                             data-height="['auto']"
                             data-whitesapce="['normal']"
                             data-color="['#000000']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                             data-textAlign="['left','left','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,20]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,20]"

                             style="z-index: 5;  white-space: normal; text-transform: none;">AlmaRent</div>
                        <div class="tp-caption tp-resizeme textRes"
                             data-x="['left','left','center','center']"
                             data-hoffset="['0']"

                             data-y="['middle']"
                             data-voffset="['17','17','50','40']"

                             data-fontsize="['24','20','18','18']"
                             data-fontweight="400"
                             data-lineheight="['36','32','30','28']"
                             data-width="['570','500','500','100%']"
                             data-height="['auto']"
                             data-whitesapce="['normal']"
                             data-color="['#666666']"

                             data-type="text"
                             data-responsive_offset="off"

                             data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                             data-textAlign="['left','left','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,20]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,20]"

                             style="z-index: 5; white-space: normal; text-transform: none;">We are a team of professionals specializing in providing a wide range of equipment for rent for various needs.
                            Regardless of whether you need equipment for private or commercial purposes, we are ready to offer you the best solutions.
                        </div>
                        <div class="tp-caption tp-resizeme slider-image"
                             data-x="['right','right','center','center']"
                             data-hoffset="['-50','50','0','0']"

                             data-y="['middle']"
                             data-voffset="['0']"
                             data-width="['auto','350','auto','auto']"
                             data-height="['auto']"


                             data-type="image"
                             data-responsive_offset="off"

                             data-frames='[{"delay":3500,"speed":2500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                             data-textAlign="center"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,25]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,25]"

                             style="z-index: 5;"><img src="{{asset('images/home/arent.png')}}" alt="">
                        </div>
                    </li>
                    <li class="rev-slidebg">
                        <div class="tp-caption tp-resizeme textRes title-1"
                             data-x="['left','left','center','center']"
                             data-hoffset="['0']"

                             data-y="['middle']"
                             data-voffset="['-132','-110','-60','-70']"

                             data-fontsize="['60','45','40','36']"
                             data-fontweight="700"
                             data-lineheight="['72','50','52','46']"
                             data-width="['570','500','500','100%']"
                             data-height="['auto']"
                             data-whitesapce="['normal']"
                             data-color="['#000000']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                             data-textAlign="['left','left','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,20]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,20]"

                             style="z-index: 5;  white-space: normal; text-transform: none;">How to rent?</div>
                        <div class="tp-caption tp-resizeme textRes"
                             data-x="['left','left','center','center']"
                             data-hoffset="['0']"

                             data-y="['middle']"
                             data-voffset="['17','17','50','40']"

                             data-fontsize="['24','20','18','18']"
                             data-fontweight="400"
                             data-lineheight="['36','32','30','28']"
                             data-width="['570','500','500','100%']"
                             data-height="['auto']"
                             data-whitesapce="['normal']"
                             data-color="['#666666']"

                             data-type="text"
                             data-responsive_offset="off"

                             data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                             data-textAlign="['left','left','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,20]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,20]"

                             style="z-index: 5; white-space: normal; text-transform: none;"><p>1. You register.</p>
                                        <p>2. Choose a product.</p>
                                        <p>3. Choose for how many days and click rent.</p>
                                        <p>4. And you are waiting for a message in the mail</p>
                        </div>
                        <div class="tp-caption tp-resizeme slider-image"
                             data-x="['right','right','center','center']"
                             data-hoffset="['-50','50','0','0']"

                             data-y="['middle']"
                             data-voffset="['0']"
                             data-width="['auto','350','auto','auto']"
                             data-height="['auto']"


                             data-type="image"
                             data-responsive_offset="off"

                             data-frames='[{"delay":3500,"speed":2500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                             data-textAlign="center"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,25]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,25]"

                             style="z-index: 5;"><img src="{{asset('images/home/arent.png')}}" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Slider End -->

    <!-- Categories Section Start -->
    <section class="categorie-section">

        <!-- Section Heading -->
        <div class="sec-heading rotate-rl">Product <span> Categories</span></div>
        <!-- Section Heading -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec-title">Car Categories</h2>
                    <p class="sec-desc">
                        Categories
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('products.category', $cat=1)}}" class="single-cate">
                        <img src="   https://cdn-icons-png.flaticon.com/512/5903/5903336.png " width="256" height="256" alt="" title="" class="img-small">

                    </a>
                </div>
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('products.category', $cat=2)}}" class="single-cate">
                        <img src="https://cdn-icons-png.flaticon.com/512/5029/5029183.png " width="100" height="100" alt="" title="" class="img-small">

                    </a>
                </div>
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('products.category', $cat=3)}}" class="single-cate">
                        <img src="   https://cdn-icons-png.flaticon.com/512/2211/2211425.png " width="256" height="256" alt="" title="" class="img-small">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4">
                    <a href="{{route('products.category', $cat=4)}}" class="single-cate">
                        <img src="   https://cdn-icons-png.flaticon.com/512/6606/6606622.png " width="256" height="256" alt="" title="" class="img-small">
                    </a>
                </div>
            </div>
        </div>
        <!-- shpage -->
    </section>
    <!-- Categories Section End -->
@endsection
