@extends('layout.layout')

@section('content')

    <x-header pageTitle="Blog Details" breadcrumbItem="Blog Details" />

    <!-- Start Blog Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_10 cs_pb_lg_10 news-article">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="cs_post cs_style_1 shadow-sm cs_mb_30">
              <img src="{{ asset('assets/img/news/ngsc-conference-photo.jpg') }}" alt="">
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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('patrice-evra-esports-can-be-10-times-bigger-than-football') }}">New Global Sport Conference 2024: Patrice Evra – ‘Esports can be 10 times bigger than football’</a></h2>
                <p>• Former Manchester United and France football star appeared on a session called ‘Becoming a Modern Sports Hero – Sports, Gaming and the Relentless Pursuit of Excellence’ alongside Gabriel “FalleN” Toledo, the Counter-Strike II player for FURIA Esports</p>
                <p>• ‘Esports can be bigger than football 100%. You see the fans in the arenas where all these gaming competitions happen, like at the Esports World Cup in Riyadh’ – Evra</p>
                <p>• Second and final day of New Global Sport Conference 2024 takes place at Four Seasons Hotel Riyadh at Kingdom Centre on Sunday</p>
                <p><strong>Saturday, August 24, 2024 – Riyadh, Saudi Arabia:</strong> Patrice Evra, the former Manchester United player, believes esports can be “10 times bigger than football”, as the Frenchman spoke of his passion for gaming and esports at the New Global Sport Conference 2024 (NGSC) on Saturday.</p>
                <p>Evra, 43, a UEFA Champions League and five-time Premier League winner with Manchester United, spoke as a panelist at NGSC, a two-day conference being held at the Four Seasons Hotel Riyadh at Kingdom Centre. The former left-back appeared on a session called ‘Becoming a Modern Sports Hero – Sports, Gaming and the Relentless Pursuit of Excellence’ alongside Gabriel “FalleN” Toledo, the Brazilian national who is a star Counter-Strike II player for FURIA Esports.</p>
                <p>The session explored how modern-day sports stars have redefined excellence in their respective fields and explored parallels between traditional sports and competitive gaming, delving into the mindset, dedication, and strategies that propel each to the pinnacle of their careers.</p>
                <p>And with around 3.24 billion gamers worldwide and growing all the time, Evra, capped 81 times for France, believes esports can become even bigger than the beautiful game.</p>
                <p>Speaking on the sidelines of NGSC, Evra said: “Without hesitation, esports can be bigger than football – esports can be 10 times bigger than football. This is the new generation. Don’t forget, old school, our parents didn’t let us play (gaming), so we couldn’t do it. This generation wants gaming. It can be bigger than football 100%. You can see the fans in the arenas where all these gaming competitions happen, like at the Esports World Cup in Riyadh. I was talking to Gabriel (“FalleN” Toledo) and he’s now flying to Malta, then Serbia. It’s serious. Kids have time to play and love it. The professionals train eight hours per day; footballers train two, maximum three hours per day. It’s going to be so big.”</p>
                <p>FalleN, 33, told the conference: “I started playing when I was a kid. I was part of the first generation who knew what esports could be. I’m very happy I pursued my dreams and very happy to be here now.”</p>
                <p>The second edition of NGSC, themed as ‘The Future of Fandom’, is hosting more than 60 global speakers, 200 CEOs and 1,200 attendees. Thought leaders stem from giant global entities in gaming, esports, technology, sports, entertainment, business and investment, all of whom are converging at the Four Seasons Hotel Riyadh At Kingdom Center for NGSC.</p>
                <p>The conference aligns with Saudi Arabia’s National Gaming and Esports Strategy, which was launched two years ago with the aim of making the Kingdom a global hub for the gaming and esports industry by 2030.</p>
                <p>Building on the success of its inaugural event last year, NGSC continues the path forged by the successful 2022 and 2023 editions of the Next World Forum. Hosted under one exclusive banner, NGSC is holding sessions highlighting the challenges and opportunities in crafting a new global sporting legacy, the role of technology in shaping the future of competitive gaming, and the art of storytelling in esports.</p>
                <p>The second day of NGSC 2024 takes place on Sunday August 25.</p>
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
