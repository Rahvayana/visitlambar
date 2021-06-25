@extends('cms.master')

@section('title', 'Edit Service')

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
                <h5 class="m-b-0">Edit Company Service</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('cms.setting.service.update', $service->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Title<i style="color: red;">*</i></label>
                                        <input class="form-control" name="title" placeholder="Service Title" type="text" value="{{$service->title}}" required>
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Image </label>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-feedback">
                                                <label class="custom-file center-block block">
                                                    <input id="file" name="image" class="custom-file-input" type="file">
                                                    <span class="custom-file-control"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Icon <i style="color: red;">*</i></label>
                                        <select class="form-control" name="icon" style="font-family:Flaticon Travel Icons">
                                            <option value="flaticon-travel-icons-bicycle" <?php if ($service->icon == 'flaticon-travel-icons-bicycle') echo 'selected' ?>>&#xf101;</option>
                                            <option value="flaticon-travel-icons-caravan" <?php if ($service->icon == 'flaticon-travel-icons-caravan') echo 'selected' ?>>&#xf106;</option>
                                            <option value="flaticon-travel-icons-train" <?php if ($service->icon == 'flaticon-travel-icons-train') echo 'selected' ?>>&#xf11d;</option>
                                            <option value="flaticon-travel-icons-earth-globe-1" <?php if ($service->icon == 'flaticon-travel-icons-earth-globe-1') echo 'selected' ?>>&#xf10b;</option>
                                            <option value="flaticon-travel-icons-kayak" <?php if ($service->icon == 'flaticon-travel-icons-kayak') echo 'selected' ?>>&#xf10e;</option>
                                            <option value="flaticon-travel-icons-ring" <?php if ($service->icon == 'flaticon-travel-icons-ring') echo 'selected' ?>>&#xf115;</option>
                                            <option value="flaticon-travel-icons-airplane" <?php if ($service->icon == 'flaticon-travel-icons-airplane') echo 'selected' ?>>&#xf100;</option>
                                            <option value="flaticon-travel-icons-boat" <?php if ($service->icon == 'flaticon-travel-icons-boat') echo 'selected' ?>>&#xf102;</option>
                                            <option value="flaticon-travel-icons-mountain" <?php if ($service->icon == 'flaticon-travel-icons-mountain') echo 'selected' ?>>&#xf111;</option>
                                            <option value="flaticon-travel-icons-sailboat" <?php if ($service->icon == 'flaticon-travel-icons-sailbot') echo 'selected' ?>>&#xf116;</option>
                                            <option value="flaticon-travel-icons-do-not-disturb" <?php if ($service->icon == 'flaticon-travel-icons-do-not-disturb') echo 'selected' ?>>&#xf109;</option>
                                            <option value="flaticon-travel-icons-boot" <?php if ($service->icon == 'flaticon-travel-icons-boot') echo 'selected' ?>>&#xf103;</option>
                                            <option value="flaticon-travel-icons-sunbed" <?php if ($service->icon == 'flaticon-travel-icons-sunbed') echo 'selected' ?>>&#xf11b;</option>
                                            <option value="flaticon-travel-icons-passport" <?php if ($service->icon == 'flaticon-travel-icons-passport') echo 'selected' ?>>&#xf113;</option>
                                            <option value="flaticon-travel-icons-tent" <?php if ($service->icon == 'flaticon-travel-icons-tent') echo 'selected' ?>>&#xf11c;</option>
                                            <option value="flaticon-travel-icons-map" <?php if ($service->icon == 'flaticon-travel-icons-map') echo 'selected' ?>>&#xf110;</option>
                                            <option value="flaticon-travel-icons-suitcase-1" <?php if ($service->icon == 'flaticon-travel-icons-suitcase-1') echo 'selected' ?>>&#xf11a;</option>
                                            <option value="flaticon-travel-icons-cocktail" <?php if ($service->icon == 'flaticon-travel-icons-cocktail') echo 'selected' ?>>&#xf107;</option>
                                            <option value="flaticon-travel-icons-hotel" <?php if ($service->icon == 'flaticon-travel-icons-hotel') echo 'selected' ?>>&#xf10c;</option>
                                            <option value="flaticon-travel-icons-bus" <?php if ($service->icon == 'flaticon-travel-icons-bus') echo 'selected' ?>>&#xf104;</option>
                                            <option value="flaticon-travel-icons-ship" <?php if ($service->icon == 'flaticon-travel-icons-ship') echo 'selected' ?>>&#xf117;</option>
                                            <option value="flaticon-travel-icons-snorkel" <?php if ($service->icon == 'flaticon-travel-icons-snorkel') echo 'selected' ?>>&#xf118;</option>
                                            <option value="flaticon-travel-icons-compass" <?php if ($service->icon == 'flaticon-travel-icons-compass') echo 'selected' ?>>&#xf108;</option>
                                            <option value="flaticon-travel-icons-photo-camera" <?php if ($service->icon == 'flaticon-travel-icons-photo-camera') echo 'selected' ?>>&#xf114;</option>
                                            <option value="flaticon-travel-icons-earth-globe" <?php if ($service->icon == 'flaticon-travel-icons-earth-globe') echo 'selected' ?>>&#xf10a;</option>
                                            <option value="flaticon-travel-icons-luggage" <?php if ($service->icon == 'flaticon-travel-icons-luggage') echo 'selected' ?>>&#xf10f;</option>
                                            <option value="flaticon-travel-icons-car" <?php if ($service->icon == 'flaticon-travel-icons-car') echo 'selected' ?>>&#xf105;</option>
                                            <option value="flaticon-travel-icons-suitcase" <?php if ($service->icon == 'flaticon-travel-icons-suitcase') echo 'selected' ?>>&#xf119;</option>
                                            <option value="flaticon-travel-icons-island" <?php if ($service->icon == 'flaticon-travel-icons-island') echo 'selected' ?>>&#xf10d;</option>
                                            <option value="flaticon-travel-icons-panels" <?php if ($service->icon == 'flaticon-travel-icons-panels') echo 'selected' ?>>&#xf112;</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Subtitle <i style="color: red;">*</i></label>
                                <textarea class="form-control" name="subtitle" id="placeTextarea" rows="6" placeholder="Subtitle" required>{{$service->subtitle}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="editor">
                                <p>This is some sample content.</p>
                            </div>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#editor'), {
                                        removePlugins: ['image2'],
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
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