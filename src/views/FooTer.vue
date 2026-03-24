<template>
   <footer class="main-footer" style="background: #f7f3f3;" >

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="item">
              <router-link  class="navbar-brand" exact-active-class="active" to="/"  @click="moveUp">
              <img src="frontend/images/logo/logo.png" class="frt-logo" alt="">
              </router-link>
              <p>We'll go into your data, examine your digital footprint, and provide recommendations to help you achieve your objectives with custom programmes.</p>
              <div class="icon-column">
                <a href="https://www.facebook.com/bigwavedevelopmentagency" class="btn">
                  <img src="/frontend/images/icon/facebook.svg" alt="">
                </a>
                <a href="https://twitter.com/BWD2008" class="btn">
                  <img src="/frontend/images/icon/twi.svg" alt="">
                </a>
                <a href="https://www.linkedin.com/company/big-wave-development/about/" class="btn">
                  <img src="/frontend/images/icon/link.svg" alt="">
                </a>
                <!-- <a href="https://works-reddensoft.com/bwd-new/" class="btn">
                  <img src="frontend/images/icon/be.svg" alt="">
                </a> -->
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="item">
              <h4>Quick Link</h4>
              <ul>
                <li>
                  <router-link to="/"   @click="moveUp">
                   Home
                  </router-link>
                </li>
                <li>
                  <router-link to="/about-us"  @click="moveUp"> 
                   About Us
                  </router-link>
                </li>
                <li>
                  <router-link to="/service"  @click="moveUp">
                  Services
                  </router-link>
                </li>
                <!-- <li>
                  <router-link to="/Portfolio"  @click="moveUp">
                  Portfolio
                  </router-link>
                </li> -->
                <li>
                  <router-link to="/our-team"  @click="moveUp">
                   Our Team
                  </router-link>
                </li>
                <li>
                  <router-link to="/blog">
                    Blog 
                  </router-link>
                </li>
                <li>
                  <router-link to="/contact-us"  @click="moveUp">
                   Contact
                  </router-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="item">
              <h4>Contact</h4>
              <ul>
                <li>
                  <a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>  7901 4th ST N STE 8022 St. Petersburg, FL 33702</a>
                </li>
                <li>
                  <a href="tel:+1 678 608 2725"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>+1 678 608 2725</a>
                </li>
                <li>
                  <a href="https://join.skype.com/invite/tstWdtSTbJY6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skype" viewBox="0 0 16 16">
                      <path d="M4.671 0c.88 0 1.733.247 2.468.702a7.423 7.423 0 0 1 6.02 2.118 7.372 7.372 0 0 1 2.167 5.215c0 .344-.024.687-.072 1.026a4.662 4.662 0 0 1 .6 2.281 4.645 4.645 0 0 1-1.37 3.294A4.673 4.673 0 0 1 11.18 16c-.84 0-1.658-.226-2.37-.644a7.423 7.423 0 0 1-6.114-2.107A7.374 7.374 0 0 1 .529 8.035c0-.363.026-.724.08-1.081a4.644 4.644 0 0 1 .76-5.59A4.68 4.68 0 0 1 4.67 0zm.447 7.01c.18.309.43.572.729.769a7.07 7.07 0 0 0 1.257.653c.492.205.873.38 1.145.523.229.112.437.264.615.448.135.142.21.331.21.528a.872.872 0 0 1-.335.723c-.291.196-.64.289-.99.264a2.618 2.618 0 0 1-1.048-.206 11.44 11.44 0 0 1-.532-.253 1.284 1.284 0 0 0-.587-.15.717.717 0 0 0-.501.176.63.63 0 0 0-.195.491.796.796 0 0 0 .148.482 1.2 1.2 0 0 0 .456.354 5.113 5.113 0 0 0 2.212.419 4.554 4.554 0 0 0 1.624-.265 2.296 2.296 0 0 0 1.08-.801c.267-.39.402-.855.386-1.327a2.09 2.09 0 0 0-.279-1.101 2.53 2.53 0 0 0-.772-.792A7.198 7.198 0 0 0 8.486 7.3a1.05 1.05 0 0 0-.145-.058 18.182 18.182 0 0 1-1.013-.447 1.827 1.827 0 0 1-.54-.387.727.727 0 0 1-.2-.508.805.805 0 0 1 .385-.723 1.76 1.76 0 0 1 .968-.247c.26-.003.52.03.772.096.274.079.542.177.802.293.105.049.22.075.336.076a.6.6 0 0 0 .453-.19.69.69 0 0 0 .18-.496.717.717 0 0 0-.17-.476 1.374 1.374 0 0 0-.556-.354 3.69 3.69 0 0 0-.708-.183 5.963 5.963 0 0 0-1.022-.078 4.53 4.53 0 0 0-1.536.258 2.71 2.71 0 0 0-1.174.784 1.91 1.91 0 0 0-.45 1.287c-.01.37.076.736.25 1.063z"/>
                    </svg>
                    bigwavedevelopment</a>
                </li>
                <li>
                  <a href="mailto:info@bigwavedevelopment.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                  </svg> info@bigwavedevelopment.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="item">
              <h4>Newsletter</h4>
              <p>Want to know what we’re up to? Sign up for the newsletter to stay updated.</p>
              <form v-on:submit.prevent="submitForm" ref="form" name="form">
                <div class="form-group" :class="buttonclick==true? 'processing':''"> 
                  <!-- processing -->
                  <input type="text" :class="emailField=='' ? 'filderror': ''" v-model="emailField" placeholder="Enter email address">
                  <button :disabled="buttonclick" class="btn" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mo-done bi bi-send-fill" viewBox="0 0 16 16">
                      <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                    </svg>
                  </button>
                  <img class="ftrld-img" src="frontend/images/logo/Rolling-0.6s-200px.svg" alt="">
                </div>
              </form>
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
            </div>
          </div>
        </div>
      </div>

      <div class="copyrgt-area">
        <div class="container">
          <div class="content-ftr">
            <div class="text">
              <h6>Copyright @2022 <span> Big Wave Development LLC.</span> All Rights Reserved.</h6>
            </div>
            <div class="text-min">
              <router-link to="/privacy-policy"  @click="moveUp">Privacy Policy</router-link> | 
              <router-link to="/terms-and-conditions"  @click="moveUp">Terms and Conditions</router-link> </div>
          </div>
        </div>
      </div>

     </footer>
</template>

<script>
  import { defineComponent } from 'vue';
  import { BASE_URL_API } from '../config'
  import axios from 'axios'
  export default defineComponent({
    name: 'FooTer',
    
    data() {
        return {
            emailField:'',
            errormessage: '',
            successmessage: '',
            buttonclick:false,
        }
    },
    methods:{
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
      moveUp(){
           window.scrollTo(0,0);
      },
    }
  });
</script>
<style scoped>
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
.contact-section .fild-cnt .form-group input.filderror{
  border-color: #D43F33;
}
.contact-section .form-itms{
    width: 100%;
}
.contact-section .form-itms .error-span{
  position: relative;
  top: 5px;
  font-size: 11px;
  color: #D43F33;

  background: #050505;
  top: -14px;
  left: 25px;
  padding: 4px;
}

.main-error-msg {
   background: #34a853;
    padding: 3px 6px;
    /* width: -webkit-fit-content; */
    width: -moz-fit-content;
    width: fit-content;
    margin: 6px auto 0;
    border-radius: 8px;
}
.main-error-msg h5 {
    font-size: 12px;
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



</style>
<style>
/* .main-footer .item .form-group input */
.main-footer .item .form-group input.filderror{
  border-color: #D43F33;
}
 .main-footer {
    margin-top: 210px;
    padding-top: 50px;
}
.main-footer .item .frt-logo{
    margin-bottom: 20px;
    width: 110px;
}
.main-footer .item p{
    font-weight: 400;
    font-size: 14px;
    color: #353535;
    line-height: 22px;
}
.main-footer .item .icon-column{
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    padding-top: 22px;
}
.main-footer .item .icon-column a{
    background-color: #D23E32;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.main-footer .item h4 {
    font-weight: 600;
    font-size: 22px;
    color: #33383c;
    margin-top: 12px;
    margin-bottom: 24px;
}
.main-footer .item ul li{
    margin-bottom: 10px;
}
.main-footer .item ul li:last-child{
    margin-bottom: 0;
}
.main-footer .item li a{
    font-weight: 400;
    font-size: 14px;
    color: #353535;
    display: flex;
    gap: 7px;
    word-break: break-word;
    align-items: baseline;
}
.main-footer .item li a svg{
    flex-shrink: 0;
    position: relative;
    top: 3px;
    width: 14px;
    color: #D33E32;
}
.main-footer .item .form-group {
    position: relative;
    margin-top: 28px;
}
.main-footer .item .form-group input {
    background: transparent;
    border: 1px solid #000000;
    border-radius: 50px;
    font-weight: 400;
    font-size: 13px;
    color: #353535;
    width: 100%;
    padding: 11px 45px 11px 25px;
    max-width: 307px;
}
.main-footer .item .form-group input:focus{
    outline: none;
}
.main-footer .item .form-group [type="submit"],
.main-footer .item .form-group .ftrld-img {
    color: #D33E32;
    position: absolute;
    top: 50%;
    right: 18px;
    padding: 0;
    transform: translateY(-50%);
}
.main-footer .item .form-group .ftrld-img{
  width: 20px;
}
.main-footer .item .form-group:not(.processing) .ftrld-img,
.main-footer .item .processing [type="submit"] .mo-done{
  display: none;
}
.main-footer .row{
    row-gap: 40px;
}
.main-footer .copyrgt-area {
    border-top: 1px solid #dbdbdb;
    padding: 14px 0;
    margin-top: 40px;
}
.main-footer .copyrgt-area .content-ftr{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.main-footer .copyrgt-area .content-ftr .text h6,
.main-footer .copyrgt-area .content-ftr .text-min a{
    font-weight: 400;
    font-size: 12px;
    color: #353535;
}
.main-footer .copyrgt-area .content-ftr .text h6 span{
    font-weight: 600;
}
.main-footer .copyrgt-area .content-ftr .text-min{
    display: flex;
    column-gap: 12px;
}
@media (max-width: 1199px){
    .main-footer .copyrgt-area .content-ftr {
        row-gap: 10px;
        flex-direction: column;
    }
    .main-footer .copyrgt-area .content-ftr .text-min {
        column-gap: 14px;
    }
    .main-footer .copyrgt-area {
        padding: 15px 0;
        margin-top: 50px;
    }
    .main-footer {
    margin-top: 180px;
}
}
@media (max-width: 992px){
    .main-footer {
        margin-top: 200px;
    }
    .main-footer .item .frt-logo {
        margin-bottom: 15px;
    }
    .main-footer .item h4 {
        font-size: 22px;
        margin-bottom: 36px;
    }
    .main-footer .item ul li {
        margin-bottom: 14px;
    }
    .main-footer .item .form-group {
        margin-top: 16px;
        width: fit-content;
    }
    .main-footer {
        margin-top: 170px;
    }
}
@media (max-width: 767px){
    .main-footer .item .form-group {
        width: 100%;
    }
    .main-footer .item .form-group input {
        max-width: 100%;
    }
    .main-footer .item .icon-column{
      margin-top: 0;
       padding-top: 20px;
    }
    .main-footer {
        padding-top: 40px;
    }
    .main-footer .item h4 {
        font-size: 20px;
        margin-bottom: 15px;
    }
    .main-footer .item ul li {
        margin-bottom: 10px;
    }
    .main-footer .item li a {
        font-size: 14px;
    }
    .main-footer .row {
        row-gap: 20px;
    }
}

@media (max-width: 576px) {
    .main-footer .copyrgt-area .content-ftr .text h6{
        text-align: center;
    }
    .main-footer .item{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .main-footer .item li a {
      justify-content: center;
      text-align: center;
    }
    .main-footer .item p{
      text-align: center;
    }
  
}


/* ==================== Don't change, main column responsive start here ================= */
.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-0.5 * var(--bs-gutter-x));margin-left:calc(-0.5 * var(--bs-gutter-x))}.row > *{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * 0.5);padding-left:calc(var(--bs-gutter-x) * 0.5);margin-top:var(--bs-gutter-y)}.container,.container-fluid{width:100%;padding-right:var(--bs-gutter-x,0.75rem);padding-left:var(--bs-gutter-x,0.75rem);margin-right:auto;margin-left:auto}@media (min-width: 576px){.container{max-width:540px}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}}@media (min-width: 768px){.container{max-width:720px}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}}@media (min-width: 992px){.container{max-width:960px}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}}@media (min-width: 1200px){.container{max-width:1140px}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}}@media (min-width: 1400px){.container{max-width:1250px}}
/* ==================== Don't change, main column responsive end ======================= */

</style>