(function() {
  'use strict';

  /* ---- Mobile nav ---- */
  var hamburger = document.getElementById('sp-hamburger');
  var drawer    = document.getElementById('sp-drawer');
  var overlay   = document.getElementById('sp-overlay');
  var closeBtn  = document.getElementById('sp-drawer-close');

  function openDrawer() {
    drawer.classList.add('open');
    overlay.classList.add('open');
    hamburger.setAttribute('aria-expanded', 'true');
    drawer.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    drawer.classList.remove('open');
    overlay.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');
    drawer.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  if (hamburger) hamburger.addEventListener('click', openDrawer);
  if (overlay)   overlay.addEventListener('click', closeDrawer);
  if (closeBtn)  closeBtn.addEventListener('click', closeDrawer);

  /* ---- Product filter tabs ---- */
  var filterContainer = document.getElementById('product-filter');
  if (filterContainer) {
    filterContainer.addEventListener('click', function(e) {
      var tab = e.target.closest('.filter-tab');
      if (!tab) return;

      filterContainer.querySelectorAll('.filter-tab').forEach(function(t) {
        t.classList.remove('active');
      });
      tab.classList.add('active');

      var filter = tab.dataset.filter;
      document.querySelectorAll('.card-product').forEach(function(card) {
        if (filter === 'all' || card.dataset.status === filter) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }

  /* ---- Accordion (WPBakery pages) ---- */
  document.addEventListener('click', function(e) {
    var trigger = e.target.closest('.accordion-trigger');
    if (!trigger) return;
    var content = trigger.nextElementSibling;
    var isOpen  = trigger.classList.contains('open');

    trigger.closest('.accordion').querySelectorAll('.accordion-trigger').forEach(function(t) {
      t.classList.remove('open');
      if (t.nextElementSibling) t.nextElementSibling.classList.remove('open');
    });

    if (!isOpen) {
      trigger.classList.add('open');
      if (content) content.classList.add('open');
    }
  });

})();

/* Global accordion helper (used inline in front-page.php) */
function spToggleAccordion(trigger) {
  var content = trigger.nextElementSibling;
  var isOpen  = trigger.classList.contains('open');
  var accordion = trigger.closest('.accordion');
  if (accordion) {
    accordion.querySelectorAll('.accordion-trigger').forEach(function(t) {
      t.classList.remove('open');
      if (t.nextElementSibling) t.nextElementSibling.classList.remove('open');
    });
  }
  if (!isOpen) {
    trigger.classList.add('open');
    if (content) content.classList.add('open');
  }
}
