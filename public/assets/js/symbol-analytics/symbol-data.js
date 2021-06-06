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
        data: symbol_data['wins']
    }, {
        name: 'Losses',
        data: symbol_data['losses']
    }, {
        name: 'Break Even',
        data: symbol_data['bes']
    }],
    xaxis: {
        categories: symbol_data['month'],
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
        data: symbol_data['gain']
    }],
    xaxis: {
        categories: symbol_data['month'],
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

var flag = false;

$('#reportrange').on('change', function() {
    if(flag == false){
        console.log(daterange2);
        $(this).val(daterange2);
        return;
    }
    var daterange = $(this).val().replace(/\s/g, '').split('-');
    var current_url = document.location.href;
    var baseurl = current_url.substr(0, current_url.indexOf('?'));
    var url = baseurl+'?startdate='+daterange[0]+'&enddate='+daterange[1];
    window.location.replace(url);
});

window.onload = function() {
    setTimeout(function(){
        flag = true;
    }, 200);
}