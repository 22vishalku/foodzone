// Initialize EmailJS with your public key
emailjs.init("NCf2ae0WP_Rd0rcD-");

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };

            // Show loading state
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Sending...';
            submitButton.disabled = true;

            // Send email using EmailJS
            emailjs.send("service_ykijvkf", "template_9g4wkak", {
                from_name: formData.name,
                from_email: formData.email,
                subject: formData.subject,
                message: formData.message,
                to_email: "pandey22vishal@gmail.com"
            })
            .then(function(response) {
                // Show success message
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-success alert-dismissible fade show mt-3';
                alertDiv.innerHTML = `
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Message sent successfully! We'll get back to you soon.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                contactForm.parentNode.insertBefore(alertDiv, contactForm.nextSibling);
                
                // Reset form
                contactForm.reset();
            })
            .catch(function(error) {
                // Show error message
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger alert-dismissible fade show mt-3';
                alertDiv.innerHTML = `
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    Sorry, there was an error sending your message. Please try again later.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                contactForm.parentNode.insertBefore(alertDiv, contactForm.nextSibling);
            })
            .finally(function() {
                // Reset button state
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
            });
        });
    }
}); 