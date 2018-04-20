<?php include "common/header.php" ?>

<body class="secondpage">
    <form name="search" action="#">
        <div class="container" style="width:60%; border-style: solid; border-width: 6px; border-color: #f05f40; background-color: rgba(255,255,255,0.9); color: black; ">
            <div class="row text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-bug text-primary sr-icons"></i>
                    <h3>Enter pest name</h3>
                    <input type="text" name="insect_name" placeholder="pest" style="text-align: center"><br>
                    <div id="insect_menu"></div>
                    <br>
                </div>
            </div>

            <br>
            <hr class="primary">
            <br>

            <div class="row text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-leaf text-primary sr-icons"></i>
                    <h3>Enter crop name</h3>
                    <input type="text" name="plant_name" placeholder="crop" style="text-align: center"><br>
                    <div id="plant_menu"></div>
                    <br>
                </div>
            </div>

            <br>
            <hr class="primary">
            <br>

            <div class="row text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-camera text-primary sr-icons"></i>
                    <h3>Drop Files Here</h3>
                    <div id="drop-area-div">
                        <input class="pull-right" type="file" name="files[]" multiple="multiple" title="Click to add Files">
                        <input type="hidden" name="image_url">
                        <br>
                    </div>

                    <hr class="primary">
                </div>
            </div>

            <br>

            <div class="row text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-map-marker text-primary sr-icons"></i>
                    <h3>Location</h3>

                    <p id="demo">Click the button to get your position.</p>
                    <button type = "button" onclick="getLocation()">Pin</button>

                    <div id="mapholder"></div>

                    <input type="hidden" name="lat">
                    <input type="hidden" name="long">

                    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_ovIQCq7UxhFYoBnW1oqjfdukOJaFhuk&callback=myMap"></script>-->
                </div>
            </div>

            <br>
            <hr class="primary">
            <br>

            <p>If you don't know what your insects name is <a href="help.html">click here</a> for help.</p>
        </div>

        <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <button class="btn btn-default btn-xl sr-button" style="background-color:#f05f40;">Submit Now!</button>
                    <br>
                </div>
            </div>
        </div>

    </form>

    <br>

<?php include "common/footer.php" ?>