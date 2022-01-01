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
function validateSignup(){
    let pass = document.Signup.txtPass1;
    let passPattern =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    if(passPattern.test(pass.value) == false){
        let sr_pass = document.getElementById('sr_pass');
        sr_pass.textContent = 'Mật khẩu phải dài tối thiếu 8 ki tu';
        sr_pass.style.backgroundColor = 'red';
        pass.focus();
        return false;
    }
    // let pass1 = document.Signup.txtPass2;
    // if(pass1.value != pass.value){
    //     let sr_pass1 = document.getElementById('sr_pass1');
    //     sr_pass1.textContent = 'Mat khau nhap lai khong dung';
    //     sr_pass1.style.backgroundColor = 'red';
    //     pass1.focus();
    // }
    // return true;
}
