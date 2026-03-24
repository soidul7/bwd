<template>
    <div class="brand-forefront">
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <div class="article-ttx">
                <h3 v-html="title"></h3> 
                <span v-html="description" class="article-ttx2"></span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bbr">
                <img :src="require(`@/assets/images/YourSuccess/${defineComponentImage}`)" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>
</template>
<script>

import { defineComponent } from 'vue';
export default defineComponent({
    name: 'BrandForefront',
    props:['title', 'description','defineComponentImage'],
    data: () => ({
        
    }),
    created(){
        
    }
});

</script>
<style scoped>
.article-ttx2 {
    font-size: 16px;
    font-weight: 400;
    color: #B5B5B5;
    margin-bottom: 10px;
    display: flex;
    column-gap: 7px;
    padding-right: 4%;
}


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
    .article-ttx2{
        font-size: 15px;
    }
}
@media (max-width: 991px) {
    .article-ttx2 {
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
    .article-ttx2{
        font-size: 14px;
        text-align: left;
    }
    .brand-forefront {
        padding: 0px 0 30px;
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
    .personal-success .spli-cart .item-card .card {
        padding: 40px 30px;
    }    
    .personal-success {
        padding: 30px 0 30;
    }
    .personal-success .spli-cart .item-card .card h4 {
        font-size: 22px;
        margin-bottom: 20px;
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
</style>
