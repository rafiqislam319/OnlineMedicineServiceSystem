@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="banner-w3">
        <div class="demo-1">
            <div id="example1" class="core-slider core-slider__carousel example_1">
                <div class="core-slider_viewport">
                    <div class="core-slider_list">
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/b1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/bs2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/bs3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('/')}}/front-end/images/bs4.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
                <div class="core-slider_nav">
                    <div class="core-slider_arrow core-slider_arrow__right"></div>
                    <div class="core-slider_arrow core-slider_arrow__left"></div>
                </div>
                <div class="core-slider_control-nav"></div>
            </div>
        </div>
        <link href="{{asset('/')}}/front-end/css/coreSlider.css" rel="stylesheet" type="text/css">
        <script src="{{asset('/')}}/front-end/js/coreSlider.js"></script>
        <script>
            $('#example1').coreSlider({
                pauseOnHover: false,
                interval: 3000,
                controlNavEnabled: true
            });

        </script>

    </div>
    <!--banner-->
    <!--content-->
    <div class="content">
        <!--banner-bottom-->

        <!--banner-bottom-->
        <!--new-arrivals-->
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h2 class="tittle">New Arrivals</h2>
                <div class="arrivals-grids">
                    @foreach($newProducts as $newProduct)
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="{{ route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" class="new-grid">
                                        <div class="grid-img">
                                            <img  src="{{asset($newProduct->product_image)}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{asset($newProduct->product_image)}}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>

                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">{{ ($newProduct->product_name) }}</a></h6>

                                <p ><em class="item_price">TK. {{ ($newProduct->product_price) }}</em></p>
                                <a href="{{ route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" data-text="Add To Cart" class="my-cart-b item_add">See Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!--new-arrivals-->
        <!--accessories-->
        <div class="accessories-w3l">
            <div class="container">
                <h3 class="tittle">7% Discount on</h3>
                <span>Each Medicine</span>
{{--                <div class="button">--}}
{{--                    <a href="#" class="button1"> Shop Now</a>--}}
{{--                    <a href="#" class="button1"> Quick View</a>--}}
{{--                </div>--}}
            </div>
        </div>
        <!--accessories-->
        <!--Products-->
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="tittle1"> New Products</h3>





                {{--testing part for my expected workflow starts here--}}




                <div class="arrivals-grids">
                    @foreach($newProducts as $newProduct)
                        <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                            <div class="grid-arr">
                                <div  class="grid-arrival">
                                    <figure>
                                        <a href="{{ route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }}" class="new-gri">
                                            <div class="grid-img">
                                                <img  src="{{asset($newProduct->product_image)}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="grid-img">
                                                <img  src="{{asset($newProduct->product_image)}}" class="img-responsive"  alt="">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>

                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="women">
                                    <h6><a href="single.html">{{ ($newProduct->product_name) }}</a></h6>

                                    <p ><em class="item_price">TK. {{ ($newProduct->product_price) }}</em></p>
                                    <a href="{{ route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) }} " data-text="Add To Cart" class="my-cart-b item_add">See Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    <div class="clearfix"></div>
                </div>







                {{--<div class="slider">--}}
                    {{--<div class="callbacks_container">--}}
                        {{--<ul class="rslides" id="slider">--}}
                            {{--<li>--}}
                                {{--<div class="caption">--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p14.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p13.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p15.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p16.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="ribben">--}}
                                                {{--<p>NEW</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p18.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p17.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="ribben1">--}}
                                                {{--<p>SALE</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p20.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p19.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="ribben">--}}
                                                {{--<p>-20%</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="caption">--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p21.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p22.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p24.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p23.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="ribben">--}}
                                                {{--<p>NEW</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p26.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p25.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="ribben">--}}
                                                {{--<p>-75%</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3 cap-left simpleCart_shelfItem">--}}
                                        {{--<div class="grid-arr">--}}
                                            {{--<div  class="grid-arrival">--}}
                                                {{--<figure>--}}
                                                    {{--<a href="single.html">--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p10.jpg" class="img-responsive" alt="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="grid-img">--}}
                                                            {{--<img  src="{{asset('/')}}/front-end/images/p9.jpg" class="img-responsive"  alt="">--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="ribben">--}}
                                                {{--<p>NEW</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="block">--}}
                                                {{--<div class="starbox small ghosting"> </div>--}}
                                            {{--</div>--}}
                                            {{--<div class="women">--}}
                                                {{--<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>--}}
                                                {{--<span class="size">XL / XXL / S </span>--}}
                                                {{--<p ><del>$100.00</del><em class="item_price">$70.00</em></p>--}}
                                                {{--<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}


                {{--testing part for my expected workflow ends here--}}




            </div>
        </div>





        <!--Products-->
        {{--<div class="latest-w3">
            <div class="container">
                <h3 class="tittle1">Latest Fashion Trends</h3>
                <div class="latest-grids">
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{asset('/')}}/front-end/images/l1.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Men</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-50%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{asset('/')}}/front-end/images/l2.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Shoes</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-20%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{asset('/')}}/front-end/images/l3.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Women</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-50%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="latest-grids">
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{asset('/')}}/front-end/images/l4.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Watch</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-45%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{asset('/')}}/front-end/images/l5.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Bag</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-10%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 latest-grid">
                        <div class="latest-top">
                            <img  src="{{asset('/')}}/front-end/images/l6.jpg" class="img-responsive"  alt="">
                            <div class="latest-text">
                                <h4>Cameras</h4>
                            </div>
                            <div class="latest-text2 hvr-sweep-to-top">
                                <h4>-30%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="tittle1">Best Sellers</h3>
                <div class="arrivals-grids">
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/p28.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/p27.jpg" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="ribben1">
                                <p>SALE</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                <span class="size">XL / XXL / S </span>
                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/p30.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/p29.jpg" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben2">
                                <p>OUT OF STOCK</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                <span class="size">XL / XXL / S </span>
                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/s2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/s1.jpg" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben1">
                                <p>SALE</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                <span class="size">XL / XXL / S </span>
                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/s4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{asset('/')}}/front-end/images/s3.jpg" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="women">
                                <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                <span class="size">XL / XXL / S </span>
                                <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>--}}
        <!--new-arrivals-->
    </div>
@endsection


















