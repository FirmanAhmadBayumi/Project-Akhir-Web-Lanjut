// =============  Data Table - (Start) ================= //

$(document).ready(function () {
  var table = $("#transaksi").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "pdf",
        text: "Cetak",
        filename: "Data Keuangan CareWash",
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});

// =============  Data Table - (End) ================= //
