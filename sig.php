<?php
 include("configg.php");
?>
<html>
<head>
   <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="POST">
    <h4 class="display-4 text-center">Sign in</h4><hr><br>

   <div class="form-group">
   <label for="exampleInputEmail1"> Email</label>
     <input type:"text" name="email" class="form-control" placeholder=" Enter Email"><br>
      </div>

      <div class="form-group">
         <label> Password</label>
       <input type:"text" name="password" class="form-control" placeholder="Enter Password"><br>
       
       
            <input type="submit" name="submit" class="btn btn-primary">
</form>
<?php
if(isset($_POST['submit']))
{

   $email=$_POST['email'];
   $password=$_POST['password'];
   
   $res=mysqli_query($mysqli,"INSERT into log values('','$email','$password')");
   if($res)
   {
    echo "success";
   }
   else
   {
    echo "failed";
   }
}
?>
</body>
</html>