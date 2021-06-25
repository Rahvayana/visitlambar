@extends('cms.master')

@section('title', 'Tour Packages')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Tour Package List</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Adventure</li>
        <li><i class="fa fa-angle-right"></i> Tour Pack</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-black">List of available Tour Package</h4>
                <p>tour packs that tourists can choose</p>
            </div>
            <div class="col-sm-6" style="text-align:right;padding-right:10%;padding-top:2%">
                <a href="{{ route('cms.tour.add')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tour Pack</a>
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
                        <th scope="col">Name</th>
                        <th scope="col">Min Guest</th>
                        <th scope="col">Price</th>
                        <!-- <th scope="col">Start</th> -->
                        <th scope="col">Time</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tours as $tour)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><a href="{{ route('cms.tour.edit', $tour->id)}}">{{$tour->name}}</a></td>
                        <td>{{$tour->min_guest}} Person/tour</td>
                        <td>Rp {{$tour->price}}/person</td>
                        <td>{{$tour->time}}</td>
                        <td>
                            <form action="{{ route('cms.tour.destroy', $tour->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Tour Package data has not been entered
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection