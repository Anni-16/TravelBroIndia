$(document).ready(function(){
    $('.birthday-change').on('change', function(){
        var day = $('#day').val();
        var month = $('#month').val();
        var year = $('#year').val();

        if(day != '' && month != '' && year != ''){
            $('#date_of_birth').val(year+'-'+month+'-'+day);
        }
    });

    $('.date-change').on('change', function(){
        var day = $('#day').val();
        var month = $('#month').val();
        var year = $('#year').val();
        var id_name = $(this).attr('data-rel');
        if(day != '' && month != '' && year != ''){
            $('#'+id_name).val(year+'-'+month+'-'+day);
        }
    });

    $('.form-submit-jquery').on('submit', function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        var url = $(this).attr('action');
        var data = ajax_request_formdata(url, formdata);
        if(data.success == 1){
            if(data.message)
                show_success_message(data.message);
        }else if(data.success == 0){
            if(data.message) show_error_message(data.message);
            var field_name, message;
            // errors must contain two parameter for each field 'field_name' and 'message'
            $.each(data.errors, function(key, value){
                field_name = key;
                message = value[0];
                set_error_message_below_field(field_name, message);
            })
        
       }
    });

    //ajax request with formdata parameter
    function ajax_request_formdata(post_url, post_data){
        var result;
        $.ajax({
            url : post_url,
            type : "post",
            async : false,
            data : post_data,
            processData: false,
            contentType: false,
            dataType : 'json',
            //data may contain three part status of 'success', 'message', 'errors' if success is 0 
            success:function(data, textStatus, jqXHR){
                remove_all_error_message();
                result = data;
            },
            error: function(jqXHR, textStatus, errorThrown){
                show_error_message('Network problem.');
                result = [];
            }
        });
        return result;
    };

    function set_error_message_below_field(field_name, message){
        remove_error_message_below_field(field_name);
        $('input[name='+field_name+']').after('<span class="aj-error" id="aj-'+field_name+'" style="color:red">'+message+'</span>');
    }

    function remove_error_message_below_field(field_name){
        $('#aj-'+field_name).remove();
    }

    //ajax request
    function ajax_request(post_url, post_data){
        var result; 
        $.ajax({
            url : post_url,
            type : "post",
            async : false,
            data : post_data,
            dataType : 'json',
            //data must contain two part status of 'success' and 'message'
            success:function(data, textStatus, jqXHR){
                remove_all_error_message();
                result = data;
            },
            error: function(jqXHR, textStatus, errorThrown){
                show_error_message('Network problem.');
                result = [];
            }
        });

        return result;
    };

    function remove_all_error_message(){
        $('.aj-error').remove();
    }

    function remove_individual_error_message(id){
        $('#'+id).remove();
    }

    $('.validate_field').on('keyup change', function(){
        var field_name = '', message = '';
         field_name = $(this).attr('name');  
        if($(this).val() == ''){
            message = 'This field is empty';
            set_error_message_below_field(field_name, message);
        }else{
            remove_error_message_below_field(field_name);
        }
    })

    function show_success_message(message){
        $('#success_message_div').show();
        $('#success_message').html(message);
        $('html, body').animate({scrollTop : 0},800);
        $('#success_message_div').delay(5000).fadeOut('slow');
    };

    function show_error_message(message){
        $('#error_message_div').show();
        $('#error_message').html(message);
        $('html, body').animate({scrollTop : 0},800);
        $('#error_message_div').delay(5000).fadeOut('slow');
    };

    $(document).on('click', '.delete-warning', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        $('#delete-modal-yes').attr('href', url)
        $('#delete-warning-modal').modal('show');
    });
});


