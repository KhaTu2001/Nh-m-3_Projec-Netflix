// function validateLogin(){
//     let pass = document.login.txtPass;
//     let passPattern =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
//     if(passPattern.test(pass.value) == false){
//         let sr_pass = document.getElementById('sr_pass');
//         sr_pass.textContent = 'Mật khẩu phải dài tối thiếu';
//         sr_pass.style.backgroundColor = 'red';
//         pass.focus();
//         return false;
//     }
//     return true;
// }

// $(document).ready(function(){
//     $("#inputEmail").change(function(){
//         let emailPattern = /^[0-9]{10}(@e.tlu.vn)$/;
//         if(emailPattern.test($(this).val()) == false){
//             $("#emailHelp").text("Email khong hop le").css("color","red");
//         }
//     })
// })
$(document).ready(function(){
    $("#inputPassword1").change(function(){
        let passPattern =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        if(passPattern.test($(this).val()) == false){
            $("#passlHelp").text("Password khong hop le").css("color","red");
        }
    })
})
