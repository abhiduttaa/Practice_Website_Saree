<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saree Website</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style1.css"> -->
     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- toggle light dark Mode start -->
  <style>
    body, html{
      margin: 0;
      padding: 0;
    }
    body.dark-mode {
      background-color: #121212;
      color: #ffffff;
    }

    body.dark-mode .navber,
    body.dark-mode .footer {
      background-color: #1f1f1f;
    } 

    body.dark-mode a {
      color: #9ecfff;
    }

    /* Toggle Button */
    #modeToggle {
      border: none;
      font-size: 18px;
      padding: 5px 10px;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
  <!-- toggle light dark Mode End -->

</head>
<body>
    <div class="container">
        <!-- <h1>Home Page</h1> -->
        <!-- navber section starts -->
        <div class="navber">
            <div class="navleft">
                <div class="logo">
                    <img src="####" alt="" srcset="">Abhijit Dutta
                </div>
            </div>
            <div class="navright">
                <div class="Home">
                    <a href="#landingpage">Home</a>
                </div>
                <div class="product">
                    <a href="#Product">Our Products</a>
                </div>
                <div class="Catalog">
                    <a href="#">Catalog</a>
                    <div class="dropdowncatalog">
                        <ul>
                            <li>New Saree</li>
                            <li>Indian Sarees</li>
                            <!-- <li>Katan Saree</li>
                            <li>JamdaniSaree</li>
                            <li>Balu churi Saree</li> -->
                        </ul>
                    </div>
                </div>
                <div class="goodies">
                    <a href="#">Goodies</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="cart.html"><p style="color: white;">Bagom puri Saree</p></a></li>
                            <li><a href="cart.html"><p>Santipur Saree</p></a></li>
                            <li><a href="cart.html"><p>Katan Saree</p></a></li>
                            <li><a href="cart.html"><p>Jamdani Saree</p></a></li>
                            <li><a href="cart.html"><p>Balu churi Sar</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class="Contact">
                    <a href="#contactus">Contact</a>
                </div>             
                <div class="login_signup">
                  <img src="Login.png" alt="Login Icon" onclick="toggleLoginDropdown()">
                  <ul class="logindropdown hidden" id="loginDropdown">
                    <li><a href="login.php">Log in</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                  </ul>
                </div>  
                <button id="modeToggle" onclick="toggleMode()" class="btn btn-outline-primary" style="margin-left:10px;">🌙</button>            </div>           
        </div>
        <!-- navber section End -->

        <!-- marquee section starts -->
        <div class="marquee">
            <marquee behavior="" direction="">Sale Sale Sale 50% Santipur Saree</marquee>
        </div>
        <!-- marquee section Ens-->

        <!-- Landing page or Home page starts -->
        <div class="landing_page" id="landingpage">
            <div class="welcome">
                <h1>Welcome to our website</h1>
            </div>
            <div class="WhyChooseus">
                <div class="whybox">
                    <h3>Abhijit's Saree Center</h3>
                    <h4>Our Website Benifits</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, alias.</p>
                    <a href="https://abhiduttaa.github.io/portfoliowebsiteusinghtml/">Read more...</a>
                </div>
            </div>
            <!-- <div class="video">
                <iframe src="Firstvideo.mp4" frameborder="0">Video</iframe>
            </div> -->
            <center>
            <h2>Our Saree Fashion Show!</h2>
            </center>
            <section id="video" style="padding: 50px 20px; text-align: center;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mlIUKyZIUUU?si=wACgGwcNzbalU-Ky" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </section>

            <div class="Rating">
                <h3>Our Rating</h3>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, alias.</p>
                <a href="https://abhiduttaa.github.io/portfoliowebsiteusinghtml/">Read more...</a>
            </div>
        </div>
        <!-- Landing page or Home page End. -->


        <!-- Product section Starts. -->       
  
        <div class="container mt-5" id="Product">
            <h2 class="text-center mb-4">Our Products</h2>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  <!-- Slide 1 -->
                   <div class="carousel-item active"> 
                      <div class="row">
                          <div class="col-md-3">
                          <div class="product-card">
                            <a href="cart.html">
                              <img src="saree1.webp" alt="Saree 2">
                              <div class="product-name">Santipur Saree 2</div>
                            </a>
                          </div>
                          </div>
                          <div class="col-md-3">
                            <div class="product-card">
                                <a href="cart.html">
                                  <img src="saree1.webp" alt="Saree 2">
                                  <div class="product-name">Santipur Saree 2</div>
                                </a>
               
                            </div>
                          </div>
                          <div class="col-md-3">
                              <div class="product-card">
                                  <a href="cart.html">
                                      <img src="saree1.webp" alt="Saree 3">
                                    <div class="product-name">Santipur Saree 3</div>
                                  </a>
                                </div>
                          </div>
                          <div class="col-md-3">
                            <div class="product-card">
                                <a href="cart.html">
                                    <img src="saree1.webp" alt="Saree 4">
                                    <div class="product-name">Santipur Saree 4</div>
                                </a>
                            </div>
                          </div>
                      </div>
                  </div> 

                  <!-- Slide 2 -->
                   <div class="carousel-item"> 
          <div class="row">
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html">
                    <img src="saree1.webp" alt="Saree 5">
                    <div class="product-name">Santipur Saree 5</div>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html">
                    <img src="saree1.webp" alt="Saree 6">
                    <div class="product-name">Santipur Saree 6</div>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html" >
                    <img src="saree1.webp" alt="Saree 7">
                    <div class="product-name">Santipur Saree 7</div>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html" >
                    <img src="saree1.webp" alt="Saree 8">
                    <div class="product-name">Santipur Saree 8</div>
                </a>
              </div>
            </div>
          </div>
                  </div> 

                  <!-- Slide 3 -->
                   <div class="carousel-item">
          <div class="row">
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html">
                <img src="saree1.webp" alt="Saree 9">
                <div class="product-name">Santipur Saree 9</div>
            </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html">
                <img src="saree1.webp" alt="Saree 10">
                <div class="product-name">Santipur Saree 10</div>
            
            </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html">
                <img src="saree1.webp" alt="Saree 11">
                <div class="product-name">Santipur Saree 11</div>
            </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="product-card">
                <a href="cart.html">
                <img src="saree1.webp" alt="Saree 12">
                <div class="product-name">Santipur Saree 12</div>
            </a>
              </div>
            </div>
          </div>
        </div> 
    </div>

      <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev"> -->
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div> 

  <!-- Product section Ens. -->
        <!-- contactus. -->
        <center>
          <div class="contact-container" id="contactus">
            <h2>Contact Us</h2>
            <form action="contact.php" method="post">
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="email" name="email" placeholder="Your Email" required>
              <textarea name="message" placeholder="Your Message" required></textarea>
              <input type="submit" value="Send Message">
            </form>
          </div>
        </center>
        <!-- contactus. -->
    </div>
    <div class="footer">
        <footer>
            <p>&copy; 2025 Abhijit's Saree Center , All Rights Reserved.</p>
        </footer>
    </div>

    <!-- <script src="script.js"> -->

<script>
const menuToggle = document.querySelector('.menu-toggle');
const navber = document.querySelector('.navber');
menuToggle.addEventListener('click', () => {
  navber.classList.toggle('active');
});

const loginIcon = document.getElementById('loginIcon');
const dropdownMenu = document.getElementById('dropdownMenu');

loginIcon.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});

  // Optional: hide the dropdown if clicked outside
document.addEventListener('click', function(e) {
  if (!loginIcon.contains(e.target) && !dropdownMenu.contains(e.target)) {
    dropdownMenu.classList.add('hidden');
  }
});

function toggleLoginDropdown() {
  const dropdown = document.getElementById("loginDropdown");
  dropdown.classList.toggle("hidden");
}

// loght dark mode.
function toggleMode() {
  const body = document.body;
  const modeButton = document.getElementById('modeToggle');
  
  body.classList.toggle('dark-mode');
  
  if (body.classList.contains('dark-mode')) {
      modeButton.innerHTML = "☀️"; // Light Mode icon
  } else {
      modeButton.innerHTML = "🌙"; // Dark Mode icon
  }
}


    </script>
</body>
</html>