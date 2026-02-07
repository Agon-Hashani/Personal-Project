(function(){
  // Lightweight interactions for the landing page
  document.addEventListener('scroll', function(){
    var header = document.querySelector('.site-header');
    if(!header) return;
    if(window.scrollY > 40){ header.classList.add('scrolled'); } else { header.classList.remove('scrolled'); }
  });

  var searchBtn = document.getElementById('search-btn');
  if(searchBtn){
    searchBtn.addEventListener('click', function(){
      var val = document.getElementById('search-location')?.value || '';
      // For demo: scroll to featured listings
      document.querySelector('#featured')?.scrollIntoView({behavior:'smooth', block:'start'});
      console.log('Search for:', val);
    });
  }

  // Mobile menu toggle
  var menuToggle = document.querySelector('.menu-toggle');
  var nav = document.getElementById('site-navigation');
  if(menuToggle && nav){
    menuToggle.addEventListener('click', function(){
      var expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      nav.classList.toggle('open');
    });
  }

  var contactForm = document.getElementById('contactForm');
  if(contactForm){
    contactForm.addEventListener('submit', function(e){
      e.preventDefault();
      var btn = document.getElementById('send-btn');
      btn.textContent = 'Sending...';
      setTimeout(function(){
        btn.textContent = 'Send Message';
        alert('Message sent — we will contact you shortly.');
        contactForm.reset();
      }, 800);
    });
  }
})();
