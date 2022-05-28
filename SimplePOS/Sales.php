<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include 'Navside.php' ?>

    <section id="content">

        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                        
                    </div>
                    
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Reference No.</th>
                            <th>User</th>
                            <th>Quatity</th>
                            <th>Date and time</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>action</th>
                        </thead>
                        <tbody>
                            </tr>
                                <td>1</td>
                                <td>222222</td>
                                <td>@username</td>
                                <td>100</td>
                                <td>May 19 2021, 9:58 am</td>
                                <td>200</td>
                                <td><span class="status pending">Pending</span></td>
                                <td><i class="fas fa-eye"></td>
                            </tr>
                            <td>1</td>
                            <td>333333</td>
                            <td>@username</td>
                            <td>100</td>
                            <td>May 19 2021, 9:58 am</td>
                            <td>200</td>
                            <td> <span class="status completed"> completed </span></td>
                            <td><i class="fas fa-eye"></td>

                            <tr>
                            <td>1</td>
                            <td>333333</td>
                            <td>@username</td>
                            <td>100</td>
                            <td>May 19 2021, 9:58 am</td>
                            <td>200</td>
                            <td><span class="status process">Process</span></td>
                            <td><i class="fas fa-eye"></td>

                            
                        </tbody>
                    </table>
                </div>
        </main>

    </section>
</body>

</html>