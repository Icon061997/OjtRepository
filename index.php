
<?php include('config.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM cruds WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $firstname = $record['firstname'];
    $lastname = $record['lastname'];
    $age = $record['age'];
    $id = $record['id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    


                        <!-- this is for viewin the dat for data base -->
                        <!-- this is for viewin the dat for data base -->
<body style="background-color: white;">
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center text-dark mt-2">CRUD Using PHP & MySQL</h3>
                <hr>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                

                <h3 class="text-center text-info">Records Present In The Database</h3>
                <div class="table-responsive table-fixed" style="height: 250px;overflow: scroll; ">
                <table class="table table-hover table-striped table-fixed table-scroll" id="data-table">
                <thead class="thead-box">
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>

                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($results)) { ?>
                            <tr>

                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td>
                                    <a href="index.php?edit=<?= $row['id']; ?>" class="hlo-btn-round" style="margin-right: 10px;"><i class="fa fa-edit" style="font-size:27px;color:green" arial-hidden="true"></i></a>
                            
                                    <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                                    <a href="javascript:void(0)" class="delete_btn_ajax"><i class="fa fa-trash" style="font-size:27px; color:red" aria-hidden="true"></i></a>


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                </div>
            
            </div>

                            <!-- this is for adding ther record -->
                            <!-- this is for adding ther record -->

            <div class="col-md-4">
               

                <h3 class="text-center text-info">Add Record</h3>
                <form name="index" action="config.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                    <input type="hidden" name="id" value="<?= $id; ?>" id="id" required> 

                    <div class="form-group">
                        <input type="text" name="firstname" value="<?php echo $firstname; ?>" class="box-corner" id="fname" placeholder="Enter fistname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" value="<?php echo $lastname; ?>" class="box-corner"  id="lname" placeholder="Enter lastname" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" onKeyPress="if(this.value.length==3) return false;" id="age" value="<?php echo $age; ?>" class="box-corner"  placeholder="Enter age" required>
                    </div>



                    <div class="container">

                        <div>
                            <?php if ($edit_state == false) : ?>
                                <button name="clearupdate" id="clear-button" type="reset" class="btn btn-danger" style="margin-left: 40px;">Clear</button>
                                <input type="submit" name="save" id="button-save" class="btn btn-success" value="Save" style=" margin-left:75px;">
                            <?php else : ?>
                                <a href="index.php" class="btn btn-danger" id="clear-button" style="margin-left: 40px;">Clear</a>
                                <button type="submit" name="update" id="button-update" class="btn btn-primary" value="Update" style=" margin-left:75px;">Update</button>

                            <?php endif ?>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
        <script>
            swal({
                text: "<?php echo $_SESSION['status']; ?>",
                icon: "<?php echo $_SESSION['status_code']; ?>",
                button: false,
                timer: 800,
            }).then((result) => {
                location.reload();
            });
        </script>
    <?php
        unset($_SESSION['status']);
    }
    ?>

    <script>
        $(document).ready(function() {

            $('.delete_btn_ajax').click(function(e) {
                e.preventDefault();

                var deleteid = $(this).closest("tr").find('.delete_id_value').val();

                swal({

                        text: " Are you sure you want to delete this?",
                        icon: "error",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                type: "POST",
                                url: "config.php",
                                data: {
                                    "delete_btn_set": 1,
                                    "id": deleteid,
                                },
                                success: function(response) {
                                    swal("Data Deleted Successfully.!", {
                                        icon: "success",
                                        button: false,
                                        timer: 800,

                                    }).then((result) => {
                                        window.location.reload();
                                    });
                                }   
                            });
                        }
                    });
            });

        });
    </script>


    <script src="script.js"> </script>
    <script type="text/javascript">
        function validate() {
            var ag = document.getElementById("age").value;

            var pattern = /^[1-9]?[0-9]{1}$|^100$/;

            if (isNaN(ag) || ag < 1 || ag > 100) {

                swal({
                    text: "The age must be a number between 1 and 100",
                    icon: "warning",
                    button: false,
                    timer: 1000,
                });
                return false;

            }
        }
    </script>

<script>
        function fun() {
            document.getElementById("id").value = '';
            document.getElementById("fname").value = '';
            document.getElementById("lname").value = '';
            document.getElementById("age").value = '';
        }
    </script>



    <script type="text/javascript">
        $('#data-table').DataTable({
            paging: true
        });
    </script>

</body>

</html>