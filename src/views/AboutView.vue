<template>
    <MetaTag :title="title" :description="description"/>     
    <NavBar/>
     <!-- navigationend -->
     <!-- banner start here -->

     <div class="banner-content banner-style-nw" style="background-image: url('frontend/images/banner/bwd-bg1.jpg');">
      <div class="hero-text">
        <h2><strong>About Us</strong></h2>
        <p> Leap Way Ahead With Us For Stronger Growth </p>
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



      <!-- COUNTDOWN SECTION START HERE  -->

    <div class="count-down-area">
      <div class="container">
        <div class="row gx-0">
          <div class="col-lg-4 col-md-4">
            <div class="count-item">
              <h3> 90 + </h3>
              <p>Happy Clients</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="count-item hr-border">
              <h3>650 +</h3>
              <p>Project completed</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="count-item">
              <h3>  14 +  </h3>
              <p>Years Of Experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- COUNTDOWN SECTION END  -->





     <!-- web-based start here  -->

     <div class="web-based">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-md-12">
            <div class="article-side">
              <h2>We Are A Web-Based Marketing Agency With Expertise In <strong>E-mail Marketing, Strategic Planning, And Blueprint Road Mapping.</strong></h2>
              <p>We study market trends and customer reach. Our team is creative, strategic, and equipped with the latest skills and tools required to be a major game changer in the world of e-mail marketing.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-md-12">
            <div class="bner-post">
              <img class="w-100" src="frontend/images/meet/gg-dot-1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

   <!-- web-based end  -->

    

    <!-- Grow Business(newsletter) start here  -->


    <div class="grow-business grow-business-neo">
      <div class="container">

        <div class="row">
          <div class="col-lg-8">
            <div class="text-area">
              <h2>Ready to <strong>Grow Your Business?</strong></h2>
              <p>Contact us to work with a result-driven digital marketing agency</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="btn-sect">
              <a href="#" @click="modelShow()" class="btn get-free">
                Get Free Proposal
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Grow Business(newsletter) end  -->





    <!-- Build Your Business start here  -->

    <div class="build-your-business">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-md-12">
            <div class="bner-post">
              <img class="w-100" src="frontend/images/meet/Groupdot-w2.png" alt="">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-md-12">
            <div class="article-side">
              <h2>We Help You <strong>Build Your Business</strong></h2>
              <!-- <p>Proin lacinia scelerisque lectuson vulputate
               alivamus interdum orci in plaoreet.</p> -->
               <div class="lier-list">
                 <ul>
                   <li><span class="circle"></span> We provide you with the expert e-mail marketing professionals to work as part of your teams.</li>
                   <li><span class="circle"></span> Build your credibility and earn your customer’s loyalty through appealing e-mail templates.</li>
                   <li><span class="circle"></span> Reach out to a global or local target audience with advanced e-mail marketing strategies.</li>
                   <li><span class="circle"></span> Enjoy high ROI through well-planned and smoothly executed e-mail marketing campaigns.</li>
                 </ul>
               </div>
               <!-- <button class="btn">Learn More</button> -->
            </div>
          </div>

        
        </div>
      </div>
    </div>

   <!-- Build Your Business end  -->




       <!-- Services On Plate start here -->
     <div class="services-plate-sect">
        <div class="container">
          <div class="heading-title">
            <h2>Services On <strong>Plate</strong></h2>
            <p>We study market trends and customer reach. Our team is creative, strategic, and equipped with the latest skills and tools required to be a major game changer in the world of e-mail marketing.</p>
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





     <!-- Queries Accordion start here  -->


     <div class="queries-accordions">
       <div class="container">
         <div class="overdi-img">
          <div class="ext-round">
            <div class="row gx-0">
              <div class="col-lg-6">
                <div class="accd-side">
                  <h2>Burning <strong>Queries</strong></h2>
   
                 <div class="accordion">
   
                   <div class="accordion-item">
                     <button  class="accordion-button btn" v-on:click="acdnbtn('one')"  type="button" id="acdnbtnOne" :class="acdnbtn1DivShow? 'collapsed' :''">What do you mean by Digital Marketing?</button>
                     <div v-show="acdnbtn1DivShow" class="accordion-collapse collapse show" id="tggl-body-one">
                       <div class="accordion-body" >
                         <p>The promotion of brands to engage with potential customers via the internet and other types of digital communication is known as digital marketing, sometimes known as online marketing.</p>
                       </div>
                     </div>
                   </div>
   
                   <div class="accordion-item">
                     <button class="accordion-button btn"  v-on:click="acdnbtn('two')"  type="button" id="acdnbtnTwo" :class="acdnbtn2DivShow? 'collapsed' :''">What do you mean by E-mail Marketing? </button>
                     <div v-show="acdnbtn2DivShow" class="accordion-collapse collapse show" id="tggl-body-two">
                       <div class="accordion-body">
                         <p>Email marketing is a sort of direct marketing that involves sending customized, bulk emails to leads in order to educate and persuade them to do a specific action, which includes making a purchase.</p>
                       </div>
                     </div>
                   </div>
   
                   <div class="accordion-item">
                     <button class="accordion-button btn" v-on:click="acdnbtn('three')" type="button" id="acdnbtnThree" :class="acdnbtn3DivShow? 'collapsed' :''">What do you mean by Web Development?</button>
                     <div v-show="acdnbtn3DivShow" class="accordion-collapse collapse show" id="tggl-body-Three">
                       <div class="accordion-body">
                         <p>Web development is a broad term that encompasses all of the activities involved in creating websites for intranet or internet hosting. It entails, among other things, web design, web content development etc.</p>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <button class="accordion-button btn" v-on:click="acdnbtn('four')" type="button" id="acdnbtnFour" :class="acdnbtn4DivShow? 'collapsed' :''">What do you mean by Web Designing?</button>
                     <div v-show="acdnbtn4DivShow" class="accordion-collapse collapse show" id="tggl-body-Four">
                       <div class="accordion-body">
                         <p>The process of planning, conceiving, and organizing content for use on the internet is known as web design. Web apps, mobile apps, and user interface design are all included in this category.</p>
                       </div>
                     </div>
                   </div>

                 </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="accordions-banner">
                  <img src="frontend/images/meet/Rectangle-45.png" alt="">
                </div>
              </div>
            </div>
           </div>
         </div>
         
       </div>
     </div>


     <!-- Queries Accordion end  -->



     <!-- Contact Section start here  -->

     <StayConectedWith/>
    <FooTer />
    <transition name="pop" appear>
    <PopUp v-if="showPopup" :callback="clickClose"/>
    </transition>
</template>

 
<script>
import MetaTag from '../components/MetaTag.vue'
import NavBar from '../views/NavBar.vue'
import FooTer from '../views/FooTer.vue'
import PopUp from '../views/PopUp.vue'
import StayConectedWith from '../components/StayConectedWith.vue'
export default {
  name: 'AboutView',
  data() {
    return {
        acdnbtn1DivShow:false,
        acdnbtn2DivShow:true,
        acdnbtn3DivShow:false,
        acdnbtn4DivShow:false,
        // acdnbtnTwo:true,
        // acdnbtnThree:false,
        showPopup:false,
        title:"About Us | Big Wave Development LLC",
        description:"We are a top-tier firm that offers a full range of web-based services. Speak with the top-rated Web development agency in Florida that is expanding globally."
  
    }   
  },
  created(){

  }, 
 methods:{
     acdnbtn(type){
         if(type=='one'){
            this.acdnbtn1DivShow = true;
             this.acdnbtn2DivShow = false;
             this.acdnbtn3DivShow = false;
             this.acdnbtn4DivShow = false;
         } else if(type=='two') {
             this.acdnbtn2DivShow = true;
             this.acdnbtn1DivShow = false;
             this.acdnbtn3DivShow = false;
             this.acdnbtn4DivShow = false;
         } else if(type=='three') { 
             this.acdnbtn3DivShow = true;
             this.acdnbtn1DivShow = false;
             this.acdnbtn2DivShow = false;
             this.acdnbtn4DivShow = false;
         } else if(type=='four') {
             this.acdnbtn4DivShow = true;
             this.acdnbtn1DivShow = false;
             this.acdnbtn2DivShow = false;
             this.acdnbtn3DivShow = false;
        } else{
             this.acdnbtn3DivShow = false;
             this.acdnbtn1DivShow = false;
             this.acdnbtn2DivShow = false;
             this.acdnbtn4DivShow = false;
        }
     },
    modelShow(){
      //alert("HII",this.showPopup);
      this.showPopup=true;
    },
    clickClose(){
      //alert(id);
      //alert("hiiii Out");
      this.showPopup=false;
    },
    moveUp(){
           window.scrollTo(0,0);
      },
  },
  components: {
    NavBar,
    FooTer,
    PopUp,
    StayConectedWith,
    MetaTag
  }, 
}

 

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
    min-height: 480px;
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
    margin: 20px 0 56px;
}
.banner-content .hero-text .hero-button-sctn{
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
    color: #000;
    font-weight: 400;
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




/* COUNTDOWN SECTION START HERE  */

.count-down-area{
    padding: 74px 0;
    background-color: #000000;
}
.count-down-area .count-item{
    display: flex;
    align-items: center;
    flex-direction: column;
}
.count-down-area .count-item h3{
    font-weight: 700;
    font-size: 60px;
    color: #FFFFFF;
    line-height: 1;
}
.count-down-area .count-item p{
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 0.12em;
    color: #EA4335;
}
.count-down-area .count-item.hr-border{
    border-left: 1px solid #FFFFFF;
    border-right: 1px solid #FFFFFF;
}

/* COUNTDOWN SECTION END  */






/* web-based start here  */

.web-based{
    margin-top: 100px;
}
.web-based .article-side{
    margin-top: 35px;
}
.web-based .article-side h2{
    font-weight: 300;
    font-size: 50px;
    color: #000000;
}
.web-based .article-side h2 strong{
    font-weight: 700;
}
.web-based .article-side p{
    font-weight: 400;
    font-size: 16px;
    color: #353535;
    margin-top: 42px;
    line-height: 23px;
}

.web-based .bner-post img.w-100{
    width: 100%;
    display: block;
}

/* web-based end  */


/* Grow Business(newsletter) start here */

.grow-business{
    margin-top: 130px;
    margin-bottom: 144px;
}
.grow-business .container{
    padding: 40px 0 40px 65px;
    background-color: #D33F33;
    border-radius: 10px;
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

/* Build Your Business start here  */

.build-your-business .article-side{
    margin-top: 48px;
}
.build-your-business .article-side h2{
    font-weight: 300;
    font-size: 51px;
    color: #000000;
}
.build-your-business .article-side h2 strong{
    font-weight: 700;
}

.build-your-business .article-side .lier-list ul li{
    font-weight: 400;
    font-size: 16px;
    color: #353535;
    display: flex;
    margin-bottom: 20px;
    align-items: baseline;
} 
.build-your-business .article-side .lier-list ul li:last-child{
    margin-bottom: 0;
}
.build-your-business .article-side .lier-list ul li span{
    border: 1px solid #000000;
    border-radius: 50%;
    width: 11px;
    height: 11px;
    margin-right: 10px;
    display: inline-block;
    flex-shrink: 0;
}
.build-your-business .article-side .lier-list{
    margin-top: 62px;
}
.build-your-business .bner-post img.w-100{
    width: 100%;
    display: block;
}

/* Build Your Business end  */


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



/* Services On Plate end  */




/* Queries Accordion start here  */


.row.gx-0 > * {
    padding-right: 0 !important;
    padding-left: 0 !important;
}

.row.gx-0 {
    overflow: hidden;
    border-radius: 10px;
}

.queries-accordions{
    margin-top: 138px;
}
.queries-accordions .accd-side{
    background-color: #000000;
    padding: 50px 20px 50px 50px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.queries-accordions .accd-side h2{
    font-weight: 300;
    font-size: 46px;
    color: #FFFFFF;
    margin-bottom: 30px;
}
.queries-accordions .accd-side h2 strong{
    font-weight: 700;
}

.queries-accordions .accd-side .accordion .accordion-button{
    font-weight: 700;
    font-size: 19px;
    padding-left: 0;
    text-align: left;
    width: 100%;
    color: #FFFFFF;
    position: relative;
}

.queries-accordions .accd-side .accordion .accordion-button::after{
    flex-shrink: 0;
    width: 20px;
    height: 20px;
    content: "";
    background-image: url('@/assets/images/icon/dash-lg.svg');
    background-size: cover;
    background-repeat: no-repeat;
    transition: .2s ease-in-out;
    position: absolute;
    right: -5px;
    top: 50%;
    transform: translateY(-50%);
}

.queries-accordions .accd-side .accordion .accordion-button:not(.collapsed)::after{
    background-image: url('@/assets/images/icon/plus-lg.svg');
    transition: .2s ease-in-out;
}
.queries-accordions .accd-side .accordion{
    max-height: 430px;
    overflow-y: scroll;
    overflow-x: hidden;
    padding-right: 20px;
}
.queries-accordions .accd-side .accordion::-webkit-scrollbar {
  width: 1px;
}

/* Track */
.queries-accordions .accd-side .accordion::-webkit-scrollbar-track {
  background: transparent;
}

/* Handle */
.queries-accordions .accd-side .accordion::-webkit-scrollbar-thumb {
  background: #5151517d;
}

.queries-accordions .accd-side .accordion .accordion-item {
    border-bottom: 1px solid #FFFFFF;
    padding-bottom: 5px;
    animation-delay: 3.5s;
}
.queries-accordions .accd-side .accordion .accordion-item:last-child {
    border-bottom: none;
}
.queries-accordions .accd-side .accordion .collapse:not(.show) {
    display: none;
    transition: .2s ease-in-out;
}
.queries-accordions .accd-side .accordion .accordion-collapse{
    padding: 0 0 10px 10px;
}
.queries-accordions .accd-side .accordion .accordion-collapse p{
    font-weight: 400;
    font-size: 15px;
    color: #B5B5B5;
    padding-right: 10%;
}
.queries-accordions .accordions-banner{
    display: flex;
    height: 100%;
}
.queries-accordions .accordions-banner img{
    max-width: 100%;
    width: 100%;
    height: auto;
    display: block;
}
.queries-accordions .ext-round{
    padding: 0 15px;
}
.queries-accordions .overdi-img {
    position: relative;
}
.queries-accordions .overdi-img::after {
    content: '';
    position: absolute;
    width: 191px;
    height: 190px;
    background-image: url(@/assets/images/process/remote-circle.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    bottom: -65px;
    right: -48px;
    z-index: -1;
}


/* Queries Accordion end  */




/* Contact Section start here  */

.contact-section{
    margin-top: 184px;
    padding: 150px 0 20px 0;
    background-image: url(@/assets/images/location/bg-map.png);
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
    .queries-accordions .accd-side h2 {
        font-size: 40px;
        margin-bottom: 24px;
    }
    .contact-section .contdw-row-gap {
        row-gap: 30px;
    }
    .queries-accordions .accd-side .accordion .accordion-item {
        padding-bottom: 12px;
        margin-top: 6px;
    }
    .queries-accordions .accd-side {
        padding: 40px 30px;
    }
    .web-based .article-side p {
        margin-top: 15px;
    }
    .web-based .article-side h2,
    .build-your-business .article-side h2 {
        font-size: 35px;
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
    .banner-content .hero-text .hero-button-sctn .btn {
        padding: 10px 60px;
        font-size: 16px;
    }
    .banner-content .hero-text {
        padding: 0 15px;
    }
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
    .web-based {
        margin-top: 40px;
    }
    .grow-business {
        margin-top: 70px;
        margin-bottom: 70px;
    }
    .services-plate-sect {
        padding: 70px 0 70px;
        margin-top: 70px;
    }  
    .queries-accordions {
        margin-top: 80px;
    }   
    .services-plate-sect .card-wrapper .card-item {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .services-plate-sect .card-wrapper .card-item .overlay{
        margin-top: auto;
    }
}
@media (max-width: 991px) {
  .queries-accordions .accd-side .accordion {
        max-height: unset;
        overflow-y: unset;
        overflow-x: unset;
    }
    .queries-accordions .overdi-img::after{
        display: none;
    }
    .queries-accordions {
        margin-top: 70px;
    }
    .contact-section .atcle-area .count-down {
        gap: 20px 75px;
        margin-top: 30px;
    }
    .count-down-area .count-item h3 {
        font-size: 45px;
    }
    .shape-float {
        display: none;
    }
    .count-down-area .count-item p {
        font-size: 15px;
    }
    .web-based .article-side h2,
    .build-your-business .article-side h2 {
        font-size: 25px;
        text-align: center;
    }
    .web-based .article-side p {
        text-align: center;
    }
    .banner-content .hero-text .hero-button-sctn{
        margin-bottom: 50px;
    }
    .banner-content {
        min-height: unset;
        margin-top: 120px;
    }
    .services-plate-sect {
        margin-top: 70px;
    }
    .services-plate-sect {
        padding: 70px 0;
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
    .services-plate-sect .heading-title h2,
    .proven-section .heading-title h2,
    .blog-news-sect .heading-title h2 {
        font-size: 25px;
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
    .grow-business .text-area {
        text-align: center;
        margin-bottom: 20px;
    }
    .grow-business .container {
        padding: 28px 0;
    }
}
@media (max-width: 767px) {
  .grow-business .btn-sect {
    margin-top: 0;
}
  .grow-business .row{
    margin: 0;
  }
  
    .grow-business .text-area h2,
    .contact-section .meet-cart .text-ast h2 {
        font-size: 20px;
    }

    .grow-business .btn-sect a,
    .contact-section .meet-cart .cntct-btn a {
        padding: 8px 28px;
        font-size: 12px;
    } 
    .count-down-area .row.gx-0{
        row-gap: 30px;
    }
    .count-down-area .count-item.hr-border {
        border-left: 0;
        border-right:0;
    }
    .services-plate-sect {
        padding: 50px 0;
        margin-top: 40px;
    }
    .contact-section .meet-cart-align {
        top: 54px;
    }
    .contact-section::after {
        bottom: -90px;
    }
    .banner-content .hero-text h2 br{
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
    .grow-business {
    margin-bottom: 52px;
    padding: 0 15px;
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
        margin-top: 70px;
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
    .contact-section .meet-cart {
        padding: 20px 10px;
    }
    .contact-section .fild-cnt .form-group{
        flex-direction: column;
    }
}


/* ==================== Don't change, main column responsive start here ================= */
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-0.5 * var(--bs-gutter-x));margin-left:calc(-0.5 * var(--bs-gutter-x))}.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * 0.5);padding-left:calc(var(--bs-gutter-x) * 0.5);margin-top:var(--bs-gutter-y)}.container,.container-fluid{width:100%;padding-right:var(--bs-gutter-x,0.75rem);padding-left:var(--bs-gutter-x,0.75rem);margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}}@media (min-width: 768px){.container{max-width:720px}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}}@media (min-width: 992px){.container{max-width:960px}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}}@media (min-width: 1200px){.container{max-width:1140px}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}}@media (min-width: 1400px){.container{max-width:1250px}}
/* ==================== Don't change, main column responsive end ======================= */
 </style>