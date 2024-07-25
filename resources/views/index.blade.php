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
                  <li><a href="/#about-the-conference">About the Conference</a></li>
                  <li><a href="/#conference-highlights">Conference Highlights</a></li>
                  <li><a href="/#speakers">Speakers</a></li>
                  <li><a href="/#topics">Topics</a></li>
                  <li><a href="/#news">News</a></li>
                  <li><a href="/#contact-us">Contact Us</a></li>
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
    <section class="cs_pt_70 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="about-the-conference">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 cs_mb_lg_55">
            <div class="cs_experience cs_style_1 position-relative">
              <img src="{{ asset('assets/img/about-the-ngsc-conference.jpg') }}" class="cs_mb_5">
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
                  <p class="mt-5">Sneak peeks of upcoming releases, behind-the-scenes insights, and opportunities to meet creators and stars will elevate this immersive experience, celebrate fandom culture and explore its transformative potential like never before.</p>
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

    <!-- Modal HRH-Prince-Faisal-bin-Bandar -->
    <div class="modal fade speaker-modal" id="HRH-Prince-Faisal-bin-Bandar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
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
          <div class="modal-header flex-sm-row flex-column">
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
          <div class="modal-header flex-sm-row flex-column">
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
          <div class="modal-header flex-sm-row flex-column">
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
          <div class="modal-header flex-sm-row flex-column">
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
          <div class="modal-header flex-sm-row flex-column">
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
          <div class="modal-header flex-sm-row flex-column">
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
          <div class="modal-header flex-sm-row flex-column">
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
    <section class="cs_pb_60 cs_pb_lg_55" id="speakers">
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
    <section class="background-filled cs_pt_0 cs_pt_lg_75 cs_pb_75 cs_pb_lg_80" id="topics">
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
                    <p class="cs_mb_20 lh-base">Sports, Gaming and The Relentless Pursuit of Greatness</p>
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">GAME ON, SAUDI ARABIA</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Gaming & Sports as the Kingdom’s Gateway to the World</p>
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">BUILDING A NEW GLOBAL SPORT</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Esports, Traditional Sports & How to Craft a New Global Sporting Legacy</p>
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">NAVIGATING GROWTH IN GAMES & ENTERTAINMENT</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Consolidation, Innovation, New Markets & New Fans</p>
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">THE CULTURAL IDENTITY OF FUTURE FANDOM</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Esports Meets Fashion, Art & Music</p>
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">THE ART OF (E)SPORTS STORYTELLING</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Crafting Compelling Sports Narratives</p>
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">PIONEERING THE PLATFORMS OF FANDOM</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">The Role of Tech Giants in Shaping Esports</p>
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">CAN TRADITION SURVIVE THE DIGITAL AGE?</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Enhancing Traditional Sports and Creating New Fans</p>
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">CREATING FAN FAVORITE GAMES</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Exploring Key Factors for Video Game Longevity in Development & Publishing</p>
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">FAN FRENZY MARKETING</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Mastering Engagement and Excitement in Esports, Sports & Gaming</p>
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">WHEN AI WAS STILL BOTS: ALGORITHMS IN ESPORTS</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">The Past and Present of Training, Strategy & Engagement</p>
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">BREAKING BOUNDARIES IN GAMES AND ESPORTS</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Driving Diversity, Inclusion & Social Responsibility in the Games Industry</p>
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">REBOOTING SUCCESS</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Lessons from Serial Entrepreneurs in Esports, Sports and Games</p>
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">CULTURAL CROSSROADS IN GAMES</h2>
                    </div>
                    <p class="cs_mb_20 lh-base">Integrating Saudi Arabia’s Rich Artistic Heritage and Culture into Gaming</p>
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

    <!-- Start 4 Boxes Section -->
    <section class="cs_pb_80 cs_pb_lg_55 clipped-boxes">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">Join the two-day program with thought leaders and experts, covering key esports challenges and opportunities</p>
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
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="the-esports-world-cup">
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
          <div class="col-lg-6">
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="{{ asset('assets/img/news/EWC_KV_MASTER.jpg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_40">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">Riyadh’s New Global Sport Conference Unveils Dates for 2024 Event and Major Expansion</a></h2>
                  <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div>
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
          <div class="col-lg-6">
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="{{ asset('assets/img/news/ANNOUNCEMENT.jpg') }}"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_40">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">Olympic Esports Games To Be Hosted In The Kingdom Of Saudi Arabia</a></h2>
                  <div class="cs_post_subtitle">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host the inaugural Olympic Esports Games 2025 in the Kingdom of Saudi Arabia</div>
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