    let currentStep = 1;

    function showStep(stepNumber) {
      const steps = document.querySelectorAll('.container');
      if (stepNumber >= 1 && stepNumber <= steps.length) {
        steps.forEach(step => {
          step.classList.add('hidden');
        });
        steps[stepNumber - 1].classList.remove('hidden');
        currentStep = stepNumber;
        updateButtonsVisibility();
      }
    }

    function onSliderChange(stepNumber) {
      showStep(parseInt(stepNumber));
    }

    function updateButtonsVisibility() {
      const backButton = document.querySelector('.buttons .back-button');
      const nextButton = document.querySelector('.buttons .next-button');

      backButton.disabled = currentStep === 1;
      nextButton.disabled = currentStep === 3;
    }

    showStep(currentStep);