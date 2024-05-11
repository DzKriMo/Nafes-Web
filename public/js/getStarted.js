

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


function submitForm() {
    const firstName = document.getElementById('firstName').value;
    const middleName = document.getElementById('middleName').value;
    const lastName = document.getElementById('lastName').value;
    const name = firstName + " " + middleName + " " + lastName;
    console.log(name);
    const formData = {
        "name": name,
        "email": document.getElementById('email').value,
        "password": document.getElementById('password').value, 
        "bio": "I'm Slightly Racist",
        "specialization": "Making People Smile",
        "contact_info": document.getElementById('phone').value,
        "features": "1,2,3 viva l'algerie",
    };

    
    fetch('/api/therapists/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            
            'Accept': 'application/json',
        },
        body: JSON.stringify(formData),
    })
    .then(response => {
        if (response.status === 201) { 
            console.log('Registration successful');
            
          //  document.getElementById('registerationform').reset();
            
        } else {
            console.error('Failed to register:', response.statusText);
           
            alert('Failed to register. Please try again later.');
        }
    })
    .catch(error => {
       
        console.error('There was a problem with your fetch operation:', error);
        
        alert('An error occurred while submitting the form. Please try again later.');
    });
}
