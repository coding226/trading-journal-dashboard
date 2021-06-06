
$("#new_subaccount").click(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = new FormData(document.getElementById("newsubaccountform"));
    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        cache: false,
        url: '/create_subaccount',
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
                $('#alertmodal form .modal-body p').text('');
            }
            else{
                $('#alertmodal form .modal-title').text('Failed');
                $('#alertmodal form .modal-body p').text('');
            }
            $('#alertmodal').modal('show');
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