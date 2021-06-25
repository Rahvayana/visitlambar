@extends('frontend.master')

@section('title', 'Tour Payment | Visitlambar.com')

@section('content')
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper page-detail">

        <div class="page-title border-bottom pt-25 mb-0 border-bottom-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                    <div class="col-12 col-md-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Tour Package</a></li>
                                <li class="breadcrumb-item"><a href="#">Adventure</a></li>
                                <li class="breadcrumb-item"><a href="#">{{$tourData->name}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payment</li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container pt-30">

            <div class="row gap-20 gap-lg-40">

                <div class="col-12 col-lg-7">

                    <div class="content-wrapper">

                        <div class="form-draft-payment">

                            <form>

                                <h4 class="heading-title"><span>Traveller Details</span></h4>
                                <p class="post-heading">Already registered with Visitlampung.com? <a href="#loginFormTabInModal-login" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">Login</a></p>

                                <h4 class="heading-title"><span>Treveller PIC</span></h4>

                                <div class="row gap-15 mb-15">

                                    <div class="col-4 col-sm-3 col-md-2">

                                        <div class="form-group">
                                            <label>Title</label>
                                            <select data-placeholder="Select" class="chosen-the-basic" tabindex="2">
                                                <option value=""></option>
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                                <option>Miss</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="w-100 d-block d-md-none"></div>

                                    <div class="col-6 col-md-5">

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="First name" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-5">

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-4 col-md-4">

                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select data-placeholder="Select" class="chosen-the-basic" tabindex="2">
                                                <option value=""></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-4 col-md-4">

                                        <div class="form-group">
                                            <label>Born</label>
                                            <div class="row cols-3 gap-5">
                                                <input type="text" class="form-control mask-data-mask" data-mask="00/00/0000" placeholder="dd/mm/yyyy" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-4 col-md-4">

                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <select data-placeholder="Select" class="chosen-the-basic" tabindex="2">
                                                <option value=""></option>
                                                <option>Thailand</option>
                                                <option>Malaysia</option>
                                                <option>Singapore</option>
                                                <option>Japan</option>
                                                <option>Germany</option>
                                                <option>Italy</option>
                                                <option>Indonesia</option>
                                                <option>Oman</option>
                                                <option>China</option>
                                                <option>Turkey</option>
                                                <option>Russia</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-6 col-sm-6 col-md-7">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Email address" />
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-5">

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone number" />
                                        </div>

                                    </div>

                                </div>


                                <div class="mb-60"></div>

                                <h4 class="heading-title"><span>Billing Address</span></h4>

                                <div class="row gap-15 mb-15">

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="First name" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Company name</label>
                                            <input type="text" class="form-control" placeholder="Your company" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone number" />
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-12">

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Street 1" />
                                            <input type="text" class="form-control mt-10" placeholder="Street 2 - Optional" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Province</label>
                                            <input type="email" class="form-control" placeholder="Or city" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" placeholder="Or town" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Zipcde</label>
                                            <input type="email" class="form-control" placeholder="Zipcde" />
                                        </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Country</label>
                                            <select data-placeholder="Select" class="chosen-the-basic" tabindex="2">
                                                <option value=""></option>
                                                <option>Thailand</option>
                                                <option>Malaysia</option>
                                                <option>Singapore</option>
                                                <option>Japan</option>
                                                <option>Germany</option>
                                                <option>Italy</option>
                                                <option>Indonesia</option>
                                                <option>Oman</option>
                                                <option>China</option>
                                                <option>Turkey</option>
                                                <option>Russia</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <div class="mb-60"></div>

                                <h4 class="heading-title"><span>Finish Payment <small class="font-sm text-muted">/ <i class="fas fa-lock"></i> secure</small></span></h4>
                                <p class="post-heading">Excellent so to no sincerity smallness. Removal request delight if on he we.</p>

                                <div class="alert alert-info line-145 padding-30" role="alert">
                                    <h4 class="alert-heading line-125 mb-5">Congratulations!</h4>
                                    <p class="lead mb-10">You've got the best price at just <strong class="text-dark">Rp 230.000</strong> per person</p>
                                    <hr class="mt-0 mb-10">
                                    <p class="mb-0">Prices may go up, so secure your reservation today. </p>
                                </div>

                                <div class="box-payment mt-20">

                                    <div class="row gap-20">

                                        <div class="col-6">

                                            <div class="payment-option-item">

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="BoxPayment-CreditCard" name="BoxPayment" class="custom-control-input" value="BoxPayment-formCreditCard" />
                                                    <label class="custom-control-label text-muted" for="BoxPayment-CreditCard">
                                                        <img class="d-inline-block" src="{{ asset('frontend/images/image-payment/payment-credit-cards.jpg')}}" alt="images" /><br />
                                                        Pembayaran Manual
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-6">

                                            <div class="payment-option-item">

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="BoxPayment-paypal" name="BoxPayment" class="custom-control-input" value="BoxPayment-formPaypal" />
                                                    <label class="custom-control-label text-muted" for="BoxPayment-paypal">
                                                        <img class="d-inline-block" src="{{ asset('frontend/images/image-payment/payment-paypal.jpg')}}" alt="images" /><br />
                                                        Pembayaran Otomatis
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div id="BoxPayment-formCreditCard" class="payment-form">

                                        <h5>Your Payment Total: Rp 830.000</h5>
                                        <p>The booking amount will be debited from your account once the booking is completed.</p>


                                        <div class="row gap-20 mb-15">



                                        </div>

                                    </div>

                                    <div id="BoxPayment-formPaypal" class="payment-form">

                                        <h5>Your Payment Total: Rp 830.000</h5>
                                        <p>The booking amount will be debited from your account once the booking is completed.</p>
                                        <p>After clicking 'Book Now' you will be directed to Payment Getway to complete payment. <strong>You must complete the process or the booking will not occur </strong>. Afterwards you will be redirected to us again. </p>

                                        <a href="#" class="btn btn-dark">Comingsoon !</a>

                                    </div>

                                </div>

                                <hr class="mv-40">

                                <div class="custom-control custom-checkbox">
                                    <input id="formDraftPayment02-terms" name="formDraftPayment02-terms" type="checkbox" class="custom-control-input" value="paymentsCreditCard" />
                                    <label class="custom-control-label" for="formDraftPayment02-terms">By submitting a booking request, you accept our <a href="#">terms and conditions</a> as well as the <a href="#">cancellation policy</a> and <a href="#">house rules</a> .</label>
                                </div>

                                <div class="row mt-20">

                                    <div class="col-sm-8 col-md-6">

                                        <a href="tour-conformation.html" class="btn btn-primary btn-block">Booking Now</a>

                                        <p class="line-145 mt-20 font-italic font-sm"><span class="font600">** Prepared is me marianne</span>: pleasure likewise debating. Wonder an unable except better stairs do ye admire.</p>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-lg-5">

                    <aside class="sticky-kit sidebar-wrapper no-border">

                        <div class="booking-box">

                            <div class="box-heading">
                                <h3 class="h6 text-white text-uppercase">Order detail</h3>
                            </div>
                            <div class="box-content">

                                <a href="#" class="tour-small-grid-01 mb-20 clearfix">

                                    <div class="image"><img src="{{ asset($tourData->main_image)}}" alt="image" /></div>
                                    <div class="content">
                                        <h6>{{$tourData->name}}</h6>
                                        <ul class="item-meta">
                                            <li><i class="elegent-icon-pin_alt text-warning"></i>{{$tourData->start}}</li>
                                            <li><strong>{{$tourData->time}}</strong></li>
                                        </ul>
                                        <span class="price">Price from <span class="h6 line-1 text-primary number">Rp {{number_format($tourData->price,0,',','.')}}</span></span>
                                    </div>

                                </a>

                                <span class="font600 text-muted line-125">Your choosen date is</span>
                                <h4 class="line-125 choosen-date mt-3"><i class="ri-calendar"></i> {{Carbon\Carbon::parse($availableData->date_start)->isoFormat('D')}} - {{Carbon\Carbon::parse($availableData->date_end)->isoFormat('D MMMM, YYYY')}} <small class="d-block">({{$availableData->day}} days) <a href="#detail-content-sticky-nav-05" class="anchor font10 pl-40 d-block text-uppercase h6 text-primary float-right mt-5">Change</a></small></h4>

                                <ul class="border-top mt-20 pt-15">
                                    <li class="clearfix">Rp {{number_format($tourData->price,0,',','.')}} x {{$guest}} guests<span class="float-right">Rp {{number_format(($tourData->price*$guest),0,',','.')}}</span></li>
                                    @if ($availableData->booking_fee!='0')
                                    <li class="clearfix">Booking fee<span class="float-right">Rp {{number_format($availableData->booking_fee,0,',','.')}}</span></li>
                                    @else
                                    <li class="clearfix">Booking fees<span class="float-right text-success">Free</span></li>
                                    @endif
                                    @php
                                        $discount=0;
                                    @endphp
                                    @if ($availableData->discount != '0')
                                    @php
                                        $discount = (($tourData->price*$guest)*$availableData->discount)/100;
                                    @endphp
                                    <li class="clearfix">Discount<span class="float-right text-success">- Rp {{number_format($discount,0,',','.')}}</span></li>
                                    @endif
                                    @if ($availableData->other_fee != '0')
                                    <li class="clearfix">Other fees<span class="float-right text-success">- Rp {{number_format($availableData->other_fee,0,',','.')}}</span></li>
                                    @else
                                    <li class="clearfix">Other fees<span class="float-right text-success">Free</span></li>
                                    @endif
                                    
                                    <li class="clearfix border-top font700 text-uppercase">
                                        <div class="border-top mt-1">
                                            @php
                                                $total_fee = ($tourData->price*$guest) - $discount + $availableData->other_fee + $availableData->booking_fee;
                                            @endphp
                                            <span>Total</span><span class="float-right text-dark">Rp {{number_format($total_fee,0,',','.')}}</span>
                                        </div>
                                    </li>
                                </ul>

                                <p class="text-right font-sm">100% Satisfaction guaranteed</p>

                            </div>

                            <div class="box-bottom bg-light">
                                <h6 class="font-sm">We are the best tour operator</h6>
                                <p class="font-sm">Our custom tour program, direct call <span class="text-primary">+628128882220</span>.</p>
                            </div>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection