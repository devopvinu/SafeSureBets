<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['update_data']))
{
         $id = $_POST['update_id'];

      $league = $_POST['facebook'];
      $teams = $_POST['twitter'];
      $tip = $_POST['instagram'];
      $results = $_POST['telegram'];
      $youtube = $_POST['youtube'];

    $query = "UPDATE social SET  facebook='$league', twitter='$teams', instagram='$tip', telegram='$results', youtube='$youtube' WHERE id='$id'  ";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: sociald.php');
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>    
    
