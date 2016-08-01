/**
 * Compiled by Sirus Das
 */
/*
* Code for Ajax Contact request
* Remember not to use json
*/
$(document).ready(function(){
	//$(".loader1").show();$(".loader2").show();$(".loader3").show();
	$("#idForm").submit(function() {
		$(".loader1").show();$(".loader2").show();$(".loader3").show();
    	$.ajax({
    		  type: "POST",
    		  data: $("#idForm").serializeArray(),
    		  url: $("#idForm").attr('action'),
    		  success: function(data) {
    			  if(data == "1"){
    				  $(".loader3").hide();$(".loader2").hide();$(".loader1").hide();
    				  $("#msg").html("<h5>Message has been sent, Thank You !!!</h5>");
    				  $("#msg").delay(4000).fadeOut();
    				  $('#idForm')[0].reset();
    				  //$("#idForm").find("input[type=text], textarea, input[type=email]").val("");
    			  }else{
    				  $(".loader3").hide();$(".loader2").hide();$(".loader1").hide();
    		         $("#msg").html("<h5>"+data+"</h5>");
    		         $("#msg").delay(4000).fadeOut();
    			  }
    		  }
    		});
    	return false;
    });
});
