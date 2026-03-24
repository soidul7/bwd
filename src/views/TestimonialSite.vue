<template>
<MetaTag :title="title" :description="description"/>    
        <NavBar/>

    <!-- banner start here -->

     <div class="banner-content banner-content-about">
      <div class="hero-text">
        <h1><strong>Testimonials</strong></h1>
        <p> What Our Customers Are Saying</p>
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
           <div class="col-lg-6 col-md-6">
             <div class="article-ttx">
               <h3>What Are They Talking About <strong>Behind Our Back?</strong> </h3>
               <p><strong>Big Wave Development</strong> has been providing skilled performance through its highly crafted professionals. Our clients speak volumes of the services we have provided since our inception. Customized and tailor-made support from our end has made its way out of complex situations.</p>
             </div>

           </div>
           <div class="col-lg-6 col-md-6">
             <div class="bbr">
               <img src="frontend/images/testimonial/Group 110.png" alt="">
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Brand Forefront section end  -->



     <!-- testimonial card section start here  -->


     <div class="testimonial-card">
       <div class="container">
         <div class="row gy-150 ">
           <div class="col-lg-6 col-md-6">
             <div class="crd-item">
               <div class="prof-sct">
                 <div class="circle">
                   <img src="frontend/images/testimonial/1.png" alt="">
                   <span class="quote">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                   </span>
                 </div>
                 <div class="ttx">
                   <p>When you hire someone new, you are never 100 percent confident in their abilities. But all I have to say is ‘Wow’. From the beginning, the <strong>BWD</strong> team was very professional. They answered all my questions and made changes as per request with no problem.</p>
                   <div>
                     <div>
                       <h5>Andrew Paul</h5>
                       <!-- <span>(Lomita, CA)</span> -->
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6">
             <div class="crd-item">
               <div class="prof-sct">
                 <div class="circle">
                   <img src="frontend/images/testimonial/2.png" alt="">
                   <span class="quote">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                   </span>
                 </div>
                 <div class="ttx">
                   <p>I just thought I’d drop by and say how happy I am with my new wordpress theme that I had created from these guys! They are very easy to work with and are also extremely patient. I would highly recommend using these guys for design work and will use them for all my future design.</p>
                   <div>
                     <div>
                       <h5>Jayson L</h5>
                       <!-- <span>(Whittier, CA)</span> -->
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6">
             <div class="crd-item">
               <div class="prof-sct">
                 <div class="circle">
                   <img src="frontend/images/testimonial/3.png" alt="">
                   <span class="quote">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                   </span>
                 </div>
                 <div class="ttx">
                   <p>Just want to say that David is awesome to work with. His designs are top notch (as you can see) and he is very responsive, answering emails and IMs quickly. I’ve hired him several times and continue to send work his way, which tells you something. And his team are WordPress whiz.</p>
                   <div>
                     <div>
                       <h5>Shawn P</h5>
                       <!-- <span>(Perris, CA)</span>  -->
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6">
             <div class="crd-item">
               <div class="prof-sct">
                 <div class="circle">
                   <img src="frontend/images/testimonial/4.png" alt="">
                   <span class="quote">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                   </span>
                 </div>
                 <div class="ttx">
                   <p>I have a company called Benefit Personal Training and we have been working with David and his team at <strong>BWD</strong> for several years.</p>
                   <div>
                     <div>
                       <h5>Faith Ritter</h5>
                       <!-- <span>(Carson, CA)</span> -->
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6">
             <div class="crd-item">
               <div class="prof-sct">
                 <div class="circle">
                   <img src="frontend/images/testimonial/5.png" alt="">
                   <span class="quote">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                   </span>
                 </div>
                 <div class="ttx">
                   <p>First design has come through so i thought i’d give a quick review so far. No fuss whatsoever. I gave him my request, he asked the right questions and just simply got on with it. After 24 hours the design came back and i’m very impressed with the high qual.</p>
                   <div>
                     <div>
                       <h5>Atrevido Paul</h5>
                       <!-- <span>(Lomita, CA)</span> -->
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6">
             <div class="crd-item">
               <div class="prof-sct">
                 <div class="circle">
                   <img src="frontend/images/testimonial/6.png" alt="">
                   <span class="quote">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                   </span>
                 </div>
                 <div class="ttx">
                   <p>I hired David and his team to develop a website system for me and they went ABOVE & BEYOND what was asked of them. David always was very responsive on email/Skype and was a pleasure to work with. I will be doing more work with him and his team.</p>
                   <div>
                     <div>
                       <h5>A Dukes</h5>
                       <!-- <span>(Lomita, CA)</span> -->
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>


     <!-- testimonial card section end  -->




     <!-- Contact Section start here  -->

     <!-- <div class="contact-section">
       <div class="container">
         <div class="row contdw-row-gap">
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

    <FooTer/>
</template>

<script>
import MetaTag from '../components/MetaTag.vue'
import FooTer from '../views/FooTer.vue'
import NavBar from '../views/NavBar.vue'
import StayConectedWith from '../components/StayConectedWith.vue'
//import { defineComponent } from 'vue';
export default {
      components: {
    NavBar,
    FooTer,
    StayConectedWith,
    MetaTag
  },
  data() {
    return{
        title:"Testimonials | Big Wave Development LLC",
        description:"Testimonials from clients of global companies that are 100 percent legitimate. In the web business, honesty and integrity are of paramount importance."
    
    }
  }
}
</script>

<style>
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
    padding: 77.5px 0;
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
.brand-forefront .article-ttx p:first-of-type{
    margin-bottom: 28px;
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
    max-width: 100%;
}

/* Brand Forefront section end  */

.testimonial-card{
    padding: 170px 0 ;
}

.testimonial-card .row.gy-150{
    row-gap: 150px;
}

.testimonial-card .crd-item{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px #00000030;
    border-radius: 10px;
    padding: 120px 68px 34px;
    height: 100%;
}
.testimonial-card .crd-item .prof-sct{
    position: relative;
}
.testimonial-card .crd-item .prof-sct .circle{
    margin: 0 auto;
    border-radius: 50%;
    width: fit-content;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: -205px;
    width: 160px;
    height: 160px;
}
.testimonial-card .crd-item .prof-sct .circle img{
    max-width: 100%;
}
.testimonial-card .crd-item .prof-sct .circle span.quote{
    width: 58px;
    height: 58px;
    border-radius: 50%;
    background: #EA4335;
    display: flex;
    margin: -35px auto 0;
    justify-content: center;
    align-items: center;
    position: relative;
}
.testimonial-card .crd-item .prof-sct .circle span.quote svg{
    width: 38px;
    height: 38px;
    fill: #FFFFFF;
}
.testimonial-card .crd-item p{
    font-weight: 400;
    font-size: 16px;
    line-height: 23px;
    text-align: center;
    color: #353535;
    margin-bottom: 28px;
}
.testimonial-card .crd-item .ttx > div h5,
.testimonial-card .crd-item .ttx > div span{
    font-weight: 700;
    text-align: center;
    color: #000000;
}
.testimonial-card .crd-item .ttx > div span{
    font-size: 16px;
    display: block;
    margin-top: 3px;
}
.testimonial-card .crd-item .ttx > div h5{
    font-size: 20px;
}




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
    margin: 0;
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
    .brand-forefront .article-ttx p{
        padding-right: 0;
    }
    .brand-forefront .article-ttx h3 {
        font-size: 28px;
    }
    .brand-forefront .article-ttx p{
        font-size: 14px;
    }
    .brand-forefront {
        padding: 60px 0;
    }
    .contact-section .atcle-area .count-down {
        gap: 20px 75px;
        margin-top: 30px;
    }
    .shape-float {
        display: none;
    }
    .count-down-area .count-item p {
        font-size: 15px;
    }
    .banner-content .hero-text .hero-button-sctn{
        margin-bottom: 50px;
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
    .banner-content .hero-text{
        margin-bottom: 50px;
    }
    .banner-content {
        min-height: unset;
        margin-top: 120px;
    }
    .testimonial-card {
        padding: 168px 0 75px;
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
    .contact-section .atcle-area h3, .contact-section .fild-cnt h3 {
        font-size: 24px;
        margin-bottom: 16px;
    }

}
@media (max-width: 767px) {
  .testimonial-card {
    padding: 130px 0 0px;
  }
  .testimonial-card .crd-item .prof-sct .circle span.quote {
      width: 44px;
      height: 44px;
      margin: -28px auto 0;
  }
  .testimonial-card .crd-item .prof-sct .circle span.quote svg {
    width: 30px;
    height: 30px;
  }
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
    .grow-business .text-area h2,
    .contact-section .meet-cart .text-ast h2 {
        font-size: 20px;
    }
    .grow-business .btn-sect a,
    .contact-section .meet-cart .cntct-btn a {
        padding: 8px 28px;
        font-size: 12px;
    } 
    .testimonial-card .crd-item .prof-sct .circle {
        top: -160px;
        width: 120px;
        height: 120px;
    }
    .testimonial-card .row.gy-150 {
        row-gap: 120px;
    }
    .testimonial-card .crd-item {
        padding: 96px 30px 34px;
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