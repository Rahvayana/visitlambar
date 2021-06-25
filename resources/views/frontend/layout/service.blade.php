@extends('frontend.master')

@section('title', 'Our Service | Visitlambar.com')

@section('content')

<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper page-result pb-0">

        <div class="page-title bg-light mb-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                    <div class="col-12 col-md-7">

                    </div>

                </div>

            </div>

        </div>

        <div class="container pv-100">

            <div class="section-title w-100 text-center">
                <h2><span><span>Our</span> services</span></h2>
                <p>Considered an invitation do introduced sufficient understood instrument it.</p>
            </div>

            <div class="row equal-height cols-1 cols-sm-2 cols-xl-4 gap-30 mb-40">

                @foreach ($services as $service)
                <div class="col">

                    <div class="featured-image-item-08">
                        <div class="image">
                            <div class="image-inner">
                                <img src="{{ asset($service->image)}}" alt="Images" />
                            </div>
                        </div>
                        <div class="content">
                            <div class="icon-font text-primary"><i class="{{$service->icon}}"></i></div>
                            <h5>{{$service->title}}</h5>
                            <p>{{$service->subtitle}}</p>
                            <a href="service-single.html" class="h6 text-primary">Learn more <i class="elegent-icon-arrow_right"></i></a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="mb-100"></div>

            <div class="cta-horizontal text-center">

                <h1>No services suite you!</h1>
                <p>Didn't find the service suite you! Need a custom service?</p>
                <a href="#" class="btn btn-outline-dark btn-wide">Let's talk</a>

            </div>

        </div>

        <div class="border-top pv-100">

            <div class="container">

                <div class="section-title text-center w-100">
                    <h2><span><span>Our</span> features</span></h2>
                    <p>{{$features->subtitle}}</p>
                </div>

                <div class="row cols-1 cols-sm-2 cols-lg-3 gap-20 gap-md-40">

                    @foreach ($features->feature as $key => $feature)
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
            </div>

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