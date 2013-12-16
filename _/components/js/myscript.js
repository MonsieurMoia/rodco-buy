$(document).ready(function(){

	$('#tool').popover({
		html:true,
		content: function() {
			return $('.selected-products-list').html();
		}
	});

});
