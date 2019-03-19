@extends("master")
@section("title",trans("site.homepage"))
@section("content")
    <div class="full-width">
        <section class="home-content-sidebar">
            <ul>
                <li class="widget widget-sidebar transfers_hero_unit_widget">
                    <!-- Intro -->
                    <div class="intro" style="background-image:url(/images/girne-harbour.jpg);">
                        <div class="wrap">
                            <div class="textwidget">
                                <h1 class="wow fadeInDown">{{trans("site.banner1")}}</h1>
                                <h2 class="wow fadeInUp">{{trans("site.banner2")}}</h2>
                                <div class="actions">
                                    <a href="{{route("pricing")}}" title="Our services" class="btn large white wow fadeInLeft anchor">{{trans("site.pricing")}}</a>
                                    <a href="#booking" title="Make a booking" class="btn large color wow fadeInRight anchor">{{trans("site.reservation")}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Intro -->
                </li>

                <li class="widget widget-sidebar transfers_advanced_search_widget">        <!-- Advanced search -->

                    <!-- // Advanced search -->
                </li>


                <li id="step1" style="display: block" class="widget widget-sidebar transfers_advanced_search_widget">
                    <!-- Advanced search -->

                    <!-- // Advanced search -->

                    <div class="advanced-search color" id="booking">
                        <div class="wrap">
                            <form role="form" action="" method="get">
                                <!-- Row -->
                                <div class="f-row">
                                    <div class="form-group datepicker one-third">
                                        <label for="departure-date">{{trans("departure")}}</label>
                                        <input type="text" class="departure-date" id="departure-date">
                                        <input type="hidden" name="dep" id="departure_date" value="{{date("Y-m-d H:i")}}"/>
                                        <script>
                                            window.datepickerDepartureDateValue = '{{date("Y-m-d H:i")}}';
                                        </script>
                                    </div>


                                    <div class="form-group select one-third">
                                        <label>{{trans("site.pickup")}}</label>
                                        <select id="pickup1" name="p1">
                                            <option selected disabled>{{trans("site.selectlocation")}}</option>
                                            <optgroup label="{{trans("site.airports")}}">
                                                @foreach(\App\Region::where("isAirport",1)->get() as $region)
                                                    <option value="{{$region->name}}">{{$region->name}}</option>
                                                @endforeach
                                            </optgroup>

                                        </select>
                                    </div>


                                    <div class="form-group select one-third">
                                        <label>{{trans("site.drop")}}</label>
                                        <select id="drop1" name="p1">
                                            <option selected disabled>{{trans("site.selectlocation")}}</option>
                                            <optgroup label="{{trans("site.locations")}}">
                                                @foreach(\App\Region::where("isAirport",0)->get() as $region)
                                                    <option value="{{$region->name}}">{{$region->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <!-- //Row -->
                                <!-- Row -->


                                <div class="f-row" style="display: none;">
                                    <div class="form-group datepicker one-third">
                                        <label for="return-date">{{trans("site.departure_return")}}</label>
                                        <input type="text" class="departure-date" id="departure-date">
                                        <input type="hidden" name="dep" id="return_date" value="{{date("Y-m-d H:i")}}"/>
                                        <script>
                                            window.datepickerDepartureDateValue = '{{date("Y-m-d H:i")}}';
                                        </script>
                                    </div>

                                    <div class="form-group select one-third">
                                        <label>{{trans("site.pickup")}}</label>
                                        <select id="pickup2" name="p1">
                                            <option selected disabled>{{trans("site.selectlocation")}}</option>

                                            <optgroup label="{{trans("site.locations")}}">
                                                @foreach(\App\Region::where("isAirport",0)->get() as $region)
                                                    <option value="{{$region->name}}">{{$region->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>


                                    <div class="form-group select one-third">
                                        <label>{{trans("site.drop")}}</label>
                                        <select id="drop2" name="p1">
                                            <option selected disabled>{{trans("site.selectlocation")}}</option>
                                            <optgroup label="{{trans("site.airports")}}">
                                                @foreach(\App\Region::where("isAirport",1)->get() as $region)
                                                    <option value="{{$region->name}}">{{$region->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>

                                </div>
                                <!-- Row -->
                                <div class="f-row">
                                    <div class="form-group spinner">
                                        <label for="people">{{trans("site.howmany")}}
                                            <small>{{trans("site.including")}}</small>
                                        </label>
                                        <input type="number" id="people" name="ppl" min="1" class="uniform-input number" value="1">
                                    </div>
                                    <div class="form-group radios">
                                        <div>
                                            <div class="radio" id="uniform-return">
                                                <span>
                                                    <input type="radio" name="trip" id="return" value="2">
                                                </span>
                                            </div>
                                            <label for="return">{{trans("site.return")}}</label>
                                        </div>
                                        <div>
                                            <div class="radio" id="uniform-oneway">
                                                <span class="checked">
                                                    <input type="radio" name="trip" id="oneway" value="1" checked>
                                                </span>
                                            </div>
                                            <label for="oneway">{{trans("site.oneway")}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group right">
                                        <a id="btnStep1" class="btn large black">{{trans("site.findtransfer")}}</a>
                                    </div>
                                </div>
                                <!--// Row -->
                            </form>
                        </div>
                    </div>
                </li>

                <li id="step2" style="display: none" class="widget widget-sidebar transfers_advanced_search_widget">
                    <!-- Advanced search -->
                    <div class="advanced-search color" id="booking">
                        <div class="">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 " style="color:black">
                                            <h4>{{trans("site.selectlocation")}}</h4>
                                        </div>
                                    </div>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
                                    <img src="area-map-of-cyprus kopya.jpg" style="display: none;width: 100%" usemap="#image-map" class="map">

                                    <map id="map" name="image-map">
                                        <area location="guzelyurt" target="" alt="Güzelyurt" title="Güzelyurt" href="#guzelyurt" coords="458,387,56" shape="circle">
                                        <area location="karsiyaka" target="" alt="Karşıyaka" title="Karşıyaka" href="#karsiyaka" coords="487,280,51" shape="circle">
                                        <area location="girne" target="" alt="Girne" title="Girne" href="#girne" coords="645,295,61" shape="circle">
                                        <area location="esentepe" target="" alt="Esentepe" title="Esentepe" href="#esentepe" coords="787,289,59" shape="circle">
                                        <area location="tatlisu" target="" alt="Tatlısu" title="Tatlısu" href="#tatlisu" coords="889,237,45" shape="circle">
                                        <area location="karpaz" target="" alt="Karpaz" title="Karpaz" href="#karpaz" coords="1166,112,69" shape="circle">
                                        <area location="bafra" target="" alt="Bafra" title="Bafra" href="#bafra" coords="1010,246,51" shape="circle">
                                        <area location="salamis" target="" alt="Salamis" title="Salamis" href="#salamis" coords="1041,343,887,378" shape="rect">
                                        <area location="magusa" target="" alt="Magusa" title="Magusa" href="#magusa" coords="976,390,864,445" shape="rect">
                                    </map>

                                    <script type="text/javascript">$(function () {
                                            $('.map').maphilight();
                                            $('#squidheadlink').mouseover(function (e) {
                                                $('#squidhead').mouseover();
                                            }).mouseout(function (e) {
                                                $('#squidhead').mouseout();
                                            }).click(function (e) {
                                                e.preventDefault();
                                            });
                                        });</script>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- // Advanced search -->
                </li>

                <li id="step3" style="display: none" class="widget widget-sidebar transfers_advanced_search_widget">
                    <!-- Advanced search -->
                    <div class="advanced-search color" id="booking">
                        <div class="wrap">


                            <div class="form-group text-center">
                                <h4>{{trans("site.reservation_details")}}</h4>
                            </div>



                            <div class="f-row">
                                <div class="form-group one-third">
                                    <label>{{trans("site.namesurname")}}</label>
                                    <input class="form-control" id="name" placeholder="{{trans("site.namesurname")}}">
                                </div>


                                <div class="form-group select one-third">
                                    <label>Email</label>
                                    <input class="form-control" id="email" placeholder="Email">
                                </div>


                                <div class="form-group select one-third">
                                    <label>{{trans("site.yourphone")}}</label>
                                    <input class="form-control" id="phone" placeholder="{{trans("site.yourphone")}}">
                                </div>

                                <div class="form-group  one-third">
                                    <div class="form-group">
                                        <label>{{trans("site.airline")}}</label>
                                        <input class="form-control" id="airline" placeholder="{{trans("site.airline")}}"></div>
                                </div>

                                <div class="form-group  one-third">
                                    <div class="form-group">
                                        <label>{{trans("site.flycode")}}</label>
                                        <input class="form-control" id="flycode" placeholder="{{trans("site.flycode")}}"></div>
                                </div>

                                <div class="form-group select one-third">
                                    <div class="form-group">
                                        <label>{{trans("site.addressdetails")}}</label>
                                        <textarea class="form-control" id="address" placeholder="{{trans("site.addressdetails")}}"></textarea>
                                    </div>
                                </div>

                                <div class="f-row">
                                    <div class="">
                                        <button id="btnStep3" class="btn btn-block black">{{trans("site.makereservation")}}</button>
                                        <button id="btnBack" class="btn btn-block white" ><i class="fa icon-themeenergy_left" ></i> Back</button>
                                    </div>
                                </div>


                            </div>


                        </div>


                    </div>
                    <!-- // Advanced search -->
                </li>

                <li id="step4" style="display: none" class="widget widget-sidebar transfers_advanced_search_widget">
                    <!-- Advanced search -->
                    <div class="advanced-search color">
                        <div class="wrap">
                            <div class="text-center">
                                <div class="">
                                    <img src="https://www.shareicon.net/download/2015/09/10/98909_check_512x512.png" style="width: 150px">
                                </div>
                                <div class="">
                                    {!! trans("site.thankyou") !!}
                                </div>
                            </div>
                            <div class="clearfix"></div>


                        </div>


                    </div>
                    <!-- // Advanced search -->
                </li>


                <li class="widget widget-sidebar transfers_iconic_features_widget">
                    <!-- Services iconic -->
                    <div class="services iconic white">
                        <div class="wrap">
                            <div class="row">
                                <!-- Item -->
                                <div class="one-third">
																	<span class="circle">
																		<span class="icon icon-themeenergy_savings"></span>
																	</span>
                                    <h3>{{trans("site.c1")}}</h3>
                                    <p>{{trans("site.t1")}}</p>
                                </div>
                                <!-- //Item -->
                                <!-- Item -->
                                <div class="one-third">
																	<span class="circle">
																		<span class="icon icon-themeenergy_lockpad"></span>
																	</span>
                                    <h3>{{trans("site.c2")}}</h3>
                                    <p>{{trans("site.t2")}}</p>
                                </div>
                                <!-- //Item -->
                                <!-- Item -->
                                <div class="one-third">
																	<span class="circle">
																		<span class="icon icon-themeenergy_discounts"></span>
																	</span>
                                    <h3>{{trans("site.c3")}}</h3>
                                    <p>{{trans("site.t3")}}</p>
                                </div>
                                <!-- //Item -->
                                <!-- Item -->
                                <div class="one-third">
																	<span class="circle">
																		<span class="icon icon-themeenergy_heart"></span>
																	</span>
                                    <h3>{{trans("site.c4")}}</h3>
                                    <p>{{trans("site.t4")}}</p>
                                </div>
                                <!-- //Item -->
                                <!-- Item -->
                                <div class="one-third">
																	<span class="circle">
																		<span class="icon icon-themeenergy_magic-trick"></span>
																	</span>
                                    <h3>{{trans("site.c5")}}</h3>
                                    <p>{{trans("site.t5")}}</p>
                                </div>
                                <!-- //Item -->
                                <!-- Item -->
                                <div class="one-third">
																	<span class="circle">
																		<span class="icon icon-themeenergy_call"></span>
																	</span>
                                    <h3>{{trans("site.c6")}}</h3>
                                    <p>{{trans("site.t6")}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- //Services iconic -->
                </li>


                <li class="widget widget-sidebar transfers_featured_testimonial_widget">
                    <!-- Testimonials -->
                    <div class="testimonials center black">
                        <div class="wrap">
                            <h6 class="wow fadeInDown">{{trans("site.fbanner1")}}</h6>
                            <p class="wow fadeInUp">{{trans("site.fbanner2")}}</p>

                        </div>
                    </div>
                    <!-- //Testimonials -->
                </li>
                <li id="text-2" class="widget widget-sidebar widget_text">
                    <div class="textwidget">
                        <div class="partners white center">
                            <div class="wrap">
                                <h2 class="wow fadeIn">{{trans("site.reference")}}</h2>
                                <div class="one-fifth wow fadeIn">
                                    <a href="#">
                                        <img src="/assets/images/logo1.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="one-fifth wow fadeIn" data-wow-delay=".2s">
                                    <a href="#">
                                        <img src="/assets/images/logo2.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="one-fifth wow fadeIn" data-wow-delay=".4s">
                                    <a href="#">
                                        <img src="/assets/images/logo3.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="one-fifth wow fadeIn" data-wow-delay=".6s">
                                    <a href="#">
                                        <img src="/assets/images/logo4.jpg" alt=""/>
                                    </a>
                                </div>
                                <div class="one-fifth" data-wow-delay=".8s">
                                    <a href="#">
                                        <img src="/assets/images/logo5.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <!-- #secondary -->
    </div>
@endsection