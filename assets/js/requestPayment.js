/**
 * Created by severin_mbekou on 9/27/16.
 */
$(document).ready(function(){
    
    $('#submit').click(function(){
        $phoneNumber = $('#phoneNumber').val();
        $amount = $('#amount').val();
        $token = 'YTQ0NjRjZjY5ZDY2YzExNTU4ZmRjMmJmYjk3M2QzNzAzMTY3ZjZiNGUwMWNkODI3NzBhMjI0NDI5ODY2OTEyMA';
        //alert('Amount : ' +$amount +' Phone Number '+ $phoneNumber);
        
                  //670992438
        var requestDeposit = {
           'phoneNumber': $phoneNumber,
           'amount': $amount,
          }
     
    $.ajax({
        url: 'http://api.severinmbekou.xyz/api/mtn/momo/v1/deposit',
        type: 'POST',
        dataType: 'json',
        contentType: "application/json",
        crossDomain: true,
        headers: {'Authorization': 'Bearer ' + $token},
        'data': requestDeposit,
      success: function(data){
        console.log(data)
      },
     error: function(jqXHR, textStatus, errorThrown)   {
                    console.log(textStatus + errorThrown);
                }

    })
 
    })

});