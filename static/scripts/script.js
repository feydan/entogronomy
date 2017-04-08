$(document).ready(function () {
	$("form[name='search']").submit(function(e) {
		e.preventDefault();
		$("#results").html('');

		var data = {
			'insect_search': $("input[name='insect_search']")[0].value,
			'plant_search': $("input[name='plant_search']")[0].value
		};
		console.log(data);
		
		 $.ajax({
			 'url': '/search',
		 	 'type': 'POST',
		 	 'data': data,
			 'dataType': 'json',
			 'success': function (search_responses) {
				 var html_result = "";
				 console.log(search_responses);
				 $.each(search_responses, function (index, search_response) {
					 html_result += "" +
						 "<p>" +
						 "<span>" + search_response.interaction.insect.common_name + "</span>" +
						 "<span class='red'>" + search_response.interaction.verb + "</span>" +
						 "<span>" + search_response.interaction.plant.common_name + "</span>" +
						 "</p>";
				 });

				 $("#results").html(html_result);
			 }
		 });
	})
})