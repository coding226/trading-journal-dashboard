// total chart
var total_option = {
    chart: {
        width: 380,
        type: 'donut',
    },
    series: [44, 55, 41, 17, 15],
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
    colors:['#dc3545', '#f8d62b', CubaAdminConfig.primary , '#51bb25', '#a927f9']
}

var total_chart = new ApexCharts(
    document.querySelector("#total-chart"),
    total_option
);

total_chart.render();

// short / long chart
var short2long_option = {
    chart: {
        width: 380,
        type: 'donut',
    },
    series: [44, 55, 41, 17, 15],
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
    colors:['#dc3545', '#f8d62b', CubaAdminConfig.primary , '#51bb25', '#a927f9']
}

var short2long_chart = new ApexCharts(
    document.querySelector("#short2long-chart"),
    short2long_option
);

short2long_chart.render();


// winning short / long chart
var winshort2long_option = {
    chart: {
        width: 380,
        type: 'donut',
    },
    series: [44, 55, 41, 17, 15],
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
    colors:['#dc3545', '#f8d62b', CubaAdminConfig.primary , '#51bb25', '#a927f9']
}

var winshort2long_chart = new ApexCharts(
    document.querySelector("#wininshort2long-chart"),
    winshort2long_option
);

winshort2long_chart.render();


// winlossmonthly chart
var winlossmonthly_option = {
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
            endingShape: 'rounded',
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
        name: 'Break Even',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Losses',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }, {
        name: 'Wins',
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }],
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
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
    colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary , '#51bb25']
}

var winlossmonthly_graph = new ApexCharts(
    document.querySelector("#winlossmonthly-graph"),
    winlossmonthly_option
);

winlossmonthly_graph.render();



// gain per month chart
var gainpermonth_option = {
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
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: true
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Gain',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }],
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    },
    yaxis: {
        title: {
            text: '% (Percentage Gain)'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " %"
            }
        }
    },
    colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary , '#51bb25']
}

var gainpermonth_graph = new ApexCharts(
    document.querySelector("#gainpermonth-graph"),
    gainpermonth_option
);

gainpermonth_graph.render();