<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="css/navside.css">

  <title>Dashboard</title>
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
      <li class="active">
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

          <div class="row MY-2">
            <div class="head">
              <h3>Sales</h3>
            </div>
            <div class="col-sm-auto">
              <div class="dropdown">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class='bx bx-export'></i> export
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
            <br>
            <BR></BR>
            <HR>
            </HR>
            <BR></BR>

          </div>

          <table>
            <thead>
              <th>ID</th>
              <th>Reference No.</th>
              <th>User</th>
              <th>Quatity</th>
              <th>Date and time</th>
              <th>Total</th>
              <th>Status</th>
              <th>action</th>
            </thead>
            <tbody>
              </tr>
              <td>1</td>
              <td>222222</td>
              <td>@username</td>
              <td>100</td>
              <td>May 19 2021, 9:58 am</td>
              <td>200</td>
              <td><span class="status pending">Pending</span></td>
              <td><i class="fas fa-eye"></td>
              </tr>
              <td>1</td>
              <td>333333</td>
              <td>@username</td>
              <td>100</td>
              <td>May 19 2021, 9:58 am</td>
              <td>200</td>
              <td> <span class="status completed"> completed </span></td>
              <td><i class="fas fa-eye"></td>

              <tr>
                <td>1</td>
                <td>333333</td>
                <td>@username</td>
                <td>100</td>
                <td>May 19 2021, 9:58 am</td>
                <td>200</td>
                <td><span class="status process">Process</span></td>
                <td><i class="fas fa-eye"></td>


            </tbody>
          </table>
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <script src="js/script.js"></script>
</body>

</html>