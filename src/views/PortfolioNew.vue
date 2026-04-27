<template>
<MetaTag :title="metaTitle" :description="metaDescription"/>   
 <NavBar/>
  <!-- banner start here -->

     <div class="banner-content banner-style-nw" style="background-image: url('frontend/images/banner/bwd-bg1.jpg');">
      <div class="hero-text">
        <h2><strong>Portfolio</strong></h2>
        <p> We're Very Experienced In Digital marketing  </p>
        <div class="hero-button-sctn">
         <button class="btn" @click="modelShow()">Let's Work Together</button>
        </div>
      </div>
      <div class="shape-float">
        <img class="img-posin-1" src="/frontend/images/banner/Shape1.png" alt="">
        <img class="img-posin-2" src="/frontend/images/banner/Shape2.png" alt="">
      </div>
    </div>
     


     <!-- benefit section end -->


     <!-- tab section start here -->


     <section class="portfolio-section-new">
         <div class="container">
            <div class="heading-title">
                <h2>Our <Strong>Portfolio</Strong> </h2>
            </div>
             <div class="row gy-4">
            <div 
                class="col-lg-4 col-md-6 cardPadding" 
                v-for="(logo, index) in logos" 
                :key="index"
            >
                <div class="card-item">
                <img :src="logo" alt="client logo">
                
                </div>
            </div>
                
                
            </div>
         </div>
     </section>

    <StayConectedWith/>
     <!-- Contact Section end  -->
     
    <FooTer/>
    <transition name="pop" appear>
        <PopUp v-if="showPopup" :callback="clickClose"/> 
    </transition>
</template>

<script>
import MetaTag from '../components/MetaTag.vue'
import FooTer from '../views/FooTer.vue'
import NavBar from '../views/NavBar.vue'
import PopularPage from '../views/PopularPage.vue'
import RecentPage from '../views/RecentPage.vue'
import PopUp from '../views/PopUp.vue'
import { useRoute } from 'vue-router'
import { BASE_URL_API,BASE_URL_API2 ,BASE_URL_IMAGE} from '../config'
import axios from 'axios'
import StayConectedWith from '../components/StayConectedWith.vue'

import { createLocal } from 'the-storages'
const mirror = createLocal()
const storage = mirror._prx

export default {
    name:'portfolio',
    components: {
        NavBar,
        FooTer,
        PopularPage,
        RecentPage,
        PopUp,
        MetaTag,
        StayConectedWith
    },
    data() {
        return {
            details:{},
            currentTabComponent: "PopularPage",
            showPopup:false,
            metaTitle:"Blog - "+this.metaTitle+" | Big Wave Development LLC",
            metaDescription:this.metaDescription,
            successmessage:'',
            errormessage:'',
            buttonclick:false,
            emailField:'',
            image_url:'',
            blogId:'',
            storageData: mirror,
            storage: storage,

            logos: [
                "frontend/images/client/adultempire.com.png",
                "frontend/images/client/betwinner2.com.png",
                "frontend/images/client/blowpass.com.png",
                "frontend/images/client/bybit.com.png",
                "frontend/images/client/clash.gg.png",
                "frontend/images/client/crazybet.com.png",
                "frontend/images/client/crushon.ai.png",
                "frontend/images/client/csgobig.com.png",
                "frontend/images/client/dateoverforty.com.png",
                "frontend/images/client/duckyluck.ag.png",
                "frontend/images/client/evilangel.com.png",
                "frontend/images/client/gammastats.com.png",
                "frontend/images/client/indiadafa.com.png",
                "frontend/images/client/masterplay.io.png",
                "frontend/images/client/mcluck.com.png",
                "frontend/images/client/ourdream.ai.png",
                "frontend/images/client/propnumberone.com.png",
                "frontend/images/client/slotsandcasino.ag.png",
                "frontend/images/client/traveltalktours.com.png"
            ],
        };
    },
    


}
</script>

<style lang="scss" scoped>

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
    padding: 105px 0 50px 0;
}
.benifit .beniImage img  {
    width: 100%;
    display: block;
}
/* .benifit .beniText  {
    padding-left: 50px;
} */
/* .benifit .beniText .baniClick a  {
    display: block;
    width: 100%;
} */
.benifit .beniText .baniClick h1  {
    font-weight: 300;
    font-size: 48px;
    line-height: 60px;
    color: #FFFFFF;
}
.benifit .beniText .baniClick h1 span  {
    font-weight: 700;
}
.benifit .beniText p  {
    font-weight: 400;
    font-size: 16px;
    line-height: 23px;
    color: #B5B5B5;
    padding-top: 35px;
    padding-bottom: 46px;
}

/* benefit section end */



/*blog section start here*/

.portfolioTabes  {
    padding-top: 104px;
    padding-bottom: 196px;
    background: #F5F4EF;
    width: 100%;
}
.portfolioTabes .blogTabBox  {
    width: 100%;
}
.portfolioTabes .blogTabBox .blogTabContainer  {
    padding-top: 88px;
}
.portfolioTabes .blogTabBox .blogTabBtn  {
    text-align: center;
}
.portfolioTabes .blogTabBox .blogTabBtn button  {
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
.portfolioTabes .blogTabBox .blogTabBtn button::after  {
    content: "";
    width: 0%;
    height: 2px;
    top: 34px;
    left: 0;
    background: #D43F33;
    position: absolute;
    transition: all ease-in-out 300ms;
}
.portfolioTabes .blogTabBox .blogTabBtn button.active:after  {
    width: 100%;
}
.portfolioTabes .blogTabBox .blogTabBtn button.active,
.portfolioTabes .blogTabBox .blogTabBtn button:hover  {
    color: #D43F33;
}
.portfolioTabes .card-item .card-item-image  {
    position: relative;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    transition: all ease-in-out 300ms;
}
.portfolioTabes .card-item .card-item-image:hover::after  {
    opacity: 1;
    transition: all ease-in-out 300ms;
}
.portfolioTabes .card-item .card-item-image img{
    width: 100%;
    border-radius: 10px;
    display: block;
    transition: all ease-in-out 300ms;
}
.portfolioTabes .card-item .card-item-image::after  {
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(212, 63, 51, 0.75);
    border-radius: 10px;
    position: absolute;
    transition: all ease-in-out 300ms;
    opacity: 0;
}
.portfolioTabes .card-item .card-item-image .card-item-image-btn  {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
    width: 100%;
    text-align: center;
    z-index: 1;
    opacity: 0;
    transition: all ease-in-out 400ms;
}
.portfolioTabes .card-item .card-item-image .card-item-image-btn a  {
    text-decoration: none;
    background: #fff;
    font-weight: 500;
    font-size: 14px;
    line-height: 28px;
    letter-spacing: 0.01em;
    color: #D43F33;
    padding: 9px 22px;
    border-radius: 50px;
}
.portfolioTabes .card-item .card-item-image:hover .card-item-image-btn  {
    opacity: 1;
}
.portfolioTabes .card-item .card-item-image .card-item-image-btn a span  {
    padding-right: 5px;
}
.portfolioTabes .card-item .atle-text{
    padding: 25px 0;
    text-align: center;
}
.portfolioTabes .card-item .atle-text h2 {
    font-weight: 600;
    font-size: 21px;
    line-height: 32px;
    color: #000000;
}
.portfolioTabes .card-item .atle-text p {
    font-weight: 400;
    font-size: 16px;
    line-height: 25px;
    color: #353535;
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


.main-footer {
    margin-top: 210px;
    padding-top: 50px;
}


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

.portfolio-section-new{
    padding: 100px 0;
    background-color: #f5f4ef;
}
.portfolio-section-new .heading-title{
    text-align: center;
    margin-bottom: 35px;
}
.portfolio-section-new .heading-title h2{
    font-weight: 300;
    font-size: 50px;
    color: #000;
}
.portfolio-section-new .heading-title h2 strong{
    font-weight: 700;
}
.portfolio-section-new .card-item{
    background: #0c0c0c;
    box-shadow: 0 4px 5px rgb(0 0 0 / 15%);
    border-radius: 9px;
    padding: 14px 36px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-bottom: 1.5rem;
    border: 1px solid #1851cda3;
}
.portfolio-section-new .card-item img{
    max-width:100%;
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
    .portfolio-section-new .heading-title h2 {
    font-size: 34px;
}
.portfolio-section-new[data-v-72c25c72] {
    padding: 40px 0;
}
.portfolio-section-new .card-item {
    padding: 10px 22px;
}
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