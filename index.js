let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");

signup.addEventListener("click", () => {
	slider.classList.add("moveslider");
	formSection.classList.add("form-section-move");
});

login.addEventListener("click", () => {
	slider.classList.remove("moveslider");
	formSection.classList.remove("form-section-move");
});
let sexOptions = document.querySelectorAll('input[name="sex"]');
sexOptions.forEach(option => {
    option.addEventListener("change", (event) => {
        if (event.target.checked) {
            // Change the color based on the selected sex
            switch (event.target.value) {
                case "female":
                    formSection.style.backgroundColor = "lightpink";
                    break;
                case "male":
                    formSection.style.backgroundColor = "lightblue";
                    break;
                case "others":
                    formSection.style.backgroundColor = "lightgreen";
                    break;
                default:
                    formSection.style.backgroundColor = "white";
            }
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const signupForm = document.querySelector('.signup-box');
    signupForm.addEventListener('submit', handleFormSubmit);
});

function handleFormSubmit(event) {
    event.preventDefault();

    const fullName = document.querySelector('.name').value;
    const username = document.querySelector('.email').value;
    const password = document.querySelector('.password').value;
    const sex = document.querySelector('input[name="sex"]:checked')?.value || '';
    const dob = document.querySelector('#dob').value;

    const csvData = `${fullName},${username},${password},${sex},${dob}\n`;

    saveCSVToFile(csvData);
}

function saveCSVToFile(csvData) {
    const blob = new Blob([csvData], { type: 'text/csv' });
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'user_data.csv';
    a.style.display = 'none';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}
document.addEventListener('DOMContentLoaded', function () {
    const signupForm = document.getElementById('signupForm');
    signupForm.addEventListener('submit', handleFormSubmit);
});