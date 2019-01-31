@extends('admin.layouts.app')
@section('title','Role')
@section('main')

<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">                        
            <h2>Create Role</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('index')}}">Role List</a>
        </div>
    </div>
</div>
   
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="body">
                        <div style="width: 300px; margin:0 auto; padding: 20px 0">
                        {!! Form::open(['route'=>'admin.'.request()->segment(2).'.store']) !!}
                            <div class="form-group">
                                {!! Form::label('role_name', '', ['class'=>'control-label']) !!}
                                {!! Form::text('role_name', null, ['class'=>'form-control']) !!}
                                @if ($errors->has('role_name'))
                                    <b class="text-danger">{{$errors->first('role_name
                                    ')}}</b>
                                @endif
                            </div>
                            <div class="form-group">
                                <button style="margin-bottom: 15px;" class="btn btn-success pull-right">Create</button>
                            </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                   
                
            </div>
        </div>
    </div>
   
{{-- </section> --}}
@endsection
