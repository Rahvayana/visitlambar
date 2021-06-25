@extends('cms.master')

@section('title', 'Add New Destination')

@section('content')

<div class="content-header sty-one">
    <h1 class="text-black">Add New Destination</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Adventure</li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Destination</li>
        <li><i class="fa fa-angle-right"></i> Add New</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <form id="destination-form" action="{{ route('cms.destination.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="text-black m-b-3">New Destination Detail</h4>
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
                                        <input class="form-control" name="destination" type="text" required>
                                        <span class="fa fa-plane form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastName1">Price <i style="color: red;">*</i></label>
                                        <input class="form-control" name="price" type="number" required>
                                        <span class="fa fa-money form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="lastName1">Min Guest <i style="color: red;">*</i></label>
                                        <input class="form-control" name="min_guest" type="number" required>
                                        <span class="fa fa-users form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label>Destination Description <i style="color: red;">*</i></label>
                                        <textarea class="form-control" name="description" id="descTextarea" rows="3" required></textarea>
                                    </fieldset>
                                </div>
                            </div>
                        </div>


                        <div class="step-tab-panel" id="step2">

                            <div class="row m-t-2">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label>What Interest in Destination <i style="color: red;">*</i></label>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="interest[]">
                                </div>
                                <div class="col-md-2 pt-1">
                                    <button type="button" class="btn btn-sm btn-primary" name="button" onclick="appendOutcome(this)"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                                <div class="col-md-2"></div>
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
                                        <input class="form-control" name="latitude" type="text" required>
                                        <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="firstName1">Longitute <i style="color: red;">*</i></label>
                                        <input class="form-control" name="longitute" type="text" required>
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
                                <div class="col-md-4 m-b-2">
                                    <label>Select Main Image</label>
                                    <input type="file" class="dropify" name="image1"/>
                                </div>
                                <div class="col-md-4">
                                    <label>Select 2nd Image</label>
                                    <input type="file" class="dropify" name="image2"/>
                                </div>
                                <div class="col-md-4">
                                    <label>Select 3rd Image</label>
                                    <input type="file" class="dropify" name="image3"/>
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