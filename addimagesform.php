<?php require "head.php"; ?>

<div class="availability-area bg-white-smoke">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-three">
                    <h5 class="sub-title">Add photos of your house</h5>
                </div><!-- /.Availability-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <form action="addimage.php" method="POST" class="advance_search_query" enctype="multipart/form-data">
                    <div class="form-content">
                        <div class="form-group">
                            <label for="image1">Upload Image 1</label>
                            <input type="file" name="image1" id="image1">
                        </div>
                        <div class="form-group">
                            <label for="image2">Upload Image 2</label>
                            <input type="file" name="image2" id="image2">
                        </div>
                        <div class="form-group">
                            <label for="image3">Upload Image 3</label>
                            <input type="file" name="image3" id="image3">
                        </div>
                        <div class="form-group">
                            <label for="image4">Upload Image 4</label>
                            <input type="file" name="image4" id="image4">
                        </div>
                        <div class="form-group">
                            <label for="image5">Upload Image 5</label>
                            <input type="file" name="image5" id="image5">
                        </div>
                    </div><!-- /.form-content -->
                    <button type="submit" class="button nevy-button">Complete</button>
                </form>


            </div>

        </div>
    </div><!-- /.container  -->
</div><!-- /.Availability-area -->
<?php require "footer.php"; ?>