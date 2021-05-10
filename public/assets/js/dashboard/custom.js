
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

$("#save_other_setting").click(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/othersetting',
        dataType: 'json',
        data: {
            startcapital: $("#startcapital").val(),
            currency: $("#currency").val(),
            withamount: $("#withamount").val()
        },
        success:function(data) {
            alert( "Data Saved: " + data );
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