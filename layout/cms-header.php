


<nav class="navbar cms-header navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Appellpo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="add-developer.php">Add Developer</a></li>
            <li><a href="add-projects.php">Add Project</a></li>
           
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Units <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="add-unit.php">Add unit</a></li>
               <!--  <li><a href="#">add thumbnail</a></li> -->
               <li><a href="add-lg-images.php">Add large images         </a></li>
               <li><a href="add-sm-images.php">Add small images         </a></li>
               <li><a href="add-video.php">Add video                </a></li>
               <li><a href="add-map-location.php">Add map location         </a></li>
               <li><a href="add-faciltyaminites.php">Add Facilty & aminities  </a></li>
               <li><a href="add-payment-plan.php">Add payment plan</a></li>
               <li><a href="add-unit-media2.php">Add Unit media</a></li>
                <!--<li><a href="view-units.php">View Units</a></li>-->
             
              </ul>
            </li>



               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add property <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Header Slider</a></li>
                <li><a href="#">Large slider</a></li>
                  <li><a href="add-homepage-lg-slider.php">Add home page slider</a></li>
                <li><a href="edit-remove-property.php">edit and remove units</a></li>

               
              </ul>
            </li>
             <li><a href="view-enquiry.php">Enqury</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <form action="admin.php" method="POST">
            <input type="submit"  value ="Sign Out" name="signout">
              </form>

            </li>
          
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <style type="text/css">
     
      .navbar-default {
  
    border-color:  #572390;
    background-color: #572390;
                      }

  .navbar-default .navbar-nav>li>a {
    color: white;
                                    }
                                    .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover{  color: white;}

                                    .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
                                          color: #555;
    background-color: white;
                                    }


                              
                                    .navbar-default .navbar-brand {
    color: white;
}

.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{  background-color: white;}
   
   body{padding-top:80px;}
    </style>


<?php

  //     }
  // else{
  //     // header('Location: admin.php');exit();
  //   echo $_POST['userid'];
  // }

  ?>