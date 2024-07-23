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

    <!-- Modal Anna-Rozwandowicz -->
    <div class="modal fade speaker-modal" id="Anna-Rozwandowicz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Anna-Rozwandowicz.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">The Story Mobb</p>
              <p class="text-white m-0">CEO</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Anna-Rozwandowicz</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Anna Rozwandowicz is the Founder and CEO of The Story Mob, a leading international consultancy for gaming culture, immersive entertainment and esports. In her role, she advises global sports and entertainment brands, publishers, esports Clubs and their athletes on impactful, authentic communications with gaming fans. Prior to founding the agency in 2018, Anna served as VP of Communications at EFG. There, she led worldwide communications efforts for major tournaments and secured unprecedented mainstream media coverage for the world's fastest-growing sport. With offices in Los Angeles and London, The Story Mob has worked with over 100 global gaming, sports, and entertainment brands. Anna is also an advisor for the Cybersmile Foundation, a mentor for esports startups at leAD Sports, and a speaker on gaming culture and communications.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Bruce-Stein -->
    <div class="modal fade speaker-modal" id="Bruce-Stein" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Bruce-Stein.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">aXiomatic</p>
              <p class="text-white m-0">CEO & Co-Founder</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Bruce Stein</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>During his career Bruce Stein has held ‘C’ suite positions in both startup and public consumer products, tech based, and IP commercialization companies. He currently serves as an advisor to Juno Partners and consumer-tech based clients such as Embodied AI Robotics.</p>
            <p>Most recently Bruce was CEO/co-founder of aXiomatic, an esports/video gaming investment platform. He set the strategy for aXiomatic from it’s beginning in 2015 with the Team Liquid investment through all their investments into Epic Games, Dapper Labs, Niantic Games and others.</p>
            <p>Stein’s earlier experience includes: COO/Worldwide President/BOD Mattel, CEO Sony Interactive Entertainment (PlayStation), President/CEO Kenner Products (Hasbro),  CEO Mandalay Media, CEO/Chairman Radical Communication and Founder/CEO of The Hatchery. Stein has been a strategic advisor to PE/VC, media and internet companies including Dreamworks SKG, Warner Bros., KPCB and Guggenheim Capital.</p>
            <p>Stein was a Board member of ViewSonic, a YPO alum, member of the Mayor’s Esports/Gaming Council for Los Angeles, and the Steering Committee of China Americas Sports and Health Association. Stein received a B.A. from Pitzer College and an M.B.A. from the University of Chicago Booth Graduate School of Business.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Craig-Levine -->
    <div class="modal fade speaker-modal" id="Craig-Levine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Craig-Levine.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">ECL Faceit Group</p>
              <p class="text-white m-0">Co-CEO</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Craig Levine</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ESL FACEIT Group (EFG) is the leading competitive games and esports company. Craig helped architect the merger of ESL Gaming and FACEIT in 2022 and prior served as the co-CEO of ESL Gaming where he led global business strategy and operations.</p>
            <p>As a lifelong gamer, Craig has helped pioneer the esports industry for over 20 years first as a player, then team owner and has become a dynamic esports executive.</p>
            <p>Levine holds a B.S. in Information Systems and Management and Organizational Behavior from the Stern Business School at New York University.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ghada-Alhudaithi -->
    <div class="modal fade speaker-modal" id="Ghada-Alhudaithi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Ghada-Alhudaithi.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">Table Knight Games</p>
              <p class="text-white m-0">Co-Founder</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Ghada Alhudaithi</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Ghada AlHudaithi is a driven individual with a passion for the gaming industry. This passion for gaming evolved over time, shaping her interests and sparking her entrepreneurial ambitions. Ghada recognized the potential for video games to engage and entertain audiences, and she became driven to turn this lifelong hobby into a professional pursuit. Holding a Master's degree in Business Administration specialized in Finance from Prince Sultan University, she has extensive experience in entrepreneurship, business development, and strategic management. As the Co-founder of Table Knight Games, she has contributed to the company's expansion, with mobile game applications reaching top local and regional charts on the App Store and Google Play. Specializing in developing social games for mobile platforms, she has demonstrated her entrepreneurial spirit and technical proficiency. Motivated by innovation and impact, she is eager to take on new challenges and make a meaningful contribution to Saudi Arabia’s gaming ecosystem.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Heba-Atyah -->
    <div class="modal fade speaker-modal" id="Heba-Atyah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Heba-Atyah.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">GameIT</p>
              <p class="text-white m-0">Founder & CEO</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Dr. Heba Mohammed Atyah</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Dr. Heba Mohammed Atyah, CEO and Founder of GameIT, has transitioned from a distinguished medical career in speech pathology and developmental disabilities to become a pioneering entrepreneur in the world of serious games.  With more than 10 years of clinical experience in King Faislal specialist hospital and research center working with children, she has successfully, also,  led major initiatives across the USA, UAE, and KSA, fostering public-private partnerships and community empowerment project. Dr. Atyah continues to drive transformative change by using clinical science with innovative gaming and AI technology, revolutionizing how children learn and thrive in the digital age. Her work has garnered multiple awards and recognition, including the Leap Aviatrix Award for the most innovative startup pioneered by women in 2022, the Best Female Founder Award by MCIT Saudi Arabia in 2023, and lately in 2024 winning Microsoft Power Women Awards for the Middle East.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Khaled-Makhshoush -->
    <div class="modal fade speaker-modal" id="Khaled-Makhshoush" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Khaled-Makhshoush.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">Digital Artist</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Khaled Makhshoush</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Khaled is a digital artist who specializes in pixel art. He uses a drawing tablet, a stylus and a mouse to create atmospheric digital paintings that explore the relationship between emotions and space. He focuses on how the place feels like and draws imaginary places based on real ones, blending reality and imagination in his art and inviting the viewers to experience his vision. He is inspired by the modern and contemporary world and its diverse landscapes.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Maha-Abouelenein -->
    <div class="modal fade speaker-modal" id="Maha-Abouelenein" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Maha-Abouelenein.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">Digital and Savvy</p>
              <p class="text-white m-0">CEO</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Maha Abouelenein</h2>
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
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Mathilde-Pignol.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">Roboto Games</p>
              <p class="text-white m-0">Co-Founder and CCO</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Mathilde Pignol</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Mathilde is Co-Founder & Chief Creative Officer of Roboto Games, her second games company. In her role, she oversees company strategy as well as the design and art of their next title, Stormforge. Mathilde is originally from France but moved to the US as a teenager. She holds a Bachelors in Computer Science and Psychology and a Masters in UX Design from Carnegie Mellon University. After graduating, she started her first company, ZipZapPlay, where she made games played by millions of people. After the acquisition of the company by PopCap Games, she co-ran the PopCap San Francisco studio for Electronic Arts. More than anything, Mathilde loves making games, the perfect intersection of technology, art, and design.</p>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal Meaad-Aflah -->
     <div class="modal fade speaker-modal" id="Meaad-Aflah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Meead-Aflah.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">Starvania Studio</p>
              <p class="text-white m-0">Co-Founder & CEO</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Meaad Aflah</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Meaad Aflah, the CEO & Co-founder of Starvania Studio, is a passionate and accomplished professional in the gaming industry. This Saudi Arabian indie game development company creates games for PC and consoles, drawing inspiration from Arabian mythologies. Starvania is committed to bringing fresh perspectives to the global gaming market. While still young and emerging in the industry, Meaad demonstrates a deep understanding of the market and a keen eye for innovation. This has resulted in a proven track record of success in driving growth and engagement for Starvania. Her studio is now considered a pioneer in the Saudi Arabian gaming industry, and was recently awarded the Best Game Startup Award in the MENA region for 2024.</p>
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
              <img src="assets/img/speakers/RJ-Cutler.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">Filmmaker</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">R.J. Cutler</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>R.J. Cutler is an award-winning documentary filmmaker who has directed such films as A Perfect Candidate, The September Issue, BELUSHI, Billie Eilish: The World’s A Little Blurry, and the upcoming Martha and Elton John: Never Too Late. He has produced such films as The War Room, Thin, Listen to Me Marlon and The Disappearance of Shere Hite. Cutler is the founder of This Machine Filmworks, an LA-based production company specializing in the development and production of premium documentary content. This Machine is a part of Sony Non-Fiction Television. Cutler’s work has been nominated for an Academy Award and he is the recipient of three Emmys, two Peabody Awards, two Cinema Eye Awards and two Television Academy Honor awards, among others. In 2021, R.J. received the Critic’s Choice Pennebaker Award for Lifetime Achievement in Documentary Film. R.J. lives in Los Angeles with his wife Jane Cha Cutler, their children Maddie, Max and Penny and their dog Dexter.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tim-Morton -->
    <div class="modal fade speaker-modal" id="Tim-Morton" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Tim-Morten.jpg" alt="Member">
            </div>
            <div class="col-lg-8">
              <p class="text-white m-0">Frost Giant Studios</p>
              <p class="text-white m-0">Co-Founder and CEO</p>
              <h2 class="modal-title fs-5" id="staticBackdropLabel">Tim Morton</h2>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Tim Morten is the CEO and co-founder of Frost Giant Studios. He was previously the Production Director of StarCraft II, and he's excited to now be working on a new real-time strategy game called Stormgate. Tim got his start in the game industry in 1994 at Activision, and subsequently helped lead development teams at Electronic Arts and Blizzard.</p>
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
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Anna-Rozwandowicz.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Anna-Rozwandowicz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Anna Rozwandowicz</h2>
                <p class="text-white m-0">The Story Mobb</p>
                <p class="text-white m-0">CEO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Bruce-Stein.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Bruce-Stein" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Bruce Stein</h2>
                <p class="text-white m-0">aXiomatic</p>
                <p class="text-white m-0">CEO & Co-Founder</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Craig-Levine.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Craig-Levine" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Craig Levine</h2>
                <p class="text-white m-0">ECL Faceit Group</p>
                <p class="text-white m-0">Co-CEO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ghada-Alhudaithi.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Ghada-Alhudaithi" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Ghada Alhudaithi</h2>
                <p class="text-white m-0">Table Knight Games</p>
                <p class="text-white m-0">Co-Founder</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Heba-Atyah.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Heba-Atyah" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Dr. Heba Atyah</h2>
                <p class="text-white m-0">GameIT</p>
                <p class="text-white m-0">Founder & CEO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Khaled-Makhshoush.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Khaled-Makhshoush" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Khaled Makhshoush</h2>
                <p class="text-white m-0">Digital Artist</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Maha-Abouelenein.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Maha-Abouelenein" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Maha Abouelenein</h2>
                <p class="text-white m-0">Digital & Savvy</p>
                <p class="text-white m-0">CEO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Mathilde-Pignol.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Mathilde-Pignol" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Mathilde Pignol</h2>
                <p class="text-white m-0">Roboto Games</p>
                <p class="text-white m-0">Co-Founder & CCO</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Meead-Aflah.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Meaad-Aflah" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Meaad Aflah</h2>
                <p class="text-white m-0">Starvania Studio</p>
                <p class="text-white m-0">Co-Founder & CEO</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/RJ-Cutler.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#RJ-Cutler" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">R.J. Cutler</h2>
                <p class="text-white m-0">Filmmaker</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Tim-Morten.jpg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Tim-Morton" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">Read Bio</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Tim Morton</h2>
                <p class="text-white m-0">Frost Giant Studios</p>
                <p class="text-white m-0">Co-Founder and CEO</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Speakers Section -->

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