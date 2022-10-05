@extends('backend.template.layout')

@section('content')


<section class="content">
    <div class="container-fluid">
        <a href="./tables/create" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i>  Create Table</a>

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
                                            <th>Number People</th>
                                            <th>Date</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Command</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($tables as $table)
                                        <tr class="">
                                            <td style="vertical-align: middle;">{{$table -> id }}</td>
                                            <td style="vertical-align: middle;">{{$table -> name}}</td>
                                            <td style="vertical-align: middle;">{{$table -> number_people}}</td>
                                            <td style="vertical-align: middle;">{{$table -> created_at}}</td>
                                            <td style="vertical-align: middle;text-align: center;">
                                                @if($table -> status== 1 )
                                                <span class="badge bg-success"> Actived</span>
                                                @else
                                                <span class="badge bg-danger"> Disable </span>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle;text-align: center;">
                                                <a href="./tables/edit/{{$table->id}}" class="btn btn-primary"> <i class="far fa-edit"></i></a>
                                                <a href="./tables/delete/{{$table->id}}"
                                                    onclick="return confirm('Bạn không thể xóa người dùng {{$table -> name}}. Hãy vô hiệu hóa tài khoản khi không sử dụng')"
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
