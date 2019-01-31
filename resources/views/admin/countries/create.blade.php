@extends('admin/layouts.app')
@section('title','Country')
@section('main')

<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">                        
            <h2>Create Country</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('index')}}">Country List</a>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
       

      {!! Form::open(['method' => 'POST', 'route' => 'admin.'.request()->segment(2).'.store', 'class' => 'form-horizontal']) !!}
      
      <div class="card">
                <div class="body">
                  <div class="" style="max-width: 300px; margin: 0 auto;padding: 25px 0;">
          <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
              {!! Form::label('country', 'Country Name') !!}
              {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'India']) !!}
              <small class="text-danger">{{ $errors->first('country') }}</small>
          </div>

          <div class="form-group{{ $errors->has('sortname') ? ' has-error' : '' }}">
              {!! Form::label('sortname', 'Country Short Name') !!}
              {!! Form::text('sortname', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'IN']) !!}
              <small class="text-danger">{{ $errors->first('sortname') }}</small>
          </div>

          <div class="form-group{{ $errors->has('phonecode') ? ' has-error' : '' }}">
              {!! Form::label('phonecode', 'Phone Code') !!}
              {!! Form::text('phonecode', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'91']) !!}
              <small class="text-danger">{{ $errors->first('phonecode') }}</small>
          </div>
      
          <div class="btn-group">
              {!! Form::submit("Add Country", ['class' => 'btn btn-info']) !!}
          </div>
        </div>
      </div>
    </div>
      {!! Form::close() !!}
  </div>
          
</div>


@endsection

@section('footerScript')
<script src="{{asset('admin/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection