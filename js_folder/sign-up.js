function showPopup(message) {
  const popup = document.getElementById("popupModal");
  const messageElement = document.getElementById("popupMessage");
  messageElement.textContent = message;
  popup.style.display = "block";

  const closeBtn = document.getElementById("closeBtn");
  closeBtn.onclick = function () {
    popup.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == popup) {
      popup.style.display = "none";
    }
  };

    setTimeout(() => 
  {
  modal.style.display = "none";
  }, 2000);
}

function pass(passwordFieldId, iconId) {
  var passwordField = document.getElementById(passwordFieldId);
  var icon = document.getElementById(iconId);

  if (passwordField.type === 'password') {
    passwordField.type = 'text';
    icon.src = 'SignInAndSignUp/eye-icon.png';
  }
  
  
  else {
    passwordField.type = 'password';
    icon.src = 'SignInAndSignUp/hide-eye-icon.png';
  }
}



