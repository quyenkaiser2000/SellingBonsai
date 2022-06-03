@extends('dashboard.master')
@section('body')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                    <h5 class="card-title">Quản lý tin nhắn</h5>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>


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
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">
                                        <div class="card">
                                            <div class="card-body">
                                                
                                                
                                                <div class="table-responsive">
                                                    <table id="zero_config" class="table table-striped table-bordered">
                                                
                                                    <thead>
                                                        <tr>
                                                            <th>Tên người gửi</th>
                                                            <th>Email</th>
                                                            <th>Tin nhắn</th>
                                                            <th>Change</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        @foreach($contacts as $contact)
                                                                <tr>
                                                                    <td>{{$contact->name}}</td>
                                                                    <td>{{$contact->email}}</td>
                                                                    <td>{{$contact->message}}</td>
                                                                    <td>
                                                                            <button type="submit" class="btn btn-success"> <a href="contact/detail/{{ $contact->id }}" style="color:white;">Detail</a></button>
                                                                            
                                                                    </td>
                                                                </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Tên người gửi</th>
                                                            <th>Email</th>
                                                            <th>Tin nhắn</th>
                                                            <th>Change</th>

                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
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