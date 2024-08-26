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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('stc-group-honor-and-Barns-event-partners') }}">New Global Sport Conference: stc Group announced as Strategic Partner; HONOR and Barn’s unveiled as official event partners</a></h2>
                <p>• Highly anticipated event welcomes visionary leaders to explore the future of fandom and its transformative potential in Riyadh on August 24-25</p>
                <p><strong>Riyadh, Saudi Arabia – 22 August 2024:</strong> Ahead of the highly anticipated New Global Sport Conference (NGSC) in Riyadh this week, another trio of distinguished national and international companies has been unveiled as exclusive event partners.</p>
                <p>Taking place at the Four Seasons Hotel Riyadh At Kingdom Centre from August 24-25, NGSC once again welcomes visionary leaders from the esports, gaming, business, entertainment, and mainstream esports realms – offering a unique platform to explore the future of fandom and its transformative potential.</p>
                <p>In the latest illustration of support from the wider business community, stc Group, the engine of digital transformation, has been named a Strategic Partner of the New Global Sport Conference.</p>
                <p>As a Strategic Partner of the New Global Sport Conference and the Elite and Founding Partner of the Esports World Cup, stc Group showcases its long-term commitment to empowering the esports sector  by helping to drive long-term growth, development, and sustainability across Saudi Arabia’s gaming and esports industry.</p>
                <p>Chinese consumer electronics company HONOR has also been confirmed as an Official Partner.</p>
                <p>Ms. Penny Diao, CMO of HONOR Middle East and Africa, said: “Following our support for the Esports World Cup in Saudi Arabia this summer, HONOR is proud to be an Official Partner of this year’s New Global Sport Conference. As we continue to focus on enhancing gamers’ experiences and supporting the growing gaming community, HONOR is committed to advancing mobile gaming through a range of hardware and software innovations. These advancements aim to deliver a seamless and optimal gaming experience, precisely addressing gamers’ needs and enhancing their overall gameplay.”</p>
                <p>Additionally, Barn’s, the Kingdom’s first contemporary specialty coffee brand, is supporting the conference as an Official Partner.</p>
                <p>Mohammed Alzain, CEO at Barn’s, said: “Partnering with the New Global Sport Conference is a real privilege, and we’re looking forward to contributing to its certain success. As a national brand, we’re always eager to support influential events that ignite conversations around the most influential sectors central to economic growth and national prosperity now and in the future.”</p>
                <p>Mohammed Al Nimer, Sales Director, Esports World Cup Foundation, said: "It is amazing to see more leading brands showing confidence and trust in the New Global Sport Conference 2024 and what it means to the ever-growing esports and gaming sector. Our visions are aligned, and with our Strategic and Official Partners, we believe in the future of fandom and its critical role in shaping what many industries need to consider and plan for in the near future.”</p>
                <p>Building on the success of its inaugural event last year, NGSC continues the path forged by the successful 2022 and 2023 editions of the Next World Forum. Hosted under one exclusive banner, NGSC will hold sessions highlighting the challenges and opportunities in crafting a new global sporting legacy, the role of technology in shaping the future of competitive gaming, and the art of storytelling in esports.</p>
                <p>While examining how audiences help shape business strategies, content creation, intellectual property, media rights, marketing, and community building, NGSC will explore how fandom transcends every aspect of modern society in line with its ‘The Future of Fandom’ theme.</p>
                <p>For more information on the event and to stay updated on further announcements, please visit New Global Sport Conference Website.</p>
                <p><strong>For more information regarding New Global Sport Conference, contact:</strong><br>
                    Andrew Johnson at Burson: andrew.johnson@bursonglobal.com
                </p>
                <p><strong>About New Global Sport Conference</strong><br>
                    The New Global Sport Conference (NGSC24), the main conference of the Esports World Cup Foundation (EWCF), is a gateway for today and tomorrow’s executives, global leaders, and prime decision-makers into a new global sport and will showcase how esports can create new global opportunities. The NGSC24 will unite top players from sports, esports, gaming, entertainment, technology and beyond, serving as a a content-packed platform bringing together these industries. It carries on the torch of the Next World Forum series and NGSC23, uniting both events under one exclusive banner in 2024.<br>
                    Website:  www.newglobalsportconference.com 
                </p>
                <p><strong>About the Esports World Cup</strong><br>
                    The Esports World Cup is a global celebration of competitive excellence and esports fandom. The competition features a unique cross-game structure that will pit the world’s top esports teams and athletes against one another for the largest-ever prize pool. Debuting in the summer of 2024, gamers, publishers, and fans from around the globe will come together in Riyadh, Saudi Arabia, to crown the world’s first Esports World Cup Club Champion. https://www.esportsworldcup.com/en 
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
