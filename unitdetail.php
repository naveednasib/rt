<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/css/main.css" rel="stylesheet" />


    <link href="style/css/pages/unitDetail.css" rel="stylesheet" />
    <link href="style/css/lightslider.css" rel="stylesheet" />
    <title>Home page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <style>
        .form-container .select-option {
            padding: 0 15px;
            height: 52px;
        }

        .property-detail-wraper {
            background-image: url(images/unit-detail-bg.jpg);
        }

        table {
            empty-cells: hide;
        }

        #map {
            width: 100%;
            height: 385px;
            background-color: grey;
        }
    </style>

    <?php 


                include_once('connection.php');
                
                // echo $_SESSION["favcolor"];
                $id = $_GET['id'];


                $sql = "SELECT * FROM tbl_unitdetail where id = $id";
                $selectresult = mysqli_query($conn, $sql);


               
                 $fetch_lg_Img =    "SELECT images_path FROM tbl_unit_lg_img WHERE unit_id =    $id  ";
                 $img_lg_query = mysqli_query($conn,$fetch_lg_Img);


                $fetch_sm_Img ="SELECT images_path FROM tbl_unit_sm_img WHERE unit_id =    $id  ";           
                $img_sm_query = mysqli_query($conn,$fetch_sm_Img);


                $fetch_paymentplan ="select * from tbl_payment_plan2 where unit_id='$id'";
                $paymentplan_query = mysqli_query($conn,$fetch_paymentplan);

                $fetch_media ="select * from tbl_unit_media2 where unit_id='$id'";
                $media_query = mysqli_query($conn, $fetch_media);

                $get_highLights       = "select * from tbl_highlights where unit_id='$id'";
                $get_highLights_query =  mysqli_query($conn,$get_highLights );



?>


</head>

<body>



    <!--header-->
    <?php  
                include_once('layout/header.php');
        ?>
    <!--header-->





    <section class="property-detail-slider">
        <?php   while($row1 = mysqli_fetch_array($selectresult)):; ?>
        <article class="mid-container">
            <h1><strong><?php echo $row1[1];?></strong></h1>
            <p>
                <?php echo $row1[2];?>
            </p>
        </article>




        <div class="owl-slider-container mid-container">

            <div class="col-xs-12 col-sm-8 paddingZ">

                <!--slider secction-->
                <div class="slider-container">
                <div class="item">
                    <div class="clearfix">
                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                            <?php   while($get_lg_img = mysqli_fetch_array( $img_lg_query)):;         ?>
                            <?php    $lg_img = $get_lg_img[0];
                                  $lg_img = str_replace('../','', $lg_img );                           ?>




                            <li data-thumb="<?php echo  $lg_img ;?>">
                                <img src="<?php echo  $lg_img ;?>" />
                            </li>
                            <?php  endwhile; ?>

                        </ul>
                    </div>
                </div>
                </div>
                <!--slider secction-->





                <section class="para-unit-detail mid-container padding15 ">
                    <h2><strong style="">PROPERTY DESCRIPTION</strong></h2>




                    <div class="text-area">
                        <?php echo $row1[6] ?>
                    </div>




                </section>

            </div>


            <div class="col-xs-12 col-sm-4 ">


                <!--highligth container-->
                <div class="highlight-container">
                    <div class="heading">highlights</div>


                    <?php while($highLights = mysqli_fetch_array($get_highLights_query)):;?>
                    <div class=" highlights">
                        <h2> highlights</h2>
                        <div class="text-container">
                            <?php echo  $highLights [2]?>
                        </div>
                    </div>
                    <div class=" unit-type">
                        <h2> Unit Type</h2>
                        <div class="text-container">
                            <?php echo $highLights [3]?>
                        </div>
                    </div>
                    <?php endwhile;?>

                </div>

                <!--highligth container-->



                <div class="property-amienties mid-container padding15 clearfix">



                    <?php   while($get_media = mysqli_fetch_array( $media_query)):;         ?>

                    <?php if  ($get_media[2] == 0){?>
                    <div class=" col-xs-12  am-div col-sm-12">
                        <?php
                $brochure = $get_media[3]; 
               $brochure = str_replace('../','', $brochure );    
            ?>
                            <a href="<?php  echo $brochure?>" download>
            <span>Download Brochure</span></a></div>
                    <?php }?>
                    <?php if  ($get_media[2] == 1){?>
                    <div class="col-xs-12 am-div col-sm-12">
                        <?php
                $paymentplan = $get_media[3]; 
               $paymentplan = str_replace('../','', $paymentplan );    
            ?>
                            <a href="<?php  echo  $paymentplan ?>" download><span>Download Payment Plan</span></a></div>

                    <?php }?>

                    <?php if  ($get_media[2] == 2){?>
                    <div class="col-xs-12 am-div col-sm-12">
                        <?php
                $floorplan = $get_media[3]; 
               $floorplan = str_replace('../','', $floorplan );    
            ?>
                            <a href="<?php echo $floorplan ?>" download><span>Download FloorPlan</span></a></div>

                    <?php }?>

                    <?php  endwhile; ?>

                </div>


                <div class="form detail-enquiry paddingZ  col-xs-12">
                    <div class="form-container">
                        <h2>REGISTER YOUR INTEREST</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">

                            <select class="form-control select-option">
                         <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                        </select>
                        </div>
                        <div class="form-group">

                            <button type="submit" class="btn btn-group-justified  btn-theme">Enquiry</button>
                        </div>

                    </div>
                </div>

            </div>











            <div class="Quick-sumary mid-container clearfix padding15">


                <div class="col-xs-12 col-sm-6 paddingL ">
                    <h2><strong style="">QUICK SUMMARY</strong></h2>
                    <table class="table table-striped table-responsive">
                        <tr>
                            <td class="text-left"><strong>Property Type</strong></td>
                            <td class="text-right">
                                <?php echo $row1[13] ?>
                            </td>

                        </tr>

                        <tr>
                            <td class="text-left"><strong>Status</strong></td>
                            <td class="text-right">
                                <?php echo $row1[11] ?>
                            </td>

                        </tr>


                        <tr>
                            <td class="text-left"><strong>Year Launched</strong></td>
                            <td class="text-right">
                                <?php echo $row1[18] ?>
                            </td>

                        </tr>


                        <tr>
                            <td class="text-left"><strong>Year of Completetion</strong></td>
                            <td class="text-right">
                                <?php echo $row1[5] ?>
                            </td>

                        </tr>


                        <tr>
                            <td class="text-left"><strong>Developer</strong></td>
                            <td class="text-right">
                                <?php echo $row1[14] ?>
                            </td>

                        </tr>


                        <tr>
                            <td class="text-left"><strong>Location</strong></td>
                            <td class="text-right">
                                <?php echo $row1[17] ?>
                            </td>

                        </tr>
                    </table>
                </div>


                <div class="col-xs-12 col-sm-6 ">
                    <h2><strong style="">PAYMENT PLAN</strong></h2>


                    <table class="table table-striped table-responsive">

                        <?php   while($payment = mysqli_fetch_array($paymentplan_query)):; ?>

                        <tr>
                            <td>
                                <?php echo  $payment[2] ?> </td>
                            <td>
                                <?php echo  $payment[3] ?> </td>
                            <td>
                                <?php echo  $payment[4] ?> </td>
                        </tr>


                        <?php  endwhile; ?>

                    </table>


                </div>

            </div>


            <section class="map-container ">

                <div class="mid-container clearfix">



                </div>

            </section>

            <div class="agent-section clearfix mid-container padding15">
                <h2><strong style="">LOCATION MAP</strong></h2>


                <div class="agent-img col-sm-12 col-xs-12 paddingL">
                    <div class="col-xs-12" style="width: 100%;
    background-color: grey;
    margin-left: 0px;
    margin-top: 20px;">
                        <div id="map"></div>
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
    <script src="js/lightslider.js"></script>
    <script>
        $(document).ready(function () {

       
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 1000,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
            $('.dropdown-submenu > a').on("click", function(e){
 
   $('.dropdown-submenu').children('ul').slideUp();
   $('.dropdown-submenu').find('.caret' ).removeClass('Odeg');


    $(this).find('.caret' ).toggleClass('Odeg');
    $(this).siblings('ul').slideToggle();
    e.stopPropagation();
    e.preventDefault();
  });

  function checkemptyProject(){
    
    $('.dropdown-menu').each(function(){
       var flag = $(this).has("a").length;
       if(flag  == 0){
           
           $(this).parents(".dropdown-submenu").hide();
       }
    
    })
          
};
checkemptyProject();
        })
    </script>

    <?php 

                $fetch_map =    "select * from tbl_unit_map where unit_id='$id'";
                $map_query =    mysqli_query($conn, $fetch_map);
                $map_query =    mysqli_fetch_array($map_query); 
                $logitude  =    $map_query[2];
                $latitude  =    $map_query[3];  

?>

    <script>
            <?php 
if(empty($logitude) && empty($latitude)) { }
        else {
 ?>
                function initMap() {
                    var uluru = { lat: <?php echo $latitude ?>, lng: <?php echo $logitude ?> };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 14,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDozcm4BObnYJBHVQFZiIFgYgDcTQwADfI&callback=initMap">

    </script>

    <?php } endwhile; ?>


</body>

</html>