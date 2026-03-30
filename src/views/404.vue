<template>
    <NavBar/>
    <div class="banner-content">
      <div class="hero-text">
        <h2><strong>404 - Page Not Found</strong></h2>
        <p>Sorry, the page you are looking for does not exist.</p>
        
      </div>
      </div>
    <FooTer/>
</template>
<script>
import FooTer from '../views/FooTer.vue'
import NavBar from '../views/NavBar.vue'
import { defineComponent } from 'vue';

import 'vue3-carousel/dist/carousel.css';

export default defineComponent({
  name: '404',
  components: {
    NavBar,
    FooTer
  },
  data: () => ({
  }),
  async created(){
  },
  methods:{
    moveUp(){
        window.scrollTo(0,0);
    },
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