@extends('backend.template.layout')

@section('content')




<section class="content">
    <div class="container-fluid">
        <a href="./comments/create" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i>  Create Comment</a>

        <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Content</th>
                                            <th>Website</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Command</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($comments as $comment)
                                            <tr class="">
                                                <td style="vertical-align: middle;">{{$comment->id}}</td>
                                                <td style="vertical-align: middle;">
                                                    {!! Str::limit($comment->name, 30, ' ...') !!}
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    {!! Str::limit($comment->email, 30, ' ...') !!}
                                                </td>

                                                <td >
                                                    {!! Str::limit($comment->content, 30, ' ...') !!}
                                                </td>
                                                <td >
                                                    {!! Str::limit($comment->website, 30, ' ...') !!}
                                                </td>
                                                <td style="vertical-align: middle;text-align: center;">
                                                    @if($comment -> status== 1 )
                                                    <span class="badge bg-success"> Actived</span>
                                                    @else
                                                    <span class="badge bg-danger"> Disable </span>
                                                    @endif
                                                </td>

                                                <td style="vertical-align: middle;text-align: center;">
                                                    <a href="./comments/edit/{{$comment->id}}" class="btn btn-primary"> <i class="far fa-edit"></i></a>
                                                    <a href="./comments/delete/{{$comment->id}}"
                                                        onclick="return confirm('Data cannot be backed up. Do you agree to delete?')"
                                                        class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
@endsection
