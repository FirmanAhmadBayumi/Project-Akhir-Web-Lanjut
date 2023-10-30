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
