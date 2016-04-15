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
    
    var fname = document.getElementById("orderForm").fname.value;
    var lname = document.getElementById("orderForm").lname.value;
    var fnameMatches = fname.match(/\d+/g);
    if (fnameMatches != null) {
        // DEBUG
        console.log("fname " + fname + " contains a number");
        alert("First name shouldn't have numeric digits.");
        return false;
    }
    
    var lnameMatches = lname.match(/\d+/g);
    if (lnameMatches != null) {
        // DEBUG
        console.log("lname " + lname + " contains a number");
        alert("Last name shouldn't have numeric digits.");
        return false;
    }
    
    var phoneNum = document.getElementById("orderForm").phoneNum.value;
    if (phoneNum.length > 10) {
        alert("Phone number should be 10 digits or less.");
        return false;
    }
    
    var creditCard = document.getElementById("orderForm").creditCard.value;
    if (creditCard.length > 16) {
        alert("Credit card number should be 16 digits or less.");
        return false;
    }
    
    var email = "mjkobaya@uci.edu";
    var subject = "Exotic Fish Order!";
    var body = "pid: " + pid + "%0Aquantity: " + quantity + "%0Afirst name: " +
            fname + "%0Alast name: " + lname + "%0AphoneNum: " + phoneNum +
            "%0Acredit card number: " + creditCard;
    
    // This doesn't work for some reason
    //window.location.href = "mailto:"+email+'?subject='+subject+'&body='+pid;
    // This one works
    window.open("mailto:"+email+'?subject='+subject+'&body='+body);
}