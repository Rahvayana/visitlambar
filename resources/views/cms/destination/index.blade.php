@extends('cms.master')

@section('title', 'Destination')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Destinations List</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Adventure</li>
        <li><i class="fa fa-angle-right"></i> Destination</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-black">List of available destinations</h4>
                <p>Tourist destinations that can be visited</p>
            </div>
            <div class="col-sm-6" style="text-align:right;padding-right:10%;padding-top:2%">
                <a href="{{ route('cms.destination.add')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Destination</a>
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
                        <th scope="col">Price</th>
                        <th scope="col">Min Guest</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($destinations as $destination)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><a href="{{ route('cms.destination.edit', $destination->id)}}">{{$destination->destination}}</a></td>
                        <td>Rp {{$destination->price}}</td>
                        <td>{{$destination->min_guest}}</td>
                        <td>
                            <form action="{{ route('cms.destination.destroy', $destination->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Destination data has not been entered
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection