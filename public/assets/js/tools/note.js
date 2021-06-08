$('#indexcolor').on('change', function() {
    $(this).removeClass().addClass('form-control text-light '+$(this).val());
});

$('.noteimage').on('change', function (e) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.noteimageshow').attr('src', e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }
});

$('.notedel').on('click', function(e){
    var action = $(this).attr('data-href');
    var noteid = $(this).attr('dataid');
    $('#alertmodal form').attr('action', action);
    $('#alertmodal form .modal-body input').attr('name', 'noteid').val(noteid);
    $('#alertmodal form .modal-title').text('Delete');
    $('#alertmodal form .modal-body p').text('Are you sure to remove this note data?');
    $('#alertmodal').modal('show');
});