<?php require "head.php"; ?>
0
<div class="availability-area bg-white-smoke">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-three">
                    <h5 class="sub-title">Add your house to the best house finder app</h5>
                </div><!-- /.Availability-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <style>
                    .form-group {
                        min-width: 300px !important;
                    }
                </style>
                <form action="addlisting.php" method="POST" class="advance_search_query">
                    <div class="form-content">
                        <div class="form-group">
                            <label>House Type</label>
                            <select name="house_type" id="category-select">
                                <option value="">Select a category</option>
                                <optgroup label="Residential">
                                    <option value="family-house">Family House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="sublet">Sublet</option>
                                    <option value="bachelor-mess">Bachelor Mess</option>
                                    <option value="female-mess">Female Mess</option>
                                </optgroup>
                                <optgroup label="Commercial">
                                    <option value="office">Office</option>
                                    <option value="factory">Factory</option>
                                    <option value="warehouse">Warehouse</option>
                                    <option value="hall-room">Hall Room</option>
                                    <option value="garage">Garage</option>
                                </optgroup>
                            </select>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-group -->

                    <div class="form-content">
                        <hr>

                        <div class="form-group">
                            <label>House description</label>
                            <textarea name="house_description" id="" cols="10" rows="3" placeholder="Give a short description of your house"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Give a brief description of where it's located and the area</label>
                            <textarea name="location_description" id="" cols="10" rows="3" placeholder="Give a short description of the area your house is located"></textarea>
                        </div>
                        <div class="for-group">
                            <label>Choose The county Location</label>
                            <select id="county" name="county" onchange="populateSubcounties()">
                                <option value="">-- Select a county --</option>
                            </select>
                        </div>
                        <div class="for-group">
                            <label>Choose The sub-county Location</label>
                            <select id="subcounty" name="subcounty">
                                <option value="">-- Select a sub-county --</option>
                            </select>
                        </div>

    <script>
        const data = {
    "Nairobi": ["Westlands", "Dagoretti North", "Dagoretti South", "Lang'ata", "Kibra"],
    "Kiambu": ["Thika", "Ruiru", "Gatundu South", "Gatundu North", "Juja"],
    "Nakuru": ["Nakuru Town West", "Nakuru Town East", "Naivasha", "Njoro", "Gilgil"],
    "Kakamega": ["Kakamega Central", "Kakamega East", "Kakamega North", "Kakamega South", "Lugari"],
    "Bungoma": ["Bungoma North", "Bungoma South", "Bungoma East", "Bungoma West", "Kanduyi"],
};

        function populateSelect(selectId, options) {
            const select = document.getElementById(selectId);
            select.innerHTML = `<option value="">-- Select a ${selectId} --</option>`;
            options.forEach(option => {
                const opt = document.createElement("option");
                opt.value = option;
                opt.textContent = option;
                select.appendChild(opt);
            });
        }

        function populateSubcounties() {
            const countySelect = document.getElementById("county");
            const selectedCounty = countySelect.value;
            const subcounties = data[selectedCounty] || [];
            populateSelect("subcounty", subcounties);
        }

        // Populate the counties select input on page load
        populateSelect("county", Object.keys(data));
    </script>

                    </div>

                    <hr>
                    <div class="form-content">

                        <div class="form-group">
                            <label>Size of your house (in sq meters)</label>
                            <input type="text" name="house_size" placeholder="3000">
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label>Describe the rooms of your house</label>
                            <input type="text" name="room_description" placeholder="3 bedrooms, 2 bathrooms, 1 kitchen">
                        </div><!-- /.form-group -->
                    </div><!-- /.form-group -->

                    <hr>
                    <div class="form-content">

                        <div class="form-group">
                            <label>Rent Type</label>
                            <select name="rent_type">
                                <option value="monthly">Monthly</option>
                                <option value="annually">Annually</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rent Amount</label>
                            <input type="text" name="rent_amount" placeholder="3000">
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label>Security Deposit</label>
                            <select name="security_deposit">
                                <option value="1">1 month</option>
                                <option value="2">2 Months</option>
                                <option value="3">3 Months</option>
                                <option value="4">4 Months</option>
                                <option value="5">5 Months</option>
                                <option value="6">6 Months</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Release Policy</label>
                            <small>Period to inform your landlord before moving out</small>
                            <select name="release_policy">
                                <option value="1">1 month</option>
                                <option value="2">2 Months</option>
                                <option value="3">3 Months</option>
                                <option value="4">4 Months</option>
                                <option value="5">5 Months</option>
                                <option value="6">6 Months</option>
                            </select>
                        </div>

                    </div><!-- /.form-content -->

                    <hr>
                    <div class="form-content">

                        <div class="form-group">
                            <label>Enter a youtube link for your house video tour</label>
                            <input type="text" name="tour" placeholder="https://www.youtube.com/watch?v=G8nNGk6LHaM">
                        </div><!-- /.form-group -->
                    </div><!-- /.form-group -->
                    <button type="submit" class="button nevy-button">Complete</button>
                </form>
            </div>

        </div>
    </div><!-- /.container  -->
</div><!-- /.Availability-area -->
<?php require "footer.php"; ?>