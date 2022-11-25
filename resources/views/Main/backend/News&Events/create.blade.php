@extends('admin.layouts.app')
@section('title','Create News and Event')
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
                            <li class="breadcrumb-item"><a href="#">TUF</a>
                            </li>
                            <li class="breadcrumb-item active">DASHBOARD</li>
                            <li class="breadcrumb-item active">Create</li>
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
                                    <h5>Create New News & Event</h5>
                                    <a class="btn btn-sm btn-primary pull-right" style="margin-top:20px;" href="{{route('tuf-news-and-events.index')}}">BACK</a>
                                </div>
                                <div class="widget-body clearfix">
                                    <form method="POST" action="{{ route('tuf-news-and-events.store') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group row mt-2">
                                             <!--Label For Category-->
                                             <label for="news_categories_id" class="col-form-label required-form-label col-sm-2 mb-0 text-left text-sm-right">Event or News Category</label>
                                            <div class="col-sm-4">               
                                                <select class="form-control" id="news_categories_id" name="news_categories_id" required>
                                                    <option value="" selected>Choose Category...</option>
                                                    @foreach($newsCategories as $categories)
                                                        <option value="{{$categories->id}}">{{$categories->name}}</option>
                                                    @endforeach
                                                </select>         
                                            </div>
 
                                        </div>

                                        <div class="form-group required row mt-2">
                                            <!--Label For name-->
                                            <label class="col-form-label col-sm-2 mb-0 text-left text-sm-right" for="name">Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control mb-0 @error('name') is-invalid @enderror">
                                            </div>
                                             <!--Label For Event Date-->
                                             <label class="col-form-label col-sm-2 mb-0 text-left text-sm-right" for="event_date">Date</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" class="form-control mb-0 @error('event_date') is-invalid @enderror" placeholder="Enter Date">
                                            </div>

                                            
                                        </div>
                                        <!-- /.form-group -->
                                        
                                        <div class="form-group required row mt-2">
                                           <!--Label For Thumbnail-->
                                           <label class="col-form-label col-sm-2 mb-0 text-left text-sm-right" for="thumbnail">Thumbnail</label>
                                            <div class="col-sm-4">
                                                <input type="file" id="thumbnail" name="thumbnail" value="{{ old('thumbnail') }}" class="form-control mb-0 @error('thumbnail') is-invalid @enderror">
                                            </div>

                                            <!--Label For Cover Image-->
                                            <label class="col-form-label col-sm-2 mb-0 text-left text-sm-right" for="cover_image">Cover Image</label>
                                            <div class="col-sm-4">
                                                <input type="file" id="cover_image" name="cover_image" value="{{ old('cover_image') }}" class="form-control mb-0 @error('cover_image') is-invalid @enderror">
                                            </div>
                                        </div>
                                        {{-- form group  --}}
                                        <div class="form-group required row mt-2">
                                              <!--Label For Faculty ID-->
                                           <label for="tag" class="col-form-label required-form-label col-md-2 col-sm-2 mb-0 text-left text-sm-right">Tag</label>
                                           <div class="col-md-4 col-sm-10">               
                                               <select class="form-control tag-multiple" id="tag" name="tag[]" multiple="multiple">
                                                   @foreach($newstag as $newtag)
                                                       <option value="{{$newtag->slug}}">{{$newtag->name}}</option>
                                                   @endforeach
                                               </select>         
                                           </div>
                                         </div>
                                          
                                        <!-- /.form-group -->
                                        <div class="form-group required row mt-2">
                                            <!--Label for Short details-->
                                            <label class="col-form-label col-md-2 col-sm-2 mb-0 text-left text-sm-right" for="short_description">Short Description</label>
                                            <div class="col-md-10 col-sm-10">
                                                <textarea class="form-control mb-0" rows="2" cols="100" value="{{ old('short_description') }}" id="short_description"  name="short_description"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group required row mt-2">
                                            <!--Label for Event details-->
                                            <label class="col-form-label col-md-2 col-sm-2 mb-0 text-left text-sm-right" for="news-ckeditor">Event Description</label>
                                            <div class="col-md-10 col-sm-10">
                                                <textarea class="form-control mb-0" rows="2" cols="100" value="{{ old('news-ckeditor') }}" id="news-ckeditor"  name="description"></textarea>
                                            </div>
                                        </div>

                                         <!-- /.SAVE DATA in DB -->
                                        <div class="ml-auto col-sm-12 no-padding mt-3 text-right">
                                            <button class="btn btn-primary" type="submit">SAVE</button>
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
        </div>
        <!--form Body Ends Here--->
</main>

@endsection
@push('js')
<script>
    $(document).ready(function() {
    $('.tag-multiple').select2();
});
    $(document).ready(function() {
        var editor = CKEDITOR.replace( 'news-ckeditor', {
            filebrowserUploadUrl: "{{route('tuf-news-and-events-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    });
</script>
@endpush
