<template>
 <div class="banner-content banner-content-about">
      <div class="hero-text">
        <h1><strong>{{title}}</strong></h1>
        <p> {{description}} </p>
        <div class="hero-button-sctn">
         <button class="btn"  @click="modelShow()">Let's Work Together</button>
        </div>
      </div>
      <div class="shape-float">
        <img class="img-posin-1" src="frontend/images/banner/Shape1.png" alt="">
        <img class="img-posin-2" src="frontend/images/banner/Shape2.png" alt="">
      </div>
    </div>
    <transition name="pop" appear>
      <PopUp v-if="showPopup" :callback="clickClose"/>
    </transition>
</template>
<script>

import { defineComponent } from 'vue';
import PopUp from '../views/PopUp.vue';
export default defineComponent({
    name: 'Banner',
    components: {
    PopUp
  },
    props:['title', 'description'],
    data: () => ({
       showPopup:false, 
    }),
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
});

</script>
<style scoped>
</style>
