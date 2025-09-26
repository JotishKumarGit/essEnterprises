<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ESS ENTERPRIES</title>
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link
    href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
    rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-primary"
      style="width: 3rem; height: 3rem"
      role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- header -->
  <?php include('header.php') ?>
  <!-- page-header -->
  <div
    class="container-fluid page-header mb-5 py-5"
    style="
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
          url(img/carpet.jpg) center center no-repeat;
        background-size: cover;
      ">
    <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">
        Wooden Flooring
      </h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Wooden Flooring
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- products details -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Wooden Flooring Image -->
        <div class="col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
          <img
            src="img/woodenfloor.jpg"
            alt="Wooden Flooring"
            class="img-fluid rounded shadow-sm"
            style="width: 100%; height: 500px; object-fit: cover" />
        </div>

        <!-- Wooden Flooring Details -->
        <div class="col-md-6 mt-4 mt-md-0 wow fadeInUp" data-wow-delay="0.5s">
          <h1 class="fw-bold text-dark mb-3">
            Classic – Elegant, Durable, Timeless
            <span class="text-primary">Wooden Flooring</span>
          </h1>
          <h5 class="text-muted mb-3">
            Transform your space with warmth and sophistication — ideal for
            homes and offices.
          </h5>

          <p class="text-secondary">
            Our wooden flooring is crafted from premium quality materials to
            provide strength, durability, and a timeless aesthetic. Available
            in a variety of finishes, colors, and textures, it enhances the
            beauty of any interior while offering long-lasting performance and
            easy maintenance.
          </p>

          <h6 class="fw-bold mt-4">Key Features:</h6>
          <ul class="list-unstyled">
            <li>✔ Premium Quality Wood</li>
            <li>✔ Elegant & Timeless Designs</li>
            <li>✔ Durable & Long-Lasting</li>
            <li>✔ Easy to Clean & Maintain</li>
            <li>✔ Suitable for Residential & Commercial Spaces</li>
          </ul>

          <a
            href="#"
            class="btn btn-primary text-light fw-bold px-4 mt-3 shadow-sm"
            data-bs-toggle="modal"
            data-bs-target="#enquiryModal"
            data-product="Wooden Flooring">
            Enquiry Now
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include('footer.php') ?>