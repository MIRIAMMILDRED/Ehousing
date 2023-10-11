<?php require "head.php"; ?>

<!-- ====== Page Header ====== -->
<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Bookings</h2>
                <p class="page-description">Find your booking requests here</p>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->
</div><!-- /.page-header -->
<div class="availability-area two">
	    <div class="container">
	        <div class="row">
	        	<div class="col-md-12">
                    <table>
                        <tr>
                            <th>Booked on</th>
                            <th>Landlord Contact</th>
                            <th>Contact</th>
                            <th>House Type</th>
                            <th>Family Members</th>
                            <th>House Location</th>
                        </tr>
                        <?php
                            $booker = mysqli_query($conn, "SELECT * FROM bookings WHERE user_id = '$_SESSION[user_id]'");
                            while ($hs = mysqli_fetch_array($booker)) {
                                $house_info = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM housing WHERE hsid='$hs[hsid]'"));
                                
                                ?>
                                <tr>
                            <td data-title="Bedrooms"><?php echo $hs['created_at']; ?></td>
                            <td data-title="Size"><?php echo user_information($house_info['owner'], "full_names") ?></td>
                            <td data-title="Size"><?php echo user_information($house_info['owner'], "phone_number") ?></td>
                            <td data-title="Car Parking"><?php echo $house_info['house_type']; ?></td>
                            <td data-title="Bath"><?php echo $hs['family_members']; ?></td>
                            <td data-title="Furniture"><?php echo $house_info['county_location'].", ".$house_info['constituency']; ?></td>
                            </tr>
                            <?php }
                                ?>
                    </table>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
	    </div><!-- /.container  -->
	</div><!-- /.Availability-area -->
<?php require "footer.php"; ?>