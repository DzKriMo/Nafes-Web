document.getElementById('stepp1').classList.add('active');
document.getElementById('marker1').classList.add('active');

function changeStep(step) {
    const currentStep = document.querySelector('.stepp.active');
    const currentMarker = document.querySelector('.step-marker.active');
    const nextStep = document.getElementById('stepp' + step);
    const nextMarker = document.getElementById('marker' + step);


    const requiredFields = currentStep.querySelectorAll('[required]');
    let isValid = true;
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.classList.add('error'); 
        } else {
            field.classList.remove('error');
        }
    });

    if (isValid) {
        currentStep.classList.remove('active');
        currentMarker.classList.remove('active');
        nextStep.classList.add('active');
        nextMarker.classList.add('active');
    } else {
        alert('Please fill in all required fields.');
    }
}


function submitForm(){
    alert("Form Submitted !!");
}