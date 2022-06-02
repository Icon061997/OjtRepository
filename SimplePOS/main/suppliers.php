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

      <li class="active">
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
      <app-suppliers _nghost-dxr-c4="">
        <div _ngcontent-dxr-c4="" class="container-fluid">
          <div _ngcontent-dxr-c4="" class="row my-4">
            <div _ngcontent-dxr-c4="" class="col-sm-12 my-2">
              <div _ngcontent-dxr-c4="" class="card-container">
                <div _ngcontent-dxr-c4="" class="card-title">Suppliers</div>
                <div _ngcontent-dxr-c4="" class="row my-2">
                  <div _ngcontent-dxr-c4="" class="col-sm-auto my-2"><button _ngcontent-dxr-c4="" class="pos-btn pos-btn-accent" data-target="#addSupplier" data-toggle="modal"><i _ngcontent-dxr-c4="" class="fas fa-plus"></i> Add</button></div>
                </div>
                <div _ngcontent-dxr-c4="" class="table-responsive">
                  <table _ngcontent-dxr-c4="" class="table table-hover striped table-bordered">
                    <thead _ngcontent-dxr-c4="">
                      <tr _ngcontent-dxr-c4="">
                        <th _ngcontent-dxr-c4="">ID</th>
                        <th _ngcontent-dxr-c4="">Name</th>
                        <th _ngcontent-dxr-c4="">No. of Items</th>
                        <th _ngcontent-dxr-c4="">Action</th>
                      </tr>
                    </thead>
                    <tbody _ngcontent-dxr-c4="">
                      <tr _ngcontent-dxr-c4="">
                        <td _ngcontent-dxr-c4="">23423</td>
                        <td _ngcontent-dxr-c4="">ABC Merchandise</td>
                        <td _ngcontent-dxr-c4="">123</td>
                        <td _ngcontent-dxr-c4=""><a _ngcontent-dxr-c4="" data-target="#editSupplier" data-toggle="modal"><i _ngcontent-dxr-c4="" class="fas fa-pen text-info mx-2"></i></a><a _ngcontent-dxr-c4=""><i _ngcontent-dxr-c4="" class="fas fa-trash text-danger mx-2"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div _ngcontent-dxr-c4="" class="my-4">
            <app-footer _ngcontent-dxr-c4="" _nghost-dxr-c3=""><b _ngcontent-dxr-c3="">simplePos</b><br _ngcontent-dxr-c3=""><small _ngcontent-dxr-c3=""><i _ngcontent-dxr-c3="">Made with <i _ngcontent-dxr-c3="" class="fas fa-heart"></i> by jericNuez © 2020</i></small></app-footer>
          </div>
        </div>
        <div _ngcontent-dxr-c4="" aria-hidden="true" aria-labelledby="staticBackdropLabel" class="modal fade" data-backdrop="static" data-keyboard="false" id="addSupplier" tabindex="-1">
          <div _ngcontent-dxr-c4="" class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div _ngcontent-dxr-c4="" class="modal-content">
              <div _ngcontent-dxr-c4="" class="modal-header">
                <h5 _ngcontent-dxr-c4="" class="modal-title" id="staticBackdropLabel"><b _ngcontent-dxr-c4="">Add Supplier</b></h5><button _ngcontent-dxr-c4="" aria-label="Close" class="close" data-dismiss="modal" type="button"><span _ngcontent-dxr-c4="" aria-hidden="true">×</span></button>
              </div>
              <div _ngcontent-dxr-c4="" class="modal-body">
                <div _ngcontent-dxr-c4="" class="container-fluid">
                  <div _ngcontent-dxr-c4="" class="form-group row">
                    <div _ngcontent-dxr-c4="" class="col-sm-4 col-form-label px-0">Name:</div><input _ngcontent-dxr-c4="" class="pos-input col-sm-8" type="text">
                  </div>
                </div>
              </div>
              <div _ngcontent-dxr-c4="" class="modal-footer"><button _ngcontent-dxr-c4="" class="pos-btn pos-btn-gray" data-dismiss="modal" type="button">Cancel</button><button _ngcontent-dxr-c4="" class="pos-btn pos-btn-accent" type="button">Save</button></div>
            </div>
          </div>
        </div>
        <div _ngcontent-dxr-c4="" aria-hidden="true" aria-labelledby="staticBackdropLabel" class="modal fade" data-backdrop="static" data-keyboard="false" id="editSupplier" tabindex="-1">
          <div _ngcontent-dxr-c4="" class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div _ngcontent-dxr-c4="" class="modal-content">
              <div _ngcontent-dxr-c4="" class="modal-header">
                <h5 _ngcontent-dxr-c4="" class="modal-title" id="staticBackdropLabel"><b _ngcontent-dxr-c4="">Edit Supplier</b></h5><button _ngcontent-dxr-c4="" aria-label="Close" class="close" data-dismiss="modal" type="button"><span _ngcontent-dxr-c4="" aria-hidden="true">×</span></button>
              </div>
              <div _ngcontent-dxr-c4="" class="modal-body">
                <div _ngcontent-dxr-c4="" class="container-fluid">
                  <div _ngcontent-dxr-c4="" class="form-group row">
                    <div _ngcontent-dxr-c4="" class="col-sm-4 col-form-label px-0">Name:</div><input _ngcontent-dxr-c4="" class="pos-input col-sm-8" type="text">
                  </div>
                </div>
              </div>
              <div _ngcontent-dxr-c4="" class="modal-footer"><button _ngcontent-dxr-c4="" class="pos-btn pos-btn-gray" data-dismiss="modal" type="button">Cancel</button><button _ngcontent-dxr-c4="" class="pos-btn pos-btn-accent" type="button">Save</button></div>
            </div>
          </div>
        </div>
      </app-suppliers>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  </script>

  <script src="js/script.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>