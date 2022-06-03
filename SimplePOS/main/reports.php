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

  <title>Reports</title>
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="dashboard.php" class="brand">
      <i class='bx bxl-shopify'></i>
      <span class="text">EzShop</span>
    </a>
    <ul class="side-menu top" onclick="myfunction(event)">
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
      <li class="active">
        <a href="reports.php">
          <i class='bx bxs-report'></i>
          <span class="text">Reports</span>
        </a>
      </li>
      <li>
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
        <button class="dropdown-btn" onclick="myFunction()">
          <img src="images/user.png" class="profile-pic" alt="">
          <div class="username admin">
            <font><b>Jimuel Leal</b><br> Admin </font>
          </div>
          <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
        </button>

        <div id="myDropdown" class="dropdown-content">
          <a href="#">My account</a>
          <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                <h3>REPORTS</h3>
                
              </div>

              <div class="col-md-8 my-2">
                <form class="form-group row">
                  <div class="col-sm-auto col-form-label">
                    View by:
                  </div>

                  <div class="col-sm-auto">
                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                      <option value="1">Items</option>
                      <option value="2">Categories</option>
                    </select>
                  </div>
                </form>

              </div>
              <div class="col-sm-auto">
                <div class="dropdown">
                  <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-printer'></i> Export
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Action</button>
                    <button class="dropdown-item" type="button">Another action</button>
                    <button class="dropdown-item" type="button">Something else here</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-auto">
                <button class="btn btn-outline-primary btn-block" type="button"><i class='bx bx-printer'></i> print</button>
              </div>

              <div class="col-sm-auto my-2">
                <div class="form-group row">
                  <div class="col-sm-auto col-form-label">
                    Range:
                  </div>
                  <div class="col-sm-auto">
                    <input type="date" class="form-control btn-outline-primary">
                  </div>

                  <div class="col-sm-auto col-form-label">
                    to
                  </div>

                  <div class="col-sm-auto">
                    <input type="date" class="form-control btn-outline-primary">
                  </div>

                </div>



              </div>



            </div>
            <hr>
            <table>
              <thead style="text-align: center;">
                <th>Name</th>
                <th>No. sold</th>
                <th>Discount</th>
                <th>tax</th>
                <th>total</th>
                <th>No. Refunded</th>
                <th>Total</th>
                <th>Balance</th>
              </thead>
              <tbody>
                <tr>
                  <td>Face Mask</td>
                  <td>22</td>
                  <td>0.00</td>
                  <td>1.12</td>
                  <td>200</td>
                  <td>200</td>
                  <td>1500</td>
                  <td>200</td>
                </tr>

                <tr>
                  <td>Face Mask</td>
                  <td>22</td>
                  <td>0.00</td>
                  <td>1.12</td>
                  <td>200</td>
                  <td>200</td>
                  <td>1500</td>
                  <td>200</td>
                </tr>

                <tr>
                  <td>Face Mask</td>
                  <td>22</td>
                  <td>0.00</td>
                  <td>1.12</td>
                  <td>200</td>
                  <td>200</td>
                  <td>1500</td>
                  <td>200</td>


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

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>