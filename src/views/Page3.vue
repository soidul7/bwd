<template>
<MetaTag :title="metaTitle" :description="metaDescription"/>   
  <NavBar/>
  <!-- banner start here -->

    <div class="banner-content banner-style-nw" style="background-image: url('frontend/images/banner/bwd-bg1.jpg');">
      <div class="hero-text">
        <h2><strong>Blog Details</strong></h2>
        <p> We’re Very Experience In Digital marketing  </p>
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



     <!-- Blog Details Section start here  -->


    <div class="blog-dtl-sect">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="content">

              <div class="item">
                <h3>Brandify Your Business Through A Proper Graphic Design</h3>
                <p class="mb-5">The term graphic means "correct and precise visual." The designing section is responsible for conveying a specific message professionally and aesthetically in <strong>graphic design</strong>. The goal here is to create a critical piece of information for the audience. Visual communication or communication design are also terms used to describe the <strong>graphic design</strong>. Graphic designers are needed by businesses to produce eye-catching marketing materials. Brochures, business cards, websites, booklets, stationery, and other printed materials are examples of such materials.</p>
                <p class="mb-5">The client and graphic designer are both involved in the creative process. The designer employs many visual arts, typographic abilities, photographs, and layout approaches to create memorable design works. The layout of numerous design elements in a <strong>graphic design</strong> is determined by the medium, such as posters, logos, packages, and websites. A strong and memorable logo is a must for any company looking to establish a brand identity. Graphic designers are also needed by firms to create unique mobile apps and social media pages for promotion. </p>
                
                <p class="mb-5"><strong>Graphic design</strong> has become an integral aspect of doing trades in both the physical and virtual worlds. The requirement for a good connection with the audience is one of the reasons why organizations are rapidly requesting more <strong>graphic design</strong> elements. <strong>Graphic design</strong> components that have been thoughtfully produced can assist in increasing sales. Any item with a distinctive design attracts people. A good design sends out a message to them. The message could be that the business that owns the design provides high-quality goods or services.</p>

                 <h4 class="intro">
                    Role of Big Wave Development
                </h4>

                <p class="mb-5">Big Wave Development comprises a highly-skilled workforce to meet the ever-growing demand for graphic designers with captivating ideas. To stay ahead of the competition, our technocrats devise a visual design plan to bring potential clients' attention to firms. Entrepreneurs are increasingly aware of the need to properly communicate a message to their target audience, and this is where we fill in the gap by providing valuable informative creativity.</p>

                <p class="mb-5">It aids in the recognition of trade in its particular market. When we encounter a visually appealing logo often, it serves as a reminder of the brand behind the logo. Ads, websites, and business cards are all examples of designs that we see regularly. All of these designs bring the brand back to our minds. This aids with brand recognition. These are excellent strategies for establishing market confidence and goodwill. </p>

                <p class="mb-5">When a logo or other design has a strong aesthetic value, it gives viewers confidence. If the company's design features appeal to the senses, they have faith in its products or services. An appealing design can gradually help you draw more clients, and many of them will become loyal to your association. Another benefit is that it might influence clients to consider your agency. A well-designed brochure, for example, can give users a sense of belonging to an organization.</p>

                <p class="mb-5">Want to know more? You can always drop down at this Florida-based agency or call +1(727) 300-6244 for further clarification. </p>
                

                
              </div>

              <div class="item">
                <div class="card-box ">
                  <h3>Summary</h3>
                  <p><img src="frontend/images/icon/“ (1).svg" alt="" class="img-ful">Get enriching graphic design through innovative techniques and sheer class from Big Wave Development experts.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="right-pana">
              

              <div class="item-tab">
                <nav>
                  <ul>
                    <li>
                      <button class="btn"  @click="currentTabComponent = 'PopularPage'" :class="{active: currentTabComponent === 'PopularPage' }">Popular</button>
                    </li>
                    <li>
                      <button class="btn"  @click="currentTabComponent = 'RecentPage'" :class="{active: currentTabComponent === 'RecentPage' }">Recent</button>
                    </li>
                  </ul>
                </nav>
                     <keep-alive>
                        <component :is="currentTabComponent"></component>
                     </keep-alive>
              </div>

              <div class="item-news">
                <h5>Newsletter Signup</h5>
                <p>Get Hooked! Sign Up to get the latest catch sent to your inbox.</p>
                <form action="#">
                  <div class="form-grp">
                    <input type="email" name="" id="" placeholder="Enter email address">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#6E6E6F" class="masgic bi bi-envelope-fill" viewBox="0 0 16 16">
                      <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg>
                  </div>
                  <button type="submit" class="btn">Subscribe</button>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>

     


    </div> 


    <!-- Blog Details Section end  -->



     <!-- Contact Section start here  -->

     <div class="contact-section">
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
               </svg> +1(727) 300-6244</a>
              </div>
            </div>
           </div>

         </div>
         <div class="bg-img-bbx"></div>


       </div>
     </div>
    
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
export default {
      components: {
    NavBar,
    FooTer,
    PopularPage,
    RecentPage,
    PopUp,
    MetaTag
  },
  data() {
            return {
            currentTabComponent: "PopularPage",
            showPopup:false,
            metaTitle:"Blog - Brandify Your Business Through A Proper Graphic Design | Big Wave Development LLC",
            metaDescription:"We'll go into your data, examine your digital footprint, and provide recommendations to help you achieve your objectives with custom programmes"
  
            };
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
  }
}
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
.banner-content .hero-text h1,
.banner-content .hero-text h2{
    font-weight: 300;
    font-size: 65px;
    color: #000000;
    line-height: 72px;
}
.banner-content .hero-text h1 strong,
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






/* Blog Details Section start here  */

.blog-dtl-sect{
    margin: 100px 0;
}
.blog-dtl-sect .content .head-box{
    background: #000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 25px;
    border-radius: 4px;
    margin-bottom: 30px;
}

.blog-dtl-sect .content .head-box h4{
    color: #fff;
    font-weight: 600;
    font-size: 24px;
}
.blog-dtl-sect .content .head-box .dwn{
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #FFFFFF;
    border-radius: 50%;
}
.blog-dtl-sect .content .item.mt-55{
    margin-top: 55px;
}
.blog-dtl-sect .content .item.mt-75{
    margin-top: 75px;
}
.blog-dtl-sect .content .item.mt-75{
    margin-top: 90px;
}
.blog-dtl-sect .content .item p {
    font-weight: 400;
    font-size: 18px;
    color: #6C6C6D;
    line-height: 22px;
}
.blog-dtl-sect .content .item p.mb-5{
    margin-bottom: 25px;
}
.blog-dtl-sect .content .item p strong{
    font-weight: 600;
    color: #262C2D;
}
.blog-dtl-sect .content .item p strong a{
    color: #2A9FD6;
    padding: 0;
    line-height: 0;
    font-weight: 600;
}
.blog-dtl-sect .content .item h3{
    font-weight: 600;
    font-size: 40px;
    color: #262C2D;
    line-height: 1;
    margin-bottom: 32px;
}
.blog-dtl-sect .content .item .list-ner h5{
    font-weight: 600;
    font-size: 18px;
    color: #262C2D;
    margin-bottom: 14px;
}
.blog-dtl-sect .content .item .list-ner.mb-40{
    margin-bottom: 40px;
}
.blog-dtl-sect .content .item .list-ner ul li{
    display: flex;
    column-gap: 10px;
    margin-bottom: 22px;
}
.blog-dtl-sect .content .item .list-ner ul li:last-child{
    margin-bottom: 0;
}
.blog-dtl-sect .content .item .list-ner ul li svg,
.blog-dtl-sect .content .item .table table tbody td ul li svg{
    flex-shrink: 0;
    color: #2A9FD6;
}
.blog-dtl-sect .content .item img.img-ful{
    display: block;
    max-width: 100%;
    height: auto;
}
.blog-dtl-sect .content .item img.mb-65{
    margin-bottom: 65px;
}
.blog-dtl-sect .content .item img.mb-25{
    margin-bottom: 25px;
}
.blog-dtl-sect .content .item img.mb-30{
    margin-bottom: 30px;
}
.blog-dtl-sect .content .item .card-box,
.blog-dtl-sect .right-pana .item .card-box{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    position: relative;
}
.blog-dtl-sect .content .item .card-box h3{
    border-bottom: 3px solid #2a9fd6;
    width: fit-content;
}
.blog-dtl-sect .content .item .card-box{
    padding: 45px 20px 29px 35px;
}
.blog-dtl-sect .content .item .card-box::before,
.blog-dtl-sect .right-pana .item .card-box::before{
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    height: 12px;
    background-color: #2A9FD6;
    border-radius: 4px 4px 0 0;
}
.blog-dtl-sect .content .item .card-box p{
    font-weight: 300;
    font-size: 20px;
    color: #1C1423;
    line-height: 25px;
    margin-bottom: 28px;
    display: flex;
    align-items: baseline;
    column-gap: 15px;
}
.blog-dtl-sect .content .item .card-box h5{
    font-weight: 700;
    font-size: 20px;
    line-height: 25px;
    color: #1C1423;
}
.blog-dtl-sect .content .item .table h5{
    font-weight: 600;
    font-size: 18px;
    color: #262C2D;
    margin-bottom: 40px;
}
.blog-dtl-sect .content .item .table table thead{
    background-color: #000;
}
.blog-dtl-sect .content .item .table table thead th{
    font-weight: 600;
    font-size: 17px;
    color: #FFFFFF;
    padding: 19.5px 0;
}
.blog-dtl-sect .content .item .table table tbody td{
    font-weight: 400;
    font-size: 18px;
    vertical-align: top;
    color: #6C6C6D;
    padding: 26px 3px 38px 20px;
}
.blog-dtl-sect .content .item .table table tbody td{
    border-left: 1px solid #C9C9C9;
    border-bottom: 1px solid #C9C9C9;
}
.blog-dtl-sect .content .item .table table tbody td:last-child{
    border-right: 1px solid #C9C9C9;
}
.blog-dtl-sect .content .item .table table tbody td ul li{
    display: flex;
    column-gap: 8px;
    font-weight: 400;
    font-size: 18px;
    color: #6C6C6D;
    margin-bottom: 25px;
}
.blog-dtl-sect .content .item .table table tbody td ul li:last-child{
    margin-bottom: 0;
}
.blog-dtl-sect .post-card{
    margin-top: 200px;
}
.blog-dtl-sect .right-pana .item .card-box{
    padding: 49.5px 0 49.5px;
}
.blog-dtl-sect .right-pana .item .card-box form .form-group{
    position: relative;
    width: fit-content;
    margin: 0 auto;
}
.blog-dtl-sect .right-pana .item .card-box form input[type="search"]{
    border: 1px solid #A2A2A2;
    border-radius: 50px;
    height: 50px;
    max-width: 354px;
    width: 100%;
    padding-left: 35px;
    font-weight: 400;
    font-size: 18px;
    color: #262C2D;
}

.blog-dtl-sect .right-pana .item .card-box form input[type="search"]:focus,
.blog-dtl-sect .right-pana .item-news .form-grp input[type="email"]:focus{
    outline: none;
}
.blog-dtl-sect .right-pana .item .card-box form button[type="submit"]{
    position: absolute;
    right: 20px;
    top: 50%;
    padding: 0;
    transform: translateY(-50%);
}
.blog-dtl-sect .right-pana .item-tab{
    background: #FFFFFF;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    margin-top: 46px;
}
.blog-dtl-sect .right-pana .item-tab nav ul{
    display: flex;
}
.blog-dtl-sect .right-pana .item-tab nav ul li{
    flex-grow: 1;
}
.blog-dtl-sect .right-pana .item-tab nav ul li button{
    width: 100%;
    font-weight: 600;
    font-size: 24px;
    color: #262C2D;
    padding: 14px 0;
    border-bottom: 1px solid #D9D9D9;
}
.blog-dtl-sect .right-pana .item-tab nav ul li button.active{
    border-bottom: 1px solid #D9D9D9;
    color: #FFFFFF;
    background-color: #000;
}
.blog-dtl-sect .right-pana .item-tab .tab-content .list-item{
    display: flex;
    gap: 17px;
    align-items: flex-start;
    margin-bottom: 50px;
}
.blog-dtl-sect .right-pana .item-tab .tab-content{
    padding: 40px 10px 50px 30px;
}
.blog-dtl-sect .right-pana .item-tab .tab-content .list-item:last-child{
    margin-bottom: 0;
}
.blog-dtl-sect .right-pana .item-tab .tab-content .list-item .ttr{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.blog-dtl-sect .right-pana .item-tab .tab-content .list-item .ttr p{
    font-weight: 400;
    font-size: 15px;
    color: #6C6C6D;
}
.blog-dtl-sect .right-pana .item-tab .tab-content .list-item .ttr h6{
    font-weight: 600;
    font-size: 18px;
    letter-spacing: -0.01em;
    color: #262C2D;
    line-height: 22px;
    margin-top: 10px;
}
.blog-dtl-sect .right-pana .item-news {
    background-color: #212529;
    padding: 50px 26px 46px;
    border-radius: 4px;
    margin-top: 30px;

}
.blog-dtl-sect .right-pana .item-news h5{
    font-weight: 600;
    font-size: 24px;
    color: #FFFFFF;
}
.blog-dtl-sect .right-pana .item-news p{
    font-weight: 400;
    font-size: 17px;
    letter-spacing: -0.01em;
    color: #D4D5D5;
    margin: 22px 0 32px;
}
.blog-dtl-sect .right-pana .item-news form{
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 19px;
}
.blog-dtl-sect .right-pana .item-news .form-grp{
    position: relative;
    width: 100%;
}
.blog-dtl-sect .right-pana .item-news .form-grp .masgic{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 22px;
}

.blog-dtl-sect .right-pana .item-news .form-grp input[type="email"]{
    background: #FFFFFF;
    border-radius: 50px;
    height: 47px;
    width: 100%;
    box-sizing: border-box;
    padding-left: 56px;
    font-size: 16px;
    font-weight: 400px;
    color: #6E6E6F;
}
.blog-dtl-sect .right-pana .item-news  button[type="submit"]{
    font-weight: 600;
    font-size: 18px;
    color: #FFFFFF;
    width: 100%;
    padding: 0;
    height: 47px;
    border-radius: 50px;
    background: #DD1D54;
}

.blog-dtl-sect .post-card .heading h4{
    font-weight: 600;
    font-size: 44px;
    letter-spacing: -0.02em;
    color: #262C2D;
    text-align: center;
}
.blog-dtl-sect .post-card .heading{
    margin-bottom: 86px;
    position: relative;
}
.blog-dtl-sect .post-card .heading .container{
    padding-top: 38px;
    background-color: #FFFFFF;
}
.blog-dtl-sect .post-card .heading::after {
    content: '';
    left: 35px;
    top: -88px;
    right: 35px;
    bottom: 30px;
    z-index: -1;
    position: absolute;
    background-image: url('@/assets/images/footer/dots.png');
    background-size: cover;
}
.blog-dtl-sect .post-card .item{
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.1);
    border-radius: 4px 0px 0px 4px;
}
.blog-dtl-sect .post-card .item img.img-ful{
    display: block;
    width: 100%;
    height: auto;
}
.blog-dtl-sect .post-card .item .ttpx{
    padding: 9px 15px 28px 20px;
}
.blog-dtl-sect .post-card .item .date{
    font-weight: 400;
    font-size: 18px;
    color: #6C6C6D;
    margin-bottom: 8px;
    display: block;
}
.blog-dtl-sect .post-card .item h6{
    font-weight: 600;
    font-size: 23px;
    line-height: 27px;
    color: #262C2D;
    margin-bottom: 18px;
}
.blog-dtl-sect .post-card .item p{
    font-weight: 400;
    font-size: 20px;
    line-height: 22px;
    color: #6C6C6D;
    margin-bottom: 20px;
}
.blog-dtl-sect .post-card .item a{
    font-weight: 600;
    font-size: 16px;
    color: #DD1D54;
}


/* Blog Details Section end */



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
    .blog-dtl-sect .content .item h3 {
        font-size: 35px;
        margin-bottom: 15px;
    }
    .blog-dtl-sect .post-card .heading h4{
        font-size: 35px;
    }
    .blog-dtl-sect .content .head-box,
    .blog-dtl-sect .content .item p.mb-5 {
        margin-bottom: 15px;
    }
    .blog-dtl-sect .content .item p {
        font-size: 16px;
    }
    .blog-dtl-sect .content .item.mt-55,
    .blog-dtl-sect .content .item.mt-75 {
        margin-top: 35px;
    }
    .blog-dtl-sect .content .item img.mb-65 {
        margin-bottom: 30px;
    }
    .blog-dtl-sect .post-card {
        margin-top: 100px;
    }
    .blog-dtl-sect .post-card .heading {
        margin-bottom: 40px;
    }
    .blog-dtl-sect .post-card .heading::after {
        top: -45px;
    }
    .blog-dtl-sect .post-card .item .date {
        font-size: 14px;
    }
    .blog-dtl-sect .post-card .item h6 {
        font-size: 18px;
        line-height: 22px;
        margin-bottom: 8px;
    }
    .blog-dtl-sect .post-card .item p {
        font-size: 16px;
        line-height: 20px;
        margin-bottom: 16px;
    }
    .blog-dtl-sect .right-pana .item .card-box {
        padding: 35px 10px;
    }
    .blog-dtl-sect .right-pana .item .card-box form input[type="search"] {
        height: 44px;
        padding-left: 22px;
        font-size: 18px;
    }
    .blog-dtl-sect .right-pana .item-tab nav ul li button {
        font-size: 20px;
        padding: 10px 0;
    }
    .blog-dtl-sect .right-pana .item-tab .tab-content {
        padding: 25px 15px;
    }
    .blog-dtl-sect .right-pana .item-tab .tab-content .list-item .ttr p {
        font-size: 13px;
    }
    .blog-dtl-sect .post-card .heading .container {
        padding-top: 10px;
    }
    .blog-dtl-sect .right-pana .item-tab .tab-content .list-item .ttr h6 {
        font-size: 18px;
        line-height: 17px;
    }
    .blog-dtl-sect .right-pana .item-news h5 {
        font-weight: 600;
        font-size: 22px;
    }
    .blog-dtl-sect .right-pana .item-news p {
        font-size: 15px;
        margin: 10px 0 20px;
    }
    .blog-dtl-sect .right-pana .item-news {
        padding: 30px 23px;
    }
}
@media (max-width: 991px) {
    .blog-dtl-sect .content .item h3 {
        font-size: 25px;
    }
    .blog-dtl-sect {
        margin: 0 0 100px;
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
</style>