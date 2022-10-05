@extends('backend.template.layout')

@section('content')


<section class="content">
    <div class="container-fluid">
        <a href="./tags/create" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i>  Create Tag</a>

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
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Command</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($tags as $tag)
                                        <tr class="">
                                            <td style="vertical-align: middle;">{{$tag -> id }}</td>
                                            <td style="vertical-align: middle;">{{$tag -> name}}</td>
                                            <td style="vertical-align: middle;text-align: center;">
                                                @if($tag -> status== 1 )
                                                <span class="badge bg-success"> Actived</span>
                                                @else
                                                <span class="badge bg-danger"> Disable </span>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle;text-align: center;">
                                                <a href="./tags/edit/{{$tag->id}}" class="btn btn-primary"> <i class="far fa-edit"></i></a>
                                                <a href="./tags/delete/{{$tag->id}}"
                                                    onclick="return confirm('Bạn không thể xóa người dùng {{$tag -> name}}. Hãy vô hiệu hóa tài khoản khi không sử dụng')"
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
