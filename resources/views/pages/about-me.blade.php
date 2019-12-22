<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.header')
</head>

<body class="blog-post">

  <!-- ============== Navbar =============== -->
  @extends('inc.navbar')
  <!-- ============= End Navbar =============== -->

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
    <div class="page-header">
      <img src="../img/dots.png" class="dots">
      <img src="../img/path4.png" class="path">
      <div class="container align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <h1 class="profile-title text-left">Who I am</h1>
            <h5 class="text-on-back">01</h5>
            <p class="profile-description">Offices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles.</p>
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
                      Wallet
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkb">
                      Send
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#linkc">
                      News
                    </a>
                  </li>
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
    <!-- ============ Footer with Social Media ============= -->
    <footer class="footer" data-background-color="black">
      @include('inc.footer')
    </footer>
    <!-- ============= End of Footer =========== -->

    <!--   Core JS Files   -->
    @extends('inc.js-footer')
</body>

</html>
