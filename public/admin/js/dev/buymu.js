var host = $("meta[name='host']").attr("content");
$(document).ready(function() {

    $(document).on('click', '.buypackage', function() {
        var id = $(this).data('id');
        var element = $(this);
        $.get(host + "/membership/buyMU/" + id, function(data) {
            if (data == '1') {
                $(element).html('<i class="material-icons md-18"> favorite</i>');
            } else {

                $(element).html('<i class="material-icons md-18"> favorite_border </i>');

            }


        });

    });
});




