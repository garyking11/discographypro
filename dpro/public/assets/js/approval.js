$(document).ready(function() {
	$('#approved').on('click', function() {
		
		var name = $('#component_name').val();
	
				if($('#approved').prop('checked')) {
				$("#approval").html( '<span class="">' +  name + ' is approved for discography.</span>');
	
		} else {
		
				var name = $('#component_name').val();
				$("#approval").html( '<span class="">' +  name + ' is pending approval for discography.</span>');
		
		}
	});
});