<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
  header('location:dashboard.php');
}

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
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <!-- My CSS -->
  <link rel="stylesheet" href="css/navside.css">

  <title>Dashboard</title>

</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="dashboard.php" class="brand">
      <i class='bx bxl-shopify' style="font-size: 40px;"></i>
      <span class="text">EzShop</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
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
          <a href="account.php"> <i class='bx bxs-user-rectangle' ></i>My Account</a>
          <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
        </div>
      </div>
    </nav>
    <!-- NAVBAR -->




    <!-- MAIN -->
    <main>


      <ul class="box-info ">
        <li>
          <i class='bx bx-coin-stack'></i>
          <span class="text">
            <h3>10,000</h3>
            <p>Total Sales</p>
          </span>
        </li>
        <li>
          <i class='bx bxs-group'></i>
          <span class="text">
            <h3>7</h3>
            <p>Total Users</p>
          </span>
        </li>
        <li>
          <i class='bx bx-package'></i>
          <span class="text">
            <h3>140</h3>
            <p>Total Items</p>
          </span>
        </li>
        <li>
          <i class='bx bx-category-alt'></i>
          <span class="text">
            <h3>78</h3>
            <p>Total Categories</p>
          </span>
        </li>
      </ul>

      <!-- chart -->

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="table-data">
                <div class="order">
                  <div class="head">
                    <h3 style="margin: 0%;">Top Categories by Sales</h3>
                  </div>
                  <canvas id="pie-chart" style="width:100%;max-width:100%;  Height: 300px;"></canvas>
                </div>
              </div>
            </div>

            <!-- table -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="table-data">
                <div class="order">
                  <div class="head">
                    <h3>Top Items by Sales</h3>
                  </div>
                  <table>
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Sales</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Face Mask</td>
                        <td>1300</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>2</td>
                        <td>Face Shield</td>
                        <td>800</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>3</td>
                        <td>Short</td>
                        <td>400</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>4</td>
                        <td>Umbrella</td>
                        <td>120</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
            <!-- line grap -->

            <!-- table -->

          </div>
        </div>
        <!-- line grap -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="table-data">

                <div class="order">
                  <div class="head">
                    <h3>Weekly Sales</h3>
                  </div>
                  <canvas id="line-graph" style="width:90%;max-width:100%;  Height: 300px;"></canvas>

                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="table-data">
                <div class="order">
                  <div class="head">
                    <h3>Best Sellers</h3>
                  </div>
                  <table>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Item</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Face Mask</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>2</td>
                        <td>Face Shield</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>3</td>
                        <td>Short</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>4</td>
                        <td>Umbrella</td>
                      </tr>
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


  <script src="js/script.js"></script>

  <script>
    var xValues = ["Musical Instrument", "Electronics", "Furnitures", "Clothes"];
    var yValues = [120, 150, 180, 90];
    var barColors = [
      "#00008B",
      "#0096FF",
      "#0000FF",
      "#00FFFF",

    ];

    new Chart("pie-chart", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,

        }
      }
    });
  </script>


  <script>
    var xValues = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var yValues = [700, 500, 650, 1498, 4000, 5000, 10000];
    var name = ["stock"];


    new Chart("line-graph", {


      type: "line",


      data: {
        labels: xValues,
        datasets: [{

          label: 'Sales',
          fill: false,
          lineTension: 0,

          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "#3C91E6",
          data: yValues,

        }]
      },
      options: {
        legend: {
          display: true
        },
        scales: {
          yAxes: [{
            ticks: {
              min: 0,
              max: 10000
            }
          }],
        }
      }
    });
  </script>

  </script>

  <script src="js/script.js"></script>
  <script type="text/javascript">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>