<?php require "head.php"; ?>

<div class="availability-area bg-white-smoke">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-three">
                    <h5 class="sub-title">Add available Features & features for your house</h5>
                </div><!-- /.Availability-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <form action="addfeature.php" method="POST" class="advance_search_query">
                    <div class="form-content">
                        <div class="form-group">
                            <label>Some common outdoor features</label>
                            <input type="checkbox" id="garden" name="outdoor_features[]" value="Garden">
                            <label for="garden">Garden</label>
                            <input type="checkbox" id="pool" name="outdoor_features[]" value="Swimming Pool">
                            <label for="pool">Swimming Pool</label>
                            <input type="checkbox" id="parking" name="outdoor_features[]" value="Parking Space">
                            <label for="parking">Parking Space</label>
                            <input type="checkbox" id="playground" name="outdoor_features[]" value="Children's Playground">
                            <label for="playground">Children's Playground</label>
                            <input type="checkbox" id="bbq" name="outdoor_features[]" value="BBQ Area">
                            <label for="bbq">BBQ Area</label>
                        </div>
                        <div class="form-group">
                            <label>Add other outdoor features available</label>
                            <small>Separate different facilities with a comma</small>
                            <textarea name="other_outdoor_features" id="" cols="10" rows="3" placeholder="Example: Rooftop terrace, pet area, jogging track"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Some common indoor features</label>
                            <input type="checkbox" id="cctv" name="indoor_features[]" value="CCTV">
                            <label for="cctv">CCTV surveillance</label>
                            <input type="checkbox" id="generator" name="indoor_features[]" value="Generator">
                            <label for="generator">Generator</label>
                            <input type="checkbox" id="lift" name="indoor_features[]" value="Lift">
                            <label for="lift">Lift</label>
                            <input type="checkbox" id="fire_exit" name="indoor_features[]" value="Fire exit">
                            <label for="fire_exit">Fire exit</label>
                            <input type="checkbox" id="safety_grills" name="indoor_features[]" value="Safety Grills">
                            <label for="safety_grills">Safety Grills</label>
                        </div>
                        <div class="form-group">
                            <label>Add other indoor features available</label>
                            <small>Separate different facilities with a comma</small>
                            <textarea name="other_indoor_features" id="" cols="10" rows="3" placeholder="Example: Gym, sauna, games room"></textarea>
                        </div>
                    </div><!-- /.form-content -->
                    <button type="submit" class="button nevy-button">Submit</button>
                </form>

            </div>

        </div>
    </div><!-- /.container  -->
</div><!-- /.Availability-area -->
<?php require "footer.php"; ?>