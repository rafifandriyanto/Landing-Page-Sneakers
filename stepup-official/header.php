<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StepUp - Just Step It</title>
    <link rel="icon" href="images/logo-favicon2.png" />

    <!-- External Libraries -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
  <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="images/logo2.png" alt="StepUp" height="40"
        /></a>
        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#women">Women</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#kids">Kids</a></li>

            <li class="nav-item ms-2">
              <a
                class="nav-link position-relative"
                href="#"
                data-bs-toggle="modal"
                data-bs-target="#cartModal"
              >
                <i class="bi bi-bag fs-5"></i>
                <span
                  class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                  id="cart-count"
                  >0</span
                >
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

