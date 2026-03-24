<template>
<MetaTag :title="metaTitle" :description="metaDescription"/>   
 <NavBar/>
  <!-- banner start here -->
    <div class="banner-content">
          <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bannerLeft">
                        <h1>Buttrfli</h1>
                        <p>Add Hudgefund AI To Your Crypto Wallet</p>
                        <ul>
                            <li><a href="#">Saas</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Analytics</a></li>
                        </ul>
                        <div class="bannerDropdown">
                            <div class="banDropDownOne">
                                <a href="#">Page: All
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="banDropDownTwo">
                                <a href="#">Device: Destop 
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bannerRight">
                        <h2>About Buttrfli</h2>
                        <p>Maecenas sagittis dolor nulla, ac faucibus est ultrices a. Aliquam erat volutpat. Phasellus gravida magna et ullamcorper suscipit. Proin in lorem placerat, maximus nisi eu, tempor dui. Ut ornare nulla semper, convallis mi ac, mollis massa.</p>
                        <a href="#">Visit Website</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="shape-float">
            <img class="img-posin-1" src="/frontend/images/banner/Shape1.png" alt="">
            <img class="img-posin-2" src="/frontend/images/banner/Shape2.png" alt="">
          </div>
        </div>

     <!-- <div class="banner-content banner-content-about">
      <div class="hero-text">
        <h2><strong>Buttrfli</strong></h2>
        <p> We're Very Experience In Digital marketing  </p>
        <div class="hero-button-sctn">
         <button class="btn" @click="modelShow()">Let's Work Together</button>
        </div>
      </div>
      <div class="shape-float">
        <img class="img-posin-1" src="/frontend/images/banner/Shape1.png" alt="">
        <img class="img-posin-2" src="/frontend/images/banner/Shape2.png" alt="">
      </div>
    </div> -->
     
     <!-- banner end -->
     <section class="proDetailsBox">
        <div class="container">
            <div class="row">
                <div class="col-12 proDetailsTab">
                    <div class="proDetailBtn">
                        <h3>Preview:</h3>
                        <button @click="viewTypeShow('pcView')" class="tabBtn" :class="(pcView)? 'active' : ''"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
                            </svg></button>
                        <button  @click="viewTypeShow('tabletView')" class="tabBtn" :class="(tabletView)? 'active' : ''"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" fill="#fff" class="bi bi-tablet" viewBox="0 0 16 16">
                            <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg></button>
                        <button  @click="viewTypeShow('mobileView')" class="tabBtn" :class="(mobileView)? 'active' : ''"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-phone" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg></button>
                    </div>
                    <div class="proDetailsContainer">
                        <div class="proOne" v-if="pcView">
                            <div class="proDetailDesktopImage">
                                <img src="/frontend/images/portfolioDetails/buttrfli1.jpg">
                            </div>
                        </div>
                        <div class="proTwo" v-if="tabletView">
                            <div class="proDetailTabImage">
                                <div class="proTablet">
                                    <img src="/frontend/images/portfolioDetails/tab.png">
                                </div>
                                <div class="proTabImage">
                                    <img src="/frontend/images/portfolioDetails/buttrfli1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="proThree" v-if="mobileView">
                            <div class="proDetailMobileImage">
                                <div class="proMobile">
                                    <img src="/frontend/images/portfolioDetails/Mobile1.png">
                                </div>
                                <div class="proMobileImage">
                                    <img src="/frontend/images/portfolioDetails/buttrfli1.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
               </svg>+1 678 608 2725</a>
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
    name:'portfolio-details',
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
            pcView:false,
            tabletView:false,
            mobileView:false
        };
    },
    mounted() {
        this.pcView = true;
        this.tabletView = false;
        this.mobileView = false;
        this.moveUp();
    },
    async created(){
        //blogfind/by/slug/:slug
        //localStorage.setItem('blogId', this.blogId)

        //this.storage.set('blogId', this.blogId)

        this.image_url = BASE_URL_IMAGE+'uploads/';
        const route = useRoute();
        const response = await axios.get(BASE_URL_API2+'blogfind/by/slug/'+route.params.slug);
        //this.imagepath=API_IMAGE_PATH
        this.details = response.data;
        //console.log("BLOG DETAILS: ",response.data);
        //this.moveUp();
        this.metaTitle = response.data.data[0]?.title;
        this.metaDescription = response.data.data[0]?.content;
        this.blogId = response.data.data[0]?.id;
        this.storage.set('blogId', this.blogId)
        //const response2 = await axios.get(BASE_URL_API2+'blog/popular/'+this.blogId);
        //this.imagepath=API_IMAGE_PATH
        //this.details2 = response2.data;
        //console.log("BLOG POPULAR: ",response2.data);
        //var storedData = localStorage.getItem('blogId');
        //console.log("IIDDD:  ",storedData);
        //console.log("IIDDD 22:  ",this.storage);

    },
    methods:{
        viewTypeShow(tyle){
            if(tyle=='pcView'){
                this.pcView = true;
                this.tabletView = false;
                this.mobileView = false;
            }
            if(tyle=='tabletView'){
                this.pcView = false;
                this.tabletView = true;
                this.mobileView = false;
            }
            if(tyle=='mobileView'){
                this.pcView = false;
                this.tabletView = false;
                this.mobileView = true;
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
        async submitForm() {
            this.buttonclick = true;
            //this.v$.$validate()
            //console.log("TEXT",this.emailField);

            if (this.emailField) {
                //console.log("TEXTIF");
                await axios.post(BASE_URL_API+'newsletter.php',
                {
                    email: this.emailField
                })
                .then((response) => {
                    console.log("DATA EMAIL:",response);
                    if (response.data.result == 'success') {
                        this.emailField= '';
                        this.errormessage = '';
                        this.successmessage = 'You have successfully subscribed to the newsletter.';
                        this.buttonclick = false;       
                    } else {
                        this.successmessage = '';
                        this.errormessage = 'Somthing went wrong';
                        this.buttonclick = false;       
                    }

                })
                .catch(({ response }) => {
                    this.error = response;
                    console.log("DATA ERROR: ",this.error);
                });
                //console.log("TEXTIF:: ",aaaaa);
                // this.errormessage = '';
                // this.successmessage = 'Email sent successfully';
                // this.buttonclick = false;       
            } else {
                console.log("TEXTelse");
                this.successmessage = '';
                this.errormessage = "This field must be valid and required";
                this.buttonclick = false;
            }
            //console.log("OUT:",this.v$.firstName.$error)
            //console.log("End3");
            setTimeout(() => {
                this.successmessage = '';
                this.errormessage = '';
                //console.log("HI");
            }, 10000);
        },
    }
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

/* navbar start */

.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.container,
.container-fluid {
    width: 100%;
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    margin-right: auto;
    margin-left: auto;
}

.navbar>.container,
.navbar>.container-fluid{
    width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
}
.navbar-brand {
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    text-decoration: none;
    white-space: nowrap;
}
.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    transition: box-shadow .15s ease-in-out;
}
.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
}
.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.navbar .navbar-nav .nav-item .nav-link {
    color: #000000;
    font-style: normal;
    font-weight: 400;
    font-size: 17px;
    line-height: 28px;
    margin-right: 50px;
    letter-spacing: 0.01em;
    transition: all .2s;
}
.navbar .navbar-nav .nav-item .nav-link:hover{
    color: #D43F33;
}
.navbar .navbar-nav .nav-item .nav-link.active{
    color: #D43F33;
    font-weight: 500;
}
.navbar-expand-lg .navbar-nav {
    margin-left: auto;
}
.navbar .nav-fr-btn .btn{
    border: 1px solid #000000;
    border-radius: 50px;
    font-weight: 400;
    font-size: 17px;    
    padding: 8px 42px;
    color: #000;
    position: relative;
    overflow: hidden;
}
.navbar .nav-fr-btn .btn::after {
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
.navbar .nav-fr-btn .btn:hover{
    border-color: #D43F33;
    color: #fff;
}
.navbar .nav-fr-btn .btn:hover::after {
    color: #004965;
    transform: scaleX(1);
    top: 0;
    background: #D43F33;
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

/* navbar end */




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
    display: none;
}
.shape-float img.img-posin-2{
    position: absolute;
    bottom: 0;
    left: 0px;
    width: 20%;
}





.bannerLeft {
    position: relative;
    z-index: 1;
    padding-left: 115px;
    border-right: 1px solid #C3C1C1;
}
.bannerLeft h1  {
    font-weight: 700;
    font-size: 65px;
    line-height: 72px;
    color: #000000;
    padding-bottom: 19px;
}
.bannerLeft p  {
    font-weight: 400;
    font-size: 21px;
    line-height: 30px;
    color: #D43F33;
}
.bannerLeft ul  {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-top: 27px;
}
.bannerLeft ul li  {
    padding-right: 10px;
}
.bannerLeft ul li a  {
    display: block;
    text-decoration: none;
    font-weight: 400;
    font-size: 15px;
    line-height: 28px;
    letter-spacing: 0.01em;
    color: #000000;
    background: #ECECEC;
    border-radius: 50px;
    padding: 1px 15px;
}
.bannerDropdown {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-top: 82px;
}
.banDropDownOne,
.banDropDownTwo  {
    padding-right: 15px;
}
.banDropDownOne a,
.banDropDownTwo a  {
    background: #FFFFFF;
    border: 1px solid #969696;
    border-radius: 8px;
    font-weight: 400;
    font-size: 16px;
    line-height: 23px;
    color: #000000;
    padding: 13px 23px;
}
.banDropDownOne a span,
.banDropDownTwo a span  {
    padding-left: 10px;
}
.bannerRight {
    padding-left: 70px;
}
.bannerRight h2  {
    font-weight: 600;
    font-size: 25px;
    line-height: 32px;
    color: #000000;
    padding-bottom: 30px;
}
.bannerRight p  {
    font-weight: 400;
    font-size: 16px;
    line-height: 23px;
    color: #000000;
    padding-bottom: 63px;
}
.bannerRight a  {
    font-weight: 400;
    font-size: 20px;
    line-height: 28px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    background: #D43F33;
    border: 1px solid #D43F33;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 0px;
}

/* banner end  */



/* portfolioDetails start here */

.proDetailsBox  {
    position: relative;
    padding-bottom: 150px;
}
.proDetailsBox::after  {
    content: "";
    width: 100%;
    height: 341px;
    top: 0;
    left: 0;
    background: #000;
    position: absolute;
}
/* .proDetailsBox::before  {
    content: "";
    width: 100%;
    height: 2600px;
    top: 0;
    left: 0;
    background: #F5F4EF;
    position: absolute;
} */
.proDetailsBox .proDetailsTab .proDetailBtn h3  {
    font-weight: 300;
    font-size: 17px;
    color: #fff;
    padding-right: 10px;
}
.proDetailsBox .proDetailsTab  {
    position: relative;
}
.proDetailsBox .proDetailsTab .proDetailBtn  {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: 100%;
    position: relative;
    z-index: 1;
    column-gap: 13px;
    padding-top: 50px;
}
.proDetailsBox .proDetailsTab .proDetailBtn button  {
    border: none;
    background: transparent;
    cursor: pointer;
    transition: all ease-in-out 300ms;
}
.proDetailsBox .proDetailsTab .proDetailBtn button svg  {
    transition: all ease-in-out 300ms;
}
.proDetailsBox .proDetailsTab .proDetailBtn button svg:hover,
.proDetailsBox .proDetailsTab .proDetailBtn button.active svg  {
    fill: #D23E32;
    color: #D23E32;
}
.proDetailsContainer .proDetailDesktopImage {
    position: relative;
    z-index: 1;
}
.proDetailsContainer .proDetailDesktopImage img  {
    margin: 0px auto 0px;
    display: block;
    box-shadow: 0px 4px 35px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    width: 80%;
}
.proOne,
.proTwo,
.proThree {
    padding-top: 50px;
}
.proDetailTabImage  {
    position: relative;
    z-index: 1;
}
.proDetailTabImage .proTablet  {
    position: relative;
    overflow: hidden;
}
.proDetailTabImage .proTablet img  {
    width: 50%;
    display: block;
    margin: 50px auto 0px;
    position: relative;
}
.proDetailTabImage .proTabImage {
    position: absolute;
    width: 43%;
    height: 79%;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -46%);
    background: #fff;
    overflow-x: hidden;
    overflow-y: scroll;
}
.proTabImage img  {
    width: 100%;
    display: block;
}
.proDetailTabImage .proTabImage::-webkit-scrollbar {
    width: 3px;
}

.proDetailTabImage .proTabImage::-webkit-scrollbar-track {
    /* box-shadow: inset 0 0 5px #CCCCCC;  */
    border-radius: 3px;
    background-color: transparent;
}   
.proDetailTabImage .proTabImage::-webkit-scrollbar-thumb {
    background: #D23E32; 
    border-radius: 3px;
}
.proDetailMobileImage {
    z-index: 1;
    position: relative;
}
.proDetailMobileImage .proMobile  {
    position: relative;
    overflow: hidden;
}
.proDetailMobileImage .proMobile img  {
    width: 50%;
    display: block;
    margin: 50px auto 0px;
    position: relative;
}
.proDetailMobileImage .proMobileImage {
    position: absolute;
    width: 38.9%;
    height: 73%;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -45%);
    background: #f5f4ef;
    overflow-x: hidden;
    overflow-y: scroll;
}
.proMobileImage img  {
    width: 100%;
    display: block;
}

.proDetailMobileImage .proMobileImage::-webkit-scrollbar {
    width: 3px;
}
  
.proDetailMobileImage .proMobileImage::-webkit-scrollbar-track {
    /* box-shadow: inset 0 0 5px #CCCCCC;  */
    border-radius: 3px;
    background-color: transparent;
}   
.proDetailMobileImage .proMobileImage::-webkit-scrollbar-thumb {
    background: #D23E32; 
    border-radius: 3px;
}


/* portfolioDetails end */


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



/* ==================== Don't change, main column responsive start here ================= */
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-0.5 * var(--bs-gutter-x));margin-left:calc(-0.5 * var(--bs-gutter-x))}.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * 0.5);padding-left:calc(var(--bs-gutter-x) * 0.5);margin-top:var(--bs-gutter-y)}.container,.container-fluid{width:100%;padding-right:var(--bs-gutter-x,0.75rem);padding-left:var(--bs-gutter-x,0.75rem);margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}}@media (min-width: 768px){.container{max-width:720px}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}}@media (min-width: 992px){.container{max-width:960px}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}}@media (min-width: 1200px){.container{max-width:1140px}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}}@media (min-width: 1400px){.container{max-width:1250px}}
/* ==================== Don't change, main column responsive end ======================= */

/* responsive start here*/

@media (max-width: 991px)  {
    .banner-content {
        height: auto;
    }
    .bannerLeft {
        padding: 15px 0 40px 0;
        border-right: none;
    }
    .bannerRight {
        padding-left: 0px;
    }
    .bannerLeft h1 {
        font-size: 46px;
        padding-bottom: 0px;
    }
    .bannerDropdown {
        padding-top: 26px;
    }
    .bannerLeft p {
        font-size: 17px;
    }
    .bannerLeft ul {
        padding-top: 20px;
    }
    .bannerLeft ul li a {
        font-size: 12px;
        padding: 0px 20px;
    }
    .banDropDownOne a, .banDropDownTwo a {
        font-size: 14px;
        padding: 7px 10px;
    }
    .bannerRight h2 {
        font-size: 21px;
        padding-bottom: 10px;
    }
    .bannerRight p {
        font-size: 14px;
        line-height: 22px;
        padding-bottom: 27px;
    }
    .bannerRight a {
        font-size: 18px;
        padding: 7px 0px;
        width: 230px;
        margin: 0 auto 30px;
    }
    .proDetailTabImage .proTabImage {
        height: 75%;
        transform: translate(-50% , -44%);
    }
    .proDetailsBox {
        padding-bottom: 36px;
    }
}

@media (max-width: 768px)  {
    .bannerLeft h1 {
        font-size: 36px;
        line-height: 40px;
    }
    .bannerLeft p {
        font-size: 14px;
    }
    .bannerLeft ul {
        padding-top: 10px;
    }
    .bannerLeft ul li a {
        font-size: 11px;
        padding: 11px 11px;
        line-height: 0px;
    }
    .banDropDownOne a, .banDropDownTwo a {
        font-size: 12px;
        padding: 6px 10px;
        line-height: 0px;
    }
    .bannerRight p {
        font-size: 13px;
        line-height: 21px;
        padding-bottom: 16px;
    }
    .bannerRight a {
        font-size: 14px;
        padding: 3px 0px;
        width: 180px;
        margin: 0 auto 30px;
    }
    .proDetailsContainer .proDetailDesktopImage img {
        width: 60%;
    }
    .proDetailTabImage .proTabImage {
        height: 75%;
        transform: translate(-50% , -44%);
    }
    .proDetailMobileImage .proMobileImage {
        height: 68%;
    }
}

@media (max-width: 481px)  {
    .bannerLeft h1 {
        font-size: 24px;
        line-height: 30px;
    }
    .bannerLeft p {
        font-size: 12px;
        line-height: 23px;
    }
    .bannerLeft ul li a {
        font-size: 10px;
        padding: 9px 11px;
    }
    .bannerDropdown {
        padding-top: 20px;
    }
    .banDropDownOne a, .banDropDownTwo a {
        font-size: 11px;
        padding: 4px 6px;
    }
    .bannerLeft {
        padding: 15px 0 26px 0;
    }
    .bannerRight h2 {
        font-size: 18px;
        padding-bottom: 5px;
    }
    .bannerRight p {
        font-size: 12px;
        line-height: 21px;
        padding-bottom: 15px;
    }
    .proDetailsBox .proDetailsTab .proDetailBtn {
        column-gap: 10px;
        padding-top: 30px;
    }
    .proDetailsBox .proDetailsTab .proDetailBtn h3 {
        font-size: 14px;
        padding-right: 7px;
    }
    .proDetailsBox .proDetailsTab .proDetailBtn button svg  {
        width: 14px;
        height: 14px;
    }
    .proDetailTabImage .proTabImage {
        height: 72%;
        transform: translate(-50% , -41%);
    }
    .proDetailMobileImage .proMobileImage {
        height: 65%;
        transform: translate(-50% , -42%);
    }
}

@media (max-width: 375px)  {
    .proDetailTabImage .proTabImage {
        height: 69%;
        transform: translate(-50% , -38%);
    }
}
/*responsive end*/
</style>