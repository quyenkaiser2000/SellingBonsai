@extends('dashboard.master')
@section('body')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Loại sản phẩm</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Quản lý Loại sản phẩm</h5>
                                <button type="submit" class="btn btn-primary"><a href="{{route('createProductCategory')}}" style="color:white";>Create New</a></button>
                               
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    
                                    <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>TÊN LOẠI</th>
                                                <th>CHANGE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($productCategorys as $productCategory)
                                                <tr>
                                                    <td>{{$productCategory->id}}</td>
                                                    <td>{{$productCategory->name}}</td>
                                                    <td>
                                                          
                                                        <button type="submit" class="btn btn-success"> <a href="ProductCategory/{{ $productCategory->id }}" style="color:white;">Detail</a></button>
                                                        <button type="submit" class="btn btn-success"> <a href="ProductCategory/Update/{{ $productCategory->id }}" style="color:white;">Edit</a></button>
                                                        <button type="submit" class="btn btn-danger"> <a href="ProductCategory/Delete/{{ $productCategory->id }}" style="color:white;">Delete</a></button>
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>TÊN LOẠI</th>
                                                <th>CHANGE</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
@endsection