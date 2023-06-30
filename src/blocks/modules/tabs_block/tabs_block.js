const Tabs = class Tabs {
    constructor() {}
  
    initTabs() {
        document.addEventListener('DOMContentLoaded', function() {
            // Получаем все кнопки табов
            var tabButtons = document.getElementsByClassName('tabs_block__tab');

            // Получаем все блоки контента
            var tabContents = document.getElementsByClassName('tabs_block__content');

            // Функция для переключения табов
            function switchTab(event, tabId) {
            // Скрыть все блоки контента
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].style.display = 'none';
            }

            // Удалить класс активного состояния у всех кнопок
            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('active');
            }

            // Показать выбранный блок контента
            var selectedTab = document.getElementById(tabId);
            if (selectedTab) {
                selectedTab.style.display = 'flex';
            }

            // Добавить класс активного состояния для выбранной кнопки
            event.target.classList.add('active');
            }

            // Назначить обработчик события для каждой кнопки таба
            for (var i = 0; i < tabButtons.length; i++) {
            tabButtons[i].addEventListener('click', function(event) {
                var tabId = event.target.getAttribute('data-tab-id');
                switchTab(event, tabId);
            });
            }
        });
    }
  
    init() {
      this.initTabs();
    }
};
  
export default Tabs;