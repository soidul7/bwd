<template>
<MetaTag :title="metaTitle" :description="metaDescription"/>   
   <NavBar/>
    <!-- banner start here -->

     <div class="banner-content thankyou-banner">
        <div class="hero-text">
            <img class="thank-brn" src="frontend/images/banner/thank-banner.png" alt="">
            <h1>Thank <strong> You</strong></h1>
            <p> For getting connected. Please cooperate till we respond to you. </p>
            <p class="sp-para">We have received your query and expedite it as early as possible. One of our representatives will get in touch with you to meet your business needs and solicit it to serve you better.</p>
            <div class="hero-button-sctn">
                <button class="btn" @click="backPage()"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>Go Back</button>
            </div>
        </div>
      <div class="shape-float">
        <img class="img-posin-1" src="frontend/images/banner/Shape1.png" alt="">
        <img class="img-posin-2" src="frontend/images/banner/Shape2.png" alt="">
      </div>
      <img class="ban-clu-img" src="frontend/images/banner/cloud-banner.png"  alt="">
    </div>
     
     <!-- banner end -->

        

     <!-- Footer section start here  -->
     <FooTer style="margin-top: 0px !important;" />
     <transition name="pop" appear>
        <PopUp v-if="showPopup" :callback="clickClose"/>
     </transition>
</template>

<script>
import MetaTag from '../components/MetaTag.vue'
import FooTer from '../views/FooTer.vue'
import NavBar from '../views/NavBar.vue'
import PopUp from '../views/PopUp.vue'
// import StayConectedWith from '../components/StayConectedWith.vue'
import { event } from 'vue-gtag'

export default {
    name:'ThankYou',
      components: {
    NavBar,
    FooTer,
    // StayConectedWith,
    PopUp,
    MetaTag
  },
  data() {
    return {
        showPopup:false,
        metaTitle:"Than You | Big Wave Development LLC",
        metaDescription:"We'll go into your data, examine your digital footprint, and provide recommendations to help you achieve your objectives with custom programmes"
  
    }   
  },
  setup() {
        const ContactUs = () => {
            event('ThankYou', { method: 'Google' })
        }

        return {
            ContactUs
        }
  },
  created(){
      this.moveUp();
  },
  methods:{
    modelShow(){
      //alert("HII",this.showPopup);
      this.showPopup=true;
    },
    backPage(){
        this.$router.back();
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
<!-- Global site tag (gtag.js) - Google Ads: 10925082080
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925082080"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10925082080');
</script> -->
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
.banner-content.thankyou-banner {
    min-height: 1080px;
    height: auto !important;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 86px;
}
.banner-content.thankyou-banner .thank-brn{
    max-width: 100%;
    display: block;
    height: auto;
}
.banner-content .hero-text {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}
.banner-content.thankyou-banner .hero-text h1{
    font-weight: 300;
    font-size: 112px;
    color: #000000;
    line-height: 1;
    margin-top: 20px;
}
.banner-content.thankyou-banner .hero-text.thankyou-banner h1 strong{
    font-weight: 700;
}
.banner-content.thankyou-banner .hero-text{
    max-width: 1040px;
    padding: 0 20px;
}
.banner-content.thankyou-banner .hero-text p:first-of-type{
    font-weight: 400;
    font-size: 33px;
    line-height: 30px;
    color: #000000;
    margin: 18px 0 15px;
    max-width: unset;
}
.banner-content.thankyou-banner .hero-text p.sp-para{
    font-weight: 400;
    font-size: 20px;
    line-height: 32px;
    text-align: center;
    color: #353535;
    margin: 0;
    max-width: unset;
}
.shape-float img{
    display: block;
}
.banner-content.thankyou-banner .shape-float img.img-posin-1{
    position: absolute;
    right: 0px;
    top: 40px;
}
.shape-float img.img-posin-2{
    position: absolute;
    bottom: 0;
    left: 22px;
    width: 22%;
}
.banner-content.thankyou-banner .hero-text .hero-button-sctn{
    margin-top: 32px;
}
.banner-content.thankyou-banner .hero-text .hero-button-sctn .btn {
    border: 1px solid #000000;
    border-radius: 50px;
    padding: 13px 50px;
    font-weight: 400;
    font-size: 21px;
    text-align: center;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    color: #000000;
    position: relative;
    overflow: hidden;
}
/*  */
.banner-content.thankyou-banner .hero-text .hero-button-sctn .btn:hover{
    color: #fff;
    border-color: #D43F33;
}

.banner-content.thankyou-banner .ban-clu-img{
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
}
/* banner end  */




/* ---------------------------------------------------------------------------- */

/* ================== responsive home page start ========================= */

@media (max-width: 1439px) {
    .banner-content.thankyou-banner {
        min-height: 900px;
        margin-top: 100px;
        padding-bottom: 210px;
    }
    .banner-content.thankyou-banner .hero-text h1 {
        font-size: 90px;
    }
    .banner-content.thankyou-banner .hero-text p:first-of-type {
        font-size: 30px;
    }
    .banner-content.thankyou-banner .hero-text p.sp-para {
        font-size: 19px;
        line-height: 25px;
    }

}

@media (max-width: 1360px) {
    .banner-content.thankyou-banner {
        min-height: unset;
        margin-top: 100px;
        padding-bottom: 210px;
    }
    
}



@media (max-width: 1199px){
    .banner-content.thankyou-banner .hero-text h1{
        font-size: 70px;
    }
    .banner-content.thankyou-banner .hero-text p[data-v-baefc6a2]:first-of-type {
        font-size: 26px;
        margin: 14px 0 12px;
    }
    .banner-content.thankyou-banner .hero-text p.sp-para[data-v-baefc6a2] {
        font-size: 18px;
        line-height: 23px;
    }
    .banner-content.thankyou-banner .thank-brn {
        width: 252px;
    }
    .banner-content.thankyou-banner {
        padding-bottom: 170px;
    }

    .banner-content .hero-text .hero-button-sctn .btn {
        padding: 10px 60px;
        font-size: 16px;
    }

    
}
@media (max-width: 991px) {
    .banner-content.thankyou-banner {
        padding-bottom: 0px;
         margin-top: 90px;
    }
    .shape-float {
        display: none;
    }
    .banner-content .hero-text .hero-button-sctn{
        margin-bottom: 50px;
    }
    .banner-content .hero-text{
        margin-bottom: 50px;
    }
    .banner-content {
        min-height: unset;
        margin-top: 120px;
    }
    .banner-content.thankyou-banner .hero-text h1 {
        font-size: 60px;
    }
    .banner-content.thankyou-banner .hero-text p:first-of-type {
        font-size: 20px;
        margin: 7px 0;
    }
    .banner-content.thankyou-banner .hero-text p.sp-para{
        font-size: 14px;
        line-height: 20px;
    }

}
@media (max-width: 767px) {
  .brand-forefront .article-ttx h3, 
    .brand-forefront .article-ttx p{
      text-align: center;
    }
    .brand-forefront {
        padding: 0 0 40px;
    }
    .brand-forefront .article-ttx h3 {
      font-size: 26px;
    }
    .brand-forefront .article-ttx p:first-of-type {
        margin-bottom: 20px;
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
    
}

@media (max-width: 576px) {

}

/* ==================== Don't change, main column responsive start here ================= */
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-0.5 * var(--bs-gutter-x));margin-left:calc(-0.5 * var(--bs-gutter-x))}.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * 0.5);padding-left:calc(var(--bs-gutter-x) * 0.5);margin-top:var(--bs-gutter-y)}.container,.container-fluid{width:100%;padding-right:var(--bs-gutter-x,0.75rem);padding-left:var(--bs-gutter-x,0.75rem);margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}}@media (min-width: 768px){.container{max-width:720px}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}}@media (min-width: 992px){.container{max-width:960px}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}}@media (min-width: 1200px){.container{max-width:1140px}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}}@media (min-width: 1400px){.container{max-width:1250px}}
/* ==================== Don't change, main column responsive end ======================= */

</style>