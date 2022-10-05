@extends('backend.template.layout')

@section('content')




<section class="content">
    <div class="container-fluid">
        <a href="./products/create" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i>  Create Product</a>

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
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th style="text-align: center;">Status</th>
                                            <th >Date</th>
                                            <th style="text-align: center;">Command</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach($products as $product)
                                            <tr class="">
                                                <td style ="vertical-align: middle;">
                                                    {!! Str::limit($product->name, 30, ' ...') !!}
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    @if(($product->image) != "")
                                                        <img src="{{$product->image}}"  width="100" height="100" />
                                                    @endif
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    {{$product->price}}
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    {!! Str::limit($product->description, 30, ' ...') !!}
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    @if($product -> status== 1 )
                                                        <span class="badge bg-success"> Actived</span>
                                                    @else
                                                        <span class="badge bg-danger"> Disable </span>
                                                    @endif
                                                </td>
                                                <td style="vertical-align: middle;">{{$product->created_at}}</td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <a href="./products/edit/{{$product->id}}" class="btn btn-primary"> <i class="far fa-edit"></i></a>
                                                    <a href="./products/delete/{{$product->id}}"
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
