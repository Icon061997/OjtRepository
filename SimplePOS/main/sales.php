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

  <title>Sales</title>
</head>

<style>
  .icon {
    font-size: 20px;
    font-weight: 200;
  }

  td {

    text-align: center;
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
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class='bx bx-export'></i> Export
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" id="cvs-download" type="button"><i class="icon bi bi-filetype-csv"></i> CSV</button>
                  <button class="dropdown-item" id="pdf-download" type="button" onclick="downloadPDF()"><i class="icon bi bi-filetype-pdf"></i> PDF</button>

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

          <table class="table-bordered">
            <thead>
              <th>ID</th>
              <th>Reference No.</th>
              <th>User</th>
              <th>Quatity</th>
              <th>Date and time</th>
              <th>Total</th>
              <th>Status</th>
              <th>Action</th>

            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>222222</td>
                <td>@username</td>
                <td>100</td>
                <td>May 19 2021, 9:58 am</td>
                <td>200</td>
                <td><span class="status pending">Pending</span></td>
                <td><a href="invo.php"><i class="bi bi-eye-fill"></i></a></td>
              </tr>

              <tr>
                <td>1</td>
                <td>333333</td>
                <td>@username</td>
                <td>100</td>
                <td>May 19 2021, 9:58 am</td>
                <td>200</td>
                <td> <span class="status completed"> completed </span></td>
                <td><a href="invo.php"><i class="bi bi-eye-fill"></i></a></td>
              </tr>

              <tr>
                <td>1</td>
                <td>333333</td>
                <td>@username</td>
                <td>100</td>
                <td>May 19 2021, 9:58 am</td>
                <td>200</td>
                <td><span class="status process">Process</span></td>
                <td><a href="invo.php"><i class="bi bi-eye-fill"></i></a></td>
              </tr>



            </tbody>
          </table>
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->
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
    function htmlToCSV(html, filename) {
      var data = [];
      var rows = document.querySelectorAll("table tr");

      for (var i = 0; i < rows.length; i++) {
        var row = [],
          cols = rows[i].querySelectorAll("td, th");

        for (var j = 0; j < cols.length; j++) {
          row.push(cols[j].innerText);
        }

        data.push(row.join(","));
      }

      downloadCSVFile(data.join("\n"), filename);
    }
  </script>


  <script>
    function downloadCSVFile(csv, filename) {
      var csv_file, download_link;

      csv_file = new Blob([csv], {
        type: "text/csv"
      });

      download_link = document.createElement("a");

      download_link.download = filename;

      download_link.href = window.URL.createObjectURL(csv_file);

      download_link.style.display = "none";

      document.body.appendChild(download_link);

      download_link.click();
    }
  </script>

  <script>
    document.getElementById("cvs-download").addEventListener("click", function() {
      var html = document.querySelector("table").outerHTML;
      htmlToCSV(html, "sales-reports.csv");
    });
  </script>


  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>