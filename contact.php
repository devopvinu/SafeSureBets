<?php



?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Contact Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="./css/contact.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    

   
      <style>
       a:link {
  text-decoration: none;
}

  .center{
   margin-top: 60px;
  }

 .contact{
   padding-bottom:55px;

 }

</style>
   
    </head>
   <body>

    <!-- navigation bar  -->
    <?php  include('nav.php') ?>
    <br>
    
            
               
      <div class="container contact mb-15">
         <div class="row mb-15 ">

         
            <div class="col-md-3">
               <div class="contact-info">
                  <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                  <h2>Contact Us</h2>
                  <h4>We would love to hear from you !</h4>
               </div>
            </div>

            <div class="col-md-9">


               <form method="post" action="submit.php" >
					<div class="contact-form">

                    
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="name">Name:</label>
						 <div class="col-sm-10">          
							<input type="text" class="form-control" placeholder="Enter name" name="name" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="email">Email:</label>
						 <div class="col-sm-10">
							<input type="email" class="form-control"  placeholder="Enter email" name="email" required>
						 </div>
					  </div>

					 

					  
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="comment">Comment:</label>
						 <div class="col-sm-10">
							<textarea class="form-control" rows="5"  name="comment"></textarea>
						 </div>
					  </div>
					  <div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="submit" >Submit</button>
							<span style="color:red;" id="msg"></span>
						 </div>
					  </div>
                 
				   </div>
			   </form>
            </div>
         </div>
      </div> </div>  
	 
<div class="center">
<!-- FAQ PAGE -->
<?php include'faq.php' ; ?>   </div>
  
    
      <!-- Site footer -->
</div>     
<?php include'footer.php' ;?>
</div> 
      
  

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
               
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

   </body>
</html>