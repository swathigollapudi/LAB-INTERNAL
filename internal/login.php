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
    <div>
      <h1 style="color:white">PROPERTY SELLING</h1>
       <h2 style="color:tomato">LOGIN PAGE</h2>    
      <span><a href="home.html">Home</a></span>
     </div>
    <h3 style="color:black;">Login</h3>
    <form  method="post" action= "">
     username:  <input type="text" name="username"/><br/>
     <br>
     password:  <input type="password" name="password"/><br/>
     <input type="submit" value="login" name="login"/><br>
   </form>
<?php
  if(isset($_POST['login'])){
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from user where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location: property.html");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
	            }
   }
?>
</html>
