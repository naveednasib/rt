

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
include_once("connection.php");
     // ob_start();
    // session_start();
    

// if(empty($_SESSION["username"]) && empty($_SESSION["password"]) ){
// // header('Refresh: 2; URL = admin.php');
// }
   


if(isset($_POST['login']) )
{
    $user = $_POST['userid'];
    $pass = $_POST['user_password'];


    $checkquery = "  SELECT * FROM  tbl_admin_user WHERE username = '$user' AND user_password = '$pass';  ";

       $result       =   mysqli_query($conn,$checkquery );
       $rower        =   mysqli_fetch_array( $result);  
       $username     =   $rower[1];
       $userpassword =   $rower[2];
       $msg          =   '';

            if (isset($_POST['login']) && !empty($user) && !empty($pass)) {
         
               if ( $user ==   $username &&   $pass == $userpassword ) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = '$user';
                    $msg = 'scuess';
                   echo  $msg;
                  include_once('layout/cms-header.php');
               }



               else {
                  $msg = 'Wrong username or password';

                  echo  $msg;
               }
            }

}
  






?>

 

   <?php


   if(isset($_POST['signout']) ){
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   // header('Refresh: 2; URL = admin.php');
   }


   
?>
</head>
<body>



        <!--header-->
        <?php  
              
        ?>
        <!--header-->




<section class="top-container">

<div class="mid-container">
<h2>Login</h2>


<form action="admin.php" method="POST">
<table class="table">
    <tr>
        <td><label>User Name </label></td>
        <td><input class="form-control" type="text" name="userid"/></td>

    </tr>
     <tr>
        <td><label>Password </label></td>
        <td><input  class="form-control"  type="password" name="user_password"/></td>

    </tr>
     <tr>
       
        <td colspan="2"><input  class="btn btn-success" value="submit"  type="submit" name="login"/></td>

    </tr>
</table>
</form>
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
