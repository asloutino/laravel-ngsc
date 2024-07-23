@extends('layout.layout')

@section('content')
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
              <a class="cs_site_branding" href="{{ url('index') }}">
                <img src="{{ asset('assets/img/NGCS-Conference-Logo-white.svg') }}" alt="Logo">
              </a>
            </div>
            <div class="cs_main_header_center">
              <div class="cs_nav cs_primary_font fw-medium">
                <ul class="cs_nav_list fw-medium text-uppercase">
                  <li class="menu-item-has-children">
                    <a href="{{ url('index') }}">Home</a>
                    <ul>
                      <li><a href="{{ url('index') }}">Business</a></li>
                      <li><a href="{{ url('corporate') }}">Corporate</a></li>
                      <li><a href="{{ url('finance') }}">Financial institute</a></li>
                      <li><a href="{{ url('insurance') }}">Insurance Company</a></li>
                      <li><a href="{{ url('consulting') }}">Consulting Agency</a></li>
                      <li><a href="{{ url('business-with-ecommerce') }}">Business With E-Commerce</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('about') }}">About</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul>
                      <li><a href="{{ url('project-details') }}">Project Details</a></li>
                      <li><a href="{{ url('services-details') }}">Service Details</a></li>
                      <li><a href="{{ url('team') }}">Team </a></li>
                      <li><a href="{{ url('team-details') }}">Team Member</a></li>
                      <li><a href="{{ url('shop') }}">Our Store</a></li>
                      <li><a href="{{ url('shop-product-details') }}">Product Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('service') }}">Services</a></li>
                  <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul>
                      <li><a href="{{ url('blog-grid') }}">Blog Grid</a></li>
                      <li><a href="{{ url('blog-list-with-sidebar') }}">Blog List With Sidebar</a></li>
                      <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <div class="cs_toolbox">
                <div class="cs_hero_btn">
                  <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>APPLY TO JOIN</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</header>
    <!-- End Header Section -->
  
    <!-- Start Hero -->
    <section class="cs_hero_1-wrap position-relative cs_hero_slider bg-primary">
      <div class="cs_swiper_parallax_slider_wrap">
        <div class="cs_parallax_slider loading">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="cs_hero cs_style_1 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden">
                <figure class="cs_swiper_parallax_bg" data-src="{{ asset('assets/img/EWC_KV_MASTER_FINAL_RGB.jpg') }}">
                  <img src="{{ asset('assets/img/hero_slider_1.jpeg') }}" alt="Slider" class="cs_entity_img">
                  <!-- <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div> -->
                </figure>
                <div class="container text-center">
                  <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                    <h1 class="text-white cs_mb_16 cs_fs_50 cs_fs_lg_46">THE FUTURE OF FANDOM</h1>
                    <h2 class="text-white cs_mb_5 fw-normal cs_fs_18">Four Seasons Hotel Riyadh</h2>
                    <p class="text-white cs_mb_20">August 24-25, 2024</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="swiper-slide">
              <div class="cs_hero cs_style_1 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden">
                <figure class="cs_swiper_parallax_bg" data-src="{{ asset('assets/img/hero_slider_2.jpeg') }}">
                  <img src="{{ asset('assets/img/hero_slider_2.jpeg') }}" alt="Slider" class="cs_entity_img">
                  <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div>
                </figure>
                <div class="container">
                  <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                    <h2 class="text-white cs_mb_5 fw-normal cs_fs_18">This Week Only for World Premier</h2>
                    <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46">
                      Inventive and interested <br>in innovation
                    </h1>
                    <p class="text-white cs_mb_20">
                      I have been a loyal customer of this auto parts company for years and I cannot <br>recommend them enough. Their extensive selection of high-quality parts and <br> accessories.
                    </p>
                    <div class="cs_hero_btn">
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="cs_hero cs_style_1 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden">
                <figure class="cs_swiper_parallax_bg" data-src="{{ asset('assets/img/hero_slider_3.jpeg') }}">
                  <img src="{{ asset('assets/img/hero_slider_3.jpeg') }}" alt="Slider" class="cs_entity_img">
                  <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div>
                </figure>
                <div class="container">
                  <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                    <h2 class="text-white cs_mb_5 fw-normal cs_fs_18">This Week Only for World Premier</h2>
                    <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46">
                      Inventive and interested <br>in innovation
                    </h1>
                    <p class="text-white cs_mb_20">
                      I have been a loyal customer of this auto parts company for years and I cannot <br>recommend them enough. Their extensive selection of high-quality parts and <br> accessories.
                    </p>
                    <div class="cs_hero_btn">
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- If we need navigation buttons -->
          <!-- <div class="cs_slider_navigation d-flex cs_row_gap_15 flex-column position-absolute
          cs_zindex_4">
            <div class="cs_swiper_button_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
              <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
              </svg>             
            </div>
            <div class="cs_swiper_button_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
              <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
              </svg>          
            </div>
          </div> -->
          <!-- <div class="cs_hero_shape_1 position-absolute bottom-0 d-flex align-items-end h-100 cs_zindex_1">
            <svg width="434" height="759" viewBox="0 0 434 759" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M240 0H660L430 759H0L240 0Z" fill="url(#paint0_linear_81_287)"/>
              <defs>
              <linearGradient id="paint0_linear_81_287" x1="145" y1="256.5" x2="484" y2="738" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#D9D9D9" stop-opacity="0"/>
                <stop offset="1" stop-color="#926F34"/>
              </linearGradient>
              </defs>
            </svg>            
          </div>
          <div class="cs_hero_shape_2 position-absolute start-0 cs_zindex_1">
            <svg width="572" height="572" viewBox="0 0 572 572" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M572 -6.10352e-05L6.10352e-05 572L1.10293e-05 -1.10293e-05L572 -6.10352e-05Z" fill="url(#paint0_linear_81_258)" fill-opacity="0.7"/>
              <defs>
              <linearGradient id="paint0_linear_81_258" x1="388.254" y1="307.69" x2="-127.973" y2="-227.83" gradientUnits="userSpaceOnUse">
              <stop offset="0.0457759" stop-color="#18191D" stop-opacity="0"/>
              <stop offset="0.514455" stop-color="#FEC63F" stop-opacity="0.35"/>
              </linearGradient>
              </defs>
            </svg>            
          </div> -->
        </div>
      </div>
      <div class="cs_social_btns d-flex flex-column cs_column_gap_15 cs_row_gap_15 cs_transition_5 position-absolute cs_zindex_5 ">
        <a href="https://www.linkedin.com/company/nextwrldsa/" target="_blank" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </section>
    <!-- End Hero -->

    <!-- Animated Text -->
    <div class="cs_moving_wrap background-filled text-uppercase text-white d-flex align-items-center">
      <div class="cs_moving_text cs_fs_30 cs_fs_lg_26 d-flex align-items-center text-nowrap">
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
      </div>
      <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
      </div>
      <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
        <span><img src="{{ asset('assets/img/logo-strip.png') }}"></span>
      </div>
    </div>
    <!-- End Animated Text -->

    <!-- Start About Section -->
    <section class="cs_pt_70 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">ABOUT THE CONFERENCE</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">NEW GLOBAL SPORT CONFERENCE 2024</h2>
                  <p class="m-0">EWCF’s main conference will be the gateway for today and tomorrow’s executives, global leaders, and prime decision-makers into a new global sport and will showcase how esports can create new global opportunities. The NGSC24 will unite top players from sports, esports, gaming, entertainment, technology and beyond, serving as a a content-packed platform bringing together these industries. It carries on the torch of the Next World Forum series and NGSC23, uniting both events under one exclusive banner in 2024.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 cs_mb_lg_55">
            <div class="cs_experience cs_style_1 position-relative">
              <img src="{{ asset('assets/img/about-the-ngsc-conference.jpg') }}" class="cs_mb_5">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start About Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 cs_mb_lg_55">
            <div class="cs_experience cs_style_1 position-relative">
              <a href="https://olympics.com/ioc/news/ioc-announces-olympic-esports-games-to-be-hosted-in-the-kingdom-of-saudi-arabia" target="_blank">
                <img src="{{ asset('assets/img/IMG_3166-1024x572.jpg') }}" class="cs_mb_5">
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">NEW ANNOUNCEMENT</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">OLYMPIC ESPORTS GAMES TO BE HOSTED IN THE KINGDOM OF SAUDI ARABIA</h2>
                  <p class="m-0">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host the inaugural Olympic Esports Games 2025 in the Kingdom of Saudi Arabia. This groundbreaking step follows the IOC’s recent announcement that the IOC Executive Board (EB) has established Olympic Esports Games.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start About Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">THIS YEAR'S THEME</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">THE FUTURE OF FANDOM</h2>
                  <p class="m-0">The New Global Sport Conference (NGSC) unites leaders from esports, gaming, business, sports, and entertainment to explore “The Future of Fandom.” The event will discuss fandom’s impact on business planning, content, IP and media rights, marketing, and community-building. This year, NGSC focuses on how fandom influences society, builds brand equity, and generates revenue through media rights, sponsorships, and merchandise.</p>
                  <p class="mt-2">Sneak peeks of upcoming releases, behind-the-scenes insights, and opportunities to meet creators and stars will elevate this immersive experience, celebrate fandom culture and explore its transformative potential like never before.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 cs_mb_lg_55">
            <div class="cs_experience cs_style_1 position-relative">
              <img src="{{ asset('assets/img/Banner-1000x800-1.jpg') }}" class="cs_mb_5">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start Service Section -->
    <section class="background-filled cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 cs_gray_bg" data-src="{{ asset('assets/img/services_bg.png') }}">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Service List</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">We Provide The Solution <br>For Our Clients</h2>
          </div>
          <div class="cs_section_heading_right">
            <p class="cs_section_text m-0">I have been a loyal customer of this auto parts company for years and I cannot recommend them enough. Their extensive selection of high-quality parts and accessories.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
              <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                  <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.44607 10.4345C7.69334 10.65 8.06841 10.62 8.27881 10.3706L9.70521 8.6801C9.91388 8.43275 9.88255 8.06315 9.63521 7.8544C9.38779 7.64572 9.01818 7.67713 8.80951 7.9244L7.76701 9.15994L7.40154 8.84158C7.15755 8.62893 6.78748 8.65432 6.57482 8.89846C6.36224 9.14244 6.38771 9.51252 6.63177 9.7251L7.44607 10.4345Z" fill="white"/>
                    <path d="M9.63521 18.7069C9.38779 18.4983 9.01818 18.5297 8.80951 18.7769L7.76701 20.0125L7.40154 19.6941C7.15755 19.4815 6.78748 19.5069 6.57482 19.751C6.36224 19.995 6.38771 20.3651 6.63177 20.5776L7.44607 21.2871C7.69334 21.5026 8.06841 21.4726 8.27881 21.2233L9.70521 19.5327C9.91388 19.2854 9.88248 18.9157 9.63521 18.7069Z" fill="white"/>
                    <path d="M9.63521 29.5595C9.38779 29.3508 9.01818 29.3822 8.80951 29.6295L7.76701 30.865L7.40154 30.5467C7.15755 30.334 6.78748 30.3594 6.57482 30.6035C6.36224 30.8475 6.38771 31.2176 6.63177 31.4302L7.44607 32.1396C7.69334 32.3552 8.06841 32.3252 8.27881 32.0758L9.70521 30.3853C9.91388 30.1379 9.88248 29.7682 9.63521 29.5595Z" fill="white"/>
                    <path d="M15.2129 8.30664H27.5983C27.922 8.30664 28.1842 8.04438 28.1842 7.7207C28.1842 7.39703 27.922 7.13477 27.5983 7.13477H15.2129C14.8892 7.13477 14.627 7.39703 14.627 7.7207C14.627 8.04438 14.8892 8.30664 15.2129 8.30664Z" fill="white"/>
                    <path d="M15.2129 11.1606H27.5983C27.922 11.1606 28.1842 10.8984 28.1842 10.5747C28.1842 10.251 27.922 9.98877 27.5983 9.98877H15.2129C14.8892 9.98877 14.627 10.251 14.627 10.5747C14.627 10.8984 14.8892 11.1606 15.2129 11.1606Z" fill="white"/>
                    <path d="M10.7185 4.84326H5.5559C4.6059 4.84326 3.83301 5.61615 3.83301 6.56615V7.72045C3.83301 8.04412 4.09527 8.30639 4.41895 8.30639C4.74262 8.30639 5.00488 8.04412 5.00488 7.72045V6.56615C5.00488 6.26232 5.25207 6.01514 5.5559 6.01514H10.7185C11.0223 6.01514 11.2694 6.26232 11.2694 6.56615V11.7287C11.2694 12.0326 11.0223 12.2797 10.7185 12.2797H5.5559C5.25207 12.2797 5.00488 12.0326 5.00488 11.7287V10.5169C5.00488 10.1933 4.74262 9.931 4.41895 9.931C4.09527 9.931 3.83301 10.1933 3.83301 10.5169V11.7287C3.83301 12.6787 4.6059 13.4515 5.5559 13.4515H10.7185C11.6684 13.4515 12.4413 12.6787 12.4413 11.7287V6.56615C12.4412 5.61615 11.6684 4.84326 10.7185 4.84326Z" fill="white"/>
                    <path d="M10.7185 15.6958H5.5559C4.6059 15.6958 3.83301 16.4687 3.83301 17.4187V22.5813C3.83301 23.5312 4.6059 24.3041 5.5559 24.3041H10.7185C11.6684 24.3041 12.4413 23.5312 12.4413 22.5813V17.4187C12.4412 16.4687 11.6684 15.6958 10.7185 15.6958ZM11.2693 22.5813C11.2693 22.8851 11.0222 23.1322 10.7184 23.1322H5.5559C5.25207 23.1322 5.00488 22.8851 5.00488 22.5813V17.4187C5.00488 17.1149 5.25207 16.8677 5.5559 16.8677H10.7185C11.0223 16.8677 11.2694 17.1149 11.2694 17.4187L11.2693 22.5813Z" fill="white"/>
                    <path d="M10.7185 26.5483H5.5559C4.6059 26.5483 3.83301 27.3212 3.83301 28.2712V33.4338C3.83301 34.3837 4.6059 35.1566 5.5559 35.1566H10.7185C11.6684 35.1566 12.4413 34.3837 12.4413 33.4338V28.2712C12.4412 27.3212 11.6684 26.5483 10.7185 26.5483ZM11.2693 33.4338C11.2693 33.7376 11.0222 33.9847 10.7184 33.9847H5.5559C5.25207 33.9847 5.00488 33.7376 5.00488 33.4338V28.2712C5.00488 27.9674 5.25207 27.7202 5.5559 27.7202H10.7185C11.0223 27.7202 11.2694 27.9674 11.2694 28.2712L11.2693 33.4338Z" fill="white"/>
                    <path d="M36.0414 5.19195C34.5098 4.52484 32.721 5.22773 32.0537 6.7593L31.8784 7.16164V4.14C31.8784 1.85719 30.0212 0 27.7384 0H4.27867C1.99586 0 0.138672 1.85719 0.138672 4.14V35.86C0.138672 38.1428 1.99586 40 4.27867 40H27.7384C30.0212 40 31.8784 38.1428 31.8784 35.86V22.3316C32.1787 21.6423 37.2757 9.94398 37.6087 9.17969C38.2777 7.64445 37.5766 5.86086 36.0414 5.19195ZM21.1896 31.6934H15.213C14.8894 31.6934 14.6271 31.9557 14.6271 32.2794C14.6271 32.603 14.8894 32.8653 15.213 32.8653H20.6816C20.4048 33.5308 20.2655 34.2334 20.2702 34.9561V34.9562L20.2962 38.8281H4.27867C2.64203 38.8281 1.31055 37.4966 1.31055 35.86V4.14C1.31055 2.50336 2.64203 1.17188 4.27867 1.17188H27.7384C29.375 1.17188 30.7065 2.50336 30.7065 4.14V9.85125C29.9661 11.5505 27.8855 16.3256 27.1616 17.9872H15.2131C14.8895 17.9872 14.6272 18.2495 14.6272 18.5731C14.6272 18.8968 14.8895 19.1591 15.2131 19.1591H26.651L25.9182 20.841H15.2131C14.8895 20.841 14.6272 21.1033 14.6272 21.427C14.6272 21.7506 14.8895 22.0129 15.2131 22.0129H25.4076L22.4331 28.8396H15.2131C14.8895 28.8396 14.6272 29.1019 14.6272 29.4255C14.6272 29.7492 14.8895 30.0115 15.2131 30.0115H21.9225L21.1896 31.6934ZM21.4421 34.9483C21.4409 34.7615 21.4532 34.5766 21.4762 34.3937C21.9887 34.617 21.2743 34.3057 24.572 35.7425C24.4537 35.8839 24.3267 36.0188 24.1891 36.1451L21.4669 38.642L21.4421 34.9483ZM30.7065 35.86C30.7065 37.4966 29.375 38.8281 27.7384 38.8281H22.9977L24.9812 37.0088C25.5362 36.4996 25.9702 35.8914 26.2712 35.2008L30.7065 25.0211V35.86ZM25.1968 34.7327C25.1963 34.7337 25.1958 34.7347 25.1953 34.7358L24.0294 34.2278L26.7874 27.8978C26.9166 27.6011 26.7809 27.2559 26.4843 27.1266C26.1875 26.9974 25.8423 27.1331 25.713 27.4297L22.955 33.7597L21.7891 33.2517C21.7896 33.2507 21.7899 33.2496 21.7904 33.2486L30.7481 12.6898L31.9141 13.1977L26.8071 24.9187C26.6779 25.2155 26.8136 25.5607 27.1102 25.69C27.4086 25.8199 27.7529 25.682 27.8815 25.3869L32.9884 13.6658L34.1544 14.1737C34.0119 14.5009 25.3323 34.4216 25.1968 34.7327ZM34.6226 13.0994L31.2162 11.6153L31.7977 10.2808L35.2041 11.7649L34.6226 13.0994ZM36.5344 8.71156L35.6721 10.6905L32.2658 9.20641L33.128 7.22742C33.5371 6.28828 34.6341 5.85711 35.5733 6.26633C36.5145 6.67633 36.9448 7.77 36.5344 8.71156Z" fill="white"/>
                  </svg>                    
                </div>
                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Accounting and Bookkeeping</a></h2>
              </div>
              <p class="cs_mb_24">Services related to financial record-keeping, bookkeeping, preparation.</p>
              <div class="cs_service_thumb position-relative cs_rounded_5">
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
                <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('assets/img/service_1.jpeg') }}"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
              <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_81_338)">
                    <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                    <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                    <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                    <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                    <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                    <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_81_338">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                  </svg>                   
                </div>
                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">IT Support and Consulting</a></h2>
              </div>
              <p class="cs_mb_24">Providing technical support, network setup, software installation.</p>
              <div class="cs_service_thumb position-relative cs_rounded_5">
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
                <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('assets/img/service_2.jpeg') }}"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
              <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_81_360)">
                    <path d="M8.75 26.875C6.3375 26.875 4.375 28.8375 4.375 31.25C4.375 33.6625 6.3375 35.625 8.75 35.625C11.1625 35.625 13.125 33.6625 13.125 31.25C13.125 28.8375 11.1625 26.875 8.75 26.875ZM8.75 34.375C7.02688 34.375 5.625 32.9731 5.625 31.25C5.625 29.5269 7.02688 28.125 8.75 28.125C10.4731 28.125 11.875 29.5269 11.875 31.25C11.875 32.9731 10.4731 34.375 8.75 34.375Z" fill="white"/>
                    <path d="M8.75 29.375C7.71625 29.375 6.875 30.2162 6.875 31.25C6.875 32.2838 7.71625 33.125 8.75 33.125C9.78375 33.125 10.625 32.2838 10.625 31.25C10.625 30.2162 9.78375 29.375 8.75 29.375ZM8.75 31.875C8.40562 31.875 8.125 31.5944 8.125 31.25C8.125 30.9056 8.40562 30.625 8.75 30.625C9.09437 30.625 9.375 30.9056 9.375 31.25C9.375 31.5944 9.09437 31.875 8.75 31.875Z" fill="white"/>
                    <path d="M36.8662 12.7744L38.1488 11.4956L38.1475 11.2344C38.1325 8.83063 36.1656 6.875 33.75 6.875H33.4912L32.23 8.13625C30.6225 7.09375 28.8144 6.33438 26.875 5.93937V4.375C27.9088 4.375 28.75 3.53375 28.75 2.5C28.75 1.46625 27.9088 0.625 26.875 0.625H20.625C19.5912 0.625 18.75 1.46625 18.75 2.5C18.75 3.53375 19.5912 4.375 20.625 4.375V5.93937C18.6906 6.33375 16.8875 7.08938 15.2838 8.12813L14.2138 7.05813L14.0188 6.875H13.76C11.3563 6.875 9.38937 8.83063 9.375 11.2344L9.37375 11.4956L10.6425 12.7612C9.0525 15.2075 8.125 18.1213 8.125 21.25C8.125 21.8738 8.1775 22.5069 8.255 23.1394C7.50125 23.2119 6.85375 23.7156 6.61313 24.4475C6.55125 24.6363 6.41562 24.7838 6.24062 24.8512C6.15875 24.8831 6.0775 24.9163 5.99625 24.9519C5.82562 25.0256 5.62687 25.0175 5.45062 24.9281C4.70812 24.5525 3.81375 24.6956 3.225 25.2844L2.785 25.725C2.19625 26.3131 2.05312 27.2081 2.42875 27.9506C2.51812 28.1269 2.52625 28.3256 2.4525 28.4969C2.4175 28.5775 2.38375 28.6594 2.35188 28.7406C2.28437 28.9156 2.13625 29.0513 1.94687 29.1131C1.15625 29.3731 0.625 30.1069 0.625 30.9387V31.5613C0.625 32.3931 1.15625 33.1269 1.9475 33.3869C2.13625 33.4487 2.28375 33.5844 2.35125 33.7581C2.38313 33.8406 2.41625 33.9225 2.45188 34.0037C2.52563 34.1744 2.51688 34.3731 2.42813 34.5494C2.0525 35.2919 2.19562 36.1869 2.78437 36.775L3.22438 37.2156C3.81312 37.8044 4.7075 37.9469 5.45 37.5719C5.62563 37.4825 5.82437 37.4738 5.99625 37.5481C6.07687 37.5831 6.15875 37.6169 6.24 37.6488C6.415 37.7162 6.55062 37.8644 6.6125 38.0537C6.87313 38.8438 7.60687 39.375 8.43875 39.375H9.06125C9.89313 39.375 10.6269 38.8438 10.8869 38.0525C10.9488 37.8638 11.0844 37.7162 11.2581 37.6488C11.3406 37.6169 11.4225 37.5838 11.5037 37.5481C11.6737 37.4738 11.8731 37.4825 12.0494 37.5719C12.7919 37.9469 13.6869 37.8044 14.275 37.2156L14.7156 36.7756C15.3044 36.1875 15.4475 35.2925 15.0719 34.55C15.0138 34.435 15.0031 34.3119 15.0144 34.1919C17.5994 35.9425 20.5994 36.875 23.75 36.875C32.3656 36.875 39.375 29.8656 39.375 21.25C39.375 18.1275 38.4506 15.2181 36.8662 12.7744ZM34 8.13375C35.525 8.24937 36.7544 9.46688 36.8856 10.99L36.135 11.7387C35.3063 10.6625 34.3412 9.6975 33.2656 8.86875L34 8.13375ZM20 2.5C20 2.15562 20.2806 1.875 20.625 1.875H26.875C27.2194 1.875 27.5 2.15562 27.5 2.5C27.5 2.84437 27.2194 3.125 26.875 3.125H20.625C20.2806 3.125 20 2.84437 20 2.5ZM25.625 4.375V5.74125C25.01 5.6675 24.385 5.625 23.75 5.625C23.115 5.625 22.49 5.6675 21.875 5.74125V4.375H25.625ZM10.6369 10.99C10.7675 9.47 11.9919 8.255 13.5231 8.135L14.2475 8.85938C13.1706 9.68688 12.205 10.6519 11.3756 11.7269L10.6369 10.99ZM15.625 31.5613C15.625 31.8519 15.4394 32.1081 15.1625 32.1994C14.6175 32.3781 14.1875 32.7819 13.9838 33.3069C13.9575 33.3737 13.93 33.4406 13.9019 33.5056C13.6794 34.0181 13.6987 34.6037 13.9563 35.1131C14.0875 35.3725 14.0375 35.685 13.8319 35.8906L13.3913 36.3312C13.1856 36.5375 12.8731 36.5869 12.6137 36.4556C12.1044 36.1981 11.5188 36.1794 11.0069 36.4012C10.9412 36.4294 10.8744 36.4569 10.8063 36.4837C10.2819 36.6875 9.87875 37.1175 9.69938 37.6631C9.60875 37.9394 9.35188 38.125 9.06125 38.125H8.43875C8.14812 38.125 7.89187 37.9394 7.80062 37.6625C7.62187 37.1175 7.21812 36.6875 6.69312 36.4837C6.62625 36.4575 6.55937 36.43 6.49437 36.4019C6.25812 36.2988 6.00625 36.2475 5.75313 36.2475C5.4575 36.2475 5.16125 36.3175 4.88687 36.4556C4.62625 36.5869 4.315 36.5369 4.10938 36.3312L3.66875 35.8906C3.46312 35.685 3.41313 35.3725 3.54437 35.1131C3.80188 34.6037 3.82125 34.0181 3.59875 33.5062C3.57062 33.4406 3.54312 33.3738 3.51625 33.3056C3.3125 32.7812 2.8825 32.3781 2.33688 32.1988C2.06063 32.1088 1.875 31.8519 1.875 31.5613V30.9387C1.875 30.6481 2.06063 30.3919 2.33688 30.3006C2.8825 30.1219 3.3125 29.7181 3.51625 29.1931C3.5425 29.1262 3.57 29.0594 3.59812 28.9944C3.82063 28.4819 3.80125 27.8962 3.54375 27.3869C3.4125 27.1275 3.4625 26.8144 3.66812 26.6088L4.10812 26.1687C4.31375 25.9625 4.62563 25.9125 4.88625 26.0444C5.39563 26.3019 5.9825 26.3212 6.49312 26.0987C6.55937 26.07 6.62625 26.0425 6.69312 26.0169C7.2175 25.8125 7.62125 25.3825 7.80062 24.8375C7.89125 24.5606 8.14812 24.375 8.43875 24.375H9.06125C9.35188 24.375 9.60812 24.5606 9.69938 24.8375C9.87875 25.3825 10.2819 25.8125 10.8063 26.0163C10.8731 26.0425 10.94 26.07 11.0056 26.0981C11.5175 26.3206 12.1038 26.3006 12.6131 26.0437C12.8725 25.9119 13.185 25.9625 13.3913 26.1681L13.8312 26.6081C14.0369 26.8138 14.0869 27.1269 13.9556 27.3862C13.6981 27.8956 13.6788 28.4813 13.9013 28.9931C13.9294 29.0588 13.9569 29.1256 13.9838 29.1937C14.1875 29.7181 14.6175 30.1213 15.1631 30.3006C15.4394 30.3912 15.625 30.6481 15.625 30.9387V31.5613ZM11.9069 20.625C12.0538 17.8225 13.1719 15.2794 14.9363 13.32L16.6794 15.0631L17.5631 14.1794L15.82 12.4363C17.7794 10.6713 20.3225 9.55375 23.125 9.40687V11.875H24.375V9.40687C27.1775 9.55375 29.7206 10.6719 31.68 12.4363L29.9369 14.1794L30.8206 15.0631L32.5638 13.32C34.3288 15.2794 35.4463 17.8225 35.5931 20.625H33.125V21.875H35.5931C35.4463 24.6775 34.3281 27.2206 32.5638 29.18L30.8206 27.4369L29.9369 28.3206L31.68 30.0638C29.7206 31.8288 27.1775 32.9463 24.375 33.0931V30.625H23.125V33.1C20.8713 32.9825 18.7275 32.2306 16.8725 30.9044C16.8631 30.3931 16.655 29.9212 16.3081 29.5762L17.5631 28.3212L16.6794 27.4375L15.2413 28.8756C15.2087 28.8319 15.1694 28.7925 15.1494 28.7419C15.1175 28.6594 15.0844 28.5775 15.0487 28.4963C14.975 28.3256 14.9837 28.1269 15.0725 27.9506C15.4481 27.2081 15.305 26.3131 14.7162 25.725L14.6156 25.625H33.125V24.375H30.625V18.125H26.875V24.375H25.625V14.375H21.875V24.375H20.625V16.875H16.875V24.375H14.375V25.3844L14.275 25.2844C13.7856 24.795 13.0863 24.6187 12.4369 24.7869C12.135 23.83 11.9563 22.8556 11.9031 21.8744H14.375V20.6244L11.9069 20.625ZM18.125 24.375V18.125H19.375V24.375H18.125ZM23.125 24.375V15.625H24.375V24.375H23.125ZM28.125 24.375V19.375H29.375V24.375H28.125ZM23.75 35.625C20.91 35.625 18.2019 34.8037 15.8569 33.2556C16.2469 33.0481 16.5456 32.7131 16.7156 32.315C18.8244 33.665 21.2356 34.375 23.75 34.375C30.9875 34.375 36.875 28.4875 36.875 21.25C36.875 14.0125 30.9875 8.125 23.75 8.125C16.5125 8.125 10.625 14.0125 10.625 21.25C10.625 22.4281 10.7906 23.6013 11.1131 24.7513C11.0138 24.6731 10.9288 24.5756 10.8869 24.4462C10.6763 23.8056 10.1525 23.3412 9.52 23.1862C9.43125 22.5375 9.375 21.8881 9.375 21.25C9.375 13.3237 15.8237 6.875 23.75 6.875C31.6763 6.875 38.125 13.3237 38.125 21.25C38.125 29.1763 31.6763 35.625 23.75 35.625Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_81_360">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                  </svg>                 
                </div>
                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}"  class="inline-block">Marketing and Advertising</a></h2>
              </div>
              <p class="cs_mb_24">Services that help businesses create and execute market strategies.</p>
              <div class="cs_service_thumb position-relative cs_rounded_5">
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
                <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('assets/img/service_3.jpeg') }}"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
              <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                  <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.014 36.1123C21.6634 36.1157 25.2268 35.0038 28.2267 32.9256L34.4602 39.159C35.7357 40.4216 37.7917 40.4164 39.0608 39.1473C40.3299 37.8782 40.3351 35.8222 39.0726 34.5466L32.8391 28.3132C37.5336 21.49 36.9678 12.3444 31.4681 6.15192C25.9684 -0.040542 16.9535 -1.68226 9.62368 2.17377C2.2939 6.02979 -1.45976 14.3887 0.527933 22.4288C2.51562 30.4689 9.7318 36.1159 18.014 36.1123ZM38.1292 35.4899C38.8805 36.2429 38.8805 37.462 38.1292 38.215C37.3669 38.944 36.1658 38.944 35.4034 38.215L29.3061 32.1177C30.3088 31.3083 31.2226 30.3946 32.0319 29.3919L38.1292 35.4899ZM18.014 1.42286C27.2248 1.42286 34.6917 8.88972 34.6917 18.1005C34.6917 27.3112 27.2248 34.7781 18.014 34.7781C8.80319 34.7781 1.33633 27.3113 1.33633 18.1005C1.34664 8.89395 8.80742 1.43317 18.014 1.42286Z" fill="white"/>
                    <path d="M18.0144 33.4437C26.4883 33.4437 33.3578 26.5742 33.3578 18.1003C33.3578 9.62638 26.4883 2.75684 18.0144 2.75684C9.54044 2.75684 2.6709 9.62631 2.6709 18.1003C2.68048 26.5703 9.54434 33.4341 18.0144 33.4437ZM11.3433 30.4164C10.8832 30.1629 10.4378 29.8839 10.0091 29.5805V27.4397H11.3433V30.4164ZM16.6802 32.0427C16.2285 31.9994 15.7843 31.9334 15.346 31.848V26.7726H16.6802V32.0427ZM22.017 31.5204C21.5807 31.6508 21.1359 31.76 20.6828 31.848V22.1029H22.017V31.5204ZM27.3538 28.5131C26.9311 28.8956 26.4856 29.252 26.0196 29.5805V20.1016H27.3538V28.5131ZM18.0144 4.09104C23.4728 4.08469 28.4368 7.253 30.7295 12.2066C33.0223 17.1603 32.2253 22.9949 28.688 27.1522V20.1016C28.688 19.3647 28.0907 18.7674 27.3538 18.7674H26.0196C25.2828 18.7674 24.6854 19.3648 24.6854 20.1016V30.4164C24.2522 30.6503 23.8069 30.8609 23.3512 31.0474V22.1029C23.3512 21.366 22.7539 20.7687 22.017 20.7687H20.6828C19.9459 20.7687 19.3486 21.3661 19.3486 22.1029V32.0427C18.909 32.0841 18.4647 32.1094 18.0144 32.1094V26.7726C18.0144 26.0357 17.417 25.4384 16.6802 25.4384H15.346C14.6091 25.4384 14.0118 26.0358 14.0118 26.7726V31.5197C13.5594 31.3849 13.1141 31.2273 12.6776 31.0474V27.4397C12.6776 26.7028 12.0802 26.1055 11.3434 26.1055H10.0092C9.27232 26.1055 8.67501 26.7028 8.67501 27.4397V28.5123C8.18152 28.0738 7.71943 27.6012 7.2921 27.0981L11.3434 23.0481L12.3988 24.1041C12.9286 24.6079 13.7603 24.6079 14.2901 24.1041L20.6829 17.7113L21.4027 18.4318C21.9324 18.9356 22.7642 18.9356 23.2939 18.4318L26.6868 15.0409V16.0989C26.6868 16.4674 26.9855 16.766 27.3539 16.766C27.7224 16.766 28.021 16.4674 28.021 16.0989V13.4305C28.021 13.0621 27.7224 12.7634 27.3539 12.7634H24.6855C24.3171 12.7634 24.0184 13.0621 24.0184 13.4305C24.0184 13.799 24.3171 14.0976 24.6855 14.0976H25.7429L22.3507 17.4885L21.6288 16.766C21.0991 16.2622 20.2673 16.2622 19.7376 16.766L13.3447 23.1589L12.2893 22.1028C11.7596 21.599 10.9278 21.599 10.3981 22.1028L6.47352 26.0274C3.52219 21.7429 3.19089 16.175 5.61318 11.5707C8.03547 6.96643 12.8117 4.08569 18.0144 4.09104Z" fill="white"/>
                    <path d="M11.3425 16.0992C11.3425 15.7307 11.0438 15.4321 10.6754 15.4321C10.3069 15.4321 10.0083 15.7307 10.0083 16.0992C10.0102 17.6836 11.1247 19.0489 12.6767 19.368V19.4347C12.6767 19.8031 12.9753 20.1018 13.3438 20.1018C13.7122 20.1018 14.0109 19.8031 14.0109 19.4347V19.368C15.5654 19.0524 16.6826 17.6855 16.6826 16.0992C16.6826 14.5129 15.5655 13.1461 14.0109 12.8304V8.8838C14.8076 9.16547 15.3416 9.9173 15.3451 10.7624C15.3451 11.1308 15.6437 11.4295 16.0122 11.4295C16.3806 11.4295 16.6793 11.1308 16.6793 10.7624C16.6773 9.17796 15.5628 7.81269 14.0109 7.49355V7.42687C14.0109 7.05842 13.7122 6.75977 13.3438 6.75977C12.9753 6.75977 12.6767 7.05842 12.6767 7.42687V7.49355C11.1221 7.80919 10.0049 9.17604 10.0049 10.7624C10.0049 12.3487 11.122 13.7155 12.6767 14.0312V17.9785C11.8797 17.6967 11.3457 16.9445 11.3425 16.0992ZM15.3451 16.0992C15.3416 16.9443 14.8077 17.6961 14.0109 17.9778V14.2206C14.8076 14.5023 15.3416 15.2541 15.3451 16.0992ZM11.3425 10.7624C11.346 9.9173 11.8799 9.16547 12.6767 8.8838V12.641C11.8799 12.3593 11.346 11.6075 11.3425 10.7624Z" fill="white"/>
                  </svg>                 
                </div>
                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}"  class="inline-block">Human Resources</a></h2>
              </div>
              <p class="cs_mb_24">Assistance with HR-related tasks such as recruitment, training, performance.</p>
              <div class="cs_service_thumb position-relative cs_rounded_5">
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
                <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="{{ asset('assets/img/service_4.jpeg') }}"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_service_1-info  text-center cs_mt_40 d-flex justify-content-center align-items-center flex-wrap">
          <h4 class="fw-normal m-0">Digital agency services built specifically for your business</h4>
          <a href="{{ url('service') }}" class="cs_btn cs_style_1 cs_fs_16  overflow-hidden cs_fs_16 cs_rounded_25 cs_pl_20 cs_pr_20 cs_pt_7 cs_pb_7 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Find More Services</span></a>
        </div>
      </div>
    </section>
    <!-- End Service Section -->

    <!-- Start About Section -->
    <section class="cs_pt_135 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 cs_mb_lg_55">
            <div class="cs_experience cs_style_1 position-relative">
              <div class="cs_experience_thumb">
                <img src="{{ asset('assets/img/experience_img.jpeg') }}" alt="Thumb" class="position-relative cs_zindex_3 cs_rounded_15">
                <div class="cs_experience_shape"><img src="{{ asset('assets/img/experience_shape_1.png') }}" alt="Shape" class="moving_x"></div>
              </div>
              <div class="cs_experience_box background-filled text-center bg-white cs_rounded_10 position-absolute bottom-0 end-0 cs_zindex_3 d-flex flex-column justify-content-center align-items-center" data-src="{{ asset('assets/img/experience_bg.jpeg') }}">
                <img src="{{ asset('assets/img/experience_icon.svg') }}" alt="Icon" class="cs_mb_5">
                <h3 class="text-white cs_fs_60 cs_fs_lg_46 fw-bold lh_1 mb-0 d-flex justify-content-between">
                  <span data-count-to="40" class="odometer"></span>
                  <span class="fw-light">+</span>
                </h3>
                <h2 class="cs_fs_18 fw-normal text-white m-0">Work Experience</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">About Us</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Get Ready for Success with <span class="text-accent">Bizmax</span> Your Path to Growth.</h2>
                  <p class="m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses. Creating visual content, such as logos, brochures, infographics, and other branding materials.</p>
                </div>
              </div>
              <div class="cs_progressbar cs_style_1 cs_mb_20">
                <div class="cs_progressbar_heading d-flex justify-content-between align-items-center cs_mb_8">
                  <h3 class="fw-medium m-0 cs_fs_18">Web development</h3>
                  <p class="cs_fs_14 cs_lh_base m-0">90%</p>
                </div>
                <div class="cs_progress cs_rounded_8 overflow-hidden" data-progress="90">
                  <div class="cs_progress_in bg-accent cs_rounded_8 h-100 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"></div>
                </div>
              </div><!-- .cs_progressbar -->
              <div class="row cs_mb_15">
                <div class="col-lg-6">
                  <div class="cs_about-icon-box position-relative cs_mb_25">
                    <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                    <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Accounting and Bookkeeping</h3>
                    <p class="m-0">Services related to financial record-keeping, bookkeeping.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_about-icon-box position-relative cs_mb_25">
                    <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                    <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Human Resources (HR) Consulting</h3>
                    <p class="m-0">Assistance with HR-related tasks such as recruitment.</p>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center cs_row_gap_20 cs_column_gap_30 cs_column_gap_lg_20 flex-wrap">
                <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                <a href="https://www.youtube.com/embed/VStvZjykQ00" class="cs_video_open d-flex align-items-center">
                  <span class="cs_player_btn cs_width_45 cs_height_45 rounded-circle d-flex align-items-center justify-content-center text-white bg-primary position-relative cs_pl_5">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.71401 16C1.61636 16 1.51868 15.9748 1.43054 15.9246C1.25251 15.8231 1.14258 15.6339 1.14258 15.4285V0.570579C1.14258 0.365193 1.25251 0.176009 1.43054 0.0744495C1.61022 -0.026561 1.82844 -0.0243301 2.00475 0.0783627L14.5762 7.50735C14.7503 7.6106 14.8569 7.79755 14.8569 7.99957C14.8569 8.20159 14.7503 8.38855 14.5762 8.49179L2.00475 15.9207C1.9149 15.9732 1.81443 16 1.71401 16ZM2.28544 1.57172V14.4274L13.1621 7.99957L2.28544 1.57172Z" fill="white"/>
                    </svg>   
                  </span>
                  <span class="cs_ml_15">Watch the video</span>               
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_section_shape-1 position-absolute semi_rotate">
        <svg width="182" height="177" viewBox="0 0 182 177" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M94.4478 96.1115C106.99 105.211 120.6 111.159 132.748 112.86C132.823 112.871 132.894 112.876 132.967 112.886L150.387 27.5688C151.002 24.552 147.98 22.0838 145.148 23.2887L63.8438 57.8735C67.5196 70.1011 78.6592 84.6548 94.4478 96.1115Z" fill="#888888" fill-opacity="0.2"/>
          <path d="M128.155 120.487C115.612 118.057 102.053 111.863 89.5833 102.815C72.3806 90.3334 60.5954 75.0018 56.1891 61.1295L14.8513 78.7143C11.6218 80.0876 11.7968 84.724 15.1212 85.8483L74.9037 106.09C78.4203 107.281 81.3895 109.706 83.2572 112.915L115.015 167.46C116.78 170.492 121.358 169.74 122.061 166.301L131.308 121.013C130.265 120.863 129.215 120.692 128.155 120.487Z" fill="#888888" fill-opacity="0.2"/>
          <path d="M129.41 114.012C116.866 111.583 103.307 105.387 90.8381 96.3405C61.4995 75.0532 47.8833 45.4701 59.84 28.9897C71.7975 12.512 104.146 16.278 133.483 37.5651C143.082 44.5285 151.409 52.7615 157.564 61.3736C158.895 63.2352 158.464 65.8208 156.603 67.1511C154.742 68.4799 152.156 68.0495 150.827 66.1896C145.184 58.2942 137.505 50.7138 128.621 44.2672C103.894 26.326 75.466 21.5559 66.5447 33.8531C57.6235 46.1491 70.9766 71.6938 95.7041 89.6352C108.246 98.7348 121.848 104.686 134.005 106.383C145.234 107.955 153.677 105.705 157.78 100.049C162.059 94.1524 160.568 86.183 158.563 80.5345C157.799 78.3788 158.926 76.0123 161.081 75.2472C163.236 74.4823 165.604 75.6089 166.369 77.7657C170.142 88.3972 169.474 98.04 164.484 104.915C158.497 113.168 147.265 116.603 132.859 114.587C131.719 114.43 130.568 114.237 129.41 114.012Z" fill="#888888" fill-opacity="0.2"/>
        </svg>          
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start Latest Project -->
    <section class="bg-gray cs_pt_135">
      <div class="cs_project_slider">
        <div class="container">
          <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15 cs_mb_60 cs_mb_lg_40">
            <div class="cs_section_heading_in">
              <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Latest Project</h3>
              <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Take a look our <br>Completed Projects</h2>
            </div>
            <div class="cs_section_heading_right">
              <div class="d-flex cs_column_gap_15 justify-content-lg-end justify-content-start">
                <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                    <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
                  </svg>             
                </div>
                <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                    <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
                  </svg>          
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_slider_activate">
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_1.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_2.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_3.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_4.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_1.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_2.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_3.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="{{ asset('assets/img/portfolio_4.jpeg') }}"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Latest Project -->

    <!-- Start Why Choose Us -->
    <section class="position-relative cs_iconbox_2_wrap cs_pt_135 cs_pt_lg_75 cs_pb_100 cs_pb_lg_40 overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-xl-6">
            <div class="position-relative cs_zindex_3">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Why Choose Us</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 text-white">Developing a <span class="text-accent">design that <br>is easy</span> to use and <br>navigate</h2>
                  <p class="text-white m-0">Providing legal advice, contract drafting, compliance assistance, intellectual <br> property protection, and other legal support for businesses. Creating visual <br> content, such as logos, brochures, infographics.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40">
                    <div class="cs_iconbox_icon d-flex align-items-center justify-content-center cs_height_70 cs_width_70 cs_rounded_10 flex-none cs_mr_20 bg-accent cs_transition_4 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36.8436 1.9563H3.15638C1.41593 1.9563 0 3.37223 0 5.11268V27.3739C0 29.1144 1.41593 30.5303 3.15638 30.5303H14.5176V36.2336H10.2438C9.74407 36.2336 9.33882 36.6387 9.33882 37.1386C9.33882 37.6384 9.74407 38.0435 10.2438 38.0435H29.7561C30.2558 38.0435 30.6611 37.6384 30.6611 37.1386C30.6611 36.6387 30.2558 36.2336 29.7561 36.2336H25.4824V30.5303H36.8435C38.5839 30.5303 39.9999 29.1144 39.9999 27.3739V5.11268C40 3.37223 38.5841 1.9563 36.8436 1.9563ZM3.15638 3.76625H36.8436C37.5861 3.76625 38.19 4.37024 38.19 5.11268V24.8078H1.80995V5.11268C1.80995 4.37024 2.41394 3.76625 3.15638 3.76625ZM23.6725 36.2336H16.3275V30.5303H23.6725V36.2336ZM36.8436 28.7204H3.15638C2.41394 28.7204 1.80995 28.1164 1.80995 27.3739V26.6177H38.19V27.3739C38.19 28.1164 37.5861 28.7204 36.8436 28.7204Z" fill="white"/>
                        <path d="M13.944 19.3833H26.0566C26.5563 19.3833 26.9616 18.9782 26.9616 18.4784V10.0957C26.9616 9.59583 26.5563 9.19067 26.0566 9.19067H13.944C13.4443 9.19067 13.0391 9.59583 13.0391 10.0957V18.4784C13.0391 18.9781 13.4443 19.3833 13.944 19.3833ZM14.849 11.0006H25.1516V17.5734H14.849V11.0006Z" fill="white"/>
                        <path d="M28.738 11.0006H29.3716C29.8714 11.0006 30.2766 10.5955 30.2766 10.0957C30.2766 9.59583 29.8714 9.19067 29.3716 9.19067H28.738C28.2383 9.19067 27.833 9.59583 27.833 10.0957C27.833 10.5955 28.2382 11.0006 28.738 11.0006Z" fill="white"/>
                        <path d="M26.0563 8.31902C26.5561 8.31902 26.9613 7.91386 26.9613 7.41404V6.78047C26.9613 6.28065 26.5561 5.87549 26.0563 5.87549C25.5566 5.87549 25.1514 6.28065 25.1514 6.78047V7.41404C25.1514 7.91386 25.5565 8.31902 26.0563 8.31902Z" fill="white"/>
                        <path d="M28.738 19.3834H29.3716C29.8714 19.3834 30.2766 18.9783 30.2766 18.4785C30.2766 17.9786 29.8714 17.5735 29.3716 17.5735H28.738C28.2383 17.5735 27.833 17.9786 27.833 18.4785C27.833 18.9783 28.2382 19.3834 28.738 19.3834Z" fill="white"/>
                        <path d="M26.0563 20.2549C25.5566 20.2549 25.1514 20.66 25.1514 21.1599V21.7934C25.1514 22.2933 25.5566 22.6984 26.0563 22.6984C26.5561 22.6984 26.9613 22.2933 26.9613 21.7934V21.1599C26.9613 20.66 26.5561 20.2549 26.0563 20.2549Z" fill="white"/>
                        <path d="M10.6286 11.0006H11.2623C11.762 11.0006 12.1673 10.5955 12.1673 10.0957C12.1673 9.59583 11.762 9.19067 11.2623 9.19067H10.6286C10.1289 9.19067 9.72363 9.59583 9.72363 10.0957C9.72363 10.5955 10.1289 11.0006 10.6286 11.0006Z" fill="white"/>
                        <path d="M13.944 8.31902C14.4438 8.31902 14.849 7.91386 14.849 7.41404V6.78047C14.849 6.28065 14.4438 5.87549 13.944 5.87549C13.4443 5.87549 13.0391 6.28065 13.0391 6.78047V7.41404C13.0391 7.91386 13.4443 8.31902 13.944 8.31902Z" fill="white"/>
                        <path d="M10.6286 19.3834H11.2623C11.762 19.3834 12.1673 18.9783 12.1673 18.4785C12.1673 17.9786 11.762 17.5735 11.2623 17.5735H10.6286C10.1289 17.5735 9.72363 17.9786 9.72363 18.4785C9.72363 18.9783 10.1289 19.3834 10.6286 19.3834Z" fill="white"/>
                        <path d="M13.944 22.6984C14.4438 22.6984 14.849 22.2933 14.849 21.7934V21.1599C14.849 20.66 14.4438 20.2549 13.944 20.2549C13.4443 20.2549 13.0391 20.66 13.0391 21.1599V21.7934C13.0391 22.2933 13.4443 22.6984 13.944 22.6984Z" fill="white"/>
                      </svg>                                    
                    </div>
                    <div>
                      <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">Digital agency services</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40">
                    <div class="cs_iconbox_icon d-flex align-items-center justify-content-center cs_height_70 cs_width_70 cs_rounded_10 flex-none cs_mr_20 bg-accent cs_transition_4 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_81_544)">
                        <path d="M39.1734 1.5156C39.1376 1.35251 39.0563 1.19738 38.9295 1.07058C38.8027 0.943877 38.6476 0.862423 38.4845 0.826673C34.4271 -0.135122 30.2842 -0.258028 26.4114 0.459857C26.4098 0.460129 26.4081 0.460491 26.4064 0.460762C25.9304 0.549185 25.458 0.650279 24.9907 0.764044C21.6828 1.56918 18.6142 3.01553 15.9643 5.00293C15.9218 5.02981 15.8816 5.06013 15.8443 5.09344C14.9868 5.74498 14.1735 6.45382 13.4113 7.21605C10.2697 10.3577 8.03857 14.3618 6.9593 18.7953C5.95632 22.9152 5.9413 27.4034 6.91196 31.808L0.2651 38.4549C-0.0883215 38.8083 -0.088412 39.3814 0.2651 39.7349C0.441766 39.9116 0.673458 40 0.90506 40C1.13666 40 1.36836 39.9116 1.54502 39.7349L8.19197 33.088C12.5967 34.0585 17.0848 34.0435 21.2047 33.0407C25.6382 31.9615 29.6424 29.7304 32.784 26.5887C34.9728 24.3999 36.7197 21.7924 37.9429 18.9127C37.9679 18.8656 37.989 18.816 38.0054 18.7643C38.5093 17.5562 38.9216 16.3009 39.236 15.0094C40.2755 10.7394 40.2538 6.0737 39.1734 1.5156ZM27.4801 2.1246C30.362 1.67244 33.397 1.70575 36.4652 2.25484L27.4801 11.2399V2.1246ZM14.6913 8.49597C14.9684 8.21875 15.2519 7.95022 15.5421 7.68957V10.3272C15.5421 10.8269 15.9473 11.2322 16.4472 11.2322C16.9471 11.2322 17.3522 10.8269 17.3522 10.3272V6.22991C19.8185 4.44805 22.6406 3.18451 25.6699 2.47712V13.0501L17.3522 21.3678V13.7198C17.3522 13.2201 16.9471 12.8148 16.4472 12.8148C15.9473 12.8148 15.5421 13.2201 15.5421 13.7198V23.1779L8.45018 30.2697C6.96744 21.9836 9.24581 13.9415 14.6913 8.49597ZM31.504 25.3087C26.0586 30.7542 18.0165 33.0326 9.73019 31.5497L21.886 19.3939H35.7228C34.6504 21.5779 33.2376 23.5752 31.504 25.3087ZM36.5174 17.5838H23.6962L37.7452 3.53485C38.6283 8.47008 38.1772 13.3187 36.5174 17.5838Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_81_544">
                        <rect width="40" height="40" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                                 
                    </div>
                    <div>
                      <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">Creative digital agency</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40">
                    <div class="cs_iconbox_icon d-flex align-items-center justify-content-center cs_height_70 cs_width_70 cs_rounded_10 flex-none cs_mr_20 bg-accent cs_transition_4 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.9115 4.33891V0.904977C27.9115 0.405249 27.5064 0 27.0065 0H1.52509C1.02528 0 0.620117 0.405249 0.620117 0.904977V35.7798C0.620117 36.2795 1.02528 36.6848 1.52509 36.6848H1.6393C2.05478 38.5783 3.74446 40 5.76084 40H22.7709C24.7873 40 26.4769 38.5783 26.8923 36.6848H27.0065C27.5064 36.6848 27.9115 36.2795 27.9115 35.7798V29.0186C34.3129 28.5536 39.3792 23.1967 39.3792 16.6788C39.3792 10.161 34.3129 4.80398 27.9115 4.33891ZM27.0065 27.2415C26.5067 27.2415 26.1016 27.6468 26.1016 28.1465V34.8749H12.3034C11.8036 34.8749 11.3984 35.2802 11.3984 35.7799C11.3984 36.2796 11.8036 36.6849 12.3034 36.6849H25.0041C24.6455 37.5665 23.7798 38.19 22.7709 38.19H5.76084C4.75179 38.19 3.88618 37.5665 3.52754 36.6848H8.80111C9.30093 36.6848 9.70609 36.2795 9.70609 35.7798C9.70609 35.2801 9.30093 34.8748 8.80111 34.8748H2.43007V1.80995H26.1016V5.21113C26.1016 5.71086 26.5067 6.11611 27.0065 6.11611C32.8308 6.11611 37.5693 10.8545 37.5693 16.6788C37.5693 22.5032 32.8309 27.2415 27.0065 27.2415Z" fill="white"/>
                        <path d="M27.0065 7.9812C26.5067 7.9812 26.1016 8.38645 26.1016 8.88618V24.4714C26.1016 24.9712 26.5067 25.3764 27.0065 25.3764C31.8024 25.3764 35.7041 21.4747 35.7041 16.6788C35.7041 11.883 31.8024 7.9812 27.0065 7.9812ZM27.9115 23.5073V9.85043C31.2833 10.2949 33.8941 13.1877 33.8941 16.6788C33.8941 20.17 31.2834 23.0628 27.9115 23.5073Z" fill="white"/>
                        <path d="M20.3347 25.6729C19.9431 25.6729 19.6096 25.9215 19.4836 26.2697C19.1355 26.3957 18.8867 26.7292 18.8867 27.1208C18.8867 27.6205 19.2919 28.0258 19.7917 28.0258H20.3347C20.8345 28.0258 21.2397 27.6205 21.2397 27.1208V26.5778C21.2397 26.078 20.8345 25.6729 20.3347 25.6729Z" fill="white"/>
                        <path d="M16.7933 26.2158H15.7653C15.2655 26.2158 14.8604 26.6211 14.8604 27.1208C14.8604 27.6205 15.2655 28.0258 15.7653 28.0258H16.7933C17.2931 28.0258 17.6983 27.6205 17.6983 27.1208C17.6983 26.6211 17.2931 26.2158 16.7933 26.2158Z" fill="white"/>
                        <path d="M12.7669 26.2158H11.739C11.2391 26.2158 10.834 26.6211 10.834 27.1208C10.834 27.6205 11.2391 28.0258 11.739 28.0258H12.7669C13.2667 28.0258 13.6719 27.6205 13.6719 27.1208C13.6719 26.6211 13.2667 26.2158 12.7669 26.2158Z" fill="white"/>
                        <path d="M9.0481 26.2694C8.92204 25.9213 8.58855 25.6726 8.19697 25.6726C7.69715 25.6726 7.29199 26.0779 7.29199 26.5776V27.1206C7.29199 27.6203 7.69715 28.0255 8.19697 28.0255H8.73996C9.23977 28.0255 9.64493 27.6203 9.64493 27.1206C9.64493 26.729 9.39615 26.3955 9.0481 26.2694Z" fill="white"/>
                        <path d="M8.19697 19.8089C8.69679 19.8089 9.10195 19.4037 9.10195 18.9039V17.781C9.10195 17.2812 8.69679 16.876 8.19697 16.876C7.69715 16.876 7.29199 17.2812 7.29199 17.781V18.9039C7.29199 19.4037 7.69715 19.8089 8.19697 19.8089Z" fill="white"/>
                        <path d="M8.19697 15.4105C8.69679 15.4105 9.10195 15.0052 9.10195 14.5055V13.3825C9.10195 12.8828 8.69679 12.4775 8.19697 12.4775C7.69715 12.4775 7.29199 12.8828 7.29199 13.3825V14.5055C7.29199 15.0053 7.69715 15.4105 8.19697 15.4105Z" fill="white"/>
                        <path d="M8.19697 24.2074C8.69679 24.2074 9.10195 23.8021 9.10195 23.3024V22.1794C9.10195 21.6797 8.69679 21.2744 8.19697 21.2744C7.69715 21.2744 7.29199 21.6797 7.29199 22.1794V23.3024C7.29199 23.8022 7.69715 24.2074 8.19697 24.2074Z" fill="white"/>
                        <path d="M8.73996 8.65918H8.19697C7.69715 8.65918 7.29199 9.06443 7.29199 9.56416V10.1071C7.29199 10.6069 7.69715 11.0121 8.19697 11.0121C8.58855 11.0121 8.92204 10.7634 9.0481 10.4153C9.39615 10.2892 9.64493 9.95574 9.64493 9.56416C9.64493 9.06434 9.23977 8.65918 8.73996 8.65918Z" fill="white"/>
                        <path d="M12.7669 8.65918H11.739C11.2391 8.65918 10.834 9.06443 10.834 9.56416C10.834 10.0639 11.2391 10.4691 11.739 10.4691H12.7669C13.2667 10.4691 13.6719 10.0639 13.6719 9.56416C13.6719 9.06443 13.2667 8.65918 12.7669 8.65918Z" fill="white"/>
                        <path d="M16.7933 8.65918H15.7653C15.2655 8.65918 14.8604 9.06443 14.8604 9.56416C14.8604 10.0639 15.2655 10.4691 15.7653 10.4691H16.7933C17.2931 10.4691 17.6983 10.0639 17.6983 9.56416C17.6983 9.06443 17.2931 8.65918 16.7933 8.65918Z" fill="white"/>
                        <path d="M20.3347 8.65918H19.7917C19.2919 8.65918 18.8867 9.06443 18.8867 9.56416C18.8867 9.95574 19.1355 10.2893 19.4836 10.4153C19.6096 10.7634 19.9431 11.0121 20.3347 11.0121C20.8345 11.0121 21.2397 10.6069 21.2397 10.1071V9.56416C21.2397 9.06434 20.8345 8.65918 20.3347 8.65918Z" fill="white"/>
                        <path d="M20.3347 16.876C19.8348 16.876 19.4297 17.2812 19.4297 17.781V18.9039C19.4297 19.4037 19.8348 19.8089 20.3347 19.8089C20.8345 19.8089 21.2396 19.4037 21.2396 18.9039V17.781C21.2396 17.2812 20.8345 16.876 20.3347 16.876Z" fill="white"/>
                        <path d="M20.3347 12.4775C19.8348 12.4775 19.4297 12.8828 19.4297 13.3825V14.5055C19.4297 15.0052 19.8348 15.4105 20.3347 15.4105C20.8345 15.4105 21.2396 15.0052 21.2396 14.5055V13.3825C21.2396 12.8827 20.8345 12.4775 20.3347 12.4775Z" fill="white"/>
                        <path d="M20.3347 21.2744C19.8348 21.2744 19.4297 21.6797 19.4297 22.1794V23.3024C19.4297 23.8021 19.8348 24.2074 20.3347 24.2074C20.8345 24.2074 21.2396 23.8021 21.2396 23.3024V22.1794C21.2396 21.6797 20.8345 21.2744 20.3347 21.2744Z" fill="white"/>
                      </svg>                                                         
                    </div>
                    <div>
                      <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">Super expert developers</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40">
                    <div class="cs_iconbox_icon d-flex align-items-center justify-content-center cs_height_70 cs_width_70 cs_rounded_10 flex-none cs_mr_20 bg-accent cs_transition_4 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                      <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.2012 35.1591V36.3801C16.2012 36.8799 16.6064 37.2851 17.1061 37.2851C17.6059 37.2851 18.0111 36.8799 18.0111 36.3801V35.1591C18.0111 34.6593 17.6059 34.2542 17.1061 34.2542C16.6064 34.2542 16.2012 34.6593 16.2012 35.1591Z" fill="white"/>
                        <path d="M31.1066 4.58742H30.5865V3.17611C30.5865 1.4248 29.1617 0 27.4104 0H4.75042C2.99911 0 1.57431 1.4248 1.57431 3.17611V4.58751H1.10517C0.605444 4.58751 0.200195 4.99267 0.200195 5.49249C0.200195 5.99231 0.605444 6.39747 1.10517 6.39747H1.57431V7.80878C1.57431 9.56009 2.99911 10.9849 4.75042 10.9849H27.4105C29.1618 10.9849 30.5866 9.56009 30.5866 7.80878V6.39738H31.1067C31.5044 6.39738 31.9902 6.81819 31.9902 7.30932V11.7605C31.9902 12.3235 31.5037 12.9028 30.9492 13.0001L18.7389 15.1427C17.3157 15.3925 16.2008 16.72 16.2008 18.165V21.1112H13.6185C13.3526 21.1112 13.1 21.2281 12.9282 21.431C12.7562 21.6338 12.6821 21.9021 12.7257 22.1644L13.4967 26.8063V37.3982C13.4967 38.8329 14.6638 40 16.0985 40H18.1132C19.5479 40 20.715 38.8329 20.715 37.3982V26.8062L21.486 22.1643C21.5295 21.902 21.4555 21.6338 21.2835 21.431C21.1117 21.2281 20.8592 21.1111 20.5932 21.1111H18.011V18.1649C18.011 17.6019 18.4974 17.0226 19.052 16.9253L31.2622 14.7828C32.6854 14.533 33.8003 13.2055 33.8003 11.7605V7.30932C33.8 5.85937 32.5414 4.58742 31.1066 4.58742ZM28.7766 7.80878C28.7766 8.56208 28.1638 9.17493 27.4104 9.17493H4.75042C3.99712 9.17493 3.38427 8.56208 3.38427 7.80878V3.17611C3.38427 2.42281 3.99703 1.80995 4.75042 1.80995H27.4105C28.1638 1.80995 28.7767 2.42281 28.7767 3.17611V7.80878H28.7766ZM18.9171 26.5834C18.909 26.6325 18.9049 26.682 18.9049 26.7317V37.3982C18.9049 37.8348 18.5497 38.19 18.113 38.19H16.0983C15.6616 38.19 15.3064 37.8348 15.3064 37.3982V27.6367H16.19C16.6897 27.6367 17.0949 27.2315 17.0949 26.7317C17.0949 26.2319 16.6897 25.8267 16.19 25.8267H15.1686L14.6861 22.9212H19.5254L18.9171 26.5834Z" fill="white"/>
                      </svg>                              
                    </div>
                    <div>
                      <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">Creating a user friendly design</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6"></div>
        </div>
      </div>
      <div class="cs_iconbox_left-img position-absolute bottom-0 start-0 h-100 background-filled" data-src="{{ asset('assets/img/why_choose_us_left_img.jpeg') }}"></div>
      <div class="cs_iconbox_right-img position-absolute cs_zindex_1 bottom-0 end-0 background-filled" data-src="{{ asset('assets/img/why_choose_us_right_img.jpeg') }}"></div>
      <div class="cs_iconbox_logo position-absolute semi_rotate">
        <svg width="191" height="197" viewBox="0 0 191 197" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M100.397 107.26C113.305 117.648 127.237 124.564 139.602 126.736C139.678 126.749 139.75 126.756 139.825 126.77L155.856 32.5327C156.421 29.2004 153.306 26.3917 150.454 27.6622L68.5886 64.126C72.5569 77.7763 84.1472 94.1815 100.397 107.26Z" fill="#888888" fill-opacity="0.2"/>
          <path d="M134.283 136.497C121.573 133.528 107.766 126.385 95.0023 116.124C77.395 101.968 65.2019 84.7963 60.4863 69.405L19.093 87.8249C15.8591 89.2634 16.1251 94.3774 19.5029 95.6938L80.2458 119.392C83.8188 120.786 86.8631 123.528 88.8105 127.109L121.922 187.961C123.762 191.345 128.37 190.622 129.013 186.848L137.475 137.15C136.42 136.96 135.357 136.747 134.283 136.497Z" fill="#888888" fill-opacity="0.2"/>
          <path d="M135.873 127.406C123.172 124.44 109.376 117.306 96.6244 107.06C66.6205 82.949 52.3161 50.0723 64.0597 32.2106C75.8041 14.3519 108.507 19.2476 138.51 43.3581C148.326 51.2452 156.884 60.5001 163.258 70.1219C164.637 72.2018 164.251 75.0376 162.4 76.4586C160.549 77.878 157.932 77.3443 156.556 75.2663C150.711 66.4452 142.82 57.9237 133.733 50.622C108.446 30.3012 79.6787 24.3911 70.9164 37.7191C62.1543 51.0456 76.1154 79.4713 101.404 99.7925C114.23 110.099 128.065 116.965 140.36 119.115C151.717 121.106 160.191 118.825 164.221 112.695C168.424 106.304 166.766 97.4981 164.635 91.2345C163.822 88.8441 164.914 86.2656 167.073 85.4735C169.232 84.6816 171.642 85.9765 172.455 88.3683C176.466 100.157 175.977 110.755 171.077 118.207C165.196 127.151 153.932 130.671 139.362 128.118C138.21 127.918 137.045 127.679 135.873 127.406Z" fill="#888888" fill-opacity="0.2"/>
        </svg>       
      </div>
    </section>
    <!-- End Why Choose Us -->

    <!-- Start Testimonial Section -->
    <section class="background-filled cs_pt_140 cs_pt_lg_75 cs_pb_135 cs_pb_lg_75" data-src="{{ asset('assets/img/testimonial_bg.jpeg') }}">
      <div class="cs_testimonial_slider cs_gap_30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 cs_mb_lg_40">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_30">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Testimonial</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">What They’re Saying?</h2>
                  <p class="m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses.</p>
                </div>
              </div>
              <div class="d-flex cs_column_gap_15">
                <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                    <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
                  </svg>             
                </div>
                <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                    <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
                  </svg>          
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="cs_slider_activate">
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_1.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4.5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Darlene Robertson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web design</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_2.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Carol McCarthy</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Product manager</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_3.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Peter Johnson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web developer</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_4.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Max Lawrence</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Digital marketing</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_1.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4.5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Darlene Robertson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web design</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_2.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Carol McCarthy</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Product manager</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_3.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="4">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Peter Johnson</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Web developer</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_testimonial cs_style_1 cs_pt_20">
                    <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                      <div class="cs_testimonial_img cs_mb_15"><img src="{{ asset('assets/img/avatar_4.png') }}" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                      <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                      <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                      <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Max Lawrence</h3>
                      <p class="m-0 cs_fs_14 cs_lh_base">Digital marketing</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Team Section -->
    <section class="cs_pb_115 cs_pb_lg_55">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Meet Our Team Member</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Meet the professional team <br>behind the success</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="{{ asset('assets/img/team_member_1.jpeg') }}" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Ralph Edwards</h2>
                <p class="text-white m-0">Web designer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="{{ asset('assets/img/team_member_2.jpeg') }}" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Wade Warren</h2>
                <p class="text-white m-0">Marketing Coordinator</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="{{ asset('assets/img/team_member_3.jpeg') }}" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Jane Cooper</h2>
                <p class="text-white m-0">Creative Designer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- Start Contact Section  -->
    <section class="background-filled overflow-hidden cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80" data-src="{{ asset('assets/img/cta_bg.jpeg') }}">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_40">
              <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Contact With Us</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 text-white">Let’s Work Together?</h2>
                <p class="text-white m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses.</p>
              </div>
            </div>
            <div class="d-flex align-items-center cs_mb_30">
              <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M31.6128 24.7786C30.7939 23.9259 29.8062 23.47 28.7593 23.47C27.7209 23.47 26.7247 23.9175 25.8721 24.7701L23.2043 27.4295C22.9848 27.3113 22.7653 27.2015 22.5543 27.0918C22.2503 26.9398 21.9633 26.7963 21.7185 26.6443C19.2196 25.0572 16.9486 22.9888 14.7705 20.3126C13.7152 18.9787 13.006 17.8559 12.4911 16.7162C13.1833 16.083 13.8249 15.4245 14.4497 14.7914C14.6861 14.555 14.9224 14.3102 15.1588 14.0738C16.9317 12.3009 16.9317 10.0046 15.1588 8.23172L12.8541 5.92698C12.5924 5.66527 12.3222 5.39512 12.0689 5.12497C11.5624 4.60155 11.0305 4.06124 10.4818 3.5547C9.6629 2.74425 8.6836 2.31369 7.65364 2.31369C6.62368 2.31369 5.62749 2.74425 4.78327 3.5547C4.77482 3.56315 4.77482 3.56315 4.76638 3.57159L1.89601 6.46729C0.815398 7.5479 0.199112 8.86489 0.0640356 10.3929C-0.138579 12.8581 0.587457 15.1544 1.14465 16.6571C2.5123 20.3464 4.55533 23.7655 7.60299 27.4295C11.3007 31.8448 15.7498 35.3314 20.832 37.7881C22.7738 38.7083 25.3655 39.7974 28.2612 39.9831C28.4385 39.9916 28.6242 40 28.7931 40C30.7433 40 32.3811 39.2993 33.6643 37.9063C33.6727 37.8894 33.6896 37.881 33.6981 37.8641C34.1371 37.3322 34.6436 36.851 35.1755 36.3361C35.5385 35.9899 35.9099 35.6269 36.2729 35.247C37.1087 34.3774 37.5477 33.3644 37.5477 32.326C37.5477 31.2791 37.1003 30.2745 36.2476 29.4303L31.6128 24.7786ZM34.6351 33.6683C34.6267 33.6683 34.6267 33.6767 34.6351 33.6683C34.3059 34.0229 33.9682 34.3437 33.6052 34.6983C33.0564 35.2217 32.4993 35.7704 31.9758 36.3867C31.1232 37.2985 30.1185 37.729 28.8015 37.729C28.6749 37.729 28.5398 37.729 28.4132 37.7206C25.9058 37.5602 23.5758 36.5809 21.8282 35.7451C17.0499 33.4319 12.8541 30.1479 9.36742 25.9858C6.48861 22.5161 4.56377 19.308 3.28898 15.8635C2.50385 13.7614 2.21682 12.1236 2.34345 10.5787C2.42787 9.59093 2.80777 8.77203 3.50848 8.07132L6.3873 5.19251C6.80097 4.80416 7.23997 4.5931 7.67052 4.5931C8.20239 4.5931 8.63294 4.91391 8.9031 5.18406C8.91154 5.19251 8.91998 5.20095 8.92842 5.20939C9.4434 5.6906 9.93305 6.18869 10.448 6.72056C10.7097 6.99071 10.9799 7.26086 11.25 7.53946L13.5548 9.8442C14.4497 10.7391 14.4497 11.5664 13.5548 12.4613C13.31 12.7061 13.0736 12.951 12.8288 13.1873C12.1196 13.9134 11.4442 14.5888 10.7097 15.2473C10.6929 15.2641 10.676 15.2726 10.6675 15.2895C9.9415 16.0155 10.0766 16.7247 10.2285 17.2059C10.237 17.2312 10.2454 17.2565 10.2539 17.2818C10.8533 18.7339 11.6975 20.1016 12.9807 21.7309L12.9892 21.7394C15.3192 24.6097 17.7759 26.8469 20.4859 28.5607C20.832 28.7802 21.1866 28.9575 21.5243 29.1264C21.8282 29.2783 22.1153 29.4218 22.3601 29.5738C22.3938 29.5907 22.4276 29.616 22.4614 29.6329C22.7484 29.7764 23.0186 29.8439 23.2972 29.8439C23.9979 29.8439 24.4369 29.4049 24.5804 29.2614L27.4677 26.3742C27.7547 26.0871 28.2106 25.741 28.7424 25.741C29.2659 25.741 29.6964 26.0702 29.9581 26.3573C29.9666 26.3657 29.9666 26.3657 29.975 26.3742L34.6267 31.0259C35.4963 31.887 35.4963 32.7734 34.6351 33.6683Z" fill="white"/>
                  <path d="M21.6168 9.51496C23.8287 9.88642 25.838 10.9333 27.442 12.5373C29.046 14.1413 30.0844 16.1506 30.4643 18.3625C30.5572 18.9197 31.0384 19.308 31.5872 19.308C31.6547 19.308 31.7138 19.2996 31.7813 19.2911C32.4061 19.1898 32.8197 18.5989 32.7184 17.9741C32.2625 15.2979 30.9962 12.8581 29.0629 10.9248C27.1296 8.99154 24.6898 7.7252 22.0136 7.26932C21.3889 7.16801 20.8064 7.58168 20.6966 8.19797C20.5869 8.81425 20.9921 9.41365 21.6168 9.51496Z" fill="white"/>
                  <path d="M39.9542 17.6449C39.2028 13.238 37.126 9.22793 33.9349 6.03675C30.7437 2.84557 26.7336 0.768768 22.3267 0.017406C21.7104 -0.0923436 21.1279 0.32977 21.0182 0.946056C20.9169 1.57078 21.3305 2.1533 21.9553 2.26305C25.8894 2.92999 29.4773 4.79573 32.3308 7.64078C35.1843 10.4943 37.0416 14.0822 37.7086 18.0163C37.8014 18.5735 38.2826 18.9619 38.8314 18.9619C38.8989 18.9619 38.958 18.9534 39.0256 18.945C39.6418 18.8521 40.0639 18.2612 39.9542 17.6449Z" fill="white"/>
                </svg>                  
              </div>
              <div>
                <p class="text-accent cs_mb_7">Have Any Question?</p>
                <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">+ 070 4531 9507 </h2>
              </div>
            </div>
            <div class="d-flex align-items-center cs_mb_30">
              <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M34.1388 5H5.86125C4.63868 5.00132 3.46656 5.48758 2.60207 6.35207C1.73758 7.21656 1.25132 8.38868 1.25 9.61125V30.3888C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3888V9.61125C38.7487 8.38868 38.2624 7.21656 37.3979 6.35207C36.5334 5.48758 35.3613 5.00132 34.1388 5ZM5.86125 7.5H34.1388C34.6985 7.50066 35.2351 7.72331 35.6309 8.1191C36.0267 8.51489 36.2493 9.05151 36.25 9.61125V10.5675L20 21.0138L3.75 10.5675V9.61125C3.75066 9.05151 3.97331 8.51489 4.3691 8.1191C4.76489 7.72331 5.30151 7.50066 5.86125 7.5ZM34.1388 32.5H5.86125C5.30151 32.4993 4.76489 32.2767 4.3691 31.8809C3.97331 31.4851 3.75066 30.9485 3.75 30.3888V13.54L19.3237 23.5512C19.5254 23.681 19.7602 23.75 20 23.75C20.2398 23.75 20.4746 23.681 20.6763 23.5512L36.25 13.54V30.3888C36.2493 30.9485 36.0267 31.4851 35.6309 31.8809C35.2351 32.2767 34.6985 32.4993 34.1388 32.5Z" fill="white"/>
                </svg>               
              </div>
              <div>
                <p class="text-accent cs_mb_7">Send Email</p>
                <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">pixcelsthemes@gmail.com</h2>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.0002 0C12.0123 0 5.51367 6.49859 5.51367 14.4864C5.51367 24.3995 18.4777 38.9526 19.0296 39.5673C19.548 40.1447 20.4532 40.1437 20.9707 39.5673C21.5227 38.9526 34.4866 24.3995 34.4866 14.4864C34.4865 6.49859 27.988 0 20.0002 0ZM20.0002 36.6976C15.6371 31.5149 8.12242 21.29 8.12242 14.4866C8.12242 7.93703 13.4507 2.60875 20.0002 2.60875C26.5496 2.60875 31.8779 7.93703 31.8779 14.4865C31.8778 21.2902 24.3643 31.5133 20.0002 36.6976Z" fill="white"/>
                  <path d="M20.0004 7.19797C15.9814 7.19797 12.7119 10.4676 12.7119 14.4865C12.7119 18.5054 15.9815 21.775 20.0004 21.775C24.0192 21.775 27.2887 18.5054 27.2887 14.4865C27.2887 10.4676 24.0192 7.19797 20.0004 7.19797ZM20.0004 19.1662C17.4199 19.1662 15.3207 17.067 15.3207 14.4865C15.3207 11.906 17.42 9.80672 20.0004 9.80672C22.5807 9.80672 24.68 11.906 24.68 14.4865C24.68 17.067 22.5807 19.1662 20.0004 19.1662Z" fill="white"/>
                </svg>                              
              </div>
              <div>
                <p class="text-accent cs_mb_7">Address</p>
                <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">Yewtree Cottage, Kings Pyon, <br>HR4 8PZ</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 offset-xl-1 cs_mt_lg_55">
            <div class="cs_contact_wrap position-relative">
              <form action="#" class="cs_contact_form bg-white cs_pt_64 cs_pl_80 cs_pr_80 cs_pb_80 cs_pl_lg_30 cs_pr_lg_30 position-relative cs_rounded_20" data-src="{{ asset('assets/img/contact_bg_pattern.svg') }}">
                <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_30">
                  <div class="cs_section_heading_in">
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Contact Us</h2>
                  </div>
                </div>
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-gray" type="text" placeholder="Your Name">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-gray" type="email" placeholder="Your Email">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_30 bg-gray" placeholder="Message here ..." cols="30" rows="4"></textarea>
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Submit Now</span></button>
              </form>
              <div class="cs_contact_image d-none d-xl-block wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s"><img src="{{ asset('assets/img/contact_img_1.png') }}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section  -->
    <!-- Start Brands -->
    <div class="cs_pt_140 cs_pt_lg_80">
      <div class="container">
        <div class="cs_brands d-flex justify-content-xl-between align-items-center cs_column_gap_25 cs_row_gap_25 flex-wrap justify-content-center">
          <div class="cs_brand"><img src="{{ asset('assets/img/brand_1.svg') }}" alt="Brand"></div>
          <div class="cs_brand"><img src="{{ asset('assets/img/brand_2.svg') }}" alt="Brand"></div>
          <div class="cs_brand"><img src="{{ asset('assets/img/brand_3.svg') }}" alt="Brand"></div>
          <div class="cs_brand"><img src="{{ asset('assets/img/brand_4.svg') }}" alt="Brand"></div>
          <div class="cs_brand"><img src="{{ asset('assets/img/brand_5.svg') }}" alt="Brand"></div>
        </div>
      </div>
    </div>
    <!-- End Brands -->
    <!-- Start Blog Section -->
    <section class="cs_pt_115 cs_pt_lg_75 cs_pb_110 cs_pb_lg_50">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Find The Blogs</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Find Out Latest News <br>and Articles</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="{{ asset('assets/img/post_1.jpeg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_40">
                  <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul>
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                  <div class="cs_post_subtitle">We provide a range of digital marketing lutions including website design.</div>
                </div>
                <a href="{{ url('blog-details') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">Read More</span>
                  <div class="cs_post_btn-icon d-flex cs_transition_4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9999 0.224976C6.52011 0.224976 1.63131 4.16368 0.485006 9.52707C-0.0876941 12.207 0.298106 15.0567 1.57581 17.4816C2.80551 19.8153 4.82151 21.7014 7.23351 22.7703C9.74241 23.8824 12.6227 24.0762 15.2597 23.3178C17.8037 22.5864 20.0594 20.9811 21.5951 18.8262C24.806 14.3211 24.3767 7.99288 20.5991 3.95608C18.3851 1.59028 15.2405 0.224976 11.9999 0.224976ZM17.6486 12.6291L14.4386 15.9165C13.6259 16.749 12.3413 15.4878 13.1507 14.6592L14.7704 13.0005H7.09461C6.54951 13.0005 6.09471 12.5454 6.09471 12.0006C6.09471 11.4558 6.54981 11.0007 7.09461 11.0007H14.732L13.0802 9.34918C12.2594 8.52838 13.532 7.25548 14.3528 8.07628L17.6411 11.3643C17.9897 11.7126 17.993 12.2766 17.6486 12.6291Z" fill="currentColor"/>
                    </svg>  
                  </div>                
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="{{ asset('assets/img/post_2.jpeg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_40">
                  <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul>
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">Introducing the latest tech features for you</a></h2>
                  <div class="cs_post_subtitle">We provide a range of digital marketing lutions including website design.</div>
                </div>
                <a href="{{ url('blog-details') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">Read More</span>
                  <div class="cs_post_btn-icon d-flex cs_transition_4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9999 0.224976C6.52011 0.224976 1.63131 4.16368 0.485006 9.52707C-0.0876941 12.207 0.298106 15.0567 1.57581 17.4816C2.80551 19.8153 4.82151 21.7014 7.23351 22.7703C9.74241 23.8824 12.6227 24.0762 15.2597 23.3178C17.8037 22.5864 20.0594 20.9811 21.5951 18.8262C24.806 14.3211 24.3767 7.99288 20.5991 3.95608C18.3851 1.59028 15.2405 0.224976 11.9999 0.224976ZM17.6486 12.6291L14.4386 15.9165C13.6259 16.749 12.3413 15.4878 13.1507 14.6592L14.7704 13.0005H7.09461C6.54951 13.0005 6.09471 12.5454 6.09471 12.0006C6.09471 11.4558 6.54981 11.0007 7.09461 11.0007H14.732L13.0802 9.34918C12.2594 8.52838 13.532 7.25548 14.3528 8.07628L17.6411 11.3643C17.9897 11.7126 17.993 12.2766 17.6486 12.6291Z" fill="currentColor"/>
                    </svg>  
                  </div>                
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="{{ asset('assets/img/post_3.jpeg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_40">
                  <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul>
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">The creative studio programm coming soon</a></h2>
                  <div class="cs_post_subtitle">We provide a range of digital marketing lutions including website design.</div>
                </div>
                <a href="{{ url('blog-details') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">Read More</span>
                  <div class="cs_post_btn-icon d-flex cs_transition_4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9999 0.224976C6.52011 0.224976 1.63131 4.16368 0.485006 9.52707C-0.0876941 12.207 0.298106 15.0567 1.57581 17.4816C2.80551 19.8153 4.82151 21.7014 7.23351 22.7703C9.74241 23.8824 12.6227 24.0762 15.2597 23.3178C17.8037 22.5864 20.0594 20.9811 21.5951 18.8262C24.806 14.3211 24.3767 7.99288 20.5991 3.95608C18.3851 1.59028 15.2405 0.224976 11.9999 0.224976ZM17.6486 12.6291L14.4386 15.9165C13.6259 16.749 12.3413 15.4878 13.1507 14.6592L14.7704 13.0005H7.09461C6.54951 13.0005 6.09471 12.5454 6.09471 12.0006C6.09471 11.4558 6.54981 11.0007 7.09461 11.0007H14.732L13.0802 9.34918C12.2594 8.52838 13.532 7.25548 14.3528 8.07628L17.6411 11.3643C17.9897 11.7126 17.993 12.2766 17.6486 12.6291Z" fill="currentColor"/>
                    </svg>  
                  </div>                
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    @endsection