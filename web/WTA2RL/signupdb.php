 <?php
  include 'config.php';
    $link = mysqli_connect("$servername", "$username", "$password", "$dp");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $studname = mysqli_real_escape_string($link, $_POST['sname']);
    $rlno = mysqli_real_escape_string($link, $_POST['rollno']);
    $depmt = mysqli_real_escape_string($link, $_POST['department']);
    $email= mysqli_real_escape_string($link, $_POST['emailid']);
	$psword = mysqli_real_escape_string($link, $_POST['password']);
    $cpsword= mysqli_real_escape_string($link, $_POST['ctpassword']);
	
	
    $sql = "INSERT INTO register (name, rollno, department, emailid, password, cpassword) VALUES ('$studname', '$rlno', '$depmt', '$email', '$psword', '$cpsword')";
    if(mysqli_query($link, $sql)){
   
echo '<script type="text/javascript">'; 
echo 'alert("register is successfully");'; 
echo 'window.location = "Login.php";';
echo '</script>'; 
    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);

    ?>

