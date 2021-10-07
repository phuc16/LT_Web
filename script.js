var navLink = document.getElementById("navlink")

function showMenu() {
    navLink.style.right = "0";
}

function hideMenu() {
    navLink.style.right = "-200px";
}


function logIn() {
    alert("Tên đăng nhập hoặc mật khẩu không tồn tại!")
}


(function() {
    var forms = document.querySelectorAll(".needs-validation");
    Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener("submit", (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add("was-validated");
        }, false)
    })
})()