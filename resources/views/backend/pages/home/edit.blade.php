@extends('backend.template.layout')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

@show
@section('content')
<!-- Main content -->
<!-- {{$section->content}} -->
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
                                        <form id="content_form"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group form-group-addpro">
                                                <label>Name</label>
                                                <input name="name" class="form-control" value = "{{$section->name}}">
                                            </div>
                                            <!-- <div class="form-group form-group-addpro">
                                                <label>Edit Link</label>

                                                <textarea name="content" class="form-control">
                                                </textarea>
                                            </div> -->

                                            <div class="form-group form-group-addpro">
                                                <label style = "margin-right: 1rem;"> Content section</label>
                                                <a class="btn btn-info px-5" id="edit_content_button">Edit Content</a>
                                                <br/>
                                                <div id="content_section" style="
                                                    background-color: #736969;
                                                    margin-top: 2rem;
                                                " contenteditable="false">
                                                    <div>

                                                        {!!$section->content!!}
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group form-group-addpro">
                                                <label>Status</label>
                                                <select class="form-select form-control status" name="status">
                                                    <option id="stsshow" value="1"
                                                        @if ($section->status == 1) selected @endif>Actived
                                                    </option>
                                                    <option id="stshiden" value="0"
                                                        @if ($section->status == 0) selected @endif>Disable
                                                    </option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="section_id" value = "{{$section->id}}">
                                            <input type="hidden" name="page_id" value = "{{$idPage}}">

                                            <div style="text-align: center; padding-bottom: 2%">
                                                <!-- <button id= "btn_submit" type="submit" name="submit" value="Create Tag" class="btn btn-info px-5"> -->
                                                     <button class="btn btn-info px-5" id="save_button">Save</button>
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
<script type="text/javascript">


    $(function() {

        $("#edit_content_button").click(function(){

            var value = $('#content_section').attr('contenteditable');
            if (value == 'false') {
                $(this).text("Done")
                $('#content_section').attr('contenteditable','true');
            }
            else {
                $(this).text("Edit Content")
                $('#content_section').attr('contenteditable','false');
            }
        });

        $("#content_form").on("submit", function(e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var page_id = $("input[name='page_id']").val();
            var section_id = $("input[name='section_id']").val();

            var content = JSON.stringify($("#content_section").children().prop('outerHTML'));
            // var content = $("textarea[name='content']").val();
            var status = $("select[name='status']").val();

            $.ajax({
                url: "http://127.0.0.1:8000/api/admin/manage-contents/pages/" + page_id + "/edit/" + section_id ,
                type:'POST',
                data: {_token:_token, name:name, status:status, content:content, section_id:section_id},

            });
        });
    });
</script>

@endsection
@section('footer')

@show
