@extends('admin.layouts.app')
@section('title',ucfirst(str_singular(request()->segment(2))))

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

   <div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table id="dataTableAjax" class="table table-bordered table-hover datatable table-custom">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Create On</th>
                               {{--  @if(Gate::check('edit') || Gate::check('delete')) --}}
                                <th>Action</th>
                               {{--  @endif --}}
                            </tr>
                        </thead>
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
<script type="text/javascript">
  //alert('hello');
        $(document).ready(function() {    
            $('#dataTableAjax').DataTable({
                "processing": true,
                "serverSide": true,
                'ajax' : {
                 'url':window.location.href,                  
               },
                "columns": [
                    { "name": "name" },
                    { "name": "file" },
                    { "name": "created_at" },
                    { "name": "id",  
                        render: function ( data, type, row ) {
                            if (type === 'display' ) {
                                var btn='';
                                 @can('edit')
                                 btn+='<a  class="btn btn-outline-secondary btn-sm" href="{{ request()->url() }}/'+row[3]+'/edit"><i class="icon-note"></i></a> &nbsp;';
                                  @endcan
                                 @can('delete')
                                  btn+='<a class="btn btn-outline-danger btn-sm" href="#" onclick="deleteData(\'{{ route('admin.'.request()->segment(2).'.destroy','') }}/'+row[3]+'\')"><i class="icon-trash"></i></a>';
                                  @endcan
                               
                                return btn;
                            }
                            return data;
                        },
                    }      
                ]
            });

           
        });
    </script>
@endpush