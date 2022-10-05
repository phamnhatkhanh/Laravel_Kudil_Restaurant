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
                                <h3 class="card-title ">Add Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="tab-content" id="custom-content-below-tabContent">
                                    <div class="tab-pane fade show active" id="add-article-vi" role="tabpanel"
                                         aria-labelledby="add-article-vi-tab">
                                        <form   action="{{route('editTable',$table->id)}}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group form-group-addpro">
                                                <label>Name</label>
                                                <input name="name" class="form-control" value= "{{$table->name}}">
                                            </div>

                                            <div class="form-group form-group-addpro">
                                                <label>Number People</label>
                                                <input type="number"  name="number_people" value= "{{$table->number_people}}" min="1" max="20" class="form-control" >
                                            </div>

                                            <div class="form-group form-group-addpro">
                                                <label>Status</label>
                                                <select class="form-select form-control" status" name="status" id="inputProductType">
                                                    <option id="stsshow" value="1"
                                                        @if ($table->status == 1) selected @endif>Actived
                                                    </option>
                                                    <option id="stshiden" value="0"
                                                        @if ($table->status == 0) selected @endif>Disable
                                                    </option>
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
