import './bootstrap';


import {createApp} from 'vue/dist/vue.esm-bundler';
import ModalWindow from "./components/ModalWindow.vue"
import Tap from "./components/Tap.vue"
import axios from 'axios'
import VueAxios from 'vue-axios'
import { VMaskDirective } from 'v-slim-mask'


import fslightbox from 'fslightbox'

import TourPrice from "./components/TourPrice.vue"
import TourPriceList from "./components/TourPriceList.vue"

const global_app = createApp({
    components:{
        ModalWindow,
        Tap,
    },
    setup() {}
})

global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");



const price_app = createApp({
    components:{
        TourPrice,
        TourPriceList,
    },
    setup() {}
})

price_app.use(VueAxios, axios)
price_app.directive('mask', VMaskDirective)
price_app.mount("#price_app");



import SideMenu from './menues.js';

let side_menue = new SideMenu('#main_side_menue', '.show_menue_button')


import { gsap } from "gsap";

import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";


gsap.registerPlugin(TextPlugin,ScrollTrigger,ScrollToPlugin);

let img_object_from =  {
    opacity:0,
}
let img_object_to = {
    opacity:1,
    duration:.3
}

let tl = gsap.timeline({delay:1})
    .from('.about', { opacity:0, scale:0})
    // .from('.location_section', { opacity:0, scale:0})

tl.fromTo('header .container',
    {
        opacity:0,
    },
    {
        opacity:1,
        duration:.5
    }
)
.fromTo('.bnr_text',
    {
        opacity:0,
        x:-300
    },
    {
        opacity:1,
        x:0,
        duration:.5
    }
)
.fromTo('.page_top_galery', img_object_from, img_object_to )
.fromTo('.param_blk_1', img_object_from, img_object_to )
.fromTo('.param_blk_2', img_object_from, img_object_to )
.fromTo('.param_blk_3', img_object_from, img_object_to )
.to('.about',
    {
        opacity:1,
        scale: 1,
        duration:.5
    }
)


const locations = Array.from(document.querySelectorAll("#location .palaroid"))
locations.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    // markers:true,
    start:'top bottom',
    animation: gsap.fromTo( elem,
        { opacity:0, scale: 0 },
        { opacity:1, scale: 1, duration:1, ease: "power1.out" }
    ),
})
})

const deys = Array.from(document.querySelectorAll(".programm_wrapper .dey_element"))
deys.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    // markers:true,
    start:'top bottom',
    animation: gsap.fromTo( elem,
        { opacity:0, scale: 0 },
        { opacity:1, scale: 1, duration:1, ease: "power1.out" }
    ),
})
})


// .to('.location_wrapper', {
//         scrollTrigger:
//          {
//             trigger: '.location_wrapper',
//             markers:true,
//             start:'bottom bottom',
//             // end:'bottom top',
//             // // scrub:true
//         },
//         opacity:1,
//         scale: 1,
//         duration:2
//     }

// )


const items = document.querySelectorAll(".c_blk .c span");

gsap.from(items, {
    delay:2,
    textContent: 0,
    duration: .5,
    snap: { textContent: 1 },
    stagger: 1,
});

const anchors = document.querySelectorAll('a[href*="#"].yakor')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    main_side_menue.classList.remove('active');
    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
