
$("#save_account_setting").click(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
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
            console.log(data);
            alert( "Data Saved: " + data );
        }
    });
});

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
            alert( "Data Saved: " + data );
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