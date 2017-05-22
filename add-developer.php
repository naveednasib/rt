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
include_once('connection.php');


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
                      echo '<h3  style="color:red;margin-top:100px;" >this name exit</h3>' ;
                      
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
   
  <!--header-->
        <?php  
                include_once('layout/cms-header.php');
                  ?>
        <!--header-->

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
    <?php
       

    include_once('layout/footer.php');

    ?>
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
