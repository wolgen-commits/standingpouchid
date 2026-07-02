<?php get_header(); ?>

<main id="main-content">

  <!-- ======================================================
       HERO
       ====================================================== -->
  <section class="sp-hero">
    <div class="sp-hero__inner page-wrap">
      <div class="sp-hero__content">
        <div class="sp-hero__eyebrow">Cetak Offset · Custom · UMKM Friendly</div>
        <h1 class="sp-hero__title">Kemasan Teh<br><em>Custom & Premium</em></h1>
        <p class="sp-hero__sub">Standing pouch kantong teh dengan desain dan ukuran sesuai brand Anda. Preorder diterima, MOQ rendah mulai 100 pcs.</p>
        <div class="sp-hero__ctas">
          <a href="<?php echo esc_url( home_url('/cara-custom/') ); ?>" class="btn btn--cta">Mulai Custom Sekarang →</a>
          <a href="<?php echo esc_url( home_url('/produk/') ); ?>" class="btn btn--lg btn--secondary">Lihat Produk</a>
        </div>
        <div class="sp-hero__trust">
          <span>✓ Cetak Offset</span>
          <span class="trust-dot"></span>
          <span>✓ MOQ 100 pcs</span>
          <span class="trust-dot"></span>
          <span>✓ Free Konsultasi Desain</span>
        </div>
      </div>
      <div class="sp-hero__visual">
        <div class="sp-hero__pouch">📦</div>
        <div class="sp-hero__visual-label">Custom Standing Pouch</div>
      </div>
    </div>
  </section>

  <!-- ======================================================
       STATS / TRUST BAR
       ====================================================== -->
  <section class="sp-stats">
    <div class="sp-stats__grid page-wrap">
      <div class="stat-item">
        <div class="stat-item__value">1.200+</div>
        <div class="stat-item__label">Desain Terselesaikan</div>
      </div>
      <div class="stat-item">
        <div class="stat-item__value">100</div>
        <div class="stat-item__label">MOQ minimum (pcs)</div>
      </div>
      <div class="stat-item">
        <div class="stat-item__value">5</div>
        <div class="stat-item__label">Jenis Bahan Tersedia</div>
      </div>
      <div class="stat-item">
        <div class="stat-item__value">4.9★</div>
        <div class="stat-item__label">Rating Pelanggan</div>
      </div>
    </div>
  </section>

  <!-- ======================================================
       PRODUK UNGGULAN
       ====================================================== -->
  <section class="sp-products">
    <div class="page-wrap">
      <div class="sp-section-header">
        <div class="sp-section-eyebrow">Produk Kami</div>
        <h2 class="sp-section-title">Standing Pouch untuk Teh Anda</h2>
        <p class="sp-section-desc">Tersedia dalam berbagai ukuran dan bahan — dari kraft alami hingga foil premium barrier. Semua bisa dikustom sesuai brand.</p>
      </div>

      <div class="filter-tabs" id="product-filter">
        <button class="filter-tab active" data-filter="all">Semua</button>
        <button class="filter-tab" data-filter="ready">✓ Stok Tersedia</button>
        <button class="filter-tab" data-filter="preorder">Preorder</button>
      </div>

      <div class="product-grid">

        <div class="card-product" data-status="ready">
          <div class="card-product__img" style="background:linear-gradient(135deg,#D8F3DC,#74C69D)">
            🌿
            <div class="card-product__overlay">
              <span class="badge badge--green">✓ Ready</span>
            </div>
          </div>
          <div class="card-product__body">
            <div class="card-product__title">Pouch Teh Kraft 100g</div>
            <div class="card-product__desc">Standing pouch kraft premium, zipper atas, lubang hang. Tampilan alami cocok untuk teh organik dan herbal.</div>
            <div class="card-product__specs">
              <span class="tag tag--kraft">Kraft Brown</span>
              <span class="tag tag--size">12×20 cm</span>
            </div>
            <div class="card-product__footer">
              <div>
                <div class="card-product__price-label">Mulai dari</div>
                <div class="card-product__price">Rp 1.850 <span>/pcs</span></div>
              </div>
              <a href="https://wa.me/<?php echo esc_html( get_theme_mod('sp_wa_1', '6281234567890') ); ?>?text=Halo%2C+saya+ingin+order+Pouch+Teh+Kraft+100g" class="btn btn--sm btn--primary" target="_blank" rel="noopener">Pesan</a>
            </div>
          </div>
        </div>

        <div class="card-product" data-status="preorder">
          <div class="card-product__img" style="background:linear-gradient(135deg,#F5F3FF,#C4B5FD)">
            ✨
            <div class="card-product__overlay">
              <span class="badge badge--brown">🕐 Preorder</span>
            </div>
          </div>
          <div class="card-product__body">
            <div class="card-product__title">Pouch Teh Foil 250g</div>
            <div class="card-product__desc">Foil aluminium full barrier, menjaga aroma teh premium dan herbal lebih tahan lama dari paparan udara.</div>
            <div class="card-product__specs">
              <span class="tag tag--foil">Foil Aluminium</span>
              <span class="tag tag--size">14×22 cm</span>
            </div>
            <div class="card-product__footer">
              <div>
                <div class="card-product__price-label">Mulai dari</div>
                <div class="card-product__price">Rp 2.400 <span>/pcs</span></div>
              </div>
              <a href="https://wa.me/<?php echo esc_html( get_theme_mod('sp_wa_1', '6281234567890') ); ?>?text=Halo%2C+saya+ingin+tanya+Pouch+Teh+Foil+250g" class="btn btn--sm btn--primary" target="_blank" rel="noopener">Pesan</a>
            </div>
          </div>
        </div>

        <div class="card-product" data-status="ready">
          <div class="card-product__img" style="background:linear-gradient(135deg,#EFF6FF,#93C5FD)">
            🎨
            <div class="card-product__overlay">
              <span class="badge badge--green-strong">⭐ Best</span>
            </div>
          </div>
          <div class="card-product__body">
            <div class="card-product__title">Pouch BOPP Matte 500g</div>
            <div class="card-product__desc">BOPP matte finish premium — warna cetak tajam dan presisi, kesan mewah untuk brand kelas atas.</div>
            <div class="card-product__specs">
              <span class="tag tag--bopp">BOPP Matte</span>
              <span class="tag tag--size">18×28 cm</span>
            </div>
            <div class="card-product__footer">
              <div>
                <div class="card-product__price-label">Mulai dari</div>
                <div class="card-product__price">Rp 3.100 <span>/pcs</span></div>
              </div>
              <a href="https://wa.me/<?php echo esc_html( get_theme_mod('sp_wa_1', '6281234567890') ); ?>?text=Halo%2C+saya+ingin+order+Pouch+BOPP+Matte+500g" class="btn btn--sm btn--primary" target="_blank" rel="noopener">Pesan</a>
            </div>
          </div>
        </div>

      </div>

      <div style="text-align:center;margin-top:40px">
        <a href="<?php echo esc_url( home_url('/produk/') ); ?>" class="btn btn--md btn--secondary">Lihat Semua Produk & Ukuran →</a>
      </div>
    </div>
  </section>

  <!-- ======================================================
       KEUNGGULAN
       ====================================================== -->
  <section class="sp-features">
    <div class="page-wrap">
      <div class="sp-section-header">
        <div class="sp-section-eyebrow">Mengapa Kami</div>
        <h2 class="sp-section-title">Keunggulan Layanan Kami</h2>
        <p class="sp-section-desc">Kami mengutamakan kualitas cetak, ketepatan ukuran, dan layanan yang mudah dipahami UMKM.</p>
      </div>

      <div class="feature-grid">
        <div class="card-feature">
          <div class="card-feature__icon">🖨️</div>
          <div class="card-feature__title">Cetak Offset Presisi</div>
          <div class="card-feature__desc">Teknologi offset menghasilkan warna akurat dan tajam. Ideal untuk brand dengan desain detail dan gradasi warna tinggi.</div>
        </div>
        <div class="card-feature">
          <div class="card-feature__icon">📐</div>
          <div class="card-feature__title">Custom Ukuran Bebas</div>
          <div class="card-feature__desc">Pilih dari 8 ukuran standar atau tentukan dimensi sendiri — dari pouch 50g hingga 1kg lebih sesuai kebutuhan produk.</div>
        </div>
        <div class="card-feature">
          <div class="card-feature__icon">🌿</div>
          <div class="card-feature__title">5 Pilihan Bahan</div>
          <div class="card-feature__desc">Kraft alami, BOPP matte, OPP clear, hingga foil aluminium — tiap bahan memiliki keunggulan barrier dan tampilan berbeda.</div>
        </div>
        <div class="card-feature">
          <div class="card-feature__icon">📦</div>
          <div class="card-feature__title">MOQ Rendah 100 Pcs</div>
          <div class="card-feature__desc">Tidak perlu order ribuan pcs. MOQ kami hanya 100 pcs per desain, cocok untuk UMKM yang baru memulai.</div>
        </div>
        <div class="card-feature">
          <div class="card-feature__icon">🎨</div>
          <div class="card-feature__title">Free Konsultasi Desain</div>
          <div class="card-feature__desc">Tim desainer kami siap membantu membuat artwork dari nol atau menyesuaikan file yang sudah Anda miliki.</div>
        </div>
        <div class="card-feature">
          <div class="card-feature__icon">🚀</div>
          <div class="card-feature__title">Produksi 14–21 Hari</div>
          <div class="card-feature__desc">Estimasi produksi 14–21 hari kerja setelah proof digital disetujui. Dikirim ke seluruh Indonesia.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================================================
       CARA KERJA
       ====================================================== -->
  <section class="sp-process">
    <div class="page-wrap">
      <div class="sp-section-header">
        <div class="sp-section-eyebrow">Cara Kerja</div>
        <h2 class="sp-section-title">5 Langkah Custom Standing Pouch</h2>
        <p class="sp-section-desc">Proses yang mudah dan transparan dari konsultasi hingga produk tiba di tangan Anda.</p>
      </div>

      <div class="steps-row">
        <div class="step-item step-item--done">
          <div class="step-item__dot">✓</div>
          <div class="step-item__title">Pilih Produk</div>
          <div class="step-item__desc">Tentukan ukuran, bahan, dan fitur pouch yang diinginkan</div>
        </div>
        <div class="step-item step-item--done">
          <div class="step-item__dot">✓</div>
          <div class="step-item__title">Konsultasi Desain</div>
          <div class="step-item__desc">Kirim artwork atau gunakan jasa desain gratis kami</div>
        </div>
        <div class="step-item step-item--active">
          <div class="step-item__dot">3</div>
          <div class="step-item__title">Approval Proof</div>
          <div class="step-item__desc">Review dan setujui hasil proof digital sebelum cetak</div>
        </div>
        <div class="step-item">
          <div class="step-item__dot">4</div>
          <div class="step-item__title">Produksi</div>
          <div class="step-item__desc">Cetak & laminasi offset 14–21 hari kerja</div>
        </div>
        <div class="step-item">
          <div class="step-item__dot">5</div>
          <div class="step-item__title">Pengiriman</div>
          <div class="step-item__desc">Dikemas rapi dan dikirim ke seluruh Indonesia</div>
        </div>
      </div>

      <div style="text-align:center;margin-top:48px">
        <a href="<?php echo esc_url( home_url('/cara-custom/') ); ?>" class="btn btn--md btn--primary">Mulai Custom Sekarang →</a>
      </div>
    </div>
  </section>

  <!-- ======================================================
       PANDUAN / ARTIKEL
       ====================================================== -->
  <section class="sp-knowledge">
    <div class="page-wrap">
      <div class="sp-section-header">
        <div class="sp-section-eyebrow">Panduan & Edukasi</div>
        <h2 class="sp-section-title">Pelajari Sebelum Custom</h2>
        <p class="sp-section-desc">Artikel pilihan untuk membantu Anda memilih bahan dan menyiapkan desain yang sempurna.</p>
      </div>

      <div class="article-grid">
        <a class="card-article" href="<?php echo esc_url( home_url('/panduan/') ); ?>" style="text-decoration:none;color:inherit">
          <div class="card-article__img" style="background:linear-gradient(135deg,#D8F3DC,#74C69D)">🌿</div>
          <div class="card-article__body">
            <div class="card-article__category">Panduan Bahan</div>
            <div class="card-article__title">Beda BOPP, OPP, dan Kraft: Mana yang Tepat untuk Teh Anda?</div>
            <div class="card-article__meta">5 menit baca · Panduan Pemula</div>
          </div>
        </a>
        <a class="card-article" href="<?php echo esc_url( home_url('/panduan/') ); ?>" style="text-decoration:none;color:inherit">
          <div class="card-article__img" style="background:linear-gradient(135deg,#FEF9C3,#FDE68A)">🖨️</div>
          <div class="card-article__body">
            <div class="card-article__category">Tips Desain</div>
            <div class="card-article__title">Cara Menyiapkan Artwork untuk Cetak Offset yang Sempurna</div>
            <div class="card-article__meta">7 menit baca · Tips Teknis</div>
          </div>
        </a>
      </div>

      <div style="text-align:center;margin-top:36px">
        <a href="<?php echo esc_url( home_url('/panduan/') ); ?>" class="btn btn--md btn--ghost">Lihat Semua Panduan →</a>
      </div>
    </div>
  </section>

  <!-- ======================================================
       FAQ
       ====================================================== -->
  <section class="sp-faq">
    <div class="page-wrap">
      <div class="sp-section-header">
        <div class="sp-section-eyebrow">FAQ</div>
        <h2 class="sp-section-title">Pertanyaan yang Sering Ditanya</h2>
      </div>

      <div class="sp-faq__inner">
        <div class="accordion">

          <div class="accordion-item">
            <button class="accordion-trigger open" onclick="spToggleAccordion(this)">
              Berapa minimum order untuk custom standing pouch?
              <span class="accordion-chevron">▾</span>
            </button>
            <div class="accordion-content open">Minimum order (MOQ) kami adalah <strong>100 pcs per desain</strong>. Tidak ada batasan maksimum. Semakin banyak kuantitas, semakin hemat harga per pcs-nya. Kami melayani UMKM hingga kebutuhan industri skala besar.</div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger" onclick="spToggleAccordion(this)">
              Apa perbedaan cetak offset dan rotogravure?
              <span class="accordion-chevron">▾</span>
            </button>
            <div class="accordion-content">Cetak offset cocok untuk order kecil hingga menengah karena biaya plat lebih terjangkau. Rotogravure menggunakan silinder tembaga sehingga biaya awal tinggi namun harga per pcs sangat rendah untuk volume besar (>50.000 pcs). StandingPouch.id menggunakan <strong>offset</strong> — ideal untuk UMKM yang ingin uji pasar terlebih dahulu.</div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger" onclick="spToggleAccordion(this)">
              Berapa lama waktu produksi setelah proof disetujui?
              <span class="accordion-chevron">▾</span>
            </button>
            <div class="accordion-content">Waktu produksi standar adalah <strong>14–21 hari kerja</strong> setelah proof digital disetujui. Untuk kebutuhan urgent, tersedia layanan ekspres. Kami akan memberikan estimasi waktu yang akurat saat konfirmasi order.</div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger" onclick="spToggleAccordion(this)">
              Apakah bisa order dengan desain saya sendiri?
              <span class="accordion-chevron">▾</span>
            </button>
            <div class="accordion-content">Tentu bisa. Kirim file artwork dalam format <strong>PDF atau AI (Adobe Illustrator)</strong> dengan resolusi minimal 300 DPI. Jika belum memiliki desain, tim desainer kami siap membantu membuat artwork dari nol secara gratis untuk order di atas minimum.</div>
          </div>

        </div>

        <div style="text-align:center;margin-top:28px">
          <a href="<?php echo esc_url( home_url('/faq/') ); ?>" class="btn btn--sm btn--outline-neutral">Lihat Semua FAQ →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================================================
       CTA BANNER
       ====================================================== -->
  <section class="sp-cta">
    <div class="page-wrap">
      <div class="cta-banner">
        <div class="cta-banner__eyebrow">Mulai Sekarang</div>
        <h2 class="cta-banner__title">Siap Membuat Kemasan<br>Custom Brand Anda?</h2>
        <p class="cta-banner__desc">Konsultasi gratis, tanpa komitmen. Hubungi kami sekarang dan dapatkan rekomendasi bahan serta estimasi harga yang tepat.</p>
        <div class="cta-banner__actions">
          <a href="https://wa.me/<?php echo esc_html( get_theme_mod('sp_wa_1', '6281234567890') ); ?>?text=Halo%2C+saya+ingin+konsultasi+custom+standing+pouch"
             class="btn--cta-white" target="_blank" rel="noopener noreferrer">
            💬 Konsultasi via WhatsApp
          </a>
          <a href="<?php echo esc_url( home_url('/produk/') ); ?>" class="btn--ghost-light">
            Lihat Semua Produk
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
