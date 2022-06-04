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

    <!-- MAIN -->
    <main>


      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="table-data">
            <div class="order">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">Name:</label>
                <input class="form-control col-sm-4" type="text">
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">Description:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">unit cost:</label>
                <input class="form-control col-sm-4" type="text">
              </div>


              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">Unit price:</label>
                <input class="form-control col-sm-4" type="text">
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">tax:</label>
                <select class="form-select mb-3" aria-label=".form-select-lg example">
                  <option value="1">Vat</option>
                  <option value="2">GST</option>
                </select>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0"> Quantity:</label>
                <input class="form-control col-sm-4" type="text">
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">Stock:</label>
                <input class="form-control col-sm-4" type="text">
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">Category:</label>
                <select class="form-select mb-3" aria-label=".form-select-lg example">
                  <option value="1">Items</option>
                  <option value="2">instrument</option>
                  <option value="2">Health</option>
                  <option value="2">Furniature</option>
                </select>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">Supplier:</label>
                <select class="form-select mb-3" aria-label=".form-select-lg example">
                  <option value="1">Vat</option>
                  <option value="2">GST</option>
                </select>
              </div>


              <div class="form-group row">
                <label class="col-sm-4 col-form-label px-0">Picture:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>

              <div class="row my-3 ">
                <button class="col-sm-auto btn btn-secondary"> cancel</button>
                <button class="col-sm-auto btn btn-outline-success mr-2" style="margin-left: 2px ;"> Save</button>
              </div>

            </div>



          </div>


        </div>
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="table-data">
            <div class="order">
              <div class="head">
                <h3>Recent Orders</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
              </div>
              <table>
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
                    <td><i class='bx bx-pencil solid' style="font-size:24px;"></i> <i class='bx bx-trash solid' style="font-size:24px;"></i> </td>
                  </tr>
                </tbody>
              </table>
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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>