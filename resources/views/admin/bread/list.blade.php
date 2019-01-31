@extends('admin/layouts.app')
@push('links')

@endpush
@section('title','Dashboard')
@section('main')


<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Bread List</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Create New Bread</a>
        </div>
    </div>
</div>



<div class="row clearfix">


  <div class="col-lg-12">

   <div class="row clearfix">
    <div class="col-lg-12">
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

                     <tbody>
                        @foreach ($menus as $menuKey => $menuValue)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{ $menuValue }}</td>
                            <td width="30%">
                                <a class="btn btn-outline-secondary" href="{{ adminRoute('edit',$menuValue)}}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a> &nbsp;&nbsp;&nbsp;
                                <a onclick="deleteForm('{{ adminRoute('destroy',$menuValue) }}')" class="btn btn-outline-danger"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                  </table>
                 
              </div>
          </div>
      </div>
  </div>

</div>

</div>          
</div>



@endsection

@push('scripts')


@endpush