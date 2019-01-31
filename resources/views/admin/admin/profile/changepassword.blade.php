
@extends('admin.layouts.app')
@section('title','Change Password')
@push('links')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.3/themes/default/style.min.css" />
@endpush
@section('main')

<div class="block-header">
  <div class="row">
    <div class="col-lg-5 col-md-8 col-sm-12">                        
      <h2>Password Change</h2>
    </div>            
    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
      <a class="pull-right btn btn-secondary" href="#">Change Password</a>
   </div>
 </div>
</div>

<div class="clearfix"></div>
{!! Form::open(['route'=>['admin.change-password'],'method'=>'put','files'=>true,'autocomplete' => 'off']) !!}
<div class="uprofile-content">
  <div class="card enter_post col-md-12 col-sm-12 col-xs-12">

    <div class="card-body form-horizontal">
      <div style="width: 400px; margin: 0 auto;">
      

      <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
          {!! Form::label('current_password', 'Current Password') !!}
          {!! Form::password('current_password', ['class' => 'form-control', 'required' => 'required','placeholder'=>'Current Password']) !!}
          <small class="text-danger">{{ $errors->first('current_password') }}</small>
      </div>

      <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
          {!! Form::label('new_password', 'New Password') !!}
          {!! Form::password('new_password', ['class' => 'form-control', 'required' => 'required','placeholder'=>'New Password']) !!}
          <small class="text-danger">{{ $errors->first('new_password') }}</small>
      </div>
      <div class="form-group{{ $errors->has('new_password_confirmation') ? ' has-error' : '' }}">
          {!! Form::label('new_password_confirmation', 'Confirm Password') !!}
          {!! Form::password('new_password_confirmation', ['class' => 'form-control', 'required' => 'required','placeholder'=>'Confirm Password','autocomplete'=>'off']) !!}
          <small class="text-danger">{{ $errors->first('new_password_confirmation') }}</small>
      </div>
    <div class="">
      <button href="#" class="btn btn-primary" type="submit" id="password_modal_save">Change Password</button>
    </div>
  </div>
  </div>

  </div>
</div>  

{!! Form::close() !!}





@endsection
@push('scripts')
