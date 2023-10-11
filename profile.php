<?php require "head.php"; ?>

<div class="availability-area bg-white-smoke">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slide">
                    <div class="item">
                        <div class="client-image">
                            <img src="assets/images/testimonial-image.png" alt="testimonial" />
                        </div><!-- /.client-image -->
                        <div class="client-content">
                            <h3><?php echo user_information($_SESSION['user_id'], "username"); ?></h3>
                            <h5><?php echo user_information($_SESSION['user_id'], "email"); ?></h5>
                            <?php
                            if (!empty(user_information($_SESSION['user_id'], "full_names"))) { ?>
                                <h5><?php echo user_information($_SESSION['user_id'], "full_names"); ?></h5>
                            <?php } ?>
                            <?php
                            if (!empty(user_information($_SESSION['user_id'], "phone_number"))) { ?>
                                <h5><?php echo user_information($_SESSION['user_id'], "phone_number"); ?></h5>
                            <?php } ?>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.star -->
                        </div><!-- /.client-content -->
                    </div><!-- /.item -->
                </div>
            </div>
        </div>
        <?php
        if (empty(user_information($_SESSION['user_id'], "gender"))) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-three">
                        <h5 class="sub-title">Complete your account details</h5>
                    </div><!-- /.Availability-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <form action="updater.php" method="POST" class="advance_search_query">
                        <div class="form-content">
                            <div class="form-group">
                                <label>Full names</label>
                                <input type="text" name="fullnames" placeholder="John doe">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="number" name="Phonenumber" placeholder="0700000000">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div><!-- /.form-content -->
                        <button type="submit" class=" button nevy-button">Complete</button>
                    </form>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        <?php }else{
            ?>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-three">
                        <h5 class="sub-title">You can now upload your houses and start getting clients</h5>
                        <a href="createlisting.php"><button type="button" class=" button nevy-button">Add House</button></a>
                    </div><!-- /.Availability-content -->
                </div><!-- /.col-md-12 -->
            </div><?php
        } ?>
    </div><!-- /.container  -->
</div><!-- /.Availability-area -->
<?php require "footer.php"; ?>