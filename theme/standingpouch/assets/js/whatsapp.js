(function() {
  'use strict';

  var WA_NUMBERS = [
    '6281234567890', /* CS 1 — ganti dengan nomor asli */
    '6281234567891', /* CS 2 — ganti dengan nomor asli */
  ];

  var KEY = 'sp_wa_index';

  function getNext() {
    var idx = parseInt(localStorage.getItem(KEY) || '0', 10);
    var next = (idx + 1) % WA_NUMBERS.length;
    localStorage.setItem(KEY, next);
    return WA_NUMBERS[idx];
  }

  function buildUrl(number, text) {
    return 'https://wa.me/' + number + (text ? '?text=' + encodeURIComponent(text) : '');
  }

  document.addEventListener('click', function(e) {
    var el = e.target.closest('[data-wa-product]');
    if (!el) return;

    e.preventDefault();
    var product = el.dataset.waProduct || '';
    var price   = el.dataset.waPrice   || '';
    var text    = 'Halo, saya ingin memesan ' + product + (price ? ' (harga mulai ' + price + ')' : '') + '. Bisa dibantu?';

    window.open(buildUrl(getNext(), text), '_blank', 'noopener');
  });

  document.addEventListener('click', function(e) {
    var el = e.target.closest('[data-wa-consult]');
    if (!el) return;

    e.preventDefault();
    var text = 'Halo, saya ingin konsultasi mengenai custom standing pouch untuk brand saya.';
    window.open(buildUrl(getNext(), text), '_blank', 'noopener');
  });

})();
