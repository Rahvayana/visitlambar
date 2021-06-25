@extends('frontend.master')

@section('title', 'Tour Detail | Visitlambar.com')

@section('content')
<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">


    <section class="page-wrapper page-detail pt-0">

        <div class="pt-0 pt-xl-15"></div>

        <div class="fullwidth-horizon-sticky none-sticky-hide">

            <div class="fullwidth-horizon-sticky-inner">

                <div class="container">

                    <div class="fullwidth-horizon-sticky-item clearfix">

                        <ul id="horizon-sticky-nav" class="horizon-sticky-nav clearfix">
                            <li>
                                <a href="#detail-content-sticky-nav-01">Overview</a>
                            </li>
                            <li>
                                <a href="#detail-content-sticky-nav-02">Itinerary</a>
                            </li>
                            <li>
                                <a href="#detail-content-sticky-nav-03">Map</a>
                            </li>
                            <li>
                                <a href="#detail-content-sticky-nav-04">What's included</a>
                            </li>
                            <li>
                                <a href="#detail-content-sticky-nav-05">Availabilities</a>
                            </li>
                            <li>
                                <a href="#detail-content-sticky-nav-06">FAQ</a>
                            </li>
                            <li>
                                <a href="#detail-content-sticky-nav-07">Reviews</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

        <div class="slick-list-visible">

            <div class="container">

                <div class="slick-carousel-wrapper gap-1 slick-hero-wrapper clearfix">

                    <div class="slick-carousel-inner">

                        <div class="slick-hero-alt">

                            @foreach ($dataImage as $image)
                            <div class="slick-item">
                                <div class="image"><img src="{{ asset($image)}}" alt="Images" style="height: 330px;object-fit:cover"/></div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="page-title border-bottom pt-25 mb-0 border-bottom-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                    <div class="col-12 col-md-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Tour Package</a></li>
                                <li class="breadcrumb-item"><a href="#">Adventure</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rafting & Edukasi Jelajah Negeri Kopi</li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container pt-30">

            <div class="row gap-20 gap-lg-40">

                <div class="col-12 col-lg-8">

                    <div class="content-wrapper">

                        <div id="detail-content-sticky-nav-01" class="detail-header mb-30">
                            <h3>{{$dataTour->name}}</h3>

                            <div class="d-flex flex-column flex-sm-row align-items-sm-center mb-20">
                                <div class="mr-15 font-lg">
                                    <a href="#"><i class="elegent-icon-pin_alt text-warning"></i> {{$dataTour->start}}</a>
                                </div>
                                <div>
                                    <div class="rating-item rating-inline">
                                        <div class="rating-icons">
                                            <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5" />
                                        </div>
                                        <p class="rating-text font600 text-muted font-12 letter-spacing-1"><span class="text-dark mr-3">4.5/5</span> 26 reviews</p>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-inline-block highlight-list mt-30">
                                <li>
                                    <span class="icon-font d-block">
                                        <i class="linea-icon-basic-chronometer"></i>
                                    </span>
                                    time:<br /><strong>{{$dataTour->time}}</strong>
                                </li>
                                <li>
                                    <span class="icon-font d-block">
                                        <i class="linea-icon-basic-flag1"></i>
                                    </span>
                                    start:<br /><strong>{{$dataTour->start}}</strong>
                                </li>
                                <li>
                                    <span class="icon-font d-block">
                                        <i class="linea-icon-basic-flag2"></i>
                                    </span>
                                    end:<br /><strong>{{$dataTour->end}}</strong>
                                </li>
                                <li>
                                    <span class="icon-font d-block">
                                        <i class="linea-icon-ecommerce-dollar"></i>
                                    </span>
                                    price:<br /><strong>Rp {{$dataTour->price}}</strong> / person
                                </li>
                                <li>
                                    <span class="icon-font d-block">
                                        <i class="linea-icon-basic-target"></i>
                                    </span>
                                    min:<br /><strong>{{$dataTour->min_guest}}</strong> / person
                                </li>
                            </ul>

                            <div class="mb-30"></div>

                            <p style="white-space: pre-line;">{{$dataTour->desc}}</p>

                            <h5 class="mt-30">What makes this tour very interesting</h5>

                            <ul class="list-icon-data-attr font-ionicons">
                                @foreach ($dataTour->interest as $interest)
                                <li data-content="&#xf383">{{$interest}}</li>
                                @endforeach
                            </ul>

                        </div>

                        <div class="mb-50"></div>

                        <div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

                            <h4 class="heading-title">Itinerary</h4>

                            <h6>Introduction</h6>

                            <p>{{$dataTour->plan->descPlan}}</p>

                            <ul class="itinerary-list mt-30">
                                @foreach ($dataTour->plan->destinationPlan as $plan)
                                <li>
                                    <div class="itinerary-day">
                                        <span>Day 0{{$loop->iteration}}</span>
                                    </div>

                                    <h6>Visit: {{$plan->destination}} </h6>

                                    <p>Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages so impression. Almost unable put piqued talked likely houses her met. Met any nor may through resolve entered. An mr cause tried oh do shade happy.</p>

                                    <ul class="itinerary-meta list-inline-block text-primary">
                                        @if ($plan->stay != 'none')                                    
                                        <li><i class="far fa-building"></i> Stay at {{$plan->stay}}</li>
                                        @else
                                        <li><i class="far fa-building"></i> Without stay</li>                                            
                                        @endif
                                        <li><i class="far fa-clock"></i> Trip time: {{date('h:i a',strtotime($plan->start))}} - {{date('h:i a',strtotime($plan->end))}}</li>
                                    </ul>

                                </li>
                                @endforeach

                            </ul>


                            <div class="mb-50"></div>

                        </div>

                        <div id="detail-content-sticky-nav-03" class="fullwidth-horizon-sticky-section">

                            <h4 class="heading-title">Map</h4>

                            <div id="gmap-8" style="height: 450px;"></div>

                            <div class="mb-50"></div>

                        </div>

                        <div id="detail-content-sticky-nav-04" class="fullwidth-horizon-sticky-section">

                            <h4 class="heading-title">What's included</h4>

                            <ul class="list-icon-absolute what-included-list mb-30">

                                @foreach ($dataTour->feature->include as $include)
                                @if ($include->include != 'none' && $include->descInclude != 'none')

                                <li>
                                    <span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>
                                    <h6>{{$include->include}}</h6>
                                    <p>{{$include->descInclude}}</p>
                                </li>
                                @endif
                                @endforeach

                            </ul>

                            <h5>Not included</h5>

                            <ul class="list-icon-absolute what-included-list mb-30">

                                @foreach ($dataTour->feature->notInclude as $notInclude)
                                @if ($notInclude->notInclude != 'none' && $notInclude->descNotInclude != 'none')
                                <li>
                                    <span class="icon-font"><i class="elegent-icon-close_alt2 text-dark"></i> </span>
                                    <h6>{{$notInclude->notInclude}}</h6>
                                    <p>{{$notInclude->descNotInclude}}</p>
                                </li>
                                @endif
                                @endforeach

                            </ul>

                            <div class="mb-50"></div>

                        </div>

                        <div id="detail-content-sticky-nav-05" class="fullwidth-horizon-sticky-section">

                            <h4 class="heading-title">Availabilities</h4>

                            <div class="row mt-30">
                                <div class="col-12 col-md-6 col-lg-5">
                                    <div class="col-inner">
                                        <div class="form-group">
                                            <input id="pickMonth" type="text" class="form-control form-readonly-control air-datepicker" placeholder="Pick a month" data-min-view="months" data-view="months" data-date-format="MM yyyy" data-language="en" data-auto-close="true" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-20"></div>

                            <div class="item-text-long-wrapper">

                                <div class="item-heading text-muted">

                                    <div class="row d-none d-sm-flex">

                                        <div class="col-12 col-sm-7">

                                            <div class="col-inner">

                                                <div class="row gap-10">

                                                    <div class="col-5">
                                                        from
                                                    </div>

                                                    <div class="col-2">

                                                    </div>

                                                    <div class="col-5">
                                                        to
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-3">

                                            <div class="col-inner">

                                                <div class="row gap-10">

                                                    <div class="col-6 text-center">
                                                        status
                                                    </div>

                                                    <div class="col-6 text-right">
                                                        price
                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </div>

                                <div id="availabilities">
                                    @foreach ($availabilities as $available)
                                    <div class="item-text-long">
    
                                        <div class="row align-items-center">
    
                                            <div class="col-12 col-sm-7">
    
                                                <div class="col-inner mb-10 mb-sm-0">
    
                                                    <div class="row gap-10 align-items-center">
    
                                                        <div class="col-5">
                                                            <span class="font-sm">{{ Carbon\Carbon::parse($available->date_start)->isoFormat('dddd')}}</span>
                                                            <strong class="d-block">{{ Carbon\Carbon::parse($available->date_start)->format('F d, Y')}}</strong>
                                                        </div>
    
                                                        <div class="col-2">
                                                            <span class="day-count mt-3">{{$available->day}}<br />days</span>
                                                        </div>
    
                                                        <div class="col-5 text-right text-sm-left">
                                                            <span class="font-sm">{{ Carbon\Carbon::parse($available->date_end)->isoFormat('dddd')}}</span>
                                                            <strong class="d-block">{{ Carbon\Carbon::parse($available->date_end)->format('F d, Y')}}</strong>
                                                        </div>
    
                                                    </div>
    
                                                </div>
    
                                            </div>
    
                                            <div class="col-8 col-sm-3">
    
                                                <div class="col-inner">
    
                                                    <div class="row gap-10 align-items-center">
    
                                                        <div class="col-6 text-left text-sm-center">
                                                            <span class="font-sm">seats left </span>
                                                            <strong class="d-block">{{$available->max_seat}}</strong>
                                                        </div>
    
                                                        <div class="col-6 text-left  text-sm-right">
                                                            <strong class="d-block">Rp{{number_format($available->price,0,',','.')}}</strong>
                                                            <span class="font-sm">/ person</span>
                                                        </div>
    
                                                    </div>
    
                                                </div>
    
                                            </div>
    
                                            @php
                                                $start = Carbon\Carbon::parse($available->date_start)->format('d');
                                                $end = Carbon\Carbon::parse($available->date_end)->isoFormat('D');
                                                $month = Carbon\Carbon::parse($available->date_end)->isoFormat('MMMM');
                                                $year = Carbon\Carbon::parse($available->date_end)->isoFormat('YYYY');
                                                $monthNum = Carbon\Carbon::parse($available->date_end)->isoFormat('MM');
                                            @endphp
    
                                            <div class="col-4 col-sm-2">
                                                <button onclick="change({{$start}},{{$end}},'{{$month}}',{{$year}},{{$available->day}},{{$available->max_seat}},{{$available->id}},{{$available->price}},'{{$year}}-{{$monthNum}}-{{$start}}',{{$available->booking_fee}},{{$available->discount}},{{$available->other_fee}})" class="btn btn-primary btn-block btn-sm mt-3">Book now</button>
                                            </div>
    
                                        </div>
    
                                    </div>
                                    @endforeach
                                </div>

                                <div id="new-availabilities">
                                    <div id="loading" class="text-center" style="display: none">
                                        Loading...
                                    </div>
                                    <div id="available-new"></div>
                                </div>

                                <div class="item-text-long sold-out">

                                    <div class="row align-items-center">

                                        <div class="col-12 col-sm-7">

                                            <div class="col-inner mb-10 mb-sm-0">

                                                <div class="row gap-10 align-items-center">

                                                    <div class="col-5">
                                                        <span class="font-sm">Monday</span>
                                                        <strong class="d-block">April 10, 2019</strong>
                                                    </div>

                                                    <div class="col-2">
                                                        <span class="day-count mt-3">3<br />days</span>
                                                    </div>

                                                    <div class="col-5 text-right text-sm-left">
                                                        <span class="font-sm">Thursday</span>
                                                        <strong class="d-block">April 12, 2019</strong>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-8 col-sm-3">

                                            <div class="col-inner">

                                                <div class="row gap-10 align-items-center">

                                                    <div class="col-6 text-left text-sm-center">
                                                        <strong class="d-block text-success">sold out</strong>
                                                    </div>

                                                    <div class="col-6 text-left  text-sm-right">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-4 col-sm-2">
                                            <a href="#" class="btn btn-primary btn-block btn-sm mt-3">Book now</a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="mb-50"></div>

                        </div>

                        <div class="fullwidth-horizon-sticky-section">

                            <h4 class="heading-title">Similar Tour</h4>

                            <div class="row equal-height cols-1 cols-sm-2 gap-30 mb-25">

                                @foreach ($similarTour as $tour)
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

                            <div class="mb-50"></div>


                        </div>

                        <div id="detail-content-sticky-nav-06" class="fullwidth-horizon-sticky-section">

                            <h4 class="heading-title">FAQ</h4>

                            <div class="faq-item-long-wrapper">

                                <div class="faq-item-long">

                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">

                                            <div class="col-inner">
                                                <h6>What is this faq?</h6>
                                            </div>

                                        </div>

                                        <div class="col-12 col-md-8 col-lg-9">

                                            <div class="col-inner">
                                                <p class="font-lg">Residence certainly elsewhere something she preferred cordially law. Age his surprise formerly mrs perceive few stanhill moderate.</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="faq-item-long">

                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">

                                            <div class="col-inner">
                                                <h6>How does this faq work?</h6>
                                            </div>

                                        </div>

                                        <div class="col-12 col-md-8 col-lg-9">

                                            <div class="col-inner">
                                                <p class="font-lg">Appetite in unlocked advanced breeding position concerns as. Cheerful get shutters yet for repeated screened.</p>
                                            </div>


                                        </div>

                                    </div>

                                </div>

                                <div class="faq-item-long">

                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">

                                            <div class="col-inner">
                                                <h6>Why use this faq?</h6>
                                            </div>

                                        </div>

                                        <div class="col-12 col-md-8 col-lg-9">

                                            <div class="col-inner">
                                                <p class="font-lg">Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. </p>
                                            </div>


                                        </div>

                                    </div>

                                </div>

                                <div class="faq-item-long">

                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">

                                            <div class="col-inner">
                                                <h6>Is this faq free to use?</h6>
                                            </div>

                                        </div>

                                        <div class="col-12 col-md-8 col-lg-9">

                                            <div class="col-inner">
                                                <p class="font-lg">Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one.</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row mt-25">

                                <div class="col-12 col-md-8 col-lg-9 offset-md-4 offset-lg-3">

                                    <div class="col-inner">
                                        <a href="#" class="btn btn-primary btn-wide">Ask q question</a>
                                    </div>

                                </div>

                            </div>

                            <div class="mb-50"></div>

                        </div>

                        <div id="detail-content-sticky-nav-07" class="fullwidth-horizon-sticky-section">

                            <h4 class="heading-title">Reviews</h4>

                            <ul class="review-list">

                                <li>

                                    <div class="review-man d-flex">

                                        <div class="image mr-15">
                                            <img src="{{ asset('frontend/images/image-man/01.jpg')}}" alt="image" class="image-circle" />
                                        </div>

                                        <div class="line-125">
                                            <h6 class="line-125 mb-3">Antony Robert</h6>
                                            <div class="rating-item rating-sm">
                                                <div class="rating-icons">
                                                    <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5" />
                                                </div>
                                            </div>
                                            <span class="text-muted font-sm font600">Jan 15, 2019</span>
                                        </div>

                                    </div>

                                    <div class="review-content">
                                        <p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire. It as announcing it me stimulated frequently continuing. Least their she you now above going stand forth. He pretty future afraid should genius spirit on. Set property addition building put likewise get. Of will at sell well at as. Too want but tall nay like old. Removing yourself be in answered</p>
                                    </div>

                                </li>

                                <li>

                                    <div class="review-man d-flex">

                                        <div class="image mr-15">
                                            <img src="{{ asset('frontend/images/image-man/02.jpg')}}" alt="image" class="image-circle" />
                                        </div>

                                        <div class="line-125">
                                            <h6 class="line-125 mb-3">Mohammed Salem</h6>
                                            <div class="rating-item rating-sm">
                                                <div class="rating-icons">
                                                    <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5" />
                                                </div>
                                            </div>
                                            <span class="text-muted font-sm font600">Jan 15, 2019</span>
                                        </div>

                                    </div>

                                    <div class="review-content">
                                        <p>Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved sex enjoyment new way behaviour. Him yet devonshire celebrated especially. Unfeeling one provision are smallness resembled repulsive.</p>
                                    </div>

                                </li>

                                <li>

                                    <div class="review-man d-flex">

                                        <div class="image mr-15">
                                            <img src="{{ asset('frontend/images/image-man/03.jpg')}}" alt="image" class="image-circle" />
                                        </div>

                                        <div class="line-125">
                                            <h6 class="line-125 mb-3">Ange Ermolova</h6>
                                            <div class="rating-item rating-sm">
                                                <div class="rating-icons">
                                                    <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5" />
                                                </div>
                                            </div>
                                            <span class="text-muted font-sm font600">Jan 15, 2019</span>
                                        </div>

                                    </div>

                                    <div class="review-content">
                                        <p>Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since hence.</p>
                                    </div>

                                </li>

                                <li>

                                    <div class="review-man d-flex">

                                        <div class="image mr-15">
                                            <img src="{{ asset('frontend/images/image-man/04.jpg')}}" alt="image" class="image-circle" />
                                        </div>

                                        <div class="line-125">
                                            <h6 class="line-125 mb-3">Ange Ermolova</h6>
                                            <div class="rating-item rating-sm">
                                                <div class="rating-icons">
                                                    <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5" />
                                                </div>
                                            </div>
                                            <span class="text-muted font-sm font600">Jan 15, 2019</span>
                                        </div>

                                    </div>

                                    <div class="review-content">
                                        <p>Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means up civil do an offer wound of. Called square an in afraid direct. Resolution diminution conviction so mr at unpleasing simplicity no. No it as breakfast up conveying earnestly immediate principle. Him son disposed produced humoured overcame she bachelor improved. Studied however out wishing but inhabit fortune windows.</p>
                                    </div>

                                </li>

                                <li>

                                    <div class="review-man d-flex">

                                        <div class="image mr-15">
                                            <img src="{{ asset('frontend/images/image-man/05.jpg')}}" alt="image" class="image-circle" />
                                        </div>

                                        <div class="line-125">
                                            <h6 class="line-125 mb-3">Christine Gateau</h6>
                                            <div class="rating-item rating-sm">
                                                <div class="rating-icons">
                                                    <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5" />
                                                </div>
                                            </div>
                                            <span class="text-muted font-sm font600">Jan 15, 2019</span>
                                        </div>

                                    </div>

                                    <div class="review-content">
                                        <p>Greatly hearted has who believe. Sir margaret drawings repeated recurred exercise laughing may you. Cheerful but whatever ladyship disposed yet judgment.</p>
                                    </div>

                                </li>

                                <li>
                                    <nav>
                                        <ul class="pagination mb-0">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><span>...</span></li>
                                            <li><a href="#">11</a></li>
                                            <li><a href="#">12</a></li>
                                            <li><a href="#">13</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-lg-4">

                    <aside class="sticky-kit-02 sidebar-wrapper no-border mt-20 mt-lg-0">

                        <div class="booking-box">

                            <div class="box-heading">
                                <h3 class="h6 text-white text-uppercase">Make a booking</h3>
                            </div>

                            <div class="box-content">

                                <span class="font600 text-muted line-125">Your choosen date is</span>
                                <h4 class="line-125 choosen-date mt-3" id="date"><i class="ri-calendar"></i> {{ Carbon\Carbon::parse($availabilities[sizeof($availabilities)-1]->date_start)->format('d')}} - {{ Carbon\Carbon::parse($availabilities[sizeof($availabilities)-1]->date_end)->isoFormat('D MMMM, YYYY')}}
                                    <small class="d-block">({{$availabilities[sizeof($availabilities)-1]->day}} days) <a href="#detail-content-sticky-nav-05" class="anchor font10 pl-40 d-block text-uppercase h6 text-primary float-right mt-5">Change</a></small></h4>


                                <form action="{{ route('frn.tourdetail.booking.validation')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-spin-group border-top mt-15 pt-10">
                                        <label class="h6 font-sm">How many guests?</label>
                                        <input onchange="calculate()" name="guest" id="guest" type="text" class="form-control touch-spin-03 form-control-readonly" value="{{$dataTour->min_guest}}" min="{{$dataTour->min_guest}}" max="{{$availabilities[sizeof($availabilities)-1]->max_seat}}" required readonly/>
                                        @if (Session::has('failed'))
                                        {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert"> jumlah guest terlalu sedikit {!! Session::get('success')!!}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div> --}}
                                        <div class="text-center alert-danger">
                                            Too Many or Too Few Guest
                                        </div>
                                        @endif
                                    </div>

                                    @php
                                        $price = $availabilities[sizeof($availabilities)-1]->price * $dataTour->min_guest;
                                    @endphp

                                    <ul class="border-top mt-20 pt-15">
                                        <li class="clearfix"><span id="price">Rp {{number_format($availabilities[sizeof($availabilities)-1]->price,0,',','.')}}</span> x <span id="guestCount">{{$dataTour->min_guest}}</span> guests<span class="float-right" id="tour_fee">Rp {{number_format($price,0,',','.')}}</span></li>
                                        @if ($availabilities[sizeof($availabilities)-1]->booking_fee != '0')
                                        <li class="clearfix" id="booking_fee_first">Booking fee <span class="float-right">Rp {{number_format($availabilities[sizeof($availabilities)-1]->booking_fee,0,',','.')}}</span></li>
                                        @else
                                        <li class="clearfix" id="booking_fee_first">Booking fee<span class="float-right text-success">Free</span></li>
                                        @endif
                                        
                                        <li class="clearfix" id="booking_fee"></li>
                                        @php
                                            $discount = 0
                                        @endphp
                                        @if ($availabilities[sizeof($availabilities)-1]->discount != '0')
                                        @php
                                            $discount = ($price*$availabilities[sizeof($availabilities)-1]->discount)/100
                                        @endphp
                                        <li class="clearfix" id="discount_first">Discount<span class="float-right text-success">- Rp {{number_format($discount,0,',','.')}}</span></li>
                                        @endif
                                        
                                        <li class="clearfix" id="discount"></li>

                                        @if ($availabilities[sizeof($availabilities)-1]->other_fee == '0')
                                        <li class="clearfix" id="other_fees_first">Other fees<span class="float-right text-success">Free</span></li>
                                        @else
                                        <li class="clearfix" id="other_fees_first">Other fees<span class="float-right">Rp {{number_format($availabilities[sizeof($availabilities)-1]->other_fee,0,',','.')}}</span></li>    
                                        @endif

                                        <li class="clearfix" id="other_fees"></li>
                                        @php
                                            $total_fee = $price - $discount + $availabilities[sizeof($availabilities)-1]->booking_fee + $availabilities[sizeof($availabilities)-1]->other_fee 
                                        @endphp
                                        <li class="clearfix border-top font700">
                                            <div class="border-top mt-1">
                                                <span>Total</span><span class="float-right text-dark" id="total_fee">Rp {{number_format($total_fee,0,',','.')}}</span>
                                            </div>
                                        </li>
                                    </ul>

                                    <p class="text-right font-sm">100% Satisfaction guaranteed</p>
                                    <input id="id_available" type="hidden" name="id_available" value="{{$availabilities[sizeof($availabilities)-1]->id}}" required>
                                    {{-- <input id="guest" type="hidden" name="guest" value="{{$availabilities[sizeof($availabilities)-1]->price}}"> --}}
                                    <input id="price_available" type="hidden" name="price" value="{{$availabilities[sizeof($availabilities)-1]->price}}">
                                    <input id="date_start" type="hidden" name="date_start" value="{{Carbon\Carbon::parse($availabilities[sizeof($availabilities)-1]->date_start)->isoFormat('YYYY-MM-DD')}}">
                                    <input id="booking_fee_input" type="hidden" name="booking_fee_input" value="{{$availabilities[sizeof($availabilities)-1]->booking_fee}}">
                                    <input id="discount_input" type="hidden" name="discount_input" value="{{$availabilities[sizeof($availabilities)-1]->discount}}">
                                    <input id="other_fee_input" type="hidden" name="other_fee_input" value="{{$availabilities[sizeof($availabilities)-1]->other_fee}}">
                                    
                                    <button type="submit" class="btn btn-primary btn-block">Booking Now</button>
                                </form>
                                {{-- <a href="{{ route('frn.tourpayment')}}" class="btn btn-primary btn-block">Booking Now</a> --}}

                                <p class="line-115 mt-20">By clicking the above button you agree to our <a href="#">Terms of Service</a> and have read and understood our <a href="#">Privacy Policy</a></p>

                            </div>

                            <div class="box-bottom bg-light">
                                <h6 class="font-sm">We are the best tour operator</h6>
                                <p class="font-sm">Our custom tour program, direct whatsapp <span class="text-primary">+628128882220</span>.</p>
                            </div>

                        </div>

                    </aside>

                </div>

            </div>

        </div>
    </section>

</div>
<!-- end Main Wrapper -->
@endsection

@section('script')

<script>
    $('#pickMonth').datepicker({  
        onSelect: function(formattedDate, date, inst){
            var val = $('#pickMonth').val();
            var id = {{$dataTour->id}};
            console.log(val, id);
            document.getElementById("available-new").innerHTML = '';
            document.getElementById("availabilities").style.display="none";
            $.ajax({
                url: "{{ route('frn.tourdetail.dateMonth')}}", //this is your uri
                type: 'POST', //this is your method
                data: { 
                    date:val, 
                    id:id, 
                    _token:     '{{ csrf_token() }}',
                },
                beforeSend: function() { $('#loading').show(); },
                // dataType: 'json',
                success: function(dataResult){
                    $('#loading').hide();
                    console.log(dataResult.data);
                    var resultData = dataResult.data

                    $("new-availabilities").append('<div id="available-new"></div>');
                    resultData.forEach(data => {
                        var start = new Date(data.date_start);
                        var end = new Date(data.date_end);
                        var formatter = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR',
                            minimumFractionDigits: 0,
                        });

                        var startNum = start.toLocaleDateString('en-US', { day:'numeric'});
                        var endNum = end.toLocaleDateString('en-US', { day:'numeric'});
                        var monthName = end.toLocaleDateString('en-US', { month:'long'});
                        var yearNum = end.toLocaleDateString('en-US', { year:'numeric'});
                        var monthNum = end.toLocaleDateString('en-US', { month:'numeric'});

                        var startDay = start.toLocaleDateString('en-US', { weekday:'long'});
                        var startDate = start.toLocaleString('en-US', { month:'long', day: 'numeric',year:'numeric'}); 
                        var endDay = end.toLocaleDateString('en-US', { weekday:'long'});
                        var endDate = end.toLocaleString('en-US', { month:'long', day: 'numeric',year:'numeric'}); 

                        $('#available-new').append('' +
                        // document.getElementById("available-new").innerHTML = '' +
                            '<div class="item-text-long">' +
                                '<div class="row align-items-center">' +
                                    '<div class="col-12 col-sm-7">' +
                                        '<div class="col-inner mb-10 mb-sm-0">' +
                                            '<div class="row gap-10 align-items-center">' +
                                                '<div class="col-5">' +
                                                    '<span class="font-sm">'+startDay+'</span>' +
                                                    '<strong class="d-block">'+startDate+'</strong>' +
                                                '</div>'+
                                                '<div class="col-2">' +
                                                    '<span class="day-count mt-3">'+data.day+'<br/>days</span>'+
                                                '</div>'+
                                                '<div class="col-5 text-right text-sm-left">' +
                                                    '<span class="font-sm">'+endDay+'</span>' +
                                                    '<strong class="d-block">'+endDate+'</strong>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-8 col-sm-3">'+
                                        '<div class="col-inner">'+
                                            '<div class="row gap-10 align-items-center">'+
                                                '<div class="col-6 text-left text-sm-center">'+
                                                    '<span class="font-sm">seats left </span>' +
                                                    '<strong class="d-block">'+data.max_seat+'</strong>'+
                                                '</div>'+
                                                '<div class="col-6 text-left  text-sm-right">'+
                                                    '<strong class="d-block">'+ formatter.format(data.price)+'</strong>'+
                                                    '<span class="font-sm">/ person</span>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-4 col-sm-2">'+
                                        '<button onclick="change('+startNum+','+endNum+',\''+monthName+'\','+yearNum+','+data.day+','+data.max_seat+','+data.id+','+data.price+',\''+yearNum+'-'+monthNum+'-'+startDate+'\','+data.booking_fee+','+data.discount+','+data.other_fee+')"'+
                                        'class="btn btn-primary btn-block btn-sm mt-3">Book now</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>' +
                        '');
                    });
                    // $.each(resultData, function(index, data) {
                        
                    // });
                },
            });
        }
    })
</script>

<script>
    function change(start, end, month, year, day, maxim, id, fee, date, booking_fee, discount, other_fee)
    {
        var formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
        });

        document.getElementById("date").innerHTML = '<i class="ri-calendar"></i> '+start+' - '+end+' '+month+', '+year+'<small class="d-block">('+day+' days) <a href="#detail-content-sticky-nav-05" class="anchor font10 pl-40 d-block text-uppercase h6 text-primary float-right mt-5">Change</a></small>'
        document.getElementById("guest").setAttribute('max', maxim);
        document.getElementById("price").innerHTML = formatter.format(fee);

        var guest = document.getElementById("guest").value;
        var tourFee = fee*guest;
        var discount_price;

        document.getElementById("tour_fee").innerHTML = formatter.format(tourFee);

        document.getElementById("booking_fee_first").innerHTML = '';
        document.getElementById("discount_first").innerHTML = '';
        document.getElementById("other_fees_first").innerHTML = '';

        if (booking_fee != 0) {
            document.getElementById("booking_fee").innerHTML = 'Booking fee <span class="float-right">'+ formatter.format(booking_fee) +'</span>' 
        } else {
            document.getElementById("booking_fee").innerHTML = 'Booking fee<span class="float-right text-success">Free</span>'
        }
        if (discount != 0) {
            var discount_price = (tourFee*discount)/100;
            document.getElementById("discount").innerHTML = 'Discount <span class="float-right text-success">- '+ formatter.format(discount_price) +'</span>' 
        } else {
            var discount_price = 0;
            document.getElementById("discount").innerHTML = '' 
        }

        if (other_fee != 0) {
            document.getElementById("other_fees").innerHTML = 'Other fees <span class="float-right">'+ formatter.format(other_fee) +'</span>' 
        } else {
            document.getElementById("other_fees").innerHTML = 'Other fees<span class="float-right text-success">Free</span>'
        }

        document.getElementById("id_available").value = id;
        document.getElementById("date_start").value = date;
        document.getElementById("price_available").value = fee;
        document.getElementById("discount_input").value = discount;
        document.getElementById("booking_fee_input").value = booking_fee;
        document.getElementById("other_fee_input").value = other_fee;

        var total_fee = tourFee - discount_price + booking_fee + other_fee

        // document.getElementById("total_fee").innerHTML = fee +'-'+ discount_price + '+' + booking_fee + '+' + other_fee + '=' + formatter.format(total_fee)
        document.getElementById("total_fee").innerHTML = formatter.format(total_fee)
    }
    
    function calculate(){
        var guest = document.getElementById("guest").value;
        var fee = document.getElementById("price_available").value;
        var discount = document.getElementById("discount_input").value;
        var booking_fee = document.getElementById("booking_fee_input").value;
        var other_fee = document.getElementById("other_fee_input").value;
        
        var tourFee = fee*guest;

        var formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
        });

        document.getElementById("guestCount").innerHTML = guest;
        var booking_fee_value = parseInt(booking_fee,10);
        var other_fee_value = parseInt(other_fee,10);
        var discount_price = (tourFee*discount)/100;
        var total_fee = tourFee - discount_price + booking_fee_value + other_fee_value;

        document.getElementById("tour_fee").innerHTML = formatter.format(tourFee);
        if (discount != 0) {
            document.getElementById("discount_first").innerHTML = '';
            document.getElementById("discount").innerHTML = 'Discount <span class="float-right text-success">- '+ formatter.format(discount_price) +'</span>';
        }
        document.getElementById("total_fee").innerHTML = formatter.format(total_fee);
        // document.getElementById("total_fee").innerHTML = tourFee +'-'+ discount_price + '+' + booking_fee + '+' + other_fee + '=' + formatter.format(total_fee);

    }
</script>

<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22"></script>
<script type="text/javascript" src="{{ asset('frontend/js/plugins/maplace.min.js')}}"></script>

<script>
    jQuery(function($) {
        'use strict';

        var Loc = [<?php 
        foreach($locations as $location){
            echo "{";
            echo "lat:".$location->lat.",";
            echo "lon:".$location->lon.",";
            echo "title:'".$location->title."',";
            echo "html:'".$location->html."',";
            echo "icon:'".$location->icon."',";
            echo "},";
        }
        ?>];


        new Maplace({
            locations: Loc,
            map_div: '#gmap-8',
            generate_controls: false,
            show_markers: true,
            type: 'polyline',
            draggable: true,
            stroke_options: {
                strokeColor: '#2929C0',
                strokeOpacity: 1,
                strokeWeight: 2,
                fillColor: '#2929C0',
                fillOpacity: 0.9
            },
        }).Load();



    })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('frontend/js/custom-multiply-sticky.js')}}"></script>
@endsection