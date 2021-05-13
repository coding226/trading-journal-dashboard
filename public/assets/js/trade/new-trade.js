$('.before_img_link').on('change', function (e) {

    var id = $(e.target).attr('id').replace('before_img_link_', '');
    $('#before_img_file_'+id).val('');
    if ($('#before_img_' + id).length > 0) {
        $('#before_img_' + id).attr('src', $(e.target).val());
    } else {
        $('.before_preview').append('<img class="b-r-15" id="before_img_' + id + '" src="' + $(e.target).val() + '" alt="Unknown Image">');
    }
});


$('.before_img_file').on('change', function (e) {

    var id = $(e.target).attr('id').replace('before_img_file_', '');
    $('#before_img_link_'+id).val('');
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            if ($('#before_img_' + id).length > 0) {
                $('#before_img_' + id).attr('src', e.target.result);
            } else {
                $('.before_preview').append('<img class="b-r-15" id="before_img_' + id + '" src="' + e.target.result + '" alt="Unknown Image">');
            }
        };
        reader.readAsDataURL(this.files[0]);
    }
});


$('#add_before').on('click', function (e) {

    var id = $('.before_img_link').length+1;
    $('#add_before').before('<input class="form-control mt-3 before_img_link" type="text" id="before_img_link_'+ id +'" name="before_img_link_'+ id +'"><input class="form-control mt-3 before_img_file" type="file" id="before_img_file_'+ id +'" name="before_img_file_'+ id +'" >');
    $('#before_img_count').val(id);
    console.log($('#before_img_count').val());
    $('.before_img_link').on('change', function (e) {

        var id = $(e.target).attr('id').replace('before_img_link_', '');
        $('#before_img_file_'+id).val('');
        if ($('#before_img_' + id).length > 0) {
            $('#before_img_' + id).attr('src', $(e.target).val());
        } else {
            $('.before_preview').append('<img class="b-r-15" id="before_img_' + id + '" src="' + $(e.target).val() + '" alt="Unknown Image">');
        }
    });

    $('.before_img_file').on('change', function (e) {

        var id = $(e.target).attr('id').replace('before_img_file_', '');
        $('#before_img_link_'+id).val('');
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                if ($('#before_img_' + id).length > 0) {
                    $('#before_img_' + id).attr('src', e.target.result);
                } else {
                    $('.before_preview').append('<img class="b-r-15" id="before_img_' + id + '" src="' + e.target.result + '" alt="Unknown Image">');
                }
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
    
});

$('#remove_before').on('click', function (e) {
    
    var id = $('.before_img_link').length;
    var preview_id = $('.before_preview img').length;
    if(id > 1){
        $('.before_input .before_img_link').last().remove();
        $('.before_input .before_img_file').last().remove();
        $('#before_img_'+preview_id).remove();
        $('#before_img_count').val(id-1);
        console.log($('#before_img_count').val());
    }
});


$('.after_img_link').on('change', function (e) {

    var id = $(e.target).attr('id').replace('after_img_link_', '');
    $('#after_img_file_'+id).val('');
    if ($('#after_img_' + id).length > 0) {
        $('#after_img_' + id).attr('src', $(e.target).val());
    } else {
        $('.after_preview').append('<img class="b-r-15" id="after_img_' + id + '" src="' + $(e.target).val() + '" alt="Unknown Image">');
    }
});


$('.after_img_file').on('change', function (e) {

    var id = $(e.target).attr('id').replace('after_img_file_', '');
    $('#after_img_link_'+id).val('');
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            if ($('#after_img_' + id).length > 0) {
                $('#after_img_' + id).attr('src', e.target.result);
            } else {
                $('.after_preview').append('<img class="b-r-15" id="after_img_' + id + '" src="' + e.target.result + '" alt="Unknown Image">');
            }
        };
        reader.readAsDataURL(this.files[0]);
    }
});


$('#add_after').on('click', function (e) {

    var id = $('.after_img_link').length+1;
    $('#after_img_count').val(id);
    console.log($('#after_img_count').val());
    $('#add_after').before('<input class="form-control mt-3 after_img_link" type="text" id="after_img_link_'+ id +'" name="after_img_link_'+ id +'"><input class="form-control mt-3 after_img_file" type="file" id="after_img_file_'+ id +'" name="after_img_file_'+ id +'" >');
    
    $('.after_img_link').on('change', function (e) {

        var id = $(e.target).attr('id').replace('after_img_link_', '');
        $('#after_img_file_'+id).val('');
        if ($('#after_img_' + id).length > 0) {
            $('#after_img_' + id).attr('src', $(e.target).val());
        } else {
            $('.after_preview').append('<img class="b-r-15" id="after_img_' + id + '" src="' + $(e.target).val() + '" alt="Unknown Image">');
        }
    });

    $('.after_img_file').on('change', function (e) {

        var id = $(e.target).attr('id').replace('after_img_file_', '');
        $('#after_img_link_'+id).val('');
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                if ($('#after_img_' + id).length > 0) {
                    $('#after_img_' + id).attr('src', e.target.result);
                } else {
                    $('.after_preview').append('<img class="b-r-15" id="after_img_' + id + '" src="' + e.target.result + '" alt="Unknown Image">');
                }
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
    
});

$('#remove_after').on('click', function (e) {
    
    var id = $('.after_img_link').length;
    var preview_id = $('.after_preview img').length;
    if(id > 1){
        $('.after_input .after_img_link').last().remove();
        $('.after_input .after_img_file').last().remove();
        $('#after_img_'+preview_id).remove();
        $('#after_img_count').val(id-1);
        console.log($('#after_img_count').val());
    }
});