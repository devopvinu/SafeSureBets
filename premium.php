<?php
include  "./includes/connect1.php";
include "tab.php";


$socia = mysqli_query($conn,"SELECT * FROM premium");
$premium  = mysqli_fetch_array($socia);


?>






<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="₹ 999, 30 €, 30 $, ৳ 2000 bbt, 2000, 30 $">
    <meta name="description" content="">
    <title>premium</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="premium.css">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    
    
   
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content=" safe sure bets premium plans">
    <meta property="og:type" content="website">

    <style>
   a:link {
  text-decoration: none;
}
  


  </style>
 
  </head>
  
          <!-- navigation bar  -->
       <?php  include('nav.php') ?>

       
    </header>

   <!-- pricing plans include -->

<?php   getpplans();  ?>







<!-- FAQ PAGE -->
<?php include'faq.php' ; ?>
                
    
    <!-- Site footer -->  
    <?php include'footer.php' ;?>


     

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  <script src="../path/to/flowbite/dist/flowbite.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6324644754f06e12d89517d2/1gd32felr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>