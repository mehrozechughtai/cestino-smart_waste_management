<head>
    
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('images/favicon.ico')}}" type="image/ico" />

    <title>CESTINO - Smart Waste Management | Dashboard </title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="{{ URL::asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ URL::asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

   

     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- New theme -->
    <link href="{{ URL::asset('build/css/custom.min.css')}}" rel="stylesheet">

     <link href="{{URL::asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet" />

    <!-- magen-iot-admin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/magen-iot-admin.css')}}" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


  <!--   <script src="{{ URL::asset('build/js/custom.min.js')}}"></script> -->

</head>



@extends('layouts.app')

@section('content')
  <!--  -->



<div class="container" style="size:23px">
    <div class="row justify-content-center">
      
</div>
  
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-trash"></i> <span>CESTINO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/profile.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li active><a href="/home"><i class="fa fa-home"></i> Home </span></a>
                   
                  </li>

                  <li><a href="/team"><i class="fa fa-user"></i> Contact CESTINO TEAM  </a>
                    
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Track Bins <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                 
                 
                </ul>
              </div>

              <div>
                  <img src="{{ URL::asset('img/cleanpak.png') }}">
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


        <!-- page content -->
        <div class="right_col" role="main" style="padding-top: 2%; ">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-trash"></i> Total Bins </span>
              <div class="count">250</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Filling Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" >
              <span class="count_top"><i class="fa fa-star"></i> Cities covered</span>
              <div class="count green">2</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" >
              <span class="count_top"><i class="fa fa-user"></i> Users</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            
          </div>
          <!-- /top tiles -->



          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div>
                    <!-- <button class="btn btn-success btn-lg" src="###">Add New Bin</button> -->

                </div>


              <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr><center>Last 5 Recent Values..</center></tr>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Bin Id </th>
                            <th class="column-title">Record </th>
                            <th class="column-title">Location </th>
                           <!--  <th class="column-title">Company </th> -->
                            <th class="column-title">Status </th>
                            <th class="column-title">Percentage </th>
                            <!-- <th class="column-title no-link last"><span class="nobr">Action</span> -->
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>

                        @if(count( $sensors ) > 0)
                          @foreach($sensors as $sensor)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{ $sensor->binId }}</td>
                            <td class=" ">{{ $sensor->created_at }} </td>
                            <td class=" ">{{ $sensor->location }} <i class="success fa fa-long-arrow-up"></i></td>
                            <td class=" ">Active </td>
                            
                            <td class="a-right a-right ">{{
                                ( $sensor->v1 + $sensor->v2 + $sensor->v3 ) /3 


                            }}<!-- </td>
                            <td class=" last"><a href="/home/{{ $sensor->id }}">View</a>
                            </td> -->
                          </tr>
                          @endforeach
                          
                          @else
                          <tr>
                            <td colspan="8">
                               <center> No Record Exists</center>
                            </td>
                        </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                </div>

          
            
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
                            <h2 class="tx-roboto tx-inverse"><br><small>Lat: {{$sensor->lat}} , Lng: {{$sensor->lng}}</small>
                              <br>


                            </h2>
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
                    <h4>After Approx {{ round($nextPredictiveDay,1) }} Days</h4>



                     
                    </div>

                    <div class="card pd-20 pd-sm-40 mg-t-20">
                        <h6 class="card-body-title"> Optimum Route path for Bin Collection</h6><hr>
                        <div style="width: 100%; height: 400px;">
                            {!! Mapper::render() !!}
                        </div>

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
                                document.write({{   ($sense->v1 + $sense->v2 + $sense->v3)/3  }}+'%');
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
      


          </div>
          <br />

         

            
            </div>
          </div>
        </div>
        <!-- /page content -->

      
      </div>
    </div>
      <!-- footer content -->
        <footer>
          <div class="pull-right">
            Powered by CESTINO - Smart Waste Management
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
  @endsection

 