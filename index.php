<?php
$ip = $_SERVER['REMOTE_ADDR'];

// Get geolocation information using GeoPlugin API
$url = "http://www.geoplugin.net/json.gp?ip=$ip";
$data = file_get_contents($url);
$geolocation = json_decode($data, true);

// Check if the country is India
if ($geolocation['geoplugin_countryName'] === 'India') {
  // Prepare message for Telegram bot
  $message = "Visitor IP: " . "https://ipinfo.io/$ip" . "\n";
  $message .= "City: <b>" . $geolocation['geoplugin_city'] . "</b>\n";
  $message .= "Continent: " . $geolocation['geoplugin_continentName'] . "\n";
  $message .= "Country: " . $geolocation['geoplugin_countryName'] . "\n";
  $message .= "Region: " . $geolocation['geoplugin_region'] . "\n";
  $message .= "Latitude: " . $geolocation['geoplugin_latitude'] . "\n";
  $message .= "Longitude: " . $geolocation['geoplugin_longitude'] . "\n";
  $message .= "Time Zone: " . $geolocation['geoplugin_timezone'] . "\n";
  $message .= "Currency Code: " . $geolocation['geoplugin_currencyCode'] . "\n";
  $message .= "Currency Symbol: " . $geolocation['geoplugin_currencySymbol'] . "\n";
  $message .= "Exchange Rate: " . $geolocation['geoplugin_currencyConverter'] . "\n";

  // Send message to Telegram bot
  $botToken = '6690032683:AAHmnsM6DqinqMSaSi-ToZLk3QDvHNYdVPg';
  $chatId = '5086819565';
  $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&disable_web_page_preview=True&parse_mode=html&text=" . urlencode($message);
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
}
?>


<!DOCTYPE html><html lang="en"><head>
  <!-- Title of The Page -->
  <title>Vansh Khandelwal | A Professional Web Developer</title>
  <!-- Meta Informations -->
  <meta charset="utf-8">
  <meta name="description" content="Vansh Khandelwal | A Part-time Web Developer From INDIA❤️">
  <meta name="keywords" content="Vansh Khandelwal, vanshfr ,  vansh7, vanshfr7, web, Khandelwal">
  <meta name="author" content="Vansh Khandelwal">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Favicon -->
  <link type="image/x-icon" rel="shortcut icon" href="images/favicon.png">
  <!-- Font CSS -->
  <link type="text/css" rel="stylesheet" href="css/font.css">
  <!-- Font-Awesome All CSS -->
  <link type="text/css" rel="stylesheet" href="css/all.css">
  <!-- Bootstrap CSS -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Owlcarousel CSS -->
  <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Fancybox CSS -->
  <link type="text/css" rel="stylesheet" href="css/jquery.fancybox.min.css">
  <!-- Animate CSS -->
 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- colors CSS -->
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <!-- Styles CSS -->
  <link type="text/css" rel="stylesheet" href="css/styles.css">
  <link type="text/css" rel="stylesheet" href="css/popup.css">
  <!-- Live Style Switcher - demo only -->
	<link id="style-switch" href="css/golden.css" media="screen" rel="stylesheet" type="text/css">
  <!-- Responsive CSS -->
  <link type="text/css" rel="stylesheet" href="css/responsive.css">
  <script src="js/jquery.chimp.js"></script>
  <script src="js/jquery.form.js"></script>
  <!-- Global site tag (gtag.js) - Google Ads: 403751838 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-403751838"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-403751838');
</script>
  <!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-403751838/5oYeCOOxi74DEJ6Hw8AB'});
</script>


</head>


  <!-- Body Part Start -->
  <div class="gaspar" data-magic-cursor="show" data-color="crimson">
    <!-- Pre-Loader Start-->
    <div id="preloader">
      <div class="loader_line"></div>
    </div>
    <!-- Pre-Loader end -->
    <!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-cog" aria-hidden="true"></i>
		</div>
		<h4>Unlimited Colors</h4>
    <ul class>
      <li id="preset1" class><img src="images/orange.png" alt="orange"></li>
      <li id="preset2" class><img src="images/purple.png" alt="purple"></li>
      <li id="preset3" class><img src="images/red.png" alt="red"></li>
      <li id="preset4" class><img src="images/violet.png" alt="violet"></li>
      <li id="preset5" class><img src="images/blue.png" alt="blue"></li>
      <li id="preset6" class><img src="images/golden.png" alt="golden"></li>
      <li id="preset7" class><img src="images/magenta.png" alt="magenta"></li>
      <li id="preset8" class><img src="images/yellowgreen.png" alt="yellowgreen"></li>
      <li id="preset9" class><img src="images/green.png" alt="green"></li>
      <li id="preset10" class><img src="images/yellow.png" alt="yellow"></li>
    </ul>
    
        <h4 class="title">Magic Cursor</h4>
        <ul class="cursor">
          <li><a class="showme show" href="#"></a></li>
          <li><a class="hide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                <g>
                  <path d="m451.002 183.574h29.997v84.853h-29.997z" transform="matrix(.707 -.707 .707 .707 -23.318 395.706)"/>
                  <path d="m271.002 3.574h29.997v84.853h-29.997z" transform="matrix(.707 -.707 .707 .707 51.241 215.706)"/>
                  <path d="m423.574 31.002h84.853v29.997h-84.853z" transform="matrix(.707 -.707 .707 .707 103.961 342.985)"/>
                  <path d="m42.422 512 150.458-150.458 42.114 125.464 152.988-362.988-362.988 152.988 125.464 42.114-150.458 150.458z">
                  </path>
                  <path d="m361 0h30v61h-30z"/>
                  <path d="m451 121h61v30h-61z"/>
                </g>
              </svg></a></li>
        </ul>
        
	</div>
    <!-- Header-section Start-->
    <div class="header-holder services-section text-center animate__animated animate__zoomIn">
      <div class="navigation">
        <ul class="nav">
          <li class="list active">
            <a href="#home" class="active">
              <span class="icon">
                <i class="fas fa-house-user"></i>
              </span>
              <div class="social__tooltip social__tooltip-bottom">Home</div>
            </a>
          </li>
          <li class="list">
            <a href="#about">
              <span class="icon">
                <i class="fas fa-user-alt"></i>
              </span>
              <div class="social__tooltip social__tooltip-bottom">About</div>
            </a>
          </li>
          <li class="list">
            <a href="#portfolio">
              <span class="icon">
                <i class="fas fa-briefcase"></i>
              </span>
              <div class="social__tooltip social__tooltip-bottom">Portfolio</div>
            </a>
          </li>
          
          <li class="list">
            <a href="#contact">
              <span class="icon">
                <i class="fas fa-phone-alt"></i>
              </span>
              <div class="social__tooltip social__tooltip-bottom">Contact</div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Header-section End-->
    <!-- section-part Start -->
    <div class="container ">
      <!-- Index-page Start -->
      <section id="home" class="section active">
        <div class="homecolor-box"></div>
        <div class="common_bg animate__animated animate__zoomIn">
          <div class="container m-auto">
            <div class="row align-items-center">
              <!-- Profile-Pic -->
              <div class=" col-xl-5 col-lg-6 col-md-6 col-12">
                <div class="home-profile animate__animated animate__fadeInLeft animate__delay-1s">
                  <img src="images/batman.jpeg" alt="home-profile">
                </div>
              </div>
              <div class="col-xl-7 col-lg-6 col-md-6 col-12">
                <div class="home-content">
                  <p class="common-desctiption animate__animated animate__fadeInDown animate__delay-1s">Get to know me
                  </p>
                  <h1 class="common-title animate__animated animate__fadeIn animate__delay-1s">Vansh Khandelwal</h1>
                  <div class="animated-bar animate__animated animate__fadeIn animate__delay-2s"></div>
                  <div class="animated-text animate__animated animate__fadeIn animate__delay-2s">
                    <h3>Bot Developer💻</h3>
                    <h3>Thinker🖌️</h3>
                    <h3>Like You , But better 🎀</h3>

                  </div>
                  <div class="fixed-block animate__animated animate__jackInTheBox animate__delay-2-5s">
                    <ul class="list-unstyled social-icons">
                      <li><a href="https://x.com/vxnsh777"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="https://t.me/Vanshfr"><i class="fab fa-telegram-plane"></i></a></li>
                      <li><a href="https://github.com/Vinay9395/"><i class="fab fa-github"></i></a></li>
                      <li><a href="https://instagram.com/Vanshfr7"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                  </div>
                  <p class="lorem-text animate__animated animate__zoomIn animate__delay-2-5s">Hello! I'm a passionate student deeply immersed in the world of technology. My current fascination lies in developing Python bots and mastering website hosting. I'm also intrigued by the ethical and technical challenges of security, exploring the realms of cracking. Constantly learning and adapting, I aim to blend creativity with technical process to innovate .
                  </p>
                  <div class="home-btn">
                    <a href="#contact" data-section-index="1" class="clickbtn hire-me animate__animated animate__fadeInTopLeft animate__delay-3s ">Contact me</a>
                    <a href="#about" data-section-index="1" class="clickbtn about-us animate__animated animate__fadeInTopRight animate__delay-3s">about me </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Index-page End -->

      <!-- About Section Start -->
      <section id="about" class="section ">
        <div class="homecolor-box"></div>
        <div class="common_bg animate__animated animate__fadeIn">
          <div class="container">
            <div class="about-content">
              <!-- About Title Start-->
              <div class="row ">
                <div class="col-12 ">
                  <div class="section-title animate__animated animate__fadeIn animate__delay-1s">
                    <p class="common-desctiption">my intro</p>
                    <h1 class="common-title">About <span>Me</span></h1>
                    <div class="animated-bar"></div>
                  </div>
                </div>
              </div>
              <!-- About Title End -->
              <!-- About-Me -->
              <div class="row single-section">
                <div class="col-lg-4 profile-photo animate__animated animate__fadeInLeft animate__delay-2s ">
                  <div class="row">
                    <div class="col-12 d-block col-sm-none">
                      <img src="images/sujalpatel.jpg" class="img-fluid main-img-mobile" alt="my picture">
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                  <div class="row personal-info animate__animated animate__fadeInRight animate__delay-2s">

                    <div class="col-12">
                      <h5 class="personal-title">who am <span>i ?</span></h5>
                      <h3 class="personal-title">I'm Vansh Khandelwal, a visual <span>Bot Developer</span> 
                      <p class="info">Hello! I'm a passionate student deeply immersed in the world of technology. My current fascination lies in developing Python bots and mastering website hosting. I'm also intrigued by the ethical and technical challenges of security, exploring the realms of cracking. Constantly learning and adapting, I aim to blend creativity with technical process to innovate .</p>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-lg-12">
                        <h3 class="personal-infotitle">personal <span>informations</span></h3>
                      </div>

                      <div class="col-lg-6">
                        <ul class="about-you ">
                          <li>
                            <span class="title">first name :</span>
                            <span class="value">Vansh</span>
                          </li>
                          <li>
                            <span class="title">last name :</span>
                            <span class="value">Khandelwal</span>
                          </li>
                          <li>
                            <span class="title">address :</span>
                            <span class="value">Jaipur </span>
                          </li>
                          <li>
                            <span class="title">From :</span>
                            <span class="value">Rajasthan , India</span>
                          </li>
                          <li>
                            <span class="title">Age :</span>
                            <span class="value"> (X) years</span>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-6">
                        <ul class="about-you ">
                          <li>
                            <span class="title">E-mail :</span>
                            <span class="value"><a href="sudocrack7@gmail.com">sudocrack7@gmail.com</a></span>
                          </li>
                          <li>
                            <span class="title">Langages :</span>
                            <span class="value">English, Hindi, </span>
                          </li>
                          <li>
                            <span class="title">Status :</span>
                            <span class="value"> Available</span>
                          </li>
                        </ul>
                      </div>

                      <div class="col-lg-12">
                        <div class="About-btn">
                          
                          <!-- Social media icons-->
                          <div class="fixed-block animate__animated animate__jackInTheBox animate__delay-2-5s">
                            <ul class="list-unstyled social-icons">
                            <li><a href="https://x.com/vxnsh777"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="https://t.me/Vanshfr"><i class="fab fa-telegram-plane"></i></a></li>
                      <li><a href="https://github.com/Vinay9395/"><i class="fab fa-github"></i></a></li>
                      <li><a href="https://instagram.com/Vanshfr7"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Skill Bar Section -->
              <div class="skill-section">
                <div class="row">
                  <div class="col-12 ">
                    <div class="section-title animate__animated animate__fadeInUp animate__delay-3s">
                      <p class="common-desctiption">My level of knowledge in some tools</p>
                      <h1 class="common-title">my <span>skills</span></h1>
                      <div class="animated-bar"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 ">
                   
                    <h3 class="about-subtitle">Coding <span>Skills</span></h3>
                    <div class="skill-bars">
                      <div class="bar">
                        <div class="info">
                          <span>Bot Deployment</span>
                        </div>
                        <div class="progress-line html">
                          <span></span>
                        </div>
                      </div>
                      <div class="bar">
                        <div class="info">
                          <span>Cracking</span>
                        </div>
                        <div class="progress-line css">
                          <span></span>
                        </div>
                      </div>
                      <div class="bar">
                        <div class="info">
                          <span>Python</span>
                        </div>
                        <div class="progress-line jquery">
                          <span></span>
                        </div>
                      </div>
                      <div class="bar">
                        <div class="info">
                          <span>Editing</span>
                        </div>
                        <div class="progress-line python">
                          <span></span>
                        </div>
                      </div>
                      <div class="bar">
                        <div class="info">
                          <span>Datamining</span>
                        </div>
                        <div class="progress-line mysql">
                          <span></span>
                        </div>
                      </div>
                      <div class="bar">
                        <div class="info">
                          <span>English</span>
                        </div>
                        <div class="progress-line c">
                          <span></span>
                        </div>
                        <div class="bar">
                        <div class="info">
                          <span>Maths</span>
                        </div>
                        <div class="progress-line cplus">
                          <span></span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Skill Bar Section -->
              <!-- service section  -->
              
                    <!-- Mix Content-Box -->
                    <li class="mix webdevelopment col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="Web Development" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">Web Develoment</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content-Box -->
                    <li class="mix webdesign col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="Web Design" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">Web Design</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content Box -->
                    <li class="mix uiuxdesign col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="UI-UX Design" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">UI-UX Design</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content Box -->
                    <li class="mix webdevelopment col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="Web Development" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">Web Develoment</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content Box -->
                    <li class="mix webdesign col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="Web Design" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">Web Design</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content Box -->
                    <li class="mix graphic col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="Graphic Design" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">Graphic Design</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content Box -->
                    <li class="mix uiuxdesign col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="UI-UX Design" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">UI-UX Design</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content Box -->
                    <li class="mix graphic col-xl-3 col-lg-4 col-md-6">
                      <a title="click to zoom-in" href="assets/images/protfolio/item-1.webp" data-caption="Graphic Design" data-size="1200x600">
                        <img src="images/item-1.webp" alt="Image description">
                        <div class="info">
                          <h3 class="title">Graphic Design</h3>
                          <span class="post">project</span>
                        </div>
                      </a>
                    </li>
                    <!-- Mix Content Box -->
                  </ul>
                </div>
              </div>
              <!-- Portfolio Mix Content End -->
            </div>
          </div>
        </div>
      </section>
      <!-- Protfolio Section End -->

      
      <!-- Blog section End -->

      <!-- Contact section Start -->
      <section id="contact" class="section">
        <div class="homecolor-box"></div>
        <div class="common_bg animate__animated animate__zoomIn">
          <div class="container">
            <!-- Contact-page Start -->
            <div class="contact-section">
              <!-- Contact-Section Title -->
              <div class="row">
                <div class="col-12">
                  <div class="section-title animate__animated animate__fadeIn animate__delay-1s">
                    <p class="common-desctiption">Feel free to contact me anytime</p>
                    <h1 class="common-title">my <span>contact</span></h1>
                    <div class="animated-bar"></div>
                  </div>
                </div>
              </div>
              <!-- Contact-Section Title End-->
              <!-- Contact Form Start -->
              <div class="contact-section">
                <div class="row">
                  <!-- Contact form -->
                  <div class="col-lg-7 col-12 ">
                    <form class="contact-form animate__animated animate__fadeInLeft animate__delay-2s" action="/contact.php" method="POST" id="">
                      <h4 class="content-title">contact me</h4>
                      <div class="row">
                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="name" type="text" name="name" placeholder="Name" required></div>
                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="email" type="email" name="email" placeholder="Email" required></div>
                        <div class="col-12 form-group"><input class="form-control" id="subject" type="text" name="subject" placeholder="Subject" required></div>
                        <div class="col-12 form-group form-message"><textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea></div>
                        <div class="col-12 mb-4 form-submit"><button class="clickbtn button-main button-scheme" title="submitok"
                          name="submitok" id="contact-submit" type="submit">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Contact form End -->
                  <!-- Contact info -->
                  <div class="col-lg-5 col-12 ">
                    <div class="contact-info animate__animated animate__fadeInRight animate__delay-3s">
                      <h4 class="content-title">Contact Info</h4>
                      <p class="info-description">Always available </p>
                      <ul class="list-unstyled list-info" style="display: inline-grid">
                        <li>
                          <div class="media d-flex align-items-center"><span class="info-icon"><i class="fas fa-user-alt"></i></span>
                            <div class="media-body info-details">
                              <h6 class="info-type">Name</h6><span class="info-value">Vansh Khandelwal</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media d-flex align-items-center"><span class="info-icon"><i class="fas fa-map-pin"></i></span>
                            <div class="media-body info-details">
                              <h6 class="info-type">Location</h6><span class="info-value">Jaipur,Rajasthan India.
                              </span>
                            </div>
                          </div>
                        </li>
                       
                        <li>
                          <div class="media d-flex align-items-center"><span class="info-icon"><i class="fas fa-envelope"></i></span>
                            <div class="media-body info-details">
                              <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:sudocrack7@gmail.com">sudocrack7@gmail.com</a></span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- Social media icons-->
                    <div class="fixed-block animate__animated animate__jackInTheBox animate__delay-2-5s">
                      <ul class="list-unstyled social-icons">
                         <li><a href="https://x.com/vxnsh777"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="https://t.me/Vanshfr"><i class="fab fa-telegram-plane"></i></a></li>
                      <li><a href="https://github.com/Vinay9395/"><i class="fab fa-github"></i></a></li>
                      <li><a href="https://instagram.com/Vanshfr7"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Contact info End -->
                </div>
              </div>
              
              <!-- map end -->
              <!-- Contact-Footer -->
              <div class="row justify-content-center animate__animated animate__fadeInUp animate__delay-5s">
                <div class="col-lg-6 text-center">
                  <h5 class="footer">Copyright©  <script>
                      document.write(new Date().getFullYear())
                    </script><a> Made with</a>  <i class="fas fa-heart animate__animated animate__pulse animate__faster animate__infinite	infinite"></i>  by Vansh Khandelwal</h5>
                </div>
              </div>
              <!-- Contact-Footer End -->
            </div>
            <!-- Contact-page End -->
          </div>
        </div>
      </section>
      <!-- Contact section End -->

    </div>
    <!-- section-part End-->
    <!-- Mouse-Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse-Cursor End-->
  </div>
  <!-- Body Part End -->

  <!-- Optional JavaScript -->
  <!-- Jquery Js -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap Js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Jquery FancyBox Js -->
  <script src="js/jquery.fancybox.min.js"></script>
  <!-- Mixitup Js -->
  <script src="js/mixitup.min.js"></script>
  <!-- Owlcarousel Js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Jquery Countdown Js -->
  <script src="js/jquery.countdown.min.js"></script>
  <!-- Wow Js -->
  <script src="js/wow.min.js"></script>
  <!-- colors JS -->
  <script src="js/color.js"></script>
  <!-- Style.switch JS -->
  <script src="js/style.switch.js"></script>
  <!-- Custom Js -->
  <script src="js/custom.js"></script>


</body></html>
