<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['update_data']))
{
         $id = $_POST['update_id'];

      $league = $_POST['header'];
      $teams = $_POST['text'];
      $tip = $_POST['copyright'];
     

    $query = "UPDATE footer SET  header='$league', textt='$teams', copyright='$tip' WHERE id='$id'  ";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: footerd.php');
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>    
    
