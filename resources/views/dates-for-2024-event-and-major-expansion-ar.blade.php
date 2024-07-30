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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('dates-for-2024-event-and-major-expansion') }}">المملكة تستضيف النسخة الثانية من مؤتمر الرياضة العالمية الجديدة، امتدادًا لنجاح أعمال كأس العالم للرياضات الإلكترونية</a></h2>
                <p>الرياض – 28 يونيو 2024 – كشفت مؤسسة كأس العالم للرياضات الإلكترونية اليوم عن تفاصيل النسخة الثانية من مؤتمر الرياضة العالمية الجديدة (NGSC 2024)، سيُعقد هذا المؤتمر السنوي للأعمال التجارية، تحت عنوان: "مستقبل الفاندوم"، يومي 24 و25 أغسطس 2024م في فندق فورسيزونز في الرياض، عقب اختتام بطولة كأس العالم للرياضات الإلكترونية.</p>
                <p>من المقرر أن يصبح هذا المؤتمر أكبر حدث عالمي من نوعه، إذ يعمل بمثابة منصة لدعم تطوير قطاع الألعاب والرياضات الإلكترونية في المملكة العربية السعودية تماشياً مع مستهدفات رؤية السعودية 2030 لتصبح مركزًا عالميًا ووجهةً رائدةً لهذه الصناعة، كما يعتبر هذا الحدث أحد الأعمال الختامية لكأس العالم للرياضات الإلكترونية، وسيجمع أكبر الأسماء في مجال الألعاب، والرياضة، والأعمال، والتكنولوجيا.</p>
                <p>تعتبر نسخة مؤتمر الرياضة العالمية الجديدة لعام 2024م، هي الأضخم في تاريخ الرياضات الإلكترونية، وأيضًا الأوسع من النسخ السابقة لعامي 2022م و2023م، حيث تضم منصات متعددة وورش عمل ضمن برنامجٍ جديد ونوعي، وسيناقش 800 ضيفًا مستقبل الرياضات والألعاب الإلكترونية، إلى جانب أنه سيسلط الضوء على موضوع "مستقبل الفاندوم" الذي يوضح كيفية مساهمة المعجبين في تشكيل صناعة الألعاب وتطويرها، فهذا التحول يخلق فرصًا غير مسبوقة لتجارب غنية، بتطورٍ تكنولوجي رائد، وإيجاد مسارات مبتكرة للإيرادات، وذلك بدءًا من الصور الرمزية المخصصة والمحتوى الفريد الذي يقوم المستخدم بإعداده،؛ لتعيد الرياضات الإلكترونية تعريف مشاركة المعجبين، مما سيدفع هذه الصناعة إلى عصر جديد من النمو والإثارة.</p>
                <p>وقال رالف رايشرت، الرئيس التنفيذي لمؤسسة كأس العالم للرياضات الإلكترونية: "تعد نسخة هذا العام التي تجمع القادة والمفكرين الأكثر شعبية وإثارة في هذا القطاع؛ لمناقشة ما تعنيه الفاندوم للصناعة، وكيف يمكننا مضاعفة قوة الابتكار لمستقبلها. وهذا ما يجعلني اليوم متحمسًا لتعزيز التواصل مع القادة في هذا الحدث المذهل من خلال عقد جلسات النقاش وورش العمل التي تسهم في خلق فرص تواصلية نوعية" </p>
                <p>ولمزيد من المعلومات حول المؤتمر، قم بزيارة الموقع: www.newglobalsportconference.com.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    <!-- End Our Latest Project -->
    
    @endsection
