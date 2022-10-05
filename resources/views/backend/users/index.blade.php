@extends('backend.template.layout')

@section('content')




<section class="content">
    <div class="container-fluid">
        <a href="./users/create" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i>  Create User</a>

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
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Command</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $user)
                                        <tr class="">
                                            <td style="vertical-align: middle;">{{ $user -> id }}</td>
                                            <td style="vertical-align: middle;">{{$user -> name}}</td>
                                            <td style="vertical-align: middle;">{{$user -> email}}</td>
                                            <td style="vertical-align: middle;text-align: center;">
                                                @if($user -> status== 1 )
                                                <span class="badge bg-success"> Actived</span>
                                                @else
                                                <span class="badge bg-danger"> Disable </span>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle;text-align: center;">
                                                <a href="./users/edit/{{$user->id}}" class="btn btn-primary"> <i class="far fa-edit"></i></a>
                                                <a href="./users/delete/{{$user->id}}"
                                                    onclick="return confirm('Bạn không thể xóa người dùng {{$user -> name}}. Hãy vô hiệu hóa tài khoản khi không sử dụng')"
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
