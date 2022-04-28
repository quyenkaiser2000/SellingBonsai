@extends('dashboard.master')
@section('body')
  
  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                <div class="content">
                    <label for="cars">Select chart style:</label>
                    <select name="chart" onchange="myFunction()" class="form-control" id="chart" style="width:120px;">
                        <option value="pie">Pie Chart</option>
                        <option value="column">Column Chart</option>
                        <option value="pyrmamid">Pyrmamid Chart</option>
                        <option value="bar">Bar</option>
                    </select>
                </div>
                
                <div id="columnchart_values" style="width: 900px; height: 500px;"></div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
  <!-- javascript -->
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tổng', 'Doanh Thu'],
          <?php echo $data; ?>
        ]);

        var options = {
          title: 'Tổng Doanh Thu Từng Tháng',
          is3D: true,
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
        chart.draw(data, options);
      }
    </script>
   
@endsection