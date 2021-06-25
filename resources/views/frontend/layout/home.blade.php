@extends('frontend.master')

@section('title', 'Home | Visitlambar.com')

@section('content')

<div class="main-wrapper scrollspy-container">

    <div class="hero-banner hero-banner-01 overlay-light opacity-2" style="background-image:url('{{ asset('frontend/images/image-bg/19-2.jpg') }}'); background-position: bottom  center;">

        <div class="overlay-holder bottom"></div>

        <div class="hero-inner">

            <div class="container">
                <h1>Go <span class="font200">tour <span class="block">Go <span class="font700">Lambar</span></span></span></h1>
                <p class="font-lg spacing-1">Explore fascinating places you might never know were in Lampung Barat</p>

                <div class="search-form-main">
                    <form>
                        <div class="from-inner">

                            <div class="row shrink-auto-sm gap-1">

                                <div class="col-12 col-auto">
                                    <div class="col-inner">
                                        <div class="row cols-1 cols-sm-3 gap-1">

                                            <div class="col">
                                                <div class="col-inner">
                                                    <div class="form-group">
                                                        <label>Tour Type</label>
                                                        <select class="chosen-the-basic form-control form-control-sm" placeholder="Select one" tabindex="2">
                                                            <option></option>
                                                            <option>All</option>
                                                            <option>Adventure</option>
                                                            <option>Family</option>
                                                            <option>Education</option>
                                                            <option>Photography</option>
                                                            <option>Festival</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="col-inner">
                                                    <div class="form-group">
                                                        <label>Destination</label>
                                                        <select class="chosen-the-basic form-control form-control-sm" placeholder="Select two" tabindex="2">
                                                            <option></option>
                                                            <option>All</option>
                                                            <option>Sumber Jaya</option>
                                                            <option>Gedung Suryan</option>
                                                            <option>Way Tenong</option>
                                                            <option>Bandar Negeri Suoh</option>
                                                            <option>Suoh</option>
                                                            <option>Sekincau</option>
                                                            <option>Belalau</option>
                                                            <option>Sukau</option>
                                                            <option>Balik Bukit</option>
                                                            <option>Lumbok Seminung</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="col-inner">
                                                    <div class="form-group">
                                                        <label>When</label>
                                                        <input type="text" class="form-control form-readonly-control air-datepicker" placeholder="Pick a month" data-min-view="months" data-view="months" data-date-format="MM yyyy" data-language="en" data-auto-close="true" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-shrink">
                                    <div class="col-inner">
                                        <a href="#" class="btn btn-primary btn-block"><i class="ion-android-search"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

    <section class="pt-70 pb-0">

        <div class="container">





            <div class="section-title">
                <h2><span><span>Top</span> Destinations</span></h2>
            </div>

        </div>

    </section>

    <div class="slick-list-visible">

        <div class="container">

            <div class="slick-carousel-wrapper gap-5">

                <div class="slick-carousel-inner">

                    <div class="slick-top-destination-alt">

                        @foreach ($topDestination as $destination)
                        <div class="col">

                            <figure class="destination-grid-item-01">
                                <a href="#">
                                    <div class="image">
                                        <img src="{{ asset($destination->main_image)}}" alt="image" />
                                    </div>
                                    <figcaption class="content">
                                        <h5>{{ $destination->destination}}</h5>
                                        <p class="text-muted">{{count(json_decode($destination->id_tour))}} Tours</p>
                                    </figcaption>
                                </a>
                            </figure>
    
                        </div>
                        @endforeach

                    </div>

                    <div class="clear mb-100"></div>

                    <div class="section-title">
                        <h2><span><span>Best</span> Tour Packages</span></h2>
                    </div>

                    <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-20 mb-30">

                        @foreach ($topTour as $tour)
                        <div class="col">
                            <figure class="tour-grid-item-01">
                                <a href="{{ route('frn.tourdetail', $tour->id)}}">
                                    <div class="image">
                                        <img src="{{ asset($tour->main_image)}}" alt="images" />
                                    </div>

                                    <figcaption class="content">
                                        <h5>{{$tour->name}}</h5>
                                        <ul class="item-meta">
                                            <li>
                                                <i class="elegent-icon-pin_alt text-warning"></i> {{$tour->start}}
                                            </li>
                                            <li>
                                                <div class="rating-item rating-sm rating-inline clearfix">
                                                    <div class="rating-icons">
                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5" />
                                                    </div>
                                                    <p class="rating-text font600 text-muted font-12 letter-spacing-1">26 reviews</p>
                                                </div>
                                            </li>
                                        </ul>
                                        @if ($tour->start == $tour->end )
                                        <ul class="item-meta mt-15">
                                            <li><span class="font700 h6">{{$tour->time}}</span></li>
                                            <li>
                                                Start/End: <span class="font600 h6 line-1 mv-0"> {{$tour->start}}</span>
                                            </li>
                                        </ul>
                                        @else                                                
                                        <ul class="item-meta mt-15">
                                            <li><span class="font700 h6">{{$tour->time}}</span></li>
                                            <li>
                                                Start: <span class="font600 h6 line-1 mv-0"> {{$tour->start}}</span> - End: <span class="font600 h6 line-1 mv-0"> {{$tour->end}}</span>
                                            </li>
                                        </ul>
                                        @endif
                                        <p class="mt-3"><span class="h6 line-1 text-primary font16">Rp {{number_format($tour->price,0,',','.')}}</span> / person<span class="text-muted mr-5"></span></p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                        @endforeach

                    </div>

                </div>

                <!-- </section> -->

                <br>

                <section class="pt-40 pb-100">

                    <div class="container">

                        <div class="section-title">
                            <h2><span><span>Travel</span> News</span></h2>
                        </div>

                        <div class="post-grid-wrapper-01">

                            <div class="row equal-height cols-1 cols-sm-2 cols-md-3 gap-10 gap-md-20 mb-40">

                                <div class="col-12 col-md-4">

                                    <article class="post-grid-01">

                                        <div class="image">
                                            <img src="{{ asset('frontend/images/image-regular/07.jpg')}}" alt="images" />
                                        </div>
                                        <div class="content">
                                            <span class="post-date text-muted">Mar 15, 2021</span>
                                            <h4>Raising say express had chiefly detract</h4>
                                            <a href="#" class="h6">Read this <i class="elegent-icon-arrow_right"></i></a>
                                        </div>

                                    </article>

                                </div>

                                <div class="col">

                                    <article class="post-grid-01">

                                        <div class="image">
                                            <img src="{{ asset('frontend/images/image-regular/08.jpg')}}" alt="images" />
                                        </div>
                                        <div class="content">
                                            <span class="post-date text-muted">Mar 15, 2021</span>
                                            <h4>Cordially convinced incommode existence</h4>
                                            <a href="#" class="h6">Read this <i class="elegent-icon-arrow_right"></i></a>
                                        </div>

                                    </article>

                                </div>

                                <div class="col">

                                    <article class="post-grid-01">

                                        <div class="image">
                                            <img src="{{ asset('frontend/images/image-regular/09.jpg')}}" alt="images" />
                                        </div>
                                        <div class="content">
                                            <span class="post-date text-muted">Mar 15, 2017</span>
                                            <h4>Improving age our her cordially intention</h4>
                                            <a href="#" class="h6">Read this <i class="elegent-icon-arrow_right"></i></a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- end Main Wrapper -->
@endsection