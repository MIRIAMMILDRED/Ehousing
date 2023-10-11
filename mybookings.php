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
                            <th>Tenant</th>
                            <th>Contact Number</th>
                            <th>Family Members</th>
                            <th>House Type</th>
                        </tr>
                        <?php
                            $houses = mysqli_query($conn, "SELECT * FROM housing WHERE owner = '$_SESSION[user_id]'");
                            while ($hs = mysqli_fetch_array($houses)) {
                                
                                $booker = mysqli_query($conn, "SELECT * FROM bookings WHERE hsid = '$hs[hsid]'");
                                while ($bookings = mysqli_fetch_array($booker)) {
                                    ?>
                                    <tr>
                            <td data-title="Bedrooms"><?php echo $bookings['created_at']; ?></td>
                            <td data-title="Size"><?php echo user_information($bookings['user_id'], "full_names") ?></td>
                            <td data-title="Car Parking"><?php echo user_information($bookings['user_id'], "phone_number") ?></td>
                            <td data-title="Bath"><?php echo $bookings['family_members']; ?></td>
                            <td data-title="Furniture"><?php echo $hs['house_type']; ?></td>
                            </tr>
                            <?php }
                                } ?>
                    </table>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
	    </div><!-- /.container  -->
	</div><!-- /.Availability-area -->
<?php require "footer.php"; ?>