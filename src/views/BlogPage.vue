<template>
     <!-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="frontend/images/logo/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <router-link to="/" class="nav-link"> 
                Home 
                </router-link>
              </li>
              
              <li class="nav-item">
                <router-link to="/aboutview" class="nav-link">
                About
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/oueteam" a class="nav-link">
                Our Team
                </router-link>
              </li>
              
              <li class="nav-item">
                <router-link to="/servicepage" class="nav-link dropdown">
                Services
                </router-link>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="#">Testimonials</a>
              </li>


              <li class="nav-item">
                <router-link to="/blogpage" class="nav-link active">
                 Blog
                </router-link>
              </li>


              <li class="nav-item">
                <router-link to="/contactpage" class="nav-link">
                 Contact
                </router-link>
              </li>
              

            </ul>
            <form class="nav-fr-btn">
                <button class="btn" type="button">Get Started</button>
            </form>
          </div>
        </div>
    </nav> -->
     <NavBar/>
        <!-- navigationend -->


     <!-- banner start here -->

     <div class="banner-content">
      <div class="hero-text">
        <h2><strong>Our Blogs</strong></h2>
        <p>Explore Our Blogs To Invoke Your Thought Provoking Ideas On Various Marketing Techniques </p>
        <div class="hero-button-sctn">
         <button class="btn" @click="modelShow()">Let's Work Together</button>
        </div>
      </div>
      <div class="shape-float">
        <img class="img-posin-1" src="frontend/images/banner/Shape1.png" alt="">
        <img class="img-posin-2" src="frontend/images/banner/Shape2.png" alt="">
      </div>
    </div>
     
     <!-- banner end -->


   <!-- benefit section start here -->  

     <section class="benifit">
         <div class="container">
             <div class="row" v-for="(blogLatest) in latestBlog.data" v-bind:key="blogLatest.id">
                 <div class="col-lg-6">
                     <div class="beniImage">
                         <img :src="image_url+blogLatest.image">
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="beniText">
                         <h3><span><img src="frontend/images/blog/icon1.svg"></span>{{moment(blogLatest.date).startOf("month").format('MMMM')}} {{moment(blogLatest.date).startOf("day").format('DD')}}, {{moment(blogLatest.date).startOf("year").format('YYYY')}}</h3>
                         <div class="baniClick">
                            <a href="#" @click="moveUp(),blogDetails(blogLatest.slug)"><h1>{{blogLatest.title}}</h1></a>
                         </div>
                         <p>{{blogLatest.summary}}</p>
                         <div class="baniBtn">
                             <span style="courser:pointer" class="btn"  @click="moveUp(),blogDetails(blogLatest.slug)">Read More</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- benefit section end -->


     <!-- tab section start here -->

     <section class="blogTab">
         <div class="container">
             <div class="row">
                 <div class="col-12 blogTabBox">
                     <!-- <div class="col-12 blogTabBtn">
                         <button class="tabBtn" @click="currentTabComponent = 'AllComp'" :class="{active: currentTabComponent === 'AllComp' }">All</button>
                         <button class="tabBtn" @click="currentTabComponent = 'DigitalMarketing'" :class="{active: currentTabComponent === 'DigitalMarketing'}">Digital Marketing</button>
                         <button class="tabBtn" @click="currentTabComponent = 'EmailMarketing'" :class="{active: currentTabComponent === 'EmailMarketing'}">Email Marketing</button>
                         <button class="tabBtn" @click="currentTabComponent = 'PayPer'" :class="{active: currentTabComponent === 'PayPer'}">Pay-Per-Click</button>
                         <button class="tabBtn" @click="currentTabComponent = 'UiUx'" :class="{active: currentTabComponent === 'UiUx'}">UI/UX Strategy</button>
                     </div>

                     <keep-alive>
                        <component :is="currentTabComponent"></component>
                     </keep-alive> -->
                      <div class="col-12 blogTabContainer">
                         <div class="tabOne">
                             <div class="row">
                                <div class="col-lg-4 cardPadding" v-for="(blog) in blogList.listing" v-bind:key="blog.id">
                                    <div class="card-item">
                                        <img :src="image_url+blog.image" alt="">
                                        <div class="atle-text">
                                          <div class="date">
                                            <img src="frontend/images/blognews/Calendar-icon.svg" alt="">
                                            <p>{{moment(blog.date).startOf("month").format('MMMM')}} {{moment(blog.date).startOf("day").format('DD')}}, {{moment(blog.date).startOf("year").format('YYYY')}} </p>
                                          </div>
                                          <ul>
                                              <li><a class="headline" v-on:click="blogDetails(blog.slug),moveUp()">
                                                  <h1>{{blog.title}}</h1>
                                              </a></li>
                                              <li class="blogBtnPosition">
                                                <!-- <router-link to="/blog-details/" @click="blogDetails(val)"> -->
                                                <a v-on:click="blogDetails(blog.slug),moveUp()" class="btn">Read More</a>
                                                <!-- </router-link> -->
                                              </li>
                                          </ul>
                                        </div>
                                      </div>
                                 </div>
                                 
                             </div>
                         </div>
                      </div> 

                 </div>
                 

             </div>
         </div>
     </section>


     <!-- tab section end -->         


     <!-- Contact Section start here  -->

     <!-- <div class="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="atcle-area">
                <h3>Stay <strong> Connected</strong> With Us</h3>
                <p>We study market trends and customer reach. Our team is creative, strategic, and equipped with the latest skills and tools required to be a major game changer in the world of e-mail marketing.</p>
 
                <div class="count-down">
                  <div class="item">
                    <h2>1,000+</h2>
                    <p>Project completed</p>
                  </div>
                  <div class="item">
                    <h2>910+</h2>
                    <p>Satisfied Clients</p>
                  </div>
                </div>
 
              </div>
            </div>
            <div class="col-lg-6">
              <div class="fild-cnt">
                <h3><strong>Free</strong> Consultation</h3>
                <form action="#">
                  <div class="form-group">
                    <input type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                   <input type="text" placeholder="Phone No">
                   <input type="text" placeholder="Subject">
                 </div>
                 <button class="btn" type="submit">Get Consultation</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container meet-cart-align">
          <div class="meet-cart">
 
            <div class="row">
             <div class="col-lg-7">
               <div class="text-ast">
                 <h2>Meet Us For <strong>One Stop Digital Service Solutions</strong></h2>
               </div>
             </div>
             <div class="col-lg-5">
               <div class="cntct-btn">
                 <a href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg> +1 727 300 6244</a>
               </div>
             </div>
            </div>
 
          </div>
          <div class="bg-img-bbx"></div>
 
 
        </div>
      </div> -->
     <StayConectedWith/>
      <!-- Contact Section end  -->
 
 
 
      <!-- Footer section start here  -->
 
      <!-- <footer class="main-footer">

      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="item">
              <img src="frontend/images/logo/logo.png" class="frt-logo" alt="">
              <p>We are a web-based marketing agency with expertise in e-mail marketing, strategic planning, and blueprint road mapping.</p>
              <div class="icon-column">
                <a href="#" class="btn">
                  <img src="frontend/images/icon/facebook.svg" alt="">
                </a>
                <a href="#" class="btn">
                  <img src="frontend/images/icon/twi.svg" alt="">
                </a>
                <a href="#" class="btn">
                  <img src="frontend/images/icon/link.svg" alt="">
                </a>
                <a href="#" class="btn">
                  <img src="frontend/images/icon/be.svg" alt="">
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="item">
              <h4>Quick Link</h4>
              <ul>
                <li>
                  <router-link to="/">
                  <a href="#">Home </a>
                  </router-link>
                </li>
                <li>
                  <router-link to="/aboutview"> 
                  <a href="#">About Us </a>
                  </router-link>
                </li>
                <li>
                  <router-link to="/servicepage">
                  <a href="#">Services</a>
                  </router-link>
                </li>
                <li>
                  <a href="#">Our Team </a>
                </li>
                <li>
                  <router-link to="/blogpage">
                  <a href="#">Blog </a>
                  </router-link>
                </li>
                <li>
                  <router-link to="/contactpage">
                  <a href="#">Contact</a>
                  </router-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="item">
              <h4>Contact</h4>
              <ul>
                <li>
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>  7901 4th ST N STE 8022 St. Petersburg, FL 33702</a>
                </li>
                <li>
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>  +1 727 300 6244</a>
                </li>
                <li>
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                  </svg> david@bigwavedevelopment.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="item">
              <h4>Newsletter</h4>
              <p>Want to know what we’re up to? Sign up for the newsletter to stay updated.</p>
              <form action="#">
                <div class="form-group">
                  <input type="email" placeholder="Enter email address">
                  <button class="btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                  </svg></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="copyrgt-area">
        <div class="container">
          <div class="content-ftr">
            <div class="text">
              <h6>Copyright @2022 <span> Big Wave Development</span> All Rights Reserved.</h6>
            </div>
            <div class="text-min">
              <a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a> </div>
          </div>
        </div>
      </div>

     </footer> -->
      <FooTer/>
      <!-- Footer section end  -->
</template>

<script>
    
   import FooTer from '../views/FooTer.vue'
   import NavBar from '../views/NavBar.vue' 
   import AllComp from "../views/AllComp.vue"
   import DigitalMarketing from "../views/DigitalMarketing.vue"
   import EmailMarketing from "../views/EmailMarketing.vue"
   import PayPer from "../views/PayPer.vue"
   import UiUx from "../views/UiUx.vue"
   import StayConectedWith from '../components/StayConectedWith.vue'
   import { BASE_URL_API2 ,BASE_URL_IMAGE} from '../config'
   import moment from "moment";
  import axios from 'axios'
        export default {
            name: "BlogPage",
            components: {
                AllComp,
                DigitalMarketing,
                EmailMarketing,
                PayPer,
                UiUx,
                NavBar,
                StayConectedWith,
                FooTer
            },
        data() {
            return {
            currentTabComponent: "AllComp",
            blogList:{},
            latestBlog:{},
            image_url:'',
            moment:moment
            };
        },
         async created () {
          this.image_url = BASE_URL_IMAGE+'uploads/';

            //const response = await axios.get(BASE_URL_API2+'blog/last/item');
            //console.log("DATA BLOG LATEST:",response.data);
            //this.latestBlog = response.data;
            this.latestBlog = {"data":[{"id":71,"category_id":"29,31","title":"Think Of WordPress Web Development Agency In St. Petersburg","content":"<p>Startups need a website that is both completely functional and interesting. For the website to succeed, youll need a skilled web development team, whether it serves as a lead generator or a platform that offers services to clients.<br>A web development company may assist you with more than just your online presence, from back-end to full-stack and more. They can, among other things, develop apps or assist with data management for e-commerce. In conclusion, if you can manage your lead generation and other marketing responsibilities, a team of highly skilled developers can be wonderful for your company.&nbsp;</p>\r\n<p><br>WordPress<br>Small companies and online stores of all sizes can use WordPress for developing websites. It is flexible, so you can do anything to customize your thought process. The sites built on WP are mobile-responsive and add great value. Since it is an open-source platform, everyone can access the code. That implies that any problems and hazards may be seen and fixed right away.<br>SEO<br>The fierce competition among businesses in the digital world might provide you with the competitive edge you need. However, search engine optimization mostly depends on the design of your website.<br>An utterly optimized website is key to effective web construction and helps draw in highly beneficial search engine traffic. Keyword searches in Google and other search engines are fundamental that reflect how consumers find information. A websites ability to attract visitors will be greatly aided by the use of relevant keywords and themes.<br>Your business will benefit from increased website traffic, which can help you with the following:<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Assess your marketings ROI to gauge its effectiveness.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;To make wise decisions, gain knowledge about your audience.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Boost your search engine optimization and authority.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Increase conversions, provide more leads, and ultimately attract more consumers.<br>To improve your websites search engine ranks and draw in more people, you can use a variety of SEO techniques on each page.<br>In addition to coding and quality control, building a website entails other factors. The vision and business plan of a firm are taken into account when developing a website by reputable companies.<br>They put into practice the techniques based on the clients aims and objectives as well as the demands of the clients customers. Web development process should be a natural part of growing your organization rather than an afterthought.&nbsp;<br>It makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer.</p>","summary":"Web development process should be a natural part of growing your organization rather than an afterthought. \r\nIt makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer","image":"OG-Banner-12.jpg","date":"2022-09-21","slug":"think-of-wordpress-web-development-agency-in-st.-petersburg","view_count":null,"status":1,"meta_title":"Think Of WordPress Web Development Agency In St. Petersburg","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development","meta_description":"Web development process should be a natural part of growing your organization rather than an afterthought. \r\nIt makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer.","url_handle":"","created_by":"Mick","created_at":"2022-8-19 7:25:56","modified_at":"21-8-2022"}]};
            //const response = await axios.get(BASE_URL_API+'blog.php');

            //const response2 = await axios.get(BASE_URL_API2+'blog/all/remove-last');
            //console.log("DATA BLOG:",response2.data);
            //this.blogList = response2.data;
            this.blogList = {"listing":[{"id":1,"category_id":"1,2","title":"Amplify business through social media marketing","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Concept</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">The way businesses locate and engage with their audiences has changed dramatically as a result of social media. Given that 3.5 billion individuals (almost half of the worlds population) use it on a daily basis, its no surprise that 73 percent of marketers believe social media have an influence in persuading clients.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">In todays world, social media platforms are the most important tools for businesses and startups to connect with their customers, market their products, and publicize themselves. Social media networks may assist company increase revenue and generate leads.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Big Wave Development (BWD) and its plethora of activities</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">At BWD, WORK always starts with WHY. Technology has no chance against a missions passion in the battle for brand domination. That&rsquo;s the reason for existence of &ldquo;WHY&rdquo;, with purpose comes zeal, and zeal is what motivates us. What&rsquo;s your motivation?</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Its no easy task to stand out in the crowded tech industry. We thrive to build unique and bold ideas as a part of work culture to penetrate <strong>social media marketing</strong> platform. We make relentless research to match up to your expectation.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">You get a thorough, well-rounded effort when you hire us for social media promotion. All programs are tailored to your specific requirements, but they all include the following:</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Account Management Facility: Well handle all aspect of your social media advertising campaigns, starting with determining the best platforms for your target demographic and developing a customized approach. Give us your old campaigns to revamp, or well create new accounts for you.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Innovative Technologies: Were always experimenting with new services and unique ideas to ensure that our clients have access to cutting-edge approaches before their competitors do.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">It would be silly to expect benefit from <strong>social media marketing</strong> overnight. Indeed, establishing a presence and demonstrating a ROI will most certainly take years. However, by using social media properly, it would help in developing long-term relationships that will outlast any advertisements yo&nbsp;u may run.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Ad Creation and Testing: After identifying target audience, the next step would be to send message and match their suitability. The most important - and enjoyable - aspect of any <strong>social media marketing</strong> campaign is audience testing. To find the perfect client, you have to use umpteen data than you can think.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Optimization: We provide testing offers, and develop landing pages for optimization services. Generating campaigns for higher leads is also a part of our work process.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Updates and Reporting: We always monitor, and look for constant updates to pace up with the changing environment. This keeps us motivated to serve better.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Be it any platform such as Facebook, LinkedIn, Instagram, and others, we always look to serve more and better for our clients. Well use the same adaptability to help you make the greatest decisions for your company based on your objectives.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Be ready to fly high with us at 7901 4th ST N STE 8022, St. Petersburg, FL 33702 or call +1 727 300 6264 for further clarification.</span></p>","summary":"BWD can use social media advertising services and maximize a great return on your investment because of the depth and breadth of our knowledge and experience.","image":"amplify_business.jpg","date":"2022-05-27","slug":"amplify-business-through-social-media-marketing","view_count":11,"status":1,"meta_title":"Amplify business through social media marketing","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"BWD can use social media advertising services and maximize a great return on your investment because of the depth and breadth of our knowledge and experience.","url_handle":"undefined","created_by":"Mike Boggus","created_at":"2022-05-27","modified_at":"14-6-2022"},{"id":2,"category_id":"31","title":"Bank on New Techniques to Promote Gaming Website","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Introduction</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Building an online gaming site requires flawless content, a market gap, and social media management. As the gaming community now has access to a wealth of knowledge, it is up to you to break through the ceiling and conquer the online world.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It&rsquo;s difficult to start a <strong>gaming website</strong>, but it may be quite beneficial, especially if you want to build a solid portfolio. Keeping up with current and upcoming gaming and technology innovations is the most effective way of addressing information demand.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Ways to Promote</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">There can be several ways that can be adapted to promote <strong>gaming websites</strong>. Some of them are: Optimization: There are a plethora of paid and free keyword research tools accessible online to assist you in your hunt for less competitive and high search volume keywords to employ in creating content and promoting your <strong>gaming website</strong>. Additionally, image optimization through the use of high-quality images will aid you in attracting a larger audience.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Social Media Campaigns: It includes campaigns on various social media platforms such as Facebook, Instagram, Twitter, and similar types. Almost everyone on the planet spends a considerable period every day on social media, so make sure your game website includes both Facebook and Instagram profiles.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Unique Content: There are numerous methods for creating original content. If you have the abilities, consider infusing your ideas and describing how it works through, which will help to increase the number of people that visit your<strong> gaming website</strong>. Discussing various topics related to winning strategies, latest features, and various upcoming contests can help draw participants. Brand Influencers: In today&rsquo;s environment, influencers are akin to celebrity endorsements. Having the proper individual advertise your <strong>gaming website</strong> to the right demographic can have a major impact on how well it performs, and this strategy can propel your website to new heights. It can attract more participation.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Trendy Approach: In the online gaming world, there&rsquo;s always something significant going on, and a new game challenge pops up every single day. Millions of players use search engines to locate solutions or whatever is trending as a result of these overnight escalating demands. Similarly, apps can be downloaded from play store and used to meet the demand of the gamers. Verbal Approach: Family and friends can be utilized through this mode as well. These are also key traffic sources for your site. Focus on building relationships with your subscribers and followers to acquire favorable feedback and referrals. You can also market your business by participating in relevant forums or leaving comments on relevant blog posts without coming across as overtly commercial.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Conclusion</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It&rsquo;s fine to market your <strong>gaming website</strong> over the internet, and keep your branding consistent. You need to be immediately recognizable. Use the same color scheme, language, and voice tone as well as identical thumbnails. When it comes to branding, it&rsquo;s not just about the title and looks of your <strong>gaming website</strong>; it&rsquo;s about all of the advertising imagery as well. To ensure that people are familiar with you, your appearance, and your game website, put your brand on everything you do in your marketing effort.</span></p>","summary":"Developing new techniques to promote your gaming website can be helpful once you know the tricks.","image":"gaming_site_Techniques.jpg","date":"2022-05-26","slug":"bank-on-new-techniques-to-promote-gaming-website","view_count":4,"status":1,"meta_title":"Bank on New Techniques to Promote Gaming Website","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Developing new techniques to promote your gaming website can be helpful once you know the tricks.","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-26","modified_at":"12-6-2022"},{"id":3,"category_id":"31","title":"Benefits of Designing a Creative Gaming Website","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Backdrop</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">An online game is an activity that is played in part or entirely over the Internet or another computer network. It is not only restricted to video games, but includes gambling, betting, an other similar types as well.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Every year, the gaming industry releases hundreds of new games with improved user interfaces and design methods that provide a fulfilling and pleasurable user experience.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Websites for amusement are also established and updated, as this is the primary channel for promoting and showcasing games. Potential players can better comprehend and engage in it faster if the apparent view is interesting.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Gaming isn&rsquo;t just for pleasure, excitement, or entertainment. It also provides great benefits for people of all ages. As a result, it enhances memory and promotes rapid decision-making. Gaming can encourage players to take risks and endure in the face of failure, which can improve man&rsquo;s ability to deal with adversity.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>How can the design of a gaming website help business KPIs?</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">One can employ proper webpage blueprint as part of the marketing strategy for promoting the game. The internet site gives potential consumers their first view and helps them decide whether or not to test it. Existing players will have the opportunity to learn about some cool features that aren&rsquo;t immediately obvious in the game. This will keep them interested for a longer period.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Requisites for a creative gaming website</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">First and foremost, you must choose who you want to reach. It is ineffective to blast commercials at everyone everywhere. The aims and objectives should be established after that. In a nutshell, all stakeholders must think about the goal of a creative design. Although this may appear selfevident, it is frequently overlooked. You may easily choose the format of the website after you&rsquo;ve answered all of these questions.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Website Design Agency Florida</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Big Wave Development (BWD) works on several types of Creative Gaming Website Desig such as Stand-alone, Landing pages, and Reviews/Info sections.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Stand-alone Creative Sites: Many online games are built indifferently with its purpose. Some of these may simply be promotional webpage created before the release. Gaming websites can also serve as a community platform in addition to storing content. Rich background imagery, clean text blocks, and plenty of white space allow the page to breathe and avoid being cluttered.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Landing Pages: The website of a gaming studio or publisher is typically more corporate. One can find content about recruitment and investment, significant team members, studio legacies, game portfolios, and other topics.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Review/Info Section: Gamers require updates just as much as everybody else does. Many information portals have been established to keep gamers informed about the latest developments in the video game industry. There you will find information on the most recent gaming events, gamer merchandise, and much more.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">The craftsmanship of the highly skilled technocrats of <strong>Website Design Agency Florida</strong> ensures to provide the very best for the clients.</span></p>","summary":"Get inspired by an appealing and innovative gaming design that can assist gamers in creating websites and creating customer base.\r\n","image":"gaming_website_design.jpg","date":"2022-05-25","slug":"benefits-of-designing-a-creative-gaming-website","view_count":1,"status":1,"meta_title":"Benefits of Designing a Creative Gaming Website","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Get inspired by an appealing and innovative gaming design that can assist gamers in creating websites and creating customer base.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-25","modified_at":"12-6-2022"},{"id":4,"category_id":"31","title":"Develop unique web development service to optimize performance","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Backdrop</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It&rsquo;s crucial to scan the internet to see what other people are doing and saying as you study the fundamentals of web development and want to expand your expertise. While periodicals and books are fantastic for staying up to date on trends, web engineering blogs offer a wealth of new, free knowledge.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">This topic is a pleasant area with numerous benefits, but it is one of those jobs that require constant learning and self-improvement. It&rsquo;s difficult to keep ahead in your job when there are so many programming languages to choose from. It&rsquo;s also a field that&rsquo;s always evolving. You must be aware of any changes, whether the industry pushes for new standards or a key development tool is updated.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Requisites</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">If you want your website, you&rsquo;ve probably considered which firm to work with. There are numerous internet-based service organizations around the world, but not all of them provide quality assistance. To achieve top-notch performance and leave its customers delighted, a top-ranking business must combine inventive web design with cutting-edge technology, provide excellent support, build a solid website project, and be open to learning new ways.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Role of BWD</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Be it enterprise-advanced web integration, e-commerce development, strategic consulting, or many more, <strong>B</strong>ig <strong>W</strong>ave <strong>D</strong>evelopment (<strong>BWD</strong>) has it all. It is a web-based service provider, with its base in Florida. This <strong>web development company</strong> not only provides service across the country but globally as well. It examines the technical and business needs of the web app and recommends the most appropriate technology, as well as established methods and agile project management.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">The team of BWD seeks to transform ideas into a functional, market-ready product that satisfies your technical objectives. The organization employs the most up-to-date technologies that entail ensuring efficient development while creating powerful and scalable apps with pixel-perfect design and well-written code at their core. The Front-End and Back-End aspects of the product are both given equal attention. The attractiveness of a product means nothing if it doesn&rsquo;t have a solid foundation that will come in helpful as the service expands.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">BWD&rsquo;s bespoke website development services combine creative thinking with technical expertise to provide your business with the tools and technologies it needs to succeed. It provides corporate website services for any of your business difficulties, whether it&rsquo;s generating a new competitive advantage or increasing efficiency across the firm.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Through self-introspection, you will extract vital information about your company during the Assessment. All of this will be rewarded with a complimentary digital maturity assessment and actionable next steps to get your company up to speed and innovating in today&rsquo;s fast-paced, digitally accelerated world.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">If you have an idea for a future product, all you have to do is contact at 7901 4th ST N STE 8022, St. Petersburg, FL 33702, or call +1 727 300 6264 for further clarification.</span></p>","summary":"A strong portfolio of BWD demonstrates a companys expertise, talents, and qualifications. Its also a good approach to learning about the companys offerings.\r\n","image":"optimize_performance.jpg","date":"2022-05-24","slug":"develop-unique-web-development-service-to-optimize-performance","view_count":0,"status":1,"meta_title":"Develop unique web development service to optimize performance","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"A strong portfolio of BWD demonstrates a companys expertise, talents, and qualifications. Its also a good approach to learning about the companys offerings.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-24","modified_at":"12-6-2022"},{"id":5,"category_id":"31","title":"Helping you out with best practices in Email Template Design","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Introduction</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Design can make or break your consumer relationship when it comes to email marketing. Two-thirds of people would prefer to read a nicely designed structure than a lack-luster one and 80% of people will delete it right away if it doesn&rsquo;t look good on their mobile device.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Email design is the process of creating an email that engages and resonates with your company&rsquo;s target audience through strategic ideas. Your delineation should be appealing to all subscribers and optimized for them.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Features of Best Practices in Email Template Design</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">To produce engaging graphics, you don&rsquo;t need expert graphic blueprint abilities; simply follow some best practices and reap the rewards.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Layout and Structure: BWD follows the best practices in designing the structure and layout. Depending on the type of message you&rsquo;re sending, the format of your will vary. A transactional email, a newsletter, and a DEM (direct email marketing) are all very different, and your sketch should reflect this. We&rsquo;ll look at different kinds and styles and structural techniques in this part. Types: Several types such as Welcome Series, Re-engagement, Promotional, Survey, Events (Webinar), Drip Sequence, Updates/Announcements are all part of our comprehensive package. The appearance of an email has a significant influence on whether or not it is read. A modular structure is easy to comprehend and seems to be accessible on any portable device such as a mobile.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Role of Orientation: This plays a pivotal role in creating templates. Inverted pyramid email layout, Gutenberg diagram email layout, Z-pattern, and F-pattern are some of the patterns that are being followed for superlative results.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Role of Header: The subject line, sender name, and send date are all critical pieces of information that a good header provides to the recipient. Preheader text is also a wonderful location to include information that encourages readers to checkout.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Body: The body text should be interesting and personal, appropriately portraying your company&rsquo;s personality and establishing a relationship with the reader. Keep your core point in mind and be specific about what you&rsquo;re asking the reader to do.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">CTA: The header and body should direct the reader to the CTA button. If you&rsquo;re having a sale, create a sense of urgency and prepare a specific landing page for this CTA. Make sure your CTA button is robust so it will render correctly in any inbox when you build it.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Footer: The footer for a brand typically includes social media connections as well as the company&rsquo;s physical location. A conspicuous unsubscribe link must be included in the footer of your as well.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Visual Elements: It includes components such as Typography, Color, and Animated Content. Animated GIFs can be used to entertain readers or to show how to utilize your product. These can add humor and draw attention.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Bottom Line</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Don&rsquo;t forget to create an inclusive email that considers your audience&rsquo;s numerous differences, from gender and race to ability, culture, age, and more. Your consumer base is made up of a variety of people, thus your marketing strategy shouldn&rsquo;t cater to just one.</span></p>","summary":"Are you prepared to make creative email templates? Big Wave Development is an option to consider. You can get started with one of our hundreds of templates.\r\n","image":"help_practice_design.jpg","date":"2022-05-23","slug":"helping-you-out-with-best-practices-in-email-template-design","view_count":0,"status":1,"meta_title":"Helping you out with best practices in Email Template Design","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Are you prepared to make creative email templates? Big Wave Development is an option to consider. You can get started with one of our hundreds of templates.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-23","modified_at":"12-6-2022"},{"id":6,"category_id":"31","title":"How to Develop Intriguing Website Marketing Strategies?","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Overview</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">With over 1.8 billion websites, including your competitors&rsquo;, you&rsquo;ll need a strategy to get the bulk out of your website promotion campaign. It would help you attract higher clients, develop better trade relations, and most importantly help create money. Gone are the good old days, when people used to throng over by words of mouth. The transformation in the digital world has compelled large-scale organizations to adopt more fierce strategies to penetrate the untapped market and have a larger pie of the market.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Website Marketing Company Florida</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>B</strong>ig <strong>W</strong>ave <strong>D</strong>evelopment (<strong>BWD</strong>) is no different in making the most out of website promotion strategies to reach out to potential customers for their clients. It is considered one of the most reputed <strong>website marketing companies in Florida</strong>, catering services for millions globally.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Big Wave Development (BWD) and its approach</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">The style adopted by BWD may look simple but done more professionally to fine-tune your outcomes. Some of the strategies that are adapted include:</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Build an attractive website: Designing an attractive website with easy-to-navigate features is one of the prime factors that need to be looked into while building a website. It should be customized with user-friendly features.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Submitting URL: Make sure to submit your site&amp;#39;s URL to Google once it&rsquo;s live. This first step will help Google find your site online faster than if you wait to find it on its own, which can take months.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Create a My Business account: When a user searches Google for local trade, whether it&rsquo;s a restaurant, hairdresser, or paving agency, it prioritizes regional search results. You must register for a free Google My Business (GMB) account for your organization to appear in these search</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">results. You may also contribute information about your company, such as its location, hours, images, and reviews, which can be used as a free local branding tool.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">List Trade in all important directories: This is apt for service-oriented trade houses. They&rsquo;re used to identify regional service providers, and now since most contain user reviews, they&rsquo;re also commonly used to highlight an organization&rsquo;s level of service. It helps to get trusted reviews. Use Printed Materials to Promote Your Website: Your online address should be included on all</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">marketing materials; including signage, postcards, and anything else that bears your company&rsquo;s name and emblem. It helps to cater to a larger section of the audience.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Collaborate with surrounding business: This is almost applicable for all types of new set-ups to ensure a proper connection with the people surrounding the organization and understand their ethos to perform better.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Keep yourself abreast with new ideas: Maintaining your website&rsquo;s content serves two purposes in terms of keeping it marketable. For starters, it removes out-of-date material from your website and ensures that it is up to current. Second, frequently updated sites are usually thought to have higher search results.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It&rsquo;s sometimes easier said than done when it comes to branding a small business website. If you&rsquo;re still finding that you don&rsquo;t have enough time to devote to promoting your website, consider hiring a professional to help you.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Feel free to connect us at 7901 4th ST N STE 8022, St. Petersburg, FL 33702, or call +1 727 300 6264 for further clarification.</span></p>","summary":"BWDs digital strategies are always informed by data and industry best practices and are custom-tailored to match each clients budget and company objectives.\r\n","image":"marketing_strategies.jpg","date":"2022-05-21","slug":"how-to-develop-intriguing-website-marketing-strategies","view_count":0,"status":1,"meta_title":"How to Develop Intriguing Website Marketing Strategies?","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"BWDs digital strategies are always informed by data and industry best practices and are custom-tailored to match each clients budget and company objectives.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-21","modified_at":"13-6-2022"},{"id":7,"category_id":"31,30","title":"How to Elevate Email Design and Create a Strong Customer Base","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Background</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Email marketing enables sales and marketing teams across all industries and sizes of businesses to quickly communicate with clients. It&rsquo;s no wonder that it remains a popular tool for engaging with customers. It&rsquo;s simple, cost-effective, and an excellent way to reach out to your audience, no matter where they are.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Concept of Email Template Design</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">These templates are HTML files that are used in the creation of email campaigns. A decent template will allow you to copy and paste material directly into the file and will work on desktops, mobile devices, and across many email service providers. The same template can be used multiple times for campaigns with varied content.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Role of Big Wave Development (BWD)</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">BWD, with its base in Florida, is a big-time player in providing customized designs for its clients globally. The in-house experts know the nitty-gritty details of the customer needs and serve them with the best offering that helps their clients to augment their business operations.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Benefits of Custom Email Template Design</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Rather than composing a whole thing from scratch, simply add copy, photos, and links to an existing template before testing and sending it to your recipients. Successful marketing teams employ templates as one of their essential tools for staying nimble and scaling their marketing operations.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Some of the benefits are:</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Save Time: Email templates cut down on the time it takes to send emails, saving you time. Staffs don&rsquo;t have to enter photos or HTML coding if an outline is in place. Professionals read and respond to emails for 28% of their working hours. Each day, that equates to 2.6 hours. Users can save hours per week by using templates. As a result, productivity is increased.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Streamlining Document Management: Email templates make document management more efficient and convenient. Businesses keep a large number of documents on hand and refer to them as needed. Workers will have a simpler time selecting the proper one for their jobs, resulting in a much more efficient procedure.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Ensuring Brand Consistency: Users might take shortcuts to save tenure and forget to include a logo or the theme color. There&rsquo;s also the possibility of sending the incorrect content to the incorrect person, and your brand will appear inconsistent and amateurish as a result of all of these blunders. Maintaining templates will help to overcome such issues.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Reduces Manual Error: Every industry has to worry about human error. It can be damaging to the company&rsquo;s reputation if employees send emails with grammatical or spelling problems. The company&rsquo;s credibility and dependability may be questioned. Human mistake is minimized by using email templates. Employees just enter a little quantity of data, which reduces the chances of making mistakes.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">If you want to start using email templates, you should first figure out what you want to achieve. Is it a deal or an event you&rsquo;re promoting? Or are you looking for a way to boost participation? Make your aim the driving force behind the email template and content you send. Email templates will help you speed up the procedure regardless of the sort of template you use.</span></p>","summary":"Discover email list-building tactics to ensure that you have a huge audience of subscribers who are eager to hear and contribute to the companyss growth.\r\n","image":"strong_customer_base.jpg","date":"2022-05-20","slug":"how-to-elevate-email-design-and-create-a-strong-customer-base","view_count":0,"status":1,"meta_title":"How to Elevate Email Design and Create a Strong Customer Base","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Discover email list-building tactics to ensure that you have a huge audience of subscribers who are eager to hear and contribute to the companys growth.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-20","modified_at":"13-6-2022"},{"id":8,"category_id":"30,31","title":"Make sure your email marketing gamification boost your business","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Overview</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Email marketing refers to the practice of sending commercial messages to a large number of individuals via email. To promote a product or service to all potential and current consumers, it can be delivered in a variety of formats. One of the most effective techniques that can be adapted is mail solicitation.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>How does it help?</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">The operators benefit from these services since it allows them to stay in touch with their customers and engage them effectively. It can be used to target a certain group or individual player, and it can also be used to transfer highly tailored communications to retain outstanding relationships. It offers the opportunity to approach clients more officially.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It can be used to keep gamers interested regularly. Once a relationship has been established between a business and its customers, a strong client base can be built. This industry has shown tremendous potential in recent years. As a result, these platforms must build good marketing structures, and direct-mail advertising has provided them with the tools they need to do it efficiently!</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Role of Big Wave Development</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">If you want to start a direct-mail advertising campaign for your online gaming business or increase the performance of one you already have, you&rsquo;ve come to the perfect zone! We&rsquo;ll walk you through the intricacies of <strong>email marketing services</strong>, as well as some of the most effective tactics you can use right away. Furthermore, we will give you an automation platform that is specifically intended for the same industry to meet all of your marketing demands as a bonus!</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Strategies adopted</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Understanding your Customer Base: With a thorough study, we focus on the client segments that generate the most revenue. Email campaigns can be tailored to reach out to these groups individually based on their preferences.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Stressing on Motivating factors: Identifying these can assist you in engaging your audiences with effective marketing strategies that have a call to action that is followed. By following such a methodical approach, the companies can significantly increase their marketing ROI.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Send intimation during busy hours: Player&rsquo;s psychology varies depending on several things, which you may exploit with a little knowledge. Make the best use by determining the highest click-through rate (CTR) based on delivery time and setting up a timetable to send intimation during those hours. Experiment and pick up a few tips!</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Real-time submission: Send at the appropriate times and provide real-time responses. This unlocks a huge amount of value for your platform such as high-level real-time <strong>email marketing services</strong> will set it apart from the rest of the pack.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Offering the best deals: The success of an online gaming business is built on several pillars, one of which is providing your loyal clients with some of the best deals available. To stay ahead of the competition and keep your players, give timely discounts and exclusive deals.</span></p>","summary":"Still thinking of how email marketing services can help you out? It can build tailored and targeted messaging and in forging connections with your customer.\r\n","image":"email_gamification.jpg","date":"2022-05-19","slug":"make-sure-your-email-marketing-gamification-boost-your-business","view_count":0,"status":1,"meta_title":"Make sure your email marketing gamification boost your business","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Still thinking of how email marketing services can help you out? It can build tailored and targeted messaging and in forging connections with your customer.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-19","modified_at":"13-6-2022"},{"id":9,"category_id":"30,31","title":"Thinking of Best Email Marketing Agency to fuel your growth engine?","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Concept</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">With the Internet&rsquo;s tremendous growth throughout the years, it&rsquo;ll only be a matter of time before everyone on the planet is online. For a variety of reasons, email marketing is crucial. It&rsquo;s significant, for example, since it&rsquo;s extremely versatile. You can tailor the emails you send to advertise your company to meet any requirement.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Only social media channels come close to matching the reach of email marketing. However, where social media skills fall short, email fills the void. Having a killer email marketing strategy can provide a boost to the revenue-generating capacity of a sustainable business. One of the reasons why this type of marketing is critical for any organization and should not be overlooked is that it is very cost-effective.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Running an email marketing campaign is fairly simple. It takes little significant work to run it smoothly, and if you do it correctly, your email recipients will have no trouble checking out what you have to offer. However, making the right appeal to the right customer makes a difference.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Best Email Marketing Agency Florida</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Big Wave Development (BWD)</strong> increases the likelihood of your emails being delivered to the inbox. The highly-skilled email professionals will devise and implement a deliverability strategy that is specific to your needs. The unique strategy adopted helps to attract more clients. It can be included in any marketing strategy your company has without incurring any additional costs. This way, if you get anything from email marketing, you&rsquo;ll essentially be getting something for free.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Unique Quality</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Umpteen Data Usage: They have a tech-savvy team that understands how to integrate and leverage specifics for precision targeting.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Continuous Monitoring: Nothing significant has ever been achieved without tests; at the very least, we ensure that we keep track of our errors daily.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Proper Segmentation: Different customers have different problems, as they are not the same. Hence, streamlining the customers based on such issues is a key role.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Original and Authentic: BWD technocrats develop custom email layouts to provide originality and a sense of personal touch.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We think that tremendous achievement is built on the foundation of excellent relationships. We collaborate with our clients to determine their digital marketing vision so that we can assist them in achieving their objectives by helping them stand out in this fast-paced online environment. Growth Insights</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Email marketing isn&rsquo;t simply the most popular digital marketing channel; it&rsquo;s also the most valuable source of analytics data for businesses. As a result, email marketing is not only a powerful channel in and of itself, but the data collected from it also helps to support other marketing activities by giving relevant data insights.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">BWD has been devising similar strategies to stay ahead of the changing technology. As organizations are increasingly empowered to facilitate customer journeys and enhance lifetime value, improvements have lifted email marketing&rsquo;s prominence and brought it very near to achieving the up, close and personal marketing paradigm.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Applicants looking for infusing new email marketing strategies may contact 7901 4th ST N STE 8022, St. Petersburg, FL 33702 or call +1 727 300 6264 for further clarification.</span></p>","summary":"For business growth, BWD Email Marketing Agency is ideal for tailored and targeted messages.","image":"email_marketing_agency.jpg","date":"2022-05-17","slug":"thinking-of-best-email-marketing-agency-to-fuel-your-growth-engine","view_count":0,"status":1,"meta_title":"Thinking of Best Email Marketing Agency to fuel your growth engine?","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"For business growth, BWD Email Marketing Agency is ideal for tailored and targeted messages.","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-17","modified_at":"14-6-2022"},{"id":10,"category_id":"31,30","title":"Upscale Your Performance with Big Wave Development","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Brief Snippets</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">At Big Wave Development (BWD), we believe in no inspirational vision quests. Only practical collaboration and efficient solutions from erudite graduates with decades of expertise are on the table. Choosing a project organization might be a daunting task. Fortunately, we have decades of expertise in selecting, implementing, modifying, and maintaining some of the most sophisticated and popular web-based services in the business.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">This Florida-based association (BWD) has been helping companies and brands flourish for decades. We carry on that illustrious tradition by operating, inventing, and creating at the crossroads of talent and capability. We&rsquo;ll start by developing a digital strategy and integrated plan that will help you get excellent results with your Website Development, Website Designing, Digital Advertising, SEO, Social Media, UI/UX, PPC, and Email Marketing. You&rsquo;ll work with outstanding people who use established processes and thrive in a strong service culture to make things happen along the road.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Our Process</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We design tailored strategies and follow our sustainable processes to meet or exceed your campaign objectives, whether you&amp;#39;re aiming to boost organic visibility, reach a target ROI for sponsored ads, or increase sales on your e-Commerce website. With our professionals harnessing power-packed performance, our work frequently leads to a <strong>2-5X </strong>increase in key measures. We believe in leveraging the marketing Zone&rsquo;s potential for the benefit of your business.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Why Us?</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">On our journey so far, we have witnessed both challenges and success, yet we seem unfazed by any acts that seem to deter our self-belief and a passion to outperform the expectations. We provide an all-inclusive offering at a reasonable cost to ensure that you do need not to shell out an extra penny for working with us. With the assistance of our technocrats, we can guide you in navigating the path to long-term business success.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">We work with nonprofits, universities, government agencies, and international non-governmental organizations on digital transformation and branding. BWD will not only combine data and human-centricity, but it will also contribute to the improvement of the world &mdash; one step at a time.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">To achieve the greatest results, we consider how to weave your ideas and merge your brand with a relevant audience. We believe in redefining user experience benchmarks and setting milestones.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Conclusion</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We must also keep in mind that numerous challenges still exist in our everyday lives that require our attention and action. It can, at its finest, assist in the resolution of some issues. It has the potential to aggravate others in the worst-case scenario. And for many, it can be a welcome respite from the stresses of everyday life. Through Big Wave Development, you can continue to infuse ideas and explore opportunities while keeping your focus on reality so that we all can enjoy, create, shop, sell, dance, and live responsibly.</span></p>","summary":"A firm with solid experience that can deliver predictable and consistent results with a high ROI can help you plan and execute your marketing strategy.\r\n","image":"upscale_performance.jpg","date":"2022-05-15","slug":"upscale-your-performance-with-big-wave-development","view_count":0,"status":1,"meta_title":"Upscale Your Performance with Big Wave Development","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"A firm with solid experience that can deliver predictable and consistent results with a high ROI can help you plan and execute your marketing strategy.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-15","modified_at":"13-6-2022"},{"id":13,"category_id":"31,30","title":"Create a High Conversion Rate through Email Template Design","content":"<p><span style=\"font-family: arial, helvetica, sans-serif;\">Email generates the highest return on investment (ROI) of all the marketing channels accessible. As a result, its critical to create beautiful emails that benefit your company. Creating a Standout Email Template can attract clients to go through the content and possibly help in conversion.&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Some companies have found out how to create stunning emails. While simple text or bare-bones emails can still be very effective, there are occasions when you want to dazzle your subscribers with a creative, compelling, or deliciously modest blueprint.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>B</strong>ig <strong>W</strong>ave <strong>D</strong>evelopment (<strong>BWD</strong>), with its base in Florida, has been providing fascinating email template design for its clients globally to acquire and retain a significant client base.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18pt;\"><strong>Importance</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We live in a world that is awash in data. You cant expect your audience to read everything, no matter how involved they are with your brand. That is something that people do not have time for. They scan instead of reading, and this is where great template sketch plays a pivotal role.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Transforming standard scanning into an intelligent scanning and sending the proper message home with a variety of aesthetic solutions can help draw attention. You may use reading flow to your advantage and construct a path for your audience to follow that will provide them with essential information for your campaigns success.</span></p>\r\n<p><br><span style=\"font-size: 18pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Benefits</span></strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">There are a host of reasons that benefit an enterprise for drawing custom templates. Some of them are:</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull;&nbsp;&nbsp; &nbsp;It can promote brand identification.</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull;&nbsp;&nbsp; &nbsp;It has the potential to engage the audience with the brand.</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull;&nbsp;&nbsp; &nbsp;It has the potential to connect with the intended audience.</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull;&nbsp;&nbsp; &nbsp;It has the potential to leave a lasting impression.</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull;&nbsp;&nbsp; &nbsp;With marketing tactics, it can persuade people to change their minds.</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull;&nbsp;&nbsp; &nbsp;Custom email template design provides a solid platform on which to construct and implement a variety of marketing ideas and tactics.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Were all aiming to attain the same results from our emails &mdash; conversions &mdash; regardless of what business were in or what product or service were selling. With that in mind, several best practices can be applied across industries to help enhance your email strategy and increase overall conversions from marketing emails.&nbsp;</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif; font-size: 18pt;\"><strong>Tips to Design&nbsp;</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Every company strives for a high-converting email blueprint. Lets discuss some general guidelines for creating one for your next campaign.</span><br><span style=\"font-family: arial, helvetica, sans-serif;\">Proper Segmentation: Segmentation is essential for ensuring that your emails are sent to the correct recipients and increasing conversion rates. Whatever youre promoting or the action you want the recipient to do as a result of receiving the email must be compatible with the list of recipients. The list should be as divided as possible.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Content Alignment: The body text of your email isnt all that it is. Your call-to-action, preview text, and subject line should all be taken into consideration. The recipients experience with your email is influenced by all three of those factors.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Personalizing: Using customization tokens to inject things like company name, first name, or unique information from your CRM can increase engagement and capture a users attention right away.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Consider Length: Although there is no exact formula for the ideal email length, bear in mind that you want your material to be read and digested, not disregarded. This can often mean keeping it short and sweet to deliver value that is simple to understand and goes right to the point.</span></p>","summary":"This Florida based designing agency has provided some valuable tips to ensure a high conversion rate through email marketing.\r\n","image":"email-_template_design.jpg","date":"2022-05-14","slug":"create-a-high-conversion-rate-through-email-template-design","view_count":0,"status":1,"meta_title":"Create a High Conversion Rate through Email Template Design","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"This Florida based designing agency has provided some valuable tips to ensure a high conversion rate through email marketing.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-14","modified_at":"14-6-2022"},{"id":12,"category_id":"31,30","title":"Brandify Your Business Through A Proper Graphic Design","content":"<p><span style=\"font-family: arial, helvetica, sans-serif;\">The term graphic means &amp;quot;correct and precise visual.&amp;quot; The designing section is responsible for conveying a specific message professionally and aesthetically in <strong>graphic design</strong>. The goal here is to create a critical piece of information for the audience. Visual communication or communication design are also terms used to describe the <strong>graphic design</strong>. Graphic designers are needed by businesses to produce eye-catching marketing materials. Brochures, business cards, websites, booklets, stationery, and other printed materials are examples of such materials.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">The client and graphic designer are both involved in the creative process. The designer employs many visual arts, typographic abilities, photographs, and layout approaches to create memorable design works. The layout of numerous design elements in a <strong>graphic design</strong> is determined by the medium, such as posters, logos, packages, and websites. A strong and memorable logo is a must for any company looking to establish a brand identity. Graphic designers are also needed by firms to create unique mobile apps and social media pages for promotion.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>Graphic design</strong> has become an integral aspect of doing trades in both the physical and virtual worlds. The requirement for a good connection with the audience is one of the reasons why organizations are rapidly requesting more <strong>graphic design</strong> elements. <strong>Graphic design </strong>components that have been thoughtfully produced can assist in increasing sales. Any item with a distinctive design attracts people. A good design sends out a message to them. The message could be that the business that owns the design provides high-quality goods or services.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Role of Big Wave Development</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Big Wave Development comprises a highly-skilled workforce to meet the ever-growing demand for graphic designers with captivating ideas. To stay ahead of the competition, our technocrats devise a visual design plan to bring potential client&rsquo;s attention to firms. Entrepreneurs are increasingly aware of the need to properly communicate a message to their target audience, and this is where we fill in the gap by providing valuable informative creativity.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">It aids in the recognition of trade in its particular market. When we encounter a visually appealing logo often, it serves as a reminder of the brand behind the logo. Ads, websites, and business cards are all examples of designs that we see regularly. All of these designs bring the brand back to our minds. This aids with brand recognition. These are excellent strategies for establishing market confidence and goodwill.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">When a logo or other design has a strong aesthetic value, it gives viewers confidence. If the company&rsquo;s design features appeal to the senses, they have faith in its products or services. An appealing design can gradually help you draw more clients, and many of them will become loyal to your association. Another benefit is that it might influence clients to consider your agency. A well-designed brochure, for example, can give users a sense of belonging to an organization. Want to know more? You can always drop down at this Florida-based agency or call +1 727 300 6264 for further clarification.</span></p>","summary":"Get enriching graphic design through innovative techniques and sheer class from Big Wave Development experts.\r\n","image":"brandify_business.jpg","date":"2022-05-13","slug":"brandify-your-business-through-a-proper-graphic-design","view_count":0,"status":1,"meta_title":"Brandify Your Business Through A Proper Graphic Design","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Get enriching graphic design through innovative techniques and sheer class from Big Wave Development experts.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-13","modified_at":"13-6-2022"},{"id":11,"category_id":"31,30","title":"Strategize your email marketing through Us","content":"<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Meaning</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Sending promotional communications to a large number of people is known as email marketing. Its purpose is usually to produce sales or leads, although it may also include advertising.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Email is still the most used form of digital communication while being one of the oldest. Even though there are innovative ways to reach out to your audience and clients. Social media, live chat, and other communication tools are examples. Email, on the other hand, is the king of marketing channels, with more than 4 billion users.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Big Wave Development (BWD) makes it simple to create compelling emails that will aid you to develop your business and selling more products. Our persuasive tools will assist your company in getting the most out of your effort and investment.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Reason for Over Hype</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Despite the development of social media, many still prefer email to other channels. After all, what good is selling to someone who isn&rsquo;t present? The most convincing form of communication would be to send an email.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Here, lies the catch what BWD can do for you through their skilled professionals having tons of experience.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>How do we pull it off?</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We&rsquo;ll work with our front-end teams to create and implement new and enhanced ads, content, and lead capture pages to increase traffic, meaningful interaction, and ROI. Our team of skilled employees will use advanced tools for email marketing to edge out your competitors. While the campaign is online, our team is actively researching through a split testing methodology to produce a more robust outcome.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Impact on You</strong></span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">With intriguing subject lines and strategic marketing campaigns, we assist you to build deeper customer relationships, generating leads, and reinforcing the content behind your brand. Our strategy differs from one company to the next because no two firms are alike.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">BWD mail solicitation provides services that generate revenue to assist you to expand your business. Our eCommerce professionals, designers, marketers, and copywriters collaborate to help you reach your gainful objectives.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We take care of every single penny you invest with us to get the optimal return required for your business.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Support in building stronger customer relationships: Regular newsletters can cover a variety of themes, including the newest product launch, upcoming events, and company news. If a consumer has agreed to receive emails from you, don&rsquo;t be afraid to send them.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We help you Develop Brand identity: Through our services, we help grow your brand since it allows you direct access to your customer&rsquo;s or potential customer&rsquo;s email inboxes. Regular updates allow you to establish a distinct voice, style, and image for your subscribers.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Providing killer content: It isn&rsquo;t necessary to limit this strategy to the distribution of coupons and information about upcoming sales. We will use advanced strategies to send unique material that your subscribers will love reading&mdash;or watching&mdash;in addition to emails meant to generate traffic to your firm.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We welcome new or prospective applicants who are interested in availing our services. They may get in touch directly 7901 4th ST N STE 8022, St. Petersburg, FL 33702 or call +1 727 300 6264 for further clarification.</span></p>","summary":"A creative and well-equipped business organization with a game-changing approach in the e-mail solicitation world.\r\n","image":"strategize_email_marketing.jpg","date":"2022-05-10","slug":"strategize-your-email-marketing-through-us","view_count":0,"status":1,"meta_title":"Strategize your email marketing through Us","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"A creative and well-equipped business organization with a game-changing approach in the e-mail solicitation world.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-10","modified_at":"13-6-2022"},{"id":14,"category_id":"30,31","title":"Deal With The Best Of Email Marketing And Forget The Rest","content":"<p><span style=\"font-family: arial, helvetica, sans-serif;\">Our minds fall asleep when our eyes aren&rsquo;t entertained. We are visual beings that seek continual amusement and reward those who provide it to us. One of the criteria for success in email marketing is inventiveness. Through effective storytelling ideas, our team of in-house professionals knows how to elicit emotion, generate excitement, and become unforgettable.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Big Wave Development, an <strong>email marketing agency in Florida</strong>, knows how to &rsquo;Brand&rsquo; your proposal through the sheer class. Our band of experts listens to your ideas and weaves them with a customer perspective approach to create a niche. It&rsquo;s not just about generating conversions when it comes to creating amazing email content; it&rsquo;s also about invoking brand identity and communicating brand values to past, present, and future customers. Our team of specialists, who have years of experience with direct mail advertising, understands the enticing features that will draw in more visitors.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">This <strong>email marketing agency in Florida</strong> comprises talents who are restless and always ready to figure out new ideas and pamper with creativity. You will be able to send relevant messages and touch all of your users in a personalized manner, regardless of channel, thanks to our platform and strategic assistance.</span></p>\r\n<p><br><span style=\"font-size: 18pt; font-family: arial, helvetica, sans-serif;\"><strong>Why Us?</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull; &nbsp; &nbsp;We will identify the ideal strategy to develop your list with targeted high-quality leads, whether you want to employ popups, spin wheels, viral contests, or anything in between.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull; &nbsp; &nbsp;Utilize every email subscriber to the fullest extent possible. We can handle your mail solicitation on an ongoing basis and optimize every step of the buying process (using A/B testing, segmentation, and other techniques).</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull; &nbsp; &nbsp;With the use of automation, our team of professionals can help you send the correct email to the right person at the right time, increasing your profitability.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull; &nbsp; &nbsp;Are you concerned that your emails will not make it to the inbox and will instead end up in the spam folder? You no longer need to be. To ensure that your deliverability is as good as possible, we use the most up-to-date methods.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">&nbsp;&nbsp; &nbsp;&bull; &nbsp; &nbsp;We&rsquo;ll work with you to combine historical purchase data from your eCommerce platform with email engagement data from legacy email service providers. You can make better segmentation decisions and provide a more focused email if you create a complete profile for each subscriber.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">This <strong>email marketing agency in Florida</strong> assesses your circumstances and devises a strategy based on what is currently working in your sector. Our core services are laser-focused on what we do best to help you develop your agency. The dedicated technocrats burn the midnight oil to fructify the ideas of the clients and attain their shared dreams. By sending out newsletters, you can keep in touch with your customers via email. We create and design newsletters for distribution by email, website, or email delivery and management services. Big Wave Development team members assist in providing a personalized customer experience that fosters genuine relationships.</span></p>","summary":"Big Wave Development offers a unique mail advertising strategy to pump up your sales and provide higher ROI in a short span.\r\n","image":"email_marketing.jpg","date":"2022-05-09","slug":"deal-with-the-best-of-email-marketing-and-forget-the-rest","view_count":0,"status":1,"meta_title":"Deal With The Best Of Email Marketing And Forget The Rest","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Big Wave Development offers a unique mail advertising strategy to pump up your sales and provide higher ROI in a short span.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-09","modified_at":"14-6-2022"},{"id":15,"category_id":"31,30","title":"Dream Bigger To Choose Big Wave Development","content":"<p><span style=\"font-family: arial, helvetica, sans-serif;\"><strong>B</strong>ig Wave <strong>D</strong>evelopment (<strong>BWD</strong>) isn&rsquo;t just an organization supporting your web-based requirements in bits and pieces. Instead, the primary job of the team is to hear your problems and assist you with an all-inclusive plan that would help you grow sustainably.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">We are dedicated to market trust and openness, the evolvement of responsible leaders, thriving communities, and impact management. That&rsquo;s why we offer a variety of opportunities for our employees to contribute to the communities in which they live and work. We&rsquo;re motivating and encouraging people to make a difference in the world. We are deeply motivated by our ethics and devoted to supporting our workers, clients, and communities through difficult times. Growing into a community of troubleshooters collaborating in surprising ways has helped our stakeholders. We&rsquo;re using the power of our people, talents, and technology to help our clients develop trust and achieve results for their organizations. Our team acts as a cohesive unit in pushing you further and breaking the boundaries to evolve better as a &lsquo;<strong>Brand</strong>&rsquo;.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Out of the host of services we provide, the major ones include PPC, UI/UX design, SEO, Web Design, Web Development, Graphic Design, Email Marketing, and Digital Marketing. This organization helps individuals apply their skills outside of the workplace, resulting in a more diversified, tech-skilled workforce and cutting-edge digital solutions for clients and communities. Transformation doesn&rsquo;t happen overnight. It takes years of practice to give shape to a dream.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Sustained results can only be achieved by thinking holistically and combining the correct mix of knowledge and tech-powered digital transformation. Our committed and forward-thinking community of troubleshooters assists businesses in positioning themselves for the future. Investing with us can only ensure you that you are in safe hands to grow futuristically. This Florida-based association has positioned itself as one of the top-notch organizations catering services to its clientele globally.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Depending on your trade or stage of improvement, we come in a variety of shapes and sizes. Nothing accelerates change quicker than the proper combination of people, goods, and technology, as we&rsquo;ve learned through experience. It can be aptly mentioned that &lsquo;We Have It All&rsquo;. The highly-skilled in-house experts with tons of experience, and a gallon of business value would help you delve deep into market capitalization. Having a value creation strategy would help you prioritize your strategic goals and pursue improvement with confidence. To stay up-to-date and in the know in a human-led and tech-powered world, you&rsquo;ll need new viewpoints and fresh insights. Get practical advice on how to make better use of technology to achieve long-term results and establish trust with Tech Effect.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">To be effective, any fruitful relationship needs effort on both ends. Our skilled technocrats work with our stakeholders to understand the why behind their business, the goals they want to achieve, and the impact this will have on their consumers and business. We then weave this information into a unique and authentic marketing strategy to get us there together.</span></p>","summary":"Big Wave Development helps you seize today’s opportunity and enroot the path of futuristic development through innovative and sustainable practice.\r\n","image":"choose_bwd.jpg","date":"2022-05-05","slug":"dream-bigger-to-choose-big-wave-development","view_count":0,"status":1,"meta_title":"Dream Bigger To Choose Big Wave Development","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"Big Wave Development helps you seize today’s opportunity and enroot the path of futuristic development through innovative and sustainable practice.\r\n","url_handle":"undefined","created_by":"Mick","created_at":"2022-05-05","modified_at":"14-6-2022"},{"id":20,"category_id":"30","title":"Build Your Business By A Professional Logo Designing Service","content":"<p><!-- x-tinymce/html --></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">A logo typically reflects a company&rsquo;s name and purpose through visual features such as shapes, inscriptions, and images. In most cases, a good logo harmoniously incorporates all of these features. It&rsquo;s important to note, however, that a strong brand logo serves a purpose more than simply representing the agency. Also, with the correct strategic logo sketch, professionals can communicate their message or story through their logo. Users eventually associate a logo with the name. This creates a strong emotional connection with the brand, as well as brand recognition and trust.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">Big Wave Development, a <strong>logo design company in Florida</strong>, has been creating logos for various organizations across the globe since its inception. Not only does it serves as the association&rsquo;s face, but it also emphasizes the brand&rsquo;s core objective. For both small and large organizations, the corporate world is a highly competitive domain. As a result, you should do everything necessary to keep your brand in the spotlight and increase its recognition. Having a professionally created logo that is aligned with your business concept is one of the finest ways to establish relevance and credibility.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">The visual representation of a brand and the foundation of its branding is a logo. Logos that are well-designed make your business stand out from the crowd. If done well, it attracts attention and leaves a lasting impact. This <strong>Logo design company in Florida</strong> stresses simple yet innovative ideas to connect to the audience. According to research, you just have a few seconds to make a good first impression. People may be prompted to make a hasty decision and interact with you because of your logo. Customers are more inclined to buy from you once you&rsquo;ve accomplished this and invited them into your store, whether physical or electronic.</span></p>\r\n<p><br><span style=\"font-family: arial, helvetica, sans-serif;\">The components of a Logo consist of Image, Typography, Color, and Tagline. The picture can be anything from simple static symbols to sophisticated sketches. It&rsquo;s important to think about image size and location for optimum visibility. It&rsquo;s also crucial to maintain the image scalable and clear. Typography, in general, refers to the visible font or text in the logo. The logo&rsquo;s color is critical in conveying the brand&rsquo;s visual representation. Indeed, the right color choice can highlight the organization&rsquo;s overall worth.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">The tagline is usually placed directly below and consists of a pre-written phrase or sentence. In most cases, it clarifies the brand&rsquo;s mission or serves as a catchphrase to entice new clients. It is not always necessary to include both a tagline and a logo to attract more viewers. However, more conversions can be gained by strategically placing with the tagline. It conveys the company&rsquo;s essential values concisely, attracting the desired demographic. Logos can also help an organization&rsquo;s reputation and professionalism by increasing brand loyalty and strengthening its legitimacy. All of these benefits contribute to the long-term and successful growth of your company.</span></p>","summary":"This Logo Design Company in Florida gives the brand a distinct character that elicits pleasant emotions, especially among loyal customers.","image":"professional_logo_designing.jpg","date":"2022-05-01","slug":"build-your-business-by-a-professional-logo-designing-service","view_count":0,"status":1,"meta_title":"Build Your Business By A Professional Logo Designing Service","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development\t","meta_description":"This Logo Design Company in Florida gives the brand a distinct character that elicits pleasant emotions, especially among loyal customers.","url_handle":"undefined","created_by":"Mike","created_at":"2022-05-01","modified_at":"14-6-2022"}]};


            //this.getData();
         },
         methods:{
              blogDetails(val){
                //console.log("ALERT :", val);
                //alert(val);
                 this.$router.push({
                  name: "blog-details",
                  params: { slug: val },
                });
              },
              moveUp(){
                  window.scrollTo(0,0);
              },
              //await axios.get(BASE_URL_API+'blog.php')
              // .then((response) => {
              //   console.log("DATA BLOG:",response);
                
              // })
              // .catch(({ response }) => {
              //   this.error = response;
              //   console.log("DATA ERROR: ",this.error);
              // });
      
         }
        };
</script>

<style>
   *{
    margin: 0;
    padding: 0;
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



/* banner start here  */

.banner-content{
    position: relative;
}
.banner-content {
    height: calc(100vh - 82px);
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
    font-size: 31px;
    margin: 25px 0;
    max-width: 901px;
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
    width: 30%;
}

/* banner end  */



/* benefit section start here */

.benifit  {
    background: #000;
    padding: 124px 0;
}
.benifit .beniImage img  {
    width: 100%;
    display: block;
}
.benifit .beniText  {
    padding-left: 50px;
}
.benifit .beniText h3  {
    font-weight: 400;
    font-size: 16px;
    color: #E64335;
    padding-bottom: 30px;
}
.benifit .beniText h3 span  {
    padding-right: 15px;
}
.benifit .beniText .baniClick a  {
    display: block;
    width: 100%;
}
.benifit .beniText .baniClick a h1  {
    font-weight: 700;
    font-size: 38px;
    line-height: 47px;
    color: #FFFFFF;
    display: block;
}
.benifit .beniText p  {
    font-weight: 400;
    font-size: 16px;
    line-height: 23px;
    color: #B5B5B5;
    padding-top: 35px;
    padding-bottom: 46px;
}
.benifit .beniText .baniBtn a  {
    width: 132px;
    height: 40px;
    border: 1px solid #FFFFFF;
    border-radius: 50px;
    font-weight: 400;
    font-size: 15px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
}

.benifit .beniText .baniBtn span  {
    width: 132px;
    height: 40px;
    border: 1px solid #FFFFFF;
    border-radius: 50px;
    font-weight: 400;
    font-size: 15px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* benefit section end */



/*blog section start here*/

.blogTab  {
    padding-top: 110px;
    padding-bottom: 97px;
    background: #F5F4EF;
    width: 100%;
}
/* .blogTab .blogTabBox .blogTabContainer  {
    padding-top: 73px;
} */
.blogTab .blogTabBox .blogTabBtn  {
    text-align: center;
}
.blogTab .blogTabBox .blogTabBtn button  {
    outline: none;
    background: none;
    border: none;
    font-weight: 300;
    font-size: 25px;
    color: #000;
    position: relative;
    transition: all ease-in-out 300ms;
    margin: 0 14px;
    cursor: pointer;
}
.blogTab .blogTabBox .blogTabBtn button::after  {
    content: "";
    width: 0%;
    height: 2px;
    top: 34px;
    left: 0;
    background: #D43F33;
    position: absolute;
    transition: all ease-in-out 300ms;
}
.blogTab .blogTabBox .blogTabBtn button.active:after  {
    width: 100%;
}
.blogTab .blogTabBox .blogTabBtn button.active,
.blogTab .blogTabBox .blogTabBtn button:hover  {
    color: #D43F33;
}
.blogTab .blogTabBox .blogTabContainer .cardPadding  {
    padding: 28px;
}
.blogTab .card-item{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.14);
    border-radius: 10px;
    padding-bottom: 33px;
    height: 100%;
    position: relative;
}
.blogTab .card-item img{
    width: 100%;
    display: block;
}
.blogTab .card-item .atle-text{
    padding: 0 10px 0 30px;
}
.blogTab .card-item .atle-text .date{
    display: flex;
    column-gap: 14px;
    margin-top: 20px;
}
.blogTab .card-item .atle-text .date img{
    width: 17px;
}
.blogTab .card-item .atle-text .date p{
    font-weight: 400;
    font-size: 16px;
    color: #D43F33;
}
.blogTab .card-item .atle-text a .headline  {
    width: 100%;
    display: block;
}
.blogTab .card-item .atle-text .headline h1 {
    font-weight: 600;
    font-size: 19px;
    color: #000000;
    padding: 15px 0 50px 0;
    display: block;
}
.blogTab .card-item .atle-text .btn{
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
.blogTab .card-item .atle-text .btn::after {
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
.blogTab .card-item .atle-text .btn:hover::after {
    transform: scaleX(1);
    top: 0;
    background: #D43F33;
}
.blogTab .card-item .atle-text .btn:hover{
    color: #fff;
    border-color: #D43F33;
}
.blogTab .views-gk{
    margin-top: 50px;
    display: flex;
    justify-content: center;
}
.blogTab .views-gk a {
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
.blogTab .views-gk a:hover {
    background: #a92920;
}
.blogTab .blogPaginition  {
    width: 100%;
}
.blogTab .blogPaginition .pagination  {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding-top: 92px;
}
.blogTab .blogPaginition .pagination .page-item .page-link  {
    width: 50px;
    height: 50px;
    background: #FFFFFF;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
    border-radius: 5px;
    font-weight: 400;
    font-size: 15px;
    color: #000000;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 8px;
    transition: all ease-in-out 300ms;
}
.blogTab .blogPaginition .pagination .page-item .page-link:hover,
.blogTab .blogPaginition .pagination .page-item .active  {
    background: #D43F33;
    color: #FFFFFF;
}

.blogBtnPosition {
    position: absolute;
    top: 85%;
    left: 31px;
}


.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-0.5 * var(--bs-gutter-x));
    margin-left: calc(-0.5 * var(--bs-gutter-x));
}

.row > * {
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
}


.container,
.container-fluid {
    width: 100%;
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 576px){
    .container {
        max-width: 540px;
    }
}
@media (min-width: 768px){
    .container{
        max-width: 720px;
    }
}
@media (min-width: 992px){
    .container {
        max-width: 960px;
    }
    .navbar-expand-lg {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
    .navbar-expand-lg .navbar-collapse {
        display: flex!important;
        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }
    .navbar-collapse {
        flex-grow: 1;
        align-items: center;
    }
    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
}
@media (min-width: 1200px){
    .container {
        max-width: 1140px;
    }
}
@media (min-width: 1400px){
    .container {
        max-width: 1250px;
    }
}


/*blog section end*/



/* Contact Section start here  */





.contact-section{
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
    background: #000000;
    border: 1px solid #696969;
    border-radius: 8px;
    height: 48px;
    flex-grow: 1;
    color: #FFFFFF;
    padding-left: 24px;
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





.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-0.5 * var(--bs-gutter-x));
    margin-left: calc(-0.5 * var(--bs-gutter-x));
}

.row > * {
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
}


.container,
.container-fluid {
    width: 100%;
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 576px){
    .container {
        max-width: 540px;
    }
}
@media (min-width: 768px){
    .container{
        max-width: 720px;
    }
}
@media (min-width: 992px){
    .container {
        max-width: 960px;
    }
    .navbar-expand-lg {
        flex-wrap: nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
    .navbar-expand-lg .navbar-collapse {
        display: flex!important;
        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }
    .navbar-collapse {
        flex-grow: 1;
        align-items: center;
    }
    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
      .col-lg-5 {
      flex: 0 0 auto;
      width: 41.66666667%;
      }
      .col-lg-6 {
      flex: 0 0 auto;
      width: 50%;
      }
      .col-lg-7 {
      flex: 0 0 auto;
      width: 58.33333333%;
      }
      .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
      }
}
@media (min-width: 1200px){
    .container {
        max-width: 1140px;
    }
}
@media (min-width: 1400px){
    .container {
        max-width: 1250px;
    }
}
@media (max-width: 991px)  {
  .benifit {
    padding: 50px 0;
  }
  .benifit .beniText {
    padding: 30px 15px 15px 15px;
  }
  .benifit .beniText h3 {
    padding-bottom: 20px;
  }
  .benifit .beniText .baniClick a h1 {
    font-size: 25px;
    line-height: 36px;
  }
  .benifit .beniText p {
    font-size: 14px;
    line-height: 21px;
    padding-top: 20px;
    padding-bottom: 26px;
  }
  .blogTab {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .blogTab .blogTabBox .blogTabContainer .cardPadding {
    padding: 15px;
  }
  .blogTab .card-item .atle-text .date p {
    font-size: 15px;
  }
  .blogTab .card-item .atle-text .headline h1 {
    font-size: 17px;
  }
  .blogTab .card-item .atle-text .btn {
    padding: 6px 20px;
    font-size: 14px;
  }
}

/* Contact Section end  */       
</style>