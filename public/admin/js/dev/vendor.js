var host = $("meta[name='host']").attr("content");  
$(document).ready(function(){

	'use strict'

	$(document).on('click', '.deleteProduct', function(){
		var id = $(this).data('id');
		if(confirm('Are you sure want to delete this product?')){
			window.location.href = host+'/product/delete/'+id;
		}
	});
});