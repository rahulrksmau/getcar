// JavaScript Document

function varify(){
	   
	   //var data  = getElementbyclass('data');
	   var name   = document.getElementById('name').value;
	   var fname  = document.getElementById('fname').value;
	   var mname  = document.getElementById('mname').value;
	   var contact= document.getElementById('contact').value;
	   var male   = document.getElementById('male').value;
	   var female = document.getElementById('female').value;
	   
	   if(name==''){
		      alert('Name is required');
			  return false;
		   }
	  
	   if(fname==''){
  		      alert("Father's name is required");
			  return false;
		   }
	   if(mname==''){
		      alert("Mother's name is required");
			  return false;
		   }
	   if(contact==''){
		      alert('Contact number is required');
			  return false;
		   }	
	   if(male==''&& female==''){
		     alert('Gender is required');
		   }      	  
	}