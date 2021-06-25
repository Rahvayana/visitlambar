@extends('cms.master')

@section('title', 'Team')

@section('content')
<div class="content-header sty-one">
    <h1 class="text-black">Team member</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="sub-bread"><i class="fa fa-angle-right"></i> Setting</li>
        <li><i class="fa fa-angle-right"></i> Team</li>
    </ol>
</div>

<!-- Main content -->
<div class="content">
    <div class="info-box">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-black">List of team members</h4>
                <p>At least 4 member in company team to show in about page</p>
            </div>
            <div class="col-sm-6" style="text-align:right;padding-right:10%;padding-top:2%">
                <a href="{{ route('cms.setting.team.add')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Member</a>
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
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Role</th>
                        <th scope="col">Image</th>
                        <th scope="col" class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $key => $member)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><a href="{{route ('cms.setting.team.edit', $member->id)}}">{{$member->name}}</a></td>
                        <td>{{$member->email}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->role}}</td>
                        <td><img src="{{ asset($member->image)}}" alt="image" style="border-radius: 50%;width:100px;height:100px;object-fit:cover"></td>
                        <td class="text-right">
                            <form action="{{ route('cms.setting.team.destroy', $member->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Member data has not been entered
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection