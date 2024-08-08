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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('the-rise-of-esports-athletes-as-modern-sport-heroes') }}">The New Global Sport Conference to discuss the rise of esports athletes as modern sport heroes</a></h2>
                <p>• Conference to host more than 60 global speakers and over 750 global delegates</p>
                <p>• “Esports is not just a game; it's a movement that is reshaping the landscape of sports and entertainment’ – HRH Prince Faisal bin Bandar bin Sultan, Chairman, Saudi Esports Federation</p>
                <p>• ‘Esports athletes are real athletes, esports fans are as passionate and loyal as any sports fans, and esports is the new global sport” – Ralf Reichert, CEO, Esports World Cup Foundation.</p>
                <p><strong>Monday, August 5, 2024 – Riyadh, Saudi Arabia</strong> – The New Global Sport Conference 2024 (NGSC), themed as ‘The Future of Fandom’, will host more than 60 global speakers and over 750 global delegates from leading industries such as gaming, esports, technology, sports, entertainment, business and investment and many more in Riyadh, Saudi Arabia.</p>
                <p>Hosted at the Four Seasons Hotel Riyadh at Kingdom Centre on August 24-25, NGSC will feature a series of enlightening discussions from fan engagement in sports and esports; exploring the evolving landscape of fandom and its significant impact on the future of sports and entertainment.</p>
                <p>Among these discussions, a major theme stands out: ‘The rise of modern sports heroes who balance traditional sports and gaming’. Under this theme, speakers will tackle a global debate around the positioning, value and impact of esports athletes.</p>
                <p>With over 3.4 billion gamers worldwide and an estimated 234 million esports athletes, the world of competitive gaming is not just a niche hobby but a global phenomenon. Esports athletes exhibit the same dedication, discipline, and physical prowess as traditional sports stars. Their hard training regimens, strategic thinking, and ability to perform under pressure are comparable to those of any top-tier athlete.</p>
                <p>HRH Prince Faisal bin Bandar bin Sultan, Chairman of the Saudi Esports Federation, said: “Esports is not just a game; it's a movement that is reshaping the landscape of sports and entertainment. The New Global Sport Conference is a testament to the growth and importance of this industry, and a recognition of the stardom of esports athletes and the unmatched passion of esports fans. The conference and the visionaries attending it from all over the world will enable impactful discussions, networking and collaboration to drive forward the future of esports.”</p>
                <p>Ralf Reichert, CEO of the Esports World Cup Foundation, said: “Esports athletes have proven time and again that they possess the same qualities as traditional sports stars. They train hard, compete fiercely, and inspire millions of fans around the world. The New Global Sport Conference is crucial in recognizing their contributions and setting the stage for the future of sports. Esports athletes are real athletes, esports fans are as passionate and loyal as any sports fans, and esports is the new global sport.”</p>
                <p>As the world witnesses the merging of traditional sports and esports, NGSC stands at the forefront of this transformation, fostering dialogue, partnership, and innovation. The conference will help build the foundations of a future where esports and traditional sports coexist, enriching the global sports community.</p>
                <p>Building on the success of its inaugural event last year, NGSC continues the path forged by the successful 2022 and 2023 editions of the Next World Forum. Hosted under one exclusive banner, NGSC will hold sessions highlighting the challenges and opportunities in crafting a new global sporting legacy, the role of technology in shaping the future of competitive gaming, and the art of storytelling in esports.</p>
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
