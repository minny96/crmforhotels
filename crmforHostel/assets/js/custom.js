
(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            /*====================================
            METIS MENU 
            ======================================*/
            $('#main-menu').metisMenu();

            /*====================================
              LOAD APPROPRIATE MENU BAR
           ======================================*/
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });

            /*====================================
         MORRIS AREA CHART
      ======================================*/

            Morris.Area({
                element: 'morris-area-chart',
                data: [{
                    period: '2016',
                    iphone: 0,
                    ipad: 0,
                    itouch: 0
                }, {
                    period: '2017',
                    iphone: 0,
                    ipad: 0,
                    itouch: 0
                }, {
                    period: '2018',
                    iphone: 0,
                    ipad: 0,
                    itouch: 0
                }],
                xkey: 'period',
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['iPhone', 'iPad', 'iPod Touch'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });

            /*====================================
    MORRIS LINE CHART
 ======================================*/
            Morris.Line({
                element: 'morris-line-chart',
                data: [{
                    y: '1',
                    a: 100,
                    b: 90
                }, {
                    y: '2',
                    a: 75,
                    b: 65
                }, {
                    y: '3',
                    a: 50,
                    b: 40
                }, {
                    y: '4',
                    a: 75,
                    b: 65
                }, {
                    y: '5',
                    a: 50,
                    b: 40
                }, {
                    y: '6',
                    a: 75,
                    b: 65
                }, {
                    y: '7',
                    a: 100,
                    b: 90
                }],
                xkey: 'y',
                ykeys: ['a'],
                labels: ['Series A'],
                hideHover: 'auto',
                resize: true
            });
           
     
        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
    });

}(jQuery));
