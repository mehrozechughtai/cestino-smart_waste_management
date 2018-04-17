<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

    <!-- Twitter -->
    <meta name="twitter:site" content="@vueghost" />
    <meta name="twitter:creator" content="@vueghost" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="magen-iot-admin" />
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard." />
    <meta name="twitter:image" content="http://vueghost.com/magen-iot-admin/img/magen-iot-admin-social.png" />

    <!-- Facebook -->
    <meta property="og:url" content="http://vueghost.com/magen-iot-admin" />
    <meta property="og:title" content="Bracket" />
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard." />

    <meta property="og:image" content="http://vueghost.com/magen-iot-admin/img/magen-iot-admin-social.png" />
    <meta property="og:image:secure_url" content="http://vueghost.com/magen-iot-admin/img/magen-iot-admin-social.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard." />
    <meta name="author" content="vueghost" />
    <meta charset="utf-8">
    <!-- Bootstrap -->
    
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>CESTINO - Smart Bin</title>

    <!-- vendor css -->
    <link href="{{URL::asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet" />

    <!-- magen-iot-admin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/magen-iot-admin.css')}}" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

  <body>
    @extends('layouts.app')
   
    @section('content')

       <script type="text/javascript">
      
       var garbage_value = 70;

    </script>

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          ["Monday", 100],
          ["Tuesday", 31],
          ["Wednesday", 12],
          ["Thursday", 10],
          ['Friday', 3],
          ["Saturday", 10],
          ['Sunday', 3]
        ]);

        var options = {
          title: 'Weekly Analysis',
          width: 600,
          legend: { position: 'none' },
          chart: { title: 'Weekly' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
                                      <!-- LINE CHART -->
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart', 'line']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'X');
            data.addColumn('number', 'Trash %');



            data.addRows(
            
              [
              [1, 3],   [2, 10],  [3, 23],  [4, 17],  [5, 18],  [6, 9],
              [7, 11],  [8, 27],  [9, 33],  [10, 40],  [11, 32], [12, 35],
              [13, 30], [14, 40], [15, 42], [16, 44], [17, 48],
              [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
              [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
              [30, 55]
            ]
            );

            var options = {
              hAxis: {
                title: 'Monthly Analysis'
              },
              vAxis: {
                title: 'Bin Filling Percentage'
              }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
          }

    </script>

    <!-- ##### SIDEBAR LOGO ##### -->
   <!--  <div class="kt-sideleft-header">
      <div class="kt-logo"><a href="./index.html">CESTINO <small>Smart Waste Management</small></a></div>
      <div id="ktDate" class="kt-date-today">

      </div>
      
    </div> --><!-- kt-sideleft-header -->

    <!-- ##### SIDEBAR MENU ##### -->
    <!-- <div class="kt-sideleft">
      <label class="kt-sidebar-label">Navigation</label>
      <ul class="nav kt-sideleft-menu">
        <li class="nav-item">
          <a href="./index.html" class="nav-link active">
            <i class="icon ion-ios-home-outline"></i>
            <span>Dashboard</span>
          </a>
        </li>
      </ul>
    </div> --><!-- kt-sideleft -->

    <!-- ##### HEAD PANEL ##### -->
    <!-- <div class="kt-headpanel">
      <div class="kt-headpanel-left">
        <a id="naviconMenu" href="./index.html" class="kt-navicon d-none d-lg-flex"><img src="../img/menu.svg" width="30" /></a>
        <a id="naviconMenuMobile" href="./index.html" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
      </div>kt-headpanel-left

    
      <!- kt-headpanel-right ->
    </div><!- kt-headpanel ->
    <div class="kt-breadcrumb">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="./index.html">CESTINO</a>
        <span class="breadcrumb-item active">Bin_id: {{ $sensor->binId}}</span>
      </nav>
    </div> --><!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->

     <!--  <div class="kt-pagetitle">
        <h5>Dashboard</h5>
      </div><!- kt-pagetitle ->
 -->
      <div class="kt-pagebody">

        <div class="row row-sm">
          <div class="col-lg-8">
            <div class="row row-sm">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body pd-b-0">
                    <img src="../img/sensor.png" width="33%" class="card-icon" />
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20">Ultrasonic sensors</h6>
                    <h2 class="tx-roboto tx-inverse">4 <br> <small>Active Sensors</small></h2>
                    <!-- <p class="tx-12"><span class="tx-success">2.5%</span> stability from yesterday</p> -->
                  </div><!-- card-body -->
                  <div id="rs1" class="ht-50 ht-sm-70 mg-r--1"></div>
                </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body pd-b-0">
                    <img src="../img/location.png" width="60" class="card-icon" />
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20">Bin Location</h6>
                    <h2 class="tx-roboto tx-inverse">{{$sensor->location}} <br><small>Lat: {{$sensor->lat}} , Lng: {{$sensor->lng}}</small></h2>
                   <!--  <p class="tx-12"><span class="tx-success">2.5%</span> change from yesterday</p> -->
                  </div><!-- card-body -->
                  <div id="rs2" class="ht-50 ht-sm-70 mg-r--1"></div>
                </div><!-- card -->
              </div><!-- col-6 -->
            </div><!-- row -->

           <div class="row row-sm">
              <div class="col-lg-6">
                <div class="card mg-t-20">
                  <div class="card-body pd-b-0 ">
                            <img src="../img/senc.svg" width="60" class="card-icon" />
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20">Bin Position</h6>
                    <h2 class="tx-lato tx-inverse">Stable  <small></small></h2>
                  
                  </div><!-- card-body -->
                  <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>

                </div><!-- card -->

              </div><!-- col-6 -->
             
              <div class="col-lg-6">
                <div class="card mg-t-20">
                  <div class="card-body pd-b-0 ">
                            <img src="../img/trash.png" width="60" class="card-icon" />
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20">Trash Empty <small>last update</small></h6>
                    <h2 class="tx-lato tx-inverse">2018-07-16  <small></small></h2>
                  <!--   <p class="tx-12"><span class="tx-success">2.5%</span> change from yesterday</p> -->
                  </div><!-- card-body -->
                  <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>

                </div><!-- card -->

              </div><!-- col-6 -->
              <div class="col-lg-6 mg-t-20">
                  
              </div><!-- col-6 -->

            </div><!-- row -->

            <div class="card pd-20 pd-sm-40 mg-t-20">
              <h6 class="card-body-title">Projection Day</h6>
              <h6><small>Next Day to collect garbage of bin</small></h6>




             
            </div>

            <div class="card pd-20 pd-sm-40 mg-t-20">
              <h6 class="card-body-title">Hostogram Chart of Bin Analysis</h6>
              <!-- <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar4" height="380"></canvas> -->
              <div id="top_x_div" style="width: 70%; height: 500px;"></div>
             
            </div>

            <div class="card pd-20 pd-sm-40 mg-t-20">
              <h6 class="card-body-title">Line Chart of Bin Analysis<small> Monthly</small></h6>
              <div id="chart_div"></div>

            </div>


  

          </div><!-- col-8 -->
          <div class="col-lg-4">
            <div class="card pd-40 tx-center">
              <div class="d-flex justify-content-center mg-b-30">
                <!-- Code edit for Bin -->
                <img id="trash_id" src="../img/trash_empty.png" class="wd-200" alt="" height="200" />
              </div>

              <br>

                <center>
                  <progress id="myProgress" value="0" max="100">
                  </progress>
               </center>
                <script type="text/javascript">
                        document.write({{   ( $sensor->v1 + $sensor->v2 + $sensor->v3 ) /3 }}+'%');
                    </script><br>
              
                <br>
              <h6 class="tx-md-20 tx-inverse mg-b-20">TRASH ANALYSIS</h6>
              <a href="/home/{{ $sensor->id}}" class="btn btn-success btn-block" onclick="getTrashValue1();">Update</a>
            </div><!-- card -->

        
            <div class="card card-body pd-20 mg-t-20">
              <h6 class="card-body-title tx-12 tx-spacing-1">Get Connected</h6>
              <p>Just select any of your available social account to get started.</p>
              <div class="tx-20">
                <a href="./index.html" class="tx-primary mg-r-5"><i class="fa fa-facebook"></i></a>
                <a href="./index.html" class="tx-info mg-r-5"><i class="fa fa-twitter"></i></a>
                <a href="./index.html" class="tx-danger mg-r-5"><i class="fa fa-google-plus"></i></a>
                <a href="./index.html" class="tx-danger mg-r-5"><i class="fa fa-pinterest"></i></a>
                <a href="./index.html" class="tx-inverse mg-r-5"><i class="fa fa-github"></i></a>
                <a href="./index.html" class="tx-pink mg-r-5"><i class="fa fa-instagram"></i></a>
              </div>
            </div><!-- card -->

          </div><!-- col-4 -->
        </div><!-- row -->
      </div>
      <!-- kt-pagebody -->
      
      <div class="kt-footer">
        <span>Copyright &copy;. All Rights Reserved. CESTINO</span>
        
      </div><!-- kt-footer -->
    <!-- kt-mainpanel -->


    <script type="text/javascript">

     

        // var value = 100; //garbage fullfill value

      window.onload = function getTrashValue1()
      {
      

        var full_bin_src = '../img/trash_full.png';
        var empty_bin_src = '../img/trash_empty.png';

      
        if(garbage_value > 20)
          {
            // alert(value);
            //trash not empty
            document.getElementById('trash_id').src = full_bin_src;

          }
          else{

            //trash not empty
            document.getElementById('trash_id').src = empty_bin_src;

          }

          document.getElementById('myProgress').value = garbage_value;

      }



    </script>


    @endsection




    <script src="{{URL::asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{URL::asset('lib/popper.js/popper.js')}}"></script>
    <script src="{{URL::asset('lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{URL::asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{URL::asset('lib/moment/moment.js')}}"></script>
    <script src="{{URL::asset('lib/d3/d3.js')}}"></script>
    
    <script src="{{URL::asset('js/magen-iot-admin.js')}}"></script>
    <script src="{{URL::asset('js/ResizeSensor.js')}}"></script>
    <script src="{{URL::asset('js/dashboard.js')}}"></script>

  </body>
</html>
