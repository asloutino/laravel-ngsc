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
              <a class="cs_site_branding" href="{{url('/')}}">
                <img src="{{ asset('assets/img/NGCS-Conference-Logo-white.svg') }}" alt="Logo">
              </a>
            </div>
            <div class="cs_main_header_center">
              <div class="cs_nav cs_primary_font fw-medium">
                <ul class="cs_nav_list fw-medium text-uppercase">
                  <li><a href="/#about-the-conference">About the Conference</a></li>
                  <li><a href="/#conference-highlights">Highlights</a></li>
                  <li><a href="/#speakers">Speakers</a></li>
                  <li><a href="/#topics">Topics</a></li>
                  <li><a href="/#news">News</a></li>
                  <li><a href="/#contact-us">Contact Us</a></li>
                  <li class="lang-switch">
                    <a class="en" href="{{url('/')}}">EN</a> | <a class="ar" href="{{url('ar')}}">AR</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <div class="cs_toolbox">
                <div class="cs_hero_btn">
                  <a href="/#apply-to-join" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_10 cs_pr_10 cs_pt_10 cs_pb_10 overflow-hidden"><span>APPLY TO JOIN</span></a>
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
              <div class="cs_hero cs_style_1 d-flex justify-content-center background-filled position-relative overflow-hidden">
                <figure class="cs_swiper_parallax_bg" data-src="{{ asset('assets/img/EWC_KV_MASTER_FINAL_RGB.jpg') }}">
                  <img src="{{ asset('assets/img/hero_slider_1.jpeg') }}" alt="Slider" class="cs_entity_img">
                  <!-- <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div> -->
                </figure>
                <div class="container text-center">
                  <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                    <h1 class="text-white cs_mb_12 cs_fs_50 cs_fs_lg_36">THE FUTURE OF FANDOM</h1>
                    <h2 class="text-white cs_mb_0 fw-normal cs_fs_16">Four Seasons Hotel Riyadh</h2>
                    <p class="text-white cs_fs_14 cs_mb_20">August 24-25, 2024</p>
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
        <a href="https://www.instagram.com/ngsc_sa" target="_blank" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://x.com/ngsc_sa" target="_blank" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-x"></i></a>
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
    <section class="cs_pt_70 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="about-the-conference">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 cs_mb_lg_55 ngsc-conference-bg">
            <div class="cs_experience cs_style_1 position-relative">
            </div>
          </div>
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
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start About Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="conference-highlights">
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
          <div class="col-lg-6 cs_mb_lg_55 ngsc-about-bg">
            <div class="cs_experience cs_style_1 position-relative">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start 4 Boxes Section -->
    <section class="cs_pb_80 cs_pb_lg_55 clipped-boxes">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Join the 2-day program with thought leaders covering key esports challenges & opportunities</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Maximize your networking opportunities with 800+ expected attendees</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Engage with key figures behind KSA's Vision 2030 and its National Gaming and Esports strategy</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Experience Riyadh as a global hub for esports, sports, gaming and entertainment business</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End 4 Boxes Section -->

    <!-- Modal HRH-Prince-Faisal-bin-Bandar -->
    <div class="modal fade speaker-modal" id="HRH-Prince-Faisal-bin-Bandar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/HRH-Prince-Faisal-bin-Bandar.png" alt="Member">
            </div>
            <div class="col-lg-8">
            <h2 class="modal-title fs-5" id="staticBackdropLabel">HRH Prince Faisal bin Bandar bin Sultan Al Saud</h2>
              <p class="text-white m-0">Chairman of the Saudi Esports Federation</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>His Royal Highness Prince Faisal bin Bandar bin Sultan Al Saud is the Chairman of the Saudi Esports Federation (SEF) and Arab Esports Federation, positions he has held since their establishment in 2017. He is also the president of the International Esports Federation, and the Vice Chairman of Savvy Games Group since its establishment.</p>
            <p>Under his leadership, the federation quickly grew the range of its activities to become the leading Saudi entity in charge of growing the National Gaming and Esports Strategy. Initially, the federation focused on providing gamers with platforms to become athletes. Now, SEF lives at the center of the Saudi esports ecosystem, to open doors and enable all that want to grow it.</p>
            <p>His vision for the federation is to create an impact that generates a ripple effect, evolving sectors and services that were traditionally thought to be unrelated to esports.</p>
            <p>As a result, today the Saudi Esports Federation is seen as the subject matter expert in gaming and esports that is coordinating government action, guiding investors, and providing gamers with platforms to compete and socialize in Saudi Arabia.</p>
            <p>HRH Prince Faisal is a believer in the power of esports and aims to show the world how it can be a force for good. In 2020, he led the federation in designing the first-ever partnerships between UN-humanitarian aid organizations and a gaming event, Gamers Without Borders, which became the world’s largest gaming esports charitable event.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Andrew-Chen -->
    <div class="modal fade speaker-modal" id="Andrew-Chen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Andrew-Chen.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Andrew Chen</h2>
              <p class="text-white m-0">General Partner, Andreessen Horowitz</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Andrew Chen is a General Partner for A16Z GAMES, focused on the intersection of tech and gaming — this includes AI, studios, infrastructure, and consumer apps.</p>
            <p>Andrew is a prolific writer and for the past decade, he’s written hundreds of essays at andrewchen.com on the topics of startups and user growth. He is the author of the best-selling business book THE COLD START PROBLEM, published by Harper Business, which explores how new startups launch and scale by leveraging network effects. Prior to joining a16z, Andrew led the Rider Growth teams at Uber, and worked at a number of venture-backed startups.</p>
            <p>Andrew holds a B.S. in Applied Mathematics from the University of Washington.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Greg-Norman -->
    <div class="modal fade speaker-modal" id="Greg-Norman" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Greg-Norman.png" alt="Member">
            </div>
            <div class="col-lg-8">
            <h2 class="modal-title fs-5" id="staticBackdropLabel">Greg Norman</h2>
              <p class="text-white m-0">CEO, Liv Golf</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Joe-Marsh -->
    <div class="modal fade speaker-modal" id="Joe-Marsh" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Joe-Marsh.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Joe Marsh</h2>
              <p class="text-white m-0">CEO, T1 Entertainment & Sports</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Joe Marsh is the CEO of T1 Entertainment & Sports, where he has driven the organization to new heights. Under his leadership, T1’s League of Legends team won the 2023 World Championship and the inaugural League of Legends Championship at the Esports World Cup. Recognized twice by Forbes as one of the Top 10 most valuable esports companies globally, T1 continues to lead the industry. Marsh has spearheaded initiatives like the T1 Base Camp, T1 Cafe & Arena, and the T1 Esports Academy, significantly shaping the esports landscape in South Korea and beyond. T1 operates 8 teams across 6 major games and collaborates with renowned brands including Nike, Mercedes Benz, Samsung, Red Bull, and Ralph Lauren. With over 19 years in sports and entertainment, Marsh’s journey from intern to executive highlights his dedication and influence in the industry. He holds a Marketing degree from Millersville University and an MBA in Finance, Analytics, and Strategic Management from Villanova University.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Len-Blavantik -->
    <div class="modal fade speaker-modal" id="Len-Blavantik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Len-Blavantik.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Sir Leonard Blavatnik</h2>
              <p class="text-white m-0">Founder, Access Industries</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Sir Leonard Blavatnik is among the world's most accomplished businessmen and prominent philanthropists. A dual US-UK citizen, he is the founder of Access Industries, a privately held investment firm with a $35 billion portfolio, which includes industrial giants LyondellBasell and Calpine. In 2016, Sir Leonard launched DAZN, now the world’s leading sports entertainment platform offering live and on-demand events, gaming, ticketing and e-commerce in more than 200 markets. He is also overseeing the digital transformation of the music industry as the majority shareholder of Warner Music Group and one of the first investors in Spotify.  In 2017, he was knighted by Queen Elizabeth II for his service to philanthropy and was appointed Chevalier of the French Legion d’Honneur for his support of education in 2013. Born in Odesa, Ukraine, Sir Leonard emigrated to the US in 1978. He earned his MS from Columbia University in 1981 and his MBA from Harvard Business School in 1989.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Lisa-Cosmas -->
    <div class="modal fade speaker-modal" id="Lisa-Cosmas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Lisa-Cosmas.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Lisa Cosmas Hanson</h2>
              <p class="text-white m-0">CEO, Niko Partners</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Lisa Cosmas Hanson is President and CEO of Niko Partners, a premier market research and consulting firm providing local research with global perspective on the Asia and MENA games market and their consumers. Lisa founded Niko Partners in 2002 and has since honed her expertise on the Chinese and Southeast Asian, East Asian, South Asian and MENA games industry that has benefitted Niko’s clients: Companies that are global leaders in game development &amp; publishing, game services, hardware, investments, and global governments. Lisa appears regularly in the media such as The New York Times, Business Week, Forbes, The Wall Street Journal, Dow Jones, Reuters, BBC, Bloomberg, Financial Times, VentureBeat, PocketGamer, GamesIndustry, Channel News Asia, and more. She is based in the US but travels to Asia and the Middle East regularly to give presentations at industry events and engage with companies and gamers.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Magnus-Carlsen -->
    <div class="modal fade speaker-modal" id="Magnus-Carlsen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Magnus-Carlsen.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Magnus Carlsen</h2>
              <p class="text-white m-0">World Chess Champion</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Magnus Carlsen, born on 30th of November 1990, in Tonsberg, Norway, is a chess prodigy and the highest-rated player in history. Achieving Grandmaster status at just 13, Carlsen became the World Chess Champion in 2013 and successfully defended his title until 2021, when he chose not to compete further for the classical title. He has dominated the world of chess for more than a decade, being ranked number 1 since 2010, and has won multiple World Championships across all disciplines, including classical, rapid, and blitz chess.</p>
            <p>Carlsen’s innovative approach and unparalleled strategic thinking have revolutionized the game. In recent years, Carlsen has significantly impacted the online chess scene, dominating online tournaments and engaging a global audience through digital platforms. His involvement in events like the Meltwater Champions Chess Tour has brought competitive chess to new heights in the digital age.</p>
            <p>Magnus Carlsen is more than a champion; he is chess’ only true superstar. Time Magazine has recognized him as one of the world’s 100 most influential people. His participation in this conference underscores his commitment to the evolution of chess as an esports, highlighting his vision for the future of the game. Carlsen’s engagement in promoting chess education worldwide and his presence at the conference make him an inspiring figure for both aspiring players and seasoned enthusiasts.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Maya-Rogers -->
    <div class="modal fade speaker-modal" id="Maya-Rogers" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Maya-Rogers.png" alt="Member">
            </div>
            <div class="col-lg-8">
            <h2 class="modal-title fs-5" id="staticBackdropLabel">Maya Rogers</h2>
              <p class="text-white m-0">CEO, Tetris</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Maya Rogers is CEO of Tetris, where she leads all worldwide business initiatives of the Tetris brand, one of the leading and most distinctive video game brands and franchises in the world with a history that spans 40 years. This includes game development, global licensing, marketing, brand management, merchandising, and IP enforcement.</p>
            <p>Under Maya’s leadership, Tetris remains one of the most beloved games by fans worldwide with the introduction of top ranked licensee titles including Tetris 99, Tetris Effect: Connected, the Puyo Puyo Tetris series and more. She has also led the expansion of Tetris as a lifestyle brand, which today has more than 90 licensees and promotional partners globally, who now offer innovative Tetris-branded games, consumer products and experiences, including apparel, toys, décor, novelties and more.</p>
            <p>Prior to heading Tetris, Maya steered cross-culturalization and development efforts for Tetris Online China, Sony Computer Entertainment America and American Honda. Maya is also a Founding Partner of Blue Startups, Hawaiʻi’s first venture accelerator, which helps early stage startups accelerate their businesses with investments and mentoring. Since 2014, Blue Startups has invested in over 110 companies, attracting over $500 million in follow-on funding. Blue Startups is currently ranked Top 20 accelerator in the U.S.</p>
            <p>Maya currently serves on the boards of the Smithsonian Asian Pacific American Center, American Red Cross Hawaiʻi Chapter, Women’s Fund of Hawaiʻi and the Chamber of Commerce Hawaiʻi. She is also a national council member of the Tiffany Circle, a Red Cross women’s philanthropist organization, and member of the U.S.-Japan council, an educational organization that contributes to strengthening U.S. Japan relations.</p>
            <p>Maya holds a BS in Business Administration from Pepperdine University and an Executive MBA from Pepperdine Graziadio School of Business and Management.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal RJ-Cutler -->
    <div class="modal fade speaker-modal" id="RJ-Cutler" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/RJ-Cutler.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">R.J. Cutler</h2>
              <p class="text-white m-0">Emmy Winning Documentary Filmmaker</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>R.J. Cutler is an award-winning documentary filmmaker who has directed such films as A Perfect Candidate, The September Issue, BELUSHI, Billie Eilish: The World’s A Little Blurry, and the upcoming Martha and Elton John: Never Too Late. He has produced such films as The War Room, Thin, Listen to Me Marlon and The Disappearance of Shere Hite. Cutler is the founder of This Machine Filmworks, an LA-based production company specializing in the development and production of premium documentary content. This Machine is a part of Sony Non-Fiction Television. Cutler’s work has been nominated for an Academy Award and he is the recipient of three Emmys, two Peabody Awards, two Cinema Eye Awards and two Television Academy Honor awards, among others. In 2021, R.J. received the Critic’s Choice Pennebaker Award for Lifetime Achievement in Documentary Film. R.J. lives in Los Angeles with his wife Jane Cha Cutler, their children Maddie, Max and Penny and their dog Dexter.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ralf-Reichert -->
    <div class="modal fade speaker-modal" id="Ralf-Reichert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Ralf-Reichert.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Ralf Reichert</h2>
              <p class="text-white m-0">CEO, Esports World Cup Foundation</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Ralf grew up as a native gamer with a passion for competition in the physical world as much as the digital. In the late 90s, he founded SK Gaming with his brothers, Tim and Benjamin, as one of the first esports clubs, and competed at the highest level - which subsequently made him fall in love with the industry. Excited to build this industry, Ralf and his team co-founded ESL, and embarked on the quest to build the largest stages for the new sport that turn athletes into stars worldwide. What was intended to be a quick win evolved into a lifelong journey. ESL has since become the largest esports brand, and company culminating in a billion-dollar transaction in 2022 to form ESL Faceit Group - EFG. Ralf has served as Chairman at EFG, on the mission to create worlds beyond gameplay, where esports and gaming collide. In October 2023, Ralf took on the role of CEO at the Esports World Cup Foundation with a mandate to elevate esports to one of the world's premier sports, while expanding the Foundation as a driving force in its development.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Songyee-Yoon -->
    <div class="modal fade speaker-modal" id="Songyee-Yoon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Songyee-Yoon.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Dr. Songyee Yoon</h2>
              <p class="text-white m-0">Managing Partner, Principal Venture Partners</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Songyee Yoon is a visionary leader, and investor and author in the AI and gaming  industry, with over 20 years of experience in developing and executing innovative  strategies for global online game companies. After graduating from the Korea Advanced  Institute of Science and Technology, Songyee went on to earn her Ph.D. from MIT in  Computational Neuroscience. Her strong belief in the concept of “play” as a crucible for  innovation eventually led her to NCSOFT, a leading global video game developer and  publisher, where she served as president and chief strategy officer. In this role, she led  the AI transformation of the company, applying AI for game development and various  aspects of business operations. She also oversaw the company's growth from a 350- person company to a global organization across seven countries in Asia, Europe, and  North America, driving strategic initiatives in monetization, marketing, branding,  business development, licensing, ESG, and education. Songyee brings a unique lens to  bridging countries’ approaches to technology and ethics and is an involved figure in the  international business community. While a member of South Korea’s Presidential  Advisory Council for Science and Technology, Songyee served under two presidents.  She is a member of the MIT Corporation and served as an advisory board member of  the Center for Asia Pacific Policy, where she continued to explore social impacts of AI,  equity and ethical sides of technology. She also serves on the board of trustees for the  Carnegie Endowment for International Peace and the Asian Art Museum. She was  named a Young Global Leader by the World Economic Forum, elected member of the  National Academy of Engineering of Korea, and one of the 50 Women to Watch in  Business by the Wall Street Journal. Songyee’s latest book, Push Play, explores the  significance of play on innovation, drawing lessons from games, medicine, human  resources and other industries.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Toshimoto-Mitomo -->
    <div class="modal fade speaker-modal" id="Toshimoto-Mitomo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Toshimoto-Mitomo.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Toshimoto Mitomo</h2>
              <p class="text-white m-0">Executive Deputy President and CSO, Sony Group Corporation</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Toshimoto Mitomo joined Sony Group Corporation (former Sony Corporation) in 1985 and currently its Executive Deputy President and CSO in charge of Intellectual Property, Business & Technology Strategy, Business Development, Business Incubation Platform and Mobility Business. In these roles, Mitomo is responsible for mid-to-long term business development for the future growth of Sony and Sony’s global IP strategies, technology standardization activities. In addition, Mitomo heads Sony Innovation Fund which is Sony’s corporate venture capital as Senior Investment Executive.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Anna-Rozwandowicz -->
    <div class="modal fade speaker-modal" id="Anna-Rozwandowicz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Anna-Rozwandowicz.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Anna Rozwandowicz</h2>
              <p class="text-white m-0">CEO, The Story Mob</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Anna Rozwandowicz is the Founder and CEO of The Story Mob, a leading international consultancy for gaming culture, immersive entertainment and esports. In her role, she advises global sports and entertainment brands, publishers, esports Clubs and their athletes on impactful, authentic communications with gaming fans. Prior to founding the agency in 2018, Anna served as VP of Communications at EFG. There, she led worldwide communications efforts for major tournaments and secured unprecedented mainstream media coverage for the world's fastest-growing sport. With offices in Los Angeles and London, The Story Mob has worked with over 100 global gaming, sports, and entertainment brands. Anna is also an advisor for the Cybersmile Foundation, a mentor for esports startups at leAD Sports, and a speaker on gaming culture and communications.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Brian-Ward -->
    <div class="modal fade speaker-modal" id="Brian-Ward" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Brian-Ward.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Brian Ward</h2>
              <p class="text-white m-0">CEO, Savvy Games Group</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Brian is the CEO of Savvy Games Group, a Riyadh-based games and esports company with a mission to lead investment and long-term growth of the industry.  Under his leadership, in just over two years Savvy has become the world’s largest esports company and tenth-largest games publisher, with 3,800 employees in 22 countries, including several award-winning teams and intellectual properties.</p>
            <p>Brian has nearly 30 years of studio and operations experience, including senior positions at Electronic Arts, Microsoft, and Activision Blizzard.  While leading worldwide studios at Activision, he managed all development and more than a dozen studio acquisitions – tripling capacity, quadrupling revenue, and posting industry-leading margins.  Games he helped lead have won more than 300 Game of The Year and 1,400 Editor’s Choice and Outstanding Achievement awards, and include six #1 entertainment franchises, with lifetime revenues of more than $35 billion.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Jann-Mardenborough -->
    <div class="modal fade speaker-modal" id="Jann-Mardenborough" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Jann-Mardenborough.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Jann Mardenborough</h2>
              <p class="text-white m-0">Professional Racing Driver</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Jann’s journey from virtual racing to motorsport excellence exemplifies determination and innovation. His career began in the digital world of Gran Turismo, where his exceptional talent caught the attention of scouts, leading to a historic victory at the 2011 GT Academy and a place on the Nissan racing team.</p>
            <p>Jann’s achievements include competing in the 24 Hours of Le Mans and the GT500 class in Japan, constantly pushing the limits of what is possible, and aiming now for the Hypercar Class. He is also a pioneering figure in motorsport technology, contributing to the Nissan Formula E Team as a development driver.</p>
            <p>As a speaker, Jann offers valuable insights into virtual and real-world racing, technological evolution in motorsport, and perseverance.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Jens-Hilgers -->
    <div class="modal fade speaker-modal" id="Jens-Hilgers" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Jens-Hilgers.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Jens Hilgers</h2>
              <p class="text-white m-0">General Partner & Co-Founder, BITKRAFT Ventures</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Maha-Abouelenein -->
    <div class="modal fade speaker-modal" id="Maha-Abouelenein" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Maha-Abouelenein.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Maha Abouelenein</h2>
              <p class="text-white m-0">CEO, Digital and Savvy</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Maha Abouelenein is an American Egyptian with more than 30 years of global communications experience advising global corporate giants, startups, governments, CEOS & high-net-worth individuals. She is the CEO of Digital & Savvy, a strategic communications consulting firm with offices in the USA and Dubai.</p>
            <p>A sought-after strategist & speaker, Maha is an expert on personal branding, reputation management, modern communications and the transformational power of storytelling. She is the former Head of Global Communications & Public Policy at Google and Founding Managing Director of Weber Shandwick in MENA. She worked in Promotions & Sports Marketing at General Mills before becoming an entrepreneur.</p>
            <p>Maha is on the Global Board of Directors of the Associated Press & hosts the “Savvy Talk” podcast. For more, visit: digitalandsavvy.com</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Mathilde-Pignol -->
    <div class="modal fade speaker-modal" id="Mathilde-Pignol" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Mathilde-Pignol.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Mathilde Pignol</h2>
              <p class="text-white m-0">Co-Founder and CCO, Roboto Games</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Mathilde is Co-Founder & Chief Creative Officer of Roboto Games, her second games company. In her role, she oversees company strategy as well as the design and art of their next title, Stormforge. Mathilde is originally from France but moved to the US as a teenager. She holds a Bachelors in Computer Science and Psychology and a Masters in UX Design from Carnegie Mellon University. After graduating, she started her first company, ZipZapPlay, where she made games played by millions of people. After the acquisition of the company by PopCap Games, she co-ran the PopCap San Francisco studio for Electronic Arts. More than anything, Mathilde loves making games, the perfect intersection of technology, art, and design.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Nate-Morley -->
    <div class="modal fade speaker-modal" id="Nate-Morley" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Nate-Morley.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Nate Morley</h2>
              <p class="text-white m-0">Founder of Works Collective</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Nate Morley is the founder of Works Collective, the agency behind the brand identities for the Esports World Cup, FIFA World Cup 2026, FIFA Women’s World Cup 2023, the 2028 Los Angeles Olympic Games and many more. Nate’s career has been built on developing and amplifying brands that impact culture. While working as the CMO at DC Shoes, Nate helped create the Gymkhana series of YouTube films, that have ammassed over a billion views. His experience also includes working at Nike in Global Brand Marketing, as the CMO at Skullcandy and as Advisory Board member of the YouTube juggernaut, Donut Media. As an agency partner, Nate has created strategy, campaigns and content for major brands like Samsung, Spotify, Target, ESPN, Activision, Fender Guitars, Robinhood, Gillette and many more. His strategic and creative expertise is broad, diverse and has solidified him as a leader in shaping cultural narratives and defining market success.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Nicola-Mizon -->
    <div class="modal fade speaker-modal" id="Nicola-Mizon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Nicola-Mizon.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Nicola Mizon</h2>
              <p class="text-white m-0">COO & Co-Founder, Kutur Runway, Vizta DGTL</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Nicola Mizon holds a BA (Hons) in Computer Games Design from University Campus Suffolk. Throughout her career, Nicola has collaborated with renowned names like FC Bayern Munich, Agatha Christie, Luc Besson on the Valerian game, and Atari co-founder Nolan Bushnell.</p>
            <p>Nicola co-founded Vizta DGTL, a Berlin-based game studio aiming to revolutionise the intersection of gaming, fashion, and commerce. Their flagship product, Kutur Runway, seeks to create the largest digital fashion social platform driven by gaming, merging creativity, community, and technology. This platform addresses systemic industry issues, promoting inclusivity and aligning with Saudi Arabia's Vision 2030.</p>
            <p>A respected keynote speaker, Nicola shares her expertise on digital transformation and accessibility. She is enthusiastic about Vizta DGTL's expansion into the Middle East, eager to collaborate with local talents, and promote cultural heritage through innovative digital games, web3 elements, and virtual environments.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Speakers Section  -->
    <section class="cs_pb_20 cs_pb_lg_55" id="speakers">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">NEW GLOBAL SPORT CONFERENCE 2024</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">SPEAKERS</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/HRH-Prince-Faisal-bin-Bandar.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#HRH-Prince-Faisal-bin-Bandar" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div> 
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_16 cs_mb_10">HRH Prince Faisal bin Bandar bin Sultan Al Saud</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Chairman of the Saudi Esports Federation</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Andrew-Chen.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Andrew-Chen" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Andrew Chen</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">General Partner, Andreessen Horowitz</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Greg-Norman.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#Greg-Norman" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a> -->
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Greg Norman</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Liv Golf</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Joe-Marsh.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Joe-Marsh" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Joe Marsh</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, T1 Entertainment & Sports</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Len-Blavantik.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Len-Blavantik" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Sir Leonard Blavatnik</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Founder, Access Industries</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Lisa-Cosmas.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Lisa-Cosmas" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Lisa Cosmas Hanson</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Niko Partners</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Magnus-Carlsen.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Magnus-Carlsen" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Magnus Carlsen</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">World Chess Champion</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Maya-Rogers.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Maya-Rogers" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Maya Rogers</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Tetris</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/RJ-Cutler.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#RJ-Cutler" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">R.J. Cutler</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Emmy Winning Documentary Filmmaker</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ralf-Reichert.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ralf-Reichert" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Ralf Reichert</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Esports World Cup Foundation</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Songyee-Yoon.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Songyee-Yoon" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Dr. Songyee Yoon</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Managing Partner, Principal Venture Partners</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Toshimoto-Mitomo.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Toshimoto-Mitomo" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Toshimoto Mitomo</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Executive Deputy President and CSO, Sony Group Corporation</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Anna-Rozwandowicz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Anna-Rozwandowicz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Anna Rozwandowicz</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, The Story Mob</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Brian-Ward.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Brian-Ward" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Brian Ward</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Savvy Games Group</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Jann-Mardenborough.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Jann-Mardenborough" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Jann Mardenborough</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Professional Racing Driver</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Jens-Hilgers.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#Jens-Hilgers" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a> -->
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Jens Hilgers</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">General Partner & Co-Founder, BITKRAFT Ventures</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Maha-Abouelenein.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Maha-Abouelenein" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Maha Abouelenein</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Digital and Savvy</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Mathilde-Pignol.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Mathilde-Pignol" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Mathilde Pignol</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Co-Founder and CCO, Roboto Games</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nate-Morley.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Nate-Morley" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Nate Morley</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Founder of Works Collective</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nicola-Mizon.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Nicola-Mizon" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Nicola Mizon</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">COO & Co-Founder, Kutur Runway, Vizta DGTL</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Speakers Section -->

    <!-- Start Topics Section -->
    <section class="background-filled cs_pt_0 cs_pt_lg_75 cs_pb_50 cs_pb_lg_80" id="topics">
      <div class="container">
        <div class="cs_gap_24">
          
          <div class="container-fluid">
            <div class="cs_service_slider_2 cs_gap_24">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_30 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInLeft;">NEW GLOBAL SPORT CONFERENCE 2024</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 m-0">TOPICS IN FOCUS</h2>
                </div>
                <div class="cs_section_heading_right">
                  <div class="d-flex cs_column_gap_15 justify-content-lg-end justify-content-start">
                    <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 slick-arrow" style="">
                      <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"></path>
                        <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"></path>
                      </svg>             
                    </div>
                    <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 slick-arrow" style="">
                      <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"></path>
                        <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"></path>
                      </svg>          
                    </div>
                  </div>
                </div>
              </div>
              <div class="cs_slider_activate">
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">BECOMING A MODERN SPORTS HERO</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Sports, Gaming and The Relentless Pursuit of Greatness</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">GAME ON, SAUDI ARABIA</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Gaming & Sports as the Kingdom’s Gateway to the World</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">BUILDING A NEW GLOBAL SPORT</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Esports, Traditional Sports & How to Craft a New Global Sporting Legacy</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">NAVIGATING GROWTH IN GAMES & ENTERTAINMENT</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Consolidation, Innovation, New Markets & New Fans</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">THE CULTURAL IDENTITY OF FUTURE FANDOM</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Esports Meets Fashion, Art & Music</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">THE ART OF (E)SPORTS STORYTELLING</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Crafting Compelling Sports Narratives</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">PIONEERING THE PLATFORMS OF FANDOM</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">The Role of Tech Giants in Shaping Esports</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">CAN TRADITION SURVIVE THE DIGITAL AGE?</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Enhancing Traditional Sports and Creating New Fans</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">CREATING FAN FAVORITE GAMES</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Exploring Key Factors for Video Game Longevity in Development & Publishing</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">FAN FRENZY MARKETING</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Mastering Engagement and Excitement in Esports, Sports & Gaming</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">WHEN AI WAS STILL BOTS: ALGORITHMS IN ESPORTS</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">The Past and Present of Training, Strategy & Engagement</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">BREAKING BOUNDARIES IN GAMES AND ESPORTS</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Driving Diversity, Inclusion & Social Responsibility in the Games Industry</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">REBOOTING SUCCESS</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Lessons from Serial Entrepreneurs in Esports, Sports and Games</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">CULTURAL CROSSROADS IN GAMES</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Integrating Saudi Arabia’s Rich Artistic Heritage and Culture into Gaming</p> -->
                  </div>
                </div>
              </div>
              <!-- <div class="d-flex cs_column_gap_15 justify-content-center cs_pt_50">
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
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Topics Section -->

    <!-- Start Blog Section -->
    <section class="cs_pt_35 cs_pt_lg_75 cs_pb_60 cs_pb_lg_50" id="news">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">NEW GLOBAL SPORT CONFERENCE 2024</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">NEWS</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <a href="{{ url('dates-for-2024-event-and-major-expansion') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 h-100 w-100" data-src="{{ asset('assets/img/news/EWC_KV_MASTER.jpg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_10 cs_pr_10 cs_pt_40 cs_pb_40">
                  <!-- <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul> -->
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('dates-for-2024-event-and-major-expansion') }}">Riyadh’s New Global Sport Conference Unveils Dates for 2024 Event and Major Expansion</a></h2>
                  <!-- <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div> -->
                </div>
                <a href="{{ url('dates-for-2024-event-and-major-expansion') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
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
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <a href="{{ url('olympic-esports-games-to-be-hosted-in-the-kingdom-of-saudi-arabia') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 h-100 w-100" data-src="{{ asset('assets/img/news/ANNOUNCEMENT.jpg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_10 cs_pr_10 cs_pt_40 cs_pb_40">
                  <!-- <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul> -->
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('olympic-esports-games-to-be-hosted-in-the-kingdom-of-saudi-arabia') }}">Olympic Esports Games To Be Hosted In The Kingdom Of Saudi Arabia</a></h2>
                  <!-- <div class="cs_post_subtitle">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host ...</div> -->
                </div>
                <a href="{{ url('olympic-esports-games-to-be-hosted-in-the-kingdom-of-saudi-arabia') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
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
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <a href="{{ url('global-leaders-to-address-the-future-of-fandom-and-fan-engagement-at-ngsc') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 h-100 w-100" data-src="{{ asset('assets/img/news/EWC_KV_MASTER.jpg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_10 cs_pr_10 cs_pt_40 cs_pb_40">
                  <!-- <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul> -->
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('global-leaders-to-address-the-future-of-fandom-and-fan-engagement-at-ngsc') }}">Global leaders to address ‘The Future of Fandom’ and fan engagement at NGSC</a></h2>
                  <!-- <div class="cs_post_subtitle">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host ...</div> -->
                </div>
                <a href="{{ url('global-leaders-to-address-the-future-of-fandom-and-fan-engagement-at-ngsc') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
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

    <!-- Start Sponsors Section -->
    <section class="cs_pt_10 cs_pt_lg_80 cs_pb_70" id="sponsors">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">NEW GLOBAL SPORT CONFERENCE 2024</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">SPONSORS AND PARTNERS</h2>
          </div>
        </div>
        <div class="cs_brands d-flex justify-content-xl-between align-items-center cs_column_gap_25 cs_row_gap_25 flex-wrap justify-content-center">
          <div class="cs_brand">
            <a href="https://amazon.com" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 300 300" style="height:90px;"><g fill="currentColor" clip-path="url(#amazon_svg__a)"><path d="M63.452 142.955c2.134-5.588 5.99-8.762 12.103-8.854 6.2-.092 9.839 3.366 12.15 8.845.153-.327.24-.51.323-.698 2.12-4.777 5.768-7.492 10.962-8.034 4.249-.445 8.015.703 11.123 3.72 2.242 2.174 3.13 4.96 3.396 7.977.117 1.345.157 2.698.157 4.051 0 11.321-.022 22.647-.035 33.972 0 1.611-.623 2.231-2.234 2.235h-8.271c-1.58 0-2.22-.628-2.22-2.191.017-9.64.043-19.276.039-28.916 0-1.524-.013-3.074-.257-4.571-.623-3.816-4.34-5.593-7.924-3.86-2.176 1.048-3.33 2.877-3.622 5.213a47 47 0 0 0-.361 5.445c-.035 8.915-.017 17.826-.017 26.741 0 1.489-.653 2.144-2.142 2.144h-8.507c-1.389 0-2.068-.659-2.064-2.044 0-9.072.01-18.14.022-27.213 0-2.309.061-4.627-.566-6.885-.514-1.855-1.489-3.361-3.478-3.846-2.904-.707-5.973.074-7.24 3.68-.705 2.009-.867 4.091-.884 6.191-.03 3.978-.017 7.955-.017 11.933v16.044c0 1.485-.653 2.135-2.15 2.135H53.23c-1.393 0-2.063-.659-2.063-2.043v-46.899c0-1.454.622-2.087 2.063-2.091 2.7-.009 5.394-.009 8.094 0 1.31 0 1.963.681 1.967 2.008v5.737c.057.026.114.057.17.083M27.51 153.826c-.13-1.947-.096-3.903-.427-5.794-.474-2.733-2.499-4.309-5.394-4.514-1.65-.118-3.235.144-4.71.925-1.716.913-2.804 2.332-3.313 4.205-.096.358-.179.725-.331 1.061-.383.838-.976 1.122-1.885 1.021-2.7-.301-5.399-.602-8.102-.877-1.402-.14-1.994-.939-1.698-2.332 1.254-5.898 4.732-9.945 10.318-12.05 6.426-2.414 12.951-2.575 19.434-.187 3.935 1.449 6.835 4.047 8.14 8.173.684 2.17.841 4.418.85 6.675.021 6.073.048 12.146-.009 18.22-.026 2.881.753 5.435 2.512 7.705.396.511.784 1.031 1.128 1.577.605.969.478 1.689-.375 2.431-2.172 1.887-4.353 3.76-6.513 5.663-.883.777-1.976 1.161-3.213.013-1.37-1.27-2.642-2.611-3.674-4.174-.322-.489-.662-.969-1.027-1.506-.48.458-.936.899-1.398 1.336-2.146 2.013-4.458 3.794-7.344 4.571-4.258 1.144-8.542 1.38-12.708-.349-3.984-1.65-6.326-4.759-7.249-8.915-.944-4.275-.679-8.457 1.39-12.395 1.993-3.794 5.197-6.178 9.146-7.641 2.934-1.083 5.995-1.602 9.077-1.978 2.211-.27 4.427-.489 6.643-.729.192-.022.38-.065.732-.126m-.192 7.553c-.07-.013-.144-.039-.222-.039-2.372 0-4.728.17-7.018.851-1.85.55-3.587 1.358-4.754 2.951-2.172 2.965-2.338 6.196-.88 9.496.676 1.524 1.973 2.402 3.614 2.707 1.628.306 3.148-.022 4.554-.882 1.537-.938 2.595-2.301 3.37-3.899 1.732-3.567 1.436-7.382 1.332-11.19M165.673 177.52a20 20 0 0 0-1.067-1.471c-1.763-2.266-2.534-4.846-2.516-7.715a1671 1671 0 0 0-.022-19.262c0-2.192-.274-4.349-1.084-6.41-1.432-3.68-4.206-6.02-7.823-7.365-6.5-2.392-13.056-2.244-19.482.183-5.655 2.14-9.147 6.261-10.335 12.247-.24 1.139.383 1.986 1.558 2.117 2.808.297 5.638.607 8.446.922.588.056 1.066-.109 1.376-.572.274-.406.478-.847.587-1.328.296-1.069.697-2.078 1.472-2.89 2.277-2.414 5.085-2.947 8.171-2.135 2.129.555 3.505 1.991 3.836 4.144.296 1.916.296 3.885.422 5.854-.348.057-.548.092-.736.109-.348.035-.696.075-1.045.11a64 64 0 0 1-1.837.2c-1.245.131-2.494.276-3.761.424-3.082.389-6.152.904-9.073 1.991-4.736 1.768-8.298 4.807-10.026 9.688-1.341 3.776-1.358 7.64-.183 11.474 1.284 4.2 4.075 6.959 8.263 8.286 2.133.664 4.297.716 6.5.646 3.931-.131 7.475-1.327 10.505-3.885 1.067-.882 2.077-1.821 3.139-2.781.331.48.679.956.992 1.436a18.7 18.7 0 0 0 3.731 4.2c1.176 1.013 2.003 1.013 3.196-.017 2.129-1.878 4.24-3.755 6.426-5.58 1.049-.865.918-1.786.365-2.615m-17.627-5.672c-.901 2.135-2.203 3.925-4.354 4.973-2.973 1.437-7.126.624-8.154-3.851-.422-1.877-.37-3.776.275-5.614.77-2.301 2.442-3.759 4.627-4.681 1.306-.55 3.27-.995 5.159-1.196.627-.074 1.25-.131 1.837-.131.588-.017 1.159-.017 1.672.039-.091 3.537.349 7.091-1.066 10.461M274.071 143.745c.095-.196.182-.393.283-.585.6-1.161 1.127-2.37 1.811-3.479 2.189-3.55 5.433-5.349 9.573-5.554 2.743-.135 5.39.258 7.797 1.672 3.183 1.869 4.959 4.729 5.712 8.291.622 2.93.736 5.903.74 8.881.009 10.421.009 20.843.009 31.264 0 1.201-.684 1.917-1.872 1.921-3.013.013-6.021.013-9.034 0-1.123-.004-1.802-.729-1.802-1.864 0-9.5.004-19.001.004-28.501 0-1.943-.074-3.881-.596-5.767-.727-2.629-2.377-4.052-4.737-4.174-2.111-.109-3.761.746-5.015 2.388-1.145 1.502-1.681 3.27-1.95 5.099a33.5 33.5 0 0 0-.366 4.62c-.035 8.679-.018 17.354-.018 26.034 0 1.51-.661 2.165-2.189 2.165h-8.446c-1.393 0-2.072-.655-2.072-2.034-.013-15.692-.018-31.383-.027-47.074 0-1.227.649-1.917 1.864-1.925 2.795-.018 5.59.008 8.385-.014.923-.008 1.841.721 1.802 1.865-.074 2.034-.022 4.073-.022 6.112 0 .205.018.406.026.611.044.013.092.026.135.04M252.786 148.164c-1.21-3.48-3.121-6.558-5.855-9.082-3.418-3.165-7.475-4.715-12.086-4.933-.052-.018-.091-.018-.143-.018-.571-.017-1.124-.034-1.69 0-2.607.057-5.141.59-7.566 1.694-4.536 2.101-7.601 5.637-9.695 10.112-2.151 4.602-2.882 9.5-2.847 14.547 0 .813-.035 1.603 0 2.415.2 4.257 1.027 8.4 2.847 12.264 3.03 6.466 7.806 10.753 15.037 11.766 5.011.699 9.713-.218 13.918-3.13 4.149-2.891 6.848-6.907 8.411-11.657 2.643-8.012 2.407-16.024-.331-23.978m-11.863 19.502c-.205 2.083-.645 4.144-1.615 6.043-1.05 2.043-2.608 3.371-4.994 3.593-2.037.184-3.674-.515-4.919-2.157-1.232-1.619-1.781-3.536-2.186-5.505-.148-.738-.296-1.471-.348-2.209-.165-2.506-.313-5.026-.479-7.549.092-3.13.148-6.243.827-9.3.383-1.659.971-3.204 2.003-4.606.862-1.161 2.277-1.877 3.8-2.06a5.2 5.2 0 0 1 1.838 0c1.837.24 3.561 1.253 4.427 3.095.793 1.677 1.176 3.445 1.432 5.248.697 5.121.736 10.277.223 15.416M191.127 145.243h-15.528c-1.581 0-2.155-.577-2.155-2.157 0-2.035-.005-4.074 0-6.113 0-1.362.605-1.99 1.959-1.995 10.008-.004 20.021-.009 30.03 0 1.363 0 1.968.633 1.972 1.987.005 1.528-.061 3.056.018 4.584.069 1.305-.323 2.423-1.045 3.462-1.655 2.375-3.305 4.755-4.963 7.13l-11.733 16.796c-.1.144-.191.292-.361.55h.74c4.171-.048 8.28.393 12.229 1.794 1.467.52 2.878 1.21 4.284 1.886 1.21.581 1.75 1.629 1.75 2.956.004 2.292.009 4.584 0 6.876-.005 1.533-1.171 2.245-2.538 1.555-5.817-2.934-11.99-4.087-18.459-3.637a33.4 33.4 0 0 0-13.113 3.667c-1.341.694-2.494 0-2.503-1.519-.009-2.545-.013-5.095.013-7.641a7.35 7.35 0 0 1 1.363-4.23c5.881-8.426 11.741-16.861 17.605-25.297.122-.174.235-.353.431-.65M256.509 71.69h-8.807a1.78 1.78 0 0 0-1.777 1.78v49.188c0 1.17.945 2.122 2.116 2.122h8.089a2.117 2.117 0 0 0 2.111-2.122l.048-49.178c0-.987-.796-1.786-1.776-1.786M61.184 68.188c-3.391 0-6.142 2.759-6.142 6.16s2.75 6.16 6.142 6.16 6.143-2.759 6.143-6.16-2.751-6.16-6.143-6.16M78.65 83.33h-8.702c-1.106 0-2.003.898-2.003 2.003v22.721c0 6.252-.561 13.084-6.765 13.084s-6.77-6.837-6.77-13.084v-22.72a2 2 0 0 0-2.003-2.005h-8.702c-1.106 0-2.003.9-2.003 2.008v24.725c0 5.606 2.569 17.538 19.473 17.804 16.905-.266 19.47-12.198 19.47-17.804V85.337a2 2 0 0 0-1.999-2.008M121.019 95.266c-.601-7.375-4.702-13.78-11.432-16.609-2.121-.89-4.406-1.38-6.696-1.38-8.385 0-15.446 5.843-17.54 13.789-1.241 4.697-1.04 10.29 1.632 14.499 2.286 3.593 6.9 5.278 10.988 5.313h.127c5.45 0 8.176-3.44 9.495-5.898 0 7.549-3.487 11.622-10.601 11.343-4.476-.175-5.764-1.157-8.738-2.655-.396-.201-.914-.205-1.306.17-.156.123-.291.28-.383.472l-3.557 7.405a1.31 1.31 0 0 0 .279 1.515.5.5 0 0 0 .144.131q.104.059.2.117c3.265 2.092 6.818 3.581 10.666 4.131 2.73.388 5.25.323 8.267-.075 7.715-1.012 14.872-4.937 17.218-13.006 1.024-3.519 1.089-7.129 1.241-10.762.148-3.471.279-5.025 0-8.496m-13.448 4.776c-.635.908-2.32 2.76-5.416 2.76-3.095 0-5.341-.974-5.341-8.833 0-7.858 3.369-9.491 6.055-9.338 2.687.152 4.702 3.946 4.702 7.404zM139.717 68c-3.426 0-6.208 2.785-6.208 6.226s2.778 6.226 6.208 6.226 6.208-2.786 6.208-6.226S143.148 68 139.717 68M146.26 105.87l-.013-19.55v-.839a2.085 2.085 0 0 0-2.085-2.09h-8.69c-1.145 0-2.076.93-2.076 2.082v.847l.291 22.742c-.021 1.515.166 3.087-.239 4.571-.37 1.358-1.332 2.685-2.852 2.607-1.436-.075-2.76-.869-4.057-1.415-1.149-.498-1.802-.284-2.49.838-.766 1.323-1.42 2.707-2.064 4.091-.509 1.096-1.454 2.45-1.558 3.668-.035.397.113.733.439.995 1.184.904 2.713 1.747 4.145 2.209 5.838 1.891 12.312 2.1 16.765-2.755 1.977-2.156 3.561-4.894 4.123-7.789.653-3.366.357-6.81.357-10.203M241.441 103.657v-.083a23 23 0 0 0-.031-.768c0-.092-.008-.179-.013-.267a14 14 0 0 0-.052-.716c0-.03 0-.056-.004-.087q-.025-.306-.057-.607v-.022c-.017-.179-.039-.353-.056-.528a29 29 0 0 0-.227-1.554l-.091-.507a18 18 0 0 0-.1-.498 32 32 0 0 0-.357-1.462 26 26 0 0 0-.248-.843 34 34 0 0 0-.231-.69c-.013-.043-.031-.087-.044-.126-.087-.24-.174-.476-.27-.712-.008-.026-.021-.052-.03-.078a13 13 0 0 0-.305-.72 19 19 0 0 0-.413-.896l-.209-.401c-.061-.114-.122-.232-.188-.345a10 10 0 0 0-.357-.616q-.091-.146-.182-.293a19 19 0 0 0-.81-1.174 14 14 0 0 0-.37-.471q-.098-.126-.2-.245a16 16 0 0 0-1.903-1.917c-.013-.013-.03-.021-.044-.035a11 11 0 0 0-.287-.23c-.265-.21-.531-.411-.81-.6-.095-.069-.2-.134-.296-.195q-.014-.008-.021-.014a14.54 14.54 0 0 0-1.468-.834 6 6 0 0 0-.335-.157 4 4 0 0 0-.239-.109q-.426-.183-.871-.353l-.261-.092a21 21 0 0 0-.74-.236l-.335-.092c-.122-.035-.244-.06-.366-.091q-.185-.044-.37-.083c-.248-.057-.501-.1-.753-.144q-.19-.032-.383-.057c-.188-.026-.379-.048-.566-.074-.188-.022-.379-.035-.566-.053h-.066a20 20 0 0 0-.505-.03h-.039a13 13 0 0 0-.579-.013h-.174c-.183 0-.361 0-.54.013a6 6 0 0 0-.47.03c-.07 0-.144.009-.213.018a6 6 0 0 0-.392.039 12.68 12.68 0 0 0-.988.157c-.262.048-.523.11-.78.175q-.202.052-.409.109-.156.044-.313.096c-.096.03-.201.061-.296.096q-.142.044-.283.096-.13.044-.262.096-.066.026-.126.053a6 6 0 0 0-.326.126q-.38.151-.753.336-.375.184-.749.385a18 18 0 0 0-1.076.641q-.024.016-.047.031c-.105.07-.214.14-.318.214q-.348.235-.688.498a18.848 18.848 0 0 0-1.293 1.078l-.031.03-.287.276q-.15.144-.3.3c-.201.202-.397.407-.579.62-.087.092-.166.189-.248.285q-.157.177-.301.362c-.091.11-.178.218-.265.332a8 8 0 0 0-.244.323c-.174.231-.344.471-.505.707a8 8 0 0 0-.305.48c-.074.114-.139.232-.205.345-.082.14-.156.28-.235.42a12 12 0 0 0-.274.55q-.104.22-.2.44-.118.272-.222.542-.197.498-.366 1.009c-.057.17-.109.336-.165.51q-.13.414-.24.834c-.061.24-.126.48-.183.725q-.125.519-.23 1.043c-.227 1.053-.41 2.118-.597 3.174 0 .022-.009.04-.013.062v.008c-.618 3.436-1.175 7.108-4.319 9.147-4.183 2.711-9.36 3.384-14.24 3.493-5.655.122-11.489-.092-17.105-.882-4.401-.624-9.051-3.056-9.051-8.068l.031-31.466c0-1.009-.81-1.82-1.811-1.82h-8.986a1.813 1.813 0 0 0-1.815 1.816v32.36c.095 1.782.326 3.655.766 5.528 1.106 4.758 5.141 7.836 10.901 9.849 11.062 3.873 22.656 4.554 34.084 2 4.858-1.083 10.583-3.528 13.374-8.051 2.829 5.942 8.136 9.662 14.492 9.662h.175q.458-.002.909-.031c.148-.008.301-.022.449-.035q.435-.034.857-.096l.096-.013a8 8 0 0 0 .335-.057c.031 0 .057-.008.083-.013l.362-.065a13.296 13.296 0 0 0 .439-.096 13 13 0 0 0 1.372-.384q.14-.046.283-.096c.148-.053.296-.105.439-.166.122-.048.24-.092.357-.144a14.8 14.8 0 0 0 3.662-2.214 16.3 16.3 0 0 0 2.494-2.55c2.917-3.68 4.519-8.78 4.519-14.364 0-.266 0-.532-.013-.794m-11.585 1.685q0 .406-.013.812-.006.405-.026.803a9 9 0 0 1-.026.498q-.02.417-.052.83c-.013.174-.031.344-.048.519a22 22 0 0 1-.34 2.332 6 6 0 0 1-.061.275c-.004.021-.013.048-.017.069 0 .018-.009.035-.013.048 0 .018-.009.04-.013.057-.018.083-.039.157-.061.236q-.021.097-.048.188a6 6 0 0 1-.096.327c-.065.214-.13.419-.209.625-.013.039-.03.074-.043.113-.013.031-.022.057-.035.083a6.6 6.6 0 0 1-.649 1.231 4.699 4.699 0 0 1-.588.707c-.017.022-.039.04-.056.057a3 3 0 0 1-.209.188 3.3 3.3 0 0 1-.435.31c-.044.03-.092.057-.131.079a3.6 3.6 0 0 1-.688.301 2 2 0 0 1-.183.057q-.092.022-.183.043a3.688 3.688 0 0 1-.796.105h-.21400000000000002q-.097.001-.196-.004c-.104 0-.209-.013-.309-.027a5 5 0 0 1-.265-.043c-.096-.022-.196-.044-.288-.074q-.057-.014-.113-.035a3 3 0 0 1-.291-.114l-.144-.065a4 4 0 0 1-.505-.31c-.044-.035-.091-.07-.131-.105-.048-.039-.095-.083-.143-.122a5 5 0 0 1-.888-1.127q-.034-.052-.061-.105a8 8 0 0 1-.449-.947c-.013-.031-.022-.057-.035-.083a9 9 0 0 1-.252-.738 6 6 0 0 1-.083-.275l-.078-.284a4 4 0 0 1-.061-.244q-.04-.159-.074-.31-.031-.13-.057-.266a11 11 0 0 1-.096-.511c-.082-.463-.148-.93-.209-1.402-.017-.157-.034-.31-.047-.467a35 35 0 0 1-.166-2.55c0-.091-.004-.174-.009-.262v-.087l-.013-.498v-.183c-.004-.249-.004-.498-.008-.733v-1.812q-.001-.242.004-.485c.004-.375.013-.76.031-1.144q.007-.222.021-.445c0-.105.013-.214.018-.319q.032-.5.078-.991.014-.168.035-.336.012-.118.03-.236c.013-.122.031-.244.044-.362.039-.31.091-.607.148-.904.03-.148.057-.297.091-.441.031-.127.057-.253.092-.38.004-.022.013-.048.017-.074l.096-.354a.4.4 0 0 1 .022-.07c.035-.122.069-.24.113-.358v-.008l.091-.262q.048-.132.1-.262.099-.26.222-.502.059-.118.122-.236.123-.236.266-.445a2 2 0 0 1 .139-.201l.005-.005c.048-.065.095-.13.152-.2.022-.027.035-.053.061-.075.035-.043.078-.087.117-.13a5 5 0 0 1 .375-.363 3.7 3.7 0 0 1 .827-.528q.08-.035.165-.07a1 1 0 0 1 .083-.03c.044-.018.087-.031.135-.049.301-.1.627-.166.98-.187.113-.01.235-.014.357-.014h.109c.074 0 .148 0 .213.005h.017c.148.004.292.022.431.035a4.4 4.4 0 0 1 .98.231q.065.02.13.052.183.073.353.166c.03.018.065.035.096.057.043.026.091.057.13.083.057.04.118.074.17.118q.28.21.514.485c.039.043.083.087.113.14.022.021.039.047.061.073q.315.42.553.97c.03.07.065.14.091.218q.09.234.175.49c.922 2.859 1.04 6.535 1.04 9.425q.001.407-.004.812M170.052 195.862c.588 1.419 2.229 1.419 4.833.842 6.891-1.593 15.672-1.685 17.144.489 1.428 2.262-1.724 10.859-5.464 17.194-1.389 2.436-1.976 3.942-.797 5.095.296.353.671.489 1.137.532 1.388 0 3.152-1.462 4.832-3.104 3.613-3.322 6.43-7.579 7.984-12.408 1.555-4.61 2.312-11.124.671-13.604-1.554-2.349-7.606-3.943-12.268-3.899-4.876 0-9.622 1.284-13.866 3.632-2.564 1.594-4.998 3.323-4.201 5.231"></path><path d="M42.32 193.338c.423 1.284 1.346 2.838 2.69 4.698 17.69 23 46.135 33.103 73.571 33.103 23.992 0 47.227-7.667 61.933-21.14 2.52-2.349 3.866-4.253 3.866-5.715 0-.62-.209-1.109-.632-1.594-1.258-1.419-3.152-.354-5.463.93-13.696 7.579-34.789 12.81-57.184 12.81-25.293 0-52.35-6.602-72.816-24.066-1.977-1.641-4.075-3.278-5.547-2.082-.461.441-.923 1.332-.422 3.056"></path></g><defs><clipPath id="amazon_svg__a"><path fill="currentColor" d="M0 68h300v163.139H0z"></path></clipPath></defs></svg>
            </a>
          </div>
          <div class="cs_brand">
            <a href="https://barns.com.sa/en" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 300 300" style="height:80px;"><g fill="currentColor" clip-path="url(#barns_svg__a)"><path d="M266.886 198.684c-3.579-1.919-11.607-4.65-11.607-9.896 0-4.543 4.068-6.814 8.38-6.814 2.983 0 6.455.703 8.977 2.623 1.193.946 1.681 1.676 2.034 3.218l1.085 5.002h2.44v-14.574c-2.305-1.677-8.054-2.38-12.366-2.38-11.608 0-24.056 4.894-24.056 18.982 0 9.437 5.858 14.087 13.777 18.251 5.018 2.623 13.777 5.381 13.777 12.06 0 6.327-5.397 8.463-10.305 8.463-2.767 0-6.835-.946-8.977-2.515-1.546-1.081-1.79-2.379-2.278-4.786l-1.193-5.975h-3.201v16.953c3.553 2.272 10.984 3.11 16.137 3.11 11.96 0 23.35-8.004 23.35-21.496 0-11.33-7.078-15.764-15.919-20.28M42.85 176.269c-5.343 0-9.737 1.19-13.967 3.65v7.301c.976-.271 1.98-.46 2.956-.46 11.851 0 15.92 15.872 15.92 25.417 0 8.707-2.035 20.523-12.937 20.523-3.471 0-7.892-2.028-10.306-4.543v-78.305H0v1.433a6.246 6.246 0 0 1 6.21 6.246v78.035c5.994 2.028 15.215 3.948 23.812 3.948 22.021 0 36.15-12.06 36.15-35.097 0-14.196-7.783-28.175-23.35-28.175M122.012 232.159v-33.34c0-15.628-7.675-23.875-23.594-23.875-7.783 0-15.92 2.379-21.777 8.22-2.278 2.271-3.96 5.245-3.96 8.112v.054c.028 3.38 2.794 6.11 6.157 6.11s6.183-2.758 6.183-6.164v-.271s-.054-2.487 0-3.623c.217-3.056 1.817-4.597 6.671-4.597 6.699 0 12.476 3.245 12.665 12.222v32.068c-2.034 1.677-5.749 2.975-8.732 2.975-5.506 0-8.977-3.948-8.977-9.545 0-5.3 2.577-10.14 13.37-13.006v-5.543c-21.207 4.597-31.215 9.626-31.215 22.848 0 9.897 7.784 15.169 16.76 15.169 7.784 0 13.994-2.866 19.635-7.652h.841v5.976h22.211v-1.163h-1.248c-2.793 0-5.044-2.244-5.044-5.002M232.933 232.186v-44.804c-.678-5.949-7.431-11.952-18.496-12.33 0 0-14.401-1.758-20.15 13.141-5.75 14.871-17.872 13.736-17.872 13.736v30.149a5.085 5.085 0 0 1-5.099 5.083h-1.193v1.163h31.459v-1.163h-.678a4.964 4.964 0 0 1-4.963-4.975v-38.207c0-4.623 3.743-8.355 8.38-8.355s8.38 3.732 8.38 8.355v37.99c0 2.867-2.332 5.165-5.18 5.165v1.163h31.812v-1.163h-1.383a4.97 4.97 0 0 1-4.99-4.975M237.679 160.667c-3.2 0-5.804 2.596-5.804 5.786 0 .514.081 1.001.19 1.461v.054c.081.27.19.513.298.757l5.343 15.493 5.288-15.385c.136-.325.271-.676.353-1.028a5.6 5.6 0 0 0 .162-1.352c0-3.19-2.603-5.786-5.803-5.786"></path><path d="M182.978 183.083c0-5.652-4.583-10.221-10.251-10.221-6.726 0-12.014 2.812-15.269 8.085a20 20 0 0 0-1.844 3.758l-.136-7.598h-25.275l-.109 2.65 7.295.054v52.294c0 2.758-2.25 5.002-5.017 5.002h-1.274v1.163h30.943v-1.163h-1.301a5.027 5.027 0 0 1-5.045-5.029v-38.612c0-.271.028-2.677.787-5.679 1.247-2.487 3.336-5.705 6.563-8.03a10.1 10.1 0 0 0-.543 3.272c0 5.651 4.584 10.22 10.252 10.22s10.251-4.569 10.251-10.22M177.554 160.586l2.441 4.245c26.062-10.681 32.381-22.091 32.381-41.884V87.985h-23.757v1.082c2.82-.027 5.125 2.244 5.125 5.056v28.716c0 17.602-.488 29.851-16.19 37.747M138.311 138.468c.841.568 1.899 1.298 3.146 2.136 5.126 3.434 10.414 5.759 17.628 5.759 10.794 0 18.577-6.922 18.577-18.278V94.123c0-2.812 2.305-5.11 5.126-5.11v-1l-28.801-.055v1.055c2.956 0 5.369 2.406 5.369 5.354v29.635c0 7.273-3.959 12.303-11.01 12.303-1.519 0-2.956-.298-4.339-.785-1.845-.675-3.255-1.406-4.448-2.163.542-3.217.786-6.678.786-10.437V87.986h-26.55v1.054c4.366 0 7.919 3.542 7.919 7.895v25.904c0 17.603-.488 29.878-16.191 37.747l2.441 4.245c18.36-7.544 26.93-15.439 30.374-26.363M222.437 69.707v65.219c.597 5.353 6.726 10.788 16.679 11.113 0 0 12.99 1.568 18.17-11.844s16.109-12.411 16.109-12.411V97.665a4.594 4.594 0 0 1 4.583-4.596h1.085v-1.055h-28.394v1.055h.624c2.467 0 4.474 2 4.474 4.461v31.393c0 4.164-3.39 7.544-7.566 7.544s-7.567-3.38-7.567-7.544V69.896a4.66 4.66 0 0 1 4.665-4.65V64.19h-28.72v1.054h1.248c2.495 0 4.502 2.001 4.502 4.489M263.171 138.17c0 5.381 4.394 9.762 9.791 9.762s9.79-4.381 9.79-9.762c0-5.38-4.393-9.761-9.79-9.761s-9.791 4.381-9.791 9.761M164.699 79.522c5.397 0 9.79-4.38 9.79-9.76 0-5.382-4.393-9.762-9.79-9.762s-9.79 4.38-9.79 9.761 4.393 9.761 9.79 9.761M130.582 79.522c5.397 0 9.791-4.38 9.791-9.76 0-5.382-4.394-9.762-9.791-9.762s-9.79 4.38-9.79 9.761 4.393 9.761 9.79 9.761M9.492 99.315c-1.14 0-2.088-.243-2.848-.757a4.2 4.2 0 0 1-1.627-2.055l1.926-1.109c.434 1.163 1.328 1.731 2.603 1.731.624 0 1.085-.108 1.383-.352.298-.216.434-.513.434-.865 0-.405-.19-.703-.542-.92-.353-.215-1.004-.459-1.926-.73-.515-.161-.949-.297-1.302-.459a7 7 0 0 1-1.057-.595 2.4 2.4 0 0 1-.814-.973c-.19-.379-.271-.838-.271-1.352 0-1.028.353-1.839 1.085-2.46.732-.623 1.6-.92 2.63-.92.922 0 1.736.216 2.441.676a4.54 4.54 0 0 1 1.627 1.866l-1.898 1.081c-.461-.973-1.193-1.46-2.17-1.46-.46 0-.84.108-1.084.325q-.407.324-.407.81c0 .352.163.65.46.866q.45.324 1.71.73c.352.108.596.19.786.243.19.055.434.163.732.27.299.136.543.244.705.352.163.109.353.244.57.433q.326.285.488.568c.108.19.217.433.298.703.082.27.109.568.109.892 0 1.055-.38 1.893-1.14 2.488-.759.622-1.762.92-2.982.92M20.666 87.742h-2.251v11.33h2.25zM32.761 87.742h2.224v11.33h-1.682l-4.881-6.922v6.922H26.17v-11.33h1.709l4.881 6.895zM45.914 99.315q-2.563 0-4.23-1.703c-1.112-1.136-1.682-2.542-1.682-4.192 0-1.649.57-3.082 1.681-4.19q1.669-1.704 4.231-1.704 1.546 0 2.848.73a5.4 5.4 0 0 1 2.034 1.947L48.87 91.31c-.271-.513-.678-.892-1.193-1.19s-1.112-.432-1.763-.432c-1.112 0-2.007.352-2.685 1.028-.678.703-1.003 1.595-1.003 2.703 0 1.109.352 1.974 1.003 2.677.678.703 1.573 1.028 2.685 1.028.651 0 1.248-.135 1.763-.433.515-.297.922-.676 1.193-1.162l1.926 1.108a5.4 5.4 0 0 1-2.034 1.947 5.7 5.7 0 0 1-2.848.73M57.82 96.936h4.8v2.136h-7.024v-11.33h6.942v2.136H57.82v2.407h4.312v2.109H57.82zM7.73 107.184h1.952v11.329H7.43v-8.977l-2.143.622-.542-1.92zM16.679 110.888c0 .567.19 1 .542 1.352.353.324.814.513 1.329.513s1.003-.162 1.356-.513c.353-.325.542-.785.542-1.352s-.19-1.001-.542-1.325-.814-.487-1.356-.487-.976.162-1.329.514c-.352.324-.542.784-.542 1.325m6.02 0c0 .865-.217 1.649-.678 2.298l-3.552 5.327h-2.577l2.522-3.705c-1.193 0-2.142-.405-2.874-1.135s-1.112-1.677-1.112-2.812c0-1.136.38-2.109 1.139-2.839.76-.731 1.763-1.109 2.956-1.109s2.224.351 2.983 1.082q1.14 1.095 1.14 2.839M28.91 110.888c0 .567.19 1 .542 1.352.353.324.814.513 1.329.513s1.003-.162 1.356-.513c.352-.325.542-.785.542-1.352s-.19-1.001-.542-1.325-.814-.487-1.356-.487-.976.162-1.329.514c-.353.324-.542.784-.542 1.325m6.02 0c0 .865-.217 1.649-.678 2.298L30.7 118.54h-2.577l2.522-3.705c-1.193 0-2.142-.405-2.874-1.135s-1.112-1.677-1.112-2.812c0-1.136.38-2.109 1.139-2.839.76-.731 1.763-1.109 2.956-1.109s2.224.351 2.983 1.082q1.14 1.095 1.139 2.839M38.727 118.513v-1.677l3.879-3.974c.867-.92 1.301-1.65 1.301-2.272 0-.432-.135-.811-.406-1.081q-.407-.406-1.058-.406c-.868 0-1.492.433-1.899 1.325l-1.898-1.108q.53-1.177 1.546-1.785a4.24 4.24 0 0 1 2.224-.622c1.03 0 1.898.325 2.657.973.733.649 1.112 1.515 1.112 2.596 0 1.163-.623 2.38-1.871 3.624l-2.224 2.217h4.285v2.163h-7.593zM300 231.185c.109 4.354-3.661 7.166-7.16 7.139-4.095-.054-6.997-3.515-7.051-7.057-.027-3.597 2.848-7.247 7.079-7.247 3.905 0 7.241 3.164 7.132 7.165m-.732.082c.108-4.246-3.526-6.517-6.265-6.517-3.498 0-6.454 2.812-6.536 6.3-.081 3.434 2.875 6.49 6.319 6.544 2.658.027 6.509-2.082 6.482-6.327"></path><path d="M295.986 234.944c-.162-.298-.352-1.136-.596-2.109-.163-.703-.461-1.217-.841-1.541.759-.433 1.193-1.19 1.193-2.082 0-.703-.271-1.325-.732-1.731-.57-.514-1.329-.73-2.522-.73-.76 0-1.519.054-2.034.162l-.217.054v8.409h1.6v-3.461h.678c.705 0 1.112.244 1.329 1.325.271 1.19.434 1.758.569 2.001l.082.135h1.708zm-1.871-5.624c0 .757-.57 1.244-1.519 1.244h-.759v-2.407c.163 0 .407-.054.732-.054q1.546 0 1.546 1.217"></path></g><defs><clipPath id="barns_svg__a"><path fill="currentColor" d="M0 60h300v180.46H0z"></path></clipPath></defs></svg>
            </a>
          </div>
          <div class="cs_brand">
            <a href="https://www.kitkat.com" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 300 300" style="height:80px;"><g fill="currentColor" clip-path="url(#kitkat_svg__a)"><path d="M69.465 91.784c-1.338.272-2.461 1.649-2.554 3.193l5.16-1.093c-.145-1.47-1.297-2.366-2.606-2.1"></path><path d="M82.078 86.18c-.394-3.54-1.216-7.322-2.455-11.318-2.039 2.59-4.934 1.931-8.363 1.145-5.171-1.18-11.553-2.759-17.848 6.986l-.081.116-.093-.075c-6.451-4.985-15.381-7.397-22.365-5.893-7.077 1.526-14.16 5.922-19.58 13.186-5.63 7.542-8.733 17.027-8.287 26.425.029.654.08 1.296.144 1.938.973 9.67 5.722 17.888 13.291 23.655 2.404-4.008 5.89-8.508 13.29-12.765 7.564-4.337 18.278-7.894 31.082-10.815 4.06-.925 7.87-2.701 11.038-5.101 3.48-2.632 6.115-5.928 7.888-9.792 1.68-3.666 2.553-7.825 2.611-12.394a44 44 0 0 0-.272-5.292zm-17.228-.058c.283-.092 8.727-2.62 8.727-2.62.388-.127.712.238.718.723l.023 1.308c.012.485-.29.936-.683 1.006l-8.762 1.671c-.273.052-.504-.173-.51-.503l-.011-.798c-.006-.335.173-.682.503-.787zm-4.361 0 1.187-.23c.446-.088.979.311.99.907l.504 16.582c.012.59-.492 1.099-.932 1.22l-1.182.33c-.446.121-.822-.261-.834-.856l-.527-16.703c-.011-.608.348-1.151.794-1.244zm-7.43 6.686.66-.139-.093-4.28c-.011-.607.36-1.173.828-1.266l1.286-.249c.48-.092.88.324.892.926l.093 4.228 1.945-.417c.336-.07.62.214.632.642l.023 1.145c.006.434-.26.833-.597.908l-1.951.44.144 6.362c.024 1.232.638 1.937 1.686 1.665l.18-.052c.364-.098.665.203.677.665l.023 1.244c.011.463-.278.92-.643 1.012l-1.164.318c-2.241.602-3.706-1.185-3.758-3.603l-.151-6.94-.66.144c-.353.081-.643-.208-.655-.653l-.029-1.174c-.005-.44.267-.856.62-.931zm-4.419 9.954c-.631-.046-1.917-.133-2.681-.185-1.714-.127-3.14-1.082-3.191-3.25-.07-2.864 1.893-5.084 4.853-5.726 2.808-.608 4.79.82 4.83 2.897.011.388-.255.706-.481.758l-1.39.324c-.353.087-.62.07-.758-.29-.302-.763-1.09-1.064-2.143-.82-.99.225-1.76.774-1.738 1.856.018.7.649.81 1.292.873.382.035 2.079.168 2.785.226 1.755.144 2.855 1.301 2.902 3.319.08 3.534-2.763 5.391-4.882 5.981-3.029.844-5.31-.689-5.363-2.782v-.243c-.017-.428.267-.787.533-.856l.886-.272c.452-.116 1.384-.231 1.558.249.313.827 1.309 1.133 2.31.867 1.049-.283 1.993-.925 1.97-2.064-.018-.7-.626-.804-1.298-.856zm-35.158-6.194c-.023-.793.55-1.522 1.268-1.666l2.218-.486c.967-.19 1.674.231 2.015.804.446.758 6.585 12.244 6.585 12.244l-.44-13.002c-.018-.757.469-1.48 1.123-1.607l24.943-4.749c.365-.075.672.249.683.717l.03 1.244c.01.468-.273.908-.643.977l-22.598 4.54.429 16.622c.017.747-.48 1.493-1.13 1.678l-1.986.584c-.886.243-1.442-.11-1.824-.7-.214-.324-6.735-12.117-6.735-12.117l.48 13.76c.024.775-.526 1.567-1.204 1.752l-1.32.445c-.713.197-1.32-.283-1.338-1.07l-.556-19.965zm22.852 11.891c1.123-.318 1.865-1.059 2.34-2.169.15-.347.405-.619.73-.712l1.76-.491c.405-.11.608.335.561.729-.393 2.903-2.785 5.297-5.287 6.043-3.758 1.111-6.243-2.082-6.359-6.535-.104-4.176 2.033-8.67 5.93-9.566 4.09-.943 5.948 2.539 6.047 6.414.023.833-.273 1.4-.956 1.585l-7.65 2.059c.133 1.764 1.28 3.094 2.884 2.643m-21.752 21.989-.197-7.23c27.966-19.12 46.168-6.015 60.286-20.67-8.264 17.518-36.988 3.285-60.089 27.894zm59.51-34.378-7.146 1.597c.11 1.532 1.187 2.7 2.687 2.353 1.03-.242 1.726-1.023 2.183-1.983.15-.301.388-.532.69-.596l1.633-.376c.382-.087.567.306.515.642-.376 2.522-2.618 4.696-4.957 5.275-3.521.861-5.809-1.967-5.884-5.819-.075-3.609 1.934-7.449 5.594-8.154 3.828-.735 5.53 2.33 5.594 5.708.018.729-.266 1.209-.909 1.353"></path><path d="M36.085 98.962c-1.436.353-2.612 1.966-2.693 3.754l5.496-1.406c-.162-1.694-1.384-2.695-2.803-2.348M97.147 156.781l17.246-10.492.029 47.773-17.269 4.095v-41.376zm16.331-28.114c-2.93-4.454-8.675-4.702-13.117-.399-4.424 4.308-5.386 11.411-2.467 15.876 2.907 4.378 8.78 4.551 13.094.312 4.303-4.239 5.386-11.394 2.49-15.789m7.297-55.529c-10.708 3.164-20.883 6.987-30.41 11.33l-28.828 69.3.023-32.273c-7.325 1.718-13.725 3.586-19.14 5.593-.26.092-.515.191-.764.289l-.168 91.82c5.884 3.661 12.596 6.836 20.06 9.474l.371-40.74 35.807 48.467c8.299.798 16.893 1.035 25.684.728l-48.304-66.794 45.675-97.193zm102.851-5.997c-7.337-1.585-15.097-2.695-23.193-3.297l-26.205 62.989.017-63.208a227 227 0 0 0-19.91 1.983l-.156 168.372a243 243 0 0 0 20.136-4.349l.295-68.634 39.982 54.146a203 203 0 0 0 18.115-9.647l-44.911-62.098 35.842-76.257zm-82.634 107.233c-1.146-1.012-1.309-3.244-1.309-7.865l.163-21.151 10.91-2.718.11-12.441-10.841 2.684.174-14.014-9.069 2.25-13.992 29.838 5.212-1.29-.156 25.951c-.035 9.115 5.803 12.712 9.399 13.869 7.476 2.441 15.19-1.972 17.831-8.045 1.772-4.141 1.784-8.872 1.552-11.371-1.639 1.354-6.625 7.305-9.995 4.292zm108.619-27.859c.058 2.296-.509 7.264-1.662 10.567-2.895 8.218-9.868 11.11-16.927 6.778-6.544 6.744-13.737 7.877-19.528 6.026-5.287-1.7-9.608-10.96-7.853-18.617 1.071-4.69 2.815-8.444 7.343-12.701 4.5-4.216 12.938-8.692 14.93-12.481 1.564-2.92.457-6.269-2.693-5.494-5.195 1.249-13.87 11.052-17.872 15.575l.093-15.321c2.734-4.54 8.594-12.11 15.729-14.69 10.192-3.696 21.896 1.914 22.215 13.256l.023 27.669c0 2.874 4.204 2.007 6.202-.567m-22.794-5.095c-2.027 1.526-7.204 6.373-7.742 9.756-.568 3.615 1.528 4.945 2.872 5.252 1.529.359 4.413-.729 4.523-3.742l.342-11.261zm53.308-2.713c-1.639 1.353-6.625 7.305-9.996 4.291-1.146-1.012-1.308-3.244-1.308-7.865l.162-21.151 10.91-2.718.11-12.44-10.841 2.683.174-14.014-9.069 2.25-13.991 29.844 5.212-1.29-.157 25.951c-.034 9.115 5.803 12.712 9.399 13.869 7.477 2.44 15.191-1.972 17.831-8.045 1.773-4.141 1.784-8.872 1.552-11.371z"></path><path fill-rule="evenodd" d="M287.717 92.085c4.981 6.669 8.536 14.037 10.517 21.995v.006c4.228 16.958.834 35.234-9.81 52.856-9.735 16.131-25.395 31.417-45.276 44.204-20.078 12.909-44.146 23.048-69.615 29.311-19.366 4.76-39.067 7.143-57.217 7.143s-35.436-2.302-50.997-6.9c-33.323-9.849-55.115-29.091-61.37-54.186-3.738-14.997-1.516-31.025 6.41-46.72q.692.705 1.426 1.377a24.7 24.7 0 0 0 3.834 2.92c-6.671 13.835-8.496 27.819-5.253 40.827 5.664 22.729 25.846 40.288 56.823 49.444 14.965 4.424 31.609 6.633 49.115 6.633 17.507 0 36.78-2.319 55.636-6.957 24.769-6.09 48.148-15.928 67.612-28.45 19.036-12.244 33.977-26.789 43.196-42.058 9.718-16.09 12.845-32.631 9.058-47.842l.005-.011c-5.663-22.73-25.846-40.289-56.822-49.444-30.294-8.953-67.497-8.838-104.757.323-16.279 4.003-31.95 9.636-46.312 16.576-.416-2.8-1.056-5.727-1.91-8.735a6.424 6.424 0 0 1 6.42-6.73 6.43 6.43 0 0 1 5.793 3.655 248 248 0 0 1 34.428-11.18c38.378-9.438 76.814-9.53 108.214-.248 17.431 5.153 31.707 12.88 42.252 22.672a6.424 6.424 0 0 1 10.87 4.633c0 1.96-.886 3.706-2.27 4.886M90.603 72.901c0-1.174-1.176-1.25-1.176-1.25h-2.71v4.87h.759v-2.18h.776l1.425 2.18h.967l-1.46-2.214c1.53 0 1.425-1.4 1.425-1.4zm-3.127.688v-1.243h1.69s.632 0 .632.578c0 0 .209.665-.608.665h-1.714m.955-4.02a4.523 4.523 0 0 0-4.523 4.518 4.523 4.523 0 0 0 4.523 4.517 4.52 4.52 0 0 0 4.523-4.517 4.52 4.52 0 0 0-4.523-4.517m0 8.202a3.685 3.685 0 1 1 0-7.368 3.685 3.685 0 1 1 0 7.368m196.13 6.998s1.176.075 1.176 1.25l.005.005s.105 1.4-1.424 1.4l1.459 2.215h-.967l-1.425-2.18h-.776v2.18h-.758v-4.87zm-1.952.694v1.244h1.715c.816 0 .608-.665.608-.665 0-.579-.632-.579-.632-.579zm-3.567 1.741a4.52 4.52 0 0 1 4.523-4.517 4.52 4.52 0 0 1 4.523 4.517 4.523 4.523 0 0 1-4.523 4.517 4.523 4.523 0 0 1-4.523-4.517m.834 0a3.685 3.685 0 0 0 3.689 3.684 3.685 3.685 0 0 0 3.689-3.684 3.686 3.686 0 0 0-3.689-3.684 3.685 3.685 0 0 0-3.689 3.684" clip-rule="evenodd"></path></g><defs><clipPath id="kitkat_svg__a"><path fill="currentColor" d="M0 53h300v194.595H0z"></path></clipPath></defs></svg>
            </a>
          </div>
          <div class="cs_brand">
            <a href="https://www.lg.com" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 300 300" style="height:110px;"><g fill="currentColor" clip-path="url(#lg_svg__a)"><path d="M30.231 137.047c3.764-3.278 9.116-3.953 13.96-3.613 4.211.256 8.538 1.907 11.07 5.358-1.628 1.484-3.271 2.953-4.91 4.427-1.462-1.652-3.366-3.007-5.627-3.298-3.186-.454-6.955-.261-9.317 2.164-2.372 2.593-2.507 6.33-2.437 9.632.1 3.067.829 6.675 3.774 8.331 3.462 1.805 7.648 1.336 11.301.375.01-1.962.035-3.924-.045-5.881-2.13.04-4.256.03-6.382.025q-.008-3.128 0-6.256h13.719c.01 5.428-.01 10.855.01 16.283-4.362 2.578-9.598 3.337-14.618 3.184-4.252-.153-8.79-1.38-11.644-4.663-3.206-3.648-3.894-8.706-3.809-13.355.09-4.594 1.312-9.558 4.955-12.713M.13 133.833c2.624 0 5.252-.005 7.88 0 .005 8.986-.005 17.968.005 26.955 5.442.01 10.884-.01 16.327.01v6.521c-8.07.01-16.141 0-24.211.005q-.015-16.75 0-33.491M75.819 133.862q2.927.001 5.854-.005c.04 7.774.01 15.543.01 23.317.035 1.282.03 2.716.92 3.752.784.981 2.105 1.281 3.311 1.321 2.02.064 4.046.015 6.066.024 1.376-.014 2.964-.103 3.944-1.192.98-1.055.97-2.579 1-3.92q-.008-11.646 0-23.292c1.975-.015 3.95-.024 5.925.035-.055 8.084.005 16.169-.03 24.253.035 3.116-1.427 6.399-4.322 7.907-2.743 1.548-6.01 1.203-9.04 1.228-3.201-.04-6.678.384-9.543-1.341-2.779-1.563-4.105-4.787-4.085-7.818-.035-8.09-.005-16.179-.01-24.269M109.106 133.867c1.894-.005 3.788-.01 5.683-.005.045 9.056-.065 18.112.055 27.162.256 2.347 3.367 1.252 4.965 1.499-.799 1.577-1.613 3.155-2.387 4.747-2.065.02-4.382.296-6.146-.991-1.668-1.153-2.236-3.258-2.176-5.166.011-9.085 0-18.165.006-27.246M185.965 138.945c2.839-3.263 7.216-4.994 11.543-5.067 3.949-.04 7.894-.005 11.839-.01-.829 1.676-1.684 3.337-2.483 5.028-4.507.375-9.351-.774-13.563 1.296-3.587 1.745-5.14 5.827-5.221 9.549-.191 3.85.684 8.277 4.091 10.643 3.532 2.489 8.1 1.775 12.181 1.888.025-2.958.01-5.916.01-8.873-3-.005-6 .005-9-.01.834-1.622 1.688-3.239 2.512-4.871 4.066-.049 8.126-.009 12.191-.024.03 6.265.02 12.531.005 18.801-4.196-.015-8.387.015-12.583-.01-4.256-.039-8.567-1.725-11.407-4.89-2.884-3.155-4.095-7.478-4.095-11.653-.04-4.2 1.126-8.573 3.98-11.797M283.548 133.803c3.186-.039 6.372.069 9.557-.01.714 2.519 1.352 5.058 2.091 7.567q1.004-3.772 1.985-7.552c.799-.005 1.603-.005 2.407-.01q.006 4.267.005 8.533c-.347.005-1.035.01-1.377.015-.02-2.524.01-5.048-.02-7.572-.759 2.51-1.407 5.048-2.116 7.572-.643-.015-1.276-.024-1.909-.034-.689-2.514-1.402-5.019-2.096-7.533-.095 2.519-.04 5.038-.055 7.557-.352 0-1.06-.005-1.412-.005.01-2.548-.04-5.097.045-7.645-1.02.202-2.055.271-3.09.295-.005 2.45 0 4.9 0 7.35-.347.005-1.035.01-1.377.01-.015-2.464.005-4.929-.015-7.399q-1.321.001-2.633-.005c.005-.281.005-.848.01-1.134M121.764 135.474c1.914-.108 3.834-.083 5.748-.064.005 2.475 0 4.945.005 7.414 3.257.01 6.518-.005 9.779.01-.799 1.617-1.608 3.224-2.397 4.846-2.462.035-4.919.01-7.382.02.031 3.978-.07 7.961.036 11.939-.041 1.42 1.085 2.805 2.578 2.835 2.457.123 4.919-.005 7.381.044a400 400 0 0 1-2.492 4.782c-3.432-.163-7.246.611-10.291-1.361-2.262-1.469-2.955-4.293-2.93-6.803-.03-7.887.04-15.774-.035-23.662M215.623 146.882c4.472-6.458 15.94-6.359 20.075.399 1.935 3.037 2.061 6.739 1.955 10.214-6.186.005-12.372-.015-18.553.01.427 2.652 2.679 4.949 5.488 5.033 3.834.109 7.673 0 11.512.044-.819 1.588-1.608 3.2-2.507 4.748-3.643-.178-7.312.202-10.94-.227-3.899-.537-7.231-3.402-8.487-7.035-1.538-4.288-1.221-9.391 1.457-13.186m4.598 2.534c-.784.981-1 2.233-1.236 3.416q6.43.022 12.869 0c-.286-1.775-.809-3.717-2.402-4.797-2.814-1.853-7.201-1.41-9.231 1.381M145.251 143.347c3.347-.961 6.9-.35 10.332-.513-.819 1.622-1.648 3.239-2.472 4.861-1.754.044-3.553-.178-5.267.261-1.437.424-2.271 1.903-2.221 3.323-.055 5.338.005 10.677-.025 16.016-1.905 0-3.804 0-5.709-.005.015-5.521-.045-11.047.021-16.568.025-3.229 2.15-6.394 5.341-7.375M158.944 142.898c3.297-.133 6.598-.064 9.895-.059 2.623.025 5.507.764 7.146 2.923 1.331 1.691 1.562 3.91 1.537 5.975-.015 5.181-.01 10.362-.005 15.543-4.904.025-9.809.01-14.713.015-1.844.015-3.749-.4-5.241-1.504-3.644-2.662-3.754-8.725-.282-11.569 1.533-1.262 3.583-1.701 5.543-1.691 3.025-.01 6.055.01 9.08 0-.075-1.351.206-2.919-.774-4.033-.809-.902-2.135-.926-3.261-.956-3.729-.01-7.457.015-11.181-.005.739-1.553 1.533-3.081 2.256-4.639m2.704 14.587c-1.869 1.272-1.352 4.969 1.146 5.097 3.025.143 6.06.015 9.09.054q.007-2.803 0-5.6c-2.683.005-5.372-.019-8.055-.005-.739.04-1.558 0-2.181.454M244.402 142.913c3.276-.167 6.558-.069 9.834-.074 2.628.015 5.528.725 7.196 2.874 1.357 1.696 1.593 3.929 1.578 6.009-.01 5.186-.01 10.377-.005 15.563-4.754.02-9.502-.005-14.256.015-1.9.039-3.895-.256-5.478-1.356-3.929-2.608-4.06-9.085-.296-11.885 1.497-1.134 3.422-1.528 5.281-1.528 3.04-.01 6.081.005 9.121.01-.045-1.371.226-2.973-.794-4.077-.839-.882-2.161-.892-3.297-.927-3.713 0-7.432.015-11.145.005.764-1.538 1.552-3.061 2.261-4.629m3.814 19.659c3.045.163 6.106.02 9.161.064q.007-2.803 0-5.6c-3.05.045-6.106-.108-9.151.065-2.924.226-2.96 5.264-.01 5.471M273.844 143.17c3.186-.661 6.488-.217 9.719-.336-.814 1.612-1.638 3.224-2.432 4.851-1.829.079-3.729-.212-5.498.345-1.507.538-2.12 2.204-2.045 3.668-.01 5.196 0 10.391 0 15.587-1.904.01-3.809.01-5.708.01 0-5.536-.046-11.072.015-16.608.025-3.436 2.482-6.743 5.949-7.517"></path></g><defs><clipPath id="lg_svg__a"><path fill="currentColor" d="M0 133h300v35H0z"></path></clipPath></defs></svg>
            </a>
          </div>
          <div class="cs_brand">
            <a href="https://countries.mentos.com" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 300 300" style="height:100px;"><g clip-path="url(#mentos_light_svg__a)"><path fill="#fff" d="M288.508 162.019h1.544v-21.653l-16.66-.008c-2.657-.705-5.707-1.345-8.925-1.649-8.535-.957-18.63 1.579-22.941 9.074-4.867-5.372-12.106-8.713-20.005-8.713-5.928 0-11.492 1.888-15.963 5.107v-3.772h-5.659l.008-11.748-14.746-.009c-4.423 5.633-9.064 9.839-15.328 13.436-2.714-1.861-6.068-2.953-9.822-2.984-3.415-.091-6.868.37-9.796 1.197l-30.213-.013v4.75c-4.176-3.78-9.948-6.073-17.46-6.073-8.943 0-16.116 3.954-20.68 9.665-3.783-7.142-12.831-9.521-18.016-9.573-5.507 0-9.635.783-13.393 2.644-4.489-2.396-9.774-2.923-14.363-2.518-2.1.182-4.371.678-5.946 1.105l-30.122-.009v16.312h2.3v14.271H0v16.329l85.817.044v-4.159a26.1 26.1 0 0 0 16.251 5.577c8.238.004 13.78-2.258 17.938-6.133v4.737l59.344.026v-1.427c2.932 1.779 6.694 2.823 11.279 2.832 4.894.191 9.296-.562 14.846-4.328v-.866c4.463 3.262 10.031 5.185 15.977 5.189 7.207 0 13.884-2.81 18.712-7.407v6.111l17.208.009s6.116 1.396 11.801 1.357c12.223.091 20.983-4.402 22.48-16.077.417-4.558-.927-7.986-3.149-10.666z"></path><path fill="#000" fill-rule="evenodd" d="M195.479 133.38v11.658h5.672v6.872l-5.676-.004-.013 19.966c.048 2.688 2.518 3.11 5.598 2.392-.009 1.579-.009 7.643-.009 7.643-1.413.991-3.784 1.97-10.248 1.931-9.987 0-14.045-5.546-14.045-12.219l.009-19.722h-2.306s-.048-6.703 0-6.82c7.477-4.254 13.297-11.697 13.297-11.697h7.721" clip-rule="evenodd"></path><path fill="#000" fill-rule="evenodd" d="M200.299 163.811c0-11.057 9.643-20.022 21.54-20.013 11.892.004 21.531 8.982 21.527 20.035s-9.648 20.039-21.544 20.026c-11.897 0-21.528-8.991-21.523-20.043zm16.838.005c0-6.429 1.135-10.797 4.693-10.801 3.745 0 4.668 4.372 4.668 10.805 0 6.425-1.018 10.961-4.676 10.961-3.663 0-4.685-4.541-4.685-10.965M245.232 182.511v-13.645h6.468c2.963 3.184 9.061 5.733 13.981 6.62 1.922.296 3.871.448 4.397-.613.448-.8-.104-1.753-1.853-2.553-4.049-1.679-11.105-3.419-14.676-5.211-5.285-2.61-9.343-5.52-9.034-12.202.839-11.47 14.75-11.748 19.782-11.187 6.064.578 11.623 2.405 14.607 3.558v-2.214h6.768v13.049h-5.65c-2.888-2.884-10.013-5.881-14.333-6.598-2.553-.527-3.701 0-3.967 1.07-.187 1.144 1.057 1.753 2.323 2.253 3.671 1.457 9.269 2.553 13.637 4.819 6.289 3.058 10.196 6.234 9.621 12.389-1.057 8.264-6.829 11.801-17.664 11.866-9.082-.122-13.728-2.527-16.973-3.758v2.362h-7.434zM172.569 156.056l-.013 19.635h2.384v6.855l-23.445-.026.008-6.847h2.336l.009-16.307c0-5.32-7.712-5.863-7.712.992l-.009 15.302h2.288l-.022 6.869-23.371-.013v-6.856h2.31l.017-23.789-2.34.009v-6.886l21.222.009.009 2.497c3.563-2.562 8.169-3.889 13.85-3.724 7.594.196 12.484 5.486 12.484 12.276zM124.295 166.217c1.062-12.91-8.912-22.514-21.444-22.523-13.171-.009-21.501 10.265-21.514 20.439-.004 10.457 9.265 19.84 21.031 19.805 11.784 0 18.139-6.686 20.727-12.88l-10.461-.026c-1.592 2.654-3.715 3.885-7.038 3.889-4.742 0-6.577-3.984-6.49-8.721l25.185.021zm-25.102-6.068h8.991c.1-3.11-.674-7.199-4.607-7.199-3.767 0-4.358 3.993-4.384 7.199M5.072 151.828v-6.873l21.097.013.008 2.345c1.753-1.123 5.203-3.106 10.61-3.571 5.58-.296 10.221.4 13.792 3.471 3.833-2.471 7.673-3.676 13.707-3.598 6.298.066 14.924 3.737 14.937 12.371l-.07 19.652h2.27v6.834l-23.314-.013.009-6.838 2.279.009.009-16.329c0-5.351-7.63-5.929-7.721.987l-.009 15.329h2.305v6.838l-23.423-.009.009-6.842 2.3.013.01-16.329c0-5.359-7.717-5.868-7.717.987v15.329h2.3l-.02 6.868-23.39-.035v-6.846h2.323l.017-23.776-2.322.008z" clip-rule="evenodd"></path><g fill="#A5A5A5" opacity="0.6"><path d="m34.437 154.094-1.722 1.731c.622.605.983 1.162 1.222 1.866.361 1.053.257 2.136.257 2.136l.026 16.181h-2.258l-.017 6.068 2.344-2.296-.008-1.414 2.279-.013s.013-18.221.03-18.461c.035-.935.01-3.884-2.148-5.807zM60.893 154.003l-1.749 1.74c1.827 1.527 1.575 3.915 1.583 4.132l-.008 16.138-2.188.013v6.068l2.279-2.314v-1.414h2.336s.022-18.204.013-18.443c-.026-.987.013-3.993-2.266-5.911zM25.738 175.987l-2.358 2.349v.013l2.293-.005 2.388-2.353zM52.32 176l-2.437 2.37.074-.013h2.24l2.401-2.353zM78.831 176.008l-2.457 2.349.008.009h2.253l2.484-2.345zM25.795 145.329l-20.31.018 2.354 2.409 15.554.005zM39.044 144.072c-7.912 0-12.814 3.728-13.754 4.52-.883.748-1.496 1.191-1.862 1.6v2.475s3.598-3.841 10.374-5.524a21 21 0 0 1 4.898-.583c1.858 0 3.136.248 3.332.283l2.414-2.214a27 27 0 0 0-5.398-.566zM10.079 149.157l-2.375 2.319-.013 24.506H5.424l-.004 6.103 2.366-2.362.005-1.383 2.287.004zM154.613 154.229l-1.692 1.696c1.561 1.34 1.444 3.811 1.453 4.041l-.022 16.095h-2.423l-.004 6.098 2.531-2.253v-1.492l2.275.008s.009-18.142.013-18.386c.048-.944.026-3.889-2.131-5.807M148.049 176.06l-2.283-.004-2.384 2.358h2.262zM174.387 176.078l-2.314-.004-2.358 2.34h2.254zM125.409 145.373l2.431 2.445 15.629.004 2.358-2.423zM158.832 144.233c-5.833-.004-10.435 2.171-13.145 4.372-.883.713-1.979 1.488-2.353 1.914v2.227s3.406-3.554 10.379-5.281c1.744-.43 3.458-.561 4.871-.556 1.845 0 3.158.221 3.35.265l2.244-2.192a16 16 0 0 0-3.462-.67 23 23 0 0 0-1.879-.074zM130.193 149.379l-2.37 1.988-.009 24.685h-2.266l-.022 6.072 2.384-2.331v-1.423l2.283.005zM63.742 144.072c-.862 0-1.875.048-2.84.114-4.72.387-7.965 2.127-10.097 3.488-.291.191-2.157 1.579-2.166 1.614.178.148 1.61 1.235 1.84 1.514.405-.153 3.05-2.91 8.465-3.698a29.5 29.5 0 0 1 4.45-.339c2.749 0 4.471.418 4.602.491.296-.287 2.144-2.066 2.144-2.066-.26-.104-2.183-.987-5.772-1.109a8 8 0 0 0-.626-.009M102.568 144.085c-5.163 0-11.257 1.662-16.138 7.491-6.355 7.629-5.459 16.503-1.666 22.545l1.7-1.627c-3.144-5.346-3.657-13.467 1.902-19.622 3.423-3.767 8.6-6.433 14.498-6.433 2.749 0 5.641.587 8.582 1.901l1.774-1.749c-1.065-.77-5.376-2.501-10.652-2.506"></path><path d="M107.97 151.719c-.243.231-1.757 1.701-1.757 1.701 2.031 1.335 2.488 4.937 2.301 7.051H98.84l-2.44 2.436 14.554.03s.931-7.747-2.984-11.218M96.522 163.607c-.488 9.165 2.018 13.763 8.751 14.067.196.004.375.009.562.009 5.728.004 8.264-3.945 8.264-3.945l4.48-.009 3.802-2.262s-9.3-.035-9.513-.026c-.874 1.583-3.258 3.91-6.868 3.91a9.2 9.2 0 0 1-2.279-.295c-5.838-1.51-4.942-9.339-4.942-9.339l-2.262-2.11zM200.747 145.425l-5.624.004-2.415 2.423 5.594.022zM194.992 133.82h-6.973s-5.393 7.207-13.158 11.575l.026 6.081 2.336-2.288v-2.541c4.833-2.527 11.845-10.478 11.845-10.478h3.54zM179.555 149.192l-2.275 2.301s-.079 11.914.03 20.326c.126 8.4 7.112 10.505 7.112 10.505l1.805-1.753c-7.16-1.883-6.685-8.712-6.685-8.712l.008-22.663zM195.001 172.15l-1.927 1.831c1.5 2.81 4.102 3.041 4.906 3.036h.244l2.327-2.122a8 8 0 0 1-1.962.256c-1.983 0-3.48-.918-3.593-2.997zM221.848 144.381c-3.398-.004-6.429.727-8.656 1.614-1.445.574-9.418 3.997-11.888 13.51-1.536 5.916.3 10.805 2.227 13.963l1.761-1.644c-1.848-3.088-2.958-7.09-1.613-12.153 1.8-6.816 6.433-9.779 10.387-11.427 2.862-1.188 5.537-1.64 7.921-1.64 3.097 0 5.737.748 7.755 1.609l1.736-1.692c-3.293-1.561-6.603-2.144-9.63-2.148z"></path><path d="M226.067 151.784c-.318.287-1.401 1.336-1.675 1.597 1.866 1.6 2.014 3.797 2.201 4.649.183.831.757 7.961-.126 11.793-.352 1.592-.831 5.324-4.567 5.463h-.183c-4.772 0-5.502-7.273-5.011-14.441 0 0-2.227 2.044-2.405 2.231-.239 12.493 3.762 14.441 7.594 14.494h.114c3.088.004 5.92-1.775 6.807-7.517 1.053-6.79.222-12.705-.191-14.002-.274-1.096-1.14-3.114-2.549-4.258zM251.422 169.453h-5.707l-.061 12.693 2.249-2.297.026-8.099h2.579s3.293 3.436 9.939 5.398c1.71.513 4.89 1.418 7.534 1.422 1.392 0 2.641-.248 3.467-.948 2.44-2.079 1.014-4.941 1.014-4.941s-1.266 1.348-1.914 1.922c-.131.431-.318 1.653-2.85 1.658-.73 0-1.648-.105-2.818-.361-9.417-2.014-13.463-6.447-13.463-6.447zM261.548 144.12c-5.359 0-12.232 1.375-14.976 5.911-2.545 4.215-1.405 8.187-.527 10.135.988 2.206 3.541 4.168 4.681 4.798l1.2-1.709c-6.211-3.306-5.428-9.926-2.64-13.128 2.279-2.601 6.994-3.854 12.049-3.854 1.205 0 2.436.07 3.658.218 9.748 1.139 15.911 4.958 15.911 4.958l.018-3.545h2.331l2.036-2.457h-5.92v2.653c-5.881-2.497-10.1-3.123-13.837-3.697-1.131-.174-2.501-.279-3.984-.283"></path><path d="m261.605 153.903-1.701 1.653c1.052 1.187 5.672 2.971 10.535 4.35 4.863 1.391 10.322 4.854 10.322 4.854l1.74-1.675c-.444-.356-5.542-3.728-10.461-5.141-3.576-1.027-9.413-2.536-10.435-4.041"></path></g><path fill="#fff" fill-rule="evenodd" d="M293.223 143.498a3.364 3.364 0 0 1 3.389-3.393 3.365 3.365 0 0 1 3.392 3.398 3.356 3.356 0 0 1-3.397 3.375 3.36 3.36 0 0 1-3.38-3.384m.544 0c0 1.583 1.288 2.823 2.836 2.827 1.549 0 2.849-1.235 2.849-2.818 0-1.61-1.296-2.836-2.844-2.841a2.824 2.824 0 0 0-2.845 2.832m4.384 1.931h-.63l-.97-1.761h-.701v1.757h-.552v-3.815h1.601c.696 0 1.305.213 1.3 1.014 0 .743-.5 1.026-1.009 1.039l.957 1.762zm-2.296-3.262v.948h.587c.509 0 1.214.096 1.214-.43 0-.483-.401-.518-.857-.518z" clip-rule="evenodd"></path><path fill="#fff" d="M80.614 109.022H.044v26.677h80.57z"></path><path fill="#000" d="M24.202 118.274c-1.109.457-1.953.635-3.132.635-3.097 0-4.636-1.61-4.636-3.249 0-1.697 1.74-3.285 4.793-3.285 1.11 0 2.101.188 2.884.562v1.418c-.879-.392-1.766-.653-2.75-.657-1.691 0-2.887.8-2.883 1.931 0 1.14 1.179 1.953 2.836 1.953 1.04 0 1.74-.261 2.888-.696v1.392zM33.555 118.83h-1.988v-2.579h-3.972v2.575h-1.988v-6.368h1.988v2.562h3.972v-2.558h1.987zM41.049 118.83h-5.877v-6.372h5.794v1.17h-3.81v1.335h3.632v1.166h-3.632v1.531h3.889v1.17zM45.847 118.917h-.853l-3.501-6.455h2.1l1.88 3.524 2.049-3.519h1.6l2.045 3.523 1.87-3.519h2.1l-3.496 6.451h-.853l-2.475-4.154-2.466 4.154zM57.487 118.839h-1.988v-6.368h1.988zM67.217 118.844h-1.67l-4.402-4.08v4.08h-1.988v-6.373h1.827l4.25 3.898v-3.893h1.988v6.368zM76.43 114.311c-1.018-.391-1.997-.587-2.98-.591-2.162 0-2.923 1.061-2.923 2.005 0 1.131 1.11 1.875 2.758 1.879.492 0 .735-.035 1.318-.222v-.748h-1.157v-1.166h3.145v2.606c-.596.496-2.07.857-3.354.857-2.78 0-4.754-1.353-4.754-3.258 0-1.945 1.966-3.276 4.806-3.276 1.192 0 2.35.218 3.141.527v1.392zM48.295 127.804c0 .761-.287 1.292-.904 1.675-.675.417-1.727.635-3.058.635-1.488 0-2.636-.331-3.232-.927-.353-.352-.522-.805-.518-1.387l.009-6.856h-4.359l-.013 6.803c0 1.279.422 2.354 1.266 3.197 1.314 1.318 3.589 1.988 6.75 1.988h.01c5.341 0 8.408-1.901 8.412-5.215l.017-6.764h-4.358l-.017 6.851zM75.346 120.962h-4.502l-3.814 5.246c-.557.796-1.018 1.5-1.414 2.14a41 41 0 0 0-1.335-2.145l-3.667-5.245h-4.502l-1.627 11.827h4.245l.622-5.094c.061-.535.118-1.083.17-1.627.283.461.596.953.948 1.483l3.515 5.181h2.866l3.767-5.246c.413-.57.788-1.113 1.136-1.64.056.601.117 1.197.173 1.74l.562 5.207h4.323zM29.87 125.799v4.189c-.51.065-1.318.126-2.54.126-2.167 0-3.959-.339-5.181-.979-1.07-.561-1.614-1.305-1.614-2.21 0-1.922 2.797-3.162 7.125-3.162 1.696 0 3.028.135 4.193.413l.622.153 1.618-2.636-1.17-.287c-.918-.227-2.832-.492-5.228-.492-7.064 0-11.631 2.375-11.631 6.064-.005 1.874 1.183 3.532 3.266 4.545 1.97.957 4.528 1.423 7.817 1.427h.043c3.102 0 5.581-.431 6.268-.561l.714-.139.008-6.442h-4.302z"></path></g><defs><clipPath id="mentos_light_svg__a"><path fill="#fff" d="M0 109h300v81.38H0z"></path></clipPath></defs></svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Sponsors Section -->

    <!-- Start Apply to Join Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="apply-to-join">
      <div class="container">
        <div class="row">
        <div class="col-lg-7">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">REQUEST A TICKETED INVITATION</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">APPLY TO JOIN</h2>
                  <p class="m-0">We will shortly start our invitations. While the event is invite-only, a limited number of tickets will become available on July 1st, following an application process. Please apply through the form to be considered for joining us for the New Global Sport Conference 2024.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 cs_mb_lg_55">
            <form class="row" id="applyForm" method="POST" action="{{ route('apply.submit') }}">
              @csrf {{-- Cross-Site Request Forgery protection --}}
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_first_name" id="apply_first_name" type="text" placeholder="First Name">
                <span id="apply-first-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_last_name" id="apply_last_name" type="text" placeholder="Last Name">
                <span id="apply-last-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_email" id="apply_email" type="text" placeholder="Email">
                <span id="apply-email-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_company" id="apply_company" type="text" placeholder="Company">
                <span id="apply-company-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_position" id="apply_position" type="text" placeholder="Position">
                <span id="apply-position-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_industry" id="apply_industry" type="text" placeholder="Industry">
                <span id="apply-industry-error" class="text-danger"></span>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 cs_mt_20 overflow-hidden" id="apply-button"><span>Apply to Join</span></button>
                <span id="apply-success-message"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Apply to Join Section -->

    <!-- Start About Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="the-esports-world-cup">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 cs_mb_lg_55 ngsc-ecw-bg">
            <div class="cs_experience cs_style_1 position-relative">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">ABOUT</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">THE ESPORTS WORLD CUP</h2>
                  <p class="m-0">The Esports World Cup (EWC) is an elite, multi-genre esports competition held annually in Saudi Arabia starting in 2024. Taking place in July and August at the world-class venue in Riyadh Boulevard City, the EWC will offer the largest prize pool in esports and feature the most popular titles across major gaming genres. It will introduce a new cross-game competition format, awarding prizes for individual game titles and club performances. Designed for both professional esports players and gaming enthusiasts, the event will include qualifiers to provide many teams with the opportunity to participate, along with a thrilling calendar of on-the-ground activations, live entertainment, and competitions for fans.</p>
                  <div class="cs_hero_btn">
                    <a href="https://esportsworldcup.com/" target="_blank" class="cs_btn cs_style_1 cs_mt_20 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Visit Us</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    
    <!-- Start Contact Us Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="contact-us">
      <div class="container">
        <div class="row">
        <div class="col-lg-7">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">GET IN TOUCH</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">CONTACT US</h2>
                  <p class="m-0">We’re thrilled to explore with you the opportunity to join us at the crossroads of esports, sports and gaming industry ! If you’re eager to be part of the action and gain exclusive access at our upcoming New Global Sports Conference 2024, we invite you to complete the application form. We will review and get back to you as soon as possible.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 cs_mb_lg_55">
            <form class="row" id="contactForm" method="POST" action="{{ route('contact.submit') }}">
              @csrf {{-- Cross-Site Request Forgery protection --}}
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_first_name" id="contact_first_name" type="text" placeholder="First Name">
                <span id="contact-first-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_last_name" id="contact_last_name" type="text" placeholder="Last Name">
                <span id="contact-last-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_email" id="contact_email" type="text" placeholder="Email">
                <span id="contact-email-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_phone" id="contact_phone" type="text" placeholder="Phone">
                <span id="contact-phone-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <select class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_subject" id="contact_subject">
                  <option value="">—Please choose an option—</option>
                  <option value="Delegate Application">Delegate Application</option>
                  <option value="Speaker Application">Speaker Application</option>
                  <option value="Partnership Opportunity">Partnership Opportunity</option>
                  <option value="Media Accreditation &amp; Inquiries">Media Accreditation &amp; Inquiries</option>
                  <option value="General Inquiries">General Inquiries</option>
                </select>
                <span id="contact-subject-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_company" id="contact_company" type="text" placeholder="Company">
                <span id="contact-company-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_position" id="contact_position" type="text" placeholder="Position">
                <span id="contact-position-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_industry" id="contact_industry" type="text" placeholder="Industry">
                <span id="contact-industry-error" class="text-danger"></span>
              </div>
              <div class="col-lg-12">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15" name="contact_message" id="contact_message" placeholder="Message" cols="35" rows="7"></textarea>
                <span id="contact-message-error" class="text-danger"></span>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 cs_mt_20 overflow-hidden" id="contact-button"><span>Get in Touch</span></button>
                <span id="contact-success-message"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Us Section -->

    @endsection