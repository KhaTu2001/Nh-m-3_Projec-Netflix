//check su kien an login in ma chua nhap du lieu
$(document).ready(function()
{
    var submit = $("#btn_submit");
     
    // bắt sự kiện click vào nút Login
    submit.click(function()
    {
        var username = $("#inputEmail").val();
        var password = $("#inputPassword").val();
         
        // Kiểm tra đã nhập tên tài khoản chưa
        if (username == '') {
            alert('Vui lòng nhập tài khoản');
            return false;
        }
         
        // Kiểm tra đã nhập mật khẩu chưa
        if (password == '') {
            alert('Vui lòng nhập mật khẩu');
            return false;
        }
    })
});

//check mail
$(document).ready(function(){
    $("#inputEmail").change(function(){
        let emailPattern = /\S+@\S+\.\S+/;
        if(emailPattern.test($(this).val()) == false){
            // $("#emailHelp").text("Email khong hop le").css("color","red");
            $('.bi-x-lg').css("display", "inline-block");
            $('.bi-check2').css("display", "none");
            $('#btn').attr("disabled", true);
            $("#btnSubmit1").attr("disabled", true);
        }
        else{
            // $("#emailHelp").text("Email hop le").css("color","red");
            $('.bi-x-lg').css("display", "none");
            $('.bi-check2').css("display", "inline-block");
            $('#btn').attr("disabled", true);
            $('#btnSubmit1').attr("disabled", false);
        }
    })
})
// check dieu kien pass
$(document).ready(function(){
    $("#inputPassword1").change(function(){
        let passPattern =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        if(passPattern.test($(this).val()) == false){
            $("#passlHelp").text("Password khong hop le").css("color","red");
            $("#btnSubmit1").attr("disabled", true);
        }
        else{
            $("#passlHelp").text("Password hop le").css("color","red");
            $('#btnSubmit1').attr("disabled", false);
        }
    })
})
//check confirm pass word sign up

$(document).ready(function(){
    $("#inputPassword2").change(function(){
        var password = $("#inputPassword1").val()
        var password1 = $("#inputPassword2").val() 
        if(password != password1){
            $("#sr_pass1").text("Password khong khop").css("color","red");
            $('#btnSubmit1').attr("disabled", true);
    }
    else{
        $("#sr_pass1").text("Password khop").css("color","red");
        $('#btnSubmit1').attr("disabled", false);
    }
    })
})

    $(document).ready(function(){
        $('.filminfo').click(function(){
            var filmid = $(this).data('id');
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {filmid: filmid},            
                success: function(response) {
                    $('.modal-body').html(response);
                    $('#myModal').modal('show');
             
                }
            });
        });
    });
    

$(document).ready(function(){
    $("#inputPassword2").change(function(){
        var password = $("#inputPassword1").val()
        var password1 = $("#inputPassword2").val() 
        if(password != password1){
            $("#sr_pass1").text("Password khong khop").css("color","red");
    }
    })
})

