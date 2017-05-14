    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/css/main.css" rel="stylesheet" />
    <title>Home page</title>
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 


    <style>        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        vertical-align:middle;
        }
     
    </style>

    <?php 

    // $urld = "asd";


    // setcookie( $urld ,$_POST['urld']);
    // echo  $_COOKIE['urld'] ;

 // Hello David!
    ?>
         <?php 


      $servername = "localhost";
          $username = "root";
          $password = "";
         $dbname = "appelo";


         $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
                } 


                $sql = "SELECT id,project_developer FROM tbl_developer";
                $selectresult = mysqli_query($conn, $sql);


           
           


        if(isset($_POST['project_submit'])){


              $username                = $_POST['unit-project'];
              $unit_developerId        = $_POST["unit-developerName"];
              $unit_developerName      = $_POST["unit-developertxt"];


          

            if(trim($username) == "" && !empty($username)){
                echo ("plesae insert data");

            }

                else{

                     $insert_project="insert into tbl_projects(project_name,project_developer,project_devId) values
                ('$username',' $unit_developerName',' $unit_developerId')";

                  $result = mysqli_query($conn,$insert_project);

                  

               
                }

           
                  

        }


 

?>


</head>
<body>
    <!--header-->
    <header class="header">
        <div class="header-tab1 mid-container clearfix">
            <div class="logo col-xs-12 col-md-4 ">
                <a href="/">
                    <i>
                        <img src="images/logo.png" width="200" height="61" />
                    </i>
                </a>
            </div>



            <div class="info-tab col-xs-12 col-md-8">
                <div class="info-box first">
                    <div class="icons"><i class="glyphicon glyphicon-earphone"></i></div>
                    <ul>
                        <li><strong>Phone Number</strong></li>
                        <li>+971 52 4474 455</li>
                    </ul>
                </div>
                <div class="info-box">
                    <div class="icons"><i class="glyphicon glyphicon-heart"></i></div>
                    <ul>
                        <li><strong>Burlington Tower,</strong></li>
                        <li>Office 2602, Business Bay, Dubai</li>
                    </ul>
                </div>
                <div class="info-box">
                    <div class="icons"><i class="glyphicon glyphicon-envelope"></i></div>
                    <ul>
                        <li><strong>Email Address</strong></li>
                        <li><a href="javascript:void(0)">info@appello.ae</a></li>
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
                            <li class="active"><a href="/home.html">Home</a></li>
                            <li class="dropdown sliding-nav-container parent-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dubai Projects <span class="caret"></span></a>
                                <ul class=" slilding-nav child-nav">

                                    <!--link list -->
                                    <li class="propertylisting-link col-sm-3 col-xs-12">
                                        <h5 class="heading">Properties List</h5>
                                        <ul class="">

                                            <li><a href="#">Properties List</a></li>
                                            <li><a href="#">Single Property</a></li>
                                            <li><a href="#">Search by City</a></li>
                                            <li><a href="#">Search by Category</a></li>
                                            <li><a href="#">Search by Type</a></li>

                                        </ul>

                                    </li>
                                    <!--link list -->
                                    <!--slider navigation container-->
                                    <li class="property-slider-nav col-sm-9 col-xs-12 ">
                                        <div class="col-xs-12"><h5 class="heading">PROPERTIES LIST</h5></div>
                                        <div id="nav-slider" class="carousel paddingZ col-xs-12 slide nav-slider" data-interval="false" data-ride="carousel">
                                            <!-- Indicators -->
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item clearfix active">

                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p >
                                                    </div>
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p >
                                                    </div>
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p>
                                                    </div>

                                                </div>

                                                <div class="item clearfix ">
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p>
                                                    </div>
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p>
                                                    </div>
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p>
                                                    </div>

                                                </div>

                                                <div class="item clearfix ">
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p>
                                                    </div>
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p>
                                                    </div>
                                                    <!--tile-->
                                                    <div class="tile col-xs-4">
                                                        <div class="relative">
                                                            <img class="img-responsive" src="images/nav-slider.jpg" />
                                                            <span class="abs-sale">Fore Sale</span>
                                                        </div>

                                                        <h6 class="heading"><a href="#">Park Avenue Apartment</a></h6>
                                                        <p class="para">Towson London, MR 21501</p>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Left and right controls -->
                                            <div class="nav-control-container clearfix">
                                                <a class="left carousel-control" href="#nav-slider" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#nav-slider" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!--slider navigation container-->


                                </ul>
                            </li>
                            <li><a href="/unitdetail.html">Developers</a></li>
                            <li><a href="#">About Us </a></li>
                            <li><a href="/contactus.html">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--header-->


    <section class="datasets top-container">

        <div class="mid-container clearfix">
          
        <div class="col-xs-12 ">
            <h2>Add Project</h2>

            <form action="add-projects.php" method="post">
            <table class="table table-striped table-responsive">
                <tr>
                   
                      <td colspan="2" class="form-group">

                         <input type="text" required name="unit-project" class="form-control" placeholder="add Projects" />  

                      </td>
                </tr>



                 <tr>
                        <td><strong>Developer Name </strong> </td>
                        <td class="form-group">


                              <select required name="unit-developerName" onchange="setTextField(this)" class="form-control select-option">
                                <?php   while($row1 = mysqli_fetch_array($selectresult)):; ?>

                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1] ?></option>

                                <?php  endwhile; ?>
                       
                                </select>
                            

                            <input required id="developer-txt" type = "hidden" 
                            name = "unit-developertxt" value = "" />

                        </td>
                    </tr>


                   <tr>
                   
                      <td colspan="2" class="form-group">

                         <input type="submit" required name="project_submit" class="form-control btn btn-success"  value="submit" />  

                      </td>
                </tr>
            </table>
                </form>
        </div>













         
        </div>
    
       
    </section>



    <!--footer-->
    <footer>
        <div class="mid-container">
            <div class="footer1 clearfix">

                <div class="col-xs-12 col-sm-3 col-1">
                    <img src="images/logo.png" width="200" height="61" />
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing.</p>
                    <p>If you are interested in castle do not wait and BUY IT NOW!</p>

                    <div class="social-icon-container">
                        <span class="f"><a href><i class="fa fa-facebook" aria-hidden="true"></i>     </a>  </span>
                        <span class="g"><a href><i class="fa fa-google-plus" aria-hidden="true"></i>  </a>      </span>
                        <span class="t"><a href><i class="fa fa-twitter" aria-hidden="true"></i>      </a>      </span>
                        <span class="v"><a href><i class="fa fa-vimeo" aria-hidden="true"></i>        </a>      </span>
                    </div>

                </div>





                <div class="col-xs-12 col-sm-3 col-2">
                    <h2 class="heading" data-toggle="collapse" href=".search-area" aria-expanded="false" aria-controls="search-area">Heading</h2>
                    <ul class="search-area" role="tabpanel" aria-expanded="false">
                        <li><a href="#."><i class="fa fa-map-signs"></i> Bayonne, New Jersey</a></li>
                        <li class="active"><a href="#." class=""><i class="fa fa-map-signs"></i> Greenville, New Jersey</a></li>
                        <li><a href="#."> <i class="fa fa-map-signs"></i> The Heights, New Jersey</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> West Side, New York</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> Upper East Side, New York</a></li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-3 col-2">
                    <h2 class="heading" data-toggle="collapse" href=".search-area" aria-expanded="false" aria-controls="search-area">Heading</h2>
                    <ul class="search-area" role="tabpanel" aria-expanded="false">
                        <li><a href="#."><i class="fa fa-map-signs"></i> Bayonne, New Jersey</a></li>
                        <li class="active"><a href="#." class=""><i class="fa fa-map-signs"></i> Greenville, New Jersey</a></li>
                        <li><a href="#."> <i class="fa fa-map-signs"></i> The Heights, New Jersey</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> West Side, New York</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> Upper East Side, New York</a></li>
                    </ul>
                </div>


                <div class="col-xs-12 col-sm-3 col-4">
                    <h2 class="heading" data-toggle="collapse" href=".search-area" aria-expanded="false" aria-controls="search-area">Heading</h2>
                    <ul class="search-area" role="tabpanel" aria-expanded="false">
                        <li><a href="#."><i class="glyphicon glyphicon-earphone"></i> 01 900 234 567 - 68</a></li>
                        <li class="active"><a href="#." class=""><i class="fa fa-map-signs"></i> Greenville, New Jersey</a></li>
                        <li><a href="#."> <i class="glyphicon glyphicon-globe"></i> www.offplandxb.ae</a></li>
                        <li><a href="#."><i class="glyphicon glyphicon-tags"></i> West Side, New York</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> Castle Melbourne, Merrick Way,FL 12345 australia</a></li>
                    </ul>
                </div>



            </div>
        </div>
    </footer>

    <!--footer-->


    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>

    <script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('developer-txt').value = ddl.options[ddl.selectedIndex].text;
    }
</script>


</body>
</html>
