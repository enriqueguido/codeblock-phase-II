<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.header')
</head>

<body class="contact-page">

  <!-- ============== Navbar =============== -->
  @extends('inc.navbar')
  <!-- ============= End Navbar =============== -->

  <div class="wrapper">
    <div class="page-header header-filter contactus-3">
      <!-- <div class="page-header-image" style="background-image: url('https://media.giphy.com/media/TEcWILpQAbdDsGK6EK/giphy.gif');"></div> -->
      <div class="contact-header-vid">
        <video autoplay muted loop id="myVideo">
          <source src="../img/Aerial Shot Of City.mp4" type="video/mp4">
        </video>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="title">Got a question?</h1>
            <h3>I'd love to talk more about what you need & and how we can work together!</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- ==================== Social Media Section =================== -->
  <div class="main">
    <div class="title text-center">
      <h3>Follow me on social media</h3>
    </div>
    <div class="social-line social-line-big-icons margin-bottom">
      <div class="container">
        <div class="social-media-row">
          <div class="col-md-2">
            <a href="https://twitter.com/maxstang21" class="btn btn-icon btn-simple btn-twitter btn-footer" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Follow me on Twitter">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
          <div class="col-md-2">
            <a href="https://www.instagram.com/code_monkey01/" class="btn btn-icon btn-simple btn-instagram btn-gram-color btn-footer" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Follow me on Instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
          <div class="col-md-2">
            <a href="https://www.linkedin.com/in/guido-maximiliano-enrique/" class="btn btn-icon btn-simple btn-linkedin btn-footer" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Follow me on LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
          <div class="col-md-2">
            <a href="https://github.com/enriqueguido" class="btn btn-icon btn-simple btn-github btn-github-color btn-footer" target="_blank"data-toggle="tooltip" data-placement="bottom" title="Check out my project on Github">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== Social Media Section End =================== -->

  <!-- =============== Send Message Section  ============== -->
  <div class="contactus-4">
   <div id="contactUs2Map" class="map">
     	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114614.47188656754!2d-80.21560729672905!3d26.141249675535164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9012720facaf5%3A0x7602be7540bf8ebe!2sFort+Lauderdale%2C+FL!5e0!3m2!1sen!2sus!4v1553112382414" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-md-5 contact-map-title">
         <h1 class="title">Keep in Touch</h1>
         <h4 class="description text-white">Would you like to hire me? <br> Please contact me to find out more.</h4>
       </div>
       <div class="col-md-12 m-auto">
         <div class="card card-contact card-raised">
           <div class="row">
             <div class="col-md-8">
               <form role="form" class="p-3" id="contact-form" method="post">
                 <div class="card-header">
                   <h4 class="card-title">Send me a message</h4>
                 </div>
                 <div class="card-body">
                   <div class="row">
                     <div class="col-md-6">
                       <label>First name</label>
                       <div class="input-group">
                         <div class="input-group-prepend">
                           <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                         </div>
                         <input type="text" class="form-control" placeholder="First Name..." aria-label="First Name...">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Last name</label>
                         <div class="input-group">
                           <div class="input-group-prepend">
                             <span class="input-group-text"><i class="tim-icons icon-caps-small"></i></span>
                           </div>
                           <input type="text" class="form-control" placeholder="Last Name..." aria-label="Last Name...">
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Email address</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                         <span class="input-group-text"><i class="tim-icons icon-email-85"></i></span>
                       </div>
                       <input type="text" class="form-control" placeholder="Email Here...">
                     </div>
                   </div>
                   <div class="form-group">
                     <label>Your message</label>
                     <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-check">
                         <label class="form-check-label">
                           <input class="form-check-input" type="checkbox">
                           <span class="form-check-sign"></span>
                           I'm not a robot
                         </label>
                       </div>
                     </div>
                     <div class="col-md-6">
                       <button type="submit" class="btn btn-primary btn-primary-contact btn-round pull-right">Send Message</button>
                     </div>
                   </div>
                 </div>
               </form>
             </div>
             <div class="col-md-4">
               <div class="info text-left bg-info">
                 <h4 class="card-title">My Contact information</h4>
                 <div class="info info-horizontal mt-5">
                   <div class="icon">
                     <i class="tim-icons icon-square-pin"></i>
                   </div>
                   <div class="description contact-card-pad">
                     <h5 class="info-title">
                       Fort Lauderdale
                       <br> Florida 33301
                     </h5>
                   </div>
                 </div>
                 <div class="info info-horizontal">
                   <div class="icon">
                     <i class="tim-icons icon-mobile"></i>
                   </div>
                   <div class="description description-padding">
                     <h5 class="info-title">
                       (954) 982 - 5585
                     </h5>
                   </div>
                 </div>
                 <div class="info info-horizontal">
                   <div class="icon">
                     <i class="tim-icons icon-email-85"></i>
                   </div>
                   <div class="description">
                     <h5 class="info-title">
                       info@codeblock.life
                     </h5>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  </div>
  <!-- =============== Send Message Section End ============== -->

  <!-- ============ Footer with Social Media ============= -->
  <footer class="footer" data-background-color="black">
    @include('inc.footer')
  </footer>
  <!-- ============= End of Footer =========== -->

  <!-- ==============  Core JS Files  ================== -->
  @extends('inc.js-footer')


  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3qD6RR7pzDmHR5jXZVK7JfdwjxTx7QP8&callback=initMap"></script> -->
</body>

</html>