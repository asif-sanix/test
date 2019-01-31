@extends('admin.layouts.app')
@section('title','Role List')

@section('main')

<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Role List</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Add Role</a>
        </div>
    </div>
</div>


   
    <div class="clearfix"></div>
     <div class="row">
        <div class="col-md-12 col-md-offset-1">
                    <div class="card">
            <div class="body">
            <div class="table-responsive">
                    <table id="dataTableAjax" class="table table-bordered table-hover datatable table-custom">
                         <thead>
                            <tr>
                                <th>Si</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                @foreach ($roles as $role)
                   <tr>
                    <td>{{$loop->index+1}}</td>
                        <td>{{$role->name}}</td>
                        <td>
                            {{-- @can('read')
                                <a href="{{ route('admin.'.request()->segment(2).'.show',$role->id) }}" title="Edit Role Name" class="btn btn-outline-primary"><i  class="icon-note"></i></a>
                            @endcan --}}
                            @can('edit')
                                <a href="{{ route('admin.'.request()->segment(2).'.edit',$role->id) }}" title="Permission" class="btn btn-outline-secondary"><i class=" icon-key"></i></a>
                            @endcan
                          
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
        </div>
    </div>

@endsection

@push('scripts')

<script type="text/javascript">
     $('.datatable').DataTable();
</script>

@endpush
