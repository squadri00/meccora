/* =====================================================
   NEXORA — UI Interactions (Vanilla JS)
   ===================================================== */

document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Sticky navbar on scroll ---------- */
  const navbar = document.querySelector('.navbar-nexora');
  const handleScroll = () => {
    if (window.scrollY > 40) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  };
  window.addEventListener('scroll', handleScroll);
  handleScroll();

  /* ---------- Mobile menu toggle animation ---------- */
  const toggler = document.querySelector('.navbar-toggler-custom');
  const navCollapse = document.getElementById('mainNav');

  if (toggler && navCollapse) {
    // The navbar itself is transparent until scrolled (.scrolled). On mobile the
    // collapse panel has no background of its own, so opening the menu before
    // scrolling showed nav links floating over whatever was behind them. Force
    // a solid navbar background for as long as the mobile menu is open.
    navCollapse.addEventListener('show.bs.collapse', () => {
      toggler.classList.add('active');
      navbar?.classList.add('menu-open');
    });
    navCollapse.addEventListener('hide.bs.collapse', () => {
      toggler.classList.remove('active');
      navbar?.classList.remove('menu-open');
    });

    // Close menu on link click (mobile)
    navCollapse.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', () => {
        if (navCollapse.classList.contains('show')) {
          bootstrap.Collapse.getOrCreateInstance(navCollapse).hide();
        }
      });
    });
  }

  /* ---------- Smooth scroll for in-page anchors ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId.length > 1) {
        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          const offset = 90;
          const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
          window.scrollTo({ top, behavior: 'smooth' });
        }
      }
    });
  });

  /* ---------- Scroll reveal (lightweight IntersectionObserver) ---------- */
  const revealEls = document.querySelectorAll('.reveal');
  const revealAll = () => revealEls.forEach(el => el.classList.add('is-visible'));
  const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (prefersReduced || !('IntersectionObserver' in window) || !revealEls.length) {
    revealAll();
  } else {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        // Reveal as soon as ANY part of the element enters the viewport.
        // (threshold:0 so tall, full-height sections still trigger.)
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0, rootMargin: '0px 0px -8% 0px' });

    revealEls.forEach((el, i) => {
      el.style.transitionDelay = `${(i % 4) * 0.08}s`;
      observer.observe(el);
    });

    // Safety net: guarantee everything is visible shortly after load,
    // regardless of scroll position or observer edge-cases.
    setTimeout(revealAll, 1000);
  }

  /* ---------- Back to top button ---------- */
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      backToTop.classList.toggle('show', window.scrollY > 400);
    });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---------- Bootstrap form validation UI ---------- */
  document.querySelectorAll('.needs-validation').forEach(form => {
    form.addEventListener('submit', function (e) {
      if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      } else {
        e.preventDefault();
        const btn = form.querySelector('button[type="submit"]');
        if (btn) {
          const original = btn.innerHTML;
          btn.innerHTML = 'Sending...';
          btn.disabled = true;
          setTimeout(() => {
            btn.innerHTML = 'Message sent ✓';
            setTimeout(() => {
              btn.innerHTML = original;
              btn.disabled = false;
              form.reset();
              form.classList.remove('was-validated');
            }, 2200);
          }, 1000);
        }
      }
      form.classList.add('was-validated');
    }, false);
  });

  /* ---------- Set active nav link based on current page ---------- */
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.navbar-nexora .nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage) {
      link.classList.add('active');
    }
  });

});
