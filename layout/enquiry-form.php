

<?php 

                 $sql = "SELECT * FROM tbl_unitdetail";
                $selectresult = mysqli_query($conn, $sql);
?>

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