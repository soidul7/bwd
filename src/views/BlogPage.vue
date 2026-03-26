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
             <div class="row" v-for="(blogLatest) in latestBlog.slice(0, 1)" v-bind:key="blogLatest.id">
                 <div class="col-lg-6">
                     <div class="beniImage">
                         <img :src="blogLatest.article_image">
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
                                <div class="col-lg-4 cardPadding" v-for="(blog) in blogList.slice(1)" v-bind:key="blog.id">
                                    <div class="card-item">
                                        <img :src="blog.article_image" alt="">
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
              <h6>Copyright @2024 <span> Big Wave Development</span> All Rights Reserved.</h6>
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
   import { BASE_URL_API2 ,BASE_URL_IMAGE, BASE_URL_API_DATA} from '../config'
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
            // this.latestBlog = {"data":[{"id":71,"category_id":"29,31","title":"Think Of WordPress Web Development Agency In St. Petersburg","content":"<p>Startups need a website that is both completely functional and interesting. For the website to succeed, youll need a skilled web development team, whether it serves as a lead generator or a platform that offers services to clients.<br>A web development company may assist you with more than just your online presence, from back-end to full-stack and more. They can, among other things, develop apps or assist with data management for e-commerce. In conclusion, if you can manage your lead generation and other marketing responsibilities, a team of highly skilled developers can be wonderful for your company.&nbsp;</p>\r\n<p><br>WordPress<br>Small companies and online stores of all sizes can use WordPress for developing websites. It is flexible, so you can do anything to customize your thought process. The sites built on WP are mobile-responsive and add great value. Since it is an open-source platform, everyone can access the code. That implies that any problems and hazards may be seen and fixed right away.<br>SEO<br>The fierce competition among businesses in the digital world might provide you with the competitive edge you need. However, search engine optimization mostly depends on the design of your website.<br>An utterly optimized website is key to effective web construction and helps draw in highly beneficial search engine traffic. Keyword searches in Google and other search engines are fundamental that reflect how consumers find information. A websites ability to attract visitors will be greatly aided by the use of relevant keywords and themes.<br>Your business will benefit from increased website traffic, which can help you with the following:<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Assess your marketings ROI to gauge its effectiveness.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;To make wise decisions, gain knowledge about your audience.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Boost your search engine optimization and authority.<br>&nbsp; &nbsp; &bull; &nbsp; &nbsp;Increase conversions, provide more leads, and ultimately attract more consumers.<br>To improve your websites search engine ranks and draw in more people, you can use a variety of SEO techniques on each page.<br>In addition to coding and quality control, building a website entails other factors. The vision and business plan of a firm are taken into account when developing a website by reputable companies.<br>They put into practice the techniques based on the clients aims and objectives as well as the demands of the clients customers. Web development process should be a natural part of growing your organization rather than an afterthought.&nbsp;<br>It makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer.</p>","summary":"Web development process should be a natural part of growing your organization rather than an afterthought. \r\nIt makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer","image":"OG-Banner-12.jpg","date":"2022-09-21","slug":"think-of-wordpress-web-development-agency-in-st.-petersburg","view_count":null,"status":1,"meta_title":"Think Of WordPress Web Development Agency In St. Petersburg","meta_key":"Website Development, Software Development, Development, Site Development, CRM Development","meta_description":"Web development process should be a natural part of growing your organization rather than an afterthought. \r\nIt makes sense to seek help from a reputable web development agency in St. Petersburg like Big Wave Development given the variety of advantages it can offer.","url_handle":"","created_by":"Mick","created_at":"2022-8-19 7:25:56","modified_at":"21-8-2022"}]};
            const response = await axios.get(BASE_URL_API_DATA+'get_all_blog_list');

            //const response2 = await axios.get(BASE_URL_API2+'blog/all/remove-last');
            console.log("DATA BLOG:",response.data);
            //this.blogList = response2.data;
            this.blogList = response.data.blog_data
            this.latestBlog = response.data.blog_data;

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