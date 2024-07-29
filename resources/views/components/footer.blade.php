<footer class="cs_footer background-filled text-white" data-src="{{ asset('assets/img/footer_bg.jpeg') }}">
  <div class="container">
    <div class="cs_footer_main cs_pt_30 cs_pb_30">
      <div class="row">
        <div class="col-lg-3">
          <div class="cs_footer_item cs_pt_20 cs_pb_20">
            <div class="cs_text_widget">
            <div class="cs_footer_logo wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><img src="{{ asset('assets/img/NGCS-Conference-Logo-white.svg') }}" alt="Logo"></div>
            </div>
            <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5">
              <a href="https://www.linkedin.com/company/nextwrldsa/" target="_blank" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="https://www.youtube.com/" target="_blank" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-youtube"></i></a>
              <a href="https://www.instagram.com/" target="_blank" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-1">
          <div class="cs_footer_item cs_pt_20 cs_pb_20">
            <h2 class="cs_widget_title text-white cs_fs_22 cs_mb_22">Explore</h2>
            <ul class="cs_menu_widget text-uppercase">
              <li><a href="/#about-the-conference">About</a></li>
              <li><a href="/#conference-highlights">Highlights</a></li>
              <li><a href="/#speakers">Speakers</a></li>
              <li><a href="/#topics">Topics </a></li>
              <li><a href="/#news">News</a></li>
              <li><a href="/#contact-us">Contact Us</a></li>
              <li><a href="/#apply-to-join">Apply</a></li>
              <li><a href="{{ url('terms-and-conditions') }}">Terms & Conditions</a></li>
              <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_copyright text-center cs_fs_124 cs_lh_lg cs_pt_36 cs_pb_36">
    <div class="container">
      <p class="m-0">Copyright © {{ date('Y') }} <a target="_blank" href="https://esportsworldcup.com/">Esports World Cup Foundation</a>. All rights reserved.</p>
    </div>
  </div>
</footer>