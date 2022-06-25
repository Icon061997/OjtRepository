<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Boxicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/navside.css">
  <!-- chart import -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <title>Customers</title>
</head>

<style>
  input,
  select {
    width: 200px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid grey;
    outline-color: royalblue;

  }

  .form-group {
    margin-bottom: 8px;
  }


  input:hover,
  textarea:hover,
  select:hover {
    border: 2px solid royalblue;
  }

  select {
    border-radius: 5px;
    outline-color: royalblue;
    border: 2px solid grey;


  }

  body .dark {
    --light: #0C0C1E;
    --grey: #060714;
    --dark: #FBFBFB;
  }

  textarea {
    width: 200px;
    height: 100px;
    border-radius: 5px;
    outline-color: royalblue;
    border: 2px solid grey;
  }

  td {

    border: 1px solid var(--dark-grey);
    border-top: none;
    border-left: none;
    border-right: none;

  }

  thead {
    border: solid var(--dark);
    border-top: none;
    border-left: none;
    border-right: none;
    width: 36px;
    height: 36px;
  }

  i.icon:hover {
    color: blue;
  }

  .icon {
    padding: 3px;
    font-size: 24px;
  }
</style>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="dashboard.php" class="brand">
      <i class='bx bxl-shopify' style="font-size: 40px;"></i>
      <span class="text" style="font-family: var(--poppins);">EzShop</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="dashboard.php">
          <i class='bx bxs-dashboard'></i>
          <span class="text" style="font-family: var(--poppins);">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="sales.php">
          <i class='bx bx-coin-stack'></i>
          <span class="text" style="font-family: var(--poppins);">Sales</span>
        </a>
      </li>
      <li>
        <a href="reports.php">
          <i class='bx bxs-report'></i>
          <span class="text" style="font-family: var(--poppins);">Reports</span>
        </a>
      </li>
      <li>
        <a href="items.php">
          <i class='bx bx-package'></i>
          <span class="text" style="font-family: var(--poppins);">Items</span>
        </a>
      </li>
      <li>
        <a href="categories.php">
          <i class='bx bx-category-alt'></i>
          <span class="text" style="font-family: var(--poppins);">Categories</span>
        </a>
      </li>
      <li class="active">
        <a href="customers.php">
          <i class='bx bx-face'></i>
          <span class="text" style="font-family: var(--poppins);">Customers</span>
        </a>
      </li>

      <li>
        <a href="suppliers.php  ">
          <i class='bx bxs-truck'></i>
          <span class="text" style="font-family: var(--poppins);">Supplier</span>
        </a>
      </li>
      <li>
        <a href="settings.php">
          <i class='bx bx-cog'></i>
          <span class="text" style="font-family: var(--poppins);">Settings</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->


  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu'></i>

      <form action="#">
        <div class="form-input">

        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>

      <div class="dropdown">
        <button class="notification" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none; background: none;">
          <i class='bx bxs-bell'></i>
          <span class="num">8</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
          <a class="dropdown-item" href=""><b>Notification: </b> New added Costumer</button>
            <a class="dropdown-item" href=""><b>Notification: </b> New Item added</a>
            <a class="dropdown-item" href=""><b>Notification: </b> new Item added</a>
        </div>
      </div>


      <div class="dropdown-nav">
        <div class="dropdown">
          <button class="dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="images/user.png" class="profile-pic" alt="">
            <div class="username admin">
              <b>Jimuel Leal</b><br> Admin
            </div>
            <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
          </button>


          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2" style="min-width: 140px;">
            <a class=" dropdown-item" href="account.php"><i class='bx bxs-user'></i> My Account</a>
            <a class="dropdown-item" href="logout.php"><i class='bx bx-log-out bx-rotate-180'></i> Logout</a>
            </ul>
          </div>
        </div>
      </div>

    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>

      <div class="table-data">
        <div class="order">
          <div class="col-12 my-2">
            <div class="row my-2">
              <div class="head">
                <h3>Customers</h3>
              </div>
              <div class="col-sm-auto col-form-label">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#modaladdcostumer"><i class="bx bx-add"></i> Add Customers</button>
              </div>
            </div>
          </div>
          <hr>



          <!-- *************************tablee *********************************************8-->


          <?php
          $conn = mysqli_connect("localhost", "root", "");
          $db = mysqli_select_db($conn, 'pointofsale');
          $query = "SELECT * FROM customers";
          $query_run = mysqli_query($conn, $query);
          ?>
          <table id="data-table">

            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Tel No.</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <?php
            if ($query_run) {
              foreach ($query_run as $row) {
            ?>
                <tbody>

                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telno']; ?></td>
                    <td><?php echo $row['mobileno']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                      <a class="editbtn"><i class="bx bx-pencil icon"></i> </a>
                      <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>" onclick="remmove()">
                      <a href="javascript:void(0)"> <i class="bx bx-trash icon delete_btn_ajax"></i></a>

                    </td>


                  </tr>

                </tbody>
            <?php }
            } else {
              echo "No Record Found";
            } ?>
          </table>
        </div>
      </div>

      <!-- ******************************************************************** -->
      <div class="modal fade modal-static" id="modaladdcostumer" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> ADD COSTUMER </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="config.php" method="POST">

              <div class="modal-body">
                <div class="container">


                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Name:</div>
                    <input class="col-sm-7 pos-input" type="text" name="name" required>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-5 col-form-label">Gender:</div>
                    <select class=" col-sm-7 pos-input" aria-label=".form-select-lg example" name="gender">
                      <option value="1">Select</option>
                      <option value="2">Male</option>
                      <option value="3">Female</option>
                    </select>
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Email:</div>
                    <input class="col-sm-7 pos-input" type="email" name="email" required>
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Tel No.:</div>
                    <input class="col-sm-7 pos-input" type="text" name="telno" required>
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Mobile No.:</div>
                    <input class="col-sm-7 pos-input" type="text" name="mobileno" required>
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Address:</div>
                    <textarea class="col-sm-7" type="text" name="address" required></textarea>
                  </div>

                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" name="insertdata" class="btn btn-success">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>




      <!-- for editing -->
      <div class="modal fade modal-static" id="modaleditcostumer" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> Edit Costumer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="config.php" method="POST">

              <div class="modal-body">
                <div class="container">
                  <form action="" method="">

                    <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group row mb-2">
                      <div class="col-sm-5 col-form-label">Name:</div>
                      <input class="col-sm-7 pos-input" type="text" name="name" id="name">
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-5 col-form-label">Gender:</div>
                      <input class="col-sm-7 pos-input" type="text" name="gender" id="gender">
                    </div>

                    <div class="form-group row mb-2">
                      <div class="col-sm-5 col-form-label">Email:</div>
                      <input class="col-sm-7 pos-input" type="email" name="email" id="email">
                    </div>

                    <div class="form-group row mb-2">
                      <div class="col-sm-5 col-form-label">Tel No.:</div>
                      <input class="col-sm-7 pos-input" type="text" name="telno" id="telno">
                    </div>

                    <div class="form-group row mb-2">
                      <div class="col-sm-5 col-form-label">Mobile No.:</div>
                      <input class="col-sm-7 pos-input" type="text" name="mobileno" id="mobileno">
                    </div>

                    <div class="form-group row mb-2">
                      <div class="col-sm-5 col-form-label">Address:</div>
                      <textarea class="col-sm-7" type="text" name="address" id="address"></textarea>
                    </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </section>





  <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropdown-btn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <?php
  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  ?>
    <script>
      swal({
        text: "<?php echo $_SESSION['status']; ?>",
        icon: "<?php echo $_SESSION['status_code']; ?>",
        button: false,
        timer: 800,

      });
    </script>
  <?php
    unset($_SESSION['status']);
  }
  ?>


  <script>
    $(document).ready(function() {

      $('.delete_btn_ajax').click(function(e) {
        e.preventDefault();

        var deleteid = $(this).closest("tr").find('.delete_id_value').val();

        swal({

            text: " Are you sure you want to delete this?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {

              $.ajax({
                type: "POST",
                url: "config.php",
                data: {
                  "delete_btn_set": 1,
                  "id": deleteid,
                },
                success: function(response) {
                  swal("Data Deleted Successfully.!", {
                    icon: "success",
                    button: false,
                    timer: 800,
                  }).then((result) => {
                    location.reload();
                  });
                }
              });
            }
          });
      });

    });
  </script>
  <script>
    function fun() {
      document.getElementById("name").value = '';
      document.getElementById("gender").value = '';
      document.getElementById("email").value = '';
      document.getElementById("telno").value = '';
      document.getElementById("mobileno").value = '';
      document.getElementById("address").value = '';
    }
  </script>




  <script src="script.js"> </script>



  <script>
    $(document).ready(function() {
      $('.editbtn').on('click', function() {
        $('#modaleditcostumer').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#update_id').val(data[0]);
        $('#name').val(data[1]);
        $('#gender').val(data[2]);
        $('#email').val(data[3]);
        $('#telno').val(data[4]);
        $('#mobileno').val(data[5]);
        $('#address').val(data[6]);

      });
    });
  </script>


  </script>


</body>

</html>