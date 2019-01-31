@extends('admin/layouts.app')
@push('links')
<link rel="stylesheet" href="{{asset('admin/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@endpush
@section('title','Create Bread')
@section('main')


<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Bread Create</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('index')}}">All Bread List</a>
        </div>
    </div>
</div>



<div class="row clearfix">


  <div class="col-lg-12">

   <div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div style="width: 300px;margin:0 auto;padding: 20px 0">
                 {!! Form::open(['route'=>'admin.breads.store']) !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bread Name']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Create Bread</button>
                        
                    </div>
                {!! Form::close() !!}
            </div>
          </div>
      </div>
  </div>

</div>

</div>          
</div>



@endsection

@push('scripts')
 <script type="text/javascript">
 $("#back").click(function(){
    window.location.href="{{ route('admin.'.request()->segment(2).'.index') }}"
  });
</script>
@endpush
