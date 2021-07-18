<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <section>
      <div class="circle"></div>
  
     <div class="container">
          <div class="text">
               <h1 class="logo">PET CITY</h1>
               <h2>Pets are humanizing.They reminds us we have an obligaton and responsibility to preserve and nurture and care for all life....</h2>
               <div class="img">
                    <img src="https://cdn.pixabay.com/photo/2020/07/17/18/16/pets-5414987_960_720.png" class="photo">
               </div>
               
          </div>
    
          <div class="box">
          
           <img src="image/img-2.gif" class="avater">
          <form action="login.php" method="post">
      <h2>SIGN IN</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <label>User Name</label>
      <input type="text" name="uname" placeholder="User Name"><br>

      <label>Password</label>
      <input type="password" name="password" placeholder="Password"><br>

      <button type="submit" value="">Sign in</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</div>
                   
     
         
     </div>
</section>

</body>
</html>
