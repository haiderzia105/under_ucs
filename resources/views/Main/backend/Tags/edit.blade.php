@extends('admin.layouts.app')
@section('title','Edit Tag')
@section('content')

<main class="main-wrapper clearfix">
     <!-- Page Title Area -->
            {{-- <div class="container-fluid">   
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">TUF</h6>
                        <p class="page-title-description mr-0 d-none d-md-inline-block">Admin Panel</p>
                    </div>
           
                    <div class="page-title-right d-none d-sm-inline-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">TUF</a>
                            </li>
                            <li class="breadcrumb-item active">DASHBOARD</li>
                            <li class="breadcrumb-item active">EDIT</li>
                            @if (session('alert'))
                                <div class="alert alert-success">
                                {{ session('alert') }}
                                </div>
                            @endif
                        </ol>
                    </div>
        
                </div>
            </div> <!-- /.page-title --> --}}
        <!---Form Body Starts Here--->
        <div class="container-fluid">
                <div class="widget-list">
                    <div class="row">
                        <div class="col-md-12 widget-holder my-5">
                            <div class="widget-bg">
                                <div class="widget-heading clearfix">
                                    
                                    <a class="btn btn-sm btn-primary pull-right" style="margin-bottom:20px;" href="{{route('tags.index')}}">BACK</a>
                                    <h5>Edit Tags</h5>
                                </div>
                                <div class="widget-body clearfix">
                                    <form method="POST" action="{{ route('tags.update', $tagsedit->id) }}" enctype="multipart/form-data">
                                    @csrf
                                       <!--Label For partner-->
                                        <div class="form-group required row">
                                            <!--Label For Links-->
                                            <label class="col-form-label col-sm-2 mb-0 text-left text-sm-right" for="name">Tags</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="name" name="name" value="{{$tagsedit->name}}" class="form-control mb-0 @error('name') is-invalid @enderror">
                                            </div>

                                        </div>
                                        <!-- /.form-group -->
                                        <!--Label For Banner Category-->

                                         <!-- /.SAVE DATA in DB -->
                                        <div class="ml-auto col-sm-10 no-padding mt-3 text-right">
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        <input name="_method" type="hidden" value="PUT">
                                        <button type="submit" class="btn btn-primary px-5"><i class="fa fa-database"></i> Update</button>
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
            </div>
        <!--form Body Ends Here--->
</main>

@endsection