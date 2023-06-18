  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const section = urlParams.get("section");

    if (section) {
      scrollToSection(section);
    }
  });

  function scrollToSection(id) {
    const target = document.getElementById(id);
    if (target) {
      target.scrollIntoView({ behavior: "smooth" });
    }
  }