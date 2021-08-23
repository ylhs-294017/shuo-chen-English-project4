function sendMail(){
    var getemail = jQuery('#email').val();
    console.log(getemail);
    if(getemail != ''){
    jQuery('#emailSendResult').html('Mail Sending...');
    $.ajax({
    url:'submitform.php',
    data:{email:getemail},
    method: 'POST',
    success: function(data){
    jQuery('#emailSendResult').html(data);
    }
    });
    }else{
    jQuery('#emailSendResult').html('Please Enter All Required Fields.');
    }
    }