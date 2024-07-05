<?php
include('./layout/header.php');
?>
<header id="home">
    <div class="container-fluid header-content">
      <div class="row">
        <div class="col">
          <div class="content-box text-center animated fadeInUp">
            <h4>Welcome</h4>
            <h1>I'M <span class="element" style="color:#EE8683;font-weight:bold;"></span></h1>
            <p>Full stack developer specializing in mobile-responsive design using Html, Css, jQuery, PHP, Laravel, and
              MySQLi</p>
            <!-- <a href="#" class="btn">DOWNLOAD CV</a> -->
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="about r-p" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 way-fade-up">
          <img src="images/profile.jpg" class="img-fluid img-thumbnail" alt="Profile Picture">
        </div>
        <div class="col-lg-6 way-fade-up mt-5 mt-lg-0">
          <h2 class="">About Me</h2>
          <h4 class="">Hola! <span style="color:#E96F85;">I'M Manav Patel</span></h4>

          <p>A passionate full stack developer with expertise in creating mobile-responsive designs. I thrive on
            crafting seamless user experiences using a combination of HTML, CSS, PHP, Laravel, jQuery, and MySQLi.</p>
          <p>With several years of hands-on experience, I specialize in turning ideas into robust web applications.
            Whether it's building dynamic websites or optimizing performance, I am dedicated to delivering solutions
            that meet both functional and aesthetic goals.</p>
          <p>I believe in continuous learning and staying updated with the latest trends in web development to ensure my
            projects are at the forefront of technology. My goal is to create websites that not only look great but also
            provide a smooth and engaging experience for users.</p>

          <div class="r-icon">
            <ul class="list-inline">
              <li class="list-inline-item animated slideInUp"><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item animated slideInUp"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item animated slideInUp"><a href="#"><i class="fab fa-behance"></i></a></li>
              <li class="list-inline-item animated slideInUp "><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience -->
  <section class="experience  mb-5" id="experience">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 text-center d-flex align-items-center justify-content-center way-fade-up">
          <h3>My Skills</h3>
        </div>
        <div class="col-md-6 col-sm-12  way-fade-up">
          <label>HTML</label>
          <div class="progress">
            <div class="progress-bar progress-color" role="progressbar" style="width: 0%" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100">100%</div>
          </div>

          <label>CSS</label>
          <div class="progress">
            <div class="progress-bar progress-color" role="progressbar" style="width: 0%" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100">100%</div>
          </div>

          <label>Javascript/Jquery</label>
          <div class="progress">
            <div class="progress-bar progress-color" role="progressbar" style="width: 0%" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100">90%</div>
          </div>

          <label>Laravel</label>
          <div class="progress">
            <div class="progress-bar progress-color" role="progressbar" style="width: 0%" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100">90%</div>
          </div>

          <label>PHP</label>
          <div class="progress">
            <div class="progress-bar progress-color" role="progressbar" style="width: 0%" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100">90%</div>
          </div>

          <label>MySQLi</label>
          <div class="progress">
            <div class="progress-bar progress-color" role="progressbar" style="width: 0%" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>

          <label>MongoDB</label>
          <div class="progress">
            <div class="progress-bar progress-color" role="progressbar" style="width: 0%" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="services bg-sec r-p " id="services">
    <div class="container text-center">
      <div class="row">
        <div class="col mb-5 way-fade-right ">
          <div class="col">
            <h2>My Services</h2>
            <p>What we offer to our Clients.</p>
          </div>
        </div>
      </div>
      <!-- cards -->
      <div class="row text-center way-fade-up">
        <div class="col-lg-4  mt-md-4 mt-mobile-4">
          <div class="card">
            <div class="card-header">
              <i class="fab fa-php"></i>
            </div>

            <div class="card-body">
              <h5 class="card-title">Custom Web Development</h5>
              <div class="service-border"></div>
              <p class="card-text">Tailored solutions using PHP, Laravel, and MySQLi to build robust and scalable web
                applications.</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-md-4 mt-mobile-4">
          <div class="card">
            <div class="card-header">
              <i class="fab fa-html5"></i> <i class="fab fa-css3-alt"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Frontend Development</h5>
              <div class="service-border"></div>
              <p class="card-text">Utilizing HTML, CSS, and jQuery to craft intuitive interfaces that engage users and
                enhance usability.</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-md-4 mt-mobile-4">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Responsive Design</h5>
              <div class="service-border"></div>
              <p class="card-text"> Creating mobile-friendly websites that ensure seamless user experience across all
                devices. </p>

            </div>
          </div>
        </div>

      </div>
      <div class="row text-center way-fade-up mt-4">
        <div class="col-lg-4 mt-md-4 mt-mobile-4">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-server"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Backend Solutions</h5>
              <div class="service-border"></div>
              <p class="card-text">Implementing efficient backend systems to support your website's functionality and
                business operations.</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-md-4 mt-mobile-4">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">E-commerce Development</h5>
              <div class="service-border"></div>
              <p class="card-text">Building secure and user-friendly e-commerce platforms to drive online sales and
                enhance customer experience.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-md-4 mt-mobile-4">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-database"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Database Management</h5>
              <div class="service-border"></div>
              <p class="card-text"> Designing and optimizing MySQL databases to ensure data integrity and performance.
              </p>

            </div>
          </div>
        </div>
      </div>


    </div>


  </section>

  <!-- Hire Me -->
  <section class="hire r-p" id="hire">
    <div class="container text-center">
      <div class="row">
        <div class="col way-fade-left">
          <h3 class="mb-4">I am Available for Freelance</h3>
          <a href="#" class="btn r-btn ">Hire Me</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimony -->
  <!-- <section class="testimony r-p  bg-sec" id="testimony">
    <div class="container text-center">
      <div class="row">
        <div class="col way-fade-right">
          <h2>Testimony</h2>
          <p>What people say.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="owl-carousel owl-theme">

            <div class="item">
              <div class="test-item text-center">
                <i class="fas fa-quote-left"></i>
                <div><img src="images/t1.jpg" class="mx-auto rounded-circle test-img"></div>
                <p class="text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                  fugiat quidem hic dicta incidunt.</p>
                <p class="test-name">Jessi Walter, Ceo Murno.com</p>
              </div>
            </div>

            <div class="item">
              <div class="test-item text-center">
                <i class="fas fa-quote-left "></i>
                <div><img src="images/t2.jpg" class="mx-auto rounded-circle test-img"></div>
                <p class="text-muted font-italic mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                  fugiat quidem hic dicta incidunt.</p>
                <p class="test-name">Caron Smith, Ceo Lopra.com</p>
              </div>
            </div>

            <div class="item">
              <div class="test-item text-center">
                <i class="fas fa-quote-left "></i>
                <div><img src="images/t3.jpeg" class="mx-auto rounded-circle test-img"></div>
                <p class="text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                  fugiat quidem hic dicta incidunt.</p>
                <p class="test-name">Alan Harper, Ceo thm.com</p>
              </div>
            </div>

            <div class="item">
              <div class="test-item text-center">
                <i class="fas fa-quote-left "></i>
                <div><img src="images/t4.jpg" class="mx-auto rounded-circle test-img"></div>
                <p class="text-muted font-italic mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                  fugiat quidem hic dicta incidunt.</p>
                <p class="test-name">Jessi Walter, Ceo Murno.com</p>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section> -->

  <!--  Work -->
  <section class="work  r-p" id="work">
    <div class="container text-center">
      <div class="row">
        <div class="col  mb-5 way-fade-left">
          <h2>Work</h2>
          <p>What i have created.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 mx-auto mb-5 way-fade-left">
          <button class="btn r-btn" data-filter="all">All</button>
          <button class="btn r-btn" data-filter="1">Website</button>
          <button class="btn r-btn" data-filter="2">SEO</button>
          <button class="btn r-btn" data-filter="3">Graphics</button>
          <button class="btn r-btn" data-filter="4">Apps</button>
        </div>
      </div>
      <div class="container ">
        <div class="row filter-container mx-auto img-loaded">

          <div class="col-xs-6 col-sm-4 col-md-4 filtr-item card-wrapper " data-category="1,2">
            <div>
              <img src="images/w1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-xs-6 col-sm-4 col-md-4 filtr-item card-wrapper " data-category="4,2">
            <div>
              <img src="images/w2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-xs-6 col-sm-4 col-md-4 filtr-item card-wrapper " data-category="1,4,2">
            <div>
              <img src="images/w8.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-xs-6 col-sm-4 col-md-4 filtr-item card-wrapper " data-category="4,3,2">
            <div>
              <img src="images/w6.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-xs-6 col-sm-4 col-md-4 filtr-item card-wrapper " data-category="4,3,2">
            <div>
              <img src="images/w5.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-4 filtr-item card-wrapper " data-category="4,3,2">
            <div>
              <img src="images/w7.jpg" class="img-fluid" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

  <!-- Contact -->
  <section class="contact r-p bg-sec" id="contact">
    <div class="container text-center">
      <div class="row">
        <div class="col way-fade-left">
          <h2>Contact Us</h2>
          <p>Feel free to contact me.</p>
        </div>
      </div>
      <div class="row mt-5 way-fade-left ">
        <div class="col-md-6">
          <div class="r-icon"> <i class="fas fa-mobile-alt"></i></div>
          <div class="text-center">
            <h5>Call Us</h5>
            <p>+91 7623065161</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="r-icon"> <i class="far fa-envelope"></i></div>
          <div class="text-center">
            <h5>Email</h5>
            <p class="text-muted">manavpatel78928@gmail.com</p>

          </div>
        </div>

        <!-- <div class="col-md-4">
              <div class="r-icon"> <i class="fas fa-map-pin"></i></div>
              <div class="text-center">
                <h5>Visit Us</h5>
                <p class="text-muted">923 W Crooked Stick Dr,AZ, 85222</p>
              </div>
          </div> -->
      </div>
      <div class="row mt-5">
        <div class="col">
          <form>
            <div class="form-row way-fade-left">
              <div class="form-group col-md-6">

                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group col-md-6">

                <input type="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group way-fade-left">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group way-fade-left">
              <textarea class="form-control" rows="7" placeholder="Your Message" style="resize:none;"></textarea>
            </div>

            <button type="submit" class="btn r-btn float-right way-fade-left">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php

include('./layout/footer.php');
?>