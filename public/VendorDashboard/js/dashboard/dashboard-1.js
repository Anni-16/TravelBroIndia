

(function($) {
    /* "use strict" */
	
	var dlabChartlist = function(){
	
	var screenWidth = $(window).width();
		var chartBar = function(){
			var options = {
				  series: [
					{
						name: 'Net Profit',
						data: [15, 55, 90, 80, 25, 15, 70],
						//radius: 12,	
					}, 
					{
					  name: 'Revenue',
					  data: [60, 65, 15, 35, 30, 5, 40]
					}, 
					
				],
					chart: {
					type: 'bar',
					height: 350,
					toolbar: {
						show: false,
					},
					
				},
				plotOptions: {
				  bar: {
					horizontal: false,
					columnWidth: '35%',
					endingShape: 'rounded'
				  },
				},
				colors:['var(--secondary)', 'var(--primary)'],
				dataLabels: {
				  enabled: false,
				},
				markers: {
			shape: "circle",
			},
		
		
			legend: {
				show: false,
				fontSize: '12px',
				labels: {
					colors: '#000000',
					
					},
				markers: {
				width: 18,
				height: 18,
				strokeWidth: 0,
				strokeColor: '#fff',
				fillColors: undefined,
				radius: 12,	
				}
			},
			stroke: {
			  show: true,
			  width: 1,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
				
			  categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
			  show: false,
			  }
			},
			yaxis: {
				labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				   fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
			  },
			  },
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
			}
			};

			var chartBar1 = new ApexCharts(document.querySelector("#chartBar"), options);
			chartBar1.render();
	}
	var chartBar1 = function(){
			var options = {
				  series: [
					{
						name: 'Net Profit',
						data: [15, 55, 90, 80, 25, 15, 70],
						//radius: 12,	
					}, 
					{
					  name: 'Revenue',
					  data: [60, 65, 15, 35, 30, 5, 40]
					}, 
					
				],
					chart: {
					type: 'bar',
					height: 350,
					
					toolbar: {
						show: false,
					},
					
				},
				plotOptions: {
				  bar: {
					horizontal: false,
					columnWidth: '35%',
					endingShape: 'rounded'
				  },
				},
				colors:['var(--secondary)', 'var(--primary)'],
				dataLabels: {
				  enabled: false,
				},
				markers: {
			shape: "circle",
			},
		
		
			legend: {
				show: false,
				fontSize: '12px',
				labels: {
					colors: '#000000',
					
					},
				markers: {
				width: 18,
				height: 18,
				strokeWidth: 0,
				strokeColor: '#fff',
				fillColors: undefined,
				radius: 12,	
				}
			},
			stroke: {
			  show: true,
			  width: 1,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
				
			  categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
			  show: false,
			  }
			},
			yaxis: {
				labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				   fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
			  },
			  },
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
			}
			};

			var chartBar1 = new ApexCharts(document.querySelector("#chartBar1"), options);
			chartBar1.render();
	}
	var chartBar2 = function(){
			var options = {
				  series: [
					{
						name: 'Net Profit',
						data: [15, 55, 90, 80, 25, 15, 70],
						//radius: 12,	
					}, 
					{
					  name: 'Revenue',
					  data: [60, 65, 15, 35, 30, 5, 40]
					}, 
					
				],
					chart: {
					type: 'bar',
					height: 350,
					
					toolbar: {
						show: false,
					},
					
				},
				plotOptions: {
				  bar: {
					horizontal: false,
					columnWidth: '35%',
					endingShape: 'rounded'
				  },
				},
				colors:['var(--secondary)', 'var(--primary)'],
				dataLabels: {
				  enabled: false,
				},
				markers: {
			shape: "circle",
			},
		
		
			legend: {
				show: false,
				fontSize: '12px',
				labels: {
					colors: '#000000',
					
					},
				markers: {
				width: 18,
				height: 18,
				strokeWidth: 0,
				strokeColor: '#fff',
				fillColors: undefined,
				radius: 12,	
				}
			},
			stroke: {
			  show: true,
			  width: 1,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
				
			  categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
			  show: false,
			  }
			},
			yaxis: {
				labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
				   fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
			  },
			  },
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
			}
			};

			var chartBar1 = new ApexCharts(document.querySelector("#chartBar2"), options);
			chartBar1.render();
	}
	
	
	
	
	
	
	
	
	
	
	
	
 
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				chartBar();
				chartBar1();
				chartBar2();
				
			},
			
			resize:function(){
			}
		}
	
	}();

	
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dlabChartlist.load();
		}, 1000); 
		
	});

     

})(jQuery);