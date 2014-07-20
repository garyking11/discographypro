 $(document).ready(function() {
							
jQuery.validator.addMethod(
    "nameRequired",
    function(value, element) {
        if(value.length === 0) { 
		//alert('empty'); 
		return false; } else { 
		//alert('not empty');  
		return true;};
		
    },  "Please enter your name."
);

jQuery.validator.addMethod("require_from_group", function(value, element, options) {
  var selector = options[1];
  var validOrNot = $(selector, element.form).filter(function() {
    return $(this).val();
  }).length >= options[0];

  if(!$(element).data('being_validated')) {
    var fields = $(selector, element);
    fields.data('being_validated', true);
    fields.validOrNot;
	$('label.error').remove();
    fields.data('being_validated', false);
  }

  return validOrNot;
  
}, "Please enter your email or phone number.");
	//jQuery.format("Please enter your email or phone number.")
});