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
          <h1 class="h1-seo center-left mobile-size" id="changeText"></h1>
        </div>
      </div>
      <div class="home-grid grid-index-animate"><img class="grid-index-animate" src="../img/grid.png" alt=""></div>
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
      <div class="social-media-index">
        <a id="twitter" class="btn btn-icon btn-twitter btn-round twitter-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on Twitter!">
          <i class="fab fa-twitter fa-twitter-invert"></i>
        </a>
      </div>
      <div class="social-media-index index-insta">
        <a id="instagran" class="btn btn-icon btn-instagram btn-round  instagram-invert-background btn-index-social" data-toggle="tooltip" data-original-title="Follow me on Instagram!">
          <i class="fab fa-instagram fa-instagram-invert"></i>
        </a>
      </div>
      <!-- ==================== Social Media Section End =================== -->
    </div>
  </div>
    <!-- ================ End of Background ================= -->

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

    <!-- ============ Footer with Social Media ============= -->
    <footer class="footer" data-background-color="black">
      @include('inc.footer')
    </footer>
    <!-- ============= End of Footer =========== -->

    <!--   Core JS Files   -->
    @extends('inc.js-footer')
</body>

</html>
