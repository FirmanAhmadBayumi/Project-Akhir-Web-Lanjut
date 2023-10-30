  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/laporan_keuangan.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function logout() {
      Swal.fire({
        title: 'Apakah kamu yakin ingin keluar?',
        showCancelButton: true,
        confirmButtonText: 'Keluar',
        cancelButtonText: 'Batal',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.href = "logout.php";
        }
      })
    }
  </script>

  </body>

  </html>