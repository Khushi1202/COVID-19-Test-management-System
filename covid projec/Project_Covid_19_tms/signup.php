<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'configg.php';   
    
	
    $username = $_POST["username"];
    $second  =  $_POST["second"]; 
    $email  =   $_POST["email"]; 	
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
	$contact = $_POST["contact"];
            
    
    $sql = "Select * from customerlogin where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `customerlogin` ( `username`, `second`,`email`,`password`,`contact`) VALUES ('$username', '$second', '$email', '$hash',  '$contact')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
				header("Location: loginsession.php");
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username Already Exists"; 
   } 
    
}//end if   
    
?>
    
<!doctype html>
    
<html lang="en">


  
<head>
<script>  
    function validate() {  
            var username = document.forms["RegForm"]["username"];
         
       if (username.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
		 if (second.value == "") {
            window.alert("Please enter your second name.");
            second.focus();
            return false;
        }
		 if (email.value == "") {
            window.alert("Please enter email.");
            email.focus();
            return false;
        }
		
		 if (password.value == "") {
            window.alert("Please enter password.");
            password.focus();
            return false;
        }
		 if (contact.value == "a-z") {
            window.alert("Please enter correct format.");
            contact.focus();
            return false;
        }
  
	}
</script>

    
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content=
        "width=device-width, initial-scale=1, 
        shrink-to-fit=no">
    
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">  
</head>
    
<body>
    <?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
?>
    

    
<div  class="container my-4 ">


      
    
    <h1 class="text-center">Signup Here</h1> 
    <form  name="RegForm"  method="post"   onsubmit="return validate()"  >
    
    
        <div class="form-group"> 
            <label for="username">Username</label> 
        <input type="text" class="form-control" id="username"
            name="username"  required="true" >    
        </div>
		
		<div class="form-group"> 
            <label for="secondname">Secondname</label> 
        <input type="text" class="form-control" id="second"
            name="second" required="true" >    
        </div>
		
		<div class="form-group"> 
            <label for="email">Email</label> 
        <input type="text" class="form-control"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email"
            name="email" required="true" >    
        </div>
    
        <div class="form-group"> 
            <label for="password">Password</label> 
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"class="form-control"
            id="password" name="password" required="true" > 
        </div>
    
        <div class="form-group"> 
            <label for="cpassword">Confirm Password</label> 
            <input type="password" class="form-control"
                id="cpassword" name="cpassword" required="true">
    
	<div class="form-group"> 
            <label for="contact">ContactNo</label> 
        <input type="text" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" id="contact"
            name="contact" required="true" >       
        </div>
            <small id="emailHelp" class="form-text text-muted">
            Make sure to type the same password
            </small> 
        </div>      
    
        <button type="submit" class="btn btn-primary">
        SignUp
        </button> 
		
		<br><br>
		
		
    </form> 
</div>
    
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
</script>
    
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous">
</script>
    
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous">
</script> 
</body> 
</html>