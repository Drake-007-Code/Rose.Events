<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.O.S.E.Events</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Font Example</title>
    <!-- Add this line to link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Add your responsive font styles here */
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;  /* Default font size */
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 2rem;  /* 32px */
        }

        p {
            font-size: 1.1rem;  /* 17.6px */
        }

        @media only screen and (max-width: 768px) {
            body {
                font-size: 14px;  /* Smaller font size for mobile */
            }

            h1 {
                font-size: 1.8rem;  /* 28.8px */
            }

            p {
                font-size: 1rem;  /* 16px */
            }
        }
    </style>

</head>
<body>

    <body>
        <h1>Responsive Font Example</h1>
        <p>This is a paragraph with a responsive font. Try resizing the window to see how it adjusts.</p>
    </body>
    
<!-- header section starts  -->

<header class="header">
    <!-- Logo with image before the title -->
    <a href="#" class="logo">
        <span>R</span>.O.S.E.Events
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#price">Category</a>
        <a href="#contact">contact</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>
</header>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>
            <img src="images/Rose Logo.png" alt="Rose Logo" style="height: 400px; width: auto; vertical-align: middle; margin-right: 50px;">
            it's time to celebrate! the best <span> event organizers </span>
        </h3>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>venue selection</h3>
            <p>We help you find the perfect venue that fits your budget and style. 
                Whether you're looking for an intimate setting or a grand space, 
                we’ve got you covered with a variety of options that will make your event truly memorable.</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>invitation card</h3>
            <p>Make a lasting impression with our beautifully designed invitation cards. 
                We offer custom-made invitations that perfectly match the theme and style of your event, 
                ensuring your guests receive an invitation they'll cherish. 
                From elegant to fun, we bring your vision to life.</p>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>entertainment</h3>
            <p>Bring your event to life with our top-notch entertainment options! 
                From live music and DJs to fun activities and performances, 
                we offer a variety of options to keep your guests engaged and entertained throughout the event. 
                Let us help create an unforgettable experience that will have everyone talking!</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Savor the flavors with our exquisite food and drink offerings! 
                We provide a wide range of delicious menu options, from gourmet meals to refreshing beverages, 
                all tailored to suit your event's theme and your guests' preferences. Let us take care of the catering, 
                so you can focus on enjoying the celebration!</p>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>photos and videos</h3>
            <p>Capture every magical moment with our professional photography and videography services. 
                Our team ensures that every smile, every laugh, 
                and every special moment is perfectly preserved for you to relive for years to come. 
                Whether it's candid shots or cinematic videos, we create memories that last a lifetime!</p>
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>custom food</h3>
            <p>Indulge in a culinary experience tailored just for you! 
                Our custom food services allow you to create a personalized menu that fits your taste and event theme. 
                Whether you’re looking for unique dishes or special dietary options, 
                we ensure every meal is crafted to delight your guests and make your event even more special.</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>Your dream event, our passion</h3>
        <p>At Bramilton, we are dedicated to bringing your visions to life. With years of experience in the event planning industry, we specialize in curating memorable and unique events tailored to your needs. Whether it's a grand wedding, a birthday bash, or any special occasion, our team is here to ensure every detail is taken care of with precision and creativity. We believe in making every moment count and providing you with an unforgettable experience.</p>
        <p>From venue selection and custom food menus to entertainment and photography, we handle all aspects of your event with the utmost care. Let us make your celebration truly special!</p>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box" id="box1">
            <img src="images/g-1.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>
        
        <div class="box" id="box1">
            <img src="images/g-2.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <div class="box" id="box1">
            <img src="images/g-3.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <div class="box" id="box1">
            <img src="images/g-4.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <div class="box" id="box1">
            <img src="images/g-5.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <div class="box" id="box1">
            <img src="images/g-6.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <div class="box" id="box1">
            <img src="images/g-7.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <div class="box" id="box1">
            <img src="images/g-8.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <div class="box" id="box1">
            <img src="images/g-9.jpg" alt="Event Photo" class="imageToOpen">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart" data-box-id="box1"></a>
                <span class="likeCount" data-box-id="box1">0</span>
                <a href="#" class="fas fa-share" data-box-id="box1"></a>
                <a href="#" class="fas fa-eye" data-box-id="box1"></a>
            </div>
        </div>

        <script>
            // Like functionality: Increment the like count for each box
            document.querySelectorAll('.fas.fa-heart').forEach(function(likeIcon, index) {
                likeIcon.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default anchor behavior
                    const likeCountElement = e.target.nextElementSibling;  // Select the next sibling span (like count)
                    let likeCount = parseInt(likeCountElement.textContent);
                    likeCountElement.textContent = likeCount + 1;
                });
            });
        
            // Share functionality: Open a simple share dialog (supports browsers that have navigator.share API)
            document.querySelectorAll('.fas.fa-share').forEach(function(shareIcon, index) {
                shareIcon.addEventListener('click', function(e) {
                    e.preventDefault();
                    const imageSrc = e.target.closest('.box').querySelector('.imageToOpen').src;  // Get image src from the closest box
        
                    if (navigator.share) {
                        navigator.share({
                            title: 'Check out this photo!',
                            text: 'Here is an amazing event photo.',
                            url: imageSrc
                        }).catch(error => console.log('Error sharing:', error));
                    } else {
                        alert('Sharing is not supported in your browser.');
                    }
                });
            });
        
            // Eye functionality: Open the image in a larger view (modal)
            document.querySelectorAll('.fas.fa-eye').forEach(function(eyeIcon, index) {
                eyeIcon.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default anchor behavior
                    const imageSrc = e.target.closest('.box').querySelector('.imageToOpen').src;  // Get image src from the closest box
        
                    // Create a modal to display the image
                    const imageModal = document.createElement("div");
                    imageModal.style.position = "fixed";
                    imageModal.style.top = "0";
                    imageModal.style.left = "0";
                    imageModal.style.width = "100%";
                    imageModal.style.height = "100%";
                    imageModal.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
                    imageModal.style.display = "flex";
                    imageModal.style.justifyContent = "center";
                    imageModal.style.alignItems = "center";
                    imageModal.style.zIndex = "9999";
        
                    const modalImage = document.createElement("img");
                    modalImage.src = imageSrc;
                    modalImage.style.maxWidth = "90%";
                    modalImage.style.maxHeight = "90%";
                    modalImage.style.border = "5px solid white";
        
                    // Close the modal when clicking on the background
                    imageModal.addEventListener("click", function() {
                        document.body.removeChild(imageModal);
                    });
        
                    imageModal.appendChild(modalImage);
                    document.body.appendChild(imageModal);
                });
            });
        </script>
        
        <script>
            // Set like count for a specific image (image ID 1)
            function setLikeCount(imageId, count) {
                localStorage.setItem(`likeCount-${imageId}`, count);
            }
        
            // Get the like count for a specific image (image ID 1)
            function getLikeCount(imageId) {
                return localStorage.getItem(`likeCount-${imageId}`) || 0;
            }
        
            // Example: Click event for like button
            document.querySelector('.fas.fa-heart').addEventListener('click', function() {
                const imageId = 1;  // Use a dynamic ID based on your image
                let currentCount = parseInt(getLikeCount(imageId));
                currentCount++;
                setLikeCount(imageId, currentCount);
        
                // Update the UI with the new like count
                document.querySelector('.likeCount').textContent = currentCount;
            });
        
            // On page load, set the like count from localStorage
            document.addEventListener('DOMContentLoaded', function() {
                const imageId = 1;  // Use a dynamic ID based on your image
                const count = getLikeCount(imageId);
                document.querySelector('.likeCount').textContent = count;
            });
        </script>
        
        

    </div>

</section>

<!-- gallery section ends -->

<!-- price section starts  -->

<section class="price" id="price">

    <h1 class="heading">our<span>Category</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">For Weddings</h3>
            <h3 class="Category" style="color: brown;">Bronze Package</h3>
            <ul>
                <li><i class="fas fa-check"></i> Venue Selection </li>
                <li> <i class="fas fa-check"></i> Basic Decoration </li>
                <li> <i class="fas fa-check"></i> Sound & Music Setup </li>
                <li> <i class="fas fa-check"></i> Catering (Vegetarian Menu) </li>
                <li> <i class="fas fa-check"></i> Photography (Basic Package) </li>
                <li> <i class="fas fa-check"></i> Invitation Card Design (Basic) </li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Weddings</h3>
            <h3 class="Category" style="color: silver;">Silver Package</h3>
            <ul>
                <li><i class="fas fa-check"></i> Venue Selection </li>
                <li> <i class="fas fa-check"></i> Elegant Decoration (with Flowers) </li>
                <li> <i class="fas fa-check"></i> Sound & Music Setup </li>
                <li> <i class="fas fa-check"></i> Catering (Vegetarian & Non-Vegetarian Options) </li>
                <li> <i class="fas fa-check"></i> Photography & Videography </li>
                <li> <i class="fas fa-check"></i> Invitation Card Design (Customized) </li>
                <li> <i class="fas fa-check"></i> Pre-Wedding Shoot </li>
                <li> <i class="fas fa-check"></i> Bridal Makeup </li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Weddings</h3>
            <h3 class="Category" style="color: gold;">Gold Package</h3>
            <ul>
                <li><i class="fas fa-check"></i> Venue Selection (Premium Venues) </li>
                <li> <i class="fas fa-check"></i> Premium Decoration (Flowers, Themed Decor) </li>
                <li> <i class="fas fa-check"></i> Sound, Music & DJ Setup </li>
                <li> <i class="fas fa-check"></i> Catering (Gourmet Vegetarian & Non-Vegetarian Menu with Multiple Courses) </li>
                <li> <i class="fas fa-check"></i> Photography & Videography (Full Coverage) </li>
                <li> <i class="fas fa-check"></i> Customized Invitation Cards (High-End Design) </li>
                <li> <i class="fas fa-check"></i> Pre-Wedding Shoot with Album </li>
                <li> <i class="fas fa-check"></i> Bridal & Groom Makeup </li>
                <li> <i class="fas fa-check"></i> Live Entertainment (Band/DJ) </li>
                <li> <i class="fas fa-check"></i> Transport Arrangements (for Bride and Groom) </li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Birthdays</h3>
            <h3 class="Category" style="color: brown;">Bronze Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection</li>
            <li><i class="fas fa-check"></i> Basic Decorations</li>
            <li><i class="fas fa-check"></i> Music Setup</li>
            <li><i class="fas fa-check"></i> Catering (Simple Snacks & Cake)</li>
            <li><i class="fas fa-check"></i> Photography (Basic Package)</li>
            <li><i class="fas fa-check"></i> Invitation Card Design (Basic)</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Birthdays</h3>
            <h3 class="Category" style="color: silver;">Silver Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection</li>
            <li><i class="fas fa-check"></i> Elegant Decorations (With Balloons & Flowers)</li>
            <li><i class="fas fa-check"></i> Music Setup with DJ</li>
            <li><i class="fas fa-check"></i> Catering (Buffet with Snacks, Cake & Drinks)</li>
            <li><i class="fas fa-check"></i> Photography & Videography</li>
            <li><i class="fas fa-check"></i> Customized Invitation Cards</li>
            <li><i class="fas fa-check"></i> Party Favors for Guests</li>
            <li><i class="fas fa-check"></i> Theme-based Decoration</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Birthdays</h3>
            <h3 class="Category" style="color: gold;">Gold Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection (Premium Locations)</li>
            <li><i class="fas fa-check"></i> Luxury Decorations (Themed with Balloons, Flowers, and Light Installations)</li>
            <li><i class="fas fa-check"></i> DJ and Live Music Entertainment</li>
            <li><i class="fas fa-check"></i> Catering (Gourmet Buffet with Multiple Cuisines)</li>
            <li><i class="fas fa-check"></i> Photography & Videography (Full Event Coverage)</li>
            <li><i class="fas fa-check"></i> Customized Invitation Cards (Luxury Design)</li>
            <li><i class="fas fa-check"></i> Party Favors for All Guests</li>
            <li><i class="fas fa-check"></i> Themed Cake Design</li>
            <li><i class="fas fa-check"></i> Live Entertainment (Performers, Magicians, etc.)</li>
            <li><i class="fas fa-check"></i> Custom-designed Party Props</li>
            <li><i class="fas fa-check"></i> Transport Services (For Guests if needed)</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Corporate</h3>
            <h3 class="Category" style="color: brown;">Bronze Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection</li>
            <li><i class="fas fa-check"></i> Basic Decorations</li>
            <li><i class="fas fa-check"></i> Audio & Visual Setup</li>
            <li><i class="fas fa-check"></i> Tea/Coffee and Snacks Catering</li>
            <li><i class="fas fa-check"></i> Basic Photography</li>
            <li><i class="fas fa-check"></i> Invitation Cards</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Corporate</h3>
            <h3 class="Category" style="color: silver;">Silver Package</h3>
            <ul>
                <li><i class="fas fa-check"></i> Venue Selection</li>
            <li><i class="fas fa-check"></i> Elegant Decorations</li>
            <li><i class="fas fa-check"></i> Audio & Visual Setup with Microphones and Projector</li>
            <li><i class="fas fa-check"></i> Catering (Buffet with Tea/Coffee, Snacks, and Light Meals)</li>
            <li><i class="fas fa-check"></i> Professional Photography & Videography</li>
            <li><i class="fas fa-check"></i> Customized Invitation Cards</li>
            <li><i class="fas fa-check"></i> Event Management</li>
            <li><i class="fas fa-check"></i> Branding Opportunities (Banners, Posters)</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Corporate</h3>
            <h3 class="Category" style="color: gold;">Gold Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection (Premium Locations)</li>
            <li><i class="fas fa-check"></i> Premium Decorations (Customized Themes & Props)</li>
            <li><i class="fas fa-check"></i> Audio & Visual Setup with Full AV Equipment</li>
            <li><i class="fas fa-check"></i> Catering (Gourmet Buffet with Tea/Coffee, Snacks, Lunch, and Beverages)</li>
            <li><i class="fas fa-check"></i> Professional Photography & Videography (Full Event Coverage)</li>
            <li><i class="fas fa-check"></i> Customized Invitation Cards and Event Brochures</li>
            <li><i class="fas fa-check"></i> Event Management (Full Coordination)</li>
            <li><i class="fas fa-check"></i> Branding Opportunities (Stall Setup, Customized Signage)</li>
            <li><i class="fas fa-check"></i> VIP Lounge Setup</li>
            <li><i class="fas fa-check"></i> Live Entertainment (Guest Speakers, Performances, etc.)</li>
            <li><i class="fas fa-check"></i> Gifts and Favors for Guests</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Others</h3>
            <h3 class="Category" style="color: brown;">Bronze Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection</li>
            <li><i class="fas fa-check"></i> Basic Decorations</li>
            <li><i class="fas fa-check"></i> Sound System Setup</li>
            <li><i class="fas fa-check"></i> Snacks and Drinks</li>
            <li><i class="fas fa-check"></i> Basic Photography</li>
            <li><i class="fas fa-check"></i> Invitation Cards</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Others</h3>
            <h3 class="Category" style="color: silver;">Silver Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection</li>
            <li><i class="fas fa-check"></i> Elegant Decorations</li>
            <li><i class="fas fa-check"></i> Sound System Setup and Microphones</li>
            <li><i class="fas fa-check"></i> Catering (Snacks & Drinks)</li>
            <li><i class="fas fa-check"></i> Professional Photography</li>
            <li><i class="fas fa-check"></i> Invitation Cards</li>
            <li><i class="fas fa-check"></i> Event Planning and Coordination</li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">For Others</h3>
            <h3 class="Category" style="color: gold;">Gold Package</h3>
            <ul>
            <li><i class="fas fa-check"></i> Venue Selection (Premium Locations)</li>
            <li><i class="fas fa-check"></i> Premium Decorations (Custom Themes)</li>
            <li><i class="fas fa-check"></i> Full Audio and Visual Setup</li>
            <li><i class="fas fa-check"></i> Gourmet Catering (Buffet with Full Menu)</li>
            <li><i class="fas fa-check"></i> Professional Photography & Videography</li>
            <li><i class="fas fa-check"></i> Custom Invitation Cards and Event Materials</li>
            <li><i class="fas fa-check"></i> Full Event Coordination and Management</li>
            <li><i class="fas fa-check"></i> Entertainment Options (Live Performances, Music)</li>
            <li><i class="fas fa-check"></i> Customized Gifts and Favors for Guests</li>
            </ul>
        </div>

    </div>


</section>

<!-- price section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> us </h1>

    <form>
        <div class="inputBox">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="inputBox">
            <input type="number" name="number" placeholder="Number" required>
            <input type="text" name="subject" placeholder="Subject" required>
        </div>
        <textarea name="message" placeholder="Your message" cols="30" rows="10" required></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>
</section>

<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Get the form data
        const name = document.querySelector('[name="name"]').value;
        const email = document.querySelector('[name="email"]').value;
        const number = document.querySelector('[name="number"]').value;
        const subject = document.querySelector('[name="subject"]').value;
        const message = document.querySelector('[name="message"]').value;

        // Construct the message to send via WhatsApp
        const messageText = `New message from:\nName: ${name}\nEmail: ${email}\nPhone: ${number}\nSubject: ${subject}\nMessage: ${message}`;
        
        // Encode the message for the URL
        const encodedMessage = encodeURIComponent(messageText);
        
        // Open WhatsApp with the pre-filled message (replace 'your_number' with your WhatsApp number)
        const whatsappLink = `https://wa.me/+918489659776?text=${encodedMessage}`;
        window.open(whatsappLink, '_blank');
    });
</script>


<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="https://maps.app.goo.gl/uwx1jv7Ui61mkdJC9" target="_blank">
                <i class="fas fa-map-marker-alt"></i> Chennai
            </a> 
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#service"> <i class="fas fa-arrow-right"></i> service </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#price"> <i class="fas fa-arrow-right"></i> Category </a>
        </div>
        

        <div class="box">
            <h3>contact info</h3>
            <a href="tel:+916374551652">
                <i class="fas fa-phone"></i> +91 6374551652
            </a>            
            <a href="mailto:rose.events5235@gmail.com?subject=Inquiry&body=Hello, I have an inquiry...">
                <i class="fas fa-envelope"></i> rose.events5235@gmail.com
            </a>
            <a href="https://maps.app.goo.gl/uwx1jv7Ui61mkdJC9" target="_blank">
                <i class="fas fa-map-marker-alt"></i> Jeevan Bhima Nagar, Anna Nagar, West Extension, Chennai
            </a>            
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/share/12MHe1qU5Lh/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://www.instagram.com/r.o.s.e.events?utm_source=qr&igsh=bnJtNGdwM2hwcXRx"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://youtube.com/@r.o.s.eevents?si=zlD6Phgd5CiVhvLz"> <i class="fab fa-youtube"></i> youtube </a>
        </div>

    </div>

    <div class="credit">
        Created by Bramilton | &copy; <span id="year"></span> All rights reserved.
    </div>
    
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>    

</section>

<!-- footer section ends -->

<!-- theme toggler  -->
<div class="theme-toggler">

    <div class="toggle-btn">
        <i class="fas fa-cog"></i>
    </div>

    <h3>choose color</h3>

    <div class="buttons">
        <div class="theme-btn" style="background: #3867d6;"></div>
        <div class="theme-btn" style="background: #f7b731;"></div>
        <div class="theme-btn" style="background: #ff0033;"></div>
        <div class="theme-btn" style="background: #20bf6b;"></div>
        <div class="theme-btn" style="background: #fa8231;"></div>
        <div class="theme-btn" style="background: #FC427B;"></div>
    </div>

</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>