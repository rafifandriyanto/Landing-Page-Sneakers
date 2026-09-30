// ===== INIT AOS =====
AOS.init({ duration: 600, once: true, offset: 100 });

// ===== HERO SHOE SLIDER =====
(function () {
  const shoeSlides = document.querySelectorAll(".hero-shoe-slide");
  const slideDots = document.querySelectorAll(".slide-dot");
  const hpcCards = document.querySelectorAll(".hpc-card");
  if (!shoeSlides.length) return;

  let current = 0;
  let autoTimer;

  function goTo(idx) {
    shoeSlides[current].classList.remove("active");
    if (slideDots[current]) slideDots[current].classList.remove("active");
    if (hpcCards[current]) hpcCards[current].classList.remove("active");

    current = (idx + shoeSlides.length) % shoeSlides.length;

    shoeSlides[current].classList.add("active");
    if (slideDots[current]) slideDots[current].classList.add("active");
    if (hpcCards[current]) hpcCards[current].classList.add("active");
  }

  function startAuto() {
    autoTimer = setInterval(() => goTo(current + 1), 3500);
  }

  function resetAuto() {
    clearInterval(autoTimer);
    startAuto();
  }

  slideDots.forEach((btn) => {
    btn.addEventListener("click", () => {
      goTo(parseInt(btn.dataset.target));
      resetAuto();
    });
  });

  hpcCards.forEach((card) => {
    card.addEventListener("click", () => {
      goTo(parseInt(card.dataset.slide));
      resetAuto();
    });
  });

  document.getElementById("ratingPrev")?.addEventListener("click", () => {
    goTo(current - 1);
    resetAuto();
  });
  document.getElementById("ratingNext")?.addEventListener("click", () => {
    goTo(current + 1);
    resetAuto();
  });

  // Touch swipe support
  let touchStartX = 0;
  const heroSection = document.querySelector(".hero-section");
  if (heroSection) {
    heroSection.addEventListener(
      "touchstart",
      (e) => {
        touchStartX = e.changedTouches[0].screenX;
      },
      { passive: true },
    );
    heroSection.addEventListener(
      "touchend",
      (e) => {
        const diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 60) {
          goTo(diff > 0 ? current + 1 : current - 1);
          resetAuto();
        }
      },
      { passive: true },
    );
  }

  startAuto();
})();



// ===== STICKY NAVBAR =====
const navbar = document.querySelector(".navbar");
if (navbar) {
  window.addEventListener("scroll", () => {
    navbar.classList.toggle("scrolled", window.scrollY > 50);
  });
}

// ===== ACTIVE NAV LINK =====
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    if (window.scrollY >= section.offsetTop - 200)
      current = section.getAttribute("id");
  });
  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href") === `#${current}`)
      link.classList.add("active");
  });
});

// ===== COUNTER ANIMATION =====
const counters = document.querySelectorAll(".counter");
if (counters.length) {
  const counterObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = +el.dataset.target;
          const duration = 2000;
          const start = performance.now();
          function animate(now) {
            const progress = Math.min((now - start) / duration, 1);
            const value = Math.floor(progress * target);
            el.textContent =
              target >= 1000 ? (value / 1000).toFixed(0) + "K+" : value + "+";
            if (progress < 1) requestAnimationFrame(animate);
          }
          requestAnimationFrame(animate);
          counterObserver.unobserve(el);
        }
      });
    },
    { threshold: 0.5 },
  );
  counters.forEach((c) => counterObserver.observe(c));
}

// ===== CART SYSTEM =====
let cart = JSON.parse(localStorage.getItem("stepup_cart")) || [];

function saveCart() {
  localStorage.setItem("stepup_cart", JSON.stringify(cart));
  updateCartUI();
}

function updateCartUI() {
  const cartItems = document.getElementById("cart-items");
  const cartTotal = document.getElementById("cart-total");
  const cartCount = document.getElementById("cart-count");
  const selectAll = document.getElementById("selectAllItems");
  if (!cartItems || !cartTotal) return;

  if (cartCount)
    cartCount.textContent = cart.reduce((sum, item) => sum + item.qty, 0);

  if (cart.length === 0) {
    cartItems.innerHTML =
      '<p class="text-muted text-center py-5"><i class="bi bi-cart-x fs-1 d-block mb-3 text-secondary"></i>Cart is empty<br><small>Add products to start shopping</small></p>';
    cartTotal.textContent = "Rp 0";
    if (selectAll) selectAll.closest(".p-3").style.display = "none";
    return;
  }

  if (selectAll) {
    selectAll.closest(".p-3").style.display = "block";
    selectAll.checked = true;
  }

  const selected = cart.filter((item) => item.selected !== false);
  const total = selected.reduce((sum, item) => sum + item.price * item.qty, 0);

  cartItems.innerHTML = cart
    .map(
      (item, index) => `
    <div class="cart-item" data-index="${index}">
      <div class="d-flex align-items-start gap-3">
        <div class="form-check mt-2">
          <input class="form-check-input item-checkbox" type="checkbox" data-index="${index}" ${item.selected !== false ? "checked" : ""}>
        </div>
        <img src="${item.img}" alt="${item.name}" style="width:80px;height:80px;object-fit:cover;border-radius:10px;">
        <div class="flex-grow-1">
          <h6 class="mb-1 fw-bold">${item.name}</h6>
          <p class="mb-1 text-muted small"><i class="bi bi-rulers me-1"></i>Size: ${item.size || "-"}</p>
          <p class="mb-2 text-muted small"><i class="bi bi-cash me-1"></i>Rp ${item.price.toLocaleString("id")}</p>
          <div class="d-flex align-items-center gap-2">
            <button class="btn btn-sm btn-outline-secondary" onclick="changeQty(${index},-1)">−</button>
            <span class="fw-bold">${item.qty}</span>
            <button class="btn btn-sm btn-outline-secondary" onclick="changeQty(${index},1)">+</button>
            <button class="btn btn-sm btn-outline-danger ms-auto" onclick="removeItem(${index})"><i class="bi bi-trash"></i></button>
          </div>
        </div>
      </div>
    </div>
  `,
    )
    .join("");

  cartTotal.textContent = `Rp ${total.toLocaleString("id")}`;

  document.querySelectorAll(".item-checkbox").forEach((cb) => {
    cb.addEventListener("change", function () {
      cart[parseInt(this.dataset.index)].selected = this.checked;
      saveCart();
      if (selectAll)
        selectAll.checked = cart.every((item) => item.selected !== false);
    });
  });

  if (selectAll) {
    selectAll.addEventListener("change", function () {
      cart.forEach((item) => (item.selected = this.checked));
      saveCart();
      document
        .querySelectorAll(".item-checkbox")
        .forEach((cb) => (cb.checked = this.checked));
    });
  }
}

window.changeQty = function (index, delta) {
  if (cart[index]) {
    cart[index].qty += delta;
    if (cart[index].qty <= 0) cart.splice(index, 1);
    saveCart();
  }
};

window.removeItem = function (index) {
  if (confirm("Remove item from cart?")) {
    cart.splice(index, 1);
    saveCart();
  }
};

function openSizeModal(product) {
  const sizeModalEl = document.getElementById("sizeSelectModal");
  if (!sizeModalEl) return;
  const sizeModal = new bootstrap.Modal(sizeModalEl);
  const modalName = document.getElementById("modalSizeProductName");
  const modalImg = document.getElementById("modalSizeProductImg");
  const sizeGrid = document.getElementById("sizeSelectGrid");
  const confirmBtn = document.getElementById("confirmAddToCart");
  if (modalName) modalName.textContent = product.name;
  if (modalImg) modalImg.src = product.img;
  let selectedSize = null;
  if (sizeGrid) {
    sizeGrid.innerHTML = "";
    [36, 37, 38, 39, 40, 41, 42, 43].forEach((size) => {
      const btn = document.createElement("button");
      btn.type = "button";
      btn.className = "size-btn";
      btn.textContent = size;
      btn.onclick = () => {
        sizeGrid
          .querySelectorAll(".size-btn")
          .forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        selectedSize = size;
      };
      sizeGrid.appendChild(btn);
    });
  }
  if (confirmBtn) {
    confirmBtn.onclick = () => {
      if (!selectedSize) {
        alert("Please select a size first!");
        return;
      }
      cart.push({
        id:
          Date.now().toString() + "_" + Math.random().toString(36).substr(2, 9),
        name: product.name,
        price: product.price,
        img: product.img,
        size: selectedSize,
        qty: 1,
        selected: true,
      });
      saveCart();
      sizeModal.hide();
      showToast(`<i class="bi bi-bag-check-fill text-success me-2"></i> ${product.name} (Size ${selectedSize}) added to cart!`);
    };
  }
  sizeModal.show();
}

document.querySelectorAll(".btn-cart").forEach((button) => {
  button.addEventListener("click", function () {
    openSizeModal({
      id: Date.now().toString(),
      name: this.dataset.name,
      price: parseInt(this.dataset.price),
      img: this.dataset.img,
    });
  });
});

updateCartUI();

// ===== ORDER MODAL =====
const orderModalEl = document.getElementById("orderModal");
if (orderModalEl) {
  const orderModal = new bootstrap.Modal(orderModalEl);
  const modalProductImg = document.getElementById("modalProductImg");
  const modalProductName = document.getElementById("modalProductName");
  const modalProductPrice = document.getElementById("modalProductPrice");
  const formProduk = document.getElementById("formProduk");
  const formUkuran = document.getElementById("formUkuran");
  const sizeGrid = document.getElementById("sizeGrid");
  const sizeError = document.getElementById("sizeError");
  const orderForm = document.getElementById("orderForm");

  function formatRupiah(angka) {
    return "Rp " + parseInt(angka).toLocaleString("id-ID");
  }

  document.querySelectorAll(".btn-order").forEach((button) => {
    button.addEventListener("click", function () {
      const productCard = this.closest(".product-card");
      const imgMain = productCard?.querySelector(".product-img-main");
      const imgHover = productCard?.querySelector(".product-img-hover");
      let currentImg = imgMain?.src || "";
      if (
        imgMain &&
        imgHover &&
        parseFloat(window.getComputedStyle(imgHover).opacity) > 0.5
      )
        currentImg = imgHover.src;
      if (modalProductImg) modalProductImg.src = currentImg;
      if (modalProductName) modalProductName.textContent = this.dataset.name;
      if (modalProductPrice)
        modalProductPrice.textContent = formatRupiah(this.dataset.price);
      if (formProduk)
        formProduk.value =
          this.dataset.name + " - " + formatRupiah(this.dataset.price);
      if (orderForm) orderForm.reset();
      if (formUkuran) formUkuran.value = "";
      if (sizeGrid) {
        sizeGrid
          .querySelectorAll(".size-btn")
          .forEach((b) => b.classList.remove("active"));
        sizeGrid.classList.remove("has-error");
      }
      if (sizeError) sizeError.style.display = "none";
      orderModal.show();
    });
  });

  if (sizeGrid) {
    sizeGrid.addEventListener("click", function (e) {
      const btn = e.target.closest(".size-btn");
      if (!btn) return;
      sizeGrid
        .querySelectorAll(".size-btn")
        .forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      if (formUkuran) formUkuran.value = btn.dataset.size;
      sizeGrid.classList.remove("has-error");
      if (sizeError) sizeError.style.display = "none";
    });
  }

  if (orderForm) {
    orderForm.addEventListener("submit", function (e) {
      if (formUkuran && !formUkuran.value) {
        e.preventDefault();
        if (sizeGrid) sizeGrid.classList.add("has-error");
        if (sizeError) sizeError.style.display = "block";
        sizeGrid?.scrollIntoView({ behavior: "smooth", block: "center" });
        return;
      }
      const submitBtn = orderForm.querySelector(".btn-order-submit");
      if (submitBtn) {
        submitBtn.innerHTML =
          '<span class="spinner-border spinner-border-sm me-2"></span>Contacting...';
        submitBtn.disabled = true;
      }
    });
  }
}

// ===== BACK TO TOP =====
const backToTop = document.getElementById("backToTop");
if (backToTop) {
  window.addEventListener("scroll", () =>
    backToTop.classList.toggle("show", window.scrollY > 500),
  );
  backToTop.addEventListener("click", () =>
    window.scrollTo({ top: 0, behavior: "smooth" }),
  );
}

// ===== NEWSLETTER =====
const newsletterForm = document.getElementById("newsletterForm");
if (newsletterForm) {
  newsletterForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const msg = document.getElementById("newsletterMsg");
    if (msg) {
      msg.textContent = "✓ Successfully subscribed!";
      msg.style.color = "#4ade80";
    }
    e.target.reset();
    setTimeout(() => {
      if (msg) msg.textContent = "";
    }, 4000);
  });
}

// ===== SMOOTH SCROLL =====
document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener("click", function (e) {
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});

// ===== TOAST =====
function showToast(message) {
  const toast = document.createElement("div");
  toast.style.cssText =
    "position:fixed;bottom:100px;left:50%;transform:translateX(-50%) translateY(20px);background:#111;color:#fff;padding:14px 28px;border-radius:50px;font-size:0.95rem;font-weight:600;z-index:9999;opacity:0;transition:all 0.3s ease;white-space:nowrap;box-shadow:0 8px 25px rgba(0,0,0,0.3);";
  toast.innerHTML = message;
  document.body.appendChild(toast);
  requestAnimationFrame(() => {
    toast.style.opacity = "1";
    toast.style.transform = "translateX(-50%) translateY(0)";
  });
  setTimeout(() => {
    toast.style.opacity = "0";
    toast.style.transform = "translateX(-50%) translateY(10px)";
    setTimeout(() => toast.remove(), 300);
  }, 3000);
}

console.log("StepUp Loaded!");
