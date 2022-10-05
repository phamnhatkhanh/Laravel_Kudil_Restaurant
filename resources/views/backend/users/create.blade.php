@extends('backend.template.layout')

@section('content')
<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row tab-add-article">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">Add user</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="tab-content" id="custom-content-below-tabContent">
                                    <div class="tab-pane fade show active" id="add-article-vi" role="tabpanel"
                                         aria-labelledby="add-article-vi-tab">
                                        <form   action="{{route('createUser')}}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group form-group-addpro">
                                                <label>Username</label>
                                                <input name="name" class="form-control">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Image</label>
                                                <div class="row-add-image">
                                                    <input type="file" name="image" class="dropify form-control"/>
                                                </div>
                                            </div>

                                            <div class="form-group form-group-addpro">
                                                <label>Email</label>
                                                <input name="email" class="form-control">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Password</label>
                                                <input name="password" class="form-control">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Status</label>
                                                <select class="form-select form-control status" name="status">
                                                    <option value="1">Actived</option>
                                                    <option value="0">Disable</option>
                                                </select>
                                            </div>
                                            <div style="text-align: center; padding-bottom: 2%">
                                                <input type="submit" name="submit" value="Thêm" class="btn btn-info px-5">
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
