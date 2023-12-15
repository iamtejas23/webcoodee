<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <title>Custom Bootstrap Navbar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
      <img src="./img/logo.webp" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#spaciality">Restaurant Specialty</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Image Slider Container -->
   <!-- Slideshow Container -->
  <div class="slideshow-container">

    <!-- Slide 1 -->
    <div class="mySlides">
      <img src="./img/image1.jpg" alt="Slide 1">
      
    </div>

    <!-- Slide 2 -->
    <div class="mySlides">
      <img src="./img/image2.jpg" alt="Slide 2">
      
    </div>

    <!-- Slide 3 -->
    <div class="mySlides">
      <img src="./img/image3.jpg" alt="Slide 3">
      
    </div>
    <h1 class="hero-heading">The One8 Commune</h1>
    <!-- Add more slides as needed -->

    <!-- Navigation Dots -->
    <div style="text-align:center; margin-top: 20px;">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <!-- Add more dots as needed -->
    </div>

  </div>

<!-- About Section -->
<div class="about-section" id="about">
    <img class="about-image" src="./img/about.webp" alt="Restaurant Image">
    <div class="about-content">
      <h2>About Us</h2>
      <p>Known across the country for its delectable Frontier, Punjabi & Lucknawi food, PIND BALLUCHI is a name that spells exhilaration and satisfaction. With over two decades of journey in the hospitality industry, the brand has made a mark for itself. Owning 5+ National Awards to its credit & 40+ Restaurants in over 15 states, PIND BALLUCHI  surely leaves an everlasting impression on one’s mind and heart whenever one steps in , Right from the holistic experience of Punjab’s soulful cuisines to the Village Themed Ambience, the restaurants are ideal hotspots if one chooses to dine in a place that transports one to the quintessential Pind in Punjab. Our dishes are curated with the finest of ingredients, fresh herbs & spices, with great attention paid to the recipes to evolve authentic flavours of the cuisine. Laden with culture, tradition and age-old warmth of Indian hospitality, PIND BALLUCHI is a culinary experience that you will treasure for life.</p>
    <!-- Info Section -->
  <div class="info-container">
    <!-- Restaurants Box -->
    <div class="info-box">
      <img class="info-icon" src="./img/restaurant.png" alt="Restaurant Icon">
      <div>40+</div>
      <div>Restaurants</div>
    </div>

    <!-- Food Items Box -->
    <div class="info-box">
      <img class="info-icon" src="./img/food.png" alt="Food Icon">
      <div>100+</div>
      <div>Food Items</div>
    </div>

    <!-- Years Box -->
    <div class="info-box">
      <img class="info-icon" src="./img/cooking.png" alt="Years Icon">
      <div>30+</div>
      <div>Years</div>
    </div>
  </div>
    </div>
  </div>

  <!-- Spaciality section  -->
  <section class="Spaciality" id="spaciality">
    <h2>Spaciality Of <span>Restaurant</span> </h2>
    <div class="cards-container">
        <div class="card">
            <img src="./img/atmosphire.png" alt="Coffee Icon" class="icon">
            <h2>Magical Atmosphere</h2>
            <p>Wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
        </div>
    
        <div class="card">
            <img src="./img/quality.png" alt="Coffee Icon" class="icon">
            <h2>Best Food Quality</h2>
            <p>Wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
        </div>
    
        <div class="card">
            <img src="./img/coffee-cup.png" alt="Coffee Icon" class="icon">
            <h2>Coffee</h2>
            <p>Wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
        </div>
    </div>
  </section>
<br>
<!-- Photos php code  -->
<?php
include('config.php');

// Fetch photos from the database
$sql = "SELECT * FROM photos ORDER BY priority DESC";
$result = $conn->query($sql);
$photos = $result->fetch_all(MYSQLI_ASSOC);
?>
<div class="gallery-view">
<div class="photo-gallery">
        <?php foreach ($photos as $photo): ?>
            <div class="photo">
                <img src="uploads/<?php echo $photo['filename']; ?>" alt="<?php echo $photo['category']; ?>">
                <!-- <p> <?php echo $photo['category']; ?></p>
                <p><?php echo $photo['priority']; ?></p> -->
            </div>
        <?php endforeach; ?>
    </div>
</div>
<br>
<!--  menu  -->
<section class="menu-list">
  <h2>Menu</h2>
<div class="menu">
    
    <div class="item">
      <img src="./img/menu2.png" alt="Appetizer 1">
      <div class="item-content">
        <h3>Appetizer </h3>
        <p>Description of appetizer</p>
      </div>
    </div>
    <!-- Add more appetizer items as needed -->

    <div class="item">
      <img src="./img/menu1.png" alt="Main Course 1">
      <div class="item-content">
        <h3>Soup</h3>
        <p>Description of main course</p>
      </div>
    </div>
    <!-- Add more main course items as needed -->

    <div class="item">
      <img src="./img/menu3.png" alt="Dessert 1">
      <div class="item-content">
        <h3>Salad</h3>
        <p>Description of dessert.</p>
      </div>
    </div>
    <!-- Add more dessert items as needed -->
    <div class="item">
      <img src="./img/menu2.png" alt="Appetizer 1">
      <div class="item-content">
        <h3>Meat</h3>
        <p>Description of appetizer.</p>
      </div>
    </div>
    <!-- Add more appetizer items as needed -->
    <div class="item">
      <img src="./img/menu2.png" alt="Appetizer 1">
      <div class="item-content">
        <h3>Seafood</h3>
        <p>Description of appetizer.</p>
      </div>
    </div>
    <!-- Add more appetizer items as needed -->

    <div class="item">
      <img src="./img/menu1.png" alt="Main Course 1">
      <div class="item-content">
        <h3>Vegetarian</h3>
        <p>Description of main course .</p>
      </div>
    </div>
    <!-- Add more main course items as needed -->

    <div class="item">
      <img src="./img/menu3.png" alt="Dessert 1">
      <div class="item-content">
        <h3>Side Dish</h3>
        <p>Description of dessert .</p>
      </div>
    </div>
    <!-- Add more dessert items as needed -->
    <div class="item">
      <img src="./img/menu2.png" alt="Appetizer 1">
      <div class="item-content">
        <h3>Dessert</h3>
        <p>Description of appetizer.</p>
      </div>
    </div>
    
    <!-- Add more main course items as needed -->

    

  </div>
</section>

<!-- End of menu section  -->
<!-- Contact -->
<div class="contact-container">
    <div class="contact-form">
        <img src="./img/contact.webp" alt="Contact Image">
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>


<!-- End of contact -->
<!-- footer section -->
<footer class="site-footer">
    <div class="footer-content">
        <div class="brand-icon">
            <img src="./img/logo.webp" alt="Brand Icon">
        </div>
        <div class="footer-links">
            <a href="#">Policies</a>
            <a href="#">Disclaimer</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="email-input">
            <input type="email" placeholder="Your email address">
            <button type="submit">Send</button>
        </div>
    </div>
    <div class="copyright">
        All rights of the site are reserved by Pind Balluchi, a unit of JS Hospitality Services pvt ltd © 2019 | Designed By Easy Solutions 360
    </div>
</footer>


  <!-- Bootstrap JS and dependencies (jQuery) -->
  <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 3000); // Change slide every 5 seconds
}
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
