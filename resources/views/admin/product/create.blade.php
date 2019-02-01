@extends('admin/layouts.app')
@section('title',ucfirst(str_singular(request()->segment(2))))

@push('links')
<link rel="stylesheet" href="{{asset('admin-assets/assets/vendor/dropify/css/dropify.min.css')}}">
<link rel="stylesheet" href="{{asset('admin-assets/assets/vendor/summernote/dist/summernote.css')}}"/>
<link rel="stylesheet" href="{{asset('admin-assets/assets/vendor/select2/select2.min.css')}}"/>
@endpush

@section('main')

<div class="block-header">
  <div class="row">
    <div class="col-lg-5 col-md-8 col-sm-12">                        
      <h2>{{ ucfirst(str_singular(request()->segment(2))) }}</h2>
    </div>            
    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
      <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Create New {{ ucfirst(str_singular(request()->segment(2))) }}</a>
    </div>
  </div>
</div>

<div class="row clearfix">
  <div class="col-lg-12">


    {!! Form::open(['method' => 'POST', 'route' => 'admin.'.request()->segment(2).'.store', 'class' => 'form-horizontal','files'=>true]) !!}
    <div class="row">
      <div class="col-sm-12 col-md-8">
      <div class="card">
        <div class="body">
             <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                 {!! Form::label('name', 'Name') !!}
                 {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                 <small class="text-danger">{{ $errors->first('name') }}</small>
             </div>

             <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                 {!! Form::label('body', 'Description') !!}
                 {!! Form::textarea('body', null, ['class' => 'summernote form-control', 'placeholder' => 'Description']) !!}
                 <small class="text-danger">{{ $errors->first('body') }}</small>
             </div>
           </div>
         </div>
         <div class="card">
           <div class="body">

             <div class="form-group{{ $errors->has('meta_title') ? ' has-error' : '' }}">
                 {!! Form::label('meta_title', 'Meta Title') !!}
                 {!! Form::text('meta_title', null, ['class' => 'form-control', 'placeholder' => 'Meta Title']) !!}
                 <small class="text-danger">{{ $errors->first('meta_title') }}</small>
             </div>

             <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
                 {!! Form::label('meta_description', 'Meta Description') !!}
                 {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Meta Description']) !!}
                 <small class="text-danger">{{ $errors->first('meta_description') }}</small>
             </div>

        </div>
      </div>
    </div>


    <div class="col-sm-12 col-md-4">

      <div class="card">
        <div class="body">
          <div class="form-group">
              <div class="checkbox fancy-checkbox {{ $errors->has('status') ? ' has-error' : '' }}">
                  <label for="status">
                      {!! Form::checkbox('status', '1', null, ['id' => 'status']) !!} <span> <b>Status</b> </span>
                  </label>
              </div>
              <small class="text-danger">{{ $errors->first('status') }}</small>
          </div>

           {!! Form::submit('Add Category', ['class' => 'btn btn-info']) !!}

        </div>
      </div>

      <div class="card">
        <div class="body">
          <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
              {!! Form::label('category', 'Category') !!}
              {!! Form::select('category', App\Model\Admin\Category::pluck('name','id'), null, ['id' => 'category', 'class' => 'form-control select2 select2-hidden-accessible', 'required' => 'required', 'multiple','data-placeholder'=>"Select a Category"]) !!}
              <small class="text-danger">{{ $errors->first('category') }}</small>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="body">
          <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
              {!! Form::label('category', 'Category') !!}
              {!! Form::select('category', App\Model\Admin\Category::pluck('name','id'), null, ['id' => 'category', 'class' => 'form-control select2 select2-hidden-accessible', 'required' => 'required', 'multiple','data-placeholder'=>"Select a Category"]) !!}
              <small class="text-danger">{{ $errors->first('category') }}</small>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="body">
           <div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
               {!! Form::file('file', ['class'=>'dropify','required' => 'required']) !!}
               <small class="text-danger">{{ $errors->first('file') }}</small>
           </div>
        </div>
      </div>
    </div>

    </div>
    {!! Form::close() !!}
  </div>

</div>


@endsection

@push('scripts')
<script src="{{asset('admin-assets/assets/vendor/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/forms/dropify.js')}}"></script>

<script src="{{asset('admin-assets/assets/vendor/summernote/dist/summernote.js')}}"></script>
<script src="{{asset('admin-assets/assets/vendor/select2/select2.full.min.js')}}"></script>

<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        
    window.save = function() {
        $(".click2edit").summernote('destroy');
    }
</script>

<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endpush