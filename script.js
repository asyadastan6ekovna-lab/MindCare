const loginForm = document.getElementById("loginForm");

if (loginForm) {
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        const message = document.getElementById("loginMessage");

        if (name && email && password) {
            message.textContent =
                "Қош келдің, " + name + "! 💜";

            message.style.color = "#8064c9";

            loginForm.reset();
        }
    });
}


const moods = document.querySelectorAll(".mood");
const moodMessage = document.getElementById("moodMessage");

moods.forEach(function(button) {
    button.addEventListener("click", function() {

        moods.forEach(function(item) {
            item.classList.remove("selected");
        });

        button.classList.add("selected");

        const mood = button.dataset.mood;

        if (mood === "happy") {
            moodMessage.textContent =
                "Керемет! Осы жақсы көңіл-күйіңді сақта! 🌸";
        }

        else if (mood === "normal") {
            moodMessage.textContent =
                "Қалыпты күн де жақсы. Өзіңе уақыт бөл! 💜";
        }

        else if (mood === "sad") {
            moodMessage.textContent =
                "Өзіңе мейірімді бол. Сенімді адаммен сөйлесуге болады. 🌷";
        }

        else if (mood === "tired") {
            moodMessage.textContent =
                "Аздап демалып ал. Сенің тынығуың да маңызды! 🌿";
        }
    });
});
