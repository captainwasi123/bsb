var host = $("meta[name='host']").attr("content");

$(document).ready(function() {
    'use strict'


    $(document).on('click', '.vendorStatusCheck', function() {
        var vendor_status = 2;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/vendor/changeStatus/" + user_id + "/" + vendor_status;
        }
    });
})