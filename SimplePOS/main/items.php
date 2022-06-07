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
    border-radius: 10px;
    outline: none;
    margin-bottom: 5px;

  }

  input.sim-input:hover {
    background-color: lightgrey;
  }
</style>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="dashboard.php" class="brand">
      <i class='bx bxl-shopify'></i>
      <span class="text">EzShop</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="dashboard.php">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="sales.php">
          <i class='bx bx-coin-stack'></i>
          <span class="text">Sales</span>
        </a>
      </li>
      <li>
        <a href="reports.php">
          <i class='bx bxs-report'></i>
          <span class="text">Reports</span>
        </a>
      </li>
      <li class="active">
        <a href="items.php">
          <i class='bx bx-package'></i>
          <span class="text">Items</span>
        </a>
      </li>
      <li>
        <a href="categories.php">
          <i class='bx bx-category-alt'></i>
          <span class="text">Categories</span>
        </a>
      </li>
      <li>
        <a href="customers.php">
          <i class='bx bx-face'></i>
          <span class="text">Customers</span>
        </a>
      </li>

      <li>
        <a href="suppliers.php  ">
          <i class='bx bxs-truck'></i>
          <span class="text">Supplier</span>
        </a>
      </li>
      <li>
        <a href="settings.php">
          <i class='bx bx-cog'></i>
          <span class="text">Settings</span>
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
      <a href="#" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">8</span>
      </a>
      <div class="dropdown-nav">
        <button class="dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="images/user.png" class="profile-pic" alt="">
          <div class="username admin">
            <b>Jimuel Leal</b><br> Admin
          </div>
          <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-lg-end">
          <a  class=" dropdown-item" href="account.php"><i class='bx bxs-user'></i> My Account</a>
          <a class="dropdown-item" href="logout.php"><i class='bx bx-log-out bx-rotate-180'></i> Logout</a>
        </ul>
      </div>
    </nav>
    <!-- NAVBAR -->
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>


      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="table-data">
            <div class="order">
              <form method="" action="">
                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">Name:</label>
                  <input class="sim-input col-sm-4" type="text" id="additemname">
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Description:</label>
                  <textarea class="textarea" id="additemdescription" rows="3"></textarea>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">unit cost:</label>
                  <input class="sim-input col-sm-4" type="text" id="itemunitcost">
                </div>


                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Unit price:</label>
                  <input class="sim-input col-sm-4" type="text" id="itemunitprice">
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">tax:</label>
                  <select class="sim-input mb-3" aria-label=".form-select-lg" id="itemtax">
                    <option value="1">Vat</option>
                    <option value="2">GST</option>
                  </select>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label "> Quantity:</label>
                  <input class="sim-input col-sm-4" type="text" id="itemquantity">
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Stock:</label>
                  <input class="sim-input col-sm-4" type="text" id="itemstock">
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label ">Category:</label>
                  <select class="sim-input mb-3" aria-label=".form-select-lg" id="itemcategory">
                    <option value="1">Items</option>
                    <option value="2">instrument</option>
                    <option value="2">Health</option>
                    <option value="2">Furniature</option>
                  </select>
                </div>

                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">Supplier:</label>
                  <select class="sim-input mb-3" aria-label=".form-select-lg" id="itemmsuplier">
                    <option value="1">Vat</option>
                    <option value="2">GST</option>
                  </select>
                </div>


                <div class="formgroup row">
                  <label class="col-sm-4 col-form-label">Picture:</label>
                  <input type="file" class="form-control-file" id="itempicture">
                </div>

                <div class="row my-3 px-10">
                  <button class="col-sm-auto btn btn-secondary"> cancel</button>
                  <button class="col-sm-auto btn btn-outline-success mr-2" style="margin-left: 2px ;"> Save</button>
                </div>
              </form>
            </div>
          </div>


        </div>
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="table-data">
            <div class="order">
              <div class="head">
                <h3>Items</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
              </div>
              <table class="table-bordered">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1223</td>
                    <td> guitar</td>
                    <td>20</td>
                    <td>Health</td>
                    <td>Si kuya mo eruc</td>
                    <td><i class='bx bx-pencil solid' style="font-size:24px;" data-toggle="modal" data-target="#editmodalitems"></i> <i class='bx bx-trash solid' style="font-size:24px;"></i> </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- modal fot edit items -->
      <div class="modal fade" id="editmodalitems" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> Edit items </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">Name:</label>
                        <input class="sim-input col-sm-4" type="text" id="additemname">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Description:</label>
                        <textarea class="textarea" id="additemdescription" rows="3"></textarea>
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">unit cost:</label>
                        <input class="sim-input col-sm-4" type="text" id="itemunitcost">
                      </div>


                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Unit price:</label>
                        <input class="sim-input col-sm-4" type="text" id="itemunitprice">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">tax:</label>
                        <select class="sim-input mb-3" aria-label=".form-select-lg" id="itemtax">
                          <option value="1">Vat</option>
                          <option value="2">GST</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 px-4">

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label "> Quantity:</label>
                        <input class="sim-input col-sm-4" type="text" id="itemquantity">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Stock:</label>
                        <input class="sim-input col-sm-4" type="text" id="itemstock">
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label ">Category:</label>
                        <select class="sim-input mb-3" aria-label=".form-select-lg" id="itemcategory">
                          <option value="1">Items</option>
                          <option value="2">instrument</option>
                          <option value="2">Health</option>
                          <option value="2">Furniature</option>
                        </select>
                      </div>

                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">Supplier:</label>
                        <select class="sim-input mb-3" aria-label=".form-select-lg" id="itemmsuplier">
                          <option value="1">Vat</option>
                          <option value="2">GST</option>
                        </select>
                      </div>


                      <div class="formgroup row">
                        <label class="col-sm-4 col-form-label">Picture:</label>
                        <input type="file" class="form-control-file" id="itempicture">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>


    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  </script>

  <script src="js/script.js"></script>

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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>