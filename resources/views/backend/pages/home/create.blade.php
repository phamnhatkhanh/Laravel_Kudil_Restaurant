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
                                        <form id="edit_content"  action="http://127.0.0.1:8000/test"  method="POST" enctype="multipart/form-data">
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
                                                <button type="submit" name="submit" value="Create Tag" class="btn btn-info px-5">
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
            var address = $("textarea[name='content']").val();
            var status = $("select[name='status']").val();


            $.ajax({
                url: "http://127.0.0.1:8000/test",
                type:'POST',
                data: {_token:_token, name:name, status:status, address:address},
                success: function(data) {
                    if($.isEmptyObject(data.errors)){
                        $(".error_msg").html('');
                        alert(data.success);
                    }else{
                        let resp = data.errors;
                        for (index in resp) {
                            $("#" + index).html(resp[index]);
                        }
                    }
                }
            });

        });
    });


</script>
@show
