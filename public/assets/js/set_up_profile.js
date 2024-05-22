$(document).ready(function() {
   $('#set_up_btn').click(function() {
      $('#start').hide();
      $('#details').show();
   });

    $('#weekly .btn').click(function() {
        $('#plan_list .btn').text('Select').removeClass('selected_plan');
        $(this).text('Selected').removeClass('plan_btn').addClass('selected_plan');    
        $('#plan_type').val('weekly');
        var num = $('#weekly .amount').text();
        $('#payment_amount').val($('#weekly .amount').text());
        $('#payments .amount').text("K"+num);
     });

    $('#monthly .btn').click(function() {
        $('#plan_list .btn').text('Select').removeClass('selected_plan');
        $(this).text('Selected').removeClass('plan_btn').addClass('selected_plan');    
        $('#plan_type').val('monthly');
        var num = $('#monthly .amount').text();
        $('#payment_amount').val($('#monthly .amount').text());
        $('#payments .amount').text("K"+num);
    });

    $('#six_months .btn').click(function() {
        $('#plan_list .btn').text('Select').removeClass('selected_plan');
        $(this).text('Selected').removeClass('plan_btn').addClass('selected_plan');    
        $('#plan_type').val('six months');
        var num = $('#six_months .amount').text();
        $('#payment_amount').val($('#six_months .amount').text());
        $('#payments .amount').text("K"+num);
    });

    $('#annual .btn').click(function() {
        $('#plan_list .btn').text('Select').removeClass('selected_plan');
        $(this).text('Selected').removeClass('plan_btn').addClass('selected_plan');    
        $('#plan_type').val('annual');
        var num = $('#annual .amount').text();
        $('#payment_amount').val($('#annual .amount').text());
        $('#payments .amount').text("K"+num);
    });

    $('#tnm_mpamba').click(function() {
        $('#payments .pay_details').hide();
        $('#tnm_mpamba .pay_details').show();
        $('#payment_option').val('TNM Mpamba');
        $('#payments input[type="text"]').prop('name',false).prop('required', false);
        $('#tnm_mpamba input[type="text"]').prop('name','trans_ID').prop('required', true);
    });

    $('#airtel_money').click(function() {
        $('#payments .pay_details').hide();
        $('#airtel_money .pay_details').show();
        $('#payment_option').val('Airtel Money');
        $('#payments input[type="text"]').prop('name',false).prop('required', false);
        $('#airtel_money input[type="text"]').prop('name','trans_ID').prop('required', true);
    });
});