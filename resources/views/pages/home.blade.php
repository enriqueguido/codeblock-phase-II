<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.header')
</head>

<body class="index-page">
  <!-- ============== Navbar =============== -->
  @extends('inc.navbar')
  <!-- ============= End Navbar =============== -->

  <!-- ============= Background for Homepage ============= -->
  <div class="wrapper">
    <div class="page-header background-main" style="background-image:url('./img/background-sky.jpg')">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"><img class="square3-img" src="../img/pexels-maryia-plashchynskaya-3565894.jpg" alt=""></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="content-center brand">
          <div class="mouse-icon align-mouse"></div>
          <object type="image/svg+xml" data="../img/Group 28.svg" id="logo-name" alt="">
            <!-- Fall back img -->
            <img src="../img/Group 28.svg" alt="" id="logo-name">
          </object>
          <h1 class="text-white text-white-margin text-main">Designer | Developer</h1>
          <p class="text-white text-white-margin text-sub-heading sub-index">I design and code beautifully simple things, and I love what I do.</p>
        </div>
      </div>
      <div class="home-grid grid-index-animate"><img class="grid-index-animate" src="../img/grid.png" alt=""></div>
      <!-- <img src="../img/triunghiuri.png" class="shapes triangle"> -->
      <!-- <img src="../img/waves.png" class="shapes wave"> -->
      <!-- ==================== Social Media Section =================== -->
      <div class="social-media-index index-linkedin">
        <a id="linkedin" class="btn btn-icon btn-linkedin btn-round linkedin-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on LinkedIn!">
          <i class="fab fa-linkedin fa-linkedin-invert"></i>
        </a>
      </div>
      <div class="social-media-index index-github">
        <a id="github" class="btn btn-icon btn-github btn-round github-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Check out my projects on GitHub!">
          <i class="fab fa-github fa-github-invert "></i>
        </a>
      </div>
      <!-- <div class="social-media-index">
        <a id="twitter" class="btn btn-icon btn-twitter btn-round twitter-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on Twitter!">
          <i class="fab fa-twitter fa-twitter-invert"></i>
        </a>
      </div>
      <div class="social-media-index index-insta">
        <a id="instagran" class="btn btn-icon btn-instagram btn-round  instagram-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on Instagram!">
          <i class="fab fa-instagram fa-instagram-invert"></i>
        </a>
      </div> -->
      <!-- ==================== Social Media Section End =================== -->
    </div>
  </div>
    <!-- ================ End of Background ================= -->

    <!-- ================ Tech Section ================== -->
    <div class="landing-page">
      <div class="page-header">
        <div class="section-nucleo-icons section-nucleo-icons-mobile">
          <img src="../img/path3.png" class="path">
          <div class="sec-margin-top">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-12 sec-margin-top">
                <h2 class="title">The Tech I Work With</h2>
                <h4 class="description">
                  I am interested in all areas of software development and allways working on new projects.
                  Contact me to find out what what programming languages im learning now or to know what projects I am working on.
                </h4>
                <div class="btn-wrapper">
                </div>
              </div>
            </div>
    <!-- ========================== Progress Bars ============================= -->
            <div class="left-progress">
              <div class="progress-container progress-success progress-index">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>

              <div class="progress-container progress-success progress-index">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>

              <div class="progress-container progress-success progress-index">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>

              <div class="progress-container progress-success progress-index">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="right-progress">
              <div class="progress-container progress-success progress-index-right">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>

              <div class="progress-container progress-success progress-index-right">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>

              <div class="progress-container progress-success progress-index-right">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>

              <div class="progress-container progress-success progress-index-right">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
            </div>
    <!-- ========================== Progress Bars End ============================= -->
            <!-- <div class="blur-hover">
              <a href='{!! url('pages/contact'); !!}'>
                <div class="icons-container blur-item on-screen mt-5"> -->
                    <!-- Center -->
                    <!-- <i class="icon devicon-laravel-plain"></i> -->
                    <!-- Right 1 -->
                    <!-- <i class="icon icon-sm devicon-bootstrap-plain"></i>
                    <i class="icon icon-sm devicon-css3-plain-wordmark"></i>
                    <i class="icon icon-sm devicon-html5-plain"></i> -->
                    <!-- Right 2 -->
                    <!-- <i class="icon devicon-postgresql-plain"></i>
                    <i class="icon devicon-jquery-plain"></i>
                    <i class="icon devicon-heroku-original"></i> -->
                    <!-- Left 1 -->
                    <!-- <i class="icon icon-sm devicon-ruby-plain"></i>
                    <i class="icon icon-sm devicon-rails-plain"></i>
                    <i class="icon icon-sm devicon-git-plain"></i> -->
                    <!-- Left 2 -->
                    <!-- <i class="icon devicon-github-plain"></i>
                    <i class="icon devicon-javascript-plain"></i>
                    <i class="icon devicon-photoshop-plain"></i>
                </div>
                <span class="blur-hidden h5 text-primary">Contact me to find out more!</span>
              </a>
            </div> -->
          </div>
        </div>
        <!-- <img src="../img/blob.png" class="path"> -->
        <img src="../img/path2.png" class="path2">
        <!-- <img src="../img/triunghiuri.png" class="shapes triangle"> -->
        <img src="../img/waves.png" class="shapes wave">
        <img src="../img/patrat.png" class="shapes squares">
        <img src="../img/cercuri.png" class="shapes circle">
      </div>
    </div>
      <!-- ============ End of Tech Section ============ -->
      <!-- ==============GitHub Section ==================== -->

      <!-- <div class="section section-free-demo"> -->
        <!-- <div class="container"> -->
          <!-- <div class="col-lg-5 col-md-12"> -->
            <div class="github-background-container">
              <i class="fab fa-github"></i>
            </div>
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div> -->

      <!-- ==============GitHub Section End ==================== -->



    <!-- ================ Features Section ===================== -->
  <div class="landing-page">
    <section class="section section-lg">
      <img src="../img/path4.png" class="path">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h1 class="text-center">Features Of My WebApplications </h1>
            <div class="row row-grid justify-content-center">
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-primary">
                    <i class="tim-icons icon-laptop"></i>
                  </div>
                  <h4 class="info-title">Fully Responsive</h4>
                  <hr class="line-primary">
                  <p>My web-apps work on any device.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-warning">
                    <i class="tim-icons icon-mobile"></i>
                  </div>
                  <h4 class="info-title">Functional</h4>
                  <hr class="line-warning">
                  <p>All my sites are fully functional and easy to use. </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-success">
                    <i class="tim-icons icon-single-02"></i>
                  </div>
                  <h4 class="info-title">Custome</h4>
                  <hr class="line-success">
                  <p>My website are build custome to your needs.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-danger">
                    <i class="tim-icons icon-palette"></i>
                  </div>
                  <h4 class="info-title">Well Designed</h4>
                  <hr class="line-danger">
                  <p>My sites are aesthetically pleasing and design for the future.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-yellow">
                    <i class="tim-icons icon-html5"></i>
                  </div>
                  <h4 class="info-title">Clean Code</h4>
                  <hr class="line-yellow">
                  <p>I always write clean reliable code.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info">
                  <div class="icon icon-blue">
                    <i class="tim-icons icon-key-25"></i>
                  </div>
                  <h4 class="info-title">Reliable & Secure</h4>
                  <hr class="line-blue">
                  <p>I build all my sites with realibility & security as my priority.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================ Features Section End ===================== -->

  <!-- =========== Work History =========== -->
    <section class="section section-lg">
      <!-- <section class="section"> -->
        <img src="../img/path4.png" class="path">
        <div class="container">
          <div class="row row-grid justify-content-between">
            <div class="col-md-5 mt-lg-5">
              <object type="image/svg+xml" data="../img/start_up.svg" id="left-slide" alt="Person juggling projects and icons">
                  <!-- Fall back img -->
                <img src="../img/start_up.svg" alt="Person juggling projects and icons">
              </object>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <h1>Project
                  <br/>Management</h1>
                <p>Acquired hands-on experience as a project manager and work with stakeholders and executives to understand and analyze project requirements, and manage projects from beginning to end while ensuring that the projects get accomplished within its due time, budget, and scope.</p>
                <br/>
                <p>I have gained valuable experience in streamlining business processes, conflict resolution, and created Standard Operation Procedures, and training manuals for small and mid-size companies.</p>
                <br/>
                <a href='{!! url('pages/about-me'); !!}' class="font-weight-bold text-info mt-5">See More <i class="tim-icons icon-minimal-right text-info"></i></a>
              </div>
            </div>
          </div>
        </div>
      <!-- </section> -->
    </section>
  <!-- ============== End of Work History ============== -->

  <!-- ======================= Experience Section ===================== -->

    <section class="section section-lg">
      <section class="section">
        <img src="../img/path4.png" class="path">
        <div class="container">
          <div class="row row-grid justify-content-between">
            <div class="col-md-6">
              <div class="pl-md-5">
                <h1>Start-up
                  <br/>Experience</h1>
                <p>I Have worked hand-in-hand with founders to design logos, pitch decks, business plans, financial projections, and much more.</p>
                <br/>
                <p>I am well versed in the Lean Start-up & agile methodologies and can help you turn your idea to a full flesh product.</p>
                <br/>
                <a href='{!! url('pages/about-me'); !!}' class="font-weight-bold text-info mt-5">See More <i class="tim-icons icon-minimal-right text-info"></i></a>
              </div>
            </div>
            <div class="col-md-5 mt-lg-5">
              <object type="image/svg+xml" data="../img/preoject_management.svg" class="" alt="Person juggling projects and icons">
                  <!-- Fall back img -->
                <img src="../img/preoject_management.svg" class="">
              </object>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>

  <!-- ======================= Experience Section End ===================== -->

  <!-- ================ Project Slide ===================== -->

  <div class="team-1">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Projects</h2>
          <h4 class="description">These are some of my previous projects.
            <br>Click on the projects' page to find out more about it!</h4>
        </div>
      </div>
      <div class="row">
        <div id="carouselExampleControls" class="carousel slide carousel-team">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">Sparkly LLC</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block" src="../img/sparkly_logo_background.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Full stack development
                        <br> &amp; design work.
                        <br/>
                        <strong>Framework:</strong> Laravel
                      </div>
                      <div class="description">
                        Sparkly LLC is a cleaning company servicing the South Florida area. The owners of Sparkly requested design work consisting of the company logo, custom business cards, promotional marketing material, &amp; a website. Contact me or click on the project to find out more.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/enriqueguido/sparkly_laravel_website" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">WellCare Pediatrics</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/wellcare-logo-bandaid-background.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Front End
                        <br> &amp; design work.
                        <br/>
                        <strong>Framework:</strong> Laravel
                      </div>
                      <div class="description">
                        Wellcare is a landing page build on Laravels framework and design around the idea of a physician to create a unique pediatrics concierge medical practice. Please contact me or click on the project to find out more.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/enriqueguido/WellCare" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">Wobblee</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block" src="../img/wobblee_logo_background.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Full stack development
                        <br/>
                        <strong>Framework:</strong> Ruby on rails
                      </div>
                      <div class="description">
                        Wobble is a sobriety test game where information is gathered about the user and timed random green bubbles are popped to calculate the reaction time to suggest if they had one too many alcoholic beverages. Contact me or click on the project to find out more.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/galinap684/Wobblee-App" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">GoWithMe</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/go_with_me_presentation_1.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Full stack development
                        <br/>
                        <strong>Framework:</strong> Ruby on rails
                      </div>
                      <div class="description">
                        Utilizing Eventbride API GoWithMe is a social platform that allows its users to find events &amp; connects them to those attending it.
                      </div>
                      <div class="footer">
                        <a href="https://github.com/enriqueguido/with_me" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="title">KeddyMe</h1>
                  </div>
                  <div class="col-md-4">
                    <img class="d-block margin-img-left" src="../img/KEDDYME Logo 2.png" alt="First slide" height="500">
                  </div>
                  <div class="col-md-4">
                    <div class="wrapper">
                      <div class="category">
                        <strong>Type:</strong> Design work &amp; other
                        <br/>
                        <strong>Framework:</strong> N/A
                      </div>
                      <div class="description">
                        KeddyMe is a startup company in the state of NY that is working on the creation of a mood based search engine. Through our partnership I assisted the founders with creative work such as company logo &amp; others. Please contact me to find out more.
                      </div>
                      <div class="footer">
                        <a href="javascript:;" target="_blank" class="btn btn-icon btn-github btn-round"><i class="fab fa-github"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a> -->
                        <!-- <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="tim-icons icon-minimal-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="tim-icons icon-minimal-right"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ================ Project Slide End ===================== -->

    <!-- =================== Email Section ==================== -->
    <div class="header header-5">
      <div class="page-header page-header-sec email-contact-sec">
        <div class="container">
          <div class="row align-items-center mt-md-5">
            <div class="col-lg-6 col-md-8 ml-auto mr-auto">
              <!-- <div class="logo"> -->
                <!-- <div class="logo-image"> -->
                  <img class="logo-cb-margin"src="../img/CodeBlockLogoWhite.png" height="37" width="37">
                  <h2 class="cb-mail-contact">CodeBlock</h2>
                <!-- </div> -->
              <!-- </div> -->
              <h2 class="title text-left">Lets build something awesome together! Contact me to find out how.</h2>
<!-- =================== Display error message if contact form is not filled out completely ================== -->
             <?php if (count($errors) > 0): ?>
              <div class="alert alert-danger alert-with-icon index-alert">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
                <!-- <span data-notify="icon" class="tim-icons icon-support-17"></span> -->
                <img src="../img/CodeBlockLogoWhite.png" alt="CodeBlock White Logo" style="width:30px;height:30px;" class="cb-alert-icon">
<!--================ Show error for each section that is not filled out and end loop ======================== -->
                <?php foreach ($errors->all() as $error): ?>
                  <span> {{ $error }} </span>
                <?php endforeach; ?>
              </div>
             <?php endif; ?>
 <!-- ======== Show success message if all areas of form are filled out and message was send out ========= -->
              <?php if ($message = Session::get('index')): ?>
               <div class="alert alert-success alert-with-icon index-alert">
                 <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                   <i class="tim-icons icon-simple-remove"></i>
                 </button>
                 <!-- <span data-notify="icon" class="tim-icons icon-bell-55"></span> -->
                 <img src="../img/CodeBlockLogoWhite.png" alt="CodeBlock White Logo" style="width:30px;height:30px;" class="cb-alert-icon-success">
                 <span> {{ $message }} </span>
               </div>
              <?php endif; ?>

              <form role="form" method="post" action="{{ url('index/send') }}">
                {{ csrf_field() }}
                <div class="input-group">
                  <input type="text" name="email" class="form-control input-border-blue" placeholder="Enter your email here and I will contact you">
                  <div class="input-group-append">
                    <span class="input-group-text input-border-blue"><i class="tim-icons icon-lock-circle"></i></span>
                  </div>
                </div>
                <button type="submit" name="send" value"Send" class="btn btn-info btn-simple btn-icon btn-index-hover">
                  <i class="tim-icons icon-send"></i>
                </button>
              </form>
            </div>
            <div class="col-lg-4 ml-auto text-center">
              <div class="phone-container">
                <object type="image/svg+xml" data="../img/codeblock-mobile-home-page.svg" class="phone">
                    <!-- Your fall back here -->
                  <!-- <img src="image.svg" /> -->
                </object>
                <!-- <img src="../img/codeblock-mobile-home-page.svg" class="phone"> -->
              </div>
              <img src="../img/patrat.png" class="shape">
              <img src="../img/cercuri.png" class="shape2">
              <img src="../img/waves.png" class="shape3">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="mobile-empty">
    </div> -->
    <!-- =================== Email Section End ==================== -->

    <!-- ============ Footer with Social Media ============= -->
    <footer class="footer" data-background-color="black">
      @include('inc.footer')
    </footer>
    <!-- ============= End of Footer =========== -->

    <!--   Core JS Files   -->
    @extends('inc.js-footer')

</body>

</html>