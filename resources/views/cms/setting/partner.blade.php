@extends('cms.master')

@section('title', 'Partner')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Partner</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Setting</li>
        <li><i class="fa fa-angle-right"></i> Partner</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-black">List of company partner</h4>
                <p>At least 5 of company partner to show in page</p>
            </div>
        </div>

        @if (Session::has('success'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert"> {!! Session::get('success')!!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
        </div>
        @endif
        @if (Session::has('failed'))
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert"> {!! Session::get('failed')!!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Partner Name</th>
                        <th scope="col">Partner logo</th>
                        <th scope="col" class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($partners as $key => $partner)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$partner->name}}</td>
                        <td><img src="{{ asset($partner->logo)}}" alt="image" style="width:10rem;"></td>
                        <td class="text-right">
                            <form action="{{ route('cms.setting.partner.destroy', $key)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Company service has not been entered
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card ">
        <div class="card-header">
            <h5 class="m-b-0">New Company Partner</h5>
        </div>
        <div class="card-body">

            <form action="{{ route('cms.setting.partner.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Partner Name <i style="color: red;">*</i></label>
                            <input class="form-control" name="name" placeholder="Partner Name" type="text" required>
                            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="control-label">Partner Logo <i style="color: red;">*</i> </label>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-feedback">
                                    <label class="custom-file center-block block">
                                        <input id="file" name="logo" class="custom-file-input" type="file" required>
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
@endsection