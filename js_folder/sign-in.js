function showPopup(message) {
    const modal = document.getElementById("popupModal");
    const messageEl = document.getElementById("popupMessage");
    const closeBtn = document.getElementById("closeBtn");

    messageEl.innerHTML = message; // Allow emojis & styles
    modal.style.display = "block";

    closeBtn.onclick = () => {
      modal.style.display = "none";
    };

    window.onclick = (event) => {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };

  setTimeout(() => 
  {
  modal.style.display = "none";
  }, 2000);

  }

  var a;
  function pass() 
  {
    if (a==1) 
    {
      document.getElementById('password').type='password';
      document.getElementById('password-icon').src='SignInAndSignUp/hide-eye-icon.png';
      a=0;
    }

    else 
    {
      document.getElementById('password').type='text';
      document.getElementById('password-icon').src='SignInAndSignUp/eye-icon.png';
      a = 1;
    }

  }
  