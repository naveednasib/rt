<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/css/main.css" rel="stylesheet" />
    <link href="style/css/pages/contactus.css" rel="stylesheet" />

    <title>Home page</title>
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
     <style>
    .form-container      .select-option {padding:0 15px ;    height: 52px;}
  
     </style>

     <?php 


       include_once('connection.php'); 



                $sql = "SELECT id,project_developer FROM tbl_projects";
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


<section class="map-container top-container">

    <div class="mid-container clearfix">

        <div class="col-xs-12"> <div id="map"></div></div>
        

    </div>

</section>




    <section class="contact-us">
        <div class="mid-container clearfix">
            <div class="col-xs-12  col-sm-3 text-container">
              
                <div>
                 <img src="images/logo.png" width="200" height="61"/>
                </div>

                 <h4 class="heading"> Address</h4>
                <p class="para">Office 2602, Business Bay, Dubai</p>

                  <h4 class="heading">Phone & Fax</h4>
                <p class="para">Tel : +971 52 4474 455</p>

                  <h4 class="heading">Email</h4>
                <p class="para">info@appello.ae</p>
          
                  </div>


            <div class="col-xs-12  col-sm-9 contact-us-form">

                <h2 class="heading">
                    Contact Us
                </h2>
                <p class="para">Want to know more about our services? Fill out the form below and a representative will contact you within 3 business days to discuss your enquiry. Alternatively, you can give us a ring Monday through Friday, 9:00 am to 6:00 pm on +92 21 34970226.</p>


                <div class="col-xs-6 form-group ">
                    <input type="text" class="form-control" placeholder="*First Name"/>
                </div>
                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control"  placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text "  class="form-control"  placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control" placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control" placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control" placeholder="*First Name"/>
                </div>

                 <div class="col-xs-12 form-group ">
                  <textarea rows="5" title="message" placeholder="Message:"  class="form-control"></textarea>
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

 <script>
     function initMap() {
         var uluru = { lat: 25.1898224, lng: 55.2826905 };
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



     <script async defer    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDozcm4BObnYJBHVQFZiIFgYgDcTQwADfI&callback=initMap">
    </script>


</body>
</html>
