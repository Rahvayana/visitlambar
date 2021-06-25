@extends('cms.master')

@section('title', 'Available Seat')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Available Seat List</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Adventure</li>
        <li><i class="fa fa-angle-right"></i> Available Seat</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-black">List of available seat of tour package</h4>
                <p>When is the tour package available to book</p>
            </div>
            <div class="col-sm-6" style="text-align:right;padding-right:10%;padding-top:2%">
                <a href="{{ route('cms.available.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Available Seat</a>
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
                        <th scope="col">Tour Name</th>
                        <th scope="col">Date Available</th>
                        <th scope="col">Tour End</th>
                        <th scope="col">Max Seat</th>
                        <th scope="col">Price</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataAvailable as $available)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><a href="{{ route('cms.available.edit',$available->id)}}">{{$available->tour_name}}</a></td>
                        <td>{{ Carbon\Carbon::parse($available->date_start)->format('d M Y')}}</td>
                        <td>{{ Carbon\Carbon::parse($available->date_end)->format('d M Y')}}</td>
                        <td>{{$available->max_seat}} person</td>
                        <td>Rp {{$available->price}}/person</td>
                        <td>
                            <form action="{{ route('cms.available.destroy', $available->id)}}" method="post">
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