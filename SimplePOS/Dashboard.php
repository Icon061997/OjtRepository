<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/navside.css">

  <title>AdminHub</title>
</head>

<body class="active">
  <?php include 'Navside.php' ?>
  <section id="content">


    <!-- MAIN -->
    <main>


      <ul class="box-info">
        <li>
          <i class='bx bx-coin-stack'></i>
          <span class="text">
            <h3>10000</h3>
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


      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Recent Orders</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>User</th>
                <th>Date Order</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="images/logo.png">
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Completed</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/people.png">
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/people.png">
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status process">Process</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/people.png">
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/people.png">
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Completed</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="todo">
          <div class="head">
            <h3>Todos</h3>
            <i class='bx bx-plus'></i>
            <i class='bx bx-filter'></i>
          </div>
          <ul class="todo-list">
            <li class="completed">
              <p>Todo List</p>
              <i class='bx bx-dots-vertical-rounded'></i>
            </li>
            <li class="completed">
              <p>Todo List</p>
              <i class='bx bx-dots-vertical-rounded'></i>
            </li>
            <li class="not-completed">
              <p>Todo List</p>
              <i class='bx bx-dots-vertical-rounded'></i>
            </li>
            <li class="completed">
              <p>Todo List</p>
              <i class='bx bx-dots-vertical-rounded'></i>
            </li>
            <li class="not-completed">
              <p>Todo List</p>
              <i class='bx bx-dots-vertical-rounded'></i>
            </li>
          </ul>
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->


  <script src="js/script.js"></script>
</body>

</html>