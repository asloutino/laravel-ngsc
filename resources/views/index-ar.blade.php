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
              <a class="cs_site_branding" href="{{url('/ar')}}">
                <img src="{{ asset('assets/img/NGCS-Conference-Logo-white.svg') }}" alt="Logo">
              </a>
            </div>
            <div class="cs_main_header_center">
              <div class="cs_nav cs_primary_font fw-medium">
                <ul class="cs_nav_list fw-medium text-uppercase">
                  <li><a href="/ar#about-the-conference">نبذة عن المؤتمر</a></li>
                  <li><a href="/ar#conference-highlights">أبرز فعاليات المؤتمر</a></li>
                  <li><a href="/ar#speakers">المتحدثون</a></li>
                  <li><a href="/ar#topics">المواضيع</a></li>
                  <li><a href="/ar#news">أبرز الأخبار</a></li>
                  <li><a href="/ar#contact-us">اتصل بنا</a></li>
                  <li id="agenda-ngsc"><a href="{{ asset('assets/docs/Agenda-NGSC.pdf') }}" target="_blank">الأجندة</a></li>
                  <li class="lang-switch">
                    <a class="en" href="{{url('/')}}">EN</a> | <a class="ar" href="{{url('ar')}}">AR</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <div class="cs_toolbox">
                <div class="cs_hero_btn">
                <a href="https://webook.com/en/events/new-global-sport-conference-2024" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_10 cs_pr_10 cs_pt_10 cs_pb_10 overflow-hidden"><span>احصل على تذكرة</span></a>
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
                    <h1 class="text-white cs_mb_12 cs_fs_50 cs_fs_lg_36">مستقبل ثقافة المشجعين</h1>
                    <h2 class="text-white cs_mb_0 fw-normal cs_fs_16">فندق فور سيزونز الرياض</h2>
                    <p class="text-white cs_fs_14 cs_mb_20">24-25 أغسطس 2024</p>
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
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">حول المؤتمر</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">مؤتمر الرياضة العالمية الجديدة 2024</h2>
                  <p class="m-0">سيمثل المؤتمر الرئيسي لمؤسسة كأس العالم للرياضات الإلكترونية بوابة لمديري الحاضر والمستقبل، والقادة العالميين وصناع السياسات، إلى رياضة عالمية جديدة، وسيعرض كيف ستوفر هذه الرياضة فرصًا عالمية جديدة. سيجمع مؤتمر الرياضة العالمية الجديدة 2024 بين أفضل الرياضيين ولاعبي الرياضات الإلكترونية والألعاب والترفيه والتكنولوجيا وغيرها، ليكون بمثابة منصة مليئة بالمحتوى تجمع هذه الصناعات معًا، حاملا شعلة سلسلة ”منتدى نكست ورلد“ ومؤتمر الرياضة العالمية الجديدة 2023، ليوحد كلا الحدثين تحت شعار واحد حصري خلال عام 2024.</p>
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
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">موضوع هذا العام</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">مستقبل ثقافة المشجعين</h2>
                  <p class="m-0">يجمع مؤتمر الرياضة العالمية الجديدة بين قادة ذوي الرؤية من الرياضات الإلكترونية والألعاب والأعمال والرياضات السائدة والترفيهية، لاستكشاف موضوع هذا العام: ”مستقبل ثقافة المشجعين“. سيناقش المؤتمر تأثير ثقافة المشجعين على تخطيط الأعمال والمحتوى والملكية الفكرية وحقوق الإعلام والتسويق والبناء المجتمعي. سيركز المؤتمر هذا العام على اختراق المشجعين الألعاب، وبناء قيمة العلامة التجارية، وتوليد الإيرادات من خلال حقوق الإعلام والرعاية والبضائع التجارية.</p>
                  <p class="mt-2">نظرات خاطفة على الإصدارات القادمة، ووراء الكواليس حول علامات مشهورة، وفرص مقابلة المبدعين والنجوم، ستزيد من ارتقاء هذه التجربة الغامرة، والاحتفال بثقافة المشجعين، واستكشاف إمكاناتها التحويلية بشكل لم يسبق له مثيل.</p>
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
                <p class="text-white m-0">انضم إلى برنامج يومين مع قادة الفكر والخبراء، في مناقشة التحديات والفرص الرئيسية في مجال الرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">قم بزيادة فرص التواصل مع ما يزيد عن 800 من الحضور المتوقع</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">تفاعل مع الشخصيات الرئيسية وراء رؤية المملكة العربية السعودية 2030، واستراتيجيتها الوطنية للألعاب والرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_info cs_pt_25 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <p class="text-white m-0">اكتشف الرياض كمركز عالمي للرياضات الإلكترونية والرياضة والألعاب والترفيه</p>
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
            <h2 class="modal-title fs-5" id="staticBackdropLabel">صاحب السمو الملكي الأمير فيصل بن بندر بن سلطان</h2>
              <p class="text-white m-0">رئيس مجلس إدارة الاتحاد السعودي للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>صاحب السمو الملكي الأمير فيصل بن بندر بن سلطان هو رئيس مجلس إدارة الاتحاد السعودي للرياضات الإلكترونية ورئيس الاتحاد العربي للرياضات الإلكترونية منذ تأسيسهما في عام 2017، ونائبًا لرئيس الاتحاد الدولي للرياضات الإلكترونية منذ ديسمبر 2021، كما أنه نائب رئيس مجلس إدارة مجموعة سافي للألعاب الإلكترونية منذ تأسيسها.</p>
            <p>تحت قيادته، نما الاتحاد بسرعة ليصبح الكيان السعودي الرائد المسؤول عن تنمية صناعة الرياضات الإلكترونية في المملكة والاستراتيجية الوطنية للألعاب والرياضات الإلكترونية. ركز الاتحاد في بداياته على تزويد اللاعبين بمنصات تمكنهم من أن يصبحوا لاعبين محترفين. واليوم، يعيش اتحاد الرياضات الإلكترونية في قلب المنظومة الرياضية السعودية لفتح أبواب تطوير وتمكين القطاع.</p>
            <p>تتمثل رؤية سموه للاتحاد في إحداث أثر ذو قيمة، بالإضافة إلى تطوير الصناعات التقليدية التي كان يُعتقد عدم وجود صلة لها بالرياضات الإلكترونية.</p>
            <p>ونتيجة لذلك، يُنظر اليوم إلى الاتحاد السعودي للرياضات الإلكترونية على أنه الخبير المختص في القطاع والذي يقوم بتنسيق الإجراءات الحكومية، وتوجيه المستثمرين، وتزويد اللاعبين بمنصات للمنافسة والتواصل الاجتماعي في المملكة العربية السعودية.</p>
            <p>يؤمن صاحب السمو الملكي الأمير فيصل بقوة تأثير الرياضات الإلكترونية ويسعى إلى تسخير الرياضات الإلكترونية كقوة من أجل الخير. في عام 2020، قاد سموه الاتحاد في أول شراكة على الإطلاق مع منظمات المساعدات الإنسانية التابعة للأمم المتحدة لإقامة لاعبون بلا حدود - حيث أصبح أكبر حدث خيري للألعاب والرياضات الإلكترونية على مستوى العالم.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">أندرو تشين</h2>
              <p class="text-white m-0">شريك عام ، أندريسن هورويتز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>أندرو تشين هو شريك عام لشركة A16Z GAMES، التي تركز على التقاطع بين التكنولوجيا والألعاب - وهذا يشمل الذكاء الاصطناعي والاستوديوهات والبنية التحتية وتطبيقات المستهلك.</p>
            <p>أندرو كاتب غزير الإنتاج، وقد كتب على مدى العقد الماضي مئات المقالات على andrewchen.com حول موضوعات الشركات الناشئة ونمو المستخدمين. وهو مؤلف كتاب الأعمال الأكثر مبيعاً "مشكلة البداية الباردة"، الذي نشرته دار هاربر بيزنس، والذي يستكشف كيفية إطلاق الشركات الناشئة الجديدة وتوسيع نطاقها من خلال الاستفادة من تأثيرات الشبكة. قبل انضمامه إلى a16z، قاد أندرو فرق نمو الركاب في اوبر، وعمل في عدد من الشركات الناشئة المدعومة برأس المال.</p>
            <p>أندرو حاصل على بكالوريوس العلوم. في الرياضيات التطبيقية من جامعة واشنطن.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جو مارش</h2>
              <p class="text-white m-0">الرئيس التنفيذي لشركة ت وان للترفيه والرياضة</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>جو مارش هو الرئيس التنفيذي لشركة ت وان للترفيه والرياضة، حيث قاد المنظمة إلى آفاق جديدة. وتحت قيادته، فاز فريق دوري الأساطير التابع لـ ت وان ببطولة العالم لعام 2023 وبطولة دوري الأساطير الافتتاحية في كأس العالم للرياضات الإلكترونية. تم الاعتراف بها مرتين من قبل فوربس كواحدة من أفضل 10 شركات للرياضات الإلكترونية قيمة على مستوى العالم، وتستمر ت وان في قيادة هذه الصناعة. قاد مارش مبادرات مثل معسكر قاعدة ت وان، ومقهى وأرينا ت وان، وأكاديمية ت وان للرياضات الإلكترونية، مما أدى إلى تشكيل مشهد الرياضات الإلكترونية بشكل كبير في كوريا الجنوبية وخارجها. تدير ت وان 8 فرق في 6 ألعاب رئيسية وتتعاون مع علامات تجارية مشهورة بما في ذلك نايكي، مرسيدس بنز، سامسونج، ريد بول، ورالف لورين. مع أكثر من 19 عامًا في مجال الرياضة والترفيه، تسلط رحلة مارش من متدرب إلى منصب تنفيذي الضوء على تفانيه وتأثيره في الصناعة. وهو حاصل على شهادة في التسويق من جامعة ميلرزفيل وماجستير في إدارة الأعمال في المالية والتحليلات والإدارة الاستراتيجية من جامعة فيلانوفا.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">السير ليونارد بلافاتنيك</h2>
              <p class="text-white m-0">مؤسس شركة أكسيس إنداستريز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يعد السير ليونارد بلافاتنيك من بين رجال الأعمال الأكثر إنجازًا في العالم وفاعلي الخير البارزين. وهو مواطن مزدوج الجنسية الأمريكية والبريطانية، وهو مؤسس شركة أكسيس إنداستريز، وهي شركة استثمارية خاصة بقيمة 35 مليار دولار، والتي تضم العملاقين الصناعيين ليوندل بازل وكالبين. في عام 2016، أطلق السير ليونارد دازن، وهي الآن منصة الترفيه الرياضي الرائدة عالميًا والتي تقدم الأحداث المباشرة وعند الطلب والألعاب وحجز التذاكر والتجارة الإلكترونية في أكثر من 200 سوق. وهو يشرف أيضًا على التحول الرقمي لصناعة الموسيقى بصفته المساهم الأكبر في مجموعة وارنر ميوزيك وأحد المستثمرين الأوائل في سبوتيفي. في عام 2017، حصل على وسام فارس من الملكة إليزابيث الثانية لخدمته في الأعمال الخيرية، وتم تعيينه شيفالييه في وسام جوقة الشرف الفرنسي لدعمه للتعليم في عام 2013. ولد السير ليونارد في أوديسا، أوكرانيا، وهاجر إلى الولايات المتحدة في عام 1978. حصل على درجة الماجستير من جامعة كولومبيا في عام 1981 وماجستير في إدارة الأعمال من كلية هارفارد للأعمال في عام 1989.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ليزا كوزماس هانسون</h2>
              <p class="text-white m-0">الرئيس التنفيذي لشركة نيكو بارتنرز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ليزا كوزماس هانسون هي الرئيس والمدير التنفيذي لشركة نيكو بارتنرز، وهي شركة رائدة في مجال أبحاث السوق والاستشارات تقدم أبحاثًا محلية بمنظور عالمي حول سوق الألعاب في آسيا، والشرق الأوسط، وشمال أفريقيا، وعملائهم. أسست ليزا شركة نيكو بارتنرز في عام 2002، ومنذ ذلك الحين عززت خبرتها في مجال صناعة الألعاب في الصين وجنوب شرق آسيا وشرق آسيا وجنوب آسيا والشرق الأوسط وشمال أفريقيا، الأمر الذي أفاد عملاء نيكو: الشركات الرائدة عالميًا في مجال تطوير الألعاب ونشرها وخدمات الألعاب والأجهزة، الاستثمارات والحكومات العالمية. تظهر ليزا بانتظام في وسائل الإعلام مثل نيويورك تايمز، بيزنس ويك، فوربس، وول ستريت جورنال، داو جونز، رويترز، بي بي سي، بلومبرج، فايننشال تايمز، فينتشر بيت، بوكيت غيمر، غيمز إندستري، تشانل نيوز آسيا، وغيرها. تقيم في الولايات المتحدة، ولكنها تسافر إلى آسيا والشرق الأوسط بانتظام لتقديم عروض تقديمية في أحداث الصناعة والتفاعل مع الشركات واللاعبين.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ماجنوس كارلسن</h2>
              <p class="text-white m-0">بطل العالم في الشطرنج</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ماغنوس كارلسن، ولد في 30 نوفمبر 1990، في تونسبرغ، النرويج، هو معجزة في لعبة الشطرنج واللاعب الأعلى تقييمًا في التاريخ. حصل كارلسن على لقب أستاذ كبير عندما كان عمره 13 عامًا فقط، وأصبح بطل العالم في الشطرنج في عام 2013 ودافع بنجاح عن لقبه حتى عام 2021، عندما اختار عدم التنافس على اللقب الكلاسيكي مرة أخرى. لقد سيطر على عالم الشطرنج لأكثر من عقد من الزمن، حيث احتل المرتبة الأولى منذ عام 2010، وفاز بالعديد من بطولات العالم في جميع التخصصات، بما في ذلك الشطرنج الكلاسيكي والسريع والشطرنج الخاطف.</p>
            <p>لقد أحدث نهج كارلسن المبتكر وتفكيره الاستراتيجي الذي لا مثيل له ثورة في اللعبة. في السنوات الأخيرة، أثر كارلسن بشكل كبير على مشهد الشطرنج عبر الإنترنت، حيث سيطر على البطولات عبر الإنترنت وأشرك جمهورًا عالميًا من خلال المنصات الرقمية. أدت مشاركته في أحداث مثل جولة أبطال ميلت واتر للشطرنج إلى رفع لعبة الشطرنج التنافسية إلى آفاق جديدة في العصر الرقمي.</p>
            <p>ماغنوس كارلسن هو أكثر من مجرد بطل. إنه النجم الحقيقي الوحيد في لعبة الشطرنج. وقد صنفته مجلة تايم كواحد من أكثر 100 شخصية مؤثرة في العالم. وتؤكد مشاركته في هذا المؤتمر التزامه بتطوير لعبة الشطرنج كرياضة إلكترونية، وتسليط الضوء على رؤيته لمستقبل اللعبة. إن مشاركة كارلسن في الترويج لتعليم الشطرنج في جميع أنحاء العالم وحضوره في المؤتمر يجعل منه شخصية ملهمة لكل من اللاعبين الطموحين و المتحمسين المتمرسين.</p>
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
            <h2 class="modal-title fs-5" id="staticBackdropLabel">مايا روجرز</h2>
              <p class="text-white m-0">الرئيس التنفيذي لشركة تتريس</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>مايا روجرز هي الرئيس التنفيذي لشركة تتريس، حيث تقود جميع المبادرات التجارية العالمية لعلامة تتريس التجارية، وهي إحدى العلامات التجارية والامتيازات الرائدة والأكثر تميزًا لألعاب الفيديو في العالم ولها تاريخ يمتد إلى 40 عامًا. يتضمن ذلك تطوير الألعاب والترخيص العالمي والتسويق وإدارة العلامات التجارية والترويج وإنفاذ الملكية الفكرية.</p>
            <p>تحت قيادة مايا، تظل تتريس واحدة من أكثر الألعاب المحبوبة لدى المعجبين في جميع أنحاء العالم مع تقديم ألقاب مرخصة ذات تصنيف عالي بما في ذلك تتريس 99 وتتريس إفكت:كونكتد وسلسلة بويو بويو تتريس والمزيد. لقد قادت أيضًا توسيع تتريس كعلامة تجارية لأسلوب الحياة، والتي لديها اليوم أكثر من 90 مرخصًا وشريكًا ترويجيًا على مستوى العالم، والذين يقدمون الآن ألعابًا مبتكرة تحمل علامة تتريس التجارية ومنتجات وتجارب استهلاكية، بما في ذلك الملابس والألعاب، والديكور، والمستجدات والمزيد.</p>
            <p>قبل توليها رئاسة لعبة تتريس، قامت مايا بتوجيه جهود التطوير والتبادل الثقافي لشركة تتريس اون لاين الصين وسوني كمبيوتر انترتينمنت امريكا و هوندا الأمريكية. مايا هي أيضًا شريك مؤسس لشركة بلو ستارتابس، وهي أول شركة لتسريع المشاريع في هاواي، والتي تساعد الشركات الناشئة في المراحل المبكرة على تسريع أعمالها من خلال الاستثمارات والتوجيه. منذ عام 2014، استثمرت بلو ستارتابس في أكثر من 110 شركة، اجتذبت أكثر من 500 مليون دولار من التمويل اللاحق. تم تصنيف بلو ستارتابس حاليًا ضمن أفضل 20 شركة تسريع في الولايات المتحدة.</p>
            <p>تعمل مايا حاليًا في مجالس إدارة مركز سميثسونيان لآسيا والمحيط الهادئ الأمريكي، وفرع الصليب الأحمر الأمريكي في هاواي، وصندوق المرأة في هاواي، وغرفة التجارة في هاواي. وهي أيضًا عضو في المجلس الوطني لدائرة تيفاني، وهي منظمة خيرية نسائية تابعة للصليب الأحمر، وعضو في المجلس الأمريكي الياباني، وهي منظمة تعليمية تساهم في تعزيز العلاقات الأمريكية اليابانية.</p>
            <p>حصلت مايا على درجة البكالوريوس في إدارة الأعمال من جامعة بيبردين وماجستير في إدارة الأعمال التنفيذية من كلية بيبردين جرازياديو للأعمال والإدارة.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">آر جي كاتلر</h2>
              <p class="text-white m-0">مخرج أفلام وثائقية حائز على جائزة إيمي</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>آر.جي. كاتلر هو مخرج أفلام وثائقية حائز على جوائز عديدة، وقد قام بإخراج أفلام مثل المرشح المثالي، وإصدار سبتمبر، وبيلوشي، وبيلي إيليش: العالم ضبابي قليلاً، والفيلم القادم مارثا وإلتون جون: لم يفت الأوان بعد. لقد أنتج أفلامًا مثل غرفة الحرب، رفيع، استمع لي مارلون، واختفاء شير هايت. كاتلر هو مؤسس شركة ثيس ماشين فيلم وركس، وهي شركة إنتاج مقرها لوس أنجلوس متخصصة في تطوير وإنتاج محتوى وثائقي متميز. ثيس ماشين هي جزء من تلفزيون سوني للمحتوى غير الخيالي. تم ترشيح أعمال كاتلر لجائزة الأوسكار، وقد حصل على ثلاث جوائز إيمي، وجائزتي بيبودي، وجائزتي سينما أي وجائزتي الشرف لأكاديمية التلفزيون، من بين جوائز أخرى. في عام 2021، آر.جي. حصل على جائزة اختيار النقاد بينيبيكر لإنجاز العمر في الفيلم الوثائقي. آر.جي يعيش في لوس أنجلوس مع زوجته جين تشا كاتلر وأطفالهما مادي وماكس وبيني وكلبهم ديكستر.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">رالف رايشرت</h2>
              <p class="text-white m-0">الرئيس التنفيذي لمؤسسة كأس العالم للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>نشأ رالف كلاعب فطري لديه شغف بالمنافسة في العالم الطبيعي والرقمي أيضًا. 
في أواخر التسعينيات، أسس شركة اس كيه جيمنج مع أخويه تيم وبنجامين، كأحد أندية الرياضات الإلكترونية الأولى، وتنافس على أعلى مستوى - وهذا ما دفعه لاحقًا إلى حب هذا المجال. متحمسًا لبناء هذه الصناعة، شارك رالف وفريقه في تأسيس أي أس أل، وشرع في السعي لبناء أكبر المنصات لهذه الرياضة الجديدة التي قامت بتحويل الرياضيين إلى نجوم في جميع أنحاء العالم. ما كان من المفترض أن يكون فوزًا سريعًا تطور إلى رحلة لمدى الحياة. أصبحت أي أس أل منذ ذلك الحين أكبر علامة تجارية للرياضات الإلكترونية، وبلغت الشركة ذروتها في صفقة بقيمة مليار دولار في عام 2022 لتشكيل مجموعة أي أس أل فايس إت. 
خدم رالف كرئيس مجلس الإدارة، في مهمة لبناء عوالم تتجاوز اللعب، حيث تجتمع الرياضات الإلكترونية بالألعاب. في أكتوبر 2023، تولى رالف منصب الرئيس التنفيذي لمؤسسة كأس العالم للرياضات الإلكترونية التي كلفت برفع مستوى الرياضات الإلكترونية إلى واحدة من الرياضات الرائدة في العالم، وتنمية المؤسسة كقوة دافعة في تطورها.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">د. سونجي يون</h2>
              <p class="text-white m-0">شريك إداري، برنسيبال فينتشر بارتنرز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>د. يون قائدة ذات رؤية ومستثمرة ومؤلفة في مجال الذكاء الاصطناعي وصناعة الألعاب، تتمتع بخبرة تزيد عن 20 عامًا في تطوير وتنفيذ استراتيجيات مبتكرة لشركات الألعاب العالمية عبر الإنترنت. بعد تخرجها من المعهد الكوري المتقدم للعلوم والتكنولوجيا، حصلت سونجي على درجة الدكتوراه من معهد ماساتشوستس للتكنولوجيا في علم الأعصاب الحسابي. أدى إيمانها القوي بمفهوم "اللعب" باعتباره حافز للابتكار في النهاية إلى انضمامها إلى ن س سوفت، وهي شركة رائدة عالميًا في تطوير ونشر ألعاب الفيديو، حيث شغلت منصب الرئيس والمدير التنفيذي للاستراتيجية. وفي هذا المنصب، قادت عملية تحول الذكاء الاصطناعي للشركة، حيث طبقت الذكاء الاصطناعي لتطوير الألعاب والجوانب المختلفة للعمليات التجارية. كما أشرفت على نمو الشركة من شركة مكونة من 350 شخصًا إلى منظمة عالمية في سبع دول في آسيا وأوروبا وأمريكا الشمالية، حيث قادت المبادرات الإستراتيجية في تحقيق الدخل والتسويق والعلامات التجارية وتطوير الأعمال والترخيص والحوكمة البيئية والاجتماعية، والتعليم. قدمت سونجي عدسة فريدة لربط مناهج البلدان فيما يتعلق بالتكنولوجيا والأخلاق، بالإضافة الى المشاركة في مجتمع الأعمال الدولي. أثناء عضويتها في المجلس الاستشاري الرئاسي للعلوم والتكنولوجيا في كوريا الجنوبية، خدمت سونجي تحت رئاسة رئيسين. وهي عضو في مؤسسة معهد ماساتشوستس للتكنولوجيا وعملت كعضو في المجلس الاستشاري لمركز سياسة آسيا والمحيط الهادئ، حيث واصلت استكشاف التأثيرات الاجتماعية للذكاء الاصطناعي والمساواة والجوانب الأخلاقية للتكنولوجيا. وهي أيضًا عضو في مجلس أمناء مؤسسة كارنيجي للسلام الدولي ومتحف الفن الآسيوي. تم اختيارها كقائدة عالمية شابة من قبل المنتدى الاقتصادي العالمي، وعضو منتخب في الأكاديمية الوطنية للهندسة في كوريا، وواحدة من 50 امرأة تستحق المشاهدة في مجال الأعمال من قبل صحيفة وول ستريت جورنال. يستكشف كتاب سونجي الأخير، "بوش بلاي"، أهمية اللعب في الابتكار، واستخلاص الدروس من الألعاب والطب والموارد البشرية وغيرها من الصناعات.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">توشيموتو ميتومو</h2>
              <p class="text-white m-0">نائب الرئيس التنفيذي وكبير مسؤولي الأمن في شركة مجموعة سوني</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>انضم توشيموتو ميتومو إلى شركة مجموعة سوني (شركة سوني سابقًا) في عام 1985 ويشغل حاليًا منصب نائب الرئيس التنفيذي وكبير مسؤولي الأمن المسؤول عن الملكية الفكرية واستراتيجية الأعمال والتكنولوجيا وتطوير الأعمال ومنصة حضانة الأعمال وأعمال التنقل. في هذه الأدوار، يكون ميتومو مسؤولاً عن تطوير الأعمال على المدى المتوسط ​​إلى الطويل من أجل النمو المستقبلي لشركة سوني واستراتيجيات الملكية الفكرية العالمية لشركة سوني ، وأنشطة توحيد التكنولوجيا. بالإضافة إلى ذلك، يرأس ميتومو صندوق سوني للابتكار وهو رأس المال الاستثماري لشركة سوني بصفته مديرًا تنفيذيًا أول للاستثمار.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">آنا روزفاندوفيتش</h2>
              <p class="text-white m-0">مؤسس والرئيس التنفيذي، ذا ستوري موب</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>آنا روزفاندوفيتش هي المؤسس والرئيس التنفيذي لشركة ذا ستوري موب، وهي شركة استشارية دولية رائدة في مجال ثقافة الألعاب والترفيه الغامر والرياضات الإلكترونية. من خلال دورها، تقدم المشورة للعلامات التجارية الرياضية والترفيهية العالمية والناشرين ونوادي الرياضات الإلكترونية والرياضيين بشأن الاتصالات الحقيقية المؤثرة مع عشاق الألعاب. قبل تأسيس الوكالة في عام 2018، شغلت آنا منصب نائب الرئيس للاتصالات في إي إف جي. وهناك، قادت جهود الاتصالات العالمية للبطولات الكبرى وحصلت على تغطية إعلامية غير مسبوقة للرياضة الأسرع نموًا في العالم. من خلال مكاتبها في لوس أنجلوس ولندن، عملت ذا ستوري موب مع أكثر من 100 علامة تجارية عالمية للألعاب والرياضة والترفيه. آنا هي أيضًا مستشارة لمؤسسة سايبر سمايل، ومرشدة للشركات الناشئة في مجال الرياضات الإلكترونية في ليد سبورتز، ومتحدثة في ثقافة الألعاب والاتصالات.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">بريان وارد</h2>
              <p class="text-white m-0">الرئيس التنفيذي، مجموعة الألعاب سافي</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>بريان هو الرئيس التنفيذي لمجموعة الألعاب سافي، وهي شركة ألعاب ورياضات إلكترونية مقرها الرياض، مهمتها قيادة الاستثمار والنمو طويل المدى لهذه الصناعة. وتحت قيادته، فيما يزيد قليلاً عن عامين، أصبحت سافي أكبر شركة للرياضات الإلكترونية في العالم وعاشر أكبر ناشر للألعاب، مع 3800 موظف في 22 دولة، بما في ذلك العديد من الفرق الحائزة على جوائز والملكية الفكرية.</p>
            <p>يتمتع براين بما يقرب من 30 عامًا من الخبرة في الاستوديو والعمليات، بما في ذلك مناصب عليا في إلكترونيك آرتس ومايكروسوفت و أكتيفيجن بليزارد. أثناء قيادته الاستوديوهات العالمية في أكتيفيجن، أدار جميع عمليات التطوير وأكثر من اثنتي عشرة عملية استحواذ على الاستوديوهات - مما أدى إلى مضاعفة السعة ثلاث مرات، وزيادة الإيرادات أربع مرات، وتحقيق هوامش ربح رائدة في الصناعة. فازت الألعاب التي ساعد في قيادتها بأكثر من 300 "لعبة العام" و1400 جائزة "اختيار المحرر" و"الإنجاز المتميز"، وتشمل ست امتيازات ترفيهية رقم 1، مع إيرادات كلية تزيد عن 35 مليار دولار.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جان ماردنبورو</h2>
              <p class="text-white m-0">سائق سباق محترف</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>رحلة جان من السباق الافتراضي إلى التميز في رياضة السيارات تجسد العزم والابتكار. بدأت حياته المهنية في عالم غران توريزمو الرقمي، حيث لفتت موهبته الاستثنائية انتباه الكشافين، مما أدى إلى فوز تاريخي في أكاديمية جي تي لعام 2011 والانضمام لفريق سباق نيسان.</p>
            <p>تشمل إنجازات جان المنافسة في سباق 24 ساعة في لومان وجي تي 500 كلاس في اليابان، وتحدي حدود الممكن باستمرار، وهدفه الآن هو الوصول إلى فئة الهايبركار. جان شخصية رائدة في تكنولوجيا رياضة السيارات، حيث يساهم في فريق نيسان فورمولا إي كسائق تطوير.</p>
            <p>بصفته متحدثًا، يقدم جان رؤى قيمة حول السباقات الافتراضية والحقيقية، والتطور التكنولوجي في رياضة السيارات، والمثابرة.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ينس هيلجرز</h2>
              <p class="text-white m-0">الشريك العام والمؤسس المشارك، بيتكرافت فنتشرز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يعتبر ينس هيلجرز رجل أعمال متسلسلًا مقيمًا في برلين (ألمانيا) ومعروفًا على نطاق واسع بعمله ومساهماته في مجال الرياضات الإلكترونية والألعاب. كان ينس الرئيس التنفيذي المؤسس لشركة إي أس أل، وهو أحد المؤسسين والرئيس التنفيذي لفريق الرياضات الإلكترونية الشهير عالميًا جي 2 للرياضات الإلكترونية، فضلاً عن كونه أحد المؤسسين والرئيس التنفيذي السابق لشركة بيانات الرياضات الإلكترونية بايز للرياضات الإلكترونية.</p>
            <p>في عام 2016، أسس ينس شركة بيتكرافت فنتشرز، التي طورها لتصبح منصة استثمارية رائدة عالميًا تركز على الألعاب والترفيه التفاعلي مع أكثر من 900 مليون دولار أمريكي من الممتلكات قيد الإدارة حاليًا.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">مها ابو العينين</h2>
              <p class="text-white m-0">الرئيس التنفيذي، ديجيتال أند سافي</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>مها أبو العينين هي مواطنة أمريكية مصرية تتمتع بأكثر من 30 عامًا من الخبرة في مجال الاتصالات العالمية، حيث قدمت الاستشارات للشركات العالمية العملاقة والشركات الناشئة والحكومات والمديرين التنفيذيين والأفراد ذوي الثروات العالية. وهي الرئيس التنفيذي لشركة ديجيتال أند سافي، وهي شركة استشارات اتصالات استراتيجية ولها مكاتب في الولايات المتحدة الأمريكية ودبي.</p>
            <p>تعتبر مها خبيرة استراتيجية ومتحدثة مطلوبة، وهي خبيرة في العلامات التجارية الشخصية وإدارة السمعة والاتصالات الحديثة والقوة التحويلية لسرد القصص. وهي الرئيس السابق للاتصالات العالمية والسياسة العامة في غوغل والمدير الإداري المؤسس لشركة ويبر شاندويك في منطقة الشرق الأوسط وشمال أفريقيا. عملت في مجال الترويج والتسويق الرياضي في شركة جنرال ميلز قبل أن تصبح رائدة أعمال.</p>
            <p>مها عضو في مجلس الإدارة العالمي لوكالة أسوشيتد برس وتستضيف البودكاست "سافي تالك". للمزيد، قم بزيارة: digitalandsavvy.com</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ماتيلد بيجنول</h2>
              <p class="text-white m-0">المؤسس المشارك والرئيس التنفيذي لشؤون الروبوتات، روبوتو غايمز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ماتيلد هي المؤسس المشارك والمدير الإبداعي لشركة روبوتو غايمز ، شركتها الثانية للألعاب. من خلال دورها، تشرف على استراتيجية الشركة بالإضافة إلى تصميم وفن عنوانها التالي، ستورم فورج. ماتيلد هي في الأصل من فرنسا لكنها انتقلت إلى الولايات المتحدة عندما كانت مراهقة. وهي حاصلة على درجة البكالوريوس في علوم الكمبيوتر وعلم النفس ودرجة الماجستير في تصميم تجربة المستخدم من جامعة كارنيجي ميلون. بعد التخرج، أنشأت شركتها الأولى، زيبزاب بلاي، حيث صنعت ألعابًا يلعبها ملايين الأشخاص. بعد استحواذ شركة بوب غاب غايمز على الشركة، شاركت في إدارة استوديو بوب غاب سان فرانسيسكو إلكترونيك أرتس. أكثر من أي شيء آخر، تحب ماتيلد صنع الألعاب، التي تمثل التقاطع المثالي بين التكنولوجيا والفن والتصميم.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">نيت مورلي</h2>
              <p class="text-white m-0">مؤسس شركة وركس كولكتيف</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>نيت مورلي هو مؤسس شركة وركس كولكتيف، وهي الشركة المسؤولة عن العلامات التجارية لكأس العالم للرياضات الإلكترونية، وكأس العالم لكرة القدم 2026، وكأس العالم للسيدات لكرة القدم 2023، ودورة الألعاب الأولمبية في لوس أنجلوس 2028 وغيرها الكثير. وقد بُنيت مسيرة نيت المهنية على تطوير وتعزيز العلامات التجارية التي تؤثر على الثقافة. أثناء عمله كمدير تسويق في شركة أحذية دي سي، ساعد نيت في إنشاء سلسلة أفلام جيمخانا على موقع يوتيوب والتي حصدت أكثر من مليار مشاهدة. وتشمل خبرته أيضًا العمل في شركة نايكي في مجال التسويق العالمي للعلامات التجارية، كمدير تسويق في شركة سكال كاندي و كعضو في مجلس استشاري لشركة يوتيوب العملاقة: دونات ميديا. بصفته شريكًا في الشركة، أنشأ نيت استراتيجيات وحملات ومحتوى لعلامات تجارية كبرى مثل سامسونغ و سبوتيفاي وترغيت وإي إس بي إن أكتيفيجن وجيتارات فيندر وروبن هود وجيليت وغيرها الكثير. يتمتع نيت بخبرة استراتيجية وإبداعية واسعة ومتنوعة، وقد رسخت مكانته كقائد في تشكيل السرديات الثقافية وتحديد نجاح السوق.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">نيكولا ميزون</h2>
              <p class="text-white m-0">مدير العمليات والمؤسس المشارك، كوتور ران واي، فيزتا دي جي تي إل</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>حصلت نيكولا ميزون على درجة البكالوريوس (مع مرتبة الشرف) في تصميم ألعاب الكمبيوتر من جامعة كامبوس سوفولك. طوال مسيرتها المهنية، تعاونت نيكولا مع أسماء مشهورة مثل نادي بايرن ميونيخ لكرة القدم، وأجاثا كريستي، ولوك بيسون في فيلم لعبة فاليريان، والمؤسس المشارك لشركة أتاري نولان بوشنيل.</p>
            <p>شاركت نيكولا في تأسيس فيزتا دي جي تي إل ، وهو استوديو ألعاب مقره برلين يهدف إلى إحداث ثورة في تقاطع الألعاب والأزياء والتجارة. يسعى منتجها الرائد، كوتور ران واي، إلى إنشاء أكبر منصة اجتماعية رقمية للأزياء مدفوعة بالألعاب، ودمج الإبداع والمجتمع والتكنولوجيا. تعالج هذه المنصة القضايا الصناعية النظامية، وتروج للشمولية وتتماشى مع رؤية المملكة العربية السعودية 2030.</p>
            <p>تشارك نيكولا، المتحدثة الرئيسية المحترمة، خبرتها في التحول الرقمي وإمكانية الوصول. وهي متحمسة لتوسع فيزتا دي جي تي إل في الشرق الأوسط، وتحرص على التعاون مع المواهب المحلية، وتعزيز التراث الثقافي من خلال الألعاب الرقمية المبتكرة وعناصر الويب 3 والبيئات الافتراضية.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">فيصل بن حمران</h2>
              <p class="text-white m-0">الرئيس التنفيذي للرياضات الإلكترونية في مؤسسة كأس العالم للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يشغر فيصل بن حمران منصب الرئيس التنفيذي للرياضات الإلكترونية في مؤسسة كأس العالم للرياضات الإلكترونية. ويعتبر بن حمران مسؤولاً عن قيادة مبادرة كأس العالم للرياضات الإلكترونية وتطويرها، بالإضافة إلى تركيزه على تعزيز التجارب الترفيهية المرافقة للفعالية، كما يقوم بلعب دور هام في دعم جهود المؤسسة لتعزيز قطاع الألعاب والرياضات الإلكترونية حول العالم.</p>
            <p>وقبل تعيينه في مؤسسة كأس العالم للرياضات الإلكترونية، شغل بن حمران منصب الرئيس التنفيذي للرياضات الإلكترونية في الاتحاد السعودي للرياضات الإلكترونية، حيث لعب دوراً بارزاً في دفع جهود الاتحاد لترسيخ مكانة المملكة كمركز إقليمي رائد للرياضات الإلكترونية والتجارب الترفيهية. وخلال مسيرته مع الاتحاد، ساهم بن حمران بتطوير مجتمع اللاعبين والتخطيط لسير عمل بطولات الاتحاد المستقبلية وقيادة طموح الاتحاد بالارتقاء باللاعب الناشئ لإيصاله للاحتراف.</p>
            <p>وكان لإبن حمران دور بارز في تطوير الاستراتيجية الوطنية للألعاب والرياضات الإلكترونية والإشراف على تطوير أندية الرياضات الإلكترونية وإنشاء بطولات جديدة، بالإضافة لاكتشاف فرص جديدة في السوق المتنامية، ورعاية المواهب الناشئة، بما ينسجم مع رؤية ومهام الاتحاد السعودي للرياضات الإلكترونية. وعمل بن حمران على إيصال "موسم الجيمرز" للمكانة العالمية التي وصل إليها، وأشرف على عمليات بطولة "لاعبون بلا حدود"، أكبر فعالية خيرية للرياضات الإلكترونية في العالم، وبطولة الدوري السعودي الإلكتروني وغيرها من البطولات.</p>
            <p>ويتميز بن حمران بشغفٍ حقيقي بالألعاب والرياضات الإلكترونية، حيث دخل مجال الرياضات الإلكترونية كلاعب محترف عام 2009 بينما كان يدرس هندسة نظم المعلومات في جامعة الملك فهد للبترول والمعادن حيث حصل على درجة البكالوريوس، وبعد ذلك، واصل مسيرته الأكاديمية وحصل على درجة الماجستير في الابتكار وريادة وتطوير الأعمال من جامعة وستمنستر  بالمملكة المتحدة، ممّا أضفى على مسيرته المهنية بعداً أكاديمياً واحترافياً.</p>
            <p>وقبل انضمامه إلى الاتحاد السعودي للرياضات الإلكترونية عام 2021، عزّز بن حمران خبراته لأكثر من 10 سنوات في مجالات متنوعة شملت تطوير الأعمال بقطاع الرياضات والألعاب الإلكترونية، وتنظيم البطولات وقاعات الألعاب الإلكترونية، وتطوير المواقع الإلكترونية، وإدارة الفرق الإلكترونية، وتطبيقات الألعاب الإلكترونية.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">غابرييل " FalleN" توليدو</h2>
              <p class="text-white m-0">لاعب سي اس 2، فيوريا للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>غابرييل توليدو رياضي برازيلي متميز في الرياضات الإلكترونية، اشتهر بإسهاماته لكاونتر سترايك.  مع أكثر من 20 عامًا من الخبرة، أثبت غابرييل نفسه كشخصية رئيسية في المجال التنافسي. اشتهر بمهاراته الاستثنائية كلاعب AWPer وقائد في اللعبة، وقد أثر بشكل كبير على المشهد بعبقريته الاستراتيجية وأسلوب اللعب المبتكر. اكتسب شهرة مع فرق مثل لومينوسيتي جيمنج واس كيه جيمنج، حيث قادهم إلى انتصارات كبيرة، بما في ذلك إي إس إل وان كولونيا 2016 وام ال جي كولومبوس 2016. يلعب حاليًا لصالح فيوريا للرياضات الالكترونية، ويستمر في التفوق والتأثير على اللعبة. بالإضافة إلى مسيرته المهنية في الرياضات الإلكترونية، يمتلك غابرييل شركة تسمى فالين كومباني، مما تعكس تأثيره الواسع خارج نطاق الألعاب. يتميز إرثه وتفانيه في التميز والقيادة ودوره المحوري في تطوير الرياضات الإلكترونية.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جو بومبليانو</h2>
              <p class="text-white m-0">الشريك الإداري في شركة بومب للاستثمارات</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>جو بومبليانو هو أحد أسرع الشخصيات نموًا في مجال الرياضة. ترك حياته المهنية في جي بي مورجان في عام 2020 ليبدأ في إنشاء محتوى الأعمال الرياضية بدوام كامل، وسرعان ما أصبح مصدرًا موثوقًا به للمديرين التنفيذيين والرياضيين المحترفين و المشجعين العاديين.</p>
            <p>حققت أعمال المحتوى الخاصة بجو أكثر من 2 مليار ظهور في العام الماضي، ويقرأ رسالته الإخبارية أكثر من 125000 شخص في 185 دولة. تم عرض أعمال جو في إي إس بي إن وبلومبرج وفوكس سبورتس وسي إن بي سي، ويقضي قدرًا كبيرًا من الوقت في تحديد ودعم المؤسسين العظماء من خلال فرص الاستثمار في المراحل المبكرة، بما في ذلك شركات مثل ريديت وريبليت وأندر دوغ فانتازي ودوري لاكروس الممتاز.</p>
            <p>يستضيف جو أيضًا بودكاست شهيرًا بعنوان "عرض جو بومب"، حيث يجري مقابلات مع الرياضيين والمديرين التنفيذيين حول حياتهم المهنية، أعمالهم، واستثماراتهم. من بين الضيوف السابقين: دانا وايت، لانس أرمسترونج، جاري فاينرتشوك، مارك لور، فرانسيس نجانو، تروي أيكمان وأليكس رودريجيز.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">إم جيه أكوستا رويز</h2>
              <p class="text-white m-0">مذيعة رياضية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>إم جيه أكوستا رويز هي مقدمة برامج تلفزيونية ومذيعة رياضية، وتعمل حاليًا كمذيعة لبرنامج سبورت سنتر على قناة إي إس بي إن وكمراسلة جانبية لبرنامج مندي نايت فوتبول على قناة اي اس بي ان سبورتس.</p>
            <p>أصبحت الصحفية الحائزة على جائزة إيمي أول امرأة لاتينية تستضيف برنامجًا في وسائل إعلام اتحاد كرة القدم الأميركي. تتحدث الإنجليزية والإسبانية بشكل كامل، وتعمل دوليًا لتتواصل مع المشهد المتنوع والمتنامي خارج الولايات المتحدة.</p>
            <p>مع ما يقرب من 15 عامًا في مجال التلفزيون والترفيه، تواصل عملها كمدافعة عن التمثيل والمساواة. تعمل إم جيه بشكل وثيق مع مجموعات تمكين المرأة مثل "مقعد على الطاولة". وهي مكرسة لتضخيم أصوات المجتمعات المهمشة.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">نانيا ريفز</h2>
              <p class="text-white m-0">الرئيس التنفيذي والمؤسس المشارك لشركة تريب ونائب الرئيس والمدير التنفيذي للعمليات سابقا بمجموعة إلكترونيك آرتس اونلاين</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">نيك براون</h2>
              <p class="text-white m-0">شريك ومنتج تنفيذي في جود بوي كرييتيف</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>نيك براون هو شريك مؤسس ومنتج تنفيذي في جود بوي كرييتيف، وهو استوديو إبداعي مقره لوس أنجلوس يركز على إنتاج الأفلام الحية في مجال الألعاب والرياضات الإلكترونية. يطور جود بوي وينتج إعلانات تجارية ومقاطع تشويقية وأفلام وثائقية لأكبر ناشري الألعاب في العالم بما في ذلك رايوت جيمز وأبيك جيمز ويوبي سوفت. وقد فاز بجائزتي إيمي الرياضية عن عمله مع رايوت جيمز في بطولة العالم لليج أوف شامبيونز.</p>
            <p>في منصبه كمنتج تنفيذي، يشرف نيك على التطوير الإبداعي وجميع أنشطة إنتاج الأفلام الحية. لديه خبرة واسعة في العمل على المستوى الدولي بعد أن أنتج حملات متعددة في الولايات المتحدة والصين وكوريا واليابان وسنغافورة وألمانيا والدنمارك وإسبانيا وإنجلترا وأيسلندا، وتركيا، والمكسيك، والبرازيل.</p>
            <p>قبل تأسيس جود بوي، عمل نيك في التطوير الإبداعي والإنتاج لشركة والت ديزني، حيث أنتج حملات محتوى رقمية  و تجارية حائزة على عدة جوائز.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">او جيه بورج</h2>
              <p class="text-white m-0">المذيع المنتج التنفيذي لستاندرد فيلمز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>أمضى او جيه بورج العقد الماضي منغمسًا في الرياضات الإلكترونية سواء أمام الميكروفون أو خلفه، حيث عمل في أكبر أحداث الرياضات الإلكترونية حول العالم.</p>
            <p>وهو أيضًا مذيع مشهور في المملكة المتحدة يقدم برامج ترفيهية على الراديو والتلفزيون لهيئة الإذاعة البريطانية (بي بي سي) بالإضافة إلى العديد من الرياضات، من بطولة يو اف سي إلى سباق فرنسا للدراجات.</p>
            <p>بصفته مخرجًا ومنتجًا تنفيذيًا في شركة الإنتاج الخاصة به ستاندرد فيلمز، أنتج أفلامًا وثائقية ومفاهيمية عالية الجودة تسد الفجوة بين الرياضات الإلكترونية والمذيعين السائدين.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">شوجي أوتسومي</h2>
              <p class="text-white m-0">الرئيس والمدير التنفيذي للعمليات في شركة سيجا</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يعمل شوجي أوتسومي في صناعة الألعاب والترفيه منذ أكثر من 35 عامًا. بعد قيادة مشروع "بلاي ستيشن" في سوني، تمت دعوته من قبل شركة منافسة لسوني، سيجا، للعمل كرئيس تطوير مشروع "دريم كاست". بعد إطلاق الجهاز، قاد فرقًا إبداعية وتجارية كمدير تنفيذي في شركات مثل ديزني إنتراكتيف آسيا ووارنر ميوزيك، اليابان. كما أسس شركته الخاصة، كيو إنترتينمنت، حيث أنتج الألعاب الأسطورية لومينيس وتشايلد أوف إيدن. في عام 2020، عاد إلى سيجا كمدير تنفيذي للعمليات ولعب دورًا رئيسيًا في إحياء سيجا من خلال استراتيجية الوسائط المتعددة لسونيك ذا هيدجهوج، وفي أبريل 2024 تم تعيينه رئيسًا ومديرًا تنفيذيًا للعمليات في سيجا. يتمتع بخلفية فريدة تجمع بين الخبرة في الإدارة وتطوير المحتوى من منظور عالمي. تشمل العناوين الرئيسية التي شارك فيها بشكل مباشر والتي تمثل حياته المهنية كراش بانديكوت وكينجدوم هارتس والعديد من الألعاب الأخرى.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ستيفن ارهانسيت</h2>
              <p class="text-white m-0">الرئيس التنفيذي لشركة تيم ليكويد</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يعد ستيفن "ليكويد 112" ارهانسيت رائدًا في صناعة الرياضات الإلكترونية، حيث يمزج أكثر من عقد من الخبرة في مجال تمويل الأعمال مع الألعاب الاحترافية لبناء تيم ليكويد، وهو مركز عالمي للرياضات الإلكترونية. بصفته الرئيس التنفيذي المشارك، يشرف على أكثر من 300 موظف و100 رياضي من النخبة في أربع منشآت دولية. تحت قيادته، حققت تيم ليكويد انتصارات كبيرة، بما في ذلك بطولة دوتا 2 الدولية، وخمسة ألقاب في سلسلة بطولة دوري الأساطير، و الجراند سلام في كاونتر سترايك. يمتد تأثيره إلى مجلات فوربس وبيزنس إنسايدر ونيتفليكس، مما دفع الرياضات الإلكترونية إلى صناعة تبلغ قيمتها 1.5 مليار دولار.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">أرنولد هور</h2>
              <p class="text-white m-0">الرئيس التنفيذي لشركة جن جي للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>أرنولد هور هو الرئيس التنفيذي لشركة جن جي للرياضات الإلكترونية، وهي منظمة عالمية للرياضات الإلكترونية. تمتلك شركة جن جي وتدير فرقًا رياضية إلكترونية رائدة على مستوى العالم، فضلًا عن برامج الألعاب المبتكرة، بما في ذلك أكاديمية جن جي العالمية ونتورك، وهي منصة لتمكين المرأة في مجال الألعاب. قبل الانضمام إلى شركة جن جي، كان أرنولد رئيسًا لشركة ميم بوكس، إحدى أنجح شركات الشركات الناشئة في كوريا، حيث ساعد في تنمية الشركة من السلسلة أ إلى السلسلة س، وجمع أكثر من 160 مليون دولار. قبل انضمامه إلى شركة ميم بوكس، عمل في مجال المنتجات والاستراتيجية في جوجل، والاستشارات الإدارية في مجموعة بوسطن الاستشارية، والخدمات المصرفية الاستثمارية مع جولدمان ساكس.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">بلال فارس</h2>
              <p class="text-white m-0">نائب الرئيس الأول والمدير العام، أديداس إي إم سي ماركيت</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>بلال فارس قائد يتمتع بدافع ذاتي وخبرة تزيد عن 20 عامًا في مجال البيع والأعمال والإدارة التنظيمية، وهو ملتزم بتحقيق النتائج وتعزيز تنمية الأفراد. منذ عام 2018، يعمل في أديداس، حيث شغل مناصب مختلفة، وساهم بشكل كبير في نمو الشركة على المستويين الإقليمي والعالمي. يركز نهجه القيادي على مواءمة رؤية العميل والمنظمة، وضمان تحقيق كل هدف بتفانٍ. طوال حياته المهنية، برع بلال في تصميم وتنفيذ استراتيجيات شاملة من البداية إلى النهاية لتحقيق النجاح المستدام. تمتد خبرته الواسعة إلى قيادة فرق كبيرة عبر وظائف وجغرافيات مختلفة، مما يمنحه فهمًا عميقًا لإدارة المنتجات والتسويق وتطوير الأفراد وخدمة العملاء والتكنولوجيا وتقديم الخدمات.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">بروس شتاين</h2>
              <p class="text-white m-0">المؤسس المشارك لشركة اكسيوماتيك جيمينج، والمدير الإداري لشركة جونو كابيتال</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>خلال حياته المهنية، شغل بروس شتاين مناصب "س" في كل من الشركات الناشئة والمنتجات الاستهلاكية العامة والشركات القائمة على التكنولوجيا وتسويق الملكية الفكرية. يعمل حاليًا كمستشار لشركة "جونو بارتنرز" والعملاء المعتمدين على التكنولوجيا الاستهلاكية مثل روبوتات الذكاء الاصطناعي المجسدة.</p>
            <p>كان بروس مؤخرًا الرئيس التنفيذي/المؤسس المشارك لشركة أكسيوماتيك، وهي منصة استثمارية في الرياضات الإلكترونية/ألعاب الفيديو. لقد وضع استراتيجية أكسيوماتيك منذ بدايتها في عام 2015 من خلال استثمار "تيم ليكويد" من خلال جميع استثماراتهم في"أبيك غيمز" و"دابر لابز" و"نيانتيك غايمز"وغيرها.</p>
            <p>تشمل خبرة شتاين السابقة: المدير التنفيذي للعمليات/الرئيس العالمي/"ماتيل"، الرئيس التنفيذي لسوني انتراكتيف انترتينمنت (بلاي ستيشن)، الرئيس/الرئيس التنفيذي لشركة منتجات كينر (هاسبرو)، الرئيس التنفيذي لشركة ماندالاي ميديا ، الرئيس التنفيذي/رئيس مجلس الإدارة راديكال كوميونيكاشون والمؤسس/الرئيس التنفيذي لشركة ذا هاتشيري.</p>
            <p>كان ستاين مستشارًا استراتيجيًا لشركات بي / في سي وشركات الإعلام والإنترنت بما في ذلك دريم ووركس إس كيه جي و وارنر بروس.وكي بي سي بي و غوغنهايم كابيتال.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">كريج ليفين</h2>
              <p class="text-white m-0">الرئيس التنفيذي المشارك لمجموعة إي أس أل فايس إت</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>مجموعة إي أس أل فايس إت هي الشركة الرائدة في مجال الألعاب التنافسية والرياضات الإلكترونية. ساعد كريج في تصميم عملية اندماج" إي أس أل غيمينغ" و"فايس إت" في عام 2022 وعمل سابقًا كرئيس تنفيذي مشارك لشركة إي أس أل غيمينغ حيث قاد استراتيجية الأعمال العالمية والعمليات.</p>
            <p>بصفته لاعبًا طوال حياته، ساعد كريج في ريادة صناعة الرياضات الإلكترونية لأكثر من 20 عامًا كلاعب في البداية، ثم مالك فريق، وأصبح مديرًا تنفيذيًا ديناميكيًا للرياضات الإلكترونية.</p>
            <p>ليفين حاصل على بكالوريوس العلوم في نظم المعلومات والإدارة والسلوك التنظيمي من كلية ستيرن للأعمال بجامعة نيويورك.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">دان بونتنج</h2>
              <p class="text-white m-0">شريك استثماري في 1 ايه ام جيمنج</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>بخبرة تزيد عن 20 عامًا في بناء الفرق وقيادة تطوير الألعاب، يعد دان بونتنج قائدًا إبداعيًا وتشغيليًا متمرسًا في صناعة الألعاب. بدأ بونتنج في استوديو التطوير تريارك في عام 2003، واكتسب سمعة طيبة باعتباره قادرًا على حل المشكلات وتحفيز الفريق والمبتكر الذي حدد مسار حياته المهنية على مدار السنوات. أدى عمله في سلسلة كول أوف ديوتي، بلاك أوبس إلى أن تصبح واحدة من أنجح العناوين في تاريخ ألعاب الفيديو، بما في ذلك العديد من العناوين ضمن أفضل 50 لعبة مبيعًا على الإطلاق. في مجال الرياضات الإلكترونية المزدهر في أوائل العقد الأول من القرن الحادي والعشرين، مهدت سلسلة بلاك أوبس الطريق لامتياز كول أوف ديوتي، مما ساعد في النهاية في بناء الرياضات الإلكترونية التنافسية لتصبح ظاهرة عالمية. يعمل بونتنج حاليًا كمستثمر ناشئ ومستشار في نظام الألعاب المستقل، ويوجه الجيل القادم من المبدعين الذين يشكلون مستقبل الألعاب.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">إريك شانكس</h2>
              <p class="text-white m-0">الرئيس التنفيذي والمنتج التنفيذي، فوكس سبورتس</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>إريك شانكس هو الرئيس التنفيذي والمنتج التنفيذي لشركة فوكس سبورتس. يشرف شانكس على جميع الكيانات داخل فوكس سبورتس، أف أس وان، أف أس تو؛ فوكس سوكر بلس ؛ فوكس سبورتس؛ فوكس كوليدج سبورتس وفوكس سبورتس ديجيتال.</p>
            <p>لقد شق شانكس طريقه من مساعد بث إلى الرئيس التنفيذي والمنتج التنفيذي. تم تعيينه في هذا المنصب في يونيو 2010، ويُعتقد أنه أصغر مسؤول تنفيذي على الإطلاق يقود قسمًا رياضيًا في شبكة بث.</p>
            <p>تم اختيار شانكس كأفضل مسؤول تنفيذي رياضي لعام 2023 من قبل مجلة الأعمال الرياضية، وهو فائز بأكثر من 20 جائزة إيمي الرياضية وحامل 11 براءة اختراع أمريكية.</p>
            <p>شغل شانكس منصب نائب الرئيس التنفيذي لشركة دايركت تي في من 2004 إلى 2010، حيث اخترع قناة اتحاد كرة القدم الأميركي ريد زون.</p>
            <p>في عام 2001، أنشأ شانكس شبكات سكاي ايطاليا الرياضية لشركة نيوز كورب. أسس قناة سكاي سبورتس 1و2 وأشرف على الاستحواذ على حقوق الدوري الإيطالي وكان المنتج التنفيذي هناك خلال موسم إطلاقه الافتتاحي. كما خدم شانكس في طواقم الإنتاج لتغطية قناة فوكس سبورتس لدوري الهوكي الوطني ودوري البيسبول الرئيسي. ساعد شانكس في تطوير خط الهجوم الأصفر و"قرص الهوكي المتوهج" من فوكس تراكس.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">فابيان شويرمان</h2>
              <p class="text-white m-0">المسؤول الرئيسي عن الألعاب، مؤسسة كأس العالم للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يشغل فابيان شويرمان منصب المسؤول الرئيسي عن الألعاب في مؤسسة كأس العالم للرياضات الإلكترونية، حيث يشرف على إدارة جميع عناوين الألعاب والعلاقات مع الناشرين المعنيين في المسابقة. ويشمل ذلك أكبر الناشرين والأسماء في مجال الرياضات الإلكترونية. قبل هذا الدور، ساهم في استمرار نجاح مجموعة إي أس أل فيس إت، حيث قاد شراكات الناشرين العالمية وأدار محفظة الألعاب الأساسية لمدة ست سنوات ونصف. مع أكثر من عقد من الخبرة في صناعة الألعاب والمحتوى، عمل فابيان باستمرار على تمكين الناشرين والشركاء في جميع أنحاء العالم. قبل الشروع في حياته المهنية في الألعاب والرياضات الإلكترونية، درس فابيان في هولندا وأستراليا وألمانيا، وحصل على ماجستير إدارة الأعمال قبل أن يقضي أربع سنوات في الاستشارات وعمليات الدمج والاستحواذ لبدء حياته المهنية. في وقت فراغه، يتنافس في رياضات مختلفة، على دراجته بيلوتون، أو في المنزل في ساحات المعارك الافتراضية لألعاب أف بي أس وموبا المحمولة.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">غادة الحديثي</h2>
              <p class="text-white m-0">المؤسس المشارك لشركة تايبل نايت غيمز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>غادة الحديثي شخصية متحمسة ولديها شغف صناعة الألعاب. تطور هذا الشغف بالألعاب بمرور الوقت، مما شكل اهتماماتها وأثار طموحاتها في مجال ريادة الأعمال. أدركت غادة قدرة ألعاب الفيديو على جذب انتباه الجمهور وترفيه، وأصبحت متحمسة لتحويل هذه الهواية المستمرة طوال حياتها إلى مهنة احترافية. حاصلة على درجة الماجستير في إدارة الأعمال المتخصصة في المالية من جامعة الأمير سلطان، ولديها خبرة واسعة في ريادة الأعمال وتطوير الأعمال والإدارة الاستراتيجية. بصفتها المؤسس المشارك لشركة تايبل نايت غايمز، ساهمت في توسيع الشركة، حيث وصلت تطبيقات ألعاب الهاتف المحمول إلى أعلى المخططات المحلية والإقليمية على آب ستور وغوغل بلاي. وتخصصت في تطوير الألعاب الاجتماعية لمنصات الهاتف المحمول، وقد أظهرت روح المبادرة وكفاءتها التقنية. بدافع من الابتكار والتأثير، فهي حريصة على مواجهة التحديات الجديدة وتقديم مساهمة ذات معنى في النظام البيئي للألعاب في المملكة العربية السعودية.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">د. هبة محمد عطية</h2>
              <p class="text-white m-0">الرئيس التنفيذي  والمؤسس لشركة غايم إت</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>انتقلت الدكتورة هبة محمد عطية، الرئيس التنفيذي ومؤسس شركة غايم إت، من مهنة طبية متميزة في أمراض النطق وإعاقات النمو لتصبح رائدة أعمال في عالم الألعاب الجادة. مع أكثر من 10 سنوات من الخبرة السريرية في مستشفى الملك فيصل التخصصي ومركز الأبحاث في العمل مع الأطفال، نجحت أيضًا في قيادة مبادرات رئيسية في جميع أنحاء الولايات المتحدة الأمريكية والإمارات العربية المتحدة والمملكة العربية السعودية، لتعزيز الشراكات بين القطاعين العام والخاص ومشاريع تمكين المجتمع. تواصل الدكتورة عطية قيادة التغيير التحويلي باستخدام العلوم السريرية مع الألعاب المبتكرة وتكنولوجيا الذكاء الاصطناعي، مما يحدث ثورة في كيفية تعلم الأطفال ونجاحهم في العصر الرقمي. حصل عملها على العديد من الجوائز والتقدير، بما في ذلك جائزة "ليب أفياتريكس" للشركة الناشئة الأكثر ابتكارًا التي تقودها النساء في عام 2022، وجائزة أفضل مؤسسة أنثى من وزارة الاتصالات وتكنولوجيا المعلومات في المملكة العربية السعودية في عام 2023، ومؤخرًا في عام 2024 الفوز بجوائز "مايكروسوفت باور وومن" في الشرق الأوسط.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جوني إيبرت</h2>
              <p class="text-white m-0">المدير الإبداعي الرئيس السابق، بنجي</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>شغل جوني إيبرت منصب المدير الإبداعي الرئيسي في بنجي لمدة سبع سنوات. وأثناء وجوده هناك، أدار استراتيجية محفظة بنجي وجميع الأقسام الإبداعية، وساعد في ضمان جودة المنتج في جميع الامتيازات. وقبل ذلك، عمل جوني في شركة بليزارد إنترتينمنت لمدة سبع سنوات و كمصمم رئيسي في امتيازي ديابلو وستاركرافت. كما عمل جوني في شركة ريليك إنترتينمنت وكان مدير عناوين لعبة فجر الحرب لمدة خمس سنوات.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">خالد مخشوش</h2>
              <p class="text-white m-0">فنان</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>خالد هو فنان رقمي متخصص في فن البيكسل. يستخدم لوحة رسم وقلمًا وفأرة لإنشاء لوحات رقمية جوية تستكشف العلاقة بين العواطف والفضاء. يركز على شعور المكان ويرسم أماكن خيالية مبنية على أماكن حقيقية، و يمزج الواقع بالخيال في فنه ويدعو المشاهدين لتجربة رؤيته. إنه مستوحى من العالم الحديث والمعاصر ومناظره الطبيعية المتنوعة. إنه يتحدى نفسه للتعبير عن أفكاره ومشاعره باستخدام وسيلة محدودة ومدمجة من فن البيكسل، باستخدام الألوان والأشكال والأنماط لإنشاء مشاهد مفصلة تجسد جوهر خياله.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ميشال بليشارز</h2>
              <p class="text-white m-0">نائب رئيس تطوير المنتجات، مجموعة إي أس أل فايس إت</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ميشال "كارماك" بليشارز هو من قدامى خبراء الرياضات الإلكترونية الحائزين على جوائز لأكثر من 20 عامًا. انتقل من الجودو التنافسي إلى الرياضات الإلكترونية، وكان لاعبًا تنافسيًا وصحفيًا ثم منظمًا للبطولات. وهو أيضا مسؤول عن بناء البنية التحتية لبطولات محترفي الرياضات الإلكترونية في جميع أنحاء العالم. يشغل حاليًا منصب نائب الرئيس للمشاريع الخاصة في مجموعة إي أس أل فايس إت.</p>
            <p>كان "صحفي العام للرياضات الإلكترونية" في عامي 2009 و2010، وتم إدخاله إلى قاعة مشاهير أخبار الرياضة الإلكترونية في عام 2019 وحصل على جائزة الإنجاز مدى الحياة من جوائز الرياضات الإلكترونية في عام 2021. يُنسب إليه الفضل في تحويل سلسلة بطولات إنتل إكستريم ماسترز إلى واحدة من أكثر الممتلكات قيمة وشهرة في العالم، حيث نقل بطولاتها من المعارض التجارية إلى الساحات في أوروبا وأمريكا الشمالية والجنوبية وأستراليا وآسيا وحقق إنجازات بارزة.</p>
            <p>وهو مؤسس أقدم حدث ميداني متكرر في العالم، إنتل إكستريم ماسترز كاتوفيتشي، والذي بدأه في عام 2013.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">بيتر هاتون</h2>
              <p class="text-white m-0">عضو مجلس إدارة، الدوري السعودي للمحترفين</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>​​بيتر هاتون هو مدير الدوري السعودي للمحترفين ورئيس اللجنة الإعلامية للدوري. وقد ترأس مؤخرًا اللجنة المنظمة لكأس العالم للكريكت ت20، كما أنه عضو في مجلس إدارة منظمة الترايثلون الاحترافية ودوري الركبي. كما يقدم المشورة لسلسلة من شركات التكنولوجيا، مستفيدًا من خبرته السابقة كرئيس للشراكات الرياضية العالمية في ميتا.</p>
            <p>كان هاتون في الأصل معلقًا ومقدمًا رياضيًا، ثم ارتقى ليصبح الرئيس التنفيذي لأكبر القنوات الرياضية التلفزيونية في أوروبا وآسيا وشبه القارة الهندية (يوروسبورت، وإي إس بي إن ستار سبورتس، وتين سبورتس). كما أدار أعمال وكالات رياضية بما في ذلك فترة كرئيس تنفيذي مشارك لشركة إم بي آند سيلفا، وأكثر من عقد من الزمان في شركة آي إم جي.</p>
            <p>بيتر يقيم حاليًا في وادي السيليكون، كاليفورنيا بعد أن عمل سابقًا في باريس ولندن وموسكو ودبي وسنغافورة وهونج كونج ودلهي.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ريم الكنهل</h2>
              <p class="text-white m-0">مديرة إبداعية ومصممة أزياء</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>أدركت ريم الكنهل منذ سن مبكر أن حياتها سترتبط إلى الأبد بالموضة، وقد ساهمت غرائزها في النسيج والشكل وإحساسها العميق بكيفية ربط ثقافتها والعالم الحديث في دفع العديد من مجموعاتها التي لا يتم تحديدها أبدًا حسب الموسم أو الاتجاه، بل حسب المزاج والأهمية.</p>
            <p>ولدت ونشأت في المملكة العربية السعودية، وبدأت تجربة الموضة عندما كانت طالبة. شكلت القمصان والتنانير البسيطة والأنيقة التي يمكن للنساء ارتدائها بعدة طرق جزءًا من فلسفتها التصميمية التي تجمع بين الخطوط النظيفة والمنحنيات والهياكل النظيفة وإمكانيات حرية التفرد.</p>
            <p>التحقت ريم بدورة في "معهد الفنون والمهارات" بالرياض، حيث تطورت معرفتها بصناعة الملابس. في عام 2010، بعد عام واحد من تخرجها، أسست ريم علامتها التجارية التي تحمل اسمها – ريم الكنهل، وهي مجموعة من الملابس الجاهزة والإكسسوارات، ذات طابع فريد من حيث الشكل واللون والجمالية.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ريكاردو فورت</h2>
              <p class="text-white m-0">مؤسس شركة سبورت باي فورت كونسلتينج</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ريكاردو فورت هو أحد أكثر الأسماء احترامًا في مجال الرعاية العالمية. بصفته المدير التنفيذي الوحيد الذي قاد أقسام الرعاية العالمية لرعايتي الاتحاد الدولي لكرة القدم واللجنة الأولمبية الدولية - فيزا وكوكا كولا - فقد نجح في التفاوض على مليارات الدولارات في عقود الرعاية مع اللجنة الأولمبية الدولية والاتحاد الدولي لكرة القدم والاتحاد الأوروبي لكرة القدم والرياضيين ودوري كرة القدم الأمريكية وفرق الفورمولا 1 والعديد من الرياضات العالمية الأخرى والترفيه. في عام 2021، أطلق شركة سبورت باي فورت كونسلتينج، وهي شركة تساعد الرعاة والدوريات والمستثمرين والرياضيين على الاستثمار بنجاح في الرياضة. ومن بين عملائه الحاليين والسابقين شركات عالمية رائدة مثل إتش بي وماكدونالدز وسيلز فورس وأيه بي إن بيف وغيرها الكثير. ريكاردو هو أيضًا مستشار للعديد من الشركات الناشئة في مجال التكنولوجيا الرياضية، والاتحادات، والرياضيين، والأندية. ولد ريكاردو ونشأ في البرازيل، ويحمل الجنسية الثلاثية (الولايات المتحدة الأمريكية وإيطاليا والبرازيل)، وعاش وعمل في الولايات المتحدة الأمريكية، والهند، وفرنسا، والبرازيل. وهو يقيم حاليا في البرتغال.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">سام ماثيوز</h2>
              <p class="text-white m-0">الرئيس التنفيذي، فناتيك</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>سام ماثيوز هو المؤسس صاحب الرؤية والرئيس التنفيذي لشركة فناتيك، منظمة فرق الرياضات الإلكترونية الرائدة في العالم. بفضل شغفه بالألعاب التنافسية، أنشأ ماثيوز شركة فناتيك في عام 2004، وحولها إلى مركز قوي في صناعة الرياضات الإلكترونية، وقيادة ثقافة الشباب. تحت قيادته، تعتبر فتاتيك على نطاق واسع منظمة الرياضات الإلكترونية الأكثر نجاحًا في العالم مع العديد من البطولات عبر مختلف الألعاب، بما في ذلك ليج أوف ليجيندز، فالورانت، وكاونتر سترايك وغيرها الكثير. كان النهج المبتكر الذي اتبعه ماثيوز هو الدافع وراء نجاح الفريق، ولكنه ساعد أيضًا في تشكيل مشهد الرياضات الإلكترونية العالمي. اشتهر بتفكيره الاستراتيجي وتفانيه، وقد قام بتوسيع تأثير فناتيك من خلال شراكات مع أمثال غوتشي، ومجموعة منتجات مزدهرة تدعمها سوني، ومرافق تدريب حديثة على مستوى العالم. عدا عن الرياضات الإلكترونية، يعد ماثيوز مدافعًا بارزًا عن مجتمع الألعاب، حيث يسعى جاهداً لرفع مستوى الرياضات الإلكترونية إلى مستوى الاعتراف السائد.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">ستيفي باو</h2>
              <p class="text-white m-0">مؤسس والرئيس التنفيذي، إن إت للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ستيفي باو هي رائدة أعمال مسلسلة، ومتحدثة شغوفة، وبطلة العالم في موتوكروس لثلاث مرات، والمؤسس والرئيس التنفيذي لشركة إن إت للرياضات الالكترونية و إن إت للرياضة. مع أكثر من 30 عامًا في رياضة السيارات والتنقل الإلكتروني والرياضات الإلكترونية، كانت رائدة في المبادرات العالمية التي تعمل على تعزيز تمكين المرأة في الرياضة والألعاب. تعمل إن إت للرياضات الإلكترونية على سد فجوة رياضة السيارات من خلال سباقات المحاكاة، مما توفر وصولاً عالميًا إلى تجارب رياضة السيارات. تعمل فعاليات مثل" تسابق معي" و " من الشاشة إلى السرعة" على تعزيز التنوع وتوفير مسارات لمشاركة النساء في السباقات الواقعية. يعمل برنامج "سيم 4 ستم" على إشراك الطالبات في أنشطة العلوم والتكنولوجيا والهندسة والرياضيات المتعلقة برياضة السيارات. تنشئ إن إت للرياضات الالكترونية أيضًا مسارا عبر الرياضات الإلكترونية لعالم الدراجات النارية، وهو شغف ستيفي الأول.</p>
            <p>كانت ستيفي أول امرأة تتسابق بشكل احترافي مع الرجال في تاريخ موتوكروس. بعد تعرضها لإصابة أنهت مسيرتها المهنية، تمكنت من إدارة بطولة العالم للموتوكروس للسيدات وشاركت في رياضة السيارات طوال حياتها. تم إدراجها في "أساطير موتوكروس في الحجر" في عام 2023، وهي تعمل في مجالس إدارة مثل "ويست" و"جيف"، للدفاع عن النساء والأقليات. رسالتها الأساسية هي: "كن نفسك وقم بالقفزة!"</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">تيم مورتون</h2>
              <p class="text-white m-0">المؤسس المشارك والرئيس التنفيذي، فروست جاينت ستوديوز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>تيم مورتون هو الرئيس التنفيذي والمؤسس المشارك لشركة فروست جاينت ستوديوز. لقد كان سابقًا مدير إنتاج ستار كرافت تو، وهو متحمس للعمل الآن على لعبة إستراتيجية جديدة في الوقت الفعلي تسمى ستورم غايت. بدأ تيم عمله في صناعة الألعاب عام 1994 في أكتيفيجن، ثم ساعد بعد ذلك في قيادة فرق التطوير في الكترونيك ارتس اند بليزارد.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">يانيك ثيلر</h2>
              <p class="text-white m-0">الرئيس التنفيذي، استوديوهات ستير</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يجلب يانيك ثيلر خبرة 20 عامًا في يوبيسوفت إلى مجموعة سافي، حيث يشغل منصب الرئيس التنفيذي لأستوديوهات ستير - وهي شركة تطوير ألعاب مقرها الرياض تهدف إلى خلق تجارب رائدة للاعبين في المملكة العربية السعودية والعالم.</p>
            <p>بدأ يانيك مسيرته المهنية في صناعة ألعاب الفيديو في المكتب التجاري السويسري لشركة يوبيسوفت، حيث عمل كمدير للتسويق والمبيعات لأكثر من 4 سنوات. ثم تم تعيينه نائبًا لرئيس تطوير الأعمال لأنشطة أعمال يوبيسوفت في آسيا، ومقره في شنغهاي، الصين.</p>
            <p>بعد ذلك، تم تعيين يانيك مديرًا تنفيذيًا في يوبيسوفت شنغهاي حيث أشرف على تطوير العديد من ألعاب AAA قبل أن يتولى تحدي تأسيس استوديو يوبيسوفت أبو ظبي قبل اثني عشر عامًا.</p>
            <p>في السابق، عمل يانيك في إدارة الثروات في يو بي إس، وكان لاعب هوكي الجليد المحترف الذي تنافس في الدوري الوطني السويسري للهوكي لمدة سبعة مواسم.</p>
            <p>يانيك ثيلر متزوج ولديه ابن يبلغ من العمر 10 سنوات.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">معالي الوزير عبد الله السواحه</h2>
              <p class="text-white m-0">وزير الاتصالات وتقنية المعلومات، المملكة العربية السعودية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يتمتع معالي المهندس عبد الله السواحه بخبرة تزيد عن عقدين من الزمان في القيادة والابتكار وريادة الأعمال. وخلال مسيرته المهنية التي استمرت عقدًا من الزمان، بنى منظمات عالية الأداء بمليارات الريالات في القطاعين الخاص والعام. ويرأس معاليه هيئة الاتصالات والفضاء والتكنولوجيا، ووكالة الفضاء السعودية، وهيئة البحث والتطوير والابتكار، ومدينة الملك عبد العزيز للعلوم والتقنية. وهو عضو في العديد من اللجان الاجتماعية والاقتصادية على المستوى الوزاري، ويشغل عضوية مجلس إدارة مؤسسة مسك الخيرية، ونيوم، وجامعة الملك سعود. حصل معاليه على درجة البكالوريوس في الهندسة الكهربائية من جامعة الملك فهد للبترول والمعادن، وعلوم الكمبيوتر من جامعة واشنطن، وحضر برنامج التعليم التنفيذي في كلية هارفارد للأعمال.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">أندريه أنتوسكيويتش</h2>
              <p class="text-white m-0">الرئيس التنفيذي والشريك الإداري لشركة أوردوستراتيجيكا إل دي إيه</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>أندريه أنتوسكيويتش هو الرئيس التنفيذي والشريك الإداري لشركة أوردوستراتيجيكا، حيث يركز على مستقبل الأحداث الرياضية والرياضية الإلكترونية. تشمل محفظته المهنية العديد من وظائف القيادة الدولية، بما في ذلك الاتحاد الدولي لكرة القدم (الفيفا)، ومنظمة التعاون الاقتصادي والتنمية، وحلف شمال الأطلسي (الناتو).</p>
            <p>في الاتحاد الدولي لكرة القدم، بصفته رئيسًا عالميًا للاستراتيجية والتخطيط والابتكار وحلول الأعمال، كان لأندريه تأثيرًا عميقًا على كيفية تخطيط الفيفا وتقديمها لكأس العالم. خلال فترة عمله، حول الفيفا نموذج تشغيل كأس العالم لكرة القدم، وأصلح عملية اختيار المضيفين والعطاءات، وأحدث ثورة في ابتكار البطولات ونفذ التخطيط المتكامل.</p>
            <p>كما قاد أندريه التخطيط والتنسيق الشاملين لقمتين لحلف شمال الأطلسي. في عام 2015، تم تعيينه مستشارًا رئيسيًا لقمة حلف شمال الأطلسي لحكومة بولندا، حيث حصل على وسام فارس الاستحقاق لجمهورية بولندا.</p>
            <p>حصل أندريه على درجة الماجستير في إدارة الأعمال من جامعة أكسفورد، وفي عام 2022 تم الاعتراف به كواحد من أفضل 100 شخص على مستوى العالم من قبل مجلة بوويتز أند كوانتز.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">بيكا هنري</h2>
              <p class="text-white m-0">مديرة أولى لاتصالات العلامة التجارية، جي 2 للرياضات الإلكترونية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>بيكا هنري هي خبيرة اتصالات وبناء علامات تجارية ولديها مسيرة مهنية تزيد عن 13 عامًا في مجال الرياضات الإلكترونية والألعاب. وهي خبيرة متحمسة في مجال الترفيه الرياضي الإلكتروني، وتقود حاليًا الاتصالات العالمية والعلامة التجارية لشركة جي 2 للرياضات الإلكترونية، وهي المنظمة الأكثر تسلية وإبداعًا في مجال الرياضات الإلكترونية، وتضع استراتيجيات تتصل بشكل أصيل بجمهور جي 2، وتعزز قوة جي 2 في سرد ​​القصص ونبرة الصوت الفريدة.</p>
            <p>قبل جي 2، كانت بيكا نائبة رئيس الاتصالات لمجموعة ميسفيتس للألعاب، حيث استفادت من مهاراتها لتعزيز وتنمية هوية العلامة التجارية لشركة إم جي جي، وزيادة الوعي والرؤية وتقارب العلامة التجارية عبر قائمة إم جي جي المتنامية من الممتلكات.</p>
            <p>قبل ميسفيتس، قادت بيكا اتصالات الرياضات الإلكترونية الأوروبية لشركة رايوت جيمز - من العام الافتتاحي لبطولة إل سي إس الأوروبية، مع التركيز على زيادة الوعي الرياضة في مهدها، وصولاً إلى حملة العلامة التجارية التي أطلقت بطولة إل إي سي.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">داني تان</h2>
              <p class="text-white m-0">المؤسس المشارك والمدير المالي ورئيس مكتب الاستراتيجية العالمية، في إس بي أو</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>بصفتها أحد المؤسسين المشاركين في في إس بي أو، شغلت داني منصب المدير المالي للشركة منذ إنشائها في عام 2016 وقاد العديد من الأقسام داخل الشركة. عملت السيدة تانج سابقًا كشريكة أولى ثم نائبة رئيس بنك التنمية الصيني من عام 2010 إلى عام 2014. وقبل ذلك، عملت كمحللة استثمارية فيكولبيرج كرافيس روبرتس وشركاه من عام 2007 إلى عام 2010.</p>
            <p>حصلت السيدة تانج على درجة البكالوريوس في الاقتصاد والرياضيات مع مرتبة الشرف من كلية برين ماور ودرجة الماجستير في العلوم في الإدارة من جامعة ستانفورد.</p>
            <p>وهي شغوفة بالمستقبل البعيد لصناعة الرياضات الإلكترونية، وقد تم الاعتراف بها كواحدة من أفضل 100 قائدة مدعومة من النساء في منطقة آسيا والمحيط الهادئ من قبل جي بي مورجان وإرنست ويونغ في عام 2022.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جي أليبيو</h2>
              <p class="text-white m-0">مدير ورئيس تطوير الأعمال، منطقة آسيا والمحيط الهادئ والشرق الأوسط وشمال إفريقيا، شركة والت ديزني</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يتولى جي قيادة مبادرات الألعاب لشركة والت ديزني في منطقة آسيا والمحيط الهادئ والشرق الأوسط وشمال إفريقيا. ويركز على تقديم تجارب ألعاب عالية الجودة عبر الامتيازات التي تقرب المعجبين من قصصهم و شخصياتهم المفضلة على المنصات الرقمية. لديه أكثر من 20 عامًا من الخبرة في صناعة الألعاب، حيث شغل مناصب قيادية عليا مختلفة في إلكترونيك آرتس لمنطقة آسيا والمحيط الهادئ بالإضافة إلى استوديوهات متوسطة الحجم وناشئة. كما يعمل حاليًا كمرشد لشركة بكسل وإيغدا والاستوديوهات التابعة لهيئة تطوير وسائل الإعلام والاتصالات في سنغافورة وبرنامج تسريع الألعاب المستقلة التابع لشركة جوجل بالإضافة إلى مستشار مجلس إدارة جمعية الألعاب في سنغافورة وجمعية ألعاب أسوسياسي إندونيسيا.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جون هانكه</h2>
              <p class="text-white m-0">المؤسس والرئيس التنفيذي لشركة نيانتيك</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>يقود جون تطوير منصة الواقع المعزز العالمية لشركة نيانتيك التي تدعم الألعاب بما في ذلك بوكيمون جو وبيكمين بلوم ومونستر هنتر ناو وبيريدوتوإنجرس. كما يستخدم المطورون في جميع أنحاء العالم منصة الواقع المعزز الخاصة بشركة نيانتيك لإنشاء تجارب الواقع المعزز المتطورة للهواتف ونظارات الواقع المعزز.</p>
            <p>بعد احتضان فريق الخرائط في جوجل، أنشأت نيانتيك أولاً لعبة إنجرس ثم لعبة بوكيمون جو، وهي ظاهرة ثقافية يلعبها عشرات الملايين من الأشخاص كل شهر. في وقت سابق من حياته المهنية، كان جون أحد مؤسسي أرك تايب، مبتكر إحدى أولى ألعاب اللاعبين المتعددين على الإنترنت، ميريديان 59. ثم شارك في تأسيس كيهول، وهي شركة مخصصة لإعادة إنشاء نسخة رقمية من الكرة الأرضية، والتي استحوذت عليها جوجل وأدت إلى إنشاء جوجل ايرث.كان جون نائب رئيس قسم جيو في جوجل، حيث أشرف على مشاريع بما في ذلك الخرائط والتجوّل الافتراضي، لمدة سبع سنوات قبل تأسيس نيانتيك.</p>
            <p>حصل جون على درجة البكالوريوس من جامعة تكساس في أوستن ودرجة الماجستير في إدارة الأعمال من كلية هاس للأعمال في جامعة كاليفورنيا بيركلي.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">مايكل ميتزجر</h2>
              <p class="text-white m-0">الشريك الإداري، دريك ستار</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>مايكل ميتزجر هو الشريك الإداري في دريك ستار، بنك استثماري عالمي في مجال الوسائط/التكنولوجيا يضم حوالي 100 متخصص في جميع أنحاء الولايات المتحدة وأوروبا. وقد سهّل أكثر من 20 عملية اندماج واستحواذ وتمويل مرتبطة بالألعاب والرياضات الإلكترونية ويعتبر من رواد الفكر العالميين في مجال الوسائط الرقمية والألعاب. يحمل مايكل خمس براءات اختراع في مجال الاتصالات ويشغل منصب رئيس مجلس إدارة جمعية الأعمال الألمانية الأمريكية في جنوب كاليفورنيا. حصل على ماجستير إدارة الأعمال من كلية أندرسون للإدارة في جامعة كاليفورنيا، لوس أنجلوس، وماجستير في الهندسة الكهربائية من جامعة أولم، ألمانيا.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">مايك ميلانوف</h2>
              <p class="text-white m-0">رئيس مجلس إدارة المجلس الاستشاري للألعاب والرياضات الإلكترونية في القدية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>مايك ميلانوف، 37 عامًا، هو خبير مخضرم في الألعاب والرياضات الإلكترونية يتمتع بمزيج فريد من الخبرة في الصناعة والدافع الريادي والشغف بتشكيل المستقبل. بصفته رئيسًا للمجلس الاستشاري للألعاب والرياضات الإلكترونية في القدية، يتولى ميلانوف قيادة تطوير مركز الألعاب والرياضات الإلكترونية العالمي، منطقة الألعاب والرياضات الإلكترونية في مدينة القدية، مما يضمن توافقها بجرأة مع رؤية المملكة العربية السعودية 2030. يشرف على مشاريع تتراوح من ساحات الألعاب الإلكترونية المتطورة إلى فنادق الألعاب ذات الطابع الخاص، وكلها مشبعة بأحدث التقنيات والتميز المعماري. ودلالة على رؤيته الاستراتيجية، ساهم ميلانوف في تطوير مشاريع مستقبلية في صناعة الألعاب والرياضات الإلكترونية تمتد حتى عام 2050.</p>
            <p>قبل الانضمام إلى القدية، عمل ميلانوف لسنوات كرئيس تنفيذي للعمليات ورئيس تنفيذي لتطوير الأعمال في تيم ليكويد. في منصبه كرئيس تنفيذي لتنمية الأعمال، قاد ميلانوف المساعي التجارية الجديدة لشركة ليكويد من خلال الشراكات والتعاون الاستراتيجي، وعمليات الدمج والاستحواذ، وبرامج الترخيص ذات العلامة التجارية المشتركة، وإنشاء منصات إيرادات جديدة. بصفته مدير العمليات، نجح ميلانوف في توسيع فريق تيم ليكويد من 10 إلى 250 موظفًا بدوام كامل، حيث أدار وحدات أعمال متعددة، بما في ذلك الشراكات، وإنتاج المحتوى الأصلي، والملابس والأعمال الجديدة. وبخلاف مسؤولياته التجارية والتشغيلية، استفاد ميلانوف من خبرته في إنتاج الفيديو وإدارة المؤثرين والمبيعات والبث عبر الإنترنت لمساعدة ليكويد على الاستجابة والتكيف مع اتجاهات الصناعة. وتحت مظلة مؤسسة ليكويد، حفز ميلانوف تطوير استوديوهات وان أب، شركة الإنتاج الداخلية لشركة تيم ليكويد، وأعمال الوكالة لشركة ليكويد ميديا وتوسيع وحدة الملابس التابعة لشركة ليكويد، بما في ذلك الشراكات والتعاون مع أمثال مارفل وناروتو.</p>
            <p>مستوحى من خلفيته كلاعب محترف في عالم وور كرافت، يجلب ميلانوف عقلية "الأولى عالميًا" إلى القدية. و بالاستفادة من التفكير الاستراتيجي والتخطيط بعيد المدى، يتعاون مع أصحاب المصلحة في الصناعة العالمية لوضع القدية كمركز عالمي بلا منازع للألعاب والرياضات الإلكترونية. وفي أوقات فراغه، يحب لعب فورتنايت، ودوري الأساطير، والتنس، واكتشاف الموضة، والمطاعم وإنتاج الموسيقى. يعيش مايك في لوس أنجلوس.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">سير ميانج نج</h2>
              <p class="text-white m-0">نائب رئيس اللجنة الأولمبية الدولية</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>إن سير ميانج هو رجل أعمال سنغافوري ومدير رياضي وبحار وسفير متقاعد. وهو شخصية بارزة في عالم الرياضة، حيث امتدت مسيرته المهنية لأكثر من عقدين من الخدمة المخلصة للجنة الأولمبية الدولية. وكان عضوًا نشطًا في اللجنة الأولمبية الدولية منذ عام 1998. وهو يشغل حاليًا منصب رئيس لجنة المالية والموارد البشرية التابعة للجنة الأولمبية الدولية وكان عضوًا في المجلس التنفيذي للجنة الأولمبية الدولية لمدة 16 عامًا منها 8 سنوات كنائب للرئيس. ولعب دورًا محوريًا في تشكيل مستقبل الرياضات الإلكترونية في الحركة الأولمبية من خلال منصبه كرئيس مشارك للجنة التوجيهية لأسبوع الرياضات الإلكترونية الأولمبي الافتتاحي 2023 في سنغافورة. وقد جعله التزامه بتعزيز الابتكار في الرياضة والنهوض بالحركة الأولمبية قائدًا محترمًا وصاحب رؤية في الساحة الرياضية الدولية.</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">شاي سيجيف</h2>
              <p class="text-white m-0">الرئيس التنفيذي لمجموعة دازن</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>شاي سيجيف هو الرئيس التنفيذي لمجموعة دازن، منصة الترفيه الرياضي العالمية التي تربط بين مشجعي الرياضة في جميع أنحاء العالم. وتحت قيادته، تعمل دازن على إحداث ثورة في الطريقة التي يستمتع بها الناس بالرياضة من خلال تكنولوجيتها الرائدة في السوق.</p>
            <p>دازن هي الموطن العالمي لكرة القدم الأوروبية وكرة القدم النسائية والدوري الوطني لكرة القدم الأمريكية والملاكمة وكرة السلة ورياضة السيارات والجولف والعديد من الرياضات الأخرى.</p>
            <p>قبل الانضمام إلى دازن، شغل شاي منصب الرئيس التنفيذي لشركة إنتين، وهي شركة ألعاب مدرجة في مؤشر فاينانشال تايمز 100، حيث قاد نموًا ملحوظًا. وفي السابق، كان مدير العمليات في بلايتك، وهي منصة ألعاب ب2ب. حصل شاي على ماجستير إدارة الأعمال من كلية كيلوج للإدارة ودرجة في علوم الكمبيوتر.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Jessica-Tams -->
    <div class="modal fade speaker-modal" id="Jessica-Tams" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Jessica-Tams.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جيسيكا تامس</h2>
              <p class="text-white m-0">عضو مجلس إدارة، أتاري</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>جيسيكا تامس، 47 عامًا، شخصية بارزة في صناعة الألعاب منذ عام 1998. وهي تشغل حاليًا منصب عضو مجلس إدارة أتاري، وهي شريكة في مشروع جريفين للألعاب، وتعمل كمستشارة استراتيجية لشركة مانغا للإنتاج، وهي شركة تابعة لمؤسسة مسك. في عام 2006، أسست جيسيكا وعملت كمديرة تنفيذية لشركة كاجوال كونكت، أكبر حدث دولي للألعاب الاحترافية ب2ب يمتد على آسيا وأوروبا وأوروبا الشرقية والأمريكتين. كما أطلقت جائزة إندي وجايمسوس، وهما برنامجان رائدان لطرح الألعاب في السوق لمطوري الألعاب المستقلين.</p>
            <p>في عام 2003، أسست جيسيكا الاستوديو المستقل الذي نشر عناوين إكس بوكس ​​لايف أركيد الافتتاحية وطورت الالعاب المحدثة لنظام ويندوز، بما في ذلك لعبة سوليتير التي يتم لعبها على نطاق واسع.</p>
            <p>بدأت جيسيكا حياتها المهنية كمهندسة برمجيات لألعاب آر بي جي والمغامرة وحصلت على درجات علمية في الرياضيات والفيزياء وعلوم الكمبيوتر.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Nora-AlShaikh -->
    <div class="modal fade speaker-modal" id="Nora-AlShaikh" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header flex-sm-row flex-column">
            <div class="col-lg-4">
              <img src="assets/img/speakers/Nora-AlShaikh.png" alt="Member">
            </div>
            <div class="col-lg-8">
              <h2 class="modal-title fs-5" id="staticBackdropLabel">نورا الشيخ</h2>
              <p class="text-white m-0">المؤسسة والمديرة الإبداعية، نورا الشيخ</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ولدت نورا الشيخ في الرياض، المملكة العربية السعودية، وحصلت على درجة في إدارة الأعمال من جامعة الملك سعود قبل الالتحاق بمعهد الفنون والمهارات بالرياض، والذي قدم أول برنامج للأزياء من نوعه في المملكة. أطلقت نورا علامتها التجارية في عام 2012، وتستخدم الموضة كأداة لربط الثقافات من خلال الإشارة إلى المناطق المتنوعة في المملكة العربية السعودية وتقاليد الحرف اليدوية وأشكال الفن. في عام 2019، كانت واحدة من ثلاثة مصممي أزياء سعوديين اختارتهم وزارة الثقافة للمشاركة في تشكيل رؤية المملكة 2030، من خلال تصور الدور الذي يمكن أن تلعبه الموضة في تشكيل تصورات البلاد وتراثها الغني. في نفس العام، تم تسميتها ضمن أفضل عشر نساء سعوديات وراء العلامات التجارية في الشرق الأوسط من قبل مجلة فوربس الشرق الأوسط، بالإضافة إلى دعوتها من قبل سفارة المملكة العربية السعودية في واشنطن للظهور في سلسلة الفيديو "نساء سعوديات تحت الأضواء" في عام 2022. في عددها الصادر في يوليو 2024، ضمت مجلة فوربس الشرق الأوسط نورا آل الشيخ إلى قائمة أفضل المبدعين في مجال الموضة في المنطقة.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Hosts & Moderators Section -->
    <section class="cs_pb_20 cs_pb_lg_55 moderators-hosts" id="speakers">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">المضيفون</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">والمشرفون</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Anna-Rozwandowicz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Anna-Rozwandowicz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">آنا روزفاندوفيتش</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مؤسس والرئيس التنفيذي، ذا ستوري موب</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Jessica-Tams.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Jessica-Tams" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جيسيكا تامس</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">عضو مجلس إدارة، أتاري</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Joe-Pompliano.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Joe-Pompliano" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جو بومبليانو</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الشريك الإداري في شركة بومب للاستثمارات</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Maha-Abouelenein.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Maha-Abouelenein" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">مها ابو العينين</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي | ديجيتال أند سافي</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/MJ-Acosta-Ruiz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#MJ-Acosta-Ruiz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">إم جيه أكوستا رويز</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مذيعة رياضية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/OJ-Borg.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#OJ-Borg" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">او جيه بورج</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المذيع المنتج التنفيذي لستاندرد فيلمز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Songyee-Yoon.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Songyee-Yoon" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">د. سونجي يون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">شريك إداري، برنسيبال فينتشر بارتنرز</p>
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
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">مؤتمر الرياضة العالمية الجديدة 2024</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">المتحدثون</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/HRH-Prince-Faisal-bin-Bandar.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#HRH-Prince-Faisal-bin-Bandar" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div> 
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_16 cs_mb_10">صاحب السمو الملكي الأمير فيصل بن بندر بن سلطان</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">رئيس مجلس إدارة الاتحاد السعودي للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/HE-Abdullah-Alswaha.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#HE-Abdullah-Alswaha" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">معالي الوزير عبد الله السواحه</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">وزير الاتصالات وتقنية المعلومات، المملكة العربية السعودية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ralf-Reichert.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ralf-Reichert" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">رالف رايشرت</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لمؤسسة كأس العالم للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Andrew-Chen.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Andrew-Chen" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">أندرو تشين</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">شريك عام ، أندريسن هورويتز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Andrzej-Antoszkiewicz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Andrzej-Antoszkiewicz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">أندريه أنتوسكيويتش</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي والشريك الإداري لشركة أوردوستراتيجيكا إل دي إيه</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Arnold-Hur.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Arnold-Hur" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">أرنولد هور</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة جن جي للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Becca-Henry.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Becca-Henry" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">بيكا هنري</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مديرة أولى لاتصالات العلامة التجارية، جي 2 للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Bilal-Fares.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Bilal-Fares" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">بلال فارس</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">نائب الرئيس الأول والمدير العام، أديداس إي إم سي ماركيت</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Brian-Ward.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Brian-Ward" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">بريان وارد</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي، مجموعة الألعاب سافي</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Bruce-Stein.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Bruce-Stein" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">بروس شتاين</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المؤسس المشارك لشركة اكسيوماتيك جيمينج، والمدير الإداري لشركة جونو كابيتال</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Craig-Levine.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Craig-Levine" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">كريج ليفين</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي المشارك لمجموعة إي أس أل فايس إت</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Dan-Bunting.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Dan-Bunting" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">دان بونتنج</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">شريك استثماري في 1 ايه ام جيمنج</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Danny-Tang.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Danny-Tang" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">داني تان</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المؤسس المشارك والمدير المالي ورئيس مكتب الاستراتيجية العالمية، في إس بي أو</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Eric-Shanks.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Eric-Shanks" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">إريك شانكس</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي والمنتج التنفيذي، فوكس سبورتس</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Fabian-Scheuermann.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Fabian-Scheuermann" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">فابيان شويرمان</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المسؤول الرئيسي عن الألعاب، مؤسسة كأس العالم للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Faisal-Bin-Homran.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Faisal-Bin-Homran" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">فيصل بن حمران</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي للرياضات الإلكترونية في مؤسسة كأس العالم للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Gabriel-Toledo.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Gabriel-Toledo" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">غابرييل " FalleN" توليدو</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">لاعب سي اس 2، فيوريا للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ghada-Alhudaithi.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ghada-Alhudaithi" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">غادة الحديثي</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المؤسس المشارك لشركة تايبل نايت غيمز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Heba-Atyah.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Heba-Atyah" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">د. هبة محمد عطية</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي  والمؤسس لشركة غايم إت</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Jann-Mardenborough.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Jann-Mardenborough" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جان ماردنبورو</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">سائق سباق محترف</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Je-Alipio.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Je-Alipio" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جي أليبيو</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مدير ورئيس تطوير الأعمال، منطقة آسيا والمحيط الهادئ والشرق الأوسط وشمال إفريقيا، شركة والت ديزني</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Jens-Hilgers.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Jens-Hilgers" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ينس هيلجرز</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الشريك العام والمؤسس المشارك، بيتكرافت فنتشرز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Joe-Marsh.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Joe-Marsh" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جو مارش</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة ت وان للترفيه والرياضة</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/John-Hanke.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#John-Hanke" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جون هانكه</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المؤسس والرئيس التنفيذي لشركة نيانتيك</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Jonny-Ebbert.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Jonny-Ebbert" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جوني إيبرت</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المدير الإبداعي الرئيس السابق، بنجي</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Khaled-Makhshoush.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Khaled-Makhshoush" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">خالد مخشوش</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">فنان</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Len-Blavantik.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Len-Blavantik" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">السير ليونارد بلافاتنيك</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مؤسس شركة أكسيس إنداستريز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Lisa-Cosmas.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Lisa-Cosmas" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ليزا كوزماس هانسون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة نيكو بارتنرز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Magnus-Carlsen.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Magnus-Carlsen" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ماجنوس كارلسن</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">بطل العالم في الشطرنج</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Mathilde-Pignol.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Mathilde-Pignol" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ماتيلد بيجنول</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المؤسس المشارك والرئيس التنفيذي لشؤون الروبوتات، روبوتو غايمز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Maya-Rogers.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Maya-Rogers" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">مايا روجرز</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة تتريس</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Michael-Metzger.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Michael-Metzger" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">مايكل ميتزجر</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الشريك الإداري، دريك ستار</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Michal-Blicharz.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Michal-Blicharz" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ميشال بليشارز</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">نائب رئيس تطوير المنتجات، مجموعة إي أس أل فايس إت</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Mike-Milanov.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Mike-Milanov" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">مايك ميلانوف</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">رئيس مجلس إدارة المجلس الاستشاري للألعاب والرياضات الإلكترونية في القدية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nanea-Reeves.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#Nanea-Reeves" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a> -->
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">نانيا ريفز</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي والمؤسس المشارك لشركة تريب ونائب الرئيس والمدير التنفيذي للعمليات سابقا بمجموعة إلكترونيك آرتس اونلاين</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nate-Morley.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Nate-Morley" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">نيت مورلي</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مؤسس شركة وركس كولكتيف</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ng-Ser-Miang.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ng-Ser-Miang" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">سير ميانج نج</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">نائب رئيس اللجنة الأولمبية الدولية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nick-Brown.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Nick-Brown" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">نيك براون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">شريك ومنتج تنفيذي في جود بوي كرييتيف</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nicola-Mizon.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Nicola-Mizon" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">نيكولا ميزون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مدير العمليات والمؤسس المشارك، كوتور ران واي، فيزتا دي جي تي إل</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Nora-AlShaikh.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Nora-AlShaikh" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">نورا الشيخ</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المؤسسة والمديرة الإبداعية، نورا الشيخ</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Peter-Hutton.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Peter-Hutton" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">بيتر هاتون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">عضو مجلس إدارة، الدوري السعودي للمحترفين</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Reem-Alkanhal.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Reem-Alkanhal" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ريم الكنهل</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مديرة إبداعية ومصممة أزياء</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ricardo-Fort.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Ricardo-Fort" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ريكاردو فورت</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مؤسس شركة سبورت باي فورت كونسلتينج</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/RJ-Cutler.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#RJ-Cutler" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">آر جي كاتلر</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مخرج أفلام وثائقية حائز على جائزة إيمي</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Sam-Mathews.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Sam-Mathews" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">سام ماثيوز</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي، فناتيك</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Shay-Segev.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Shay-Segev" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">شاي سيجيف</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لمجموعة دازن</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Shuji-Utsumi.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Shuji-Utsumi" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">شوجي أوتسومي</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس والمدير التنفيذي للعمليات في شركة سيجا</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Stefy-Bau.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Stefy-Bau" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ستيفي باو</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مؤسس والرئيس التنفيذي، إن إت للرياضات الإلكترونية</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Steve-Arhancet.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Steve-Arhancet" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ستيفن ارهانسيت</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة تيم ليكويد</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Tim-Morten.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Tim-Morten" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">تيم مورتون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">المؤسس المشارك والرئيس التنفيذي، فروست جاينت ستوديوز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Toshimoto-Mitomo.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Toshimoto-Mitomo" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">توشيموتو ميتومو</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">نائب الرئيس التنفيذي وكبير مسؤولي الأمن في شركة مجموعة سوني</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Yannick-Theler.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_14 cs_fs_lg_16 position-absolute">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Yannick-Theler" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">يانيك ثيلر</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي، استوديوهات ستير</p>
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
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInLeft;">مؤتمر الرياضة العالمية الجديدة 2024</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 m-0">مواضيع مهمة</h2>
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
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">أن تغدو بطلاً رياضيًا حديثًا</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Sports, Gaming and The Relentless Pursuit of Greatness</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">المنافسة ابتدأت في المملكة العربية السعودية</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Gaming & Sports as the Kingdom’s Gateway to the World</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">بناء رياضة عالمية جديدة</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Esports, Traditional Sports & How to Craft a New Global Sporting Legacy</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">مواكبة النمو في مجال الألعاب والترفيه</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Consolidation, Innovation, New Markets & New Fans</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">الهوية الثقافية لجماهير المستقبل</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Esports Meets Fashion, Art & Music</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">فن رواية قصص الرياضية الإلكترونية</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Crafting Compelling Sports Narratives</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">الريادة في منصات ثقافة المشجعين</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">The Role of Tech Giants in Shaping Esports</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">هل بإمكان التقاليد البقاء في العصر الرقمي؟</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Enhancing Traditional Sports and Creating New Fans</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">إنشاء الألعاب المفضلة لدى المعجبين</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Exploring Key Factors for Video Game Longevity in Development & Publishing</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">تسويق هوس المعجبين</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Mastering Engagement and Excitement in Esports, Sports & Gaming</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg3">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">عندما كان الذكاء الاصطناعي لا يزال عبارة عن روبوتات: الخوارزميات في الرياضات الإلكترونية</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">The Past and Present of Training, Strategy & Engagement</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg4">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">اختراق الحدود في الألعاب والرياضات الإلكترونية</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Driving Diversity, Inclusion & Social Responsibility in the Games Industry</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg1">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">إعادة تفعيل النجاح</h2>
                    </div>
                    <!-- <p class="cs_mb_20 lh-base">Lessons from Serial Entrepreneurs in Esports, Sports and Games</p> -->
                  </div>
                </div>
                <div class="cs_slide topicimg2">
                  <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 cs_transition_4 shadow cs_mb_25">
                    <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25"></div>
                    <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                      <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0">مفترق الطرق الثقافية في الألعاب</h2>
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
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">مؤتمر الرياضة العالمية الجديدة 2024</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">أبرز الأخبار</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <a href="{{ url('/ar/dates-for-2024-event-and-major-expansion') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('/ar/dates-for-2024-event-and-major-expansion') }}">المملكة تستضيف النسخة الثانية من مؤتمر الرياضة العالمية الجديدة، امتدادًا لنجاح أعمال كأس العالم للرياضات الإلكترونية</a></h2>
                  <!-- <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div> -->
                </div>
                <a href="{{ url('/ar/dates-for-2024-event-and-major-expansion') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">اقرأ المزيد</span>
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
              <a href="{{ url('/ar/olympic-esports-games-to-be-hosted-in-the-kingdom-of-saudi-arabia') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('/ar/olympic-esports-games-to-be-hosted-in-the-kingdom-of-saudi-arabia') }}">إقامة الألعاب الأولمبية للرياضات الإلكترونية في المملكة العربية السعودية</a></h2>
                  <!-- <div class="cs_post_subtitle">The International Olympic Committee (IOC) announced that it has partnered with the National Olympic Committee (NOC) of Saudi Arabia to host ...</div> -->
                </div>
                <a href="{{ url('/ar/olympic-esports-games-to-be-hosted-in-the-kingdom-of-saudi-arabia') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">اقرأ المزيد</span>
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
              <a href="{{ url('/ar/global-leaders-to-address-the-future-of-fandom-and-fan-engagement-at-ngsc') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('/ar/global-leaders-to-address-the-future-of-fandom-and-fan-engagement-at-ngsc') }}">قادة ورواد قطاعات الألعاب والرياضات الإلكترونية والتكنولوجيا والرياضة والترفيه يناقشون تأثير تطوّر ثقافة المشجعين</a></h2>
                  <!-- <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div> -->
                </div>
                <a href="{{ url('/ar/global-leaders-to-address-the-future-of-fandom-and-fan-engagement-at-ngsc') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">اقرأ المزيد</span>
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
              <a href="{{ url('/ar/the-rise-of-esports-athletes-as-modern-sport-heroes') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('/ar/the-rise-of-esports-athletes-as-modern-sport-heroes') }}">‘مؤتمر الرياضة العالمية الجديدة’ في الرياض يناقش مكانة وقيمة لاعبي الرياضات الإلكترونية كرياضيين حقيقيين</a></h2>
                  <!-- <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div> -->
                </div>
                <a href="{{ url('/ar/the-rise-of-esports-athletes-as-modern-sport-heroes') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">اقرأ المزيد</span>
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
              <a href="{{ url('/ar/global-industry-leaders-eager-to-share-insights-at-ngsc') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('/ar/global-industry-leaders-eager-to-share-insights-at-ngsc') }}">أعربوا عن تطلعاتهم لحضور المؤتمر العالمي الذي تستضيفه الرياض وثقتهم بأنه سيكون منصة رئيسية لتشكيل مستقبل قطاع الألعاب والرياضات الإلكترونية</a></h2>
                  <!-- <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div> -->
                </div>
                <a href="{{ url('/ar/global-industry-leaders-eager-to-share-insights-at-ngsc') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">اقرأ المزيد</span>
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
              <a href="{{ url('/ar/game-on-saudi-arabia') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
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
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('/ar/game-on-saudi-arabia') }}">الكشف عن جلسة حوارية خاصة تحت مسمّى "الألعاب والرياضات الإلكترونية والرياضة: بوابة تواصل المملكة مع العالم" ضمن مؤتمر الرياضة العالمية الجديدة في الرياض</a></h2>
                  <!-- <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div> -->
                </div>
                <a href="{{ url('/ar/game-on-saudi-arabia') }}" class="cs_post_btn d-flex justify-content-between align-items-center cs_pl_40 cs_pr_40 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text">اقرأ المزيد</span>
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
            <h5>الشركاء الاستراتيجيون</h5>
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
            <h5>الشركاء الرسميون</h5>
            <div class="d-flex cs_pt_20 align-items-center">
              <div class="cs_brand col-4 col-lg-4">
                <a href="https://www.honor.com/sa-ar/" target="_blank">
                  <img src="{{ asset('assets/img/partners/Honor.svg') }}" alt="Partner">
                </a>
              </div>
              <div class="cs_brand col-4 col-lg-4" style="padding-right:7%">
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
            <h5>الشركاء الإعلاميون</h5>
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
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">اطلب دعوة مع تذكرة</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">قدم طلب الانضمام</h2>
                  <p class="m-0">سنبدأ قريباً دعواتنا. على الرغم من أن الحدث يقتصر على المدعوين فقط، إلا أن عددًا محدودًا من التذاكر سيكون متاحًا في الأول من يوليو، بعد عملية تقديم الطلبات. يرجى التقديم من خلال النموذج ليتم النظر فيه؛ للانضمام إلينا في مؤتمر الرياضة العالمية الجديدة 2024.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 cs_mb_lg_55">
            <form class="row" id="applyForm" method="POST" action="{{ route('apply.submit') }}">
              @csrf {{-- Cross-Site Request Forgery protection --}}
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_first_name" id="apply_first_name" type="text" placeholder="الاسم الأول">
                <span id="apply-first-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_last_name" id="apply_last_name" type="text" placeholder="الاسم الثاني">
                <span id="apply-last-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_email" id="apply_email" type="text" placeholder="البريد الالكتروني">
                <span id="apply-email-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_company" id="apply_company" type="text" placeholder="الشركة">
                <span id="apply-company-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_position" id="apply_position" type="text" placeholder="المنصب">
                <span id="apply-position-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply_industry" id="apply_industry" type="text" placeholder="قطاع العمل">
                <span id="apply-industry-error" class="text-danger"></span>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 cs_mt_20 overflow-hidden" id="apply-button"><span>طلب الانضمام</span></button>
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
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">حول</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">كأس العالم للرياضات الإلكترونية</h2>
                  <p class="m-0">كأس العالم للرياضات الإلكترونية هي مسابقة نخبوية متعددة الأنواع للرياضات الإلكترونية، ستقام سنويًا في المملكة العربية السعودية بدءًا من عام 2024. ستعقد هذه المسابقة في شهري يوليو وأغسطس في المركز العالمي في بوليفارد سيتي، الرياض، لتقدم أكبر مجموعة من الجوائز للرياضات الإلكترونية وستتميز بالعناوين الأكثر شعبية. ستعرض تنسيقًا جديدًا للمنافسة، وستمنح الجوائز لألقاب الألعاب الفردية وعروض الأندية.</p>
                  <p>تم تصميم هذا الحدث لكل من لاعبي الرياضات الإلكترونية المحترفين وعشاق الألعاب، وستتضمن تصفيات لتزويد العديد من الفرق بفرصة المشاركة، إلى جانب تقويم مثير من الأنشطة والترفيه المباشر ومسابقات للجماهير.</p>
                  <div class="cs_hero_btn">
                    <a href="https://esportsworldcup.com/" target="_blank" class="cs_btn cs_style_1 cs_mt_20 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>زورونا الآن</span></a>
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
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">الخطوة التالية</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">اتصل بنا</h2>
                  <p class="m-0">يسعدنا أن نستكشف معكم فرصة الانضمام إلينا على مفترق طرق الرياضات الإلكترونية والرياضة وصناعة الألعاب!
                  إذا كان لديكم الاهتمام لتكونوا جزءًا من الحدث والحصول على دخول حصري إلى مؤتمر الرياضة العالمية الجديدة 2024، ندعوكم إلى إكمال نموذج الطلب ادناه. سنقوم بالمراجعة والرد عليكم في أقرب وقت ممكن.</p>
                  <p>لا تفوتوا هذه الفرصة لتكونوا جزءًا من هذا الحدث الرائد الذي سيشكل مستقبل الرياضات الإلكترونية.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 cs_mb_lg_55">
            <form class="row" id="contactForm" method="POST" action="{{ route('contact.submit') }}">
              @csrf {{-- Cross-Site Request Forgery protection --}}
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_first_name" id="contact_first_name" type="text" placeholder="الاسم الأول">
                <span id="contact-first-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_last_name" id="contact_last_name" type="text" placeholder="الاسم الثاني">
                <span id="contact-last-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_email" id="contact_email" type="text" placeholder="البريد الالكتروني">
                <span id="contact-email-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_phone" id="contact_phone" type="text" placeholder="رقم الهاتف">
                <span id="contact-phone-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <select class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-subject" id="contact-subject">
                  <option value="">—الرجاء الاختيار—</option>
                  <option value="Delegate Application">طلب المندوبين</option>
                  <option value="Speaker Application">طلب المتحدثين</option>
                  <option value="Partnership Opportunity">فرصة الشراكة</option>
                  <option value="Media Accreditation &amp; Inquiries">اعتماد وسائل الاعلام والاستفسارات</option>
                  <option value="General Inquiries">الاستفسارات العامة</option>
                </select>
                <span id="contact-subject-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_company" id="contact_company" type="text" placeholder="الشركة">
                <span id="contact-company-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_position" id="contact_position" type="text" placeholder="المنصب">
                <span id="contact-position-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact_industry" id="contact_industry" type="text" placeholder="قطاع العمل">
                <span id="contact-industry-error" class="text-danger"></span>
              </div>
              <div class="col-lg-12">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15" name="contact_message" id="contact_message" placeholder="الرسالة" cols="35" rows="7"></textarea>
                <span id="contact-message-error" class="text-danger"></span>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 cs_mt_20 overflow-hidden" id="contact-button"><span>أكمل الارسال</span></button>
                <span id="contact-success-message"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Us Section -->

    @endsection