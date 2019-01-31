@extends('admin.layout.master')
@section('title','Dashboard')

@section('content')
<section class="wrapper main-wrapper" style=''>
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">View Sub Admin</h1> </div>
            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li class="active">
                        <strong>View Sub Admin</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <tr><td>Name</td> : <td>{{$admin->name}}</td></tr>
                <tr><td>Email</td> : <td>{{$admin->email}}</td></tr>
                <tr><td>Profile Pic</td> : <td><img src="{{$admin->avatar}}"></td></tr>
            </table>
        </div>
    </div>
   
</section>
@endsection
