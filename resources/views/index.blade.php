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
                  <a href="https://webook.com/en/events/new-global-sport-conference-2024" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_10 cs_pr_10 cs_pt_10 cs_pb_10 overflow-hidden"><span>GET TICKETS</span></a>
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
              <p class="text-white m-0">General Partner & Co-Founder, Andreessen Horowitz</p>
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
            <p>Jens Hilgers is a serial entrepreneur based in Berlin (Germany) widely known for his work and contributions in the Esports and Gaming industry. Jens was the Founding CEO of ESL, is a Co-Founder and Chairman of world-renowned Esports team G2 Esports as well as Co-Founder and former CEO of esports data company BAYES Esports.</p>
            <p>In 2016 Jens founded BITKRAFT Ventures, which he grew to become a globally leading Investment Platform focused on Gaming and Interactive Entertainment with currently more than 900M US$ in assets under management.</p>
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
            <p>Nate Morley is the founder of Works Collective, the agency behind the brand identities for the Esports World Cup, FIFA World Cup 2026, FIFA Women’s World Cup 2023, the 2028 Los Angeles Olympic Games and many more. Nate’s career has been built on developing and amplifying brands that impact culture. While working as the CMO at DC Shoes, Nate helped create the Gymkhana series of YouTube films that have amassed over a billion views. His experience also includes working at Nike in Global Brand Marketing, as the CMO at Skullcandy and as Advisory Board member of the YouTube juggernaut, Donut Media. As an agency partner, Nate has created strategy, campaigns and content for major brands like Samsung, Spotify, Target, ESPN, Activision, Fender Guitars, Robinhood, Gillette and many more. His strategic and creative expertise is broad, diverse and has solidified him as a leader in shaping cultural narratives and defining market success.</p>
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

    <!-- Modal Faisal-Bin-Homran -->
    <div class="modal fade speaker-modal" id="Faisal-Bin-Homran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Faisal-Bin-Homran.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Faisal Mohammed Bin Homran</h2>
              <p class="text-white m-0">Chief Product Officer, Esports World Cup Foundation</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>He is responsible for leading and growing the Esports World Cup initiative, with special attention paid to its surrounding onsite festival experience. Prior to his appointment at the EWCF, Bin Homran was the Chief Esports Officer at the Saudi Esports Federation (SEF), where he played a prominent role in the federation’s efforts to consolidate the Kingdom’s position as the leading regional esports and gaming hub. Bin Homran supported the National Gaming and Esports Strategy and the national gamers community by overseeing Saudi esports clubs’ development, overcoming industry challenges, creating new tournaments, identifying new opportunities in an expanding marketplace, and nurturing up-and-coming talent in line with SEF’s mission and vision. He oversaw the operations of Gamers Without Borders, the biggest esports charity event worldwide, and the Saudi eLeague, which he considers to be his most memorable career milestone to date.</p>
            <p>A sporadic gamer with an enduring passion for the wider gaming world, Bin Homran entered the professional gamers ranks in 2009 when pursuing a Bachelor’s Degree in Information Systems Engineering from King Fahad University of Petroleum and Minerals. He put his esports career on hold to obtain a Master’s Degree in Entrepreneurship, Innovation, and Business Development from the University of Westminster, UK. Prior to joining SEF in 2021, Bin Homran gained over 10 years of experience in business development, tournament organization, e-games halls and website development, e-club management, and e-game applications.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Gabriel-Toledo -->
    <div class="modal fade speaker-modal" id="Gabriel-Toledo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Gabriel-Toledo.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Gabriel "FalleN" Toledo</h2>
              <p class="text-white m-0">CS2 Player, FURIA Esports</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Gabriel "FalleN" Toledo is a distinguished Brazilian esports athlete renowned for his contributions to the Counter-Strike scene. With over 20 years of experience, FalleN has established himself as a key figure in the competitive field. Celebrated for his exceptional skills as an AWPer and in-game leader, he has significantly impacted the scene with his strategic genius and innovative gameplay. FalleN gained prominence with teams like Luminosity Gaming and SK Gaming, leading them to major victories, including the ESL One Cologne 2016 and MLG Columbus 2016. Currently, he plays for FURIA Esports, continuing to excel and influence the game. In addition to his esports career, FalleN has a business called FalleN Company, reflecting his broad impact beyond gaming. His legacy is marked by his dedication to excellence, leadership, and his pivotal role in the evolution of esports.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Joe-Pompliano -->
    <div class="modal fade speaker-modal" id="Joe-Pompliano" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Joe-Pompliano.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Joe Pompliano</h2>
              <p class="text-white m-0">Managing Partner, Pomp Investments</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Joe Pompliano is one of the fastest-growing personalities in the sports business. He left a career at J.P. Morgan in 2020 to start creating sports business content full-time, and he has quickly become a go-to resource for industry executives, professional athletes, and casual fans.</p>
            <p>Joe’s content business did over 2 billion impressions last year, and his newsletter is read by more than 125,000 people in 185 countries. Joe’s work has been featured in ESPN, Bloomberg, FOX Sports, and CNBC, and he spends a considerable amount of time identifying and supporting great founders through early-stage investment opportunities, including companies like Reddit, Replit, Underdog Fantasy, and the Premier Lacrosse League.</p>
            <p>Joe also hosts a popular podcast, "The Joe Pomp Show,” where he interviews athletes and executives about their life, career, business, and investments. Past guests have included Dana White, Lance Armstrong, Gary Vaynerchuk, Marc Lore, Francis Ngannou, Troy Aikman, and Alex Rodriguez.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal MJ-Acosta-Ruiz -->
    <div class="modal fade speaker-modal" id="MJ-Acosta-Ruiz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/MJ-Acosta-Ruiz.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">MJ Acosta- Ruiz</h2>
              <p class="text-white m-0">Sportscaster, ESPN</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>MJ Acosta-Ruiz is a television host and sportscaster, currently featured as the anchor of ESPN's Sportscenter and as a sideline reporter for ESPN Deportes' Monday Night Football.</p>
            <p>The Emmy Award winning journalist became the first  woman of color to host a show at NFL Media. Fully bilingual in English and Spanish, you can find her working internationally to reach the diverse and growing landscape outside of the U.S.</p>
            <p>With nearly 15 years in the TV & Entertainment industry, she continues her work as an advocate for representation and equality. MJ works closely with women’s empowerment groups such as A Seat at the Table and is dedicated to amplifying the voices of marginalized communities.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Nanea-Reeves -->
    <div class="modal fade speaker-modal" id="Nanea-Reeves" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Nanea-Reeves.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Nanea Reeves</h2>
              <p class="text-white m-0">CEO & Co-Founder of TRIPP and Former SVP & COO of EA Online Group</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Nick-Brown -->
    <div class="modal fade speaker-modal" id="Nick-Brown" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Nick-Brown.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Nick Brown</h2>
              <p class="text-white m-0">Partner, Executive Producer, Good Boy Creative</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Nick Brown is a founding partner and executive producer at Good Boy Creative, an LA-Based creative studio focused on live-action film production in the gaming and esports space. Good Boy develops and produces commercials, teasers, and documentaries for the biggest game publishers in the world including Riot Games, Epic Games, and Ubisoft. He has won 2 sports Emmys for his work with Riot Games League of Legends World Championship.</p>
            <p>In his position as executive producer, Nick oversees creative development and all live-action production activities. He has extensive experience working internationally having produced multiple campaigns in the USA, China, Korea, Japan, Singapore, Germany, Denmark, Spain, England, Iceland, Turkey, Mexico, and Brazil.</p>
            <p>Prior to founding Good Boy, Nick worked in creative development and production for the Walt Disney Company, producing award winning digital & branded content campaigns.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal OJ-Borg -->
    <div class="modal fade speaker-modal" id="OJ-Borg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/OJ-Borg.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">OJ Borg</h2>
              <p class="text-white m-0">Broadcaster / Executive Producer, STNDRD Films</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>OJ Borg has spent the last decade immersed in esports both in front, and behind the microphone working on the biggest esports events around the globe.</p>
            <p>He also is a renowned broadcaster in the UK presenting entertainment shows on Radio & TV for the BBC as well as across a multitude of sports from the UFC to the Tour de France.</p>
            <p>As a director and executive producer within his own production company STNDRD FILMS, he has made high-end conceptual films and documentaries that bridge the gap between esports & mainstream broadcasters.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Shuji-Utsumi -->
    <div class="modal fade speaker-modal" id="Shuji-Utsumi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Shuji-Utsumi.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Shuji Utsumi</h2>
              <p class="text-white m-0">President & COO, SEGA Corporation</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Shuji Utsumi has been in the Games and Entertainment industry for over 35 years. After leading the  “PlayStation” project at Sony, he was invited by a Sony rival company, SEGA, to serve as a development head for the “Dreamcast” project. After launching the console, he led creative and business teams as an executive at companies such as Disney Interactive Asia and Warner Music Japan. He also founded his own company, Q Entertainment, where he produced the legendary games Lumines and Child of Eden. In 2020, he returned to SEGA as a CSO and played a key role in SEGA's revival through the transmedia strategy of Sonic the Hedgehog, and in April 2024 he was appointed President & COO of SEGA. He has a unique background, combining both management and content development experience from a global perspective. The major titles that he was directly involved in and that represent his career include Crash Bandicoot, Kingdom Hearts, and many others.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Steve-Arhancet -->
    <div class="modal fade speaker-modal" id="Steve-Arhancet" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Steve-Arhancet.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Steve Arhancet</h2>
              <p class="text-white m-0">Co-CEO, Team Liquid</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Steven “LiQuiD112” Arhancet is a trailblazer in the esports industry, blending over a decade of business finance expertise with professional gaming to build Team Liquid, a global esports powerhouse. As Co-CEO, he oversees 300+ employees and 100 elite athletes across four international facilities. Under his leadership, Team Liquid has secured major victories, including The International Dota 2 Championship, five League of Legends Championship Series titles, and the Grand Slam in Counter-Strike. His influence spans Forbes, Business Insider, and Netflix, driving esports into a $1.5 billion industry.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Arnold-Hur -->
    <div class="modal fade speaker-modal" id="Arnold-Hur" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Arnold-Hur.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Arnold Hur</h2>
              <p class="text-white m-0">CEO, Gen.G Esports</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Arnold Hur is CEO of Gen.G, a global esports organization. Based in Los Angeles, Seoul, and Shanghai, Gen.G owns and operates top esports teams globally and well as innovative gaming programs, including the Gen.G Global Academy and the NetWORK, a platform for the empowerment of women in gaming. Before joining Gen.G, Arnold was President of Memebox, one of Korea’s most successful startup companies, where he helped grow the company from Series A to Series C, raising over $160M. Prior to Memebox, he worked on product and strategy at Google, management consulting at Boston Consulting Group, and investment banking with Goldman Sachs.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Bilal-Fares -->
    <div class="modal fade speaker-modal" id="Bilal-Fares" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Bilal-Fares.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Bilal Fares</h2>
              <p class="text-white m-0">SVP & General Manager, Adidas EMC Market</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Bilal Fares is a self-motivated leader with over 20 years of experience in retail, business, and organisational management, committed to delivering results and fostering people development. Since 2018, he has been working at Adidas, holding various roles, and contributing significantly to the company's growth at a regional and global level. His leadership approach centres on aligning the customer and the organisation's vision, ensuring every objective is met with dedication. Throughout his career, Bilal has excelled in designing and implementing comprehensive end-to-end strategies that achieve sustainable success. His extensive experience spans leading large teams across various functions and geographies, providing him with a deep understanding of product management, marketing, people development, customer service, technology, and service delivery.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Bruce-Stein -->
    <div class="modal fade speaker-modal" id="Bruce-Stein" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Bruce-Stein.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Bruce Stein</h2>
              <p class="text-white m-0">Co-Founder aXiomatic Gaming, MD Juno Capital</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>During his career, Bruce Stein has held ‘C’ suite positions in both startup and public consumer products, tech based, and IP commercialization companies. He currently serves as an advisor to Juno Partners and consumer-tech based clients such as Embodied AI Robotics.</p>
            <p>Most recently, Bruce was CEO/Co-Founder of aXiomatic, an esports/video gaming investment platform. He set the strategy for aXiomatic from its beginning in 2015 with the Team Liquid investment through all their investments into Epic Games, Dapper Labs, Niantic Games, and others.</p>
            <p>Stein’s earlier experience includes: COO/Worldwide President/BOD Mattel, CEO Sony Interactive Entertainment (PlayStation), President/CEO Kenner Products (Hasbro), CEO Mandalay Media, CEO/Chairman Radical Communication and Founder/CEO of The Hatchery. Stein has been a strategic advisor to PE/VC, media and internet companies including Dreamworks SKG, Warner Bros., KPCB and Guggenheim Capital.</p>
            <p>Stein was a Board Member of ViewSonic, a YPO alum, member of the Mayor’s Esports/Gaming Council for Los Angeles, and the Steering Committee of China Americas Sports and Health Association. Stein received a B.A. from Pitzer College and an M.B.A. from the University of Chicago Booth Graduate School of Business.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Craig-Levine -->
    <div class="modal fade speaker-modal" id="Craig-Levine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Craig-Levine.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Craig Levine</h2>
              <p class="text-white m-0">Co-CEO, ESL Faceit Group</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ESL FACEIT Group (EFG) is the leading competitive games and esports company. Craig helped architect the merger of ESL Gaming and FACEIT in 2022 and prior served as the co-CEO of ESL Gaming where he led global business strategy and operations.</p>
            <p>As a lifelong gamer, Craig has helped pioneer the esports industry for over 20 years – first as a player, then team owner, and has become a dynamic esports executive.</p>
            <p>Levine holds a B.S. in Information Systems and Management and Organizational Behavior from the Stern Business School at New York University.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Dan-Bunting -->
    <div class="modal fade speaker-modal" id="Dan-Bunting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Dan-Bunting.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Dan Bunting</h2>
              <p class="text-white m-0">Former Studio Head & Game Director, Call of Duty: Black Ops series</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>With over 20 years of experience building teams and leading game development, Dan Bunting is a seasoned creative and operational leader in the games industry. Starting at development studio Treyarch in 2003, Bunting established a reputation as a problem-solver, team motivator and innovator that defined his career path throughout the years. His work on the Call of Duty: Black Ops series led to it becoming one of the most successful franchises in video game history, including several titles in the top 50 games sold of all time. In the burgeoning field of ESports in the early 2010s, the Black Ops series paved the way for the Call of Duty franchise, eventually helping build competitive ESports into a global phenomenon. Bunting currently works as a start-up investor and advisor in the independent games ecosystem, guiding the next generation of creators shaping the future of gaming.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Eric-Shanks -->
    <div class="modal fade speaker-modal" id="Eric-Shanks" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Eric-Shanks.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Eric Shanks</h2>
              <p class="text-white m-0">CEO and Executive Producer, Fox Sports</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Eric Shanks is Chief Executive Officer and Executive Producer of FOX Sports. Shanks oversees all entities within FOX Sports, FS1, FS2; FOX Soccer Plus; FOX Deportes; FOX College Sports and FOX Sports Digital.</p>
            <p>An accomplished inventor, producer and executive, Shanks has worked his way up from a Broadcast Associate to CEO and Executive Producer. Named to the position in June 2010, he is believed to be the youngest executive to ever lead a broadcast network sports division.</p>
            <p>Named Sports Business Journal’s 2023 Sports Executive of the Year, Shanks is a winner of more than 20 Sports Emmy Awards and holder of 11 U.S. patents.</p>
            <p>Shanks served as Executive Vice President for DIRECTV from 2004 to 2010, where he invented the NFL RedZone Channel.</p>
            <p>In 2001, Shanks created Sky Italia’s sports networks for NewsCorp. He created Sky Sports 1 and 2 and oversaw the acquisition of Serie A rights and was the executive producer there during its inaugural launch season.</p>
            <p>Shanks also served on production crews for FOX Sports’ coverage of the NHL and MLB. Shanks helped develop the yellow first-down line and the FOXTrax “glowing puck.”</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Fabian-Scheuermann -->
    <div class="modal fade speaker-modal" id="Fabian-Scheuermann" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Fabian-Scheuermann.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Fabian Scheuermann</h2>
              <p class="text-white m-0">Chief Games Officer, Esports World Cup Foundation</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Fabian Scheuermann serves as the Chief Games Officer for the Esports World Cup Foundation, overseeing the management of all game titles and the relationship with the respective publishers featured in the competition. These include the biggest publishers and titles in esports. Before this role, he contributed to the continued success of ESL FACEIT Group, where he led global publisher partnerships and managed their core game portfolio for six and a half years. With over a decade of experience in the gaming and content industry, Fabian has consistently empowered publishers and partners worldwide. Before embarking on his career in gaming and esports, Fabian studied in the Netherlands, Australia, and Germany, earning an MBA before spending four years in consulting and M&A to kick off his career. In his free time, Fabian can be found competing in various sports, on his Peloton bike, or at home on the virtual battlegrounds of FPS and mobile MOBA titles.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ghada-Alhudaithi -->
    <div class="modal fade speaker-modal" id="Ghada-Alhudaithi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Ghada-Alhudaithi.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Ghada AlHudaithi</h2>
              <p class="text-white m-0">Co-Founder, Table Knight Games</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Ghada AlHudaithi is a driven individual with a passion for the gaming industry. This passion for gaming evolved over time, shaping her interests and sparking her entrepreneurial ambitions. Ghada recognized the potential for video games to engage and entertain audiences, and she became driven to turn this lifelong hobby into a professional pursuit. Holding a Master's degree in Business Administration specialized in Finance from Prince Sultan University, she has extensive experience in entrepreneurship, business development, and strategic management. As the Co-Founder of Table Knight Games, she has contributed to the company's expansion, with mobile game applications reaching top local and regional charts on the App Store and Google Play. Specializing in developing social games for mobile platforms, she has demonstrated her entrepreneurial spirit and technical proficiency. Motivated by innovation and impact, she is eager to take on new challenges and make a meaningful contribution to Saudi Arabia’s gaming ecosystem.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Heba-Atyah -->
    <div class="modal fade speaker-modal" id="Heba-Atyah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Heba-Atyah.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Dr. Heba Atyah</h2>
              <p class="text-white m-0">CEO & Founder, GameIT</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Dr. Heba Mohammed Atyah, CEO and Founder of GameIT, has transitioned from a distinguished medical career in speech pathology and developmental disabilities to become a pioneering entrepreneur in the world of serious games. With more than 10 years of clinical experience in King Faisal Specialist Hospital and Research Center working with children, she has successfully, also, led major initiatives across the USA, UAE, and KSA, fostering public-private partnerships and community empowerment projects. Dr. Atyah continues to drive transformative change by using clinical science with innovative gaming and AI technology, revolutionizing how children learn and thrive in the digital age. Her work has garnered multiple awards and recognition, including the Leap Aviatrix Award for the most innovative startup pioneered by women in 2022, the Best Female Founder Award by MCIT Saudi Arabia in 2023, and lately in 2024 winning Microsoft Power Women Awards for the Middle East.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Jonny-Ebbert -->
    <div class="modal fade speaker-modal" id="Jonny-Ebbert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Jonny-Ebbert.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Jonny Ebbert</h2>
              <p class="text-white m-0">Former CCO, Bungie</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Jonny Ebbert was the Chief Creative officer at Bungie for seven years. While there, he managed Bungie's portfolio strategy, all creative departments, and helped ensure product quality across all franchises. Prior to this, Jonny was at Blizzard Entertainment for seven years and worked as a lead designer on the Diablo and Starcraft franchises. Jonny was also at Relic Entertainment and was the game director for the Dawn of War franchise for five years.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Khaled-Makhshoush -->
    <div class="modal fade speaker-modal" id="Khaled-Makhshoush" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Khaled-Makhshoush.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Khaled Makhshoush</h2>
              <p class="text-white m-0">Artist</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Khaled is a digital artist who specializes in pixel art. He uses a drawing tablet, a stylus and a mouse to create atmospheric digital paintings that explore the relationship between emotions and space. He focuses on how the place feels like and draws imaginary places based on real ones, blending reality and imagination in his art and inviting the viewers to experience his vision. He is inspired by the modern and contemporary world and its diverse landscapes. He challenges himself to express his ideas and feelings with a limited and compact medium of pixel art, using colors, shapes and patterns to create detailed scenes that capture the essence of his imagination.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Michal-Blicharz -->
    <div class="modal fade speaker-modal" id="Michal-Blicharz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Michal-Blicharz.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Michal Blicharz</h2>
              <p class="text-white m-0">VP Product Development, ESL Faceit Group</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Michal “Carmac” Blicharz is an award-winning esports industry veteran of over 20 years. Having transitioned from competitive judo to electronic sports, he was a competitive gamer, journalist, and tournament organizer. He is also responsible for building tournament infrastructure for esports professionals worldwide. Currently, he is VP of Special Projects at ESL FACEIT GROUP.</p>
            <p>He was Esports Journalist of the Year in 2009 and 2010, was inducted into Esports Insider’s Hall of Fame in 2019 and received a lifetime achievement award from The Esports Awards in 2021. He is credited with turning the Intel Extreme Masters tournament series into one of the most valuable and prestigious properties in the world, taking its tournaments from trade shows into arenas in Europe, North and South America, Australia and Asia and setting landmark achievements.</p>
            <p>He is the father of the world’s oldest recurring arena event, Intel Extreme Masters Katowice which he started in 2013.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Peter-Hutton -->
    <div class="modal fade speaker-modal" id="Peter-Hutton" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Peter-Hutton.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Peter Hutton</h2>
              <p class="text-white m-0">Board Director, Saudi Pro League</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>​​Peter Hutton is Director of the Saudi Pro League and Chairman of the league’s media committee. He recently chaired the organising committee of the T20 Cricket World Cup and also sits on the board of the professional triathlon organisation and the rugby league. He also advises a series of tech companies, building on his previous experience as Head of Worldwide Sports Partnerships at Meta.</p>
            <p>Originally a sports commentator and presenter, Hutton rose to become CEO of the biggest TV sports channels in Europe, Asia and the Indian sub-continent (Eurosport, ESPN-Star Sports, Ten Sports). He also ran sports agency businesses including a spell as Co-CEO of MP and Silva, and over a decade at IMG.</p>
            <p>He is currently based in Silicon Valley, California after previously working in Paris, London, Moscow, Dubai, Singapore, Hong Kong and Delhi.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Reem-Alkanhal -->
    <div class="modal fade speaker-modal" id="Reem-Alkanhal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Reem-Alkanhal.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Reem AlKanhal</h2>
              <p class="text-white m-0">Creative Director & Fashion Designer</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>​From an early age, Reem AlKanhal knew her life would be forever linked with fashion, her instincts for fabric, form and a deep sense of how to connect her culture and the modern world have driven many of her collections which are never defined by season or trend, but mood and relevance.</p>
            <p>Born and raised in Saudi Arabia, she began experimenting with fashion as a student. Simple, stylish tops and skirts that women could wear in many ways formed part of her design philosophy which combines clean lines with drape curves, clean structures with the possibilities of freedom of individuality.</p>
            <p>Reem then took on a course at the “Art & Skills Institute” in Riyadh, where her knowledge of garment making developed. In 2010, one year after graduating, Reem founded her eponymous label – Reem AlKanhal, a modular ready-to-wear collection of clothes and accessories, with an unmistakable take to form, colour and aesthetic.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ricardo-Fort -->
    <div class="modal fade speaker-modal" id="Ricardo-Fort" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Ricardo-Fort.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Ricardo Fort</h2>
              <p class="text-white m-0">Founder, Sport by Fort Consulting</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Ricardo Fort is one of the most respected names in the global sponsorship business. As the only executive to lead the Global Sponsorship Departments of two FIFA and IOC sponsors – Visa and Coca-Cola – he successfully negotiated billions of dollars in sponsorship contracts with the International Olympic Committee, FIFA, UEFA, athletes, the NFL, Formula 1 and Formula 1 teams, and many other worldwide sports and entertainment properties. In 2021, he launched Sport by Fort Consulting, a company that helps sponsors, leagues, investors, and athletes successfully invest in sports. Among his current and former clients are leading global companies such as HP, McDonald’s, Salesforce, AB-InBev, and many more. Ricardo is also an advisor to multiple sports-tech startups, Federations, athletes, and clubs. Born and raised in Brazil, Ricardo holds a triple citizenship (USA, Italy and Brazil), has lived and worked in the USA, India, France and Brazil. He is currently based in Portugal.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Sam-Mathews -->
    <div class="modal fade speaker-modal" id="Sam-Mathews" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Sam-Mathews.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Sam Mathews</h2>
              <p class="text-white m-0">Club CEO, Fnatic</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Sam Mathews is the visionary founder and CEO of Fnatic, the world's leading esports team organization. With a passion for competitive gaming, Mathews established Fnatic in 2004, transforming it into a powerhouse within the esports industry, and driving youth culture. Under his leadership, Fnatic is widely regarded as the most successful esports organisation in the world with numerous championships across various games, including League of Legends, Valorant, Counter-Strike, and many more. Mathews' innovative approach has driven the team's success but also helped to shape the global esports landscape. Known for his strategic thinking and dedication, he has expanded Fnatic's influence through partnerships with the likes of Gucci, a thriving product portfolio supported by Sony, and state-of-the-art training facilities globally. Beyond esports, Mathews is a prominent advocate for the gaming community, striving to elevate esports to mainstream recognition.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Stefy-Bau -->
    <div class="modal fade speaker-modal" id="Stefy-Bau" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Stefy-Bau.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Stefy Bau</h2>
              <p class="text-white m-0">Founder and CEO, Init Esports</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Stefy Bau is a serial entrepreneur, a passionate speaker, a three-time motocross world champion, and Founder & CEO of Init Esports and Init Sports. With over 30 years in motorsports, e-mobility, and esports, she has pioneered global initiatives, promoting women's empowerment in sports and gaming. Stefy's Init Esports bridges the motorsports gap through sim racing, providing global access to motorsport experiences. Events like Race Me and Screen to Speed foster diversity and offer pathways to participation for women into real-world racing. The Sim 4 STEM program engages female students in motorsports-related STEM activities. Init Esports also creates a pathway via esports for the motorcycle world, Stefy’s first passion.</p>
            <p>Stefy was the first woman to race professionally with men in motocross history. After a career-ending injury, she managed the Women's World Motocross Championship and has been involved in motorsports her entire life. Inducted into the Motocross Legends in Stone in 2023, she serves on boards like WiST and GEF, advocating for women and minorities. Her core message is: "Be you and take the leap!"</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tim-Morten -->
    <div class="modal fade speaker-modal" id="Tim-Morten" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Tim-Morten.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Tim Morten</h2>
              <p class="text-white m-0">Co-Founder and CEO, Frost Giant Studios</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Tim Morten is the CEO and Co-Founder of Frost Giant Studios. He was previously the Production Director of StarCraft II, and he's excited to now be working on a new real-time strategy game called Stormgate. Tim got his start in the game industry in 1994 at Activision, and subsequently helped lead development teams at Electronic Arts and Blizzard.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Yannick-Theler -->
    <div class="modal fade speaker-modal" id="Yannick-Theler" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Yannick-Theler.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Yannick Theler</h2>
              <p class="text-white m-0">CEO, Steer Studios</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Yannick Theler brings 20 years of Ubisoft experience to Savvy Group, where he is CEO of Steer Studios – a Riyadh-based game development company on a mission to create groundbreaking experiences for players in Saudi Arabia and globally.</p>
            <p>Yannick began his career in the video game industry in Ubisoft's Swiss business office, working as Marketing & Sales Director for over 4 years. He was then appointed VP Business Development for Ubisoft’s business activities in Asia, based out of Shanghai, China.</p>
            <p>Following this, Yannick was appointed Executive Director at Ubisoft Shanghai where he oversaw the development of many AAA games before taking the challenge of founding the Ubisoft Abu Dhabi studio twelve years ago.</p>
            <p>Previously, Yannick worked in Wealth Management at UBS, and was a professional ice hockey player competing in the Swiss National Hockey League for seven seasons.</p>
            <p>He is married and has a 10-year-old son.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal HE-Abdullah-Alswaha -->
    <div class="modal fade speaker-modal" id="HE-Abdullah-Alswaha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/HE-Abdullah-Alswaha.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">H.E. Abdullah Alswaha</h2>
              <p class="text-white m-0">Minister of Communications and Information Technology, Kingdom of Saudi Arabia</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>His Excellency Engineer Abdullah Alswaha has over two decades of experience in leadership, innovation and entrepreneurship. Throughout his decade-long career, he built multi-billion riyal, high-performing organizations in the private and public sector. HE chairs the Communications, Space and Technology Commission, the Saudi Space Agency, the Research Development and Innovation Authority, the King Abdulaziz City for Science and Technology (KACST). HE is a member of several ministerial level social and economic committees, and sits on the boards of the MISK Foundation, NEOM and King Saud University. HE holds bachelor’s degrees in electrical engineering from the King Fahd University of Petroleum and Minerals (KFUPM) and computer science from the University of Washington, and has attended the Executive Education Program at Harvard Business School.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Andrzej-Antoszkiewicz -->
    <div class="modal fade speaker-modal" id="Andrzej-Antoszkiewicz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Andrzej-Antoszkiewicz.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Andrzej Antoszkiewicz</h2>
              <p class="text-white m-0">CEO & Managing Partner, OrdoStrategica LDA</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Andrzej Antoszkiewicz is the CEO & Managing Partner of OrdoStrategica, where he focuses on the future of sports and esports events. His portfolio career includes numerous international leadership functions, including FIFA, OECD, and NATO.</p>
            <p>At FIFA, as Global Head of Strategy, Planning, Innovation & Business Solutions, Andrzej had a profound impact on how FIFA planned and delivered World Cups. During his tenure, FIFA transformed its FWC operating model, reformed its host selection and bidding processes, revolutionised tournament innovation and implemented integrated planning.</p>
            <p>Andrzej also led the overall planning and coordination of two NATO Summits. In 2015, he was appointed as Principal NATO Summit Advisor to the Government of Poland, for which he was made Knight of the Order of Merit of the Republic of Poland.</p>
            <p>Holding an MBA from the University of Oxford, in 2022 Andrzej was recognized as one of the Global Top 100 Best and Brightest by Poets&Quants Magazine.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Becca-Henry -->
    <div class="modal fade speaker-modal" id="Becca-Henry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Becca-Henry.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Becca Henry</h2>
              <p class="text-white m-0">Senior Brand Communications Manager, G2 Esports</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Becca Henry is a communications and brand builder with a career of over 13 years in esports and gaming. A passionate expert in esports entertainment, she currently leads global communications and brand for G2 Esports, the most entertaining and innovative organization in esports, crafting strategies that authentically connect with G2’s audience, and enhance G2’s power of storytelling and unique tone of voice.</p>
            <p>Prior to G2, Becca was the VP of Communications for Misfits Gaming Group, where she leveraged her skills to strengthen and grow the brand identity of MGG, and increase awareness, visibility, and brand affinity across MGG’s growing list of properties.</p>
            <p>Before Misfits, Becca led European Esports Communications for Riot Games - from the inaugural year of the EU LCS, focusing on raising awareness of a sport in its infancy, all the way to the brand campaign that launched the LEC.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Danny-Tang -->
    <div class="modal fade speaker-modal" id="Danny-Tang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Danny-Tang.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Danny Tang</h2>
              <p class="text-white m-0">Co-Founder, CFO and Head of Global Strategy Office, VSPO</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>As a co-founder of VSPO, Danny has served as its CFO since inception in 2016 and has led various departments within the business. Ms. Tang previously served as a senior associate and then a vice president at China Development Bank Capital from 2010 to 2014. Prior to that, she served as an investment analyst at Kohlberg Kravis Roberts & Co. from 2007 to 2010.</p>
            <p>Ms. Tang received her bachelor’s degree in economics and mathematics with honors from Bryn Mawr College and her master’s degree of science in management from Stanford University.</p>
            <p>She is passionate about the long-term future of the esports industry, and was recognized as one of the Top 100 Asian-Pacific Women-Powered Leaders by J.P.Morgan and Ernst & Young in 2022.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Je-Alipio -->
    <div class="modal fade speaker-modal" id="Je-Alipio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Je-Alipio.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Je Alipio</h2>
              <p class="text-white m-0">Director & Head of Business Development, APAC & MENA, The Walt Disney Company</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Jê spearheads the gaming initiatives of The Walt Disney Company in Asia Pacific, Middle East & North Africa. He is focused on delivering high-quality gaming experiences across franchises that bring fans closer to their favourite stories and characters on digital platforms. He has over 20 years of experience in the gaming industry, having held various senior leadership positions in Electronic Arts for Asia Pacific as well as mid-sized and start up studios. He also currently serves as mentor for PIXEL, IGDA and studios under Info-communications Media Development Authority Singapore and Google’s Indie Games Accelerator as well as Board Advisor to the Singapore Games Association and Asosiasi Game Indonesia.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal John-Hanke -->
    <div class="modal fade speaker-modal" id="John-Hanke" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/John-Hanke.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">John Hanke</h2>
              <p class="text-white m-0">Founder & CEO, Niantic</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>John leads the development of Niantic's global-scale augmented reality platform that powers games including Pokémon GO, Pikmin Bloom, Monster Hunter Now, Peridot, and Ingress. Niantic’s AR platform is also used by developers around the world to create sophisticated AR experiences for phones and AR glasses.</p>
            <p>Incubated out of the Maps team at Google, Niantic first created Ingress and then Pokémon GO, a cultural phenomenon played by tens of millions of people each month. Earlier in his career, John was a founder of Archetype Interactive, creator of one of the very first online massively multiplayer games, Meridian 59. He went on to co-found Keyhole, a company dedicated to recreating a digital version of Earth, which was acquired by Google and led to the creation of Google Earth. John was Vice President of Google's Geo division, overseeing projects including Maps and Street View, for seven years before founding Niantic.</p>
            <p>John holds a BA from the University of Texas at Austin and an MBA from the Haas School of Business at UC Berkeley.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Michael-Metzger -->
    <div class="modal fade speaker-modal" id="Michael-Metzger" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Michael-Metzger.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Michael Metzger</h2>
              <p class="text-white m-0">Managing Partner, Drake Star</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Michael Metzger is a Managing Partner at Drake Star, a global media/tech investment bank with ~100 professionals across the U.S. and Europe. He has facilitated over 20 gaming and esports related M&A and financing transactions and is considered a global thought leader in the digital media and gaming space. Michael holds five patents in the field of communications and serves as the Chairman and Board Director of the German American Business Association in Southern California (GABA). He received an MBA from the Anderson School of Management at the University of California (UCLA), Los Angeles and an MSEE from the University of Ulm, Germany.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Mike-Milanov -->
    <div class="modal fade speaker-modal" id="Mike-Milanov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Mike-Milanov.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Mike Milanov</h2>
              <p class="text-white m-0">Chairman - Advisory Board, Gaming & Esports at Qiddiya</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Mike Milanov, 37, is a seasoned gaming and esports veteran with a unique blend of industry expertise, entrepreneurial drive and a passion for shaping the future. As Chairman of the Advisory Board, Gaming & Esports at Qiddiya, Milanov spearheads the development of the global gaming and esports hub, the Qiddiya City Gaming & Esports District, ensuring it boldly aligns with the Kingdom of Saudi Arabia's Vision 2030. He oversees projects ranging from cutting-edge esports arenas to themed gaming hotels, all infused with the latest technology and architectural excellence. Demonstrating his strategic foresight, Milanov has contributed to developing forward-looking projects in the gaming and esports industry extending into 2050.</p>
            <p>Prior to joining Qiddiya, Milanov served for years as Chief Operating Officer and Chief Business Development Officer at Team Liquid. In his position as CBDO, he led Liquid Enterprise’s new business endeavors through strategic partnerships and collaborations, mergers and acquisitions, co-branded licensing programs, and the creation of new revenue platforms. As COO, Milanov scaled Team Liquid from 10 to 250 full-time employees, where he managed multiple business units, including partnerships, original content production, apparel and new business. Beyond his commercial and operational responsibilities, Milanov leveraged his experience in video production, influencer management, sales and online streaming to help Liquid respond and adapt to industry trends. Under the Liquid Enterprises umbrella, Milanov spurred the development of 1UP Studios, Team Liquid’s in-house production company, the agency business of Liquid Media and the expansion of Liquid’s Apparel Unit, including partnerships and collaborations with the likes of Marvel and Naruto.</p>
            <p>Inspired by his background as a professional World of Warcraft gamer, Milanov brings a "world-first" mindset to Qiddiya. Drawing on strategic thinking and long-range planning, he collaborates with global industry stakeholders to position Qiddiya as the undisputed global epicenter of gaming and esports. In his spare time, he loves playing Fortnite, League of Legends and tennis, discovering fashion and restaurants, and producing music. He lives in LA.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ng-Ser-Miang -->
    <div class="modal fade speaker-modal" id="Ng-Ser-Miang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Ng-Ser-Miang.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Ng Ser Miang</h2>
              <p class="text-white m-0">Vice President, International Olympic Committee</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Ng Ser Miang is a Singaporean entrepreneur, sport administrator, sailor and retired Ambassador. He is a distinguished figure in the world of sports, with a career spanning over two decades of dedicated service to the International Olympic Committee (IOC). He has been an active IOC member since 1998. He currently serves as Chair of the IOC Finance Commission and Human Resources Committee and was on the IOC Executive Board for 16 years with 8 years as Vice President. He played a pivotal role in shaping the future of esports in the Olympic Movement through his position as Steering Committee Co-Chair of the inaugural Olympic Esports Week 2023 in Singapore. His commitment to promoting innovation in sports and advancing the Olympic movement has made him a respected leader and visionary within the international sports arena.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Shay-Segev -->
    <div class="modal fade speaker-modal" id="Shay-Segev" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Shay-Segev.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Shay Segev</h2>
              <p class="text-white m-0">CEO, DAZN Group</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Shay Segev is the CEO of DAZN Group, the global sports entertainment platform that connects sports fans across the world. Under his leadership, DAZN is revolutionizing the way people experience sports through its market-leading, proprietary technology. DAZN is the global home of European football, women’s football, NFL International, boxing, basketball, motorsports, golf, and many other sports.</p>
            <p>Before joining DAZN, Shay served as CEO of Entain, a FTSE 100 gaming company, where he drove remarkable growth. Previously, he was the COO of Playtech, a B2B gaming platform. Shay holds an MBA from the Kellogg School of Management and a degree in Computer Science.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Hosts & Moderators Section -->
    <section class="cs_pb_20 cs_pb_lg_55" id="speakers">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">HOSTS AND</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">MODERATORS</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/MJ-Acosta-Ruiz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#MJ-Acosta-Ruiz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">MJ Acosta-Ruiz</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Sportscaster, ESPN</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Joe-Pompliano.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Joe-Pompliano" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Joe Pompliano</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Managing Partner, Pomp Investments</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/OJ-Borg.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#OJ-Borg" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">OJ Borg</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Broadcaster / Executive Producer, STNDRD Films</p>
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
        </div>
      </div>
    </section>
    <!-- End Hosts & Moderators Section -->

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
                <p class="text-white cs_fs_12 m-0 lh-base">General Partner & Co-Founder, Andreessen Horowitz</p>
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
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Yannick-Theler.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Yannick-Theler" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Yannick Theler</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Steer Studios</p>
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
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Jens-Hilgers" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
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
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Faisal-Bin-Homran.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Faisal-Bin-Homran" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Faisal Mohammed Bin Homran</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Chief Product Officer, Esports World Cup Foundation</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Gabriel-Toledo.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Gabriel-Toledo" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Gabriel "FalleN" Toledo</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CS2 Player, FURIA Esports</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nanea-Reeves.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#Nanea-Reeves" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a> -->
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Nanea Reeves</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO & Co-Founder of TRIPP and Former SVP & COO of EA Online Group</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nick-Brown.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Nick-Brown" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Nick Brown</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Partner, Executive Producer, Good Boy Creative</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Shuji-Utsumi.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Shuji-Utsumi" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Shuji Utsumi</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">President & COO, SEGA Corporation</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Steve-Arhancet.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Steve-Arhancet" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Steve Arhancet</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Co-CEO, Team Liquid</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Arnold-Hur.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Arnold-Hur" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Arnold Hur</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, Gen.G Esports</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Bilal-Fares.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Bilal-Fares" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Bilal Fares</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">SVP & General Manager, Adidas EMC Market</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Bruce-Stein.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Bruce-Stein" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Bruce Stein</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Co-Founder aXiomatic Gaming, MD Juno Capital</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Craig-Levine.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Craig-Levine" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Craig Levine</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Co-CEO, ESL Faceit Group</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Dan-Bunting.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Dan-Bunting" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Dan Bunting</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Former Studio Head & Game Director, Call of Duty: Black Ops series</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Eric-Shanks.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Eric-Shanks" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Eric Shanks</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO and Executive Producer, Fox Sports</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Fabian-Scheuermann.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Fabian-Scheuermann" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Fabian Scheuermann</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Chief Games Officer, Esports World Cup Foundation</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ghada-Alhudaithi.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ghada-Alhudaithi" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Ghada Alhudaithi</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Co-Founder, Table Knight Games</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Heba-Atyah.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Heba-Atyah" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Dr. Heba Atyah</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO & Founder, GameIT</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Jonny-Ebbert.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Jonny-Ebbert" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Jonny Ebbert</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Former CCO, Bungie</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Khaled-Makhshoush.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Khaled-Makhshoush" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Khaled Makhshoush</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Artist</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Michal-Blicharz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Michal-Blicharz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Michal Blicharz</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">VP Product Development, ESL Faceit Group</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Peter-Hutton.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Peter-Hutton" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Peter Hutton</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Board Director, Saudi Pro League</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Reem-Alkanhal.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Reem-Alkanhal" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Reem AlKanhal</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Creative Director & Fashion Designer</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ricardo-Fort.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ricardo-Fort" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Ricardo Fort</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Founder, Sport by Fort Consulting</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Sam-Mathews.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Sam-Mathews" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Sam Mathews</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Club CEO, Fnatic</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Stefy-Bau.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Stefy-Bau" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Stefy Bau</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Founder and CEO, Init Esports</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Tim-Morten.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Tim-Morten" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Tim Morten</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Co-Founder and CEO, Frost Giant Studios</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/HE-Abdullah-Alswaha.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#HE-Abdullah-Alswaha" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">H.E. Abdullah Alswaha</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Minister of Communications and Information Technology, Kingdom of Saudi Arabia</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Andrzej-Antoszkiewicz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Andrzej-Antoszkiewicz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Andrzej Antoszkiewicz</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO & Managing Partner, OrdoStrategica LDA</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Becca-Henry.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Becca-Henry" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Becca Henry</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Senior Brand Communications Manager, G2 Esports</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Danny-Tang.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Danny-Tang" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Danny Tang</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Co-Founder, CFO and Head of Global Strategy Office, VSPO</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Je-Alipio.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Je-Alipio" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Je Alipio</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Director & Head of Business Development, APAC & MENA, The Walt Disney Company</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/John-Hanke.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#John-Hanke" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">John Hanke</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Founder & CEO, Niantic</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Michael-Metzger.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Michael-Metzger" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Michael Metzger</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Managing Partner, Drake Star</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Mike-Milanov.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Mike-Milanov" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Mike Milanov</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Chairman - Advisory Board, Gaming & Esports at Qiddiya</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ng-Ser-Miang.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ng-Ser-Miang" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Ng Ser Miang</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Vice President, International Olympic Committee</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Shay-Segev.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Shay-Segev" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Shay Segev</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO, DAZN Group</p>
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('dates-for-2024-event-and-major-expansion') }}">Riyadh’s New Global Sport Conference Unveils Dates for 2024</a></h2>
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
          <div class="col-lg-4">
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <a href="{{ url('the-rise-of-esports-athletes-as-modern-sport-heroes') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('the-rise-of-esports-athletes-as-modern-sport-heroes') }}">The New Global Sport Conference to discuss the rise of esports athletes</a></h2>
                  <!-- <div class="cs_post_subtitle">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host ...</div> -->
                </div>
                <a href="{{ url('the-rise-of-esports-athletes-as-modern-sport-heroes') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
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
              <a href="{{ url('global-industry-leaders-eager-to-share-insights-at-ngsc') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('global-industry-leaders-eager-to-share-insights-at-ngsc') }}">Global Industry Leaders Eager to Share Insights at the New Global Sport Conference in Riyadh</a></h2>
                  <!-- <div class="cs_post_subtitle">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host ...</div> -->
                </div>
                <a href="{{ url('global-industry-leaders-eager-to-share-insights-at-ngsc') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
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
              <a href="{{ url('game-on-saudi-arabia') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('game-on-saudi-arabia') }}">‘Game On, Saudi Arabia’: The New Global Sport Conference to discuss ‘Gaming and Sports as the Kingdom’s Gateway to the World’</a></h2>
                  <!-- <div class="cs_post_subtitle">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host ...</div> -->
                </div>
                <a href="{{ url('game-on-saudi-arabia') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
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
        <!-- <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">NEW GLOBAL SPORT CONFERENCE 2024</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">SPONSORS AND PARTNERS</h2>
          </div>
        </div> -->
        <div class="cs_brands d-flex cs_column_gap_25 cs_row_gap_25 flex-wrap justify-content-center">
          <div class="col-lg-7">
            <h5>STRATEGIC PARTNERS</h5>
            <div class="d-flex align-items-center">
              <div class="cs_brand col-3 col-lg-3">
                <a href="https://www.stc.com.sa/content/stc/sa/en/personal/home.html" target="_blank">
                  <img src="{{ asset('assets/img/partners/STC.svg') }}" alt="Partner">
                </a>
              </div>
              <div class="cs_brand col-3 col-lg-3">
                <a href="https://x.com/qiddiyagaming" target="_blank">
                  <img src="{{ asset('assets/img/partners/Qiddiya.svg') }}" alt="Partner" style="max-height:95px;">
                </a>
              </div>
              <div class="cs_brand col-6 col-lg-6">
                <a href="http://www.hmg.com/" target="_blank">
                  <img src="{{ asset('assets/img/partners/HMG.svg') }}" alt="Partner" style="max-height:50px;">
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 needs-separation">
            <h5>OFFICIAL PARTNERS</h5>
            <div class="d-flex cs_pt_20 align-items-center">
              <div class="cs_brand col-4 col-lg-4">
                <a href="https://www.honor.com/sa-ar/" target="_blank">
                  <img src="{{ asset('assets/img/partners/Honor.svg') }}" alt="Partner">
                </a>
              </div>
              <div class="cs_brand col-4 col-lg-4" style="padding-left:7%;">
                <a href="https://barns.com.sa/en" target="_blank">
                  <img src="{{ asset('assets/img/partners/Barns.svg') }}" alt="Partner" style="max-height:50px;">
                </a>
              </div>
              <div class="cs_brand col-4 col-lg-4">
                <a href="https://www.intel.com/content/www/us/en/homepage.html" target="_blank">
                  <img src="{{ asset('assets/img/partners/Intel.svg') }}" alt="Partner">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_brands longer-row d-flex cs_column_gap_25 cs_row_gap_25 flex-wrap justify-content-center">
          <div class="col-lg-12 cs_pt_70 cs_pt_lg_20">
            <h5>MEDIA PARTNERS</h5>
            <div class="d-flex align-items-center row">
              <div class="cs_brand col-3 col-lg-1">
                <a href="http://www.cnbcarabia.com/" target="_blank">
                  <img src="{{ asset('assets/img/partners/CNBC.svg') }}" alt="Partner" style="max-height:60px;">
                </a>
              </div>
              <div class="cs_brand col-5 col-lg-2">
                <a href="http://www.arabnews.com/" target="_blank">
                  <img src="{{ asset('assets/img/partners/ArabNews.svg') }}" alt="Partner">
                </a>
              </div>
              <div class="cs_brand col-4 col-lg-2">
                <a href="https://me.ign.com/ar/" target="_blank">
                  <img src="{{ asset('assets/img/partners/IGN.svg') }}" alt="Partner">
                </a>
              </div>
              <div class="cs_brand col-3 col-lg-2">
                <a href="https://www.agbi.com/" target="_blank">
                  <img src="{{ asset('assets/img/partners/AGBI.svg') }}" alt="Partner" style="max-height:35px;">
                </a>
              </div>
              <div class="cs_brand col-3 col-lg-2">
                <a href="https://www.true-gaming.net/" target="_blank">
                  <img src="{{ asset('assets/img/partners/TrueGaming.svg') }}" alt="Partner" style="max-height:50px;">
                </a>
              </div>
              <div class="cs_brand col-3 col-lg-2">
                <a href="https://www.tiktok.com/@tabah_sa" target="_blank">
                  <img src="{{ asset('assets/img/partners/Tabah.svg') }}" alt="Partner">
                </a>
              </div>
              <div class="cs_brand col-3 col-lg-2">
                <a href="https://mobidictum.com/" target="_blank">
                  <img src="{{ asset('assets/img/partners/Mobidictum.png') }}" alt="Partner">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Sponsors Section -->

    <!-- Start Apply to Join Section -->
    <!-- <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="apply-to-join">
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
    </section> -->
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