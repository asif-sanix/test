@extends('admin.layouts.app')
@section('title','Country')
@push('links')

<link rel="stylesheet" href="{{asset('admin-assets/assets/vendor/dropify/css/dropify.min.css')}}">
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
{!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$admin->id],'method'=>'put','files'=>true]) !!}


<div class="row">
 <div class="col-md-7">
  <div class="card">
    <div class="body">

      <div class="form-group">
        <label for="name">Admin Name</label>
        {{ Form::text('name',$admin->name,['class'=>'form-control']) }}
        <p class="text-danger">{{$errors->first('name')}}</p>
      </div>

      <div class="form-group">
        <label for="email">Admin Email</label>
        {{ Form::text('email',$admin->email,['class'=>'form-control']) }}
        <p class="text-danger">{{$errors->first('email')}}</p>
      </div>
      <div class="form-group">
        <label for="email">Mobile</label>
        {{ Form::text('mobile',@$admin->mobile,['class'=>'form-control']) }}
        <p class="text-danger">{{$errors->first('mobile')}}</p>
      </div>
      <div class="form-group">
        <label for="email">Address</label>
        {{ Form::text('address',@$admin->address,['class'=>'form-control']) }}
        <p class="text-danger">{{$errors->first('address')}}</p>
      </div>

      <div class="form-group">
        <label for="name">Admin Password</label>
        {{ Form::password('password',['class'=>'form-control']) }}
      </div>


    </div>
  </div>

</div>
<div class="col-md-5">
  <div class="card">
   <div class="body">

    <div class="form-group">
      <div class="checkbox{{ $errors->has('status_id') ? ' has-error' : '' }}">
        <label for="status_id" class="fancy-checkbox">
          {!! Form::checkbox('status_id', '1', $admin->status_id?'checked':'', ['id' => 'status_id']) !!} <span>Status</span>
        </label>
      </div>
      <small class="text-danger">{{ $errors->first('status') }}</small>
    </div>

    <div class="form-group">
      {!! Form::label('role','Role', []) !!}
      {!! Form::select('role',$roles,  $admin->role_id, ['class'=>'form-control','placeholder'=>'Select role']) !!}
      <p class="text-danger">{{$errors->first('role')}}</p>
    </div>

  </div>
</div>



<div class="card">
 <div class="body">

   <div class="">
    <button type="submit" class="btn btn-info">Update Admin</button>
  </div>
</div>
</div>

<div class="card">
        <div class="body">
          <label>Feature Image</label>
          {!! Form::file('image',['class'=>'dropify','data-default-file'=>@$admin->avatar?Storage::disk('local')->url($admin->avatar):''])!!}
          {!! Form::hidden('checkfile',$admin->avatar?$admin->avatar:'', ['id' => 'checkfile']) !!}
          <p class="text-danger">{{$errors->first('image')}}</p>
        </div>
      </div>

</div>
</div>
{!! Form::close() !!}
{{-- </section> --}}
@endsection
@push('scripts')
<script src="{{asset('admin-assets/assets/vendor/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/forms/dropify.js')}}"></script>
<script>

  $(document).ready(function () {
    $('#allowip').change(function () {
      var ip=$(this).val();
      // alert($('.ipaddress').val());
      if(ip==1)
      {
        $('.ipAddressField').hide();

      }
      else{
        $('.ipAddressField').show();
      }


      // alert(status);

    });
    $('.dropify-clear').click(function() {
  //alert('Hello');
$("#checkfile").val('');
});
  });


</script>

@endpush