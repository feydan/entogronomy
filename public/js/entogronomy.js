var cacheData = {};

$(document).ready(function () {
	// returns autocomplete data from the specified route
	var autocompleteFetch = function (route) {
		return function (request, response) {
			var term = request.term.toLowerCase(); // convert search term to lowercase for case insensitive search
			var filterList = function (list) {
				var results = [];
				$.each(list, function (index, item) {
					// If the common name starts with the term
					if (item.common_name.toLowerCase().startsWith(term)) {
						results.push(item.common_name);
					}
				});
				return results;
			};
			if (cacheData.hasOwnProperty(route)) {
				response(filterList(cacheData[route]));
			} else {
				$.getJSON(
					route,
					function (serverList) {
						// Loop through all of the insects
						response(filterList(serverList));
					}
				);
			}

		};
	};

	$( "input[name='insect_name']").autocomplete({
		appendTo: "#insect_menu",
		source: autocompleteFetch('api/insects')
	});

	$( "input[name='plant_name']").autocomplete({
		appendTo: "#plant_menu",
		source: autocompleteFetch('api/plants')
	});

	$("form[name='search']").submit(function(e) {
		e.preventDefault();
		var values = $(this).serialize();
		$.post('api/interactions', values, function () {
			window.location.href = "index.html";
		})
	});

	$("#drop-area-div").dmUploader({
		url: 'api/image',
		maxFiles: 1,
		onUploadSuccess: function(id, image_url){
			$("input[name='image_url']").val(image_url);
			console.log('We reach the end of the upload Queue!');
			console.log('Succefully upload #' + id);
			console.log('Server response was:');
		}
	});
});


var x = document.getElementById("demo");

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	var latlon = position.coords.latitude + "," + position.coords.longitude;
	$("input[name='lat']").val(position.coords.latitude);
	$("input[name='long']").val(position.coords.longitude);

	var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
		+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
	document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
//To use this code on your website, get a free API key from Google.


function showError(error) {
	switch(error.code) {
		case error.PERMISSION_DENIED:
			x.innerHTML = "User denied the request for Geolocation."
			break;
		case error.POSITION_UNAVAILABLE:
			x.innerHTML = "Location information is unavailable."
			break;
		case error.TIMEOUT:
			x.innerHTML = "The request to get user location timed out."
			break;
		case error.UNKNOWN_ERROR:
			x.innerHTML = "An unknown error occurred."
			break;
	}
}

function previewFile(){
	var preview = document.querySelector('img'); //selects the query named img
	var file    = document.querySelector('input[type=file]').files[0]; //sames as here
	var reader  = new FileReader();

	reader.onloadend = function () {
		preview.src = reader.result;
	};

	if (file) {
		reader.readAsDataURL(file); //reads the data as a URL
	} else {
		preview.src = "";
	}
}

previewFile();  //calls the function named previewFile()