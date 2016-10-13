$(document).ready(function(){
    $("#opac").css('height',$(document).height()); //la hauteur est fonction du Device navigateur
    $(".modal").css('left',($(document).width()-440)/2); //permet de centre le popus au millieu


    //generate code d'activation par sms
    $("a.modal-active").click(function(){
        $("#opac").fadeIn("low");
        $(".modal").fadeIn("low");
        $('#formCode').fadeOut("fast");
        $("#loading").hide();
        $.post('http://127.0.0.1:8000/sms/validation/generate',{applicationId: 2 })
        .done(function(data){
            $("#loading").fadeOut("fast");
            $('#formCode').fadeIn("slow");
        })
        .fail(function(data){
            $("#Loading").fadeOut("fast");
            $('#failed').fadeIn('slow');
            alert($('#applicationId').val());     
        });
    });
    
    
    
    
    jQuery("#opac, #exit").click(function(){
       $("#opac").fadeOut("low");
       $(".modal").fadeOut("low");        
    });

    //confirm code d'activation recu par sms
    $("#activated").click(function(){
        $.post('http://127.0.0.1:8000/sms/validation/confirm', 
               { activationCode: $('#activationCode').val() , applicationId: '1' },
        function(data) {
        alert(data);
        });

    //generate code
    $('#validateNumber').click(function(){

    });
    });
    
})