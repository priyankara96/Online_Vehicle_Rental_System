
function checkPassword(){
	
	 if(document.getElementById("cvc").value != document.getElementById("recvc").value){
		  alert("CVC number is incorrect");
		 return false;
	  }	 
	   
     else{
		   alert("Your payment is successful");
	      return true;
	  }
     
}





	