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
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="card m-b-30">
                                                                <div class="card-body">
                                                                    <h4 class="mt-0 header-title mb-4">Recent Candidates</h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover mb-0">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name</th>
                                                                                    <th>Position</th>
                                                                                    <th>Office</th>
                                                                                    <th>Age</th>
                                                                                    <th>Start date</th>
                                                                                    <th>Salary</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Tiger Nixon</td>
                                                                                    <td>System Architect</td>
                                                                                    <td>Edinburgh</td>
                                                                                    <td>61</td>
                                                                                    <td>2017/04/25</td>
                                                                                    <td>$320,800</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Garrett Winters</td>
                                                                                    <td>Accountant</td>
                                                                                    <td>Tokyo</td>
                                                                                    <td>63</td>
                                                                                    <td>2017/07/25</td>
                                                                                    <td>$170,750</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Ashton Cox</td>
                                                                                    <td>Junior Technical Author</td>
                                                                                    <td>San Francisco</td>
                                                                                    <td>66</td>
                                                                                    <td>2015/01/12</td>
                                                                                    <td>$86,000</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Cedric Kelly</td>
                                                                                    <td>Senior Javascript Developer</td>
                                                                                    <td>Edinburgh</td>
                                                                                    <td>22</td>
                                                                                    <td>2018/03/29</td>
                                                                                    <td>$433,060</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Airi Satou</td>
                                                                                    <td>Accountant</td>
                                                                                    <td>Tokyo</td>
                                                                                    <td>33</td>
                                                                                    <td>2014/11/28</td>
                                                                                    <td>$162,700</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Brielle Williamson</td>
                                                                                    <td>Integration Specialist</td>
                                                                                    <td>New York</td>
                                                                                    <td>61</td>
                                                                                    <td>2018/12/02</td>
                                                                                    <td>$372,000</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Herrod Chandler</td>
                                                                                    <td>Sales Assistant</td>
                                                                                    <td>San Francisco</td>
                                                                                    <td>59</td>
                                                                                    <td>2018/08/06</td>
                                                                                    <td>$137,500</td>
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
                                <!-- END wrapper -->
                                <!-- jQuery  -->
                                <!-- Mirrored from themesdesign.in/drixo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Apr 2019 02:45:36 GMT -->
                                </html>
