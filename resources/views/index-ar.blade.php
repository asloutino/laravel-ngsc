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
                  <li class="lang-switch">
                    <a class="en" href="{{url('/')}}">EN</a> | <a class="ar" href="{{url('ar')}}">AR</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <div class="cs_toolbox">
                <div class="cs_hero_btn">
                <a href="/ar#apply-to-join" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_20 cs_pr_20 cs_pt_10 cs_pb_10 overflow-hidden"><span>طلب الانضمام</span></a>
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
        <a href="https://www.instagram.com/ngsc_ksa/" target="_blank" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-instagram"></i></a>
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
                  <p class="m-0">سيمثل المؤتمر الرئيسي لمؤسسة كأس العالم للرياضات الإلكترونية بوابة لمديري الحاضر والمستقبل، والقادة العالميين وصناع السياسات، إلى رياضة عالمية جديدة، وسيعرض كيف ستوفر هذه الرياضة فرصًا عالمية جديدة. سيجمع مؤتمر الرياضة العالمية الجديدة 2024 بين أفضل الرياضيين ولاعبي الرياضات الإلكترونية والألعاب والترفيه والتكنولوجيا وغيرها، ليكون بمثابة منصة مليئة بالمحتوى تجمع هذه الصناعات معًا، حاملا شعلة سلسلة “منتدى نكست ورلد” ومؤتمر الرياضة العالمية الجديدة 2023، ليوحد كلا الحدثين تحت شعار واحد حصري خلال عام 2024.</p>
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
                  <p class="m-0">يجمع مؤتمر الرياضة العالمية الجديدة بين قادة ذوي الرؤية من الرياضات الإلكترونية والألعاب والأعمال والرياضات السائدة والترفيهية، لاستكشاف موضوع هذا العام: “مستقبل ثقافة المشجعين”. سيناقش المؤتمر تأثير ثقافة المشجعين على تخطيط الأعمال والمحتوى والملكية الفكرية وحقوق الإعلام والتسويق والبناء المجتمعي. سيركز المؤتمر هذا العام على اختراق المشجعين الألعاب، وبناء قيمة العلامة التجارية، وتوليد الإيرادات من خلال حقوق الإعلام والرعاية والبضائع التجارية.</p>
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
              <p class="text-white m-0">شريك عام، أندريسن هورويتز</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>أندرو تشين هو شريك عام لشركة ايه 16 زد غايمز، التي تركز على التقاطع بين التكنولوجيا والألعاب - وهذا يشمل الذكاء الاصطناعي والاستوديوهات والبنية التحتية وتطبيقات المستهلك.</p>
            <p>أندرو كاتب غزير الإنتاج، وقد كتب على مدى العقد الماضي مئات المقالات على andrewchen.com حول موضوعات الشركات الناشئة ونمو المستخدمين. وهو مؤلف كتاب الأعمال الأكثر مبيعاً "مشكلة البداية الباردة"، الذي نشرته دار هاربر بيزنس، والذي يستكشف كيفية إطلاق الشركات الناشئة الجديدة وتوسيع نطاقها من خلال الاستفادة من تأثيرات الشبكة. قبل انضمامه إلى ايه 16 زد، قاد أندرو فرق نمو الركاب في اوبر، وعمل في عدد من الشركات الناشئة المدعومة بالمشاريع.</p>
            <p>أندرو حاصل على بكالوريوس العلوم. في الرياضيات التطبيقية من جامعة واشنطن.</p>
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
            <h2 class="modal-title fs-5" id="staticBackdropLabel">جريج نورمان</h2>
              <p class="text-white m-0">الرئيس التنفيذي لشركة ليف غولف</p>
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
              <h2 class="modal-title fs-5" id="staticBackdropLabel">جو مارش</h2>
              <p class="text-white m-0">الرئيس التنفيذي لشركة ت وان  للترفيه الرياضي</p>
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
            <p>قبل توليها رئاسة لعبة تتريس، قامت مايا بتوجيه جهود التطوير والتبادل الثقافي لشركة تتريس اون لاين الصين وسوني كمبيوتر انترتينمنت امريكا هوندا الأمريكية. مايا هي أيضًا شريك مؤسس لشركة بلو ستارتابس، وهي أول شركة لتسريع المشاريع في هاواي، والتي تساعد الشركات الناشئة في المراحل المبكرة على تسريع أعمالها من خلال الاستثمارات والتوجيه. منذ عام 2014، استثمرت بلو ستارتابس في أكثر من 110 شركة، اجتذبت أكثر من 500 مليون دولار من التمويل اللاحق. تم تصنيف بلو ستارتابس حاليًا ضمن أفضل 20 شركة تسريع في الولايات المتحدة.</p>
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
              <p class="text-white m-0">مخرج أفلام وثائقية مرشح لجائزة الأوسكار</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>ر.ج. كاتلر هو مخرج أفلام وثائقية حائز على جوائز عديدة، وقد قام بإخراج أفلام مثل المرشح المثالي، وإصدار سبتمبر، وبيلوشي، وبيلي إيليش: العالم ضبابي قليلاً، والفيلم القادم مارثا وإلتون جون: لم يفت الأوان بعد. لقد أنتج أفلامًا مثل غرفة الحرب، رفيع، استمع لي مارلون، واختفاء شير هايت. كاتلر هو مؤسس شركة ثيس ماشين فيلم وركس، وهي شركة إنتاج مقرها لوس أنجلوس متخصصة في تطوير وإنتاج محتوى وثائقي متميز. ثيس ماشين هي جزء من تلفزيون سوني للمحتوى غير الخيالي. تم ترشيح أعمال كاتلر لجائزة الأوسكار، وقد حصل على ثلاث جوائز إيمي، وجائزتي بيبودي، وجائزتي سينما أي وجائزتي الشرف لأكاديمية التلفزيون، من بين جوائز أخرى. في عام 2021، ر.ج. حصل على جائزة جائزة اختيار النقاد بينيبيكر لإنجاز العمر في الفيلم الوثائقي. ر.ج. يعيش في لوس أنجلوس مع زوجته جين تشا كاتلر وأطفالهما مادي وماكس وبيني وكلبهم ديكستر.</p>
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
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
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
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Andrew-Chen.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Andrew-Chen" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">أندرو تشين</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">شريك عام، أندريسن هورويتز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Greg-Norman.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#Greg-Norman" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a> -->
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جريج نورمان</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة ليف غولف</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Joe-Marsh.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Joe-Marsh" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">جو مارش</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة ت وان  للترفيه الرياضي</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Len-Blavantik.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
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
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Lisa-Cosmas" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">ليزا كوزماس هانسون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">الرئيس التنفيذي لشركة نيكو بارتنرز</p>
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
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Maya-Rogers.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
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
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/RJ-Cutler.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#RJ-Cutler" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">آر جي كاتلر</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">مخرج أفلام وثائقية مرشح لجائزة الأوسكار</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Ralf-Reichert.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
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
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Songyee-Yoon.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Songyee-Yoon" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">د. سونجي يون</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">شريك إداري، برنسيبال فينتشر بارتنرز</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-4 col-lg-2">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50">
              <div class="cs_team_member position-relative cs_rounded_50">
                <img class="w-100 cs_rounded_50" src="assets/img/speakers/Toshimoto-Mitomo.png" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                <a href="#" data-bs-toggle="modal" data-bs-target="#Toshimoto-Mitomo" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_100 border-0 text-white cs_rounded_5">السيرة الذاتية</a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4 cs_rounded_50">
                <h2 class="text-white cs_fs_20 cs_mb_10">توشيموتو ميتومو</h2>
                <p class="text-white cs_fs_12 m-0 lh-base">نائب الرئيس التنفيذي وكبير مسؤولي الأمن في شركة مجموعة سوني</p>
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
          <div class="col-lg-6">
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
          <div class="col-lg-6">
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
        </div>
      </div>
    </section>
    <!-- End Blog Section -->

    <!-- Start Apply to Join Section -->
    <section class="cs_pt_0 cs_pt_lg_35 cs_pb_35 cs_pb_lg_80 position-relative" id="apply-to-join">
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
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply-first-name" id="apply-first-name" type="text" placeholder="الاسم الأول">
                <span id="apply-first-name-error" class="text-danger"></span>
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply-last-name" id="apply-last-name" type="text" placeholder="الاسم الثاني">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply-email" id="apply-email" type="text" placeholder="البريد الالكتروني">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply-company" id="apply-company" type="text" placeholder="الشركة">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply-position" id="apply-position" type="text" placeholder="المنصب">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="apply-industry" id="apply-industry" type="text" placeholder="قطاع العمل">
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 cs_mt_20 overflow-hidden"><span>طلب الانضمام</span></button>
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
            <form class="row" method="POST" action="{{ route('contact.submit') }}">
              @csrf {{-- Cross-Site Request Forgery protection --}}
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-first-name" id="contact-first-name" type="text" placeholder="الاسم الأول">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-last-name" id="contact-last-name" type="text" placeholder="الاسم الثاني">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-email" id="contact-email" type="text" placeholder="البريد الالكتروني">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-phone" id="contact-phone" type="text" placeholder="رقم الهاتف">
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
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-company" id="contact-company" type="text" placeholder="الشركة">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-position" id="contact-position" type="text" placeholder="المنصب">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_10" name="contact-industry" id="contact-industry" type="text" placeholder="قطاع العمل">
              </div>
              <div class="col-lg-12">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15" name="contact-message" id="contact-message" placeholder="الرسالة" cols="35" rows="7"></textarea>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 cs_mt_20 overflow-hidden"><span>أكمل الارسال</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Us Section -->

    @endsection