//user defined classes of car and user
class User {
    constructor(username, email, password) {
        this.username = username;
        this.email = email;
        this.password = password;
    }
}
class Car{
    constructor(name,model,year,fuel,price){
        this.name=name;
        this.model=model;
        this.year=year;
        this.fuel=fuel;
        this.price=price;
    }
}
//array of cars
let cars = [
    new Car("Toyota", "Camry", 2020, "Petrol", 25000),
    new Car("Honda", "Civic", 2018, "Petrol", 22000),
    new Car("Ford", "Fusion", 2019, "Diesel", 28000),
    new Car("Toyota", "Corolla", 2017, "Hybrid", 20000)
];
//array of users
let users = [
    { username: "John", email: "john@example.com", password: "password123" },
    { username: "Alice", email: "alice@example.com", password: "abc123" },
    {username:"demo",email:'demo@gmail.com',password:"demo"}
];
function search() {   
    const carName = prompt("Enter car name to search: Toyota/Honda etc.");
    const filteredCars = cars.filter(car => car.name.toLowerCase() === carName.toLowerCase());

    let message = "";
    if (filteredCars.length > 0) {
        message += "Available Cars:\n";
        filteredCars.forEach(car => {
            message += `Name: ${car.name}, Model: ${car.model}, Year: ${car.year}, Fuel Type: ${car.fuel}, Price: Rs/- ${car.price}\n\n`;
        });
    } else {
        message = "No cars found with the entered name.";
    }

    alert(message);
}
function signUp() {
    event.preventDefault();
    const username = document.getElementById('signupUsername').value;
    const email = document.getElementById('signupEmail').value;
    const password = document.getElementById('signupPassword').value;

   
    let users = JSON.parse(localStorage.getItem('users')) || [];
    if (users.some(user => user.email === email)) {
        alert('Email is already registered. Please use a different email.');
        return;
    }

  //Array of objects
    const newUser = new User(username, email, password);
    users.push(newUser);
    localStorage.setItem('users', JSON.stringify(users));

    console.log('User signed up successfully.');
    alert('Sign up successful! You can now log in.');

    window.location.href = 'login.html'; 
}
function login() {
    event.preventDefault();
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
    const user = users.find(user => user.email === email);

    if (!user) {
        alert('User not found. Please sign up.');
        return;
    }

    if (user.password === password) {
        let message = `Welcome back, ${user.username}!\n\n`;
        message += 'All users:\n';
        users.forEach(user => {
            message += `Username: ${user.username}, Email: ${user.email}\n`;
        });
        alert(message);
        search(); 
    } else {
        alert('Invalid password. Please try again.');
    }
    document.getElementById('loginEmail').value = '';
    document.getElementById('loginPassword').value = '';
}
