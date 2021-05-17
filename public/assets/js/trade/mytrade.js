
$('.trade-del').on('click', function(e){
    var action = $(this).attr('data-href');
    var tradeid = $(this).attr('dataid');
    console.log('action', action);
    console.log('tradeid', tradeid);
    $('#alertmodal form').attr('action', action);
    $('#alertmodal form .modal-body input').attr('name', 'tradeid').val(tradeid);
    $('#alertmodal form .modal-title').text('Delete');
    $('#alertmodal form .modal-body p').text('Are you sure to remove this trade data?');
    $('#alertmodal').modal('show');
});

$('#reportrange').on('change', function(e) {
    console.log($(this).val());
});