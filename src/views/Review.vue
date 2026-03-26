<template>
   <MetaTag :title="metaTitle" :description="metaDescription"/>   
    <NavBar/>
    <div class="banner-content">
      <div class="hero-text">
        <h2><strong>We hope you have thoroughly enjoyed our service.</strong> <br> It would be great if you could write a few lines about <br> the service you have availed recently.</h2>
        <p>
            We appreciate your time and effort for the feedback, which will motivate us <br> to improve our services.
        </p>
      </div>
      
    </div>
    <div class="container">
      <div class="review-sec">
         <p>john.doe@example.com</p>
         <textarea placeholder="Comments"></textarea>
         <input type="submit">
      </div>
    </div>
   
<FooTer />
</template>

<script>
import MetaTag from '../components/MetaTag.vue'
import FooTer from './FooTer.vue'
import NavBar from './NavBar.vue'

import { defineComponent } from 'vue';
export default defineComponent({
  name: 'Review',
  components: {
    NavBar,
    FooTer,
  
    MetaTag
  },
  data: () => ({
    title:'Our <strong>SEO Audit service</strong> will help you optimize your website',
    description:'<p>We burn midnight oil in conducting Website SEO Audit is for ALL types of businesses looking to improve their current website and get more qualified leads. If you&#39;re having trouble getting enough local traffic and need real, actionable recommendations on what to do next, we propose the website SEO analysis.<br><br> But there&#39;s a lot more to it than that. Your material must be relevant if you want to rank well in organic search engine results. It has to be able to tell your tale. It must highlight and be focused  on exactly what your audience is looking for.</p>',
    defineComponentImage: '01.png',
    metaTitle:"Website SEO Services | Big Wave Development LLC",
    metaDescription:"Top companies and brands put their trust in our SEO specialists. We are the best SEO agency providing services to boost Traffic growth and enable higher ranking."
  
  }),
});

</script>

<style scoped>
 .banner-content .hero-text h2 {
  font-weight: 300;
  font-size: 42px;
  color: #000000;
  line-height: 52px;}
  .banner-content .hero-text p{
    font-size:22px;
    line-height:30px;
  }
  .review-sec{
    background: #000;
    padding:30px;
    border-radius:10px;
    position:relative;
   
  }

  .review-sec::after {
  content: '';
  position: absolute;
  width: 330px;
  height: 332px;
  background-image: url(@/assets/images/pricing2/crcl.svg);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  top: -114px;
  left: -114px;
  z-index: -9;
}
  .review-sec p{
    font-size:22px;
    line-height: 30px;
    color:#fff;
    padding-bottom:20px;
  }
  .review-sec textarea{
    background: #fff;
    border-radius: 10px;
    font-size: 14px;
    height: 200px;
    color:#000;
    width: 100%;
    border: none;
    resize: none;
    padding: 10px;
  }

  .banner-content .hero-text{
    padding-top: 80px;
  }

  .review-sec input[type="submit"]{
    background: #D43F33;
    border-radius:50px;
    font-size:17px;
    line-height:55px;
    color:#fff;
    padding:0 30px;
    display: table;
    border: none;
    margin: 30px auto;
  }
  .banner-content {
  min-height: 260px;
  background: url(@/assets/images/pricing/pricing-banner-bg.svg);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: 0 0;
  z-index: -99;
}

@media only screen and (max-width: 1024px) {
.banner-content .hero-text h2{
    font-size:25px;
    line-height:35px;
}
}
</style>