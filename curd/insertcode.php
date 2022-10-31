<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['insertdata'])){
    
    $league = $_POST['league'];
      $time = $_POST['time'];
      $teams = $_POST['teams'];
      $tip = $_POST['tip'];
      $odds = $_POST['odds'];

    $query = "INSERT INTO table1 (`league`, `time`,  `teams`, `tip`,`odds`) VALUES ('$league','$time','$teams','$tip','$odds')";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>    
    
