import * as globalFunctions from './modules/functions.js';
globalFunctions.isWebp();

import Vue from 'vue/dist/vue.js';

import Header from '../blocks/modules/header/header.js';
import Tabs from '../blocks/modules/tabs_block/tabs_block.js';
import Bid from '../blocks/modules/bid_block/bid_block.js';
import Reviews from '../blocks/modules/reviews/reviews.js';
import Questions from '../blocks/modules/questions/questions.js';
import Modals from '../blocks/modules/modals/modals.js';

window.app = new Vue({
    el: '#app',
    data: () => ({
        isMounted: false,
        sizes: {
            tablet: 1024,
            mobile: 768,
            window: window.innerWidth
        },
        header: new Header({
            isMobileMenuOpened: false,
        }),
        tabs: new Tabs(),
        bid: new Bid(),
        reviews: new Reviews(),
        questions: new Questions(),
        modals: new Modals({
            modalsSelector: "data-modal",
            modalsOpenerSelector: "data-modal-id",
            openedClass: "isOpened"
        })
    }),
    beforeCreate() {        
        window.addEventListener('resize', () => {
            this.sizes.window = window.innerWidth;
        });
    },
    beforeMount() {
        this.isMounted = true;
        this.header.init();
        this.tabs.init();
        this.bid.init();
        this.reviews.init();
        this.questions.init();
        this.modals.init();
    },
    computed: {
        isMobile: function () {
            return this.sizes.window < this.sizes.mobile;
        },
        isTablet: function () {
            return this.sizes.window < this.sizes.tablet && this.sizes.window > this.sizes.mobile;
        }
    },
});