@extends('cms.master')

@section('title', 'Edit Destination')

@section('content')

<div class="content-header sty-one">
    <h1 class="text-black">Edit Destination</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Adventure</li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Destination</li>
        <li><i class="fa fa-angle-right"></i> Edit Destination</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <form id="destination-form" action="{{ route('cms.destination.update', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="text-black m-b-3">Edit Destination Detail</h4>
            <div id="demo">
                <div class="step-app">
                    <ul class="step-steps">
                        <li><a href="#step1"><span class="number">1</span> Main Info</a></li>
                        <li><a href="#step2"><span class="number">2</span> What Interesting</a></li>
                        <li><a href="#step3"><span class="number">3</span> Location</a></li>
                        <li><a href="#step4"><span class="number">4</span> Image</a></li>
                    </ul>
                    <div class="step-content">

                        <div class="step-tab-panel" id="step1">

                            <div class="row m-t-2">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="firstName1">Destination Name <i style="color: red;">*</i></label>
                                        <input class="form-control" name="destination" type="text" value="{{$data->destination}}" required>
                                        <span class="fa fa-plane form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastName1">Price <i style="color: red;">*</i></label>
                                        <input class="form-control" name="price" type="number" value="{{$data->price}}" required>
                                        <span class="fa fa-money form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="lastName1">Min Guest <i style="color: red;">*</i></label>
                                        <input class="form-control" name="min_guest" type="number" value="{{$data->min_guest}}" required>
                                        <span class="fa fa-users form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label>Destination Description <i style="color: red;">*</i></label>
                                        <textarea class="form-control" name="description" id="descTextarea" rows="3" required>{{$data->description}}</textarea>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="step-tab-panel" id="step2">
                            <div class="row m-t-2">
                                <div class="col-md-2"></div>
                                <div class="col-md-6">
                                    <label>What Interest in Destination <i style="color: red;">*</i></label>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-sm btn-primary" name="button" onclick="appendOutcome(this)"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>

                                @foreach ($data->interest as $interest)
                                <div class="col-md-12 m-t-2">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="interest[]" value="{{$interest}}">
                                        </div>
                                        <div class="col-md-2 pt-1">
                                            <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeOutcome(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>

                                @endforeach
                            </div>

                            <div id="new-interest">
                                <div class="row m-t-2">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="interest[]">
                                    </div>
                                    <div class="col-md-2 pt-1">
                                        <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeOutcome(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>

                        </div>
                        <!-- step3 -->
                        <div class="step-tab-panel" id="step3">
                            <div class="row m-t-2">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastName1">Latitude <i style="color: red;">*</i></label>
                                        <input class="form-control" name="latitude" type="text" value="{{$data->location->lat}}" required>
                                        <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="firstName1">Longitute <i style="color: red;">*</i></label>
                                        <input class="form-control" name="longitute" type="text" value="{{$data->location->lon}}" required>
                                        <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <p><i style="color: red;">*</i> : Get Longitute & Latitude from google map</p>
                                </div>
                            </div>
                        </div>

                        <div class="step-tab-panel" id="step4">
                            <div class="row m-t-2">
                                <div class="col-md-12 m-b-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Main picture of destination</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="custom-file center-block block">
                                                        <input type="file" name="image1" id="file" class="custom-file-input" required>
                                                        <span class="custom-file-control"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 m-t-2">
                                                    <div class="image">
                                                        <img src="{{ asset($data->main_image)}}" style="border-radius:20px" width="100%" alt="image" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>2nd picture of destination</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="custom-file center-block block">
                                                        <input type="file" name="image2" id="file" class="custom-file-input" required>
                                                        <span class="custom-file-control"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 m-t-2">
                                                    <div class="image">
                                                        <img src="{{ asset($dataImage[0]->image)}}" style="border-radius:20px" width="100%" alt="image" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>3rd picture of destination</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="custom-file center-block block">
                                                        <input type="file" name="image3" id="file" class="custom-file-input" required>
                                                        <span class="custom-file-control"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 m-t-2">
                                                    <div class="image">
                                                        <img src="{{ asset($dataImage[1]->image)}}" style="border-radius:20px" width="100%" alt="image" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="step-footer">
                        <button data-direction="prev" class="btn btn-light">Previous</button>
                        <button data-direction="next" class="btn btn-primary">Next</button>
                        <button data-direction="finish" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Main row -->
</div>
@endsection

@section('script')
<script src="{{ asset('cms/plugins/formwizard/jquery-steps.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script>
    $('#demo').steps({
        onFinish: function() {
            document.getElementById("destination-form").submit();
        }
    });
</script>

<script>
    var new_interest = jQuery('#new-interest').html();
    jQuery(document).ready(function() {
        jQuery('#new-interest').hide();
    });

    function appendOutcome() {
        jQuery('#step2').append(new_interest);
    }

    function removeOutcome(outcomeElem) {
        jQuery(outcomeElem).parent().parent().remove();
    }
</script>

@endsection