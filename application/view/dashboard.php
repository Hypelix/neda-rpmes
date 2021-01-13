<?php
$this->load->view('header/admin_header');
?>

<div class="container-fluid">
  <div class="row ">
    <div class="col-xl-3 col-md-6">
      <div class="card mini-stat m-b-30">
        <div class="p-3 bg-primary text-white">
          <div class="mini-stat-icon"><i class="mdi mdi-cube-outline float-right mb-0"></i></div>
          <h6 class="text-uppercase mb-0">New Orders</h6>
        </div>
        <div class="card-body">
          <div class="border-bottom pb-4"><span class="badge badge-success">+11% </span><span
            class="ml-2 text-muted">From previous period</span></div>
            <div class="mt-4 text-muted">
              <div class="float-right">
                <p class="m-0">Last : 1325</p>
              </div>
              <h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
          <div class="p-3 bg-primary text-white">
            <div class="mini-stat-icon"><i class="mdi mdi-account-network float-right mb-0"></i></div>
            <h6 class="text-uppercase mb-0">New Users</h6>
          </div>
          <div class="card-body">
            <div class="border-bottom pb-4"><span class="badge badge-success">+22% </span><span
              class="ml-2 text-muted">From previous period</span></div>
              <div class="mt-4 text-muted">
                <div class="float-right">
                  <p class="m-0">Last : 3426</p>
                </div>
                <h5 class="m-0"><?php
                if (isset($row)) {
                  echo $row['id'];
                }
                ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
              <div class="mini-stat-icon"><i class="mdi mdi-tag-text-outline float-right mb-0"></i></div>
              <h6 class="text-uppercase mb-0">Total Archive</h6>
            </div>
            <div class="card-body">
              <div class="border-bottom pb-4"><span class="badge badge-danger">-02% </span><span
                class="ml-2 text-muted">From previous period</span></div>
                <div class="mt-4 text-muted">
                  <div class="float-right">
                    <p class="m-0">Last : 15.8</p>
                  </div>
                  <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
              <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon"><i class="mdi mdi-cart-outline float-right mb-0"></i></div>
                <h6 class="text-uppercase mb-0">Total Projects</h6>
              </div>
              <div class="card-body">
                <div class="border-bottom pb-4"><span class="badge badge-success">+10% </span><span
                  class="ml-2 text-muted">From previous period</span></div>
                  <div class="mt-4 text-muted">
                    <div class="float-right">
                      <p class="m-0">Last : 14256</p>
                    </div>
                    <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                  </div>


                </div>

              </div>

            </div>

            <div class="col-xl-12 col-md-6 w-100">
              <h2>Activity Logs</h2>
              <div class="card mini-stat m-b-30">
                <!-- <Label style="font-size:200%">Logs</Label> -->
                <table>
                  <tr>
                    <td><samp class="form-control"
                      style="width:1552px;height:500px;background:#FFFFFF;border: 3px solid #ccc;display:block;overflow:auto;">


                      <?php 
                      if (!empty($getLogs)) {
                        foreach ($getLogs as $value){ 
                          ?>

                          <div class="alert alert-info" role="alert">
                            <hr>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h5><?= $value->text ?></h5> <h6>[<?= date('M d, Y @ h:i:a', strtotime($value->datelogs)); ?>]</h6>
                            <hr>
                            <strong>

                            </strong>
                          </div>

                          <?php   
                        }
                      } 
                      ?>

                      
                    </samp>
                  </td>
                </tr>
              </table>

            </div>
            <a href="<?= base_url('Rpmes_controller/AllActivityLogs') ?>" style="float: right;">Show all Activity Logs</a>
          </div>




        </div>


      </div>
    </body>
    </html>