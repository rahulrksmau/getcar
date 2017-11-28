// JavaScript Document
function validate(){
		      var user = document.getElementById('user_email').value;
			  var pass = document.getElementById('password').value;
			     if(user =="" || pass==''){
				     alert('invalid input data');
				         return false;
				        }
			         else{
				         return true;
				       }	  
		  }
$(document).ready(function(e) {
    $('#log').click(function(e) {
        $('#login').fadeIn(100);
		$('#blackbox').fadeIn(100); });
	$('#blackbox').click(function(e) {
         $('#login').fadeOut(100);
        $('#blackbox').fadeOut(100);
    });
});
       