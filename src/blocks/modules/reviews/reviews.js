import $ from 'jquery';
import 'slick-carousel';

const Reviews = class Reviews {
    constructor() {}
  
    reviewSlider() {
        document.addEventListener('DOMContentLoaded', function() {
            $(".js_reviews").slick({
                slidesToShow: 2,
                infinite: false,
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
      this.reviewSlider();
    }
};
  
export default Reviews;