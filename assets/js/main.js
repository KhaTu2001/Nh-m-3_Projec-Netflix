function validateLogin(){
    let pass = document.login.txtPass;
    let passPattern =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    if(passPattern.test(pass.value) == false){
        let sr_pass = document.getElementById('sr_pass');
        sr_pass.textContent = 'Mật khẩu phải dài tối thiếu';
        sr_pass.style.backgroundColor = 'red';
        pass.focus();
        return false;
    }
    return true;
}
