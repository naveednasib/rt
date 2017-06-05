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


            
                if(isset($_GET['dev_id'] )){
            $devId =  $_GET['dev_id'];
            
                $fetch_unit_detail ="SELECT * FROM tbl_unitdetail WHERE unit_developerid ='$devId'";
                $unitresult = mysqli_query($conn, $fetch_unit_detail );
                }

                else{

                $fetch_unit_detail ="SELECT * FROM tbl_unitdetail";
                $unitresult = mysqli_query($conn, $fetch_unit_detail );
                }


                // $sql = "SELECT * FROM tbl_unitdetail";
                // $selectresult = mysqli_query($conn, $sql);



           

?>
 
</head>
<body>



        <!--header-->
        <?php  
                include_once('layout/header.php');
        ?>
        <!--header-->



    <!--home banner-->
 











    <!--tile container-->
    <section class="tile-container top-container">
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
                    <div class="para"><?php echo $rowUnit[6] ?></div>
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
