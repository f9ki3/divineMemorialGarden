document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('login_form');
    const errorAlert = document.querySelector('.error');
    const loadingIndicator = document.getElementById('loading'); // Get loading indicator element
    let timer; // Variable to hold the timer reference

    form.addEventListener('submit', async (event) => {
        event.preventDefault(); // Prevent the default form submission

        const emailInput = document.getElementById('email').value;
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('cpassword');

        // Check if password and confirm password match
        if (passwordInput.value !== confirmPasswordInput.value) {
            errorAlert.textContent = 'Passwords do not match.';
            errorAlert.style.display = 'block';
            return;
        }

        // Check if password is strong (at least 6 characters with special characters)
        if (!isPasswordStrong(passwordInput.value)) {
            errorAlert.textContent = 'Password must be at least 6 characters and contain special characters.';
            errorAlert.style.display = 'block';
            passwordInput.style.borderColor = 'red'; // Change border color to red
            return;
        } else {
            passwordInput.style.borderColor = ''; // Reset border color if valid
        }

        // Show the loading indicator
        loadingIndicator.style.display = 'block';
        document.getElementById('register_btn').style.display = 'none';

        try {
            const formData = {
                email: emailInput,
                password: passwordInput.value
            };

            // Send data to send_email.php using fetch
            const response = await fetch('php/send_email.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            });

            if (response.ok) {
                // Handle successful response, redirect to otp.php with email parameter
                window.location.href = `otp.php?email=${encodeURIComponent(emailInput)}`;
            } else {
                // Handle error response
                const responseData = await response.json();
                errorAlert.textContent = responseData.message; // Display error message from server
                errorAlert.style.display = 'block';
            }
        } catch (error) {
            console.error('Error sending email:', error);
            // Handle any errors that occur during the AJAX request
            errorAlert.textContent = 'Error sending email. Please try again.';
            errorAlert.style.display = 'block';
        } finally {
            // Hide the loading indicator when the request is done (whether successful or not)
            loadingIndicator.style.display = 'none';
        }
    });

    // Function to reset the timer when the resend button is clicked
    document.getElementById('resend_btn').addEventListener('click', () => {
        clearTimeout(timer); // Clear the existing timer (if any)
        startTimer(); // Restart the timer
    });

    // Helper function to start the timer (e.g., for 60 seconds)
    function startTimer() {
        let seconds = 60;
        const resendButton = document.getElementById('resend_btn');

        resendButton.disabled = true; // Disable the button during the countdown

        function updateTimer() {
            resendButton.textContent = `Resend (${seconds}s)`;
            seconds--;

            if (seconds < 0) {
                clearTimeout(timer);
                resendButton.textContent = 'Resend';
                resendButton.disabled = false; // Re-enable the button after countdown
            } else {
                timer = setTimeout(updateTimer, 1000);
            }
        }

        updateTimer(); // Start the countdown
    }

    // Initial call to start the timer when the page loads
    startTimer();
    
    function isPasswordStrong(password) {
        // Check if password is at least 6 characters and contains special characters
        const regex = /^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;
        return regex.test(password);
    }
});