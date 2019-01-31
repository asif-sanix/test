@extends('admin/layouts.app')
@push('links')

@endpush
@section('title','Menu')
@section('main')


<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Menu List</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Create Menu</a>
        </div>
    </div>
</div>

    <div class="clearfix"></div>
        <div class="card">
           
            <div class="body">
                <div style="width: 300px;margin: 0 auto;">
                {!! Form::open(['route'=>'admin.menus.store']) !!}
                        <div class="form-group">
                            {!! Form::label('menu_name', 'Menu Name', ['class'=>'control-label']) !!}
                        {!! Form::text('menu_name', null, ['class'=>'form-control']) !!}
                        <b class="text-danger">{{$errors->first('menu_name')}}</b>
                        </div>


                        <div class="form-group">
                            {!! Form::label('icon', 'Icon', ['class'=>'control-label']) !!}
                            {!! Form::text('icon', null, ['class'=>'form-control']) !!}
                            <b class="text-danger">{{$errors->first('icon')}}</b>
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status', ['class'=>'control-label']) !!}
                        {!! Form::select('status', array(1 => 'Active', '0' => 'Deactive'), null, array('class' => 'form-control')); !!}
                        <b class="text-danger">{{$errors->first('status')}}</b>
                        </div>                       
                    
                    <div class="form-group">
                        <button class="btn btn-success pull-right" style="margin-bottom: 25px;">Create</button>
                    </div>
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
    
</section>
@endsection
@push('scripts')
<script>
  $("#back").click(function(){
    window.location.href="{{ route('admin.'.request()->segment(2).'.index') }}"
  });
</script>
@endpush
