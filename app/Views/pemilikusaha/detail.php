<?= $this->extend('layouts/pelanggan/header') ?>

<?= $this->section('content') ?>
<div id="content" class="p-4 p-md-5" >
   <br><br><br>

    <div id="chart"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.3/dist/apexcharts.min.js"></script>

<script>
  var options = {
  series: [
    {
      name: "CareWash",
      data: [4200000, 6000000, 7000000, 10000000, 6000000, 5000000, 7000000, 8000000, 9000000, 6000000, 9000000, 8000000],
    },
  ],
  chart: {
    height: 350,
    type: "area",
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
  },
  xaxis: {
    categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sept",
        "Oct",
        "Nov",
        "Des",
    ],
  },
  yaxis: {
    title: {
        text: "Pendapatan",
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

</script>

<footer id="footer">

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Care Wash</h3>
                <p>
                    Universitas Lampung <br>
                    Bandar Lampung, Lampung<br>
                    Indonesia<br><br>
                    <strong>Phone:</strong> +62 1234 5678 90<br>
                    <strong>Email:</strong> carewash@example.com<br>
                </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div>

        </div>
    </div>
</div>

<div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
            &copy; Copyright <strong><span>Carewash Company</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">Kelompok 10</a>
        </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
</div>
</footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor-1 JS Files -->
    <script src="/assets/vendor-1/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor-1/aos/aos.js"></script>
    <script src="/assets/vendor-1/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor-1/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor-1/php-email-form/validate.js"></script>
   
    <!-- Template Main JS File -->
    <script src="/assets/js/main.js'"></script>

</body>

</html>

<?= $this->endSection() ?>