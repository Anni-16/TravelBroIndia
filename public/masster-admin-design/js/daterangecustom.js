'use strict';

function customDaterangeFormat () {
	var sessionDateFinal = sessionDate.toUpperCase(); 
	var sepSign = "-";

	var dateFormat = 'YYYY M D';
	var showDateFormat = 'YYYY M D';

	if (sessionDateFinal.includes("/")){
		sepSign = '/';
	} else if (sessionDateFinal.includes(".")) {
		sepSign = '.';
	} else {
		sepSign = '-';
	}

	var dateSep = dateFormat.replace(/ /g,sepSign);

	switch(sessionDateFinal) {
		case 'YYYY' + sepSign + 'MM' + sepSign + 'DD':
				showDateFormat = 'YYYY M D';
				dateSep = showDateFormat.replace(/ /g,sepSign);
			break;
		case 'DD' + sepSign + 'MM' + sepSign + 'YYYY':
				showDateFormat = 'D M YYYY';
				dateSep = showDateFormat.replace(/ /g,sepSign);
			break;

		case 'MM' + sepSign + 'DD' + sepSign+ 'YYYY':
				showDateFormat = 'M D YYYY';
				dateSep = showDateFormat.replace(/ /g,sepSign);
			break;
		case 'DD' + sepSign + 'M' + sepSign + 'YYYY':
				showDateFormat = 'D MMM YYYY';
				dateSep = showDateFormat.replace(/ /g,sepSign);
			break;

		case 'YYYY' + sepSign + 'M' + sepSign + 'DD':
				showDateFormat = 'YYYY MMM D';
				dateSep = showDateFormat.replace(/ /g,sepSign);
			break;
		default:
		
	}

	return {
		dateFormat: dateFormat, 
		showDateFormat: showDateFormat,
		sepSign:sepSign,
		dateSep:dateSep,
	};  
}

function dateRangeBtn (startDate, endDate,dt=null) {
	var df = dt;
	var customFormat =	customDaterangeFormat();
	if(startDate == undefined || !startDate){
		var startDate = moment(0);
		startDate = moment(startDate, customFormat.showDateFormat);
		var endDate   = moment();
		endDate = moment(endDate, customFormat.showDateFormat);
	} else {
		startDate = moment(startDate, customFormat.showDateFormat);
		endDate = moment(endDate, customFormat.showDateFormat);
	}

	var init = moment();
	var initdate;
	if(dt == 1) {
		init = moment(0);
		initdate =  moment(init, customFormat.dateFormat);
		var today = moment();
		today =  moment(today, customFormat.dateFormat);

		$('#daterange-btn').daterangepicker({
			ranges   : {
							'Anytime'	  : [moment(0),moment()],
							'Today'       : [moment(), moment()],
							'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
							'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
							'Last 30 Days': [moment().subtract(29, 'days'), moment()],
							'This Month'  : [moment().startOf('month'), moment().endOf('month')],
							'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
						},
				"autoApply": true,
				"startDate": startDate,
				"endDate": endDate,
				"minDate": initdate,
				"drops": "auto",
			}, function(start, end) {
			
				var startDate        = moment(start, customFormat.showDateFormat).format(customFormat.dateSep);
				$("#startDate").val(startDate);
				var endDate          = moment(end, customFormat.showDateFormat).format(customFormat.dateSep);
				$("#endDate").val(endDate);
				initdate = moment(initdate, customFormat.showDateFormat).format(customFormat.dateSep);
				today = moment(today, customFormat.showDateFormat).format(customFormat.dateSep);
				if (startDate == 'undefined' || endDate == 'undefined') {
					$('#daterange-btn span').html('Pick a date range');
				} else if (startDate == '' || endDate == '' || (startDate === initdate && endDate === today )) {
					$('#daterange-btn span').html('Anytime');
					
				} else {
						startDate = moment(startDate, customFormat.showDateFormat).format(customFormat.dateSep);
						endDate = moment(endDate, customFormat.showDateFormat).format(customFormat.dateSep);
						$("#startDate").val(startDate);
						$("#endDate").val(endDate);
						$('#daterange-btn span').text(startDate + '-' + endDate );
				}
			});
	} else {
		initdate =  moment(init, customFormat.dateFormat);
		$('#daterange-btn').daterangepicker({
				"autoApply": true,
				"alwaysShowCalendars": true,
				"startDate": startDate,
				"endDate": endDate,
				"minDate": initdate,
				"drops": "auto",
			}, function(start, end) {
			
				var startDate        = moment(start, customFormat.showDateFormat).format(customFormat.dateSep);
				$("#startDate").val(startDate);
				var endDate          = moment(end, customFormat.showDateFormat).format(customFormat.dateSep);
				$("#endDate").val(endDate);
					if(startDate=='' && endDate==''){
						$('#daterange-btn span').html('<i class="fa fa-calendar"></i> &nbsp;&nbsp; Pick a date range');
					} else {
							
							startDate = moment(startDate, customFormat.showDateFormat).format(customFormat.dateSep);
							endDate = moment(endDate, customFormat.showDateFormat).format(customFormat.dateSep);
							$("#startDate").val(startDate);
							$("#endDate").val(endDate);
							// $('#daterange-btn span').text(startDate + '-' + endDate );
							if(df == 'single') {
								price_calculation('', '', '');
							}
					}
			});
	}
}


function formDate (startDate, endDate) {
	var customFormat =	customDaterangeFormat();
	var init = moment(0);
	var initdate;
	initdate =  moment(init, customFormat.showDateFormat).format(customFormat.dateSep);
	var today = moment();
	today =  moment(today, customFormat.showDateFormat).format(customFormat.dateSep);



	if(startDate == undefined || !startDate){
		var startDate = moment(0);
		startDate = moment(startDate, customFormat.showDateFormat).format(customFormat.dateSep);
		var endDate   = moment();
		endDate = moment(endDate, customFormat.showDateFormat).format(customFormat.dateSep);
	} else {
		startDate = moment(startDate, customFormat.showDateFormat).format(customFormat.dateSep);
		endDate = moment(endDate, customFormat.showDateFormat).format(customFormat.dateSep);
	}
		
	if (startDate == 'undefined' || endDate == 'undefined') {
		$('#daterange-btn span').html('Pick a date range');
	} else if (startDate == '' || endDate == '' || (startDate === initdate && endDate === today )) {
		$('#daterange-btn span').html('Anytime');
		
	} else {
			startDate = moment(startDate, customFormat.showDateFormat).format(customFormat.dateSep);
			endDate = moment(endDate, customFormat.showDateFormat).format(customFormat.dateSep);
			$("#startDate").val(startDate);
			$("#endDate").val(endDate);
			$('#daterange-btn span').text(startDate + '-' + endDate );
	}
}
