
@extends('admin.layouts.app')
@section('title','Country')
@push('links')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.3/themes/default/style.min.css" />
@endpush
@section('main')

<div class="block-header">
  <div class="row">
    <div class="col-lg-5 col-md-8 col-sm-12">                        
      <h2>Admin List</h2>
    </div>            
    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
       <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Create New Country</a>
    </div>
  </div>
</div>

    <div class="clearfix"></div>
    {!! Form::open(['route'=>'admin.'.request()->segment(2).'.store','autocomplete'=>'off','files'=>true]) !!}
    
    <div class="card">
      <div class="body">
        <div class="row">
       <div class="col-md-6">
        <div class="form-group">
            <label for="name">Admin Name</label>
        	{{ Form::text('name',null,['class'=>'form-control']) }}
    		<p class="text-danger">{{$errors->first('name')}}</p>
        </div>
         <div class="form-group">
            {!! Form::label('role','Role', []) !!}
            {!! Form::select('role', $roles, null, ['class'=>'form-control','placeholder'=>'Select role']) !!}
            <p class="text-danger">{{$errors->first('role')}}</p>
        </div>
       </div>
       <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email</label>
            {{ Form::text('email',null,['class'=>'form-control','autocomplete'=>'off']) }}
            <p class="text-danger">{{$errors->first('email')}}</p>
        </div> 
         <div class="form-group">
            <label for="email">Mobile</label>
            {{ Form::text('mobile',null,['class'=>'form-control']) }}
            <p class="text-danger">{{$errors->first('mobile')}}</p>
        </div>
      </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Address</label>
            {{ Form::text('address',null,['class'=>'form-control']) }}
            <p class="text-danger">{{$errors->first('address')}}</p>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            {{ Form::password('password',['class'=>'form-control']) }}
            <p class="text-danger">{{$errors->first('password')}}</p>
        </div>
    </div>
        <div class="col-md-6">

         <div class="form-group">
            {{-- <label for="password">Ip allow</label> --}}
            {!! Form::label('allowip',null, ['class'=>'allowip']) !!}
            {!! Form::select('allowip',['0'=>'selected Ip','1'=>'all Ip'],['class'=>'form-control'], ['class'=>'form-control']) !!}
            {{-- {{ Form::password('password',['class'=>'form-control']) }} --}}
            <p class="text-danger">{{$errors->first('password')}}</p>
        </div>

         <div class="form-group ipAddressField"> 
            {{-- <label for="ip address">Ip Address</label> --}}
            {!! Form::label('Ip address',null, []) !!}
            {{ Form::text('ip',null,['class'=>'form-control']) }}
            <p class="text-danger">{{$errors->first('ip')}}</p>
         </div>
     </div>

     <div class="col-md-6">

         <div class="form-group">
            <label for="Image">Image</label>
            {{ Form::file('image', $attributes = array()) }}
        </div>
          <div class="form-group">
          <label for="status">Gender</label>
        {{ Form::select('gender',['Male'=>'Male','Female'=>'Female'],null,['class'=>'form-control']) }}
          <p class="text-danger">{{$errors->first('gender')}}</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="status">Status</label>
        {{ Form::select('status_id',['1'=>'Active','2'=>'Deactive'],null,['class'=>'form-control']) }}
          <p class="text-danger">{{$errors->first('status')}}</p>
        </div>
    </div>


        <div class="form-group">
            <button type="submit" class="btn btn-info" >Add Admin</button>
        </div>
      </div>
    </div>
</div>
    {!! Form::close() !!}


@endsection
@push('scripts')
