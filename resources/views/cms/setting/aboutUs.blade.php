@extends('cms.master')

@section('title', 'About Us')

@section('content')

<div class="content-header sty-one">
    <h1 class="text-black">About Us Settings</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Settings</li>
        <li><i class="fa fa-angle-right"></i> Contact Us</li>
    </ol>
</div>
<div class="content">
    <div class="row">
        @if (Session::has('success'))
        <div class="col-md-12 pl-0 pr-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert"> {!! Session::get('success')!!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
        </div>
        @endif

        <div class="col-md-12">
            <div class="card ">
                <div class="card-body">
                    <h4 class="m-b-2">Introduce your company to user</h4>
                    <form action="{{ route('cms.setting.about.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="flag" value="about">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">The company was founded</label>
                                    <input class="form-control" name="aboutSubtitle" type="text" value="{{$about->subtitle}}">
                                    <span class="fa fa-handshake-o form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Describe your company</label>
                                    <textarea name="about" rows="10" class="form-control" id="placeTextarea">{{$about->about}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-12 m-t-1">
            <div class="card ">
                <div class="card-body">
                    <h4 class="m-b-2">Show company feature to user</h4>
                    <form action="{{ route('cms.setting.about.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="flag" value="feature">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Show your company feature</label>
                                    <input class="form-control" name="subtitle" type="text" value="{{$feature->subtitle}}">
                                    <span class="fa fa-font form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            @foreach ($feature->feature as $key => $feature)
                            <div class="col-md-4 m-b-2" style="border-bottom: solid 0.1px #d8d8d8;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Icon</label>
                                            <select class="form-control" name="icon[]" style="font-family:ElegantIcons">
                                                <option value="elegent-icon-box-checked" <?php if ($feature->icon == 'elegent-icon-box-checked') echo 'selected' ?>>&#x5a;</option>
                                                <option value="elegent-icon-lock_alt" <?php if ($feature->icon == 'elegent-icon-lock_alt') echo 'selected' ?>>&#x7e;</option>
                                                <option value="elegent-icon-image" <?php if ($feature->icon == 'elegent-icon-image') echo 'selected' ?>>&#xe005;</option>
                                                <option value="elegent-icon-images" <?php if ($feature->icon == 'elegent-icon-images') echo 'selected' ?>>&#xe006;</option>
                                                <option value="elegent-icon-lightbulb_alt" <?php if ($feature->icon == 'elegent-icon-lightbulb_alt') echo 'selected' ?>>&#xe007;</option>
                                                <option value="elegent-icon-gift_alt" <?php if ($feature->icon == 'elegent-icon-gift_alt') echo 'selected' ?>>&#xe008;</option>
                                                <option value="elegent-icon-house_alt" <?php if ($feature->icon == 'elegent-icon-house_alt') echo 'selected' ?>>&#xe009;</option>
                                                <option value="elegent-icon-ribbon_alt" <?php if ($feature->icon == 'elegent-icon-ribbon_alt') echo 'selected' ?>>&#xe012;</option>
                                                <option value="elegent-icon-bag_alt" <?php if ($feature->icon == 'elegent-icon-bag_alt') echo 'selected' ?>>&#xe013;</option>
                                                <option value="elegent-icon-creditcard" <?php if ($feature->icon == 'elegent-icon-creditcard') echo 'selected' ?>>&#xe014;</option>
                                                <option value="elegent-icon-paperclip" <?php if ($feature->icon == 'elegent-icon-paperclip') echo 'selected' ?>>&#xe016;</option>
                                                <option value="elegent-icon-tags_alt" <?php if ($feature->icon == 'elegent-icon-tags_alt') echo 'selected' ?>>&#xe018;</option>
                                                <option value="elegent-icon-compass_alt" <?php if ($feature->icon == 'elegent-icon-compass_alt') echo 'selected' ?>>&#xe01c;</option>
                                                <option value="elegent-icon-map_alt" <?php if ($feature->icon == 'elegent-icon-map_alt') echo 'selected' ?>>&#xe01f;</option>
                                                <option value="elegent-icon-calendar" <?php if ($feature->icon == 'elegent-icon-calendar') echo 'selected' ?>>&#xe023;</option>
                                                <option value="elegent-icon-archive_alt" <?php if ($feature->icon == 'elegent-icon-archive_alt') echo 'selected' ?>>&#xe02f;</option>
                                                <option value="elegent-icon-heart_alt" <?php if ($feature->icon == 'elegent-icon-heart_alt') echo 'selected' ?>>&#xe030;</option>
                                                <option value="elegent-icon-like" <?php if ($feature->icon == 'elegent-icon-like') echo 'selected' ?>>&#xe106;</option>
                                                <option value="elegent-icon-currency" <?php if ($feature->icon == 'elegent-icon-currency') echo 'selected' ?>>&#xe0ed;</option>
                                                <option value="elegent-icon-wallet" <?php if ($feature->icon == 'elegent-icon-wallet') echo 'selected' ?>>&#xe100;</option>
                                                <option value="elegent-icon-target" <?php if ($feature->icon == 'elegent-icon-target') echo 'selected' ?>>&#xe0f5;</option>
                                                <option value="elegent-icon-hourglass" <?php if ($feature->icon == 'elegent-icon-hourglass') echo 'selected' ?>>&#xe0e1;</option>
                                                <option value="elegent-icon-balance" <?php if ($feature->icon == 'elegent-icon-balance') echo 'selected' ?>>&#xe0ff;</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Company feature</label>
                                                    <input class="form-control" name="featureTitle[]" type="text" value="{{$feature->title}}">
                                                    <span class="fa fa-font form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Company feature explanation</label>
                                                    <textarea name="featureExplain[]" rows="3" class="form-control" id="placeTextarea">{{$feature->subtitle}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection