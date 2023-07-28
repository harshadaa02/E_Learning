  function scrollToTop() {
    // Scroll to the top of the page
    window.scrollTo({
      top: 0,
      behavior:'smooth' // Use smooth scrolling for a nicer effect
    });
  }
  var button = document.getElementById('scrollTop');
  button.addEventListener('click', scrollToTop);