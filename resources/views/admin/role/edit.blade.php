@extends('admin.layouts.app')
@section('title','Role List')

@section('main')

<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Role Edit</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Add Role</a>
        </div>
    </div>
</div>

<div class="clearfix"></div>
     <div class="card">
     <div class="body">
    {!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$role->id],'method'=>'put']) !!}

    <div class="form-group{{ $errors->has('role_name') ? ' has-error' : '' }} col-sm-4" style="padding: 0;">
        {!! Form::label('role_name', 'Role Name') !!}
        {!! Form::text('role_name', $role->name, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
        <small class="text-danger">{{ $errors->first('role_name') }}</small>
    </div>
    <input type="hidden" name="_method" value="PUT">
    <!-- <legend>Edit your Detail </legend> -->
    <div class="form-group">
        <button class="permission-select-all btn btn-outline-secondary"><i class="fa fa-check"></i></button>
        <button class="permission-deselect-all btn btn-outline-danger"><i class="fa fa-times"></i></button>
    
    </div>
    <div class="row"> 

    @foreach($permissions as $table => $permission)
    <div class="col-md-3 permission-column">
        <ul class="permissions checkbox list-unstyled">
            <li>
                <label class="fancy-checkbox">
                 <input type="checkbox" id="" class="permission-group">
                  <span for="{{$table}}"><strong>{{ title_case(str_replace('_',' ', $table)) }} </strong></span>
                  <br>
              



                <ul class="list-unstyled" style="margin-left: 20px;margin-top: 10px;">
                    @foreach($permission as $perm)
                    <li>
                        <label class="fancy-checkbox">
                             <input type="checkbox" id="permission-{{ $perm->id }} " name="permissions[]" class="the-permission" {{ (in_array($perm->id, array_flatten($role->permissions->toArray())))? 'checked' :'' }} value="{{ $perm->id }}" >
                            <span for="permission-{{ $perm->id }}">{{ title_case(str_replace('_',' ', $perm->key)) }}</span>
                        </label>
                    </li>
                    @endforeach
                </ul>
                </label>
            </li>
        </ul>
    </div>
    @endforeach
</div>
    <div class="col-md-12">
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {{-- @if(auth('admin')->user()->role_id == 1)
        <input type="hidden"  name="permissions[]" value="53" >
        <input type="hidden"  name="permissions[]" value="54" >
        <input type="hidden"  name="permissions[]" value="55" >
        <input type="hidden"  name="permissions[]" value="56" >
        <input type="hidden"  name="permissions[]" value="57" >
    @endif --}}

    {!! Form::close() !!}
</div>
</div>
@endsection
@push('scripts')
<script>
$('document').ready(function() {
    $('.toggleswitch').toggle();
    $('.permission-group').on('change', function() {
        $(this).siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);
    });
    $('.permission-select-all').on('click', function() {
        $('ul.permissions').find("input[type='checkbox']").prop('checked', true);
        return false;
    });
    $('.permission-deselect-all').on('click', function() {
        $('ul.permissions').find("input[type='checkbox']").prop('checked', false);
        return false;
    });

    function parentChecked() {
        $('.permission-group').each(function() {
            var allChecked = true;
            $(this).siblings('ul').find("input[type='checkbox']").each(function() {
                if (!this.checked) allChecked = false;
            });
            $(this).prop('checked', allChecked);
        });
    }
    parentChecked();
    $('.the-permission').on('change', function() {
        parentChecked();
    });
});
</script>
@endpush