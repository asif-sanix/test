@extends('admin/layouts.app')
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

    {!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$menu->table_name],'method'=>'put','id'=>'breadForm']) !!}

    <div class="form-group">
        <label for="">Name</label>
        {!! Form::text('name', ($menu->title)?$menu->title:title_case(str_replace('_', ' ', $menu->table_name)) , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <label for="">Icon</label>
        {!! Form::text('icon', $menu->icon , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <label for="">Controller Name</label>
        {!! Form::text('controller', ($menu->controller)?$menu->controller:str_replace('_','',title_case(str_singular($menu->table_name))).'Controller' , ['class'=>'form-control']) !!}
    </div>
    <div class="form-group pull-right">
                     <button type="submit" onclick="submitForm()" class="btn btn-primary" >Submit</button>
    </div>
    <br>
    <br>
    <label for="">Permissions</label>
    <br><br>
    <div class="form-group" id="permissions">
        @foreach(['browse','read','add','edit','delete'] as $per)
        <span style="border:1px solid #aaa; padding:10px;margin-right: 30px;cursor: pointer;">
            <label class="fancy-checkbox">
                {!! Form::checkbox('permissions[]', $per.'_'.$menu->table_name, in_array( $per.'_'.$menu->table_name,$perm), ['class'=>'js-switch-sm']) !!} 
                <span> {{ ucwords($per) }} </span>
             &nbsp;&nbsp;
              </label>
        </span>
        @endforeach
        <button style="margin-left:50px;" class="btn btn-sm pull-right btn-link"  type="button" data-toggle="modal" data-target="#addPermission">Add More</button>
      
        
    </div>
        
   {{--  <div class="form-group">
        {!! Form::label('show_as_menu', 'Show As Menu', []) !!}
        {!! Form::checkbox('show_as_menu', 1, ($menu->status)?$menu->status:0, []) !!}
    </div> --}}
    
    {!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div id="addPermission" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <label>Permission Name</label>
                <input type="text" name="per" class="form-control" autocomplete="off">
            </div>
            <div class="modal-footer">
                <button type="button" onclick="addPermission(this)" class="btn btn-default" >Add</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
    function addPermission(el){
        var val = $(el).closest('.modal-content').find('input').val();
        var html = ' <span style="border:1px solid #aaa; padding:10px;margin-right: 30px;text-transform:capitalize;">'+
            '<label >'+val+'  </label>'+
             '&nbsp;&nbsp;<input type="checkbox" name="permissions[]"  value="'+slug(val)+'_{{ $menu->table_name }}" class="js-switch-sm"> '+
        '</span>';
        $('#permissions').append(html);
        $('#addPermission').modal('hide');
        $(el).closest('.modal-content').find('input').val('');
        switchBtn(); 
        
    }
    function slug(string){
       return  string.toLowerCase().split(' ').filter(function(n){ return n != '' }).join('_');
    }
   
    function switchBtn(){
            var elems2 = $('input[data-switchery!="true"].js-switch-sm');
            for (var i = 0; i < elems2.length; i++) {
                new Switchery(elems2[i],{ size: 'small' });
            }
    }
    function submitForm(){
        $('#breadForm').submit();
    }
</script>
@endpush