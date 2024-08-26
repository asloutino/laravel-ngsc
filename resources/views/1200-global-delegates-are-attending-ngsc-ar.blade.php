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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('1200-global-delegates-are-attending-ngsc-ar') }}">غدًا.. انطلاق مؤتمر الرياضة العالمية الجديدة في الرياض بحضور أكثر من 1200 من الخبراء العالميين ورواد قطاعات الألعاب والرياضات الإلكترونية والتكنولوجيا والرياضة والترفيه والأعمال</a></h2>
                <h3>يستضيف جلسات متنوعة تسلّط الضوء على نمو قطاع الرياضات الإلكترونية وتصدّر المملكة لمشهده العالمي</h3>
                <p><strong>الرياض، المملكة العربية السعودية، 23 أغسطس 2024</strong>: تنطلق صباح غد، السبت 24 أغسطس 2024، فعاليات مؤتمر الرياضة العالمية الجديدة الذي تستضيفه الرياض على مدار يومين وتستقبل خلاله أكثر من 60 متحدثًا عالميًا وأكثر من 1200 من روّاد الأعمال والخبراء منهم أكثر من 200 من أبرز الرؤساء التنفيذيين العالميين في قطاعات الرياضات الإلكترونية والرياضة والتكنولوجيا والترفيه والأعمال والاستثمار وغيرها.</p>
                <p>وسيُقام مؤتمر الرياضة العالمية الجديدة في فندق فورسيزونز الرياض يومي 24 و25 أغسطس خلال الأسبوع الختامي لبطولة كأس العالم للرياضات الإلكترونية بنسختها الأولى. وتستكشف النسخة الثانية من المؤتمر، التي تحمل عنوان "مستقبل ثقافة المشجعين"، أحدث الاتجاهات والاستراتيجيات في مجالات الرياضة والرياضات الإلكترونية، مع التركيز على كيفية تعزيز تفاعل الجماهير وبناء مجتمعات عالمية شغوفة.</p>
                <p>ومع وجود أكثر من 3.4 مليار شخص يمارسون الألعاب الإلكترونية حول العالم، وما يقدّر بنحو 234 مليون لاعب للرياضات الإلكترونية، فإن عالم الألعاب الإلكترونية التنافسية ليس مجرد هواية متخصصة، بل أصبح ظاهرة عالمية وصناعة تغيّر المشهد التقليدي للقطاعات الأخرى وتدفع عجلة التغيير في مجالات التخطيط الاستراتيجي والاستثمار وحقوق النقل والرعاية والتسويق وتنظيم الفعاليات وغيرها.</p>
                <p>ومع ازدياد شعبية هذه الرياضات عالميًا وتركيز الحكومات والمؤسسات على تطويرها والاستثمار فيه، أصبح العالم أكثر دراية بقيمة لاعبي الرياضات الإلكترونية ومكانتهم ومواهبهم، حيث أظهر هؤلاء اللاعبين نفس التفاني والانضباط والبراعة البدنية والذهنية مثل نجوم الرياضة التقليدية، وتعرّف العالم عن قرب على مناهج التدريب الخاصة بهؤلاء اللاعبين وقدرتهم الكبيرة على التخطيط الاستراتيجي وتقديم الأداء تحت الضغط بشكل يمكن مقارنته تمامًا بما يقدّمه الرياضيون في مختلف الرياضات التقليدية.</p>
                <p>ويوفّر مؤتمر الرياضة العالمية الجديدة منصة فريدة لقادة ورواد قطاعات الرياضات الإلكترونية والألعاب والأعمال والرياضة والترفيه لاستكشاف موضوع هذا العام "مستقبل ثقافة المشجعين". ويستعرض المؤتمر دور المشجعين الرائد في تطوير قطاعي الرياضة والألعاب. كما يسلّط المؤتمر الضوء على التأثير العميق للمشجعين على استراتيجيات الأعمال وإنشاء المحتوى والملكية الفكرية وحقوق الإعلام والتسويق والبناء المجتمعي.</p>
                <p>كما يهدف المؤتمر إلى ترسيخ مكانة الرياض كمركز عالمي للرياضات والألعاب الإلكترونية والرياضة والترفيه، وهو أحد الأهداف الأساسية لرؤية المملكة 2030. ومن خلال جمع أبرز الجهات في مجال الرياضات الإلكترونية والألعاب والأعمال والرياضة والترفيه، يدعم المؤتمر تطوير ونمو هذه القطاعات في المملكة. ويمثل هذا الحدث فرصة مثالية للارتقاء بواقع الألعاب والرياضات الإلكترونية في المملكة والعالم، خاصةً وأن نسبة الأشخاص الذين يمارسون الألعاب الإلكترونية في المملكة العربية السعودية تصل إلى حوالي 67% من إجمالي عدد سكانها.</p>
                <p>كما سيركّز المؤتمر على التأثير الإيجابي للرياضات الإلكترونية على الصناعات الأخرى، وكيفية تطور الرياضات الإلكترونية من ثقافة فرعية متخصصة إلى ظاهرة عالمية، مما يخلق تأثيرًا مضاعفًا يمتد إلى ما هو أبعد من عالم الألعاب.  وإلى جانب الموضوعات الرئيسية التي يتناولها المؤتمر، سيتم التركيز خلال الجلسات المتنوعة على الفرص والتحديات التي تواجه صناعة الرياضة العالمية الجديدة ودور التكنولوجيا الحديثة في هيكلة الرياضات الإلكترونية التنافسية وتأثير السرد القصصي المهم على قطاع الألعاب والرياضات الإلكترونية.</p>
                <p>وكانت النسخة الافتتاحية للمؤتمر التي أُقيمت العام الماضي قد شهدت الكشف عن بطولة كأس عالم للرياضات الإلكترونية للمرّة الأولى، والتي تستمر فعالياتها حالياً في العاصمة السعودية الرياض لغاية 25 أغسطس الجاري. كما شهدت هذه النسخة الإعلان عن تأسيس مؤسسة كأس العالم للرياضات الإلكترونية التي تُعد منظمة غير ربحية مكرّسة لتعزيز التعاون داخل مجتمع الرياضات الإلكترونية وضمان استدامة هذا القطاع على المدى الطويل.</p>
                <p>ويُبنى هذا الحدث العالمي في نسخته الثانية على النجاح المنقطع النظير للنسخة الأولى التي عُقدت عام 2023 ويُكمل مسيرة وإرث "منتدى العالم القادم" الذي استضافته المملكة العربية السعودية خلال العامين الماضيين. ويتماشى كل من مؤتمر الرياضة العالمية الجديدة وكأس العالم للرياضات الإلكترونية والمؤسسة مع أهداف الاستراتيجية الوطنية للألعاب والرياضات الإلكترونية التي تم إطلاقها عام 2022، والتي تسعى لترسيخ مكانة المملكة العربية السعودية في صدارة مشهد الألعاب والرياضات الإلكترونية على مستوى العالم.</p>
                <p>ويُعدّ قطاع الألعاب والرياضات الإلكترونية العالمي عملاقاً اقتصادياً هائلاً يتخطى قطاعات الموسيقى والأفلام مجتمعة. فمع حجم سوق يبلغ 187 مليار دولار أمريكي، يُمثّل هذا القطاع الديناميكي قوة دافعة للاقتصاد العالمي، ويتيح فرصاً لا حصر لها للنمو والازدهار. وينطبق هذا الأمر على المملكة العربية السعودية أيضًا حيث ينمو القطاع بشكل متنوّع ومزدهر ومستمر تماشيًا مع مستهدفات رؤية السعودية 2030.</p>
                <p>لمزيد من المعلومات، يرجى زيارة موقع مؤتمر الرياضة العالمية الجديدة.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    <!-- End Our Latest Project -->
    
    @endsection
