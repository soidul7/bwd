import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import HomePage from '../views/HomePage.vue'
import AboutView from '../views/AboutView.vue'
import NavBar from '../views/NavBar.vue'
import ServicePage from '../views/ServicePage.vue'
import BlogPage from '../views/BlogPage.vue'
import ContactUs from '../views/ContactUs.vue'
import BlogDetails from '../views/blog-page.vue'
import OurTeam from '../views/OurTeam.vue'
import FooTer from '../views/FooTer.vue'
import TestimonialSite from '../views/TestimonialSite.vue'
import Page1 from '../views/Page1.vue'
import Page2 from '../views/Page2.vue'
import Page3 from '../views/Page3.vue'
import PopUp from '../views/PopUp.vue'

import EmailMarketing from '../views/EmailMarketing.vue'
import PayPerClick from '../views/PayPerClick.vue'
import UiUxStrategy from '../views/UiUxStrategy.vue'
import GraphicDesign from '../views/GraphicDesign.vue'
import Seo from '../views/Seo.vue'
import WebDevelopment from '../views/WebDevelopment.vue'
import WebDesign from '../views/WebDesign.vue'
import PrivacyPolicy from '../views/PrivacyPolicy.vue'
import TermsAndConditions from '../views/TermsAndConditions.vue'
import ThankYou from '../views/ThankYou.vue'
import PortfolioNew from '../views/PortfolioNew.vue'
import PortfolioDetails from '../views/PortfolioDetails.vue'
import DigitalMarketing from '../views/DigitalMarketing.vue'
import UnlimitedGraphicDesignPackages from '../views/UnlimitedGraphicDesignPackages.vue'
import NotFound from '../views/404.vue'
// import Pricing from '../views/Pricing.vue'
// import MaintainancePricing from '../views/MaintainancePricing.vue'
import Review from '../views/Review.vue'



const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'homepage',
    component: HomePage
  },
  {
    path: '/unlimited-graphic-design-packages',
    name: 'unlimitedgraphicdesignpackages',
    component: UnlimitedGraphicDesignPackages
  },
  {
    path: '/about-us',
    name: 'aboutview',
    component: AboutView
  },
  {
    path: '/navbar',
    name: 'navbar',
    component: NavBar
  },
  {
    path: '/service',
    name: 'servicepage',
    component: ServicePage
  },
  {
    path: '/blog',
    name: 'blogpage',
    component: BlogPage
  },
  {
    path: '/contact-us',
    name: 'contactus',
    component: ContactUs
  },
  {
    path: '/blogdetails',
    name: 'blogdetails',
    component: BlogDetails
  },
  {
    path: '/our-team',
    name:'ourteam',
    component: OurTeam
  },
  // {
  //   path: '/design-development-pricing',
  //   name:'pricing',
  //   component: Pricing
  // },
  // {
  //   path: '/maintainance-pricing',
  //   name:'MaintainancePricing',
  //   component: MaintainancePricing
  // },


{
  path: '/review',
  name:'Review',
  component: Review
},

  {
    path: '/footer',
    name: 'footer',
    component: FooTer
  },
  {
    path: '/testimonials',
    name: 'testimonialsite',
    component: TestimonialSite 
  },
  {
    path: '/blog/:slug',
    name: 'blog-details',
    component: Page1
  },
  {
    path: '/bank-on-new-techniques-to-promote-gaming-website',
    name: 'page2',
    component: Page2
  },
  {
    path: '/brandify-your-business-through-a-proper-graphic-design',
    name: 'page3',
    component: Page3
  },
  {
    path: '/popup',
    name: 'popup',
    component: PopUp
  },


  {
    path: '/email-marketing',
    name:'EmailMarketing',
    component: EmailMarketing
  },
  {
    path: '/pay-per-click',
    name: 'PayPerClick',
    component: PayPerClick
  },
  {
    path: '/ui-ux-strategy',
    name: 'UiUxStrategy',
    component: UiUxStrategy 
  },
  {
    path: '/graphic-design',
    name: 'GraphicDesign',
    component: GraphicDesign
  },
  {
    path: '/seo',
    name: 'Seo',
    component: Seo
  },
  {
    path: '/web-development',
    name: 'WebDevelopment',
    component: WebDevelopment
  },
  {
    path: '/digital-marketing',
    name: 'DigitalMarketing',
    component: DigitalMarketing
  },
  {
    path: '/web-design',
    name: 'WebDesign',
    component: WebDesign
  },
  
  {
    path: '/privacy-policy',
    name: 'PrivacyPolicy',
    component: PrivacyPolicy
  },
  {
    path: '/terms-and-conditions',
    name: 'TermsAndConditions',
    component: TermsAndConditions
  },
  {
    path: '/thank-you',
    name: 'ThankYou',
    component: ThankYou
  },
  {
    path: '/portfolio',
    name: 'portfolio',
    component: PortfolioNew
  },
  {
    path: '/portfolio/:slug',
    name: 'portfolio-details',
    component: PortfolioDetails
  },
  {
    path: '/:pathMatch(.*)*',
    name: '404',
    component: NotFound
  }
 
]

const router = createRouter({
  // mode: "history",
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
