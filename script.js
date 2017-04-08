var search_response = {
	"interaction": {
	  	"insect": {
			'common_name': 'Cucumber Beetle',
			'description': 'eats cucumbers',
			'image_url': 'https://google.com/images/cucumber_beeble.jpg'
	  	},
	  	"plant": {
			'common_name': 'Cucumber',
			'description': 'delicious',
			'image_url': 'https://google.com/images/cucumber.jpg'
	  	},
		"type": "negative",
		"verb": "Consumes",
		"location": "College Park"
	}
};

$(document).ready(function () {
	$("form[name='search']").submit(function(e) {
		e.preventDefault()
		var data = {
			'insect_search': $("input[name='insect_search']")[0].value,
			'plant_search': $("input[name='plant_search']")[0].value
		}

		html_result = ""+
			"<p>" +
			"<span>" + data.insect_search + "</span>" +
			"<span class='red'>" + search_response.interaction.verb + "</span>" +
			"<span>" + data.plant_search + "</span>" +
			"</p>";

		$("#results").html(html_result);
		
		// $.ajax({
		// 	'type': 'post',
		// 	'body': data
		// }, function (search_response){
			
		// 	html_result = ""+
		// 	"<p>" +
		// 	"<span>" + search_response.interaction.insect.common_name + "</span>" +
		// 	"<span class='red'>" + search_response.interaction.verb + "</span>" +
		// 	"<span>" + search_response.interaction.plant.common_name + "</span>" +
		// 	"</p>";

		// 	$("#results").html(html_result);
		// })
	})
})