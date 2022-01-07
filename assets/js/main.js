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

// $(document).ready(function (){
//     $("#inputEmail").change(function(){
//         $.ajax({
//             url:'signup_process.php',
//             method:Post,
//             data:{username:$("#userName").val(),email:$("#inputEmail").val(),password: $("#inputPassword1").val()},
//             success:function(data){
//                 if(data > 0){
//                     $("#emailHelp").text("Email da ton tai").css("color","red");
//                 }
               
//             }
//         }
            
//         )
//     })
    
// })

$(document).ready(function(){
    $("#inputEmail").change(function(){
        let emailPattern = /\S+@\S+\.\S+/;
        if(emailPattern.test($(this).val()) == false){
            $("#emailHelp").text("Email khong hop le").css("color","red");
        }
        else{
            $("#emailHelp").text("Email hop le").css("color","red");
        }
    })
})
$(document).ready(function(){
    $("#inputPassword1").change(function(){
        let passPattern =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        if(passPattern.test($(this).val()) == false){
            $("#passlHelp").text("Password khong hop le").css("color","red");
        }
        else{
            $("#passlHelp").text("Password hop le").css("color","red");
        }
    })
})
    