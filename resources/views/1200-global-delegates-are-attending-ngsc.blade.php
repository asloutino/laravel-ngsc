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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('1200-global-delegates-are-attending-ngsc') }}">Over 1,200 Global Delegates Are Attending As The New Global Sport Conference 2024 Kicks Off In Riyadh</a></h2>
                <h3>The leading conference for gaming and esports will unite visionaries to explore 'The Future of Fandom' in Riyadh.</h3>
                <p><strong>Riyadh, Saudi Arabia - August 23, 2024:</strong> The New Global Sport Conference (NGSC) is set to make a remarkable return for its second edition this weekend, August 24-25, at the prestigious Four Seasons Hotel Riyadh At Kingdom Centre.</p>
                <p>The New Global Sport Conference promises to be a landmark gathering. It will bring together over 1,200 global delegates, including more than 200 of the world’s most visionary CEOs, and welcome more than 60 prominent speakers from the worlds of esports, gaming, mainstream sports, business, technology, and entertainment.</p>
                <p>Themed ‘The Future of Fandom,’ the conference will explore and shape the evolution of fandom and its profound impact on the future of sports, esports, and entertainment. It has quickly established itself as a cornerstone event in the global sports and esports calendar, inspiring the future of these industries.</p>
                <p>The New Global Sport Conference 2024 is more than just an event; it is a movement that reflects the rapid evolution of sports, esports, and entertainment in the 21st century. By bringing together leaders from across many industries, NGSC 2024 will provide a platform for meaningful dialogue, innovative ideas, and strategic collaborations that will shape the future of fandom and the global sports landscape.</p>
                <p>As the world witnesses the merging of traditional sports and esports, the New Global Sport Conference 2024 stands at the forefront of this transformation, fostering dialogue, partnership, and innovation. The conference will help build the foundations of a future where esports and traditional sports coexist, enriching the global sports community.</p>
                <p>Agenda, Speakers, and Moderators:<br>NGSC 2024 will feature an impressive roster of speakers from the esports, gaming, sports, business, and entertainment sectors. Please visit https://newglobalsportconference.com for the full agenda and the list of speakers and moderators.</p>
                <p>Day 1 Key Panel Sessions<br>BECOMING A MODERN SPORTS HERO<br>Speakers: Gabriel “FalleN” Toledo - CS2 Player, FURIA Esports; Patrice Latyr Evra - Former Professional Footballer<br>The Session: One of the significant panel sessions of NGSC 2024 is titled “Becoming a Modern Sports Hero,” exploring how modern-day sports icons have redefined excellence in their respective fields. The session will also explore the parallels between traditional sports and competitive gaming, delving into the mindset, dedication, and strategies that have propelled these athletes to the pinnacle of their careers.</p>
                <p>GAME ON, SAUDI ARABIA</p>
                <p>Speakers:  HRH Prince Faisal bin Bandar bin Sultan Al Saud - Chairman of the Saudi Esports Federation & Vice Chairman of the Esports World Cup Foundation; H.E. Eng. Abdullah Alswaha - Minister of Communications and Information Technology; Adwa Al Arifi - Assistant Minister of Sport Affairs & Deputy Minister of Strategic Planning and Investment, Ministry of Sport; Brian Ward - CEO, Savvy Games Group; Mike Milanov - Chairman - Advisory Board Gaming & Esports, Qiddiya; Arnold Hur - CEO, Gen.G Esports.</p>
                <p>The Session: A highlight of NGSC 2024 will be the panel discussion titled “Game On, Saudi Arabia,” exploring how gaming and esports align with the Kingdom’s National Gaming and Esports Strategy to become a global hub in the sector by 2030. Saudi Arabia has rapidly emerged as a global gaming and esports leader, driven by a young, tech-savvy population, strong government support, and robust investment in infrastructure.</p>
                <p>A HISTORIC CONVERGENCE OF ESPORTS</p>
                <p>Speakers: Ser Miang Ng, Vice President of the International Olympic Committee; David Lappartient, IOC Member & Chair of the IOC Esports Commission, President of Union Cycliste Internationale; Abdulaziz Baeshen, Secretary General and CEO of the Saudi Olympic and Paralympic Committee; Ralf Reichert, CEO of the Esports World Cup Foundation.</p>
                <p>The Session: This groundbreaking session brings together visionary leaders to explore the profound impact of the recent announcement by the International Olympic Committee (IOC) to partner with the National Olympic Committee (NOC) of Saudi Arabia to host the Olympic Esports Games for the next 12 years. The session will provide insights into the strategic vision driving this revolutionary initiative, the untapped business opportunities in the rapidly expanding esports ecosystem, and how the integration of esports into the Olympics will reshape the global sports landscape.</p>
                <p>For more information on the event and to stay updated on further announcements, please visit New Global Sport Conference Website.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    <!-- End Our Latest Project -->
    
    @endsection
