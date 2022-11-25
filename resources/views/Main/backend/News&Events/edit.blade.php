@extends('admin.layouts.app')
@section('title','Edit News and Events')
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
                            <li class="breadcrumb-item"><a href="{{ route('main-admin') }}">TUF</a>
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
                                    <h5>Edit News and Events</h5>
                                    <a class="btn btn-sm btn-primary pull-right" style="margin-top:20px;" href="{{route('tuf-news-and-events.index')}}">BACK</a>
                                </div>
                                <div class="widget-body clearfix">
                                    <form method="POST" action="{{ route('tuf-news-and-events.update', $editNewsEvents->id) }}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group row mt-3">
                                             <!--Label For Categories-->
                                             <label for="news_categories_id" class="col-form-label col-md-2 col-sm-6 mb-0 text-left text-sm-right">Categories</label>
                                            <div class="col-md-4 col-sm-6">               
                                                <select class="form-control" id="news_categories_id" name="news_categories_id" required>
                                                    @foreach($news_categories as $categories)
                                                        @if ($categories->id)
                                                        <option {{ $editNewsEvents->news_categories_id == $categories->id ? 'selected="selected"' : '' }} value="{{$categories->id}}">{{$categories->name}}</option>
                                                        @else
                                                            <option value="{{$events->id}}">{{$categories->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>         
                                            </div>
                                        </div>
     

                                        <!-- /.form-group -->
                                        <div class="form-group row mt-3">
                                             <!--Label For Thumbnail-->
                                            <label class="col-form-label col-md-2 col-sm-6 mb-0 text-left text-sm-right" for="thumbnail">Thumbnail</label>
                                            <div class="col-md-4 col-sm-6">
                                                <input type="hidden" id="thumbnail" name="old_thumbnail" class="form-control mb-0" value="{{(isset($editNewsEvents->thumbnail))?$editNewsEvents->thumbnail:old('thumbnail')}}">
                                                <input type="file" id="thumbnail" name="thumbnail" class="form-control mb-0">
                                                <p><small style="color:red;font-size:12px;">Previous image is already uploaded in case of changing image click on Upload Button.</small></p>
                                            </div>

                                            <!--Label For Cover Image-->
                                            <label class="col-form-label col-md-2 col-sm-6 mb-0 text-left text-sm-right" for="cover_image">cover_image</label>
                                            <div class="col-md-4 col-sm-6">
                                                <input type="hidden" id="cover_image" name="old_cover_image" class="form-control mb-0" value="{{(isset($editNewsEvents->cover_image))?$editNewsEvents->cover_image:old('cover_image')}}">
                                                <input type="file" id="cover_image" name="cover_image" class="form-control mb-0">
                                                <p><small style="color:red;font-size:12px;">Previous image is already uploaded in case of changing image click on Upload Button.</small></p>
                                            </div>
                                        </div>


                                        <div class="form-group row mt-3">
                                            <!--Label For name-->
                                            <label class="col-form-label col-sm-2 mb-0 text-left text-sm-right" for="name">Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="name" name="name" value="{{(isset($editNewsEvents->name))?$editNewsEvents->name:old('name')}}" class="form-control mb-0 @error('name') is-invalid @enderror">
                                            </div>

                                            <!--Label for Date-->
                                                <label class="col-form-label col-md-2 col-sm-6 mb-0 text-left text-sm-right" for="event_date">Event Date</label>
                                                <div class="col-md-4 col-sm-6">
                                                    <input type="date" id="event_date" name="event_date" class="form-control mb-0" value="{{(isset($editNewsEvents->event_date))?$editNewsEvents->event_date:old('event_date')}}">
                                                </div>
                                        </div>

                                        {{-- form group  --}}
                                        <!-- label for sdgs category -->
                                        <div class="form-group row mt-3">
                                                <!--Label For TAG-->
                                           <label for="tag" class="col-form-label required-form-label col-md-2 col-sm-2 mb-0 text-left text-sm-right">Tags</label>
                                           <div class="col-md-4 col-sm-10">               
                                               <select class="form-control campus-multiple" id="tag" name="tag[]" multiple="multiple" required>
                                                   @foreach($newstag as $newtag)
                                                       <option value="{{$newtag->slug}}" @foreach($selectedtags as $selectedtag) {{ $newtag->slug == $selectedtag ? 'selected' : '' }} @endforeach>{{$newtag->name}}</option>
                                                   @endforeach
                                               </select>         
                                           </div>
                                        </div>


                                        <div class="form-group required row mt-2">
                                            <!--Label for Short details-->
                                            <label class="col-form-label col-md-2 col-sm-2 mb-0 text-left text-sm-right" for="short_description">Short Description</label>
                                            <div class="col-md-10 col-sm-10">
                                                <textarea class="form-control mb-0" rows="2" cols="100" id="short_description"  name="short_description">{{ (isset($editNewsEvents->short_description))?$editNewsEvents->short_description:old('short_description') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <!--Label for Description-->
                                            <label class="col-form-label col-md-2 col-sm-2 mb-0 text-left text-sm-right" for="news-ckeditor">Description</label>
                                            <div class="col-md-10 col-sm-10">
                                                <textarea class="form-control" rows="2" cols="100" id="news-ckeditor"  name="description">{!! $editNewsEvents->description !!}</textarea>
                                            </div>
                                                    <!-- /.col-sm-9 --> 
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group row text-right">
                                            <div class="ml-auto col-md-12 col-sm-12 no-padding mt-3">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="PUT">
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
<script>
        $(document).ready(function() {
    $('.campus-multiple').select2();
});
    $(document).ready(function() {
        var editor = CKEDITOR.replace( 'news-ckeditor', {
            filebrowserUploadUrl: "{{route('tuf-news-and-events-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    });
</script>
@endpush