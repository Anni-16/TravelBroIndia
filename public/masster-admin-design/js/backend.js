$(document).ready(function(){
  $("#dataTableBuilder").on("click", ".edit_meta", function(){
      var id          = this.id;
      var url         = APP_URL+'/admin/edit_meta';
    $.ajax({
          type: "POST",
          url: url,
          data: {'id':id,method:'get_meta'},
          dataType:'JSON',
          success: function(msg) {
             if(msg.status_check==1){
                $('.edit_id').val(msg.id);
                $('#input_url').val(msg.url);
                $('#input_title').val(msg.title);
                $('#input_description').val(msg.description);
                $('#input_keywords').val(msg.keywords);
             }
          },
          error: function(request, error) {
            console.log(error);
          }
      });
  });

  $(document).on('change', '#calendar_dropdown', function(){
      var year_month = $(this).val();
      year_month     = year_month.split('-');
      var year       = year_month[0];
      var month      = year_month[1];
      set_calendar(month, year);
  });

  $("#update_meta").on("click", function(){

    var edit_id     = $('.edit_id').val();
    var page_url    = $('#input_url').val();
    var title       = $('#input_title').val();
    var description = $('#input_description').val();
    var keywords    = $('#input_keywords').val();
    var url         = APP_URL+'/admin/edit_meta';
    $.ajax({
        type: "POST",
        url: url,
        data: {'edit_id':edit_id,'url':page_url,'title':title,'description':description,'keywords':keywords,method:'update_meta'},
        dataType:'JSON',
        success: function(msg) {
           if(msg.status_check==1){
              $('.edit_id').val(msg.id);
              $('#input_url').val(msg.url);
              $('#input_title').val(msg.title);
              $('#input_description').val(msg.description);
              $('#input_keywords').val(msg.keywords);
              $('#meta_message').css({'display':'block','text-align':'center'});
              $('#meta_message').html(msg.message);
           }else{
              $('#meta_message').css({'display':'none','text-align':'center'});
              $('.input_url').html(msg.url);
              $('.input_title').html(msg.title);
              $('.input_description').html(msg.description);
              $('.input_keywords').html(msg.keywords);
              
           }
        },
        error: function(request, error) {
            console.log(error);
        }
    });
  });
});

  $(document).on('change', '#dtpc_minstay_admin', function() {
	        var minday  = this.value;
	        var maxstay = $("#dtpc_maxstay_admin").val();
	        if(minday>maxstay)
	        {
    	        $("#dtpc_maxstay_admin").val(minday);
                $("#dtpc_maxstay_admin").attr({
                   "min" : minday
                });
	        }
        });
        
        $(document).on('change', '#dtpc_maxstay_admin', function() {
	        var maxday = this.value;
            var minday = $("#dtpc_minstay_admin").val();
            if(maxday<minday || minday=="0" )
	        {
    	        $("#dtpc_minstay_admin").val("1");
                $("#dtpc_minstay_admin").attr({
                   "min" : 1,
                   "max" : maxday
                });
	        }
        });

$(document.body).on('click', '.date-package-modal-admin', function(){
    var fl = $(this).hasClass('tile-previous');
    $('#model-message').html("");
    //if(!fl){
        var sdate = $(this).attr('id');
        var div = sdate.split('-');
        var day = div[2];
        var month = div[1];
        var year = div[0];
        var price = $(this).attr('data-price');
        var minstay = $(this).attr('data-minday');
        var maxstay = $(this).attr('data-maxday');
        var status = $(this).attr('data-status');
        console.log(minstay);
        var date = day+'-'+month+'-'+year;
        $('#dtpc_start_admin').val(date);
        $('#dtpc_end_admin').val(date);
        $('#dtpc_price').val(price);
        
        minstay = minstay.replace(/\s+/g, '');
        maxstay = maxstay.replace(/\s+/g, '');
        
        $('#dtpc_minstay_admin').val(minstay); 
      
        $('#dtpc_maxstay_admin').val(maxstay);
        $('#dtpc_status').val(status).change();

        $("#dtpc_start_admin").datepicker({
            format: "dd-mm-yyyy",
            onSelect: function(date) {
               
            },
        });
        $("#dtpc_end_admin").datepicker({
            format: "dd-mm-yyyy",
            onSelect: function(date) {
                
            },
        });
        $('#hotel_date_package_admin').modal();
    //}
});


//Icalenar Modal Code Starts here

$(document.body).on('click', '.imporpt_calendar', function(){
    $('#import_calendar_package').modal();
});
$(document.body).on('change','#color',function(){
  var color          = $('#color').val();
  if(color=='custom'){
    $('.colorCustom').css('display','block');
  }else{
    $('.colorCustom').css('display','none');
  }

});
$(document.body).on('submit', "#icalendar_form", function(e){
  e.preventDefault();
  $('#error-icalendar-url').html('');
  $('#error-icalendar-name').html('');
  //$('#error-dtpc-frequency-time').html('');
  var url            = $('#icalendar_url').val();
  var name           = $('#icalendar_name').val();
  var property_id    = $('#icalendar_property_id').val();
  //var frequency_time = $('#frequency_time').val();
  var color          = $('#color').val();
  var customColor    = $('#customcolor').val();
  if(color=='custom'){
    if(customColor == '') {
        $('#error-dtpc-customcolor').html('This field is required.');
      }
  }else{
    customColor ='none';
  }
  if(url == '') $('#error-icalendar-url').html('This field is required.');
  if(name == '') $('#error-icalendar-name').html('This field is required.');
  if(color == '') $('#error-dtpc-color').html('This field is required.');
  //checkCustomColor();
  else
  $.ajax({
      type: "POST",
      url: APP_URL+'/admin/ajax-icalender-import/'+property_id,
      data: { '_token' : $('#token').val(), 'url':url, 'name':name,'property_id':property_id,'color':color,'customcolor':customColor},
      success: function(msg){
          if(msg.status==1){
            $('#icalendar-model-message').html(msg.success_message);
            $('#icalendar-model-message').show();
          }else{
            $('#error-icalendar-url').html(msg.error.url);
            $('#error-icalendar-name').html(msg.error.name);
            $('#error-dtpc-customcolor').html(msg.error.customcolor);
            return false;
          }
      },
      error: function(request, error) {
          console.log(error);
      }
  });
});


//Icalendar Modal Code End here

//Icalendar Export Modal Code Starts here

$(document.body).on('click', '#export_icalendar', function(){
    $('#calendar_export_package').modal();
});

//Icalendar Export Modal Code Ends here

$(document.body).on('submit', "#dtpc_form", function(e){
  e.preventDefault();

  $('#error-dtpc-start').html('');
  $('#error-dtpc-end').html('');
  $('#error-dtpc-price').html('');
  $('#error-dtpc-minstay').html('');
  var start_date  = $('#dtpc_start_admin').val();
  var end_date    = $('#dtpc_end_admin').val();
  var price       = $('#dtpc_price').val();
  var status      = $('#dtpc_status').val();
  var min_stay    = $('#dtpc_minstay_admin').val();
  var max_stay    = $('#dtpc_maxstay_admin').val();

  var property_id = $('#dtpc_property_id').val();
  var url         = APP_URL+'/admin/ajax-calender-price/'+property_id;
  var token       = $('input[name="_token"]').val();
  if(start_date == '') $('#error-dtpc-start').html('Start date not given.');
  if(end_date == '') $('#error-dtpc-end').html('End date not given.');
  if(price == '') $('#error-dtpc-price').html('Price not given.');
  else
  $.ajax({
      type: "POST",
      url: url,
      data: { "_token": token, 'start_date':start_date, 'end_date':end_date, 'price':price, 'min_stay':min_stay,'max_stay':max_stay, 'status':status},
      success: function(msg) {
            var year_month = $('#calendar_dropdown').val();
            year_month = year_month.split('-');
            var year = year_month[0];
            var month = year_month[1];
            set_calendar(month, year);
            $('#model-message').html("Data save successfully");
            $('#model-message').show();
            $("#hotel_date_package_admin").modal("hide");
      },
      error: function(request, error) {
          console.log(error);
      }
  });
});

function set_calendar(month, year){
  var property_id = $('#dtpc_property_id').val();
  var dataURL = APP_URL+'/admin/ajax-calender/'+property_id;
  var token = $('input[name="_token"]').val();
  var calendar = '';
  $.ajax({
    url: dataURL,
    data: {"_token":token, 'month': month, 'year': year},
    type: 'post',
    dataType: 'json',
    success: function (result) {
      $('#calender-dv').html(result.calendar);
    },
    error: function (request, error) {
      console.log('error');
    }
  });
}

$(document).on('click', '.month-nav-next', function(e){
  e.preventDefault();
  var year = $(this).attr('data-year');
  var month = $(this).attr('data-month');
  set_calendar(month, year);
});

$(document).on('click', '.month-nav-previous', function(e){
  e.preventDefault();
  var year = $(this).attr('data-year');
  var month = $(this).attr('data-month');
  set_calendar(month, year);
});


