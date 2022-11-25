@extends('admin.layouts.app')
@section('title','All Press Release')
@section('content')
<!-- /.site-sidebar -->
<main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            {{-- <div class="container-fluid">
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Form Layouts</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">TUF DASHBOARD</p>
                    </div>
                 
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('main-admin') }}">TUF</a>
                            </li>
                            <li class="breadcrumb-item active">ALL RECORDS</li>
                        </ol>
                    </div>
                    
                    @if (session('alert'))
                        <div class="alert alert-success">
                        {{ session('alert') }}
                        </div>
                    @endif
                </div>
           
            </div> --}}
            <!-- /.container-fluid -->
            <div class="container-fluid">
                <div class="widget-list">
                            <div class="row">
                                <div class="col-md-12 widget-holder my-5">
                                    <div class="widget-bg">
                                        <div class="widget-heading clearfix">
                                            <h5>All Press Release</h5>
                                            <a class="btn btn-sm btn-primary pull-right" style="margin-top:20px;" href="{{ route('tuf-news-and-events.create')}}">Add
                                                New Record</a>
                                        </div>
                                        <!-- /.widget-heading --> 
                                        <div class="widget-body clearfix my-3">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-sm dataTable">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">category</th>     
                                                        <th scope="col">Tags</th>     
                                                        <th scope="col">Thumbnail</th>     
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>

                                                    {{-- 
                                                    <tfoot>
                                                        <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">category</th>       
                                                        <th scope="col">Tags</th>      
                                                        <th scope="col">Thumbnail</th>     
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
                ajax: "{{route('getNewsAndEvents')}}",
                columns: [
                    { data: 'id',orderable:false },
                    { data: 'name' },
                    { data: 'event_date' },
                    { data: 'news_categories_id' },
                    { data: 'tag' },
                    { data: null },
                    { data: null}
                ],
                columnDefs: [
                    {
                        render: function (data,type,row,meta) {
                            var Imagess ='{{ asset('Main/frontend/images/NewsAndEvents')}}/'+data.thumbnail;
                                return '<img src="' + Imagess + '" height="50" width="50" alt="No Image Uploaded"/>';
                        },
                        searchable:false,
                        orderable:false,
                        targets: 5
                    },
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
                            var edit ='{{ route("tuf-news-and-events.edit", ":id") }}';
                            edit = edit.replace(':id', data.id);
                            var del ='{{ route("tuf-news-and-events.delete", ":id") }}';
                            del = del.replace(':id', data.id);
                            var sdel ='{{ route("tuf-news-and-events.destroy", ":id") }}';
                            sdel = sdel.replace(':id', data.id);
                            var restore ='{{ route("tuf-news-and-events.restore", ":id") }}';
                            restore = restore.replace(':id', data.id);

                            if(data.deleted_at =='1'){
                                return '<div class="d-flex">'+  
                                @can('news-and-events-restore')
                                    '<a href="'+restore+'" class="btn btn-sm btn-warning mx-2">restore</a>'+
                                @endcan
                                @can('news-and-events-delete')
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
                                @can('news-and-events-edit')
                                    '<a href="'+edit+'" class="btn btn-sm btn-warning mx-2"><i class="fa fa-edit"></i></a>'+
                                @endcan
                                @can('news-and-events-softdelete')
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