    <!-- FOOTER -->
    <footer class="footer">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <img src="images/logo2.png" alt="StepUp" height="40" class="mb-3" />
            <p class="text-muted mb-3">
              Premium sneakers for those who dare to step up.
            </p>
            <div class="social-links">
              <a href="#" class="me-3"><i class="bi bi-facebook fs-5"></i></a>
              <a href="#" class="me-3"><i class="bi bi-instagram fs-5"></i></a>
              <a href="#" class="me-3"><i class="bi bi-twitter fs-5"></i></a>
              <a href="#"><i class="bi bi-youtube fs-5"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <h6 class="fw-bold mb-3">SHOP</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#products">Men</a></li>
              <li class="mb-2"><a href="#women">Women</a></li>
              <li class="mb-2"><a href="#kids">Kids</a></li>
              <li class="mb-2"><a href="#">Sale</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6">
            <h6 class="fw-bold mb-3">HELP</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#">FAQ</a></li>
              <li class="mb-2"><a href="#">Shipping</a></li>
              <li class="mb-2"><a href="#">Returns</a></li>
              <li class="mb-2">
                <a
                  href="#"
                  data-bs-toggle="modal"
                  data-bs-target="#sizeGuideModal"
                  >Size Guide</a
                >
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6">
            <h6 class="fw-bold mb-3">CONTACT</h6>
            <ul class="list-unstyled text-muted">
              <li class="mb-2">
                <i class="bi bi-geo-alt me-2"></i>Jl. Mawar No. 88, Jakarta
              </li>
              <li class="mb-2">
                <i class="bi bi-envelope me-2"></i>hello@stepup.id
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container text-center py-2">
          <p class="mb-0 text-muted">
            &copy; 2026 StepUp. All Rights Reserved. | Made for UTS Project
          </p>
        </div>
      </div>
    </footer>

    <!-- CART MODAL -->
    <div class="modal fade" id="cartModal" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold">Your Cart</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <div id="cart-items"></div>
            <div class="mt-3 p-3 bg-light rounded">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="selectAllItems"
                  checked
                />
                <label class="form-check-label fw-bold" for="selectAllItems"
                  >Select All Items</label
                >
              </div>
            </div>
            <div
              class="d-flex justify-content-between mt-3 fw-bold fs-5 p-3 bg-light rounded"
            >
              <span>Total (Selected Items):</span>
              <span id="cart-total">Rp 0</span>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button class="btn btn-success" id="checkoutBtn" disabled>
              <i class="bi bi-whatsapp me-2"></i>WhatsApp checkout unavailable
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- SIZE SELECT MODAL -->
    <div class="modal fade" id="sizeSelectModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0">
            <h5 class="modal-title fw-bold">Select Size</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body text-center">
            <img
              id="modalSizeProductImg"
              src=""
              alt="Product"
              class="img-fluid mb-3 rounded"
              style="max-height: 150px"
            />
            <h6 id="modalSizeProductName" class="fw-bold mb-3"></h6>
            <div class="size-grid" id="sizeSelectGrid"></div>
            <small class="text-muted d-block mt-2">
              Select shoe size<br />
              Don't know your size?
              <a
                href="#"
                data-bs-toggle="modal"
                data-bs-target="#sizeGuideModal"
                class="text-decoration-none"
              >
                View Size Guide →
              </a>
            </small>
          </div>
          <div class="modal-footer border-0">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancel
            </button>
            <button type="button" class="btn btn-success" id="confirmAddToCart">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- SIZE GUIDE MODAL -->
    <div class="modal fade" id="sizeGuideModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold">Size Guide</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered text-center">
              <thead class="table-dark">
                <tr>
                  <th>EUR</th>
                  <th>UK</th>
                  <th>US</th>
                  <th>CM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>39</td>
                  <td>6</td>
                  <td>7</td>
                  <td>25.5</td>
                </tr>
                <tr>
                  <td>40</td>
                  <td>7</td>
                  <td>8</td>
                  <td>26.5</td>
                </tr>
                <tr>
                  <td>41</td>
                  <td>8</td>
                  <td>9</td>
                  <td>27.5</td>
                </tr>
                <tr>
                  <td>42</td>
                  <td>9</td>
                  <td>10</td>
                  <td>28.5</td>
                </tr>
                <tr>
                  <td>43</td>
                  <td>10</td>
                  <td>11</td>
                  <td>29.5</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- FLOATING BUTTONS -->
    <button class="back-to-top" id="backToTop">
      <i class="bi bi-arrow-up"></i>
    </button>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
