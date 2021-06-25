@extends('frontend.master')

@section('title', 'Destination | Visitlambar.com')

@section('content')
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper">

        <div class="page-title bg-light mb-0">

            <div class="container">

                <div class="row gap-15 align-items-center">


                </div>
            </div>

            <div class="container pv-60">

                <div class="section-title">
                    <h2><span><span>Our</span> Destinations</span></h2>
                </div>

                <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-20 mb-30">

                    @foreach ($destinations as $destination)
                    <div class="col">

                        <figure class="destination-grid-item-01">
                            <a href="#">
                                <div class="image">
                                    <img src="{{ asset($destination->main_image)}}" alt="image" />
                                </div>
                                <figcaption class="content">
                                    <h5>{{ $destination->destination}}</h5>
                                    <p class="text-muted">25 Tours</p>
                                </figcaption>
                            </a>
                        </figure>

                    </div>
                    @endforeach
                </div>




                <p class="mt-30">Him boisterous invitation dispatched had connection inhabiting projection. By mutual an mr danger garret edward an. Diverted as strictly exertion addition no disposal by stanhill. This call wife do so sigh no gate felt. You and abode spite order get. Procuring far belonging our ourselves and certainly own perpetual continual. It elsewhere of sometimes or my certainty. Lain no as five or at high. Everything travelling set how law literature. Received shutters expenses ye he pleasant. Drift as blind above at up. No up simple county stairs do should praise as. Drawings sir gay together landlord had law smallest.</p>

                <p>Explore <a href="#" class="font700">all destinations</a> in Lampung Barat</p>

            </div>
        </div>
    </section>
</div>
@endsection