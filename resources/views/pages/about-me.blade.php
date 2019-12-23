<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.header')
</head>

<body class="blog-post">

  <!-- ============== Navbar =============== -->
  @extends('inc.navbar')
  <!-- ============= End Navbar =============== -->

  <!-- Intro background photo -->
  <div class="wrapper">
    <div class="page-header header-filter">
      <div class="page-header-image" data-parallax="true" data-dark-overlay="6" style="background-image: url('../img/about-me.jpg');"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title">Let's Talk About Me!</h1>
            <div class="author">
              <img src="../img/profile-image-1.jpeg" alt="..." class="avatar img-raised about-me-profile">
            </div>
            <br/>
            <h4 class="description">Guido Maximiliano Enrique</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Intro background photo -->

  <!-- About me info section -->
  <div class="page-header">
    <!-- <img src="../img/dots.png" class="dots"> -->
    <img src="../img/path4.png" class="path about-me-path">
    <div class="container align-items-center">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <h1 class="profile-title text-left profile-name-align">Who I am</h1>
          <h5 class="text-on-back">01</h5>
          <p class="profile-description">A tech lover at heart with an analylitcal mind and an eye for detailed. I am an attentive, compassionate individual, tolerant of many things while supportive of others and their goals.</p>
          <div class="btn-wrapper profile pt-3">
            <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-twitter btn-round" data-toggle="tooltip" data-original-title="Follow us">
              <i class="fab fa-twitter"></i>
            </a>
            <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-facebook btn-round" data-toggle="tooltip" data-original-title="Like us">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-dribbble  btn-round" data-toggle="tooltip" data-original-title="Follow us">
              <i class="fab fa-dribbble"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-coin card-plain">
            <div class="card-header">
              <img src="../img/profile-pic.jpeg" class="img-center img-fluid rounded-circle">
              <h4 class="title title-center">What I Do</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#linka">
                    Full-Stack
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#linkb">
                    PM Work
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#linkc">
                    PM Work
                  </a>
                </li> -->
              </ul>
              <div class="tab-content tab-subcategories">
                <div class="tab-pane active" id="linka">
                  <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <thead class=" text-primary">
                        <tr>
                          <th class="header">
                            COIN
                          </th>
                          <th class="header">
                            AMOUNT
                          </th>
                          <th class="header">
                            VALUE
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            BTC
                          </td>
                          <td>
                            7.342
                          </td>
                          <td>
                            48,870.75 USD
                          </td>
                        </tr>
                        <tr>
                          <td>
                            ETH
                          </td>
                          <td>
                            30.737
                          </td>
                          <td>
                            64,53.30 USD
                          </td>
                        </tr>
                        <tr>
                          <td>
                            XRP
                          </td>
                          <td>
                            19.242
                          </td>
                          <td>
                            18,354.96 USD
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="linkb">
                  <div class="row">
                    <label class="col-sm-3 col-form-label">Pay to</label>
                    <div class="col-sm-9">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="e.g. 1Nasd92348hU984353hfid">
                        <span class="form-text">Please enter a valid address.</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">Amount</label>
                    <div class="col-sm-9">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="1.587">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-simple btn-primary btn-icon btn-round float-right"><i class="tim-icons icon-send"></i></button>
                </div>
                <div class="tab-pane" id="linkc">
                  <div class="table-responsive">
                    <table class="table tablesorter " id="plain-table">
                      <thead class=" text-primary">
                        <tr>
                          <th class="header">
                            Latest Crypto News
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            The Daily: Nexo to Pay on Stable...
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Venezuela Begins Public of Nation...
                          </td>
                        </tr>
                        <tr>
                          <td>
                            PR: BitCanna – Dutch Blockchain...
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About me info section end -->

  <!-- About me second info section -->
  <div class="section">
    <img src="../img/path5.png" class="about-me-path2">
     <div class="container">
       <div class="row justify-content-between">
         <div class="col-md-6">
           <!-- <div class="row justify-content-between align-items-center">
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active">
                   <img class="d-block" src="../assets/img/denys.jpg" alt="First slide">
                   <div class="carousel-caption d-none d-md-block">
                     <h5>Big City Life, United States</h5>
                   </div>
                 </div>
                 <div class="carousel-item">
                   <img class="d-block" src="../assets/img/fabien-bazanegue.jpg" alt="Second slide">
                   <div class="carousel-caption d-none d-md-block">
                     <h5>Somewhere Beyond, United States</h5>
                   </div>
                 </div>
                 <div class="carousel-item">
                   <img class="d-block" src="../assets/img/mark-finn.jpg" alt="Third slide">
                   <div class="carousel-caption d-none d-md-block">
                     <h5>Stocks, United States</h5>
                   </div>
                 </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                 <i class="tim-icons icon-minimal-left"></i>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                 <i class="tim-icons icon-minimal-right"></i>
               </a>
             </div>
           </div> -->
         </div>
         <div class="col-md-5">
           <h1 class="profile-name-align text-left">Projects</h1>
           <h5 class="text-on-back">02</h5>
           <p class="profile-description text-left">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
           <div class="btn-wrapper pt-3">
             <button href="javascript:void(0)" class="btn btn-simple btn-primary">
               <i class="tim-icons icon-book-bookmark"></i> Bookmark
             </button>
             <button href="javascript:void(0)" class="btn btn-simple btn-info">
               <i class="tim-icons icon-bulb-63"></i> Check it!
             </button>
           </div>
         </div>
       </div>
     </div>
   </div>
  <!-- About me second info section end -->

  <!-- Experience section -->
  <div class="projects-2 project-raised">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ml-auto mr-auto text-center mb-5">
          <h2 class="title">Some of Our Awesome Products - 2</h2>
          <div class="section-space"></div>
        </div>
      </div>
      <ul class="nav nav-pills nav-pills-primary nav-pills-icons nav-pills-lg" role="tablist">
        <li class="nav-item m-auto">
          <a class="nav-link active" data-toggle="tab" href="#project1" role="tablist">
            <i class="tim-icons icon-spaceship"></i> Project 1
          </a>
        </li>
        <li class="nav-item m-auto">
          <a class="nav-link" data-toggle="tab" href="#project2" role="tablist">
            <i class="tim-icons icon-bag-16"></i> Project 2
          </a>
        </li>
        <li class="nav-item m-auto">
          <a class="nav-link" data-toggle="tab" href="#project3" role="tablist">
            <i class="tim-icons icon-light-3"></i> Project 3
          </a>
        </li>
        <li class="nav-item m-auto">
          <a class="nav-link" data-toggle="tab" href="#project4" role="tablist">
            <i class="tim-icons icon-molecule-40"></i> Project 4
          </a>
        </li>
        <li class="nav-item mx-auto">
          <a class="nav-link" data-toggle="tab" href="#project5" role="tablist">
            <i class="tim-icons icon-planet"></i> Project 5
          </a>
        </li>
      </ul>
      <div class="tab-content tab-space">
        <div class="tab-pane active" id="project1">
          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="http://s3.amazonaws.com/creativetim_bucket/products/38/original/opt_mk_thumbnail.jpg?1458052306s">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="stats stats-right">
                      <div class="stars text-warning">
                        <i class="tim-icons icon-shape-star"></i>
                        <i class="tim-icons icon-shape-star"></i>
                        <i class="tim-icons icon-shape-star"></i>
                        <i class="tim-icons icon-shape-star"></i>
                        <i class="tim-icons icon-shape-star"></i>
                      </div>
                    </div>
                    <div class="author">
                      <img src="assets/img/Tim.png" alt="..." class="avatar img-raised">
                      <span>Material Kit</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="https://s3.amazonaws.com/creativetim_bucket/products/93/original/opt_bd_thumbnail.jpg?1535098178">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="stats stats-right">
                      <i class="tim-icons icon-heart-2 text-danger"></i> 342 ·
                      <i class="tim-icons icon-single-copy-04 text-info"></i> 43
                    </div>
                    <div class="author">
                      <img src="assets/img/Tim.png" alt="..." class="avatar img-raised">
                      <span>Black Dashboard</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-image h-auto">
                  <img class="img rounded" src="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg?1544778965">
                </div>
                <div class="card-body text-left">
                  <div class="card-footer mt-0">
                    <div class="stats stats-right">
                      <i class="tim-icons icon-heart-2 text-danger"></i> 127
                    </div>
                    <div class="author">
                      <img src="assets/img/Tim.png" alt="..." class="avatar img-raised">
                      <span>Argon Dashboard Pro</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="project2">
          <div class="space-100"></div>
          <div class="col-md-8 ml-auto mr-auto text-center mt-4">
            <p class="description mb-5">Add your information here for Project2.</p>
          </div>
          <div class="space-100"></div>
        </div>
        <div class="tab-pane" id="project3">
          <div class="space-100"></div>
          <div class="col-md-8 ml-auto mr-auto text-center mt-4">
            <p class="description mb-5">Add your information here for Project3.</p>
          </div>
          <div class="space-100"></div>
        </div>
        <div class="tab-pane" id="project4">
          <div class="space-100"></div>
          <div class="col-md-8 ml-auto mr-auto text-center mt-4">
            <p class="description mb-5">Add your information here for Project4.</p>
          </div>
          <div class="space-100"></div>
        </div>
        <div class="tab-pane" id="project5">
          <div class="space-100"></div>
          <div class="col-md-8 ml-auto mr-auto text-center mt-4">
            <p class="description mb-5">Add your information here for Project5.</p>
          </div>
          <div class="space-100"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center mt-4">
          <h3 class="title">Interested in our projects?</h3>
          <h4 class="description mb-5">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h4>
          <button class="btn btn-primary btn-lg">Contact us</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Experience section end -->

  <!-- Education section -->
  <div class="projects-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mr-auto ml-auto text-center mb-5">
        <h2 class="title">Some of Our Awesome Projects - 1</h2>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg bg-transparent mb-5">
    <div class="container">
      <div class="navbar-translate">
        <p>52 projects found</p>
      </div>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a href="javascript:;" class="nav-link dropdown-toggle" id="navbarOrder" data-toggle="dropdown" aria-expanded="false">
            <p>A-to-Z</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarOrder">
            <a class="dropdown-item" href="javascript:;">
              Z-to-A
            </a>
            <a class="dropdown-item" href="javascript:;">
              Newest
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="javascript:;" class="nav-link dropdown-toggle" id="navbarLatest" data-toggle="dropdown" aria-expanded="false">
            <p>Latest</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarLatest">
            <a class="dropdown-item" href="javascript:;">
              Newest
            </a>
            <a class="dropdown-item" href="javascript:;">
              High interest
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mt-2">
            <div class="float-left">
              <i class="tim-icons icon-tag d-inline text-info"></i>
              <p class="d-inline">H-23</p>
            </div>
            <div class="float-right">
              <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                  <i class="tim-icons icon-settings-gear-63"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body text-center p-4">
            <a href="javascript:;">
              <img src="assets/img/slack.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
            </a>
            <h4 class="card-title mb-0">Slack</h4>
            <p class="card-description">We are happy to work at such a great project.</p>
            <h5 class="card-title mt-4">Members</h5>
            <div class="avatar-group">
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                <img alt="Image placeholder" src="assets/img/james.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                <img alt="Image placeholder" src="assets/img/ryan.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                <img alt="Image placeholder" src="assets/img/lora.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                <img alt="Image placeholder" src="assets/img/mike.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mt-2">
            <div class="float-left">
              <i class="tim-icons icon-tag d-inline text-success"></i>
              <p class="d-inline">F-43</p>
            </div>
            <div class="float-right">
              <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                  <i class="tim-icons icon-settings-gear-63"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body text-center p-4">
            <a href="javascript:;">
              <img src="assets/img/spotify.jpeg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
            </a>
            <h4 class="card-title mb-0">Spotify</h4>
            <p class="card-description">We strive to embrace and drive change in our industry.</p>
            <h5 class="card-title mt-4">Members</h5>
            <div class="avatar-group">
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                <img alt="Image placeholder" src="assets/img/james.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                <img alt="Image placeholder" src="assets/img/ryan.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                <img alt="Image placeholder" src="assets/img/lora.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                <img alt="Image placeholder" src="assets/img/mike.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mt-2">
            <div class="float-left">
              <i class="tim-icons icon-tag d-inline text-danger"></i>
              <p class="d-inline">J-11</p>
            </div>
            <div class="float-right">
              <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                  <i class="tim-icons icon-settings-gear-63"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body text-center p-4">
            <a href="javascript:;">
              <img src="assets/img/dribbble.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
            </a>
            <h4 class="card-title mb-0">Dribbble</h4>
            <p class="card-description">The time has come to bring our plans and ideas to life.</p>
            <h5 class="card-title mt-4">Members</h5>
            <div class="avatar-group">
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                <img alt="Image placeholder" src="assets/img/james.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                <img alt="Image placeholder" src="assets/img/ryan.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                <img alt="Image placeholder" src="assets/img/lora.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                <img alt="Image placeholder" src="assets/img/mike.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mt-2">
            <div class="float-left">
              <i class="tim-icons icon-tag d-inline text-warning"></i>
              <p class="d-inline">A-11</p>
            </div>
            <div class="float-right">
              <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                  <i class="tim-icons icon-settings-gear-63"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body text-center p-4">
            <a href="javascript:;">
              <img src="assets/img/Tim.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
            </a>
            <h4 class="card-title mb-0">CreativeTim</h4>
            <p class="card-description">We are developing the best design projects. </p>
            <h5 class="card-title mt-4">Members</h5>
            <div class="avatar-group">
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                <img alt="Image placeholder" src="assets/img/james.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                <img alt="Image placeholder" src="assets/img/ryan.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                <img alt="Image placeholder" src="assets/img/lora.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                <img alt="Image placeholder" src="assets/img/mike.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mt-2">
            <div class="float-left">
              <i class="tim-icons icon-tag d-inline text-primary"></i>
              <p class="d-inline">A-11</p>
            </div>
            <div class="float-right">
              <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                  <i class="tim-icons icon-settings-gear-63"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body text-center p-4">
            <a href="javascript:;">
              <img src="assets/img/dropbox.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
            </a>
            <h4 class="card-title mb-0">DropBox</h4>
            <p class="card-description">It is important to save every project safely with our app.</p>
            <h5 class="card-title mt-4">Members</h5>
            <div class="avatar-group">
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                <img alt="Image placeholder" src="assets/img/james.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                <img alt="Image placeholder" src="assets/img/ryan.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                <img alt="Image placeholder" src="assets/img/lora.jpg">
              </a>
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                <img alt="Image placeholder" src="assets/img/mike.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header mt-2">
            <div class="float-left">
              <i class="tim-icons icon-tag d-inline"></i>
              <p class="d-inline">E-28</p>
            </div>
            <div class="float-right">
              <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                  <i class="tim-icons icon-settings-gear-63"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                  <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body text-center p-4">
            <a href="javascript:;">
              <img src="assets/img/unass.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
            </a>
            <h4 class="card-title mb-0">Unassigned</h4>
            <p class="card-description">Here you can add your description and bellow add your members. </p>
            <h5 class="card-title mt-4">Members</h5>
            <div class="avatar-group">
              <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Add memberss">
                <i class="tim-icons icon-lock-circle"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="mt-5">
      <ul class="pagination float-left">
        <li class="page-item">
          <a class="page-link" href="#link" aria-label="Previous">
            <span aria-hidden="true"><i class="tim-icons icon-double-left" aria-hidden="true"></i></span>
          </a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#link">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#link">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#link">...</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#link">6</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#link" aria-label="Next">
            <span aria-hidden="true"><i class="tim-icons icon-double-right" aria-hidden="true"></i></span>
          </a>
        </li>
      </ul>
      <div class="text-right">
        <p>Showing 6 out of 36</p>
        <div>
    </footer>
    </div>
    </div>
  <!-- Education section end -->

    <!-- ============ Footer with Social Media ============= -->
    <footer class="footer" data-background-color="black">
      @include('inc.footer')
    </footer>
    <!-- ============= End of Footer =========== -->

    <!--   Core JS Files   -->
    @extends('inc.js-footer')
</body>

</html>
