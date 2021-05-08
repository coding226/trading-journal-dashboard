// profitability chart
var profitablility_option = {
    chart: {
        width: 480,
        type: 'pie',
    },
    labels: ['Win', 'Loss'],
    series: [75, 25],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }],
    colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary , '#51bb25', '#a927f9', '#f8d62b']
}

var profitablility_chart = new ApexCharts(
    document.querySelector("#profitablility-chart"),
    profitablility_option
);

profitablility_chart.render();


// trades_pairs chart
var trades_pairs_option = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            // endingShape: 'rounded',
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }],
    xaxis: {
        categories: ['GBP/USD', 'EUR/USD', 'CAD/USD', 'AUD/USD', 'NZD/USD', 'GBP/USD', 'JPY/USD', 'CHY/USD', 'HKD/USD'],
    },
    yaxis: {
        title: {
            text: '$ (thousands)'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    },
    colors:[ CubaAdminConfig.primary ]
}

var trades_pairs_chart = new ApexCharts(
    document.querySelector("#trades-pairs-chart"),
    trades_pairs_option
);

trades_pairs_chart.render();

// profitable pairs chart
var profit_pairs_option = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            // endingShape: 'rounded',
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61]
    }],
    xaxis: {
        categories: ['GBP/USD', 'EUR/USD', 'CAD/USD', 'AUD/USD', 'NZD/USD'],
    },
    yaxis: {
        title: {
            text: '% ( Percentage Gain)'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    },
    colors:['#51bb25']
}

var profit_pairs_chart = new ApexCharts(
    document.querySelector("#profit-pairs-chart"),
    profit_pairs_option
);

profit_pairs_chart.render();


// monthly gains chart
var monthly_option = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            // endingShape: 'rounded',
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61]
    }],
    xaxis: {
        categories: ['GBP/USD', 'EUR/USD', 'CAD/USD', 'AUD/USD', 'NZD/USD'],
    },
    yaxis: {
        title: {
            text: '$ (thousands)'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    },
    colors:[ CubaAdminConfig.secondary]
}

var monthly_gains_chart = new ApexCharts(
    document.querySelector("#monthly-chart"),
    monthly_option
);

monthly_gains_chart.render();