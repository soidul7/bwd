<template>
    <section class='sales-page graphics'>
        
        <section class='header-top'>
            <div class='container'>
                <div class='header-part'>
                
                    <router-link  class="logo" to="/">
                        <img src="/frontend/images/logo/logo.png" alt="">
                    </router-link>

                    <div class='header_right'>
                        <a class='mail-box' href='mailto:info@bigwavedevelopment.com'>
                            <span>
                                <img src='../assets/images/sales/bigwavedevelopment_top_icon3.png' alt='bigwavedevelopment email'/>
                            </span>
                            <span>
                                info@bigwavedevelopment.com
                            </span>
                            
                        </a>

                        <button @click="modelShow()" class='header-gradeint-btn'>
                            
                            <span>
                                Contact
                            </span>
                            
                        </button>

                    </div>
                </div>
            </div>
        </section>
        
        <section class='banner-bg unlimited_graphic_banner'>
            <h1>Unleash Your <span> Brand's Visual </span> <br/> Potential with  <strong>Stunning</strong> Graphic <br/> Designs</h1>
            
            <p>Access any of our graphic design plans and enjoy <strong>unlimited design solutions.</strong><br/>
            Get complete high-quality graphic designs along with revisions as much as you want.</p>
            <a @click="handleClick()" class='pckg-btn'>View Packages</a>

            <div class='blue_round_banner'></div>
            <div class='blue_round_banner2'></div>
            <div class='blue_round_banner3'></div>
            <div class='blue_round_banner4'></div>
         </section>
         
        <section class='Checkout-sec'>
            <div class='title_colabr container package_heading'>
                <h2>
                    Checkout
                </h2>
                <p>our newest design goodies</p>
            </div>
        </section>


        <section class='slider-sec-total top-minus-space'>
             <div class='container'>
                <div class='slider-section'>
                    <div class='inside_title'>
                        <h3>Banners</h3>
                    </div>
                    

                    <div class='slider-image'>
                        <Carousel v-bind="settings" :breakpoints="breakpoints">
                            <Slide v-for="slide in images" :key="slide">
                                <div class=""><img :src="slide" alt=''/></div>
                            </Slide>

                            <template #addons>
                                <Navigation />
                            </template>
                        </Carousel>
                        

                    </div>
                </div>
             </div>
        </section>

       
        <section class='slider-sec-total'>
            <div class='container'>
            <div class='slider-section ratio_art'>
            <div class='inside_title'>
                <h3>Illustrations</h3>
            </div>
            

            <div class='slider-image illustration__slider'>

                <Carousel v-bind="settings" :breakpoints="breakpoints">
                    <Slide v-for="slide in illustrationImage" :key="slide">
                        <div class=""><img :src="slide" alt=''/></div>
                    </Slide>

                    <template #addons>
                        <Navigation />
                    </template>
                </Carousel>

                <!-- <Carousel :autoplay="2000"  :settings="settings" :breakpoints="breakpoints1">
                            <Slide  >
                                <img src={PortfolioEleven} alt=''/>
                            </Slide>

                            <Slide  >
                                <img src={PortfolioEleven} alt=''/>
                            </Slide>

                            <Slide  >
                                <img src={PortfolioEleven} alt=''/>
                            </Slide>

                
                        </Carousel> -->
                <!-- <Slider {...portfolioSlider}>
                    <img src={IllustrationOne} alt=''/>
                    <img src={IllustrationTwo} alt=''/>
                    <img src={IllustrationThree} alt=''/>
                    <img src={IllustrationFour} alt=''/>
                    <img src={IllustrationFive} alt=''/>
                    <img src={IllustrationSix} alt=''/>
                    <img src={IllustrationSeven} alt=''/> 
                    <img src={IllustrationEight} alt=''/> 
                    <img src={IllustrationNine} alt=''/>
                    <img src={IllustrationTen} alt=''/>
                   
                    
                </Slider> -->
            </div>
        </div>

            </div>
        </section> 
      
       
        <section class='slider-sec-total logos'>
             <div class='container'>
             <div class='slider-section'>
                
                <div class='inside_title'>
                    <h3>Logos</h3>
                </div>
                <div class='slider-image'>

                    <Carousel v-bind="settings" :breakpoints="breakpoints">
                        <Slide v-for="slide in logoImage" :key="slide">
                            <div class=""><img :src="slide" alt=''/></div>
                        </Slide>

                        <template #addons>
                            <Navigation />
                        </template>
                    </Carousel>

                    <!-- <Slider {...portfolioSlider}>
                        <img src={LogoPortfolioOne} alt=''/>
                        <img src={LogoPortfolioTwo} alt=''/>
                        
                        
                        <img src={LogoPortfolioFour} alt=''/>
                        <img src={LogoPortfolioFive} alt=''/>
                        <img src={LogoPortfolioSix} alt=''/>
                        <img src={LogoPortfolioSeven} alt=''/> 
                        <img src={LogoPortfolioThree} alt=''/>
                        <img src={LogoPortfolioEight} alt=''/>
                        <img src={LogoPortfolioNine} alt=''/>
                        <img src={LogoPortfolioTen} alt=''/>

                      
                       
                    </Slider> -->
                </div>
            </div>

             </div>
        </section>


        
        <section class='offer_reMake_section'>
            <div class='container'>
                <div class='second-section extra-space re-make_offer'>
                    
                    <div class='offer_thmbl'>
                        <img src="../assets/images/sales/lmtd_offer.png" alt=''/>
                    </div>

                    <div class='gradeint-box'>
                        <div class='ttx'>
                            <h3>
                                Bigwavedevelopment is 
                                <span> offering </span>
                            </h3>
                            <h2>great deal</h2>
                            <p>
                                <span>Avail this discount on all packages for </span> <span> limited period time</span>
                            </p>
                        </div>
                        
                    </div>

                    <div class='offer-box'>
                        
                        <h3 class='top_ttle'>30%<span>off</span></h3>
                        <h6>On all three packages</h6>
                        <button @click="modelShow()" class='btn-outline btn-outline-blue'>I want to Start Now</button>
                        <div>
                            <div v-if="timerHours === '0' && timerMinutes === '0' && timerSeconds === '0'">
                                <div  class='time-count-box'>
                                    <p>OFFER COMING SOON</p>
                                </div>
                            </div>
                        
                            <div v-else>
                                <div  class='time-count-box'>
                                    <p>OFFER ENDING SOON</p>
                                    <div class='time-count'>
                                        <h3>
                                            
                                            <span>
                                                <span>{{timerHours < 10 ? '0' : ''}}{{timerHours}}</span>
                                                <span class='text'>Hour</span>
                                            </span> :
                                            <span>
                                                <span>{{timerMinutes < 10 ? '0' : ''}}{{timerMinutes}}</span>
                                                <span class='text'>Minutes</span>
                                            </span> :
                                            <span>
                                                <span> {{timerSeconds < 10 ? '0' : ''}}{{timerSeconds}}</span>
                                                <span class='text'>Seconds</span>
                                            </span>
                                        </h3>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>
     
        <section class='container price_new_section' ref="targetRef" id='price-new'>
            <div class='price__title'>
                <h2>
                    Current <span>Packages</span>
                </h2>
            </div>
            <div class='popular-pckg'>
                <div class='mst mb-dspn'>
                    <img src="/frontend/images/sales/most_animat.png" alt=""/>
                </div>
                <div class='packages' >
                    <div class='package-box first_package-box'>
                    <h2>Basic Graphics</h2> 
                    <p>Unlock Limitless Creativity with our Basic Pricing Package</p>
                    <div class='price-text'>
                        <del>$899 </del>
                            $499
                        <span>/ month</span>
                    </div>
                        
                    <div class='package-list'>
                            <h3>Services</h3>
                            <ul>
                                <li>Logo design</li>
                                <li>UI/UX design</li>
                                <li>Custom illustration</li>
                                <li>Presentation</li>
                            </ul>
                            
                            <ul class='deactive-list'>
                                <li> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13">
                                        <path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path>
                                    </svg>Micro video

                                </li>

                                <li> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13">
                                        <path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path>
                                    </svg>Web design
                                </li>

                                <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13">
                                    <path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path>
                                    </svg>Packaging Design</li>
                                <li> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13">
                                        <path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path>
                                    </svg>Publication and Typographic Design</li>
                            </ul>
                            
                            <h3>Features</h3>
                            <ul>
                            <li>1-2 day turnaround*</li>
                            <li>Platform independent design</li>
                            <li>Designated designers</li>
                            <li>Onboarding Manager</li>
                            </ul>
                            <ul class='deactive-list'>
                                
                                <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13"><path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path></svg>Same-day turnaround</li>
                                <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13"><path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path></svg>Real-time  collaboration</li>
                                <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13"><path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path></svg>Get source file</li>
                                <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13"><path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path></svg>Unlimited revisions</li>
                            </ul>
                    </div>

                        <div class='btm-grp'> 
                            <form action="https://www.paypal.com/cgi-bin/webscr" id="basic" method="post">
                                <input type="hidden" name="cmd" value="_xclick"/>
                                <input type="hidden" name="business" value="dipaktewary@yahoo.com"/> 
                                <input type="hidden" name="item_name" value="Basic Graphics"/> 
                                <input type="hidden" name="item_number" value="499"/> 
                                <input type="hidden" name="amount" value="499.00"/> 
                                <input type="hidden" id="currency" name="currency" value="USD" />
                                <input type="hidden" name="return" value="https://www.bigwavedevelopment.com/thank-you"/>
                                <input type="hidden" name="cancel_return" value="https://www.bigwavedevelopment.com//unlimited-graphic-design-packages"/>
                                <button class='talk-btn' @click=" submitBasicFrm(e)">Buy Now</button>
                            </form>
                        </div>
                    </div>
                    <div class='mst mb-dspb'><img src={mostAnimath} alt=""/></div>
                    <div class='package-box second_package-box'>
                    
                        <h2>Advanced Graphics</h2> 
                        <p>Elevate your brand with our advanced pricing package</p>
                        <div class='price-text'>
                            <del>$1199</del>
                            $699 
                            <span>/ month</span>
                        </div>
                    
                    <div class='package-list'>
                        <h3>Services</h3>
                        <ul>
                            <li>Logo design</li>
                            <li>UI/UX design</li>
                            <li>Custom illustration</li>
                            <li>Presentation</li>
                            <li>Micro video <small>(60 Seconds)</small></li>
                            <li>Web design</li>
                        </ul>
                        <ul class='deactive-list'>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13"><path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path></svg> Packaging Design</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="15" viewBox="0 0 13 15" width="13"><path clipRule="evenodd" d="m2.27501 4.06251v2.18746h-.97498c-.718249 0-1.30003.55938-1.30003 1.25001v6.25012c0 .6906.581781 1.2499 1.30003 1.2499h10.39987c.7182 0 1.3001-.5593 1.3001-1.2499v-6.25012c0-.69063-.5819-1.25001-1.3001-1.25001h-.9749v-2.18746c0-2.2437-1.89165-4.06251-4.225-4.06251s-4.22499 1.81878-4.22499 4.06251zm1.625 2.18746v-2.18746c0-1.38123 1.16346-2.50005 2.59995-2.50005 1.4365 0 2.60003 1.11882 2.60003 2.50005v2.18746zm1.29996 3.43754c0-.69059.58175-1.24997 1.29999-1.24997.71825 0 1.29996.55938 1.29996 1.24997 0 .44069-.2373.82819-.59469 1.05009 0 0 .12698.7376.26978 1.6062 0 .2593-.21774.4687-.48752.4687h-.97505c-.26975 0-.48745-.2094-.48745-.4687l.26978-1.6062c-.35742-.2219-.5948-.6094-.5948-1.05009z" fill="#edeaea" fillRule="evenodd"></path></svg> Publication and Typographic Design</li>
                        </ul>
                        
                        <h3>Features</h3>
                        <ul>
                        <li> Same-day turnaround</li>
                            <li>1-2 day turnaround*</li>
                            <li>Platform independent design</li>
                            <li>Designated designers</li>
                            <li>Onboarding Manager</li>
                            <li>Get source file</li>
                            <li>Unlimited revisions</li>
                            <li>Real-time  collaboration</li>
                        </ul>
                        
                    </div>

                        <div class='btm-grp'>
                            <form action="https://www.paypal.com/cgi-bin/webscr" id="advanced" method="post">
                                <input type="hidden" name="cmd" value="_xclick"/>
                                <input type="hidden" name="business" value="dipaktewary@yahoo.com"/> 
                                <input type="hidden" name="item_name" value="Advanced Graphics"/> 
                                <input type="hidden" name="item_number" value="699"/> 
                                <input type="hidden" name="amount" value="699.00"/> 
                                <input type="hidden" id="currency" name="currency" value="USD" />
                                <input type="hidden" name="return" value="https://www.bigwavedevelopment.com/thank-you"/>
                                <input type="hidden" name="cancel_return" value="https://www.bigwavedevelopment.com/unlimited-graphic-design-packages"/>
                                <button class='talk-btn' @click="submitAdvancedFrm(e)">Buy Now</button>
                            </form>
                        </div>
                    
                    </div>

                    <div class='package-box third_package-box'>
                    <h2>Premium Graphics</h2> 
                    <p>Unleash the full potential through our premium package</p>
                    <div class='price-text'>
                            <del>$1599</del>
                            $999
                            <span>/ month</span>
                        </div>
                    
                    <div class='package-list'>
                        <h3>Services</h3>
                        <ul>
                        <li>Logo design</li>
                            
                            <li>UI/UX design</li>
                            <li>Custom illustration</li>
                            <li>Presentation</li>
                            <li>Micro video <small>(120 Seconds)</small></li>
                            <li>Web design</li>
                            <li>Packaging Design</li>
                            <li>Publication and Typographic Design</li>
                            
                        </ul>
                        
                        <h3>Features</h3>
                        <ul>
                        <li> Same-day turnaround</li>
                            <li>1-2 day turnaround*</li>
                            <li>Platform independent design</li>
                            <li>Designated designers</li>
                            <li>Real-time  collaboration</li>
                            <li>Onboarding Manager</li>
                            <li>Get source file</li>
                            <li>Unlimited revisions</li>
                        </ul>
                    </div>

                        <div class='btm-grp'>
                            <form action="https://www.paypal.com/cgi-bin/webscr" id="premium" method="post">
                                <input type="hidden" name="cmd" value="_xclick"/>
                                <input type="hidden" name="business" value="dipaktewary@yahoo.com"/> 
                                <input type="hidden" name="item_name" value="Premium Graphics"/> 
                                <input type="hidden" name="item_number" value="999"/> 
                                <input type="hidden" name="amount" value="999.00"/> 
                                <input type="hidden" id="currency" name="currency" value="USD" />
                                <input type="hidden" name="return" value="https://www.bigwavedevelopment.com/thank-you"/>
                                <input type="hidden" name="cancel_return" value="https://www.bigwavedevelopment.com/unlimited-graphic-design-packages"/>
                                <button class='talk-btn' @click="submitPremiumFrm(e)">Buy Now</button>
                            </form>
                            
                        </div>    
                    </div>
                </div>
            </div>
        </section>
     
        <section class='testmonial-section testmonial-section_neo'>
            <div class='container'>
                <div class='testmonial-top'>
                
                    <h4>We are <span>proud</span> to inspire</h4>
                </div>

                <div class='testmonial-lg-box'>
                    <div class='testmonial-user-image'>
                        <img src="../assets/images/sales/img_bg.jpg" alt=''/>
                    </div>

                    <div class='testmonial-user-details'>
                        <div class='top_head'>
                            <img src="../assets/images/sales/coten_testy.png" alt=''/>
                            <h3>I would thoroughly recommend</h3>
                        </div>
                        <p class='des'>
                        “ I would thoroughly recommend Reddensoft’s work. On my project they ‘got’ the brief straight away and the combination their creative input, eye for detail, and in-depth appreciation of production processes meant that we could totally trust to deliver! ”
                        </p>
                        <div class='profn_dtl'>
                            <h4>Mike Boggus</h4>
                            <h6>Entrepreneur</h6>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        <section class='testmonial-section testmonial-section_neo box-testi'>
            <div class='container'>
                <div class='testmonial-grid'>
                    <div class='testmonial-box'>
                        <div class='top_head'>
                            <img src="../assets/images/sales/coten_testy.png" alt=''/>
                            <h3>Outstanding , creative design services</h3>
                        </div>
                        
                        <p class='des'>
                            “I was really impressed with the level of service that I received from Reddensoft. They were always responsive to my needs, and they were always willing to go the extra mile. I would definitely recommend them to anyone looking for their outstanding , creative design services. You guys are amazing.”
                        </p>
                        <div class='testmonial-user'>
                            <div class='testmonial-user-image'>
                                <img src="../assets/images/sales/webp/David.webp" alt=''/>
                            </div>

                            <div class='testmonial-user-details'>
                                <div>
                                    <h4>David Miller</h4>
                                    <h6>Business Man</h6>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class='testmonial-box'>
                        <div class='top_head'>
                            <img src="../assets/images/sales/coten_testy.png" alt=''/>
                            <h3>They're incredibly results-oriented</h3>
                        </div>
                        <p class='des'>
                        “I've worked with 2 unlimited design service provide in the past, but Reddensoft.us is by far the best. They're incredibly results-oriented, and they're always willing to go the extra mile to help me achieve my goals. I would definitely recommend them to anyone looking for unlimited design service packages.”
                        </p>
                        <div class='testmonial-user'>
                            <div class='testmonial-user-image'>
                                <img src="../assets/images/sales/webp/Michel.webp" alt=''/>
                            </div>

                            <div class='testmonial-user-details'>
                                <div>
                                    <h4>Michel Ambrosio</h4>
                                    <h6>Founder @Corkle</h6>
                                </div>
                               
                            </div>
                        </div>

                        
                    </div>
                    <div class='testmonial-box'>
                        <div class='top_head'>
                            <img src="../assets/images/sales/coten_testy.png" alt=''/>
                            <h3>They are a great partner for our business.</h3>
                        </div>
                        <p class='des'>
                        “They are a great partner for our business. They're always up-to-date on the latest design trends, and they're always willing to go the extra mile to help us achieve our goals. We're confident that we're in good hands with them for any design services. Our clients are super happy. We are having a customized plan and hired few designer for our agency. ”
                        </p>
                        <div class='testmonial-user'>
                            <div class='testmonial-user-image'>
                                <img src="../assets/images/sales/webp/Bently.webp" alt=''/>
                            </div>

                            <div class='testmonial-user-details'>
                                <div>
                                    <h4>Bently Ritter</h4>
                                    <h6>President & CEO at BeneFit Personal Training</h6>
                                </div>
                                
                            </div>
                        </div>

                        
                    </div>
                    <div class='testmonial-box'>
                    <div class='top_head'>
                            <img src="../assets/images/sales/coten_testy.png" alt=''/>
                            <h3>Our lead generation has increased by 200%</h3>
                        </div>
                        <p class='des'>
                        “We've been working with reddensoft.US for the past 2 years on our graphic design services. They've helped us to increase our social presence, website with very high quality brand presence. Our lead generation has increased by 200%. We're really happy with the results, and we would definitely recommend them to other businesses. ”
                        </p>
                        <div class='testmonial-user'>
                            <div class='testmonial-user-image'>
                                <img src="../assets/images/sales/webp/Kimberly.webp" alt=''/>
                            </div>

                            <div class='testmonial-user-details'>
                                <div>
                                    <h4>Kimberly</h4>
                                    <h6>Entrepreneur</h6>
                                </div>
                               
                            </div>
                        </div>

                        
                    </div>
                </div>
                </div>
        </section>

        <section class="sales-footer-section">
            <div class='container'>
                <ul class='social-media'>
                    <li>
                        <a href="https://www.facebook.com/bigwavedevelopmentagency" class="fadeInUp animated">
                            <img src="/frontend/images/icon/facebook.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/BWD2008" class="fadeInUp animated">
                            <img src="/frontend/images/icon/twi.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/bigwavedevelopment/" class="fadeInUp animated">
                            <img src="/frontend/images/icon/link.svg" alt="">
                        </a>
                    </li>
                    
                </ul>
                <div class='footer-logo'>
                    <img src="/frontend/images/logo/logo.png" alt='reddensoft logo' />
                </div>
                <p>
                    Copyright @ 2024 Big Wave Development LLC.<br/>
                    All Rights Reserved.
                </p>
            </div>
        </section>

    </section>

    <transition name="pop" >
        <PopUp v-if="showPopup" :callback="clickClose"/>
    </transition>
</template>

<script>
    import { defineComponent } from 'vue'
    import PopUp from '../views/PopUp.vue';
    import '../assets/css/style.css';
    import '../assets/css/fullStyle.scss';
    import '../assets/css/package.css';
    import '../assets/css/fullstack.css';
    import 'vue3-carousel/dist/carousel.css';
    import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

    import { useCookies } from '@vueuse/integrations/useCookies'

    export default defineComponent({
        name: 'UnlimitedGraphicDesignPackages',

        components: {
            PopUp,
            Carousel,
            Slide,
            Navigation,
        },

        setup() {
            const cookies = useCookies(['offerTime'])
            return {
                cookies,
            }
        },

        data: () => ({
            
            showPopup:false,
            ref: null,
            timerHours: '0',
            timerMinutes: '0',
            timerSeconds: '0',

            images: [
                "frontend/images/portfolio/portfolio-eleven.jpg", 
                "frontend/images/portfolio/portfolio-ten.jpg", 
                "frontend/images/portfolio/portfolio-twelve.jpg",
                "frontend/images/portfolio/portfolio1.jpg", 
                "frontend/images/portfolio/portfolio2.jpg",
                "frontend/images/portfolio/portfolio3.png", 
                "frontend/images/portfolio/portfolio8.png",
                "frontend/images/portfolio/portfolio9.png", 
                "frontend/images/portfolio/portfolio12.png", 
                "frontend/images/portfolio/portfolio13.png", 
                "frontend/images/portfolio/portfolio11.png",
                "frontend/images/portfolio/portfolio14.png", 
                "frontend/images/portfolio/portfolio16.jpg",
                "frontend/images/portfolio/portfolio17.jpg"
            ],
            illustrationImage: [
                "frontend/images/portfolio/Illust-1.jpg", 
                "frontend/images/portfolio/Illust-2.jpg", 
                "frontend/images/portfolio/Illust-3.jpg",
                "frontend/images/portfolio/Illust-4.jpg", 
                "frontend/images/portfolio/Illust-5.jpg",
                "frontend/images/portfolio/Illust-6.jpg", 
                "frontend/images/portfolio/Illust-7.jpg",
                "frontend/images/portfolio/Illust-8.jpg", 
                "frontend/images/portfolio/Illust-9.jpg", 
                "frontend/images/portfolio/Illust-10.jpg", 
            ],

            logoImage: [
                "frontend/images/portfolio/logo-portfolio-1.jpg", 
                "frontend/images/portfolio/logo-portfolio-2.jpg", 
                "frontend/images/portfolio/logo-portfolio-3.jpg",
                "frontend/images/portfolio/logo-portfolio-4.jpg", 
                "frontend/images/portfolio/logo-portfolio-5.jpg",
                "frontend/images/portfolio/logo-portfolio-6.jpg", 
                "frontend/images/portfolio/logo-portfolio-7.jpg",
                "frontend/images/portfolio/logo-portfolio-8.jpg", 
                "frontend/images/portfolio/logo-portfolio-9.jpg", 
                "frontend/images/portfolio/logo-portfolio-10.jpg", 
            ],
    
            settings: {
                itemsToShow: 1,
                snapAlign: 'center',
                wrapAround: true,
                autoplay:2000
            },

            breakpoints: {
                700: {
                    itemsToShow: 2,
                    snapAlign: 'center',
                },
                1024: {
                    itemsToShow: 3,
                    snapAlign: 'start',
                },
            }, 
        }),
        

        methods:{
            modelShow(){
                this.showPopup=true;
            },
            clickClose(){
                this.showPopup=false;
            },

            handleClick() {
                this.$refs.targetRef.scrollIntoView({ behavior: 'smooth' });
            },

            submitBasicFrm() {
                document.getElementById("basic").submit();
            },

            submitAdvancedFrm() {
                document.getElementById("advanced").submit();
            },

            submitPremiumFrm() {
                document.getElementById("premium").submit();
            },

            startTimer(countdownDate) {
                const now = new Date().getTime();
                const distance = countdownDate - now;

                // const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                if (distance < 0) {
                    clearInterval(interval.current);
                } else {
                // setTimerDays(days);
                console.log(hours)
                this.timerHours = hours;
                this.timerMinutes = minutes;
                this.timerSeconds = seconds;

                // setTimerHours(hours);
                // setTimerMinutes(minutes);
                // setTimerSeconds(seconds);
                }
            }

            
        },
        mounted(){

            


            let cookiesOfferTime = this.cookies.get('offerTime');
            let cookiesExpires = this.cookies.get('OffetEnd');

            if(cookiesOfferTime && cookiesExpires && cookiesExpires > new Date().getTime()){
            // const countdownDate = new Date('09/20/2023').getTime();

            
            

            setInterval(() => {
                this.startTimer(+cookiesOfferTime);
            }, 1000);

            // console.log(countdownDate)

            } else{
                // removeCookie('WRANGLER_WORKSPACE');
                const currentTime = new Date();
                
                const nextDay = new Date();
                nextDay.setHours(nextDay.getHours() + 24);
                nextDay.setMinutes(nextDay.getMinutes() + 2);
                let expires = nextDay.getTime()

                currentTime.setHours(currentTime.getHours() + 12);
                currentTime.setMinutes(currentTime.getMinutes() + 0);
                
                let countdownDate2 = currentTime.getTime();

                // setCookie('offerTime', countdownDate2, { path: '/unlimited-graphic-design-packages' });
                // setCookie('expires', expires, { path: '/unlimited-graphic-design-packages' });

                this.cookies.set('offerTime', countdownDate2);
                this.cookies.set('OffetEnd', expires)

               setInterval(() => {
                this.startTimer(+countdownDate2);
                }, 1000);
            }
        }
    })
</script>
