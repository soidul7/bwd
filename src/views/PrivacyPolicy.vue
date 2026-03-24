<template>
<MetaTag :title="metaTitle" :description="metaDescription"/>   
   <NavBar/>
    <!-- banner start here -->

     <div class="banner-content banner-content-about">
      <div class="hero-text">
        <h2><strong>Privacy Policy</strong></h2>
        <p> Big Wave Development LLC </p>
        <!-- <div class="hero-button-sctn">
         <button class="btn" @click="modelShow()">Explore</button>
        </div> -->
      </div>
      <div class="shape-float">
        <img class="img-posin-1" src="frontend/images/banner/Shape1.png" alt="">
        <img class="img-posin-2" src="frontend/images/banner/Shape2.png" alt="">
      </div>
    </div>
     
     <!-- banner end -->

     <!-- Digital marketing section start here  -->

     <!-- Digital marketing section end  -->

     <!-- Team Member start here -->

       <div class="services-plate-sect">
        <div class="container">
          <div class="heading-title">
            <!-- <h2><strong>Privacy Policy</strong></h2> -->
                <p>Big Wave Development LLC uses one or more third party ad serving technology to serve ads at this site and at our clients' sites. In the course of delivering an ad to you, the third-party ad serving party may place or recognize a unique cookie on your browser and use information (not including your name, address, email address or telephone number) about your visits to this and other Web sites in order to provide advertisements about goods and services that may be of interest to you. Big Wave Development and its third-party ad serving party uses "cookies" to enhance the Internet user's experience on the Web.</p>
                <br><p>Neither Big Wave Development LLC nor such third-party ad serving party uses these cookies to personally identify you in any way, and these cookies in no way damage your system or files. Although we believe that cookies help enhance your experience on the Web (by not repeatedly serving the same ads to you and delivering more relevant messages to you), neither Big Wave Development LLC nor its third-party ad serving party needs cookies to deliver ads to you. If you do not want the benefits of cookies, there is a simple procedure that allows you to deny or accept this feature. In order to "opt out" of the benefits of cookies, you may manually delete your cookies by following the instructions contained in the Help section of your browser.</p>
                <br><p>Big Wave Development LLC is committed to protecting the privacy of Internet users. Accordingly, we strictly adhere to all industry guidelines, including those established by the Direct Marketing Association. If you should have any questions or concerns regarding this Privacy Statement, please contact our Customer Services at info@bigwavedevelopment.com We use Big Wave Development LLC and other third-party advertising companies to serve ads when you visit our Web site.</p>
                <br><p>These companies may use information (not including your name, address, email address or telephone number) about your visits to this and other Web sites in order to provide advertisements on this site and other sites about goods and services that may be of interest to you. In the course of serving advertisements to this site, our third-party advertiser may place or recognize a unique "cookie" on your browser. Big Wave Development LLC is committed to protecting the privacy of Internet users. Accordingly, we strictly adhere to all industry guidelines. We recommend that you periodically review this Privacy Statement, as Big Wave Development LLC may update it from time to time.</p>
            </div>
       </div> 
      </div>
      
       <!-- Team Member end -->

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
      components: {
    NavBar,
    FooTer,
    StayConectedWith,
    PopUp,
    MetaTag
  },
  data() {
    return {
        showPopup:false,
        metaTitle:"Privacy Policy | Big Wave Development LLC",
    metaDescription:"This Privacy Policy of Florida based Big Wave Development explains and practices for collecting, using, and disclosing information while using the Service. "
  
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
.pHeight {
    height: 45px;
}
.pTag{
    font-size: 12px !important;
    text-align: center !important;
    color: #898989 !important;
    margin: 5px 0 15px !important;
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
    font-size: 65px;
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





/* Digital marketing section start here  */

.marketing-progress{
    background-color: #000000;
    padding: 136.5px 0;
}

.marketing-progress .article-ttx h3{
    font-weight: 300;
    font-size: 48px;
    margin-bottom: 25px;
    color: #FFFFFF;
    line-height: 1;
}
.marketing-progress .article-ttx h3 strong{
    font-weight: 700;
}
.marketing-progress .article-ttx p{
    font-weight: 400;
    font-size: 16px;
    color: #B5B5B5;
}
.marketing-progress .circle-bar{
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin: 50px 0 0;
}
.marketing-progress .circle-bar .item{
    display: flex;
    align-items: center;
    flex-direction: column;
}
.marketing-progress .circle-bar .progress-circle {
    font-size: 20px;
    margin: 5px;
    position: relative;
    padding: 0;
    width: 6em;
    height: 6em;
    background-color: #2A0D0A; 
    border-radius: 50%;
    line-height: 6em;
 }
.marketing-progress .circle-bar .progress-circle:after{
     border: none;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     text-align: center;
     display: block;
     border-radius: 50%;
     width: calc(100% - 22px);
     height: calc(100% - 22px);
     background-color: #000000;
     content: '';
 }
 .marketing-progress .circle-bar .progress-circle span {
    position: absolute;
    left: 0;
    display: block;
    color: #FFFFFF;
    z-index: 2;
    text-align: center;
    font-weight: 700;
    font-size: 32px;
    right: 0;
}
.marketing-progress .circle-bar .left-half-clipper { 
    border-radius: 50%;
    width: 6em;
    height: 6em;
    position: absolute;
    clip: rect(0, 6em, 6em, 3em);
 }
.marketing-progress .circle-bar .progress-circle.over50 .left-half-clipper {
    clip: rect(auto,auto,auto,auto);
    transform: rotate(-180deg);
 }
.marketing-progress .circle-bar .value-bar {
    position: absolute;
    clip: rect(0, 3em, 6em, 0);
    width: 6em;
    height: 6em;
    border-radius: 50%;
    background-color: #D33F33;
    box-sizing: border-box;
 }

.marketing-progress .circle-bar .progress-circle.over50 .first50-bar {
    position: absolute;
    clip: rect(0, 6em, 6em, 3em);
    background-color: #D33F33;
    border-radius: 50%;
    width: 6em;
    height: 6em;
}
.marketing-progress .circle-bar .progress-circle.p85 .value-bar {
    transform: rotate(325deg);
    animation: leftone 1s linear;
    -webkit-animation: leftone 1s linear;
}
.marketing-progress .circle-bar .progress-circle.p65 .value-bar {
    transform: rotate(240deg);
    animation: lefttwo 1s linear;
    -webkit-animation: lefttwo 1s linear;
}
.marketing-progress .circle-bar .progress-circle.p79 .value-bar {
    transform: rotate(310deg);
    animation: leftthree 1s linear;
    -webkit-animation: leftthree 1s linear;
}

@keyframes leftone  {
    0%  {
        transform: rotate(180deg);
    }
    100%  {
        transform: rotate(325deg);
    }
}
@keyframes lefttwo  {
    0%  {
        transform: rotate(180deg);
    }
    100%  {
        transform: rotate(240deg);
    }
}
@keyframes leftthree  {
    0%  {
        transform: rotate(180deg);
    }
    100%  {
        transform: rotate(310deg);
    }
}




 .marketing-progress .prgs-title{
    font-weight: 700;
    font-size: 18px;
    text-align: center;
    color: #FFFFFF;
    margin-top: 12px;
 }


 .marketing-progress .bbr{
     height: 100%;
     display: flex;
     align-items: center;
 }

.marketing-progress .bbr img{
    display: block;
    width: 100%;
}

/* Digital marketing section end  */










/* Team Member start here  */

.row .px-4{
    padding-right: 30px;
    padding-left: 30px;
}

.services-plate-sect {
    padding: 110px 0 162px;
    background: #F5F4EF;
}
.services-plate-sect .heading-title{
    /* text-align: center; */
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
}
.services-plate-sect .card-wrapper {
    margin-top: 170px;
}

.services-plate-sect .card-wrapper .card-item{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    text-align: center;
    height: 100%;
    position: relative;
    padding: 0 13px 52px;
}
.services-plate-sect .card-wrapper .card-item a{
    border: 1px solid #000000;
    border-radius: 50px;
    font-weight: 400;
    font-size: 15px;
    padding: 8px 28px;
    letter-spacing: 0.01em;
    color: #000000;
    position: relative;
    z-index: 1;
    overflow: hidden;
}
.services-plate-sect .card-wrapper .card-item a::after {
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
.services-plate-sect .card-wrapper .card-item:hover a{
    border-color: #D43F33;
    color: #fff;
}
.services-plate-sect .card-wrapper .card-item:hover a::after {
    color: #004965;
    transform: scaleX(1);
    top: 0;
    background: #D43F33;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img{
    width: 200px;
    height: 200px;
    position: relative;
    top: -70px;
    margin: 0px auto;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img .shape-img{
    display: block;
    max-width: 100%;
    position: relative;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img .shape-img.shape__1{
    left: -10px;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img .shape-img.shape__2{
    left: -20px;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img .shape-img.shape__3{
    left: -30px;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img .us_round{
    position: absolute;
    top: 0;
    left: 0;
    background-color: #C4C4C4;
    display: flex;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img .us_round img {
    border-radius: 50%;
    max-width: 100%;
    width: 100%;
}
.services-plate-sect .card-wrapper .card-item .fdxn-img::after{
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    aspect-ratio: 3/3;
    height: 150px;
}

.services-plate-sect .card-wrapper .card-item h4{
    color: #000000;
    font-weight: 700;
    font-size: 23px;
    margin: -32px 0 0;
}
.services-plate-sect .card-wrapper .card-item p{
    font-weight: 400;
    font-size: 17px;
    text-align: center;
    color: #D33F33;
    margin: 16px 0 26px;
}

/* Team Member end  */






/* Contact Section start here  */

.contact-section{
    margin-top: 0px;
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

/* ---------------------------------------------------------------------------- */

/* ================== responsive home page start ========================= */


@media (max-width: 1199px){
  .services-plate-sect{
    padding: 70px 0 100px;
  }
  .services-plate-sect .card-wrapper {
    margin-top: 150px;
}

    .banner-content .hero-text h2,
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
    .brand-forefront .article-ttx h3 {
        font-size: 35px;
        line-height: 1.2;
    }
    .brand-forefront .row{
        row-gap: 40px;
    }
    .marketing-progress .article-ttx h3 {
        font-size: 35px;
        line-height: 1.2;
    }
    .marketing-progress .article-ttx p {
        font-size: 15px;
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
    .services-plate-sect .card-wrapper .row{
        row-gap: 120px;
    }
}
@media (max-width: 991px) {
  .marketing-progress[data-v-699929ff] {
    padding: 80px 0;
  }
    .brand-forefront .article-ttx p{
        padding-right: 0;
    }
    .brand-forefront .article-ttx h3 {
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
    .marketing-progress .article-ttx h3 {
        font-size: 28px;
        text-align: center;
    }
    .marketing-progress .circle-bar {
        justify-content: center;
    }
    .services-plate-sect .card-wrapper .card-item .fdxn-img {
        width: 170px;
        height: 170px;
        position: relative;
        top: -75px;
        margin: 0px auto;
    }
    .marketing-progress .row {row-gap: 70px;}
    .marketing-progress .article-ttx p {
        font-size: 14px;
        text-align: center;
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
    .services-plate-sect {
        padding: 100px 0 110px;

    }

}
@media (max-width: 767px) {
    .services-plate-sect .card-wrapper .card-item .fdxn-img {
        width: 140px;
        height: 140px;
        position: relative;
        top: -60px;
        margin: 0px auto;
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
    .services-plate-sect {
        padding: 70px 0 40px;
    }
    .services-plate-sect .card-wrapper {
        margin-top: 140px;
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

</style>Terms and Conditions