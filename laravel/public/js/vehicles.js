fetch('/vehicles')
    .then(response => response.text()) // Parse the response as text
    .then(html => {
        // Create a temporary div to hold the received HTML
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = html;

        // Extract the vehicle cards HTML from the temporary div
        const vehicleCardsHTML = tempDiv.querySelector('#vehicle-cards').innerHTML;

        // Get the element where you want to display the vehicle cards
        const vehicleCardsContainer = document.getElementById('vehicle-cards');

        // Insert the HTML into the element
        vehicleCardsContainer.innerHTML = vehicleCardsHTML;
    })
    .catch(error => console.error('Error fetching vehicles:', error));
