<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("location:beranda.php");
  }
  include("function.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head><title>LOGIN</title></head>
   <style media="screen">
   body{
     background-image: url('hero.jpg');
   }
   h1{

     color: black;
     text-align: center;
   }
   form {
       border: 3px solid #f1f1f1;
   }
   input[type=text], input[type=password] {
       width: 100%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 1px solid #ccc;
       box-sizing: border-box;
   }
   button {
       background-color: #4CAF50;
       color: white;
       padding: 14px 20px;
       margin: 8px 0;
       border: none;
       cursor: pointer;
       width: 100%;
   }
   button:hover {
       opacity: 0.8;
   }
   .cancelbtn {
       width: auto;
       padding: 10px 18px;
       margin-right: 950px;
       background-color: #f44336;
   }
   .container {
       padding: 16px;
   }

   span.psw {
       float: right;
       padding-top: 16px;
   }

   @media screen and (max-width: 300px) {
       span.psw {
           display: block;
           float: none;
       }
       .cancelbtn {
           width: 100%;
       }
     }
   </style>
   <body>
     <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "wrong") {
            echo "<h3>Username dan Password salah !</h3>";
          }
        }

        if (isset($_GET["notif"])) {
          if ($_GET["notif"] == "logout") {
            echo "<h3>Berhasil Logout! </h3>";
          }
        }

        if (isset($_POST['submit'])) {
          echo do_login($_POST['username'], $_POST['password']);
        }
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h1>LOG-IN</h1>
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
      </form>
   </body>
 </html>
