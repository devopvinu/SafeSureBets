<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

if(isset($_POST['delete_data']))
{
         $id = $_POST['delete_id'];

         $query = "DELETE FROM contact_us   WHERE id='$id'  ";
         $query_run = mysqli_query($connection, $query);
     
         if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: contactus.php');
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>    
