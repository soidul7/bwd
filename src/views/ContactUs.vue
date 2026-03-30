<template>
    <MetaTag :title="metaTitle" :description="metaDescription"/>   
    <NavBar/>
    <!-- banner start here -->

    <div class="banner-content">
        <div class="hero-text">
          <h2><strong>Contact Us</strong></h2>
          <p>Stay Connected To Get Popular Marketing Services </p>
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
    <!-- contact input start here -->

    <section class="conInput ">
        <div class="container conttx-dtt">
            <div class="row coninBack">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 coninputBox">
                            <h2>Send Us <span>Message</span></h2>
                            <div class="conInDiv">
                              <form v-on:submit.prevent="submitFormSendUs" ref="form" name="form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input class="coninwidth" type="text" :class="{ filderror: v3$.fname.$error }" v-model="state3.fname" placeholder="First Name">
                                        <span class="error-span" v-if="v3$.fname.$error">{{ v3$.fname.$errors[0].$message }}</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="coninwidth" type="text" :class="{ filderror: v3$.lname.$error }" v-model="state3.lname" placeholder="Last Name">
                                        <span class="error-span" v-if="v3$.lname.$error">{{ v3$.lname.$errors[0].$message }}</span>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        
                                        <input class="coninwidth" type="number"  min="0"  :class="{ filderror: v3$.phone.$error }" v-model="state3.phone" placeholder="Phone No">
                                        <span class="error-span" v-if="v3$.phone.$error">{{ v3$.phone.$errors[0].$message }}</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="coninwidth" type="text" :class="{ filderror: v3$.subject.$error }" v-model="state3.subject" placeholder="Subject">
                                        <span class="error-span" v-if="v3$.subject.$error">{{ v3$.subject.$errors[0].$message }}</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <input class="coninwidth" type="text" :class="{ filderror: v3$.email.$error }" v-model="state3.email" placeholder="Email">
                                        <span class="error-span" v-if="v3$.email.$error">{{ v3$.email.$errors[0].$message }}</span>
                                    </div>
                                    <div class="col-lg-12">
                                        
                                        <input class="coninwidth" type="text" :class="{ filderror: v3$.website.$error }" v-model="state3.website" placeholder="Website">
                                        <span class="error-span" v-if="v3$.website.$error">{{ v3$.website.$errors[0].$message }}</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="coninText" :class="{ filderror: v3$.message.$error }" v-model="state3.message" placeholder="Message"></textarea>
                                        <span class="error-span" v-if="v3$.message.$error">{{ v3$.message.$errors[0].$message }}</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="coninBtn" :disabled="buttonclick" >
                                        
                                        <span class="error-btn" v-if="buttonclick==true" >Sending. . .</span>
                                        <span class="error-btn" v-else > Send Message</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-error-msg" v-if="errormessage || successmessage" :class="errormessage ? '' : 'suce-area'">
                                  <h5 :class="{show:errormessage}" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                  </svg> {{errormessage}}</h5> 
                                  <h5 :class="{show:successmessage}" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                      </svg> {{successmessage}}</h5> 
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 imhPadGap">
                    <!-- <div class="row imhPadGap"> -->
                        <div class="conInImage">
                            <img src="frontend/images/contact/girl.jpg">
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact input end -->

    <!-- contact info start here -->

    <section class="contactInfo">
        <div class="container">
            <div class="conPaddGap">
                <div class="col">
                    <div class="conInfoBox">
                        <img src="frontend/images/contact/Vector1.png">
                        <h3>Address</h3>

                        <v-btn small outline @click="openGoogleMap(item)">   
                        <p><a style="color:white;cursor:pointer;">7901 4th ST N STE 8022 St. Petersburg, FL 33702</a></p>
                        </v-btn>

                    </div>
                </div>
                <div class="col">
                    <div class="conInfoBox"> 
                        <img src="frontend/images/contact/Vector2.png">
                        <h3>Email Us</h3>
                        <p><a href="mailto:david@bigwavedevelopment.com" style="color:white">david@bigwavedevelopment.com</a></p>
                    </div>
                </div>
                <div class="col">
                    <div class="conInfoBox">
                        <img src="frontend/images/contact/Vector3.png">
                        <h3>Phone</h3>
                        <p><a href="tel:+1(727) 300-6244" style="color:white;cursor:pointer;">+1(727) 300-6244</a></p>
                    </div>
                </div>
                <div class="col">
                    <div class="conInfoBox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" fill="#D33E32" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                        <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0m-2.238 9.488-.12-.002a5.2 5.2 0 0 0 .381-2.07V6.306a1.7 1.7 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.6 2.6 0 0 1-2.598 2.598z"/>
                        <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.68.68 0 0 1-.682.682H.682A.68.68 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945z"/>
                        </svg>
                            <h3>Teams</h3>
                        <a href="https://teams.microsoft.com/l/chat/0/0?users=bigwavedevelopment@gmail.com" target="_blank" style="color:white;cursor:pointer;"><p> david@bigwavedevelopment.com</p></a>
                    </div>
                </div>
                <div class="col">
                    <div class="conInfoBox">
                       <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" fill="#D33E32"  class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                          </svg>
                        
                            <h3>Telegram</h3>
                        <a href="https://t.me/bigwave_llc" target="_blank" style="color:white;cursor:pointer;"><p> @bigwave_llc</p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact info end -->

    <!-- map start here -->

    <section class="mapBox">
        <div class="mapBody">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225777.6044891797!2d-82.69387291938632!3d27.847451980141713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2e6a2b7855c1f%3A0x1eef60ee71736fe!2s7901%204th%20St%20N%20%238022%2C%20St.%20Petersburg%2C%20FL%2033702%2C%20USA!5e0!3m2!1sen!2sin!4v1651830100780!5m2!1sen!2sin" width="100%" height="582" style="border:0; padding: 0; margin: 0; outline: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- map end -->
    <!-- Contact Section start here  -->
    <!-- <StayConectedWith/> -->
    <!-- Contact Section end  -->
    <!-- <StayConectedWith/> -->
    <FooTer/>
    <transition name="pop" appear>
        <PopUp v-if="showPopup" :callback="clickClose"/>
    </transition>
    </template>

<script>
import MetaTag from '../components/MetaTag.vue'
import { BASE_URL_API } from '../config'
import { defineComponent } from 'vue';
import NavBar from '../views/NavBar.vue'
//import PopUp from '../views/PopUp.vue'
//import StayConectedWith from '../components/StayConectedWith.vue'
import FooTer from '../views/FooTer.vue'
import { reactive, computed } from "vue"
import useValidate from "@vuelidate/core"
import { required, email, minLength, maxLength ,url } from "@vuelidate/validators"
import axios from 'axios'
import { event } from 'vue-gtag'

export default defineComponent({
  name: 'ContactPage',
  components: {
    NavBar,
    FooTer,
    MetaTag
  },

  setup() {
        const ContactUs = () => {
            event('ContactUs', { method: 'Google' })
        }

        const state3 = reactive({
            fname: '',
            lname:'',
            email: '',
            phone: '',
            subject:'',
            website:'',
            message:'',
        })

      const rules3 = computed(() => {
          return {
              fname: { required },
              lname: { required },
              email: { required, email },
              phone: { required, minLength: minLength(10), maxLength: maxLength(12) },
              subject: { required },
              website: { required ,url},
              message: { required },
          }
      })
      const v3$ = useValidate(rules3, state3)

      return {
          state3,
          v3$,
          ContactUs
      }
  },
  data() {
      return {
          form: {
              fname: '',
              lname:'',
              email: '',
              phone: '',
              subject: '',
              website: '',
              message:'',
          },
          errormessage: '',
          successmessage: '',
          buttonclick:false,
          metaTitle:"Contact Us | Big Wave Development LLC",
            metaDescription:"While we excel at offering digital services, there are easier ways for you to contact Florida based Big Wave Development and respond to your inquiries. "
  
      }
  },
//   setup() {
//     const recaptchaScript = document.createElement("script");
//     recaptchaScript.setAttribute(
//       "src",
//       "https://www.googletagmanager.com/gtag/js?id=AW-10925082080"
//     );

//     document.head.appendChild(recaptchaScript);

//     // window.dataLayer = window.dataLayer || [];
//     // function gtag(){dataLayer.push(arguments);}
//     // gtag('js', new Date());

//     // gtag('config', 'AW-10925082080');
//   },
  created(){
      //this.state3.email = 'amit.prasad@sohomwebmedia.com';
  },
  methods:{
    async submitFormSendUs() {
        console.log("INNN");
        this.buttonclick = true;
        this.v3$.$validate()
        if (!this.v3$.$error) {
            //this.$router.push("/thank-you");
            //http://executiveprotectionlifestyle.epspecialist.com/admin/php_bwd_emai.php
            //axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
            //http://executiveprotectionlifestyle.epspecialist.com/admin/contactus-form
            //php_bwd_emai.php
            await axios.post(BASE_URL_API+'contactus-form.php',
            {
                fname: this.state3.fname,
                lname: this.state3.lname,
                email: this.state3.email,
                content: this.state3.message,
                phone: this.state3.phone,
                website: this.state3.website,
                subject: this.state3.subject,
            })
            .then((response) => {
              console.log("DATA :",response);
                if (response.data.result == 'success') {
                    this.state3= {};
                    this.errormessage = '';
                    this.successmessage = response.data.messase;
                    this.buttonclick = false;
                    this.$router.push("/thank-you");
                } else {
                    this.successmessage = '';
                    this.errormessage = response.data.messase;
                    this.buttonclick = false;
                }

            })
            .catch(({ response }) => {
              this.error = response;
              console.log("DATA ERROR: ",this.error);
            });

            this.errormessage = '';
            this.successmessage = 'Thank you for your interest! Your message has been sent successfully';
            this.buttonclick = false;       
        } else {
            this.successmessage = '';
            
            this.errormessage = 'All fields are must be valid and required';
           
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
    openGoogleMap(item) {
        //const urlSuffix = "27.8443311,-82.6381356,11z";
            // ? item["27.8443311,-82.6381356,11z"]
            // : item["7901 4th"] +
            // ", " +
            // item["ST N STE 8022 St."] +
            // ", " +
            // item["Petersburg"] +
            // ", " +
            // item["FL 33702"];

            window.open(
                "https://www.google.com/maps/place/7901+4th+St+N+%238022,+St.+Petersburg,+FL+33702,+USA/@27.8443358,-82.6403243,17z",
                "_blank"
            );

            //console.log("LOCATION:",urlSuffix);
    },
}
});
</script>
<!-- Global site tag (gtag.js) - Google Ads: 10925082080 -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925082080"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10925082080');
</script> -->

<style scoped>
.conttx-dtt{
    position: relative;
}
.conttx-dtt:after {
    content: "";
    left:10px;
    top: 100%;
    right: 10px;
    bottom: -110px;
    z-index: -1;
    position: absolute;
    background-image: url(data:image/png;base64,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);
    background-size: cover;
}
.main-footer {
  margin-top: 0 !important;
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
.conInDiv .coninwidth.filderror,
.conInDiv textarea.filderror{
  border-color: #D43F33 !important;
}
.contact-section .form-itms{
    width: 100%;
}
.conInDiv .error-span{
  position: relative;
  top: 5px;
  font-size: 11px;
  color: #D43F33;

  background: #050505;
  top: -33px;
  left: 13px;
  padding: 4px;
}

.main-error-msg {
    background: #34a853;
    padding: 10px 20px;
    width: fit-content;
    margin: 20px auto 0;
    border-radius: 8px;
}
.main-error-msg h5 {
    font-size: 16px;
    font-weight: 400;
    line-height: 1;
    display: flex;
    align-items: center;
    color: #fff;
    column-gap: 10px;
    text-align: center;
}

.main-error-msg h5:not(.show){
  display: none;
}

.main-error-msg:not(.suce-area){
  background: #D43F33;
}



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


/*contactInfo start*/

.contactInfo   {
    padding: 100px 0;
    background: #000000;
    width: 100%;
}
.contactInfo .conInfoBox  {
    background: linear-gradient(180deg, #141414 0%, rgba(20, 20, 20, 0) 100%);
    border: 1px solid rgba(85, 85, 85, 0.5);
    border-radius: 10px;
    text-align: center;
    padding: 30px 20px;
    height: 100%;
}
.contactInfo .conInfoBox svg,
.contactInfo .conInfoBox img  {
    display: block;
    margin: 0 auto;
    width: 30px;
    height: 30px;
    object-fit: contain;
}
.contactInfo .conInfoBox h3  {
    font-weight: 500;
    font-size: 18px;
    line-height: 100%;
    text-align: center;
    letter-spacing: 0.12em;
    color: #EA4335;
    padding:18px 0 8px;
}
.contactInfo .conInfoBox p  {
    font-weight: 400;
    font-size: 14px;
    line-height: 140%;
    text-align: center;
    color: #FFFFFF;
    word-break: break-all;
}

/*contactInfo end*/

/*conInput section start here*/


.contactInfo .conPaddGap  {
  display: grid;
  gap: 20px;
  justify-content: center;
  grid-template-columns: repeat(5, minmax(0, 1fr));
}  
.conInput  {
    padding: 100px 0 130px ;
    width: 100%;
}
.conInput .coninBack  {
    background: #000;
    border-radius: 10px;
    overflow: hidden;
    background-image: url('@/assets/images/banner/dots.png');
}
.conInput .coninputBox  {
    padding: 78px 58px;
    background: #000;
}
.conInput .coninputBox h2  {
    font-weight: 300;
    font-size: 47px;
    line-height: 60px;
    color: #FFFFFF;
    padding-bottom: 39px;
}
.conInput .coninputBox h2 span  {
    font-weight: 700;
}
.conInput .coninputBox .conInDiv .coninwidth  {
    width: 100%;
    height: 48px;
    background: #000000;
    border: 1px solid #696969;
    border-radius: 8px;
    display: block;
    outline: none;
    padding-left: 15px;
    margin-bottom: 20px;
    color: #fff;
}
.conInput .coninputBox .conInDiv .coninText  {
    width: 100%;
    height: 132px;
    background: #000000;
    border: 1px solid #696969;
    border-radius: 8px;
    resize: none;
    padding-left: 15px;
    margin-bottom: 20px;
    padding-top: 15px;
    color: #fff;
}
.conInput .coninputBox .conInDiv .coninBtn  {
    width: 223px;
    height: 60px;
    background: #D43F33;
    border: 1px solid #D43F33;
    border-radius: 50px;
    font-weight: 400;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.conInput .coninBack .conInImage  {
    width: 100%;
    height: 100%;
    display: flex;
}
.conInput .coninBack .conInImage img {
    width: 100%;
    display: block;
    object-fit: cover;
    object-position: center;
}
.conInput .coninBack .imhPadGap  {
    padding: 0;
}

/*conInput section end*/



/* Contact Section start here  */

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


/* Contact Section end  */


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
    .contactInfo .conPaddGap {
        grid-template-columns: repeat(3, minmax(0, 1fr));
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
    .contactInfo .conInfoBox[data-v-00abf9f6] {
        padding: 30px;
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
  .contactInfo .conInfoBox h3 {
    padding-bottom: 10px;
  }
  .conInput[data-v-00abf9f6] {
    padding: 50px 0 50px 0;
  }
  .conInput .coninputBox[data-v-00abf9f6] {
    padding: 40px 30px;
}
.conInput .coninputBox h2[data-v-00abf9f6] {
    font-size: 36px;
    padding-bottom: 26px;
}

}
@media (max-width: 767px) {
    .contactInfo .conPaddGap {
        grid-template-columns: repeat(2, minmax(0, 1fr));
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
    .contactInfo{
        padding: 70px 0;
    }

    
}
@media (max-width: 576px) {
    .testimonial-card {
        padding: 168px 0 16px;
    }
    .contact-section .meet-cart {
        padding: 20px 10px;
    }
    .contact-section .fild-cnt .form-group{
        flex-direction: column;
    }
    .contactInfo .conPaddGap {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }
}

/* ==================== Don't change, main column responsive start here ================= */
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-0.5 * var(--bs-gutter-x));margin-left:calc(-0.5 * var(--bs-gutter-x))}.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * 0.5);padding-left:calc(var(--bs-gutter-x) * 0.5);margin-top:var(--bs-gutter-y)}.container,.container-fluid{width:100%;padding-right:var(--bs-gutter-x,0.75rem);padding-left:var(--bs-gutter-x,0.75rem);margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}}@media (min-width: 768px){.container{max-width:720px}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}}@media (min-width: 992px){.container{max-width:960px}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}}@media (min-width: 1200px){.container{max-width:1140px}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}}@media (min-width: 1400px){.container{max-width:1250px}}
/* ==================== Don't change, main column responsive end ======================= */
</style>