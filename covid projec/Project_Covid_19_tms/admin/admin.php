<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "covidtestreg");
    $sql = "SELECT * FROM  usertable";
    $bookingsNo=mysqli_num_rows(mysqli_query($link, $sql));
    $messagesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM usertable"));
    $moviesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM testdata"));
    ?>
    <div class="admin-section-header" id="Dashboard">
        <div class="admin-logo">
           Covid-19 Test Management 
        </div> 
		
        <div class="admin-login-info">
            <i class="far fa-bell admin-notification-button"></i>
            <i class="far fa-comment-alt"></i>
            <h2>Welcome, Admin</h2>
            <img class="admin-user-avatar" src="../img/avatar.png" alt="">
        </div>
    </div>
	
    <div class="admin-container">
        <div class="admin-section admin-section1 ">
            <ul>
                <ul><i class="fas fa-sliders-h"></i><a href="#Dashboard" style="text-decoration: none; color:red"> Dashboard </ul></a> <br><br>
                <ul class="admin-navigation-schedule"><i class="fas fa-calendar-alt"></i> <a href="#schedule"style="text-decoration: none; color:pink"> Schedule </a>
                </ul> <br><br>
				<ul class="admin-navigation-schedule"><i class="fas fa-user-alt" ></i><a href="manage.php"style="text-decoration: none; color:yellow"> Manage Users </a>
                </ul> <br><br>
                <ul class="admin-navigation-schedule"><i class="fas fa-circle-h" ></i><a href="login.php"style="text-decoration: none; color:skyblue"> Logout </a>
                </ul>
                
                
            </ul>
        </div>
		
        <div class="admin-section admin-section2">
            <div class="admin-section-column">
                <div class="admin-section-panel admin-section-stats">
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                        <h2 style="color: #cf4545"><?php echo $bookingsNo ?></h2>
                        <h3>Test Bookings</h3>
                    </div>
                    
                    <div class="admin-section-stats-panel" style="border: none">
                        <i class="fas fa-envelope" style="background-color: #3cbb6c"></i>
                        <h2 style="color: #3cbb6c"><?php echo $messagesNo ?></h2>
                        <h3>Messages</h3>
                    </div>
					
					<div class="admin-section-stats-panel" style="border: none">
                        <i class="fas fa-user-alt" style="background-color: blue"></i>
                        <h2 style="color: blue"> 12</h2>
                        <h3>New users</h3>
                    </div>
					
					<div class="admin-section-stats-panel" style="border: none">
                        <i class="fas fa-calendar-alt " style="background-color: hotpink"></i>
                        <h2 style="color: hotpink">10 </h2>
                        <h3>Taks added</h3>
                    </div>
					
					
                </div>
				<div class="admin-section-stats-panel" style="border: none">
                        
                       
                        <h3></h3>
                    </div>
                </div>
				
                <div class="admin-section-panel admin-section-panel1" id="schedule">
                    <div class="admin-panel-section-header">
                        <h2>Schedules</h2>
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                    </div>
                    <div  class="admin-panel-section-content">
                        <?php
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<div class=\"admin-panel-section-booking-item\">\n";
                                    echo "                            <div class=\"admin-panel-section-booking-response\">\n";
                                    echo "                                <i class=\"fas fa-check accept-booking\" title=\"Verify booking\"></i>\n";
                                    echo "                                <a href='deleteBooking.php?id=".$row['id']."'><i class=\"fas fa-times decline-booking\" title=\"Reject booking\"></i></a>\n";
                                    echo "                            </div>\n";
                                    echo "                            <div class=\"admin-panel-section-booking-info\">\n";
                                    echo "                                <div>\n";
                                    echo "                                    <h3>". $row['FullName'] ."</h3>\n";
                                    echo "                                    <i class=\"fas fa-circle \"></i>\n";
									
                                    
									
                                    echo "                                    <h4>". $row['MobileNumber'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle \"></i>\n";
									
                                    echo "                                    <h4>". $row['DateOfBirth'] ."</h4>\n";
                                    echo "                                </div>\n";
                                    echo "                                <div>\n";
                                    echo "                                    <h4>". $row['FullAddress'] ." </h4>\n";
                                    echo "                                    <i class=\"fas fa-circle\"></i>\n";
                                    echo "                                    <h4>". $row['State'] ."</h4>\n";
                                    echo "                                </div>\n";
                                    echo "                            </div>\n";
                                    echo "                        </div>";
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Bookings right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                    </div>
                </div>
                
            <div class="admin-section-column">
                <div class="admin-section-panel admin-section-panel4">
                    <div class="admin-panel-section-header">
                        <h2>Schedule</h2>
                        <i class="fas fa-clock" style="background-color: #3cbb6c"></i>
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel5">
                    <div class="admin-panel-section-header">
                        <h2>To-do List</h2>
                        <i class="fas fa-list-ol" style="background-color: #bb3c95"></i>
                    </div>
                    <div class="admin-panel-section-content"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>