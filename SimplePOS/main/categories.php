<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Boxicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-search-pseudo-elements></script>
  <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-auto-a11y="true"></script>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/navside.css">
  <!-- chart import -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

  <title>Categories</title>
</head>

<STYle>
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
</STYle>

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
      <li class="active">
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
          <div class="row my-2">
            <div class="col-12">
              <div class="head" style="margin-bottom: 0;">
                <h3>Categories</h3>
              </div>
              <div class="row">
                <div class="head">
                  <button class="btn btn-outline-primary btn-block" id="myBtn" type="button" data-toggle="modal" data-target="#modalroles"><i class='bx bx-add-to-queue' style="font-size: 24px ;"></i> Add</button>
                </div>
              </div>
              <table>
                <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>No of items</th>
                  <th>action</th>
                </thead>
                <tbody>
                  </tr>
                  <td>1</td>
                  <td>Heath</td>
                  <td>200</td>
                  <td><i class="bx bx-pencil icon " data-toggle="modal" data-target="#editmodalcat"></i>
                    <i class="bx bx-trash icon">
                  </td>
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
  <script src="js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>