<!doctype html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>
<body class="theme-blue">
    @include('admin.layouts.header')
    @include('admin.layouts.aside')
    @include('admin.layouts.rightsidebar')





    <div id="main-content">
        <div class="container-fluid">

            @section('main')
               @show

        </div>

    </div>
</div>



@include('admin.layouts.footer')
@if (Session::has('message'))
    <script type="text/javascript">
        Command: toastr["{{Session::get('class')}}"](" {{Session::get('message')}}")
    </script>
@endif

<script>
    function deleteForm(url){

    var type = $(this).data('type');
    if (confirm('Are you sure to delete this data')){
        var form =  document.createElement("form");
        var node = document.createElement("input");
        form.action = url;
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
    }
   }

   function deleteData(url,callback=null){
   swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#dc3545",
        confirmButtonText: "Yes, Delete it !",
        cancelButtonText: "No, Cancel it !",
        closeOnConfirm: false,
        closeOnCancel: true
    }, function (isConfirm) {
        if (isConfirm) {
        $.ajax({
            url:url,
            method: 'post',
            data:{'_method':'DELETE','_token':'{{ csrf_token() }}'},
            dataType:'json',
            success:function(response){
                if(response.class){
                    swal({
                        title: "Deleted!",
                        text: "Your imaginary file has been deleted.",
                        type: "success",
                        timer: 1500,
                        showConfirmButton: false
                    });
                   // Command: toastr[response.class](response.message);
                    $('.datatable').DataTable().draw('page');
                    $('.dataTableAjax').DataTable().draw('page');

                }
                if(document.getElementsByClassName('dataTableAjax')){
                    $('.dataTableAjax').DataTable().draw();
                }
                if(document.getElementsByClassName('datatable')){
                    // setTimeout(function(){
                    //     window.location.reload();
                    // }, 300)
                    $('.datatable').DataTable().draw('page');
                    
                }
                if(callback)
                    callback(callback);
            }
        });

            
        }
    });    
}
</script>
{{-- <script type="text/javascript">
     $('.datatable').DataTable();
</script> --}}
    </body>
</html>