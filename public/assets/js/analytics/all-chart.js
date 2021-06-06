// total chart
var total_option = {
    chart: {
        width: 380,
        type: 'donut',
    },
    labels: ['Completed', 'Actives'],
    series: [analytics_all_data['all_count']-analytics_all_data['active_count'], analytics_all_data['active_count']],
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
    colors:[CubaAdminConfig.primary, CubaAdminConfig.secondary, '#dc3545', '#f8d62b', '#51bb25', '#a927f9']
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
    labels: ['Win', 'Loss', 'Breakeven'],
    series: [analytics_all_data['win_count'], analytics_all_data['loss_count'], analytics_all_data['break_count']],
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
    colors:[CubaAdminConfig.primary, CubaAdminConfig.secondary, '#51bb25', '#f8d62b', '#dc3545', '#a927f9']
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
    labels: ['Short', 'Long'],
    series: [analytics_all_data['winshort_count'], analytics_all_data['winlong_count']],
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
    colors:[CubaAdminConfig.primary, CubaAdminConfig.secondary, '#51bb25', '#f8d62b', '#dc3545', '#a927f9']
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
        name: 'Wins',
        data: analytics_all_data['wins']
    }, {
        name: 'Losses',
        data: analytics_all_data['losses']
    }, {
        name: 'Break Even',
        data: analytics_all_data['bes']
    }],
    xaxis: {
        categories: analytics_all_data['month'],
    },
    yaxis: {
        title: {
            text: 'Amount of Trades'
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
        data: analytics_all_data['pgain']
    }],
    xaxis: {
        categories: analytics_all_data['month'],
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

// equity-graph chart
var growthoptions = {
    chart: {
        height: 350,
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
        name: 'Profit Gain',
        data: analytics_all_data['equityx']
    }],
    xaxis: {
        type: 'datetime',
        categories: analytics_all_data['equityy'],
    },
    yaxis: {
        title: {
            text: 'Profit Gain'
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

var chart1 = new ApexCharts(document.querySelector("#equity-graph"),growthoptions);

chart1.render();

// winrate-graph chart
var growthoptions = {
    chart: {
        height: 350,
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
                headerValue: 'value'
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
        name: 'Win Rate',
        data: analytics_all_data['winrate']
    }],
    xaxis: {
        type: 'number',
        categories: analytics_all_data['winratex'],
    },
    yaxis: {
        title: {
            text: '% (Win Rate)'
        }
    },
    tooltip: {
        x: {
            format: 'number'
        },
    },
    colors:[ CubaAdminConfig.primary ],
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

var chart1 = new ApexCharts(document.querySelector("#winrate-graph"),growthoptions);

chart1.render();

var flag = false;

$('#reportrange').on('change', function() {
    if(flag == false){
        console.log(daterange2);
        $(this).val(daterange2);
        return;
    }
    var daterange = $(this).val().replace(/\s/g, '').split('-');
    var baseurl = window.location.origin;
    var url = baseurl+'/analytics?startdate='+daterange[0]+'&enddate='+daterange[1];
    window.location.replace(url);
});

window.onload = function() {
    setTimeout(function(){
        flag = true;
    }, 200);
}
