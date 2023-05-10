<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <title>Smart Meters</title>
    <!--

    Lava Landing Page

    https://templatemo.com/tm-540-lava-landing-page

    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <style>
        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            margin: 10px;
            width: 100%;
            font-size: 17px;
            /*font-family: Raleway;*/
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #f4813f;
        }
    </style>

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        Smart Meter
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        @if(Cartalyst\Sentinel\Native\Facades\Sentinel::check())
                            <span>You Welcome {{Cartalyst\Sentinel\Native\Facades\Sentinel::getUser()->first_name}} <form action="/logout" method="post">
                                <a style="color: red;  float: right;  margin-left: 20px;" href="#" onclick="">Logout</a>
                            </form> </span>
                        @else

                            <li><a href="/register">Register</a></li>
                            <li><a href="/login" >Login</a></li>
                        @endif


                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->


{{--<div class="left-image-decor"></div>--}}

<!-- ***** Footer Start ***** -->
<footer id="contact-us">
    <div class="container">
        <div class="footer-content">
            <div class="row">

                <form id="regForm" action="newmeter" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h1>New Meter Request:</h1>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                @endif
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="first_name" type="text" id="first_name" placeholder="First Name" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="last_name" type="text" id="last_name"
                                           placeholder="Last Name" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="other_name" type="text" id="other_name"
                                           placeholder="Other Name" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>
                        </div>


                    </div>

                    <div class="tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="phone_number_one" type="text" id="phone_number_one"
                                           placeholder="phone_number_one" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="phone_number_two" type="text" id="phone_number_two"
                                           placeholder="phone_number_two" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="email" type="email" id="email"
                                           placeholder="Email" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="residential_address" type="text" id="residential_address"
                                           placeholder="residential_address" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input oninput="this.className = ''" name="ghana_post_gps" type="text" id="ghana_post_gps"
                                           placeholder="ghana_post_gps" required=""
                                           style="background-color: rgba(250,250,250,0.3);">
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="col-lg-12">
                            <fieldset>
                                <input oninput="this.className = ''" name="address_Post_Office" type="text" id="address_Post_Office"
                                       placeholder="address_Post_Office" required=""
                                       style="background-color: rgba(250,250,250,0.3);">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input oninput="this.className = ''" name="national_id" type="text" id="national_id"
                                       placeholder="National ID No. (Ghana Card only)" required=""
                                       style="background-color: rgba(250,250,250,0.3);">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input oninput="this.className = ''" name="meter_type" type="text" id="meter_type"
                                       placeholder="meter_type" required=""
                                       style="background-color: rgba(250,250,250,0.3);">
                            </fieldset>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="col-lg-12">
                            <fieldset>
                                <input oninput="this.className = ''" name="ghanacard_copy" type="file" id="ghanacard_copy"
                                       placeholder="ghanacard_copy" required=""
                                       style="background-color: rgba(250,250,250,0.3);">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input oninput="this.className = ''" name="buildingpermit_copy" type="file" id="buildingpermit_copy"
                                       placeholder="buildingpermit_copy" required=""
                                       style="background-color: rgba(250,250,250,0.3);">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input oninput="this.className = ''" name="energycommission_copy" type="file" id="energycommission_copy"
                                       placeholder="energycommission_copy" required=""
                                       style="background-color: rgba(250,250,250,0.3);">
                            </fieldset>
                        </div>
                    </div>

                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="main-button">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="main-button">Next</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

                </form>


            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sub-footer">
                    <p>Copyright &copy; 2020 Smart Meter

                        | Designed by <a rel="nofollow" href="#">Asamoah</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


{{--<div class="right-image-decor"></div>--}}




<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
</script>
</body>
</html>
