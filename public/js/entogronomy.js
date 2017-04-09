$(document).ready(function () {
	//$("form[name='search']").submit(function(e) {
	//	e.preventDefault();
	//	$("#results").html('');
    //
	//	var data = {
	//		'insect_search': $("input[name='insect_search']")[0].value,
	//		'plant_search': $("input[name='plant_search']")[0].value
	//	};
	//	console.log(data);
	//
	//	 $.ajax({
	//		 'url': '/search',
	//	 	 'type': 'POST',
	//	 	 'data': data,
	//		 'dataType': 'json',
	//		 'success': function (search_responses) {
	//			 var html_result = "";
	//			 console.log(search_responses);
	//			 $.each(search_responses, function (index, search_response) {
	//				 html_result += "" +
	//					 "<p>" +
	//					 "<span>" + search_response.interaction.insect.common_name + "</span>" +
	//					 "<span class='red'>" + search_response.interaction.verb + "</span>" +
	//					 "<span>" + search_response.interaction.plant.common_name + "</span>" +
	//					 "</p>";
	//			 });
    //
	//			 $("#results").html(html_result);
	//		 }
	//	 });
	//})
	var insectData = function (request, response) {
		var term = request.term.toLowerCase(); // convert search term to lowercase for case insensitive search
		$.getJSON(
			"api/insects",
			function (insects) {
				results = [];

				// Loop through all of the insects
				$.each(insects, function (index, insect) {

					var commonName = insect.common_name.toLowerCase(); // convert insect common name to lowercase for case insensitive search
					// If the common name starts with the term
					if (commonName.startsWith(term)) {
						results.push(insect.common_name);
					}
				});

				response(results);
			});
	};

	$( "input[name='pest']" ).autocomplete({
		appendTo: "#pest_menu",
		source: insectData
	});

	var plantData = function (request, response) {
		var term = request.term.toLowerCase(); // convert search term to lowercase for case insensitive search
		$.getJSON(
			"api/plants",
			function (plants) {
				results = [];

				// Loop through all of the plants
				$.each(plants, function (index, plant) {

					var commonName = plant.common_name.toLowerCase(); // convert plant common name to lowercase for case insensitive search
					// If the common name starts with the term
					if (commonName.startsWith(term)) {
						results.push(plant.common_name);
					}
				});

				response(results);
			});
	};

	$( "input[name='crop']" ).autocomplete({
		appendTo: "#crop_menu",
		source: plantData
	});
});