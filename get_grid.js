
$('#grid_button').on("click", function(){
  // манипуляции с готовой страницей

$.ajax({
		url: 'grid_generator_html1.php',
		type: 'POST',
		cache: false,
		dataType: 'html',
		success:  function(data) {
			//alert(data);
			//$("#response").text(data);
			$("#place_for_grid").html(data);


		}

	});

});


