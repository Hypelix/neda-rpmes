<?php
$this->load->view('header/admin_header');
?>

<div class="container-fluid">
  <div class="row ">



    <div class="col-xl-12 col-md-6 w-100">
      <h2>All Activity Logs</h2>
      <div class="card mini-stat m-b-30">
        <!-- <Label style="font-size:200%">Logs</Label> -->
        <table>
          <tr>
            <td><samp class="form-control"
              style="width:1552px;height:480px;background:#FFFFFF;border: 3px solid #ccc;display:block;overflow:auto;">


              <?php 
              if (!empty($getAllActivityLogs)) {
                foreach ($getAllActivityLogs as $value){ 
                  ?>

                  <div class="alert alert-logs" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h5><?= $value->text ?><br></h5>
                    <hr>
                    <h6>IP REMOTE ADDRESS: <?= $value->Remote_IP_Address ?><br></h6>
                    <hr>
                    <h6>MAC REMOTE ADDRESS: <?= $value->Remote_Mac_Address ?><br></h6>
                    <hr>
                    <strong>
                      <h6>[<?= date('M d, Y @ h:i:a', strtotime($value->datelogs)); ?>]</h6>
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


  </div>
</body>
</html>