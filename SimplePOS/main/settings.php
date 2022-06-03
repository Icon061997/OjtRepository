<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="css/navside.css">

  <style>
    .mytabs {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      color: var(--dark);

    }

    .mytabs input[type="radio"] {
      display: none;
    }

    .mytabs label {
      padding: 25px 25px 20px 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .mytabs .tab {
      width: 100%;
      order: 1;
      display: none;
      transition: 1;
      margin-bottom: 2px;
    }

    .mytabs .tab h2 {
      font-size: 3em;
    }

    .mytabs input[type='radio']:checked+label+.tab {
      display: block;
    }

    .mytabs input[type="radio"]:checked+label {
      border: 5px solid lightblue;
      border-top: none;
      border-left: none;
      border-right: none;
    }

    td {
      border: 2px solid var(--dark);
      text-align: center;

    }

    thead {
      border: 2px solid var(--dark);
    }

    .bx {
      font-size: 25px;
    }
  </style>




  <title>Settings</title>
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
      <li class="active">
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
          <div class="row my-2">
            <div class="col-12">
              <div class="head" style="margin-bottom: 0;">
                <h3>Settings</h3>
              </div>
              <!-- user roles tabss -->
              <div class="mytabs">
                <input type="radio" id="tabfree" name="mytabs" checked="checked">
                <label for="tabfree">User Roles</label>
                <div class="tab">

                  <div class="order">
                    <div class="row">
                      <div class="head">
                        <button class="btn btn-outline-primary btn-block" id="myBtn" type="button"><i class='bx bx-add-to-queue' style="font-size: 24px ;"></i> Add</button>
                      </div>
                    </div>
                    <table style="border:2px solid;">
                      <thead>
                        <th>ID</th>
                        <th>Role Name</th>
                        <th>Status</th>
                        <th>action</th>
                      </thead>
                      <tbody>
                        </tr>
                        <td>1</td>
                        <td>222222</td>
                        <td>@username</td>
                        <td><i class="bx bx-pencil">
                            <i class="bx bx-trash"></td>
                      </tbody>
                    </table>
                  </div>

                </div>
                <!--   ******************************************user tabs -->
                <input type="radio" id="tabsilver" name="mytabs">
                <label for="tabsilver">Users</label>
                <div class="tab">

                  <div class="order">
                    <div class="row">
                      <div class="head">
                        <button class="btn btn-outline-primary btn-block" type="button"><i class='bx bx-add-to-queue' style="font-size: 24px"></i> Add </button>
                      </div>
                    </div>
                    <table>
                      <thead>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>status</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        </tr>
                        <td> 1002 </td>
                        <td> joj1920</td>
                        <td>admin</td>
                        <td>jojo@gmail.com</td>
                        <td>active</td>
                        <td><i class="bx bx-pencil"> <i class="bx bx-trash"></td>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- accounting tabs 8 -->
                <input type="radio" id="tabgold" name="mytabs">
                <label for="tabgold">Accounting</label>
                <div class="tab">
                  <div class="order">
                    <div class="row">
                      <div class="head">
                        <h3>tax rules</h3>
                        <button class="btn btn-outline-primary btn-block" type="button"><i class='bx bx-add-to-queue'></i> Add </button>
                      </div>
                    </div>
                    <table>
                      <thead>
                        <th>ID</th>
                        <th>name</th>
                        <th>Price Inclusive</th>
                        <th>Value</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        </tr>
                        <td>1</td>
                        <td>222222</td>
                        <td>@username</td>
                        <td>10%</>
                        <td><i class="bx bx-pencil"> <i class="bx bx-trash"></td>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
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