<?php
   
   session_start();
   if(isset($_GET['logout']))
   {
    session_destroy();
    header("location:../admin/login.php");
   }

   include('dump.php');



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




    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <form action="insertcode2.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> League </label>
                            <input type="text" name="league" class="form-control" placeholder="Enter league Name">
                        </div>

                        <div class="form-group">
                            <label> Home </label>
                            <input type="text" name="team" class="form-control" placeholder="Enter Home Name">
                        </div>

                        

                        <div class="form-group">
                            <label> Tip </label>
                            <input type="text" name="tip" class="form-control" placeholder="Enter Tips">
                        </div>

                        <div class="form-group">
                            <label> Result </label>
                            <input type="text" name="result" class="form-control" placeholder="Enter Result">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
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

                <form action="update2.php" method="POST">

                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label> League </label>
                            <input type="text" name="league"  id="league" class="form-control" placeholder="Enter league Name">
                        </div>

                        <div class="form-group">
                            <label> Teams </label>
                            <input type="text" name="team" id="team" class="form-control" placeholder="Enter Home Name">
                        </div>

                       

                        <div class="form-group">
                            <label> Tip </label>
                            <input type="text" name="tip" id="tip" class="form-control" placeholder="Enter Tips">
                        </div>

                        <div class="form-group">
                            <label> Result </label>
                            <input type="text" name="result"  id="result" class="form-control" placeholder="Enter Result">
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

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode2.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="delete_data" class="btn btn-primary"> Yes !! Delete it. </button>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD Bets
                    </button>

                    <button><a href="index.php?logout" name="logout" type="button" class="btn btn-primary">Logout !!</a></button>

                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
    
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'adm');

                $query = "SELECT * FROM table2";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">League </th>
                                <th scope="col">team</th>
                                 <th scope="col">Tip</th>
                               <th scope="col">Result</th>
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
                                <td> <?php echo $row['league']; ?> </td>
                                <td> <?php echo $row['team']; ?> </td>
                                <td> <?php echo $row['tip']; ?> </td>
                                <td> <?php echo $row['result']; ?> </td>
                                
                                   
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                                <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD Bets
                    </button>                                </td>
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

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        // edit form getting data script //

        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#league').val(data[1]);
                $('#team').val(data[2]);
                $('#tip').val(data[3]);
                $('#result').val(data[4]);

            });
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>