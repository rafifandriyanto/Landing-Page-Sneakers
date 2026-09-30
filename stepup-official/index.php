<?php include 'header.php'; ?>
    <!-- HERO SECTION -->
    <section class="hero-section" id="home">
      <div class="hero-main-wrap">
        <!-- LEFT -->
        <div class="hero-left">
          <h1 class="hero-heading">
            Discover<br>
            Comfort and<br>
            Style for<br>
            Every Occasion
          </h1>
          <p class="hero-subtext">
            Discover the perfect balance of comfort, durability, and style for every
            occasion with our versatile, high-quality footwear collection.
          </p>

          <div class="hero-cta-row">
            <a href="#products" class="hero-btn-explore">
              Explore <span class="hero-btn-arrow">&#8599;</span>
            </a>
            <div class="hero-stats">
              <div class="hero-stat">
                <span class="stat-num">120+</span>
                <span class="stat-label">Happy Customer</span>
              </div>
              <div class="hero-stat">
                <span class="stat-num">4,9/5</span>
                <span class="stat-label">Customer Rating</span>
              </div>
            </div>
          </div>

          <div class="hero-rating-badge">
            <div class="rating-stars">★★★★★</div>
            <div class="rating-info">
              <span class="rating-score">4.9 / 399 Review</span>
              <span class="rating-tags">Comfort, Style, Versatility, Quality</span>
              <span class="rating-quote">"These shoes offer incredible comfort and style. Perfect for every occasion, I wear them daily!"</span>
            </div>
            <div class="rating-nav">
              <button class="rating-nav-btn" id="ratingPrev">&#8592;</button>
              <button class="rating-nav-btn" id="ratingNext">&#8594;</button>
            </div>
          </div>
        </div>

        <!-- CENTER -->
        <div class="hero-center">
          <div class="hero-watermark" aria-hidden="true">
            <span class="wm-line wm-1">RUN</span>
            <span class="wm-line wm-2">NING</span>
            <span class="wm-line wm-3">SNEAK</span>
            <span class="wm-line wm-4">ERS</span>
          </div>

          <div class="hero-shoe-area">
            <div class="hero-shoe-slide active" data-slide="0">
              <img src="images/GAMBAR-SEPATU.png" alt="Nike Air Force 1 Black" class="hero-shoe-img">
            </div>
            <div class="hero-shoe-slide" data-slide="1">
              <img src="images/shoe-slide-1-removebg-preview.png" alt="Nike Air Force 1 White" class="hero-shoe-img">
            </div>
            <div class="hero-shoe-slide" data-slide="2">
              <img src="images/shoe-slide-2-removebg-preview.png" alt="Air Jordan 1 Red" class="hero-shoe-img">
            </div>
            <div class="hero-shoe-slide" data-slide="3">
              <img src="images/shoe-slide-3-removebg-preview.png" alt="Nike Dunk Blue" class="hero-shoe-img">
            </div>
          </div>

          <div class="hero-slide-dots">
            <button class="slide-dot active" data-target="0"></button>
            <button class="slide-dot" data-target="1"></button>
            <button class="slide-dot" data-target="2"></button>
            <button class="slide-dot" data-target="3"></button>
          </div>
        </div>

        <!-- RIGHT -->
        <div class="hero-right">
          <div class="hero-product-cards">
            <div class="hpc-card active" data-slide="0">
              <div class="hpc-badge">NEW</div>
              <img src="images/GAMBAR-SEPATU.png" alt="Air Force 1 Black" class="hpc-img">
              <div class="hpc-info">
                <span class="hpc-name">Air Force 1 Black</span>
                <span class="hpc-price">Rp 450K</span>
              </div>
              <div class="hpc-dots">
                <span class="hpc-dot" style="background:#111"></span>
                <span class="hpc-dot" style="background:#888"></span>
              </div>
            </div>
            <div class="hpc-card" data-slide="1">
              <div class="hpc-badge">NEW</div>
              <img src="images/shoe-slide-1-removebg-preview.png" alt="Air Force 1 White" class="hpc-img">
              <div class="hpc-info">
                <span class="hpc-name">Air Force 1 White</span>
                <span class="hpc-price">Rp 599K</span>
              </div>
              <div class="hpc-dots">
                <span class="hpc-dot" style="background:#fff;border:1px solid #ccc"></span>
                <span class="hpc-dot" style="background:#ddd"></span>
              </div>
            </div>
            <div class="hpc-card" data-slide="2">
              <div class="hpc-badge">NEW</div>
              <img src="images/shoe-slide-2-removebg-preview.png" alt="Air Jordan 1 Red" class="hpc-img">
              <div class="hpc-info">
                <span class="hpc-name">Air Jordan 1 Red</span>
                <span class="hpc-price">Rp 750K</span>
              </div>
              <div class="hpc-dots">
                <span class="hpc-dot" style="background:#e74c3c"></span>
                <span class="hpc-dot" style="background:#111"></span>
              </div>
            </div>
            <div class="hpc-card" data-slide="3">
              <div class="hpc-badge">NEW</div>
              <img src="images/shoe-slide-3-removebg-preview.png" alt="Nike Dunk Blue" class="hpc-img">
              <div class="hpc-info">
                <span class="hpc-name">Nike Dunk Blue</span>
                <span class="hpc-price">Rp 399K</span>
              </div>
              <div class="hpc-dots">
                <span class="hpc-dot" style="background:#2980b9"></span>
                <span class="hpc-dot" style="background:#111"></span>
              </div>
            </div>
          </div>

          <a href="#products" class="hero-show-more-btn">
            Show More <span class="hero-show-more-arrow">&#8599;</span>
          </a>
        </div>
      </div>
    </section>

    <!-- PRODUCTS - MEN -->
    <section class="products py-5" id="products">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-subtitle">Men's Collection</span>
          <h2 class="section-title">MEN'S FAVORITES</h2>
        </div>
        <div class="row g-4">
          <!-- Product 1 -->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
            <div class="product-card">
              <div class="product-badge">Best Seller</div>
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/736x/95/de/e5/95dee543adc9fc41e51dfce32a117df2.jpg"
                  class="product-img-main"
                  alt="Urban"
                />
                <img
                  src="https://i.pinimg.com/1200x/50/08/59/500859af1dbfa53c803d475515a46da0.jpg"
                  class="product-img-hover"
                  alt="Urban"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Casual</p>
                <h5 class="fw-bold mb-2">StepUp Urban</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 450K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Urban - Main Variant"
                    data-price="450000"
                    data-img="https://i.pinimg.com/736x/95/de/e5/95dee543adc9fc41e51dfce32a117df2.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Urban - Alternative Variant"
                    data-price="450000"
                    data-img="https://i.pinimg.com/1200x/50/08/59/500859af1dbfa53c803d475515a46da0.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 2 -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="product-card">
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/e0/a5/b3/e0a5b353b3f7adcba85393a731a5bd61.jpg"
                  class="product-img-main"
                  alt="Runner"
                />
                <img
                  src="https://i.pinimg.com/1200x/64/8a/07/648a073d1eee7ccbff2cc91fe0124adc.jpg"
                  class="product-img-hover"
                  alt="Runner"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Running</p>
                <h5 class="fw-bold mb-2">StepUp Runner Pro</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 599K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Runner Pro - Main Variant"
                    data-price="599000"
                    data-img="https://i.pinimg.com/1200x/e0/a5/b3/e0a5b353b3f7adcba85393a731a5bd61.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Runner Pro - Alternative Variant"
                    data-price="599000"
                    data-img="https://i.pinimg.com/1200x/64/8a/07/648a073d1eee7ccbff2cc91fe0124adc.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 3 -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="product-card">
              <div class="product-badge limited">Limited</div>
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/aa/e2/fe/aae2fe45e841ae8d87bb62729ba334c8.jpg"
                  class="product-img-main"
                  alt="Limited"
                />
                <img
                  src="https://i.pinimg.com/736x/e0/9a/a3/e09aa3f4f55d53201a9ec96eab20d955.jpg"
                  class="product-img-hover"
                  alt="Limited"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Exclusive</p>
                <h5 class="fw-bold mb-2">StepUp Limited</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 750K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Limited - Main Variant"
                    data-price="750000"
                    data-img="https://i.pinimg.com/1200x/aa/e2/fe/aae2fe45e841ae8d87bb62729ba334c8.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Limited - Alternative Variant"
                    data-price="750000"
                    data-img="https://i.pinimg.com/736x/e0/9a/a3/e09aa3f4f55d53201a9ec96eab20d955.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 4 -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="product-card">
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/736x/aa/d2/37/aad237a8f735483c69bc8eb78ca718fc.jpg"
                  class="product-img-main"
                  alt="Classic"
                />
                <img
                  src="https://i.pinimg.com/1200x/40/38/83/4038836a63b2b422fdbdf7211c0b4771.jpg"
                  class="product-img-hover"
                  alt="Classic"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Classic</p>
                <h5 class="fw-bold mb-2">StepUp Classic</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 399K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Classic - Main Variant"
                    data-price="399000"
                    data-img="https://i.pinimg.com/736x/aa/d2/37/aad237a8f735483c69bc8eb78ca718fc.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Classic - Alternative Variant"
                    data-price="399000"
                    data-img="https://i.pinimg.com/1200x/40/38/83/4038836a63b2b422fdbdf7211c0b4771.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    ><i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WOMEN SECTION -->
    <section class="products py-5" id="women">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-subtitle">Women's Collection</span>
          <h2 class="section-title">WOMEN'S STYLE</h2>
        </div>
        <div class="row g-4">
          <!-- Product 1 - Women -->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
            <div class="product-card">
              <div class="product-badge">Trending</div>
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/e6/67/d5/e667d56eb34ef22619f1025b05f2a2df.jpg"
                  class="product-img-main"
                  alt="Women Air"
                />
                <img
                  src="https://i.pinimg.com/736x/6d/7a/90/6d7a90e073662ad831f76544cdc98ef9.jpg"
                  class="product-img-hover"
                  alt="Women Air Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Sport</p>
                <h5 class="fw-bold mb-2">StepUp Air Women</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 525K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Air Women - Main Variant"
                    data-price="525000"
                    data-img="https://i.pinimg.com/1200x/e6/67/d5/e667d56eb34ef22619f1025b05f2a2df.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Air Women - Alternative Variant"
                    data-price="525000"
                    data-img="https://i.pinimg.com/736x/6d/7a/90/6d7a90e073662ad831f76544cdc98ef9.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 2 - Women -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="product-card">
              <div class="product-badge new">New</div>
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/736x/c6/e5/7c/c6e57c87e7e197ed956d236d9153b2bf.jpg"
                  class="product-img-main"
                  alt="Women Pink"
                />
                <img
                  src="https://i.pinimg.com/1200x/51/9e/56/519e561800debc857b3976dffdda07df.jpg"
                  class="product-img-hover"
                  alt="Women Pink Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Casual</p>
                <h5 class="fw-bold mb-2">StepUp Pink Dream</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 475K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Pink Dream - Main Variant"
                    data-price="475000"
                    data-img="https://i.pinimg.com/736x/c6/e5/7c/c6e57c87e7e197ed956d236d9153b2bf.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Pink Dream - Alternative Variant"
                    data-price="475000"
                    data-img="https://i.pinimg.com/1200x/51/9e/56/519e561800debc857b3976dffdda07df.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 3 - Women -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="product-card">
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/55/cf/a1/55cfa181099ad1899f4a2763c483122d.jpg"
                  class="product-img-main"
                  alt="Women White"
                />
                <img
                  src="https://i.pinimg.com/1200x/ee/21/de/ee21de0381d994ead7600e92ee224616.jpg"
                  class="product-img-hover"
                  alt="Women White Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Lifestyle</p>
                <h5 class="fw-bold mb-2">StepUp Pure White</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 499K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Pure White - Main Variant"
                    data-price="499000"
                    data-img="https://i.pinimg.com/1200x/55/cf/a1/55cfa181099ad1899f4a2763c483122d.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Pure White - Alternative Variant"
                    data-price="499000"
                    data-img="https://i.pinimg.com/1200x/ee/21/de/ee21de0381d994ead7600e92ee224616.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 4 - Women -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="product-card">
              <div class="product-badge limited">Limited</div>
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/33/87/33/338733004b4c2108fba7b1fcb3f8f41f.jpg"
                  class="product-img-main"
                  alt="Women Heels"
                />
                <img
                  src="https://i.pinimg.com/736x/fb/09/a9/fb09a986c2d705ea76561542b91c9b64.jpg"
                  class="product-img-hover"
                  alt="Women Heels Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Premium</p>
                <h5 class="fw-bold mb-2">StepUp Heels Edition</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 1.750K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Heels Edition - Main Variant"
                    data-price="1750000"
                    data-img="https://i.pinimg.com/1200x/33/87/33/338733004b4c2108fba7b1fcb3f8f41f.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Heels Edition - Alternative Variant"
                    data-price="1750000"
                    data-img="https://i.pinimg.com/736x/fb/09/a9/fb09a986c2d705ea76561542b91c9b64.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- KIDS SECTION -->
    <section class="products py-5" id="kids">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-subtitle">Kids Collection</span>
          <h2 class="section-title">KIDS CORNER</h2>
        </div>
        <div class="row g-4">
          <!-- Product 1 - Kids -->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
            <div class="product-card">
              <div class="product-badge">Popular</div>
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/da/18/1b/da181bc5973817280f3efc763e3f21df.jpg"
                  class="product-img-main"
                  alt="Kids Blue"
                />
                <img
                  src="https://i.pinimg.com/736x/df/9e/ba/df9eba29c83f865e7a5a50593d69816b.jpg"
                  class="product-img-hover"
                  alt="Kids Blue Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Boys</p>
                <h5 class="fw-bold mb-2">StepUp Kids Blue</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 350K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Kids Blue - Main Variant"
                    data-price="350000"
                    data-img="https://i.pinimg.com/1200x/da/18/1b/da181bc5973817280f3efc763e3f21df.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Kids Blue - Alternative Variant"
                    data-price="350000"
                    data-img="https://i.pinimg.com/736x/df/9e/ba/df9eba29c83f865e7a5a50593d69816b.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 2 - Kids -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="product-card">
              <div class="product-badge new">New</div>
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/5a/be/a7/5abea76a02c6021fae85fa14176011f7.jpg"
                  class="product-img-main"
                  alt="Kids Pink"
                />
                <img
                  src="https://i.pinimg.com/1200x/d7/65/c2/d765c2f2b0d4d98426224472af4b5bc4.jpg"
                  class="product-img-hover"
                  alt="Kids Pink Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Girls</p>
                <h5 class="fw-bold mb-2">StepUp Kids Pink</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 350K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Kids Pink - Main Variant"
                    data-price="350000"
                    data-img="https://i.pinimg.com/1200x/5a/be/a7/5abea76a02c6021fae85fa14176011f7.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Kids Pink - Alternative Variant"
                    data-price="350000"
                    data-img="https://i.pinimg.com/1200x/d7/65/c2/d765c2f2b0d4d98426224472af4b5bc4.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 3 - Kids -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="product-card">
              <div class="product-image">
                <img
                  src="https://i.pinimg.com/1200x/57/65/78/5765786fa9f566178f84b025270396c4.jpg"
                  class="product-img-main"
                  alt="Kids Sport"
                />
                <img
                  src="https://i.pinimg.com/1200x/0a/5f/1f/0a5f1fc40edc07cc7c1a91eb158554f8.jpg"
                  class="product-img-hover"
                  alt="Kids Sport Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Sport</p>
                <h5 class="fw-bold mb-2">StepUp Kids Sport</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 375K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Kids Sport - Main Variant"
                    data-price="375000"
                    data-img="https://i.pinimg.com/1200x/57/65/78/5765786fa9f566178f84b025270396c4.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Kids Sport - Alternative Variant"
                    data-price="375000"
                    data-img="https://i.pinimg.com/1200x/0a/5f/1f/0a5f1fc40edc07cc7c1a91eb158554f8.jpg"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 4 - Kids -->
          <div
            class="col-12 col-sm-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="product-card">
              <div class="product-badge limited">Hot</div>
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?w=400"
                  class="product-img-main"
                  alt="Kids Street"
                />
                <img
                  src="https://images.unsplash.com/photo-1514989940723-e8e51635b782?w=400"
                  class="product-img-hover"
                  alt="Kids Street Variant"
                />
              </div>
              <div class="product-info">
                <p class="text-muted small mb-1">Street Style</p>
                <h5 class="fw-bold mb-2">StepUp Kids Street</h5>
                <div
                  class="d-flex justify-content-between align-items-center mb-2"
                >
                  <span class="fw-bold fs-5">Rp 329K</span>
                </div>
                <div class="product-variants">
                  <button
                    class="variant-btn primary btn-cart"
                    data-name="StepUp Kids Street - Main Variant"
                    data-price="329000"
                    data-img="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?w=400"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-bag-plus"></i> Main Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                  <button
                    class="variant-btn secondary btn-cart"
                    data-name="StepUp Kids Street - Alternative Variant"
                    data-price="329000"
                    data-img="https://images.unsplash.com/photo-1514989940723-e8e51635b782?w=400"
                  >
                    <span class="variant-label"
                      ><i class="bi bi-arrow-left-right"></i> Other Variant</span
                    >
                    <i class="bi bi-cart-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials py-5">
      <div class="container">
        <div class="text-right mb-5">
          <span class="section-subtitle">Testimonials</span>
          <h2 class="section-title">WHAT THEY SAY</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up">
            <div class="testimonial-card p-4">
              <div class="stars text-warning mb-3">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p class="mb-3">
                What I love about StepUp is that their designs are so unique. It
                really sets you apart from the crowd. I wore them to hang out
                with my friends, and they immediately noticed and asked where I
                got them. In terms of comfort, they are also amazing—not just
                for style, but also really comfortable for long wear.
              </p>
              <div class="d-flex align-items-center">
                <img
                  src="https://i.pravatar.cc/150?img=1"
                  class="rounded-circle me-3"
                  width="50"
                  alt="User"
                />
                <div>
                  <h6 class="mb-0 fw-bold">Budi Santoso</h6>
                  <small class="text-muted">Jakarta</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-card p-4">
              <div class="stars text-warning mb-3">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p class="mb-3">
                At first, I was a bit hesitant to buy from StepUp because I had
                never tried them before. But once the package arrived, I
                completely changed my mind. The shoes are super clean, the
                details are spot on, and most importantly, comfortable to wear
                all day. They are also very easy to match with my outfits.
                This is definitely not the last time I'll buy from here.
              </p>
              <div class="d-flex align-items-center">
                <img
                  src="https://i.pravatar.cc/150?img=5"
                  class="rounded-circle me-3"
                  width="50"
                  alt="User"
                />
                <div>
                  <h6 class="mb-0 fw-bold">Anisa Rahma</h6>
                  <small class="text-muted">Bandung</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-card p-4">
              <div class="stars text-warning mb-3">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p class="mb-3">
                I've been looking for authentic Air Jordan 1s at a reasonable
                price for a long time, and finally found them on StepUp. When
                they arrived, the condition was absolutely perfect, not a single
                flaw. Wearing them is great, they don't make my feet sore at
                all. Honestly super satisfied, totally worth every penny sih <i class="bi bi-fire text-danger"></i>
              </p>
              <div class="d-flex align-items-center">
                <img
                  src="https://i.pravatar.cc/150?img=3"
                  class="rounded-circle me-3"
                  width="50"
                  alt="User"
                />
                <div>
                  <h6 class="mb-0 fw-bold">Reza Pratama</h6>
                  <small class="text-muted">Surabaya</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="features py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-3 text-center" data-aos="fade-up">
            <i class="bi bi-truck fs-1 mb-3"></i>
            <h5 class="fw-bold">Free Shipping</h5>
            <p class="text-muted">On orders over Rp 300K</p>
          </div>
          <div
            class="col-md-3 text-center"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <i class="bi bi-shield-check fs-1 mb-3"></i>
            <h5 class="fw-bold">Secure Payment</h5>
            <p class="text-muted">100% protected</p>
          </div>
          <div
            class="col-md-3 text-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <i class="bi bi-arrow-repeat fs-1 mb-3"></i>
            <h5 class="fw-bold">Easy Returns</h5>
            <p class="text-muted">7 days policy</p>
          </div>
          <div
            class="col-md-3 text-center"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <i class="bi bi-headset fs-1 mb-3"></i>
            <h5 class="fw-bold">24/7 Support</h5>
            <p class="text-muted">Dedicated team</p>
          </div>
        </div>
      </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="newsletter py-5">
      <div class="container text-center">
        <h2 class="fw-bold mb-3">JOIN THE MOVEMENT</h2>
        <p class="mb-4">Get exclusive deals & early access.</p>
        <form class="newsletter-form mx-auto" id="newsletterForm">
          <input
            type="email"
            class="form-control"
            placeholder="Enter your email"
            required
          />
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
        <div id="newsletterMsg" class="mt-3 fw-bold"></div>
      </div>
    </section>

<?php include 'footer.php'; ?>
