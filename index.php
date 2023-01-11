<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Character-set Metadata -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Viewport Metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Description Metadata-->
    <meta name="description" content="Portfolio Website" />
    <!-- Author Metadata -->
    <meta name="author" content="Uros Kovcic" />
    <!-- Keyword Metadata -->
    <meta name="keywords" content="Uros Kovcic, Uros Kovcic, Uros Kovcic" />
    <!-- Webpage Logo -->
    <link rel="shortcut icon" href="assets/img/logo.png" />
    <!-- Webpage Title -->
    <title>Uros Kovcic</title>

    <!-- Bootstrap5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Import CSS: Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css" />

    <style rel="stylesheet">
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 5px;
        z-index: 99;
        border: 1px solid #07324b;
        border-radius: 15px;
        outline: 0;
        color: #fff;
        background-color: #0d2635;
        font-size: 25px;
        cursor: pointer;
        padding: 15px;
      }
    </style>
  </head>

  <body>
    <button onclick="topFunction()" id="myBtn" title="TOP"><i class="bi bi-arrow-up-circle"></i></button>

    <div id="particles-js">
      <div class="header">
        <h1>
          <span class="site-title">Uros Kovcic</span>
          <span class="site-description">• PHP Programmer • WordPress Developer</span>
        </h1>
        <div class="header-icons">
          <a aria-label="My LinkedIn Profile" target="_blank" href="https://rs.linkedin.com/in/uros-kovcic-10286417b"><i class="icon fa fa-linkedin" aria-hidden="true"></i></a>
          <a aria-label="My Github Profile" target="_blank" href="https://github.com/Uros12345678"><i class="icon fa fa-github-alt" aria-hidden="true"></i></a>
          <a aria-label="My Résumé" target="_blank" href="http://localhost/Uros3-portfolio-last/Uros_Kovcic_CV_document.pdf"><i class="icon fa fa fa-file-pdf-o" aria-hidden="true"></i></a>
          <a aria-label="Send Email" href="mailto:kowcicuros70@gmail.com" target="_blank"><i class="icon fa fa-envelope"></i></a>
        </div>
        <div class="header-links">
          <a class="link" href="#about" data-scroll>About Me</a>
          <a class="link" href="#projects" data-scroll>Projects</a>
          <a class="link" href="#contact" data-scroll>Contact</a>
        </div>
      </div>
      <a class="down" href="#about" data-scroll><i class="icon fa fa-chevron-down" aria-hidden="true"></i></a>
    </div>


    <!-- About Section -->
    <section id="about">
      <!-- User Introduction-->
      <div class="user-details">
        <h1>About me</h1>
        <picture>
          <source
            type="image/webp"
            srcset="assets/img/webp/uros.jpg"
            alt="Professional Me"
            width="20%"
            style="border-radius: 50%"
          />
          <img
            src="assets/img/jpg/uros.jpg"
            alt="Professional Me"
            width="20%"
            style="border-radius: 50%"
          />
        </picture>
        <p>
          I am a Junior Web Developer. I am currently doing Front-end and Back-end programming. 1-year theoretical learning of PHP programming language at ITAcademy. After I finished the PHP course at ITAcademy I learned and practiced: CSS, JavaScript, Jquery, Bootstrap as well as platforms like Joomla and WordPress. I successfully completed several professional internships in two companies where I further improved and learned some new techniques-tools such as Yii and CodeIgniter Framework and creating Themes and Plugins for WordPress. After 12 months of active work I became a Junior Web Developer. I am currently raising my level of knowledge as well as my programming experience itself.
        </p>
      </div>

      <!-- User Specifics -->
      <div class="user">
        <!-- Technology Stack #1: Languages -->
        <div class="tech">
          <h2>Languages</h2>
          <i class="fab fa-php"></i>
          <i class="devicon-html5-plain-wordmark colored"></i>
          <i class="devicon-css3-plain-wordmark colored"></i>
          <i class="devicon-javascript-plain colored"></i>
          <p>My main program language is PHP. </p>
        </div>

        <!-- Technology Stack #2: Front-End -->
        <div class="tech">
          <h2>Front-End</h2>
          <i class="devicon-react-original colored"></i>
          <i class="devicon-bootstrap-plain-wordmark colored"></i>
          <i class="fab fa-mdb"></i>
          <i class="fab fa-gulp"></i>
          <i class="fab fa-sass"></i>
          <p>My preferred technologies for front-end web development and component design.</p>
        </div>

        <!-- Technology Stack #3: Back-End -->
        <div class="tech">
          <h2>Back-End</h2>
          <span><img src="assets/img/codeigniter.png" alt="codeigniter"></span>
          <i class="fab fa-node"></i>
          <span><img src="assets/img/mysql.png" alt="mysql" height="70"></span>
          <span><img src="assets/img/laravel.png" alt="laravel" height="70"></span>
          <p>The main framework that I use is CodeIgniter, besides that I mostly use NodeJS but it all dependes on the situation.</p>
        </div>

        <!-- Technology Stack #4: Tools -->
        <div class="tech">
          <h2>Tools</h2>
          <i class="fab fa-wordpress"></i>
          <i class="fab fa-joomla"></i>
          <i class="devicon-git-plain-wordmark colored"></i>
          <i class="devicon-visualstudio-plain colored"></i>
          <i class="devicon-github-plain-wordmark colored"></i>
          <i class="devicon-docker-plain-wordmark colored"></i>
          <p>The platform that I use the most is WordPress because I am creating Themes and Plugins for further use.</p>
        </div>
      </div>
    </section>


    <!-- Projects Section -->
    <section id="projects">
      <hr>
      <div class="user-details">
        <h1>Featured Projects</h1>
      </div>

      <!-- User Project #1: Create Post -->
      <div class="user-projects">
        <div class="images-right">
          <picture>
            <source type="image" srcset="assets/img/img1.jpeg" alt="Add Post" />
            <img alt="Personal Website" src="assets/img/img1.jpeg" />
          </picture>
        </div>
        <div class="contents" style="text-align: center">
          <h3>Create and add posts</h3>
          <div>
            <img
              height="42"
              width="42"
              src="https://unpkg.com/simple-icons@3.4.0/icons/codeigniter.svg"
              style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
            />
            &nbsp;
            <img
              height="32"
              width="32"
              src="https://unpkg.com/simple-icons@3.4.0/icons/bootstrap.svg"
              style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
            />
            &nbsp;
            <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/css3.svg" style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)" />
          </div>
          <p style="text-align: justify">
          Using CodeIgniter3 I created a mini-application where you can create and read posts on the page. The logged-in administrator can edit and delete the desired post.
          </p>
          <a class="project-link" target="_blank" href="https://websiteeyes-2020.000webhostapp.com/">Check it out!</a>
        </div>
      </div>

      <!-- User Project #2: Website Restaurant -->
      <div class="user-projects">
        <div class="images-left">
          <picture>
            <source type="image" srcset="assets/img/restaurant.jpeg" alt="Restaurant" />
            <img alt="Restaurant" src="assets/img/restaurant.jpeg" />
          </picture>
        </div>
        <div class="contents-right" style="text-align: center;">
          <h3>Website Bistro Restaurant</h3>
          <img
            height="32"
            width="32"
            src="https://unpkg.com/simple-icons@3.4.0/icons/html5.svg"
            style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
          />
          &nbsp;
          <img
            height="32"
            width="32"
            src="https://unpkg.com/simple-icons@3.4.0/icons/css3.svg"
            style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
          />
          &nbsp;
          <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/javascript.svg" style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)" />
          <p style="text-align: justify">
            I created an Website for Restaurant using HTML5, CSS and JavaScript.
          </p>
          <a class="project-link" target="_blank" href="https://bistrorestaurant21.000webhostapp.com/"
            >Check it out!</a
          >
        </div>
      </div>

      <!-- User Project #3: Booking -->
      <div class="user-projects">
        <div class="images-right">
          <picture>
            <source type="image" srcset="assets/img/zlatibor.jpeg" alt="Booking Zlatibor" />
            <img alt="Booking Zlatibor" src="assets/img/zlatibor.jpeg" />
          </picture>
        </div>
        <div class="contents" style="text-align: center">
          <h3>Online Booking Website</h3>
          <div>
            <img
              height="52"
              width="52"
              src="https://unpkg.com/simple-icons@3.4.0/icons/php.svg"
              style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
            />
          </div>
          <p style="text-align: justify">
            I created an Online Booking Reservation system using technology PHP.
          </p>
          <a class="project-link" target="_blank" href="https://zlatibor-booking.com">
            Check it out!
          </a>
        </div>
      </div>

      <!-- Use Project #4: WP Them -->
      <div class="user-projects">
        <div class="images-left">
          <picture>
            <source
              type="image"
              srcset="assets/img/wp-them.jpeg"
              alt="WP Them"
            />
            <img alt="WP Them" src="assets/img/wp-them.jpeg" />
          </picture>
        </div>
        <div class="contents-right" style="text-align: center">
          <h3>WordPress Sports Them</h3>
          <div>
            <img
              height="32"
              width="32"
              src="https://unpkg.com/simple-icons@3.4.0/icons/wordpress.svg"
              style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
            />
          </div>
          <p style="text-align: justify">
            I created an WordPress Sports Them.
          </p>
          <a class="project-link" target="_blank" href="http://preview.themeforest.net/item/sport-wordpress-theme-for-football-hockey-basketball-club-sportak/full_screen_preview/13467671?_ga=2.85943641.1128056863.1631058529-327242479.1611183726">
            Check it out!
          </a>
        </div>
      </div>

      <!-- User Project #5: Online Shop -->
      <div class="user-projects">
        <div class="images-right">
          <picture>
            <source type="image" srcset="assets/img/shop.jpeg" alt="Online Shop" />
            <img alt="Online Shop" src="assets/img/shop.jpeg" />
          </picture>
        </div>
        <div class="contents" style="text-align: center">
          <h3>Online Web Shop</h3>
          <div>
            <img
              height="42"
              width="42"
              src="https://unpkg.com/simple-icons@3.4.0/icons/codeigniter.svg"
              style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
            />
            <img
              height="42"
              width="42"
              src="https://unpkg.com/simple-icons@3.4.0/icons/github.svg"
              style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(100%) contrast(36%)"
            />
          </div>
          <p style="text-align: justify">
            I created an Online Shop using CodeIgniter3.
          </p>
          <a class="project-link" target="_blank" href="https://github.com/Uros12345678/cdi3-online_shop">
            Check it out!
          </a>
        </div>
      </div>
    </section>


    <!-- Contact Section -->
    <section id="contact">
      <hr>
      <div class="user-details">
        <h1>Contact</h1>
      </div>

      <div class="row">
        <div class="col" id="col1"><div id="img"><img src="assets/img/coder.jpg" alt="UrosKovcic"></div></div>

        <div class="col">
          <div class="container">
            <div class="container text-center" style="margin-top:50px;font-weight:bold;font-size:18px;"><h4 class="sent-notification"></h4></div>



            <div id="form" class="container">

              <form id="myForm">

                <div class="row">
                  <div class="form-group">

                    <div class="row">
                      <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control text-center" name="name" id="name" required="">
                      </div>

                      <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control text-center" name="email" id="email" required="">
                      </div>
                    </div>

                  </div>

                </div>

                <div class="row">
                  <div class="form-group">

                    <div class="col-md-12">
                      <label>Subject</label>
                      <input type="text" class="form-control text-center" name="subject" id="subject" required="">
                    </div>

                  </div>

                </div>

                <div class="row"> 
                  <div class="form-group">

                    <div class="col-md-12">
                      <label>Message</label>
                      <textarea rows="6" class="form-control" name="body" id="body" required=""></textarea>
                    </div>
                    
                  </div>

                </div> <br>

                <div class="row">
                  <div class="col-md-12">
                    <button type="button" onclick="sendEmail()"  id="contactFormSubmit" class="btn" style="background: linear-gradient(to right, #090b25, #0c2b3d);; color:#fff;width: 180px;margin-left: 10x;">SEND</button>
                  </div>

                </div>

              </form>

            </div>



            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script type="text/javascript">

              function sendEmail() {

                var name = $("#name");

                var email = $("#email");

                var subject = $("#subject");

                var body = $("#body");



                if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){

                  $.ajax({

                    url: 'sendEmail.php',

                    method: 'POST',

                    datatType: 'json',

                    data: {

                      name: name.val(),

                      email: email.val(),

                      subject: subject.val(),

                      body: body.val()

                    }, success: function(response) {

                      $('#myForm')[0].reset();

                      $('.sent-notification').text("Message sent successfully. | Email je uspešno poslat.");

                    }

                  });

                }

              }

              function isNotEmpty(caller) {

                if(caller.val()=="") {

                  caller.css('border', '1px solid black');

                  return false;

                } else {

                  caller.css('border', '');

                  return true;

                }

              }

            </script>
          </div>
        </div>
      </div>

      
    </section>

    <footer class="footer">
      <p>&copy; PHP Web Programmer - Uros Kovcic</p>
    </footer>

    <!-- Top button -->

		<script type="text/javascript">
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};


      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>



    <!-- Bootstrap5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- Import JS: Particles Theme -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- Import JS: Sweet Scroll -->
    <script src="assets/js/sweet-scroll.min.js"></script>
    <!-- Import JS: Main Script -->
    <script src="assets/js/main.js"></script>
    <!--Awesome Icons -->
    <script src="https://kit.fontawesome.com/14b32db88f.js" crossorigin="anonymous"></script>
  </body>
</html>
