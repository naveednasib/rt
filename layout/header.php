

	 <?php 


	   include_once('connection.php'); 



				$sql1 = "SELECT * FROM tbl_unitdetail";
				$selectresult1 = mysqli_query($conn, $sql1);
				
				$fetchDeveloper = "SELECT * FROM `tbl_developer`";
				$developerQuery = mysqli_query($conn,$fetchDeveloper);   

		

?>
 
  
	<header class="header">
		<div class="header-tab1 mid-container clearfix">
			<div class="logo col-xs-12 col-md-4 ">
				<a href="/index.html">
					<i>
						<img src="images/logo.png" width="200" height="61" />
					</i>
				</a>
			</div>
			<div class="info-tab col-xs-12 col-md-8">
				<div class="info-box first">
					<div class="icons" style="padding-left: 17px;"><i class="glyphicon glyphicon-earphone"></i></div>
					<ul>
						<li><strong>Phone Number</strong></li>
						<li>+971 52 4474 455</li>
					</ul>
				</div>
				<div class="info-box">
					<div class="icons"><i class="glyphicon glyphicon-home"></i></div>
					<ul>
						<li><strong>Burlington Tower,</strong></li>
						<li>Office 2602, Business Bay, Dubai</li>
					</ul>
				</div>
				<div class="info-box">
					<div class="icons"><i class="glyphicon glyphicon-envelope"></i></div>
					<ul>
						<li><strong>Email Address</strong></li>
						<li><a href="javascript:void(0)">info@offplandxb.ae</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="header-tab2  mid-container">


			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>





<li class="">

<div class="dropdown custom-dd">
    <a class="dropdown-toggle" type="button" data-toggle="dropdown">Dubai Developer
    <span class="caret"></span></button>
    
	
	<ul class="dropdown-menu">

			 <?php  while($rowUnit2 = mysqli_fetch_array($developerQuery)):; ?>

											<li class="dropdown-submenu">
													
														<a tabindex="-1"  class="test" href="javascript void(0)">
														<?php  echo $rowUnit2[1] ?>
														<span class="caret"></span>
														
														</a>
										
										
										<?php 
										 $dev_id = $rowUnit2[0] ;
				$getDeve_id = " SELECT * FROM tbl_projects WHERE  project_devId = '$dev_id' ";
				$getDeve_id_Query = mysqli_query($conn,$getDeve_id );   
										?>

										
										 <ul class="dropdown-menu">
					 <?php  while($projectDetail= mysqli_fetch_array($getDeve_id_Query )):; ?>
        
          <li><a tabindex="-1"  target="_blank" href="unitdetail.php?id=<?php echo $projectDetail[0] ?>"> <?php echo $projectDetail[1] ?></a></li>
        <?php  endwhile; ?>

        </ul>


										  
 </li>
	  <?php  endwhile; ?>
								


      </li>




    </ul>
  </div>
	 

	  </li>




							<li class="dropdown sliding-nav-container parent-nav">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dubai Projects <span class="caret"></span></a>
								<ul class=" slilding-nav child-nav">

									<!--link list -->
						   <!--          <li class="propertylisting-link col-sm-3 col-xs-12">
										<h5 class="heading">Properties List</h5>
										<ul class="">

											<li><a href="#">Properties List</a></li>
											<li><a href="#">Single Property</a></li>
											<li><a href="#">Search by City</a></li>
											<li><a href="#">Search by Category</a></li>
											<li><a href="#">Search by Type</a></li>

										</ul>

									</li> -->
									<!--link list -->
									<!--slider navigation container-->
									<li class="property-slider-nav col-sm-12 col-xs-12 ">
										<div class="col-xs-12"><h5 class="heading">PROPERTIES LIST</h5></div>

										<ul class="nav-dynamic-container">
										 <?php   while($rowUnit1 = mysqli_fetch_array($selectresult1)):; ?>
											<li>
										<a href="unitdetail.php?id=<?php echo $rowUnit1[0] ?>">
											<?php echo $rowUnit1[1] ?>
										</a>
										   </li>

									  <?php  endwhile; ?>
										</ul>
									</li>
									<!--slider navigation container-->
 
								</ul>
							</li>
						   <!--  <li><a href="/unitdetail.html">Developers</a></li> -->
							

						
						<li><a  href="contactus.php">Contact Us</a></li>
					  <!--   <ul class="nav navbar-nav navbar-right search-input">
							<li class="form-group">

								<input type="text" placeholder="search" class="form-control" />

							</li>
							<!--   <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
					  <!-- 	</ul> 
						-->
					</div>
				</div>
			</nav>
		</div>
	</header>


<style>
.dropdown-submenu {
	position: relative;
}

.dropdown-submenu .dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -1px;
}
</style>

