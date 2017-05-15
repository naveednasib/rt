
<?php
        
        include_once('../connection.php');
        $unit_Id                        = $_POST["unitId"];
        $unit_Name                      = $_POST["unitname"];




            $createFolder   = "../images/unitimages/large/".$unit_Id ."/";
            
            if (!file_exists($createFolder)) {          
             mkdir($createFolder);


               if(isset($_POST['upload-images']))
                    {    

                     for($i=0;$i<count($_FILES["file_img"]["name"]);$i++){

                         $filetmp    = $_FILES["file_img"]["tmp_name"][$i];
                         $filename   = $_FILES["file_img"]["name"][$i];
                         $filetype   = $_FILES["file_img"]["type"][$i];
                         $filepath   = $createFolder.$filename;

                           if (!file_exists($filepath)) { 
                          move_uploaded_file($filetmp , $filepath );

                          $insertImage = " INSERT INTO tbl_unit_lg_img(unit_id,images_path) VALUES ('$unit_Id','$filepath') ";

                          $result = mysqli_query($conn,$insertImage);
                         
                          echo '<h3 style="color:green;">image = '.$filename .' Added</h3>' ;
                        }

                         else{
                            echo "files exits";
                           }

                         }
                       }
                    }

                    else{
                        for($i=0;$i<count($_FILES["file_img"]["name"]);$i++){

                         $filetmp    = $_FILES["file_img"]["tmp_name"][$i];
                         $filename   = $_FILES["file_img"]["name"][$i];
                         $filetype   = $_FILES["file_img"]["type"][$i];
                         $filepath   = "../images/unitimages/large/".$unit_Id ."/".$filename;
  if (!file_exists($filepath)) { 
                          move_uploaded_file($filetmp , $filepath );

                          $insertImage = " INSERT INTO tbl_unit_lg_img(unit_id,images_path) VALUES ('$unit_Id','$filepath') ";

                          $result = mysqli_query($conn,$insertImage);
                         
                         echo '<h3 style="color:green;">image = '.$filename .' Added</h3>' ;
                          }

                         else{
                            echo "files exits";
                           }
                    }

                    }

     

       

?>