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
        data: analytics_long_data['wins']
    }, {
        name: 'Losses',
        data: analytics_long_data['losses']
    }, {
        name: 'Break Even',
        data: analytics_long_data['bes']
    }],
    xaxis: {
        categories: analytics_long_data['month'],
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
    document.querySelector("#winlossmonth-graph"),
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
        data: analytics_long_data['gain']
    }],
    xaxis: {
        categories: analytics_long_data['month'],
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
    document.querySelector("#longgainmonth-graph"),
    gainpermonth_option
);

gainpermonth_graph.render();

// long trades_pairs chart
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
        data: analytics_long_data['trades']
    }],
    xaxis: {
        categories: analytics_long_data['symbols'],
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
    document.querySelector("#long-trades-pairs-chart"),
    trades_pairs_option
);

trades_pairs_chart.render();

// long profitable pairs chart
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
        data: analytics_long_data['sum']
    }],
    xaxis: {
        categories: analytics_long_data['sumsymbols'],
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
    document.querySelector("#long-profit-pairs-chart"),
    profit_pairs_option
);

profit_pairs_chart.render();

// right-side-small-chart

(function ($) {
    "use strict";
    $(".knob1").knob({

        'width': 65,
        'height': 65,
        'max': 100,

        change: function (value) {
            //console.log("change : " + value);
        },
        release: function (value) {
            //console.log(this.$.attr('value'));
            console.log("release : " + value);
        },
        cancel: function () {
            console.log("cancel : ", this);
        },
        format: function (value) {
            return value + '%';
        },
        draw: function () {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

                this.cursorExt = 1;

                var a = this.arc(this.cv)  // Arc
                    , pa                   // Previous arc
                    , r = 1;

                this.g.lineWidth = this.lineWidth;

                if (this.o.displayPrevious) {
                    pa = this.arc(this.v);
                    this.g.beginPath();
                    this.g.strokeStyle = this.pColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });
    // Example of infinite knob, iPod click wheel
    var v, up = 0, down = 0, i = 0
        , $idir = $("div.idir")
        , $ival = $("div.ival")
        , incr = function () { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
        , decr = function () { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
    $("input.infinite").knob(
        {
            min: 0
            , max: 20
            , stopper: false
            , change: function () {
                if (v > this.cv) {
                    if (up) {
                        decr();
                        up = 0;
                    } else { up = 1; down = 0; }
                } else {
                    if (v < this.cv) {
                        if (down) {
                            incr();
                            down = 0;
                        } else { down = 1; up = 0; }
                    }
                }
                v = this.cv;
            }
        });
})(jQuery);