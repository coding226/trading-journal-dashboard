$('.before_img_link').on('change', function (e) {

    var id = $(e.target).attr('id').replace('before_img_link_', '');
    if ($('#before_img_' + id).length > 0) {
        $('#before_img_' + id).attr('src', $(e.target).val());
    } else {
        $('.before_preview').append('<img class="b-r-15" id="before_img_' + id + '" src="' + $(e.target).val() + '" alt="#" style="width:200px">');
    }
});


$('.before_img_file').on('change', function (e) {

    var id = $(e.target).attr('id').replace('before_img_file_', '');
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            if ($('#before_img_' + id).length > 0) {
                $('#before_img_' + id).attr('src', e.target.result);
            } else {
                $('.before_preview').append('<img class="b-r-15" id="before_img_' + id + '" src="' + e.target.result + '" alt="#" style="width:200px">');
            }
        };
        reader.readAsDataURL(this.files[0]);
    }
});


$('#add_before').on('click', function (e) {

    var id = $('.before_img_link').length+1;
    $('#add_before').before('<input class="form-control before_img_link" type="text" id="before_img_link_'+ id +'" name="before_img_link[]"><input class="form-control mt-3 before_img_file" type="file" id="before_img_file_'+ id +'" name="before_img_file[]" >');
});
