<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['update_data']))
{
         $id = $_POST['update_id'];

      $league = $_POST['league'];
      $teams = $_POST['team'];
      $tip = $_POST['tip'];
      $results = $_POST['result'];

    $query = "UPDATE table2 SET  league='$league', team='$teams', tip='$tip', result='$results' WHERE id='$id'  ";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: table2.php');
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>    
    
