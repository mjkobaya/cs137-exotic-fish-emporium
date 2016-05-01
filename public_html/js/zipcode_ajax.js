// Javascript function to do Ajax call for zipcodes

function getZipcode(zipcode) {
	// DEBUG
	console.log("zipcode: " + zipcode);

	$.ajax({url: "php/zipcode.php", success: function(result){
        console.log(result);
    }});
}