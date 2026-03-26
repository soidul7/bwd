<template>
    <MetaTag :title="title" :description="description"/>
    <NavBar/>

     <div class="banner-content" style="background-image: url('https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg?cs=srgb&dl=pexels-andre-furtado-1264210.jpg&fm=jpg');">
      <div class="hero-text">
        <h2><strong>Evolve Better As You Grow Bigger</strong></h2>
        <p>Set Digital Trends With Precision</p>
        <div class="hero-button-sctn">
         
           <button class="btn" @click="modelShow()">Let's Work Together</button>
         
        </div>
      </div>
      <div class="shape-float">
        <img class="img-posin-1" src="frontend/images/banner/Shape1.png" alt="">
        <img class="img-posin-2" src="frontend/images/banner/Shape2.png" alt="">
      </div>
     </div>
     <div class="add-company">
       <div class="container">
         <h5 class="hd-title">Trusted By Dynamic Companies</h5>
          <div class="comp-slide">
            <div class="comps-carousel ">
                <Carousel :autoplay="2000"  :settings="settings" :breakpoints="breakpoints1">
                <Slide v-for="(slide) in images" :key="slide">
                <div class="carousel__item">
                    <div class="item">
                        <div class="dtl-bnr">
                                <img :src="slide">
                        </div>
                    </div>
                </div>
               

                </Slide>

                <template #addons>
                
                </template>
                </Carousel>
                
            </div>
          </div>
       </div>
     </div>
     <div class="higher-roi">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-md-12">
             <div class="article-side">
               <h2>Meet For <strong>Higher ROI</strong></h2>
               <p>Unleash Your Potential To Achieve Your Goal Through Smart Adaptability</p>
                <div class="lier-list">
                  <ul>
                    <li><span class="circle"></span> We have a perfect mix of youth and experience to MEET client’s expectation.</li>
                    <li><span class="circle"></span> We use brainstorming ideas to generate HIGHER traffic.</li>
                  </ul>
                </div>
                <button class="btn" @click="modelShow()">Talk to Experts</button>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-md-12">
             <div class="bner-post">
               <img class="bg-dot-img" src="frontend/images/meet/dots.png" alt="">
               <img class="w-100" src="frontend/images/meet/meet.png" alt="">
             </div>
           </div>
         </div>
       </div>
     </div>
    <!-- Services On Plate start here -->
    <div class="services-plate-sect">
    <div class="container">
        <div class="heading-title">
        <h2>Services On <strong>Plate</strong></h2>
        <p>Since our inception, we've offered a diverse set of services to our customers. Both eCommerce and B2B firms can benefit from our services. Our experts are ready to take care of your challenges with all the right ingredients</p>
        </div>

        <div class="card-wrapper">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="relyp-item">
                <div class="card-item">
                    <img src="frontend/images/service/service1.png" alt="">
                    <h4>Digital Marketing</h4>
                    <p>With a well-thought-out plan, you can raise brand awareness and create a niche.</p>
                    <div class="overlay">
                        
                        <router-link to="/digital-marketing" @click="moveUp">
                            <button class="btn ex-btn">
                                Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                </svg>
                            </button>
                        </router-link>
                        
                    </div>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="relyp-item">
                <div class="card-item">
                    <img src="frontend/images/service/service2.png" alt="">
                    <h4>Email Marketing</h4>
                    <p>We convert your customers into brand ambassadors through email marketing.</p>
                    
                    <div class="overlay">
                        <router-link to="/email-marketing" @click="moveUp">
                        <button class="btn ex-btn">Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></button>
                        </router-link>
                    </div>
    
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="relyp-item">
                <div class="card-item">
                <img src="frontend/images/service/service3.png" alt="">
                <h4>SEO</h4>
                <p>With exceptional content and SEO, we assist businesses in achieving outrageous visitor growth.</p>

                <div class="overlay">
                    <router-link to="/seo" @click="moveUp">
                    <button class="btn ex-btn">Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                    </svg></button>
                    </router-link>
                </div>

                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="relyp-item">
                    <div class="card-item">
                <img src="frontend/images/service/service4.png" alt="">
                <h4>UI/UX Strategy</h4>
                <p>Are you interested in learning more about how our UX/UI work might benefit your project?</p>

                <div class="overlay" @click="moveUp">
                    <router-link to="/ui-ux-strategy">
                        <button class="btn ex-btn">Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></button>
                    </router-link>
                </div>
                

            </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            
            <div class="relyp-item">
                    <div class="card-item">
                <img src="frontend/images/service/service5.png" alt="">
                <h4>Pay-Per-Click</h4>
                <p>Get a personalized PPC audit, and DEVISE STRATEGIES by conversing with an expert about how we can boost your revenue.</p>

                <div class="overlay">
                    <router-link to="/pay-per-click" @click="moveUp">
                <button class="btn ex-btn">Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></button>
                </router-link>
                </div>


            </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            
            <div class="relyp-item">
                <div class="card-item">
                <img src="frontend/images/service/service6.png" alt="">
                <h4>Graphic Design</h4>
                <p>We use visual design to create brands that are immediately recognizable.</p>

                <div class="overlay">
                    <router-link to="/graphic-design" @click="moveUp">
                <button class="btn ex-btn">Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></button>
                </router-link>
                </div>

            </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            
            <div class="relyp-item">
                <div class="card-item">
                <img src="frontend/images/service/service7.png" alt="">
                <h4>Web Design</h4>
                <p>It takes a fine art form to engineer a customer relationship. </p>

                <div class="overlay">
                    <router-link to="/web-design" @click="moveUp">
                <button class="btn ex-btn">Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></button>
                </router-link>
                </div>


            </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="relyp-item">
                <div class="card-item">
                <img src="frontend/images/service/service8.png" alt="">
                <h4>Web Development</h4>
                <p>It's important to think about trust, confidence, affinity, familiarity, and beauty.</p>

                <div class="overlay">
                    <router-link to="/web-development" @click="moveUp">
                <button class="btn ex-btn">Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></button>
                </router-link>
                </div>


            </div>
            </div>
            </div>
            
        </div>
        </div>
    </div>
    </div>
    <!-- Services On Plate end -->
     <div class="cracked-teams">
       <div class="container">
         <div class="card-area">
           <div class="row">
             <div class="col-lg-6">
               <div class="text-area">
                 <h2>We’ve unzipped the key to success for your <span>SUSTAINABLE Growth</span></h2>
                 <p>Our experts burn midnight oil to help analyze, rectify, and accentuate your dreams to reality.</p>
               </div>
             </div>
             <div class="col-lg-6">
              <div class="check-list">
                <ul>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#D43F33" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>Be at ease to communicate stress-free 
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#D43F33" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>Collaborate with people who are familiar with market-leading approaches 
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#D43F33" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>Manage your team with flexible partners  
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#D43F33" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>Consult to convert with industry best resources 
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#D43F33" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>Commit yourself for a healthy discussion with our experts 
                  </li>
                </ul>
                <button class="btn" @click="modelShow()">Get in Touch</button>
              </div>
             </div>
           </div>


           <div class="ftr-btn-area">
             <router-link to="/portfolio"  @click="moveUp">View Portfolio <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></router-link>
             <router-link to="/email-marketing"  @click="moveUp">Email Marketing Success <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></router-link>
             <router-link to="/ui-ux-strategy"  @click="moveUp"> UI/UX Rebranding <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></router-link>
             <router-link to="/contact-us"  @click="moveUp">Talk to us <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></router-link>
           </div>

         </div>
       </div>
     </div>
     <div class="proven-section">
       <div class="container">
        <div class="heading-title">
          <h2>Proven <strong>Process</strong></h2>
          <p>We research market trends and client demographics. Our staff is innovative, strategic, and equipped with the newest skills and resources to be a major game changer in the web-based services industry.</p>
        </div>
       </div>

       
       <div class="container bg-dot-at">
        <div class="circle-content">
          <div class="row">
            <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6">
              <div class="circle-ar">
                <div class="item">
                  <img src="frontend/images/process/process5.png" alt="">
                  <span class="item-no">01</span>
                </div>
              </div>

              <div class="dtl-text"><p>Share Your Thoughts With The Highly-Experienced Professionals </p></div>
            </div>
            <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6">
              <div class="circle-ar">
                <div class="item">
                  <img src="frontend/images/process/process2.png" alt="">
                  <span class="item-no">02</span>
                </div>
              </div>
              <div class="dtl-text"><p>We Assign The Finest Staff To Your Projects</p></div>
            </div>
            <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6">
              <div class="circle-ar">
                <div class="item">
                  <img src="frontend/images/process/process3.png" alt="">
                  <span class="item-no">03</span>
                </div>
              </div>
              <div class="dtl-text"><p>Setting Milestones With Best Industry Practices </p></div>
            </div>
            <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6">
              <div class="circle-ar">
                <div class="item">
                  <img src="frontend/images/process/process4.png" alt="">
                  <span class="item-no">04</span>
                </div>
              </div>
              <div class="dtl-text"><p>Keep an Eye On The Metrics And Plan Your Next Move</p></div>
            </div>
          </div>
        </div>

       </div>

   

     </div>
    <div class="excellent-company-section">
      <div class="container">
    

        <div class="overdi-img">
          <div class="ext-round">
            <div class="row gx-0">
              <div class="col-lg-6">
                <div class="slide-area">
                <!-- <Carousel :autoplay="2000" :settings="settings" :breakpoints="breakpoints2">
                <Slide v-for="(slide) in images" :key="slide"> -->

                   <div class="item">
                      <div class="text-area">
                        <img class="quotation-img" src="frontend/images/video/quotation.png" alt="">
                        <h4>Excellent company!</h4>
                        <p>My confidence allows me to not give up under any circumstances. The zeal to work harder has boosted me to overcome challenges and achieve different milestones. Providing authentic deliverables at a competitive cost has been a part of Big Wave Development LLC’s activity. Our team has worked cohesively to transform various companies to achieve their targets.</p>
                        <h3>Mike Boggus <br> <span>(Florida, USA)</span> </h3>
                      </div>
                    </div>
                    <!-- <div class="item">
                      <div class="text-area">
                        <img class="quotation-img" src="frontend/images/video/quotation.png" alt="">
                        <h4>Excellent company!</h4>
                        <p>We have been doing campaigns with Big Wave Development and are very impressed with how David and the company as a whole has handled our account. From beginning to end, he is very prompt and helpful in all aspects of setup and follow through. Excellent company!</p>
                        <h3>Marianne Narusiewics <br> <span>(Lomita, CA)</span> </h3>
                      </div>
                    </div>
                    <div class="item">
                      <div class="text-area">
                        <img class="quotation-img" src="frontend/images/video/quotation.png" alt="">
                        <h4>Excellent company!</h4>
                        <p>We have been doing campaigns with Big Wave Development and are very impressed with how David and the company as a whole has handled our account. From beginning to end, he is very prompt and helpful in all aspects of setup and follow through. Excellent company!</p>
                        <h3>Marianne Narusiewics <br> <span>(Lomita, CA)</span> </h3>
                      </div>
                    </div> -->
               <!-- </Slide>
 
                <template #addons>
                
                </template>
                </Carousel>     -->

                  </div>
                </div>
              
              <div class="col-lg-6">
    
                <div class="video-conts">
                  <div class="thumbnails" id="pll-vid" >
                          
                      <!-- <iframe class="iframeYT" style="" src="https://www.youtube.com/embed/bTqVqk7FSmY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <!-- <video controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"></video> -->
                    <video controls crossorigin playsinline >
                      <source src="frontend/images/video/Mike_Boggus_video.mp4" type="video/mp4" size="576">
                   </video>
                   
                   <!-- <button v-on:click="isHidden = true" type="button" class="plyr__control_overlaid show" id="pll-vid-icc" data-plyr="play" aria-label="Play">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                        </svg>
                    </button>
                    <button v-on:click="isHidden = !isHidden" type="button" class="plyr__control_overlaid show" id="pll-vid-icc" data-plyr="play" aria-label="Play">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                        </svg>
                    </button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="grow-business">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="text-area">
              <h2>Ready to <strong>Grow Your Business?</strong></h2>
              <p>Contact us to work with a result-driven digital marketing agency</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="btn-sect">
              <a @click="modelShow()" class="btn get-free">
                Get Free Proposal
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
     <div class="blog-news-sect">
       <div class="container">
         <div class="heading-title">
           <h2>Latest <strong>Blog & News</strong></h2>
         </div>

         <div class="row">
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" v-for="(blog) in blogList" v-bind:key="blog.id" >
             <div class="card-item">
               <img :src="blog.rcnt_article_image" alt="">
               <div class="atle-text">
                 <div class="date">
                   <img src="frontend/images/blognews/Calendar-icon.svg" alt="">
                   <!-- <p>April 12, 2022</p> -->
                   <p>{{moment(blog.date).startOf("month").format('MMMM')}} {{moment(blog.date).startOf("day").format('DD')}}, {{moment(blog.date).startOf("year").format('YYYY')}}</p>
                 </div>
                 <a @click="moveUp(),blogDetails(blog.slug)">
                 <h4>{{blog.rcnt_title}}</h4>
                 </a>
                 <span class="btn" @click="moveUp(),blogDetails(blog.rcnt_slug)">
                   Read More
                 </span>
               </div>
             </div>
           </div>
           <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <div class="card-item">
               <img src="frontend/images/blognews/Rectangle2.png" alt="">
               <div class="atle-text">
                 <div class="date">
                   <img src="frontend/images/blognews/Calendar-icon.svg" alt="">
                   <p>April 12, 2022</p>
                 </div>
                 <router-link to="/bank-on-new-techniques-to-promote-gaming-website" @click="moveUp">
                 <h4>Bank on New Techniques to Promote Gaming Website</h4>
                 </router-link>
                 <span class="btn" @click="moveUp(),blogDetails(2)">
                   Read More
                 </span>
               </div>
             </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <div class="card-item">
               <img src="frontend/images/blognews/Rectangle3.png" alt="">
               <div class="atle-text">
                 <div class="date">
                   <img src="frontend/images/blognews/Calendar-icon.svg" alt="">
                   <p>April 12, 2022</p>
                 </div>
                 <router-link to="/brandify-your-business-through-a-proper-graphic-design" @click="moveUp">
                 <h4>Brandify Your Business Through A Proper Graphic Design</h4>
                 </router-link>
                 <span class="btn" @click="moveUp(),blogDetails(3)">
                   Read More
                 </span>
               </div>
             </div>
           </div> -->
         </div>
         <!-- <div class="views-gk">
           <router-link to="/blogpage" @click="moveUp">View All</router-link>
         </div> -->

       </div>
     </div>
    <StayConectedWith/>
    <FooTer />
    <transition name="pop" appear>
        <PopUp v-if="showPopup" :callback="clickClose"/>
    </transition>
    
</template>

<script>
import { BASE_URL_API,BASE_URL_API2 ,BASE_URL_IMAGE, BASE_URL_API_DATA} from '../config'
import axios from 'axios'
import FooTer from '../views/FooTer.vue'
import NavBar from '../views/NavBar.vue'
import MetaTag from '../components/MetaTag.vue'
import PopUp from '../views/PopUp.vue'
import StayConectedWith from '../components/StayConectedWith.vue'
import { defineComponent } from 'vue';
import { Carousel, Navigation, Slide } from 'vue3-carousel';
import moment from "moment";

import 'vue3-carousel/dist/carousel.css';

export default defineComponent({
  name: 'Breakpoints',
  components: {
    Carousel,
    Slide,
    Navigation,
    NavBar,
    FooTer,
    StayConectedWith,
    PopUp,
    MetaTag
  },
  data: () => ({
    
    // carousel settings
    settings: {
      itemsToShow: 1,
      snapAlign: 'center',
    },
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints1: {
      // 700px and up
      700: {
        itemsToShow: 3.5,
        snapAlign: 'center',
      },
      // 1024 and up
      1024: {
        itemsToShow: 5,
        snapAlign: 'start',
      },
    },
     breakpoints2: {
      // 700px and up
      700: {
        itemsToShow: 3.5,
        snapAlign: 'center',
      },
      // 1024 and up
      1024: {
        itemsToShow: 10,
        snapAlign: 'start',
      },
    },
    
      images: [
            "frontend/images/client/Logos1.png", 
            "frontend/images/client/Logos2.png", 
            "frontend/images/client/Logos3.png", 
            "frontend/images/client/Logos5.png",
            "frontend/images/client/Logos1.png", 
            "frontend/images/client/Logos2.png",
            "frontend/images/client/Logos3.png", 
            "frontend/images/client/Logos5.png",
            "frontend/images/client/Logos1.png", 
            "frontend/images/client/Logos2.png", 
            "frontend/images/client/Logos3.png", 
            "frontend/images/client/Logos5.png",
            "frontend/images/client/Logos1.png", 
            "frontend/images/client/Logos2.png", 
            "frontend/images/client/Logos3.png",  
            "frontend/images/client/Logos5.png",
            "frontend/images/client/Logos1.png", 
            "frontend/images/client/Logos2.png", 
            "frontend/images/client/Logos3.png",  
            "frontend/images/client/Logos5.png"
    ],
    showPopup:false,
    title:"Big Wave Development LLC",
    description:"We'll go into your data, examine your digital footprint, and provide recommendations to help you achieve your objectives with custom programmes.",
    blogList:[],
    image_url:'',
    moment: moment,
  }),
  async created(){
        this.image_url = BASE_URL_IMAGE+'uploads/';
        
        const response = await axios.get(BASE_URL_API_DATA+'get_recent_blog_dada');
        // console.log("recent_blog_data:",response.data);
        // const response = {"listing":[{"id":71,"category_id":"29,31","title":"Think Of WordPress Web Development Agency In St. Petersburg","content":"<p>Startups need a website that is both completely functional and interesting. For the website to succeed, youll need a skilled web development team, whether it serves as a lead generator or a platform that offers services to clients.<br>A web development company may assist you with more than just your online presence, from back-end to full-stack and more. They can, among other things, develop apps or assist with data management for e-commerce. In conclusion, if you can manage your lead generation and other marketing responsibilities, a team of highly skilled developers can be wonderful for your company.&nbsp;</p>\r\n<p><br>WordPress<br>Small companies and online stores of all sizes can use WordPress for developing websites. It is flexible, so you can do anything to customize your thought process. The sites built on WP are mobile-responsive and add great value. Since it is an open-source platform, everyone can access the code. That implies that any problems and hazards may be seen and fixed right away.<br>SEO<br>The fierce competition among businesses in the digital world might provide you with the competitive edge you need. However, search engine optimization mostly depends on the design of your website.<br>An utterly optimized website is key to effective web construction and helps draw in highly beneficial search engine traffic. Keyword searches in Google and other search engines are fundamental that reflect how consumers find information. A websites ability to attract visitors will be greatly aided by the use of relevant keywords and themes.<br>Your business will benefit from increased website traffic, which can help you with the following:<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Assess your marketings ROI to gauge its effectiveness.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;To make wise decisions, gain knowledge about your audience.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Boost your search engine optimization and authority.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Increase conversions, provide more leads, and ultimately attract more consumers.<br>To improve your websites search engine ranks and draw in more people, you can use a variety of SEO techniques on each page.<br>In addition to coding and quality control, building a website entails other factors. The vision and business plan of a firm are taken into account when developing a website by reputable companies.<br>They put into practice the techniques based on the clients aims and objectives as well as the demands of the clients customers. Web development process should be a natural part of growing your organization rather than an afterthought.&nbsp;<br>It makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer.</p>","summary":"Web development process should be a natural part of growing your organization rather than an afterthought. \r\nIt makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer","image":"OG-Banner-12.jpg","date":"2022-09-21","slug":"think-of-wordpress-web-development-agency-in-st.-petersburg","view_count":null,"status":1,"meta_title":"Think Of WordPress Web Development Agency In St. Petersburg","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development","meta_description":"Web development process should be a natural part of growing your organization rather than an afterthought. \r\nIt makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer.","url_handle":"","created_by":"Mick","created_at":"2022-8-19 7:25:56","modified_at":"21-8-2022"},{"id":1,"category_id":"1,2","title":"Amplify business through social media marketing","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Concept</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">The way businesses locate and engage with their audiences has changed dramatically as a result of social media. Given that 3.5 billion individuals (almost half of the worlds population) use it on a daily basis, its no surprise that 73 percent of marketers believe social media have an influence in persuading clients.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">In todays world, social media platforms are the most important tools for businesses and startups to connect with their customers, market their products, and publicize themselves. Social media networks may assist company increase revenue and generate leads.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Big Wave Development (BWD) and its plethora of activities</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">At BWD, WORK always starts with WHY. Technology has no chance against a missions passion in the battle for brand domination. That&rsquo;s the reason for existence of &ldquo;WHY&rdquo;, with purpose comes zeal, and zeal is what motivates us. What&rsquo;s your motivation?</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Its no easy task to stand out in the crowded tech industry. We thrive to build unique and bold ideas as a part of work culture to penetrate <strong>social media marketing</strong> platform. We make relentless research to match up to your expectation.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">You get a thorough, well-rounded effort when you hire us for social media promotion. All programs are tailored to your specific requirements, but they all include the following:</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Account Management Facility: Well handle all aspect of your social media advertising campaigns, starting with determining the best platforms for your target demographic and developing a customized approach. Give us your old campaigns to revamp, or well create new accounts for you.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Innovative Technologies: Were always experimenting with new services and unique ideas to ensure that our clients have access to cutting-edge approaches before their competitors do.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">It would be silly to expect benefit from <strong>social media marketing</strong> overnight. Indeed, establishing a presence and demonstrating a ROI will most certainly take years. However, by using social media properly, it would help in developing long-term relationships that will outlast any advertisements yo&nbsp;u may run.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Ad Creation and Testing: After identifying target audience, the next step would be to send message and match their suitability. The most important - and enjoyable - aspect of any <strong>social media marketing</strong> campaign is audience testing. To find the perfect client, you have to use umpteen data than you can think.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Optimization: We provide testing offers, and develop landing pages for optimization services. Generating campaigns for higher leads is also a part of our work process.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Updates and Reporting: We always monitor, and look for constant updates to pace up with the changing environment. This keeps us motivated to serve better.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Be it any platform such as Facebook, LinkedIn, Instagram, and others, we always look to serve more and better for our clients. Well use the same adaptability to help you make the greatest decisions for your company based on your objectives.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Be ready to fly high with us at 7901 4th ST N STE 8022, St. Petersburg, FL 33702 or call +1 727 300 6264 for further clarification.</span></p>","summary":"BWD can use social media advertising services and maximize a great return on your investment because of the depth and breadth of our knowledge and experience.","image":"amplify_business.jpg","date":"2022-05-27","slug":"amplify-business-through-social-media-marketing","view_count":11,"status":1,"meta_title":"Amplify business through social media marketing","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"BWD can use social media advertising services and maximize a great return on your investment because of the depth and breadth of our knowledge and experience.","url_handle":"undefined","created_by":"Mike Boggus","created_at":"2022-05-27","modified_at":"14-6-2022"},{"id":2,"category_id":"31","title":"Bank on New Techniques to Promote Gaming Website","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Introduction</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Building an online gaming site requires flawless content, a market gap, and social media management. As the gaming community now has access to a wealth of knowledge, it is up to you to break through the ceiling and conquer the online world.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It&rsquo;s difficult to start a <strong>gaming website</strong>, but it may be quite beneficial, especially if you want to build a solid portfolio. Keeping up with current and upcoming gaming and technology innovations is the most effective way of addressing information demand.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Ways to Promote</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">There can be several ways that can be adapted to promote <strong>gaming websites</strong>. Some of them are: Optimization: There are a plethora of paid and free keyword research tools accessible online to assist you in your hunt for less competitive and high search volume keywords to employ in creating content and promoting your <strong>gaming website</strong>. Additionally, image optimization through the use of high-quality images will aid you in attracting a larger audience.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Social Media Campaigns: It includes campaigns on various social media platforms such as Facebook, Instagram, Twitter, and similar types. Almost everyone on the planet spends a considerable period every day on social media, so make sure your game website includes both Facebook and Instagram profiles.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Unique Content: There are numerous methods for creating original content. If you have the abilities, consider infusing your ideas and describing how it works through, which will help to increase the number of people that visit your<strong> gaming website</strong>. Discussing various topics related to winning strategies, latest features, and various upcoming contests can help draw participants. Brand Influencers: In today&rsquo;s environment, influencers are akin to celebrity endorsements. Having the proper individual advertise your <strong>gaming website</strong> to the right demographic can have a major impact on how well it performs, and this strategy can propel your website to new heights. It can attract more participation.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Trendy Approach: In the online gaming world, there&rsquo;s always something significant going on, and a new game challenge pops up every single day. Millions of players use search engines to locate solutions or whatever is trending as a result of these overnight escalating demands. Similarly, apps can be downloaded from play store and used to meet the demand of the gamers. Verbal Approach: Family and friends can be utilized through this mode as well. These are also key traffic sources for your site. Focus on building relationships with your subscribers and followers to acquire favorable feedback and referrals. You can also market your business by participating in relevant forums or leaving comments on relevant blog posts without coming across as overtly commercial.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Conclusion</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It&rsquo;s fine to market your <strong>gaming website</strong> over the internet, and keep your branding consistent. You need to be immediately recognizable. Use the same color scheme, language, and voice tone as well as identical thumbnails. When it comes to branding, it&rsquo;s not just about the title and looks of your <strong>gaming website</strong>; it&rsquo;s about all of the advertising imagery as well. To ensure that people are familiar with you, your appearance, and your game website, put your brand on everything you do in your marketing effort.</span></p>","summary":"Developing new techniques to promote your gaming website can be helpful once you know the tricks.","image":"gaming_site_Techniques.jpg","date":"2022-05-26","slug":"bank-on-new-techniques-to-promote-gaming-website","view_count":4,"status":1,"meta_title":"Bank on New Techniques to Promote Gaming Website","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Developing new techniques to promote your gaming website can be helpful once you know the tricks.","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-26","modified_at":"12-6-2022"}]}
        //this.blogList = response.data.listing;
        this.blogList = response.data.recent_blog_data;
        //this.getData();
  },
  methods:{
    modelShow(){
      //alert("HII",this.showPopup);
      this.showPopup=true;
    },
    clickClose(){
      //alert(id);
      //alert("hiiii Out");
      document.documentElement.style.overflow = 'hidden'
      this.showPopup=false;
    },
    moveUp(){
           window.scrollTo(0,0);
    },
    blogDetails(val){
        //console.log("ALERT :", val);
        //alert(val);
            this.$router.push({
            name: "blog-details",
            params: { slug: val },
        });
    }
  }
  
});
</script>

<style scoped>
   *{
    font-family: 'Inter', sans-serif;
}
*,
*::before,
*::after {
  box-sizing: border-box;
}
ul{
    list-style: none;
}
img,
svg {
    vertical-align: middle;
}
a{
    text-decoration: none;
}
.iframeYT {
    width: 100%;
    height: auto;
    

}
video{
  width: 100%;
}
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

/* navbar start */

.banner-content{
    margin-top: 84px;
    position: relative;
}
.banner-content {
    height: calc(100vh - 82px);
    min-height: 500px;
    max-height: 1080px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.banner-content .hero-text {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.banner-content .hero-text h2{
    font-weight: 300;
    font-size: 67px;
    color: #000000;
    line-height: 72px;
}
.banner-content .hero-text h2 strong{
    font-weight: 700;
}
.banner-content .hero-text p{
    color: #D43F33;
    font-weight: 400;
    font-size: 32px;
    margin: 25px 0 65px;
}
.banner-content .hero-text .hero-button-sctn {
    max-width: 399px;
    width: 100%;
    height: 132px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('@/assets/images/banner/dots.png');
    background-size: cover;
    z-index: 1;
    background-repeat: no-repeat;
}
.banner-content .hero-text .hero-button-sctn .btn{
    background: #FFFFFF;
    border: 1px solid #000000;
    border-radius: 50px;
    padding: 17px 74px;
    position: relative;
    overflow: hidden;
    font-size: 21px;
}
.banner-content .hero-text .hero-button-sctn .btn::after {
    border: 1px solid transparent;
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    transition: 0.5s;
    transition-timing-function: ease;
    transform: scaleX(0);
    border-radius: 6px;
    transform-origin: left center;
    transition-timing-function: cubic-bezier(0.9, 1.6, 0.1, 0.6);
}
.banner-content .hero-text .hero-button-sctn .btn:hover::after {
    color: #004965;
    transform: scaleX(1);
    top: 0;
    background: #D43F33;
}
.banner-content .hero-text .hero-button-sctn .btn:hover{
    border-color: #D43F33;
    color: #fff;
    background: transparent;
}
.shape-float img{
    display: block;
}
.shape-float img.img-posin-1{
    position: absolute;
    right: 0px;
}
.shape-float img.img-posin-2{
    position: absolute;
    bottom: 0;
    left: 22px;
    width: 22%;
}

/* banner end  */




/* Conpany Slide ads start here  */

.add-company{
    background: #000000;
    padding: 32px 0;
}
.add-company .hd-title{
    font-weight: 400;
    font-size: 19px;
    text-align: center;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    margin: 0 0 40px;
}
.add-company .item .dtl-bnr img{
    width: auto;
    margin: 0 auto;
}

/* Conpany Slide ads end  */




/* Higher ROI start here  */

.higher-roi{
    margin-top: 100px;
}
.higher-roi .article-side{
    margin-top: 48px;
}
.higher-roi .article-side h2{
    font-weight: 300;
    font-size: 51px;
    color: #000000;
}
.higher-roi .article-side h2 strong{
    font-weight: 700;
}
.higher-roi .article-side p{
    font-weight: 300;
    font-size: 25px;
    color: #000000;
    margin: 30px 0;
}
.higher-roi .article-side .lier-list ul li{
    font-weight: 400;
    font-size: 16px;
    color: #353535;
    display: flex;
    margin-bottom: 20px;
    align-items: baseline;
} 
.higher-roi .article-side .lier-list ul li:last-child{
    margin-bottom: 0;
}
.higher-roi .article-side .lier-list ul li span{
    border: 1px solid #000000;
    border-radius: 50%;
    width: 11px;
    height: 11px;
    flex-shrink: 0;
    margin-right: 10px;
    display: inline-block;
}
.higher-roi .article-side .lier-list{
    margin-bottom: 50px;
}
.higher-roi .article-side .btn{
    font-weight: 400;
    font-size: 20px;
    text-align: center;
    letter-spacing: 0.01em;
    color: #000000;
    border: 1px solid #000000;
    border-radius: 50px;
    padding: 14px 49px;
    position: relative;
    overflow: hidden;
}
.higher-roi .article-side .btn::after {
    border: 1px solid transparent;
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    transition: 0.5s;
    transition-timing-function: ease;
    transform: scaleX(0);
    border-radius: 6px;
    transform-origin: left center;
    transition-timing-function: cubic-bezier(0.9, 1.6, 0.1, 0.6);
}
.higher-roi .article-side .btn:hover::after {
    color: #004965;
    transform: scaleX(1);
    top: 0;
    background: #D43F33;
}
.higher-roi .article-side .btn:hover{
    border-color: #D43F33;
    color: #FFFFFF;
}
.higher-roi .bner-post{
    position: relative;
}
.higher-roi .bner-post .bg-dot-img{
    position: absolute;
    width: 414px;
    z-index: -1;
}
.higher-roi .bner-post img.w-100{
    width: 100%;
    display: block;
}

/* Higher ROI end  */




/* Services On Plate start here  */

.services-plate-sect {
    padding: 110px 0 144px;
    margin-top: 140px;
    background: #F5F4EF;
}
.services-plate-sect .heading-title{
    text-align: center;
    max-width: 906px;
    width: 100%;
    margin: 0 auto;
}
.services-plate-sect .heading-title h2{
    font-weight: 300;
    font-size: 52px;
    color: #000000;
    margin-bottom: 30px;
}
.services-plate-sect .heading-title h2 strong{
    font-weight: 700;
}
.services-plate-sect .heading-title p{
    font-weight: 400;
    font-size: 16px;
    color: #353535;
    line-height: 23px;
}
.services-plate-sect .card-wrapper {
    margin-top: 110px;
    transition: .3s ease-out;
}
.services-plate-sect .card-wrapper .gy-3{
    row-gap: 75px;
}
.services-plate-sect .card-wrapper .card-item{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    text-align: center;
    height: 100%;
    position: relative;
    padding: 0 13px 34px;
    transition: .3s ease-out;
}
.services-plate-sect .card-wrapper .card-item img{
    position: relative;
    height: 80px;
    top: -20px;
}
.services-plate-sect .card-wrapper .card-item h4{
    font-weight: 700;
    font-size: 20px;
    color: #000000;
    margin: 15px 0 20px;
}
.services-plate-sect .card-wrapper .card-item p{
    font-weight: 400;
    font-size: 15.5px;
    text-align: center;
    color: #353535;
    line-height: 21px;
    margin-bottom: 10px;
}
.services-plate-sect .card-wrapper .card-item .overlay{
    width: 100%;
    text-align: center;
    display: none;
}
.services-plate-sect .card-wrapper .card-item .ex-btn{
    color: #000000;
    font-weight: 400;
    padding: 0;
    line-height: 1;
    padding: 7px 22px;
    border-radius: 50px;
    position: relative;
    overflow: hidden;
    font-size: 14px;
    border: 1px solid #000000;
}
.services-plate-sect .card-wrapper .card-item .ex-btn::after {
    border: 1px solid transparent;
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    transition: 0.5s;
    transition-timing-function: ease;
    transform: scaleX(0);
    border-radius: 50px;
    transform-origin: left center;
    transition-timing-function: cubic-bezier(0.9, 1.6, 0.1, 0.6);
}
.services-plate-sect .card-wrapper .card-item .ex-btn:hover{
    border-color: #D43F33;
    color: #fff;
}
.services-plate-sect .card-wrapper .card-item .ex-btn:hover::after {
    color: #004965;
    transform: scaleX(1);
    top: 0;
    background: #D43F33;
}
.services-plate-sect .card-wrapper .card-item:hover{
    box-shadow: 0px 4px 50px rgb(177 177 177 / 62%);
    position: absolute;
    transform: scale(1.02, 1.05);
    height: auto;
}
.services-plate-sect .card-wrapper .relyp-item{
    position: relative;
    min-height: 300px;
    height: 100%;
}
.services-plate-sect .card-wrapper .card-item:hover p{
    margin-bottom: 20px;
}
.services-plate-sect .card-wrapper .card-item:hover .overlay{
   display: block;
}

/* cracked remote teams start here  */

.cracked-teams .card-area{
    background: #000000;
    padding-top: 80px;
    position: relative;
    border-radius: 10px;
}
.cracked-teams .card-area::after {
    content: '';
    position: absolute;
    width: 191px;
    height: 190px;
    background-image: url('@/assets/images/process/remote-circle.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    bottom: -65px;
    left: -48px;
    z-index: -1;
}
.cracked-teams .card-area .text-area{
    padding-left: 70px;
}
.cracked-teams .card-area .text-area h2{
    font-weight: 600;
    font-size: 65px;
    color: #FFFFFF;
    line-height: 1;
    margin-bottom: 40px;
}
.cracked-teams .card-area .text-area h2 span{
    font-weight: 600;
    color: #D43F33;
}
.cracked-teams .card-area .text-area p{
    font-weight: 400;
    font-size: 20px;
    color: #B5B5B5;
    line-height: 1.1;
}
.cracked-teams .card-area .check-list{
    padding: 0 58px 0 45px;
}
.cracked-teams .card-area .check-list ul li{
    background: #FFFFFF;
    border-radius: 10px;
    font-weight: 600;
    font-size: 17px;
    padding: 21.5px 0 21.5px 26px;
    color: #000000;
    margin-bottom: 20px;
    display: flex;
}
.cracked-teams .card-area .check-list ul li svg{
    margin-right: 12px;
    flex-shrink: 0;
}
.cracked-teams .card-area .check-list .btn{
    font-weight: 400;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    background: #D43F33;
    border: 1px solid #D43F33;
    border-radius: 50px;
    padding: 14px 41px;
    margin-top: 10px;
}
.cracked-teams .card-area .check-list .btn:hover{
    background: #a92920;
}
.cracked-teams .card-area .ftr-btn-area{
    display: flex;
    margin-top: 95px;
    overflow: hidden;
    border-radius: 10px;
}
.cracked-teams .card-area .ftr-btn-area a{
    font-weight: 600;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    background-color: #0A0A0A;
    flex-grow: 1;
    padding: 35px 0;
    display: flex;
    align-items: center;
    column-gap: 8px;
    transition: all .2s ease-in-out;
    justify-content: center;
    border-right: 1px solid #121212;
}
.cracked-teams .card-area .ftr-btn-area a svg{
    position: relative;
    top: 2px;
}
.cracked-teams .card-area .ftr-btn-area a:last-child{
    border-right: none;
}
.cracked-teams .card-area .ftr-btn-area a:hover{
    color: #FD5447;
    background-color: #191919;
}

/* cracked remote teams end  */




/* Proven Process start Here */

.proven-section{
    margin-top: 200px;
    overflow: hidden;
}
.proven-section .heading-title {
    text-align: center;
    max-width: 900px;
    width: 100%;
    margin: 0 auto 90px;
}
.proven-section .heading-title h2 {
    font-weight: 300;
    font-size: 51px;
    color: #000000;
    margin-bottom: 30px;
}
.proven-section .heading-title h2 strong {
    font-weight: 700;
}
.proven-section .heading-title p {
    font-weight: 400;
    font-size: 16px;
    color: #353535;
}
.proven-section .circle-content{
    position: relative;
}
.proven-section .circle-content .circle-ar{
    width: 195px;
    aspect-ratio: 3/3;
    border-radius: 50%;
    margin: 0 auto;
    padding: 10px;
    background: #fff;
    position: relative;
    
}
.proven-section .circle-content .circle-ar::before{
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    transform: rotate(45deg);
    position: absolute;
    border-left: 1px solid #D43F33;
    border-top: 1px solid #D43F33;
    border-right: 1px solid transparent;
    border-bottom: 1px solid transparent;
}
.proven-section .circle-content .circle-ar::after{
    content: '';
    position: absolute;
    left: -200%;
    right: -200%;
    top: 49.59%;
    z-index: -1;
    border-top: 1px solid #D43F33;
}
.proven-section .circle-content .circle-ar .item{
    border-radius: 50%;
    background: #FFFFFF;
    display: flex;
    z-index: 10;
    top: 10px;
    right: 10px;
    bottom: 10px;
    left: 10px;
    position: absolute;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.18);
}
.proven-section .circle-content .circle-ar .item img{
    max-width: 100%;
    display: block;
}
.proven-section .circle-content .circle-ar .item .item-no{
    width: 39px;
    height: 39px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #D43F33;
    border-radius: 50%;
    color: #FFFFFF;
    font-weight: 600;
    font-size: 20px;
    position: absolute;
    left: 6%;
    transform: translate(-100%,0);
    
}
.proven-section .dtl-text{
    text-align: center;
    margin-top: 12px;
    padding: 0 30px;
}
.proven-section .dtl-text p{
    font-weight: 600;
    font-size: 20px;
    text-align: center;
    color: #000000;
}
.bg-dot-at{
    position: relative;
    padding-bottom: 60px;
}
.bg-dot-at::after{
    z-index: -1;
    content: '';
    width: 100%;
    top: 100px;
    bottom: 0;
    left: -20px;
    right: -20px;
    position: absolute;
    background-image: url('@/assets/images/process/dots.png');
    background-size: cover;
    background-repeat: no-repeat;
}

/* Proven Process end  */







/* Excellent Company start here  */
.row.gx-0 > * {
    padding-right: 0;
    padding-left: 0;
}
.excellent-company-section{
    margin-top: 140px;
    margin-bottom: 190px;
}
.excellent-company-section .ext-round{
    border-radius: 10px;
    overflow-x: hidden;
    position: relative;
}
.excellent-company-section .overdi-img{
    position: relative;
}
.excellent-company-section .overdi-img::after {
    content: '';
    position: absolute;
    width: 191px;
    height: 190px;
    background-image: url('@/assets/images/process/remote-circle.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    bottom: -65px;
    right: -48px;
    z-index: -1;
}
.excellent-company-section .slide-area{
    background-color: #000000;
    padding-bottom: 15px;
    height: 100%;
    display: flex;
    align-items: center;
}
.excellent-company-section .slide-area .text-area .quotation-img{
    width: 50px;
    margin-bottom: 20px;
}
.excellent-company-section .slide-area .text-area{
    padding-left: 60px;
    padding-top: 20px;
    text-align: left;
    padding-right: 10%;
}
.excellent-company-section .slide-area .text-area h4 {
    background: #D43F33;
    border-radius: 5px;
    width: max-content;
    color: #fff;
    font-weight: 600;
    font-size: 20px;
    color: #FFFFFF;
    line-height: 1;
    padding: 2px 13px;
}
.excellent-company-section .slide-area .text-area p{
    font-weight: 400;
    font-size: 16px;
    color: #B5B5B5;
    margin: 15px 0 28px;
}
.excellent-company-section .slide-area .text-area h3 {
    font-weight: 600;
    font-size: 22px;
    color: #FFFFFF;
    line-height: 1;
}
.excellent-company-section .slide-area .text-area h3 span{
    font-size: 16px;
}
.excellent-company-section .slide-area .owl-theme .owl-nav {
    text-align: right;
    padding-right: 50px;
    margin: 0;
}
.excellent-company-section .slide-area .owl-theme .owl-nav button{
    color: #FFFFFF;
    font-size: 25px;
    font-weight: 300;
    margin: 0;
}
.excellent-company-section .slide-area .owl-theme .owl-nav button:first-child{
    margin-right: 20px;
}
.excellent-company-section .slide-area .owl-theme .owl-nav [class*=owl-]:hover {
    background: unset;
}
.excellent-company-section .video-conts{
    position: relative;
}
.excellent-company-section .video-conts .thumbnails {
    align-items: stretch !important;
}
.excellent-company-section .video-conts,
.excellent-company-section .video-conts .thumbnails{
    height: 100%;
    width: 100%;
}
.excellent-company-section .video-conts, .excellent-company-section .video-conts .thumbnails {
    display: flex;
    background: #000;
    align-items: center;
}
.excellent-company-section .video-conts .plyr--full-ui.plyr--video .plyr__control--overlaid{
    background: #D43F33;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.25);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}



/* Excellent Company end */





/* Grow Business(newsletter) start here */

.grow-business{
    padding: 40px 0;
    background-color: #D33F33;
    margin-bottom: 140px;
    position: relative;
}
.grow-business::after{
    content: '';
    position: absolute;
    left: 35px;
    right: 35px;
    top: 0;
    z-index: -1;
    bottom: -52px;
    background-image: url('@/assets/images/footer/dots.png');
    background-size: cover;
    background-repeat: no-repeat;
}
.grow-business .text-area h2{
    font-weight: 300;
    font-size: 47px;
    color: #FFFFFF;
    margin-bottom: 12px;
}
.grow-business .text-area h2 strong{
    font-weight: 700;
}
.grow-business .text-area p{
    font-weight: 400;
    font-size: 18px;
    color: #FFFFFF;
}
.grow-business .btn-sect{
    display: flex;
    height: 100%;
    justify-content: center;
    align-items: center;
}
.grow-business .btn-sect a{
    background: #D43F33;
    border: 1px solid #FFFFFF;
    border-radius: 50px;
    padding: 14px 64.5px;
    font-weight: 500;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
}
.grow-business .btn-sect a:hover{
    background-color: #fff;
    color: #000;
}

/* Grow Business(newsletter) end */



/* Blog & News section start here  */


.blog-news-sect .heading-title{
    text-align: center;
    margin-bottom: 82px;
}
.blog-news-sect .heading-title h2{
    font-weight: 300;
    font-size: 51px;
    color: #000000;
}
.blog-news-sect .heading-title h2 strong{
    font-weight: 700;
}
.blog-news-sect .card-item{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.14);
    border-radius: 10px;
    padding-bottom: 33px;
    height: 100%;
}
.blog-news-sect .card-item img{
    width: 100%;
}
.blog-news-sect .card-item .atle-text{
    padding: 0 10px 0 30px;
    min-height: 188px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: baseline;
}
.blog-news-sect .card-item .atle-text .date{
    display: flex;
    column-gap: 14px;
    margin-top: 20px;
}
.blog-news-sect .card-item .atle-text .date img{
    width: 17px;
}
.blog-news-sect .card-item .atle-text .date p{
    font-weight: 400;
    font-size: 16px;
    color: #D43F33;
}
.blog-news-sect .card-item .atle-text h4{
    font-weight: 600;
    font-size: 19.5px;
    color: #000000;
    margin: 16px 0 18px;
}
.blog-news-sect .card-item .atle-text .btn{
    border: 1px solid #000000;
    padding: 8px 26px;
    font-weight: 400;
    font-size: 15px;
    letter-spacing: 0.01em;
    color: #000000;
    border-radius: 50px;
    position: relative;
    overflow: hidden;
    z-index: 0;
}
.blog-news-sect .card-item .atle-text .btn::after {
    border: 1px solid transparent;
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    transition: 0.5s;
    transition-timing-function: ease;
    transform: scaleX(0);
    border-radius: 6px;
    transform-origin: left center;
    transition-timing-function: cubic-bezier(0.9, 1.6, 0.1, 0.6);
}
.blog-news-sect .card-item .atle-text .btn:hover::after {
    transform: scaleX(1);
    top: 0;
    background: #D43F33;
}
.blog-news-sect .card-item .atle-text .btn:hover{
    color: #fff;
    border-color: #D43F33;
}
.blog-news-sect .views-gk{
    margin-top: 50px;
    display: flex;
    justify-content: center;
}
.blog-news-sect .views-gk a {
    background: #D43F33;
    border: 1px solid #D43F33;
    border-radius: 50px;
    font-weight: 400;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    padding: 8px 35px;
    transition: all .2s;
}
.blog-news-sect .views-gk a:hover {
    background: #a92920;
}

/* Blog & News section end  */






/* Contact Section start here  */


.contact-section{
    margin-top: 75px;
    padding: 150px 0 20px 0;
    background-image: url('@/assets/images/location/bg-map.png');
    background-size: cover;
}
.contact-section .atcle-area h3{
    font-weight: 300;
    font-size: 43px;
    color: #FFFFFF;
    margin-bottom: 38px;
}
.contact-section .atcle-area h3 strong{
    font-weight: 700;
}
.contact-section .atcle-area p{
    font-weight: 400;
    font-size: 16px;
    color: #B5B5B5;
} 
.contact-section .atcle-area .count-down{
    display: flex;
    flex-wrap: wrap;
    gap: 20px 75px;
    margin-top: 60px;
}
.contact-section .atcle-area .count-down .item{
    position: relative;
    padding-left: 22px;
}
.contact-section .atcle-area .count-down .item::after{
    content: '';
    position: absolute;
    top: 8px;
    bottom: 0;
    left: 0;
    width: 6px;
    border-radius: 5px;
    background-color: #C2372C;
}
.contact-section .atcle-area .count-down .item h2{
    font-weight: 700;
    font-size: 60px;
    color: #FFFFFF;
    margin-bottom: 8px;
    line-height: 1;
}
.contact-section .atcle-area .count-down .item p{
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 0.12em;
    color: #D43F33;
}
.contact-section .fild-cnt{
    display: flex;
    flex-direction: column;
}
.contact-section .fild-cnt h3{
    font-weight: 300;
    font-size: 43px;
    color: #FFFFFF;
    margin-bottom: 38px;
}
.contact-section .fild-cnt h3 strong{
    font-weight: 700;
}
.contact-section .fild-cnt .form-group{
    display: flex;
    gap: 20px 15px;
    margin-bottom: 20px;
}
.contact-section .fild-cnt .form-group input{
    width:100%;
    background: #000000;
    border: 1px solid #696969;
    border-radius: 8px;
    height: 48px;
    flex-grow: 1;
    padding-left: 24px;
    font-weight: 400;
    font-size: 16px;
    color: #B5B5B5;
}

.contact-section .fild-cnt .form-group input:focus{
    outline: none;
}
.contact-section .fild-cnt .form-group input::placeholder{
    font-weight: 400;
    font-size: 16px;
    color: #B5B5B5;
}
.contact-section .fild-cnt [type="submit"] {
    width: 100%;
    background: #FFFFFF;
    border: 1px solid #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 50px;
    font-weight: 500;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #D43F33;
    padding: 14px 0;
    margin-top: 4px;
}
.contact-section .fild-cnt [type="submit"]:hover{
    background-color: #D43F33;
    color: #fff;
    border-color: #D43F33;
}
.contact-section .meet-cart-align{
    position: relative;
    top: 150px;
}
.contact-section .meet-cart{
    background-color: #D23E32;
    border-radius: 10px;
    padding: 75px 0 75px 75px;
}
.contact-section {
    position: relative;
}
.contact-section::after {
    content: '';
    left: 35px;
    top: 100%;
    right: 35px;
    bottom: -200px;
    z-index: -1;
    position: absolute;
    background-image: url('@/assets/images/footer/dots.png');
    background-size: cover;
}
.contact-section .meet-cart .text-ast h2{
    font-weight: 300;
    font-size: 44px;
    color: #FFFFFF;
}
.contact-section .meet-cart .text-ast h2 strong{
    font-weight: 700;
}
.contact-section .meet-cart .cntct-btn{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.contact-section .meet-cart .cntct-btn a{
    border: 1px solid #FFFFFF;
    border-radius: 50px;
    padding: 14px 75px;
    font-weight: 600;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    transition: all .2s;
}
.contact-section .meet-cart .cntct-btn a:hover{
    background-color: #fff;
    color: #000;
}

/* Contact Section end  */





/* ================== responsive home page start ========================= */

@media (max-width: 1199px){
    .services-plate-sect .card-wrapper .relyp-item{
        min-height: unset;
    }
    .services-plate-sect .card-wrapper .card-item .overlay{
        display: block;
    }
    .services-plate-sect .card-wrapper .card-item:hover {
        box-shadow: 0px 4px 25px rgb(0 0 0 / 8%);
        position: static;
        transform: unset;
        height: 100%;
    }
    .services-plate-sect .card-wrapper .card-item:hover p{
        margin-bottom: 10px;
    }
    .banner-content .hero-text h2 {
        font-size: 45px;
        line-height: 1.2;
    }
    .banner-content .hero-text p {
        font-size: 28px;
    }
    .banner-content {
        height: auto;
        min-height: 500px;
        max-height: unset;
    }
    .shape-float img.img-posin-2 {
        width: 20%;
    }
    .shape-float img.img-posin-1 {
        width: 6%;
    }
    .banner-content .hero-text .hero-button-sctn .btn {
        padding: 10px 60px;
        font-size: 16px;
    }
    .banner-content .hero-text {
        padding: 0 15px;
    }
    .higher-roi .article-side h2,
    .services-plate-sect .heading-title h2,
    .proven-section .heading-title h2,
    .blog-news-sect .heading-title h2 {
        font-size: 35px;
    }
    .proven-section .heading-title h2 {
        margin-bottom: 20px;
    }
    .services-plate-sect .heading-title h2 {
        margin-bottom: 14px;
    }
    .services-plate-sect .card-wrapper {
        margin-top: 80px;
    }
    .services-plate-sect .card-wrapper .card-item p {
        font-weight: 400;
        font-size: 14px;
        text-align: center;
        color: #353535;
        line-height: 1.4;
        margin-bottom: 10px;
    }
    .excellent-company-section {
        margin-top: 80px;
        margin-bottom: 140px;
    }
    .cracked-teams .card-area .check-list ul li {
        font-size: 16px;
        padding: 18px 10px 18px 18px;
    }
    .higher-roi {
        margin-top: 70px;
    }
    .higher-roi .article-side p {
        font-size: 20px;
        margin: 20px 0;
    }
    .higher-roi .article-side .lier-list ul li {
        font-size: 14px;
        margin-bottom: 14px;
    }
    .higher-roi .article-side .btn {
        font-size: 16px;
        padding: 8px 36px;
    }
    .higher-roi .article-side {
        margin-top: 0px;
    }
    .higher-roi .bner-post .bg-dot-img {
        max-width: 100%;
    }
    .services-plate-sect[data-v-c6bdc170] {
        padding: 70px 0;
        margin-top: 70px;
    }

    .cracked-teams .card-area .text-area h2 {
        font-size: 50px;
        margin-bottom: 40px;
    }
    .cracked-teams .card-area .ftr-btn-area a {
        font-size: 18px;
    }
    .proven-section {
        margin-top: 120px;
    }
    .proven-section .heading-title {
        margin: 0 auto 60px;
    }
    .grow-business .text-area h2,
    .contact-section .meet-cart .text-ast h2 {
        font-size: 28px;
        margin-bottom: 5px;
    }
    .grow-business .text-area p {
        font-size: 15px;
    }
    .grow-business .btn-sect a,
    .contact-section .meet-cart .cntct-btn a {
        padding: 12px 40px;
        font-size: 18px;
    }
    .contact-section .atcle-area h3,
    .contact-section .fild-cnt h3 {
        font-size: 30px;
        margin-bottom: 30px;
    }
    .contact-section .atcle-area p {
        font-size: 14px;
        line-height: 1.4;
    }
    .contact-section .atcle-area .count-down .item h2 {
        font-size: 38px;
    }
    .contact-section .atcle-area .count-down .item p {
        font-size: 14px;
    }
    .contact-section .fild-cnt .form-group input {
        width: 100%;
    }
    .contact-section .fild-cnt .form-group {
        margin-bottom: 18px;
    }
    .contact-section .fild-cnt [type="submit"] {
        font-size: 19px;
        padding: 12px 0;
    }
    .contact-section {
        padding: 80px 0 20px 0;
    }
    .contact-section .meet-cart-align {
        top: 98px;
    }
    .contact-section .meet-cart {
        padding: 40px 0 40px 50px;
    }
    .contact-section .contdw-row-gap{
        row-gap: 30px;
    }
    .blog-news-sect .heading-title {
        margin-bottom: 50px;
    }
    .grow-business {
        margin-bottom: 100px;;
    } 
}
@media (max-width: 991px) {
    .iframeYT {
       
        aspect-ratio: 3/2;

    }
    .banner-content .hero-text .hero-button-sctn{
        margin-bottom: 50px;
    }
    .proven-section {
        margin-top: 100px;
    }
    .banner-content {
        min-height: unset;
        margin-top: 120px;
    }
    .higher-roi,
    .services-plate-sect {
        margin-top: 70px;
    }
    .services-plate-sect {
        padding: 70px 0;
    }
    .cracked-teams .card-area .text-area {
        padding-left: 30px;
        padding-right: 20px;
        margin-bottom: 30px;
    }
    .cracked-teams .card-area .check-list {
        padding: 0 30px 45px;
    }
    .cracked-teams .card-area .ftr-btn-area {
        margin-top: 20px;
    }
    .cracked-teams .card-area .ftr-btn-area {
        display: grid;
        margin-top: 20px;
        grid-template-columns: 1fr 1fr;
    }
    .cracked-teams .card-area .ftr-btn-area a {
        padding: 28px 0;
    }
    .cracked-teams .card-area::after {
        width: 100px;
        height: 100px;
        bottom: -35px;
        left: -27px;
    }
    .cracked-teams .card-area {
        padding-top: 50px;
    }
    .services-plate-sect {
        margin-top: 30px;
    }
    .proven-section .circle-content .circle-ar[data-v-c6bdc170]::after {
        content: unset;
    }
    .proven-section .circle-content .circle-ar[data-v-c6bdc170]::before {
        border: 1px solid #D43F33;
    }
    .bg-dot-at::after {
        background-image: unset;
    }
    .proven-section .circle-content .row{
        row-gap: 50px;
    }
    .proven-section .circle-content .circle-ar {
        width: 130px;
    }
    .proven-section .circle-content .circle-ar .item .item-no {
        width: 33px;
        height: 33px;
        font-size: 14px;
    }
    .proven-section .circle-content .circle-ar .item {
        padding: 20px;
    }
    .grow-business .btn-sect a {
        padding: 12px 36px;
        font-size: 16px;
    }   
    .proven-section .dtl-text p {
        font-size: 15px;
    }
    .blog-news-sect .card-item .atle-text {
        padding: 0 10px;
    }
    .blog-news-sect .card-item .atle-text h4 {
        font-size: 16px;
        margin: 10px 0 18px;
    }
    
    .blog-news-sect .card-item .atle-text .date {
        column-gap: 10px;
        margin-top: 16px;
    }
    .blog-news-sect .card-item .atle-text .btn {
        padding: 4px 20px;
    }
    .blog-news-sect .row{
        row-gap: 40px;
    }
    .blog-news-sect .views-gk a {
        font-size: 18px;
        padding: 8px 33px;
    }
    .contact-section .atcle-area .count-down {
        gap: 20px 75px;
        margin-top: 30px;
    }
    .contact-section .meet-cart .text-ast{
        text-align: center;
        margin-bottom: 20px;
    }
    .contact-section::after {
        bottom: -130px;
    }
    .contact-section .meet-cart {
        padding: 40px 0;
    }
    .higher-roi .article-side h2,
    .services-plate-sect .heading-title h2,
    .proven-section .heading-title h2,
    .blog-news-sect .heading-title h2 {
        font-size: 25px;
    }
    .higher-roi .article-side p {
        font-size: 16px;
        margin: 12px 0;
    }
    .excellent-company-section .overdi-img::after {
        width: 100px;
        height: 100px;
        bottom: -38px;
        right: -32px;
    }
    .services-plate-sect .card-wrapper .card-item h4 {
        font-size: 18px;
        margin: 15px 0 18px;
    }
    .services-plate-sect .card-wrapper .card-item {
        padding: 0 13px 20px;
    }
    .services-plate-sect .card-wrapper .card-item img {
        height: 62px;
    }
    .grow-business {
        margin-bottom: 80px;
    }
    .blog-news-sect .heading-title {
        margin-bottom: 36px;
    }
    .contact-section .atcle-area h3, .contact-section .fild-cnt h3 {
        font-size: 24px;
        margin-bottom: 16px;
    }
    .proven-section .heading-title {
        margin: 0 auto 50px;
    }
}
@media (max-width: 767px) {
    
    .services-plate-sect .card-wrapper .gy-3 {
        row-gap: 50px;
    }
    .excellent-company-section .overdi-img::after {
        display: none;
    }
    .proven-section{
        margin-top: 70px;
    }
    .excellent-company-section {
        margin-top: 20px;
        margin-bottom: 68px;
    }
    .blog-news-sect .row {
        justify-content: center;
    }
    .banner-content .hero-text{
        margin-bottom: 0;
    }
    .services-plate-sect {
        padding: 50px 0;
        margin-top: 40px;
    }
    .higher-roi .article-side p {
        font-size: 14px;
    }
    .higher-roi .article-side .lier-list {
        margin-bottom: 40px;
    }
    .higher-roi .article-side .btn {
        display: block;
        margin: 0 auto;
    }
    .blog-news-sect .card-item .atle-text .btn {
        display: block;
        width: fit-content;
        margin: 0 auto;
    }
    .blog-news-sect .card-item .atle-text{
        min-height: 160px;
    }
    .contact-section .meet-cart-align {
        top: 54px;
    }
    .contact-section::after {
        bottom: -90px;
    }
    .main-footer {
        margin-top: 122px;
    }
    .main-footer .item .frt-logo {
        max-width: 100%;
        height: 35px;
    }    
    .main-footer .item p {
        font-size: 14px;
        line-height: 20px;
    }
    .blog-news-sect .views-gk {
        margin-top: 40px;
    }
    .higher-roi .bner-post{
        margin-top: 30px;
    }
    .banner-content .hero-text h2 br{
        display: none;
    }
    .shape-float{
        display: none;
    }
    .banner-content .hero-text h2 {
        font-size: 30px;
    }
    .banner-content .hero-text p {
        font-size: 18px;
        margin: 14px 0 40px;
    }
    .banner-content .hero-text .hero-button-sctn {
        height: 115px;
    }
    .banner-content .hero-text .hero-button-sctn .btn {
        padding: 10px 48px;
        font-size: 16px;
    }
    .cracked-teams .card-area .ftr-btn-area {
        display: grid;
        margin-top: 20px;
        grid-template-columns: 1fr;
    }
    .cracked-teams .card-area .check-list .btn {
        font-size: 17px;
        padding: 12px 34px;
    }
    .cracked-teams .card-area .text-area h2 {
        font-size: 30px;
        margin-bottom: 20px;
    }
    .cracked-teams .card-area .text-area p {
        font-size: 16px;
        line-height: 1.4;
    }
    .cracked-teams .card-area .check-list ul li {
        font-size: 16px;
        padding: 18px 10px 18px 20px;
    }
    .grow-business .btn-sect a,
    .contact-section .meet-cart .cntct-btn a {
        padding: 8px 28px;
        font-size: 12px;
    }
    .grow-business .text-area p {
        font-size: 12px;
    }
    .grow-business .text-area{
        text-align: center;
    }
    .grow-business .btn-sect {
        margin-top: 18px;
    }
    .contact-section .meet-cart {
        padding: 40px 10px;
    }
    .grow-business .text-area h2,
     .contact-section .meet-cart .text-ast h2 {
        font-size: 20px;
    }
    .services-plate-sect .card-wrapper .card-item h4 {
        font-weight: 700;
        font-size: 20px;
        color: #000000;
        margin: 10px 0 15px;
    }
    .contact-section .atcle-area p {
        font-size: 12px;
        line-height: 1.4;
    }
    .contact-section .atcle-area .count-down .item h2 {
        font-size: 26px;
    }
    .contact-section {
        margin-top: 44px;
    }
    .contact-section .atcle-area .count-down .item p {
        font-size: 13px;
    }
    .contact-section .atcle-area .count-down .item::after {
        top: 0px;
        width: 4px;
    }   
    .contact-section .fild-cnt .form-group input {
        height: 43px;
        padding-left: 20px;
    } 
    .contact-section .atcle-area h3, .contact-section .fild-cnt h3 {
        font-size: 20px;
    }
    .contact-section .fild-cnt [type="submit"] {
        font-size: 17px;
        padding: 8px 0;
    }
}
@media (max-width: 576px) {
    
    /* .excellent-company-section .video-conts {

    } */
    /* .iframeYT {
        width: 380px;height: 160px;
    } */
    .contact-section .meet-cart {
        padding: 20px 10px;
    }
    .contact-section .fild-cnt .form-group{
        flex-direction: column;
    }
    .cracked-teams .card-area .check-list .btn {
        font-size: 16px;
        padding: 9px 29px;
        display: block;
        margin: 0 auto;
    }
    .cracked-teams .card-area .check-list ul li {
        padding: 8px;
    }
    .cracked-teams .card-area .check-list ul li svg {
        width: 18px;
    }
    .cracked-teams .card-area .ftr-btn-area {
        margin-top: 0px;
    }
    .services-plate-sect .card-wrapper .card-item:hover{
        transform: scale(1, 1.15);
    }
}

/* ================== responsive home page end ========================= */


/* ==================== Don't change, main column responsive start here ================= */
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-0.5 * var(--bs-gutter-x));margin-left:calc(-0.5 * var(--bs-gutter-x))}.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * 0.5);padding-left:calc(var(--bs-gutter-x) * 0.5);margin-top:var(--bs-gutter-y)}.container,.container-fluid{width:100%;padding-right:var(--bs-gutter-x,0.75rem);padding-left:var(--bs-gutter-x,0.75rem);margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}}@media (min-width: 768px){.container{max-width:720px}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}}@media (min-width: 992px){.container{max-width:960px}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}}@media (min-width: 1200px){.container{max-width:1140px}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}}@media (min-width: 1400px){.container{max-width:1250px}}
/* ==================== Don't change, main column responsive end ======================= */

</style>