window.addEventListener('scroll', function() {
    const fondo = document.querySelector('.fondo');
    const scrollPos = window.pageYOffset;
    if (scrollPos > 0) {
      fondo.classList.add('desvanecer');
    } else {
      fondo.classList.remove('desvanecer');
    }
  });