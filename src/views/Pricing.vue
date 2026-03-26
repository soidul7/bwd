<template>
    <MetaTag :title="metaTitle" :description="metaDescription"/>   
    <NavBar />
    <div class="banner-content inner-banner-text">
        <div class="hero-text">
            <h2>Transforming Ideas Into <br><strong>Successful Solutions</strong></h2>
            <p>Want to know the Secret to Flourish in the Market? Subscribe to our budget-friendly
                monthly plans designed to boost your revenue and income</p>
            <h6>Important to build relations and connect with customers to obtain trust and respect. Encourage users to
                stay connected with the product by focusing on user-centric design and functionality.
                We understand that establishing solid relations with audiences is not a simple affair to pursue.
            </h6>
        </div>
        <div class="shape-float">
            <img class="img-posin-2" src="frontend/images/banner/Shape2.png" alt="">
        </div>
    </div>
    <div class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="make-it">
                        <h2>How to <span>make it?</span></h2>
                        <p>We have your back to support you through thick and thin and help you to <strong> find,
                                convert,</strong> and <strong>keep customers.</strong> </p>
                        <div class="know-more-content">
                            <h4>Sign Up to Know More</h4>
                            <button class="btn">Get in Touch</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="why-us-right-content">
                        <div class="why-us-right">
                            <h4>Why Us?</h4>
                            <div class="why-us-rightin-bullet">
                                <ul>
                                    <li>On-time delivery from a committed team</li>
                                    <li>Revolutionize brands with project planning & documentation</li>
                                    <li>Impactful experience with maximum output & cost efficiency</li>
                                    <li>Thrive seamless integration</li>
                                    <li>Blending user-centric responsive designs </li>
                                    <li>Boost conversion rates with effective landing page design & CTA</li>
                                    <li>Uncover distinctive cross-platform designs </li>
                                    <li>Optimum productivity through transparent project management</li>
                                    <li>Prototyping and MVP development to create solutions that matter</li>
                                    <li>Agile methodology for enriched project management</li>
                                    <li>Resources with technological expertise </li>
                                    <li>Quality assurance for continuous improvement </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why-us-back"></div>
    <div class="explore-plans custom-padding">
        <div class="container">
            <h2 class="text-center">Explore Our <strong>Plans</strong></h2>
            <p class="text-center">Choose a plan and start your 14-day free trial. Generate appointments and leads or
                source talent online, risk-free.</p>
            <div class="row custom-gap custom-img-before explore-box-all">
                <div class="col-lg-4 col-md-6 col-sm-12 explore-box">
                    <div class="plans-main">
                        <div class="plans-inner">
                            <h6>Basic Plan</h6>
                            <p>Are you looking to launch or renovate your site with new ideas? Well, you can try our
                                basic plan with exclusive limited offers on your first order.</p>
                            <div class="call-fitX">
                                <span>From <del> $5999 </del></span>
                                <h5>$3999</h5>
                                <button class="btn plans-btn">Get Started</button>
                            </div>
                        </div>
                        <!-- <div class="plans-mid">
                                <h4>Features:</h4>
                                <div class="plans-mid-sec" :class="{ 'highlight': isHighlighted }">
                                    <ul>
                                        <li>UI/UX Design</li>
                                        <li>Responsive Design</li>
                                        <li>Logo Design</li>
                                        <li>Banner Designs</li>
                                        <li>Contact Forms</li>
                                        <li>Optimized Landing Pages</li>
                                        <li>Email Template Designs</li>
                                        <li>Flexible Team Selection</li>
                                        <li>Basic GIFs</li>
                                        <li>Presentation</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="plans-dropdown">
                               <button type="button" @click="addClass"> Show More Features <span><img src="@/assets/images/pricing/drop-down.png" alt=""></span></button>         
                            </div> -->

                        <div class="plans-mid">
                            <h4>Features:</h4>

                            <div class="plans-mid-sec" :class="{ 'highlight': isHighlighted }">
                                <ul>
                                    <transition-group name="fade">
                                        <li v-for="(feature, index) in visibleFeatures" :key="index">{{ feature }}</li>
                                    </transition-group>
                                </ul>
                            </div>

                        </div>
                        <div class="plans-dropdown">
                            <button type="button" @click="toggleFeatures('box1')">
                                {{ showMore.box1 ? 'Show Less Features' : 'Show More Features' }}
                                <span><img src="@/assets/images/pricing/drop-down.png" alt=""></span>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 explore-box">
                    <div class="plans-main popular">
                        <div class="popular-sec d-flex justify-content-center align-items-center">
                            <span>Popular</span>
                        </div>
                        <div class="plans-inner">
                            <h6>Advanced Plan</h6>
                            <p>Ready to win the race of the digital market with some advanced designing features?</p>
                            <div class="call-fitX">
                                <span>From <del> $9999 </del></span>
                                <h5>$6999</h5>
                                <button class="btn plans-btn">Get Started</button>
                            </div>
                        </div>
                        <div class="plans-mid">
                            <h4>Features:</h4>

                            <div class="plans-mid-sec" :class="{ 'highlight': isHighlighted }">
                                <ul>
                                    <transition-group name="fade">
                                        <li v-for="(featuresdevelop, index) in visibleFeaturesDevelop" :key="index">{{
                                featuresdevelop }}</li>
                                    </transition-group>
                                </ul>
                            </div>

                            <!-- <div class="plans-mid-sec">
                                    <ul>
                                        <li>UI/UX Design</li>
                                        <li>Responsive Design</li>
                                        <li>Logo Design</li>
                                        <li>Banner Designs</li>
                                        <li>Custom Illustration</li>
                                        <li>Contact Forms & CTA</li>
                                        <li>Highly Optimized Landing Pages</li>
                                        <li>Email Template Design </li>
                                        <li>Custom Homepage Mockup</li>
                                        <li>Custom inner page Layout</li>
                                    </ul>
                                </div> -->
                        </div>
                        <div class="plans-dropdown">
                            <button type="button" @click="toggleFeatures('box2')">
                                {{ showMore.box2 ? 'Show Less Features' : 'Show More Features' }}
                                <span><img src="@/assets/images/pricing/drop-down.png" alt=""></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 explore-box">
                    <div class="plans-main">
                        <div class="plans-inner plans-inner2">
                            <h6>Custom Plan</h6>
                            <p>You can try our custom plan to have a better version to flourish in the market! Make a customized plan to get the service you want. Talk to us to get the best out of it.</p>
                         
                            <div class="call-fitX">
                                
                                <button class="btn plans-btn">let's talk</button>
                            </div>
                        </div>
                        <div class="plans-mid">
                            <h4>Features:</h4>
                            <div class="plans-mid-sec" :class="{ 'highlight': isHighlighted }">
                                <ul>
                                    <transition-group name="fade">
                                        <li v-for="(featurespremium, index) in visibleFeaturesPremium" :key="index">{{
                                featurespremium }}</li>
                                    </transition-group>
                                </ul>
                            </div>
                        </div>
                        <div class="plans-dropdown">
                            <button type="button" @click="toggleFeatures('box3')">
                                {{ showMore.box3 ? 'Show Less Features' : 'Show More Features' }}
                                <span><img src="@/assets/images/pricing/drop-down.png" alt=""></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="discount-sec">
            <div class="discount-sec-fast">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="discount-sec-left">
                            <h2>Winning <span>Points</span> We Have!!</h2>
                            <p>The experience is almost like working in your office with your colleagues.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="discount-sec-right">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="discount-sec-right-inner">
                                        <div class="discount-sec-right-inner-icon">
                                            <img src='@/assets/images/pricing/Our-Process.png' alt="">
                                        </div>
                                        <h3>Our Process</h3>
                                        <p>It’s the infrastructure that enables us to create great things that drive
                                            results for our clients.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="discount-sec-right-inner">
                                        <div class="discount-sec-right-inner-icon">
                                            <img src='@/assets/images/pricing/Our-People.png' alt="">
                                        </div>
                                        <h3>Our People</h3>
                                        <p>It’s our team players who know how to win the game by analyzing requirements
                                            of the customers and users and presenting the same to match up to their
                                            expectations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="discount-sec-second">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="discount-sec-second-left">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="offer">
                                        <p class="m-0">Exciting <span>Offer</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="offer-text">
                                        <h3><strong>30% off </strong>and <strong>7 days free trial</strong></h3>
                                        <p>*Limited Time Offer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 btn-end">
                        <button class="btn discount-sec-second">Grab Your Discount </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="discount-sec-back"></div>
    </div>
    <div class="maintenance-offers custom-padding">
        <div class="container">
            <div class="maintenance-offers-text">
                <h2><span>Looking for the <strong>Maintenance</strong> of your website?</span> Click on to explore what
                    we have in store for <span><strong>Maintenance Offers!</strong></span></h2>
                <router-link to="/maintainance-pricing" class="btn" @click="moveUp">Explore Our Website Maintenance
                    Plans</router-link>
            </div>
        </div>
    </div>
    <div class="excellent-company-section">
        <div class="container">


            <div class="overdi-img">
                <div class="ext-round">
                    <div class="row gx-0">
                        <div class="col-lg-12">
                            <div class="slide-area">

                                <carousel :autoplay="5000" :items-to-show="1">
                                    <slide v-for="testimonial in testimonialList" :key="testimonial">
                                        <div class="text-area">
                                            <img class="quotation-img" src="frontend/images/video/quotation.png" alt="">
                                            <h4>{{ testimonial.title }}</h4>
                                            <p>{{ testimonial.content }}</p>
                                            <h3>{{ testimonial.name }}<br> <span>{{ testimonial.designation }}</span> </h3>
                                        </div>
                                    </slide>
                                    <!-- <slide v-for="slide in 10" :key="slide">
                             <div class="carousel-item">
                            <div class="text-area">
                                <img class="quotation-img" src="frontend/images/video/quotation.png" alt="">
                                <h4>Excellent company!</h4>
                                <p>We have been doing campaigns with Big Wave Development and are very impressed with how David and the company as a whole has handled our account. From beginning to end, he is very prompt and helpful in all aspects of setup and follow through. Excellent company!</p>
                                <h3>Marianne Narusiewics <br> <span>(Lomita, CA)</span> </h3>
                            </div>
                            </div>
                           </slide>
                           <slide v-for="slide in 10" :key="slide">
                                <div class="carousel-item">
                                <div class="text-area">
                                    <img class="quotation-img" src="frontend/images/video/quotation.png" alt="">
                                    <h4>Excellent company!</h4>
                                    <p>We have been doing campaigns with Big Wave Development and are very impressed with how David and the company as a whole has handled our account. From beginning to end, he is very prompt and helpful in all aspects of setup and follow through. Excellent company!</p>
                                    <h3>Marianne Narusiewics <br> <span>(Lomita, CA)</span> </h3>
                                </div>
                                </div> 
                           </slide> -->
                                    <template #addons>
                                        <navigation />
                                        <pagination />
                                    </template>
                                </carousel>
                                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->


                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
    <StayConectedWith />
    <FooTer />

</template>

<script>

import MetaTag from '../components/MetaTag.vue'
import FooTer from '../views/FooTer.vue'
import NavBar from '../views/NavBar.vue'
import StayConectedWith from '../components/StayConectedWith.vue'
import { defineComponent } from 'vue';
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'


export default defineComponent({
    name: 'Pricing',
    components: {
        NavBar,
        FooTer,
        StayConectedWith,
        Carousel,
        Slide,
        Pagination,
        Navigation,
        MetaTag
    },


    data() {
        return {

            metaTitle:"Design and Development Pricing | Big Wave Development LLC",
            metaDescription:"Big Wave Development has the appropriate mix of young, mature, vibrant, and dynamic employees to meet your needs. Interested in learning more? Begin now. ",
            showMore: {
                box1: false, // Initialize showMore for the first box
                box2: false,
                box3: false,  // Initialize showMore for the second box
            },
            features: [
                'UI/UX Design',
                'Responsive Design',
                'Logo Design',
                'Banner Designs',
                'Contact Forms',
                'Optimized Landing Pages',
                'Email Template Designs',
                'Flexible Team Selection',
                'Basic GIFs',
                'Presentation',
                'Canva Designs',
                '160 Working Hours',
                'Scrum Master - 10 hrs/mo',
                'Part-time QA & DevOps',
                '1 Week Free Trial',
                '1 Dedicated Developer',
                'Custom Development'
            ],
            featuresdevelop: [
                'UI/UX Design',
                'Responsive Design',
                'Logo Design',
                'Banner Designs',
                'Contact Forms',
                'Optimized Landing Pages',
                'Email Template Designs',
                'Flexible Team Selection',
                'Basic GIFs',
                'Presentation',
                'Canva Designs',
                'Web Designs',
                '160 Working Hours',
                'Scrum Master - 20 hrs/mo',
                '24*7 QA & DevOps Support',
                '2 Week Free Trial',
                'Free Technical Consultation ',
                'Dedicated Project Manager',
                '1 Dedicated Developer',
                'CMS',
                'Custom Development'
            ],
            featurespremium: [
                'UI/UX Design',
                'Responsive Design',
                'Logo Design',
                'Banner Designs',
                'Custom Illustration',
                'Contact Forms & CTA',
                'Highly Optimized Landing Pages',
                'Email Template Designs',
                'Custom Homepage Mockup',
                'Custom Inner Page Layout',
                'Custom Wireframe Design',
                'Chat Feature',
                'Payment Integration',
                'Social Media Profiles Integration Revisions',
                'Basic GIFs',
                'Presentation',
                'Canva Designs ',
                'Web Designs',
                'Packaging Designs',
                'Publication and Typographic Designs',
                '160 Working Hours',
                'Scrum Master - 30 hrs/mo',
                '24*7 QA, DevOps & BA Support',
                '2 Week Free Trial',
                'Free Technical Consultation ',
                'Dedicated Project Manager',
                '1 Dedicated Developer',
                'CMS',
                'Custom Development'
            ],
            testimonialList:[
                { 
                    title: 'Excellent Company!',
                    content:'I am overwhelmed by the experience of work I had from Bigwavedevelopment. They have an eye for detail and analyzed my project’s requirements, which is reflected in the provided solutions. Most importantly, they are dedicated and committed towards work, due to which they delivered me on time.',
                    name:'Jonas Moore',
                    designation:'(CEO)',
                    open: true
                },
                { 
                    title: 'Value for Money!',
                    content:'I believe designing a website is not a simple affair within a short period. But Bigwavedevelopment has done it and that too with innovative ideas that can gain the attention of my project’s potential audiences.',
                    name:'Mike Hanks ',
                    designation:'(Manager)',
                    open: true
                },
                { 
                    title: 'Much Needed Service!',
                    content:'Extremely satisfied with Bigwavedevelopment’s contribution that has helped my project to relaunch the website that successfully thrives clicks, opens, and sales. I would say Bigwavedevelopment are quite a perfectionist.',
                    name:'Moine Tim',
                    designation:'(Entrepreneur)',
                    open: true
                },
                { 
                    title: 'Great Team Work!',
                    content:'Not sure from whom to take help for proper maintenance of my business’s site. Then I got support from Bigwavedevelopment, which enabled me to analyze the problems of the site and find out the reason why the site was not gaining the attention of the audiences. Then as per requirement made changes and monitored, which worked like magic for my business in no less time.',
                    name:'Jack Cook ',
                    designation:'(CEO)',
                    open: true
                },
                { 
                    title: 'Big Problem Solver!',
                    content:'In short I am impressed with the whole team of BWD. They have not only made advanced changes to my website but also cared enough to monitor and control it to ensure it is operating seamlessly.',
                    name:'Lee Ming Ho ',
                    designation:'(Manager)',
                    open: true
                },
                { 
                    title: 'Efficient Communicator!',
                    content:'The overall experience with BWD has been tremendous, and if I have some other work to do in the future, that time too, will take BWD into consideration.',
                    name:'Sam Max ',
                    designation:'(Entrepreneur)',
                    open: true
                },
            ],
        };
    },

    computed: {
        visibleFeatures() {
            return this.showMore.box1 ? this.features : this.features.slice(0, 10);
        },
        visibleFeaturesDevelop() {
            return this.showMore.box2 ? this.featuresdevelop : this.featuresdevelop.slice(0, 10);
        },
        visibleFeaturesPremium() {
            return this.showMore.box3 ? this.featurespremium : this.featurespremium.slice(0, 10);
        }
    },
    methods: {
        toggleFeatures(box) {
            this.showMore[box] = !this.showMore[box];
        },
        moveUp() {
            window.scrollTo(0, 0);
        },
    }
});

</script>

<style>
.slide-area .carousel__prev {
    bottom: 0;
    right: 49px;
    transform: translate(-50%, -50%);
    background: none !important;
    top: inherit;
    left: inherit;
}

.slide-area .carousel__pagination {
    display: none;
}

.slide-area .carousel__next {
    bottom: 0;
    right: 42px;
    transform: translate(50%, -50%);
    background: none !important;
    top: inherit;
}
</style>

<style scoped>
.carousel {
    overflow: hidden;
}



.row.gx-0>* {
    padding-right: 0;
    padding-left: 0;
}

.excellent-company-section {

    margin-bottom: 190px;
}

.excellent-company-section .ext-round {
    border-radius: 10px;
    overflow-x: hidden;
    position: relative;
}

.excellent-company-section .overdi-img {
    position: relative;
}

.excellent-company-section .overdi-img::after {
    content: '';
    position: absolute;
    width: 191px;
    height: 190px;
    background-image: url('@/assets/images/process/remote-circle.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    bottom: -65px;
    left: -48px;
    z-index: -1;
}

.excellent-company-section .slide-area {
    background-color: #000000;
    padding-bottom: 15px;
    height: 100%;
    display: flex;
    /* align-items: center; */
}

.excellent-company-section .slide-area .text-area .quotation-img {
    width: 50px;
    margin-bottom: 20px;
}

.excellent-company-section .carousel-control-prev {
    left: 80%;
}

.excellent-company-section .carousel-control-next,
.excellent-company-section .carousel-control-prev {
    position: absolute;

    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: end;
}

.excellent-company-section .slide-area .text-area {
    padding-left: 60px;
    padding-top: 60px;
    text-align: left;
    padding-right: 10%;
    padding-bottom: 60px;
}

.excellent-company-section .slide-area .text-area h4 {
    background: #D43F33;
    border-radius: 5px;
    width: max-content;
    color: #fff;
    font-weight: 600;
    font-size: 20px;
    color: #FFFFFF;
    line-height: 1;
    padding: 6px 12px;
}

.excellent-company-section .slide-area .text-area p {
    font-weight: 400;
    font-size: 16px;
    color: #B5B5B5;
    margin: 15px 0 28px;
}

.excellent-company-section .slide-area .text-area h3 {
    font-weight: 600;
    font-size: 22px;
    color: #FFFFFF;
    line-height: 1;
}

.excellent-company-section .slide-area .text-area h3 span {
    font-size: 16px;
}

.excellent-company-section .slide-area .owl-theme .owl-nav {
    text-align: right;
    padding-right: 50px;
    margin: 0;
}

.excellent-company-section .slide-area .owl-theme .owl-nav button {
    color: #FFFFFF;
    font-size: 25px;
    font-weight: 300;
    margin: 0;
}

.excellent-company-section .slide-area .owl-theme .owl-nav button:first-child {
    margin-right: 20px;
}

.excellent-company-section .slide-area .owl-theme .owl-nav [class*=owl-]:hover {
    background: unset;
}

.excellent-company-section .video-conts {
    position: relative;
}

.excellent-company-section .video-conts .thumbnails {
    align-items: stretch !important;
}

.excellent-company-section .video-conts,
.excellent-company-section .video-conts .thumbnails {
    height: 100%;
    width: 100%;
}

.excellent-company-section .video-conts,
.excellent-company-section .video-conts .thumbnails {
    display: flex;
    background: #000;
    align-items: center;
}

.excellent-company-section .video-conts .plyr--full-ui.plyr--video .plyr__control--overlaid {
    background: #D43F33;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.25);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}



/* Excellent Company end */

.feature-item {
    margin-bottom: 10px;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter,
.fade-leave-to

/* .fade-leave-active in <2.1.8 */
    {
    opacity: 0;
}

.banner-content {
    min-height: 260px;
    background: url('@/assets/images/pricing/pricing-banner-bg.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 0 0;
}

.banner-content .hero-text p {
    font-size: 22px;
}

.why-us {
    background: #000;
    padding: 135px 0 70px;
}

.why-us-back {
    margin-top: -90px;
    background: #0A0909;
    width: 100%;
    height: 90px;
}

.why-us .make-it {
    display: flex;
    justify-content: center;
    flex-direction: column;
    height: 100%;
}

.why-us .make-it h2 {
    color: #ffffff;
    font-weight: 600;
    font-size: 64px;
    line-height: 1.3;
}

.why-us .make-it h2 span {
    color: #D43F33;
}

.why-us .make-it p {
    color: #B5B5B5;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.3;
    padding: 15px 0 40px;
    width: 70%;
}

.why-us .make-it .know-more-content {
    border-top: 1px dashed #B5B5B5;
    width: fit-content;
    padding-right: 100px;
}

.why-us .make-it .know-more-content h4 {
    color: #ffffff;
    font-weight: bold;
    font-size: 24px;
    line-height: 1.3;
    padding: 20px 0 20px;
}

.why-us .make-it .btn {
    font-weight: 400;
    font-size: 20px;
    letter-spacing: .01em;
    color: #fff;
    background: #d43f33;
    border: 1px solid #d43f33;
    border-radius: 50px;
    padding: 14px 41px;
    margin-top: 10px;
}

.why-us .make-it .btn:hover {
    background: #a92920;
}

.why-us .why-us-right {
    background: #ffffff;
    border-radius: 100px 10px 10px 10px;
    padding: 45px 55px;
    position: relative;
    z-index: 9;
}

.why-us .why-us-right-content {
    position: relative;
}

.why-us .why-us-right-content::after {
    position: absolute;
    content: "";
    background: #D43F33;
    width: 60%;
    height: 40%;
    right: -15px;
    bottom: -15px;
    border-radius: 100px 10px 10px 10px;
    z-index: 1;
}

.why-us .why-us-right h4 {
    color: #000000;
    font-weight: bold;
    font-size: 24px;
    line-height: 1.3;
}

.why-us .why-us-right .why-us-rightin-bullet ul li {
    color: #000000;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.3;
    position: relative;
    padding: 15px 0 0 35px;
}

.why-us .why-us-right .why-us-rightin-bullet ul li:before {
    position: absolute;
    content: "";
    background: url('@/assets/images/pricing/right.png');
    background-repeat: no-repeat;
    width: 20px;
    height: 20px;
    left: 0;
}

.custom-padding {
    padding: 100px 0 150px;
}

.custom-img-before {
    position: relative;
    z-index: 1;
}

.custom-img-before::before {
    position: absolute;
    content: "";
    background: url('@/assets/images/pricing/plans-before.svg');
    background-repeat: no-repeat;
    width: 73px;
    height: 107px;
    right: -39px;
    bottom: -40px;
    z-index: -1;
}

.explore-plans h2 {
    color: #000000;
    font-weight: 300;
    font-size: 52px;
    line-height: 1.3;
}

.explore-plans h2 strong {
    font-weight: bold;
}

.explore-plans p {
    color: #353535;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.3;
    padding: 25px 0 70px;
}

.explore-plans .plans-main {
    border: 1px solid #DFDFDF;
    border-radius: 10px;
    transition: .3s ease-in-out;
    display: flex;
    /* align-items: center; */
    flex-wrap: wrap;
    height: 100%;
    background: #ffffff;
}

.explore-plans .plans-main .plans-inner {
    padding: 40px 30px 30px;
    min-height: 380px;
    display: flex;
    flex-direction: column;
}

.explore-plans .plans-main .plans-inner .call-fitX {
    margin-top: auto;
}

.explore-plans .plans-main .plans-inner h6 {
    font-size: 25px;
    color: #D33E32;
    line-height: 1.3;
    font-weight: bold;
}

.explore-plans .plans-main .plans-inner p {
    color: #353535;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.5;
    padding: 10px 0 20px;
}

.explore-plans .plans-main .plans-inner span {
    color: #000000;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.3;
}

.explore-plans .plans-main .plans-inner h5 {
    color: #000000;
    font-weight: bold;
    font-size: 48px;
    line-height: 1.2;
}

.explore-plans .plans-main .plans-inner .btn.plans-btn {
    color: #fff;
    background: #d43f33;
    border: 1px solid #d43f33;
    border-radius: 50px;
    padding: 10px 41px;
    width: 100%;
    margin: 25px 0 0;
    font-size: 20px;
    font-weight: 300;
}

.explore-plans .plans-main .plans-inner .btn.plans-btn:hover {
    background: #a92920;
}

.explore-plans .plans-main .plans-mid {
    padding: 25px 35px;
    width: 100%;
    display: flex;
    flex-direction: column;
}

.explore-plans .plans-main .plans-mid h4 {
    font-size: 17px;
    font-weight: bold;
    color: #000;
    line-height: 1.3;
}

.explore-plans .plans-main .plans-mid .plans-mid-sec ul li {
    padding: 12px 0 0 20px;
    position: relative;
    font-size: 15px;
}

.explore-plans .plans-main .plans-mid .plans-mid-sec ul li:before {
    position: absolute;
    content: "";
    background: url('@/assets/images/pricing/plans-right.png');
    background-repeat: repeat;
    background-repeat: no-repeat;
    width: 9px;
    height: 7px;
    left: 0;
    top: 18px;
}

.explore-plans .plans-main.popular {
    border: 2px solid #D33E32;
    position: relative;
}

.explore-plans .plans-main.popular .popular-sec {
    background: #D43F33;
    width: fit-content;
    border-radius: 4px;
    padding: 2px 15px;
    position: absolute;
    left: 50%;
    top: 0;
    transform: translate(-50%, -50%);
}

.explore-plans .plans-main.popular .popular-sec span {
    color: #ffffff;
    font-weight: 600;
    font-size: 11px;
    line-height: 1.7;
}

.custom-gap {
    --bs-gutter-x: 50px;
}

.explore-plans .plans-main .plans-dropdown {
    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 1px solid #DFDFDF;
    border-radius: 0 0 10px 10px;
    width: 100%;
    margin-top: auto;
}

.explore-plans .plans-main .plans-dropdown button {
    color: #000;
    padding: 15px 30px;
    width: 100%;
    text-align: center;
    font-weight: 500;
    font-size: 15px;
    background: none;
}

.discount-sec {
    background: #000;
    border-radius: 10px;
    padding: 80px 60px 30px;
    position: relative;
}

.discount-sec::before {
    content: "";
    position: absolute;
    width: 191px;
    height: 190px;
    background-image: url('@/assets/images/pricing/discount-before.svg');
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    bottom: -75px;
    right: -60px;
    z-index: -1;
}

.discount-sec .discount-sec-fast {
    padding-bottom: 50px;
    border-bottom: 1px dashed #C4C4C4;
}

.discount-sec .discount-sec-left {
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.discount-sec .discount-sec-left h2 {
    color: #ffffff;
    font-size: 65px;
    line-height: 1.2;
    font-weight: 600;
    padding-bottom: 20px;
}

.discount-sec .discount-sec-left h2 span {
    color: #D43F33;
}

.discount-sec .discount-sec-left p {
    color: #B5B5B5;
    font-size: 20px;
    line-height: 1.3;
    font-weight: 400;
    width: 80%;
}

.discount-sec .discount-sec-right .discount-sec-right-inner-icon {
    width: 48px;
    height: 48px;
}

.discount-sec .discount-sec-right .discount-sec-right-inner {
    background: #ffffff;
    border-radius: 10px;
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 20px 20px 30px;
    height: 100%;
}

.discount-sec .discount-sec-right .discount-sec-right-inner h3 {
    color: #000;
    font-weight: bold;
    font-size: 23px;
    line-height: 1.3;
    padding: 17px 0 10px;
}

.discount-sec .discount-sec-right .discount-sec-right-inner p {
    color: #353535;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.3;
    text-align: center;
}

.discount-sec .discount-sec-second .btn.discount-sec-second {
    color: #fff;
    background: #d43f33;
    border: 1px solid #d43f33;
    border-radius: 50px;
    padding: 10px 41px;
    margin: 25px 0;
    font-size: 20px;
    font-weight: 300;
}

.discount-sec .discount-sec-second .btn.discount-sec-second:hover {
    background: #a92920;
}

.btn-end {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.discount-sec-back {
    margin-top: -90px;
    background: #0A0909;
    width: 100%;
    height: 90px;
    position: relative;
    border-radius: 0 0 10px 10px;
}

.discount-sec-second {
    padding-top: 30px;
    position: relative;
    z-index: 1;
}

.discount-sec-second-left .offer {
    position: relative;
    z-index: 1;
    padding: 40px;
}

.discount-sec-second-left .offer::before {
    position: absolute;
    content: "";
    background: url('@/assets/images/pricing/offer.png');
    width: 100%;
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    z-index: -1;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-position: center;
}

.discount-sec-second-left .offer p {
    color: #ffffff;
    font-weight: bold;
    font-size: 20px;
    line-height: 1.3;
    text-align: center;
}

.discount-sec-second-left .offer p span {
    display: block;
}

.discount-sec-second-left .offer-text {
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.discount-sec-second-left .offer-text h3 {
    color: #ffffff;
    font-weight: 300;
    font-size: 30px;
    line-height: 1.2;
    width: 80%;
}

.discount-sec-second-left .offer-text h3 strong {
    font-weight: bold;
}

.discount-sec-second-left .offer-text p {
    color: #ffffff;
    font-weight: 500;
    font-size: 14px;
    line-height: 1.3;
    padding-top: 10px;
}

.maintenance-offers.custom-padding {
    padding: 150px 0 150px;
}

.maintenance-offers .maintenance-offers-text {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.maintenance-offers .maintenance-offers-text h2 {
    color: #000000;
    font-weight: 300;
    font-size: 45px;
    line-height: 1.3;
    text-align: center;
    padding-bottom: 40px;
}

.maintenance-offers .maintenance-offers-text h2 span {
    display: block;
}

.maintenance-offers .maintenance-offers-text h2 strong {
    font-weight: bold;
}

.maintenance-offers .maintenance-offers-text .btn {
    font-weight: 400;
    font-size: 20px;
    letter-spacing: .01em;
    color: #fff;
    background: #d43f33;
    border: 1px solid #d43f33;
    border-radius: 50px;
    padding: 14px 41px;
    width: fit-content;
}

.banner-content.inner-banner-text .hero-text p {
    padding-bottom: 0;
    margin-bottom: 0;
}

.banner-content.inner-banner-text .hero-text h6 {
    font-size: 14px;
    line-height: 22px;
    color: #323232;
    max-width: 900px;
    padding-top: 20px;
    font-weight: 500;
}

.plans-inner {
    background: url(../assets/images/pricing/gradient-bg.png) no-repeat 0 0;
    background-size: cover;
    border-radius: 10px 10px 0 0;
}
.explore-box{ min-height: 848px;}
.explore-box-all{ align-items: flex-start;}
.explore-box-all .explore-box del{ font-size: 35px; line-height: 30px; color:#a92920;}
.explore-box-all .explore-box .plans-inner2 h5{ color: #353535;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.5;}

@media only screen and (min-width: 1400px) {
    .banner-content.inner-banner-text .hero-text h6 {
        font-size: 17px;
        line-height: 24px;
    }
}

@media only screen and (max-width: 1600px) {
    .why-us .make-it h2 {
        font-size: 55px;
    }

    .discount-sec .discount-sec-left h2 {
        font-size: 55px;
    }


}

@media only screen and (max-width: 1199px) {
    .banner-content {
        min-height: 500px;
    }

    .banner-content .hero-text p {
        margin-bottom: 0;
        font-size: 19px;
        width: 80%;
    }

    .custom-gap {
        --bs-gutter-x: 20px;
    }

    .why-us .make-it h2 {
        font-size: 40px;
    }

    .why-us .make-it p {
        font-size: 16px;
        width: 65%;
    }

    .discount-sec .discount-sec-left h2 {
        font-size: 40px;
        width: 90%;
    }

    .discount-sec .discount-sec-left p {
        width: 90%;
    }

    .discount-sec-second-left .offer-text h3 {
        font-size: 22px;
    }

    .explore-plans .plans-main .plans-inner h5 {
        font-size: 40px;
    }

    .explore-plans h2 {
        font-size: 40px;
    }

    .maintenance-offers .maintenance-offers-text h2 {
        font-size: 40px;
    }

    .discount-sec .discount-sec-right .discount-sec-right-inner {
        padding: 15px 15px 16px;
    }

    .custom-img-before {
        justify-content: center;
    }
}

@media only screen and (max-width: 991px) {
    .why-us-back {
        margin-top: -60px;
        height: 60px;
    }

    .excellent-company-section .overdi-img::after {
        left: 0;
    }

    .banner-content {
        margin-top: 71px;
    }

    .why-us {
        padding: 50px 0 50px;
    }

    .why-us .make-it h2 {
        font-size: 40px;
    }

    .why-us .make-it p {
        width: 100%;
    }

    .why-us .make-it .know-more-content h4 {
        font-size: 20px;
    }

    .why-us .make-it .know-more-content {
        padding-right: 50px;
    }

    .why-us .why-us-right {
        border-radius: 50px 10px 10px 10px;
        padding: 25px 25px;
    }

    .why-us .why-us-right .why-us-rightin-bullet ul li {
        font-size: 15px;
    }

    .why-us .make-it .btn {
        padding: 10px 41px;
    }

    .custom-gap {
        --bs-gutter-x: 20px;
        --bs-gutter-y: 20px;
    }

    .discount-sec {
        padding: 50px 35px 30px;
    }

    .discount-sec .discount-sec-left {
        padding-bottom: 50px;
    }

    .discount-sec .discount-sec-left h2 {
        width: 100%;
        text-align: center;
    }

    .discount-sec .discount-sec-left p {
        width: 100%;
        font-size: 16px;
        text-align: center;
    }

    .custom-padding {
        padding: 50px 0 50px;
    }

    .btn-end {
        justify-content: center;
    }

    .discount-sec .discount-sec-second .btn.discount-sec-second {
        margin: 0;
    }

    .discount-sec-back {
        margin-top: -60px;
        height: 60px;
    }

    .maintenance-offers .maintenance-offers-text h2 {
        font-size: 30px;
    }

    .maintenance-offers .maintenance-offers-text .btn {
        padding: 10px 41px;
    }

    .maintenance-offers.custom-padding {
        padding: 80px 0 80px;
    }

    .discount-sec .discount-sec-right .discount-sec-right-inner {
        padding: 20px 20px 30px;
    }

    .custom-img-before::before {
        right: 0px;
        bottom: -30px;
    }
}

@media only screen and (max-width: 767px) {
    .banner-content {
        min-height: 350px;
    }

    .banner-content .hero-text p {
        font-size: 15px;
        width: 90%;
        line-height: 1.3;
    }

    .why-us .make-it {
        padding-bottom: 50px;
    }

    .why-us .make-it .btn {
        font-size: 16px;
    }

    .why-us .make-it .know-more-content {
        padding-right: 0;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .why-us .make-it h2 {
        text-align: center;
    }

    .why-us .make-it p {
        text-align: center;
    }

    .why-us .make-it .know-more-content h4 {
        text-align: center;
    }

    .why-us .why-us-right-content::after {
        right: -7px;
        bottom: -7px;
    }

    .explore-plans h2 {
        font-size: 35px;
    }

    .explore-plans p {
        font-size: 15px;
        padding: 15px 0 50px;
    }

    .explore-plans .plans-main .plans-inner {
        padding: 30px 20px 40px;
        min-height: auto;
    }

    .explore-plans .plans-main .plans-inner p {
        min-height: auto;
    }

    .explore-plans .plans-main .plans-inner .btn.plans-btn {
        font-size: 16px;
    }

    .discount-sec {
        padding: 30px 25px 30px;
    }

    .discount-sec .discount-sec-left h2 {
        font-size: 35px;
    }

    .discount-sec .discount-sec-right .discount-sec-right-inner {
        margin-bottom: 20px;
        height: auto;
    }

    .discount-sec .discount-sec-fast {
        padding-bottom: 20px;
    }

    .discount-sec-second-left .offer-text {
        padding: 20px 0;
    }

    .discount-sec-second-left .offer-text h3 {
        font-size: 24px;
        width: 100%;
        text-align: center;
        margin: 0 auto;
    }

    .discount-sec-second-left .offer-text p {
        text-align: center;
    }

    .maintenance-offers .maintenance-offers-text h2 {
        font-size: 25px;
    }

    .maintenance-offers .maintenance-offers-text h2 span {
        display: inline;
    }

    .maintenance-offers .maintenance-offers-text .btn {
        padding: 10px 15px;
        font-size: 16px;
        width: 100%;
    }

    .discount-sec .discount-sec-second .btn.discount-sec-second {
        margin: 0;
        font-size: 16px;
    }

    .maintenance-offers.custom-padding {
        padding: 80px 0 0;
    }

    .excellent-company-section {
        margin-top: 10px;
    }
}

/* 01.04.24 */
.banner-content {
    padding: 141px 0;
    min-height: auto;
    height: auto;
}

.custom-img-before::before {
    background-size: contain;
}

@media (max-width:1400px) {
    .discount-sec-second-left .offer p {
        font-size: 16px;
    }

    .maintenance-offers .maintenance-offers-text h2 {
        font-size: 34px;
        padding-bottom: 35px;
    }
}

@media (max-width:1280px) {
    .excellent-company-section {
        margin-bottom: 150px;
    }

    .custom-img-before::before {
        width: 72px;
        height: 98px;
        right: -26px;
    }

    .discount-sec::before {
        width: 151px;
        height: 150px;
        background-size: contain;
        bottom: -60px;
        right: -52px;
    }

    .maintenance-offers.custom-padding {
        padding: 150px 0 100px;
    }
}

@media (max-width:1199px) {
    .discount-sec .discount-sec-right .discount-sec-right-inner p {
        font-size: 12px;
        line-height: 1.2;
    }

    .discount-sec-second-left .offer p {
        font-size: 13px;
    }

    .discount-sec-second-left .offer {
        padding: 28px;
    }
}

@media (max-width:991px) {
    .banner-content {
        padding: 50px 0 80px;
    }

    .banner-content .hero-text {
        margin-bottom: 0;
    }

    .maintenance-offers .maintenance-offers-text h2 {
        font-size: 30px;
    }

    .maintenance-offers.custom-padding {
        padding: 90px 0 70px;
    }
}

@media (max-width:767px) {
    .discount-sec::before {
        right: 0;
    }

    .custom-img-before::before {
        right: 10px;
    }

    .maintenance-offers .maintenance-offers-text h2 {
        font-size: 25px;
    }

    .banner-content {
        padding: 70px 0 50px;
    }
}
@media (max-width:430px){
    .banner-content {
        padding: 28px 0 30px;
    }
}

</style>
