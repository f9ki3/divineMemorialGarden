$(document).ready(function(){
    // Function to fetch data from the PHP API
    function fetchData() {
        $.ajax({
            url: '../php/get_service_info.php', // URL of your PHP API
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Loop through the data and display each service
                data.forEach(function(service) {
                    // Format service fee with peso sign
                    var serviceFee = new Intl.NumberFormat('en-PH', { style: 'currency', currency: 'PHP' }).format(service.service_fee);

                    var card = `
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div style="height: 200px;">
                                    <img src="../uploads/${service.service_cover}" style="object-fit: cover; height: 100%; width: 100%" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">${service.service_name}</h5>
                                    <hr>
                                    <p class="card-text">Service Fee: ${serviceFee}</p>
                                    <p class="card-text">${service.service_description}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    $('.services-container').append(card);
                });
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            }
        });
    }

    // Call fetchData function when the page loads
    fetchData();
});
