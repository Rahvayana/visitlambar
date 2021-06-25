@extends('cms.master')

@section('title', 'Edit Tour Package')

@section('content')

<div class="content-header sty-one">
    <h1 class="text-black">Edit Tour Package</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Adventure</li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Tour</li>
        <li><i class="fa fa-angle-right"></i> Edit</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <form id="tour-form" action="{{ route('cms.tour.update', $dataTour->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="text-black m-b-3">Edit Package Detail</h4>
            <div id="demo">
                <div class="step-app">
                    <ul class="step-steps">
                        <li><a href="#step1"><span class="number">1</span> Main Info</a></li>
                        <li><a href="#step2"><span class="number">2</span> What Interesting</a></li>
                        <li><a href="#step3"><span class="number">3</span> Tour Plan</a></li>
                        <li><a href="#step4"><span class="number">4</span> Feature</a></li>
                        <li><a href="#step5"><span class="number">5</span> Image</a></li>
                    </ul>
                    <div class="step-content">

                        <div class="step-tab-panel" id="step1">

                            <div class="row m-t-2">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="firstName1">Tour Pack Name <i style="color: red;">*</i></label>
                                        <input class="form-control" name="name" type="text" value="{{$dataTour->name}}" required>
                                        <span class="fa fa-plane form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastName1">Price <i style="color: red;">*</i></label>
                                        <input class="form-control" name="price" type="number" value="{{$dataTour->price}}" required>
                                        <span class="fa fa-money form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="lastName1">Min Guest <i style="color: red;">*</i></label>
                                        <input class="form-control" name="min_guest" type="number" value="{{$dataTour->min_guest}}" required>
                                        <span class="fa fa-users form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label>Tour Package Description <i style="color: red;">*</i></label>
                                        <textarea class="form-control" name="desc" id="descTextarea" rows="3" required>{{$dataTour->desc}}</textarea>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="step-tab-panel" id="step2">
                            <div class="row m-t-2">
                                <div class="col-md-2"></div>
                                <div class="col-md-6">
                                    <label>What Interest in Tour Package <i style="color: red;">*</i></label>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-sm btn-primary" name="button" onclick="appendOutcome(this)"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                                @foreach ($dataTour->interest as $interest)
                                <div class="col-md-2"></div>
                                <div class="col-md-6 m-b-1">
                                    <input type="text" class="form-control" name="interest[]" value="{{$interest}}">
                                </div>
                                <div class="col-md-2 pt-1 m-b-1">
                                    <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeOutcome(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                                <div class="col-md-2"></div>
                                @endforeach
                            </div>

                            <div id="new-interest">
                                <div class="row m-t-2">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-6 m-b-1">
                                        <input type="text" class="form-control" name="interest[]">
                                    </div>
                                    <div class="col-md-2 pt-1 m-b-1">
                                        <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeOutcome(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>


                        <div class="step-tab-panel" id="step3">
                            <div class="row m-t-2" id="plan">
                                <div class="col-md-12 m-b-2 px-5">
                                    <fieldset class="form-group">
                                        <label>Explain your plan <i style="color: red;">*</i></label>
                                        <textarea class="form-control" name="plan_desc" id="descTextarea" rows="3" required>{{$dataTour->plan->descPlan}}</textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12 m-b-2 px-5">
                                    @foreach ($dataTour->plan->destinationPlan as $plan)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Select Destination <i style="color: red;">*</i></label>
                                            <select class="form-control" name="destination[]">
                                                <option selected disabled>Destination</option>
                                                @foreach ($destinations as $destination)
                                                <option value="{{$destination->id}}" {{$plan->id == $destination->id ? 'selected' : ''}}>{{$destination->destination}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Start Trip <i style="color: red;">*</i></label>
                                            <input type="time" class="form-control" name="start[]" value="{{$plan->start}}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>End Trip <i style="color: red;">*</i></label>
                                            <input type="time" class="form-control" name="end[]" value="{{$plan->end}}">
                                        </div>
                                        <div class="col-md-8 m-t-2">
                                            <label>Home Stay Name</label>
                                            <input type="text" class="form-control" name="stay[]"value="{{$plan->stay != 'none' ? $plan->stay : ''}}">
                                        </div>
                                        <div class="col-md-12 text-center m-t-2 m-b-2">
                                            <button type="button" class="btn btn-sm btn-danger" name="button" onclick="delDestination(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-10 text-right">
                                    <p>Add New Destination for Tour Package</p>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-sm btn-primary" name="button" onclick="newDestination(this)"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div id="new-destination">
                                <div class="col-md-12 m-b-2 px-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Select Destination <i style="color: red;">*</i></label>
                                            <select class="form-control" name="destination[]">
                                                <option selected disabled>Destination</option>
                                                @foreach ($destinations as $destination)
                                                <option value="{{$destination->id}}">{{$destination->destination}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Start Trip <i style="color: red;">*</i></label>
                                            <input type="time" class="form-control" name="start[]">
                                        </div>
                                        <div class="col-md-3">
                                            <label>End Trip <i style="color: red;">*</i></label>
                                            <input type="time" class="form-control" name="end[]">
                                        </div>
                                        <div class="col-md-8 m-t-2">
                                            <label>Home Stay Name</label>
                                            <input type="text" class="form-control" name="stay[]">
                                        </div>
                                        <div class="col-md-12 text-center m-t-2">
                                            <button type="button" class="btn btn-sm btn-danger" name="button" onclick="delDestination(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="step-tab-panel" id="step4">
                            <div class="row m-t-2 px-5">
                                <div class="col-md-6 text-center m-b-2">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5>Feature Include in Tour Package</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-sm btn-primary" name="button" onclick="newInclude(this)"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center m-b-2">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5>Feature Not Include in Tour Package</h5>
                                        </div>
                                        <div class="col-md-3 pt-1">
                                            <button type="button" class="btn btn-sm btn-primary" name="button" onclick="newNotInclude(this)"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        @foreach ($dataTour->feature->include as $include)
                                        @if ($include->include != 'none' && $include->descInclude != 'none')                                            
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Include Title <i style="color: red;">*</i></label>
                                                    <input class="form-control m-b-1" name="titleInclude[]" type="text" value="{{$include->include}}" required>
                                                    <fieldset class="form-group">
                                                        <label>Include Description <i style="color: red;">*</i></label>
                                                        <textarea class="form-control" name="descInclude[]" id="descTextarea" rows="2">{{$include->descInclude}}</textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2 pt-1">
                                                    <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeInclude(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        @endif                                            
                                        @endforeach
                                        <div class="col-md-12" id="include">

                                        </div>

                                        <div id="new-include">
                                            <div class="row m-t-1">
                                                <div class="col-md-10">
                                                    <label>Include Title <i style="color: red;">*</i></label>
                                                    <input class="form-control m-b-1" name="titleInclude[]" type="text" required>
                                                    <fieldset class="form-group">
                                                        <label>Include Description<i style="color: red;">*</i></label>
                                                        <textarea class="form-control" name="descInclude[]" id="descTextarea" rows="2"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2 pt-1">
                                                    <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeInclude(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        @foreach ($dataTour->feature->notInclude as $notInclude)
                                        @if ($notInclude->notInclude != 'none' && $notInclude->descNotInclude)                                            
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Not Include <i style="color: red;">*</i></label>
                                                    <input class="form-control m-b-1" name="titleNotInclude[]" type="text" value="{{$notInclude->notInclude}}" required>
                                                    <fieldset class="form-group">
                                                        <label>Not Include Description<i style="color: red;">*</i></label>
                                                        <textarea class="form-control" name="descNotInclude[]" id="descTextarea" rows="2">{{$notInclude->descNotInclude}}</textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2 pt-1">
                                                    <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeNotInclude(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach                                        
                                        <div class="col-md-12" id="notInclude">

                                        </div>

                                        <div id="new-not-include">
                                            <div class="row m-t-1">
                                                <div class="col-md-10">
                                                    <label>Not Include Title <i style="color: red;">*</i></label>
                                                    <input class="form-control m-b-1" name="titleNotInclude[]" type="text" required>
                                                    <fieldset class="form-group">
                                                        <label>Not Include Description<i style="color: red;">*</i></label>
                                                        <textarea class="form-control" name="descNotInclude[]" id="descTextarea" rows="2"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2 pt-1">
                                                    <button type="button" class="btn btn-sm btn-danger" name="button" onclick="removeNotInclude(this)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="step-tab-panel" id="step5">
                            <div class="col-md-12 m-t-2">
                                <div class="row m-t-2">
                                    <div class="col-md-4 m-b-2">
                                        <label>Select Main Image</label>
                                        <input type="file" class="dropify" name="image1" data-default-file="{{ asset($dataTour->main_image)}}"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Select 2nd Image</label>
                                        <input type="file" class="dropify" name="image2" data-default-file="{{ asset($images[0]->image)}}"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Select 3rd Image</label>
                                        <input type="file" class="dropify" name="image3" data-default-file="{{ asset($images[1]->image)}}"/>
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
            document.getElementById("tour-form").submit();
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
<!-- destination -->
<script>
    var new_destination = jQuery('#new-destination').html();
    jQuery(document).ready(function() {
        jQuery('#new-destination').hide();
    });

    function newDestination() {
        jQuery('#plan').append(new_destination);
    }

    function delDestination(outcomeElem) {
        jQuery(outcomeElem).parent().parent().remove();
    }
</script>

<script>
    var new_include = jQuery('#new-include').html();
    jQuery(document).ready(function() {
        jQuery('#new-include').hide();
    });

    function newInclude() {
        jQuery('#include').append(new_include);
    }

    function removeInclude(outcomeElem) {
        jQuery(outcomeElem).parent().parent().remove();
    }
</script>

<script>
    var new_not_include = jQuery('#new-not-include').html();
    jQuery(document).ready(function() {
        jQuery('#new-not-include').hide();
    });

    function newNotInclude() {
        jQuery('#notInclude').append(new_not_include);
    }

    function removeNotInclude(outcomeElem) {
        jQuery(outcomeElem).parent().parent().remove();
    }
</script>

<script src="{{ asset('cms/plugins/dropify/dropify.min.js')}}"></script> 
<script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element){
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
@endsection