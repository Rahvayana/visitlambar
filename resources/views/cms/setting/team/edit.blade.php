@extends('cms.master')

@section('title', 'Edit Team')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Team member</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Setting</li>
        <li><i class="fa fa-angle-right"></i> Team</li>
    </ol>
</div>

<div class="content">
    <div class="info-box">

        <div class="card ">
            <div class="card-header">
                <h5 class="m-b-0">Edit Member Profile</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('cms.setting.team.update', $member->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Full Name <i style="color: red;">*</i></label>
                                <input class="form-control" name="name" placeholder="Full Name" type="text" value="{{$member->name}}" required>
                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">E-mail <i style="color: red;">*</i></label>
                                <input class="form-control" name="email" placeholder="E-mail" type="text" value="{{$member->email}}" required>
                                <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Contact Number <i style="color: red;">*</i></label>
                                <input class="form-control" name="phone" placeholder="Contact Number" type="text" value="{{$member->phone}}" required>
                                <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Role <i style="color: red;">*</i></label>
                                <input class="form-control" name="role" placeholder="Role" type="text" value="{{$member->role}}" required>
                                <span class="fa fa-briefcase form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label class="control-label">Facebook</label>
                                <input class="form-control" name="facebook" placeholder="Facebook" value="{{$member->media->facebook}}" type="text">
                                <span class="fa fa-facebook form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label class="control-label">Twitter</label>
                                <input class="form-control" name="twitter" placeholder="Twitter" value="{{$member->media->twitter}}" type="text">
                                <span class="fa fa-twitter form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label class="control-label">Instagram</label>
                                <input class="form-control" name="instagram" placeholder="Instaram" value="{{$member->media->instagram}}" type="text">
                                <span class="fa fa-instagram form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Address <i style="color: red;">*</i></label>
                                <textarea class="form-control" name="address" id="placeTextarea" rows="3" placeholder="Address" required>{{$member->address}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12">
                                    <label class="control-label">Image</label>
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