@extends('backend.template.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <a href="./sections/create" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i>  Create Review</a>

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

                                        @foreach($sections as $section)
                                            <tr class="">

                                                <td style="vertical-align: middle;">
                                                    {!! Str::limit($section->serial, 30, ' ...') !!}
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    {!! Str::limit($section->name, 30, ' ...') !!}
                                                </td>

                                                <td style="vertical-align: middle;text-align: center;">
                                                    @if($section -> status== 1 )
                                                    <span class="badge bg-success"> Actived</span>
                                                    @else
                                                    <span class="badge bg-danger"> Disable </span>
                                                    @endif
                                                </td>

                                                <td style="vertical-align: middle;text-align: center;">
                                                    <a href="./edit/{{$section->id}}" class="btn btn-primary"> <i class="far fa-edit"></i></a>
                                                    <a href="./delete/{{$section->id}}"
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
