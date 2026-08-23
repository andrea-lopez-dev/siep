const btnSignIn = document.getElementById("sign-in");
const btnSignUp = document.getElementById("sign-up");
const btnSignRegister = document.getElementById("sign-register");
const btnSignAdmin = document.getElementById("sign-admin");
const FormRegister = document.querySelector(".register");
const FormRegistrarse = document.querySelector(".registrarse");
const FormLogin = document.querySelector(".login");
const FormAdmin = document.querySelector(".admin");
                                      

btnSignIn.addEventListener("click", e => {
    FormRegister.classList.add("hide");
    FormLogin.classList.remove("hide")
})


btnSignUp.addEventListener("click", e => {
   FormLogin.classList.add("hide");
    FormRegister.classList.remove("hide")
})


btnSignAdmin.addEventListener("click", e => {
      FormLogin.classList.add("hide");
      FormAdmin.classList.remove("hide")

})

btnSignRegister.addEventListener("click", e => {
    FormAdmin.classList.add("hide");
    FormRegistrarse.classList.remove("hide")
})