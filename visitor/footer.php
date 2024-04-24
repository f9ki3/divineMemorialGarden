<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="../jquery/date_time.js"></script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get references to the checkbox and button elements
            var checkbox = document.getElementById('termsCheckbox');
            var button = document.getElementById('acceptButton');
            
            // Add event listener to checkbox
            checkbox.addEventListener('change', function() {
                // Update button disabled state based on checkbox checked status
                button.disabled = !checkbox.checked;
            });
            
            // Function to handle form submission
            function submitForm() {
                if (checkbox.checked) {
                    alert('Terms and Conditions accepted. Proceeding...');
                    // Add your form submission logic here
                } else {
                    alert('Please accept the Terms and Conditions before proceeding.');
                }
            }
        });
    </script>