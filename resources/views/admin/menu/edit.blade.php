@extends('admin/layouts.app')
@push('links')

@endpush
@section('title','Menu')
@section('main')


<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Menu Edit</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Create Menu</a>
        </div>
    </div>
</div>
<section class="wrapper main-wrapper" style=''> 
    <div class="card">
           
            <div class="body">  
    <div class="col-md-6 col-md-offset-3" style="margin: 0 auto;padding: 20px 0">
    
                {!! Form::open(['route'=>['admin.menus.update', $menu->id], 'method'=>'put','id'=>'menuForm']) !!}
                        <div class="form-group">
                            {!! Form::label('menu_name', 'Menu Name', ['class'=>'control-label']) !!}
                        {!! Form::text('menu_name', $menu->title, ['class'=>'form-control']) !!}
                        <b class="text-danger">{{$errors->first('menu_name')}}</b>
                        </div>


                        <div class="form-group">
                            {!! Form::label('icon', 'Icon', ['class'=>'control-label']) !!}
                            {!! Form::text('icon', $menu->icon, ['class'=>'form-control']) !!}
                            <b class="text-danger">{{$errors->first('icon')}}</b>
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status', ['class'=>'control-label']) !!}
                        {!! Form::select('status', array(1 => 'Active', '0' => 'Deactive'), $menu->status, array('class' => 'form-control')); !!}
                        <b class="text-danger">{{$errors->first('status')}}</b>
                        </div>                       
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $menu->id }}" />
                        <button type="submit" onclick="submitForm()" class="btn btn-success pull-right" style="margin-bottom: 20px;">Update</button>
                       
                  </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
</section>
@endsection
@push('scripts')
<script type="text/javascript">
$("#back").click(function(){
    window.location.href="{{ route('admin.'.request()->segment(2).'.index') }}"
  });
</script>
@endpush