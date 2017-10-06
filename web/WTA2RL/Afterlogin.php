<?php
 include 'config.php'; 
 $email =$_POST['emailid'];
 $psword =$_POST['password'];
  $sql = "select emailid,password from register where emailid='$email' and password='$psword'";
$result=$conn->query($sql);

if(!$row=$result->fetch_assoc())
		{
			
			echo '<script type="text/javascript">'; 
echo 'alert("register is not successfully please Try Again");'; 
echo 'window.location = "Login.php";';
echo '</script>'; 
			
									

		}else
		{

			header("Location:InsideLogin.php");			
		}
	
  
  
	

        ?>
 