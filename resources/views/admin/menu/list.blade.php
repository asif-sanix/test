@extends('admin.layouts.app')

@push('links')
<!--nestable-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/nestable/jquery.nestable.css') }}" />
@endpush

@section('main')
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Menu</h2>
        </div>            
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
               @can('add')
    <div class="state-information">
        <a class="pull-right btn btn-secondary" href="{{ adminRoute('create') }}">Add Menu</a>
    </div>
    @endcan  
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-12">
        <div class="card top_report">
         
        <div class="body">
               
        <div class="dd" id="nestable_list_2">
            <ol class="dd-list">
                @foreach($menus as $menu)
                <li class="dd-item dd3-item" data-id="{{ $menu->id }}">
                    <div class="dd-handle dd3-handle"></div>
                    <div class="dd3-content">{{ $menu->title }}
                        @can('edit')
                        <a href="{{ adminRoute('edit',$menu->id)}}" class="btn btn-link pull-right" style="padding: 0px 6px; margin-top: -2px;">Edit</a>
                        @endcan
                        @can('delete')
                        @if($menu->childs->isEmpty())
                        <span style="margin:0px 10px 0px 10px" class="pull-right">/</span>
                        <button onclick="deleteData('{{ adminRoute('destroy',$menu->id)}}',function(){window.location.reload(); })" class="btn btn btn-link pull-right" style="padding: 0px 6px; margin-top: -2px;">Delete</button>
                        @endcan
                        @endif
                    </div>
                    @if($menu->childs->count())
                    <ol class="dd-list" id="{{ $menu->id }}">
                        @foreach($menu->childs as $child)
                        <li class="dd-item dd3-item" data-id="{{ $child->id }}">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">{{ $child->title }}
                                @can('edit')
                                <a href="{{ adminRoute('edit',$child->id)}}" class="btn btn-link pull-right" style="padding: 0px 6px; margin-top: -2px;">Edit</a>
                                @endcan
                                @can('delete')
                                <span style="margin:0px 10px 0px 10px" class="pull-right">/</span>
                                <button onclick="deleteData('{{ adminRoute('destroy',$child->id)}}',function(){window.location.reload(); })" class="btn btn-link pull-right" style="padding: 0px 6px; margin-top: -2px;">Delete</button>
                                @endcan
                            </div>
                        </li>
                        @endforeach
                    </ol>
                    @endif
                </li>
                @endforeach
            </ol>
        </div>
    </div>

        </div>
    </div>
</div>

@endsection

@push('scripts')
<!--nestable -->
<script src="{{ asset('admin-assets/nestable/jquery.nestable.js') }}"></script>
<script>
var updateOutput = function(e) {
    var list = e.length ? e : $(e.target),
        output = list.data('output');
    output.val(JSON.stringify(list.nestable('serialize')));
};
$('#nestable_list_2').nestable({
    group: 1,
    maxDepth: 2
}).on('change', function(e) {
    var list = e.length ? e : $(e.target),
        output = list.data('output');
    var data = list.nestable('serialize');
    @can('edit')
    $.ajax({
        url: '{{ adminRoute('update','') }}/1',
        data: {
            'data': list.nestable('serialize'),
            '_method': 'put',
            '_token': '{{ csrf_token() }}',
            '_list': 'nestable'
        },
        method: 'post',
        success: function(response) {
            toastr.success(response.message);
            setTimeout(function() {
                window.location.reload();
            }, 500);
        },
        error: function(response) {
            toastr.error(response.message);
        }
    });
    @endcan
});
</script>
@endpush