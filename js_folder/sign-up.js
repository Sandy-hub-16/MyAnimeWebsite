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
