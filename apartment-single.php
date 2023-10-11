<?php require "head.php";
$hsid = $_GET['houseid'];
$hsx = $_GET['houseid'];
$house = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM housing WHERE hsid = '$hsid'"));
?>

<!-- ====== Apartments-Single-Area ======= -->
<div class="apartment-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="corousel-gallery-content">
                    <div class="gallery">
                        <div class="full-view owl-carousel">
                            <a class="item image-pop-up" href="./houses/<?php echo $house['image1']; ?>">
                                <img src="./houses/<?php echo $house['image1']; ?>" alt="corousel" style="width:100%; max-height: 350px;">
                            </a>
                            <a class="item image-pop-up" href="./houses/<?php echo $house['image2']; ?>">
                                <img src="./houses/<?php echo $house['image2']; ?>" alt="corousel" style="width:100%; max-height: 350px;">
                            </a>
                            <a class="item image-pop-up" href="./houses/<?php echo $house['image3']; ?>">
                                <img src="./houses/<?php echo $house['image3']; ?>" alt="corousel" style="width:100%; max-height: 350px;">
                            </a>
                            <a class="item image-pop-up" href="./houses/<?php echo $house['image4']; ?>">
                                <img src="./houses/<?php echo $house['image4']; ?>" alt="corousel" style="width:100%; max-height: 350px;">
                            </a>
                            <a class="item image-pop-up" href="./houses/<?php echo $house['image5']; ?>">
                                <img src="./houses/<?php echo $house['image5']; ?>" alt="corousel" style="width:100%; max-height: 350px;">
                            </a>
                        </div>

                        <div class="list-view owl-carousel">
                            <div class="item">
                                <img src="./houses/<?php echo $house['image1']; ?>" alt="corousel-image">
                            </div>
                            <div class="item">
                                <img src="./houses/<?php echo $house['image2']; ?>" alt="corousel-image">
                            </div>
                            <div class="item">
                                <img src="./houses/<?php echo $house['image3']; ?>" alt="corousel-image">
                            </div>
                            <div class="item">
                                <img src="./houses/<?php echo $house['image4']; ?>" alt="corousel-image">
                            </div>
                            <div class="item">
                                <img src="./houses/<?php echo $house['image5']; ?>" alt="corousel-image">
                            </div>
                        </div>
                    </div> <!-- /.gallery-two -->
                </div> <!-- /.corousel-gallery-content -->

                <iframe height="315" src="https://www.youtube.com/embed/<?php echo $house['tour']; ?>" style="width: 100%"></iframe>
                <div class="family-apartment-content mobile-extend">
                    <div class="tb">
                        <div class="tb-cell">
                            <h3 class="apartment-title"><?php
                                                        echo format($house['house_type']); ?></h3>
                        </div><!-- /.tb-cell -->
                        <div class="tb-cell">
                            <p class="pull-right rent">Rent/<?php echo $house['rent_type']; ?>:
                                KSH <?php echo number_format($house['rent_amount']); ?></p>
                        </div><!-- /.tb-cell -->
                    </div><!-- /.tb -->
                    <div class="clearfix"></div><!-- /.clearfix -->
                    <p class="apartment-description default-gradient-before"><?php echo $house['house_size'] . " sq metres " . $house['house_description'] . ", " . $house['address_and_area']; ?></p>
                    <div class="price-details">
                        <h3>Price Details-</h3>
                        <ul>
                            <li><span>Rent/<?php echo $house['rent_type']; ?>: </span>
                                KSH <?php echo number_format($house['rent_amount']); ?></li>
                            <li><span>Security Deposit :</span> <?php echo $house['security_deposit']; ?> month’s rent</li>
                            <li><span>House Release Policy :</span> <?php echo $house['release_policy']; ?> months earlier notice required</li>
                        </ul>
                    </div><!-- /.price -->

                    <div class="property-details">
                        <h3>Property Details-</h3>
                        <ul>
                            <li><span>Address &amp; Area :</span><?php echo $house['address_and_area']; ?></li>
                            <li><span>Flat Size :</span> <?php echo $house['house_size']; ?> Sq Metres.</li>
                            <li><span>Room Category :</span> <?php echo $house['room_description']; ?></li>
                        </ul>
                    </div><!-- /.Property -->
                    <div class="apartment-overview">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Apartment Overview</h3>
                                <div class="overview">
                                    <ul>
                                        <li>Deposit<span class="pull-right">KSH <?php echo $house['rent_amount'] * $house['security_deposit']; ?> </span></li>
                                        <li>Total Area (sq. m) <span class="pull-right"><?php echo $house['house_size']; ?></span></li>
                                        <li>Car Parking Per Space <span class="pull-right">02</span></li>
                                        <li>Air Condition <span class="pull-right">Yes</span></li>
                                    </ul>
                                </div><!-- /.apartment-overview -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.overview -->
                    <div class="indoor-features">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="features-title">Indoor features:</h3>
                                <ul class="features-list">
                                    <?php $f1 = explode(":", $house['indoor_features']);
                                    for ($i = 0; $i < count($f1); $i++) {
                                        echo "<li>$f1[$i]</li>";
                                    }
                                    ?>
                                </ul>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <h3 class="features-title">Outdoor features:</h3>
                                <ul class="features-list">
                                    <?php $f1 = explode(":", $house['outdoor_features']);
                                    for ($i = 0; $i < count($f1); $i++) {
                                        echo "<li>$f1[$i]</li>";
                                    }
                                    ?>
                                </ul>
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.indoor -->
                </div><!-- /.family-apartment-content -->
                <div class="hidden-md hidden-lg text-center extend-btn">
                    <span class="extend-icon">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </div>
            </div> <!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="apartment-sidebar">
                    <div class="widget_rental_search clerafix">
                        <div class="form-border gradient-border">
                            <form action="book.php" method="POST" class="advance_search_query booking-form">
                                <div class="form-bg seven">
                                    <div class="form-content">
                                        <h2 class="form-title">Book This Apartment <?php echo $hsid; ?></h2>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="FirstName" placeholder="Full name" value="<?php echo user_information($_SESSION['user_id'], "full_names"); ?>">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="tel" name="phone number" value="0<?php echo user_information($_SESSION['user_id'], "phone_number"); ?>">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="Email" placeholder="example@domain.com" value="<?php echo user_information($_SESSION['user_id'], "email"); ?>">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Family Member</label>
                                            <input type="number" step="1" min="1" max="100" name="members" value="1" title="Qty" size="4" class="input-text">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Children</label>
                                            <input type="text" step="1" min="1" max="100" name="children" value="1" title="Qty" size="4" class="input-text">
                                        </div><!-- /.form-group -->
                                        <input type="hidden" name="hsid" value="<?php echo $hsx; ?>">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea name="message" placeholder="Message" class="form-controller"></textarea>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="button default-template-gradient button-radius">Request Booking</button>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.form-content -->
                                </div><!-- /.form-bg -->
                            </form> <!-- /.advance_search_query -->
                        </div><!-- /.form-border -->
                    </div><!-- /.widget_rental_search -->
                    <div class="apartments-content seven post clerafix">
                        <div class="image-content">
                            <a href="#"><img class="overlay-image" src="./houses/<?php echo $house['image1']; ?>" alt="about" /></a>
                        </div><!-- /.image-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.apartment-sidebar -->
            </div> <!-- .col-md-4 -->

            <div class="map-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content-one">
                                <h5>Find Our location</h5>
                            </div><!-- /.about-heading-content -->
                            <div class="map-content">
                                <iframe height="550" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC871wKM6aoCLSV_pT3xBVsYzNGXaDh7Pw&q=121King+St,Melbourne+VIC+3000,Australia" allowfullscreen="allowfullscreen"></iframe>
                            </div><!-- /.map-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.map-content-area -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.appartment-single-area -->

<?php require "footer.php"; ?>