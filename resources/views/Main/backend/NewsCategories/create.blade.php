@extends('admin.layouts.app')
@section('title','Create & View News Categories')
@section('content')
<main class="main-wrapper clearfix">
     <!-- Page Title Area -->
    <div class="container-fluid">   
        <div class="row page-title clearfix">
            {{-- <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">TUF</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">Admin Panel</p>
            </div> --}}
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('main-admin') }}">UCS</a>
                    </li>
                    <li class="breadcrumb-item active">DASHBOARD</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol> --}}
            </div>
        </div>
    </div> <!-- /.page-title -->
    <!---Form Body Starts Here--->
    <div class="container-fluid">
        <div class="widget-list">
            <div class="row">
                <div class="col-md-12 widget-holder my-5">
                    <div class="widget-bg">
                        <div class="widget-heading clearfix">
                            <h5>Create News Category</h5>
                        </div>
                        <div class="widget-body clearfix">
                            <form method="POST" action="{{ route('news-categories.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row mt-3">
                                    <!--Label For Name-->
                                    <label class="col-form-label required-form-label  col-sm-2 mb-0 text-left text-sm-right" for="name">Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control mb-0 @error('name') is-invalid @enderror">
                                        </div>
                                </div>
                                <div class="form-group row mt-3">
                                         <!-- /.SAVE DATA in DB -->
                                         <div class="ml-auto col-sm-2 pull-right no-padding">
                                        <button class="btn btn-primary" type="submit">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->                            
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.widget-list -->

        <div class="widget-list">
            <div class="row">
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-heading clearfix my-3">
                            <h5>All Categories</h5>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body clearfix my-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Created By</th>
                                            <th scope="col">Updated By</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    {{-- <tfoot>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Created By</th>
                                            <th scope="col">Updated By</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@push('js')
    <script>
        $(function (){
            var t = $('.dataTable').DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,
            "dom": '<"top"<"left-col"B><"right-col"f>><"top-Panding-col"l>rtip',
            "lengthMenu": [[10, 20, 30, 500, 1000, 100000, 100000000], [10, 20, 30, 500, 1000, 100000, "All"]],
                processing: true,
                serverSide: true,
                order:[[0,'desc']],
                ajax: "{{route('getNewsCategories')}}",
                columns: [
                    { data: 'id',orderable:false },
                    { data: 'name' },
                    { data: 'slug' },
                    { data: 'created_by' },
                    { data: 'updated_by' },
                    { data: null}
                ],
                columnDefs: [
                    {
                        render: function ( data, type, row,meta,name ) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        searchable:false,
                        orderable:true,
                        targets: 0
                    },
                    {
                        render: function (data,type,row,meta) {
                            var edit ='{{ route("news-categories.edit", ":id") }}';
                            edit = edit.replace(':id', data.id);
                            var del ='{{ route("news-categories.delete", ":id") }}';
                            del = del.replace(':id', data.id);
                            var sdel ='{{ route("news-categories.destroy", ":id") }}';
                            sdel = sdel.replace(':id', data.id);
                            var restore ='{{ route("news-categories.restore", ":id") }}';
                            restore = restore.replace(':id', data.id);

                            if(data.deleted_at =='1'){
                                return '<div class="d-flex">'+  
                                @can('news-categories-restore')
                                    '<a href="'+restore+'" class="btn btn-sm btn-warning mx-2">restore</a>'+
                                @endcan
                                @can('news-categories-delete')
                                    '<form action="'+del+'" method="POST">'+
                                    '<input type="hidden" name="_token" value="{{ csrf_token() }}">'+
                                    '<input type="hidden" name="_method" value="delete" />'+
                                    '<button type="submit" class="btn btn-sm btn-danger mx-2" onclick="return confirm(Are you sure?)"><i class="fa fa-trash"></i></button>'+
                                    '</form>'+
                                @endcan
                                 '</div>';
                                }
                                if(data.deleted_at=='0'){ 
                                return  '<div class="d-flex">'+
                                @can('news-categories-edit')
                                    '<a href="'+edit+'" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>'+
                                @endcan
                                @can('news-categories-softdelete')
                                    '<form action="'+sdel+'" method="POST">'+
                                    '<input type="hidden" name="_token" value="{{ csrf_token() }}">'+
                                    '<input type="hidden" name="_method" value="delete" />'+
                                    '<button type="submit" class="btn btn-sm btn-danger mx-2" onclick="return confirm(Are you sure?)"><i class="fa fa-trash"></i></button>'+
                                    '</form>'+
                                @endcan
                                 '</div>';
                                }    
                        },
                        searchable:false,
                        orderable:false,
                        targets: -1
                    }
                ]
            });
        });
    </script>
@endpush