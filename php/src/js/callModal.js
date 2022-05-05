function addModal() {
    
    const signUpBody = document.getElementById('signUpBody');
    const signupSuccess = document.getElementById('signupSuccess');
    
    // body tag
    signUpBody.classList.add("modal-open");
    signUpBody.append("<div class='modal-backdrop show'></div>");
    signUpBody.style.overflow= "hidden";
    signUpBody.style.paddingRight= "17px";

    // modal
    signupSuccess.classList.add("show");
    signupSuccess.style.display="block";
    // signupSuccess.setAttribute("class", "show");
    
    console.log("signupSuccess: ", signupSuccess);
     
}

addModal();


function closeModal() {
    const signUpBody = document.getElementById('signUpBody');
    const signupSuccess = document.getElementById('signupSuccess');
    
    // body tag
    signUpBody.classList.remove("modal-open");
    signUpBody.append("<div class='modal-backdrop show'></div>");
    signUpBody.style.overflow= "";
    signUpBody.style.paddingRight= "";

    // modal
    signupSuccess.classList.remove("show");
    signupSuccess.style.display="none";
    // signupSuccess.setAttribute("class", "show");
    
    console.log("signupSuccess: ", signupSuccess);    
}