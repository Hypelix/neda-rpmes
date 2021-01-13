<?php
$this->load->view('header/admin_header');
?>

<div class="container-fluid">

  <div class="mt-4">
    <button id="addBtn" class="btn btn-outline-success waves-effect fa fa-plus">&nbsp;Add Users</button>
    <br><br><br>
    <table id="usersTable" class="table table-bordered table-hover nowrap w-100" style="text-align:center;">

      <thead>

        <tr>

          <th style="width:11%;">First Name</th>
          <th style="width:11%;">Middle Name</th>
          <th style="width:11%;">Last Name</th>
          <th style="width:11%;">Office</th>
          <th style="width:11%;">Email</th>
          <th style="width:11%;">Username</th>
          <th style="width:11%;">Password</th>
          <th style="width:11%;">Active</th>
          <th style="width:11%;">Agency</th>
          <th style="width:11%;">Action</th>
        </tr>
      </thead>
    </table>

  </div>
</div>


<!-- Modal Add-->
<div class='modal fade' id='AddUserModal' role='dialog'>
  <div class='modal-dialog modal-lg'>
    <!-- Modal content-->
    <form class='modal-content' id='addForm' action="">
      <div class='modal-header'>
        <label>Register User</label>
        <h4 class='modal-title'></h4>
      </div>
      <div class='modal-body'>
        <label>First Name : </label><input required type='text' class='form-control' name='FName' id='FName' value='' />
        <label>Middle Name : </label><input required type='text' class='form-control' name='MName' id='MName' value='' />
        <label>Last Name : </label><input required type='text' class='form-control' name='LName' id='LName' value='' />
        <label>Office : </label><input required type='text' class='form-control' name='Office' id='Office' value='' />
        <label>Email : </label><input required type='email' class='form-control' name='Email' id='Email' value='' />
        <label>Username : </label><input required type='text' class='form-control' name='UName' id='UName' value='' />
        <label>Password : </label><input required type='password' class='form-control' name='Pwd' id='Pwd' value='' />
        <label>Agency</label>
        <select name="Agency" class="form-control">
          <option value="">Select Agency . . .</option>
          <?php

          if (!empty($getAgency)) {

            foreach ($getAgency as $value) { ?>

              <option value="<?= $value->ID_Agency ?>"><?= $value->Agency_Name ?></option>
              <?php
            }
          } ?>
        </select>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-success'>Save Changes</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Update-->
<div class='modal fade' id='UpdateUserModal' role='dialog'>
  <div class='modal-dialog modal-lg'>
    <!-- Modal content-->
    <form class='modal-content' id='updateForm' action="">
      <div class='modal-header'>
        <label>Update User</label>
        <h4 class='modal-title'></h4>
      </div>
      <div class='modal-body'>
        <input type='hidden' class='form-control' name='ID_User' id='ID_User' value='' />
        <label>First Name : </label><input required type='text' class='form-control' name='FName' id='FName' value='' />
        <label>Middle Name : </label><input required type='text' class='form-control' name='MName' id='MName' value='' />
        <label>Last Name : </label><input required type='text' class='form-control' name='LName' id='LName' value='' />
        <label>Office : </label><input required type='text' class='form-control' name='Office' id='Office' value='' />
        <label>Email : </label><input required type='email' class='form-control' name='Email' id='Email' value='' />
        <label>Username : </label><input required type='text' class='form-control' name='UName' id='UName' value='' />
        <label>Password : </label><input required type='password' class='form-control' name='Pwd' id='Pwd' value='' />
        <label>Agency</label>
        <select name="Agency" class="form-control" id="Agency">
          <option value="">Select Agency . . .</option>
          <?php

          if (!empty($getAgency)) {

            foreach ($getAgency as $value) { ?>

              <option value="<?= $value->ID_Agency ?>"><?= $value->Agency_Name ?></option>
              <?php
            }
          } ?>
        </select>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-success'>Save Changes</button>
      </div>
    </form>
  </div>
</div>

<script>
  $(document).ready(function() {
    var usersTable = $('#usersTable').DataTable({
      "fixedColumns": true,      // "iDisplayLength": 100,
      // "aLengthMenu": [[100, 200, 300, 500], [100, 200, 300, 500]],
      // "select": true,
      "responsive": true,
      // dom: '<"ButtonStuff"B><"FilterStuff"f>t',
      "bProcessing": true,
      "serverSide": true,


      // "searching": false,
      // "paging": false,
      // "bInfo": false,

      "ajax": {
        "url": "<?= base_url('Rpmes_controller/UsersTableRecord') ?>",
        "type": "POST"
      },
      columns: [{
        render: function(data, type, value) {
          return value["FName"];
        }
      }, {
        render: function(data, type, value) {
          return value["MName"];
        }
      }, {
        render: function(data, type, value) {
          return value["LName"];
        }
      }, {
        render: function(data, type, value) {
          return value["Office"];
        }
      }, {
        render: function(data, type, value) {
          return value["Email"];
        }
      }, {
        render: function(data, type, value) {
          return value["UName"];
        }
      }, {
        render: function(data, type, value) {
          return "*********";
        },
        "orderable": false
      }, {
        render: function(data, type, value) {
          if (value["Confirmed"] == '0') {
            return "Active";
          } else {
            return "Not Active";
          }
        }
      }, {
        render: function(data, type, value) {
          return value["Agency_Name"];
        }
      }, {
        render: function(data, type, value) {

          var buttons = "<button type='button' class='btn btn-outline-warning fa fa-edit' id='updateBtn' data-id='" + value["ID_User"] + "'>&nbsp;Update</button>" + "&nbsp;" +
          "<button type='button' class='btn btn-outline-danger fa fa-trash' id='deleteBtn' data-id='" + value["ID_User"] + "'>&nbsp;Delete</button>"+ "&nbsp;" + "<button class='btn btn-outline-danger fa fa-ban' id='disableBtn' data-id='" + value["ID_User"] + "'>&nbsp;Disable</button>"+"&nbsp;"+"<button class='btn btn-outline-success fa fa-power-off  ' id='enableBtn' data-id='" + value["ID_User"] + "'>&nbsp;Enable</button>";
          return buttons;
        },
        "orderable": false
      }]
    });

    $("#usersTable").on("click", "#updateBtn", function() {
      $("#UpdateUserModal").modal("show");
      var data = usersTable.row($(this).parents('tr')).data();
      var id = $(this).data('id');
      // alert(data["FName"]);
      $("#UpdateUserModal #ID_User").val(id);
      $("#UpdateUserModal #FName").val(data["FName"]);
      $("#UpdateUserModal #MName").val(data["MName"]);
      $("#UpdateUserModal #LName").val(data["LName"]);
      $("#UpdateUserModal #Office").val(data["Office"]);
      $("#UpdateUserModal #Email").val(data["Email"]);
      $("#UpdateUserModal #UName").val(data["UName"]);
      $("#UpdateUserModal #Pwd").val(data["Pwd"]);
      $("#UpdateUserModal #Agency").val(data["ID_Agency"]);
    });



    $("#addBtn").on("click", function() {
      $("#AddUserModal").modal("show");
    });


    $("#usersTable").on("click", "#deleteBtn", function() {
      var id = $(this).data('id');
      // $("#disableBtn").val(data["Confirmed"]);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'error',
        showCancelButton: true,
        confirmButtonColor: '#5cb85c',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: "<?= base_url("Rpmes_controller/Archive_User") ?>",
            data: {
              "ID_User": id,
              "Archive": 1,
              "Confirmed": 1
            },
            dataType: "JSON",
            method: "POST",

            success: function(data) {
              // alert(data.message);
              Swal.fire(
                        data.message,
                        '',
                        'success'
                        )
              usersTable.ajax.reload();
            }
          });
        }
      })
    });



    $("#usersTable").on("click", "#disableBtn", function() {
      var id = $(this).data('id');
      // $("#disableBtn").val(data["Confirmed"]);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'error',
        showCancelButton: true,
        confirmButtonColor: '#5cb85c',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, disable it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: "<?= base_url("Rpmes_controller/Disable_User") ?>",
            data: {
              "ID_User": id,
              "Confirmed": 1
            },
            dataType: "JSON",
            method: "POST",

            success: function(data) {
              // alert(data.message);
              Swal.fire(
                        data.message,
                        '',
                        'success'
                        )
              usersTable.ajax.reload();
            }
          });
        }
      })
    });


    $("#usersTable").on("click", "#enableBtn", function() {
      var id = $(this).data('id');
      // $("#disableBtn").val(data["Confirmed"]);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'error',
        showCancelButton: true,
        confirmButtonColor: '#5cb85c',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Enable it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: "<?= base_url("Rpmes_controller/Enable_User") ?>",
            data: {
              "ID_User": id,
              "Confirmed": 0
            },
            dataType: "JSON",
            method: "POST",

            success: function(data) {
              // alert(data.message);
              Swal.fire(
                        data.message,
                        '',
                        'success'
                        )
              usersTable.ajax.reload();
            }
          });
        }
      })
    });

    $("#updateForm").on("submit", function(event) {
      $("#UpdateUserModal").modal("hide");
      event.preventDefault();
      $.ajax({
        url: "<?= base_url("Rpmes_controller/Update_User") ?>",
        data: $(this).serialize(),
        dataType: "JSON",
        method: "POST",
        success: function(data) {
          // alert(data.message);
          Swal.fire({
            type: 'success',
            title: data.message
          })

          usersTable.ajax.reload();
        }
      });
    })

    $("#addForm").on("submit", function(event) {
      $("#AddUserModal").modal("hide");
      event.preventDefault();
      $.ajax({
        url: "<?= base_url("Rpmes_controller/Add_User") ?>",
        data: $(this).serialize(),
        dataType: "JSON",
        method: "POST",
        success: function(data) {
          // alert(data.message);
          Swal.fire({
            type: 'success',
            title: data.message
          })
          usersTable.ajax.reload();
        }
      });
    })


  });
</script>
</body>

</html>