<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/css/main.css" rel="stylesheet" />
    <title>Add developer</title>
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 


    <style>        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        vertical-align:middle;
        }
     
    </style>


        <?php 


      $servername = "localhost";
          $username = "root";
          $password = "";
         $dbname = "appelo";


         $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
                } 


                // $sql = "SELECT id,project_developer FROM tbl_project";
                // $selectresult = mysqli_query($conn, $sql);


                if(isset($_POST['btn_submit'])){
                       

                       $devName = $_POST['dev-name'];


                $developer_temp = $_FILES["devloper_img"]["tmp_name"];

                $developer_name = $_FILES["devloper_img"]["name"];

                $developer_type = $_FILES['devloper_img']['type'];

                $filepath       ="images/devLogo/".$developer_name;

            




                        // check if developer is exit 
                    $ifexit ="SELECT  project_developer FROM tbl_developer WHERE project_developer = '$devName'";
                    $selectresult = mysqli_query($conn, $ifexit);


                 

                     $row = mysqli_fetch_array($selectresult);
                        
                         if ( $row[0] == $devName) {
                      echo '<h3 style="color:red;">this name exit</h3>' ;
                      
                        }


                        else{

                         move_uploaded_file($developer_temp, $filepath);
                        $insertImage = " INSERT into tbl_developer(project_developer,project_logo) values ('$devName','$filepath') ";
                        $result = mysqli_query($conn,$insertImage);
                          echo '<h3 style="color:green;">developer Added</h3>' ;

                            }

                // check if developer is exit 


            //  $createFolder   = "images/devLogo/testing1";
            // if (!file_exists($createFolder)) {
          
            //  mkdir("images/devLogo/testing1");
            //         }



       

}



?>

</head>
<body>
   


    <section class="datasets top-container">

        <div class="mid-container clearfix">
            <div class="col-xs-12 col-sm-6">
                <h2>Upload Images </h2>

        <form  action="add-developer.php" enctype="multipart/form-data" method="post">
            <table class="table table-border table-stripe">
              



                     <tr>
                        <td><strong>Developer Name </strong> </td>
                        <td class="form-group">
                            <input type="text" required="true" name="dev-name" class="form-control" placeholder="Developer Name" />
                        </td>
                    </tr>
    

    <tr>
        <td class='' >
        <label for="file">File to upload:</label> 
        </td>
        <td class='' >

         <input  type="file" name="devloper_img"/> 
        </td>

    </tr>

    <tr>
        <td class='' >
     <label for="submit">Press to...</label>
        </td>
        <td class='' >
      <input  type="submit" name="btn_submit" value="Upload">
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


<?php 



?>

  <script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('developer-txt').value = ddl.options[ddl.selectedIndex].text;
    }
</script>
</body>
</html>
