<!-- Start Header Section -->
<header class="cs_site_header cs_style_1 cs_sticky_header cs_site_header_full_width">
  <!-- <div class="cs_top_header">
    <div class="container">
      <div class="cs_top_header_in">
        <div class="cs_top_header_left">
          <ul class="cs_top_nav d-flex flex-wrap align-items-center cs_fs_12 text-white m-0 p-0">
            <li><b class="fw-medium text-white">Address:</b> 3517 W. Gray St. Utica, Pennsylvania 57867</li>
            <li><a href="mailto:info@company.com">info@company.com</a></li>
          </ul>
        </div>
        <div class="cs_top_header_right">
          <ul class="cs_top_nav d-flex flex-wrap align-items-center cs_fs_12 text-white m-0 p-0">
            <li><a href="">Help</a></li>
            <li><a href="">Support</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
  <div class="cs_main_header">
    <div class="container">
      <div class="cs_main_header_in">
        <div class="cs_main_header_left">
          <a class="cs_site_branding" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/NGCS-Conference-Logo-white.svg') }}" alt="Logo">
          </a>
        </div>
        <div class="cs_main_header_center">
          <div class="cs_nav cs_primary_font fw-medium">
            <ul class="cs_nav_list fw-medium text-uppercase">
              <li><a href="/#about-the-conference">About the Conference</a></li>
              <li><a href="/#conference-highlights">Conference Highlights</a></li>
              <li><a href="/#speakers">Speakers</a></li>
              <li><a href="/#topics">Topics</a></li>
              <li><a href="/#news">News</a></li>
              <li><a href="/#contact-us">Contact Us</a></li>
              <li class="lang-switch">
                <?php if( (strpos(url()->current(),'/ar/') !== false) ) {
                  $englishPath = substr(\Request::path(), strpos(\Request::path(), '/', 1)); ?>
                  <a class="en" href="<?php echo $englishPath; ?>">EN</a>
                  <a class="ar" href="{{url()->current()}}">AR</a>
                <?php }
                  else { ?>
                  <a class="en" href="{{url()->current()}}">EN</a>
                  <a class="ar" href="/ar/{{ \Request::path() }}">AR</a>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
        <div class="cs_main_header_right">
          <div class="cs_toolbox">
            <div class="cs_hero_btn">
              <a href="/#apply-to-join" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_20 cs_pr_20 cs_pt_10 cs_pb_10 overflow-hidden"><span>APPLY TO JOIN</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header Section -->