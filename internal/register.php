<?php
   session_start();
   require 'config.php';     	
?>
<html>
<style>
      h1{
        background-color:blue;
        padding-top:50px;
        padding-bottom:50px;
        text-align:center;
      } 
      h2{
          text-align:center;
        }
        body{
          margin:0px;
        }
      </style>
  <body>
<h1 style="color:white">PROPERTY SELLING</h1>
<h2 style="color:tomato;">Register</h2>
      <span><a href="home.html">Home</a></span>
    <form method="post" action="" >
        <table >
                <tr>
                 <td>Username :</td>
                 <td><input  type="text" name="username" class="textinput" ></td>
                 </tr>
                 <tr>
                 <td>Email :</td>
                 <td><input  type="email" name="email" class="textinput" ></td>
                 </tr>
                 <tr>
                 <td>Password : </td>
                 <td><input  type="password" name="password" class="textinput" ></td>
                 </tr>
                 <tr>
                 <td>Confirm Password :</td>
                 <td><input type="password" name="password1" class="textinput" ></td>
                 </tr>
				 <tr>
               <td>  <input  type="submit" value="register" name="register_btn" class="Register"> </td>
                 </tr>
                  <p>Already a member<a href="login.php">Sign in</a></p>
        </table>
    </form>
        <?php
	    if(isset($_POST['register_btn'])){
            $username=($_POST['username']);
            $email=($_POST['email']);
            $password=($_POST['password']);
            $password1=($_POST['password1']);
			if($password == $password1){
				$query="select * from user where username='$username'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists ....try another username")<
					script>';
					
				}else
				{
					$query="INSERT INTO user(username,email,password)VALUES('$username','$email','$password')";
					$sql=mysqli_query($con,$query);
					if($sql){
						echo '<script type="text/javascript">alert("user registered ...go to login page")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
         
		   }
		   else{
			   echo '<script type="text/javascript">alert("password and confirm password doesnot match")</script>';
		   }
	
		}

    ?>
   </div>

