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

    <title>Categories</title>
</head>

<style>
    .sim-button {
        height: 30px;
        width: fit-content;
        font-size: 14px;
        padding: 5px;
        float: left;

    }

    .sim-button-green {
        height: 30px;
        width: fit-content;
        font-size: 14px;
        padding: 5px;
        float: left;
        background-color: darkgreen;
        color: white;
    }

    .invoice-input {
        padding: 5px;
        width: 200px;
        height: 40px;
        border-radius: 5px;
        margin-bottom: 15px;
        border: none;
        background-color: none;
        background: none;
        color: var(--dark);
    }

    .formgroup {
        display: flex;
        text-align: left;
    }

    .mytabs {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        color: var(--dark);
        border: 2px solid lightgrey;

    }


    .mytabs .labels {
        padding: 20px 25px 20px 20px;
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
                    <div class="col-12">
                        <div class="head" style="margin-bottom: 0;">
                            <h3>Transaction invoice</h3>
                        </div>

                        <div class="row my-4" style="margin-bottom: 0 ;">
                            <div class="col-12 ">
                                <a href="sales.php" class="sim-button btn btn-secondary m-2 mr-4"><i class="bi bi-chevron-left"></i> back </a>
                                <button class="sim-button btn btn-success mt-2 mr-4"><i class="bi bi-receipt"></i> Generate Invoice </button>
                                <button class="sim-button-green btn m-2 mr-4"><i class="bi bi-envelope-fill"></i> Email Envoice</button>
                            </div>
                            <hr>
                            <div class="col-6" style="margin-top: 0 ;">
                                <div class="formgroup row ">
                                    <div class="col-md-3  col-form-label">Status:</div>
                                    <input class="col-sm-7 invoice-input" type="text" disabled>
                                </div>
                                <div class="formgroup row ">
                                    <div class="col-md-3  col-form-label">ID:</div>
                                    <input class="col-sm-7 invoice-input" type="text" disabled>
                                </div>
                                <div class="formgroup row">
                                    <div class="col-md-3  col-form-label">Referrence No:</div>
                                    <input class="col-sm-7 invoice-input" type="text" value="" disabled>
                                </div>
                            </div>
                            <div class="col-6 my-2">
                                <div class="formgroup row ">
                                    <div class="col-md-3  col-form-label">User:</div>
                                    <input class="col-sm-7 invoice-input" type="text" disabled>
                                </div>
                                <div class="formgroup row ">
                                    <div class="col-md-3  col-form-label">Date & Time:</div>
                                    <input class="col-sm-7 invoice-input" type="text" disabled>
                                </div>
                                <div class="formgroup row">
                                    <div class="col-md-3  col-form-label">Total</div>
                                    <input class="col-sm-7 invoice-input" type="text" disabled>
                                </div>
                            </div>


                        </div>
                        <div class="mytabs">
                            <input type="radio" id="tabdetails" name="mytabs" checked="checked" style="display:none;">
                            <label for="tabdetails" class="labels">Details</label>

                            <div class="tab">
                                <div class="container">
                                    <div class="head" style="margin-bottom: 0;">
                                        <h3>Details</h3>
                                    </div>
                                    <div class="formgroup row">
                                        <div class="col-md-3  col-form-label">Subtotal:</div>
                                        <input class="col-sm-7 invoice-input" type="text" value="200" disabled>
                                    </div>
                                    <div class="formgroup row">
                                        <div class="col-md-3  col-form-label">Total:</div>
                                        <input class="col-sm-7 invoice-input" type="text" value="200" disabled>
                                    </div>

                                </div>
                            </div>

                            <input type="radio" id="tabitems" name="mytabs" style="display:none;">
                            <label for="tabitems" class="labels">Items</label>
                            <div class="tab">

                                <div class="container">
                                    <div class="head" style="margin-bottom: 0;">
                                        <h3>Items</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Name</th>
                                                    <th>Tax</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Faceshield</td>
                                                    <td>.20</td>
                                                    <td>500</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>


                            <input type="radio" id="tabpayment" name="mytabs" style="display:none;">
                            <label for="tabpayment" class="labels">Payments</label>
                            <div class="tab">
                                <div class="container">
                                    <div class="head" style="margin-bottom: 0;">
                                        <h3>Payments</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Method</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Cash</td>
                                                    <td>200</td>
                                                    <td>May 12 2022</td>
                                                </tr>
                                            </tbody>

                                        </table>
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

    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>