<html>

<?php
   include("config.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     
      
      $sql = "SELECT id FROM users WHERE name = '".$_POST['name']."' and password = '".$_POST['password']."'";
      $result =$conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    
          
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
       
         
         echo "Welcome to Galaxy";
      }else {
         $error = "Your Login Name or Password is invalid";

      }
   }
?>



<head>
      <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Galaxy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

    <body>
        <div class="box">
            <h2>Login</h2>
            <form method="POST" action="index.php"> 
              <div class="inputBox">
                <input type="text" name="name" required>
                <label>Username</label>
                 <!--<div class="input">
                  <div class="title"> USERNAME</div>
                  <input class="text" type="text" placeholder=""/>
                </div>-->
              </div>
              <div class="inputBox">
                <input type="password" name="password" >
                       
                <label>Password</label>
                 <!--<div class="input">
                  <div class="title"> USERNAME</div>
                  <input class="text" type="text" placeholder=""/>
                </div>-->
              </div>
              <button type="submit" name="sign-in" value="Sign In"></button>
            </form>
          </div>

           

          </div>
    </body>

     

</head>
</html>