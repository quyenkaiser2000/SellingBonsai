<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/assets/images/favicon.png')}}">
    <title>Home-Admin-Alula</title>
    <!-- Custom CSS -->
    <link href="{{asset('dashboard/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('dashboard/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/dist/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/libs/quill/dist/quill.snow.css')}}">
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/admin/dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('dashboard/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="{{asset('dashboard/assets/images/logo-text.png')}}" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('dashboard/assets/images/users/1.jpg')}}"  class="rounded-circle" width="31"> {{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i>
                                @auth
                                                            <form style="display:contents;" action="/logout-user" method="POST" class="text-xs font-semibold text-blue-500 ml-6">
                                                                @csrf

                                                                    <button type="submit" name="" style="border: none;background: no-repeat;">Log Out</button>

                                                            </form>
                                            @else
                                            @endauth
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{'/admin/dashboard'}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{'/admin/livestream'}}" aria-expanded="false"><i class="fas fa-dot-circle"></i><span class="hide-menu">Start live</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{'/admin/dashboard/order'}}" aria-expanded="false"><i class="fas fa-shopping-cart"></i><span class="hide-menu">Thông tin đặt hàng</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{'/admin/dashboard/discount'}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Mã giảm giá</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{'/admin/dashboard/kygui'}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Sản phẩm ký gửi</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Quản Lý</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('product')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Sản Phẩm</span></a></li>
                                <li class="sidebar-item"><a href="{{route('brand')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Thương Hiệu </span></a></li>
                                <li class="sidebar-item"><a href="{{route('productcategory')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Loại Sản Phẩm</span></a></li>
                                <li class="sidebar-item"><a href="{{route('user')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Người dùng</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{'/admin/dashboard/contact'}}" aria-expanded="false"><i class="fab fa-rocketchat"></i><span class="hide-menu">Contact</span></a></li>

                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->


        @yield('body')



        <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('dashboard/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('dashboard/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dashboard/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dashboard/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dashboard/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dashboard/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('dashboard/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dashboard/dist/js/pages/chart/chart-page-init.js')}}"></script>
   


    <!-- this page js -->
    <script src="{{asset('dashboard/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('dashboard/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('dashboard/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    //page detail 
    
    </script>
    <script src="{{asset('dashboard/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/libs/quill/dist/quill.min.js')}}"></script>
    
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-autoclose1').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
    <script>
       
        $(document).on('click','#deletebtn',function(){
            var img_id = $(this).data('id');
            
           var url = "{{route('delete-img')}}";
           if(confirm('Are you sure you want to delete')){
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
               $.ajax({
                
                   url: url,
                   method:"POST",
                   data:{img_id:img_id},
                   dataType:'json',
                   success:function(data){
                        alert(data);
                    },
                    
                });
           }
        });
    </script>
    <script>
       
       $(document).on('click','#deletebtn_category',function(){
           var img_id = $(this).data('id');
           
          var url = "{{route('delete-img-category')}}";
          if(confirm('Are you sure you want to delete')){
               $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
               });
              $.ajax({
               
                  url: url,
                  method:"POST",
                  data:{img_id:img_id},
                  dataType:'json',
                  success:function(data){
                       alert(data);
                   },
                   
               });
          }
       });
   </script>
   
</body>

</html>