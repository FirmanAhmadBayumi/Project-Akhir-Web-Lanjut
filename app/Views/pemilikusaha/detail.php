<!-- Page Content  -->
<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <h3 style="text-align: center; width: 100%;">CareWash</h3>
    </nav>
    <hr>

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

<?= $this->endSection()?>
<?php include('layout/footer.php'); ?>