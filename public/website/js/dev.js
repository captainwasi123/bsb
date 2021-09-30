var host = $("meta[name='host']").attr("content");
$(document).ready(function() {

    $(document).on('click', '.favproduct', function() {
        var id = $(this).data('id');
        var element = $(this);
       
        $.get(host + "/product/fav/" + id, function(data) {
            if (data == '1') {
                $(element).html('');
            } else {

                $(element).html('');

            }


        });

        

    });

    consol.log(response.id);
});
