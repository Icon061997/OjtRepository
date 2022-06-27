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
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- My CSS -->
  <link rel="stylesheet" href="css/navside.css">


  <title>Items</title>
</head>

<style>
  .sim-input {
    padding: 5px;
    width: 200px;
    height: 40px;
    border-radius: 5px;
    margin-bottom: 20px;
    border: 2px solid grey;
    outline-color: royalblue;

  }

  .formgroup {
    display: flex;
    text-align: left;
  }

  .textarea {
    padding: 5px;
    width: 200px;
    height: 100px;
    border-radius: 5px;
    outline-color: royalblue;
    margin-bottom: 20px;
    border: 2px solid grey;

  }

  /* 
  input.sim-input:hover {
    background-color: darkblue;
  } */

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
      <li class="active">
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
        <button class="notification" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none; background: none;">
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
          <button class="dropdown-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="images/user.png" class="profile-pic" alt="">
            <div class="username admin">
              <b>Jimuel Leal</b><br> Admin
            </div>
            <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
          </button>


          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2" style="min-width: 140px;">
            <a class=" dropdown-item" href="account.php"><i class='bx bxs-user'></i> My Account</a>
            <a class="dropdown-item" href="logout.php"><i class='bx bx-log-out bx-rotate-180'></i> Logout</a>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- NAVBAR -->
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>


      <div class="row">

        <!-- INSERT ITEM -->
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="table-data">
            <div class="order">
              <form action="insertcode.php" method="POST">

                <input type="hidden" name="item_id">

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">Name:</label>
                  <input class="sim-input col-sm-4" type="text" name="item_name" required>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Description:</label>
                  <textarea class="textarea" rows="3" name="item_description" required></textarea>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Unit cost:</label>
                  <input class="sim-input col-sm-4" type="text" name="item_unit_cost" required>
                </div>


                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Unit price:</label>
                  <input class="sim-input col-sm-4" type="text" name="item_unit_price" required>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">Tax:</label>
                  <select class="sim-input mb-3" aria-label=".form-select-lg" name="item_tax" required>
                    <option disabled selected value>Select</option>
                    <option value="Vat">Vat</option>
                    <option value="GST">GST</option>
                  </select>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label "> Quantity:</label>
                  <input class="sim-input col-sm-4" type="text" name="item_quantity" required>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Stock:</label>
                  <input class="sim-input col-sm-4" type="text" name="item_stock" required>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Stock Alert:</label>
                  <input class="sim-input col-sm-4" type="text" name="item_stock_alert" required>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Category:</label>
                  <select class="sim-input mb-3" aria-label=".form-select-lg" name="item_category" required>
                    <option disabled selected value>Select</option>
                    <option value="Health">Health</option>
                    <option value="Food">Food</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Furnitures">Furnitures</option>
                    <option value="Clothes">Clothes</option>
                  </select>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">Supplier:</label>
                  <select class="sim-input mb-3" aria-label=".form-select-lg" name="item_supplier" required>
                    <option disabled selected value>Select</option>
                    <option value="Juan Trading">Juan Trading</option>
                    <option value="Lola Puring Clothing">Lola Puring Clothing</option>
                    <option value="J&C Merchandise">J&C Merchandise</option>
                    <option value="Leones & Food Beverages">Leones & Food Beverages</option>
                    <option value="ABC Merchandise">ABC Merchandise</option>
                  </select>
                </div>


                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">Picture:</label>
                  <input type="file" class="form-control-file" name="item_picture" required>
                </div>

                <div class="row my-3 px-10 m-0">
                  <button type="reset" class="col-sm-auto btn btn-secondary">Clear</button>
                  <button type="submit" name="insertitems" class="col-sm-auto btn btn-outline-success" style="margin-left: 5px ;"> Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- INSERT ITEM -->


        <!-- TABLE -->
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="table-data">
            <div class="order">
              <div class="head">
                <h3>Items</h3>
              </div>

              <HR>
              </HR>

              <?php
              $conn = mysqli_connect("localhost", "root", "");
              $db = mysqli_select_db($conn, 'pointofsale');
              $query = "SELECT * FROM tbl_items  ";
              $query_run = mysqli_query($conn, $query);
              ?>
              <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php
                if ($query_run) {
                  foreach ($query_run as $row) {
                ?>
                    <tbody>
                      <tr>

                        <td><?php echo $row['item_id']; ?></td>
                        <td><?php echo $row['item_name']; ?></td>
                        <td style="display:none;"><?php echo $row['item_description']; ?></td>
                        <td style="display:none;"><?php echo $row['item_unit_cost']; ?></td>
                        <td style="display:none;"><?php echo $row['item_unit_price']; ?></td>
                        <td style="display:none;"><?php echo $row['item_tax']; ?></td>
                        <td style="display:none;"><?php echo $row['item_quantity']; ?></td>
                        <td><?php echo $row['item_stock']; ?></td>
                        <td style="display:none;"><?php echo $row['item_stock_alert']; ?></td>
                        <td><?php echo $row['item_category']; ?></td>
                        <td><?php echo $row['item_supplier']; ?></td>

                        <td>
                          <a style="font-size: 16px;" class="editbtn"><i class="bx bx-pencil icon"></i> </a>
                          <input type="hidden" class="delete_id_value" value="<?php echo $row['item_id']; ?>">
                          <a style="font-size: 16px;" href="javascript:void(0)" class="delete_btn_ajax"> <i class="bx bx-trash icon" style="color: red;"></i></a>
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
        </div>
      </div>
      <!-- TABLE -->

      <!-- EDIT -->
      <div class="modal fade" id="editmodalitems" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header">Edit items </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="updatecode.php" method="POST">
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">


                      <input type="hidden" name="item_id" id="item_id">


                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">Name:</label>
                        <input class="sim-input col-sm-4" type="text" name="item_name" id="item_name">
                      </div>



                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Description:</label>
                        <textarea class="textarea" rows="3" name="item_description" id="item_description"></textarea>
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Unit cost:</label>
                        <input class="sim-input col-sm-4" type="text" name="item_unit_cost" id="item_unit_cost">
                      </div>


                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Unit price:</label>
                        <input class="sim-input col-sm-4" type="text" name="item_unit_price" id="item_unit_price">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">Tax:</label>
                        <select class="sim-input mb-4" aria-label=".form-select-lg" name="item_tax" id="item_tax">
                          <option disabled selected value>Select</option>
                          <option value="Vat">Vat</option>
                          <option value="GST">GST</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 px-6">

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label "> Quantity:</label>
                        <input class="sim-input col-sm-4" type="text" name="item_quantity" id="item_quantity">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Stock:</label>
                        <input class="sim-input col-sm-4" type="text" name="item_stock" id="item_stock">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Stock Alert:</label>
                        <input class="sim-input col-sm-4" type="text" name="item_stock_alert" id="item_stock_alert">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Category:</label>
                        <select class="sim-input mb-3" aria-label=".form-select-lg" name="item_category" id="item_category">
                          <option disabled selected value>Select</option>
                          <option value="Health">Health</option>
                          <option value="Food">Food</option>
                          <option value="Electronics">Electronics</option>
                          <option value="Furnitures">Furnitures</option>
                          <option value="Clothes">Clothes</option>
                        </select>
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">Supplier:</label>
                        <select class="sim-input mb-3" aria-label=".form-select-lg" name="item_supplier" id="item_supplier">
                          <option disabled selected value>Select</option>
                          <option value="Juan Trading">Juan Trading</option>
                          <option value="Lola Puring Clothing">Lola Puring Clothing</option>
                          <option value="J&C Merchandise">J&C Merchandise</option>
                          <option value="Leones & Food Beverages">Leones & Food Beverages</option>
                          <option value="ABC Merchandise">ABC Merchandise</option>
                        </select>
                      </div>


                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">Picture:</label>
                        <input type="file" class="form-control-file" name="item_picture" id="item_picture">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="item_updatedata" class="btn btn-primary">Update Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- EDIT -->



    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->


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
                  "delete_btn_set_item": 1,
                  "item_id": deleteid,
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

  <script>
    $(document).ready(function() {
      $('.editbtn').on('click', function() {
        $('#editmodalitems').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#item_id').val(data[0]);
        $('#item_name').val(data[1]);
        $('#item_description').val(data[2]);
        $('#item_unit_cost').val(data[3]);
        $('#item_unit_price').val(data[4]);
        $('#item_tax').val(data[5]);
        $('#item_quantity').val(data[6]);
        $('#item_stock').val(data[7]);
        $('#item_stock_alert').val(data[8]);
        $('#item_category').val(data[9]);
        $('#item_supplier').val(data[10]);
        $('#item_picture').val(data[11]);


      });
    });
  </script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

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