<template>
<div class="contact-section">
       <div class="container">
         <div class="row contdw-row-gap">
           <div class="col-lg-6">
             <div class="atcle-area">
               <h3>Stay <strong> Connected</strong> With Us</h3>
               <p>We're a team of problem solvers, specialists, strategists, and makers on a mission to assist each other and our clients discover their best selves. The urge to deliver high and quality work is our prime objective and we strive to outperform our competitors.</p>
               <div class="count-down">
                 <div class="item">
                   <h2>650 +</h2>
                   <p>Project completed</p>
                 </div>
                 <div class="item">
                   <h2>90 +</h2>
                   <p>Satisfied Clients</p>
                 </div>
               </div>

             </div>
           </div>
           <div class="col-lg-6">
             <div class="fild-cnt">
               <h3><strong>Free</strong> Consultation</h3>
                <!-- <div v-if="successmessage!=''" class="success">{{successmessage}}</div>
                <div v-if="errormessage!=''" class="error">{{errormessage}}</div> -->
               <form v-on:submit.prevent="submitForm" ref="form" name="form">
                 <div class="form-group">
                   <div class="form-itms">
                    <input type="text" :class="{ filderror: v$.name.$error }" v-model="state.name" placeholder="Full Name">
                    <span class="error-span" v-if="v$.name.$error">{{ v$.name.$errors[0].$message }}</span>
                  </div>
                  <div class="form-itms">
                   
                      <input type="text" id="email" :class="{ filderror: v$.email.$error }" v-model="state.email" placeholder="Email Address">
                      <span class="error-span" v-if="v$.email.$error">{{ v$.email.$errors[0].$message }}</span>
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="form-itms">
                      <input type="number"  min="0"  :class="{ filderror: v$.phone.$error }" v-model="state.phone" placeholder="Phone No">
                      <span class="error-span" v-if="v$.phone.$error">{{ v$.phone.$errors[0].$message }}</span>
                  </div>
                  <div class="form-itms">
                    <input type="text" :class="{ filderror: v$.message.$error }" v-model="state.message" placeholder="Subject">
                    <span class="error-span" v-if="v$.message.$error">{{ v$.message.$errors[0].$message }}</span>
                  </div>
                </div>
                <button class="btn" type="submit" :disabled="buttonclick">
                    <span class="error-btn" v-if="buttonclick==true" >Get Consultation. . .</span>
                    <span class="error-btn" v-else > Get Consultation</span>
                </button>
                 
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
                <a href="tel:+1(727) 300-6244" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
               </svg> +1(727) 300-6244</a>
              </div>
            </div>
           </div>

         </div>
         <div class="bg-img-bbx"></div>


       </div>
     </div>
</template>
<script>

import { defineComponent } from 'vue';
import { BASE_URL_API, BASE_URL_API_DATA } from '../config'
import { reactive, computed } from "vue"
import useValidate from "@vuelidate/core"
import { required, email, minLength, maxLength } from "@vuelidate/validators"
import axios from 'axios'

export default defineComponent({
  name: 'StayConectedWith',

  setup() {
      const state = reactive({
          name: '',
          email: '',
          phone: '',
          message:'',
      })

      const rules = computed(() => {
          return {
              name: { required },
              email: { required, email },
              phone: { minLength: minLength(10), maxLength: maxLength(12) },
              message: { required },
          }
      })
      const v$ = useValidate(rules, state)

      return {
          state,
          v$
      }
  },
  data() {
      return {
          form: {
              name: '',
              email: '',
              phone: '',
              message: ''
          },
          errormessage: '',
          successmessage: '',
          buttonclick:false,
      }
  },
  created(){
      //this.state3.email = 'amit.prasad@sohomwebmedia.com';
    //document.getElementById("email").required = false;
  },
  methods:{
    async submitForm() {
        this.buttonclick = true;
        this.v$.$validate()
        if (!this.v$.$error) {
           //this.$router.push("/thank-you");
         await axios.post(BASE_URL_API_DATA+'free_consultation_submit_data',
            {
                name: this.state.name,
                email: this.state.email,
                content: this.state.message,
                phone: this.state.phone,
            })
            .then((response) => {
              console.log("DATA :",response);
                if (response.data.status == 'success') {
                    this.state.name = '';
                    this.state.email = '';
                    this.state.phone = '';
                    this.state.message = '';
                    this.v$.$reset();
                    this.errormessage = '';
                    this.successmessage = response.data.msg;
                    this.buttonclick = false;
                    this.$router.push("/thank-you");
                } else {
                    this.successmessage = '';
                    this.errormessage = response.data.msg;
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
            console.log("HI");
        }, 10000);
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



</style>
