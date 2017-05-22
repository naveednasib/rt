

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
session_start();
if(isset($_POST['login']) )
{
    $user = $_POST['userid'];
    $pass = $_POST['user_password'];

    $checkquery = "  SELECT * FROM  tbl_admin_user WHERE username = '$user' AND user_password = '$pass';  ";

    $result = mysqli_query($conn,$checkquery );

    if(mysqli_num_rows($result)==1){
        $_SESSION['username'] =  $user;
              echo  $user;
            


                $cookie_name = "user";
                $cookie_value = "John Doe";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

                              if(!isset($_COOKIE[$cookie_name])) {
                               echo "Cookie named '" . $cookie_name . "' is not set!";
                                 } else {
                                       echo "Cookie '" . $cookie_name . "' is set!<br>";
                                       echo "Value is: " . $_COOKIE[$cookie_name];
                                          }

    }
        else {
            echo "account is in valid ";

        }
}
  



?>

 
</head>
<body>



        <!--header-->
        <?php  
                include_once('layout/cms-header.php');
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
