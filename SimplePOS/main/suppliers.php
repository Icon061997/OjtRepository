<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <!-- CSS only -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-search-pseudo-elements></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <!-- My CSS -->
  <link rel="stylesheet" href="css/navside.css">
  <title>Suppliers</title>
</head>
<style>
  input {
    width: 200px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid grey;
    outline-color: royalblue;
  }

  input:hover {
    border: 2px solid royalblue;

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
      <li>
        <a href="customers.php">
          <i class='bx bx-face'></i>
          <span class="text" style="font-family: var(--poppins);">Customers</span>
        </a>
      </li>

      <li class="active">
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


      <div class="btn-group">
        <button class="notification" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none; background: none;">
          <i class='bx bxs-bell'></i>
          <span class="num">8</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
          <a class="dropdown-item" href=""><b>Notification: </b> New added Costumer</a>
          <a class="dropdown-item" href=""><b>Notification: </b> New Item added</a>
          <a class="dropdown-item" href=""><b>Notification: </b> new Item added</a>
        </div>
      </div>


      <div class="dropdown-nav">
        <div class="dropdown">
          <button class="dropdown-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="images/user.png" class="profile-pic" alt="">
            <div class="username admin">
              <b>Jimuel Leal</b><br> Admin
            </div>
            <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
          </button>


          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
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


      <!-- TABLE -->
      <div class="table-data">
        <div class="order">
          <div class="col-12 my-2">
            <div class="row my-2">
              <div class="head">
                <h3>Suppliers</h3>
              </div>
              <div class="col-sm-auto col-form-label">
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modaladdsupplier"><i class='bx bx-add-to-queue' style="font-size: 16px ;"></i> Add</button>
              </div>
            </div>
          </div>
          <hr>

          <?php
          $conn = mysqli_connect("localhost", "root", "");
          $db = mysqli_select_db($conn, 'pointofsale');
          $query = "SELECT * FROM tblsupplier";
          $query_run = mysqli_query($conn, $query);
          ?>
          <table id="data-table">

            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>No. of Items</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php
            if ($query_run) {
              foreach ($query_run as $row) {
            ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['supplier_id']; ?></td>
                    <td><?php echo $row['supplier_name']; ?></td>
                    <td><?php echo $row['supplier_no_items']; ?></td>
                    <td>
                      <a class="editbtn"><i class="bx bx-pencil icon"></i> </a>
                      <input type="hidden" class="delete_id_value" value="<?php echo $row['supplier_id']; ?>">
                      <a href="javascript:void(0)" class="delete_btn_ajax"> <i class="bx bx-trash icon" style="color: red;"></i></a>
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
      <!-- TABLE -->
      <!-- ADD SUPPLIER -->
      <div class="modal fade" id="modaladdsupplier" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header">Add Supplier</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="insertcode.php" method="POST">


              <div class="modal-body">
                <div class="container">



                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Name:</div>
                    <input class="col-sm-7 pos-input" type="text" name="supplier_name" required>
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">No. of Items:</div>
                    <input class="col-sm-7 pos-input" type="number" name="supplier_no_items" required>
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="insertsupplier" class="btn btn-success">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ADD SUPPLIER -->

      <!-- EDIT -->
      <div class="modal fade" id="modaleditsupplier" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header">Edit Supplier</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="updatecode.php" method="POST">
              <div class="modal-body">
                <div class="container">

                  <input type="hidden" name="supplier_update_id" id="supplier_update_id">

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Name:</div>
                    <input class="col-sm-7 pos-input" type="text" name="supplier_name" id="supplier_name">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">No. of Items:</div>
                    <input class="col-sm-7 pos-input" type="number" name="supplier_no_items" id="supplier_no_items">
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="supplier_updatedata" class="btn btn-success">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- EDIT -->








    </main>
    <!-- MAIN -->
  </section>





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
                url: "deletecode.php",
                data: {
                  "delete_btn_set_supplier": 1,
                  "supplier_id": deleteid,
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
    $(document).ready(function() {
      $('.editbtn').on('click', function() {
        $('#modaleditsupplier').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#supplier_update_id').val(data[0]);
        $('#supplier_name').val(data[1]);
        $('#supplier_no_items').val(data[2]);


      });
    });
  </script>

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
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>