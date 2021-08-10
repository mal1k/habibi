var horizontalChart = document.getElementById("horizontal-chart");
var pieChart = document.getElementById('pie-chart')
var doughnutChart = document.getElementById('doughnut-chart')
var polarChart = document.getElementById('polar-chart')

var barOptionsParams = {
    animation: {
        onComplete: () => {
          delayed = true;
        },
        delay: (context) => {
          let delay = 0;
          if (context.type === 'data' && context.mode === 'default' && !delayed) {
            delay = context.dataIndex * 300 + context.datasetIndex * 100;
          }
          return delay;
        },
      },
    tooltips: {
        enabled: true
    },
    hover: {
        animationDuration: 0
    },
    scales: {
        xAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontFamily: "'Open Sans Bold', sans-serif",
                    fontSize: 11
                },
                scaleLabel: {
                    display: false
                },
                gridLines: {
                },
                stacked: true
            }],
            yAxes: [{
            }],
        yAxes: [{
                barPercentage: 1.0,
                categoryPercentage: 1.0,
                barThickness: 10,
                gridLines: {
                    display: false,
                    color: "#fff",
                    zeroLineColor: "#fff",
                    zeroLineWidth: 0
                },
                ticks: {
                    fontFamily: "'Open Sans Bold', sans-serif",
                    fontSize: 11
                },
                stacked: true
            }]
    },
    legend: {
        display: true
    },
    pointLabelFontFamily: "Quadon Extra Bold",
    scaleFontFamily: "Quadon Extra Bold"
};
var myChart1 = new Chart(horizontalChart, {
    type: 'horizontalBar',
    data: {
        labels: ["Кисло-сладкий", "Пряный", "Сладкий", "Свежий"],
        datasets: [{
                data: [60, 0, 20, 35],
                backgroundColor: "rgb(47, 181, 47)",
                hoverBackgroundColor: "rgb(47, 181, 47)",
                label: "Кислый"
            }, {
                data: [0, 65, 0, 5],
                backgroundColor: "rgb(82, 41, 16)",
                hoverBackgroundColor: "rgb(82, 41, 16)",
                label: "Пряный"
            }, {
                data: [30, 20, 70, 0],
                backgroundColor: "rgb(212, 47, 143)",
                hoverBackgroundColor: "rgb(212, 47, 143)",
                label: "Сладкий"
            }, {
                data: [10, 15, 10, 60],
                backgroundColor: "rgba(136,202,247,1)",
                hoverBackgroundColor: "rgba(54,162,235,1)",
                label: "Свежий"
            }
        ]
    },
    options: barOptionsParams
});

var pieDemoChart = new Chart(pieChart, {
    type: 'pie',
    data: {
        labels: ["Facebook", "Twitter", "WhatsApp"],
        datasets: [{
            backgroundColor: ["#4A89DC", "#4FC1E9", "#A0D468"],
            borderColor: "rgba(255,255,255,0.5)",
            data: [7000, 3000, 2000]
  }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontSize: 13,
                padding: 15,
                boxWidth: 12
            },
        },
        tooltips: {
            enabled: true
        },
        animation: {
            duration: 1500
        }
    }
});

var doughnutDemoChart = new Chart(doughnutChart, {
    type: 'doughnut',
    data: {
        labels: ["Apple", "Samsung", "Google"],
        datasets: [{
            backgroundColor: ["#CCD1D9", "#5D9CEC", "#FC6E51"],
            borderColor: "rgba(255,255,255,0.5)",
            data: [5500, 4000, 3000]
  }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontSize: 13,
                padding: 15,
                boxWidth: 12
            },
        },
        tooltips: {
            enabled: true
        },
        animation: {
            duration: 1500
        },
        layout: {
            padding: {
                bottom: 30
            }
        }
    }
});

var polarDemoChart = new Chart(polarChart, {
    type: 'polarArea',
    data: {
        labels: ["Windows", "Mac", "Linux"],
        datasets: [{
            backgroundColor: ["#CCD1D9", "#5D9CEC", "#FC6E51"],
            borderColor: "rgba(255,255,255,0.5)",
            data: [7000, 10000, 5000]
  }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontSize: 13,
                padding: 15,
                boxWidth: 12
            },
        },
        tooltips: {
            enabled: true
        },
        animation: {
            duration: 1500
        },
        layout: {
            padding: {
                bottom: 30
            }
        }
    }
});