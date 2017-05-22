<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/css/main.css" rel="stylesheet" />


    <title>Home page</title>
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
     <style>
    .form-container      .select-option {padding:0 15px ;    height: 52px;}
     </style>

     <?php 


       include_once('connection.php'); 



                $sql = "SELECT * FROM tbl_unitdetail";
                $selectresult = mysqli_query($conn, $sql);


                $fetch_unit_detail ="SELECT * FROM tbl_unitdetail";
                $unitresult = mysqli_query($conn, $fetch_unit_detail );

?>
 
</head>
<body>



        <!--header-->
        <?php  
                include_once('layout/header.php');
        ?>
        <!--header-->



    <!--home banner-->
    <section class="home-banner">
        <div class="mid-container clearfix">
            <article class="col-xs-12 col-sm-7">
                <h1 class="heading">
                    <span class="heading-top">WE DON’T JUST FIND GREAT DEALS</span>
                    <strong>WE CREATE THEM</strong>
                    <p class="heading-bottom">We have Properties in these Areas Discover your place to live Get started in few clicks</p>
                </h1>
            </article>
            <div class="col-xs-12 col-sm-5">
              




                </div>
            </div>
        </div>
    </section>




<section class="form-serach">
        <div class="clearfix mid-container">

  <div class="col-xs-12 col-sm-7">
      <h2 class="heading">Latest Off Plan Projects In Dubai </h2>
      <p class="parang">Neque porro quisquam est qui dolorem ipNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit 
      Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..
      </p>

      <h5 class="heading5">Now Its Easy To  Find Your Future Home In Dubai </h3>
      <h2 class="headingy">Find All Latest Off PLan Project In Dubai </h2>



        <div class="search-box clearfix">
        
                <div class="col-xs-12 col-sm-10" class="form-group">
                <input type="text" class="form-control" Placeholder="search properties by name ,Developer name or location">
                </div>
                <div class="col-xs-12 col-sm-2">
                    <a class="btn btn-success" href="listing-unit.php">Search</a>
                </div>



                <div class="filter-search clearfix col-xs-12 paddingZ">
                <div class="col-xs-12 col-sm-3 form-group">
                    <select class="form-control">
                        <option>Category</option>
                    </select>
                </div>


                    <div class="col-xs-12 col-sm-3 form-group paddingZ ">
                <div class="input-group ">
                     <span class="input-group-addon">AED</span>
                         <input type="text" class="form-control"  placeholder="min price">
                </div>
                    </div>

              <div class="col-xs-12 col-sm-3 paddingZ form-group">
                    <div class="input-group">
                     <span class="input-group-addon">AED</span>
                      <input  type="text" class="form-control"   placeholder="min price"/>
                </div>
                 </div>



                 <div class="col-xs-12 col-sm-3 form-group">
                   <select class="form-control">
                        <option>Category</option>
                    </select>
                 </div>






        </div>



  </div>
 </div>
          <div class="col-xs-12 col-sm-5">
              

<form action="php/enquire.php" method="post">
                <div class="form-container">

                    <div class="form-group">
                        <input type="text" name="firstname" class="form-control" value='' placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="text" required="Number" name="phonenumber" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
 
                        <select name="developerName" class="form-control select-option">
                      <?php   while($row1 = mysqli_fetch_array( $selectresult)):; ?>

                            <option value="<?php echo $row1[0];?>"><?php echo $row1[1] ?></option>

                            <?php  endwhile; ?>
                       
                        </select>
                    </div>
                    <div class="form-group">

                        <button type="submit" class="btn btn-group-justified  btn-theme">Enqury</button>
                    </div>

</form>


                </div>
 </div>
  </section>



    <!--slider container-->
    <section class="slilder-container">
        <div class="clearfix mid-container">
            <div class="col-xs-12 txtx ">
                <h2 class="heading">Latest OffPlan Projects</h2>
                <p class="para">We have Properties in these Areas view a list Featured Properties</p>
            </div>

            <div id="myCarousel" class="carousel  paddingZ slide" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active clearfix">
                        <div class="col-xs-12 col-sm-6">

                            <img class="img-responsive" src="images/bestdeal.jpg" />
                            <span class="abs-sale">For Sale</span>

                            <div class="detail">
                                <div class="border clearfix">
                                    <div class="col-xs-12 paddingZ txt-tab">
                                        <h3 class="heading">Unique Villa With Private Beach</h3>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed d…</p>
                                    </div>

                                    <div class="ccol-xs-6 paddingZ prop-detail">
                                        <div class="col-xs-6 col-sm-3 paddingZ">4800 sq ft</div>

                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ border">$36,00 /pm</div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">

                            <img class="img-responsive" src="images/bestdeal.jpg" />
                            <span class="abs-sale">For Sale</span>

                            <div class="detail">
                                <div class="border clearfix">
                                    <div class="col-xs-12 paddingZ txt-tab">
                                        <h3 class="heading">Unique Villa With Private Beach</h3>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed d…</p>
                                    </div>

                                    <div class="ccol-xs-6 paddingZ prop-detail">
                                        <div class="col-xs-6 col-sm-3 paddingZ">4800 sq ft</div>

                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ border">$36,00 /pm</div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6">

                            <img class="img-responsive" src="images/bestdeal.jpg" />
                            <span class="abs-sale">For Sale</span>

                            <div class="detail">
                                <div class="border clearfix">
                                    <div class="col-xs-12 paddingZ txt-tab">
                                        <h3 class="heading">Unique Villa With Private Beach</h3>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed d…</p>
                                    </div>

                                    <div class="ccol-xs-6 paddingZ prop-detail">
                                        <div class="col-xs-6 col-sm-3 paddingZ">4800 sq ft</div>

                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ border">$36,00 /pm</div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">

                            <img class="img-responsive" src="images/bestdeal.jpg" />
                            <span class="abs-sale">For Sale</span>

                            <div class="detail">
                                <div class="border clearfix">
                                    <div class="col-xs-12 paddingZ txt-tab">
                                        <h3 class="heading">Unique Villa With Private Beach</h3>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed d…</p>
                                    </div>

                                    <div class="ccol-xs-6 paddingZ prop-detail">
                                        <div class="col-xs-6 col-sm-3 paddingZ">4800 sq ft</div>

                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ border">$36,00 /pm</div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6">

                            <img class="img-responsive" src="images/bestdeal.jpg" />
                            <span class="abs-sale">For Sale</span>

                            <div class="detail">
                                <div class="border clearfix">
                                    <div class="col-xs-12 paddingZ txt-tab">
                                        <h3 class="heading">Unique Villa With Private Beach</h3>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed d…</p>
                                    </div>

                                    <div class="ccol-xs-6 paddingZ prop-detail">
                                        <div class="col-xs-6 col-sm-3 paddingZ">4800 sq ft</div>

                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ border">$36,00 /pm</div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">

                            <img class="img-responsive" src="images/bestdeal.jpg" />
                            <span class="abs-sale">For Sale</span>

                            <div class="detail">
                                <div class="border clearfix">
                                    <div class="col-xs-12 paddingZ txt-tab">
                                        <h3 class="heading">Unique Villa With Private Beach</h3>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed d…</p>
                                    </div>

                                    <div class="ccol-xs-6 paddingZ prop-detail">
                                        <div class="col-xs-6 col-sm-3 paddingZ">4800 sq ft</div>

                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ"><i class="glyphicon glyphicon-bed"></i> 3 bedrooms</div>
                                        <div class="col-xs-6 col-sm-3 paddingZ border">$36,00 /pm</div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <div class="control-container clearfix">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Left and right controls -->
            </div>
        </div>
    </section>








    <!--tile container-->
    <section class="tile-container">
        <div class="mid-container clearfix">
            



            <!--tile-->
            <?php   while($rowUnit = mysqli_fetch_array($unitresult)):; ?>

                    
                    <?php
                   

                   $fetch_One_Img =
                   "SELECT images_path FROM tbl_unit_sm_img WHERE unit_id =  $rowUnit[0]  LIMIT 1 ";
           
                   $imgquery = mysqli_query($conn,$fetch_One_Img);
                 
             
                        if ( $imgquery->num_rows > 0) {

                             while($row3 =  $imgquery->fetch_assoc()) {                    
                            $nid=$row3['images_path']; //Here is where the single value is stored.
                             $nid=str_replace('../','',$nid);
                                 }
                                    } else {
                              

                              $nid = 'images/image-not-found.png' ;
                                 }
                  
                   ?> 


         
            <div  class="col-xs-12 col-sm-4 tile" <?php echo  $rowUnit[0] ?> >
                <div class="img-cont">

                    <img src="<?php echo $nid?>" />
                    <span class="feature">Featured</span>
                    <span class="sale">For Sale</span>
                    <span class=" price"><?php echo $rowUnit[3] ?> </span>
                </div>

                <div class="txt-cont">
                    <h4 class="heading"><?php echo $rowUnit[1] ?></h4>
                    <p class="usp"><?php echo $rowUnit[2] ?> </p>
                    <p class="para"><?php echo $rowUnit[6] ?></p>
                </div>


                <div class="btn-cont">
                    <a href="unitdetail.php?id=<?php echo $rowUnit[0] ?>"  class="btn  btn-blue">Detail</a>
                    <a href="#" class="btn btn-yellow">Register Your interest</a>
                </div>
            </div>

              <?php  endwhile; ?>

            <!--tile-->


         


            <div class="col-xs-12 text-center btn-containr">
                <a href="#" class="btn btn-blue">More Project</a>
            </div>
        </div>
    </section>





    <!--agent container-->
    <section class="agents-container">
        <div class="mid-container clearfix">
            <div class="col-xs-12 txt-cont">
                <h2 class="heading">Agent you can trust</h2>
                <p class="para">Agent you can trust</p>
            </div>
            <div class="col-xs-12 paddingZ ">
                <div class="col-xs-12 col-sm-4 tile">

                    <img src="images/agent.png" />
                    <div class="detail">
                        <h5 class="heading">Bohdan</h5>
                        <p class="para">Sale Excutive</p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-4 tile">

                    <img src="images/agent.png" />
                    <div class="detail">
                        <h5 class="heading">Bohdan</h5>
                        <p class="para">Sale Excutive</p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-4 tile">

                    <img src="images/agent.png" />
                    <div class="detail">
                        <h5 class="heading">Bohdan</h5>
                        <p class="para">Sale Excutive</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--bullert slider-->
    <section class="bullet-slider">
        <div class="mid-container clearfix">
            <div class="col-xs-12 txt-cont">
                <h2 class="heading">Agent you can trust</h2>
                <p class="para">Agent you can trust</p>
            </div>

            <div id="logos" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#logos" data-slide-to="0" class="active"></li>
                    <li data-target="#logos" data-slide-to="1"></li>
                    <li data-target="#logos" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active clearfix">

                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>


                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>


                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>


                    </div>

                    <div class="item clearfix">
                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>


                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>


                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>


                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>


                        <div class="col-xs-6 col-sm-3">
                            <img src="images/logo1.png" />
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section>




    <!--footer-->
    <?php 
    include_once('layout/footer.php');
    ?>
    <!--footer-->

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>




</body>
</html>
