
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Signup</title>
        <script>
          function validateForm()
          {
           var name = document.forms["register"]["sname"].value;
           var rno = document.forms["register"]["rollno"].value;
           var dept = document.forms["register"]["department"].value;
           var emailID = document.forms["register"]["emailid"].value;    
                    atpos = emailID.indexOf("@");
                    dotpos = emailID.lastIndexOf(".");    
           var psword = document.forms["register"]["password"].value;
           var ctword = document.forms["register"]["ctpassword"].value; 
           
            if (name == "") {
        alert("Your Name must be filled out!!!");
        return false;
    }
   if (rno == ""){
       alert("Your Rollno must be filled out!!!");
        return false;
   }
   if (dept == ""){
       alert("Your Department must be filled out!!!");
        return false;
   }
   if (atpos < 1 || ( dotpos - atpos < 2 )) {
       alert("Please enter correct email ID");
            document.register.emailid.focus() ;
            return false; 
        }
    
   if(psword == ctword && psword.length > 6){
         return true;
       }
   else{
         alert("password must be same!!! and Password must be greater than 6.");
         return false;
        }
     return( true );
          }
        </script>
        <style>
       
	  
        input[type=text] {
    width: 400px;
    padding: 18px 12px;
    margin:4px;
    background: #ffffff;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
input[type=text]:focus {
    border: 3px solid #555;
}

input[type=email]{
    width: 400px;
    padding: 18px 12px;
    margin: 4px ;
    background: #ffffff;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;    
}
input[type=email]:focus {
    border: 3px solid #555;
}

input[type=password]{
    width: 400px;
    padding: 18px 12px;
    margin: 4px ;
    background: #ffffff;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;    
}
input[type=password]:focus {
    border: 3px solid #555;
}

input[type=submit] {
    width: 100px;
    background-color: gold;
    color: white;
    font-size: 20px;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 150px;
}

input[type=submit]:hover {
    background-color: #18FFFF;
}

div.first{
    width: 410px;
    height: 470px;
    background: #f2f2f2;
    margin-left: 530px;
	margin-top: 30px;
    border: 2px solid;
  }
        </style>
    </head>

<body>
    
    <h2 style="text-align: center;color: #FFFF00;margin-top:35px">REGISTER THE FORM THEN LOGIN</h2>
    <div class="first">
        <form name="register" method="post"  onsubmit="return validateForm()"  action="signupdb.php">  
  <input type="text" id="name" name="sname" placeholder="Enter The Name...">
  <input type="text" id="rno" name="rollno" placeholder="Enter Your Rollno...">
  <input type="text" id="dept" name="department" placeholder="Enter your Department...">
  <input type="email" id="email" name="emailid" placeholder="Enter The Email Id....">
  <input type="password" id="psword" name="password" placeholder="Enter The Password...">
  <input type="password" id="cpsword" name="ctpassword" placeholder="Enter The Correct Password...">
  <input type="submit" id="smt" name="register">
  </form>
    </div>
</body>
</html>
