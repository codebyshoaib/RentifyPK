document.addEventListener("DOMContentLoaded", function () {
    fetch('/vehicles')
        .then(response => response.json())
        .then(data => {
            const vehicleCards = document.getElementById('vehicle-cards');
            data.forEach(car => {
                const carHTML = generateCarHTML(car);
                vehicleCards.innerHTML += carHTML;
            });
        })
        .catch(error => console.error('Error fetching vehicles:', error));
});

function generateCarHTML(car) {
    return `
        <div class="card">
        <div class="card-img">
        <img src="${this.imageSrc}" alt="${this.name}" />
    </div>
    <div class="veh-info">
        <div class="car-name">
            <h3 class="car-name">${this.name}</h3>
            // <div class="rating">
            //     ${this.rating}
            // </div>
        </div>
        <div class="car-price">
            <h3 class="price">$${this.price}</h3>
            <span class="day">Per Day</span>
        </div>
    </div>
    <div class="veh-data">
        <div class="data-single">
            <img src="./assets/svg icons/car-solid.svg" alt="">
            <span>${this.category}</span>
        </div>
        <div class="data-single">
            <img src="./assets/svg icons/car-seat-svgrepo-com.svg" alt="">
            <span>${this.seats} Seats</span>
        </div>
        <div class="data-single">
            <img src="./assets/svg icons/cart-flatbed-suitcase-solid.svg" alt="">
            <span>${this.luggage} Bags</span>
        </div>
        <div class="data-single">
            <img src="./assets/svg icons/gas-pump-solid.svg" alt="">
            <span>${this.fuelType} </span>
        </div>
    </div>
    <div class="hr"></div>
    <button class="bt book-btn card-bt">Book Now</button>
        </div>
    `;
}
