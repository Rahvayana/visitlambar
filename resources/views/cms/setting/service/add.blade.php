@extends('cms.master')

@section('title', 'Add Service')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Company Service</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Setting</li>
        <li><i class="fa fa-angle-right"></i> Service</li>
    </ol>
</div>

<div class="content">
    <div class="info-box">

        <div class="card ">
            <div class="card-header">
                <h5 class="m-b-0">New Company Service</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('cms.setting.service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Title<i style="color: red;">*</i></label>
                                        <input class="form-control" name="title" placeholder="Service Title" type="text" required>
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Image <i style="color: red;">*</i> </label>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-feedback">
                                                <label class="custom-file center-block block">
                                                    <input id="file" name="image" class="custom-file-input" type="file" required>
                                                    <span class="custom-file-control"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Icon <i style="color: red;">*</i></label>
                                        <select class="form-control" name="icon" style="font-family:Flaticon Travel Icons">
                                            <option value="flaticon-travel-icons-bicycle">&#xf101;</option>
                                            <option value="flaticon-travel-icons-caravan">&#xf106;</option>
                                            <option value="flaticon-travel-icons-train">&#xf11d;</option>
                                            <option value="flaticon-travel-icons-earth-globe-1">&#xf10b;</option>
                                            <option value="flaticon-travel-icons-kayak">&#xf10e;</option>
                                            <option value="flaticon-travel-icons-ring">&#xf115;</option>
                                            <option value="flaticon-travel-icons-airplane">&#xf100;</option>
                                            <option value="flaticon-travel-icons-boat">&#xf102;</option>
                                            <option value="flaticon-travel-icons-mountain">&#xf111;</option>
                                            <option value="flaticon-travel-icons-sailboat">&#xf116;</option>
                                            <option value="flaticon-travel-icons-do-not-disturb">&#xf109;</option>
                                            <option value="flaticon-travel-icons-boot">&#xf103;</option>
                                            <option value="flaticon-travel-icons-sunbed">&#xf11b;</option>
                                            <option value="flaticon-travel-icons-passport">&#xf113;</option>
                                            <option value="flaticon-travel-icons-tent">&#xf11c;</option>
                                            <option value="flaticon-travel-icons-map">&#xf110;</option>
                                            <option value="flaticon-travel-icons-suitcase-1">&#xf11a;</option>
                                            <option value="flaticon-travel-icons-cocktail">&#xf107;</option>
                                            <option value="flaticon-travel-icons-bus">&#xf104;</option>
                                            <option value="flaticon-travel-icons-hotel">&#xf10c;</option>
                                            <option value="flaticon-travel-icons-ship">&#xf117;</option>
                                            <option value="flaticon-travel-icons-snorkel">&#xf118;</option>
                                            <option value="flaticon-travel-icons-compass">&#xf108;</option>
                                            <option value="flaticon-travel-icons-photo-camera">&#xf114;</option>
                                            <option value="flaticon-travel-icons-earth-globe">&#xf10a;</option>
                                            <option value="flaticon-travel-icons-luggage">&#xf10f;</option>
                                            <option value="flaticon-travel-icons-car">&#xf105;</option>
                                            <option value="flaticon-travel-icons-suitcase">&#xf119;</option>
                                            <option value="flaticon-travel-icons-island">&#xf10d;</option>
                                            <option value="flaticon-travel-icons-panels">&#xf112;</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Subtitle <i style="color: red;">*</i></label>
                                <textarea class="form-control" name="subtitle" id="placeTextarea" rows="6" placeholder="Subtitle" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">

                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection