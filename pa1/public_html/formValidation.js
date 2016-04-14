function validateForm(defaultPid) {
    var pid = document.getElementById("orderForm").pid.value;
    // DEBUG
    console.log("pid is " + pid);
    if (pid !== defaultPid) {
        return confirm("Product Identifier is different from the page you are on. " +
            "Do you want to continue?");
    }
    
    var quantity = document.getElementById("orderForm").quantity.value;
    // DEBUG
    console.log("quantity is " + quantity);
    if (quantity > 10) {
        alert("We're sorry, you cannot order more than 10 at this time.");
        return false;
    }
    else if (quantity <= 0) {
        alert("Quantity must be greater than 0.");
        return false;
    }
    
    var email = "mjkobaya@uci.edu";
    var subject = "Exotic Fish Order!";
    
    // This doesn't work for some reason
    //window.location.href = "mailto:"+email+'?subject='+subject+'&body='+pid;
    // This one works
    //window.open("mailto:"+email+'?subject='+subject+'&body='+pid);
    //test branch comment
}