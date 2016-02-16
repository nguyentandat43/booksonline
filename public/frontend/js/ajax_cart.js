
$(document).ready(function() {
	$(".alert").delay(3000).slideUp();
    $(".notifyjs-corner").hide();
    $(".add_to_cart").on("click",function(){
      var id = $(this).attr("data-id");
      $.ajax({
        url : 'http://localhost/booksonline5.0/addtocart/'+id,
        dataType : 'html',
        success: function(result){
			if(result){
				 $(".notifyjs-corner").fadeIn("fast").delay(3000).fadeOut();
         		 $(".item_cart").html(result+" Sản phẩm");
				}
        	}
      	});
    });
	$(".item-remove").on("click",function(){
		var id = $(this).attr("data-id");
		 $.ajax({
			url : 'http://localhost/booksonline5.0/xoa-cart/'+id,
			dataType : 'html',
			success: function(result){
				if(result){
						window.location = 'http://localhost/booksonline5.0/gio-hang';
					}
				}
		});
	});
	$(".update_cart").on("click",function(){
		var id = $(this).attr("data-id");
		var qty = $(".item_cart_"+id).val();
		//alert(qty);
		 $.ajax({
			url : 'http://localhost/booksonline5.0/update-cart/'+id+'/'+qty,
			dataType : 'html',
			success: function(result){
				if(result){
						window.location = 'http://localhost/booksonline5.0/gio-hang';
					}
				}
		});
	});
});