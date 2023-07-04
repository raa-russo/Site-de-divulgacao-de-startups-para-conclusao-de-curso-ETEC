document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById("btnTop");
  
    btn.addEventListener('click', function() {
      window.scrollTo(0, 0);
    });
  
    function desaparecer() {
      if (window.scrollY > 300) {
        btn.style.display = "flex";
      } else {
        btn.style.display = "none";
      }
    }
  
    document.addEventListener('scroll', desaparecer);
    desaparecer();
});