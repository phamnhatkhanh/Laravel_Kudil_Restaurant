@extends('backend.template.layout')

@section('content')




<section class="content">
    <div class="container-fluid">
        <a href="./reviews/create" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i>  Create Review</a>

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


                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Rating</th>
                                            <th>Content</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Command</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($reviews as $reivew)
                                            <tr class="">

                                                <td style="vertical-align: middle;">
                                                    {!! Str::limit($reivew->name, 30, ' ...') !!}
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    {!! Str::limit($reivew->email, 30, ' ...') !!}
                                                </td>
                                                 <td >
                                                   {{$reivew->rating}}
                                                </td>
                                                <td >
                                                    {!! Str::limit($reivew->content, 30, ' ...') !!}
                                                </td>

                                                <td style="vertical-align: middle;text-align: center;">
                                                    @if($reivew -> status== 1 )
                                                    <span class="badge bg-success"> Actived</span>
                                                    @else
                                                    <span class="badge bg-danger"> Disable </span>
                                                    @endif
                                                </td>

                                                <td style="vertical-align: middle;text-align: center;">
                                                    <a href="./reviews/edit/{{$reivew->id}}" class="btn btn-primary"> <i class="far fa-edit"></i></a>
                                                    <a href="./reviews/delete/{{$reivew->id}}"
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
