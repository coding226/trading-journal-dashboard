
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
    var daterange = $(this).val().replace(/\s/g, '').split('-');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    $.ajax({
        type: "POST",
        cache: false,
        url: '/trade-datefilter',
        dataType: 'json',
        data: {
            startdate: daterange[0],
            enddate: daterange[1],
        },
        success:function(data) {
            $('#trade-table').html(data.html);
            $('.trade-del').on('click', function(e){
                var action = $(this).attr('data-href');
                var tradeid = $(this).attr('dataid');
                $('#alertmodal form').attr('action', action);
                $('#alertmodal form .modal-body input').attr('name', 'tradeid').val(tradeid);
                $('#alertmodal form .modal-title').text('Delete');
                $('#alertmodal form .modal-body p').text('Are you sure to remove this trade data?');
                $('#alertmodal').modal('show');
            });
            TableDatatablesButtons.init();
            feather.replace();
        },
        error: function(xhr,textStatus,thrownError) {
            // alert(xhr + "\n" + textStatus + "\n" + thrownError);
        }
    });
});