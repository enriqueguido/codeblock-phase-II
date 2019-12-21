<!-- ============ Footer with Social Media ============= -->
<footer class="footer" data-background-color="black">
  <div class="container">
    <a class="footer-brand" href="javascript:;">CB• Web Application By G.M.E</a>
    <ul class="pull-center">
      <li>
        <a href="javascript:;">
          Home
        </a>
      </li>
      <li>
        <a href="javascript:;">
          Portfolio
        </a>
      </li>
      <li>
        <a href="javascript:;">
          About Me
        </a>
      </li>
      <li>
        <a href="javascript:;">
          Contact Me
        </a>
      </li>
      <li>
        <a href="javascript:;">
          Blog
        </a>
      </li>
    </ul>
    <ul class="social-buttons pull-right">
      <li>
        <a href="https://twitter.com/maxstang21" target="_blank" class="btn btn-icon btn-link btn-neutral" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Follow me on Twitter">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/code_monkey01/" target="_blank" class="btn btn-icon btn-neutral btn-link" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Follow me on Instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/guido-maximiliano-enrique/" target="_blank" class="btn btn-icon btn-neutral btn-link" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Follow me on LinkedIn">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
      <li>
        <a href="https://github.com/enriqueguido" target="_blank" class="btn btn-icon btn-neutral btn-link" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Check out my projects on Github">
          <i class="fab fa-github"></i>
        </a>
      </li>
    </ul>
  </div>
</footer>
<!-- ============= End of Footer =========== -->

<!--   Core JS Files   -->
<script src="./js/typewriter.js" type="text/javascript"></script>
<script src="./js/core/jquery.min.js" type="text/javascript"></script>
<script src="./js/core/popper.min.js" type="text/javascript"></script>
<script src="./js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the Carousel, full documentation here: http://kenwheeler.github.io/slick/ -->
<script src="./js/plugins/slick.js" type="text/javascript"></script>
<!--  Plugin for the blob animation -->
<script src="./js/plugins/anime.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="./js/plugins/chartjs.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./js/plugins/moment.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="./js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="./js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="./js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./js/plugins/jasny-bootstrap.min.js"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="./js/blk-design-system-pro.min.js?v=1.0.0" type="text/javascript"></script>
<script>
$(document).ready(function() {
  blackKit.initDatePicker();
  blackKit.initSliders();
});

function scrollToDownload() {

  if ($('.section-download').length != 0) {
    $("html, body").animate({
      scrollTop: $('.section-download').offset().top
    }, 1000);
  }
}
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
window.TrackJS &&
  TrackJS.install({
    token: "ee6fab19c5a04ac1a32a645abde4613a",
    application: "black-dashboard-pro"
  });
</script>
