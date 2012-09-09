/* Author:

*/

/* =====================================
Instantiate FlexSliders
====================================== */

// https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties
jQuery(window).load(function() {
	jQuery('.flexslider').flexslider({
		animation      : Modernizr.touch ? "slide" : "fade",
		touch          : true,
		useCSS         : true,
		directionNav   : true,
		easing         : "swing",
		slideshowSpeed : 7000,
		animationSpeed : 600
  });
});


/* ====================================
Instantiate FancyBox
===================================== */

jQuery(window).load(function() {
	jQuery("a.fancybox").fancybox({
		'hideOnContentClick': false,
		'transitionIn'      : 'elastic',
		'transitionOut'		: 'elastic',
		'speedIn'           : 600,
		'speedOut'          : 200
	});
	
	jQuery("a.iframe").fancybox({
		'hideOnContentClick': false,
		'transitionIn'      : 'elastic',
		'transitionOut'     : 'elastic',
		'speedIn'           : 600,
		'speedOut'          : 200
	});
});


/* ====================================
Instantiate HighCharts
===================================== */

var chart;
jQuery(document).ready(function() {
   chart = new Highcharts.Chart({
      chart: {
         renderTo: 'dev-stats', //provide location of single chart
         defaultSeriesType: 'bar', //provide chart type
         backgroundColor: 'transparent',
         showAxes: false,
         plotShadow: true,
         height: 250
      },
      title: {
         text: null
      },
      xAxis: {
         title: {
            text: null
         },
         labels: {
            enabled: false
         }
      },
      yAxis: {
         title: {
            text: null
         }
      },
      tooltip: {
         formatter: function() {
            return ''+
                this.series.name +': '+ this.y +'%';
         }
      },
      credits: {
         enabled: false
      },
      legend: {
         enabled: false
      },
      plotOptions: {
         bar: {
            dataLabels: {
               enabled: false
            },
            marker: {
               enabled: false
            }
         }
      },

      series: [
         {
            name: 'Ruby on Rails',
            data: [3]
         }, {
            name: 'jQuery / JavaScript',
            data: [20]
         },  {
            name: 'SharePoint',
            data: [40]
         },  {
            name: 'PHP / MySQL',
            data: [55]
         }, {
            name: 'HTML / CSS',
            data: [85]
         }
      ]
   });
});


var chart;
jQuery(document).ready(function() {
   chart = new Highcharts.Chart({
      chart: {
         renderTo: 'design-stats',
         backgroundColor: 'transparent',
         plotBorderWidth: null,
         plotShadow: true,
         height: 250
      },
      title: {
         text: null
      },
      tooltip: {
         formatter: function() {
            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
         }
      },
      credits: {
         enabled: false
      },
      legend: {
         enabled: false
      },
      plotOptions: {
         pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
               enabled: false
            },
            showInLegend: true
         }
      },
       series: [{
         type: 'pie',
         data: [
            ['Photography',    10],
            ['Adobe Creative Suite',   20],
            ['Grid Systems',       30],
            ['Typography',    10],
            {
               name: 'Psychology',
               y: 30,
               sliced: true,
               selected: true
            }
         ]
      }]
   });
});


/* ====================================
Instantiate ieAlert
===================================== */


jQuery(document).ready(function() {
   jQuery("body").iealert( {
      title: "Please, update your browser!",
      text: "This site is built on Web standards &amp; best practices. If you would like to improve your Web browsing experince please install Google Chrome or update to the latest version of your favorite browser."
   });
});

