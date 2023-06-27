const Questions = class Questions {
    constructor() {}
  
    openQuestion() {
        document.addEventListener('DOMContentLoaded', () => {
            let questions = document.querySelectorAll('.questions_block__question');

            questions.forEach(question => {
              const title = question.querySelector('.questions_block__title');
              const text = question.querySelector('.questions_block__text');
              title.addEventListener('click', () => {
                if (text.style.maxHeight) {
                  text.style.maxHeight = null;
                  title.classList.toggle('isActive');
                  text.classList.toggle('isShow');
                } else {
                  questions.forEach(q => {
                    const qText = q.querySelector('.questions_block__text');
                    const qTitle = q.querySelector('.questions_block__title');
                    qText.style.maxHeight = null;
                    qTitle.classList.remove('isActive');
                    qText.classList.remove('isShow');
                  });
            
                  text.style.maxHeight = (text.scrollHeight + 5) + 'px';
                  title.classList.add('isActive');
                  text.classList.add('isShow');
                }
              });
            });
        });
    }
  
    init() {
      this.openQuestion();
    }
  };
  
  export default Questions;
  