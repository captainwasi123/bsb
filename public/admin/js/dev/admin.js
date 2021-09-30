var host = $("meta[name='host']").attr("content");

$(document).ready(function() {
    'use strict'

    //Vendor

    $(document).on('click', '.approveVendor', function() {
        var vendor_status = 2;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/vendor/changeStatus/" + user_id + "/" + vendor_status;
        }
    });

    $(document).on('click', '.rejectVendor', function() {
        var vendor_status = 3;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/vendor/changeStatus/" + user_id + "/" + vendor_status;
        }
    });

    $(document).on('click', '.featureVendor', function() {
        var is_feature = 1;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to become Feature ?')) {
            window.location.href = host + "/vendor/featureStatus/" + user_id + "/" + is_feature;
        }
    });

    $(document).on('click', '.unfeatureVendor', function() {
        var is_feature = 2;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to Remove Feature Vendor?')) {
            window.location.href = host + "/vendor/featureStatus/" + user_id + "/" + is_feature;
        }
    });

    //Users

    $(document).on('click', '.rejectUser', function() {
        var vendor_status = 2;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/users/changeStatus/" + user_id + "/" + vendor_status;
        }
    });
    $(document).on('click', '.approveUser', function() {
        var vendor_status = 1;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/users/changeStatus/" + user_id + "/" + vendor_status;
        }
    });

    //Product

    $(document).on('click', '.rejectProduct', function() {
        var vendor_status = 2;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/changeStatus/" + product_id + "/" + vendor_status;
        }
    });

    $(document).on('click', '.publishProduct', function() {
        var vendor_status = 1;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/changeStatus/" + product_id + "/" + vendor_status;
        }
    });
})