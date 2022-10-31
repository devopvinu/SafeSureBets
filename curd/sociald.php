<?php
   
   session_start();
   if(isset($_GET['logout']))
   {
    session_destroy();
    header("location:../admin/login.php");
   }

 



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

<style>

.card{

 margin-left:10%;

}

</style>

</head>
<body>




<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit This Bet </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecontactf.php" method="POST">

                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label> Facebook </label>
                            <input type="text" name="facebook"  id="facebook" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label> Twitter </label>
                            <input type="text" name="twitter" id="twitter" class="form-control" >
                        </div>

                       

                        <div class="form-group">
                            <label> Instagram </label>
                            <input type="text" name="instagram" id="instagram" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label> Telegram </label>
                            <input type="text" name="telegram"  id="telegram" class="form-control" >
                        </div> 
                        <div class="form-group">
                            <label> Youtube </label>
                            <input type="text" name="youtube"  id="youtube" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update_data" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



      <!-- main content starts -->
      <div class="container ">
        <div class="jumbotron">
            <div class="card ">
                <h2> Welcome <?php echo $_SESSION['User']  ?>  </h2>
            </div>
            <div class="card">
                <div class="card-body">
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Bets Tabs
            </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.php">Table 1</a></li>
                  <li><a class="dropdown-item" href="table2.php">table 2</a></li>
                  <li><a class="dropdown-item" href="table3.php">Table 3</a></li>
                </ul> 
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 web Data
            </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="sociald.php">Social</a></li>
                  <li><a class="dropdown-item" href="footerd.php">footer</a></li>
                  <li><a class="dropdown-item" href="premiumd.php">Premium</a></li>
                </ul>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD Bets
                    </button>
                    <a class="btn btn-primary" href="contactus.php" role="button">Contact Form</a>


                    <button><a href="index.php?logout" name="logout" type="button" class="btn btn-danger">Logout !!</a></button>

                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
    
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'adm');

                $query = "SELECT * FROM social";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">FACEBOOK</th>
                                <th scope="col">TWITTER</th>
                                 <th scope="col">INSTAGRAM</th>
                               <th scope="col">TELEGRAM</th>
                               <th scope="col">YOUTUBE</th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                               <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['facebook']; ?> </td>
                                <td> <?php echo $row['twitter']; ?> </td>
                                <td> <?php echo $row['instagram']; ?> </td>
                                <td> <?php echo $row['telegram']; ?> </td>
                                <td> <?php echo $row['youtube']; ?> </td>
                                
                                   
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                               
                               
                            </tr>
                        </tbody>

                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

   
          <script>

        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#facebook').val(data[1]);
                $('#twitter').val(data[2]);
                $('#instagram').val(data[3]);
                $('#telegram').val(data[4]);
                $('#youtube').val(data[5]);

            });
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>