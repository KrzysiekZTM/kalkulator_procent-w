$('.vat_select > label > input[type="radio"]').on('change', function(){
	$('.vat_select > label > input[type="radio"]').parent().removeClass('btn-success');
	$(this).parent().addClass('btn-success');
});

$('#custom_vat').on('focus', function(){
	$('.vat_select > label > input[type="radio"]').parent().removeClass('btn-success');
	$('.vat_select > label > input[type="radio"]').prop('checked', false);

});