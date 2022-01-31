<?php

   include('Connect.php');

?>

<?php
    $name_er="";
        $name="";
        $email_er="";
        $email="";
        $num_er="";
        $num="";
        $pw_er="";
        $pw="";
    if(isset($_POST['submit']))
    {
        
        function Validdata($formdata)
        {
            
            $formdata=trim(stripslashes(htmlspecialchars($formdata)));
            return $formdata;
        }
        if(!$_POST["Name"])
        {
            $name_er="This field is neccessary";
            
            
        }
        else
        {
            
            $name=Validdata($_POST["Name"]);
        }
        if(!$_POST["Email"])
        {
            $email_er="This field is neccessary";
            
            
        }
        else
        {
            
            $email=Validdata($_POST["Email"]);
        }
        if(!$_POST["Number"])
        {
            $num_er="This field is neccessary";
            
            
        }
        else
        {
            
            $num=Validdata($_POST["Number"]);
        }
        if(!$_POST["pwd"])
        {
            $pw_er="This field is neccessary";
            
            
        }
        else
        {
            
            $pw=Validdata($_POST["pwd"]);
        }
            
        
    }


?>

<html>
    
    <head>
    
        <title>Registration</title>
        
    </head>
    
    
      <link href="Paper.css" type="text/css" rel="stylesheet">
   <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    
    <!-- CDN-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <body>
    
     
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"   method="post" class="form-inline col-xs-12 " id="form">
        
  <div class="form-group">
    <label class="sr-only" for="username">Name:</label>
      <small class="text-danger">*<?php echo $name_er; ?></small>
    <input type="text" class="form-control" id="username" placeholder="Enter username" name="Name"> 
  </div>
                
  <div class="form-group">
    <label class="sr-only" for="Email">Email:</label>
       <small class="text-danger">*<?php echo $email_er; ?></small>
    <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email">
  </div>

            
    <div class="form-group">
    <label class="sr-only" for="Number">Number:</label>
         <small class="text-danger">*<?php echo $num_er; ?></small>
    <input type="tel" class="form-control" id="Number" placeholder="Enter Number" name="Number">
    </div>
        
    <div class="form-group">
    <label class="sr-only" for="pwd">Password:</label>
         <small class="text-danger">*<?php echo $pw_er; ?></small>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
   </div>
        
  <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>

<button type="submit" class="btn btn-primary" id="Login" name="Login">Login</button>
</form>

    
       
        
    
    <script src="bootstrap/js/bootstrap.min.js">  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    
    
</html>