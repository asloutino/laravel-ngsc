@extends('layout.layout')

@section('content')

    <x-header pageTitle="Blog Details" breadcrumbItem="Blog Details" />

    <!-- Start Blog Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_10 cs_pb_lg_10 news-article">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <img src="{{ asset('assets/img/news/EWC_KV_MASTER.jpg') }}" alt="">
              <div class="cs_pl_40 cs_pr_40 cs_pt_40 cs_pb_40 cs_pl_lg_25 cs_pr_lg_25 cs_pt_lg_25 cs_pb_lg_25">
                <!-- <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_20">
                  <li>
                    <span><i class="fa-solid fa-user"></i> By </span> 
                    <a href="">admin</a>
                  </li>
                  <li>
                    <span><i class="fa-solid fa-comment-dots"></i></span> 
                    <a href="">3 comments</a>
                  </li>
                </ul> -->
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('stc-group-honor-and-Barns-event-partners-ar') }}">مؤتمر الرياضة العالمية الجديدة يعزز قائمة شركائه بانضمام مجموعة stc كشريك استراتيجي وتواجد "بارنز " وHONOR كشركاء رسميين</a></h2>
                <p>• الحدث المرتقب يستضيف أبرز الرواد وصناع القرار في مجالات الرياضة والأعمال والترفيه والألعاب والرياضات الإلكترونية، لاستكشاف مفهوم ثقافة المشجعين وما يحمله من فرص واعدة</p>
                <p><strong>الرياض، المملكة العربية السعودية – 22 أغسطس 2024</strong>: أعلن مؤتمر الرياضة العالمية الجديدة، المزمع انطلاقه في الرياض هذا الأسبوع، عن إبرام ثلاث شراكات جديدة، لتضاف إلى قائمة الشراكات الرائدة المساهمة في إنجاح هذا الحدث العالمي. ويعزز هذا الإعلان مكانة المؤتمر كمنصة عالمية رائدة لتبادل الخبرات، واستعراض الابتكارات والأفكار الرائدة في قطاع الألعاب والرياضات الإلكترونية.</p>
                <p>وستكون مجموعة stc الشركة الرائدة في تمكين التحول الرقمي بالمملكة، شريكًا استراتيجيًا للمؤتمر؛ حيث تهدف المجموعة إلى تعزيز نمو قطاع الألعاب في المملكة العربية السعودية، وذلك تماشياً مع مستهدفات رؤية السعودية 2030 نحو ترسيخ مكانة المملكة كوجهة عالمية رائدة في الألعاب الإلكترونية.</p>
                <p>من جهة أخرى ستنضم “بارنز”، أول علامة تجارية حديثة ومحلية بالكامل متخصصة في صناعة القهوة في المملكة العربية السعودية، إلى المؤتمر بصفتها شريكاً رسمياً، ما يعكس حالة الدعم المثمر التي أظهرها مجتمع الأعمال على مستوى المملكة العربية السعودية.</p>
                <p>وقال محمد الزين، الرئيس التنفيذي لبارنز “: الشراكة مع مؤتمر الرياضة العالمية الجديدة هو شرف كبير ونتطلع بشغف إلى الإسهام في نجاحه المرتقب. وبصفتنا علامة تجارية وطنية، نلتزم دائمًا بدعم الفعاليات التي تسلّط الضوء على القطاعات المؤثرة في نمو اقتصاد المملكة وازدهاره، سواء في الحاضر أو في المستقبل."</p>
                <p>كما أعلن مؤتمر الرياضة العالمية الجديدة عن انضمام شركة HONOR، الرائدة في مجال الإلكترونيات الاستهلاكية، كشريك رسمي، ما يضيف بُعداً إضافياً من الابتكار والتكنولوجيا المتقدمة إلى قائمة شركاء المؤتمر.</p>
                <p>وقالت بيني دياو، الرئيس التنفيذي للتسويق في HONOR: "بعد دعمنا لكأس العالم للرياضات الإلكترونية في المملكة العربية السعودية هذا الصيف، نفتخر بأن نكون شريكاً رسمياً لمؤتمر الرياضة العالمية الجديدة بنسخته الثانية التي تستضيفها العاصمة السعودية الرياض. تركيزنا ينصب على تحسين تجربة لاعبي الرياضات الإلكترونية ودعم نمو مجتمع الألعاب الإلكترونية وذلك من خلال التزامنا بتطوير قطاع الألعاب على الهاتف الجوّال عبر أحدث ابتكاراتنا في مجال الأجهزة والبرمجة. هذه الابتكارات من شأنها أن توفّر تجربة سلسلة وممتعة للاعبين وتلبّي احتياجاتهم."</p>
                <p>وقال محمد النمر، مدير إدارة المبيعات في مؤسسة كأس العالم للرياضات الإلكترونية: "سعيدون جدًا بالدعم الذي تظهره أبرز الشركات والمؤسسات الرائدة في السعودية والعالم لمؤتمر الرياضة العالمية الجديدة وثقتهم بأهميته بالنسبة لقطاع الألعاب والرياضات الإلكترونية. رؤيتنا متوافقة تمامًا مع رؤى وطموحات شركائنا الاستراتيجيين والرسميين حيث نؤمن بمستقبل ثقافة المشجعين ودوره الرئيسي في رسم العديد من الاستراتيجيات القادمة لمختلف القطاعات."</p>
                <p>ويستقبل مؤتمر الرياضة العالمية الجديدة في الرياض أكثر من 60 متحدثاً عالمياً وأكثر من 1000 مشارك من أبرز الشخصيات العالمية في مختلف القطاعات، ليكون ملتقى عالميًا لقادة ورواد قطاعات الألعاب والرياضات الإلكترونية والتكنولوجيا، والرياضة، والترفيه، والاستثمار. ويُعقد المؤتمر في فندق فور سيزونز الرياض يومي 24 و25 أغسطس، ويتضمن سلسلة من النقاشات القيّمة والعديد من الجلسات الحوارية وورش العمل التي تركّز على كيفية تأثير ثقافة وتفاعل المشجعين على مجتمع الرياضة الأوسع وعلى تخطيط الأعمال والمحتوى والملكية الفكرية وحقوق الإعلام والتسويق والبناء المجتمعي.</p>
                <p>لمزيد من المعلومات، يرجى زيارة موقع مؤتمر الرياضة العالمية الجديدة.</p>
                <p><strong>حول مؤتمر الرياضة العالمية الجديدة</strong><br>
                    يُعد مؤتمر الرياضة العالمية الجديدة المؤتمر الرئيسي لمؤسسة كأس العالم للرياضات الإلكترونية، وهو بوابة رئيسية للمسؤولين التنفيذيين والرواد العالميين وصناع القرار الرئيسيين لاستكشاف آفاق جديدة على الساحة العالمية، وتسليط الضوء على الفرص المذهلة التي يوفرها عالم الرياضات الإلكترونية. ويجمع المؤتمر نخبة رواد عالم الرياضات الإلكترونية والألعاب والرياضات والترفيه والتكنولوجيا تحت سقف واحد. ويمثل منصة ملهمة تقدم محتوى غني يناقش مختلف جوانب هذه القطاعات. ويواصل مؤتمر الرياضة العالمية الجديدة مسيرة النجاح التي بدأها منتدى العالم القادم 2023 ومؤتمر الرياضة العالمية الجديدة 2023 ليوحد كلا الحدثين تحت شعار واحد حصري في عام 2024.<br>
                    لمزيد من المعلومات، يرجى زيارة الموقع الإلكتروني:https://newglobalsportconference.com 
                </p>
                <p><strong>حول كأس العالم للرياضات الإلكترونية</strong><br>
                    كأس العالم للرياضات الإلكترونية هو حدث عالمي يجمع أبرز فرق ولاعبي الرياضات الإلكترونية ومحبّيها في احتفال عنوانه التنافس المتميّز. لأوّل مرة في تاريخ الرياضات الإلكترونية ستقدّم هذه البطولة المنتظرة نمط التحدّي عبر الألعاب المختلفة أو ما يعرف بنظام التجميع النقطي Cross Gaming حيث سيتنافس نخبة محترفي الرياضات الإلكترونية في العالم في مجموعة من أشهر الألعاب للفوز بجوائز مالية تتجاوز 62 مليون دولار، وهو ما يعد أعلى إجمالي جوائز في تاريخ الرياضات الإلكترونية. ستستضيف العاصمة السعودية الرياض هذا الحدث العالمي في صيف 2024 من 3 يوليو إلى 25 أغسطس، وسيجمع نخبة اللاعبين ومنتجي وناشري الألعاب وعشّاقها من جميع أنحاء العالم لتتويج أبطال العالم للرياضات الإلكترونية. تتضمن النسخة الأولى من كأس العالم للرياضات الإلكترونية، 22 منافسة في 21 لعبة. للمزيد من التفاصيل، يمكنكم زيارة الموقع الرسمي  https://esportsworldcup.com/en 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    <!-- End Our Latest Project -->
    
    @endsection
