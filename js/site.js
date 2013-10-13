$(document).ready(function() {
	jQuery('.ipWidget-IpImageGallery li a, .ipWidget-IpImage a').colorbox({
		rel:'ipwImage',
		maxWidth:'90%',
		maxHeight:'90%'
	});
});
$('.thumbnail').click(function(){
	console.log("clisk");
	$('.modal-body').empty();
	var title = $(this).parent('a').attr("title");
	$('.modal-title').html(title);
	$($(this).parents('div').html()).appendTo('.modal-body');
	$('#myModal').modal({show:true});
});