@extends('backend.template.layout')

@section('content')
   <section class="content">
            <div class="container-fluid">
                <div class="row tab-add-article">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <!-- <h3 class="card-title "> <a href="route('listUser')" class="btn btn-success"><i class="fas fa-arrow-left"></i> </a>  Chỉnh sửa người dùng</h3> -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="tab-content" id="custom-content-below-tabContent">
                                    <div class="tab-pane fade show active" id="add-article-vi" role="tabpanel"
                                         aria-labelledby="add-article-vi-tab">
                                        <form action="{{route('editUser', $user -> id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group form-group-addpro">
                                                <label>Username</label>
                                                <input name="name" value="{{$user -> name}}" class="form-control">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Image</label>
                                                <div class="row-add-image">
                                                    <input type="file" data-default-file="{{$user -> image}}" name="image" class="dropify form-control"/>

                                                    @if(($user->link_image) != "")

                                                        <img src="{{$user->link_image}}"  width="100" height="100" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Email</label>
                                                <input name="email" value="{{$user -> email}}" class="form-control">
                                            </div>

                                                <div class="form-group form-group-addpro">
                                                    <label for="input-1">Status</label>
                                                    <select class="form-select form-control status" name="status"
                                                            id="inputProductType">
                                                        <option id="stsshow" value="1"
                                                                @if ($user -> status == 1) selected @endif>Actived</option>
                                                        <option id="stshiden" value="0"
                                                                @if ($user -> status == 0) selected @endif>Disable</option>
                                                    </select>
                                                </div>


                                            <div style="text-align: center; padding-bottom: 2%"><input
                                                    type="submit"
                                                    name="submit"
                                                    value="Edit User"
                                                    class="btn btn-info px-5">
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
@endsection
