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
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <style>
    .owl-nav-custom {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 20px;
    }

    .owl-nav-custom .nav-btn {
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #0d6efd;
      background: #fff;
      color: #0d6efd;
      border-radius: 50%;
      font-size: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .owl-nav-custom .nav-btn:hover {
      background: #0d6efd;
      color: #fff;
      box-shadow: 0 6px 18px rgba(13, 110, 253, 0.25);
      transform: scale(1.05);
    }

    .team-item img {
      height: 250px;
      /* set uniform height */
      width: 100%;
      /* full width of the container */
      object-fit: cover;
      /* crop image to fill without stretching */
    }
  </style>

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
      <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Services
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Service Start -->
  <div class="container-xxl service py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">// Our Services //</h6>
        <h1 class="mb-5">What We Offer</h1>
      </div>
      <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-lg-4">
          <div class="nav w-100 nav-pills me-4">
            <!-- Tab 1 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill"
              data-bs-target="#tab-pane-1" type="button">
              <i class="fa fa-th-large fa-2x me-3"></i>
              <h4 class="m-0">Vinyl Flooring</h4>
            </button>
            <!-- Tab 2 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
              data-bs-target="#tab-pane-2" type="button">
              <i class="fa fa-border-style fa-2x me-3"></i>
              <h4 class="m-0">Carpets</h4>
            </button>
            <!-- Tab 3 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
              data-bs-target="#tab-pane-3" type="button">
              <i class="fa fa-cubes fa-2x me-3"></i>
              <h4 class="m-0">False Flooring</h4>
            </button>
            <!-- Tab 4 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
              data-bs-target="#tab-pane-4" type="button">
              <i class="fa fa-border-all fa-2x me-3"></i>
              <h4 class="m-0">False Ceiling</h4>
            </button>
            <!-- Tab 5 -->
            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
              data-bs-target="#tab-pane-5" type="button">
              <i class="fa fa-tree fa-2x me-3"></i>
              <h4 class="m-0">Wooden Flooring</h4>
            </button>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="tab-content w-100">

            <!-- Tab 1: Vinyl Flooring -->
            <div class="tab-pane fade show active" id="tab-pane-1">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/vinlyflooringservice.jpg"
                      style="object-fit: cover" alt="Vinyl Flooring" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Vinyl Flooring</h3>
                  <p class="mb-4">
                    Durable, stylish, and cost-effective vinyl flooring — perfect for modern homes and commercial
                    spaces.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Water-Resistant</p>
                  <p><i class="fa fa-check text-success me-3"></i>Easy to Maintain</p>
                  <p><i class="fa fa-check text-success me-3"></i>Available in Multiple Designs</p>
                  <a href="contact.php" class="btn border border-pill  text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 2: Carpets -->
            <div class="tab-pane fade" id="tab-pane-2">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/carpetservice.jpg"
                      style="object-fit: cover" alt="Carpets" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Carpets</h3>
                  <p class="mb-4">
                    Elegant and comfortable carpets that add luxury, warmth, and style to any interior.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Soft & Durable</p>
                  <p><i class="fa fa-check text-success me-3"></i>Variety of Patterns</p>
                  <p><i class="fa fa-check text-success me-3"></i>Perfect for Homes & Offices</p>
                  <a href="contact.php" class="btn border border-pill  text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 3: False Flooring -->
            <div class="tab-pane fade" id="tab-pane-3">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/falsefloorcard.jpg"
                      style="object-fit: cover" alt="False Flooring" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">False Flooring</h3>
                  <p class="mb-4">
                    Smart and functional false flooring solutions designed for easy access and modern infrastructure.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Strong & Reliable</p>
                  <p><i class="fa fa-check text-success me-3"></i>Convenient Maintenance Access</p>
                  <p><i class="fa fa-check text-success me-3"></i>Ideal for Offices & IT Spaces</p>
                  <a href="contact.php" class="btn border border-pill  text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 4: False Ceiling -->
            <div class="tab-pane fade" id="tab-pane-4">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/falseceiling.jpg"
                      style="object-fit: cover" alt="False Ceiling" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">False Ceiling</h3>
                  <p class="mb-4">
                    Stylish and modern false ceiling designs that enhance aesthetics, insulation, and lighting.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Acoustic & Thermal Benefits</p>
                  <p><i class="fa fa-check text-success me-3"></i>Wide Design Choices</p>
                  <p><i class="fa fa-check text-success me-3"></i>Perfect for Homes & Offices</p>
                  <a href="contact.php" class="btn border border-pill  text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tab 5: Wooden Flooring -->
            <div class="tab-pane fade" id="tab-pane-5">
              <div class="row g-4">
                <div class="col-md-6" style="min-height: 350px">
                  <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/woodenfloor.jpg"
                      style="object-fit: cover" alt="Wooden Flooring" />
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="mb-3">Wooden Flooring</h3>
                  <p class="mb-4">
                    Premium wooden flooring crafted for timeless elegance, durability, and natural warmth.
                  </p>
                  <p><i class="fa fa-check text-success me-3"></i>Elegant & Durable</p>
                  <p><i class="fa fa-check text-success me-3"></i>Easy to Maintain</p>
                  <p><i class="fa fa-check text-success me-3"></i>Enhances Interiors</p>
                  <a href="contact.php" class="btn border border-pill  text-secondary py-3 px-5 mt-3">
                    Read More<i class="fa fa-arrow-right ms-3"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- footer -->
  <?Php include('footer.php') ?>