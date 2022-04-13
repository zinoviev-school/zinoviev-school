// --- Animate on Scroll import & init ---

// Settings: https://github.com/michalsnik/aos

import AOS from 'aos';

AOS.init({

  offset: 200,
  delay: 100,
  duration: 500,
  easing: 'ease',
  once: false,
  mirror: true,
  anchorPlacement: 'top-bottom'

});
