<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=email], input[type=password] {
    width: 300px;
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
    width: 200px;
}

button:hover {
    opacity: 0.8;
}



.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 15%;
    border-radius: 50%;
}





@media screen and (max-width: 100px) {
    span.psw {
       display: block;
       float: none;
    }
    
}
</style>
<body>

<h2>Login Form</h2>



<form name="Login" action="/WTA2RL/Afterlogin.php" method="post" >
  <div class="imgcontainer">
    <img src="Group-Avatar-2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label style="margin-left:530px"><b>Email Id</b></label>
    <input style="margin-left:15px" type="email" placeholder="Enter Email id" name="emailid" required><br/>

    <label style="margin-left:530px"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br/>
        <br/>
	<a href="/WTA2RL/Register.php"><button style="margin-left:530px;background-color:#464263" type="button">Cancel</button></a>

    <button  type="submit">Login</button><br/>  
  </div>
</form>

</body>
</html>
