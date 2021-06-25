@extends('cms.master')

@section('title', 'Service')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Company Service</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Setting</li>
        <li><i class="fa fa-angle-right"></i> Service</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-black">List of company services</h4>
                <p>At least 4 company services to show in our service page</p>
            </div>
            <div class="col-sm-6" style="text-align:right;padding-right:10%;padding-top:2%">
                <a href="{{ route('cms.setting.service.add')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Member</a>
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
                        <th scope="col">Service</th>
                        <th scope="col">Subtitle</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Image</th>
                        <th scope="col" class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $key => $service)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><a href="{{route ('cms.setting.service.edit', $service->id)}}">{{$service->title}}</a></td>
                        <td class="elip">{{$service->subtitle}}</td>
                        <td><i class="{{$service->icon}}"></i></td>
                        <td><img src="{{ asset($service->image)}}" alt="image" style="width:10rem;"></td>
                        <td class="text-right">
                            <form action="{{ route('cms.setting.service.destroy', $service->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
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
</div>
@endsection