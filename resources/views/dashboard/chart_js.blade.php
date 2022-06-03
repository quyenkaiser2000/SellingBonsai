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
                                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <div class="contai">
                <div class="content">
                    <div class="row chiso dashboard-chiso">
                                <div class="dacap">
                                    <div>
                                    <i class=" fab fa-opencart icon"></i>
                                        <span class="content">Số sản phầm bán ra</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$order_details->count('qty')}}</span>
                                    </div>
                                    
                                </div>
                                <div class="dasudung">
                                    <div>
                                        <i class=" fa fa-solid fa-user icon"></i>
                                        <span class="content">Số người dùng đăng nhập</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$users->count('id')}}</span>
                                    </div>
                                    
                                </div>
                                <div class="dangcho">
                                    <div>
                                        <i class="fas fa-user icon"></i>
                                        <span class="content">Số người dùng ký gửi</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$product_user->count('user_id')}}</span>
                                    </div>
                                   
                                </div>
                                <div class="boqua">
                                    <div>
                                        <i class="fab fa-opencart icon"></i>
                                        <span class="content">Số lượng sản phẩm ký gửi</span>
                                    </div>
                                    <div>
                                        <span class="number">{{$product_user->sum('total')}}</span>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
            </div>
            <div class="container-fluid">
                <div class="content row">
                        <div class="col-md-8">
                            <div class="row chart-area">
                                <div class="title">
                                    <div>
                                        @if(request('show') == null)
                                           <h4>
                                                Bảng thống kê theo ngày
                                            </h4> 
                                            <span>Tháng {{$timenowformat}}</span>
                                        @endif

                                        @if(request('show') == 'day')
                                            <h4>
                                                Bảng thống kê theo ngày
                                            </h4>
                                            <span>Tháng {{$timenowformat}}</span>
                                        @endif
                                        @if(request('show') == 'year')
                                            <h4>
                                                Bảng thống kê theo năm
                                            </h4> 
                                            <span>Năm {{$timenowformatyear}}</span>
                                        @endif
                                        @if(request('show') == 'month')
                                            <h4>
                                                Bảng thống kê theo tháng
                                            </h4> 
                                            <span>Tháng {{$timenowformat}}</span>
                                        @endif
                                        
                                        
                                        
                                    </div>
                                    <div>
                                        <form action="">
                                            <div class="choose-day">
                                                <span class="select-title">Xem theo:</span>
                                                <select name="show" onchange="this.form.submit();">
                                                    <option  value="day" {{ request('show') == 'day' ? 'selected' : ''}}>Ngày</option>
                                                    <option value="month" {{ request('show') == 'month' ? 'selected' : ''}}>Tháng</option>
                                                    <option value="year" {{ request('show') == 'year' ? 'selected' : ''}}>Năm</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="chart-area">

                                </div>

                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top:15px">
                            <div class="container calendar-chart">
                                    
                                    <div class="calendar">
                                        <div class="info">
                                            <button class="btn btn-prev">
                                                <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                            </button>
                                            
                                            <p class="month day-ok-chart" style="margin-top: 15px;">September</p>
                                            <p class="year day-ok-chart" style="margin-top: 15px;">2020</p>
                                            <button class="btn btn-next">
                                                <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                            </button>
                                        </div>
                                        <div class="date">
                                            <div class="day-name day-ok-chart">Sun</div>
                                            <div class="day-name day-ok-chart">Mon</div>
                                            <div class="day-name day-ok-chart">Tue</div>
                                            <div class="day-name day-ok-chart">Wen</div>
                                            <div class="day-name day-ok-chart">Thu</div>
                                            <div class="day-name day-ok-chart">Fri</div>
                                            <div class="day-name day-ok-chart">Sat</div>
                                        </div>
                                        <div class="date date-container" style="margin-top:-36px;">
                                            <div class="day"></div>
                                            <div class="day"></div>
                                            <div class="day">1</div>
                                            <div class="day">2</div>
                                            <div class="day">3</div>
                                            <div class="day">4</div>
                                            <div class="day">5</div>
                                            <div class="day">6</div>
                                            <div class="day">7</div>
                                            <div class="day">8</div>
                                            <div class="day">9</div>
                                            <div class="day active">10</div>
                                            <div class="day">11</div>
                                            <div class="day">12</div>
                                            <div class="day">13</div>
                                            <div class="day">14</div>
                                            <div class="day">15</div>
                                            <div class="day">16</div>
                                            <div class="day">17</div>
                                            <div class="day">18</div>
                                            <div class="day">19</div>
                                            <div class="day">20</div>
                                            <div class="day">21</div>
                                            <div class="day">22</div>
                                            <div class="day">23</div>
                                            <div class="day">24</div>
                                            <div class="day">25</div>
                                            <div class="day">26</div>
                                            <div class="day">27</div>
                                            <div class="day">28</div>
                                            <div class="day">29</div>
                                            <div class="day">30</div>
                                            <div class="day">31</div>
                                        </div>
                                    </div>
                                    
                            </div>
                        </div>
                </div>
                
                
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
  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>



        var options = {
          series: [{
          name: 'Tổng doanh thu',
          data: [<?php echo $newStringtotal; ?>]
        
        }],
        
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: [<?php echo $newStringdate; ?>]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy'
          },
        },
        };
        var chart = new ApexCharts(document.querySelector("#chart-area"), options);
        chart.render();

    








    let monthEle = document.querySelector('.month');
    let yearEle = document.querySelector('.year');
    let btnNext = document.querySelector('.btn-next');
    let btnPrev = document.querySelector('.btn-prev');
    let dateEle = document.querySelector('.date-container');

    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    function displayInfo() {
        // Hiển thị tên tháng
        let currentMonthName = new Date(
            currentYear,
            currentMonth
        ).toLocaleString('en-us', { month: 'long' });

        monthEle.innerText = currentMonthName;

        // Hiển thị năm
        yearEle.innerText = currentYear;
        
        // Hiển thị ngày trong tháng
        renderDate();
    }

    // Lấy số ngày của 1 tháng
    function getDaysInMonth() {
        return new Date(currentYear, currentMonth + 1, 0).getDate();
    }

    // Lấy ngày bắt đầu của tháng
    function getStartDayInMonth() {
        return new Date(currentYear, currentMonth, 1).getDay();
    }

    // Active current day
    function activeCurrentDay(day) {
        let day1 = new Date().toDateString();
        let day2 = new Date(currentYear, currentMonth, day).toDateString();
        return day1 == day2 ? 'active' : '';
    }

    // Hiển thị ngày trong tháng lên trên giao diện
    function renderDate() {
        let daysInMonth = getDaysInMonth();
        let startDay = getStartDayInMonth();

        dateEle.innerHTML = '';

        for (let i = 0; i < startDay; i++) {
            dateEle.innerHTML += `
                <div class="day"></div>
            `;
        }

        for (let i = 0; i < daysInMonth; i++) {
            dateEle.innerHTML += `
                <div class="day ${activeCurrentDay(i + 1)}">${i + 1}</div>
            `;
        }
    }

    // Xử lý khi ấn vào nút next month
    btnNext.addEventListener('click', function () {
        if (currentMonth == 11) {
            currentMonth = 0;
            currentYear++;
        } else {
            currentMonth++;
        }
        displayInfo();
    });

    // Xử lý khi ấn vào nút previous month
    btnPrev.addEventListener('click', function () {
        if (currentMonth == 0) {
            currentMonth = 11;
            currentYear--;
        } else {
            currentMonth--;
        }
        displayInfo();
    });

    window.onload = displayInfo;
</script>
   
@endsection