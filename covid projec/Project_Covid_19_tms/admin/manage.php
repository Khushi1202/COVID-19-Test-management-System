<?php

include("configg.php");
?>
<!DOCTYPE html>
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

    font-size: 22px;
    margin: -1px -1px
}
table {
  
  font-family: "Montserrat", sans-serif;   
  border-collapse: collapse; 
  ;
  background-color: #CCFFFF;
}

th {
  background: skyblue;
  color: white;
  border-radius: 0;
 
  top: 0;
  padding: 10px;
}

tfoot > tr  {
  background: black;
  color: white;
}
tbody > tr:hover {
  background-color: #ffc107;
}



</style
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
            
            <h2><a href="admin.php" style="text-decoration: none; color:red"> Go to Dashboard </a></h2>
			 
            <img class="admin-user-avatar" src="../img/avatar.png" alt="">
        </div>
    </div>

 <div class="admin-container">
        <div class="admin-section admin-section1 ">
            <ul ><ul class="admin-navigation-schedule"><i class="fas fa-user-alt" ></i><a href="manage.php"style="text-decoration: none; color:yellow"> Records </a>
                
      </ul>
                
            </ul>
        </div> 


<meta charset="utf-8">
<div height="100%"  class="admin-section-panel admin-section-panel1" id="schedule">
                    <div class="admin-panel-section-header">
                        <h2>View records</h2>
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                    </div>
<div class="admin-panel-section-content">

<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<table width="100%" border="2" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>id</strong></th>
<th><strong>Username</strong></th>
<th><strong>Mobilenumber</strong></th>
<th><strong>Dob</strong></th>
<th><strong>Address</strong></th>
<th><strong>State</strong></th>
<th><strong>Edit</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from usertable ORDER BY id asc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["FullName"]; ?></td>
<td align="center"><?php echo $row["MobileNumber"]; ?></td>
<td align="center"><?php echo $row["DateOfBirth"]; ?></td>
<td align="center"><?php echo $row["FullAddress"]; ?></td>
<td align="center"><?php echo $row["State"]; ?></td>
<td align="center">
<a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>

</tr>
<?php $count++; } ?>

</tbody>
</table>

</div>
</body>
</html>