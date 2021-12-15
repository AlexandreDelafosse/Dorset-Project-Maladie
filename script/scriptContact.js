  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyDQctXPn6Dv55LS0z86DEJnhxjFU5-pDCQ",
    authDomain: "maladie-project.firebaseapp.com",
    projectId: "maladie-project",
    storageBucket: "maladie-project.appspot.com",
    messagingSenderId: "991970624222",
    appId: "1:991970624222:web:e4b76517b3a83fc551f84f"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);

  const firstName = document.getElementById('firstName')
  const lastName = document.getElementById('lastName')
  const email = document.getElementById('email')
  const message = document.getElementById('message')
  const submit = document.getElementById('submit')
  const errorFirstName = document.getElementById('errorFirstName')
  const errorLastName = document.getElementById('errorLastName')
  const errorEmail = document.getElementById('errorEmail')
  const errorMessage = document.getElementById('errorMessage')
  const successMessage = document.getElementById('successMessage')

  submit.addEventListener('click', function(e){
    e.preventDefault()
    let validate = 0
    if (firstName.value != "") {
        validate += 1
        errorFirstName.innerHTML = ""
        firstName.style.border = "1px solid #666666"
    } else {
        errorFirstName.innerHTML = "The firstname can't be empty"
        firstName.style.border = "red 1px solid"
    }
    if(lastName.value != "") {
        validate += 1
        errorLastName.innerHTML = ""
        lastName.style.border = "1px solid #666666"
    } else {
        errorLastName.innerHTML = "The lastname can't be empty"
        lastName.style.border = "red 1px solid"
    }
    if(email.value != "") {
        validate += 1
        errorEmail.innerHTML = ""
        email.style.border = "1px solid #666666"
    } else {
        errorEmail.innerHTML = "The email can't be empty"
        email.style.border = "red 1px solid"
    }
    if(message.value != "") {
        validate += 1
        errorMessage.innerHTML = ""
        message.style.border = "1px solid #666666"
    } else {
        errorMessage.innerHTML = "The message can't be empty"
        message.style.border = "red 1px solid"
    }
    if(validate === 4) {
        successMessage.innerHTML = "Thank you for your message"
    }
  })