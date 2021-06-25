@extends('frontend.master')

@section('title', 'Contact Us | Visitlambar.com')

@section('content')
<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper page-result pb-0">

        <div class="page-title bg-light mb-0">

            <div class="container">

                <div class="row gap-15 align-items-center">



                </div>

            </div>

        </div>

        <div class="container pv-60">

            <div class="map-contact-wrapper">

                <div id="map" data-lat="25.19739" data-lon="55.28821" style="width: 100%; height: 500px;"></div>

                <div class="infobox-wrapper contact-infobox">
                    <div id="infobox">
                        <div class="infobox-address">
                            <h6>We Are Here</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mb-50"></div>

            <div class="row gap-50 gap-lg-0">

                <div class="col-12 col-lg-5 col-xl-4">

                    <h4 class="heading-title"><span>Drop us <span class="font200">a message:</span></span></h4>

                    <form id="contact-form" method="post" action="http://crenoveative.com/envato/gijalan/contact-2.php">

                        <div class="contact-successful-messages"></div>

                        <div class="contact-inner">

                            <div class="form-group">
                                <label for="form_name">Full Name *</label>
                                <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Your name is required.">
                                <div class="help-block with-errors text-danger"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_email">Email Address *</label>
                                <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors text-danger"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_subject">Subject</label>
                                <input id="form_subject" type="text" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea id="form_message" name="message" class="form-control" rows="7s" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors text-danger"></div>
                            </div>

                            <input type="submit" class="btn btn-primary btn-send btn-wide mt-15" value="Send message">

                        </div>

                    </form>

                </div>

                <div class="col-12 col-lg-6 ml-auto">

                    <h4 class="heading-title"><span>Contact <span class="font200">information:</span></span></h4>
                    <p class="post-heading">{{$data->information}}</p>

                    <ul class="contact-list-01">

                        <li>
                            <span class="icon-font"><i class="ion-android-pin"></i></span>
                            <h6>Address</h5>
                                <p style="white-space: pre-wrap;">{{$data->address}}</p>
                        </li>

                        <li>
                            <span class="icon-font"><i class="ion-android-mail"></i></span>
                            <h6>Email</h5>
                                <a href="#">{{$data->email}}</a>
                        </li>

                        <li>
                            <span class="icon-font"><i class="ion-android-call"></i></span>
                            <h6>Phone</h5>
                                {{$data->phone}}
                        </li>

                        <li>
                            <span class="icon-font"><i class="ion-android-print"></i></span>
                            <h6>Fax</h5>
                                {{$data->fax}}
                        </li>

                    </ul>

                    <div class="mb-50"></div>

                    <h4 class="heading-title"><span>Find <span class="font200">us on:</span></span></h4>

                    <div class="social-btns-01">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fab fa-google-plus "></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Codepen"><i class="fab fa-codepen"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fab fa-behance"></i></a>
                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->
@endsection