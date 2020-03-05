  @extends('web.templete.master')

      {{-- META --}}
      @section('meta')
         <title>Home - Admired in Africa - Best Photography Show in Africa</title>
         <!--<meta name="description" content="">-->
         <!--<meta name="author" content="">-->
         <!--<meta name="keywords" content="">-->
      @endsection

      @section('content') 
         <!-- banner start-->
         <section class="hero-area hero-speakers">
            <div class="banner-item overlay" id="slider">
            </div>
         </section>
         <!-- banner end-->

         <!-- ts intro start -->
         <section class="ts-event-outcome event-intro">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="">
                        <div class="outcome-content ts-exp-content">
                           <h2 class="column-title">
                              Most Prestigious Photography/Cinematography Competition in Africa
                           </h2>
                           <p>
                              The Admired in Africa awards aim to recognise great work and provide an accolade for the best work in the industry. The awards are open to all cinematographers and photographers in Africa. In recent years many of the awards/competitions have fallen away leaving a vacuum to recognise great work and incentivise the community. The awards serve as an incentive to inspire and push boundaries and to always strive to excellence.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="outcome-content">
                        <div class="outcome-img overlay">
                           <img class="" src="{{asset('web/images/about/connect_img.jpg')}}" alt="">
                        </div>
                        <h3 class="img-title"><a href="#" class="text-white">connect People</a></h3>
                     </div>
                  </div>

               </div>
            </div>
         </section>
         <!-- ts intro end--> 

         <!-- ts speaker start-->
         <section id="ts-speakers-standard" class="ts-speakers-standard ts-speakers speaker-classic section-bg" style="background-image:url({{asset('web/images/speakers/speaker_bg.png')}})">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <h2 class="section-title text-center">
                        CATEGORIES
                     </h2>
                  </div><!-- col end-->
               </div><!-- row end-->
               <div class="row">
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="200ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/wedding.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Wedding</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="250ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/newborn.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Newborn</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/lifestyle.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Lifestyle</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="350ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/maternity.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Maternity</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/album.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Albums</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="450ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/cinemetography.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Cinemetography</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/wildlife.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Wildlife & Nature</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="550ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/bird.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Bird</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/architecture.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Architecture</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="650ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/fashion.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Fashion</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/creative.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Creative</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="750ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/food.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Food</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/macro.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Macro</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="850ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/fineart.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Fineart</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/street.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Street</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="950ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/landscape.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Landscape</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1000ms">
                     <div class="ts-speaker">
                        <div class="speaker-img">
                           <img class="img-fluid" src="{{asset('web/images/catagories/travel.jpg')}}" alt="">
                           <div class="view-speaker">
                              <a href="">Rules</a>
                              <a href="">Enter</a>
                           </div>
                        </div>
                        <div class="ts-speaker-info">
                           <h3 class="ts-title"><a href="#">Travel</a></h3>
                        </div>
                     </div>
                  </div> <!-- col end-->
               </div><!-- row end-->
            </div><!-- container end-->

            <!-- shap img-->
            <div class="speaker-shap">
               <img class="shap1" src="{{asset('web/images/shap/home_speaker_memphis1.png')}}" alt="">
               <img class="shap2" src="{{asset('web/images/shap/home_speaker_memphis2.png')}}" alt="">
               <img class="shap3" src="{{asset('web/images/shap/home_speaker_memphis3.png')}}" alt="">
            </div>
            <!-- shap img end-->
         </section>
         <!-- ts speaker end-->

         <!-- ts pricing start-->
         <section class="ts-pricing gradient" style="background-image: url({{asset('web/images/pricing/pricing_img.jpg')}})">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <h2 class="section-title white">
                        <span>Pricing Plans</span>
                        Get your Membership
                     </h2>
                  </div><!-- section title end-->
               </div><!-- col end-->
               <!-- row end-->
               <div class="row">
                  <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                     <div class="pricing-item">
                        <img class="pricing-dot " src="{{asset('web/images/pricing/dot.png')}}" alt="">
                        <div class="ts-pricing-box">

                           <div class="ts-pricing-header">
                              <h2 class="ts-pricing-name">Yearly Plan</h2>
                              <h3 class="ts-pricing-price">
                                 <span class="currency">R</span>219
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p class="amount-progres-text">Available tickets for this price</p>
                              <div class="ts-progress">
                                 <div class="ts-progress-inner" style="width: 100%"></div>
                              </div>
                              <p class="ts-pricing-value">365/365</p>
                           </div>
                           <div class="promotional-code">
                              <a href="#" class="btn pricing-btn">Buy Plan</a>
                              <p class="vate-text">All prices exclude 25% VAT</p>
                           </div>
                        </div><!-- ts pricing box-->
                        <img class="pricing-dot1 " src="{{asset('web/images/pricing/dot.png')}}" alt="">
                     </div>
                  </div><!-- col end-->
                  <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                     <div class="pricing-item">
                        <img class="pricing-dot " src="{{asset('web/images/pricing/dot.png')}}" alt="">
                        <div class="ts-pricing-box">
                           <span class="big-dot"></span>
                           <div class="ts-pricing-header">
                              <h2 class="ts-pricing-name">Monthly Plan</h2>
                              <h3 class="ts-pricing-price">
                                 <span class="currency">R</span>399
                              </h3>
                           </div>
                           <div class="ts-pricing-progress">
                              <p class="amount-progres-text">Available tickets for this price</p>
                              <div class="ts-progress">
                                 <div class="ts-progress-inner" style="width: 75%"></div>
                              </div>
                              <p class="ts-pricing-value">30/365</p>
                           </div>
                           <div class="promotional-code">
                              <a href="#" class="btn pricing-btn">Buy Plan</a>
                              <p class="vate-text">All prices exclude 25% VAT</p>
                           </div>
                        </div><!-- ts pricing box-->
                        <img class="pricing-dot1 " src="{{asset('web/images/pricing/dot.png')}}" alt="">
                     </div>
                  </div><!-- col end-->
               </div>
            </div><!-- container end-->
            <div class="speaker-shap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
               <img class="shap2" src="{{asset('web/images/shap/pricing_memphis1.png')}}" alt="">
            </div>
         </section>
         <!-- ts pricing end-->
         <!-- ts blog start-->
         <section class="ts-blog section-bg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <h2 class="section-title">
                        Prize
                     </h2>
                  </div><!-- col end-->
               </div><!-- row end-->
               <div class="row">
                  <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                     <div class="post">
                        <div class="post-media post-image">
                           <a href="#"><img src="{{asset('web/images/blog/blog1.jpg')}}" class="img-fluid" alt=""></a>
                        </div>

                        <div class="post-body">
                           <div class="post-meta">
                              <span class="post-author">
                                <a href="#">BY Admin</a>
                              </span>

                              <div class="post-meta-date">
                                 October 8, 2018
                              </div>
                           </div>
                           <div class="entry-header">
                              <h2 class="entry-title">
                                 <a href="#">Check upcoming Events</a>
                              </h2>
                           </div><!-- header end -->

                           <div class="entry-content">
                              <p>How you transform your business asap technology, consumer,</p>
                           </div>

                           <div class="post-footer">
                              <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                           </div>

                        </div><!-- post-body end -->
                     </div><!-- post end-->
                  </div><!-- col end-->
                  <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                     <div class="post">
                        <div class="post-media post-image">
                           <a href="#"><img src="{{asset('web/images/blog/blog2.jpg')}}" class="img-fluid" alt=""></a>
                        </div>

                        <div class="post-body">
                           <div class="post-meta">
                              <span class="post-author">
                                   <a href="#">BY Admin</a>
                                 </span>

                              <div class="post-meta-date">
                                 October 8, 2018
                              </div>
                           </div>
                           <div class="entry-header">
                              <h2 class="entry-title">
                                 <a href="#">Adding a New Digital</a>
                              </h2>
                           </div><!-- header end -->

                           <div class="entry-content">
                              <p>How you transform your business asap technology, consumer,</p>
                           </div>

                           <div class="post-footer">
                              <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                           </div>

                        </div><!-- post-body end -->
                     </div><!-- post end-->
                  </div><!-- col end-->
                  <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                     <div class="post">
                        <div class="post-media post-image">
                           <a href="#"><img src="{{asset('web/images/blog/blog3.jpg')}}" class="img-fluid" alt=""></a>
                        </div>

                        <div class="post-body">
                           <div class="post-meta">
                              <span class="post-author">
                                      <a href="#">BY Admin</a>
                                    </span>

                              <div class="post-meta-date">
                                 October 8, 2018
                              </div>
                           </div>
                           <div class="entry-header">
                              <h2 class="entry-title">
                                 <a href="#">West Elm At Evantor</a>
                              </h2>
                           </div><!-- header end -->

                           <div class="entry-content">
                              <p>How you transform your business asap technology, consumer,</p>
                           </div>

                           <div class="post-footer">
                              <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                           </div>

                        </div><!-- post-body end -->
                     </div><!-- post end-->
                  </div><!-- col end-->
               </div><!-- row end-->
            </div><!-- container end-->
            <!-- shap image-->
            <div class="speaker-shap">
               <img class="shap2" src="{{asset('web/images/shap/news_memphis2.png')}}" alt="">
               <img class="shap1" src="{{asset('web/images/shap/news_memphis1.png')}}" alt="">
            </div>
         </section>
         <!-- ts blog end-->

         <!-- ts sponsors start-->
         <section class="ts-intro-sponsors" style="background-image: url({{asset('web/images/sponsors/sponsor_img.jpg')}})">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <h2 class="section-title white">
                        <span>Who helps us</span>
                        Our Sponsors
                     </h2><!-- section title end-->
                  </div><!-- col end-->
               </div><!-- row end-->
               <div class="row">
                  <div class="col-lg-12">
                     <div class="sponsors-logo text-center">
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor1.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor2.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor3.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor4.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor5.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor6.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor7.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor8.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('web/images/sponsors/sponsor9.png')}}" alt=""></a>
                        <div class="sponsor-btn text-center">
                           <a href="#" class="btn">Become a Sponsor</a>
                        </div>
                     </div><!-- sponsors logo end-->
                  </div><!-- col end-->
               </div><!-- row end-->
            </div><!-- container end-->
         </section>
         <!-- ts sponsors end-->

         <!-- ts map direction start-->
         <section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <h2 class="column-title">
                        <span>Reach us</span>
                        Get Direction to the
                        Event Hall
                     </h2>

                     <div class="ts-map-tabs">
                        <ul class="nav" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Venue</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Time</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#references" role="tab" data-toggle="tab">How to get there</a>
                           </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content direction-tabs">
                           <div role="tabpanel" class="tab-pane active" id="profile">
                              <div class="direction-tabs-content">
                                 <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                                 <p class="derecttion-vanue">
                                    1Hd- 50, 010 Avenue, NY 90001<br/>
                                       United States
                                 </p>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="contact-info-box">
                                             <h3>Tickets info </h3>
                                             <p><strong>Name:</strong> Ronaldo König</p>
                                             <p><strong>Phone:</strong> 009-215-5595</p>
                                             <p><strong>Email: </strong> info@example.com</p>
                                          </div>

                                       </div>
                                       <div class="col-md-6">
                                          <div class="contact-info-box">
                                             <h3>Programme Details </h3>
                                             <p><strong>Name:</strong> Ronaldo König</p>
                                             <p><strong>Phone:</strong> 009-215-5595</p>
                                             <p><strong>Email: </strong> info@example.com</p>
                                          </div>
                                       </div>
                                    </div><!-- row end-->
                              </div><!-- direction tabs end-->
                           </div><!-- tab pane end-->
                           <div role="tabpanel" class="tab-pane fade" id="buzz">
                              <div class="direction-tabs-content">
                                 <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                                 <p class="derecttion-vanue">
                                    1Hd- 50, 010 Avenue, NY 90001<br/>
                                             United States
                                       </p>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="contact-info-box">
                                             <h3>Tickets info </h3>
                                             <p><strong>Name:</strong> Ronaldo König</p>
                                             <p><strong>Phone:</strong> 009-215-5595</p>
                                             <p><strong>Email: </strong> info@example.com</p>
                                          </div>

                                       </div>
                                       <div class="col-md-6">
                                          <div class="contact-info-box">
                                             <h3>Programme Details </h3>
                                             <p><strong>Name:</strong> Ronaldo König</p>
                                             <p><strong>Phone:</strong> 009-215-5595</p>
                                             <p><strong>Email: </strong> info@example.com</p>
                                          </div>
                                       </div>
                                    </div><!-- row end-->
                              </div><!-- direction tabs end-->
                           </div>
                           <div role="tabpanel" class="tab-pane fade" id="references">
                              <div class="direction-tabs-content">
                                 <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                                 <p class="derecttion-vanue">
                                    1Hd- 50, 010 Avenue, NY 90001<br/>
                                             United States
                                       </p>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="contact-info-box">
                                             <h3>Tickets info </h3>
                                             <p><strong>Name:</strong> Ronaldo König</p>
                                             <p><strong>Phone:</strong> 009-215-5595</p>
                                             <p><strong>Email: </strong> info@example.com</p>
                                          </div>

                                       </div>
                                       <div class="col-md-6">
                                          <div class="contact-info-box">
                                             <h3>Programme Details </h3>
                                             <p><strong>Name:</strong> Ronaldo König</p>
                                             <p><strong>Phone:</strong> 009-215-5595</p>
                                             <p><strong>Email: </strong> info@example.com</p>
                                          </div>
                                       </div>
                                    </div><!-- row end-->
                              </div><!-- direction tabs end-->
                           </div>
                        </div>

                     </div><!-- map tabs end-->

                  </div><!-- col end-->
                  <div class="col-lg-6 offset-lg-1">
                     <div class="ts-map">
                        <div class="mapouter">
                           <div class="gmap_canvas">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9028133968723!2d-73.99208268505396!3d40.74216397932861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a4119ce269%3A0x9dec0c979b575972!2sEataly+NYC+Flatiron!5e0!3m2!1sen!2sbd!4v1541577288827"></iframe>
                           </div>

                        </div>
                     </div>
                  </div>
               </div><!-- col end-->
            </div><!-- container end-->
            <div class="speaker-shap">
               <img class="shap1 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="300ms" src="{{asset('web/images/shap/Direction_memphis3.png')}}"
                  alt="">
               <img class="shap2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="400ms" src="{{asset('web/images/shap/Direction_memphis2.png')}}"
                  alt="">
               <img class="shap3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="500ms" src="{{asset('web/images/shap/Direction_memphis4.png')}}"
                  alt="">
               <img class="shap4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms" src="{{asset('web/images/shap/Direction_memphis1.png')}}"
                  alt="">
            </div>
         </section>
         <!-- ts map direction end-->

         <style>
         #slider { background-image:url({{asset('web/images/index/slider1.jpg')}}); transition: 2s ease-in-out }
         #b1 { background-image:url({{asset('web/images/index/slider2.jpg')}}); transition: .9s ease-in-out }
         #b2 { background-image:url({{asset('web/images/index/slider3.jpg')}}); transition: .9s ease-in-out }
         #b3 { background-image:url({{asset('web/images/index/slider1.jpg')}}); transition: .9s ease-in-out }
         </style>
         <script>
            function run(interval, frames) {
                var int = 1;
                var div_id = "slider";
                
                function func() {
                     var div=document.getElementById(div_id);
                     div_id = "b"+int;
                     console.log(int);
                   div.id = "b"+int;
                    int++;
                    if(int === frames) { int = 1; }
                }
                
                var swap = window.setInterval(func, interval);
            }

            run(5000, 3); //milliseconds, frames
         </script>
      @endsection   

      