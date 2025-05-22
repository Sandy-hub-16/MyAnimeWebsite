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
  