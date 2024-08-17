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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('global-industry-leaders-eager-to-share-insights-at-ngsc-ar') }}">أعربوا عن تطلعاتهم لحضور المؤتمر العالمي الذي تستضيفه الرياض وثقتهم بأنه سيكون منصة رئيسية لتشكيل مستقبل قطاع الألعاب والرياضات الإلكترونية</a></h2>
                <h3>المتحدثون العالميون المشاركون في "مؤتمر الرياضة العالمية الجديدة" يشيدون بالإمكانات الكبيرة للقطاع في المنطقة وبالدور الرائد للسعودية في قيادته وتحفيز نموه</h3>
                <p>• "مؤتمر الرياضة العالمية الجديدة في الرياض سيوفّر منصة مبتكرة لتبادل الأفكار والخبرات والجمع بين الإبداع والشغف والتعاون والتميّز." - جو مارش، الرئيس التنفيذي لشركة T1 Entertainment & Sports</p>
                <p>• "تتحول منطقة الشرق الأوسط وشمال إفريقيا، وخاصة المملكة العربية السعودية، بسرعة إلى مركز عالمي للألعاب والرياضات الإلكترونية " - ليزا هانسون، الرئيس التنفيذي لشركة Niko Partners.</p>
                <p><strong>الجمعة 16 أغسطس 2024 - الرياض، المملكة العربية السعودية</strong>: مع اقتراب موعد استضافة المملكة العربية السعودية للنسخة الثانية من مؤتمر الرياضة العالمية الجديدة 2024 تحت عنوان "مستقبل ثقافة المشجعين"، أعرب العديد من المتحدثين العالميين المشاركين في المؤتمر عن تطلعاتهم للمشاركة في حوار هادف يجمعهم مع أبرز قادة ورواد قطاعات الألعاب والرياضات الإلكترونية والتكنولوجيا والرياضة والترفيه الأعمال والاستثمار وغيرها الكثير، في العاصمة السعودية الرياض.</p>
                <p>ويشهد مؤتمر الرياضة العالمية الجديدة (NGSC 2024) - الذي تستضيفه الرياض في الفترة من 24 حتى 25 أغسطس 2024 في فندق فور سيزونز الرياض - إقبالًا كبيرًا حيث من المتوقع أن يستضيف المؤتمر أكثر من 60 متحدّث عالمي وأكثر من 750 مشاركًا من أبرز الشخصيات العالمية في مختلف القطاعات، ليكون هذا المؤتمر المنتظر المنصة المثالية للمناقشات التي ستشكّل مستقبل الألعاب والرياضات الإلكترونية والترفيه وغيرها من القطاعات.</p>
                <p>وأكد جو مارش، الرئيس التنفيذي لشركة T1 Entertainment & Sports، على أهمية المؤتمر في تشكيل مستقبل الرياضات الإلكترونية: “يُعد حضور مؤتمر الرياضة العالمية الجديدة في الرياض فرصة مهمّة لتشكيل مستقبل الرياضات الإلكترونية هنا. باعتباري لاعبًا ومشجعًا لهذه الرياضات طوال حياتي، فإن موضوع هذا العام وهو "مستقبل ثقافة المشجعين" له أهمية خاصة وسيكون له صدى قويًا. ماذا يعني أن تكون من محبي الرياضات الإلكترونية في العصر الحديث؟ وكيف يمكن للقطاع أن يقدّم للفرق واللاعبين الفرص المثالية للمنافسة في البطولات الكبرى التي يرغب الملايين من المشجعين حول العالم مشاهدتها؟ هذا المؤتمر سيجيب على هذه الأسئلة وأكثر، وسيوفّر منصة مبتكرة لتبادل الأفكار والخبرات والجمع بين الإبداع والشغف والتعاون والتميّز."</p>
                <p>من جهته أكد توشيموتو ميتومو، نائب الرئيس والمدير التنفيذي للاستراتيجية لشركة Sony Group Corporation، على التزام سوني بتعزيز تجربة الرياضات الإلكترونية: "تعمل سوني على تعزيز تجربة الرياضات الإلكترونية لتكون أكثر متعة وتفاعلًا مع المشجعين على مستوى العالم من خلال تسخير الإبداع والتكنولوجيا ضمن أعمالنا المتنوعة. بدءًا من دورات PlayStation التي تقدمها Sony Interactive Entertainment وسلسلة ألعاب القتال EVO السنوية وصولًا إلى شراكتنا مع كأس العالم للرياضات الإلكترونية، نحن متحمسون لحضور مؤتمر الرياضة العالمية الجديدة والعمل سويًا لتلبية احتياجات هذا المجتمع العالمي المتنامي من اللاعبين والمشجعين."</p>
                <p>وسلّطت ليزا هانسون، الرئيس التنفيذي لشركة Niko Partners، الضوء على أهمية المملكة العربية السعودية ومنطقة الشرق الأوسط وشمال أفريقيا في تعزيز نمو قطاع الألعاب والرياضات الإلكترونية: "تتحول منطقة الشرق الأوسط وشمال إفريقيا، وخاصة المملكة العربية السعودية، بسرعة إلى مركز عالمي للألعاب والرياضات الإلكترونية. إنها واحدة من أسرع أسواق ألعاب الفيديو نموًا التي تتبعها شركة Niko Partners، خصوصًا أنها تمتاز ببراعة سكانها من فئة الشباب في التكنولوجيا، وتحظى بثقة ودعم الحكومات، وتشهد استثمارًا غير مسبوق في البنية التحتية. المزيد من الشركات العالمية أدركت أهمية منطقة الشرق الأوسط وشمال أفريقيا وتعمل على تأسيس استراتيجيات محلية وشراكات مثمرة لتحقيق النجاح في المنطقة. أنا متحمسة جدًا لحضور مؤتمر الرياضة العالمية الجديدة لاستكشاف العديد من الموضوعات الرئيسية ومشاركة أفكارنا حول قطاع الألعاب والرياضات الإلكترونية المزدهر في السعودية والمنطقة."</p>
                <p>وأعربت مايا روجرز، الرئيس التنفيذي لشركة Tetris، عن حماسها للمشاركة مجددًا في المؤتمر: “إنه لشرف كبير أن أشارك في مؤتمر الرياضة العالمية الجديدة في الرياض هذا العام، مع تواجد أكثر من 60 متحدثًا عالميًا وأكثر من 750 من أبرز قادة ورواد القطاع من جميع أنحاء العالم. في نهاية النسخة الماضية من المؤتمر، أدركت مدى قوّة القطاع هنا ومدى عزم المتحدثين والمشاركين للعمل سويًا لتنميته وتبادل الخبرات والمعلومات. أنا سعيدة جدًا للمشاركة مرة أخرى هذا العام ولأشاهد عن قرب النتائج الإيجابية الكبيرة للجهود المستمرة التي تقوم بها المملكة العربية السعودية للمساهمة في نمو القطاع ورسم مستقبله ونقله إلى مستوى جديد تمامًا. يتمتع عالم الرياضات الإلكترونية والألعاب بالكثير من الإمكانات لجمع مختلف الأطراف ضمن شغف مشترك ولتحقيق الخير للاعبين والمشجعين. نعم، إنه عمل تجاري، ونعم، نحن نتحدث عن صناعة تبلغ قيمتها المليارات سنويًا، ولكنها أيضًا تجربة استثنائية وهي شغف جمهور كبير حول العالم، وهذا هو الأساس المتين الذي يوحّد المشجعين في جميع أنحاء العالم."</p>
                <p>وتحدّث أندرو تشين، الشريك العام في Andreessen Horowitz، عن روح الابتكار التي تقود مستقبل القطاع: "مستقبل الألعاب والرياضات الإلكترونية يتم تشكيله عبر إدخال عامل الابتكار والتعاون بين القطاعات المختلفة مثل الألعاب والإبداع والتكنولوجيا. يعد مؤتمر الرياضة العالمية الجديدة فرصة مثالية للتواصل والتعاون مع أبرز قادة وروّاد قطاع الألعاب والرياضات الإلكترونية. إن ممارسة الألعاب هي ضمن المحاور الأساسية في التجربة الإنسانية، والباب مفتوح على مصراعيه أمام المطورين والمبدعين الجدد لتحقيق المزيد من النمو على مستوى العالم."</p>
                <p>ويُعدّ قطاع الألعاب والرياضات الإلكترونية العالمي عملاقاً اقتصادياً هائلاً يتخطى قطاعات الموسيقى والأفلام مجتمعة. فمع حجم سوق يبلغ 187 مليار دولار أمريكي، يُمثّل هذا القطاع الديناميكي قوة دافعة للاقتصاد العالمي، ويتيح فرصاً لا حصر لها للنمو والازدهار. وينطبق هذا الأمر على المملكة العربية السعودية أيضًا حيث ينمو القطاع بشكل متنوّع ومزدهر ومستمر تماشيًا مع مستهدفات رؤية السعودية 2030، كما تشكّل الاستراتيجية الوطنية للألعاب والرياضات الإلكترونية في المملكة العربية السعودية المنصّة الرئيسية لنمو هذا القطاع بمختلف أقسامه وتهدف إلى خلق 39,000 فرصة عمل والمساهمة بمبلغ 13.3 مليار دولار في اقتصاد المملكة بحلول عام 2030.</p>
                <p>ويستقبل مؤتمر الرياضة العالمية الجديدة في الرياض أكثر من 60 متحدثاً عالمياً وأكثر من 750 مشاركًا من أبرز الشخصيات العالمية في مختلف القطاعات، ليكون ملتقى عالميًا لقادة ورواد قطاعات الألعاب والرياضات الإلكترونية والتكنولوجيا والرياضة والترفيه والاستثمار. ويُعقد المؤتمر في فندق فور سيزونز الرياض يومي 24 و25 أغسطس، ويتضمن سلسلة من النقاشات القيّمة والعديد من الجلسات الحوارية وورش العمل التي تركّز على كيفية تأثير ثقافة وتفاعل المشجعين على مجتمع الرياضة الأوسع وعلى تخطيط الأعمال والمحتوى والملكية الفكرية وحقوق الإعلام والتسويق والبناء المجتمعي.</p>
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
