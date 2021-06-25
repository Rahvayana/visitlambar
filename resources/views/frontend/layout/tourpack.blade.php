@extends('frontend.master')

@section('title', 'Tour Package | Visitlampung.com')

@section('content')
<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper page-detail">

        <div class="page-title border-bottom pt-25 mb-0 border-bottom-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                </div>

            </div>

        </div>

        <div class="container pt-30">

            <div class="row gap-20 gap-lg-40">

                <div class="col-12 col-lg-12">

                    <div class="content-wrapper">

                        <div class="section-title border-bottom w-100">
                            <div class="d-flex flex-column flex-sm-row align-items-lg-end">
                                <div>
                                    <h2><span><span>Tour</span> Package</span></h2>
                                </div>
                                <div class="ml-sm-auto">

                                    <div class="sort-box mt-10 mt-sm-0">
                                        <div class="d-flex align-items-center sort-item">
                                            <label class="sort-label d-none d-sm-flex">Destination:</label>
                                            <div class="sort-form">
                                                <select class="chosen-the-basic form-control" tabindex="2">
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
                                </div>
                            </div>
                        </div>


                        <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-20 mt-50">

                            @foreach ($tours as $tour)
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

                        <nav class="pager-wrappper mt-50">
                            <ul class="pagination justify-content-center mb-0 pb-0">
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

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->

@endsection