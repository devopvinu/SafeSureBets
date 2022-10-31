<?php
 session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'adm');

?>
<?php
if(isset($_POST['submit'])){  

    $name = $_POST['name'];
    $email= $_POST['email'];
    $comment= $_POST['comment'];


    $query = "INSERT INTO contact_us (`name`, `email`, `comment`) VALUES ('$name','$email','$comment')";
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      
           echo    ' <script type="text/javascript">
        alert("Thank You For Contacting Us");
        window.location = "contact.php";
       </script>';
           }
   

    
       }   else{
            echo    ' <script type="text/javascript">
         alert("Unable To Send !!");
         window.location = "contact.php";
        </script>';
            }

?>   
