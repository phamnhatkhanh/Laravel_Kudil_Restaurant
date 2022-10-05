@extends('backend.template.layout')
@section('head')
    <script type="text/javascript"  src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
@show
@section('content')
<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row tab-add-article">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">Add Review</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="tab-content" id="custom-content-below-tabContent">
                                    <div class="tab-pane fade show active" id="add-article-vi" role="tabpanel"
                                         aria-labelledby="add-article-vi-tab">
                                        <form   action="{{route('createReview')}}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group form-group-addpro">
                                                <label>Name</label>
                                                <input name="name" class="form-control">
                                            </div>

                                            <div class="form-group form-group-addpro">
                                                <label>Email</label>
                                                <input name="email" class="form-control">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Rating</label>
                                                <input name="rating" class="form-control">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Content</label>
                                                <textarea name='content' rows="4" cols="20" class="form-control" id="create_content" placeholder="Content yourself here...">
                                                </textarea>
                                            </div>


                                            <div class="form-group form-group-addpro">
                                                <label>Product</label>
                                                <select class="form-select form-control status" name="product_id">
                                                    @foreach($products as $product)
                                                        @if($product->status == 1)
                                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Status</label>
                                                <select class="form-select form-control status" name="status">
                                                    <option value="1">Actived</option>
                                                    <option value="0">Disable</option>
                                                </select>
                                            </div>
                                            <div style="text-align: center; padding-bottom: 2%">
                                                <input type="submit" name="submit" value="Create Review" class="btn btn-info px-5">
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
        <!-- /.content -->
@endsection

@section('footer')
    <script type="text/javascript">
        CKEDITOR.replace( 'create_content',{
            extraPlugins: 'editorplaceholder',
            editorplaceholder: 'Content yourself here...',
        } );
    </script>
@show
