
$("#save_account_setting").click(function(e) {
    if($('#firstname').val() == '' || $('#lastname').val() == '' || $('#email').val() == ''){
        $('#alertmodal form .modal-title').text('Failed');
        $('#alertmodal form .modal-footer button').remove();
        $('#alertmodal form .modal-footer a').text('Ok');
        if($('#modalpassword').length > 0){
            $('#modalpassword').remove();
            $('#alertmodal form .modal-footer a').removeAttr('onclick');
        }
        if($('#firstname').val() == ''){
            $('#alertmodal form .modal-body p').text('You should input FirstName');
        }
        else if($('#lastname').val() == ''){
            $('#alertmodal form .modal-body p').text('You should input LastName');
        }
        else if($('#email').val() == ''){
            $('#alertmodal form .modal-body p').text('You should input Email');
        }
        $('#alertmodal').modal('show');
        return false;
    }
    else{
        $('#alertmodal form .modal-title').text('Password Confirmation');
        $('#alertmodal form .modal-body p').text('Please Enter your password to save your changes.');
        $('#alertmodal form .modal-footer button').remove();
        if($('#modalpassword').length == 0){
            $('#alertmodal form .modal-body').append('<input type="password" class="form-control" id="modalpassword"/>');
            $('#alertmodal form .modal-footer a').attr('onclick', 'submitform()');
        }
        $('#alertmodal form .modal-footer a').text('Ok');
        $('#alertmodal').modal('show');
    }
    return false;
});


function submitform() {
    $('#password').val($('#modalpassword').val());
    $('#modalpassword').remove();
    $('#alertmodal form .modal-footer a').removeAttr('onclick');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    // e.preventDefault();
    var formData = new FormData(document.getElementById("mainsettingform"));
    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        cache: false,
        url: '/mainsetting',
        dataType: 'json',
        enctype: 'multipart/form-data',
        // data: {
        //     firstname: $("#firstname").val(),
        //     lastname: $("#lastname").val(),
        //     email: $("#email").val(),
        //     password: $("#password").val(),
        //     subscription: $("#subscription").prop('checked'),
        //     avatar: $("#profile-pic").attr('src')
        // },
        data: formData,
        success:function(data) {
            if(data){
                $('#alertmodal form .modal-title').text('Success');
                $('#alertmodal form .modal-body p').text('Changes has been saved.');
                $('#alertmodal form .modal-footer button').remove();
                $('#alertmodal form .modal-footer a').text('Ok');
            }
            else{
                $('#alertmodal form .modal-title').text('Failed');
                $('#alertmodal form .modal-body p').text('Password is not correct, Please input your correct current password');
                $('#alertmodal form .modal-footer button').remove();
                $('#alertmodal form .modal-footer a').text('Ok');
            }
            $('#alertmodal').modal('show');
        }
    });
}


$("#change_pass_btn").click(function(e) {
    if ($("#newpassword").val() != $("#newpasswordconfirm").val())
        alert("password not matched!")
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/changepassword',
        dataType: 'json',
        data: {
            currenetpassword: $("#currenetpassword").val(),
            newpassword: $("#newpassword").val()
        },
        success:function(data) {
            if(data){
                $('#alertmodal form .modal-title').text('Success');
                $('#alertmodal form .modal-body p').text('New password has been changed.');
                $('#alertmodal form .modal-footer button').remove();
                $('#alertmodal form .modal-footer a').text('Ok');
            }
            else{
                $('#alertmodal form .modal-title').text('Failed');
                $('#alertmodal form .modal-body p').text('Old password is not correct');
                $('#alertmodal form .modal-footer button').remove();
                $('#alertmodal form .modal-footer a').text('Ok');
            }
            $('#alertmodal').modal('show');
        }
    });
});

$("#depwith").click(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = new FormData(document.getElementById("depwithform"));
    $.ajax({
        type: "POST",
        url: '/depositwithdrawal',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false,
        success:function(data) {
            if(data.status){
                $('#alertmodal form .modal-title').text('Success');
                $('#alertmodal form .modal-footer button').remove();
                if(data.status == 1){
                    $('#alertmodal form .modal-body p').text('Your current blanace is '+data.balance);
                }
                else{
                    $('#alertmodal form .modal-body p').text('Successfully done');
                }
                $('#alertmodal').modal('show');
                
            }
            else{
                $('#alertmodal form .modal-title').text('Error');
                $('#alertmodal form .modal-body p').text('Your current balance is not enough to withdrawal requested amount.');
                $('#alertmodal form .modal-footer button').remove();
                $('#alertmodal').modal('show');
            }
        }
    });
});

var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
    $(".file-upload").click();
});

$('#startingbal').on('click', function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = new FormData(document.getElementById("startingbalform"));
    $.ajax({
        type: "POST",
        url: '/setstartingbal',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false,
        success:function(data) {
            if(data.status){
                $('#alertmodal form .modal-title').text('Success');
                $('#alertmodal form .modal-footer button').remove();
                $('#alertmodal form .modal-body p').text('Successfully done');
                $('#alertmodal').modal('show');
            }
            else{
                $('#alertmodal form .modal-title').text('Error');
                $('#alertmodal form .modal-body p').text('You have got Error');
                $('#alertmodal form .modal-footer button').remove();
                $('#alertmodal').modal('show');
            }
        }
    });
});


$('#stsubuser').on('change', function() {
    $.ajax({
        type: "GET",
        url: '/getstartingbal',
        dataType: 'json',
        data:{
            subuser : $(this).val()
        },
        success:function(data) {
            $('#stamount').val(data);
        }
    });
});