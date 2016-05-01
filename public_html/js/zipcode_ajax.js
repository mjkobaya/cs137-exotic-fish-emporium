// Javascript function to do Ajax call for zipcodes

function getZipcode(zipcode) {
	// DEBUG
	console.log("zipcode: " + zipcode);

	$.ajax({url: "demo_test.txt", success: function(result){
        $("#div1").html(result);
    }});
}