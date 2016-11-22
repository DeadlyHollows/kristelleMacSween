window.onload = init;
var Forms = document.querySelector("#Form");

function init(){
 
  
document.querySelector("#send").onclick = checkForm;
   

}


function checkEmail(){
	var emailVal = trim(Forms.email.value);
    <!--alert(emailVal);-->
    <!--alert(" its getting to function checkEmail");-->
	
	if(emailVal == ""){
		<!--alert(" ran the if statement");--> 
        document.querySelector("#msgdis").innerHTML = " You forgot to add an email!";
        document.querySelector("#msgdis").className = ".error";
	}else{
       var pattern1 = /[-0-9a-z.+_]+@[-0-9a-z.+_]+\.[a-z]{2,4}/i;
	
	   var emailResult = pattern1.test(emailVal);
	   <!--alert(emailResult);-->
	   if(emailResult == false){
       document.querySelector("#msgdis").innerHTML = "The email you have given us is invalid!";
       document.querySelector("#msgdis").className = ".error";
	   }
        
       else{
       document.querySelector("#msgdis").innerHTML = "We will keep you up to date!";
       document.querySelector("#msgdis").className = ".correct";   
       }
	}
	
	
}


function checkForm(){
	
    <!--alert(" its getting to function checkForm");-->
    checkEmail();
    
    
 return false;   

    
}
    

    
 









