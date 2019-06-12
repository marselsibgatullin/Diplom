function changeAccount(e){
    let studForm = document.getElementById("stud-form");
    let empForm = document.getElementById("emp-form");
    if (e.value == 'student'){
        studForm.classList.remove('invis');
        empForm.classList.add('invis');
    }
    else {
        empForm.classList.remove('invis');
        studForm.classList.add('invis');
    }
}

function checkPass() { 
    
       if(((document.getElementById ('inputPassword').value.length > 5) && document.getElementById ('inputPassword').value == document.getElementById('inputPasswordRepeat').value) && (document.getElementById('inputPassword').value != "") && (document.getElementById('inputPasswordRepeat').value != "")){
        document.getElementById ('inputPasswordIcon').classList.remove('fa-lock');
        document.getElementById ('inputPasswordIcon').classList.remove('fa-times');
        document.getElementById ('inputPasswordIcon').classList.add('fa-check');
        document.getElementById ('inputPasswordIcon').classList.remove('text-danger');
        document.getElementById ('inputPasswordIcon').classList.add('text-success');
        document.getElementById ('button').disabled = false;
       }else{
        document.getElementById ('inputPasswordIcon').classList.remove('fa-lock');
        document.getElementById ('inputPasswordIcon').classList.remove('fa-check');
        document.getElementById ('inputPasswordIcon').classList.add('fa-times');
        document.getElementById ('inputPasswordIcon').classList.remove('text-success');
        document.getElementById ('inputPasswordIcon').classList.add('text-danger');
        document.getElementById ('button').disabled = true; 
       }
}