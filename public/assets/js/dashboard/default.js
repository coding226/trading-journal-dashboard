// greeting
var today = new Date()
var curHr = today.getHours()

if (curHr >= 0 && curHr < 4) {
    document.getElementById("greeting").innerHTML = 'Good Night';
    $('.profile-greeting').css('background-image', 'url("../assets/images/dashboard/bg.jpg")');
    document.getElementById("profile-greeting").innerHTML = 'Good Night';
} else if (curHr >= 4 && curHr < 12) {
    document.getElementById("greeting").innerHTML = 'Good Morning';
    $('.profile-greeting').css('background-image', 'url("../assets/images/dashboard/2.jpg")');
} else if (curHr >= 12 && curHr < 16) {
    document.getElementById("greeting").innerHTML = 'Good Afternoon';
    $('.profile-greeting').css('background-image', 'url("../assets/images/dashboard/5.jpg")');
} else {
    document.getElementById("greeting").innerHTML = 'Good Evening';
    $('.profile-greeting').css('background-image', 'url("../assets/images/dashboard/3.jpg")');
}
// time 
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    // var s = today.getSeconds();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    m = checkTime(m);
    // s = checkTime(s);
    document.getElementById('txt').innerHTML =
        h + ":" + m + ' ' + ampm;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
    return i;
}

$(document).ready (function () {
// $('#testbutton').on('click', function () {
    var currenttime = (new Date()).toLocaleString();
    $.ajax({
        type: 'GET',
        url: '/dashboardinfo',
        dataType: 'json',
        data: {
            currenttime: currenttime,
        },
        success:function(data) {
            $('.daily_percentage_gain').text(Math.round(data['inadaypercentagegain']*100)/100);
            $('.weekly_percentage_gain').text(data['inaweekpercentagegain']);
            $('.monthly_percentage_gain').text(data['inamonthpercentagegain']);
            $('.yearly_percentage_gain').text(Math.round(data['inayearpercentagegain']*100)/100);
        }
    });
});

// currently sale
var options = {
    series: [{
        name: 'series1',
        data: [6, 20, 15, 40, 18, 20, 18]
    }, {
        name: 'series2',
        data: [2, 22, 35, 32, 40, 25, 50]
    }],
    chart: {
        height: 240,
        type: 'area',
        toolbar: {
            show: false
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        type: 'category',
        low: 0,
        offsetX: 0,
        offsetY: 0,
        show: true,
        categories: ["Mon", "Tue", "Wen", "Thu", "Fri", "Sat", "Sun"],
        labels: {
            low: 0,
            offsetX: 0,
            show: true,
        },
        axisBorder: {
            low: 0,
            offsetX: 0,
            show: true,
        },
    },
    markers: {
        strokeWidth: 1,
        colors: "#ffffff",
        strokeColors: [ CubaAdminConfig.primary , CubaAdminConfig.secondary ],
        hover: {
            size: 5,
        }
    },
    yaxis: {
        low: 0,
        offsetX: 0,
        offsetY: 0,
        show: true,
        categories: ["Mon", "Tue", "Wen", "Thu", "Fri", "Sat", "Sun"],
        labels: {
            low: 0,
            offsetX: 0,
            show: true,
        },
        axisBorder: {
            low: 0,
            offsetX: 0,
            show: true,
        },
    },
    grid: {
        show: true,
        padding: {
            left: 0,
            right: 0,
            bottom: -15,
            top: -40
        }
    },
    colors: [ CubaAdminConfig.primary , CubaAdminConfig.secondary ],
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.5,
            stops: [0, 80, 100]
        }
    },
    legend: {
        show: false,
    },
    tooltip: {
        x: {
            format: 'MM'
        },
    },
};

var chart = new ApexCharts(document.querySelector("#chart-currently"), options);
chart.render();




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

// market value chart
var options1 = {
    chart: {
        height: 380,
        type: 'radar',
        toolbar: {
            show: false
        },
    },
    series: [{
        name: 'Market value',
        data: [20, 100, 40, 30, 50, 80, 33],
    }],
    stroke: {
        width: 3,
        curve: 'smooth',
    },
    labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    plotOptions: {
        radar: {
            size: 140,
            polygons: {
                fill: {
                    colors: ['#fcf8ff', '#f7eeff']
                },
                
            }
        }
    },
    colors: [ CubaAdminConfig.primary ],
    
    markers: {
        size: 6,
        colors: ['#fff'],
        strokeColor: CubaAdminConfig.primary,
        strokeWidth: 3,
    },
    tooltip: {
        y: {
            formatter: function(val) {
                return val
            }   
        }
    },
    yaxis: {
        tickAmount: 7,
        labels: {
            formatter: function(val, i) {
                if(i % 2 === 0) {
                    return val
                } else {
                    return ''
                }
            }
        }
    }
}

var chart1 = new ApexCharts(
    document.querySelector("#marketchart"),
    options1
);

chart1.render();
