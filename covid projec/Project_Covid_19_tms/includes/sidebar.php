        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Book Your Test </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
<?php if($_SESSION['aid']):?>


     

<?php else:    ?>          
         
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                COVID19 Testing
            </div>
<h3>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="Testbooking.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Testing</span>
                </a>
                
            </li>
 <li class="nav-item">
                <a class="nav-link" href="TestTracking.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Test Details</span></a>
            </li>
			
			<li class="nav-item">
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Home</span>
                </a>
                
            </li>
         

</h3>
<?php endif;    ?>          

            

        </ul>
        <!-- End of Sidebar -->