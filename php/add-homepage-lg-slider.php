
<?php
        
        include_once('../connection.php');
        $unit_Id                           =        $_POST["unitId"];
        $unit_Name                         =        $_POST["unitname"];
        $unit_heading                      =        $_POST["unit_heading"];
        $unit_usp                          =        $_POST["unit_usp"];
        $unit_paragraph                    =        $_POST["unit_paragraph"];

        
        
        




            $createFolder   = "../images/homepage-lg-slider/".$unit_Id ."/";
            
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

                          $insertImage = " INSERT INTO
                           
                           tbl_homepage_lg_slider(
                           unit_id,
                           unit_img_path,
                           unit_heading,
                           unit_usp,
                           unit_para) 
                           
                           VALUES

                            ('$unit_Id',
                            '$filepath',
                            '$unit_heading', 
                            '$unit_usp',
                            '$unit_paragraph'
                            ) ";

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
                         $filepath   = $createFolder.$filename;

                           if (!file_exists($filepath)) { 
                          move_uploaded_file($filetmp , $filepath );

                          $insertImage = " INSERT INTO
                           
                           tbl_homepage_lg_slider(
                           unit_id,
                           unit_img_path,
                           unit_heading,
                           unit_usp,
                           unit_para) 
                           
                           VALUES

                            ('$unit_Id',
                            '$filepath',
                            '$unit_heading', 
                            '$unit_usp',
                            '$unit_paragraph'
                            ) ";
                          $result = mysqli_query($conn,$insertImage);
                         
                         echo '<h3 style="color:green;">image = '.$filename .' Added</h3>' ;
                          }

                         else{
                            echo "files exits";
                           }
                    }

                    }

     

       

?>