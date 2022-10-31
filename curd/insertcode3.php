<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['insertdata'])){
    
    $league = $_POST['league'];
      $team = $_POST['team'];
      $tip = $_POST['tip'];
      $results = $_POST['result'];

    $query = "INSERT INTO table3 (`league`, `team`,  `tip`, `result`) VALUES ('$league','$team','$tip','$results')";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: table3.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>    
    
