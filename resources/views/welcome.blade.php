@include('layout.header')

@yield('content')

<a href="offer.html"><img src="{{ asset('') }}ecommerce/assets/images/download.png" class="img-head" alt=""></a>
@include('layout.partials.nav')
<div data-vide-bg="{{ asset('') }}ecommerce/assets/video/video">
    <div class="container">
        <div class="banner-info">
            <h3>It is a long established fact that a reader will be distracted by
                the readable </h3>
            <div class="search-form">
                <form action="#" method="post">
                    <input type="text" placeholder="Search..." name="Search...">
                    <input type="submit" value=" " >
                </form>
            </div>
        </div>
    </div>
</div>

<script>window.jQuery || document.write('<script src="{{asset('')}}ecommerce/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="{{ asset('') }}ecommerce/js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
    <div class="container ">
        <div class="spec ">
            <h3>Special Offers</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>

        <div class="tab-head ">
            <nav class="nav-sidebar">
                <ul class="nav tabs ">
                    @foreach($categories as $category)
                        <li class="{{ $category->id == 1 ? 'active':'' }}"><a href="#{{$category->title}}" data-toggle="tab">{{ $category->title  }}</a></li>
                    @endforeach
{{--                    @foreach($products as $product)--}}
{{--                        <li ><a href="#" data-toggle="tab">{{ $product->category->title  }}</a></li>--}}
{{--                    @endforeach--}}

                </ul>
            </nav>
            <div class=" tab-content tab-content-t ">
                @foreach($categories as $category)
                    <div class="tab-pane {{ $category->id == 1 ? 'active':'' }} text-style" id="{{$category->title}}">

                    <div class=" con-w3l">
                        {{--Test--}}
                        @foreach ($products as $product)
                            @if($product->category->title == $category->title)
                                <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#{{str_replace(' ', '', $product->title)}}{{$product->id}}" class="offer-img">
                                        <img src="/storage/{{ $product->image }}" class="img-responsive" alt="">
                                        <div class="offer"><p><span>Offer</span></p></div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">{{$product->title}}</a></h6>
                                        </div>
                                        <div class="mid-2">
                                            <p ><label>{{ $product->prize+10 }}tk</label><em class="item_price">{{ $product->prize}}tk</em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        {{--end Test--}}
                        <div class="clearfix"></div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

<!--content-->
<div class="content-mid">
    <div class="container">

        <div class="col-md-4 m-w3ls">
            <div class="col-md1 ">
                <a href="kitchen.html">
                    <img src="{{ asset('') }}ecommerce/assets/images/co1.jpg" class="img-responsive img" alt="">
                    <div class="big-sa">
                        <h6>New Collections</h6>
                        <h3>Season<span>ing </span></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls1">
            <div class="col-md ">
                <a href="hold.html">
                    <img src="{{ asset('') }}ecommerce/assets/images/co.jpg" class="img-responsive img" alt="">
                    <div class="big-sale">
                        <div class="big-sale1">
                            <h3>Big <span>Sale</span></h3>
                            <p>It is a long established fact that a reader </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls">
            <div class="col-md2 ">
                <a href="kitchen.html">
                    <img src="{{ asset('') }}ecommerce/assets/images/co2.jpg" class="img-responsive img1" alt="">
                    <div class="big-sale2">
                        <h3>Cooking <span>Oil</span></h3>
                        <p>It is a long established fact that a reader </p>
                    </div>
                </a>
            </div>
            <div class="col-md3 ">
                <a href="hold.html">
                    <img src="{{ asset('') }}ecommerce/assets/images/co3.jpg" class="img-responsive img1" alt="">
                    <div class="big-sale3">
                        <h3>Vegeta<span>bles</span></h3>
                        <p>It is a long established fact that a reader </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--content-->
<!-- Carousel
  ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="kitchen.html"> <img class="first-slide" src="{{ asset('') }}ecommerce/assets/images/ba.jpg" alt="First slide"></a>

        </div>
        <div class="item">
            <a href="care.html"> <img class="second-slide " src="{{ asset('') }}ecommerce/assets/images/ba1.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="hold.html"><img class="third-slide " src="{{ asset('') }}ecommerce/assets/images/ba2.jpg" alt="Third slide"></a>

        </div>
    </div>

</div><!-- /.carousel -->

<!--content-->
<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Special Offers</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l">
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of16.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">Moisturiser</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add add-2">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal18" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of17.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">  Lady Finger</a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="images/of17.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal19" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of18.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html"> Ribbon</a>(1 pc)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal20" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of19.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">Grapes</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal21" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of20.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">Clips</a>(1 pack)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of20.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal22" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of21.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">Conditioner</a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="images/of21.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal23" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of22.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">Cleaner</a>(250 kg)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="images/of22.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal24" class="offer-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/of23.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">Gel</a>(150 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="images/of23.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@include('layout.footer')

<!-- product -->
@foreach($products as $product)
    <div class="modal fade" id="{{str_replace(' ', '', $product->title)}}{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/storage/{{ $product->image }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>{{ $product->title }}</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>{{ $product->prize+10}}tk</del>{{ $product->prize}}tk</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> {{ $product->description }}</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</body>
</html>
