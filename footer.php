<!-- ====== Footer Area ====== -->
<footer class="footer-area" style="background-image:url(assets/images/footer-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_about yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">
                            About House Rent
                        </h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <div class="widget-about-content">
                        <img src="assets/images/footer-logo.png" alt="house" />
                        <p>Whether you are looking for a studio apartment or a spacious family home, our team of professionals is here to assist you every step of the way. We believe that renting a home should be an enjoyable and stress-free experience, and we are committed to providing you with the best possible rental experience.</p>
                        <a href="#" class="button">More</a>
                    </div><!-- /.widget-content -->
                </div><!-- /.widget widget_about -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="widget widget_place_category yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">House Category</h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <ul>
                        <li>Family House for Rent </li>
                        <li>Apartment for Rent </li>
                        <li>Sublet for Rent </li>
                        <li>Office for Rent </li>
                        <li>Female mess for Rent </li>
                        <li>Bachelor Mess for Rent </li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="widget widget_instagram yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">Instagram Image</h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <div class="instagram-image-content">
                        
                    <?php
                            $random_6 = mysqli_query($conn, "SELECT * FROM housing ORDER BY RAND() LIMIT 6");
                            while ($house = mysqli_fetch_array($random_6)) {
                            ?>
                            <a href="#"><img src="./houses/<?php echo $house['image1']; ?>" alt="" style="max-width: 150px;"></a>
                            <?php
                            }
                            ?>

                    </div><!-- /.instagram-image-content -->
                </div><!-- /.widget -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="bottom-content">
                    <p>Copyright &copy;2017 <a href="#">HTMLguru</a></p>
                </div><!-- /.bottom-top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.footer-area -->

<!-- All The JS Files
    ================================================== -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script> <!-- main-js -->
</body>

</html>