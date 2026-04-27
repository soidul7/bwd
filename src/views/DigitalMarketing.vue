<template>
    <MetaTag :title="title" :description="description"/>    
    <NavBar/>

    <div class="banner-content banner-style-nw" style="background-image: url('frontend/images/banner/bwd-bg1.jpg');">
      <div class="hero-text">
        <h1><strong>Digital Marketing</strong></h1>
        <p> Increase Your ROI And Put Your Brand To The Forefront </p>
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
     <!-- Brand Forefront section start here  -->

     <div class="brand-forefront">
       <div class="container">
         <div class="row">
           <div class="col-lg-6">
             <div class="article-ttx">
               <h3>Increase Your ROI And Put Your  <strong>Brand To The Forefront</strong> </h3>
               <p>Individuals' ways of finding and exploring different items or services have changed as technology has evolved. People's interactions with brands are likewise affected by these shifts. Use meaningful words that inspire your audience. Our experts can assist your target audience in choosing you from among hundreds of brands or service providers. Our talented team delivers real and inspirational digital solutions for some of the world's most well-known businesses.  </p>
             </div>

           </div>
           <div class="col-lg-6">
             <div class="bbr">
               <img src="frontend/images/service/dotlps.png" alt="">
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Brand Forefront section end  -->
     <!-- Personal Success section start here  -->


     <div class="personal-success">
        <div class="heading-title">
          <h2>We Have a Personal Stake In <strong>Your Success</strong></h2>
        </div>


        <div class="spli-cart">
          <div class="container">
            <div class="row gy-10 vr__column__line">

              <div class="col-lg-6 column-no-odd">
                <div class="item-img">
                  <img src="frontend/images/YourSuccess/Group.png" alt="" class="fistImg">
                </div>
              </div>
              <div class="col-lg-6 column-no-even">
                <div class="item-card">
                  <div class="card">
                    <h4>01. Digital Marketing</h4>
                    <p>Even the most seasoned B2B marketing executives can be perplexed by the fast-changing environment of digital marketing methods and technologies. We'll help you navigate this maze by developing and implementing a flexible marketing plan that integrates analytics, insights, and strategize your growth process.</p>
                  </div>
                  <div class="line__active">
                    <span></span>
                  </div>
                </div>
              </div>

              
              <div class="col-lg-6 column-no-odd">
                <div class="item-card">
                  <div class="card">
                    <h4>02. Successful Digital Marketing Strategies</h4>
                    <p>One of the cornerstones of effective digital marketing is that we should continuously be striving for betterment. Here, where the catch lies. We establish a plan that provides you with concrete strategic guidance on what to improve first on your website, as well as a prioritized digital marketing roadmap for instant traction and long-term growth.</p>
                  </div>
                  <div class="line__active">
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 column-no-even">
                <div class="item-img">
                  <img src="frontend/images/YourSuccess/Group(1).png" alt="">
                </div>
              </div>

              <div class="col-lg-6 column-no-odd">
                <div class="item-img">
                  <img src="frontend/images/YourSuccess/Group4f.png" alt="">
                </div>
              </div>
              <div class="col-lg-6 column-no-even">
                <div class="item-card">
                  <div class="card">
                    <h4>03. Connect. Deliver. Make Sense</h4>
                    <p>We are able to develop an extension between the company and its audience by investigating a client's business and brand. The delivery phase is all about finding answers and building a vibrant future. It's all about bringing the 'what' and expressing the 'why,' and that's what gets you results. We are emotionally connected enough to understand and deliver your requirements.</p>
                  </div>
                  <div class="line__active">
                    <span></span>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 column-no-odd">
                <div class="item-card">
                  <div class="card">
                    <h4>04. Brainstorming Ideas</h4>
                    <p>We come up with simple ideas in an innovative manner to make it interesting for your clients. We remove the guesswork for achieving better outcomes through the use of social media that produces results.</p>
                  </div>
                  <div class="line__active">
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 column-no-even">
                <div class="item-img">
                  <img src="frontend/images/YourSuccess/Group(1xs).png" alt="">
                </div>
              </div>

              

            </div>
          </div>
        </div>


     </div>


      <!-- Personal Success section end  -->
     <!-- Contact Section start here  -->

     <StayConectedWith/>
    
     <!-- Contact Section end  -->



     <!-- Footer section start here  -->
     <FooTer/>
     <transition name="pop" appear>
        <PopUp v-if="showPopup" :callback="clickClose"/>
     </transition>
</template>

<script>
  import MetaTag from '../components/MetaTag.vue'
   import FooTer from '../views/FooTer.vue'
   import NavBar from '../views/NavBar.vue'
   import PopUp from '../views/PopUp.vue'
   import StayConectedWith from '../components/StayConectedWith.vue'
   export default {
    name: 'ServicePage',
    components: {
      NavBar,
      FooTer,
      PopUp,
      StayConectedWith,
      MetaTag
    
    },

  data() {
    return {
        showPopup:false,
        title:"Digital Marketing Agency | Big Wave Development LLC",
        description:"Traditional and Digital Marketing are used to launch, grow, and reinvent brands. For a remarkable brand experience that drives business results, contact us. "
  
    }   
  },
  methods:{
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

}


</script>


<style scoped>
   *{
    /* margin: 0;
    padding: 0; */
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
.banner-content .hero-text h1{
    font-weight: 300;
    font-size: 65px;
    color: #000000;
    line-height: 72px;
}
.banner-content .hero-text h1 strong{
    font-weight: 700;
}
.banner-content .hero-text p{
    color: #D43F33;
    font-weight: 400;
    font-size: 31px;
    margin: 20px 0 56px;
}
.banner-content .hero-text .hero-button-sctn{
    display: flex;
    justify-content: center;
    align-items: center;
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
    border-radius: 50px;
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




/* Brand Forefront section start here  */

.brand-forefront{
    background-color: #000000;
    padding: 118px 0;
}

.brand-forefront .article-ttx{
    margin-top: 40px;
}

.brand-forefront .article-ttx h3{
    font-weight: 300;
    font-size: 48px;
    margin-bottom: 38px;
    color: #FFFFFF;
    line-height: 1;
}
.brand-forefront .article-ttx h3 strong{
    font-weight: 700;
}
.brand-forefront .article-ttx p{
    font-weight: 400;
    font-size: 16px;
    color: #B5B5B5;
    padding-right: 10%;
}
.brand-forefront .bbr{
     height: 100%;
     display: flex;
     align-items: center;
 }

.brand-forefront .bbr img{
    display: block;
    width: 100%;
}

/* Brand Forefront section end  */




/* Personal Success section start here  */
.personal-success .spli-cart .row.gy-10{
    row-gap: 166px;
}
.personal-success .spli-cart .vr__column__line{
    position: relative;
}
.personal-success .spli-cart .vr__column__line::before {
    content: '';
    position: absolute;
    width: 0.5px;
    top: -93px;
    left: 50%;
    bottom: 9%;
    background-color: #000000;
    transform: translateX(-50%);
}

.personal-success{
    padding: 108px 0 180px;
    background-color: #F5F4EF;
}
.personal-success .heading-title{
    text-align: center;
    max-width: 800px;
    width: 100%;
    margin: 0 auto 200px;
}
.personal-success .heading-title h2 {
    font-weight: 300;
    font-size: 52px;
    text-align: center;
    color: #000000;
}
.personal-success .spli-cart .item-img img{
    display: block;
    max-width: 100%;
    height: auto;
    flex-shrink: 0;
}
.personal-success .spli-cart .item-img img.fistImg{
    width: 88%;
}
.personal-success .spli-cart .item-card .card{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    padding: 70px 60px 70px 74px;
}
.personal-success .spli-cart .item-card .card h4{
    font-weight: 700;
    font-size: 25px;
    color: #000000;
    margin-bottom: 30px;
}
.personal-success .spli-cart .item-card .card p{
    font-weight: 400;
    font-size: 16px;
    color: #353535;
    line-height: 24px;
}
.personal-success .spli-cart [class^="col"] {
    position: relative;
}

.personal-success .spli-cart .column-no-even .item-card{
    padding-left: 80px;
}
.personal-success .spli-cart .column-no-even .item-img{
    display: flex;
    justify-content: end;
}
.personal-success .spli-cart .column-no-odd .item-card{
    padding-right: 80px;
}
.personal-success .spli-cart .item-card .line__active{
    width: 25px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #FFFFFF;
    border: 1px solid #000000;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.personal-success .spli-cart .column-no-even .item-card .line__active{
    left: -13px;
}
.personal-success .spli-cart .column-no-odd .item-card .line__active{
    right: -13px;
}

.personal-success .spli-cart .item-card .line__active span{
    width: 13px;
    height: 13px;
    display: block;
    position: relative;
    border-radius: 50%;
    background-color: #D13F33;
}

/* Personal Success section end  */



/* Contact Section start here  */

.contact-section{
    margin-top: 0px;
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



/* ---------------------------------------------------------------------------- */

/* ================== responsive home page start ========================= */


@media (max-width: 1199px){

    .banner-content .hero-text h2 {
        font-size: 45px;
        line-height: 1.2;
    }
    .banner-content .hero-text h1 {
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
    .brand-forefront .article-ttx h3,
    .personal-success .heading-title h2 {
        font-size: 35px;
        line-height: 1.2;
    }
    .brand-forefront .row{
        row-gap: 40px;
    }
    .contact-section .meet-cart .text-ast h2 {
        font-size: 28px;
        margin-bottom: 5px;
    }
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
    .contact-section .contdw-row-gap {
        row-gap: 30px;
    } 
    .brand-forefront .article-ttx p{
        font-size: 15px;
    }
}
@media (max-width: 991px) {
    .brand-forefront .article-ttx p{
        padding-right: 0;
    }
    .personal-success {
        padding: 70px 0;
    }
    .personal-success .heading-title {
        margin: 0 auto 70px;
    }
    .personal-success .spli-cart .row.gy-10 {
        row-gap: 70px;
    }
    .personal-success .spli-cart .vr__column__line::before{
        content: unset;
    }
    .personal-success .spli-cart .item-card .line__active{
        display: none;
    }
    .personal-success .spli-cart .column-no-odd .item-card,
    .personal-success .spli-cart .column-no-even .item-card{
        padding-left: 0;
        padding-right: 0;
    }
    .personal-success .spli-cart .column-no-even .item-img {
        justify-content: center;
    }
    .personal-success .spli-cart .item-img img{
        margin: 0 auto;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(1) {
        order: 0;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(2) {
        order: 1;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(3) {
        order: 3;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(4) {
        order: 2;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(5) {
        order: 4;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(6) {
        order: 5;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(7) {
        order: 7;
    }
    .personal-success .spli-cart .vr__column__line > :nth-child(8) {
        order: 6;
    }
    .brand-forefront .article-ttx h3,
    .personal-success .heading-title h2 {
        font-size: 28px;
        text-align: center;
    }
    .brand-forefront .article-ttx p{
        font-size: 14px;
        text-align: center;
    }
    .brand-forefront {
        padding: 60px 0;
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
    .banner-content .hero-text .hero-button-sctn{
        margin-bottom: 50px;
    }
    .banner-content {
        min-height: unset;
        margin-top: 120px;
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
    .blog-news-sect .heading-title {
        margin-bottom: 36px;
    }
    .contact-section .atcle-area h3, .contact-section .fild-cnt h3 {
        font-size: 24px;
        margin-bottom: 16px;
    }
}
@media (max-width: 767px) {
    .grow-business .text-area h2,
    .contact-section .meet-cart .text-ast h2 {
        font-size: 20px;
    }
    .personal-success .spli-cart .item-card .card{
    padding: 30px;
}
    .grow-business .btn-sect a,
    .contact-section .meet-cart .cntct-btn a {
        padding: 8px 28px;
        font-size: 12px;
    } 
    .contact-section .meet-cart-align {
        top: 54px;
    }
    .contact-section::after {
        bottom: -90px;
    }
    .banner-content .hero-text h2 br,
    .banner-content .hero-text h1 br{
        display: none;
    }
    .banner-content .hero-text h2,
    .banner-content .hero-text h1 {
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
    .contact-section .meet-cart {
        padding: 40px 10px;
    }
    .grow-business .text-area h2,
     .contact-section .meet-cart .text-ast h2 {
        font-size: 20px;
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
