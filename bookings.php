<?php require "head.php"; ?>

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Available <?php echo format($_GET['house_type']); ?></h2>
                    <p class="page-description">Choose A <?php echo format($_GET['house_type']); ?> For Booking</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->
    <?php 
    $house_type = $_GET['house_type'];
    $price_min = $_GET['price_min'];
    $price_max = $_GET['price_max'];
    $housing = searchHouses($house_type, $price_min, $price_max);
    ?>

    <!-- ====== Breadcrumbs Area======= --> 
    <div class="breadcrumbs-area bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item"><?php echo format($_GET['house_type']); ?> List For Booking</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <div class="apartments-area bg-gray-color">
    <div class="container">
    <?php
        for ($i=0; $i < count($housing); $i++) { 
            $house_id = $housing[$i]['0'];

            $house_select= mysqli_query($conn, "SELECT * FROM housing WHERE id='$house_id'");
            $house = mysqli_fetch_array($house_select);
        ?>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="apartments-content">
                    <div class="image-content">
                        <a href="apartment-single.php?houseid=<?php echo $house['hsid']; ?>"><img src="./houses/<?php echo $house['image1']; ?>" alt="apartment" /></a>
                    </div><!-- /.image-content -->

                    <div class="text-content">
                        <div class="top-content">
                            <h3><a href="apartment-single.html"><?php
                                                                echo format($house['house_type']); ?></a></h3>
                            <span>
                                <i class="fa fa-map-marker"></i>
                                <?php echo $house['address_and_area']; ?>
                            </span>
                        </div><!-- /.top-content -->
                        <div class="bottom-content clearfix">
                            <?php $list = explode(",", $house['room_description']) ?>
                            <div class="meta-bed-room">
                                <i class="fa fa-bed"></i> <?php echo $list['0']; ?>
                            </div>
                            <div class="meta-bath-room">
                                <i class="fa fa-bath"></i><?php echo $list['1']; ?>
                            </div>
                            <span class="clearfix"></span>
                            <div class="rent-price pull-left">
                                KSH <?php echo number_format($house['rent_amount']); ?>
                            </div>
                            <div class="share-meta dropup pull-right">
                                <ul>
                                    <li class="dropup">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.bottom-content -->
                    </div><!-- /.text-content -->
                </div><!-- /.partments-content -->
            </div>
        <?php } ?>
        </div>
    </div>
<?php require "footer.php"; ?>