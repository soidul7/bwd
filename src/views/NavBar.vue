<template>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          
              <router-link  class="navbar-brand" exact-active-class="active" to="/"  @click="moveUp">
              <img src="/frontend/images/logo/logo.png" alt="">
              </router-link>
          <button class="navbar-toggler" :class="{open:!openHide}" type="button" id="toggler-navbar" @click="navTggBtn()"></button>
          <div class="collapse navbar-collapse" :class="{show:!showClass}" id="collapseNavSide">
            <ul class="navbar-nav">

              <li class="nav-item">
                <router-link  class="nav-link" exact-active-class="active" to="/"  @click="moveUp"> 
                  Home 
                </router-link>
              </li>
              <!-- <li class="nav-item">
                <router-link to="/aboutview" :class="(selectedNav=='aboutview')? 'nav-link active':'nav-link'" @click="clickNav('aboutview')">
                 About 
                </router-link>
              </li> -->

                <li class="nav-item Nav-Drop" @mouseleave="showMouseLeave()">
                    <router-link @mouseover="showMouseHover('about')" class="nav-link dropdown" exact-active-class="active" to="/about-us"  @click="moveUp"> About </router-link>
                    <ul class="dropdown-menu" v-show="divShowAbout"  @mouseleave="showMouseLeave()">
                       
                        <li>
                        <router-link class="dropdown-item" exact-active-class="active" to="/our-team"  @click="moveUp">
                        Our Team
                        </router-link>
                        </li>
                        <li>
                        <router-link class="dropdown-item" exact-active-class="active" to="/testimonials"  @click="moveUp">
                        Testimonials
                        </router-link>
                        </li>
                    </ul>
                </li>

              <!-- <li class="nav-item" >
                <router-link to="/ourteam" :class="(selectedNav=='ourteam')? 'nav-link active':'nav-link'" @click="clickNav('ourteam')">
                 Our Team
                </router-link>
              </li> -->
              <li class="nav-item" @mouseleave="showMouseLeave()">
                <router-link  @mouseover="showMouseHover('services')"  class="nav-link dropdown" exact-active-class="active" to="/service"  @click="moveUp">
                 Services
                </router-link>
                <ul class="dropdown-menu" v-show="divShowService" @mouseleave="showMouseLeave()">
                    <li>
                    <router-link class="dropdown-item"  exact-active-class="active" to="/email-marketing"  @click="moveUp">
                    Email Marketing
                    </router-link>
                    </li>
                    <li>
                    <router-link class="dropdown-item" exact-active-class="active" to="/pay-per-click"  @click="moveUp">
                    Pay-Per-Click
                    </router-link>
                    </li>
                    <li>
                    <router-link class="dropdown-item" exact-active-class="active" to="/ui-ux-strategy"  @click="moveUp">
                    UI/UX Strategy
                    </router-link>
                    </li>
                    <li>
                    <router-link class="dropdown-item" exact-active-class="active" to="/graphic-design"  @click="moveUp">
                    Graphic Design
                    </router-link>
                    </li>
                    <li>
                    <router-link class="dropdown-item" exact-active-class="active" to="/seo"  @click="moveUp">
                    SEO
                    </router-link>
                    </li>
                    
                    <li>
                    <router-link class="dropdown-item" exact-active-class="active" to="/digital-marketing"  @click="moveUp">
                    Digital Marketing
                    </router-link>
                    </li>
                    <li>
                    <router-link class="dropdown-item" exact-active-class="active" to="/web-development"  @click="moveUp">
                    Web Development
                    </router-link>
                    </li>
                    <li>
                    <router-link class="dropdown-item" exact-active-class="active" to="/web-design"  @click="moveUp">
                    Web Design
                    </router-link>
                    </li>
                </ul>
              </li>

              <!-- <li class="nav-item Nav-Drop"  @click="showMenu2('data')">
                <a href="#" class="nav-link dropdown">Services</a>
                <ul class="dropdown-menu" v-show="showCollapsed2(data)">
                  <li>
                    
                     <a href="#" class="dropdown-item">Digital Marketing</a>

                  </li>
                  <li>
                    
                     <a href="#" class="dropdown-item">Email Marketing</a>
                    
                  </li>
                  <li>
                    
                     <a href="#" class="dropdown-item">SEO</a>
                    
                  </li>
                  <li>
                    
                     <a href="#" class="dropdown-item">UI/UX Strategy</a>
                    
                  </li>
                  <li>
                    
                     <a href="#" class="dropdown-item">Pay-Per-Click</a>
                    
                  </li>
                  <li>
                    
                     <a href="#" class="dropdown-item">Graphic Design</a>
                    
                  </li>
                  <li>
                    
                     <a href="#" class="dropdown-item">Web Design</a>
                    
                  </li>
                  <li>
                    
                     <a href="#" class="dropdown-item">Web Development</a>
    
                  </li>
                </ul>
              </li> -->

              
              <!-- <li class="nav-item">
                <router-link to="/testimonialsite" :class="(selectedNav=='testimonialsite')? 'nav-link active':'nav-link'" @click="clickNav('testimonialsite')">
                 Testimonials
                </router-link>
              </li> -->

              <!-- <li class="nav-item" >
                <router-link  class="nav-link" exact-active-class="active" to="/blogpage" >
                 Blog
                </router-link>
              </li> -->
              <!-- <li class="nav-item">
                <router-link  class="nav-link" exact-active-class="active" to="/portfolio"  @click="moveUp"> 
                  Portfolio 
                </router-link>
              </li> -->
            <li class="nav-item">
                <router-link  class="nav-link" exact-active-class="active" to="/blog"  @click="moveUp"> 
                  Blog 
                </router-link>
              </li>
              <li class="nav-item">
                <router-link  class="nav-link" exact-active-class="active" to="/contact-us"  @click="moveUp">
                 Contact
                </router-link>
              </li>
            
            </ul>
            <form class="nav-fr-btn">
                 <button class="btn" @click="modelShow()" type="button">Get Started</button>
            </form>
          </div>
        </div>
    </nav>
    <transition name="pop" >
        <PopUp v-if="showPopup" :callback="clickClose"/>
    </transition>
</template>

<script>
    import PopUp from '../views/PopUp.vue'
  export default {
    name:"NavBar",
      components: {
                PopUp,
            },

  data() {
    return {
        // isOpen: true,
        selected: null,
        divShowAbout:false,
        divShowService:false,
        showPopup:false,
        openHide:false,
        showClass:true
    }   
  },
  
  created(){
   
    
    
  },
  methods:{
      navTggBtn(){
          if(this.openHide==''){
              this.openHide = true;
              this.showClass =false;
          } else {
              this.openHide = false;
              this.showClass =true;
          }
          
      },
      moveUp(){
           window.scrollTo(0,0);
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
    showMouseHover(type){
        //console.log("HIIII");
        if(type=='about'){
            this.divShowAbout = true;
            this.divShowService = false;
        }
        if(type=='services'){
            this.divShowService = true;
            this.divShowAbout = false;
        }
        
    },
    showMouseLeave(){
        //console.log("HIIII");
        this.divShowAbout = false;
        this.divShowService = false;
    },
    showMenu(index) {
      console.log('about');
      this.selected === index ? this.selected = null : this.selected = index;
    },
    showCollapsed(idx) {
      return idx === this.selected || false
    },
    clickNav(value){
      this.selectedNav=value;
      console.log("Hi::",this.selectedNav)
    },
    showMenu2(data){
        console.log('Service');
        this.selected2 === data ? this.selected2 = null : this.selected2 = data;
    },
    showCollapsed2(idx2) {
      return idx2 === this.selected2 || false
    },
    clickNav2(value2){
      this.selectedNav=value2;
      console.log("Hi::",this.selectedNav)
    },
    
  },
}
</script>

<style>
    /* ---------------------------------- */
     /* ---------------------------------- */
    .pop-enter-active,
    .pop-leave-active {
        /* transition: all 0.2s ease-in-out; 
        transform: scale(0.8);  */
        /* transition: transform 0.4s , opacity 0.4s linear; */
        transition: transform 0.5s ease-in-out, opacity 0.2s linear;
    }

    .pop-enter-from{
        opacity: 0;
        /* transform: translateX(-50%); */
        
    }
    .pop-leave-to {
    opacity: 0;
    /* transform: translateX(-50%); */
    
    }


    /* ///////////////////////////////////////////// */
</style>
<style scoped>

/* navbar start */
.navbar {
    position:fixed;
    left: 0;
    top: 0;
    right: 0;
    background: #FFFFFF;
    display: flex;
    z-index: 99;
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
    padding: 0;
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
nav.navbar .collapse:not(.show) {
    width: 0;
}
.navbar .navbar-nav .nav-item{
    margin-right: 30px;
    position: relative;
}
.navbar .navbar-nav .nav-item:last-child{
    margin-right: 0;
}
.navbar .navbar-nav .nav-item .nav-link {
    color: #000000;
    font-style: normal;
    font-weight: 400;
    font-size: 17px;
    line-height: 28px;
    margin-right: 0;
    letter-spacing: 0.01em;
    transition: all .2s;
    position: relative;
}

.navbar .navbar-nav .nav-item .dropdown-menu{
    position: static;
    z-index: 1000;
    min-width: 8rem;
    padding: .7rem 0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 0.125rem;
}
.navbar .navbar-nav .nav-item .dropdown-item {
        display: block;
    width: 100%;
    padding: 6px 14px;
    clear: both;
    font-weight: 400;
    text-decoration: none;
    white-space: nowrap;
    color: #212529;
    font-size: 14px;
    letter-spacing: 0.01em;
    transition: all .2s;
    position: relative;
}
.navbar .navbar-nav .nav-item .dropdown-item:hover{
    color: #D43F33;
}
.navbar .navbar-nav .nav-item .nav-link.dropdown::after {
    width: 15px;
    height: 15px;
    background-image: url('@/assets/images/icon/chevron-down.svg');
    background-size: cover;
    content: "";
    position: relative;
    right: -1px;
    top: 2px;
    display: inline-block;
}
.navbar .navbar-nav .nav-item .nav-link:hover{
    color: #D43F33;
}
.navbar .navbar-nav .nav-item .nav-link.active{
    color: #D43F33;
    font-weight: 500;
}
.navbar .nav-fr-btn .btn {
    border: 1px solid #000000;
    border-radius: 50px;
    font-weight: 400;
    font-size: 16px;
    padding: 6px 35px;
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
    border-radius: 50px;
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
.navbar .nav-fr-btn,
.navbar .navbar-nav{
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
    .navbar .navbar-nav .nav-item .dropdown-menu{
      position: absolute;
    }
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
        display: flex !important;
        flex-basis: auto;
        justify-content: space-between;
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
@media (max-width: 1199px){
    .navbar .nav-fr-btn .btn {
        padding: 6px 20px;
    }
    .navbar .navbar-nav .nav-item {
        margin-right: 26px;
    }

}
@media (max-width: 991px){
    .navbar .navbar-nav .nav-item .dropdown-menu{
      transform: unset;
    }
    .navbar-brand img{
        max-width: 100%;
        height: 35px;
    }
    .navbar .navbar-nav .nav-item .dropdown-item{
        color: #212529;
        font-size: 16px;
        padding: 0;

    }
    .navbar .navbar-nav .nav-item .dropdown-menu li {
        padding: 12px 12px 12px 0;
        border-bottom: 1px dashed #d1d1d1;
    }
    .navbar .navbar-nav .nav-item .dropdown-menu li:first-child{
        border-top: 1px dashed #d1d1d1;
    }
    .navbar .navbar-nav .nav-item .dropdown-menu li:last-child{
        padding-bottom: 0;
        border-bottom: unset;
    }
    .navbar .navbar-nav .nav-item .dropdown-menu {
        padding: 0;
        margin-top: 10px;
        border: unset;
    }
    .navbar .navbar-nav .nav-item .nav-link{
        padding-left: 18px;
    }
    .navbar .navbar-nav .nav-item .dropdown-item{
        padding-left: 35px;
        font-size: 14px;
    }
    .navbar-toggler{
        width: 25px;
        height: 25px;
        position: relative;
    }
    .navbar-toggler::after,
    .navbar-toggler::before{
        content: '';
        position: absolute;
        height: 2px;
        width: 100%;
        left: 0;
        transition: .3s ease-out;
        background-color: #0A0A0A;
    }
    .navbar-toggler::before{
        bottom: 11%;
    }
    .navbar-toggler::after{
        top: 18%;
        box-shadow: 0px 7px #0A0A0A;
    }
    .navbar-toggler:not(.open)::before {
        transform: rotate(45deg);
        top: 13px;
    }
    .navbar-toggler:not(.open)::after {
        transform: rotate(-45deg);
        top: 13px;
        box-shadow: none;
    }
    .navbar .navbar-collapse{
        position: fixed;
        right: 0;
        top: 58px;
        width: 0;
        height: 0;
        overflow-y: scroll;
        overflow-x: hidden;
        z-index: 99;
        padding-bottom: 12px;
        background-color: #FFFFFF;
        transition: .4s ease-out;
    }
    .navbar .navbar-collapse.show{
        width: 100%;
        height: 100%;
    }
    .navbar .navbar-collapse::-webkit-scrollbar {
        width: 1px;
    }
    .navbar .navbar-collapse::-webkit-scrollbar-track {
        background: transparent;
    }
    .navbar .navbar-collapse::-webkit-scrollbar-thumb {
        background: #dfdfdf;
    }
    .navbar .navbar-nav .nav-item {
        margin-right: 0;
        padding: 12px 12px 12px 0;
        position: relative;
    }
    
    .navbar .navbar-nav .nav-item::after{
        content: '';
        position: absolute;
        border-bottom: 1px dashed #d1d1d1;
        left: 0;
        bottom: 0;
        width: 0;
    }
    .navbar .navbar-collapse.show .navbar-nav .nav-item::after{
        width: 100%;
        transition: width .5s ease-out;
    }
    .navbar .navbar-nav .nav-item:first-child{
        border-top: 1px dashed #d1d1d1;
    }
    .navbar .nav-fr-btn{
        margin-top: 35px;
        padding-left: 18px;
    }
    .navbar .nav-fr-btn .btn {
        padding: 6px 35px;
    }
}  
/* navbar end */
   
</style>