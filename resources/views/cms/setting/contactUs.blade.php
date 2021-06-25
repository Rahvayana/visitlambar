@extends('cms.master')

@section('title', 'Contact Us')

@section('content')

<div class="content-header sty-one">
    <h1 class="text-black">Contact Us Settings</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Settings</li>
        <li><i class="fa fa-angle-right"></i> Contact Us</li>
    </ol>
</div>
<div class="content">
    <div class="row">
        @if (Session::has('success'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert"> {!! Session::get('success')!!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
        </div>
        @endif


        <div class="col-md-12">
            <div class="card ">
                <div class="card-body">
                    <h5 class="m-b-2">Input your company data contact</h5>
                    <form action="{{ route('cms.setting.contact.update')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Contact Information</label>
                                    <textarea name="information" rows="3" class="form-control" id="placeTextarea">{{$data->information}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Address</label>
                                    <textarea name="address" rows="3" class="form-control" id="placeTextarea">{{$data->address}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">E-mail</label>
                                    <input class="form-control" name="email" type="text" value="{{$data->email}}">
                                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Phone Number</label>
                                    <input class="form-control" name="phone" type="text" value="{{$data->phone}}">
                                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Fax</label>
                                    <input class="form-control" name="fax" type="text" value="{{$data->fax}}">
                                    <span class="fa fa-fax form-control-feedback" aria-hidden="true"></span>
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
</div>
@endsection