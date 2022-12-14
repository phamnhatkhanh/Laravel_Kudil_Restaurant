@extends('backend.template.layout')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

@show
@section('content')
<!-- Main content -->
        <section id="content_home" class="content">
            <div class="container-fluid">
                <div class="row tab-add-article">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">Add Tag</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="tab-content" id="custom-content-below-tabContent">
                                    <div class="tab-pane fade show active" id="add-article-vi" role="tabpanel"
                                         aria-labelledby="add-article-vi-tab">
                                        <form id="edit_content"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group form-group-addpro">
                                                <label>Name</label>
                                                <input name="name" class="form-control">
                                            </div>
                                            <div class="form-group form-group-addpro">
                                                <label>Content</label>

                                                <textarea name="content" class="form-control">

                                                </textarea>
                                            </div>


                                            <div class="form-group form-group-addpro">
                                                <label>Status</label>
                                                <select class="form-select form-control status" name="status">
                                                    <option value="1">Actived</option>
                                                    <option value="0">Disable</option>
                                                </select>
                                            </div>
                                            <div style="text-align: center; padding-bottom: 2%">
                                                <!-- <button id= "btn_submit" type="submit" name="submit" value="Create Tag" class="btn btn-info px-5"> -->
                                                     <button class="btn btn-info px-5" id="submit">Create Tag</button>
                                                <!-- <button id= "btn_submit" type="submit" name="submit" value="Create Tag" > -->
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

    $(function() {
        $("#edit_content").on("submit", function(e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            // var content = $("#content_home");
            var content = JSON.stringify($("#content_home").prop('outerHTML'));
            // var content = $("textarea[name='content']").val();
            var status = $("select[name='status']").val();

                // console.log("click button");
            $.ajax({
                url: "http://127.0.0.1:8000/admin/manage-contents/home",
                type:'POST',
                data: {_token:_token, name:name, status:status, content:content},

            });

        });
    });
</script>
@show
