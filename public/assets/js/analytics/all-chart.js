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