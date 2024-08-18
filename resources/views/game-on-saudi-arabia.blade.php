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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('game-on-saudi-arabia') }}">‘Game On, Saudi Arabia’: The New Global Sport Conference to discuss ‘Gaming and Sports as the Kingdom’s Gateway to the World’</a></h2>
                <p>• H.E Eng. Abdullah Alswaha, Saudi Arabia’s Minister of Communications & Information Technology, confirmed as a guest speaker at the panel discussion</p>
                <p>• ‘The gaming and esports industry has been at the forefront of transforming the Kingdom’s economic, social and cultural landscape into a dynamic hub of creativity and engagement’ – HRH Prince Faisal bin Bandar bin Sultan, Chairman, Saudi Esports Federation.</p>
                <p>• ‘Saudi Arabia has foreseen the potential and positioned itself as a leader that enhances its global presence and fosters a spirit of collaboration and innovation’ - Brian Ward, CEO, Savvy Games Group.</p>
                <p><strong>Saturday, August 17, 2024 – Riyadh, Saudi Arabia:</strong> The New Global Sport Conference 2024 (NGSC), themed ‘The Future of Fandom’, will feature a panel discussion exploring gaming and sports as Saudi Arabia’s gateway to the world.</p>
                <p>Titled ‘Game On, Saudi Arabia’, the panel will welcome H.E. Eng. Abdullah Alswaha, Saudi Arabia’s Minister of Communications & Information Technology as a guest speaker. This panel will focus on how gaming and esports align with the Kingdom’s National Gaming and Esports Strategy to become a global hub in the sector by 2030. The high-level session will address how Saudi Arabia has rapidly risen to become a leader in gaming and esports since the strategy was launched two years ago.</p>
                <p>Alongside H.E. Alswaha, the panel session will feature the thoughts of HRH Prince Faisal bin Bandar bin Sultan, the Chairman of the Saudi Esports Federation; Brian Ward, the CEO of Savvy Games Group; Arnold Hur, the CEO of Gen.G Esports; and Mike Milanov, the Chairman of the Advisory Board for Gaming and Esports at Qiddiya. It will be moderated by Joe Pompliano, the Managing Partner of Pomp Investments.</p>
                <p>HRH Prince Faisal said: “With Saudi Arabia opening its doors to the world, gaming and esports have been at the forefront of transforming the Kingdom’s economic, social, and cultural landscape into a dynamic hub of creativity and engagement. ‘Game On, Saudi Arabia’ at the New Global Sport Conference will explore how this has been achieved and the next steps that are planned to ensure our gaming and esports journey fulfills the objectives of the National Gaming and Esports Strategy. We aim to become a global hub for gaming and esports, elevate the sector, contribute meaningfully to its development, and shape its future on a global scale.”</p>
                <p>Over the past few years, Saudi Arabia has invested heavily in the gaming and esports ecosystem to develop the sector into a fully functioning industry that caters to the interests of its local population. The investment is primarily aimed at fulfilling the passion of the country’s youth for gaming and esports - around 67% of the nation’s 35 million population are considered gamers.</p>
                <p>Brian Ward said: “The New Global Sport Conference comes at an ideal time, helping to conclude the Esports World Cup and serve as a platform to discuss Saudi Arabia’s future for games and esports.  Games have the power to connect people of all backgrounds, ages, nationalities, genders, and abilities. Saudi Arabia, which has foreseen the potential, has positioned itself as a leader that enhances its global presence and fosters a spirit of collaboration and innovation. ‘Game On, Saudi Arabia’ will highlight why global games investment is vital and enables people to play, learn, compete, and triumph together.”</p>
                <p>Inspired by the Kingdom’s Vision 2030, Saudi Arabia has become one of the few countries with a National Gaming & Esports Strategy, highlighting its commitment to leading and innovating in this dynamic industry. This reflects the country’s vision to position the Kingdom at the forefront of the global gaming landscape.</p>
                <p>A gathering point for visionary leaders from the worlds of gaming, esports, technology, sports, entertainment, business, and investment, NGSC will welcome more than 60 global speakers and over 750 global delegates to Riyadh. Hosted at the Four Seasons Hotel Riyadh At Kingdom Centre on August 24-25, NGSC will feature a series of enlightening discussions that will explore fan engagement in sports and esports, the evolving landscape of fandom, and its significant impact on the future of sports and entertainment.</p>
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
