<?php


include('update.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>

<style>

.card{

 margin-left:10%;

}

</style>

</head>
<body>




<?php
function getyesterday(){
    global $con;
    ?>
           <div class="card">
                <div class="card-body">
    
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'adm');

                $query = "SELECT * FROM table1";
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
                                <td> <?php echo $row['teams']; ?> </td>
                                <td> <?php echo $row['tip']; ?> </td>
                                <td> <?php echo $row['result']; ?> </td>
                                
                                   
                                <td>
                                    <button type="button" formaction="update.php" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
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

         <?php   }  ?>





         <?php
function gettoday(){
    global $con;
    ?>
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

         <?php   }  ?>





         <?php
function gettomorrow(){
    global $con;
    ?>
           <div class="card">
                <div class="card-body">
    
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'adm');

                $query = "SELECT * FROM table3";
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
                                   <button type="button" name="update_data" class="btn btn-success editbtn"> EDIT </button>
                                </a>   </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
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

         <?php   }  ?>


         <?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['update_data']))
{
         $id = $_POST['update_id'];

      $league = $_POST['league'];
      $teams = $_POST['teams'];
      $tip = $_POST['tip'];
      $results = $_POST['result'];

    $query = "UPDATE table1 SET  league='$league', teams='$teams', tip='$tip', result='$results' WHERE id='$id'  ";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>    
    



 </body>
  </html>