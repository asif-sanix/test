@extends('admin/layouts.app')
@section('title','Admin')
@section('main')

<div class="block-header">
  <div class="row">
    <div class="col-lg-5 col-md-8 col-sm-12">                        
      <h2>Admin List</h2>
    </div>            
    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
       <a class="pull-right btn btn-secondary" href="{{ adminRoute('create')}}">Create New User</a>
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
                                <th>Id</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
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
        $(document).ready(function() {    
            $('#dataTableAjax').DataTable({
                "processing": true,
                "serverSide": true,
                'ajax' : {
                    'url':'{{ adminRoute('index') }}',
                    data:{'_method':'patch','_token':'{{ csrf_token() }}'},
                    method:'post'
                },
                "columns": [
                    { "name": "id" },
                    { "name": "name" },
                    { "name": "name" },
                    { "name": "name" },
                    { "name": "action",  
                        render: function ( data, type, row ) {
                            if (type === 'display' ) {
                                var btn='';
                                 btn+='<a class="btn btn-outline-secondary" href="{{ request()->url() }}/'+row[0]+'/edit"><i class="icon-note"></i></a> ';
                                 
                                btn+='<a class="btn btn-outline-danger" href="#" onclick="deleteData(\'{{ route('admin.'.request()->segment(2).'.destroy','') }}/'+row[0]+'\')"><i class="icon-trash"></i></a>';
                               
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
@push('scripts')
   <script type="text/javascript">
       $('td').on('click', '.delete', function (e) {
            var form =  document.createElement("form");
            var node = document.createElement("input");
            form.action = $(this).attr('action');
            form.method = 'POST' ;
            node.name  = '_method';
            node.value = 'delete';
            form.appendChild(node.cloneNode());
            node.name  = '_token';
            node.value = '{{ csrf_token() }}';
            form.appendChild(node.cloneNode());
            form.style.display = "none";
            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        });
   </script>
 
@endpush