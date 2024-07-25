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
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('dates-for-2024-event-and-major-expansion') }}">Riyadh’s New Global Sport Conference Unveils Dates for 2024 Event and Major Expansion</a></h2>
                <div class="cs_post_subtitle">The premier conference for esports, sports, and gaming in the Middle East will be part of the Closing Weekend of the Esports World Cup in August 2024</div>
                <p>RIYADH - JUNE 28, 2024 - The Esports World Cup Foundation today revealed details of the second edition of the New Global Sport Conference (NGSC) 2024. This exclusive annual B2B conference, themed The Future of Fandom, will be held on August 24-25 at the Four Seasons Hotel in Riyadh, Saudi Arabia, following the conclusion of the Esports World Cup.</p>
                <p>The NGSC is set to be the largest global event of its kind, serving as a platform to support the development of the gaming and esports sectors in Saudi Arabia. This aligns with the Kingdom’s Vision 2030 to become a global hub for these industries.</p>
                <p>The event will be an integral part of the action-packed Closing Weekend of the Esports World Cup on August 24th and 25th in Riyadh. This weekend also features the spectacular Closing Ceremony of the Esports World Cup and the newly announced Esports Awards. The highly anticipated conference will bring together the biggest names in gaming, sports, business, and technology.</p>
                <p>NGSC 2023 announced the launch of the Riyadh-hosted Esports World Cup in the presence of His Royal Highness Prince Mohammed bin Salman, Crown Prince and Prime Minister, and industry leaders from across the globe. With a major expansion in its 2024 program, the NGSC will feature multiple stages and workshops in an all-new two-day program, expecting 800 guests to discuss the future of esports, sports, and gaming. Building on the success of its inaugural event, the NGSC continues to grow, having integrated the 2022 and 2023 editions of the Next World Forum under its umbrella.</p>
                <p>The theme "The Future of Fandom" highlights how fan engagement is transforming the gaming industry. This shift is creating unprecedented opportunities for enriched experiences, innovative revenue streams, and groundbreaking technological development. From personalized avatars and unique user-curated content to the rise of digital and physical collectibles, esports is redefining fan engagement, propelling the industry into a new era of growth and excitement.</p>
                <p>Ralf Reichert, CEO, Esports World Cup Foundation, said; “This year’s edition promises to bring together some of the most exciting leaders and thinkers in the sector, coming together to discuss what fandom means for the market, and how we can double down on the power of innovation for the future of the industry. I am super excited to reconnect with industry leaders at this incredible two-day event with keynotes, panels, fireside chats, workshops and multiple networking opportunities in Riyadh in August 2024.”</p>
                <p>An action-packed conference schedule will be released in July, and will feature some of the biggest names in gaming, tech, sports, and entertainment. Although the event is primarily invite-only, a limited number of tickets will be available to the public on July 1st, following an application process. General Admission tickets will be priced at USD 5000, with an Early Bird price of USD 2500 available for a limited time. For more information on the conference, visit www.newglobalsportconference.com.</p>
                <h5>About the Esports World Cup</h5>
                <p>The Esports World Cup is a global celebration of competitive excellence and esports fandom. The competition features a unique cross-game structure that will pit the world’s top esports teams and athletes against one another for the largest-ever prize pool. Debuting in the summer of 2024, gamers, publishers, and fans from around the globe will come together in Riyadh, Saudi Arabia, to crown the world’s first Esports World Cup Club Champion. https://esportsworldcup.com/en</p>
                <p>Kicking off on July 2, the Esports World Cup is an eight-week celebration of competitive excellence and esports fandom that will draw the world’s top Clubs together to Riyadh, Saudi Arabia. The world’s best esports Clubs will compete in 22 competitions featuring the world’s top 21 games, in a global esports spectacle that will ultimately find and crown the first World Cup Club Champion. The qualified Clubs are competing for over $60 million in prize money.</p>
                <h5>Further Information</h5>
                <p>For more information, imagery, media accreditation, or to request an interview with a spokesperson, please contact:
                  <ul>
                    <li>David Drury</li>
                    <li>Global PR Lead</li>
                    <li>T: +44 7488 285747</li>
                    <li>E: david@innes.agency</li>
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
