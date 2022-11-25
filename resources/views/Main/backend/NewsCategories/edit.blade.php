@extends('admin.layouts.app')
@section('title','Edit News Categories')
@section('content')
<main class="main-wrapper clearfix">
     <!-- Page Title Area -->
            <div class="container-fluid">   
                <div class="row page-title clearfix">
                </div>
            </div> <!-- /.page-title -->
        <!---Form Body Starts Here--->
        <div class="container-fluid">
                <div class="widget-list">
                    <div class="row">
                        <div class="col-md-12 widget-holder my-5">
                            <div class="widget-bg">
                                <div class="widget-heading clearfix">
                                    
                                    <a class="btn btn-sm btn-primary pull-right" style="margin-bottom:20px;" href="{{route('news-categories.create')}}">BACK</a>
                                    <h5>Edit News Categories</h5>
                                </div>
                                <div class="widget-body clearfix">
                          
                                    <form method="POST" action="{{ route('news-categories.update', $editCategories->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row mt-3">
                                            <!--Label For Title-->
                                            <label class="col-form-label required-form-label  col-sm-2 mb-0 text-left text-sm-right" for="name">Name</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="name" name="name" value="{{(isset($editCategories->name))?$editCategories->name:old('name')}}" class="form-control mb-0 @error('name') is-invalid @enderror">
                                                </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                                <!-- /.Update DATA in DB -->
                                                <div class="ml-auto col-sm-2 no-padding pull-right text-right">
                                                    <button type="submit" class="btn btn-primary px-5"><i class="fa fa-database"></i> Update</button>
                                                </div>
                                        </div>
                                        <!-- /.form-group -->
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
@push('js')
@endpush