<?php 
  session_start();
  include('Connect.php');
?>

<html>
  <head>
     
      <title>Login</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
      
      <link href="login.css" type="text/css" rel="stylesheet">
      
    <?php
      
         $email_er="";
         $pw_er="";
         $email="";
         if(isset($_POST["Login"]))
         {
             
             function validdata($formdata)
             {
                 $formdata=trim(stripslashes(htmlspecialchars($formdata)));
                 return $formdata;
             }
             
             if(!$_POST["email"])
             {
                 $email_er="This Filed is required";
             }
             else
             {
                 $email=validdata($_POST['email']);
             }
             if(!$_POST["pwd"])
             {
                 $pw_er="This field is required";
                 
             }
             else
             {
                 $pw=validdata($_POST['pwd']);
             }
             
               
             $query="SELECT Email,password FROM `user` WHERE Email='$email' ";
             
               $result=mysqli_query($conn,$query);
             
             if(mysqli_num_rows($result)>0)
             {
                 
                 while($row=mysqli_fetch_assoc($result))
                 {
                     
                     $em=$row['Email'];
                     $pd=$row['password'];
                 }
                 
                 
                 if($pd==$pw)
                 {
                     header("location:Home.html");
                 }
                 else
                 {
                     header("location:Eror.html");
                 }
             }
             
         }
      
      ?>
    
  </head>
    
    
    
  <body>
      <div id="container">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
     <small class="text-danger">*<?php echo $email_er;?></small>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
   <small class="text-danger">*<?php echo $pw_er;?></small>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
    </div>
    
  <button type="submit" class="btn btn-primary" name="Login">Login</button>
        
          <a href="" id="a">Forgot password</a>
          
  </form>
      </div>
      
     
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="bootstrap/js/bootstrap.min.js" type="text/javascript">
      
      
      </script>
  </body>
</html>