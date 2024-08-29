<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdHandiya</title>
    <link rel="stylesheet" href="./AdminPage/assets/css/home.css">
</head>

<body>
    <!--Header-->
    <nav>
        <div class="left-side">
            <div class="logo">
                <a href="./index.php"><img src="./AdminPage/assets/Images/adlogo.png"></a>
            </div>
            <ul>
                <div class="nav-links">
                    <li><a href="./index.php" class="home-link">Home</a></li>
                    <li><a href="#allads" class="all-ads-link">All Ads</a></li>
                </div>
            </ul>
        </div>
        <ul>
            <div class="right-side">
                <li><a href="./AdminPage/pages/login.php">Login/Register</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#post" class="postAD-link">Post Your AD!</a></li>
            </div>
        </ul>
    </nav>

    <div class="main-container">
        <div class="location-container">
            <img class="map-icon" src="./AdminPage/assets/Images/map.png" alt="Location Icon">
            <label for="location-select"></label>
            <select id="location-select" name="location">
                <!--All of Sri Lanka -->
                <option value="all-of-sri-lanka" selected>All of Sri Lanka</option>

                <!--Western-->
                <optgroup label="Western Province">
                    <option value="Colombo">Colombo District</option>
                    <option value="Gampaha">Gampaha District</option>
                    <option value="Kaluthara">Kaluthara District</option>
                </optgroup>

                <!--Nothern-->
                <optgroup label="Nothern Province">
                    <option value="Jaffna">Jaffna District</option>
                    <option value="Kilinochchi">Kilinochchi District</option>
                    <option value="Mannar">Mannar District</option>
                    <option value="Mullaitivu">Mullaitivu District</option>
                    <option value="Vavuniya">Vavuniya District</option>
                </optgroup>

                <!--North Western-->
                <optgroup label="North Western Province">
                    <option value="Puttlam">Puttlam District</option>
                    <option value="Kurunegala">Kurunegala District</option>
                </optgroup>

                <!--North Central-->
                <optgroup label="North Central Province">
                    <option value="Anuradhapura">Anuradhapura District</option>
                    <option value="Polonnaruwa">Polonnaruwa District</option>
                </optgroup>

                <!--Central-->
                <optgroup label="Central Province">
                    <option value="Matale">Matale District</option>
                    <option value="Kandy">Kandy District</option>
                    <option value="Nuwara-Eliya">Nuwara-Eliya District</option>
                </optgroup>

                <!--Sabaragamuwa-->
                <optgroup label="Sabaragamuwa Province">
                    <option value="Ratnapura">Ratnapura District</option>
                    <option value="Kegalle">Kegalle District</option>
                </optgroup>

                <!--Eastern-->
                <optgroup label="Eastern Province">
                    <option value="Trincomalee">Trincomalee District</option>
                    <option value="Batticaloa">Batticaloa District</option>
                    <option value="Ampara">Ampara District</option>
                </optgroup>

                <!--Uva-->
                <optgroup label="Uva Province">
                    <option value="Badulla">Badulla District</option>
                    <option value="Monaragala">Monaragala District</option>
                </optgroup>

                <!--Southern-->
                <optgroup label="Southern Province">
                    <option value="Hambanthota">Hambanthota District</option>
                    <option value="Matara">Matara District</option>
                    <option value="Galle">Galle District</option>
                </optgroup>
            </select>
        </div>

        <!--Search Bar & Search Button-->
        <div class="search-container">
            <input type="text" placeholder="What are you looking for..." class="search-bar">
            <button>Search</button>
        </div>

        <!--Text after the search bar & button-->
        <div class="category-text">Browse items by categories.</div>

        <div class="categories-background">
            <!-- Category container -->
            <div class="category-container">
                <!-- Category items -->

                <a href="#">
                    <div class="category-item">
                        <img src="./AdminPage/assets/Images/property.avif" alt="Property">
                        <!-- Text overlay -->
                        <div class="text-overlay">Property</div>
                    </div>
                </a>


                <a href="#">
                    <div class="category-item">
                        <img src="./AdminPage/assets/Images/vehicles.jpg" alt="Vehicles">
                        <!-- Text overlay -->
                        <div class="text-overlay"> Vehicles</div>
                    </div>
                </a>

                <a href="#">
                    <div class="category-item">
                        <img src="./AdminPage/assets/Images/electronics.avif" alt="Electronics">
                        <!-- Text overlay -->
                        <div class="text-overlay">Electronics</div>
                    </div>
                </a>

                <div class="category-item">
                    <img src="./AdminPage/assets/Images/fashion.jpg" alt="Fashion">
                    <!-- Text overlay -->
                    <div class="text-overlay">Fashion, Health & Beauty</div>
                </div>
                <a href="#sports">
                    <div class="category-item">
                        <img src="./AdminPage/assets/Images/sports.avif" alt="Sports">
                        <!-- Text overlay -->
                        <div class="text-overlay">Sports</div>
                    </div>
                </a>
                <!-- Add more category items as needed -->
            </div>
        </div>

        <!-- Subcategories section -->
        <div class="subcategories-background">
            <div class="subcategories-container">
                <!-- Subcategory items -->
                <a href="#animals">
                    <div class="subcategory-item">
                        <img src="./AdminPage/assets/Images/dog.png" alt="animals">
                        <div class="text-overlay">Animals</div>
                    </div>
                </a>

                <a href="#kids">
                    <div class="subcategory-item">
                        <img src="./AdminPage/assets/Images/kids.png" alt="kids">
                        <div class="text-overlay">Kids Items</div>
                    </div>
                </a>

                <a href="#tools">
                    <div class="subcategory-item">
                        <img src="./AdminPage/assets/Images/tools.png" alt="tools">
                        <div class="text-overlay">Tools</div>
                    </div>
                </a>

                <a href="#others">
                    <div class="subcategory-item">
                        <img src="./AdminPage/assets/Images/others.png" alt="others">
                        <div class="text-overlay">Others</div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="adCampaigns-background">
        <a href="./AdminPage/pages/offers.php"><button id="offers">View Offers</button></a>
    </div>


    <div class="footer">

        <div class="footer-row">

            <div class="footer-logo">
                <img src="./AdminPage/assets/Images/adlogo.png" alt="f-logo">
            </div>

            <div class="footer-followUs">
                <ul>
                    <li>Follow Us</li>
                    <div class="f_uprow-links">
                        <li><a href="#facebook"><img src="./AdminPage/assets/Images/fb.png" alt="fb-logo"></a></li>
                        <li><a href="#Instagram"><img src="./AdminPage/assets/Images/ig.png" alt="Insta-logo"></a></li>
                    </div>

                    <div class="f_downrow-links">
                        <li><a href="#xtwitter"><img src="./AdminPage/assets/Images/xtwitter.png" alt="xtweet-logo"></a></li>


                        <li><a href="#linkedin"><img src="./AdminPage/assets/Images/linkedin.png" alt="linkedin-logo"></a></li>
                    </div>
                </ul>

            </div>

            <div class="footer-helpSup">
                <ul>
                    <li>Help & Support</li>
                    <li><a href="./FAQPage/FAQPage.php">FAQs</a></li>
                    <li><a href="#StaySafe">Stay Safe</a></li>
                    <li><a href="#ContUs">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-aboutUs">
                <ul>
                    <li>About Us</li>
                    <li><a href="./AboutUsPage/AboutUsPage.php">About Us</a></li>
                    <li><a href="#StaySafe">Privacy Policy</li>
                    <li><a href="#ContUs">Terms & Conditions</a></li>
                </ul>

            </div>

        </div>

        <div class="right-reserved">
            2024 AdHandiya(PVT)LTD. All Rights Reserved.
        </div>
    </div>

</body>

</html>