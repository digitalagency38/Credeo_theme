import $ from 'jquery';
import 'slick-carousel';

const Bid = class Bid {
    constructor() {}
  
    bidSlider() {
        document.addEventListener('DOMContentLoaded', function() {
            $(".js_bid").slick({
                slidesToShow: 4,
                infinite: false,
                arrows: true,
                responsive: [
                  {
                    breakpoint: 1023,
                    settings: {
                      slidesToShow: 1,
                      variableWidth: true
                    }
                  }
                ]
            });
        });
    }
  
    init() {
      this.bidSlider();
    }
};
  
export default Bid;