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
<style>
  input:hover,
  input:focus {
    border: 2px solid royalblue;

  }

  select:hover {

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
  
  .myselectable{
    border: none;
  }
</style>

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
        <button class="dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="images/user.png" class="profile-pic" alt="">
          <div class="username admin">
            <b>Jimuel Leal</b><br> Admin
          </div>
          <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-lg-end">
          <a class=" dropdown-item" href="account.php"><i class='bx bxs-user'></i> My Account</a>
          <a class="dropdown-item" href="logout.php"><i class='bx bx-log-out bx-rotate-180'></i> Logout</a>
        </ul>
      </div>
    </nav>
    <!-- NAVBAR -->
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
              <div class="row">
                <div class="col-md-auto my-2">
                  <form class="form-group row">
                    <div class="col-sm-auto col-form-label">
                      View by:
                    </div>

                    <div class="col-sm-auto">
                      <select class="form-select mb-3" id="myselection">
                        <option value="items">Items</option>
                        <option value="categories">Categories</option>
                      </select>
                    </div>
                  </form>

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
                <div class="col-sm-auto my-2">
                  <div class="dropdown">
                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class='bx bx-printer'></i> Export
                    </button>
                    <div class="dropdown-menu">
                      <button class="dropdown-item" type="button"><i class="icon bi bi-filetype-csv"></i> CSV</button>
                      <button class="dropdown-item" type="button"><i class="icon bi bi-filetype-pdf"></i> PDF</button>

                    </div>
                  </div>
                </div>

                <div class="col-sm-auto my-2">
                  <button class="btn btn-outline-primary btn-block" type="button"><i class='bx bx-printer'></i> print</button>
                </div>
              </div>



            </div>
            <hr>
            <div class="mytableselect" id="viewitems">
            <table>
              <thead>
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

            <div class="mytableselect" id="viewcategories" style="display: none;">
            <table>
              <thead style="text-align: center;">
                <th>Name</th>
                <th>No. sold</th>
                <th>Total</th>
                <th>No.Refund</th>
                <th>Total</th>
                <th>Balance</th>
              </thead>
              <tbody>
                <tr>
                  <td>Electronics</td>
                  <td>22</td>
                  <td>200</td>
                  <td>30</td>
                  <td>0</td>
                  <td>300</td>
                </tr>

                <tr>
                <td>Health</td>
                  <td>22</td>
                  <td>200</td>
                  <td>30</td>
                  <td>0</td>
                  <td>300</td>
                </tr>

                <tr>
                <td>Food</td>
                  <td>22</td>
                  <td>200</td>
                  <td>30</td>
                  <td>0</td>
                  <td>300</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
      </div>







    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->
  <script>
    $(document).ready(function() {
      $('#myselection').on('change', function() {
        var demovalue = $(this).val();
        $("div.mytableselect").hide();
        $("#view" + demovalue).show();
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

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>