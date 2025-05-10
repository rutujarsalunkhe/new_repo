document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting

        // Get form fields
        const name = form.elements['name'].value.trim();
        const age = form.elements['age'].value;
        const className = form.elements['class'].value.trim();
        const birthDate = form.elements['date'].value;
        const mobileNumber = form.elements['number'].value;
        const email = form.elements['email'].value.trim();

        // Regular expressions for validation
        const nameRegex = /^[a-zA-Z\s]+$/;
        const ageRegex = /^\d+$/;
        const classRegex = /^[a-zA-Z0-9\s]+$/;
        const mobileRegex = /^\d{10}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validation
        if (!nameRegex.test(name)) {
            alert('Please enter a valid name.');
            return;
        }
        if (!ageRegex.test(age)) {
            alert('Please enter a valid age.');
            return;
        }
        if (!classRegex.test(className)) {
            alert('Please enter a valid class name.');
            return;
        }
        if (!mobileRegex.test(mobileNumber)) {
            alert('Please enter a valid mobile number (10 digits only).');
            return;
        }
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        // If all validations pass, you can submit the form
        alert('Form submitted successfully!');
        // You can also submit the form programmatically if needed
        // form.submit();
    });
});
