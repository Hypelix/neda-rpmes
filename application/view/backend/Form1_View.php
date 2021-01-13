<?php   $this->load->view('header/backend_navigation_bar');   ?>

<!-- Loader -->

<!-- Begin page -->
<div id="wrapper">
  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
      <i class="ion-close">
      </i>
    </button>
    <div class="left-side-logo d-block d-lg-none">
      <div class="text-center">
        <a href="index.html" class="logo"><img src="assets/images/logo-dark.png" height="20" alt="logo"></a>
      </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
      <div id="sidebar-menu">
        <ul>
          <li class="menu-title">Main</li>
          <li><a href="index.html" class="waves-effect"><i class="dripicons-meter"></i> <span>Dashboard <span class="badge badge-success badge-pill float-right">3</span></span></a></li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect">
              <i data-icon="X" class="icon"></i>
              <span>Input Forms</span>
              <span class="menu-arrow float-right">
                <i class="mdi mdi-chevron-right"></i>
              </span>
            </a>
            <ul class="list-unstyled">
              <li><a href="ui-alerts.html">Form 1</a></li>
              <li><a href="ui-alerts.html">Form 2</a></li>
              <li><a href="ui-alerts.html">Form 3</a></li>
              <li><a href="ui-alerts.html">Form 4</a></li>

            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect">
              <i data-icon="X" class="icon"></i>
              <span>Input Forms</span>
              <span class="menu-arrow float-right">
                <i class="mdi mdi-chevron-right"></i>
              </span>
            </a>
            <ul class="list-unstyled">
              <li><a href="ui-alerts.html">Form 5</a></li>
              <li><a href="ui-alerts.html">Form 6</a></li>
              <li><a href="ui-alerts.html">Form 7</a></li>
              <li><a href="ui-alerts.html">Form 8</a></li>
              <li><a href="ui-alerts.html">Form 9</a></li>
              <li><a href="ui-alerts.html">Form 10</a></li>
              <li><a href="ui-alerts.html">Form 11</a></li>
            </ul>
          </li>



          <!-- End of Main-->
          <li class="menu-title">Extra</li>
<!-- <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Maps </span><span class="badge badge-danger badge-pill float-right">2</span></a>
<ul class="list-unstyled">
<li><a href="maps-google.html">Google Map</a></li>
<li><a href="maps-vector.html">Vector Map</a></li>
</ul>
</li> -->
<li><a href="calendar.html" class="waves-effect"><i class="dripicons-user-group"></i><span>Accounts</span></a></li>
</ul>
</div>
<div class="clearfix"></div>
</div>
<!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
<!-- Start right Content here -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <!-- Top Bar Start -->
    <!-- Top Bar End -->
    <div class="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="float-right page-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <h5 class="page-title">Dashboard</h5></div>
          </div>
          <!-- end row -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card mini-stat m-b-30">
                <div class="p-3 bg-primary text-white">
                  <div class="mini-stat-icon"><i class="mdi mdi-cube-outline float-right mb-0"></i></div>
                  <h6 class="text-uppercase mb-0">New Orders</h6></div>
                  <div class="card-body">
                    <div class="border-bottom pb-4"><span class="badge badge-success">+11% </span><span class="ml-2 text-muted">From previous period</span></div>
                    <div class="mt-4 text-muted">
                      <div class="float-right">
                        <p class="m-0">Last : 1325</p>
                      </div>
                      <h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                      <div class="mini-stat-icon"><i class="mdi mdi-account-network float-right mb-0"></i></div>
                      <h6 class="text-uppercase mb-0">New Users</h6></div>
                      <div class="card-body">
                        <div class="border-bottom pb-4"><span class="badge badge-success">+22% </span><span class="ml-2 text-muted">From previous period</span></div>
                        <div class="mt-4 text-muted">
                          <div class="float-right">
                            <p class="m-0">Last : 3426</p>
                          </div>
                          <h5 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h5></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                      <div class="card mini-stat m-b-30">
                        <div class="p-3 bg-primary text-white">
                          <div class="mini-stat-icon"><i class="mdi mdi-tag-text-outline float-right mb-0"></i></div>
                          <h6 class="text-uppercase mb-0">Average Price</h6></div>
                          <div class="card-body">
                            <div class="border-bottom pb-4"><span class="badge badge-danger">-02% </span><span class="ml-2 text-muted">From previous period</span></div>
                            <div class="mt-4 text-muted">
                              <div class="float-right">
                                <p class="m-0">Last : 15.8</p>
                              </div>
                              <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="card mini-stat m-b-30">
                            <div class="p-3 bg-primary text-white">
                              <div class="mini-stat-icon"><i class="mdi mdi-cart-outline float-right mb-0"></i></div>
                              <h6 class="text-uppercase mb-0">Total Sales</h6></div>
                              <div class="card-body">
                                <div class="border-bottom pb-4"><span class="badge badge-success">+10% </span><span class="ml-2 text-muted">From previous period</span></div>
                                <div class="mt-4 text-muted">
                                  <div class="float-right">
                                    <p class="m-0">Last : 14256</p>
                                  </div>
                                  <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end row -->

<!-- <form method="get" action="<?php  echo base_url('Rpmes_controller/Backend_Form1_Add'); ?>"><button type="submit" class="btn-primary">Add Record<i class="icon-plus"></i>
</button>
</form> --> 

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal_Add"> Add Record
</button>

<div class="modal" id="Modal_Add">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Form 1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="table-responsive">
          <form action="" method="post">
           <table class="table table-hover mb-0">

            <thead>
              <tr>
                <th>(a)Name of Project<br>
                  (b)Location<br>
                  (c)Sector/Subsector<br>
                  (d)Funding Source<br>
                  (e)Mode of Implementation<br>
                  (f)Project Schedule 
                </th>
                <!-- end -->
                <th>FS_JANUARY</th>
                <th>FS_FEBUARY</th>
                <th>FS_MARCH</th>
                <th>FS_APRIL</th>
                <th>FS_MAY</th>
                <th>FS_JUN</th>
                <th>FS_JULY</th>
                <th>FS_AUGUST</th>
                <th>FS_SEPTEMBER</th>
                <th>FS_OCTOBER</th>
                <th>FS_OVEMBER</th>
                <th>FS_DECEMBER</th>
                <th>FS_TOTAL</th>
                <!-- end -->
              <!-- <th>Percentage_JANUARY</th>
              <th>Percentage_FEBUARY</th>
              <th>Percentage_MARCH</th>
              <th>Percentage_APRIL</th>
              <th>Percentage_MAY</th>
              <th>Percentage_JUN</th>
              <th>Percentage_JULY</th>
              <th>Percentage_AUGUST</th>
              <th>Percentage_SEPTEMBER</th>
              <th>Percentage_OCTOBER</th>
              <th>Percentage_NOVEMBER</th>
              <th>Percentage_DECEMBER</th> -->
              <!-- end -->
              <!-- <th>OI_JANUARY</th>
              <th>OI_FEBUARY</th>
              <th>OI_MARCH</th>
              <th>OI_APRIL</th>
              <th>OI_MAY</th>
              <th>OI_JUN</th>
              <th>OI_JULY</th>
              <th>OI_AUGUST</th>
              <th>OI_SEPTEMBER</th>
              <th>OI_OCTOBER</th>
              <th>OI_NOVEMBER</th>
              <th>OI_DECEMBER</th> -->
              <!-- end -->
              <!-- <th>EG_JANUARY</th>
              <th>EG_FEBUARY</th>
              <th>EG_MARCH</th>
              <th>EG_APRIL</th>
              <th>EG_MAY</th>
              <th>EG_JUNE</th>
              <th>EG_JULY</th>
              <th>EG_AUGUST</th>
              <th>EG_SEPTEMBER</th>
              <th>EG_OCTOBER</th>
              <th>EG_NOVEMBER</th>
              <th>EG_DECEMBER</th> -->
            </tr>
            <tr align="center">
              <td>
                <a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
                  <label>FS</label>
                </a>
              </td>
              <td>
                <input type="text" name="FS_Jan" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Feb" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Mar" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Apr" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_May" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Jun" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Jul" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Aug" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Sep" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Oct" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Nov" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" name="FS_Dec" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control txtBox">
              </td>
              <td>
                <input type="text" id="FS_Total" name="FS_Total" value="0" readonly style=" -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none; -ms-user-select: none;user-select: none;cursor: no-drop; " class="form-control" >
              </td>
            </tr>
            <tr>
              <th></th>
              <th>Percentage_JANUARY</th>
              <th>Percentage_FEBUARY</th>
              <th>Percentage_MARCH</th>
              <th>Percentage_APRIL</th>
              <th>Percentage_MAY</th>
              <th>Percentage_JUN</th>
              <th>Percentage_JULY</th>
              <th>Percentage_AUGUST</th>
              <th>Percentage_SEPTEMBER</th>
              <th>Percentage_OCTOBER</th>
              <th>Percentage_NOVEMBER</th>
              <th>Percentage_DECEMBER</th>
              <th>Percentage_TOTAL</th>
            </tr>
            <tr align="center">
              <td>
                <a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
                  <label>Percentage</label>
                </a>
              </td>
              <td>
                <input type="text" name="Percentage_Jan" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Feb" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Mar" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Apr" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_May" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Jun" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Jul" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Aug" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Sep" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Oct" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Nov" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" name="Percentage_Dec" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control percentage_txtBox">
              </td>
              <td>
                <input type="text" id="Percentage_Total" name="Percentage_Total" value="0" readonly style=" -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none; -ms-user-select: none;user-select: none;cursor: no-drop; " class="form-control" >
              </td>
            </tr>
            <tr>
              <td></td>
              <th>OI_JANUARY</th>
              <th>OI_FEBUARY</th>
              <th>OI_MARCH</th>
              <th>OI_APRIL</th>
              <th>OI_MAY</th>
              <th>OI_JUN</th>
              <th>OI_JULY</th>
              <th>OI_AUGUST</th>
              <th>OI_SEPTEMBER</th>
              <th>OI_OCTOBER</th>
              <th>OI_NOVEMBER</th>
              <th>OI_DECEMBER</th>
            </tr>
            <tr align="center">
              <td>
                <a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
                  <label>OI</label>
                </a>
              </td>
              <td>
                <input type="text" name="OI_Jan" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Feb" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Mar" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Apr" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_May" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Jun" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Jul" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Aug" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Sep" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Oct" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Nov" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" name="OI_Dec" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control OI_txtBox">
              </td>
              <td>
                <input type="text" id="OI_Total" name="OI_Total" value="0" readonly style=" -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none; -ms-user-select: none;user-select: none;cursor: no-drop; " class="form-control" >
              </td>
            </tr>
            <tr>
              <th></th>
              <th>EG_JANUARY</th>
              <th>EG_FEBUARY</th>
              <th>EG_MARCH</th>
              <th>EG_APRIL</th>
              <th>EG_MAY</th>
              <th>EG_JUNE</th>
              <th>EG_JULY</th>
              <th>EG_AUGUST</th>
              <th>EG_SEPTEMBER</th>
              <th>EG_OCTOBER</th>
              <th>EG_NOVEMBER</th>
              <th>EG_DECEMBER</th>
            </tr>
            <tr align="center">
              <td>
                <a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
                  <label>EG Male</label>
                </a>
              </td>
              <td>
                <input type="text" name="EG_M_Jan" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Feb" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Mar" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Apr" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_May" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Jun" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Jul" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Aug" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Sep" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Oct" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Nov" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" name="EG_M_Dec" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_M_txtBox">
              </td>
              <td>
                <input type="text" id="EG_M_Total" name="EG_M_Total" value="0" readonly style=" -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none; -ms-user-select: none;user-select: none;cursor: no-drop; " class="form-control" >
              </td>
            </tr>
            <tr align="center">
              <td>
                <a data-toggle="tooltip" title="Amount programmed for activities scheduled for implementation for the month.">
                  <label>EG Female</label>
                </a>
              </td>
              <td>
                <input type="text" name="EG_F_Jan" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Feb" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Mar" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Apr" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_May" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Jun" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Jul" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Aug" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Sep" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Oct" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Nov" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" name="EG_F_Dec" autocomplete="off" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control EG_F_txtBox">
              </td>
              <td>
                <input type="text" id="EG_F_Total" name="EG_F_Total" value="0" readonly style=" -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none; -ms-user-select: none;user-select: none;cursor: no-drop; " class="form-control" >
              </td>
            </tr>
            <tr>
              <td colspan="14">&nbsp;</td>
              <td><button type="submit" class="btn btn-success" style="position: absolute;left: 370px;top: 693px;" class="btn-success"> Add Record
              </button></td>
              <td colspan="14"><button type="button" class="btn btn-warning" data-dismiss="modal" style="position: absolute;left: 665px;top: 693px;width: 110px;">Cancel</button></td>
            </tr>
          </thead>

        </table>
  <!-- <button type="button" class="btn btn-success" style="position: absolute;
  left: 370px;
  top: 693px;" class="btn-success"> Add Record
</button> -->

<!-- <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button> -->

</form>
</div>
</div>

</div>
</div>
</div>
<br><br>
<div class="row">
  <div class="col-xl-12">
    <div class="card m-b-30">
      <div class="card-body">
        <h4 class="mt-0 header-title mb-4">Recent Candidates</h4>

        <?php if(!is_null($this->session->flashdata('SUCCESSMSG_DELETE'))) { ?>
          <div role="alert" class="alert alert-danger">
            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <?=$this->session->flashdata('SUCCESSMSG_DELETE')?>
          </div>
        <?php } ?>

        <?php if(!is_null($this->session->flashdata('SUCCESSMSG_ADD'))) { ?>
          <div role="alert" class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <?=$this->session->flashdata('SUCCESSMSG_ADD')?>
          </div>
        <?php } ?>
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th>(a)Name of Project<br>
                  (b)Location<br>
                  (c)Sector/Subsector<br>
                  (d)Funding Source<br>
                  (e)Mode of Implementation<br>
                  (f)Project Schedule 
                </th>
                <!-- end -->
                <th>FS_JANUARY</th>
                <th>FS_FEBUARY</th>
                <th>FS_MARCH</th>
                <th>FS_APRIL</th>
                <th>FS_MAY</th>
                <th>FS_JUN</th>
                <th>FS_JULY</th>
                <th>FS_AUGUST</th>
                <th>FS_SEPTEMBER</th>
                <th>FS_OCTOBER</th>
                <th>FS_OVEMBER</th>
                <th>FS_DECEMBER</th>
                <!-- end -->
                <th>Percentage_JANUARY</th>
                <th>Percentage_FEBUARY</th>
                <th>Percentage_MARCH</th>
                <th>Percentage_APRIL</th>
                <th>Percentage_MAY</th>
                <th>Percentage_JUN</th>
                <th>Percentage_JULY</th>
                <th>Percentage_AUGUST</th>
                <th>Percentage_SEPTEMBER</th>
                <th>Percentage_OCTOBER</th>
                <th>Percentage_NOVEMBER</th>
                <th>Percentage_DECEMBER</th>
                <!-- end -->
                <th>OI_JANUARY</th>
                <th>OI_FEBUARY</th>
                <th>OI_MARCH</th>
                <th>OI_APRIL</th>
                <th>OI_MAY</th>
                <th>OI_JUN</th>
                <th>OI_JULY</th>
                <th>OI_AUGUST</th>
                <th>OI_SEPTEMBER</th>
                <th>OI_OCTOBER</th>
                <th>OI_NOVEMBER</th>
                <th>OI_DECEMBER</th>
                <!-- end -->
                <th>EG_JANUARY</th>
                <th>EG_FEBUARY</th>
                <th>EG_MARCH</th>
                <th>EG_APRIL</th>
                <th>EG_MAY</th>
                <th>EG_JUNE</th>
                <th>EG_JULY</th>
                <th>EG_AUGUST</th>
                <th>EG_SEPTEMBER</th>
                <th>EG_OCTOBER</th>
                <th>EG_NOVEMBER</th>
                <th>EG_DECEMBER</th>
                <th colspan="2" style="text-align:center;">ACTION</th>
              </tr>
            </thead>
            <tbody align="center">
             <?php    if(!empty($getForm1))
             {
              foreach ($getForm1 as $value)
                { ?>
                  <tr>
                    <td>
                      (a)"<?=$value->ProgramName?>"<br/>
                      (b)"<?=$value->Location?>"<br/>
                      (c)"<?=$value->Sector?>"<br/>
                      (d)"<?=$value->FundingSource?>"<br/>
                      (e)"<?=$value->ModeOfImplementation?>"<br/>
                      (f)From "<?=$value->ProjectScheduleStart?>"<br/>
                      To <br>"<?=$value->ProjectScheduleEnd?>"
                    </td>
                    <!-- end -->
                    <td>"<?=$value->FS_Jan?>"</td>
                    <td>"<?=$value->FS_Feb?>"</td>
                    <td>"<?=$value->FS_Mar?>"</td>
                    <td>"<?=$value->FS_Apr?>"</td>
                    <td>"<?=$value->FS_May?>"</td>
                    <td>"<?=$value->FS_Jun?>"</td>
                    <td>"<?=$value->FS_Jul?>"</td>
                    <td>"<?=$value->FS_Aug?>"</td>
                    <td>"<?=$value->FS_Sep?>"</td>
                    <td>"<?=$value->FS_Oct?>"</td>
                    <td>"<?=$value->FS_Nov?>"</td>
                    <td>"<?=$value->FS_Dec?>"</td>
                    <!-- end -->
                    <td>"<?=$value->Percentage_Jan?>"%</td>
                    <td>"<?=$value->Percentage_Feb?>"%</td>
                    <td>"<?=$value->Percentage_Mar?>"%</td>
                    <td>"<?=$value->Percentage_Apr?>"%</td>
                    <td>"<?=$value->Percentage_May?>"%</td>
                    <td>"<?=$value->Percentage_Jun?>"%</td>
                    <td>"<?=$value->Percentage_Jul?>"%</td>
                    <td>"<?=$value->Percentage_Aug?>"%</td>
                    <td>"<?=$value->Percentage_Sep?>"%</td>
                    <td>"<?=$value->Percentage_Oct?>"%</td>
                    <td>"<?=$value->Percentage_Nov?>"%</td>
                    <td>"<?=$value->Percentage_Dec?>"%</td>
                    <!-- end -->
                    <td>"<?=$value->OI_Jan?>"</td>
                    <td>"<?=$value->OI_Feb?>"</td>
                    <td>"<?=$value->OI_Mar?>"</td>
                    <td>"<?=$value->OI_Apr?>"</td>
                    <td>"<?=$value->OI_May?>"</td>
                    <td>"<?=$value->OI_Jun?>"</td>
                    <td>"<?=$value->OI_Jul?>"</td>
                    <td>"<?=$value->OI_Aug?>"</td>
                    <td>"<?=$value->OI_Sep?>"</td>
                    <td>"<?=$value->OI_Oct?>"</td>
                    <td>"<?=$value->OI_Nov?>"</td>
                    <td>"<?=$value->OI_Dec?>"</td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Jan?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Jan?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Feb?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Feb?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Mar?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Mar?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Apr?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Apr?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_May?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_May?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Jun?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Jun?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Jul?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Jul?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Aug?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Aug?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Sep?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Sep?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Oct?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Oct?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Nov?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Nov?>
                    </td>
                    <td>
                      Male:&nbsp;&nbsp;<?=$value->EG_M_Dec?>
                      <br>
                      Female:&nbsp;&nbsp;<?=$value->EG_F_Dec?>
                    </td>
                    <td rowspan="1"><?= anchor(''.$value->ID_Form1, 'UPDATE', array("class" => "btn-warning"));?>
                  </td>

                  <!-- <td rowspan="1"><?= anchor('Rpmes_controller/Form1_Delete?ID_Form1='.$value->ID_Form1, 'DELETE',array("class" => "btn-danger"));?></td> -->

                  <td>
                                          <!-- <form method="get" action="<?php  echo base_url('Rpmes_controller/Backend_Form1_Delete'); ?>">  
                                              <input type="hidden" name="ID_Form1" value="<?= $value->ID_Form1 ?>">
                                              <button type="submit" class="btn-danger">Delete<i class="icon-plus"></i></button>
                                            </form> -->

                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal_Delete">
                                              Delete
                                            </button>

                                            <!-- The Modal -->
                                            <div class="modal" id="Modal_Delete">
                                              <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                    <h4 class="modal-title">Are you sure</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>

                                                  <!-- Modal body -->
                                                  <div class="modal-body">

                                                    <form method="post" action="<?php  echo base_url('Rpmes_controller/Backend_Form1_Delete'); ?>">  
                                                      <input type="hidden" name="ID_Form1" value="<?= $value->ID_Form1 ?>">

                                                      <button type="submit" class="btn btn-danger" style="margin-right:50px;">Delete</button>
                                                    </form>

                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>



                                                    <!-- <button type="submit" class="btn-danger">Delete<i class="icon-plus"></i></button> -->
                                                  </form>
                                                </div>

                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                      <?php   }
                                    }?>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- container fluid -->
                </div>
                <!-- Page content Wrapper -->
              </div>
              <!-- content -->
              <footer class="footer">© 2018 <b>Drixo</b> <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span></footer>
            </div>
            <!-- End Right content here -->
          </div>

          <script type="text/javascript">

            $(document).ready(function(){
              var FS_Total = 0;
              $('.txtBox').keyup(function(){
                $('.txtBox').each(function() {
                  var txtBoxVal = $(this).val();
                  FS_Total = FS_Total + Number(txtBoxVal);
                });
                $('#FS_Total').val(FS_Total);
                FS_Total = 0;
              });
            });

            $(document).ready(function(){
              var Percentage_Total = 0;
              $('.percentage_txtBox').keyup(function(){
                $('.percentage_txtBox').each(function() {
                  var txtBoxVal = $(this).val();
                  Percentage_Total = Percentage_Total + Number(txtBoxVal);
                });
                $('#Percentage_Total').val(Percentage_Total);
                Percentage_Total = 0;
              });
            });

            $(document).ready(function(){
              var OI_Total = 0;
              $('.OI_txtBox').keyup(function(){
                $('.OI_txtBox').each(function() {
                  var txtBoxVal = $(this).val();
                  OI_Total = OI_Total + Number(txtBoxVal);
                });
                $('#OI_Total').val(OI_Total);
                OI_Total = 0;
              });
            });

            $(document).ready(function(){
              var EG_M_Total = 0;
              $('.EG_M_txtBox').keyup(function(){
                $('.EG_M_txtBox').each(function() {
                  var txtBoxVal = $(this).val();
                  EG_M_Total = EG_M_Total + Number(txtBoxVal);
                });
                $('#EG_M_Total').val(EG_M_Total);
                EG_M_Total = 0;
              });
            });

            $(document).ready(function(){
              var EG_F_Total = 0;
              $('.EG_F_txtBox').keyup(function(){
                $('.EG_F_txtBox').each(function() {
                  var txtBoxVal = $(this).val();
                  EG_F_Total = EG_F_Total + Number(txtBoxVal);
                });
                $('#EG_F_Total').val(EG_F_Total);
                EG_F_Total = 0;
              });
            });
          </script>   

          <script type="text/javascript">
            $('.pane-hScroll').scroll(function() {
              $('.pane-vScroll').width($('.pane-hScroll').width() + $('.pane-hScroll').scrollLeft());
            });

          </script>
          <!-- END wrapper -->
          <!-- jQuery  -->
          <!-- Mirrored from themesdesign.in/drixo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Apr 2019 02:45:36 GMT -->
          </html>
