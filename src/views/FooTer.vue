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
                  <img src="frontend/images/icon/facebook.svg" alt="">
                </a>
                <a href="https://twitter.com/BWD2008" class="btn">
                  <img src="frontend/images/icon/twi.svg" alt="">
                </a>
                <a href="https://www.linkedin.com/company/bigwavedevelopment/" class="btn">
                  <img src="frontend/images/icon/link.svg" alt="">
                </a>
                
                
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
                  <a href="tel:+1(727) 300-6244"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>+1(727) 300-6244</a>
                </li>
                <li>
                  <a href="https://teams.microsoft.com/l/chat/0/0?users=bigwavedevelopment@gmail.com" target="_blank">
                    

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                      <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0m-2.238 9.488-.12-.002a5.2 5.2 0 0 0 .381-2.07V6.306a1.7 1.7 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.6 2.6 0 0 1-2.598 2.598z"/>
                      <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.68.68 0 0 1-.682.682H.682A.68.68 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945z"/>
                    </svg>
                    bigwavedevelopment</a>
                </li>
                <li>
                  <a href="https://t.me/bigwave_llc" target="_blank">
                    

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                    </svg>
                    @bigwave_llc</a>
                </li>
                <li>
                  <a href="mailto:david@bigwavedevelopment.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                  </svg> david@bigwavedevelopment.com</a>
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
              <h6>Copyright @2026 <span> Big Wave Development LLC.</span> All Rights Reserved.</h6>
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
    padding: 0;
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