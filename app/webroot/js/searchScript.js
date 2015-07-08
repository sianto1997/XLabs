$(document).ready(function(){
		$('.searchbar').keyup(function() {
			$.ajax({                    
			url:'/xlabs/results',
			type:"POST",                                        
			//dataType:'text',
			success: function(data) {
			  $('#content').html(data);
			}
		});
	});
});
