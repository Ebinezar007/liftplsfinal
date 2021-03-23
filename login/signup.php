
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
            <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

        <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name" style="margin-top: 25px;"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name" style="margin-top: 25px;"><br>
          <?php }?>
        </div>
        
        <div class="form-group">
             <label for="email"><i class="zmdi zmdi-email"></i></label>  
                <?php if (isset($_GET['uname'])) { ?>
                     <input type="text" 
                      name="uname" 
                      placeholder="User Name" style="margin-top: 25px;"
                      value="<?php echo $_GET['uname']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                      name="uname" 
                      placeholder="User Name" style="margin-top: 25pxpx;"><br>
                <?php }?>

        </div>
        <div class="form-group">
             <label for="pass"><i class="zmdi zmdi-lock"></i></label>
     	        <input type="password" 
                 name="password" 
                 placeholder="Password" style="margin-top: 25px;"><br>

        </div>
        <div class="form-group">
            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> 
            <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password" style="margin-top: 25px;"><br>
        </div>
        <div class="form-group form-button">
            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
        </div>
     </form>
            </div>
            <div class="signup-image">
                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                <a href="signin.php" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->