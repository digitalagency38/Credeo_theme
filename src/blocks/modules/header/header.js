const Header = class Header {
    constructor(){}
    fixedHeader() {
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.querySelector('.header');
            const mainContent = document.querySelector('body');
            const headerHeight = header.offsetHeight;
            let isHeaderShown = false;
          
            const updateHeader = () => {
              if (window.pageYOffset > 0 && !isHeaderShown) {
                header.classList.add('isFixed');
                mainContent.style.paddingTop = `${headerHeight}px`;
                isHeaderShown = true;
              } else if (window.pageYOffset === 0 && isHeaderShown) {
                header.classList.remove('isFixed');
                mainContent.style.paddingTop = 0;
                isHeaderShown = false;
              }
            };
          
            window.addEventListener('scroll', updateHeader);
            window.addEventListener('load', updateHeader);
        });
    }
    init() {
        this.fixedHeader();
    }
}

export default Header;