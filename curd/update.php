<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['update_data']))
{
         $id = $_POST['update_id'];

         $league = $_POST['league'];
         $time = $_POST['time'];
         $teams = $_POST['teams'];
         $tip = $_POST['tip'];
         $odds = $_POST['odds'];

    $query = "UPDATE table1 SET  league='$league', time='$time', teams='$teams', tip='$tip', odds='$odds' WHERE id='$id'  ";
    
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
    
