// Addis Future College — interactions
(function () {
  'use strict';

  // Header scroll state
  var header = document.querySelector('.site-header');
  function onScroll() {
    if (!header) return;
    if (window.scrollY > 8) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Mobile nav toggle
  var toggle = document.querySelector('.nav-toggle');
  var mobileNav = document.querySelector('.mobile-nav');
  if (toggle && mobileNav) {
    toggle.addEventListener('click', function () {
      mobileNav.classList.toggle('open');
      var open = mobileNav.classList.contains('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.classList.toggle('nav-open', open);
      document.body.style.overflow = open ? 'hidden' : '';
    });

    mobileNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileNav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-open');
        document.body.style.overflow = '';
      });
    });
  }

  // Language switcher
  var langSwitcher = document.querySelector('.lang-switcher');
  if (langSwitcher) {
    var langToggle = langSwitcher.querySelector('.lang-toggle');
    var langMenu = langSwitcher.querySelector('.lang-menu');
    var langOptions = langSwitcher.querySelectorAll('.lang-option');
    
    if (langToggle && langMenu) {
      // Toggle menu on click
      langToggle.addEventListener('click', function (e) {
        e.preventDefault();
        var isOpen = langMenu.style.opacity === '1';
        langToggle.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
      });
      
      // Close menu when option clicked (it navigates away, but good for UX)
      langOptions.forEach(function (option) {
        option.addEventListener('click', function (e) {
          langToggle.setAttribute('aria-expanded', 'false');
        });
      });
      
      // Close menu on click outside
      document.addEventListener('click', function (e) {
        if (!langSwitcher.contains(e.target)) {
          langToggle.setAttribute('aria-expanded', 'false');
        }
      });
      
      // Keyboard support
      langToggle.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
          e.preventDefault();
          langToggle.setAttribute('aria-expanded', 'true');
          langOptions[0].focus();
        } else if (e.key === 'Escape') {
          langToggle.setAttribute('aria-expanded', 'false');
          langToggle.focus();
        }
      });
      
      langOptions.forEach(function (option, idx) {
        option.addEventListener('keydown', function (e) {
          if (e.key === 'ArrowDown' && idx < langOptions.length - 1) {
            e.preventDefault();
            langOptions[idx + 1].focus();
          } else if (e.key === 'ArrowUp' && idx > 0) {
            e.preventDefault();
            langOptions[idx - 1].focus();
          } else if (e.key === 'Escape') {
            langToggle.setAttribute('aria-expanded', 'false');
            langToggle.focus();
          }
        });
      });
    }
  }

  // Reveal on scroll
  var reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && reveals.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('in'); });
  }

  // Accordion
  // Accessible accordion: initialize ARIA, IDs, keyboard, and toggle behavior
  (function () {
    var heads = document.querySelectorAll('.accordion-head');
    if (!heads.length) return;

    heads.forEach(function (head, idx) {
      var item = head.closest('.accordion-item');
      if (!item) return;
      var body = item.querySelector('.accordion-body');
      if (!body) return;

      // ensure body has an id for aria-controls
      if (!body.id) body.id = 'accordion-body-' + idx + '-' + Math.floor(Math.random() * 10000);

      // make head a button for accessibility if it's not already
      if (head.tagName.toLowerCase() !== 'button') {
        head.setAttribute('role', 'button');
      }

      head.setAttribute('aria-controls', body.id);
      head.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
      body.setAttribute('aria-hidden', item.classList.contains('open') ? 'false' : 'true');
      body.setAttribute('role', 'region');

      // ensure collapsed state
      if (!item.classList.contains('open')) body.style.maxHeight = null;
      else body.style.maxHeight = body.scrollHeight + 'px';

      function toggleAccordion() {
        var open = item.classList.contains('open');
        var group = item.closest('.accordion');
        // close siblings if grouped (only one open at a time)
        if (group) {
          group.querySelectorAll('.accordion-item.open').forEach(function (o) {
            if (o !== item) {
              o.classList.remove('open');
              var ob = o.querySelector('.accordion-body');
              if (ob) {
                ob.style.maxHeight = null;
                ob.setAttribute('aria-hidden', 'true');
                var oh = o.querySelector('.accordion-head');
                if (oh) oh.setAttribute('aria-expanded', 'false');
              }
            }
          });
        }

        item.classList.toggle('open');
        if (item.classList.contains('open')) {
          body.style.maxHeight = body.scrollHeight + 'px';
          head.setAttribute('aria-expanded', 'true');
          body.setAttribute('aria-hidden', 'false');
        } else {
          body.style.maxHeight = null;
          head.setAttribute('aria-expanded', 'false');
          body.setAttribute('aria-hidden', 'true');
        }
      }

      head.addEventListener('click', function (e) { e.preventDefault(); toggleAccordion(); });
      head.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggleAccordion(); }
      });
    });
  })();

  // Gallery filter
  var filterBtns = document.querySelectorAll('.filter-btn');
  var galleryItems = document.querySelectorAll('.gallery-item');
  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var cat = btn.dataset.filter;
      galleryItems.forEach(function (it) {
        var show = cat === 'all' || it.dataset.cat === cat;
        it.style.display = show ? '' : 'none';
      });
    });
  });

  // Lightbox
  var lightbox = document.querySelector('.lightbox');
  var lbImg = lightbox ? lightbox.querySelector('img') : null;
  galleryItems.forEach(function (it) {
    it.addEventListener('click', function () {
      if (!lightbox || !lbImg) return;
      lbImg.src = it.querySelector('img').src.replace('w=800', 'w=1400');
      lbImg.alt = it.querySelector('img').alt;
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    });
  });
  if (lightbox) {
    var close = lightbox.querySelector('.close');
    function closeLb() { lightbox.classList.remove('open'); document.body.style.overflow = ''; lbImg.src = ''; }
    close.addEventListener('click', closeLb);
    lightbox.addEventListener('click', function (e) { if (e.target === lightbox) closeLb(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLb(); });
  }

  // Form validation
  document.querySelectorAll('form[data-validate]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      var ok = true;
      form.querySelectorAll('[required]').forEach(function (input) {
        var field = input.closest('.field');
        if (!field) return;
        input.value = input.value.trim();
        var valid = !!input.value;
        if (input.type === 'email') {
          valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value);
        }
        if (input.type === 'tel') {
          valid = input.value.length >= 7;
        }
        field.classList.toggle('invalid', !valid);
        if (!valid) ok = false;
      });
      if (!ok) e.preventDefault();
    });
  });

  // Animated counters
  function animateCounter(el) {
    var target = el.dataset.count || el.textContent.replace(/[^\d.]/g, '');
    var suffix = el.dataset.suffix || '';
    var isFloat = target.indexOf('.') >= 0;
    var num = parseFloat(target);
    if (isNaN(num)) return;
    var dur = 1400, start = null;
    function step(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / dur, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      var val = num * eased;
      el.textContent = (isFloat ? val.toFixed(1) : Math.round(val).toLocaleString()) + suffix;
      if (p < 1) requestAnimationFrame(step);
      else el.textContent = (isFloat ? num : num.toLocaleString()) + suffix;
    }
    requestAnimationFrame(step);
  }
  var counters = document.querySelectorAll('[data-count]');
  if ('IntersectionObserver' in window && counters.length) {
    var co = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { animateCounter(e.target); co.unobserve(e.target); }
      });
    }, { threshold: 0.4 });
    counters.forEach(function (c) { co.observe(c); });
  } else {
    counters.forEach(function (c) { animateCounter(c); });
  }

  // Smooth anchor scroll with header offset
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = a.getAttribute('href');
      if (id.length < 2) return;
      var t = document.querySelector(id);
      if (!t) return;
      e.preventDefault();
      var top = t.getBoundingClientRect().top + window.scrollY - (header ? header.offsetHeight - 8 : 0);
      window.scrollTo({ top: top, behavior: 'smooth' });
    });
  });

  // Auto-dismiss alerts
  document.querySelectorAll('.alert[data-auto-dismiss]').forEach(function (a) {
    setTimeout(function () {
      a.style.transition = 'opacity .4s, transform .4s';
      a.style.opacity = '0';
      a.style.transform = 'translateY(-8px)';
      setTimeout(function () { a.remove(); }, 400);
    }, 5000);
  });
})();
