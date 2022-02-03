<?php 

  session_start();
?>

<html>
  <head>
     
      <title>Login</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
      
      <link href="login.css" type="text/css" rel="stylesheet">
    
  </head>
    
    <?php
        
         $Email="";
         $Email_er="";
         $pw="";
         $pw_er="";
    
        function validdata($formdata)
        {
            
            $formdata=trim(stripslashes(htmlspecialchars($formdata)));
            return $formdata;
        }
    
       if(isset($_POST["Login"]))
       {
           if(!$_POST["email"])
           {
               $Email_er="This field is Required";
               
           }
           else
           {
               
               $Email=validdata($_POST["email"]);
           }
           if(!$_POST["pwd"])
           {
               $pw_er="This field is Required";
               
           }
           else
           {
               
               $pw=validdata($_POST["pwd"]);
           }
           if($pw && $Email)
           {
               if(($_SESSION['Email']==$Email)&&($_SESSION["psd"]==$pw))
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
    
  <body>
      <div id="container">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
         <small class="text-danger">*<?php echo $Email_er;?></small>
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