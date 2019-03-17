@extends('layouts.layfadmin')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Welcome !</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="{{ route('home')}}">Web TechBD</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>

<!-- Start Widget -->
@if(Auth::user()->student_status == 0)
<div class="row">
    <div class="col-md-8 col-sm-8 col-lg-8">
        <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon bg-success"><i class="fa fa-check"></i></span>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h4>Registration Success Wait For Our Confirmation</h4>
                    <i>We Will Get Back To You Soon.</i>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- End row-->
@else
<div class="row">
    <div class="col-md-8 col-sm-8 col-lg-8">
        <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon bg-success"><i class="fa fa-check"></i></span>
            <div class="tiles-progress">
                <div class="m-t-20">
                    <h4><a href="{{route('download.myform')}}" class="btn btn-success">Download Form</a></h4>
                    <i>Click Here To Download Your Application Form</i>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</div> <!-- container -->




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
