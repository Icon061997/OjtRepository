<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/navside.css">

    <title>My Account</title>

    <style>
        .bots {

            width: 100px;
            height: 50px;
            display: none;

        }

        .edit {

            border: none;
            color: var(--dark);
            background: none;
            float: right;
        }
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="dashboard.php" class="brand">
        <i class='bx bxl-shopify' style="font-size: 40px;"></i>
            <span class="text" style="font-family: var(--poppins);">EzShop</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text" style="font-family: var(--poppins);">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="sales.php">
                    <i class='bx bx-coin-stack'></i>
                    <span class="text" style="font-family: var(--poppins);">Sales</span>
                </a>
            </li>
            <li>
                <a href="reports.php">
                    <i class='bx bxs-report'></i>
                    <span class="text" style="font-family: var(--poppins);">Reports</span>
                </a>
            </li>
            <li>
                <a href="items.php">
                    <i class='bx bx-package'></i>
                    <span class="text" style="font-family: var(--poppins);">Items</span>
                </a>
            </li>
            <li>
                <a href="categories.php">
                    <i class='bx bx-category-alt'></i>
                    <span class="text" style="font-family: var(--poppins);">Categories</span>
                </a>
            </li>
            <li>
                <a href="customers.php">
                    <i class='bx bx-face'></i>
                    <span class="text" style="font-family: var(--poppins);">Customers</span>
                </a>
            </li>

            <li>
                <a href="suppliers.php  ">
                    <i class='bx bxs-truck'></i>
                    <span class="text" style="font-family: var(--poppins);">Supplier</span>
                </a>
            </li>
            <li class="active">
                <a href="settings.php">
                    <i class='bx bx-cog'></i>
                    <span class="text" style="font-family: var(--poppins);">Settings</span>
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
                <div class="dropdown">
                    <button class="dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="images/user.png" class="profile-pic" alt="">
                        <div class="username admin">
                            <b>Jimuel Leal</b><br> Admin
                        </div>
                        <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
                    </button>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2" style="min-width: 140px;">
                        <a class=" dropdown-item" href="account.php"><i class='bx bxs-user'></i> My Account</a>
                        <a class="dropdown-item" href="logout.php"><i class='bx bx-log-out bx-rotate-180'></i> Logout</a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- NAVBAR -->
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-data">
                        <div class="order">
                            <div class="head">
                                <h3>My Account</h3>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-12 text-center">
                                    <div class="">
                                        <img src="images/user.png" class="" height="150px" width="150">
                                        <input type="file" hidden>
                                    </div>
                                </div>
                                <div class="col-sm-12 my-2 text-center">
                                    <div class="">
                                        <button class="btn btn-primary"><i class='bx bx-camera'></i></button>
                                        <button class="btn btn-primary"><i class='bx bx-upload'></i></button>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div>
                                        <button class="edit" id="home_btn" onclick="enable()"> <i class="bx bx-pencil"></i> edit</button>
                                    </div>
                                </div>
                                <div class="container my-2">
                                    <form action="">
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="inputs form-control" id="inputemail" placeholder="Email" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row my-2">
                                            <label for="username" class="col-sm-2 col-form-label">Username :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="inputs form-control" id="inputuser" placeholder="Username" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row my-2">
                                            <label for="password" class="col-sm-2 col-form-label"> Passwprd :</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="inputs form-control" id="inputpassword" placeholder="Password" disabled>
                                            </div>
                                    </form>

                                    <div class="row my-2">
                                        <button style="margin-left: 50px;" class="bots btn btn-secondary my-2" id="cancel">cancel</button>
                                        <button class="bots btn btn-success my-2" id="submit" style="margin-left: 3px;"> save </button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
        document.getElementById("home_btn").addEventListener("click", function() {
            var hidden = document.getElementsByClassName("bots");
            for (i = 0; i < hidden.length; i++) {
                hidden[i].style.display = "block";
            }
        })
    </script>

    <script>
        document.getElementById("home_btn").addEventListener("click", function() {
            var hidden = document.getElementsByClassName("edit");
            for (i = 0; i < hidden.length; i++) {
                hidden[i].style.display = "none";
            }
        })
    </script>

    <script>
        document.getElementById("home_btn").addEventListener("click", function() {
            document.getElementById("inputemail").disabled = false;
            document.getElementById("inputuser").disabled = false;
            document.getElementById("inputpassword").disabled = false;
        })
    </script>
    <script src="js/script.js"></script>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>