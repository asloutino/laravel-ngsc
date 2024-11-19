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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('qiddiya-and-hmg-join-distinguished-partnership-ecosystem-ar') }}">القدية ومجموعة الدكتور سليمان الحبيب للخدمات الطبيّة ينضمون إلى قائمة شركاء مؤتمر الرياضة العالمية الجديدة</a></h2>
                <p>• المؤتمر سيستضيف أكثر من 60 متحدثًا عالميًا  وأكثر من 1000 من روّاد الأعمال والخبراء منهم أكثر من 200 من أبرز الرؤساء التنفيذيين العالميين</p>
                <p>• القدية ومجموعة الدكتور سليمان الحبيب للخدمات الطبية يدعمان المؤتمر كشركاء استراتيجيين</p>
                <p>• الحدث المرتقب يستضيف أبرز الرواد وصناع القرار في مجالات الرياضة والأعمال والترفيه والألعاب والرياضات الإلكترونية، لاستكشاف مفهوم ثقافة المشجعين وما يحمله من فرص واعدة</p>
                <p><strong>الرياض، المملكة العربية السعودية – 20 أغسطس 2024</strong>: يشهد مؤتمر الرياضة العالمية الجديدة، الذي يستعد لانطلاق نسخته الثانية في الرياض، زخماً متزايداً بدعم قوي من مجتمع الأعمال. وتؤكد ثلاث شراكات رئيسية جديدة على أهمية هذا الحدث الرياضي العالمي، مما يعزز مكانة المملكة العربية السعودية كوجهة رائدة على الساحة الرياضية الدولية.</p>
                <p>وتم الإعلان هذا الأسبوع عن انضمام القدية ومجموعة الدكتور سليمان الحبيب للخدمات الطبية كشركاء استراتيجيين، وانضمام شركة Intel كشريك رسمي للمؤتمر. ويُقام المؤتمر في فندق فورسيزونز الرياض في قلب العاصمة السعودية يومي 24 و25 أغسطس، حيث يتلاقى روّاد الأعمال وصناع القرار في مجالات الرياضة والأعمال والترفيه والألعاب والرياضات الإلكترونية، لاستكشاف مفهوم ثقافة المشجعين وما يحمله من فرص واعدة.</p>
                <p>وتعليقاً على هذا الموضوع، قال مايك ميلانوف، رئيس المجلس الاستشاري للألعاب والرياضات الإلكترونية في مدينة القدية: "مدينة القدية هي وجهة عالمية للترفيه والرياضة والثقافة والألعاب والرياضات الإلكترونية وستساهم برسم مستقبلٍ مشرق لهذا لقطاع في المملكة العربية السعودية. نحن فخورون بتعاوننا الوثيق مع مؤسسة كأس العالم للرياضات الإلكترونية وتسرنا المشاركة في مؤتمر الرياضة العالمية الجديدة، الأمر الذي يعكس التزامنا الراسخ بدعم نمو قطاع الألعاب والرياضات الإلكترونية في المملكة وتسليط الضوء على الفرص الواعدة التي يقدمها هذا القطاع، والتعريف بكل ما ستقدّمه مدينة القديّة لمحبي الألعاب والرياضات الإلكترونية في المملكة والعالم."</p>
                <p>وبدوره قال الدكتور سليمان الحبيب، مؤسس ورئيس مجلس إدارة مجموعة الدكتور سليمان الحبيب للخدمات الطبية: "نحن سعداء بأن نكون شريكًا استراتيجيًا لمؤتمر الرياضة العالمية الجديدة وأن نكون من ضمن منظومة الرؤية الوطنية في رعاية ودعم مثل هذه المؤتمرات، كما أننا نتطلّع للمضي قُدماً في تقديم أعلى معايير الخدمات الطبيّة، التي لطالما تميّزت بها مجموعة الدكتور سليمان الحبيب الطبيّة. تأتي مشاركتنا في في هذا المؤتمر إيماناً منا بأهمية قطاعي الرياضة والرياضات الإلكترونية في تعزيز الصحة الجسدية والنفسية، وانسجاماً مع رؤيتنا في تقديم رعاية صحية مبتكرة، بما يتلاءم مع هدف المؤتمر في تطوير الرياضات الإلكترونية والألعاب على مختلف الأصعدة. نتطلع قدمًا للمشاركة في هذا المؤتمر العالمي."</p>
                <p>كما أعلن مؤتمر الرياضة العالمية الجديدة عن انضمام شركة Intel إلى قائمة الشركاء الرسميين لتعزز من مكانة المؤتمر وتثري النقاشات التي ستدور حول مستقبل صناعة الألعاب الإلكترونية. وتكرّس Intel جهودها في رسم مستقبل قطاع الألعاب من خلال تقديم أحدث الابتكارات في مجال الأجهزة والبرامج، ما يمنح عشاق الألعاب والرياضات الإلكترونية تجربة استثنائية وفريدة من نوعها.</p>
                <p>ومن جانبه قال محمد النمر، مدير إدارة المبيعات في مؤسسة كأس العالم للرياضات الإلكترونية: "نحن فخورون بالاهتمام الكبير الذي يحظى به مؤتمر الرياضة العالمية الجديدة من قبل أبرز الجهات والشركات في السعودية والعالم، ونثق بأن خبراتهم في قطاعات التكنولوجيا والترفيه والرعاية الصحيّة ومساهماتهم في دعم نمو قطاع الألعاب والرياضات الإلكترونية ستترك أثراً مستداماً ومثمراً، وهو ما نثمّنه ونتطلع إلى البناء عليه من خلال النقاشات المتميزة التي سيحتضنها المؤتمر مع أبرز المتحدثين وروّاد الأعمال العالميين."</p>
                <p>ويستقبل مؤتمر الرياضة العالمية الجديدة في الرياض أكثر من 60 متحدثاً عالمياً وأكثر من 1000 مشارك من أبرز الشخصيات العالمية في مختلف القطاعات، ليكون ملتقى عالميًا لقادة ورواد قطاعات الألعاب والرياضات الإلكترونية والتكنولوجيا والرياضة والترفيه والاستثمار. ويُعقد المؤتمر في فندق فور سيزونز الرياض يومي 24 و25 أغسطس، ويتضمن سلسلة من النقاشات القيّمة والعديد من الجلسات الحوارية وورش العمل التي تركّز على كيفية تأثير ثقافة وتفاعل المشجعين على مجتمع الرياضة الأوسع وعلى تخطيط الأعمال والمحتوى والملكية الفكرية وحقوق الإعلام والتسويق والبناء المجتمعي.</p>
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