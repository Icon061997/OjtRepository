<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Boxicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/navside.css">
  <!-- chart import -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <style>
    .mytabs {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      color: var(--dark);

    }


    .mytabs .labels {
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

    .mytabs input[type='radio']:checked+.labels+.tab {
      display: block;
    }

    .mytabs input[type="radio"]:checked+.labels {
      border: 5px solid lightblue;
      border-top: none;
      border-left: none;
      border-right: none;
    }
    input,  select{
    border-radius: 5px;
    outline-color: royalblue;
    border-color: lightgrey;
  }

  input:hover, textarea:hover, select:hover, input[type="radio"]:hover{
    background-color: whitesmoke;
    border: 2px solid royalblue;
  }


    td {

      text-align: center;

    }

    thead {
      background-color: var(--blue);
      border: solid var(--dark);
      width: 36px;
      height: 36px;
    }

    h5 {
      color: var(--dark)
    }

    .header {
      color: var(--dark);
    }

    .pos-input {
      height: 40px;
      border: 1px solid rgba(0, 0, 0, .16);
      border-radius: 3px;
      padding: 6px 12px;
      color: var(--dark);
    }

    i:hover {
      color: blue;
    }

    i {
      padding: 3px;
      font-size: 24px;
    }

    /* .modalcontent {
      color: var(--dark);
    } */
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
              <!-- mytabs user roles -->
              <div class="mytabs">
                <input type="radio" id="tabroles" name="mytabs" checked="checked" style="display:none;">
                <label for="tabroles" class="labels">User Roles</label>
                <div class="tab">
                  <div class="row">
                    <div class="head">
                      <button class="btn btn-outline-primary btn-block" id="myBtn" type="button" data-toggle="modal" data-target="#modalroles"><i class='bx bx-add-to-queue' style="font-size: 24px ;"></i> Add</button>
                    </div>
                  </div>
                  <table style="border:2px solid;" class="table-bordered">
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
                      <td><i class="bx bx-pencil " data-toggle="modal" data-target="#editmodalroles"></i>
                        <i class="bx bx-trash">
                      </td>
                    </tbody>
                  </table>
                </div>

                <!-- tabs for users -->
                <input type="radio" id="tabusers" name="mytabs" style="display:none;">
                <label for="tabusers" class="labels">Users</label>
                <div class="tab">

                  <div class="row">
                    <div class="head">
                      <button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#modaluser"><i class='bx bx-add-to-queue' style="font-size: 24px"></i> Add </button>
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
                      <td><i class="bx bx-pencil" data-toggle="modal" data-target="#editmodaluser"></i> <i class="bx bx-trash"></i></td>
                    </tbody>
                  </table>
                </div>
                <!-- accountin tabs -->

                <input type="radio" id="tabaccounting" name="mytabs" style="display:none;">
                <label for="tabaccounting" class="labels">Accounting</label>
                <div class="tab">
                  <div class="row">
                    <div class="head">
                      <h3>tax rules</h3>
                      <button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#modalaccounting" style="float: left;"><i class='bx bx-add-to-queue'></i> Add </button>
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
                      <td><i class="bx bx-pencil" data-toggle="modal" data-target="#editmodalaccounting"> </i><i class="bx bx-trash"></i></td>
                    </tbody>
                  </table>

                </div>
              </div>
              <!-- end mytabs -->
            </div>

          </div>

        </div>
        <!-- order ens div -->
      </div>

      <!-- modal for roles -->
      <!-- modal para sa pag add ng roles -->
      <div class="modal fade" id="modalroles" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> USER </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="">
                  <div class="form-group row">
                    <div class="col-sm-5 col-form-label">Role:</div>
                    <select class=" col-sm-7 pos-input mb-3" aria-label=".form-select-lg example">
                      <option value="1">Admin</option>
                      <option value="2">Staff</option>
                      <option value="3">Pos</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>Permission</h5>
                      <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                          <tr>
                            <th> Pages </th>
                            <th> <input type="checkbox" id="checkcreate"> Create</th>
                            <th> <input type="checkbox" id="checkread">Read </th>
                            <th> <input type="checkbox" id="checkupdate">Update </th>
                            <th><input type="checkbox" id="checkdelete"> Delete</th>
                          </tr>

                          <tbody>
                            <tr>
                              <td>Dashboard</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Reports</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Items</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Categories</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Customers</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Supplier</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                          </tbody>
                        </table>
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
      <!-- edit modal roles -->

      <!-- modal para sa edit ng ng roles -->
      <div class="modal fade " id="editmodalroles" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> Edit user roles </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="">
                  <div class="form-group row">
                    <div class="col-sm-5 col-form-label">Role:</div>
                    <select class=" col-sm-7 pos-input mb-3" aria-label=".form-select-lg example">
                      <option value="1">Admin</option>
                      <option value="2">Staff</option>
                      <option value="3">Pos</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>Permission</h5>
                      <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                          <tr>
                            <th> Pages </th>
                            <th> <input type="checkbox" id="checkcreate"> Create</th>
                            <th> <input type="checkbox" id="checkread">Read </th>
                            <th> <input type="checkbox" id="checkupdate">Update </th>
                            <th><input type="checkbox" id="checkdelete"> Delete</th>
                          </tr>

                          <tbody>
                            <tr>
                              <td>Dashboard</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Reports</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Items</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Categories</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Customers</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>Supplier</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                          </tbody>
                        </table>
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


      <!-- modal para sa apag add ng user-->

      <div class="modal fade modal-static" id="modaluser" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> USER</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="">
                  <div class="form-group row">
                    <div class="col-sm-5 col-form-label">Role:</div>
                    <select class=" col-sm-7 pos-input mb-3" aria-label=".form-select-lg example">
                      <option value="1">Admin</option>
                      <option value="2">Staff</option>
                      <option value="3">Pos</option>
                    </select>
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Email:</div>
                    <input class="col-sm-7 pos-input" type="text">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Username:</div>
                    <input class="col-sm-7 pos-input" type="text">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Password:</div>
                    <input class="col-sm-7 pos-input" type="password">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Confirm Password:</div>
                    <input class="col-sm-7 pos-input" type="password">
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

      <!-- para ito sa pag edit ng users -->
      <div class="modal fade modal-static" id="editmodaluser" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header">EDIT USER </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="">
                  <div class="form-group row">
                    <div class="col-sm-5 col-form-label">Role:</div>
                    <select class=" col-sm-7 pos-input mb-3" aria-label=".form-select-lg example">
                      <option value="1">Admin</option>
                      <option value="2">Staff</option>
                      <option value="3">Pos</option>
                    </select>
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Email:</div>
                    <input class="col-sm-7 pos-input" type="text">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Username:</div>
                    <input class="col-sm-7 pos-input" type="text">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Password:</div>
                    <input class="col-sm-7 pos-input" type="password">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 col-form-label">Confirm Password:</div>
                    <input class="col-sm-7 pos-input" type="password">
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
      </div>

      <!-- modal para mag add sa accouting-->
      <div class="modal fade" id="modalaccounting" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> Tax inclusive </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="">
                  <div class="form-group row mb-2">
                    <div class="col-sm-5 px-0">Name:</div>
                    <input class="col-sm-7 pos-input" type="text">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 px-0">Price Inclusive:</div>
                    <label class="col-sm-3" for="inclusive">
                      <input class="" type="radio" value="inclusive" id="inclusive">inclusive
                    </label>

                    <label class="col-sm-3" for="exclusive" id="exclusive">
                      <input type="radio" value="exclusive">exclusive
                    </label>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-5 px-0">Value:</div>
                    <input class="col-sm-5 pos-input" type="text" max="100" min="0">
                    <div class="col-sm-auto col-form-label">%</div>
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
      <!-- para ito sa pag edit ng accounting -->

      <div class="modal fade" id="editmodalaccounting" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="header"> Tax inclusive </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background:none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="">
                  <div class="form-group row mb-2">
                    <div class="col-sm-5 px-0">Name:</div>
                    <input class="col-sm-7 pos-input" type="text">
                  </div>

                  <div class="form-group row mb-2">
                    <div class="col-sm-5 px-0">Price Inclusive:</div>
                    <label class="col-sm-3" for="inclusive">
                      <input class="" type="radio" value="inclusive" id="inclusive">inclusive
                    </label>

                    <label class="col-sm-3" for="exclusive" id="exclusive">
                      <input type="radio" value="exclusive">exclusive
                    </label>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-5 px-0">Value:</div>
                    <input class="col-sm-5 pos-input" type="text" max="100" min="0">
                    <div class="col-sm-auto col-form-label">%</div>
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


  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>