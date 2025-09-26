<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="enquiryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit via WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function sendToWhatsApp() {
        // Get values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        // WhatsApp number (without +)
        const phoneNumber = "918042048479"; // <-- apna number yahan daalein

        // Create WhatsApp message
        const whatsappMessage = `Hello, my name is *${name}* (%0AEmail: ${email})%0A%0A${message}`;

        // Redirect to WhatsApp
        const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(url, "_blank");
    }
</script>
<!-- JavaScript to Handle enquiryForm WhatsApp Redirect -->
<script>
    document.getElementById("enquiryForm").addEventListener("submit", function(e) {
        e.preventDefault();

        // Get form values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        // WhatsApp number (include country code, e.g. 91 for India)
        const phoneNumber = "91 9891415885";

        // Create WhatsApp message
        const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

        // WhatsApp URL
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

        // Open WhatsApp
        window.open(whatsappURL, "_blank");
    });
</script>


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>13,2, RANGAPPA REDDY COMPLEX
                    1ST CROSS, R.V.ROAD BENGALURU
                    KARNATAKA
                    INDIA-560004

                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i>+91 8042048479, 98455 18383
                </p>
                <!-- <p class="mb-2"><i class="fa fa-envelope me-3"></i>sunilk3143@gmail.com</p> -->
                <div class="d-flex pt-2">
                    <a class="btn border border-pill  btn border border-pill -outline-light btn border border-pill -social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn border border-pill  btn border border-pill -outline-light btn border border-pill -social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn border border-pill  btn border border-pill -outline-light btn border border-pill -social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn border border-pill  btn border border-pill -outline-light btn border border-pill -social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Opening Hours</h4>
                <h6 class="text-light">Monday - Friday:</h6>
                <p class="mb-4">09.00 AM - 09.00 PM</p>
                <h6 class="text-light">Saturday - Sunday:</h6>
                <p class="mb-0">09.00 AM - 12.00 PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn border border-pill  btn border border-pill -link" href="">Home</a>
                <a class="btn border border-pill  btn border border-pill -link" href="">About </a>
                <a class="btn border border-pill  btn border border-pill -link" href="">Contact</a>
                <a class="btn border border-pill  btn border border-pill -link" href="">Services </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <p>
                    Subscribe to our newsletter and be the first to know about new
                    carpet collections.
                </p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                    <button type="button" class="btn border border-pill  text-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
                        SignUp
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">ESS ENTERPRISES/a>, All
                        Right Reserved. Designed By
                        <a class="border-bottom" href="https://trade4export.com">Trade4Export</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn border border-pill  btn border border-pill -lg text-secondary btn border border-pill -lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>