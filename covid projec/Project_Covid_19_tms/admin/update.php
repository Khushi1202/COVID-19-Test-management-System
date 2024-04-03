<?php

include("configg.php");


// for updating user info    
if(isset($_POST['updaterecord']))
{
$fname=$_POST['fname'];
$mnumber=$_POST['mnumber'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$state=$_POST['state'];
$id=$_GET['id'];

$query=mysqli_query($conn,"UPDATE usertable set FullName='" . $_POST['fname'] . "', MobileNumber='" . $_POST['mnumber'] . "', DateOfBirth='" . $_POST['dob'] . "' , FullAddress='" . $_POST['address'] . "', State='" . $_POST['state'] . "' WHERE id='" . $_GET['id'] . "'");

if ($query) {
echo '<script>alert("Your information updated successfully")</script>';

} 
$_SESSION['msg2']="Profile Updated successfully";
}
  
?>
<html>

<style>

* {
    box-sizing: border-box !important;
    transition: ease all 0.5s;
}

html {
    scroll-behavior: smooth;
    overflow-x: hidden !important;
}

body {

    font-size: 20px;
  margin: -1px -1px
    line-height: 1.80857;
    font-weight: normal;
     margin: -1px -2px
	
	
}
table {
  text-align: left;
  font-family: "Montserrat", sans-serif;   
  border-collapse: collapse; 
  font-weight: bold;
  background-color: #CCFFFF;
}

th {
  background: skyblue;
  color: black;
  border-radius: 0;
 
  top: 0;
  padding: 20px;
}

tfoot > tr  {
  background: black;
  color: white;
}
tbody > tr:hover {
  background-color: pink;
}



</style>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<div class="admin-section-header" id="Dashboard">
        <div class="admin-logo">
        Covid-19 TMS
        </div> 
		<div class="admin-login-info">
            
            <h2><a href="manage.php" style="text-decoration: none; color:pink"> <u>Click here to go back </u></a></h2>
			 
            
        </div>
    </div>
	<div class="admin-container">
        <div class="admin-section admin-section1 ">
            <ul ><ul class="admin-navigation-schedule"><i class="fas fa-user-alt" ></i><a href="manage.php"style="text-decoration: none; color:yellow">  Manage  </a>
                
      </ul>
                
            </ul>
        </div> 


<meta charset="utf-8">
<div height="100%"  class="admin-section-panel admin-section-panel1" id="schedule">
                    <div class="admin-panel-section-header">
                        <h2>Edit Records </h2>
                        <i class="fas fa-calendar-alt" style="background-color: #cf4545"></i>
                    </div>
<div class="admin-panel-section-content">

<link rel="stylesheet" href="css/style.css" />
</head>
<body size="4" color="blue">

 <?php $ret=mysqli_query($conn,"select * from usertable where id='".$_GET['id']."'");
while($row=mysqli_fetch_array($ret))
{?>
<h3> <?php echo $row['FullName'];?>'s Details:</h3>

<table width="100%" border="2" cellpadding="10" cellspacing="10">

<form name="updateform" method="post" action="">
<tr><th>Username:</th><td><input type="text" name="fname" value="<?php echo $row['FullName'];?>"></td></tr>
<tr><th>Mobilenumber:</th><td><input type="text" name="mnumber" value="<?php echo $row['MobileNumber'];?>"></td></tr>
<tr><th>Date of birth:</th><td><input type="text" name="dob"  value="<?php echo $row['DateOfBirth'];?>"></td></tr>
<tr><th>Address:</th><td><input type="text" name="address" value="<?php echo $row['FullAddress'];?>"></td></tr>
<tr><th>State:</th><td><input type="text" name="state" value="<?php echo $row['State'];?>"></td></tr>
<tr><th>Update</th><td colspan="2" ><input type="submit" name="updaterecord" value="Update"></td></tr>
</table>
</form>
</center>
<?php }?>

</body>
</html>