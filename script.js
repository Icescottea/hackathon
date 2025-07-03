// Wait until the DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("clickBtn");
  const msg = document.getElementById("message");

  btn.addEventListener("click", function () {
    msg.textContent = "Button clicked!";
  });
});
