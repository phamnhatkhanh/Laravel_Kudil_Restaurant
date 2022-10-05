@extends('backend.template.layout')

@section('head')
    <script type="text/javascript"  src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
    <style>
        textarea::-webkit-input-placeholder {
  color: #0bf;
}

        </style>
@show

@section('content')
<!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row tab-add-article">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">Add blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <div  class="card-body">

                                <div class="tab-content" id="custom-content-below-tabContent">
                                    <div class="tab-pane fade show active" id="add-article-vi" role="tabpanel"
                                         aria-labelledby="add-article-vi-tab">
                                        <form  action="{{route('editBlog',$blog -> id)}}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group form-group-addpro">
                                                <label>Title</label>
                                                <input name="title" class="form-control" value="{{$blog->title}}" >
                                            </div>

                                            <div  class="form-group form-group-addpro">
                                                <label>Image</label>
                                                <div class="row-add-image">
                                                    <input type="file" name="image" class="dropify form-control"/>
                                                    @if(($blog->image) != "")
                                                        <img src="{{$blog->image}}"  width="100" height="100" />
                                                    @endif
                                                </div>
                                            </div>

                                            <div  class="form-group form-group-addpro">
                                                <label>Description</label>
                                                <input name="description" class="form-control" value="{{$blog->description}}">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Content</label>

                                                <textarea name='content' rows="4" cols="20" class="form-control" id="update_content_blog" placeholder="Content yourself here...">
                                                    {!!$blog->content!!}
                                                </textarea>
                                            </div>
                                            <div name="blog_img">


                                            <div class="form-group form-group-addpro">
                                                <label>Number View</label>
                                                <input name="number_view" class="form-control" value = "{{$blog->number_view}}">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Number Like</label>
                                                <input name="number_like" class="form-control" value = "{{$blog->number_like}}">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Slug</label>
                                                <input name="slug" class="form-control" value = "{{$blog->slug}}">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Status</label>
                                                <select class="form-select form-control status" name="status" id="inputProductType">
                                                    <option id="stsshow" value="1"
                                                        @if ($blog->status == 1) selected @endif>Actived
                                                    </option>
                                                    <option id="stshiden" value="0"
                                                        @if ($blog->status == 0) selected @endif>Disable
                                                    </option>
                                                </select>
                                            </div>
                                            </div>
                                            <input type="hidden" name="user_id" value = "{{$blog->user_id}}">
                                            <div style="text-align: center; padding-bottom: 2%">
                                                <input type="submit" name="submit" value="Edit Blog" class="btn btn-info px-5">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        @php $blog->number_like =1234 @endphp
        <!-- /.content -->
@endsection

@section('footer')
    <script type="text/javascript">
        CKEDITOR.replace( 'update_content_blog',{
            extraPlugins: 'editorplaceholder',
            editorplaceholder: 'Content yourself here...',
        } );

    </script>
@show
