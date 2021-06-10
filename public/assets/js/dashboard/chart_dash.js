// profitability chart
var profitablility_option = {
    chart: {
        width: 480,
        type: 'pie',
    },
    labels: ['Win', 'Loss'],
    series: [dash_data['win'], dash_data['loss']],
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
    colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary , '#f8d62b', '#51bb25', '#a927f9']
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
        name: 'Number Of Trades',
        data: dash_data['trades']
    }],
    xaxis: {
        categories: dash_data['symbols'],
    },
    yaxis: {
        title: {
            text: 'Number Of Trades'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val
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
        name: 'Percentage Gain',
        data: dash_data['sum']
    }],
    xaxis: {
        categories: dash_data['sumsymbols'],
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
                return val + '%'
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


// area growth chart
var growthoptions = {
    chart: {
        height: 405,
        type: 'area',
        toolbar:{
            show: true,
            offsetX: 0,
            offsetY: 0,
            tools: {
                download: true,
                selection: true,
                zoom: true,
                zoomin: true,
                zoomout: true,
                pan: true,
                reset: true | '<img src="/static/icons/reset.png" width="20">',
                customIcons: []
            },
            export: {
              csv: {
                filename: undefined,
                columnDelimiter: ',',
                headerCategory: 'category',
                headerValue: 'value',
                dateFormatter(timestamp) {
                  return new Date(timestamp).toDateString()
                }
              },
              svg: {
                filename: undefined,
              },
              png: {
                filename: undefined,
              }
            },
            autoSelected: 'zoom' 
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    series: [{
        name: 'Percentage Gain',
        data: dash_data['growthy']
    }],
    xaxis: {
        type: 'datetime',
        categories: dash_data['growthx'],
    },
    yaxis: {
        title: {
            text: '% (Percentage Gain)'
        }
    },
    tooltip: {
        x: {
            format: 'dd/MM/yyyy HH:mm'
        },
    },
    colors:[ CubaAdminConfig.secondary ],
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.5,
            stops: [0, 80, 100]
        }
    },
}

var chart1 = new ApexCharts(document.querySelector("#chart-currently"),growthoptions);

chart1.render();

// currently sale
// var growthoptions = {
//     series: [{
//         name: 'Percentage Gain',
//         data: dash_data['growthy']
//     }],
//     chart: {
//         height: 240,
//         type: 'area',
//         toolbar: {
//             show: false
//         },
//     },
//     dataLabels: {
//         enabled: false
//     },
//     stroke: {
//         curve: 'smooth'
//     },
//     xaxis: {
//         type: 'category',
//         low: 0,
//         offsetX: 0,
//         offsetY: 0,
//         show: true,
//         categories: dash_data['growthx'],
//         labels: {
//             low: 0,
//             offsetX: 0,
//             show: true,
//         },
//         axisBorder: {
//             low: 0,
//             offsetX: 0,
//             show: true,
//         },
//     },
//     markers: {
//         strokeWidth: 1,
//         colors: "#ffffff",
//         strokeColors: [ CubaAdminConfig.secondary , CubaAdminConfig.primary ],
//         hover: {
//             size: 5,
//         }
//     },
//     yaxis: {
//         title: {
//             text: '% (Percentage Gain)'
//         }
//     },
//     grid: {
//         show: true,
//         padding: {
//             left: 0,
//             right: 0,
//             bottom: -15,
//             top: -40
//         }
//     },
//     colors: [ CubaAdminConfig.secondary , CubaAdminConfig.primary ],
//     fill: {
//         type: 'gradient',
//         gradient: {
//             shadeIntensity: 1,
//             opacityFrom: 0.7,
//             opacityTo: 0.5,
//             stops: [0, 80, 100]
//         }
//     },
//     legend: {
//         show: false,
//     },
//     tooltip: {
//         x: {
//             format: 'MM'
//         },
//     },
// };

// var chart = new ApexCharts(document.querySelector("#chart-currently"), growthoptions);
// chart.render();


$('.tsymbol-chart a').on('click', function(e) {
    $('#dropdownMenuButton1').text($(this).text());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/drawdashchart',
        dataType: 'json',
        data: {
            chart: 'tsymbol',
            type: $(this).text(),
        },
        success:function(data) {
            console.log(data);
            trades_pairs_option['series'][0]['data'] = data['trades'];
            trades_pairs_option['xaxis']['categories'] = data['symbols'];
            $('#trades-pairs-chart').html('');
            var trades_pairs_chart = new ApexCharts(document.querySelector("#trades-pairs-chart"),trades_pairs_option);
            trades_pairs_chart.render();
        }
    });
});


$('.psymbol-chart a').on('click', function(e) {
    $('#dropdownMenuButton2').text($(this).text());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/drawdashchart',
        dataType: 'json',
        data: {
            chart: 'psymbol',
            type: $(this).text(),
        },
        success:function(data) {
            console.log(data);
            profit_pairs_option['series'][0]['data'] = data['sum'];
            profit_pairs_option['xaxis']['categories'] = data['symbols'];
            $('#profit-pairs-chart').html('');
            var profit_pairs_chart = new ApexCharts(document.querySelector("#profit-pairs-chart"),profit_pairs_option);
            profit_pairs_chart.render();
        }
    });
});