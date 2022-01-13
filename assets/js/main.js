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
            $('#false1').css("display", "inline-block");
            $('#true1').css("display", "none");
            $("#btnSubmit1").attr("disabled", true);
        }
        else{
            // $("#emailHelp").text("Email hop le").css("color","red");
            $('#false1').css("display", "none");
            $('#true1').css("display", "inline-block");
            $('#btnSubmit1').attr("disabled", false);
        }
    })
})
// check dieu kien pass
$(document).ready(function(){
    $("#inputPassword1").change(function(){
        let passPattern =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        if(passPattern.test($(this).val()) == false){
            $('#false2').css("display", "inline-block");
            $('#true2').css("display", "none");
            $("#btnSubmit1").attr("disabled", true);
        }
        else{
            $('#false2').css("display", "none");
            $('#true2').css("display", "inline-block");
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
            $('#false4').css("display", "inline-block");
            $('#true4').css("display", "none");
            $('#btnSubmit1').attr("disabled", true);
    }
    else{
        $('#false4').css("display", "none");
        $('#true4').css("display", "inline-block");
        $('#btnSubmit1').attr("disabled", false);
    }
    })
})

//check dinh dang sdt.phai la day co 10,dau thuoc nha mang VT,VN,mobi
$(document).ready(function(){
    $("#inputPhone").change(function(){
        let phonePattern =/((09|03|07|08|05)+([0-9]{8})\b)/g;
        if(phonePattern.test($(this).val()) == false){
            $('#false3').css("display", "inline-block");
            $('#true3').css("display", "none");
            $("#btnSubmit1").attr("disabled", true);
        }
        else{
            $('#false3').css("display", "none");
            $('#true3').css("display", "inline-block");
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
