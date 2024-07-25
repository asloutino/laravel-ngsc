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

    <!-- Modal Andrew-Chen -->
    <div class="modal fade speaker-modal" id="Andrew-Chen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Andrew-Chen.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Andrew Chen</h2>
              <p class="text-white m-0">General Partner</p>
              <p class="text-white m-0">Andreessen Horowitz</p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Greg-Norman.png" alt="Member">
            </div>
            <div class="col-lg-8">
            <h2 class="modal-title fs-5" id="staticBackdropLabel">Greg Norman</h2>
              <p class="text-white m-0"></p>
              <p class="text-white m-0"></p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal HRH-Prince-Faisal-bin-Bandar -->
    <div class="modal fade speaker-modal" id="HRH-Prince-Faisal-bin-Bandar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/HRH-Prince-Faisal-bin-Bandar.png" alt="Member">
            </div>
            <div class="col-lg-8">
            <h2 class="modal-title fs-5" id="staticBackdropLabel">HRH Prince Faisal bin Bandar</h2>
              <p class="text-white m-0"></p>
              <p class="text-white m-0"></p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Joe-Marsh.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Joe Marsh</h2>
              <p class="text-white m-0">CEO</p>
              <p class="text-white m-0">T1 Entertainment Sports</p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Len-Blavantik.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Sir Leonard Blavatnik</h2>
              <p class="text-white m-0">Founder</p>
              <p class="text-white m-0">Access Industries</p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Lisa-Cosmas.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Lisa Cosmas Hanson</h2>
              <p class="text-white m-0">CEO</p>
              <p class="text-white m-0">Niko Partners</p>
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
          <div class="modal-header">
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Maya-Rogers.png" alt="Member">
            </div>
            <div class="col-lg-8">
            <h2 class="modal-title fs-5" id="staticBackdropLabel">Maya Rogers</h2>
              <p class="text-white m-0">Tetris</p>
              <p class="text-white m-0">CEO</p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/RJ-Cutler.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">R.J. Cutler</h2>
              <p class="text-white m-0">Oscar Nominated Documentary Filmmaker</p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Ralf-Reichert.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Ralf Reichert</h2>
              <p class="text-white m-0">CEO</p>
              <p class="text-white m-0">Esports World Cup Foundation</p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Songyee-Yoon.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Dr. Songyee Yoon</h2>
              <p class="text-white m-0">Principal Venture Partners</p>
              <p class="text-white m-0">Managing Partner</p>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Toshimoto-Mitomo.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Toshimoto Mitomo</h2>
              <p class="text-white m-0">Executive Deputy President and CSO</p>
              <p class="text-white m-0">Sony Group Corporation</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Toshimoto Mitomo joined Sony Group Corporation (former Sony Corporation) in 1985 and currently its Executive Deputy President and CSO in charge of Intellectual Property, Business & Technology Strategy, Business Development, Business Incubation Platform and Mobility Business. In these roles, Mitomo is responsible for mid-to-long term business development for the future growth of Sony and Sony’s global IP strategies, technology standardization activities. In addition, Mitomo heads Sony Innovation Fund which is Sony’s corporate venture capital as Senior Investment Executive.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Speakers Section -->
    <section class="cs_pb_60 cs_pb_lg_55">
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
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Andrew-Chen.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Andrew-Chen" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">Andrew Chen</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">Andreessen Horowitz</p>
                <p class="text-white cs_fs_12 m-0 lh-base">General Partner</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base"></p>
                <p class="text-white cs_fs_12 m-0 lh-base"></p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/HRH-Prince-Faisal-bin-Bandar.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#HRH-Prince-Faisal-bin-Bandar" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a> -->
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">HRH Prince Faisal bin Bandar</h2>
                <p class="text-white cs_fs_12 m-0 lh-base"></p>
                <p class="text-white cs_fs_12 m-0 lh-base"></p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">T1 Entertainment Sports</p>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">Access Industries</p>
                <p class="text-white cs_fs_12 m-0 lh-base">Founder</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">Niko Partners</p>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">Tetris</p>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">Oscar Nominated Documentary Filmmaker</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">Esports World Cup Foundation</p>
                <p class="text-white cs_fs_12 m-0 lh-base">CEO</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">Managing Partner</p>
                <p class="text-white cs_fs_12 m-0 lh-base">Principal Venture Partners</p>
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
                <p class="text-white cs_fs_12 m-0 lh-base">Sony Group Corporation</p>
                <p class="text-white cs_fs_12 m-0 lh-base">Executive Deputy President and CSO</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Speakers Section -->

    <!-- Start Topics Section -->
    <section class="background-filled cs_pt_0 cs_pt_lg_75 cs_pb_75 cs_pb_lg_80">
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
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_9.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_558_1348)">
                          <path d="M0 29.3084C0.203483 29.076 0.399139 28.8436 0.610448 28.6189C2.23048 26.9455 3.85834 25.2798 5.48621 23.6064C6.00274 23.0718 6.39405 23.0563 6.91058 23.5754C7.20798 23.8776 7.47408 24.2184 7.78713 24.5826C7.96713 24.3579 8.05322 24.2494 8.13931 24.141C9.56369 22.3513 11.3089 21.0343 13.6099 20.5307C14.9638 20.2363 16.3021 20.3138 17.6247 20.6702C18.8926 21.011 20.1761 21.1427 21.4831 21.1427C23.3457 21.1427 25.2084 21.1582 27.071 21.135C28.2528 21.1195 29.2154 21.4914 29.8963 22.5373C30.0137 22.4366 30.1154 22.3436 30.2094 22.2506C31.5789 20.9103 32.9407 19.5623 34.3181 18.2298C35.7269 16.874 38.0043 16.9824 39.2878 18.4622C40.2191 19.5391 40.2191 20.9258 39.2409 22.0957C38.106 23.4515 36.9399 24.7917 35.7816 26.1398C34.866 27.2089 33.919 28.2625 33.0346 29.3549C31.9076 30.7417 30.4128 31.3847 28.6832 31.4467C26.7501 31.5242 24.8014 31.4854 22.8683 31.4932C21.0057 31.5087 19.143 31.5087 17.2882 31.5397C16.6934 31.5474 16.1064 31.6481 15.4412 31.7178C15.5664 31.8573 15.6447 31.9503 15.7308 32.0355C16.2317 32.5313 16.2395 32.9264 15.7464 33.43C14.4786 34.7238 13.2029 36.0099 11.9272 37.3037C11.4811 37.753 11.0428 38.2101 10.5889 38.6594C10.1585 39.0855 9.75934 39.0933 9.3289 38.6904C6.33927 35.8704 3.32616 33.0349 0.328703 30.1994C0.203483 30.0754 0.109568 29.9127 0 29.7733C0 29.6183 0 29.4634 0 29.3084ZM9.04715 25.6207C10.6046 27.1159 12.1464 28.5879 13.6803 30.0832C13.8916 30.2923 14.0951 30.3466 14.369 30.3078C16.3021 30.0367 18.2508 29.9282 20.2074 29.9515C22.8996 29.9747 25.5997 29.9669 28.2919 29.9437C29.7946 29.9282 31.0468 29.4014 32.025 28.1851C33.379 26.5039 34.8268 24.9002 36.2356 23.2578C36.8538 22.5373 37.4799 21.8323 38.0747 21.104C38.6461 20.399 38.513 19.694 37.7539 19.1982C36.9869 18.6868 36.0634 18.7643 35.3982 19.4073C33.7781 20.9878 32.1581 22.576 30.5459 24.172C30.4441 24.2727 30.3581 24.4199 30.3346 24.5593C30.0685 26.3722 28.9885 27.3174 27.1415 27.3251C25.4745 27.3329 23.8075 27.3251 22.1405 27.3251C22.0387 27.3251 21.9292 27.3251 21.8274 27.3174C21.4518 27.2786 21.1779 27.0075 21.1387 26.6433C21.0996 26.2715 21.2952 25.9461 21.6553 25.8299C21.8118 25.7834 21.984 25.7756 22.1561 25.7756C23.8779 25.7679 25.5919 25.7679 27.3136 25.7756C27.8693 25.7756 28.3076 25.5742 28.5737 25.0861C29.1919 23.9473 28.4797 22.7387 27.1884 22.7387C25.3414 22.7387 23.4944 22.7309 21.6474 22.7387C20.1448 22.7464 18.6578 22.5992 17.2099 22.2041C13.6412 21.2125 10.7376 23.0796 9.04715 25.6207ZM14.2281 32.7637C11.5437 30.1839 8.89063 27.6427 6.2297 25.0861C4.76619 26.5891 3.34964 28.0534 1.90178 29.5408C4.60184 32.082 7.27059 34.5998 9.94717 37.1177C11.395 35.6535 12.7959 34.2202 14.2281 32.7637Z" fill="white"/>
                          <path d="M12.7025 7.30575C13.1955 7.72411 13.6651 8.12697 14.0956 8.49884C14.5416 8.11922 15.0112 7.72411 15.4808 7.32125C13.6808 4.87309 14.6512 2.26225 16.1617 1.03042C17.8678 -0.348598 20.3644 -0.317609 22.0157 1.10015C23.5653 2.43269 24.3245 5.01255 22.6105 7.3135C23.0801 7.70861 23.5497 8.11147 24.0036 8.49884C24.4419 8.12697 24.9036 7.73185 25.4045 7.30575C24.5201 6.1514 24.2071 4.83436 24.5671 3.37786C24.8332 2.32423 25.428 1.48752 26.3123 0.852236C28.0498 -0.395082 30.4446 -0.247883 32.0255 1.20087C33.489 2.52566 34.2012 5.05128 32.4794 7.35224C32.5577 7.40647 32.6438 7.46845 32.722 7.52268C33.9742 8.33615 34.6473 9.48275 34.6708 10.978C34.6864 12.1633 34.6786 13.3487 34.6708 14.534C34.663 15.5721 33.9429 16.3701 32.8942 16.4243C31.9316 16.4786 30.969 16.4476 30.0063 16.4476C28.4959 16.4476 26.9854 16.4708 25.4749 16.4321C25.021 16.4243 24.5749 16.2539 24.121 16.1687C24.0271 16.1532 23.9332 16.1532 23.8392 16.1764C23.4401 16.2617 23.041 16.4321 22.6418 16.4398C20.2313 16.4631 17.8287 16.4631 15.4182 16.4398C15.0269 16.4398 14.6434 16.2694 14.2521 16.1919C14.1425 16.1687 14.0173 16.1764 13.9077 16.1919C13.5164 16.2694 13.1329 16.4321 12.7416 16.4321C10.3311 16.4553 7.92846 16.4476 5.51797 16.4398C4.14838 16.4321 3.40488 15.6883 3.40488 14.3248C3.40488 13.2944 3.42054 12.264 3.40488 11.2336C3.3814 9.56797 4.06229 8.30516 5.50232 7.43746C5.53363 7.42196 5.5571 7.39097 5.61189 7.34449C4.74317 6.20563 4.39099 4.94282 4.70404 3.53281C4.93883 2.46368 5.51015 1.58823 6.39451 0.921962C8.18673 -0.418324 10.6285 -0.286619 12.2564 1.24735C13.8216 2.6961 14.2912 5.22947 12.7025 7.30575ZM28.9498 14.8671C30.1707 14.8671 31.3994 14.8671 32.6203 14.8671C32.9255 14.8671 33.129 14.7974 33.1212 14.441C33.1134 13.2402 33.1368 12.0471 33.1055 10.8463C33.0742 9.7694 32.3073 8.84747 31.2585 8.56856C31.1177 8.52983 30.9455 8.53758 30.8203 8.59181C29.5837 9.11088 28.3472 9.11088 27.1106 8.59181C26.9776 8.53758 26.8054 8.52983 26.6723 8.56856C25.5454 8.86296 24.8175 9.83912 24.8019 11.0709C24.7862 12.1633 24.794 13.2634 24.8019 14.3558C24.8019 14.7897 24.8801 14.8671 25.3341 14.8671C26.5315 14.8671 27.7445 14.8671 28.9498 14.8671ZM9.14153 14.8671C10.3781 14.8671 11.6146 14.8594 12.8512 14.8671C13.1564 14.8671 13.3208 14.7664 13.3208 14.4488C13.3129 13.2247 13.3442 12.0006 13.2973 10.7766C13.2581 9.73841 12.5146 8.86296 11.5051 8.58406C11.3485 8.53758 11.1372 8.54532 10.9885 8.6073C9.7598 9.11088 8.53891 9.11088 7.31019 8.59955C7.16931 8.54532 6.98148 8.53758 6.83278 8.57631C5.76841 8.87071 5.01709 9.81588 5.00144 10.9083C4.98579 12.0549 4.99361 13.2015 4.99361 14.3481C4.99361 14.8052 5.05622 14.8671 5.51015 14.8671C6.71539 14.8671 7.92846 14.8671 9.14153 14.8671ZM19.0496 14.8671C20.2705 14.8671 21.4914 14.8594 22.7201 14.8671C23.0566 14.8671 23.221 14.7587 23.221 14.4023C23.2053 13.2325 23.2288 12.0549 23.2053 10.885C23.1818 9.79264 22.4305 8.85522 21.3583 8.56856C21.2174 8.52983 21.0453 8.53758 20.92 8.59181C19.6835 9.11088 18.4469 9.11088 17.2104 8.59955C17.0695 8.54532 16.8817 8.53758 16.733 8.58406C15.6921 8.87071 14.9486 9.7694 14.9173 10.8385C14.886 12.0084 14.9017 13.1782 14.9017 14.3558C14.9017 14.8129 14.9643 14.8671 15.426 14.8671C16.6313 14.8671 17.8365 14.8671 19.0496 14.8671ZM19.0496 7.42196C20.6774 7.42196 22.0079 6.11267 22.0157 4.50122C22.0235 2.88203 20.6618 1.54175 19.0339 1.5495C17.4061 1.55724 16.0834 2.88203 16.0912 4.49348C16.0912 6.11267 17.4217 7.42971 19.0496 7.42196ZM12.1077 4.48573C12.0999 2.87429 10.7694 1.55724 9.14936 1.55724C7.52932 1.55724 6.19103 2.88203 6.1832 4.48573C6.17538 6.10492 7.52932 7.42971 9.17283 7.42196C10.7929 7.42196 12.1155 6.09717 12.1077 4.48573ZM25.9993 4.47798C25.9915 6.09717 27.2984 7.42196 28.9263 7.42971C30.5776 7.43746 31.9238 6.12041 31.9238 4.49348C31.9238 2.88978 30.5855 1.56499 28.9654 1.55724C27.3376 1.5495 26.0071 2.86654 25.9993 4.47798Z" fill="white"/>
                          <path d="M19.4795 26.5193C19.4873 26.9686 19.1508 27.3018 18.7047 27.3095C18.2664 27.3095 17.922 26.9686 17.9064 26.527C17.8986 26.1009 18.2507 25.7446 18.689 25.7368C19.1351 25.7368 19.4716 26.0699 19.4795 26.5193Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_558_1348">
                          <rect width="40" height="39" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Human Resources <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_10.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_516_334)">
                          <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                          <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                          <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                          <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                          <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                          <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_516_334">
                          <rect width="40" height="40" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Strategy <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_11.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_558_1335)">
                          <path d="M39.9993 21.646C39.791 22.0314 39.6348 22.4585 39.3743 22.7918C38.9785 23.2814 38.4056 23.4897 37.7806 23.5002C36.9785 23.5106 36.166 23.5106 35.3639 23.5002C34.7389 23.4897 34.3014 23.0835 34.3118 22.5314C34.3223 21.9897 34.7389 21.6043 35.3535 21.5939C36.1035 21.5835 36.8639 21.5835 37.6139 21.5939C37.9681 21.6043 38.1035 21.4481 38.1035 21.1043C38.0931 20.3752 38.0931 19.646 38.1035 18.9168C38.1139 18.5418 37.9473 18.4168 37.5827 18.4168C36.791 18.4272 35.9993 18.4272 35.1973 18.4168C34.4889 18.4168 34.1764 18.1772 34.041 17.4585C33.6452 15.4064 32.8743 13.5314 31.6868 11.8127C31.3118 11.271 31.3743 10.8543 31.8431 10.3856C32.4056 9.82308 32.9681 9.26058 33.5306 8.69808C33.8639 8.36475 33.8535 8.271 33.5202 7.92725C33.0202 7.42725 32.5202 6.93766 32.0306 6.42725C31.7806 6.15641 31.5827 6.146 31.3223 6.41683C30.7702 7.00016 30.1868 7.56266 29.6139 8.13558C29.1243 8.61475 28.7181 8.66683 28.1556 8.28141C26.4368 7.09391 24.5514 6.32308 22.4993 5.93766C21.8223 5.81266 21.5827 5.48975 21.5723 4.80225C21.5723 4.00016 21.5618 3.18766 21.5723 2.38558C21.5827 2.03141 21.4368 1.896 21.0827 1.896C20.3535 1.90641 19.6243 1.90641 18.8952 1.896C18.5202 1.88558 18.3952 2.05225 18.3952 2.41683C18.4056 3.2085 18.4056 4.00016 18.3952 4.80225C18.3952 5.521 18.1452 5.82308 17.4368 5.9585C15.4056 6.34391 13.5306 7.11475 11.8223 8.29183C11.2389 8.69808 10.8431 8.646 10.3327 8.13558C9.79102 7.55225 9.20768 6.98975 8.64518 6.41683C8.41602 6.17725 8.22852 6.16683 7.99935 6.40641C7.47852 6.94808 6.93685 7.47933 6.39518 8.01058C6.16602 8.22933 6.17643 8.42725 6.39518 8.646C6.97852 9.21891 7.56185 9.80225 8.13477 10.3856C8.61393 10.8752 8.66602 11.2814 8.2806 11.8439C7.0931 13.5627 6.32227 15.4481 5.93685 17.5002C5.81185 18.1772 5.48893 18.4272 4.80143 18.4272C3.99935 18.4272 3.18685 18.4377 2.38477 18.4272C2.0306 18.4168 1.88477 18.5627 1.89518 18.9168C1.9056 19.646 1.9056 20.3752 1.89518 21.1043C1.88477 21.4793 2.05143 21.6147 2.41602 21.6043C3.20768 21.5835 3.99935 21.5939 4.80143 21.6043C5.52018 21.6043 5.82227 21.8439 5.95768 22.5522C6.3431 24.5835 7.11393 26.4585 8.29102 28.1668C8.69727 28.7502 8.64518 29.146 8.13477 29.6564C7.57227 30.2189 7.02018 30.7918 6.44727 31.3335C6.17643 31.5939 6.18685 31.8022 6.45768 32.0522C6.97852 32.5522 7.4681 33.0627 7.97852 33.5731C8.30143 33.896 8.36393 33.896 8.70768 33.5627C9.2806 32.9897 9.8431 32.4168 10.416 31.8543C10.8639 31.4064 11.2806 31.3752 11.8223 31.7085C12.4368 32.0939 13.0618 32.4585 13.6973 32.8231C14.2493 33.146 14.4577 33.6564 14.1973 34.1564C13.9473 34.6564 13.3848 34.8022 12.8223 34.5106C12.3118 34.2502 11.8223 33.9585 11.2806 33.6668C10.8535 34.0939 10.4368 34.5314 9.99935 34.9585C8.98893 35.9585 7.68685 35.9689 6.67643 34.9689C6.13477 34.4272 5.58268 33.8856 5.05143 33.3335C4.07227 32.3335 4.07227 31.0418 5.06185 30.0418C5.48893 29.6043 5.92643 29.1877 6.38477 28.7397C5.36393 27.1147 4.63477 25.396 4.2181 23.5106C3.7181 23.5106 3.22852 23.5106 2.72852 23.5106C1.12435 23.5106 0.593099 23.146 0.00976562 21.6564C0.00976562 20.5314 0.00976562 19.4168 0.00976562 18.2918C0.030599 18.271 0.0514323 18.2606 0.061849 18.2397C0.520182 16.9897 1.18685 16.5106 2.52018 16.5106C3.08268 16.5106 3.63477 16.5106 4.20768 16.5106C4.63477 14.6356 5.35352 12.9064 6.37435 11.2918C5.9056 10.8231 5.45768 10.396 5.02018 9.94808C4.07227 8.97933 4.08268 7.67725 5.0306 6.7085C5.54102 6.18766 6.06185 5.67725 6.57227 5.15641C7.68685 4.04183 8.97852 4.04183 10.1035 5.16683C10.4993 5.56266 10.8848 5.96891 11.2806 6.37516C12.916 5.3335 14.6556 4.62516 16.5098 4.19808C16.5098 3.53141 16.5098 2.90641 16.5098 2.28141C16.5202 1.53141 16.7806 0.895996 17.3952 0.458496C17.6868 0.250163 18.041 0.145996 18.3639 -0.0102539C19.4577 -0.0102539 20.5514 -0.0102539 21.6452 -0.0102539C23.1035 0.541829 23.4993 1.12516 23.4993 2.71891C23.4993 3.2085 23.4993 3.69808 23.4993 4.13558C24.4473 4.4585 25.3431 4.71891 26.2077 5.07308C27.0723 5.42725 27.8848 5.88558 28.7702 6.32308C29.1764 5.90641 29.6035 5.44808 30.0514 5.021C30.9993 4.09391 32.3535 4.09391 33.3014 5.021C33.8535 5.56266 34.3952 6.10433 34.9264 6.646C35.9473 7.67725 35.9368 8.9585 34.916 10.0002C34.4993 10.4272 34.0618 10.8335 33.6556 11.2293C33.666 11.3127 33.666 11.3439 33.6764 11.3647C34.6139 12.896 35.3223 14.521 35.7389 16.271C35.7598 16.3647 35.9473 16.4897 36.0618 16.4897C36.6243 16.5106 37.1764 16.4897 37.7389 16.5002C38.7077 16.521 39.4993 17.0627 39.8431 17.9168C39.8952 18.0627 39.9473 18.2085 39.9993 18.3543C39.9993 19.4585 39.9993 20.5522 39.9993 21.646Z" fill="white"/>
                          <path d="M17.4266 40.0001C16.7807 39.823 16.1766 39.5626 15.7287 39.0314C14.9266 38.0834 14.8328 36.8439 15.4995 35.6876C17.4578 32.2918 19.4162 28.9064 21.3745 25.5209C22.6141 23.3751 23.8432 21.2084 25.1037 19.073C26.0099 17.5209 28.0099 17.1772 29.3328 18.323C29.5932 18.5522 29.812 18.8334 29.9891 19.1355C33.1974 24.6668 36.3953 30.2084 39.5828 35.7605C39.7703 36.0834 39.8641 36.448 39.9995 36.8022C39.9995 37.0939 39.9995 37.3751 39.9995 37.6668C39.8016 38.0834 39.6557 38.5314 39.4057 38.9064C38.9995 39.5314 38.3432 39.8126 37.6557 40.0105C30.9162 40.0001 24.1662 40.0001 17.4266 40.0001ZM27.5203 38.1043C30.1662 38.1043 32.8016 38.1043 35.4474 38.1043C36.0203 38.1043 36.5932 38.1147 37.1662 38.0939C37.937 38.0626 38.312 37.3959 37.9474 36.7189C37.9057 36.6459 37.8641 36.5834 37.8328 36.5209C35.4787 32.4376 33.1141 28.3439 30.7599 24.2605C29.9578 22.8647 29.1557 21.4689 28.3432 20.073C27.937 19.3855 27.1557 19.3855 26.7391 20.0626C26.687 20.1355 26.6453 20.2189 26.6037 20.3022C24.2912 24.3126 21.9787 28.323 19.6557 32.3334C18.812 33.7814 17.9787 35.2397 17.1453 36.6876C16.7287 37.4272 17.1141 38.0834 17.9682 38.1147C18.0724 38.1147 18.1766 38.1147 18.2807 38.1147C21.3432 38.1043 24.4266 38.1043 27.5203 38.1043Z" fill="white"/>
                          <path d="M37.6562 40C38.3542 39.8021 39.0104 39.5208 39.4062 38.8958C39.6562 38.5104 39.8021 38.0729 40 37.6562C40 38.4375 40 39.2188 40 40C39.2188 40 38.4375 40 37.6562 40Z" fill="white"/>
                          <path d="M8.8946 19.99C8.91543 14.4796 12.8842 9.86498 18.3633 9.01082C22.7384 8.32332 27.3425 10.5212 29.5613 14.3442C29.8842 14.9067 29.8009 15.4483 29.3217 15.7504C28.8321 16.0525 28.28 15.8962 27.9363 15.3337C26.5196 13.0317 24.4988 11.5837 21.8633 11.0004C16.8946 9.89623 11.7592 13.3858 10.9467 18.4067C10.2696 22.615 12.28 26.49 16.1133 28.3546C16.4258 28.5108 16.7071 28.6775 16.8008 29.0421C16.8946 29.4067 16.8217 29.7504 16.53 30.0004C16.2071 30.2921 15.8321 30.3129 15.4363 30.1358C14.2071 29.5733 13.1029 28.8129 12.155 27.8546C10.0613 25.7712 8.88418 22.9275 8.8946 19.99Z" fill="white"/>
                          <path d="M28.4681 27.6043C28.4681 28.5002 28.4785 29.396 28.4681 30.3022C28.4473 31.0522 27.8118 31.5106 27.166 31.2397C26.7806 31.0835 26.5723 30.771 26.5723 30.3543C26.5618 28.5106 26.5618 26.6564 26.5723 24.8127C26.5723 24.2606 26.9993 23.8647 27.5098 23.8647C28.0202 23.8647 28.4473 24.2502 28.4577 24.8022C28.4889 25.7293 28.4681 26.6668 28.4681 27.6043Z" fill="white"/>
                          <path d="M28.478 34.1981C28.478 34.7189 28.0718 35.146 27.551 35.1564C27.0197 35.1668 26.5718 34.7189 26.5822 34.1981C26.5926 33.6877 27.0197 33.271 27.5301 33.271C28.051 33.271 28.4676 33.6772 28.478 34.1981Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_558_1335">
                          <rect width="40" height="40" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                                                       
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Risk Management <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_12.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_558_1320)">
                          <path d="M16.875 0C17.8438 0.21875 18.5417 0.84375 19.2188 1.52083C21.1875 3.52083 23.1979 5.48958 25.1771 7.48958C26.7812 9.11458 26.3125 11.7604 24.2396 12.6042C23.7396 12.8021 23.1563 12.8229 22.6042 12.8229C22.3125 12.8229 22.0938 12.8438 21.8958 13.0729C21.7083 13.2813 21.4688 13.4479 21.2396 13.6563C22.7188 14.5521 23.0208 16.1667 21.9792 17.4688C23.2604 18.5833 24.5417 19.7083 25.8229 20.8333C28.5729 23.2292 31.3125 25.625 34.0625 28.0208C35.4167 29.1979 36.75 30.3958 38.125 31.5521C39.1458 32.4062 39.7708 33.4688 40.0104 34.7708C40.0104 35.1354 40.0104 35.5 40.0104 35.8646C39.9792 35.9583 39.9583 36.0625 39.9375 36.1563C39.5625 37.8958 38.5417 39.0833 36.8854 39.7292C36.5625 39.8542 36.2083 39.9167 35.875 40.0104C35.4792 40.0104 35.0938 40.0104 34.6979 40.0104C34.6771 39.9896 34.6562 39.9688 34.6354 39.9583C33.3438 39.7708 32.3542 39.0938 31.5208 38.125C28.2813 34.375 25.0208 30.6354 21.7604 26.8958C20.3333 25.2604 18.9063 23.6146 17.4792 21.9792C16 23.1042 14.4583 22.5729 13.6563 21.2188C13.4688 21.4479 13.3125 21.6875 13.1146 21.8646C12.8646 22.0833 12.8021 22.3125 12.8542 22.6458C13 23.6458 12.6771 24.5208 11.9583 25.2396C10.7083 26.4792 8.78125 26.4479 7.47917 25.1563C5.5 23.1979 3.55208 21.2083 1.5625 19.25C0.864583 18.5625 0.21875 17.8646 0 16.875C0 16.5625 0 16.25 0 15.9375C0.0208333 15.9063 0.0416667 15.8646 0.0520833 15.8333C0.572917 13.9375 1.84375 13.0833 3.76042 13.3229C3.875 13.3333 4.03125 13.2604 4.11458 13.1771C7.13542 10.1667 10.1563 7.14583 13.1667 4.125C13.2604 4.03125 13.3125 3.83333 13.2917 3.69792C13.0833 2.33333 13.6979 1.02083 14.9167 0.385417C15.2396 0.21875 15.5938 0.135417 15.9375 0.0104167C16.25 0 16.5625 0 16.875 0ZM14.1875 5.42708C11.2708 8.34375 8.33333 11.2812 5.44792 14.1667C7.61458 16.3333 9.8125 18.5313 11.9688 20.6875C14.875 17.7813 17.8021 14.8542 20.7188 11.9375C18.5521 9.78125 16.3646 7.60417 14.1875 5.42708ZM18.5938 20.8854C21.375 24.0833 24.1667 27.2812 26.9167 30.4479C28.1042 29.2708 29.2708 28.1146 30.4479 26.9375C27.2708 24.1667 24.0625 21.3646 20.8854 18.5938C20.1146 19.3646 19.375 20.1042 18.5938 20.8854ZM34.1042 30.1146C32.75 31.4688 31.4375 32.7812 30.1042 34.1146C31.1146 35.25 32.0938 36.4688 33.1875 37.5729C34.375 38.7813 36.3125 38.6979 37.5104 37.5C38.7188 36.2917 38.8021 34.3958 37.5833 33.1875C36.4688 32.1146 35.25 31.125 34.1042 30.1146ZM16.2917 1.5625C15.7083 1.60417 15.2083 1.89583 14.9583 2.5C14.6875 3.13542 14.7917 3.72917 15.2917 4.22917C17.4896 6.4375 19.6979 8.64583 21.9167 10.8542C22.5521 11.4896 23.5104 11.4792 24.125 10.8646C24.7292 10.25 24.75 9.29167 24.1146 8.65625C21.9167 6.4375 19.7083 4.23958 17.5 2.03125C17.1771 1.71875 16.8021 1.5625 16.2917 1.5625ZM3.1875 14.7292C3.16667 14.7604 3.15625 14.7917 3.13542 14.8333C2.5 14.8333 1.96875 15.1667 1.70833 15.7396C1.4375 16.3333 1.53125 16.9896 2 17.4688C4.20833 19.6875 6.42708 21.9063 8.64583 24.1146C9.28125 24.7396 10.25 24.7188 10.8542 24.1146C11.4688 23.5 11.4792 22.5521 10.8333 21.9063C8.64583 19.6875 6.4375 17.4792 4.21875 15.2917C3.94792 15.0208 3.54167 14.9167 3.1875 14.7292ZM15.0521 20.1354C15.0625 20.5938 15.2292 20.8333 15.5313 20.9583C15.8646 21.1042 16.1667 21.0104 16.4271 20.7604C17.875 19.3125 19.3229 17.875 20.7604 16.4271C21.1146 16.0729 21.1146 15.5938 20.8021 15.2812C20.4792 14.9688 20.0104 14.9792 19.6562 15.3438C18.2188 16.7708 16.7812 18.2083 15.3542 19.6562C15.1875 19.8021 15.1146 20.0313 15.0521 20.1354ZM31.7604 28.0833C30.5208 29.3229 29.3021 30.5417 28.0729 31.7708C28.375 32.1146 28.6979 32.4896 29 32.8229C30.2917 31.5417 31.5417 30.2813 32.8229 29.0104C32.4583 28.6979 32.0833 28.3646 31.7604 28.0833Z" fill="white"/>
                          <path d="M0 37.8957C0.135417 37.4894 0.25 37.0728 0.427083 36.6873C0.739583 36.0103 1.11458 35.6457 2.04167 34.9894C1.90625 34.6665 1.73958 34.3644 1.65625 34.0311C1.21875 32.3019 2.5 30.6353 4.29167 30.6353C8.71875 30.6248 13.1458 30.6248 17.5729 30.6353C19.7083 30.6457 20.9896 32.8644 19.9583 34.729C19.9167 34.8019 19.875 34.8853 19.8333 34.9686C20.0625 35.1353 20.2917 35.2811 20.5 35.4582C21.7083 36.479 22.0208 37.8332 21.8646 39.3332C21.8437 39.5728 21.5312 39.7811 21.3542 40.0103C14.2396 40.0103 7.13542 40.0103 0.0208333 40.0103C0 39.2915 0 38.5936 0 37.8957ZM20.2917 38.4269C20.2917 37.0936 19.25 36.104 17.8854 36.0936C13.7708 36.0936 9.65625 36.0936 5.54167 36.0936C4.95833 36.0936 4.36458 36.0832 3.78125 36.104C2.54167 36.1457 1.46875 37.2915 1.60417 38.4269C7.82292 38.4269 14.0417 38.4269 20.2917 38.4269ZM10.9792 32.1873C8.80208 32.1873 6.63542 32.1769 4.45833 32.1978C4.1875 32.1978 3.88542 32.2707 3.64583 32.3957C3.20833 32.6353 3.03125 33.1769 3.15625 33.6457C3.3125 34.1978 3.75 34.5311 4.38542 34.5311C8.73958 34.5311 13.1042 34.5311 17.4583 34.5311C17.5312 34.5311 17.6146 34.5311 17.6875 34.5207C18.1458 34.4478 18.4792 34.2082 18.6562 33.7707C18.9688 32.979 18.3854 32.1873 17.4896 32.1873C15.3229 32.1873 13.1562 32.1873 10.9792 32.1873Z" fill="white"/>
                          <path d="M35.8643 39.9998C36.1976 39.9061 36.5518 39.8436 36.8747 39.7186C38.5309 39.0728 39.5518 37.8853 39.9268 36.1457C39.9476 36.0519 39.9788 35.9478 39.9997 35.854C39.9997 37.2394 39.9997 38.6144 39.9997 39.9998C38.6247 39.9998 37.2393 39.9998 35.8643 39.9998Z" fill="white"/>
                          <path d="M14.1456 7.80225C14.781 7.88558 15.1352 8.51058 14.8435 9.021C14.781 9.13558 14.6872 9.22933 14.5935 9.32308C13.5727 10.3439 12.5518 11.3647 11.531 12.3856C11.4685 12.4481 11.406 12.5106 11.3227 12.5627C10.9893 12.8022 10.5622 12.771 10.2914 12.4897C9.99974 12.1877 9.98933 11.7606 10.281 11.4272C10.6039 11.0731 10.9581 10.7397 11.2914 10.396C12.031 9.65641 12.7602 8.91683 13.5102 8.18766C13.6872 8.04183 13.9372 7.93766 14.1456 7.80225Z" fill="white"/>
                          <path d="M8.6669 14.9377C8.2294 14.9481 7.89606 14.6252 7.87523 14.1981C7.86481 13.7502 8.20856 13.396 8.64606 13.396C9.06273 13.396 9.4169 13.7502 9.42731 14.1668C9.43773 14.5835 9.09398 14.9377 8.6669 14.9377Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_558_1320">
                          <rect width="40" height="40" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Legal <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_9.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#ww231234)">
                          <path d="M0 29.3084C0.203483 29.076 0.399139 28.8436 0.610448 28.6189C2.23048 26.9455 3.85834 25.2798 5.48621 23.6064C6.00274 23.0718 6.39405 23.0563 6.91058 23.5754C7.20798 23.8776 7.47408 24.2184 7.78713 24.5826C7.96713 24.3579 8.05322 24.2494 8.13931 24.141C9.56369 22.3513 11.3089 21.0343 13.6099 20.5307C14.9638 20.2363 16.3021 20.3138 17.6247 20.6702C18.8926 21.011 20.1761 21.1427 21.4831 21.1427C23.3457 21.1427 25.2084 21.1582 27.071 21.135C28.2528 21.1195 29.2154 21.4914 29.8963 22.5373C30.0137 22.4366 30.1154 22.3436 30.2094 22.2506C31.5789 20.9103 32.9407 19.5623 34.3181 18.2298C35.7269 16.874 38.0043 16.9824 39.2878 18.4622C40.2191 19.5391 40.2191 20.9258 39.2409 22.0957C38.106 23.4515 36.9399 24.7917 35.7816 26.1398C34.866 27.2089 33.919 28.2625 33.0346 29.3549C31.9076 30.7417 30.4128 31.3847 28.6832 31.4467C26.7501 31.5242 24.8014 31.4854 22.8683 31.4932C21.0057 31.5087 19.143 31.5087 17.2882 31.5397C16.6934 31.5474 16.1064 31.6481 15.4412 31.7178C15.5664 31.8573 15.6447 31.9503 15.7308 32.0355C16.2317 32.5313 16.2395 32.9264 15.7464 33.43C14.4786 34.7238 13.2029 36.0099 11.9272 37.3037C11.4811 37.753 11.0428 38.2101 10.5889 38.6594C10.1585 39.0855 9.75934 39.0933 9.3289 38.6904C6.33927 35.8704 3.32616 33.0349 0.328703 30.1994C0.203483 30.0754 0.109568 29.9127 0 29.7733C0 29.6183 0 29.4634 0 29.3084ZM9.04715 25.6207C10.6046 27.1159 12.1464 28.5879 13.6803 30.0832C13.8916 30.2923 14.0951 30.3466 14.369 30.3078C16.3021 30.0367 18.2508 29.9282 20.2074 29.9515C22.8996 29.9747 25.5997 29.9669 28.2919 29.9437C29.7946 29.9282 31.0468 29.4014 32.025 28.1851C33.379 26.5039 34.8268 24.9002 36.2356 23.2578C36.8538 22.5373 37.4799 21.8323 38.0747 21.104C38.6461 20.399 38.513 19.694 37.7539 19.1982C36.9869 18.6868 36.0634 18.7643 35.3982 19.4073C33.7781 20.9878 32.1581 22.576 30.5459 24.172C30.4441 24.2727 30.3581 24.4199 30.3346 24.5593C30.0685 26.3722 28.9885 27.3174 27.1415 27.3251C25.4745 27.3329 23.8075 27.3251 22.1405 27.3251C22.0387 27.3251 21.9292 27.3251 21.8274 27.3174C21.4518 27.2786 21.1779 27.0075 21.1387 26.6433C21.0996 26.2715 21.2952 25.9461 21.6553 25.8299C21.8118 25.7834 21.984 25.7756 22.1561 25.7756C23.8779 25.7679 25.5919 25.7679 27.3136 25.7756C27.8693 25.7756 28.3076 25.5742 28.5737 25.0861C29.1919 23.9473 28.4797 22.7387 27.1884 22.7387C25.3414 22.7387 23.4944 22.7309 21.6474 22.7387C20.1448 22.7464 18.6578 22.5992 17.2099 22.2041C13.6412 21.2125 10.7376 23.0796 9.04715 25.6207ZM14.2281 32.7637C11.5437 30.1839 8.89063 27.6427 6.2297 25.0861C4.76619 26.5891 3.34964 28.0534 1.90178 29.5408C4.60184 32.082 7.27059 34.5998 9.94717 37.1177C11.395 35.6535 12.7959 34.2202 14.2281 32.7637Z" fill="white"/>
                          <path d="M12.7025 7.30575C13.1955 7.72411 13.6651 8.12697 14.0956 8.49884C14.5416 8.11922 15.0112 7.72411 15.4808 7.32125C13.6808 4.87309 14.6512 2.26225 16.1617 1.03042C17.8678 -0.348598 20.3644 -0.317609 22.0157 1.10015C23.5653 2.43269 24.3245 5.01255 22.6105 7.3135C23.0801 7.70861 23.5497 8.11147 24.0036 8.49884C24.4419 8.12697 24.9036 7.73185 25.4045 7.30575C24.5201 6.1514 24.2071 4.83436 24.5671 3.37786C24.8332 2.32423 25.428 1.48752 26.3123 0.852236C28.0498 -0.395082 30.4446 -0.247883 32.0255 1.20087C33.489 2.52566 34.2012 5.05128 32.4794 7.35224C32.5577 7.40647 32.6438 7.46845 32.722 7.52268C33.9742 8.33615 34.6473 9.48275 34.6708 10.978C34.6864 12.1633 34.6786 13.3487 34.6708 14.534C34.663 15.5721 33.9429 16.3701 32.8942 16.4243C31.9316 16.4786 30.969 16.4476 30.0063 16.4476C28.4959 16.4476 26.9854 16.4708 25.4749 16.4321C25.021 16.4243 24.5749 16.2539 24.121 16.1687C24.0271 16.1532 23.9332 16.1532 23.8392 16.1764C23.4401 16.2617 23.041 16.4321 22.6418 16.4398C20.2313 16.4631 17.8287 16.4631 15.4182 16.4398C15.0269 16.4398 14.6434 16.2694 14.2521 16.1919C14.1425 16.1687 14.0173 16.1764 13.9077 16.1919C13.5164 16.2694 13.1329 16.4321 12.7416 16.4321C10.3311 16.4553 7.92846 16.4476 5.51797 16.4398C4.14838 16.4321 3.40488 15.6883 3.40488 14.3248C3.40488 13.2944 3.42054 12.264 3.40488 11.2336C3.3814 9.56797 4.06229 8.30516 5.50232 7.43746C5.53363 7.42196 5.5571 7.39097 5.61189 7.34449C4.74317 6.20563 4.39099 4.94282 4.70404 3.53281C4.93883 2.46368 5.51015 1.58823 6.39451 0.921962C8.18673 -0.418324 10.6285 -0.286619 12.2564 1.24735C13.8216 2.6961 14.2912 5.22947 12.7025 7.30575ZM28.9498 14.8671C30.1707 14.8671 31.3994 14.8671 32.6203 14.8671C32.9255 14.8671 33.129 14.7974 33.1212 14.441C33.1134 13.2402 33.1368 12.0471 33.1055 10.8463C33.0742 9.7694 32.3073 8.84747 31.2585 8.56856C31.1177 8.52983 30.9455 8.53758 30.8203 8.59181C29.5837 9.11088 28.3472 9.11088 27.1106 8.59181C26.9776 8.53758 26.8054 8.52983 26.6723 8.56856C25.5454 8.86296 24.8175 9.83912 24.8019 11.0709C24.7862 12.1633 24.794 13.2634 24.8019 14.3558C24.8019 14.7897 24.8801 14.8671 25.3341 14.8671C26.5315 14.8671 27.7445 14.8671 28.9498 14.8671ZM9.14153 14.8671C10.3781 14.8671 11.6146 14.8594 12.8512 14.8671C13.1564 14.8671 13.3208 14.7664 13.3208 14.4488C13.3129 13.2247 13.3442 12.0006 13.2973 10.7766C13.2581 9.73841 12.5146 8.86296 11.5051 8.58406C11.3485 8.53758 11.1372 8.54532 10.9885 8.6073C9.7598 9.11088 8.53891 9.11088 7.31019 8.59955C7.16931 8.54532 6.98148 8.53758 6.83278 8.57631C5.76841 8.87071 5.01709 9.81588 5.00144 10.9083C4.98579 12.0549 4.99361 13.2015 4.99361 14.3481C4.99361 14.8052 5.05622 14.8671 5.51015 14.8671C6.71539 14.8671 7.92846 14.8671 9.14153 14.8671ZM19.0496 14.8671C20.2705 14.8671 21.4914 14.8594 22.7201 14.8671C23.0566 14.8671 23.221 14.7587 23.221 14.4023C23.2053 13.2325 23.2288 12.0549 23.2053 10.885C23.1818 9.79264 22.4305 8.85522 21.3583 8.56856C21.2174 8.52983 21.0453 8.53758 20.92 8.59181C19.6835 9.11088 18.4469 9.11088 17.2104 8.59955C17.0695 8.54532 16.8817 8.53758 16.733 8.58406C15.6921 8.87071 14.9486 9.7694 14.9173 10.8385C14.886 12.0084 14.9017 13.1782 14.9017 14.3558C14.9017 14.8129 14.9643 14.8671 15.426 14.8671C16.6313 14.8671 17.8365 14.8671 19.0496 14.8671ZM19.0496 7.42196C20.6774 7.42196 22.0079 6.11267 22.0157 4.50122C22.0235 2.88203 20.6618 1.54175 19.0339 1.5495C17.4061 1.55724 16.0834 2.88203 16.0912 4.49348C16.0912 6.11267 17.4217 7.42971 19.0496 7.42196ZM12.1077 4.48573C12.0999 2.87429 10.7694 1.55724 9.14936 1.55724C7.52932 1.55724 6.19103 2.88203 6.1832 4.48573C6.17538 6.10492 7.52932 7.42971 9.17283 7.42196C10.7929 7.42196 12.1155 6.09717 12.1077 4.48573ZM25.9993 4.47798C25.9915 6.09717 27.2984 7.42196 28.9263 7.42971C30.5776 7.43746 31.9238 6.12041 31.9238 4.49348C31.9238 2.88978 30.5855 1.56499 28.9654 1.55724C27.3376 1.5495 26.0071 2.86654 25.9993 4.47798Z" fill="white"/>
                          <path d="M19.4795 26.5193C19.4873 26.9686 19.1508 27.3018 18.7047 27.3095C18.2664 27.3095 17.922 26.9686 17.9064 26.527C17.8986 26.1009 18.2507 25.7446 18.689 25.7368C19.1351 25.7368 19.4716 26.0699 19.4795 26.5193Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="ww231234">
                          <rect width="40" height="39" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Human Resources <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_10.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_516_3342)">
                          <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                          <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                          <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                          <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                          <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                          <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_516_3342">
                          <rect width="40" height="40" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Strategy <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_11.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_558_w1335)">
                          <path d="M39.9993 21.646C39.791 22.0314 39.6348 22.4585 39.3743 22.7918C38.9785 23.2814 38.4056 23.4897 37.7806 23.5002C36.9785 23.5106 36.166 23.5106 35.3639 23.5002C34.7389 23.4897 34.3014 23.0835 34.3118 22.5314C34.3223 21.9897 34.7389 21.6043 35.3535 21.5939C36.1035 21.5835 36.8639 21.5835 37.6139 21.5939C37.9681 21.6043 38.1035 21.4481 38.1035 21.1043C38.0931 20.3752 38.0931 19.646 38.1035 18.9168C38.1139 18.5418 37.9473 18.4168 37.5827 18.4168C36.791 18.4272 35.9993 18.4272 35.1973 18.4168C34.4889 18.4168 34.1764 18.1772 34.041 17.4585C33.6452 15.4064 32.8743 13.5314 31.6868 11.8127C31.3118 11.271 31.3743 10.8543 31.8431 10.3856C32.4056 9.82308 32.9681 9.26058 33.5306 8.69808C33.8639 8.36475 33.8535 8.271 33.5202 7.92725C33.0202 7.42725 32.5202 6.93766 32.0306 6.42725C31.7806 6.15641 31.5827 6.146 31.3223 6.41683C30.7702 7.00016 30.1868 7.56266 29.6139 8.13558C29.1243 8.61475 28.7181 8.66683 28.1556 8.28141C26.4368 7.09391 24.5514 6.32308 22.4993 5.93766C21.8223 5.81266 21.5827 5.48975 21.5723 4.80225C21.5723 4.00016 21.5618 3.18766 21.5723 2.38558C21.5827 2.03141 21.4368 1.896 21.0827 1.896C20.3535 1.90641 19.6243 1.90641 18.8952 1.896C18.5202 1.88558 18.3952 2.05225 18.3952 2.41683C18.4056 3.2085 18.4056 4.00016 18.3952 4.80225C18.3952 5.521 18.1452 5.82308 17.4368 5.9585C15.4056 6.34391 13.5306 7.11475 11.8223 8.29183C11.2389 8.69808 10.8431 8.646 10.3327 8.13558C9.79102 7.55225 9.20768 6.98975 8.64518 6.41683C8.41602 6.17725 8.22852 6.16683 7.99935 6.40641C7.47852 6.94808 6.93685 7.47933 6.39518 8.01058C6.16602 8.22933 6.17643 8.42725 6.39518 8.646C6.97852 9.21891 7.56185 9.80225 8.13477 10.3856C8.61393 10.8752 8.66602 11.2814 8.2806 11.8439C7.0931 13.5627 6.32227 15.4481 5.93685 17.5002C5.81185 18.1772 5.48893 18.4272 4.80143 18.4272C3.99935 18.4272 3.18685 18.4377 2.38477 18.4272C2.0306 18.4168 1.88477 18.5627 1.89518 18.9168C1.9056 19.646 1.9056 20.3752 1.89518 21.1043C1.88477 21.4793 2.05143 21.6147 2.41602 21.6043C3.20768 21.5835 3.99935 21.5939 4.80143 21.6043C5.52018 21.6043 5.82227 21.8439 5.95768 22.5522C6.3431 24.5835 7.11393 26.4585 8.29102 28.1668C8.69727 28.7502 8.64518 29.146 8.13477 29.6564C7.57227 30.2189 7.02018 30.7918 6.44727 31.3335C6.17643 31.5939 6.18685 31.8022 6.45768 32.0522C6.97852 32.5522 7.4681 33.0627 7.97852 33.5731C8.30143 33.896 8.36393 33.896 8.70768 33.5627C9.2806 32.9897 9.8431 32.4168 10.416 31.8543C10.8639 31.4064 11.2806 31.3752 11.8223 31.7085C12.4368 32.0939 13.0618 32.4585 13.6973 32.8231C14.2493 33.146 14.4577 33.6564 14.1973 34.1564C13.9473 34.6564 13.3848 34.8022 12.8223 34.5106C12.3118 34.2502 11.8223 33.9585 11.2806 33.6668C10.8535 34.0939 10.4368 34.5314 9.99935 34.9585C8.98893 35.9585 7.68685 35.9689 6.67643 34.9689C6.13477 34.4272 5.58268 33.8856 5.05143 33.3335C4.07227 32.3335 4.07227 31.0418 5.06185 30.0418C5.48893 29.6043 5.92643 29.1877 6.38477 28.7397C5.36393 27.1147 4.63477 25.396 4.2181 23.5106C3.7181 23.5106 3.22852 23.5106 2.72852 23.5106C1.12435 23.5106 0.593099 23.146 0.00976562 21.6564C0.00976562 20.5314 0.00976562 19.4168 0.00976562 18.2918C0.030599 18.271 0.0514323 18.2606 0.061849 18.2397C0.520182 16.9897 1.18685 16.5106 2.52018 16.5106C3.08268 16.5106 3.63477 16.5106 4.20768 16.5106C4.63477 14.6356 5.35352 12.9064 6.37435 11.2918C5.9056 10.8231 5.45768 10.396 5.02018 9.94808C4.07227 8.97933 4.08268 7.67725 5.0306 6.7085C5.54102 6.18766 6.06185 5.67725 6.57227 5.15641C7.68685 4.04183 8.97852 4.04183 10.1035 5.16683C10.4993 5.56266 10.8848 5.96891 11.2806 6.37516C12.916 5.3335 14.6556 4.62516 16.5098 4.19808C16.5098 3.53141 16.5098 2.90641 16.5098 2.28141C16.5202 1.53141 16.7806 0.895996 17.3952 0.458496C17.6868 0.250163 18.041 0.145996 18.3639 -0.0102539C19.4577 -0.0102539 20.5514 -0.0102539 21.6452 -0.0102539C23.1035 0.541829 23.4993 1.12516 23.4993 2.71891C23.4993 3.2085 23.4993 3.69808 23.4993 4.13558C24.4473 4.4585 25.3431 4.71891 26.2077 5.07308C27.0723 5.42725 27.8848 5.88558 28.7702 6.32308C29.1764 5.90641 29.6035 5.44808 30.0514 5.021C30.9993 4.09391 32.3535 4.09391 33.3014 5.021C33.8535 5.56266 34.3952 6.10433 34.9264 6.646C35.9473 7.67725 35.9368 8.9585 34.916 10.0002C34.4993 10.4272 34.0618 10.8335 33.6556 11.2293C33.666 11.3127 33.666 11.3439 33.6764 11.3647C34.6139 12.896 35.3223 14.521 35.7389 16.271C35.7598 16.3647 35.9473 16.4897 36.0618 16.4897C36.6243 16.5106 37.1764 16.4897 37.7389 16.5002C38.7077 16.521 39.4993 17.0627 39.8431 17.9168C39.8952 18.0627 39.9473 18.2085 39.9993 18.3543C39.9993 19.4585 39.9993 20.5522 39.9993 21.646Z" fill="white"/>
                          <path d="M17.4266 40.0001C16.7807 39.823 16.1766 39.5626 15.7287 39.0314C14.9266 38.0834 14.8328 36.8439 15.4995 35.6876C17.4578 32.2918 19.4162 28.9064 21.3745 25.5209C22.6141 23.3751 23.8432 21.2084 25.1037 19.073C26.0099 17.5209 28.0099 17.1772 29.3328 18.323C29.5932 18.5522 29.812 18.8334 29.9891 19.1355C33.1974 24.6668 36.3953 30.2084 39.5828 35.7605C39.7703 36.0834 39.8641 36.448 39.9995 36.8022C39.9995 37.0939 39.9995 37.3751 39.9995 37.6668C39.8016 38.0834 39.6557 38.5314 39.4057 38.9064C38.9995 39.5314 38.3432 39.8126 37.6557 40.0105C30.9162 40.0001 24.1662 40.0001 17.4266 40.0001ZM27.5203 38.1043C30.1662 38.1043 32.8016 38.1043 35.4474 38.1043C36.0203 38.1043 36.5932 38.1147 37.1662 38.0939C37.937 38.0626 38.312 37.3959 37.9474 36.7189C37.9057 36.6459 37.8641 36.5834 37.8328 36.5209C35.4787 32.4376 33.1141 28.3439 30.7599 24.2605C29.9578 22.8647 29.1557 21.4689 28.3432 20.073C27.937 19.3855 27.1557 19.3855 26.7391 20.0626C26.687 20.1355 26.6453 20.2189 26.6037 20.3022C24.2912 24.3126 21.9787 28.323 19.6557 32.3334C18.812 33.7814 17.9787 35.2397 17.1453 36.6876C16.7287 37.4272 17.1141 38.0834 17.9682 38.1147C18.0724 38.1147 18.1766 38.1147 18.2807 38.1147C21.3432 38.1043 24.4266 38.1043 27.5203 38.1043Z" fill="white"/>
                          <path d="M37.6562 40C38.3542 39.8021 39.0104 39.5208 39.4062 38.8958C39.6562 38.5104 39.8021 38.0729 40 37.6562C40 38.4375 40 39.2188 40 40C39.2188 40 38.4375 40 37.6562 40Z" fill="white"/>
                          <path d="M8.8946 19.99C8.91543 14.4796 12.8842 9.86498 18.3633 9.01082C22.7384 8.32332 27.3425 10.5212 29.5613 14.3442C29.8842 14.9067 29.8009 15.4483 29.3217 15.7504C28.8321 16.0525 28.28 15.8962 27.9363 15.3337C26.5196 13.0317 24.4988 11.5837 21.8633 11.0004C16.8946 9.89623 11.7592 13.3858 10.9467 18.4067C10.2696 22.615 12.28 26.49 16.1133 28.3546C16.4258 28.5108 16.7071 28.6775 16.8008 29.0421C16.8946 29.4067 16.8217 29.7504 16.53 30.0004C16.2071 30.2921 15.8321 30.3129 15.4363 30.1358C14.2071 29.5733 13.1029 28.8129 12.155 27.8546C10.0613 25.7712 8.88418 22.9275 8.8946 19.99Z" fill="white"/>
                          <path d="M28.4681 27.6043C28.4681 28.5002 28.4785 29.396 28.4681 30.3022C28.4473 31.0522 27.8118 31.5106 27.166 31.2397C26.7806 31.0835 26.5723 30.771 26.5723 30.3543C26.5618 28.5106 26.5618 26.6564 26.5723 24.8127C26.5723 24.2606 26.9993 23.8647 27.5098 23.8647C28.0202 23.8647 28.4473 24.2502 28.4577 24.8022C28.4889 25.7293 28.4681 26.6668 28.4681 27.6043Z" fill="white"/>
                          <path d="M28.478 34.1981C28.478 34.7189 28.0718 35.146 27.551 35.1564C27.0197 35.1668 26.5718 34.7189 26.5822 34.1981C26.5926 33.6877 27.0197 33.271 27.5301 33.271C28.051 33.271 28.4676 33.6772 28.478 34.1981Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_558_w1335">
                          <rect width="40" height="40" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                                                       
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Risk Management <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                      <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_12.jpeg"></div>
                    </div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_2558_1320)">
                          <path d="M16.875 0C17.8438 0.21875 18.5417 0.84375 19.2188 1.52083C21.1875 3.52083 23.1979 5.48958 25.1771 7.48958C26.7812 9.11458 26.3125 11.7604 24.2396 12.6042C23.7396 12.8021 23.1563 12.8229 22.6042 12.8229C22.3125 12.8229 22.0938 12.8438 21.8958 13.0729C21.7083 13.2813 21.4688 13.4479 21.2396 13.6563C22.7188 14.5521 23.0208 16.1667 21.9792 17.4688C23.2604 18.5833 24.5417 19.7083 25.8229 20.8333C28.5729 23.2292 31.3125 25.625 34.0625 28.0208C35.4167 29.1979 36.75 30.3958 38.125 31.5521C39.1458 32.4062 39.7708 33.4688 40.0104 34.7708C40.0104 35.1354 40.0104 35.5 40.0104 35.8646C39.9792 35.9583 39.9583 36.0625 39.9375 36.1563C39.5625 37.8958 38.5417 39.0833 36.8854 39.7292C36.5625 39.8542 36.2083 39.9167 35.875 40.0104C35.4792 40.0104 35.0938 40.0104 34.6979 40.0104C34.6771 39.9896 34.6562 39.9688 34.6354 39.9583C33.3438 39.7708 32.3542 39.0938 31.5208 38.125C28.2813 34.375 25.0208 30.6354 21.7604 26.8958C20.3333 25.2604 18.9063 23.6146 17.4792 21.9792C16 23.1042 14.4583 22.5729 13.6563 21.2188C13.4688 21.4479 13.3125 21.6875 13.1146 21.8646C12.8646 22.0833 12.8021 22.3125 12.8542 22.6458C13 23.6458 12.6771 24.5208 11.9583 25.2396C10.7083 26.4792 8.78125 26.4479 7.47917 25.1563C5.5 23.1979 3.55208 21.2083 1.5625 19.25C0.864583 18.5625 0.21875 17.8646 0 16.875C0 16.5625 0 16.25 0 15.9375C0.0208333 15.9063 0.0416667 15.8646 0.0520833 15.8333C0.572917 13.9375 1.84375 13.0833 3.76042 13.3229C3.875 13.3333 4.03125 13.2604 4.11458 13.1771C7.13542 10.1667 10.1563 7.14583 13.1667 4.125C13.2604 4.03125 13.3125 3.83333 13.2917 3.69792C13.0833 2.33333 13.6979 1.02083 14.9167 0.385417C15.2396 0.21875 15.5938 0.135417 15.9375 0.0104167C16.25 0 16.5625 0 16.875 0ZM14.1875 5.42708C11.2708 8.34375 8.33333 11.2812 5.44792 14.1667C7.61458 16.3333 9.8125 18.5313 11.9688 20.6875C14.875 17.7813 17.8021 14.8542 20.7188 11.9375C18.5521 9.78125 16.3646 7.60417 14.1875 5.42708ZM18.5938 20.8854C21.375 24.0833 24.1667 27.2812 26.9167 30.4479C28.1042 29.2708 29.2708 28.1146 30.4479 26.9375C27.2708 24.1667 24.0625 21.3646 20.8854 18.5938C20.1146 19.3646 19.375 20.1042 18.5938 20.8854ZM34.1042 30.1146C32.75 31.4688 31.4375 32.7812 30.1042 34.1146C31.1146 35.25 32.0938 36.4688 33.1875 37.5729C34.375 38.7813 36.3125 38.6979 37.5104 37.5C38.7188 36.2917 38.8021 34.3958 37.5833 33.1875C36.4688 32.1146 35.25 31.125 34.1042 30.1146ZM16.2917 1.5625C15.7083 1.60417 15.2083 1.89583 14.9583 2.5C14.6875 3.13542 14.7917 3.72917 15.2917 4.22917C17.4896 6.4375 19.6979 8.64583 21.9167 10.8542C22.5521 11.4896 23.5104 11.4792 24.125 10.8646C24.7292 10.25 24.75 9.29167 24.1146 8.65625C21.9167 6.4375 19.7083 4.23958 17.5 2.03125C17.1771 1.71875 16.8021 1.5625 16.2917 1.5625ZM3.1875 14.7292C3.16667 14.7604 3.15625 14.7917 3.13542 14.8333C2.5 14.8333 1.96875 15.1667 1.70833 15.7396C1.4375 16.3333 1.53125 16.9896 2 17.4688C4.20833 19.6875 6.42708 21.9063 8.64583 24.1146C9.28125 24.7396 10.25 24.7188 10.8542 24.1146C11.4688 23.5 11.4792 22.5521 10.8333 21.9063C8.64583 19.6875 6.4375 17.4792 4.21875 15.2917C3.94792 15.0208 3.54167 14.9167 3.1875 14.7292ZM15.0521 20.1354C15.0625 20.5938 15.2292 20.8333 15.5313 20.9583C15.8646 21.1042 16.1667 21.0104 16.4271 20.7604C17.875 19.3125 19.3229 17.875 20.7604 16.4271C21.1146 16.0729 21.1146 15.5938 20.8021 15.2812C20.4792 14.9688 20.0104 14.9792 19.6562 15.3438C18.2188 16.7708 16.7812 18.2083 15.3542 19.6562C15.1875 19.8021 15.1146 20.0313 15.0521 20.1354ZM31.7604 28.0833C30.5208 29.3229 29.3021 30.5417 28.0729 31.7708C28.375 32.1146 28.6979 32.4896 29 32.8229C30.2917 31.5417 31.5417 30.2813 32.8229 29.0104C32.4583 28.6979 32.0833 28.3646 31.7604 28.0833Z" fill="white"/>
                          <path d="M0 37.8957C0.135417 37.4894 0.25 37.0728 0.427083 36.6873C0.739583 36.0103 1.11458 35.6457 2.04167 34.9894C1.90625 34.6665 1.73958 34.3644 1.65625 34.0311C1.21875 32.3019 2.5 30.6353 4.29167 30.6353C8.71875 30.6248 13.1458 30.6248 17.5729 30.6353C19.7083 30.6457 20.9896 32.8644 19.9583 34.729C19.9167 34.8019 19.875 34.8853 19.8333 34.9686C20.0625 35.1353 20.2917 35.2811 20.5 35.4582C21.7083 36.479 22.0208 37.8332 21.8646 39.3332C21.8437 39.5728 21.5312 39.7811 21.3542 40.0103C14.2396 40.0103 7.13542 40.0103 0.0208333 40.0103C0 39.2915 0 38.5936 0 37.8957ZM20.2917 38.4269C20.2917 37.0936 19.25 36.104 17.8854 36.0936C13.7708 36.0936 9.65625 36.0936 5.54167 36.0936C4.95833 36.0936 4.36458 36.0832 3.78125 36.104C2.54167 36.1457 1.46875 37.2915 1.60417 38.4269C7.82292 38.4269 14.0417 38.4269 20.2917 38.4269ZM10.9792 32.1873C8.80208 32.1873 6.63542 32.1769 4.45833 32.1978C4.1875 32.1978 3.88542 32.2707 3.64583 32.3957C3.20833 32.6353 3.03125 33.1769 3.15625 33.6457C3.3125 34.1978 3.75 34.5311 4.38542 34.5311C8.73958 34.5311 13.1042 34.5311 17.4583 34.5311C17.5312 34.5311 17.6146 34.5311 17.6875 34.5207C18.1458 34.4478 18.4792 34.2082 18.6562 33.7707C18.9688 32.979 18.3854 32.1873 17.4896 32.1873C15.3229 32.1873 13.1562 32.1873 10.9792 32.1873Z" fill="white"/>
                          <path d="M35.8643 39.9998C36.1976 39.9061 36.5518 39.8436 36.8747 39.7186C38.5309 39.0728 39.5518 37.8853 39.9268 36.1457C39.9476 36.0519 39.9788 35.9478 39.9997 35.854C39.9997 37.2394 39.9997 38.6144 39.9997 39.9998C38.6247 39.9998 37.2393 39.9998 35.8643 39.9998Z" fill="white"/>
                          <path d="M14.1456 7.80225C14.781 7.88558 15.1352 8.51058 14.8435 9.021C14.781 9.13558 14.6872 9.22933 14.5935 9.32308C13.5727 10.3439 12.5518 11.3647 11.531 12.3856C11.4685 12.4481 11.406 12.5106 11.3227 12.5627C10.9893 12.8022 10.5622 12.771 10.2914 12.4897C9.99974 12.1877 9.98933 11.7606 10.281 11.4272C10.6039 11.0731 10.9581 10.7397 11.2914 10.396C12.031 9.65641 12.7602 8.91683 13.5102 8.18766C13.6872 8.04183 13.9372 7.93766 14.1456 7.80225Z" fill="white"/>
                          <path d="M8.6669 14.9377C8.2294 14.9481 7.89606 14.6252 7.87523 14.1981C7.86481 13.7502 8.20856 13.396 8.64606 13.396C9.06273 13.396 9.4169 13.7502 9.42731 14.1668C9.43773 14.5835 9.09398 14.9377 8.6669 14.9377Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_2558_1320">
                          <rect width="40" height="40" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Legal <br>Consulting</a></h2>
                    </div>
                    <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                    <div class="text-primary">
                      <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                        <span class="cs_post_btn-text">Read More</span>
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                        </svg>                                  
                      </a>
                    </div>
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

    <!-- Start 4 Boxes Section -->
    <section class="cs_pb_115 cs_pb_lg_55 clipped-boxes">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Join the two-day program with thought leaders and experts, covering key esports challenges and opportunities</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Maximize your networking opportunities with 800+ expected attendees</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Engage with key figures behind KSA's Vision 2030 and its National Gaming and Esports strategy</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
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

    <!-- Start Apply to Join Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative">
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
            <form class="row">
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Last Name">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Email">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Company">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Position">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Industry">
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Apply to Join</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Apply to Join Section -->

    <!-- Start About Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 cs_mb_lg_55">
            <div class="cs_experience cs_style_1 position-relative">
              <img src="{{ asset('assets/img/esportsworldcup.jpg') }}" class="cs_mb_5">
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
                    <a href="https://esportsworldcup.com/" target="_blank" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Visit Us</span></a>
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
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative">
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
            <form class="row">
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Last Name">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Email">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Phone">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Position">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Company">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Position">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Industry">
              </div>
              <div class="col-lg-12">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_40 bg-gray" placeholder="Message" cols="35" rows="7"></textarea>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get in Touch</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Us Section -->

    @endsection