@extends('frontend.master')

@section('title', 'About Us | Visitlambar.com')

@section('content')
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper">

        <div class="container pt-100">

            <div class="section-title text-center w-100">
                <h2><span><span>About</span> us</span></h2>
                <p>{{$about->subtitle}}</p>
            </div>

            <div class="two-column-css">
                <p style="white-space: pre-line;">
                    {{$about->about}}
                </p>
            </div>

            <div class="mb-100"></div>

            <div class="row justify-content-center">

                <div class="col-12 col-lg-11 col-xl-10">

                    <div class="counting-wrapper">

                        <div class="bg-image overlay-relative" style="background-image:url('images/image-bg/44.jpg');">

                            <div class="overlay-holder overlay-white opacity-8"></div>

                            <div class="row equal-height cols-1 cols-sm-3 cols-md-3 gap-30">

                                <div class="col">

                                    <div class="item-counting">
                                        <div class="counting-inner">
                                            <div class="counting-number">
                                                <span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="2542"></span>
                                            </div>
                                            <span class="counting-label">Happy Customers</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="item-counting">
                                        <div class="counting-inner">
                                            <div class="counting-number">
                                                <span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="896"></span>
                                            </div>
                                            <span class="counting-label">Tour Packages</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">

                                    <div class="item-counting">
                                        <div class="counting-inner">
                                            <div class="counting-number">
                                                <span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="365"></span>
                                            </div>
                                            <span class="counting-label">Great places</span>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="mb-100"></div>

            <div class="section-title text-center w-100">
                <h2><span><span>Our</span> features</span></h2>
                <p>{{$feature->subtitle}}</p>
            </div>

            <div class="row cols-1 cols-sm-2 cols-lg-3 gap-20 gap-md-40">

                @foreach ($feature->feature as $key => $feature)
                <div class="col">
                    <div class="featured-icon-horizontal-01 clearfix">
                        <div class="icon-font">
                            <i class="{{$feature->icon}} text-primary"></i>
                        </div>
                        <div class="content">
                            <h6>{{$feature->title}}</h6>
                            <p class="text-muted">{{$feature->subtitle}} </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="mb-100"></div>
            @if($teamMember != null)
            <div class="section-title text-center w-100">
                <h2><span><span>Our</span> teams</span></h2>
                <p>People who control making Tourperator run</p>
            </div>

            <div class="row equal-height cols-2 cols-sm-3 cols-lg-4 gap-30 mb-40">

                @foreach ($teamMember as $member)
                <div class="col">
                    <figure class="user-grid">
                        <div class="image">
                            <img src="{{ asset($member->image)}}" alt="Team" style="width: 10rem;height: 10rem;object-fit:cover" class="img-circle" />
                        </div>

                        <figcaption class="content">

                            <h6 class="text-uppercase">{{$member->name}}</h6>
                            <p>{{$member->role}}</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </figcaption>

                    </figure>

                </div>
                @endforeach
            </div>
            @endif

        </div>

    </section>

    <section class="border-top pv-30">

        <div class="row gap-20 gap-lg-40 align-items-center justify-content-center line-1">
            @foreach ($partners as $partner)
            <div class="col-auto">
                <div class="image"><img src="{{ asset($partner->logo)}}" alt="{{$partner->name}}" /></div>
            </div>
            @endforeach
        </div>

    </section>

</div>
@endsection