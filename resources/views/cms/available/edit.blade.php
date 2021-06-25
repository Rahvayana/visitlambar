@extends('cms.master')

@section('title', 'Edit Available Seat')

@section('content')

<div class="content-header sty-one">
    <h1 class="text-black">Edit Availabilities Tour Package</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Adventure</li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Available Seat</li>
        <li><i class="fa fa-angle-right"></i> Add New</li>
    </ol>
</div>
<div class="container-fluid">
    <div class="card ">
        <div class="card-header">
          <h5 class="m-b-0">Availabilities</h5>
        </div>
        <div class="card-body">    
            <form action="{{ route('cms.available.update',$available->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Tour Package <i style="color: red;">*</i></label>
                            <select class="form-control" name="id_tour" value="{{$available->name}}" required>
                                <option selected disabled>Tour Package</option>
                                @foreach ($tours as $tour)    
                                    <option value="{{$tour->id}}" {{$tour->id == $available->id_tour ? 'selected' : ''}}>{{$tour->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Select Date</label>
                            <div class="form-group">
                                <input class="form-control" name="date_start" value="{{$available->date_start}}" type="date">
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Max Seat <i style="color: red;">*</i></label>
                            <input class="form-control" placeholder="Seat" name="max_seat" type="text" value="{{$available->max_seat}}" required>
                            <span class="fa fa-users form-control-feedback" aria-hidden="true"></span> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Booking Fee <i style="color: red;">*</i></label>
                            <input class="form-control" placeholder="Booking Fee" name="booking_fee" type="text" value="{{$available->booking_fee}}" required>
                            <span class="fa fa-book form-control-feedback" aria-hidden="true"></span> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Discount % <i style="color: red;">*</i></label>
                            <input class="form-control" placeholder="Discount %" name="discount" type="number" min="0" max="100" value="{{$available->discount}}" required> 
                            <span class="fa fa-percent form-control-feedback" aria-hidden="true"></span> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Other Fee <i style="color: red;">*</i></label>
                            <input class="form-control" placeholder="Other Fee" name="other_fee" type="number" min="0" value="{{$available->other_fee}}" required> 
                            <span class="fa fa-tags form-control-feedback" aria-hidden="true"></span> 
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